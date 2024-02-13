<?php 
    $media_publications = get_field('media_publications');
    if ($media_publications['publications']) {
?>
        <style>
            .thanks__media_publications {
                margin-bottom: 75px;
            }
            .thanks__media_publications .big-title {
                font-family: 'Inter';
                font-style: normal;
                font-weight: 600;
                font-size: 34px;
                line-height: 145%;
                color: #393939;
                margin-bottom: 36px;
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
                .thanks__media_publications .big-title {
                    font-size: 22px;
                }
                .thanks__media_publications {
                    margin-top: 44px;
                }
            }
        </style>
        <div class="thanks__media_publications">
            <div class="big-title"><?=$media_publications['title']; ?></div>
            <div class="media_publications_cnt article__cnt" data-count-items="3">
                <?php
                    foreach ($media_publications['publications'] as $key => $item) {
                        $post = get_post($item);
                        $name_smi = get_field('name_smi', $item);
                        $link_smi = get_field('link_smi', $item);
                        $logo_smi = get_field('logo_smi', $item);
                        $desc_smi = get_field('desc_smi', $item);
                        $comment_fpa = get_field('comment_fpa', $item);
                        $hidden_class = "";
                        if ($key > 2) { $hidden_class = "hidden"; }
                ?>
                        <article class="news-media__item <?=$hidden_class; ?>">
                            <a class="news-media__link" href="<?=$link_smi; ?>" title="<?=$desc_smi; ?>" rel="nofollow">
                                <div class="news-media__header">
                                    <div class="news-media__date"><?=date('d.m.Y', strtotime($post->post_date)); ?></div>
                                    <h2 class="news-media__name"><?=$post->post_title; ?></h2>
                                </div>
                                <ul class="media-info news-media__media-info">
                                    <li class="media-info__item">
                                        <span class="media-info__logo">
                                            <img src="<?=$logo_smi; ?>" />
                                        </span>
                                        <span class="media-info__data">
                                            <span class="media-info__title">Ссылка на статью: </span>
                                            <span class="media-info__link"><?=$name_smi; ?></span>
                                        </span>
                                    </li>
                                    <li class="media-info__item">
                                        <span class="media-info__foto media-info__foto--sorokin"></span>
                                        <span class="media-info__data">
                                            <span class="media-info__title">Комментарий СМИ предоставляет:</span>
                                            <span class="media-info__author"><?=$comment_fpa['label']; ?></span>
                                        </span>
                                    </li>
                                </ul>
                            </a>
                        </article>
                <?php
                    }
                    wp_reset_postdata(); 
                ?>
                <button class="btn btn--expert--show <?php if ($key < 3) { echo "hidden"; } ?>">
                    <span class="btn__icon btn__icon--load"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#load"></use></svg></span>
                    <span class="btn__text">Показать ещё</span>
                </button>
            </div>
        </div>
<?php
    }
?>