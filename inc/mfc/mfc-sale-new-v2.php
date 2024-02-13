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
.mfc-hint__number--red {
    font-size: 48px;
}
.mfc-hint__text {
    font-weight: normal;
}
.mfc-adv__stars-v2 {
    max-width: 400px;
}
.mfc-adv__stars-v2 .main__cnt {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: 150px 150px;
    grid-column-gap: 16px;
    grid-row-gap: 16px;
}
.mfc-adv__stars-v2 .main__cnt .stars__cnt,
.mfc-adv__stars-v2 .main__cnt .reviews__cnt {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: 80px 80px;
    grid-column-gap: 8px;
    grid-row-gap: 8px;
}
.mfc-adv__stars-v2 .main__cnt .stars__cnt .counter {
    font-weight: bold;
    font-size: 26px;
    line-height: 145%;
    display: flex;
    align-items: center;
    text-align: center;
    color: #FFBB16;
}
.mfc-adv__stars-v2 .main__cnt .reviews__cnt .counter {
    font-weight: bold;
    font-size: 26px;
    line-height: 145%;
    display: flex;
    align-items: center;
    color: #5381F6;
}
.mfc-adv__stars-v2 .main__cnt .stars__cnt .description,
.mfc-adv__stars-v2 .main__cnt .reviews__cnt .description {
    font-weight: normal;
    font-size: 12px;
    line-height: 145%;
    display: flex;
    align-items: center;
    color: #717B97;
}
.mfc-adv__stars-v2 .main__cnt-one {
    margin-top: 8px;
}
.mfc-adv__stars-v2 .main__cnt-one span {
    font-weight: normal;
    font-size: 14px;
    line-height: 145%;
    color: #717B97;
}
@media (max-width: 992px) {
    
}
@media (max-width: 576px) {
    .mfc-adv__stars-v2 .main__cnt {
        grid-template-columns: 100px 100px;
    }
    .mfc-adv__stars-v2 .main__cnt .stars__cnt, 
    .mfc-adv__stars-v2 .main__cnt .reviews__cnt {
        grid-template-columns: 50px 50px;
    }
    .mfc-adv__stars-v2 .main__cnt .stars__cnt .counter {
        font-size: 16px;
    }
    .mfc-adv__stars-v2 .main__cnt .reviews__cnt .counter {
        font-size: 16px;
    }
    .mfc-adv__stars-v2 .main__cnt .stars__cnt .description, 
    .mfc-adv__stars-v2 .main__cnt .reviews__cnt .description {
        font-size: 8px;
    }
    .mfc-adv__stars-v2 .main__cnt-one span {
        font-size: 12px;
    }
}
@media (max-width: 400px) {
    .mfc-adv__stars-v2 .main__cnt {
        grid-template-columns: 80px 80px;
    }
    .mfc-adv__stars-v2 .main__cnt .stars__cnt, 
    .mfc-adv__stars-v2 .main__cnt .reviews__cnt {
        grid-template-columns: 38px 38px;
    }
    .mfc-adv__stars-v2 .main__cnt .stars__cnt .counter {
        font-size: 12px;
    }
    .mfc-adv__stars-v2 .main__cnt .reviews__cnt .counter {
        font-size: 12px;
    }
    .mfc-adv__stars-v2 .main__cnt .stars__cnt .description, 
    .mfc-adv__stars-v2 .main__cnt .reviews__cnt .description {
        font-size: 8px;
    }
    .mfc-adv__stars-v2 .main__cnt-one span {
        font-size: 9px;
    }
}
</style>
<section class="mfc mfc--sale mfc--new">
  <div class="container">
    <div class="mfc__wrap mfc__wrap--new">
      <header class="mfc__header">
        <div class="logo">
          <span class="logo__name">
            <img src="<?= get_template_directory_uri() ?>/assets/img/logo.svg" alt="Логотип компании" title="Финансово-правовой альянс">
          </span>
        </div>
        <div class="mfc__advantages mfc-adv mfc-adv--sale-v2">
          <div class="mfc-adv__content">
            <div class="mfc-adv__stars-v2 mfc-adv__stars--desktop-v2">
                <div class="main__cnt">
                    <div class="sub__cnt">
                        <div class="stars__cnt">
                            <div class="counter">★ 4.9</div>
                            <div class="description">Оценка компании</div>
                        </div>
                    </div>
                    <div class="sub__cnt">
                        <div class="reviews__cnt">
                            <div class="counter">1 075</div>
                            <div class="description">Отзывов клиентов</div>
                        </div>
                    </div>
                </div>
                <div class="main__cnt-one">
                    <span>Крупнейшая в СПб и ЛО компания по банкротству физических лиц и ИП</span>
                </div>
            </div>
          </div>
        </div>
      </header>
      <h1 class="mfc__title mfc__title--new">Пройдите тест и узнайте <span class="text-red">минимальную стоимость</span> банкротства в Арбитражном суде СПб и ЛО по акции до <span class="text-red text-nowrap"><?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> г.</span>!</h1>
      <div class="mfc__block-btn mfc__block-btn--new">
        <!--<button class="btn btn--red mfc__btn mfc__btn--new mfc-btn-sale-new"><span class="btn__text--new">Пройти тест</span></button>-->
        <button class="btn btn--red mfc__btn mfc__btn--new hidden-btn" data-sms="18" data-popup-id="mfc-ac__number-2" data-color-schema="red"><span class="btn__text--new">Пройти тест</span></button>
        <div class="mfc__hint mfc-hint">
          <div class="mfc-hint__number mfc-hint__number--red">1</div>
          <div class="mfc-hint__text">
            <span class="mfc__hint--big mfc__hint--bold text-red">из 2 </span>дел по банкротству в СПб и ЛО ведётся нашей компанией (Более 57% дел по банкротству физических лиц в 2023 г.)
          </div>
        </div>
      </div>
      <p class="mfc__subtitle mfc__subtitle--new">Что вы получите после прохождения теста?</p>
      <ul class="mfc__lst mfc__lst--new">
        <li class="mfc__lst-item mfc__lst-item--pink">Узнаете минимальную стоимость банкротства в крупнейшей компании СПб и ЛО по банкротству физлиц и ИП;</li>
        <li class="mfc__lst-item mfc__lst-item--pink"><span class="text-red">Инструкцию</span> по прохождению процедуры банкротства с описанием всех этапов и списком необходимых документов для сбора;</li>
        <li class="mfc__lst-item mfc__lst-item--pink">Подборку из 72 ответов на вопросы по процедуре банкротства, которые нам задают наши клиенты в офисе: вы будете знать о банкротстве всё от и до;</li>
      </ul>
    </div>
  </div>
</section>