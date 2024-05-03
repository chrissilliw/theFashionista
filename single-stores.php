<?php get_header(); ?>

<?php $content = get_field( 'content' ); ?>

<?php

    $store_content = array(
        'image' => isset( $content['image'] ) ? $content['image'] : null,
        'location' => isset( $content['location'] ) ? $content['location'] : null,
        'adress' => isset( $content['adress'] ) ? $content['adress'] : null,
        'description' => isset( $content['description'] ) ? $content['description'] : null,
        'opening_hours_title' => isset( $content['opening_hours']['opening_hours_title'] ) ? $content['opening_hours']['opening_hours_title'] : null,
        'monday_friday' => isset( $content['opening_hours']['monday_friday'] ) ? $content['opening_hours']['monday_friday'] : null,
        'saturday' => isset( $content['opening_hours']['saturday'] ) ? $content['opening_hours']['saturday'] : null,
        'sunday' => isset( $content['opening_hours']['sunday'] ) ? $content['opening_hours']['sunday'] : null,
        'phone' => isset( $content['phone'] ) ? $content['phone'] : null,
    );

?>

<div class="container store-container">

    <section class="row">

        <div class="store-content-container">

            <div class="store-thumbnail-image store-section col-lg-6">
                <img src=" <?php the_post_thumbnail_url('large');?>" alt="<?php the_title();?>">
            </div>

            <div class="store-content store-section col-lg-6">
                <h1><?php echo $store_content['location']?></h1>
                <h4><?php echo $store_content['adress']?></h4>
                <p><?php echo $store_content['description']?></p>
                <div class="opening-hours">
                    <ul>
                        <li><strong>Öppettider</strong></li>
                        <li>Måndag - Fredag: <?php echo $store_content['monday_friday']?></li>
                        <li>Lördag: <?php echo $store_content['saturday']?></li>
                        <li>Söndag: <?php echo $store_content['sunday']?></li>
                    </ul>
                </div>
                <p class="phone-title"><strong>Telefon</strong></p>
                <p><?php echo $store_content['phone']?></p>
            </div>

        </div>

    </div>

    <div class="store-image">
            <img src=" <?php echo $store_content['image']?>" alt="">
        </div>

</div>

<?php get_footer(); ?> 