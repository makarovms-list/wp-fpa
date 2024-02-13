<?php
    $id = 'gutenberg-slider-block-' . $block['id'];
    if( !empty($block['anchor']) ) {
        $id = $block['anchor'];
    }
 
    // Create class attribute allowing for custom "className" and "align" values.
    $className = 'gutenberg-slider-block';
    if( !empty($block['className']) ) {
        $className .= ' ' . $block['className'];
    }
    if( !empty($block['align']) ) {
        $className .= ' align' . $block['align'];
    }
 
    // Load values and assing defaults.
    $slider = get_field('slider');
    if (!empty($slider)) {
?>

<style>
    
    .gutenberg-slider-block {
        position: relative;
    }
    .gutenberg-slider-block .image-slider-cnt {
        overflow: hidden;
    }
    .gutenberg-slider-block .swiper-button-prev-slider {
        width: 32px;
        height: 32px;
        background: #fff;
        opacity: 1;
        border-radius: 50%;
        left: -16px;
        box-shadow: 0px 4px 14px 0px #0025661A;
        position: absolute;
        top: calc(50% - 16px);
        z-index: 999;
        cursor: pointer;
    }
    .gutenberg-slider-block .swiper-button-next-slider {
        width: 32px;
        height: 32px;
        background: #fff;
        opacity: 1;
        border-radius: 50%;
        right: -16px;
        box-shadow: 0px 4px 14px 0px #0025661A;
        position: absolute;
        top: calc(50% - 16px);
        z-index: 999;
        cursor: pointer;
    }
    .gutenberg-slider-block .image-slider-item img {
        margin-bottom: 10px;
    }
    .gutenberg-slider-block .image-slider-item span.title {
        color: #717B97;
        font-family: Inter;
        font-size: 16px;
        font-weight: 400;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: center;
        display: block;
        margin-bottom: 10px;
    } 
    .gutenberg-slider-block  .swiper-pagination-slider {
        width: 100%;
    }
    
    
    
</style>
        <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> swiper">
            <div class="image-slider-cnt swiper-wrapper">
                <?php
                    foreach ($slider as $key => $value) {
                ?>
                    <div class="image-slider-item swiper-slide">
                        <picture>
                            <img src="<?=$value['url']; ?>" alt="<?=$value['title']; ?>" title="<?=$value['title']; ?>" />
                            <span class="title"><?=$value['title']; ?></span>
                        </picture>
                    </div>
                <?php
                    }
                ?>
            </div>
            <div class="swiper-pagination-slider"></div>
            <div class="swiper-button-prev-slider">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.6669 8L20.5469 9.88L14.4402 16L20.5469 22.12L18.6669 24L10.6669 16L18.6669 8Z" fill="#393939"/></svg>
            </div>
            <div class="swiper-button-next-slider">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.3331 8L11.4531 9.88L17.5598 16L11.4531 22.12L13.3331 24L21.3331 16L13.3331 8Z" fill="#393939"/></svg>
            </div>
        </div>
<?php
    }
?>