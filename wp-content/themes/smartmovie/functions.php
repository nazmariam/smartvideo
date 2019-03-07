<?php
add_filter('widget_text','do_shortcode');

add_theme_support('menus');
add_theme_support('post-thumbnails');

//security hooks
require 'admin/security_hooks.php';

//dashboard customization
require 'admin/admin_customizations.php';

// Start session
add_action( 'init', 'sh_start_session', 1 );
function sh_start_session() {
    // start session only for authorized users
    if( !session_id() ) {
        session_start();
    }
}

// Common scripts and styles
function sh_scripts_styles()
{
    // Connect styles
    wp_enqueue_style('sh_style', get_template_directory_uri() . '/css/main.min.css');

    // Connect script without register
    wp_enqueue_script('sh_scripts', get_template_directory_uri() . '/js/main.min.js', array(), '1.0', true);
}
// Create action where we connected scripts and styles in function shevchenko_scripts_styles
add_action('wp_enqueue_scripts', 'sh_scripts_styles', 1);

//custom locations for menus
function sh_register_menus() {
    register_nav_menu( 'header', __( 'Top menu', 'theme-slug' ) );
    register_nav_menu( 'footer', __( 'Footer menu', 'theme-slug' ) );
    register_nav_menu( 'header_btn', __( 'header btn', 'theme-slug' ) );
    register_nav_menu( 'float_btn', __( 'float btn', 'theme-slug' ) );
}
add_action( 'after_setup_theme', 'sh_register_menus' );

// create widget for Contacts page
register_sidebar(array(
    'name' => 'Contacts page form',
    'id' => 'form-contacts',
    'before_widget' => '<div class="form-content">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="h2 title"><span class="contact_icon">',
    'after_title' => '</span></h2>',
));

//Prices post type
function sh_create_prices_posttype() {
    register_post_type( 'prices',
        array(
            'labels' => array(
                'name' => __( 'Prices' ),
                'singular_name' => __( 'Price' )
            ),
            'menu_icon' => 'dashicons-admin-page',
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'prices'),
            'supports'            => array( 'title', 'editor', 'thumbnail'),
            'exclude_from_search' => true,
            'hierarchical'        => false,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'can_export'          => true,
            'taxonomies'          => array('price_category'),
        )
    );

    $labels = array(
        'name'                       => _x( 'Price category', 'taxonomy general name', 'textdomain' ),
        'singular_name'              => _x( 'Price category', 'taxonomy singular name', 'textdomain' ),
        'search_items'               => __( 'Search price categories', 'textdomain' ),
        'popular_items'              => __( 'Popular price categories', 'textdomain' ),
        'all_items'                  => __( 'All price categories', 'textdomain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit price category', 'textdomain' ),
        'update_item'                => __( 'Update price category', 'textdomain' ),
        'add_new_item'               => __( 'Add New price category', 'textdomain' ),
        'new_item_name'              => __( 'New price category', 'textdomain' ),
        'separate_items_with_commas' => __( 'Separate price category with commas', 'textdomain' ),
        'add_or_remove_items'        => __( 'Add or remove price category', 'textdomain' ),
        'choose_from_most_used'      => __( 'Choose from the most used price categories', 'textdomain' ),
        'not_found'                  => __( 'No price categories found.', 'textdomain' ),
        'menu_name'                  => __( 'Price categories', 'textdomain' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'price_category' ),
    );

    register_taxonomy( 'price_category', 'prices', $args );

    function sh_pricing_meta_box() {
        add_meta_box(
            'price_meta', // $id
            'Price items', // $title
            'sh_show_price_meta', // $callback
            'prices', // $screen
            'advanced', // $context
            'high' // $priority
        );
    }
    add_action( 'add_meta_boxes', 'sh_pricing_meta_box' );

    function sh_show_price_meta() {
        global $post;
        $meta = [];
        $count = 1;
        $meta = get_post_meta( $post->ID, 'price_meta', true );

        if (is_array($meta)){
            $count = count($meta);
            for ($i = 0; $i<$count; $i++){
                echo '<div class="price_box">
                <span class="button price_del">
					<i class="fa fa-trash-o" aria-hidden="true" title="удалить цену"></i>
				</span>
				<div class="form-group">
					<label for="price">Опис та ціна послуги (0 означає "договірна"):</label>
					<input type="text" class="desc" name="price[' . $i . '][desc]" value="' . $meta[$i]['desc'] . '">
					<input type="number" class="price" name="price[' . $i . '][price]" value="' . $meta[$i]['price'] . '" max="9999">
					<span> грн</span>
				</div>
			</div>';
            }
        } else {
            echo '<div class="price_box">
                <span class="button price_del">
					<i class="fa fa-trash-o" aria-hidden="true" title="удалить цену"></i>
				</span>
				<div class="form-group">
					<label for="price">Опис та ціна послуги (0 означає "договірна"):</label>
					<input type="text" class="desc" name="price[0][desc]" value="">
					<input type="number" class="price" name="price[0][price]" value="" max="9999">
                    <span> грн</span>
				</div>
			</div>';
        }
        ?>
        <div class="button add_price" data-count="<?=$count;?>">Додати послугу</div>
        <input type="hidden" name="sh_show_price_meta_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">
    <?php }

    function sh_save_price_meta( $post_id ) {
        // verify nonce
        if ( !isset($_POST['sh_show_price_meta_nonce'])
            || !wp_verify_nonce( $_POST['sh_show_price_meta_nonce'], basename(__FILE__) ) ) {
            return $post_id;
        }
        // check autosave
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return $post_id;
        }
        // check permissions
        if ( 'history' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }
        }

        $old = get_post_meta( $post_id, 'price_meta', true );
        $new = $_POST['price'];

        if ( $new && $new !== $old ) {
            update_post_meta( $post_id, 'price_meta', $new );
        } elseif ( '' === $new && $old ) {
            delete_post_meta( $post_id, 'price_meta', $old );
        }
    }
    add_action( 'save_post', 'sh_save_price_meta' );
}
add_action( 'init', 'sh_create_prices_posttype' );