

<?php $card = get_sub_field( 'content' ); ?>




<?php
    $card_width = array (
        'card_width' => isset( $card['card_width'] ) ? $card['card_width'] : null,
    )
?>

    <?php if ($card_width['card_width'] == 'full') : ?>


        <div class="block-section-container container card-width-<?php echo $card_width['card_width']?>">

                <?php
                    $full_card_content = array (
                        'image' => isset( $card['full_size']['image_content']['image'] ) ? $card['full_size']['image_content']['image'] : null,
                        'title' => isset( $card['full_size']['content']['title']['title'] ) ? $card['full_size']['content']['title']['title'] : null,
                        'title_letter_case' => isset( $card['full_size']['content']['title']['letter_case'] ) ? $card['full_size']['content']['title']['letter_case'] : null,
                        'title_color' => isset( $card['full_size']['content']['title']['title_color'] ) ? $card['full_size']['content']['title']['title_color'] : '#ffffff',
                        'title_size' => isset( $card['full_size']['content']['title']['title_size'] ) ? $card['full_size']['content']['title']['title_size'] : 'large',
                        'subtitle' => isset( $card['full_size']['content']['subtitle']['subtitle'] ) ? $card['full_size']['content']['subtitle']['subtitle'] : null,
                        'subtitle_letter_case' => isset( $card['full_size']['content']['subtitle']['letter_case'] ) ? $card['full_size']['content']['subtitle']['letter_case'] : null,
                        'subtitle_color' => isset( $card['full_size']['content']['subtitle']['subtitle_color'] ) ? $card['full_size']['content']['subtitle']['subtitle_color'] : '#ffffff',
                        'subtitle_size' => isset( $card['full_size']['content']['subtitle']['subtitle_size'] ) ? $card['full_size']['content']['subtitle']['subtitle_size'] : 'large',
                        'button_text' => isset( $card['full_size']['content']['button']['text'] ) ? $card['full_size']['content']['button']['text'] : null,
                        'button_style' => ( $card['full_size']['content']['button']['button_style'] ) ? $card['full_size']['content']['button']['button_style'] : 'stroke',
                        'button_color' => ( $card['full_size']['content']['button']['button_color'] ) ? $card['full_size']['content']['button']['button_color'] : '#ffffff',
                        'button_link' => ( $card['full_size']['content']['button']['link'] ) ? $card['full_size']['content']['button']['link'] : null,
                        'vertical_position' => ( $card['full_size']['content']['vertical_positioning'] ) ? $card['full_size']['content']['vertical_positioning'] : 'top',
                        'horizontal_position' => ( $card['full_size']['content']['horizontal_positioning'] ) ? $card['full_size']['content']['horizontal_positioning'] : 'right',
                    );
                ?>

            <img src=" <?php echo $full_card_content['image']?> " alt="">

            <div class="block-content_inner has-horizontal-layout-<?php echo $full_card_content['horizontal_position']?> ">
                <div class="block-content has-horizontal-layout-<?php echo $full_card_content['horizontal_position']?> has-vertical-layout-<?php echo $full_card_content['vertical_position']?> ">
                    <h2 class="block-content-title has-font-size-<?php echo $full_card_content['title_size']?> has-title-letter-case-<?php echo $full_card_content['title_letter_case']?>" style="--text-color: <?php echo $full_card_content['title_color']?>"><?php echo $full_card_content['title'] ?></h2>

                    <?php if ( $full_card_content['subtitle'] ): ?>
                        <h4 class="block-content-subtitle has-font-size-<?php echo $full_card_content['subtitle_size']?> has-title-letter-case-<?php echo $full_card_content['subtitle_letter_case']?>" style="--text-color: <?php echo $full_card_content['subtitle_color']?>"><?php echo $full_card_content['subtitle']?></h4>
                    <?php endif; ?>

                    <?php if ( $full_card_content['button_text'] ): ?> 
                        <a href="<?php echo $full_card_content['button_link']?>" class="block-content-button has-button-style-<?php echo $full_card_content['button_style']?>" style="--background-color:<?php echo $full_card_content['button_color']?>">
                            <span class="button-label" style="--text-color: <?php echo $full_card_content['button_color']?>"><?php echo $full_card_content['button_text']?></span>
                        </a>
                    <?php endif; ?>
                </div>
            </div>


            <!-- </div> -->
        </div>
    <?php endif; ?>

    

    <?php if ($card_width['card_width'] == 'half') : ?>

        <div class="block-section-container container card-width-<?php echo $card_width['card_width']?>">

            <?php
                $left_card_content = array (
                    'background_block' => isset( $card['half_size']['left_side']['background_block'] ) ? $card['half_size']['left_side']['background_block'] : '#ffffff',
                    'image' => isset( $card['half_size']['left_side']['image_content']['image'] ) ? $card['half_size']['left_side']['image_content']['image'] : null,
                    'link' => isset( $card['half_size']['left_side']['image_content']['link'] ) ? $card['half_size']['left_side']['image_content']['link'] : null,
                    'title' => isset( $card['half_size']['left_side']['content']['title']['title'] ) ? $card['half_size']['left_side']['content']['title']['title'] : null,
                    'title_letter_case' => isset( $card['half_size']['left_side']['content']['title']['letter_case'] ) ? $card['half_size']['left_side']['content']['title']['letter_case'] : null,
                    'title_color' => isset( $card['half_size']['left_side']['content']['title']['title_color'] ) ? $card['half_size']['left_side']['content']['title']['title_color'] : '#ffffff',
                    'title_size' => isset( $card['half_size']['left_side']['content']['title']['title_size'] ) ? $card['half_size']['left_side']['content']['title']['title_size'] : 'large',
                    'subtitle' => isset( $card['half_size']['left_side']['content']['subtitle']['subtitle'] ) ? $card['half_size']['left_side']['content']['subtitle']['subtitle'] : null,
                    'subtitle_letter_case' => isset( $card['half_size']['left_side']['content']['subtitle']['letter_case'] ) ? $card['half_size']['left_side']['content']['subtitle']['letter_case'] : null,
                    'subtitle_color' => isset( $card['half_size']['left_side']['content']['subtitle']['subtitle_color'] ) ? $card['half_size']['left_side']['content']['subtitle']['subtitle_color'] : '#ffffff',
                    'subtitle_size' => isset( $card['half_size']['left_side']['content']['subtitle']['subtitle_size'] ) ? $card['half_size']['left_side']['content']['subtitle']['subtitle_size'] : 'large',
                    'button_text' => isset( $card['half_size']['left_side']['content']['button']['text'] ) ? $card['half_size']['left_side']['content']['button']['text'] : null,
                    'button_style' => ( $card['half_size']['left_side']['content']['button']['button_style'] ) ? $card['half_size']['left_side']['content']['button']['button_style'] : 'stroke',
                    'button_color' => ( $card['half_size']['left_side']['content']['button']['button_color'] ) ? $card['half_size']['left_side']['content']['button']['button_color'] : '#ffffff',
                    'button_link' => ( $card['half_size']['left_side']['content']['button']['link'] ) ? $card['half_size']['left_side']['content']['button']['link'] : null,
                    'vertical_position' => ( $card['half_size']['left_side']['content']['vertical_positioning'] ) ? $card['half_size']['left_side']['content']['vertical_positioning'] : 'top',
                    'horizontal_position' => ( $card['half_size']['left_side']['content']['horizontal_positioning'] ) ? $card['half_size']['left_side']['content']['horizontal_positioning'] : 'right',
                );

                $right_card_content = array (
                    'background_block' => isset( $card['half_size']['right_side']['background_block'] ) ? $card['half_size']['right_side']['background_block'] : '#ffffff',
                    'image' => isset( $card['half_size']['right_side']['image_content']['image'] ) ? $card['half_size']['right_side']['image_content']['image'] : null,
                    'link' => isset( $card['half_size']['right_side']['image_content']['link'] ) ? $card['half_size']['right_side']['image_content']['link'] : null,
                    'title' => isset( $card['half_size']['right_side']['content']['title']['title'] ) ? $card['half_size']['right_side']['content']['title']['title'] : null,
                    'title_letter_case' => isset( $card['half_size']['right_side']['content']['title']['letter_case'] ) ? $card['half_size']['right_side']['content']['title']['letter_case'] : null,
                    'title_color' => isset( $card['half_size']['right_side']['content']['title']['title_color'] ) ? $card['half_size']['right_side']['content']['title']['title_color'] : '#ffffff',
                    'title_size' => isset( $card['half_size']['right_side']['content']['title']['title_size'] ) ? $card['half_size']['right_side']['content']['title']['title_size'] : 'large',
                    'subtitle' => isset( $card['half_size']['right_side']['content']['subtitle']['subtitle'] ) ? $card['half_size']['right_side']['content']['subtitle']['subtitle'] : null,
                    'subtitle_letter_case' => isset( $card['half_size']['right_side']['content']['subtitle']['letter_case'] ) ? $card['half_size']['right_side']['content']['subtitle']['letter_case'] : null,
                    'subtitle_color' => isset( $card['half_size']['right_side']['content']['subtitle']['subtitle_color'] ) ? $card['half_size']['right_side']['content']['subtitle']['subtitle_color'] : '#ffffff',
                    'subtitle_size' => isset( $card['half_size']['right_side']['content']['subtitle']['subtitle_size'] ) ? $card['half_size']['right_side']['content']['subtitle']['subtitle_size'] : 'large',
                    'button_text' => isset( $card['half_size']['right_side']['content']['button']['text'] ) ? $card['half_size']['right_side']['content']['button']['text'] : null,
                    'button_style' => ( $card['half_size']['right_side']['content']['button']['button_style'] ) ? $card['half_size']['right_side']['content']['button']['button_style'] : 'stroke',
                    'button_color' => ( $card['half_size']['right_side']['content']['button']['button_color'] ) ? $card['half_size']['right_side']['content']['button']['button_color'] : '#ffffff',
                    'button_link' => ( $card['half_size']['right_side']['content']['button']['link'] ) ? $card['half_size']['right_side']['content']['button']['link'] : null,
                    'vertical_position' => ( $card['half_size']['right_side']['content']['vertical_positioning'] ) ? $card['half_size']['right_side']['content']['vertical_positioning'] : 'top',
                    'horizontal_position' => ( $card['half_size']['right_side']['content']['horizontal_positioning'] ) ? $card['half_size']['right_side']['content']['horizontal_positioning'] : 'right',
                );
            ?>

            <div class="card-left_side col-lg-6" style="--background-color: <?php echo $left_card_content['background_block']?>">

                <img src=" <?php echo $left_card_content['image']?> " alt="">

                <div class="half-card-content_inner has-horizontal-layout-<?php echo $left_card_content['horizontal_position']?> ">
                    <div class="half-card-content has-horizontal-layout-<?php echo $left_card_content['horizontal_position']?> has-vertical-layout-<?php echo $left_card_content['vertical_position']?> ">
                        <h2 class="half-card-content-title has-font-size-<?php echo $left_card_content['title_size']?> has-title-letter-case-<?php echo $left_card_content['title_letter_case']?>" style="--text-color: <?php echo $left_card_content['title_color']?>"><?php echo $left_card_content['title'] ?></h2>

                        <?php if ( $left_card_content['subtitle'] ): ?>
                            <h4 class="half-card-content-subtitle has-font-size-<?php echo $left_card_content['subtitle_size']?> has-title-letter-case-<?php echo $left_card_content['subtitle_letter_case']?>" style="--text-color: <?php echo $left_card_content['subtitle_color']?>"><?php echo $left_card_content['subtitle']?></h4>
                        <?php endif; ?>

                        <?php if ( $left_card_content['button_text'] ): ?> 
                            <a href="<?php echo $left_card_content['button_link']?>" class="half-card-content-button has-button-style-<?php echo $left_card_content['button_style']?>" style="--button-color:<?php echo $left_card_content['button_color']?>">
                                <span class="card-button-label" style="--text-color: <?php echo $left_card_content['button_color']?>"><?php echo $left_card_content['button_text']?></span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

            </div>

            <div class="card-right_side col-lg-6" style="--background-color: <?php echo $right_card_content['background_block']?>">

                <img src=" <?php echo $right_card_content['image']?> " alt="">

                <div class="half-card-content_inner has-horizontal-layout-<?php echo $right_card_content['horizontal_position']?> ">
                    <div class="half-card-content has-horizontal-layout-<?php echo $right_card_content['horizontal_position']?> has-vertical-layout-<?php echo $right_card_content['vertical_position']?> ">
                        <h2 class="half-card-content-title has-font-size-<?php echo $right_card_content['title_size']?> has-title-letter-case-<?php echo $right_card_content['title_letter_case']?>" style="--text-color: <?php echo $right_card_content['title_color']?>"><?php echo $right_card_content['title'] ?></h2>

                        <?php if ( $right_card_content['subtitle'] ): ?>
                            <h4 class="half-card-content-subtitle has-font-size-<?php echo $right_card_content['subtitle_size']?> has-title-letter-case-<?php echo $right_card_content['subtitle_letter_case']?>" style="--text-color: <?php echo $right_card_content['subtitle_color']?>"><?php echo $right_card_content['subtitle']?></h4>
                        <?php endif; ?>

                        <?php if ( $right_card_content['button_text'] ): ?> 
                            <a href="<?php echo $right_card_content['button_link']?>" class="half-card-content-button has-button-style-<?php echo $right_card_content['button_style']?>" style="--button-color:<?php echo $right_card_content['button_color']?>">
                                <span class="card-button-label" style="--text-color: <?php echo $right_card_content['button_color']?>"><?php echo $right_card_content['button_text']?></span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>

    <?php endif; ?>


    <?php if ($card_width['card_width'] == 'larger') : ?>

        <div class="block-section-container container card-width-<?php echo $card_width['card_width']?>">

            <?php
                $larger_left_card_content = array (
                    'background_block' => isset( $card['larger_size']['left_side']['background_block'] ) ? $card['larger_size']['left_side']['background_block'] : '#ffffff',
                    'image' => isset( $card['larger_size']['left_side']['image_content']['image'] ) ? $card['larger_size']['left_side']['image_content']['image'] : null,
                    'link' => isset( $card['larger_size']['left_side']['image_content']['link'] ) ? $card['larger_size']['left_side']['image_content']['link'] : null,
                    'title' => isset( $card['larger_size']['left_side']['content']['title']['title'] ) ? $card['larger_size']['left_side']['content']['title']['title'] : null,
                    'title_letter_case' => isset( $card['larger_size']['left_side']['content']['title']['letter_case'] ) ? $card['larger_size']['left_side']['content']['title']['letter_case'] : null,
                    'title_color' => isset( $card['larger_size']['left_side']['content']['title']['title_color'] ) ? $card['larger_size']['left_side']['content']['title']['title_color'] : '#ffffff',
                    'title_size' => isset( $card['larger_size']['left_side']['content']['title']['title_size'] ) ? $card['larger_size']['left_side']['content']['title']['title_size'] : 'large',
                    'subtitle' => isset( $card['larger_size']['left_side']['content']['subtitle']['subtitle'] ) ? $card['larger_size']['left_side']['content']['subtitle']['subtitle'] : null,
                    'subtitle_letter_case' => isset( $card['larger_size']['left_side']['content']['subtitle']['letter_case'] ) ? $card['larger_size']['left_side']['content']['subtitle']['letter_case'] : null,
                    'subtitle_color' => isset( $card['larger_size']['left_side']['content']['subtitle']['subtitle_color'] ) ? $card['larger_size']['left_side']['content']['subtitle']['subtitle_color'] : '#ffffff',
                    'subtitle_size' => isset( $card['larger_size']['left_side']['content']['subtitle']['subtitle_size'] ) ? $card['larger_size']['left_side']['content']['subtitle']['subtitle_size'] : 'large',
                    'button_text' => isset( $card['larger_size']['left_side']['content']['button']['text'] ) ? $card['larger_size']['left_side']['content']['button']['text'] : null,
                    'button_style' => ( $card['larger_size']['left_side']['content']['button']['button_style'] ) ? $card['larger_size']['left_side']['content']['button']['button_style'] : 'stroke',
                    'button_color' => ( $card['larger_size']['left_side']['content']['button']['button_color'] ) ? $card['larger_size']['left_side']['content']['button']['button_color'] : '#ffffff',
                    'button_link' => ( $card['larger_size']['left_side']['content']['button']['link'] ) ? $card['larger_size']['left_side']['content']['button']['link'] : null,
                    'vertical_position' => ( $card['larger_size']['left_side']['content']['vertical_positioning'] ) ? $card['larger_size']['left_side']['content']['vertical_positioning'] : 'top',
                    'horizontal_position' => ( $card['larger_size']['left_side']['content']['horizontal_positioning'] ) ? $card['larger_size']['left_side']['content']['horizontal_positioning'] : 'right',
                );

                $larger_right_card_content = array (
                    'background_block' => isset( $card['larger_size']['right_side']['background_block'] ) ? $card['larger_size']['right_side']['background_block'] : '#ffffff',
                    'image' => isset( $card['larger_size']['right_side']['image_content']['image'] ) ? $card['larger_size']['right_side']['image_content']['image'] : null,
                    'link' => isset( $card['larger_size']['right_side']['image_content']['link'] ) ? $card['larger_size']['right_side']['image_content']['link'] : null,
                    'title' => isset( $card['larger_size']['right_side']['content']['title']['title'] ) ? $card['larger_size']['right_side']['content']['title']['title'] : null,
                    'title_letter_case' => isset( $card['larger_size']['right_side']['content']['title']['letter_case'] ) ? $card['larger_size']['right_side']['content']['title']['letter_case'] : null,
                    'title_color' => isset( $card['larger_size']['right_side']['content']['title']['title_color'] ) ? $card['larger_size']['right_side']['content']['title']['title_color'] : '#ffffff',
                    'title_size' => isset( $card['larger_size']['right_side']['content']['title']['title_size'] ) ? $card['larger_size']['right_side']['content']['title']['title_size'] : 'large',
                    'subtitle' => isset( $card['larger_size']['right_side']['content']['subtitle']['subtitle'] ) ? $card['larger_size']['right_side']['content']['subtitle']['subtitle'] : null,
                    'subtitle_letter_case' => isset( $card['larger_size']['right_side']['content']['subtitle']['letter_case'] ) ? $card['larger_size']['right_side']['content']['subtitle']['letter_case'] : null,
                    'subtitle_color' => isset( $card['larger_size']['right_side']['content']['subtitle']['subtitle_color'] ) ? $card['larger_size']['right_side']['content']['subtitle']['subtitle_color'] : '#ffffff',
                    'subtitle_size' => isset( $card['larger_size']['right_side']['content']['subtitle']['subtitle_size'] ) ? $card['larger_size']['right_side']['content']['subtitle']['subtitle_size'] : 'large',
                    'button_text' => isset( $card['larger_size']['right_side']['content']['button']['text'] ) ? $card['larger_size']['right_side']['content']['button']['text'] : null,
                    'button_style' => ( $card['larger_size']['right_side']['content']['button']['button_style'] ) ? $card['larger_size']['right_side']['content']['button']['button_style'] : 'stroke',
                    'button_color' => ( $card['larger_size']['right_side']['content']['button']['button_color'] ) ? $card['larger_size']['right_side']['content']['button']['button_color'] : '#ffffff',
                    'button_link' => ( $card['larger_size']['right_side']['content']['button']['link'] ) ? $card['larger_size']['right_side']['content']['button']['link'] : null,
                    'vertical_position' => ( $card['larger_size']['right_side']['content']['vertical_positioning'] ) ? $card['larger_size']['right_side']['content']['vertical_positioning'] : 'top',
                    'horizontal_position' => ( $card['larger_size']['right_side']['content']['horizontal_positioning'] ) ? $card['larger_size']['right_side']['content']['horizontal_positioning'] : 'right',
                );
            ?>

            <div class="card-left_side col-lg-8" style="--background-color: <?php echo $larger_left_card_content['background_block']?>">

                <img src=" <?php echo $larger_left_card_content['image']?> " alt="">

                <div class="half-card-content_inner has-horizontal-layout-<?php echo $larger_left_card_content['horizontal_position']?> ">
                    <div class="half-card-content has-horizontal-layout-<?php echo $larger_left_card_content['horizontal_position']?> has-vertical-layout-<?php echo $larger_left_card_content['vertical_position']?> ">
                        <h2 class="half-card-content-title has-font-size-<?php echo $larger_left_card_content['title_size']?> has-title-letter-case-<?php echo $larger_left_card_content['title_letter_case']?>" style="--text-color: <?php echo $larger_left_card_content['title_color']?>"><?php echo $larger_left_card_content['title'] ?></h2>

                        <?php if ( $larger_left_card_content['subtitle'] ): ?>
                            <h4 class="half-card-content-subtitle has-font-size-<?php echo $larger_left_card_content['subtitle_size']?> has-title-letter-case-<?php echo $larger_left_card_content['subtitle_letter_case']?>" style="--text-color: <?php echo $larger_left_card_content['subtitle_color']?>"><?php echo $larger_left_card_content['subtitle']?></h4>
                        <?php endif; ?>

                        <?php if ( $larger_left_card_content['button_text'] ): ?> 
                            <a href="<?php echo $larger_left_card_content['button_link']?>" class="half-card-content-button has-button-style-<?php echo $larger_left_card_content['button_style']?>" style="--button-color:<?php echo $larger_left_card_content['button_color']?>">
                                <span class="card-button-label" style="--text-color: <?php echo $larger_left_card_content['button_color']?>"><?php echo $larger_left_card_content['button_text']?></span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

            </div>

            <div class="card-right_side col-lg-4" style="--background-color: <?php echo $larger_right_card_content['background_block']?>">

                <img src=" <?php echo $larger_right_card_content['image']?> " alt="">

                <div class="half-card-content_inner has-horizontal-layout-<?php echo $larger_right_card_content['horizontal_position']?> ">
                    <div class="half-card-content has-horizontal-layout-<?php echo $larger_right_card_content['horizontal_position']?> has-vertical-layout-<?php echo $larger_right_card_content['vertical_position']?> ">
                        <h2 class="half-card-content-title has-font-size-<?php echo $larger_right_card_content['title_size']?> has-title-letter-case-<?php echo $larger_right_card_content['title_letter_case']?>" style="--text-color: <?php echo $larger_right_card_content['title_color']?>"><?php echo $larger_right_card_content['title'] ?></h2>

                        <?php if ( $larger_right_card_content['subtitle'] ): ?>
                            <h4 class="half-card-content-subtitle has-font-size-<?php echo $larger_right_card_content['subtitle_size']?> has-title-letter-case-<?php echo $larger_right_card_content['subtitle_letter_case']?>" style="--text-color: <?php echo $larger_right_card_content['subtitle_color']?>"><?php echo $larger_right_card_content['subtitle']?></h4>
                        <?php endif; ?>

                        <?php if ( $larger_right_card_content['button_text'] ): ?> 
                            <a href="<?php echo $larger_right_card_content['button_link']?>" class="half-card-content-button has-button-style-<?php echo $larger_right_card_content['button_style']?>" style="--button-color:<?php echo $larger_right_card_content['button_color']?>">
                                <span class="card-button-label" style="--text-color: <?php echo $larger_right_card_content['button_color']?>"><?php echo $larger_right_card_content['button_text']?></span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>

    <?php endif; ?>

    <?php if ($card_width['card_width'] == 'smaller') : ?>

        <div class="block-section-container container card-width-<?php echo $card_width['card_width']?>">

            <?php
                $smaller_left_card_content = array (
                    'background_block' => isset( $card['smaller_size']['left_side']['background_block'] ) ? $card['smaller_size']['left_side']['background_block'] : '#ffffff',
                    'image' => isset( $card['smaller_size']['left_side']['image_content']['image'] ) ? $card['smaller_size']['left_side']['image_content']['image'] : null,
                    'link' => isset( $card['smaller_size']['left_side']['image_content']['link'] ) ? $card['smaller_size']['left_side']['image_content']['link'] : null,
                    'title' => isset( $card['smaller_size']['left_side']['content']['title']['title'] ) ? $card['smaller_size']['left_side']['content']['title']['title'] : null,
                    'title_letter_case' => isset( $card['smaller_size']['left_side']['content']['title']['letter_case'] ) ? $card['smaller_size']['left_side']['content']['title']['letter_case'] : null,
                    'title_color' => isset( $card['smaller_size']['left_side']['content']['title']['title_color'] ) ? $card['smaller_size']['left_side']['content']['title']['title_color'] : '#ffffff',
                    'title_size' => isset( $card['smaller_size']['left_side']['content']['title']['title_size'] ) ? $card['smaller_size']['left_side']['content']['title']['title_size'] : 'large',
                    'subtitle' => isset( $card['smaller_size']['left_side']['content']['subtitle']['subtitle'] ) ? $card['smaller_size']['left_side']['content']['subtitle']['subtitle'] : null,
                    'subtitle_letter_case' => isset( $card['smaller_size']['left_side']['content']['subtitle']['letter_case'] ) ? $card['smaller_size']['left_side']['content']['subtitle']['letter_case'] : null,
                    'subtitle_color' => isset( $card['smaller_size']['left_side']['content']['subtitle']['subtitle_color'] ) ? $card['smaller_size']['left_side']['content']['subtitle']['subtitle_color'] : '#ffffff',
                    'subtitle_size' => isset( $card['smaller_size']['left_side']['content']['subtitle']['subtitle_size'] ) ? $card['smaller_size']['left_side']['content']['subtitle']['subtitle_size'] : 'large',
                    'button_text' => isset( $card['smaller_size']['left_side']['content']['button']['text'] ) ? $card['smaller_size']['left_side']['content']['button']['text'] : null,
                    'button_style' => ( $card['smaller_size']['left_side']['content']['button']['button_style'] ) ? $card['smaller_size']['left_side']['content']['button']['button_style'] : 'stroke',
                    'button_color' => ( $card['smaller_size']['left_side']['content']['button']['button_color'] ) ? $card['smaller_size']['left_side']['content']['button']['button_color'] : '#ffffff',
                    'button_link' => ( $card['smaller_size']['left_side']['content']['button']['link'] ) ? $card['smaller_size']['left_side']['content']['button']['link'] : null,
                    'vertical_position' => ( $card['smaller_size']['left_side']['content']['vertical_positioning'] ) ? $card['smaller_size']['left_side']['content']['vertical_positioning'] : 'top',
                    'horizontal_position' => ( $card['smaller_size']['left_side']['content']['horizontal_positioning'] ) ? $card['smaller_size']['left_side']['content']['horizontal_positioning'] : 'right',
                );

                $smaller_right_card_content = array (
                    'background_block' => isset( $card['smaller_size']['right_side']['background_block'] ) ? $card['smaller_size']['right_side']['background_block'] : '#ffffff',
                    'image' => isset( $card['smaller_size']['right_side']['image_content']['image'] ) ? $card['smaller_size']['right_side']['image_content']['image'] : null,
                    'link' => isset( $card['smaller_size']['right_side']['image_content']['link'] ) ? $card['smaller_size']['right_side']['image_content']['link'] : null,
                    'title' => isset( $card['smaller_size']['right_side']['content']['title']['title'] ) ? $card['smaller_size']['right_side']['content']['title']['title'] : null,
                    'title_letter_case' => isset( $card['smaller_size']['right_side']['content']['title']['letter_case'] ) ? $card['smaller_size']['right_side']['content']['title']['letter_case'] : null,
                    'title_color' => isset( $card['smaller_size']['right_side']['content']['title']['title_color'] ) ? $card['smaller_size']['right_side']['content']['title']['title_color'] : '#ffffff',
                    'title_size' => isset( $card['smaller_size']['right_side']['content']['title']['title_size'] ) ? $card['smaller_size']['right_side']['content']['title']['title_size'] : 'large',
                    'subtitle' => isset( $card['smaller_size']['right_side']['content']['subtitle']['subtitle'] ) ? $card['smaller_size']['right_side']['content']['subtitle']['subtitle'] : null,
                    'subtitle_letter_case' => isset( $card['smaller_size']['right_side']['content']['subtitle']['letter_case'] ) ? $card['smaller_size']['right_side']['content']['subtitle']['letter_case'] : null,
                    'subtitle_color' => isset( $card['smaller_size']['right_side']['content']['subtitle']['subtitle_color'] ) ? $card['smaller_size']['right_side']['content']['subtitle']['subtitle_color'] : '#ffffff',
                    'subtitle_size' => isset( $card['smaller_size']['right_side']['content']['subtitle']['subtitle_size'] ) ? $card['smaller_size']['right_side']['content']['subtitle']['subtitle_size'] : 'large',
                    'button_text' => isset( $card['smaller_size']['right_side']['content']['button']['text'] ) ? $card['smaller_size']['right_side']['content']['button']['text'] : null,
                    'button_style' => ( $card['smaller_size']['right_side']['content']['button']['button_style'] ) ? $card['smaller_size']['right_side']['content']['button']['button_style'] : 'stroke',
                    'button_color' => ( $card['smaller_size']['right_side']['content']['button']['button_color'] ) ? $card['smaller_size']['right_side']['content']['button']['button_color'] : '#ffffff',
                    'button_link' => ( $card['smaller_size']['right_side']['content']['button']['link'] ) ? $card['smaller_size']['right_side']['content']['button']['link'] : null,
                    'vertical_position' => ( $card['smaller_size']['right_side']['content']['vertical_positioning'] ) ? $card['smaller_size']['right_side']['content']['vertical_positioning'] : 'top',
                    'horizontal_position' => ( $card['smaller_size']['right_side']['content']['horizontal_positioning'] ) ? $card['smaller_size']['right_side']['content']['horizontal_positioning'] : 'right',
                );
            ?>

            <div class="card-left_side col-lg-4" style="--background-color: <?php echo $smaller_left_card_content['background_block']?>">

                <img src=" <?php echo $smaller_left_card_content['image']?> " alt="">

                <div class="half-card-content_inner has-horizontal-layout-<?php echo $smaller_left_card_content['horizontal_position']?> ">
                    <div class="half-card-content has-horizontal-layout-<?php echo $smaller_left_card_content['horizontal_position']?> has-vertical-layout-<?php echo $smaller_left_card_content['vertical_position']?> ">
                        <h2 class="half-card-content-title has-font-size-<?php echo $smaller_left_card_content['title_size']?> has-title-letter-case-<?php echo $smaller_left_card_content['title_letter_case']?>" style="--text-color: <?php echo $smaller_left_card_content['title_color']?>"><?php echo $smaller_left_card_content['title'] ?></h2>

                        <?php if ( $smaller_left_card_content['subtitle'] ): ?>
                            <h4 class="half-card-content-subtitle has-font-size-<?php echo $smaller_left_card_content['subtitle_size']?> has-title-letter-case-<?php echo $smaller_left_card_content['subtitle_letter_case']?>" style="--text-color: <?php echo $smaller_left_card_content['subtitle_color']?>"><?php echo $smaller_left_card_content['subtitle']?></h4>
                        <?php endif; ?>

                        <?php if ( $smaller_left_card_content['button_text'] ): ?> 
                            <a href="<?php echo $smaller_left_card_content['button_link']?>" class="half-card-content-button has-button-style-<?php echo $smaller_left_card_content['button_style']?>" style="--button-color:<?php echo $smaller_left_card_content['button_color']?>">
                                <span class="card-button-label" style="--text-color: <?php echo $smaller_left_card_content['button_color']?>"><?php echo $smaller_left_card_content['button_text']?></span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

            </div>

            <div class="card-right_side col-lg-8" style="--background-color: <?php echo $smaller_right_card_content['background_block']?>">

                <img src=" <?php echo $smaller_right_card_content['image']?> " alt="">

                <div class="half-card-content_inner has-horizontal-layout-<?php echo $smaller_right_card_content['horizontal_position']?> ">
                    <div class="half-card-content has-horizontal-layout-<?php echo $smaller_right_card_content['horizontal_position']?> has-vertical-layout-<?php echo $smaller_right_card_content['vertical_position']?> ">
                        <h2 class="half-card-content-title has-font-size-<?php echo $smaller_right_card_content['title_size']?> has-title-letter-case-<?php echo $smaller_right_card_content['title_letter_case']?>" style="--text-color: <?php echo $smaller_right_card_content['title_color']?>"><?php echo $smaller_right_card_content['title'] ?></h2>

                        <?php if ( $smaller_right_card_content['subtitle'] ): ?>
                            <h4 class="half-card-content-subtitle has-font-size-<?php echo $smaller_right_card_content['subtitle_size']?> has-title-letter-case-<?php echo $smaller_right_card_content['subtitle_letter_case']?>" style="--text-color: <?php echo $smaller_right_card_content['subtitle_color']?>"><?php echo $smaller_right_card_content['subtitle']?></h4>
                        <?php endif; ?>

                        <?php if ( $smaller_right_card_content['button_text'] ): ?> 
                            <a href="<?php echo $smaller_right_card_content['button_link']?>" class="half-card-content-button has-button-style-<?php echo $smaller_right_card_content['button_style']?>" style="--button-color:<?php echo $smaller_right_card_content['button_color']?>">
                                <span class="card-button-label" style="--text-color: <?php echo $smaller_right_card_content['button_color']?>"><?php echo $smaller_right_card_content['button_text']?></span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>

<?php endif; ?>

<?php if ($card_width['card_width'] == 'fourth') : ?>

<div class="block-section-container container card-width-<?php echo $card_width['card_width']?>">

    <?php
        $first_card_content = array (
            'background_block' => isset( $card['smaller_size']['left_side']['background_block'] ) ? $card['smaller_size']['left_side']['background_block'] : '#ffffff',
            'image' => isset( $card['smaller_size']['left_side']['image_content']['image'] ) ? $card['smaller_size']['left_side']['image_content']['image'] : null,
            'link' => isset( $card['smaller_size']['left_side']['image_content']['link'] ) ? $card['smaller_size']['left_side']['image_content']['link'] : null,
            'title' => isset( $card['smaller_size']['left_side']['content']['title']['title'] ) ? $card['smaller_size']['left_side']['content']['title']['title'] : null,
            'title_letter_case' => isset( $card['smaller_size']['left_side']['content']['title']['letter_case'] ) ? $card['smaller_size']['left_side']['content']['title']['letter_case'] : null,
            'title_color' => isset( $card['smaller_size']['left_side']['content']['title']['title_color'] ) ? $card['smaller_size']['left_side']['content']['title']['title_color'] : '#ffffff',
            'title_size' => isset( $card['smaller_size']['left_side']['content']['title']['title_size'] ) ? $card['smaller_size']['left_side']['content']['title']['title_size'] : 'large',
            'subtitle' => isset( $card['smaller_size']['left_side']['content']['subtitle']['subtitle'] ) ? $card['smaller_size']['left_side']['content']['subtitle']['subtitle'] : null,
            'subtitle_letter_case' => isset( $card['smaller_size']['left_side']['content']['subtitle']['letter_case'] ) ? $card['smaller_size']['left_side']['content']['subtitle']['letter_case'] : null,
            'subtitle_color' => isset( $card['smaller_size']['left_side']['content']['subtitle']['subtitle_color'] ) ? $card['smaller_size']['left_side']['content']['subtitle']['subtitle_color'] : '#ffffff',
            'subtitle_size' => isset( $card['smaller_size']['left_side']['content']['subtitle']['subtitle_size'] ) ? $card['smaller_size']['left_side']['content']['subtitle']['subtitle_size'] : 'large',
            'button_text' => isset( $card['smaller_size']['left_side']['content']['button']['text'] ) ? $card['smaller_size']['left_side']['content']['button']['text'] : null,
            'button_style' => ( $card['smaller_size']['left_side']['content']['button']['button_style'] ) ? $card['smaller_size']['left_side']['content']['button']['button_style'] : 'stroke',
            'button_color' => ( $card['smaller_size']['left_side']['content']['button']['button_color'] ) ? $card['smaller_size']['left_side']['content']['button']['button_color'] : '#ffffff',
            'button_link' => ( $card['smaller_size']['left_side']['content']['button']['link'] ) ? $card['smaller_size']['left_side']['content']['button']['link'] : null,
            'vertical_position' => ( $card['smaller_size']['left_side']['content']['vertical_positioning'] ) ? $card['smaller_size']['left_side']['content']['vertical_positioning'] : 'top',
            'horizontal_position' => ( $card['smaller_size']['left_side']['content']['horizontal_positioning'] ) ? $card['smaller_size']['left_side']['content']['horizontal_positioning'] : 'right',
        );

        $second_card_content = array (
            'background_block' => isset( $card['smaller_size']['right_side']['background_block'] ) ? $card['smaller_size']['right_side']['background_block'] : '#ffffff',
            'image' => isset( $card['smaller_size']['right_side']['image_content']['image'] ) ? $card['smaller_size']['right_side']['image_content']['image'] : null,
            'link' => isset( $card['smaller_size']['right_side']['image_content']['link'] ) ? $card['smaller_size']['right_side']['image_content']['link'] : null,
            'title' => isset( $card['smaller_size']['right_side']['content']['title']['title'] ) ? $card['smaller_size']['right_side']['content']['title']['title'] : null,
            'title_letter_case' => isset( $card['smaller_size']['right_side']['content']['title']['letter_case'] ) ? $card['smaller_size']['right_side']['content']['title']['letter_case'] : null,
            'title_color' => isset( $card['smaller_size']['right_side']['content']['title']['title_color'] ) ? $card['smaller_size']['right_side']['content']['title']['title_color'] : '#ffffff',
            'title_size' => isset( $card['smaller_size']['right_side']['content']['title']['title_size'] ) ? $card['smaller_size']['right_side']['content']['title']['title_size'] : 'large',
            'subtitle' => isset( $card['smaller_size']['right_side']['content']['subtitle']['subtitle'] ) ? $card['smaller_size']['right_side']['content']['subtitle']['subtitle'] : null,
            'subtitle_letter_case' => isset( $card['smaller_size']['right_side']['content']['subtitle']['letter_case'] ) ? $card['smaller_size']['right_side']['content']['subtitle']['letter_case'] : null,
            'subtitle_color' => isset( $card['smaller_size']['right_side']['content']['subtitle']['subtitle_color'] ) ? $card['smaller_size']['right_side']['content']['subtitle']['subtitle_color'] : '#ffffff',
            'subtitle_size' => isset( $card['smaller_size']['right_side']['content']['subtitle']['subtitle_size'] ) ? $card['smaller_size']['right_side']['content']['subtitle']['subtitle_size'] : 'large',
            'button_text' => isset( $card['smaller_size']['right_side']['content']['button']['text'] ) ? $card['smaller_size']['right_side']['content']['button']['text'] : null,
            'button_style' => ( $card['smaller_size']['right_side']['content']['button']['button_style'] ) ? $card['smaller_size']['right_side']['content']['button']['button_style'] : 'stroke',
            'button_color' => ( $card['smaller_size']['right_side']['content']['button']['button_color'] ) ? $card['smaller_size']['right_side']['content']['button']['button_color'] : '#ffffff',
            'button_link' => ( $card['smaller_size']['right_side']['content']['button']['link'] ) ? $card['smaller_size']['right_side']['content']['button']['link'] : null,
            'vertical_position' => ( $card['smaller_size']['right_side']['content']['vertical_positioning'] ) ? $card['smaller_size']['right_side']['content']['vertical_positioning'] : 'top',
            'horizontal_position' => ( $card['smaller_size']['right_side']['content']['horizontal_positioning'] ) ? $card['smaller_size']['right_side']['content']['horizontal_positioning'] : 'right',
        );

        $third_card_content = array (
            'background_block' => isset( $card['smaller_size']['left_side']['background_block'] ) ? $card['smaller_size']['left_side']['background_block'] : '#ffffff',
            'image' => isset( $card['smaller_size']['left_side']['image_content']['image'] ) ? $card['smaller_size']['left_side']['image_content']['image'] : null,
            'link' => isset( $card['smaller_size']['left_side']['image_content']['link'] ) ? $card['smaller_size']['left_side']['image_content']['link'] : null,
            'title' => isset( $card['smaller_size']['left_side']['content']['title']['title'] ) ? $card['smaller_size']['left_side']['content']['title']['title'] : null,
            'title_letter_case' => isset( $card['smaller_size']['left_side']['content']['title']['letter_case'] ) ? $card['smaller_size']['left_side']['content']['title']['letter_case'] : null,
            'title_color' => isset( $card['smaller_size']['left_side']['content']['title']['title_color'] ) ? $card['smaller_size']['left_side']['content']['title']['title_color'] : '#ffffff',
            'title_size' => isset( $card['smaller_size']['left_side']['content']['title']['title_size'] ) ? $card['smaller_size']['left_side']['content']['title']['title_size'] : 'large',
            'subtitle' => isset( $card['smaller_size']['left_side']['content']['subtitle']['subtitle'] ) ? $card['smaller_size']['left_side']['content']['subtitle']['subtitle'] : null,
            'subtitle_letter_case' => isset( $card['smaller_size']['left_side']['content']['subtitle']['letter_case'] ) ? $card['smaller_size']['left_side']['content']['subtitle']['letter_case'] : null,
            'subtitle_color' => isset( $card['smaller_size']['left_side']['content']['subtitle']['subtitle_color'] ) ? $card['smaller_size']['left_side']['content']['subtitle']['subtitle_color'] : '#ffffff',
            'subtitle_size' => isset( $card['smaller_size']['left_side']['content']['subtitle']['subtitle_size'] ) ? $card['smaller_size']['left_side']['content']['subtitle']['subtitle_size'] : 'large',
            'button_text' => isset( $card['smaller_size']['left_side']['content']['button']['text'] ) ? $card['smaller_size']['left_side']['content']['button']['text'] : null,
            'button_style' => ( $card['smaller_size']['left_side']['content']['button']['button_style'] ) ? $card['smaller_size']['left_side']['content']['button']['button_style'] : 'stroke',
            'button_color' => ( $card['smaller_size']['left_side']['content']['button']['button_color'] ) ? $card['smaller_size']['left_side']['content']['button']['button_color'] : '#ffffff',
            'button_link' => ( $card['smaller_size']['left_side']['content']['button']['link'] ) ? $card['smaller_size']['left_side']['content']['button']['link'] : null,
            'vertical_position' => ( $card['smaller_size']['left_side']['content']['vertical_positioning'] ) ? $card['smaller_size']['left_side']['content']['vertical_positioning'] : 'top',
            'horizontal_position' => ( $card['smaller_size']['left_side']['content']['horizontal_positioning'] ) ? $card['smaller_size']['left_side']['content']['horizontal_positioning'] : 'right',
        );

        $fourth_card_content = array (
            'background_block' => isset( $card['smaller_size']['right_side']['background_block'] ) ? $card['smaller_size']['right_side']['background_block'] : '#ffffff',
            'image' => isset( $card['smaller_size']['right_side']['image_content']['image'] ) ? $card['smaller_size']['right_side']['image_content']['image'] : null,
            'link' => isset( $card['smaller_size']['right_side']['image_content']['link'] ) ? $card['smaller_size']['right_side']['image_content']['link'] : null,
            'title' => isset( $card['smaller_size']['right_side']['content']['title']['title'] ) ? $card['smaller_size']['right_side']['content']['title']['title'] : null,
            'title_letter_case' => isset( $card['smaller_size']['right_side']['content']['title']['letter_case'] ) ? $card['smaller_size']['right_side']['content']['title']['letter_case'] : null,
            'title_color' => isset( $card['smaller_size']['right_side']['content']['title']['title_color'] ) ? $card['smaller_size']['right_side']['content']['title']['title_color'] : '#ffffff',
            'title_size' => isset( $card['smaller_size']['right_side']['content']['title']['title_size'] ) ? $card['smaller_size']['right_side']['content']['title']['title_size'] : 'large',
            'subtitle' => isset( $card['smaller_size']['right_side']['content']['subtitle']['subtitle'] ) ? $card['smaller_size']['right_side']['content']['subtitle']['subtitle'] : null,
            'subtitle_letter_case' => isset( $card['smaller_size']['right_side']['content']['subtitle']['letter_case'] ) ? $card['smaller_size']['right_side']['content']['subtitle']['letter_case'] : null,
            'subtitle_color' => isset( $card['smaller_size']['right_side']['content']['subtitle']['subtitle_color'] ) ? $card['smaller_size']['right_side']['content']['subtitle']['subtitle_color'] : '#ffffff',
            'subtitle_size' => isset( $card['smaller_size']['right_side']['content']['subtitle']['subtitle_size'] ) ? $card['smaller_size']['right_side']['content']['subtitle']['subtitle_size'] : 'large',
            'button_text' => isset( $card['smaller_size']['right_side']['content']['button']['text'] ) ? $card['smaller_size']['right_side']['content']['button']['text'] : null,
            'button_style' => ( $card['smaller_size']['right_side']['content']['button']['button_style'] ) ? $card['smaller_size']['right_side']['content']['button']['button_style'] : 'stroke',
            'button_color' => ( $card['smaller_size']['right_side']['content']['button']['button_color'] ) ? $card['smaller_size']['right_side']['content']['button']['button_color'] : '#ffffff',
            'button_link' => ( $card['smaller_size']['right_side']['content']['button']['link'] ) ? $card['smaller_size']['right_side']['content']['button']['link'] : null,
            'vertical_position' => ( $card['smaller_size']['right_side']['content']['vertical_positioning'] ) ? $card['smaller_size']['right_side']['content']['vertical_positioning'] : 'top',
            'horizontal_position' => ( $card['smaller_size']['right_side']['content']['horizontal_positioning'] ) ? $card['smaller_size']['right_side']['content']['horizontal_positioning'] : 'right',
        );
    ?>

    <div class="card-left_side col-lg-4" style="--background-color: <?php echo $smaller_left_card_content['background_block']?>">

        <img src=" <?php echo $smaller_left_card_content['image']?> " alt="">

        <div class="half-card-content_inner has-horizontal-layout-<?php echo $smaller_left_card_content['horizontal_position']?> ">
            <div class="half-card-content has-horizontal-layout-<?php echo $smaller_left_card_content['horizontal_position']?> has-vertical-layout-<?php echo $smaller_left_card_content['vertical_position']?> ">
                <h2 class="half-card-content-title has-font-size-<?php echo $smaller_left_card_content['title_size']?> has-title-letter-case-<?php echo $smaller_left_card_content['title_letter_case']?>" style="--text-color: <?php echo $smaller_left_card_content['title_color']?>"><?php echo $smaller_left_card_content['title'] ?></h2>

                <?php if ( $smaller_left_card_content['subtitle'] ): ?>
                    <h4 class="half-card-content-subtitle has-font-size-<?php echo $smaller_left_card_content['subtitle_size']?> has-title-letter-case-<?php echo $smaller_left_card_content['subtitle_letter_case']?>" style="--text-color: <?php echo $smaller_left_card_content['subtitle_color']?>"><?php echo $smaller_left_card_content['subtitle']?></h4>
                <?php endif; ?>

                <?php if ( $smaller_left_card_content['button_text'] ): ?> 
                    <a href="<?php echo $smaller_left_card_content['button_link']?>" class="half-card-content-button has-button-style-<?php echo $smaller_left_card_content['button_style']?>" style="--button-color:<?php echo $smaller_left_card_content['button_color']?>">
                        <span class="card-button-label" style="--text-color: <?php echo $smaller_left_card_content['button_color']?>"><?php echo $smaller_left_card_content['button_text']?></span>
                    </a>
                <?php endif; ?>
            </div>
        </div>

    </div>

    <div class="card-right_side col-lg-8" style="--background-color: <?php echo $smaller_right_card_content['background_block']?>">

        <img src=" <?php echo $smaller_right_card_content['image']?> " alt="">

        <div class="half-card-content_inner has-horizontal-layout-<?php echo $smaller_right_card_content['horizontal_position']?> ">
            <div class="half-card-content has-horizontal-layout-<?php echo $smaller_right_card_content['horizontal_position']?> has-vertical-layout-<?php echo $smaller_right_card_content['vertical_position']?> ">
                <h2 class="half-card-content-title has-font-size-<?php echo $smaller_right_card_content['title_size']?> has-title-letter-case-<?php echo $smaller_right_card_content['title_letter_case']?>" style="--text-color: <?php echo $smaller_right_card_content['title_color']?>"><?php echo $smaller_right_card_content['title'] ?></h2>

                <?php if ( $smaller_right_card_content['subtitle'] ): ?>
                    <h4 class="half-card-content-subtitle has-font-size-<?php echo $smaller_right_card_content['subtitle_size']?> has-title-letter-case-<?php echo $smaller_right_card_content['subtitle_letter_case']?>" style="--text-color: <?php echo $smaller_right_card_content['subtitle_color']?>"><?php echo $smaller_right_card_content['subtitle']?></h4>
                <?php endif; ?>

                <?php if ( $smaller_right_card_content['button_text'] ): ?> 
                    <a href="<?php echo $smaller_right_card_content['button_link']?>" class="half-card-content-button has-button-style-<?php echo $smaller_right_card_content['button_style']?>" style="--button-color:<?php echo $smaller_right_card_content['button_color']?>">
                        <span class="card-button-label" style="--text-color: <?php echo $smaller_right_card_content['button_color']?>"><?php echo $smaller_right_card_content['button_text']?></span>
                    </a>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>

<?php endif; ?>
