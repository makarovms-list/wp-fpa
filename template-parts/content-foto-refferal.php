<article class="reviews__item-v2">
    <a class="reviews__link-v2" href="<?php the_permalink() ?>">
        <div class="reviews__foto-v2">
            <?php the_post_thumbnail( 'post_otzyvy_thumb' )?>
            <div class="reviews__data-v2">
                <div class="reviews__case-v2">
                    <span class="reviews__data-name-v2">Дело: </span>
                    <span class="reviews__data-name-v2 reviews__data-name--mobile-v2">Дело: </span>
                    <span class="reviews__data-count-v2"><?php the_field('case'); ?></span>
                </div>
                <div class="reviews__debt-v2">
                    <span class="reviews__data-name-v2">Списан долг: </span>
                    <span class="reviews__data-name-v2 reviews__data-name--mobile-v2">Списано: </span>
                    <span class="reviews__data-count-v2"><?php the_field('amount_of_debt'); ?> ₽</span>
                </div>
            </div>
        </div>
    </a>
    <div class="reviews__content-v2">
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
        <div class="reviews__text-v2"><?php the_truncated_post(300); /*the_excerpt();*/ ?></div>
    </div>
    
</article>