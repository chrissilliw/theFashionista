<?php get_header(); ?>

    <?php if( have_rows('layouts')): ?>

        <?php while( have_rows('layouts')): the_row(); ?>

            <?php if (get_row_layout() == 'fullwidth_image_section'): ?>

                    <?php get_template_part('parts/layout', 'fullwidth_image_section'); ?>

            <?php endif; ?>

            <?php if (get_row_layout() == 'block_section'): ?>

                <?php get_template_part('parts/layout', 'block_section'); ?>

            <?php endif; ?>

            <?php if (get_row_layout() == 'card_component'): ?>

                <?php get_template_part('parts/layout', 'card_component'); ?>

            <?php endif; ?>

        <?php endwhile; ?>

    <?php endif; ?>

<?php get_footer(); ?> 