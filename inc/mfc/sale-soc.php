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
<section class="mfc mfc--sale">
  <div class="container">
    <div class="mfc__wrap">
      <span class="note">Если вам не подходит бесплатный вариант</span>
      <!--<h2 class="mfc__title">Пройдите тест и узнайте <span class="text-pink">минимальную стоимость банкротства</span> в арбитражном суде или <span class="text-nowrap">до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> г.!</span></h2>-->
      <h2 class="mfc__title">Пройдите тест и узнайте <span class="text-pink">минимальную стоимость вашего банкротства</span> в Арбитражном суде СПб и ЛО по акции <span class="text-nowrap">до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> года:</span></h2>
      <div class="mfc__block-btn">
        <!--<button class="btn mfc__btn mfc__btn--pink mfc-btn-sale-v2" id="mfc-btn-sale" data-master="bondar" data-sms="20">Пройти тест</button>-->
        <button class="btn mfc__btn mfc__btn--pink hidden-btn" data-sms="38" data-popup-id="mfc-bankruptcy-soc__number-2" data-color-schema="pink">Пройти тест</button>
        <div class="mfc__hint mfc-hint">
          <div class="mfc-hint__number mfc-hint__number--accent"></div>
          <div class="mfc-hint__text">Ответ автоматически формируется и приходит в мессенджер, который вы выберете </div>
          <div class="soc_wrapper">
            <ul>
              <li class="whatsapp" data-soc-id="whatsapp"></li>
              <li class="telegram" data-soc-id="telegram"></li>
              <li class="viber" data-soc-id="viber"></li>
              <li class="wechat" data-soc-id="wechat"></li>
            </ul>
          </div>
        </div>
      </div>
      <p class="mfc__subtitle">Что вы получите после прохождения теста?</p>
      <ul class="mfc__lst">
        <li class="mfc__lst-item mfc__lst-item--pink">Узнаете минимальную стоимость банкротства в крупнейшей компании СПб и ЛО по банкротству физ. лиц и ИП;</li>
        <li class="mfc__lst-item mfc__lst-item--pink"><span class="text-pink">Инструкцию</span> по&nbsp;прохождению процедуры банкротства с&nbsp;описанием всех этапов и&nbsp;списком необходимых документов для&nbsp;сбора;</li>
        <li class="mfc__lst-item mfc__lst-item--pink"><span class="text-pink">Подборку</span> из&nbsp;72&nbsp;ответов на&nbsp;вопросы о&nbsp;банкротстве, которые нам&nbsp;задают наши клиенты, и&nbsp;узнаете все о&nbsp;процедуре от&nbsp;и&nbsp;до.</li>
      </ul>
    </div>
  </div>
</section>