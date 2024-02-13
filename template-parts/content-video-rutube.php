<article class="reviews__item">
  <div class="reviews__video">
    <div class="youtube hidden" data-embed="<?php the_field('id_video'); ?>">
      <div class="youtube__button">
        <svg>
          <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#play"></use>
        </svg>
      </div>
    </div>
    <div class="rutube">
        <?php the_field('rutube_link'); ?>
    </div>
  </div>
  

  
  <div class="reviews__inner">
    <div class="reviews__original">
      <a class="original-link" href="<?php the_field('link_court_ruling'); ?>" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области">
        <span class="original-link__thumb original-link__thumb--ruling original-link__thumb--small"></span>
        <span>Оригинал<br> определения суда</span>
      </a>
      <a class="original-link" href="<?php the_field('link_cards'); ?>" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области">
        <span class="original-link__thumb original-link__thumb--cardfile original-link__thumb--small"></span>
        <span>Картотека<br> арбитражного суда</span>
      </a>
    </div>
    <a class="reviews__content" href="<?php the_permalink() ?>">
      <h3 class="reviews__name"><?php the_title() ?></h3>
      <div class="reviews__text"><?php the_excerpt() ?></div>
      <span class="reviews__detailed">Подробнее</span>
    </a>
  </div>
</article>