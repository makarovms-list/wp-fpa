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
      <h2 class="mfc__title">Пройдите тест и узнайте <span class="text-pink">минимальную стоимость&nbsp;банкротства </span>в Арбитражном суде или МФЦ <span class="text-pink">до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> г.</span>!</h2>
      <div class="mfc__block-btn">
        <!--<button class="btn mfc__btn mfc__btn--pink mfc-btn-sale" id="mfc-btn-sale" data-sms="18">Пройти тест</button>-->
        <button class="btn mfc__btn mfc__btn--pink hidden-btn" id="mfc-btn-sale" data-sms="17" data-popup-id="mfc__number-2" data-color-schema="pink">Пройти тест</button>
        <span class="mfc__hint">
          <span class="mfc__hint--big mfc__hint--bold text-pink">1 из 2 </span>дел по банкротству в СПб и ЛО ведётся нашей&nbsp;компанией (57% дел за 2023 г.)
        </span>
      </div>
      <p class="mfc__subtitle">Что вы получите после прохождения теста?</p>
      <ul class="mfc__lst">
        <li class="mfc__lst-item mfc__lst-item--pink">Узнаете минимальную стоимость банкротства в крупнейшей компании СПб и ЛО по банкротству физ. лиц и ИП;</li>
        <li class="mfc__lst-item mfc__lst-item--pink">Вам направят <span class="text-pink">инструкцию</span> по прохождению процедуры банкротства с описанием всех стадий и необходимых документов для сбора;</li>
        <li class="mfc__lst-item mfc__lst-item--pink">Подборку из 72 ответов на вопросы по процедуре банкротства, которые нам задают наши клиенты в офисе. Вы будете знать о банкротстве всё «от и до»;</li>
      </ul>
    </div>
  </div>
</section>