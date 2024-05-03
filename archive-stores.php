<?php get_header(); ?>

<section class="page-wrap">

    <div class="container blog-container">

        <section class="row">

        <?php $postTypeLabel = get_post_type_object( 'stores' ); ?>

        <h1 class="cw-page-title"><?php echo $postTypeLabel->labels->name; ?></h1>

            <div class="section-page-wrapper">
                
                <?php if( have_posts() ): while( have_posts() ): the_post();  ?>

                    <?php $content = get_field( 'content' ); ?>

                    <?php

                        $store_content = array(
                            'location' => isset( $content['location'] ) ? $content['location'] : null,
                            'adress' => isset( $content['adress'] ) ? $content['adress'] : null,
                        );
                    ?>

                        <div class="archive-store-container">
                            <a href=" <?php the_permalink(); ?> " class="archive-store-link">           
                                <div class="archive-section archive-section-image">
                                    <?php if(has_post_thumbnail()): ?>
                                        <?php
                                            $image_id=get_post_thumbnail_id();
                                            $image_alt = get_post_meta($image_id, '_wp_attackment_image_alt', TRUE);
                                        ?>
                                        <img src=" <?php the_post_thumbnail_url('large'); ?>" alt="<?php echo $image_alt ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="archive-section archive-section-content">
                                        <h3><?php echo $store_content['location']?></h3>
                                        <p><?php echo $store_content['adress']?></p>
                                </div>
                            </a>
                        </div> 

                <?php endwhile; else: endif; ?>

            </div>

        </section>

    </div>

</section>

<?php get_footer(); ?>