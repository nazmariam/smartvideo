<?php
?>
</main>

<footer class="footer">
    <div class="container columns">
        <div class="column">
            <h2>КОНТАКТЫ</h2>
            <div class="col_box">
		        <?php get_template_part('partials/footer_contacts'); ?>
            </div>
        </div>
        <div class="column">
            <h2>МЫ В СЕТИ</h2>
            <div class="col_box">
		        <?php get_template_part('partials/footer_social'); ?>
            </div>
        </div>
        <div class="column">
	        <?php
                if ( is_active_sidebar( 'form-contacts' ) ) {
                    dynamic_sidebar( 'form-contacts' );
                }
            ?>
        </div>

    </div>
    <div class="container copy">
        <div>&copy; SmartMovie</div>
        <div>created by <a href="https://fedirko.pro">FEDIRKO.PRO</a></div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>