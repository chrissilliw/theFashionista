<?php 

/*
Template Name: Shop Page
*/
?>

<?php get_header(); ?>

<?php

    $title = the_field('page_title'); 

?>

<section class="page-wrap">
    <div class="container container-fullwidth">

        <section class="row">

            <div class="col-lg-12">

                <h1 class="page-title-h1"><?php the_title(); ?></h1>    
                
                <?php get_template_part('includes/section', 'content') ?>

            </div>


        </section>

    </div>

</section>

<?php get_footer(); ?>