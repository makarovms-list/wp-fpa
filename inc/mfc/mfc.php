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

<section class="mfc">
  <div class="container">
    <div class="mfc__wrap">
      <span class="note note--blue">За 1 минуту</span>
      <h1 class="mfc__title"> Пройдите тест и узнайте, вправе ли вы <span class="text-accent">обанкротиться бесплатно или с субсидией </span>в Арбитражном суде или МФЦ <span class="text-accent text-nowrap">до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> г. </span>!</h1>
      <div class="mfc__block-btn">
        <!--<button class="btn mfc__btn mfc-btn-free" id="mfc-btn-free" data-sms="17" data-popup-id="mfc__number-1" data-color-schema="blue">Пройти тест</button>-->
        <button class="btn mfc__btn hidden-btn" id="mfc-btn-free" data-sms="17" data-popup-id="mfc__number-1" data-color-schema="blue">Пройти тест</button>
        
        <span class="mfc__hint">
          <span class="mfc__hint--big mfc__hint--bold text-accent">1 из 7 </span>заявителей был вправе обанкротиться бесплатно в <span class="mfc__hint--bold text-accent">2023 году</span>, но не воспользовался своим правом, узнайте, вправе ли вы пройти банкротство бесплатно
        </span>
      </div>
      <p class="mfc__subtitle">Что вы получите после прохождения теста?</p>
      <ul class="mfc__lst">
        <li class="mfc__lst-item">Узнаете, возможно ли вам пройти процедуру банкротства бесплатно или с субсидией от некоммерческих и коммерческих организаций;</li>
        <li class="mfc__lst-item">Если вы не подходите под бесплатное или льготное банкротство, вам направят <span class="text-accent">инструкцию</span>, как пройти банкротство самостоятельно;</li>
        <li class="mfc__lst-item">Образцы документов для подачи на банкротство в Арбитражный суд Санкт-Петербурга и Ленинградской области;</li>
      </ul>
    </div>
  </div>
</section>