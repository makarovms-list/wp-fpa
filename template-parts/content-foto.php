<article class="reviews__item">
  <a class="reviews__link" href="<?php the_permalink() ?>">
    <div class="reviews__foto">
      <?php the_post_thumbnail( 'post_otzyvy_thumb' )?>
      <div class="reviews__data">
        <div class="reviews__case">
          <span class="reviews__data-name">Дело: </span>
          <span class="reviews__data-count"><?php the_field('case'); ?></span>
        </div>
        <div class="reviews__debt">
          <span class="reviews__data-name">Списан долг: </span>
          <span class="reviews__data-name reviews__data-name--mobile">Списано: </span>
          <span class="reviews__data-count"><?php the_field('amount_of_debt'); ?> ₽</span>
        </div>
      </div>
    </div>
    <div class="reviews__content">
      <div class="reviews__name"><?php the_title() ?></div>
      <div class="reviews__text"><?php the_excerpt() ?></div>
      <span class="reviews__detailed">Подробнее</span>
    </div>
  </a>
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
</article>