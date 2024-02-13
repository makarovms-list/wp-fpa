<article class="reviews__item reviews__item-v2">
    <div class="reviews__video">
        <div class="youtube" data-embed="<?php the_field('id_video'); ?>">
            <div class="youtube__button">
                <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#play"></use></svg>
            </div>
        </div>
    </div>
    <div class="reviews__inner">
        <a class="reviews__content" href="<?php the_permalink() ?>">
            <h3 class="reviews__name-v2"><?php the_title() ?></h3>
        </a>
        <div class="sud_links__cnt">
            <a class="original-link-v2" href="<?php the_field('link_court_ruling'); ?>" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области">
                <span class="original-link__thumb-v2 original-link__thumb--ruling-v2"></span>
                <span class="title">Оригинал<br> определения суда</span>
            </a>
            <a class="original-link-v2" href="<?php the_field('link_cards'); ?>" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области">
                <span class="original-link__thumb-v2 original-link__thumb--cardfile-v2"></span>
                <span class="title">Картотека<br> арбитражного суда</span>
            </a>        
        </div>
        <div class="reviews__text"><?php the_truncated_post(400); /*the_excerpt();*/ ?></div>
    </div>
</article>