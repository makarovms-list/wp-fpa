<style>
#services_calculation .range-slider {
    margin-bottom: 0px;    
}
#services_calculation .range-slider .irs-bar {
    background-color: #5381F6;
    height: 4px;
    top: -3px;
}
#services_calculation .range-slider .irs-handle {
    top: -10px;
    width: 16px;
    height: 16px;
    border: 3px solid #5381F6;
    background-color: white;
    border-radius: 16px;
    box-shadow: none;
}
#services_calculation .range-slider .irs--round {
    width: calc(100% - 32px);
    margin-left: 16px;
}
#services_calculation .range-slider .irs--round.irs-with-grid {
    height: 30px;
}
#services_calculation .range-slider .irs--round .irs-line {
    top: -3px;
    height: 4px;
}

#services_calculation .range-slider .irs-min,
#services_calculation .range-slider .irs-max,
#services_calculation .range-slider .irs-single {
    display: none!important;
}

.range-slider .js-range-slider-value {
    border: 2px solid #D7DEEF;
    box-sizing: border-box;
    border-radius: 10px;
    width: 100%;
    padding: 12px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    line-height: 145%;
    color: #393939;
}
.range-slider .js-range-slider-value:active, 
.range-slider .js-range-slider-value:focus { 
    outline: none;
}

#services_calculation .calculation__checkbox, 
#services_calculation .calculation__radio {
    min-height: 52px!important;
}

.range-slider.disabled .js-range-slider-value {
    background: #F3F4F4;
    border-radius: 10px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    line-height: 145%;
    color: #D7DEEF;
}
.range-slider.disabled .irs-bar {
    background-color: #dee4ec!important;
}
.range-slider.disabled .irs-handle {
    border: 3px solid #dee4ec!important;
}
.range-slider.disabled .irs,
.range-slider.disabled .irs-bar,
.range-slider.disabled .irs-from,
.range-slider.disabled .irs-to,
.range-slider.disabled .irs-single {
  pointer-events: none;
}


    #services_calculation .range-slider .irs-grid .js-grid-text-3,
    #services_calculation .range-slider .irs-grid .js-grid-text-4,
    #services_calculation .range-slider .irs-grid .js-grid-text-5,
    #services_calculation .range-slider .irs-grid .js-grid-text-7,
    #services_calculation .range-slider .irs-grid .js-grid-text-8,
    #services_calculation .range-slider .irs-grid .js-grid-text-9 {
        display: none;
    }


#services_calculation .range-slider .irs-grid {
    display: none;
}
.showcase__mark {
    display: block;
    position: absolute;
    top: 12px;
    padding: 1px 3px;
    border-radius: 3px;
    margin-left: -10px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    line-height: 145%;
    text-align: center;
    color: #717B97;
}
#services_calculation .range-slider .irs--round .showcase__mark_0 {
    left: 10px!important;
}
#services_calculation .range-slider .irs--round .showcase__mark_1 {
    left: calc(100% - 124px)!important;
}
/*
#services_calculation .range-slider .irs--round .showcase__mark_1 {
    left: 46%!important;
}
*/
#services_calculation .showcase__mark__cnt {
    position: relative;
}
#services_calculation .range-slider .irs--round {
    height: 0px;
}
#services_calculation .showcase__mark__cnt {
    height: 50px;
}

#services_calculation .calculation__checkbox.checkbox_donot_know,
#services_calculation .calculation__checkbox.checkbox_donot_know__cnt,
#services_calculation .calculation__radio.radio_donot_know__cnt {
    box-shadow: none;
    background: #FFFFFF;
    opacity: 0.6;
    border: 2px solid #D7DEEF;
}
#services_calculation .calculation__checkbox.checkbox_donot_know.checked,
#services_calculation .calculation__checkbox.checkbox_donot_know__cnt.checked,
#services_calculation .calculation__radio.radio_donot_know__cnt.checked {
    opacity: 1;
}
#services_calculation .showcase__mark__cnt .showcase__mark.mobile {
    display: none;
}

@media (max-width: 768px) {
    #services_calculation .range-slider .irs-grid .js-grid-text-1,
    #services_calculation .range-slider .irs-grid .js-grid-text-2,
    #services_calculation .range-slider .irs-grid .js-grid-text-3,
    #services_calculation .range-slider .irs-grid .js-grid-text-4 {
        display: none;
    }
    #services_calculation .range-slider .irs-grid .js-grid-text-5 {
        margin-left: -15%;
        visibility: visible!important;
    }
    #services_calculation .showcase__mark__cnt .showcase__mark.mobile {
        display: block;
    }
    #services_calculation .showcase__mark__cnt .showcase__mark:not(.mobile) {
        display: none;
    }
    #services_calculation .calculation__checkbox.checkbox_donot_know, 
    #services_calculation .calculation__radio.radio_donot_know {
        max-height: 52px;
    }
    #services_calculation .calculation__checkbox.checkbox checkbox_donot_know label, 
    #services_calculation .calculation__radio.radio_donot_know label {
        font-size: 12px!important;
    }
    #services_calculation .calculation__checkbox, #services_calculation .calculation__radio {
        min-height: 52px!important;
        max-height: 52px!important;
    }
}
@media (max-width: 540px) {
    .calculation__wrap .calculation__nav button {
        width: 50%;
    }
    .calculation__wrap .calculation__nav button.calculation__btn--next {
        margin-right: 0px;
        margin-left: 5px;
    }
    .calculation__wrap .calculation__nav button.calculation__btn--prev {
        margin-right: 5px;
    }
}

</style>



<section id="services_calculation" class="section--services-grey calculation">
  <div class="container">
    <div class="section__image section__image--calc lazy"></div>
    <h2 class="title-page">Рассчитайте <span class="title-page__accent">МИНИМАЛЬНУЮ</span> стоимость
            <br> банкротства конкретно в вашем случае</h2>
    <p class="subtitle-page">Расчёт производится с учётом ваших индивидуальных условий и включает в себя все платежи в суде, АУ, юристу и другие</p>
    <div class="calculation__wrap" id="calculation--inpost">
      <div class="calculation__inner">
          
        <div class="calculation__tab">
          <div class="calculation__content">
            <div class="calculation__title">Примерная сумма всех кредитов и долгов</div>
            <p class="calculation__text">В сумму долгов можно включить, не только сам кредит, но и пени, проценты, а так же задолженности по ЖКХ, штрафы ГИБДД и налоги</p>
          </div>
          <!--
          <div class="range-slider ">
            <input type="text" value="0" class="js-range-slider-value" />
            <input type="text" class="js-range-slider hidden" name="summ-value" value="0" />
          </div>
          <div class="showcase__mark__cnt">
              <span class="showcase__mark showcase__mark_0" style="left: 24px;">Менее 50&nbsp;000 руб.</span>
              <span class="showcase__mark showcase__mark_0 mobile" style="left: 24px;">50≤&nbsp;т.р.</span>
              <span class="showcase__mark showcase__mark_1" style="left: calc(100% - 130px);">Более 3&nbsp;000&nbsp;000 руб.</span>
              <span class="showcase__mark showcase__mark_1 mobile" style="left: calc(100% - 64px);"> ≥3&nbsp;млн.р.</span>
          </div>
          -->
          <div class="calculation__variants">
            <div class="calculation__radio radio">
              <label class="radio__label" for="calc_1_1">Менее 300 000 рублей</label>
              <input class="radio__default" id="calc_1_1" type="radio" name="summ">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <div class="calculation__radio radio">
              <label class="radio__label" for="calc_1_2">300 000 – 500 000 рублей</label>
              <input class="radio__default" id="calc_1_2" type="radio" name="summ">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <div class="calculation__radio radio">
              <label class="radio__label" for="calc_1_3">500 001 – 1 000 000 рублей</label>
              <input class="radio__default" id="calc_1_3" type="radio" name="summ">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <div class="calculation__radio radio">
              <label class="radio__label" for="calc_1_4">1 000 001 – 3 000 000 рублей</label>
              <input class="radio__default" id="calc_1_4" type="radio" name="summ">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <div class="calculation__radio radio">
              <label class="radio__label" for="calc_1_5">3 000 001 – 7 000 000 рублей</label>
              <input class="radio__default" id="calc_1_5" type="radio" name="summ">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <div class="calculation__radio radio">
              <label class="radio__label" for="calc_1_6">Более 7 000 000 рублей</label>
              <input class="radio__default" id="calc_1_6" type="radio" name="summ">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <!--
            <div class="calculation__checkbox checkbox checkbox_donot_know">
              <label class="checkbox_label" for="calc_1_7">Затрудняюсь ответить</label>
              <input class="checkbox__default" id="calc_1_7" type="checkbox" name="summ" value="summ_not_selected">
              <span class="checkbox__new checkbox__new--accent"></span>
            </div>
            <div class="calculation__checkbox checkbox checkbox_donot_know checkbox_donot_know__cnt hidden">
              <label class="checkbox_label" for="calc_1_8">1 000 000 рублей</label>
              <input class="checkbox__default" id="calc_1_8" type="checkbox" checked="checked" name="summ" value="summ_selected">
              <span class="checkbox__new checkbox__new--accent"></span>
            </div>
            -->
          </div>
        </div>
          
        <div class="calculation__tab">
          <div class="calculation__content">
            <div class="calculation__title">Категории граждан</div>
            <p class="calculation__text">К какой из указанных категорий граждан Вы относитесь?</p>
          </div>
          <div class="calculation__variants">
            <div class="calculation__checkbox checkbox">
              <label class="checkbox__label" for="calc_2_1">Безработные (более 3 месяцев)</label>
              <input class="checkbox__default" id="calc_2_1" type="checkbox" name="category">
              <span class="checkbox__new checkbox__new--accent"></span>
            </div>
            <div class="calculation__checkbox checkbox">
              <label class="checkbox__label" for="calc_2_2">Ипотечные должники</label>
              <input class="checkbox__default" id="calc_2_2" type="checkbox" name="category">
              <span class="checkbox__new checkbox__new--accent"></span>
            </div>
            <div class="calculation__checkbox checkbox">
              <label class="checkbox__label" for="calc_2_3">Родители-одиночки</label>
              <input class="checkbox__default" id="calc_2_3" type="checkbox" name="category">
              <span class="checkbox__new checkbox__new--accent"></span>
            </div>
            <div class="calculation__checkbox checkbox">
              <label class="checkbox__label" for="calc_2_4">Пенсионеры</label>
              <input class="checkbox__default" id="calc_2_4" type="checkbox" name="category">
              <span class="checkbox__new checkbox__new--accent"></span>
            </div>
            <div class="calculation__checkbox checkbox">
              <label class="checkbox__label" for="calc_2_5">Инвалиды любой группы</label>
              <input class="checkbox__default" id="calc_2_5" type="checkbox" name="category">
              <span class="checkbox__new checkbox__new--accent"></span>
            </div>
            <div class="calculation__checkbox checkbox">
              <label class="checkbox__label" for="calc_2_6">Родители ребенка до 3 лет</label>
              <input class="checkbox__default" id="calc_2_6" type="checkbox" name="category">
              <span class="checkbox__new checkbox__new--accent"></span>
            </div>
            <div class="calculation__checkbox checkbox">
              <label class="checkbox__label" for="calc_2_7">Семьи с двумя и более детьми</label>
              <input class="checkbox__default" id="calc_2_7" type="checkbox" name="category">
              <span class="checkbox__new checkbox__new--accent"></span>
            </div>
            <div class="calculation__checkbox checkbox">
              <label class="checkbox__label" for="calc_2_8">Индивидуальные предприниматели, бывшие ИП</label>
              <input class="checkbox__default" id="calc_2_8" type="checkbox" name="category">
              <span class="checkbox__new checkbox__new--accent"></span>
            </div>
            <div class="calculation__checkbox checkbox">
              <label class="checkbox__label" for="calc_2_9">Военнослужащие и участники боевых действий</label>
              <input class="checkbox__default" id="calc_2_9" type="checkbox" name="category">
              <span class="checkbox__new checkbox__new--accent"></span>
            </div>
            <div class="calculation__checkbox checkbox">
              <label class="checkbox__label" for="calc_2_10">Сотрудники здравоохранения, образования и защиты правопорядка</label>
              <input class="checkbox__default" id="calc_2_10" type="checkbox" name="category">
              <span class="checkbox__new checkbox__new--accent"></span>
            </div>
            <div class="calculation__checkbox checkbox">
              <label class="checkbox__label" for="calc_2_11">Другое</label>
              <input class="checkbox__default" id="calc_2_11" type="checkbox" name="category">
              <span class="checkbox__new checkbox__new--accent"></span>
            </div>
          </div>
        </div> 
          
        <div class="calculation__tab">
          <div class="calculation__content">
            <div class="calculation__title">Кредиторы</div>
            <p class="calculation__text">Кто является вашим(и) кредитором(ами)?</p>
          </div>
          <div class="calculation__variants">
            <div class="calculation__checkbox checkbox">
              <label class="checkbox__label" for="calc_4_1">Банки</label>
              <input class="checkbox__default" id="calc_4_1" type="checkbox" name="creditors">
              <span class="checkbox__new checkbox__new--accent"></span>
            </div>
            <div class="calculation__checkbox checkbox">
              <label class="checkbox__label" for="calc_4_2">МФО</label>
              <input class="checkbox__default" id="calc_4_2" type="checkbox" name="creditors">
              <span class="checkbox__new checkbox__new--accent"></span>
            </div>
            <div class="calculation__checkbox checkbox">
              <label class="checkbox__label" for="calc_4_3">Государственные органы</label>
              <input class="checkbox__default" id="calc_4_3" type="checkbox" name="creditors">
              <span class="checkbox__new checkbox__new--accent"></span>
            </div>
            <div class="calculation__checkbox checkbox">
              <label class="checkbox__label" for="calc_4_4">Физические лица</label>
              <input class="checkbox__default" id="calc_4_4" type="checkbox" name="creditors">
              <span class="checkbox__new checkbox__new--accent"></span>
            </div>
            <div class="calculation__checkbox checkbox">
              <label class="checkbox__label" for="calc_4_5">Юридические лица</label>
              <input class="checkbox__default" id="calc_4_5" type="checkbox" name="creditors">
              <span class="checkbox__new checkbox__new--accent"></span>
            </div>
            <div class="calculation__checkbox checkbox checkbox_donot_know__cnt">
              <label class="checkbox__label" for="calc_4_6">Затрудняюсь ответить</label>
              <input class="checkbox__default" id="calc_4_6" type="checkbox" name="creditors">
              <span class="checkbox__new checkbox__new--accent"></span>
            </div>
          </div>
        </div>
          
        <div class="calculation__tab place_cnt">
          <div class="calculation__content">
            <div class="calculation__title">Место фактического проживания</div>
            <p class="calculation__text">Где вы сейчас находитесь?</p>
          </div>
          <div class="calculation__variants">
            <div class="calculation__radio radio">
              <label class="radio__label">Санкт-Петербург и Ленинградская область</label>
              <input class="radio__default" type="radio" name="place">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <div class="calculation__radio radio">
              <label class="radio__label">Москва и Московская область</label>
              <input class="radio__default" type="radio" name="place">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <div class="calculation__radio radio">
              <label class="radio__label">Другие регионы</label>
              <input class="radio__default" type="radio" name="place">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <div class="calculation__radio radio radio_donot_know__cnt">
              <label class="radio__label">Затрудняюсь ответить</label>
              <input class="radio__default" type="radio" name="place">
              <span class="radio__new radio__new--accent"></span>
            </div>
          </div>
        </div>
        
        
        <div class="calculation__tab calculation__tab--3">
          <div class="calculation__content">
            <div class="calculation__title">Бизнес</div>
            <p class="calculation__text">Занимаетесь ли вы бизнесом в данный момент?</p>
          </div>
          <div class="calculation__variants">
            <div class="calculation__radio radio">
              <label class="radio__label">Сейчас не занимаюсь бизнесом</label>
              <input class="radio__default" type="radio" name="business">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <div class="calculation__radio radio">
              <label class="radio__label">Веду предпринимательскую деятельность</label>
              <input class="radio__default" type="radio" name="business">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <div class="calculation__radio radio">
              <label class="radio__label">Другой вариант</label>
              <input class="radio__default" type="radio" name="business">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <div class="calculation__radio radio radio_donot_know__cnt">
              <label class="radio__label">Затрудняюсь ответить</label>
              <input class="radio__default" type="radio" name="business">
              <span class="radio__new radio__new--accent"></span>
            </div>
          </div>
        </div>
        
        <div class="calculation__tab">
          <div class="calculation__content">
            <div class="calculation__title">Сделки с ценным имуществом</div>
            <p class="calculation__text">Вы совершали сделки с ценным имуществом в течение последних 3 лет?</p>
          </div>
          <div class="calculation__variants">
            <div class="calculation__radio radio">
              <label class="radio__label">Были сделки с ценным имуществом за 3&nbsp;года</label>
              <input class="radio__default" type="radio" name="transactions">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <div class="calculation__radio radio">
              <label class="radio__label">Не было сделок с ценным имуществом за 3&nbsp;года</label>
              <input class="radio__default" type="radio" name="transactions">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <div class="calculation__radio radio">
              <label class="radio__label">Другой вариант</label>
              <input class="radio__default" type="radio" name="transactions">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <div class="calculation__radio radio radio_donot_know__cnt">
              <label class="radio__label">Затрудняюсь ответить</label>
              <input class="radio__default" type="radio" name="transactions">
              <span class="radio__new radio__new--accent"></span>
            </div>
          </div>
        </div>
        
        <div class="calculation__tab">
          <div class="calculation__content">
            <div class="calculation__title">Ценное имущество в собственности</div>
            <p class="calculation__text">Например, транспортные средства или недвижимость за исключением единственного жилья</p>
          </div>
          <div class="calculation__variants">
            <div class="calculation__radio radio">
              <label class="radio__label">Есть ценное имущество</label>
              <input class="radio__default" type="radio" name="valuable">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <div class="calculation__radio radio">
              <label class="radio__label">Есть ипотека</label>
              <input class="radio__default" type="radio" name="valuable">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <div class="calculation__radio radio">
              <label class="radio__label">Нет ценного имущества</label>
              <input class="radio__default" type="radio" name="valuable">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <div class="calculation__radio radio radio_donot_know__cnt">
              <label class="radio__label">Затрудняюсь ответить</label>
              <input class="radio__default" type="radio" name="valuable">
              <span class="radio__new radio__new--accent"></span>
            </div>
          </div>
        </div>
        
        <div class="calculation__tab">
          <div class="calculation__content">
            <div class="calculation__title">Вам требуются</div>
            <p class="calculation__text">Какие услуги нашей компании вам нужны?</p>
          </div>
          <div class="calculation__variants">
            <div class="calculation__radio radio">
              <label class="radio__label">Услуги списания всех долгов с гарантией и защитой адвокатом от коллекторов</label>
              <input class="radio__default" type="radio" name="services">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <div class="calculation__radio radio">
              <label class="radio__label">Услуги реструктуризации всех долгов на ваших условиях</label>
              <input class="radio__default" type="radio" name="services">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <div class="calculation__radio radio">
              <label class="radio__label">Услуги адвоката по защите от коллекторов</label>
              <input class="radio__default" type="radio" name="services">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <div class="calculation__radio radio radio_donot_know__cnt">
              <label class="radio__label">Затрудняюсь ответить</label>
              <input class="radio__default" type="radio" name="services">
              <span class="radio__new radio__new--accent"></span>
            </div>
          </div>
        </div>
        
        <div class="calculation__tab">
          <div class="calculation__content">
            <div class="calculation__title">Арест счетов и имущества</div>
            <p class="calculation__text">Ваши долги уже просужены и исполнительные листы находятся в ФССП (Федеральной службе судебных приставов)? Произведён арест счетов, имущества, наложен запрет на выезд за границу?</p>
          </div>
          <div class="calculation__variants">
            <div class="calculation__radio radio">
              <label class="radio__label" for="calc_5_1">Да</label>
              <input class="radio__default" id="calc_5_1" type="radio" name="fssp">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <div class="calculation__radio radio">
              <label class="radio__label" for="calc_5_2">Нет</label>
              <input class="radio__default" id="calc_5_2" type="radio" name="fssp">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <div class="calculation__radio radio radio_donot_know__cnt">
              <label class="radio__label" for="calc_5_3">Затрудняюсь ответить</label>
              <input class="radio__default" id="calc_5_3" type="radio" name="fssp">
              <span class="radio__new radio__new--accent"></span>
            </div>
          </div>
        </div>

        <div class="calculation__tab">
          <div class="calculation__content">
            <div class="calculation__title">Трудоустройство</div>
            <p class="calculation__text">У вас произошло сокращение на работе?</p>
          </div>
          <div class="calculation__variants">
            <div class="calculation__radio radio">
              <label class="radio__label" for="calc_3_1">Да</label>
              <input class="radio__default" id="calc_3_1" type="radio" name="reduced-income">
              <span class="radio__new radio__new--accent"></span>
            </div>
            <div class="calculation__radio radio">
              <label class="radio__label" for="calc_3_2">Нет</label>
              <input class="radio__default" id="calc_3_2" type="radio" name="reduced-income">
              <span class="radio__new radio__new--accent"></span>
            </div>
          </div>
        </div>

      </div>
      <div class="calculation__slides">
        <span class="calculation__slide--current"> </span> вопрос из <span class="calculation__slide--summ"></span>
      </div>
      <div class="calculation__nav">
        <button class="btn calculation__btn calculation__btn--prev disabled" id="btn-prev">
          <span>Назад</span>
        </button>
        <button class="btn calculation__btn calculation__btn--next" id="btn-next">
          <span>Ответить</span>
        </button>
        <button class="btn calculation__btn calculation__btn--modal hidden" id="btn-calc-modal" data-name="SMS-3 АВТОМАТИЧЕСКИЙ РАСЧЕТ СТОИМОСТИ БАНКРОТСТВА" data-sms="4">
          <span>Ответить</span>
        </button>
      </div>
    </div>
  </div>
</section>