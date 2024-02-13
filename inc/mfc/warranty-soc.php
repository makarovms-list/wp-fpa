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
<style>
.mfc-hint__text {
    /*font-weight: 400;*/
    font-size: 15px;
    line-height: 18px;
    color: #333333;
    max-width: 360px;
}
.soc_wrapper ul {
    padding: 0;
    list-style: none;
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: 28px 28px 28px 28px 28px;
    grid-column-gap: 28px;
    grid-row-gap: 28px;
}
.soc_wrapper ul li {
    width: 28px;
    height: 28px;
    /*cursor: pointer;*/
}
.soc_wrapper ul li.whatsapp {
    background: url(/wp-content/themes/fpalaw/assets/img/mfc/whatsapp.svg) center center no-repeat;
    background-size: contain;
}
.soc_wrapper ul li.telegram {
    background: url(/wp-content/themes/fpalaw/assets/img/mfc/telegram.svg) center center no-repeat;
    background-size: contain;
}
.soc_wrapper ul li.viber {
    background: url(/wp-content/themes/fpalaw/assets/img/mfc/viber.svg) center center no-repeat;
    background-size: contain;
}
.soc_wrapper ul li.fb {
    background: url(/wp-content/themes/fpalaw/assets/img/mfc/fb.svg) center center no-repeat;
    background-size: contain;
}
.soc_wrapper ul li.wechat {
    background: url(/wp-content/themes/fpalaw/assets/img/mfc/wechat.svg) center center no-repeat;
    background-size: contain;
}

.modal__wrap.modal__wrap--answer h3.calc-modal__question {
    font-size: 24px;
}
.modal__wrap.modal__wrap--answer h3.calc-modal__question span {
    width: 28px;
    height: 28px;
    display: inline-block;
    margin-left: 8px;
    margin-bottom: -4px;
    margin-top: 4px;
}
.modal__wrap.modal__wrap--answer h3.calc-modal__question span.WhatsApp {
    background: url(/wp-content/themes/fpalaw/assets/img/mfc/whatsapp.svg) center center no-repeat;
    background-size: contain;
}
.modal__wrap.modal__wrap--answer h3.calc-modal__question span.Telegram {
    background: url(/wp-content/themes/fpalaw/assets/img/mfc/telegram.svg) center center no-repeat;
    background-size: contain;
}
.modal__wrap.modal__wrap--answer h3.calc-modal__question span.Viber {
    background: url(/wp-content/themes/fpalaw/assets/img/mfc/viber.svg) center center no-repeat;
    background-size: contain;
}
.modal__wrap.modal__wrap--answer h3.calc-modal__question span.Facebook_Messenger {
    background: url(/wp-content/themes/fpalaw/assets/img/mfc/fb.svg) center center no-repeat;
    background-size: contain;
}

@media (max-width: 768px) {
    .mfc-hint {
        padding-left: 0px;
        display: flex;
        flex-direction: column-reverse;
    }
}
</style>
<section class="mfc">
  <div class="container">
    <div class="mfc__wrap">
      <span class="note note--blue">За 1 минуту</span>
      <h1 class="mfc__title"> Пройдите тест и узнайте, вправе ли вы <span class="text-accent">обанкротиться бесплатно или с субсидией </span>в арбитражном суде или МФЦ <span class="text-nowrap">до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> г.!</span></h1>
      <div class="mfc__block-btn mfc__block-btn--new">
        <!--<button class="btn mfc__btn mfc-btn-free-v2" id="mfc-btn-free" data-master="bondar" data-sms="34">Пройти тест</button>-->
        <button class="btn mfc__btn hidden-btn" data-sms="37" data-popup-id="mfc-bankruptcy-soc__number-1" data-color-schema="blue">Пройти тест</button>
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
        <li class="mfc__lst-item">Узнаете, возможно ли вам пройти процедуру банкротства бесплатно или с субсидией от некоммерческих и коммерческих организаций;</li>
        <li class="mfc__lst-item">Если вы не подходите под бесплатное или льготное банкротство, вам направят <span class="text-accent">инструкцию</span>, как пройти банкротство самостоятельно;</li>
        <li class="mfc__lst-item">Образцы документов для подачи на банкротство в Арбитражный суд Санкт-Петербурга и Ленинградской области;</li>
      </ul>
    </div>
  </div>
</section>