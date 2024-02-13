<?php
  /*
    Template Name: Дела (Интересные дела)
    Template Post Type: page
  */
?>

<?php 
  $arr = [ 1 => 'января' , 'февраля' , 'марта' , 'апреля' , 'мая' , 'июня' , 'июля' , 'августа' , 'сентября' , 'октября' , 'ноября' , 'декабря' ];
?>

<?php get_header(); ?>

<?php
    $dela_posts = get_posts([
        'post_type' => 'dela',
        'post_status' => 'draft',
        'numberposts' => 10,
        'order'    => 'DESC'
    ]);
    $count_dela_posts = wp_count_posts('dela');
    //print_r($dela_posts);
?>

<style>
.case__call.read--more {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 500;
    font-size: 12px;
    line-height: 145%;
    color: #7EA3FF;
    padding-left: 0;
    cursor: pointer;
}
article .cases__item.notify h2 {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 26px;
    line-height: 145%;
    text-align: center;
    color: #393939;
    padding-right: 0;
    margin-bottom: 8px;
}
article .cases__item.notify p {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 600;
    font-size: 14px;
    line-height: 160%;
    text-align: center;
    letter-spacing: 0.02em;
    color: #717B97;
    margin: 0;
}
.case__row--additional-info {
    background: #E8F4FF;
    border-radius: 8px;
    padding: 0;
    margin-left: -4px;
}
.case__row--additional-info .case__call--name {
    padding: 16px 8px 16px;
}
.case__row--additional-info .case__call--data {
    padding: 16px 8px 16px;
    margin-left: 4px;
}

.form-filter__block.disabled {
    opacity: .6;
}

.results__lst-item {
    width: 250px!important;
    margin-right: 0px!important;
}
.results__chart-item {
    width: 11%!important;
}
.results__chart-line--1 {
    height: 6px;
}
.results__chart-line--2 {
    height: 48px;
}
.results__chart-line--3 {
    height: 134px;
}
.results__chart-line--4 {
    height: 180px;
}
.results__chart-line--5 {
    height: 251px;
}
.results__chart-line--6 {
    height: 341px;
}
.results__chart-line--7 {
    height: 415px;
}
.results__chart-line--last {
    height: 490px;
}
</style>
<?php
    $case_total_txt = get_field('case_total', 374);
    $case_successful_txt = get_field('case-successful', 374);
    $case_total = str_replace(" ", "", $case_total_txt);
    $case_successful = str_replace(" ", "", $case_successful_txt);
?>
<div class="inner">
    <div class="container">
        <div class="inner__head">
            <h1 class="title-page"><span class="case-total-v2"><?=$case_total_txt; ?></span> <span class="case-works">дел</span> находятся в работе на текущий момент</h1>
        </div>
        <div class="inner__wrap">
            <div class="inner__row inner__row--mobile">
                <div class="inner__block inner__block--aside-show">
                    <aside class="aside"><?php get_template_part( 'inc/aside/form-filters-int' ); ?></aside>
                </div>
                <div class="inner__block inner__block--main">
                    <main>
                        <div class="cases" data-total-txt="<?=$case_total_txt; ?>" data-case-successful-txt="<?=$case_successful_txt; ?>" data-case-total="<?=$case_total; ?>" data-case-successful="<?=$case_successful; ?>">
                            <div class="cases__wrap">
                                <?php foreach ($dela_posts as $key => $value) { ?>
                                    <article class="<?php if ($key > 10) { echo "hidden"; } ?>" data-int-category="<?=get_field("int_category", $value->ID); ?>" data-current-date="<?=get_field("current_date", $value->ID); ?>" data-summ="<?=get_field("summ", $value->ID); ?>">
                                        <div class="cases__item case">
                                            <h2 class="case__title"><?=get_field("title", $value->ID); ?></h2>
                                            <span class="case__number">№ <span><?=get_field("number", $value->ID); ?></span></span>
                                            <div class="case__original">
                                                <a class="original-link original-link--case" href="<?=get_field("original_court_ruling", $value->ID); ?>" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области">
                                                    <span class="original-link__thumb original-link__thumb--case original-link__thumb--case-ruling"></span>
                                                    <span class="original-link__text">Оригинал<br> определения суда</span>
                                                </a>
                                                <a class="original-link original-link--case" href="<?=get_field("court_file_file", $value->ID); ?>" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области">
                                                    <span class="original-link__thumb original-link__thumb--case original-link__thumb--case-cardfile"></span>
                                                    <span class="original-link__text">Картотека<br> арбитражного суда</span>
                                                </a>
                                            </div>
                                            <div class="case__data">
                                                <div class="case__row case__row--debtor">
                                                    <div class="case__call case__call--name">Должник: </div>
                                                    <div class="case__call case__call--data"><?=get_field("debtor", $value->ID); ?></div>
                                                </div>
                                                <div class="case__row case__row--number">
                                                    <div class="case__call case__call--name">Номер дела в суде: </div>
                                                    <div class="case__call case__call--data"><?=get_field("case_number", $value->ID); ?></div>
                                                </div>
                                                <div class="case__row case__row--result">
                                                    <div class="case__call case__call--name">Результат работы: </div>
                                                    <div class="case__call case__call--data"><?=get_field("result", $value->ID); ?></div>
                                                </div>
                                                <div class="case__row case__row--period">
                                                    <div class="case__call case__call--name">Срок рассмотрения дела: </div>
                                                    <div class="case__call case__call--data"><?=get_field("period2", $value->ID); ?></div>
                                                </div>
                                                <div class="case__row case__row--bank-type hidden">
                                                    <div class="case__call case__call--name">Тип&nbsp;кредиторов:</div>
                                                    <div class="case__call case__call--data"><?=get_field("bank_type", $value->ID); ?></div>
                                                </div>
                                                <div class="case__row case__row--creditors">
                                                    <div class="case__call case__call--name">Список&nbsp;кредиторов:</div>
                                                    <div class="case__call case__call--data" data-full-text='<?=get_field("creditors", $value->ID); ?>'>
                                                        <?=mb_strimwidth(get_field("creditors", $value->ID), 0, 120, '...'); ?>
                                                        <?php if (strlen(get_field("creditors", $value->ID)) > 200) { ?>
                                                            <div class="case__call case__call--data read--more">Читать полностью</div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="case__row case__row--arbitration">
                                                    <div class="case__call case__call--name">Арбитражный управляющий:</div>
                                                    <div class="case__call case__call--data"><span><?=get_field("arbitration_manager", $value->ID); ?></span></div>
                                                </div>
                                                <div class="case__row case__row--accompanying">
                                                    <div class="case__call case__call--name">Сопровождающий юрист:</div>
                                                    <div class="case__call case__call--data"><span><?=get_field("lawyer_name", $value->ID); ?></span></div>
                                                </div>
                                                <?php if (get_field("int_text", $value->ID)) { ?>
                                                    <div class="case__row case__row--additional-info">
                                                        <div class="case__call case__call--name">Дополнительная информация:</div>
                                                        <div class="case__call case__call--data"><?=get_field("int_text", $value->ID); ?></div>
                                                    </div>                  
                                                <?php }?>
                                            </div>
                                        </div>
                                        <div class="cases__block-hide">
                                            <?php if ($key == 1) { ?>
                                                <div class="guarantees">
                                                    <div class="guarantees__head">
                                                        <h3 class="guarantees__title">Наши гарантии</h3>
                                                    </div>
                                                    <div class="guarantees__body">
                                                        <div class="guarantees__item">
                                                            <span class="guarantees__number">Пункт 3.1. Договора закрепляет:</span>
                                                            <span class="guarantees__text"> Исполнитель гарантирует полное освобождение Заказчика от долгов. В обратном случае оплата юридических услуг возвращается Заказчику в полном объеме по первому требованию в течение 7 рабочих дней.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <?php if ($key == 4) { ?>
                                                <div class="results results--in-dela">
                                                    <h3 class="results__title">На <span class="case-lastdate__"><?php echo date( 'd ' . $arr[date( 'n' )] . ' Y' ) ?>&nbsp;г.</span>&nbsp;мы помогли <span class="case-total_new"><?=$case_successful_txt; ?></span>&nbsp;<span class="case-client">клиентам</span></h3>
                                                    <div class="results__block results__block--inner">
                                                        <div class="results__data results__data--in-dela">
                                                            <ul class="results__lst results__lst--in-dela">
                                                                <li class="results__lst-item">
                                                                    <span class="results__number results__number--symbol_new results-number_new case-total_new results-number-1_new" data-start="0" data-number="<?=$case_total; ?>"><?=$case_total_txt; ?></span>
                                                                    <span class="results__label case-works">Дел в работе</span>
                                                                </li>
                                                                <li class="results__lst-item">
                                                                    <span class="results__number results-number_new case-successful_new results-number-2_new" data-start="0" data-number="<?=$case_successful; ?>"><?=$case_successful_txt; ?></span>
                                                                    <span class="results__label case-success">Выигранные дела</span>
                                                                </li>
                                                                <li class="results__lst-item">
                                                                    <span class="results__number">0</span>
                                                                    <span class="results__label">Проигранных дел</span>
                                                                </li>
                                                            </ul>
                                                            <div class="results__note">* данные актуальны на&nbsp;<?php echo date( 'd ' . $arr[date( 'n' )] . ' Y' ) ?>&nbsp;г.</div>
                                                        </div>
                                                        <ul class="results__chart">
                                                            <li class="results__chart-item">
                                                                <div class="results__chart-line results__chart-line--1">
                                                                    <span class="results__digit results__digit--small">128</span>
                                                                    <span class="results__year">2016</span>
                                                                </div>
                                                            </li>
                                                            <li class="results__chart-item">
                                                                <div class="results__chart-line results__chart-line--2">
                                                                    <span class="results__digit results__digit--middle">895</span>
                                                                    <span class="results__year">2017</span>
                                                                </div>
                                                            </li>
                                                            <li class="results__chart-item">
                                                                <div class="results__chart-line results__chart-line--3">
                                                                    <span class="results__digit results__digit--middle">2&nbsp;540</span>
                                                                    <span class="results__year">2018</span>
                                                                </div>
                                                            </li>
                                                            <li class="results__chart-item">
                                                                <div class="results__chart-line results__chart-line--4">
                                                                    <span class="results__digit">4&nbsp;108</span>
                                                                    <span class="results__year">2019</span>
                                                                </div>
                                                            </li>
                                                            <li class="results__chart-item">
                                                                <div class="results__chart-line results__chart-line--5">
                                                                    <span class="results__digit">6&nbsp;591</span>
                                                                    <span class="results__year">2020</span>
                                                                </div>
                                                            </li>
                                                            <li class="results__chart-item">
                                                                <div class="results__chart-line results__chart-line--6">
                                                                    <span class="results__digit">9&nbsp;130</span>
                                                                    <span class="results__year">2021</span>
                                                                </div>
                                                            </li>
                                                            <li class="results__chart-item">
                                                                <div class="results__chart-line results__chart-line--7">
                                                                    <span class="results__digit">11&nbsp;391</span>
                                                                    <span class="results__year">2022</span>
                                                                </div>
                                                            </li>
                                                            <li class="results__chart-item">
                                                                <div class="results__chart-line results__chart-line--last">
                                                                    <span class="results__digit results__digit--last case-total_new"><?=$case_total_txt; ?></span>
                                                                    <span class="results__digit results__digit--current case-in-works">дел в работе</span>
                                                                    <span class="results__year">2023</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </article>
                                <?php } ?>
                            </div>
                              
                              <div class="cases__loader hidden">
                                <span class="btn__loader btn-loader">
                                  <span class="btn-loader__point btn-loader__point--accent btn-loader__point--1"></span>
                                  <span class="btn-loader__point btn-loader__point--accent btn-loader__point--2"></span>
                                  <span class="btn-loader__point btn-loader__point--accent btn-loader__point--3"></span>
                                </span>
                              </div>
                              
                              <button class="btn btn--show btn--cases btn-load-all">
                                <span class="btn__loader btn-loader hidden">
                                  <span class="btn-loader__point btn-loader__point--1"></span>
                                  <span class="btn-loader__point btn-loader__point--2"></span>
                                  <span class="btn-loader__point btn-loader__point--3"></span>
                                </span>
                                <span class="btn__text">
                                  <span class="btn__icon btn__icon--load">
                                    <svg>
                                      <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#load"></use>
                                    </svg>
                                  </span>Показать ещё 10<span class="btn__total">из&nbsp;<span class="btn__cases">5990</span></span>&nbsp;дел
                                </span>
                              </button>
                              
                              <button class="btn btn--show btn--cases btn-load-filter hidden">
                                <span class="btn__loader btn-loader hidden">
                                  <span class="btn-loader__point btn-loader__point--1"></span>
                                  <span class="btn-loader__point btn-loader__point--2"></span>
                                  <span class="btn-loader__point btn-loader__point--3"></span>
                                </span>
                                <span class="btn__text">
                                  <span class="btn__icon btn__icon--load">
                                    <svg>
                                      <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#load"></use>
                                    </svg>
                                  </span>Показать ещё 10<span class="btn__total">из&nbsp;<span class="btn__cases">5990</span></span>&nbsp;дел
                                </span>
                              </button>
                              
                              <!--
                              <div class="cases__additional">
                               
                                <div class="results results--in-dela">
                                  <h3 class="results__title">На 
                                    <span class="case-lastdate__"><?php echo date( 'd ' . $arr[date( 'n' )] . ' Y' ) ?>&nbsp;г.</span>&nbsp;
                                    мы помогли <span class="case-total">9120</span>&nbsp;<span class="case-client">клиентам</span>
                                  </h3>
                                  <div class="results__block results__block--inner">
                                    <div class="results__data results__data--in-dela">
                                      <ul class="results__lst results__lst--in-dela">
                                        <li class="results__lst-item">
                                          <span class="results__number results__number--symbol results-number case-total results-number-1" data-start="0" data-number="9120">9120</span>
                                          <span class="results__label case-works">Дел в работе</span>
                                        </li>
                                        <li class="results__lst-item">
                                          <span class="results__number results-number case-successful results-number-2" data-start="0" data-number="2210">2210</span>
                                          <span class="results__label case-success">Выигранных дел</span>
                                        </li>
                                        <li class="results__lst-item">
                                          <span class="results__number">0</span>
                                          <span class="results__label">Проигранных дел</span>
                                        </li>
                                      </ul>
                                      <div class="results__note">* данные актуальны на <?php echo date( 'd ' . $arr[date( 'n' )] . ' Y' ) ?>&nbsp;г.</div>
                                    </div>
                                    <ul class="results__chart">
                                      <li class="results__chart-item">
                                        <div class="results__chart-line results__chart-line--1">
                                          <span class="results__digit results__digit--small">128</span>
                                          <span class="results__year">2016</span>
                                        </div>
                                      </li>
                                      <li class="results__chart-item">
                                        <div class="results__chart-line results__chart-line--2">
                                          <span class="results__digit results__digit--middle">895</span>
                                          <span class="results__year">2017</span>
                                        </div>
                                      </li>
                                      <li class="results__chart-item">
                                        <div class="results__chart-line results__chart-line--3">
                                          <span class="results__digit results__digit--middle">2 540</span>
                                          <span class="results__year">2018</span>
                                        </div>
                                      </li>
                                      <li class="results__chart-item">
                                        <div class="results__chart-line results__chart-line--4">
                                          <span class="results__digit">4 108</span>
                                          <span class="results__year">2019</span>
                                        </div>
                                      </li>
                                      <li class="results__chart-item">
                                        <div class="results__chart-line results__chart-line--5">
                                          <span class="results__digit">6 591</span>
                                          <span class="results__year">2020</span>
                                        </div>
                                      </li>
                                      <li class="results__chart-item">
                                        <div class="results__chart-line results__chart-line--6">
                                          <span class="results__digit">9 130</span>
                                          <span class="results__year">2021</span>
                                        </div>
                                      </li>
                                      <li class="results__chart-item">
                                        <div class="results__chart-line results__chart-line--last">
                                          <span class="results__digit results__digit--last case-total">9120</span>
                                          <span class="results__digit results__digit--current case-in-works">дел в работе</span>
                                          <span class="results__year">2022</span>
                                        </div>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                
                                <div class="guarantees">
                                  <div class="guarantees__head">
                                    <h3 class="guarantees__title">Наши гарантии</h3>
                                  </div>
                                  <div class="guarantees__body">
                                    <div class="guarantees__item">
                                      <span class="guarantees__number">Пункт 3.1. Договора закрепляет:</span>
                                      <span class="guarantees__text"> Исполнитель гарантирует полное освобождение Заказчика от долгов. В обратном случае оплата юридических услуг возвращается Заказчику в полном объеме по первому требованию в течение 7 рабочих дней.</span>
                                    </div>
                                  </div>
                                </div>
                
                              </div>
                              -->
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>