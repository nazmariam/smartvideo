<?php
add_filter('widget_text','do_shortcode');

add_theme_support('menus');
add_theme_support('post-thumbnails');

//security hooks
require 'admin/security_hooks.php';

//dashboard customization
require 'admin/admin_customizations.php';

// Common scripts and styles
function sh_scripts_styles()
{
    // Connect styles
    wp_enqueue_style('st_style', get_template_directory_uri() . '/css/stolen.min.css');
    wp_enqueue_style('sh_style', get_template_directory_uri() . '/css/main.min.css');

    // Connect script without register
	wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '1.0', true);
	wp_enqueue_script('sh_scripts', get_template_directory_uri() . '/js/main.min.js', array(), '1.0', true);
}
// Create action where we connected scripts and styles in function shevchenko_scripts_styles
add_action('wp_enqueue_scripts', 'sh_scripts_styles', 1);

//custom locations for menus
function sh_register_menus() {
    register_nav_menu( 'header', __( 'Top menu', 'theme-slug' ) );
    register_nav_menu( 'footer', __( 'Footer menu', 'theme-slug' ) );
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

//Videos custom post type
function videos_post_type() {
	register_post_type( 'videos',
		array(
			'labels' => array(
				'name' => __( 'Videos' ),
				'singular_name' => __( 'Video' )
			),
			'menu_icon' => 'dashicons-video-alt3',
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'videos'),
			'supports'            => array( 'title', /*'editor',*/ 'excerpt', 'thumbnail'),
			'exclude_from_search' => true,
			'taxonomies'  => array( 'category' ),
			'hierarchical'        => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'can_export'          => true,
		)
	);

	function video_url_meta_box() {
		add_meta_box(
			'video_url', // $id
			'Video URL', // $title
			'show_video_url_meta_box', // $callback
			'videos', // $screen
			'advanced', // $context
			'high' // $priority
		);
	}
	add_action( 'add_meta_boxes', 'video_url_meta_box' );

	function show_video_url_meta_box() {
		global $post;
		$meta = get_post_meta( $post->ID, 'video_url', true );
		?>
        <input type="hidden" name="video_url_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">
        <input type="url" name="video_url" id="video_url" class="regular-text" value="<?php echo $meta; ?>">

	<?php }

	function save_video_url_meta( $post_id ) {
		// verify nonce
		if ( !isset($_POST['video_url_meta_box_nonce'])
		     || !wp_verify_nonce( $_POST['video_url_meta_box_nonce'], basename(__FILE__) ) ) {
			return $post_id;
		}
		// check autosave
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return $post_id;
		}
		// check permissions
		if ( 'videos' === $_POST['post_type'] ) {
			if ( !current_user_can( 'edit_page', $post_id ) ) {
				return $post_id;
			} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
				return $post_id;
			}
		}

		$old = get_post_meta( $post_id, 'video_url', true );
		$new = $_POST['video_url'];

		if ( $new && $new !== $old ) {
			update_post_meta( $post_id, 'video_url', $new );
		} elseif ( '' === $new && $old ) {
			delete_post_meta( $post_id, 'video_url', $old );
		}
	}
	add_action( 'save_post', 'save_video_url_meta' );
}
add_action( 'init', 'videos_post_type' );