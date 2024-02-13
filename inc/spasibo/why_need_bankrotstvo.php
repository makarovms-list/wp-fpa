<?php
    $why_need_bankrotstvo = get_field('why_need_bankrotstvo');
    if ($why_need_bankrotstvo) {
?>
        <style>
            section.why_need_bankrotstvo.unemployed .content__cnt.unemployed,
            section.why_need_bankrotstvo.other .content__cnt.other,
            section.why_need_bankrotstvo.ipoteka .content__cnt.ipoteka,
            section.why_need_bankrotstvo.single_parent .content__cnt.single_parent,
            section.why_need_bankrotstvo.parent_under_three_year .content__cnt.parent_under_three_year,
            section.why_need_bankrotstvo.parent_with_two_children .content__cnt.parent_with_two_children,
            section.why_need_bankrotstvo.pensioner .content__cnt.pensioner,
            section.why_need_bankrotstvo.invalid .content__cnt.invalid,
            section.why_need_bankrotstvo.ip .content__cnt.ip,
            section.why_need_bankrotstvo.army .content__cnt.army,
            section.why_need_bankrotstvo.police .content__cnt.police {
            	display: flex!important;
            }
            section.why_need_bankrotstvo {
                position: relative;
                background: url(/wp-content/themes/fpalaw/assets/img/spasibo/why_need_bankrotstvo.png) center top no-repeat;
                padding: 100px 0;
                margin-bottom: 0;
            }
            section.why_need_bankrotstvo:before {
                content: '';
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                background: rgba(236, 74, 72, 0.8);
                z-index: -2;
            }
            section.why_need_bankrotstvo:after {
                content: '';
                background: url(/wp-content/themes/fpalaw/assets/img/spasibo/why_need_bankrotstvo_question.png) right bottom no-repeat;
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                right: 0;
                z-index: -1;
                background-size: contain;
                
            }
            section.why_need_bankrotstvo .title__cnt .title-page {
                text-align: left;
                font-family: 'Inter';
                font-style: normal;
                font-weight: 700;
                font-size: 54px;
                line-height: 145%;
                color: #FFFFFF;
                text-shadow: 0px 4px 12px rgb(0 0 0 / 25%);
                margin-bottom: 40px;
            }
            section.why_need_bankrotstvo .content__cnt .content {
                font-family: 'Inter';
                font-style: normal;
                font-weight: 500;
                font-size: 24px;
                line-height: 145%;
                color: #FFFFFF;
            }
            
            
            @media (max-width: 992px) {
                section.why_need_bankrotstvo:after {
                    opacity: 0.4;
                }
                section.why_need_bankrotstvo .title__cnt .title-page {
                    font-size: 34px;
                }
                section.why_need_bankrotstvo .content__cnt .content {
                    font-size: 20px;
                }
            }
            @media (max-width: 768px) {

            } 
            @media (max-width: 600px) {
                section.why_need_bankrotstvo .title__cnt .title-page {
                    font-size: 24px;
                }
                section.why_need_bankrotstvo .content__cnt .content {
                    font-size: 16px;
                }
            }
        </style>
        <section class="section why_need_bankrotstvo">
            <div class="container">
                <div class="title__cnt">
                    <div class="title-page title-page--tiny"><?=$why_need_bankrotstvo['title']; ?></div>
                </div> 
                <?php foreach($why_need_bankrotstvo['triggers_for_section_display'] as $key => $value) { ?>
                    <?php
                        $additional_classes = '';
                        foreach ($value['answer']['answer_option_'.$value['question']] as $class_key => $class_val) {
                            if ($additional_classes != '') {
                                $additional_classes .= ' ';
                            }
                            $additional_classes .= $class_val['value'];
                        }
                    ?>
                    <div class="content__cnt hidden <?=$value['question']; ?> <?=$additional_classes; ?>">
                        <div class="content"><?=$value['text']['text_option_'.$value['question']]; ?></div>
                    </div> 
                <?php } ?>
            </div>
        </section>
<?php
    }
?>