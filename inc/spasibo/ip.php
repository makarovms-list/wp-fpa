<?php
    $ip = get_field('ip');
    if ($ip) {
?>
        <style>
            section.ip__cnt {
                position: relative;
                margin-bottom: 0;
                overflow: hidden;
            }
            section.ip__cnt.unemployed,
            section.ip__cnt.other {
                background: #5381F6;
            }
            section.ip__cnt.ipoteka {
                background: #EC4A48;
            }
            section.ip__cnt.single_parent,
            section.ip__cnt.parent_under_three_year,
            section.ip__cnt.parent_with_two_children {
                background: #5381F6;
            }
            section.ip__cnt.pensioner {
                background: linear-gradient(135deg, #EDF0F8 0%, #D7DEEF 100%);
            }
            section.ip__cnt.invalid {
                background: linear-gradient(135deg, #EDF0F8 0%, #D7DEEF 100%);
            }
            section.ip__cnt.ip {
                background: #5381F6;
            }
            section.ip__cnt.army {
                background: #EC4A48;
            }
            section.ip__cnt.police {
                background: #EC4A48;
            }
            section.ip__cnt:before {
                content: "";
                position: absolute;
                width: 100%;
                height: 100%;
                right: 0;
                bottom: 0;
            }
            section.ip__cnt.unemployed:before,
            section.ip__cnt.other:before {
                background: url(/wp-content/themes/fpalaw/assets/img/spasibo/unemployed.svg);
                background-size: contain;
                background-position: center right;
                background-repeat: no-repeat;
            }
            section.ip__cnt.ipoteka:before {
                background: url(/wp-content/themes/fpalaw/assets/img/spasibo/ipoteka.svg);
                background-size: contain;
                background-position: center right;
                background-repeat: no-repeat;
                opacity: 0.3;
            }
            section.ip__cnt.single_parent:before,
            section.ip__cnt.parent_under_three_year:before,
            section.ip__cnt.parent_with_two_children:before {
                background: url(/wp-content/themes/fpalaw/assets/img/spasibo/family.svg);
                background-size: contain;
                background-position: center right;
                background-repeat: no-repeat;
            }
            section.ip__cnt.pensioner:before {
                background: url(/wp-content/themes/fpalaw/assets/img/spasibo/pensioner.svg);
                background-size: contain;
                background-position: center right;
                background-repeat: no-repeat;
                opacity: 0.3;
            }
            section.ip__cnt.invalid:before {
                background: url(/wp-content/themes/fpalaw/assets/img/spasibo/invalid.svg);
                background-size: contain;
                background-position: center right;
                background-repeat: no-repeat;
            }
            section.ip__cnt.ip:before {
                background: url(/wp-content/themes/fpalaw/assets/img/spasibo/ip.svg);
                background-size: contain;
                background-position: center right;
                background-repeat: no-repeat;
            }
            section.ip__cnt.army:before {
                background: url(/wp-content/themes/fpalaw/assets/img/spasibo/army.svg);
                background-size: contain;
                background-position: center right;
                background-repeat: no-repeat;
                opacity: 0.3;
            }
            section.ip__cnt.police:before {
                background: url(/wp-content/themes/fpalaw/assets/img/spasibo/police.svg);
                background-size: contain;
                background-position: center right;
                background-repeat: no-repeat;
                opacity: 0.3;
            }
            section.ip__cnt .h1_title {
                font-weight: 700;
                font-size: 48px;
                line-height: 145%;
                text-transform: uppercase;
                color: #FFF;
                margin-bottom: 40px;
            }
            section.ip__cnt.pensioner .h1_title,
            section.ip__cnt.invalid .h1_title {
                color: #393939;
            }
            
            section.ip__cnt .list__cnt .item__cnt {
                display: grid;
                grid-template-rows: auto;
                grid-template-columns: 48px auto;
                grid-column-gap: 24px;
                grid-row-gap: 24px;
                margin-bottom: 24px;
                align-items: center;
            }
            section.ip__cnt .list__cnt .item__cnt .num span {
                font-weight: 700;
                font-size: 18px;
                line-height: 145%;
                display: flex;
                text-align: center;
                color: #5381F6;
                width: 48px;
                height: 48px;
                background: #fff;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                border: 2px solid #7EA3FF;
            }
            section.ip__cnt.pensioner .list__cnt .item__cnt .num span,
            section.ip__cnt.invalid .list__cnt .item__cnt .num span {
                color: #393939;
                border: 2px solid #393939;
            }
            section.ip__cnt .list__cnt .item__cnt .content .title {
                font-weight: 500;
                font-size: 26px;
                line-height: 145%;
                color: #FFFFFF;
                margin-bottom: 8px;
            }
            section.ip__cnt.pensioner .list__cnt .item__cnt .content .title,
            section.ip__cnt.invalid .list__cnt .item__cnt .content .title {
                color: #393939;
            }
            section.ip__cnt .list__cnt .item__cnt .content .subtitle {
                font-weight: 400;
                font-size: 16px;
                line-height: 145%;
                color: #FFFFFF;
            }
            section.ip__cnt.pensioner  .list__cnt .item__cnt .content .subtitle,
            section.ip__cnt.invalid .list__cnt .item__cnt .content .subtitle {
                color: #393939;
                margin-bottom: 0;
            }
            /*
            section.ip__cnt .photo__cnt:before {
                content: '';
                background: linear-gradient(135deg, #EDF0F8 14.64%, #D7DEEF 85.36%);
                border-radius: 50%;
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
            }
            */
            section.ip__cnt.unemployed .photo__cnt,
            section.ip__cnt.other .photo__cnt {
                background: url(/wp-content/themes/fpalaw/assets/img/spasibo/unemployed_photo.svg);
                background-size: contain;
                background-position: bottom left;
                background-repeat: no-repeat;
            }
            section.ip__cnt.ipoteka .photo__cnt {
                background: url(/wp-content/themes/fpalaw/assets/img/spasibo/ipoteka_photo.svg);
                background-size: contain;
                background-position: bottom left;
                background-repeat: no-repeat;
            }
            section.ip__cnt.single_parent .photo__cnt,
            section.ip__cnt.parent_under_three_year .photo__cnt,
            section.ip__cnt.parent_with_two_children .photo__cnt {
                background: url(/wp-content/themes/fpalaw/assets/img/spasibo/family_photo.svg);
                background-size: contain;
                background-position: bottom left;
                background-repeat: no-repeat;
            }
            section.ip__cnt.pensioner .photo__cnt {
                background: url(/wp-content/themes/fpalaw/assets/img/spasibo/pensioner_photo.png);
                background-size: contain;
                background-position: bottom left;
                background-repeat: no-repeat;
            }
            section.ip__cnt.invalid .photo__cnt {
                background: url(/wp-content/themes/fpalaw/assets/img/spasibo/invalid_photo.png);
                background-size: contain;
                background-position: bottom left;
                background-repeat: no-repeat;
            }
            section.ip__cnt.ip .photo__cnt {
                background: url(/wp-content/themes/fpalaw/assets/img/spasibo/ip_photo.svg);
                background-size: contain;
                background-position: bottom left;
                background-repeat: no-repeat;
            }
            section.ip__cnt.army .photo__cnt {
                background: url(/wp-content/themes/fpalaw/assets/img/spasibo/army_photo.svg);
                background-size: contain;
                background-position: bottom left;
                background-repeat: no-repeat;
            }
            section.ip__cnt.police .photo__cnt {
                background: url(/wp-content/themes/fpalaw/assets/img/spasibo/police__photo.svg);
                background-size: contain;
                background-position: bottom left;
                background-repeat: no-repeat;
            }
            section.ip__cnt.unemployed .title__cnt.unemployed,
            section.ip__cnt.other .title__cnt.other,
            section.ip__cnt.ipoteka .title__cnt.ipoteka,
            section.ip__cnt.single_parent .title__cnt.single_parent,
            section.ip__cnt.parent_under_three_year .title__cnt.parent_under_three_year,
            section.ip__cnt.parent_with_two_children .title__cnt.parent_with_two_children,
            section.ip__cnt.pensioner .title__cnt.pensioner,
            section.ip__cnt.invalid .title__cnt.invalid,
            section.ip__cnt.ip .title__cnt.ip,
            section.ip__cnt.army .title__cnt.army,
            section.ip__cnt.police .title__cnt.police {
            	display: block!important;
            }
            section.ip__cnt.unemployed .content__cnt.unemployed,
            section.ip__cnt.other .content__cnt.other,
            section.ip__cnt.ipoteka .content__cnt.ipoteka,
            section.ip__cnt.single_parent .content__cnt.single_parent,
            section.ip__cnt.parent_under_three_year .content__cnt.parent_under_three_year,
            section.ip__cnt.parent_with_two_children .content__cnt.parent_with_two_children,
            section.ip__cnt.pensioner .content__cnt.pensioner,
            section.ip__cnt.invalid .content__cnt.invalid,
            section.ip__cnt.ip .content__cnt.ip,
            section.ip__cnt.army .content__cnt.army,
            section.ip__cnt.police .content__cnt.police {
            	display: block!important;
            }
            section.ip__cnt .content__cnt {
                max-width: 60%;
            }
            
            @media (max-width: 992px) {
                section.ip__cnt .h1_title {
                    font-size: 26px;
                }
                section.ip__cnt .inner.inner--mobile {
                    margin-top: 60px;
                }
                section.ip__cnt .list__cnt .item__cnt .content .title {
                    font-size: 22px;
                }
                section.ip__cnt .list__cnt .item__cnt .content .subtitle {
                    font-size: 14px;
                }
                section.ip__cnt.ip:before {
                    background-position: bottom right!important;
                    background-size: 50%!important;
                }
            }
            @media (max-width: 768px) {
                section.ip__cnt .h1_title {
                    text-align: center;
                }
                section.ip__cnt .content__cnt {
                    max-width: 100%;
                }
                section.ip__cnt.unemployed:before,
                section.ip__cnt.other:before {
                    background: url(/wp-content/themes/fpalaw/assets/img/spasibo/unemployed_mobile.svg);
                    background-size: contain;
                    background-repeat: no-repeat;
                    margin-bottom: -60px;
                    margin-right: -80px;
                }
                section.ip__cnt:before {
                    background-position: bottom right!important;
                }
                
                
                
                section.ip__cnt .inner__wrap {
                    margin-bottom: 48px;
                }
                
                
            }
            @media (max-width: 600px) {
                section.ip__cnt .h1_title {
                    font-size: 22px;
                    text-align: center;
                }
                section.ip__cnt .inner.inner--mobile {
                    margin-top: 48px;
                }
            }
            
            
            
            
            


            
            
            
            
            

        </style>
        <section class="section ip__cnt">
            <div class="inner inner--mobile">
                <div class="container">
                    <div class="inner__wrap">
                        <div class="inner__row inner__row--mobile">
                            <div class="inner__block">
                                <div class="inner__row inner__row--mobile">
                                    <?php foreach($ip['triggers_for_section_display'] as $key => $value) { ?>
                                        <?php
                                            $additional_classes = '';
                                            foreach ($value['answer']['answer_option_'.$value['question']] as $class_key => $class_val) {
                                                if ($additional_classes != '') {
                                                    $additional_classes .= ' ';
                                                }
                                                $additional_classes .= $class_val['value'];
                                            }
                                        ?>
                                        <div class="title__cnt hidden <?=$value['question']; ?> <?=$additional_classes; ?>" data-question="<?=$value['question']; ?>" data-answer="<?=$value['answer']['answer_option_'.$value['question']][0]['value']; ?>">
                                            <div class="h1_title"><?=$value['content']['content_option_'.$value['question']]['title']; ?></div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="inner__row inner__row--mobile">
                                    <?php foreach($ip['triggers_for_section_display'] as $key => $value) { ?>
                                        <?php
                                            $additional_classes = '';
                                            foreach ($value['answer']['answer_option_'.$value['question']] as $class_key => $class_val) {
                                                if ($additional_classes != '') {
                                                    $additional_classes .= ' ';
                                                }
                                                $additional_classes .= $class_val['value'];
                                            }
                                        ?>
                                        <div class="content__cnt hidden <?=$value['question']; ?> <?=$additional_classes; ?>" data-question="<?=$value['question']; ?>" data-answer="<?=$value['answer']['answer_option_'.$value['question']][0]['value']; ?>">
                                            <div class=list__cnt>
                                                <?php foreach($value['content']['content_option_'.$value['question']]['advantages'] as $adv_key => $adv_val) { ?>        
                                                    <div class="item__cnt">
                                                        <div class="num">
                                                            <span><?=($adv_key+1); ?></span>
                                                        </div>
                                                        <div class="content">
                                                            <p class="subtitle"><?=$adv_val['text']; ?></p>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>   
                                        </div>
                                    <?php } ?>
                                    <!--
                                    <div class=list__cnt>
                                        <?php foreach($ip['advantages'] as $key => $value) { ?>        
                                            <div class="item__cnt">
                                                <div class="num">
                                                    <span><?=($key+1); ?></span>
                                                </div>
                                                <div class="content">
                                                    <p class="title"><?=$value['title']; ?></p>
                                                    <p class="subtitle"><?=$value['text']; ?></p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    -->
                                    <div class=photo__cnt>
                                        <img alt="Фото специалиста" title="Головин Алексей Юрьевич" loading="lazy" data-src="<?=$ip['urist_photo']['url']; ?>" class=" lazyloaded" src="<?=$ip['urist_photo']['url']; ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
    }
?>