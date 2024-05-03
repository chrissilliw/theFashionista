

<?php $imageContent = get_sub_field( 'image_content' ); ?>

<?php  if ($imageContent['full_width_image']): ?>

<div class="full-width-image-section fullwidth-section">
    <img src=" <?php echo $imageContent['full_width_image']?> " alt="">

    <?php if ($imageContent['content']): ?>

        <?php
            $image_content = array (
                'title' => isset( $imageContent['content']['title']['title'] ) ? $imageContent['content']['title']['title'] : null,
                'title_letter_case' => isset( $imageContent['content']['title']['letter_case'] ) ? $imageContent['content']['title']['letter_case'] : null,
                'title_color' => isset( $imageContent['content']['title']['title_color'] ) ? $imageContent['content']['title']['title_color'] : '#ffffff',
                'subtitle' => isset( $imageContent['content']['subtitle']['title'] ) ? $imageContent['content']['subtitle']['title'] : null,
                'subtitle_letter_case' => isset( $imageContent['content']['title']['letter_case'] ) ? $imageContent['content']['title']['letter_case'] : null,
                'subtitle_color' => isset( $imageContent['content']['title']['subtitle_color'] ) ? $imageContent['content']['title']['subtitle_color'] : '#ffffff',
                'button_text' => isset( $imageContent['content']['button']['text']['text'] ) ? $imageContent['content']['button']['text']['text'] : null,
                'button_letter_case' => ( $imageContent['content']['button']['text']['letter_case'] ) ? $imageContent['content']['button']['text']['letter_case'] : null,
                'button_style' => ( $imageContent['content']['button']['button_style'] ) ? $imageContent['content']['button']['button_style'] : 'stroke',
                'button_color' => ( $imageContent['content']['button']['button_color'] ) ? $imageContent['content']['button']['button_color'] : '#ffffff',
                'button_link' => ( $imageContent['content']['button']['link'] ) ? $imageContent['content']['button']['link'] : null,
                'vertical_position' => ( $imageContent['content']['vertical_positioning'] ) ? $imageContent['content']['vertical_positioning'] : 'top',
                'horizontal_position' => ( $imageContent['content']['horizontal_positioning'] ) ? $imageContent['content']['horizontal_positioning'] : 'right',
            );
        ?>
    <div class="image-content_inner has-horizontal-layout-<?php echo $image_content['horizontal_position']?> ">
        <div class="image-content has-vertical-layout-<?php echo $image_content['vertical_position']?> ">
            <h2 class="image-content-title" style="--text-color: <?php echo $image_content['title_color']?>"><?php echo $image_content['title'] ?></h2>

            <?php if ( $image_content['subtitle'] ): ?>
                <h4 class="image-content-subtitle" style="--text-color: <?php echo $image_content['subtitle_color']?>"><?php echo $image_content['subtitle']?></h4>
            <?php endif; ?>

            <?php if ( $image_content['button_text'] ): ?> 
                <a href="<?php echo $image_content['button_link']?>" class="image-content-href-button">
                <div class="image-content-button <?php echo $image_content['button_style']?>" style="--background-color: <?php echo $image_content['button_color']?>">
                    <span class="button-label" style="--text-color: <?php echo $image_content['button_color']?>"><?php echo $image_content['button_text']?></span>
                </div>
            </a>
            <?php endif; ?>
        </div>
    </div>

    <?php endif; ?>
    </div>
</div>

<?php endif; ?>