<?php
    $block5_content = get_field('block5_content', 21616);
?>
<section id="services_reviews-services" class="section--services-grey reviews-services" id="reviews-services">
    <div class="container">
        <div class="section__image section__image--reviews lazy"></div>
        <h2 class="title-page"><?=$block5_content['title']; ?></h2>
        <?php
            if ($block5_content['reviews']) {
        ?>
                <div class="reviews-art__wrap">
                    <?php
                        foreach($block5_content['reviews'] as $key => $value) {
                    ?>
                            <div class="reviews-art__item">
                                <div class="reviews-art__video">
                                    <div class="youtube" data-embed="<?=$value['youtube_id']; ?>" onclick="ym(82134583,'reachGoal','start')">
                                        <div class="youtube__button">
                                            <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#play"></use></svg>
                                        </div>
                                    </div>
                                </div>
                                <a class="reviews-art__content" href="<?=$value['review_link']['url']; ?>">
                                    <h3 class="reviews-art__name"><?=$value['client_name']; ?></h3>
                                    <div class="reviews-art__text"><?=$value['desc']; ?></div>
                                    <span class="reviews-art__link"><?=$value['review_link']['link_text']; ?></span>
                                </a>
                            </div>
                    <?php
                        }
                    ?>            
                </div>
        <?php
            }
        ?>
        <a class="btn btn--big reviews-art__btn" href="<?=$block5_content['button']['url']; ?>"><?=$block5_content['button']['button_text']; ?></a>
    </div>
</section>