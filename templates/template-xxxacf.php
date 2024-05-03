<?php


$isSelectedSidebar  = get_field('select_sidebar');
$image  = get_field('select_image');
$sidebarPosition = get_field('sidebar_position');

?>

<?php get_header(); ?>

<section class="page-wrap">

    <div class="container">

        <section class="row template-row">

            <?php if($isSelectedSidebar === 'sidebar'): ?>
                    <div class="col-lg-3 <?php echo $sidebarPosition; ?>" >
                        <?php if(  is_active_sidebar('left-sidebar' ) ): ?>
                            <?php dynamic_sidebar('left-sidebar'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-9">
                        <h1 class="page-title-h1"><?php the_title(); ?></h1>    
                        <?php get_template_part('includes/section', 'content') ?>
                    </div>
                <?php endif; ?>
                
                <?php if($isSelectedSidebar === 'image'): ?>
                    <div class="col-lg-6">
                        <h1 class="page-title-h1"><?php the_title(); ?></h1>    
                        <?php get_template_part('includes/section', 'content') ?>
                    </div>
                    <div class="col-lg-6">
                        <img src=" <?php echo $image; ?>" class="img-fluid" alt="">
                    </div>
                <?php endif; ?>

                <?php if($isSelectedSidebar === 'none'): ?>
                    <div class="col-lg-12">
                        <h1 class="page-title-h1"><?php the_title(); ?></h1>    
                        <?php get_template_part('includes/section', 'content') ?>
                    </div>
                <?php endif; ?>
            </section>

    </div>

</section>

<?php get_footer(); ?>