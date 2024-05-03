<?php

/* Template Name: ACF Templates */

?>

<?php if( have_rows('layouts')): ?>

    <?php while( have_rows('layouts')): the_row(); ?>

        <?php if (get_row_layout() == 'fullwidth_image_section'): ?>

            Yes it works!

        <?php endif; ?>

    <?php endwhile; ?>


<?php endif; ?>
