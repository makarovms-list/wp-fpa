<div class="swiper-slide">
  <div class="slider-reviews__item">
    <div class="slider-reviews__foto">
      <?php the_post_thumbnail( 'post_otzyvy_thumb' )?>
    </div>
    <div class="slider-reviews__content">
      <div class="slider-reviews__name"><?php the_title() ?></div>
      <a class="slider-reviews__detailed" href="<?php the_permalink() ?>">Подробнее</a>
    </div>
  </div>
</div>