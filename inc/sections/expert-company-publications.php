<style>
.thanks__company_publications {
    margin-bottom: 75px;
}
.thanks__company_publications .big-title {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 600;
    font-size: 34px;
    line-height: 145%;
    color: #393939;
    margin-bottom: 36px;
}
.thanks__company_publications .media-info__logo img {
    object-fit: cover;
    border-radius: 50%;
    object-position: top center;
    max-width: 50px;
    height: 50px;
    width: 50px;
    max-height: 50px;
    background: #edf0f8;
}
.thanks__company_publications .sngl__cnt {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: 18px auto;
    grid-column-gap: 8px;
    grid-row-gap: 8px;
    align-items: center;
    justify-content: flex-start;
}
.thanks__company_publications .sngl__cnt .sngl-head__data--icon svg {
    width: 18px;
    height: 18px;
    fill: #717b97;
}
.thanks__company_publications .sngl__cnt .txt {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 145%;
    display: flex;
    align-items: center;
    color: #717B97;
}
.btn--expert--show {
    font-size: 14px;
    min-width: 275px;
    margin: 0 auto;
    margin-top: 60px;
    line-height: 1.4;
}
.btn--expert--show.load svg {
    -webkit-animation-play-state: running;
    animation-play-state: running;
}
@media (max-width: 768px) {
    .thanks__company_publications .big-title {
        font-size: 22px;
    }
}
</style>
<?php 
    $company_publications = get_field('company_publications');
    //print_r($company_publications);
    
?>
<div class="thanks__company_publications">
    <div class="big-title"><?=$company_publications['title']; ?></div>
    <div class="company_publications_cnt article__cnt" data-count-items="3">
        <?php
            
            $publications_params = array(
                'post_type' => 'info',
                'post_status' => 'publish',
                'numberposts' => -1
            );
            /*
                'meta_query' => array(
                    'key' => 'author_name', 
                    'value'   => $company_publications['author'], 
                    'compare' => '=='
                )
            */
            //print_r($publications_params);
            $publications = get_posts($publications_params);
            $current_key = 0;
            foreach ($publications as $key => $item) {
                $author_name = get_field('author_name', $item->ID);
                //echo $author_name." == ".$company_publications['author']."<br/>";
                if ($author_name == $company_publications['author']) {
                    $current_key++;
                    $post = $item;
                    $date_publ = get_field('date_publ', $item->ID);
                    $number_of_views = get_field('number_of_views', $item->ID);
                    $reading_time = get_field('reading_time', $item->ID);
                    $author_post = get_field('author_post', $item->ID);
                    $author_story = get_field('author_story', $item->ID);
                    $author__foto = get_field('author__foto', $item->ID);
                    $rating_single = get_field('rating_single', $item->ID);
                    $quantity_of_voices = get_field('quantity_of_voices', $item->ID);
                    $text_of_voices = get_field('text_of_voices', $item->ID);
                    $hidden_class = "";
                    if ($current_key > 3) { $hidden_class = "hidden"; }
                    /*print_r($author__foto);*/
        ?>
                    <article class="news-media__item <?=$hidden_class; ?>">
                        <a class="news-media__link" href="<?=the_permalink($item->ID); ?>" title="<?=$item->post_title; ?>" rel="nofollow">
                            <div class="news-media__header">
                                <div class="news-media__date"><?=date('d.m.Y', strtotime($post->post_date)); ?></div>
                                <h2 class="news-media__name"><?=$post->post_title; ?></h2>
                            </div>
                            <ul class="media-info news-media__media-info">
                                <li class="media-info__item">
                                    <span class="media-info__logo">
                                        <img src="<?=$author__foto['url']; ?>" />
                                    </span>
                                    <span class="media-info__data">
                                        <span class="media-info__title">Автор:</span>
                                        <span class="media-info__author"><?=$author_name; ?></span>
                                    </span>
                                </li>
                                <li class="sngl-head__item">
                                    <span class="media-info__title">Просмотров</span>
                                    <span class="sngl__cnt">
                                        <span class="sngl-head__data sngl-head__data--icon"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#show"></use></svg></span>
                                        <span class="txt"><?=$quantity_of_voices; ?></span>
                                    </span>
                                </li>
                                <li class="sngl-head__item">
                                    <span class="media-info__title">Время прочтения</span>
                                    <span class="sngl__cnt">
                                        <span class="sngl-head__data sngl-head__data--icon"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#time"></use></svg></span>
                                        <span class="txt"><?=$reading_time; ?></span>
                                    </span>
                                </li>
                            </ul>
                        </a>
                    </article>
        <?php
                }
            }
            wp_reset_postdata(); 
        ?>
        <button class="btn btn--expert--show <?php if ($current_key < 4) { echo "hidden"; } ?>">
            <span class="btn__icon btn__icon--load"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#load"></use></svg></span>
            <span class="btn__text">Показать ещё</span>
        </button>
    </div>
</div>

