<?php
    $video_reviews = get_field('video_reviews');
    if ($video_reviews) {
?>
        <style>
            section.reviews-art.unemployed .title__cnt.unemployed,
            section.reviews-art.other .title__cnt.other,
            section.reviews-art.ipoteka .title__cnt.ipoteka,
            section.reviews-art.single_parent .title__cnt.single_parent,
            section.reviews-art.parent_under_three_year .title__cnt.parent_under_three_year,
            section.reviews-art.parent_with_two_children .title__cnt.parent_with_two_children,
            section.reviews-art.pensioner .title__cnt.pensioner,
            section.reviews-art.invalid .title__cnt.invalid,
            section.reviews-art.ip .title__cnt.ip,
            section.reviews-art.army .title__cnt.army,
            section.reviews-art.police .title__cnt.police {
            	display: block!important;
            }
            section.reviews-art.unemployed .reviews-art__wrap.unemployed,
            section.reviews-art.other .reviews-art__wrap.other,
            section.reviews-art.ipoteka .reviews-art__wrap.ipoteka,
            section.reviews-art.single_parent .reviews-art__wrap.single_parent,
            section.reviews-art.parent_under_three_year .reviews-art__wrap.parent_under_three_year,
            section.reviews-art.parent_with_two_children .reviews-art__wrap.parent_with_two_children,
            section.reviews-art.pensioner .reviews-art__wrap.pensioner,
            section.reviews-art.invalid .reviews-art__wrap.invalid,
            section.reviews-art.ip .reviews-art__wrap.ip,
            section.reviews-art.army .reviews-art__wrap.army,
            section.reviews-art.police .reviews-art__wrap.police {
            	display: flex!important;
            }
            section.reviews-art .title__cnt .title-page {
                font-size: 34px;
            }
            section.reviews-art .reviews-art__wrap {
                justify-content: flex-start;
            }
            
            @media (max-width: 992px) {

            }
            @media (max-width: 768px) {

            } 
            @media (max-width: 600px) {

            }
        </style>
        <section class="reviews-art">
            <div class="container">
                <?php foreach($video_reviews['triggers_for_section_display'] as $key => $value) { ?>
                    <?php
                        $additional_classes = '';
                        foreach ($value['answer']['answer_option_'.$value['question']] as $class_key => $class_val) {
                            if ($additional_classes != '') {
                                $additional_classes .= ' ';
                            }
                            $additional_classes .= $class_val['value'];
                        }
                    ?>
                    <div class="title__cnt hidden <?=$value['question']; ?> <?=$additional_classes; ?>" data-answer="<?=$value['answer']['answer_option_'.$value['question']][0]['value']; ?>" data-question="<?=$value['question']; ?>">
                        <div class="title-page title-page--tiny"><?=$value['publications']['publication_option_'.$value['question']]['title']; ?></div>
                    </div>
                <?php } ?>
                
                <!--<h2 class="title-page title-page--tiny"><?=$video_reviews['title']; ?></h2>-->
                <?php foreach($video_reviews['triggers_for_section_display'] as $key => $value) { ?>
                    <?php
                        $additional_classes = '';
                        foreach ($value['answer']['answer_option_'.$value['question']] as $class_key => $class_val) {
                            if ($additional_classes != '') {
                                $additional_classes .= ' ';
                            }
                            $additional_classes .= $class_val['value'];
                        }
                    ?>
                    <div class="reviews-art__wrap hidden <?=$value['question']; ?> <?=$additional_classes; ?>" data-question="<?=$value['question']; ?>" data-answer="<?=$value['answer']['answer_option_'.$value['question']][0]['value']; ?>">
                        
                            
                        <?php foreach($value['publications']['publication_option_'.$value['question']]['publication'] as $publication_key => $publication_value) { ?>
                            <?php if ($publication_key < 3) { ?>
                            <div class="reviews-art__item">
                                <div class="reviews-art__video">
                                    <div class="youtube" data-embed="<?php the_field('id_video', $publication_value->ID); ?>" onclick="ym(82134583,'reachGoal','start')">
                                        <div class="youtube__button"><svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#play"></use></svg></div>
                                    </div>
                                </div>
                                <a class="reviews-art__content" href="<?php the_permalink($publication_value->ID) ?>">
                                    <h3 class="reviews-art__name"><?=$publication_value->post_title; ?></h3>
                                    <div class="reviews-art__text"><?=$publication_value->post_excerpt; ?></div>
                                    <span class="reviews-art__link">Подробнее</span>
                                </a>
                            </div>
                                <?php $publication_key++; ?>
                            <?php } ?>
                        <?php } ?>
                            
                        
                        
                    </div>
                <?php } ?>
                <a class="btn btn--big reviews-art__btn <?=$video_reviews['button']['color_scheme']['label']; ?>" href="<?=$video_reviews['button']['url']; ?>"><?=$video_reviews['button']['text']; ?></a>
            </div>
        </section>
<?php
    }
?>