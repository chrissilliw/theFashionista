<?php get_header(); ?>

<?php

    $title = the_field('page_title'); 

?>

<section class="page-wrap">

    <div class="container">

        <section class="row">


            <div class="col-lg-12">

                <?php woocommerce_content(); ?>

            </div>


        </section>

    </div>

</section>

<?php get_footer(); ?>