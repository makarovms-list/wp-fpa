<?php 
  $arr = [ 1 => 'января' , 'февраля' , 'марта' , 'апреля' , 'мая' , 'июня' , 'июля' , 'августа' , 'сентября' , 'октября' , 'ноября' , 'декабря' ];
?>

<?php get_header(); ?>



<style>
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
      <h1 class="title-page"><span class="case-total-1"><?=$case_total_txt; ?></span> <span class="case-works">дел</span> находятся в работе на текущий момент</h1>
    </div>
    
    <div class="inner__wrap">
      <div class="inner__row inner__row--mobile">
        <div class="inner__block inner__block--aside-show">
          <aside class="aside">
            
            <?php get_template_part( 'inc/aside/form-filters' ); ?> 
            
          </aside>
        </div>
        <div class="inner__block inner__block--main">
          <main>
            <div class="cases">
                  
              <div class="cases__wrap">
                                
                  
              </div>
              
              <div class="cases__loader">
                <span class="btn__loader btn-loader">
                  <span class="btn-loader__point btn-loader__point--accent btn-loader__point--1"></span>
                  <span class="btn-loader__point btn-loader__point--accent btn-loader__point--2"></span>
                  <span class="btn-loader__point btn-loader__point--accent btn-loader__point--3"></span>
                </span>
              </div>
              
              <button class="btn btn--show btn--cases btn-load-all hidden">
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

              <div class="cases__additional">
               
                <div class="results results--in-dela">
                  <h3 class="results__title">На 
                    <span class="case-lastdate__"><?php echo date( 'd ' . $arr[date( 'n' )] . ' Y' ) ?>&nbsp;г.</span>&nbsp;
                    мы помогли <span class="case-total_new"><?=$case_successful_txt; ?></span>&nbsp;<span class="case-client">клиентам</span>
                  </h3>
                  <div class="results__block results__block--inner">
                    <div class="results__data results__data--in-dela">
                      <ul class="results__lst results__lst--in-dela">
                        <li class="results__lst-item">
                          <span class="results__number results__number--symbol_new results-number_new case-total_new results-number-1_new" data-start="0" data-number="<?=$case_total; ?>"><?=$case_total_txt; ?></span>
                          <span class="results__label case-works">Дел в работе</span>
                        </li>
                        <li class="results__lst-item">
                          <span class="results__number results-number_new case-successful_new results-number-2_new" data-start="0" data-number="<?=$case_successful; ?>"><?=$case_successful_txt; ?></span>
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
                        <div class="results__chart-line results__chart-line--7">
                          <span class="results__digit">11 391</span>
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
          
          </div>
        </main>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>