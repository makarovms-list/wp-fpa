<?php 
    $video_publications = get_field('video_publications');
    if ($video_publications['publications']) {
?>
        <style>
            .thanks__video_publications .big-title {
                font-family: 'Inter';
                font-style: normal;
                font-weight: 600;
                font-size: 34px;
                line-height: 145%;
                color: #393939;
                margin-bottom: 36px;
            }
            .thanks__video_publications .grid__cnt {
                display: grid;
                grid-template-rows: auto;
                grid-template-columns: repeat(2,1fr);
                grid-column-gap: 0px;
                grid-row-gap: 0px;
            }
            .thanks__video_publications .reviews__item {
                margin-bottom: 20px;
            }
            .thanks__video_publications .grid__cnt article {
                margin-bottom: 0px;    
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
                .thanks__video_publications .big-title {
                    font-size: 22px;
                }
                .thanks__video_publications .grid__cnt {
                    display: block;
                }
            }
        </style>
        <div class="thanks__video_publications article__cnt" data-count-items="2">
            <div class="big-title"><?=$video_publications['title']; ?></div>
            <div class="video_publications_cnt">
                <?php
                    foreach ($video_publications['publications'] as $key => $item) {
                        /*print_r($item);*/
                        $hidden_class = "";
                        if ($key > 2) { $hidden_class = "hidden"; }
                        if ($key == 1) { echo '<div class="grid__cnt">'; }
                ?>
                        <article class="reviews__item <?=$hidden_class; ?>">
                            <div class="reviews__video">
                                <div class="youtube" data-embed="<?=$item['id_video_youtube']; ?>">
                                    <div class="youtube__button">
                                        <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#play"></use></svg>
                                    </div>
                                </div>
                            </div>
                        </article>
                <?php
                    }
                    if ($key > 0) { echo "</div>"; }
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