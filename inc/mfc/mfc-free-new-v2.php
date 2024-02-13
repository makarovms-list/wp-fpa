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
.mfc-adv__content-v2 {
    font-family: Inter;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 145%;
    color: #717B97;    
}
.mfc-adv {
    width: 100%;
    max-width: 500px;    
}
.mfc-hint {
    padding-left: 38px;
}
.mfc-hint__number--accent {
    font-size: 48px;
}
.mfc__title--new {
    font-weight: 600;
    font-size: 34px;
    line-height: 145%;
    color: #393939;
}
.mfc__subtitle {
    font-size: 18px;
    line-height: 145%;
    color: #393939;
}
.mfc__lst-item {
    font-weight: normal;
    font-size: 14px;
    line-height: 145%;
    color: #393939;
}
.mfc__lst-item::before {
    top: 7px;
}
.mfc__btn--new {
    border-radius: 10px;
}
.btn__text--new {
    font-weight: 500;
    font-size: 16px;
    line-height: 145%;
    color: #FFFFFF;
}
.modal__overlay {
    background-color: #fff;
}
@media (max-width: 992px) {
    .mfc__title--new {
        font-size: 22px;
    }
    .mfc__btn--new {
        padding: 16px;
    }
}
@media (max-width: 576px) {
    .mfc__title--new {
        font-size: 19px;
    }
    .mfc-adv__content-v2 {
        font-size: 12px;
    }
    .mfc__btn--new {
        padding: 12px;
    }
    .mfc__subtitle--new,
    .mfc__lst--new {
        display: none!important;
    }
    .mfc {
        padding: 40px 0 10px;
    }
}
</style>
<section class="mfc mfc--new mfc--grey">
  <div class="container">
    <div class="mfc__wrap mfc__wrap--new">
      <header class="mfc__header">
        <div class="logo">
          <span class="logo__name">
            <img src="<?= get_template_directory_uri() ?>/assets/img/logo.svg" alt="Логотип компании" title="Финансово-правовой альянс">
          </span>
        </div>
        <div class="mfc__advantages mfc-adv mfc-adv--free-v2">
          
          <div class="mfc-adv__content-v2">
            <span class="mfc-adv__text">Банкротство через МФЦ с сопровождением от юристов одной из крупнейших юридических фирм СПб</span>
          </div>
        </div>
      </header>
      <h1 class="mfc__title mfc__title--new">Пройдите тест и узнайте, <span class="text-accent">вправе ли вы списать кредиты и долги бесплатно</span> или с субсидией в&nbsp;Арбитражном суде СПб и ЛО <span class="text-accent text-nowrap">до <?php echo $date->format('j') . '.' . $month; ?>.<?php echo date ( 'Y' ) ; ?> г. </span>!</h1>
      <div class="mfc__block-btn mfc__block-btn--new">
        <!--<button class="btn mfc__btn mfc__btn--new mfc-btn-free-new"><span class="btn__text--new">Пройти тест</span></button>-->
        <button class="btn mfc__btn mfc__btn--new hidden-btn" data-sms="17" data-popup-id="mfc-ac__number-1" data-color-schema="blue" ><span class="btn__text--new">Пройти тест</span></button>
        <div class="mfc__hint mfc-hint">
          <div class="mfc-hint__number mfc-hint__number--accent">2</div>
          <div class="mfc-hint__text">
            <span class="mfc__hint--big mfc__hint--bold text-accent">из 3 </span>заявителей вправе бесплатно обанкротиться в 2023 году. Узнайте, можете ли вы списать свои долги бесплатно:
          </div>
        </div>
      </div>
      <p class="mfc__subtitle mfc__subtitle--new">Что вы получите после прохождения теста?</p>
      <ul class="mfc__lst mfc__lst--new">
        <li class="mfc__lst-item">Узнаете, сможете ли вы пройти процедуру банкротства бесплатно или с субсидией от некоммерческих и коммерческих организаций;</li>
        <li class="mfc__lst-item">Если вы не подходите под условия бесплатного или льготного банкротства, вам направят <span class="text-accent">инструкцию</span>, как пройти банкротство самостоятельно;</li>
        <li class="mfc__lst-item">Образцы документов для подачи на банкротство в Арбитражный суд Санкт-Петербурга и Ленинградской области;</li>
      </ul>
    </div>
  </div>
</section>