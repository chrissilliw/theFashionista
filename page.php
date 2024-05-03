<?php get_header(); ?>

<?php

    $title = the_field('page_title'); 
    $backgroundImage = get_field('background_image');

?>

<section class="page-wrap">

<?php if( !is_user_logged_in() && is_account_page() ): ?>

    <div class="cw-background-image-wrapper">
        <img src="<?php echo $backgroundImage; ?>" class="cw-background_img" alt ="">
    </div>

<?php endif; ?>

<div class="container">

<section class="row">

    <div class="col-lg-12">

        <h1 class="page-title-h1"><?php the_title(); ?></h1>    
        
        <?php get_template_part('includes/section', 'content') ?>

    </div>


</section>

</div>

<?php get_footer(); ?> 