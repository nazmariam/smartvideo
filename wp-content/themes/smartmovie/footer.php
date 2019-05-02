<?php
?>
</main>

<div class="popup-wrapper">
    <div class="popup">
        <iframe width="auto" src="" frameborder="0" allowfullscreen id="iframe"></iframe>
<!--        <a class="button" id="order" href="#">Замовити</a>-->
<!--	    --><?php //get_template_part('partials/social-share-page'); ?>
    </div>
</div>

<footer class="footer">
    <div class="container columns">
        <div class="column">
            <h2>Контакти</h2>
            <div class="col_box">
		        <?php get_template_part('partials/footer_contacts'); ?>
            </div>
        </div>
        <div class="column">
            <h2>Ми в мережі</h2>
            <div class="col_box">
		        <?php get_template_part('partials/footer_social'); ?>
            </div>
        </div>
        <?php
        if (!is_page('contacts')){
            ?>
            <div class="column" id="contacts">
		        <?php
		        if ( is_active_sidebar( 'form-contacts' ) ) {
			        dynamic_sidebar( 'form-contacts' );
		        }
		        ?>
            </div>
            <?php
        }
        ?>

    </div>
    <div class="container copy">
        <div>&copy; SmartMovie <?=date('Y')?></div>
        <div>created by <a href="https://fedirko.pro">FEDIRKO.PRO</a></div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>