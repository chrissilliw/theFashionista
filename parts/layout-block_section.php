

<?php $blockContent = get_sub_field( 'content' ); ?>

<?php $block_image = array (
    'image' => isset( $blockContent['full_size']['image'] ) ? $blockContent['full_size']['image'] : null,
)
?>
<?php  if ($block_image['image']): ?>


<div class="block-section-container container fullwidth-section">
    <img src=" <?php echo $block_image['image']?> " alt="">

    <?php if ($blockContent['full_size']): ?>

        <?php
            $block_content = array (
                'title' => isset( $blockContent['full_size']['title']['title'] ) ? $blockContent['full_size']['title']['title'] : null,
                'title_letter_case' => isset( $blockContent['full_size']['title']['letter_case'] ) ? $blockContent['full_size']['title']['letter_case'] : null,
                'title_color' => isset( $blockContent['full_size']['title']['title_color'] ) ? $blockContent['full_size']['title']['title_color'] : '#ffffff',
                'subtitle' => isset( $blockContent['full_size']['subtitle']['title'] ) ? $blockContent['full_size']['subtitle']['title'] : null,
                'subtitle_letter_case' => isset( $blockContent['full_size']['title']['letter_case'] ) ? $blockContent['full_size']['title']['letter_case'] : null,
                'subtitle_color' => isset( $blockContent['full_size']['title']['subtitle_color'] ) ? $blockContent['full_size']['title']['subtitle_color'] : '#ffffff',
                'button_text' => isset( $blockContent['full_size']['button']['text']['text'] ) ? $blockContent['full_size']['button']['text']['text'] : null,
                'button_letter_case' => ( $blockContent['full_size']['button']['text']['letter_case'] ) ? $blockContent['full_size']['button']['text']['letter_case'] : null,
                'button_style' => ( $blockContent['full_size']['button']['button_style'] ) ? $blockContent['full_size']['button']['button_style'] : 'stroke',
                'button_color' => ( $blockContent['full_size']['button']['button_color'] ) ? $blockContent['full_size']['button']['button_color'] : '#ffffff',
                'vertical_position' => ( $blockContent['full_size']['vertical_positioning'] ) ? $blockContent['full_size']['vertical_positioning'] : 'top',
                'horizontal_position' => ( $blockContent['full_size']['horizontal_positioning'] ) ? $blockContent['full_size']['horizontal_positioning'] : 'right',
            );
        ?>
    <div class="block-content_inner has-horizontal-layout-<?php echo $block_content['horizontal_position']?> ">
        <div class="block-content has-horizontal-layout-<?php echo $block_content['horizontal_position']?> has-vertical-layout-<?php echo $block_content['vertical_position']?> ">
            <h2 class="block-content-title" style="--text-color: <?php echo $block_content['title_color']?>"><?php echo $block_content['title'] ?></h2>

            <?php if ( $block_content['subtitle'] ): ?>
                <h4 class="block-content-subtitle" style="--text-color: <?php echo $block_content['subtitle_color']?>"><?php echo $block_content['subtitle']?></h4>
            <?php endif; ?>

            <?php if ( $block_content['button_text'] ): ?> 
                <div class="block-content-button <?php echo $block_content['button_style']?>" style="--background-color: <?php echo $block_content['button_color']?>">
                    <span class="button-label" style="--text-color: <?php echo $block_content['button_color']?>"><?php echo $block_content['button_text']?></span>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php endif; ?>
    </div>
</div>

<?php endif; ?>