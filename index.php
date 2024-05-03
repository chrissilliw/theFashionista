<?php get_header(); ?>

<?php

    $title = the_field('page_title'); 

?>

<section class="page-wrap">

    <div class="container blog-container">

        <section class="row">

            <div class="col-lg-12">

                 <h1 class="page-title-h1">Nyheter</h1>    

                <div class="news-wrapper">
                    
                    <?php get_template_part('includes/section', 'archive') ?>

                 </div>

                <?php the_posts_pagination(); ?>

            </div>

        </section>

    </div>

</section>

<?php get_footer(); ?>