<?php
    $id = 'gutenberg-custom-image-block-' . $block['id'];
    if( !empty($block['anchor']) ) {
        $id = $block['anchor'];
    }
 
    // Create class attribute allowing for custom "className" and "align" values.
    $className = 'gutenberg-custom-image-block';
    if( !empty($block['className']) ) {
        $className .= ' ' . $block['className'];
    }
    if( !empty($block['align']) ) {
        $className .= ' align' . $block['align'];
    }
 
    // Load values and assing defaults.
    $desktop_image = get_field('desktop_image');
    $tablet_image = get_field('tablet_image');
    $mobile_image = get_field('mobile_image');
    $alt_value = get_field('alt_value');
    
    if ($mobile_image['url'] != '' || $tablet_image['url'] != '' || $desktop_image['url'] != '') {
?>
        <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
            <picture>
                <source srcset="<?=$mobile_image['url']; ?>" media="(max-width: 576px)">
                <source srcset="<?=$tablet_image['url']; ?>" media="(max-width: 992px)">
                <img src="<?=$desktop_image['url']; ?>" alt="<?=$alt_value; ?>">
            </picture>
        </div>
<?php
    }
?>
    