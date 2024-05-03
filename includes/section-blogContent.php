<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

<div class="post-card">
        <div class="post-card-body">
            <div class="card-image">
                <?php if(has_post_thumbnail()): ?>
                    <?php
                        $image_id=get_post_thumbnail_id();
                        $image_alt = get_post_meta($image_id, '_wp_attackment_image_alt', TRUE);
                    ?>
                    <img src=" <?php the_post_thumbnail_url('small'); ?>" alt="<?php echo $image_alt ?>" />
                <?php endif; ?>

            </div>

            <div class="post-card-content">
                <a href=" <?php the_permalink(); ?>" class="card-title-link">
                    <a href=" <?php the_permalink(); ?> " ><h2><?php the_title(); ?></h2></a>
                </a>

                <?php
                    $firstName = get_the_author_meta('first_name');
                    $lastName = get_the_author_meta('last_name');
                ?>

                <div class="post-card-data">

                    <p class="post-card-date">
                        <?php echo get_the_date('d F Y') ?>
                    </p>
                    <p class="card-author">
                        <?php echo $firstName?>
                        <?php echo $lastName ?>
                    </p>

                </div>

                <p class="post-card-text">
                    <?php the_content(); ?>
                </p>
            </div>
        </div>
    </div>



<?php endwhile; else: endif; ?>