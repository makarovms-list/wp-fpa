<?php 
  $arr = [ 1 => 'января' , 'февраля' , 'марта' , 'апреля' , 'мая' , 'июня' , 'июля' , 'августа' , 'сентября' , 'октября' , 'ноября' , 'декабря' ];
  $block8_content = get_field('block8_content', 21616);
?>
<style>
.results__block.results__block--text {
    column-width: 48%;
    column-count: 2;
    column-gap: 4%;
    width: 100%;
}
@media (max-width: 768px) {
    .results__block.results__block--text {
        column-width: 100%%;
        column-count: 1;
        column-gap: 0;
        width: 100%;
    }   
}
</style>
<section id="services_results" class="section--services-grey results">
    <div class="container">
        <div class="section__image section__image--results lazy"></div>
        <h2 class="title-page"><?=$block8_content['title']; ?></h2>
        <div class="results__wrap">
            <div class="results__block results__block--text">
                <?=$block8_content['text']; ?>
            </div>
            <div class="results__block results__block--inner">
                <div class="results__data">
                    <ul class="results__lst">
                        <li class="results__lst-item">
                            <span class="results__number results__number--symbol results-number case-total results-number-1-1" data-start="0" data-number="10083">10 083</span>
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
                            <span class="results__digit results__digit--last case-total">10 083</span>
                            <span class="results__digit results__digit--current case-in-works">дел в работе</span>
                            <span class="results__year">2022</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>