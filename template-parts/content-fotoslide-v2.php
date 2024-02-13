<div class="swiper-slide">
  <div class="slider-reviews__item">
    <div class="slider-reviews__foto">
      <?php the_post_thumbnail( 'post_otzyvy_thumb' )?>
    </div>
    <a class="slider-reviews__detailed" href="<?php the_permalink() ?>">
    <div class="slider-reviews__content">
      <div class="slider-reviews__name"><?php the_title() ?></div>
      <div class="amount__cnt">
        <span class="reviews__data-count">Долг: <?php the_field('amount_of_debt'); ?> ₽</span>
      </div>
    </div>
        </a>
  </div>
</div>