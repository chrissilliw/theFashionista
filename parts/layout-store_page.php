<?php $content = get_field( 'content' ); ?>

<?php

    $store_content = array(
        'image' => isset( $content['image'] ) ? $content['image'] : null,
    );

?>

<div class="store-content-container">

    <div class="store-image">
        <img src=" <?php $content['image']?>" alt="">
    </div>

</div>