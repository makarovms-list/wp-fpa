<?php
    $successful_cases = get_field('successful_cases');
    if ($successful_cases) {
?>
        <style>
            section.successful_cases {
                background: linear-gradient(135deg, #EDF0F8 0%, #D7DEEF 100%);
                margin-bottom: 0;
            }
            section.successful_cases .inner__row {
                flex-direction: column;
                text-align: center;
                align-items: center;
            }
            section.successful_cases .title__cnt .h1_title {
                font-weight: 700;
                font-size: 34px;
                line-height: 145%;
                text-align: center;
                color: #393939;
                margin-bottom: 20px;
            }
            section.successful_cases .title__cnt p {
                font-weight: 400;
                font-size: 18px;
                line-height: 145%;
                text-align: center;
                color: #717B97;    
            }
            section.successful_cases .title__cnt {
                margin-bottom: 52px;    
            }
            section.successful_cases .cases__cnt {
                display: grid;
                grid-template-rows: auto;
                grid-template-columns: calc(50% - 8px) calc(50% - 8px);
                grid-column-gap: 16px;
                grid-row-gap: 16px;
            }
            section.successful_cases .cases__cnt .cases__item .case__title,
            section.successful_cases .cases__cnt .cases__item .case__original,
            section.successful_cases .cases__cnt .cases__item .case__data {
                text-align: left;
            }
            section.successful_cases .case__title {
                padding-right: 80px!important;
            }
            section.successful_cases .cases__cnt.hidden {
                display: none;
            }
            
            
            
            section.successful_cases.unemployed .cases__cnt.unemployed,
            section.successful_cases.other .cases__cnt.other,
            section.successful_cases.ipoteka .cases__cnt.ipoteka,
            section.successful_cases.single_parent .cases__cnt.single_parent,
            section.successful_cases.parent_under_three_year .cases__cnt.parent_under_three_year,
            section.successful_cases.parent_with_two_children .cases__cnt.parent_with_two_children,
            section.successful_cases.pensioner .cases__cnt.pensioner,
            section.successful_cases.invalid .cases__cnt.invalid,
            section.successful_cases.ip .cases__cnt.ip,
            section.successful_cases.army .cases__cnt.army,
            section.successful_cases.police .cases__cnt.police {
            	display: grid;
            }
            @media (max-width: 1200px) {
                section.successful_cases .cases__cnt .case__data .case__row {
                    display: grid;
                    grid-template-rows: auto;
                    grid-template-columns: calc(50% - 8px) calc(50% - 8px);
                    grid-column-gap: 16px;
                    grid-row-gap: 16px;
                }
            }
            @media (min-width: 768px) and (max-width: 1200px) {
                section.ip__cnt:before {
                    background-size: cover!important;
                }
            }
            @media (max-width: 992px) {
                section.successful_cases .cases__cnt {
                    /*display: block!important;*/
                    grid-template-columns: 100%;
                }
                section.successful_cases .cases__cnt .case__original {
                    display: grid;
                    grid-template-rows: auto;
                    grid-template-columns: 200px 200px;
                    grid-column-gap: 16px;
                    grid-row-gap: 16px;
                }
            }
            @media (max-width: 768px) {
                section.successful_cases .title__cnt .h1_title {
                    font-size: 22px;
                }
                section.successful_cases .title__cnt p {
                    font-size: 14px;
                }
                section.successful_cases .inner__row--mobile {
                    display: block;
                }
                section.successful_cases .inner.inner--mobile {
                    margin-top: 48px;
                }
                
                section.successful_cases .inner__wrap {
                    margin-bottom: 60px;
                }
                section.reviews-art .title__cnt .title-page {
                    font-size: 22px!important;
                }
                section.reviews-art {
                    padding-bottom: 80px!important;
                }
            }
            @media (max-width: 600px) {
                section.successful_cases .cases__cnt .case__data .case__row {
                    display: block!important;
                }
                section.successful_cases .cases__cnt .case__original {
                    display: block!important;
                }
                section.successful_cases .btn.reviews-services__btn {
                    font-size: 14px;
                }
                section.successful_cases .inner.inner--mobile {
                    margin-top: 60px;
                }
            }
        </style>
        <section class="section successful_cases">
            <div class="inner inner--mobile">
                <div class="container">
                    <div class="inner__wrap">
                        <div class="inner__row inner__row--mobile">
                            <div class="inner__block">
                                <div class="inner__row inner__row--mobile title__cnt">
                                    <div class="h1_title"><?=$successful_cases['title']; ?></div>
                                    <?=$successful_cases['text']; ?>
                                </div>
                                <div class="inner__row inner__row--mobile">
                                    <?php foreach($successful_cases['triggers_for_section_display'] as $key => $value) { ?>
                                    
                                        <?php
                                            $additional_classes = '';
                                            foreach ($value['answer']['answer_option_'.$value['question']] as $class_key => $class_val) {
                                                if ($additional_classes != '') {
                                                    $additional_classes .= ' ';
                                                }
                                                $additional_classes .= $class_val['value'];
                                            }
                                        ?>
                                        <div class="cases__cnt hidden <?=$value['question']; ?> <?=$additional_classes; ?>" data-question="<?=$value['question']; ?>" data-answer="<?=$value['answer']['answer_option_'.$value['question']][0]['value']; ?>">
                                            <?php /*print_r($value['content']['cases_option_'.$value['question']]);*/ ?>
                                            <?php foreach($value['content']['cases_option_'.$value['question']] as $case_key => $case_value) { ?>        
                                                <?php
                                                    $title = get_field('title', $case_value->ID);
                                                    $number = get_field('number', $case_value->ID);
                                                    $original_court_ruling = get_field('original_court_ruling', $case_value->ID);
                                                    $court_file_file = get_field('court_file_file', $case_value->ID);
                                                    $debtor = get_field('debtor', $case_value->ID);
                                                    $case_number = get_field('case_number', $case_value->ID);
                                                    $result = get_field('result', $case_value->ID);
                                                    $period2 = get_field('period2', $case_value->ID);
                                                    $creditors = get_field('creditors', $case_value->ID);
                                                    $arbitration_manager = get_field('arbitration_manager', $case_value->ID);
                                                    $lawyer = get_field('lawyer', $case_value->ID);
                                                ?>
                                                <div class="cases__item case">
                                                    <h2 class="case__title"><?=$title; ?></h2>
                                                    <span class="case__number">№ <span><?=$number; ?></span></span>
                                                    <div class="case__original">
                                                        <a class="original-link original-link--case" href="<?=$original_court_ruling; ?>" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области">
                                                            <span class="original-link__thumb original-link__thumb--case original-link__thumb--case-ruling"></span>
                                                            <span class="original-link__text">Оригинал<br> определения суда</span>
                                                        </a>
                                                        <a class="original-link original-link--case" href="<?=$court_file_file; ?>" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области">
                                                            <span class="original-link__thumb original-link__thumb--case original-link__thumb--case-cardfile"></span>
                                                            <span class="original-link__text">Картотека<br> арбитражного суда</span>
                                                        </a>
                                                    </div>
                                                    <div class="case__data">
                                                        <div class="case__row case__row--debtor">
                                                            <div class="case__call case__call--name">Должник: </div>
                                                            <div class="case__call case__call--data"><?=$debtor; ?></div>
                                                        </div>
                                                        <div class="case__row case__row--number">
                                                            <div class="case__call case__call--name">Номер дела в суде: </div>
                                                            <div class="case__call case__call--data"><?=$case_number; ?></div>
                                                        </div>
                                                        <div class="case__row case__row--result">
                                                            <div class="case__call case__call--name">Результат работы: </div>
                                                            <div class="case__call case__call--data"><?=$result; ?></div>
                                                        </div>
                                                        <div class="case__row case__row--period">
                                                            <div class="case__call case__call--name">Срок рассмотрения дела: </div>
                                                            <div class="case__call case__call--data"><?=$period2; ?></div>
                                                        </div>
                                                        <div class="case__row case__row--creditors">
                                                            <div class="case__call case__call--name">Список&nbsp;кредиторов:</div>
                                                            <div class="case__call case__call--data"><?=$creditors; ?></div>
                                                        </div>
                                                        <div class="case__row case__row--arbitration">
                                                            <div class="case__call case__call--name">Арбитражный управляющий:</div>
                                                            <div class="case__call case__call--data"><span><?=$arbitration_manager; ?></span></div>
                                                        </div>
                                                        <div class="case__row case__row--accompanying">
                                                            <div class="case__call case__call--name">Сопровождающий юрист:</div>
                                                            <div class="case__call case__call--data"><span><?=$lawyer; ?></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="inner__row inner__row--mobile">
                                    <a class="btn reviews-services__btn <?=$successful_cases['button']['color_scheme']['label']; ?>" href="<?=$successful_cases['button']['url']; ?>"><?=$successful_cases['button']['text']; ?></a>
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