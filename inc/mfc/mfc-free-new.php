<?php 
  $arr = [
    '01' => 'января',
    '02' => 'февраля',
    '03' => 'марта',
    '04' => 'апреля',
    '05' => 'мая',
    '06' => 'июня',
    '07' => 'июля',
    '08' => 'августа',
    '09' => 'сентября',
    '10' => 'октября',
    '11' => 'ноября',
    '12' => 'декабря'
  ];

  $date = get_field('timer', 374, false);
  $date = new DateTime($date);
  
  $month = $date->format('m');
  $ruMonth = $arr[$month];

?>   

  <?php
  /*
    $post_views = get_post_meta( $post->ID, 'views', true );
    $fractional_part = fmod($post_views, 2);
    if ($fractional_part > 0) {
        echo "<script>window.location.replace('https://fpa.ru/youfree3bankruptcy4/');</script>";
    }
    //echo $post_views.", ".$fractional_part;
    */
  ?>

 
<section class="mfc mfc--new mfc--grey">
  <div class="container">
    <div class="mfc__wrap mfc__wrap--new">
      <header class="mfc__header">
        <div class="logo">
          <span class="logo__name">
            <img src="<?= get_template_directory_uri() ?>/assets/img/logo.svg" alt="Логотип компании" title="Финансово-правовой альянс">
          </span>
        </div>
        <div class="mfc__advantages mfc-adv mfc-adv--free">
          <div class="mfc-adv__image mfc-adv__image--themis"></div>
          <div class="mfc-adv__content">
            <span class="mfc-adv__text">Банкротство через МФЦ с сопровождением юристов одной из крупнейших юридических фирм СПб</span>
          </div>
        </div>
      </header>
      <h1 class="mfc__title mfc__title--new">Пройдите тест за 1 минуту и узнайте, вправе ли вы <span class="text-accent">обанкротиться бесплатно или с субсидией </span>в&nbsp;Арбитражном суде или МФЦ <span class="text-accent text-nowrap">до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> г. </span>!</h1>
      <div class="mfc__block-btn mfc__block-btn--new">
        <!--
        <button class="btn mfc__btn mfc__btn--new mfc-btn-free-new">
          <div class="btn__btn-arrow btn__btn-arrow--accent">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#arrow-btn"></use>
            </svg>
          </div>
          <span class="btn__text--new">Пройти тест</span>
        </button>
        -->
        <button class="btn mfc__btn mfc__btn--new hidden-btn" data-sms="17" data-popup-id="mfc-new__number-1" data-color-schema="blue">
          <div class="btn__btn-arrow btn__btn-arrow--accent">
            <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#arrow-btn"></use></svg>
          </div>
          <span class="btn__text--new">Пройти тест</span>
        </button>
        <div class="mfc__hint mfc-hint">
          <div class="mfc-hint__number mfc-hint__number--accent hidden">1</div>
          <div class="mfc-hint__text">
            <span class="mfc__hint--big mfc__hint--bold text-accent">1 из 7 </span>заявителей был вправе обанкротиться бесплатно в <span class="mfc__hint--bold text-accent">2023 году</span>, но не воспользовался своим правом, узнайте, вправе ли вы пройти банкротство бесплатно
          </div>
        </div>
      </div>
      <p class="mfc__subtitle mfc__subtitle--new">Что вы получите после прохождения теста?</p>
      <ul class="mfc__lst mfc__lst--new">
        <li class="mfc__lst-item">Узнаете, возможно ли вам пройти процедуру банкротства бесплатно или с субсидией от некоммерческих и коммерческих организаций;</li>
        <li class="mfc__lst-item">Если вы не подходите под бесплатное или льготное банкротство, вам направят <span class="text-accent">инструкцию</span>, как пройти банкротство самостоятельно;</li>
        <li class="mfc__lst-item">Образцы документов для подачи на банкротство в Арбитражный суд Санкт-Петербурга и Ленинградской области;</li>
      </ul>
    </div>
  </div>
</section>