<?php wp_footer(); ?>

<footer>

    <div class="container">
        <section class="row">

            <div class=" footer-group foot-left-section col-md-4">

                <?php if(  is_active_sidebar('footer_area_left' ) ): ?>

                    <?php dynamic_sidebar('footer_area_left'); ?>

                <?php endif; ?>

            </div>

            <div class="footer-group foot-center-section col-md-3 offset-md-1">

                <?php if(  is_active_sidebar('footer_area_center' ) ): ?>

                    <?php dynamic_sidebar('footer_area_center'); ?>

                <?php endif; ?>

            </div>

            <div class="footer-group foot-right-section col-md-3 offset-md-1">

                <?php if(  is_active_sidebar('footer_area_right' ) ): ?>

                    <?php dynamic_sidebar('footer_area_right'); ?>

                <?php endif; ?>

            </div>

        </section>

        <section class="row">
            <div class="footer-bottom-group foot-bottom-section col-lg-12">

                <?php if(  is_active_sidebar('footer_area_bottom' ) ): ?>

                    <?php dynamic_sidebar('footer_area_bottom'); ?>

                <?php endif; ?>

            </div>  
        </section>
    </div>

</footer>

</body>
</html>