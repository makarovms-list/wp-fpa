<div class="swiper-slide">
  <a class="related__item" href="<?php the_permalink() ?>">
    <div class="related__foto">
        <?php 
            if (has_post_thumbnail( $post->ID ) ) {
                /*
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
                <div id="custom-bg" style="background-image: url('<?php echo $image[0]; ?>')">
                */
                the_post_thumbnail('post_thumb');
            } else {
        ?>
                <img width="700" height="400" alt="<?php the_title() ?>" class="attachment-post_thumb size-post_thumb wp-post-image lazyloaded" src="/wp-content/themes/fpalaw/assets/img/info/single-info-preview-v2.png" />
        <?php
            }
        ?>
    </div>
    <div class="related__text"><?php the_title() ?></div>
  </a>
</div>