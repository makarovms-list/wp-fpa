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
<section class="mfc mfc--benefits">
  <div class="container">
    <div class="mfc__wrap">
      <span class="note note--green">Для тех, кто подпадает под льготы и спец. предложения</span>
      <h2 class="mfc__title">Пройдите тест и узнайте, относитесь ли вы ко льготным категориям граждан и вправе ли пройти <span class="text-green">банкротство с оплатой за результат</span>:</h2>
      <div class="mfc__block-btn">
        <!--<button class="btn mfc__btn mfc__btn--green mfc-btn-benefits" id="mfc-btn-benefits" data-master="bondar" data-sms="21">Пройти тест</button>-->
        <button class="btn mfc__btn mfc__btn--green hidden-btn" data-sms="21" data-popup-id="mfc-bankruptcy__number-3" data-color-schema="green">Пройти тест</button>
      </div>
      <p class="mfc__subtitle">Что вы получите после прохождения теста?</p>
      <ul class="mfc__lst">
        <li class="mfc__lst-item mfc__lst-item--green">Вы узнаете, вправе ли вы пройти процедуру банкротства с оплатой за результат в одной из крупнейших компаний СПб и ЛО по банкротству физлиц и ИП и сколько это будет для вас стоить.</li>
        <li class="mfc__lst-item mfc__lst-item--green"><span class="text-green">Инструкцию</span> по прохождению процедуры банкротства с описанием всех этапов и списком необходимых документов для сбора;</li>
        <li class="mfc__lst-item mfc__lst-item--green"><span class="text-green">Подборку</span> из 72 ответов на вопросы о банкротстве, которые нам задают наши клиенты, и узнаете все от и до о процедуре.</li>
      </ul>
    </div>
  </div>
</section>