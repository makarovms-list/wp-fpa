<div class="swiper-slide">
  <div class="career__item">
    <div class="career__foto">
      <?php the_post_thumbnail( 'post_thumb' )?>
    </div>
    <div class="career__inner">
      <p class="career__name"><?php the_title() ?></p>
      <div class="career__description">
        <?php the_excerpt() ?>
      </div>
      <a class="btn career__link-slider" href="<?php the_permalink() ?>" target="_blank">Подробнее </a>
    </div>
  </div>
</div>