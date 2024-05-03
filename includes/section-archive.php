<?php if( have_posts() ): while( have_posts() ): the_post();  ?>


    <div class="news-card">
    <a href=" <?php the_permalink(); ?>">
        <div class="news-card-body">
            <div class="news-card-overlay"></div>
            <div class="news-card-image">
                <?php if(has_post_thumbnail()): ?>
                    <?php
                        $image_id=get_post_thumbnail_id();
                        $image_alt = get_post_meta($image_id, '_wp_attackment_image_alt', TRUE);
                    ?>
                    <img src=" <?php the_post_thumbnail_url('large'); ?>" alt="<?php echo $image_alt ?>" />
                <?php endif; ?>

            </div>

            <div class="card-content">

                    <p class="card-title-link"><?php the_title(); ?></p>


                <div class="card-data">

                    <p class="card-date">
                        <?php echo get_the_date('d F Y') ?>
                    </p>

                </div>

            </div>
        </div>
        </a>
    </div>


<?php endwhile; else: endif; ?>