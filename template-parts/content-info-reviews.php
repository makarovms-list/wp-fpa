<div class="reviews-art__item">
  <div class="reviews-art__video">
    <div class="youtube" data-embed="<?php the_field('id_video'); ?>" onclick="ym(82134583,'reachGoal','start')">
      <div class="youtube__button">
        <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#play"></use></svg>
      </div>
      
    </div>
  </div>
  <a class="reviews-art__content" href="<?php the_permalink() ?>">
    <h3 class="reviews-art__name"><?php the_title() ?></h3>
    <div class="reviews-art__text"><?php the_excerpt() ?></div>
    <span class="reviews-art__link">Подробнее</span>
  </a>
</div>