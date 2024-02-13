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
#services_calculation .title-page strong {
    color: #3c70f4;
    text-transform: uppercase;
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
<?php
    $block4_content = get_field('block4_content', 21616);
?>
<section id="services_calculation" class="section--services-white calculation">
    <div class="container">
        <div class="section__image section__image--calc lazy"></div>
        <h2 class="title-page"><?=$block4_content['title']; ?></h2>
        <p class="subtitle-page"><?=$block4_content['subtitle']; ?></p>
        <div class="calculation__wrap" id="calculation--inpost">
            <div class="calculation__inner">
                <?php
                    if ($block4_content['quiz']) {
                        foreach($block4_content['quiz'] as $key => $value) {
                            if ($key > 0) { $additional_class = "hidden"; } else { $additional_class = ""; }
                ?>
                            <div class="calculation__tab <?=$additional_class; ?>">
                                <div class="calculation__content">
                                    <h4 class="calculation__title"><?=$value['question']; ?></h4>
                                    <p class="calculation__text"><?=$value['desc']; ?></p>
                                </div>
                                <div class="calculation__variants">
                <?php
                                    foreach($value['answers'] as $elem_key => $elem_value) {
                                        foreach($elem_value['variants'] as $item_key => $item_value) {
                ?>              
                                            <div class="calculation__<?=$elem_value['type']; ?> <?=$elem_value['type']; ?>">
                                                <label class="<?=$elem_value['type']; ?>__label" for="calc_<?=$key; ?>_<?=$elem_key; ?>_<?=$item_key; ?>"><?=$item_value['text']; ?></label>
                                                <input class="<?=$elem_value['type']; ?>__default" id="calc_<?=$key; ?>_<?=$elem_key; ?>_<?=$item_key; ?>" type="<?=$elem_value['type']; ?>" name="<?=$elem_value['id']; ?>">
                                                <span class="<?=$elem_value['type']; ?>__new <?=$elem_value['type']; ?>__new--accent"></span>
                                            </div>
                <?php
                                        }
                                    }
                ?>              
                                </div>
                            </div>
                <?php
                        }
                    }
                ?>
            </div>
            <div class="calculation__slides">
                <span class="calculation__slide--current">1 </span> вопрос из <span class="calculation__slide--summ">10</span>  
            </div>
            <div class="calculation__nav">
                <button class="btn calculation__btn calculation__btn--prev disabled" id="btn-prev"><span>Назад</span></button>
                <button class="btn calculation__btn calculation__btn--next" id="btn-next"><span>Ответить</span></button>
                <button class="btn calculation__btn calculation__btn--modal hidden" id="btn-calc-modal" data-name="SMS-3 АВТОМАТИЧЕСКИЙ РАСЧЕТ СТОИМОСТИ БАНКРОТСТВА" data-sms="4"><span>Ответить</span></button>
            </div>
        </div>
    </div>
</section>