<?php 
  $last_args = ([
    'posts_per_page' => 1,
    'offset'      => 0,
    'post_type'   => 'dela',
    'post_status' => 'draft',
    'orderby' => 'title',
    'order' => 'DESC'
  ]);

  $last_delo = new WP_Query( $last_args );

  $last_number_delo = '';
  
  if( $last_delo->have_posts() ) :
    while( $last_delo->have_posts() ) : $last_delo->the_post();

        $last_number_delo = get_the_title();
        $last_date = get_field('date_over');;

    endwhile;
  endif;

  wp_reset_postdata(); 
?>

<?php 
  $arr = [ 1 => 'января' , 'февраля' , 'марта' , 'апреля' , 'мая' , 'июня' , 'июля' , 'августа' , 'сентября' , 'октября' , 'ноября' , 'декабря' ];
?>

<div class="results results--in-dela">
  <h3 class="results__title">
    На <?php echo $last_date ?>&nbsp;г. 
    мы помогли 
    <span class="text-nowrap">
      <span class="case-total"><?php echo number_format($last_number_delo, 0, ',', ' '); ?></span>&nbsp;<span class="case-client">клиентам</span>
    </span>
  </h3>
  <div class="results__block results__block--inner">
    <div class="results__data results__data--in-dela">
      <ul class="results__lst results__lst--in-dela">
        <li class="results__lst-item">
          <span class="results__number results__number--symbol results-number results-number-1 case-total" data-number="<?php echo $last_number_delo; ?>">0</span>
          <span class="results__label case-works">Дел в работе</span>
        </li>
        <li class="results__lst-item">
          <span class="results__number results-number results-number-2" data-number="2593">0</span>
          <span class="results__label">Выигранных дел</span>
        </li>
        <li class="results__lst-item">
          <span class="results__number">0</span>
          <span class="results__label">Проигранных дел</span>
        </li>
      </ul>
      <div class="results__note">* данные актуальны 
        <span class="text-nowrap"> на <?php echo date( 'd ' . $arr[date( 'n' )] . ' Y' ) ?>&nbsp;г.</span>
      </div>
    </div>
    <ul class="results__chart">
      <li class="results__chart-item">
        <div class="results__chart-line results__chart-line--1">
          <span class="results__digit results__digit--small">128</span>
          <span class="results__year">2015</span>
        </div>
      </li>
      <li class="results__chart-item">
        <div class="results__chart-line results__chart-line--2">
          <span class="results__digit results__digit--middle">402</span>
          <span class="results__year">2016</span>
        </div>
      </li>
      <li class="results__chart-item">
        <div class="results__chart-line results__chart-line--3">
          <span class="results__digit results__digit--middle">895</span>
          <span class="results__year">2017</span>
        </div>
      </li>
      <li class="results__chart-item">
        <div class="results__chart-line results__chart-line--4">
          <span class="results__digit">2 540</span>
          <span class="results__year">2018</span>
        </div>
      </li>
      <li class="results__chart-item">
        <div class="results__chart-line results__chart-line--5">
          <span class="results__digit">4 108</span>
          <span class="results__year">2019</span>
        </div>
      </li>
      <li class="results__chart-item">
        <div class="results__chart-line results__chart-line--6">
          <span class="results__digit">6 591</span>
          <span class="results__year">2020</span>
        </div>
      </li>
      <li class="results__chart-item">
        <div class="results__chart-line results__chart-line--last">
          <span class="results__digit results__digit--last case-total"><?php echo number_format($last_number_delo, 0, ',', ' '); ?>
          </span>
          <span class="results__digit results__digit--current case-works">дел в работе</span>
          <span class="results__year">2021</span>
        </div>
      </li>
    </ul>
  </div>
</div>