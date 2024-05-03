<?php get_header(); ?>

<section class="page-wrap">

    <div class="container blog-container">

        <section class="row">

            <div class="col-lg-5">

                <h1><?php echo the_title(); ?></h1>
                
                <?php get_template_part('includes/section', 'archive') ?>

                <?php the_posts_pagination(); ?>

            </div>

        </section>

    </div>

</section>

<?php get_footer(); ?>