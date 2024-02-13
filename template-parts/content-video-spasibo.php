<div class="review-video__cnt" data-publication-date="<?=get_the_date( '',  $post->ID); ?>" data-customer-name="<?=$post->post_title; ?>">
    <div class="reviews-item">
        <div class="youtube" data-embed="<?=get_field('id_video', $post->ID); ?>" onclick="ym(82134583,'reachGoal','start')">
            <div class="youtube__button">
                <svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg>
            </div>
            <img src="https://img.youtube.com/vi/<?=get_field('id_video', $post->ID); ?>/maxresdefault.jpg" alt="Превью для видео">
        </div>
    </div>
</div>