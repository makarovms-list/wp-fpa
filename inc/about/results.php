<?php 
  $arr = [ 1 => 'января' , 'февраля' , 'марта' , 'апреля' , 'мая' , 'июня' , 'июля' , 'августа' , 'сентября' , 'октября' , 'ноября' , 'декабря' ];
?> 

<style>
.results__lst-item {
    width: 250px!important;
    margin-right: 0px!important;
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
    height: 207px;
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

<section class="section section--main results">
  <div class="container">
    <h2 class="title-page"><?php the_field('results_title', 374); ?></h2>
    <div class="results__wrap">
      <div class="results__block results__block--text">
        <p><?php the_field('results_column_1', 374); ?></p>
      </div>
      <div class="results__block results__block--text">
        <p><?php the_field('results_column_2', 374); ?></p>
      </div>
      <div class="results__block results__block--inner hidden">
        <div class="results__data">
          <ul class="results__lst">
            <li class="results__lst-item">
              <span class="results__number results__number--symbol results-number case-total results-number-1" data-start="0" data-number="12057">12 057</span>
              <span class="results__label case-works">Дел в работе и завершены</span>
            </li>
            <li class="results__lst-item">
              <span class="results__number results-number case-successful results-number-2" data-start="0" data-number="5855">5 855</span>
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
              <span class="results__digit results__digit--last case-total">12 057</span>
              <span class="results__digit results__digit--current case-in-works">дел в работе</span>
              <span class="results__year">2023</span>
            </div>
          </li>
        </ul>
      </div>
      
<style>
        .results__block--inner_new {
            position: relative;
            width: 100%;
            margin-top: 80px;
        }
        .results__data_new {
            position: absolute;
            top: 30px;
            left: 0;
        }
        .results__number_new {
            position: relative;
            font-weight: 700;
            font-size: 45px;
            line-height: 1.1;
            color: #5381f1;
            white-space: nowrap;
        }
        .results__label {
            font-size: 16px!important;
        }
        .results__lst-item {
            width: 260px!important;
        }
    </style>
    <?php
        $case_total_txt = get_field('case_total', 374);
        $case_successful_txt = get_field('case-successful', 374);
        $case_total = str_replace(" ", "", $case_total_txt);
        $case_successful = str_replace(" ", "", $case_successful_txt);
    ?>
    <div class="results__block results__block--inner_new hidden1">
        <div class="results__data_new">
            <ul class="results__lst">
                <li class="results__lst-item">
                    <span class="results__number results__number--symbol_new results-number_new case-total_new results-number-1-1_new" data-start="0" data-number="<?=$case_total; ?>"><?=$case_total_txt; ?></span>
                    <span class="results__label case-works">Дел в работе и завершены</span>
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
  </div>
</section>