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
    .info-symbol {
        background: transparent;
        border: none;
        padding: 0;
        margin: 0;
        align-items: center;
        height: 16px;
        width: 16px;
        position: relative;
        cursor: pointer;
    }
    .info-symbol svg {
        position: absolute;
        bottom: 3px;
        left: 0;
    }
    .mfc-adv__image {
        margin-right: 8px;
    }
    .mfc-hint {
        padding-left: 0px;
    }
    .mfc__title--new {
        margin-bottom: 15px;
    }
    .mfc__wrap--new .sub-title {
        font-family: Inter;
        font-size: 18px;
        font-weight: 500;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        margin-bottom: 15px;
        color: #717B97;
    }
    .mfc__wrap--new .sub-title-bootom {
        font-family: Inter;
        font-size: 12px;
        font-weight: 500;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        margin-bottom: 30px;
        color: #B7C1DD;
    }
    /*
    body.fixed-popup-bg:before {
        content: "";
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background: #F3F4F4D9;
        z-index: 999;
    }
    */
    .fixed-modal--rbk-info-popup {
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background: #F3F4F4D9;
        z-index: 999;
    }
    .fixed-modal--rbk-info-popup:not(.hidden) {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .fixed-modal--rbk-info-popup .content-cnt {
        max-width: 720px;
        padding: 40px;
        box-shadow: 0px 14px 34px 0px #001D681F;
        background: #FFFFFF;
        border-radius: 10px;
    }
    .fixed-modal--rbk-info-popup .content p {
        font-family: Inter;
        font-size: 16px;
        font-weight: 400;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        color: #393939;
    }
    .fixed-modal--rbk-info-popup .close button {
        width: 100%;
        padding: 15px;
        border: none;
        cursor: pointer;
        background: transparent;
        font-family: Inter;
        font-size: 16px;
        font-weight: 700;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: center;
        color: #393939;
    }    
    
    
    .info-symbol svg.desktop {
        display: block;
    }
    .info-symbol svg.mobile {
        display: none;
    }
    
    
    @media (max-width: 768px) {
        .fixed-modal--rbk-info-popup .content-cnt {
            margin-left: 24px;
            margin-right: 24px;
        }
    }
    
    
    @media (max-width: 576px) {
        .mfc--new.mfc--grey .mfc-adv {
            max-width: 300px;
        }   
        .mfc__header {
            justify-content: flex-start;
        }
        .fixed-modal--rbk-info-popup .content-cnt {
            padding: 24px;
        }
        .info-symbol svg {
            bottom: 0px;
        }
        
        
        
        .mfc--new.mfc--grey .mfc__advantages .mfc-adv__text {
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: auto 24px;
            grid-column-gap: 0px;
            grid-row-gap: 0px;
        }
        .mfc--new.mfc--grey .mfc__advantages .mfc-adv__text .info-symbol svg {
            width: 30px;
            height: 30px;
            margin-top: 20px;
            margin-left: -4px;
            position: relative;
        }
        
        .mfc--new.mfc--sale .mfc__advantages .mfc-adv__text {
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: auto 24px;
            grid-column-gap: 0px;
            grid-row-gap: 0px;
        }
        .mfc--new.mfc--sale .mfc__advantages .mfc-adv__text>span {
            text-align: left;
            padding-left: 5px;
        }
        .mfc--new.mfc--sale .mfc__advantages .mfc-adv__text .info-symbol svg {
            width: 30px;
            height: 30px;
            margin-top: 2px;
            margin-left: -4px;
            position: relative;
        }
        .mfc-adv__stars--mobile {
            margin: 0 0 0 5px!important;
        }
        .mfc-adv {
            padding: 8px 30px 12px 30px;
            max-width: 290px;
        }
        
        .info-symbol svg.desktop {
            display: none;
        }
        .info-symbol svg.mobile {
            display: block;
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
        <div class="mfc__advantages mfc-adv mfc-adv--sale">
          <div class="mfc-adv__image mfc-adv__image--yandex"></div>
          <div class="mfc-adv__content">
            <div class="mfc-adv__stars mfc-adv__stars--desktop">★★★★★ 5.0</div>
            <div class="mfc-adv__stars mfc-adv__stars--mobile">
              <span class="mfc-adv__stars-yandex"></span>
              <span>★ 5.0</span>
            </div>
            <span class="mfc-adv__text"><span>Крупнейшая в СПб и ЛО компания по банкротству физических лиц </span><button class="info-symbol"><svg class="desktop" width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.49353 11.8334H8.82686V7.83337H7.49353V11.8334ZM8.1602 6.50004C8.34909 6.50004 8.50753 6.43604 8.63553 6.30804C8.76353 6.18004 8.82731 6.02182 8.82686 5.83337C8.82686 5.64448 8.76286 5.48626 8.63486 5.35871C8.50686 5.23115 8.34864 5.16715 8.1602 5.16671C7.97131 5.16671 7.81309 5.23071 7.68553 5.35871C7.55797 5.48671 7.49397 5.64493 7.49353 5.83337C7.49353 6.02226 7.55753 6.18071 7.68553 6.30871C7.81353 6.43671 7.97175 6.50048 8.1602 6.50004ZM8.1602 15.1667C7.23797 15.1667 6.37131 14.9916 5.5602 14.6414C4.74909 14.2912 4.04353 13.8163 3.44353 13.2167C2.84353 12.6167 2.36864 11.9112 2.01886 11.1C1.66909 10.2889 1.49397 9.42226 1.49353 8.50004C1.49353 7.57782 1.66864 6.71115 2.01886 5.90004C2.36909 5.08893 2.84397 4.38337 3.44353 3.78337C4.04353 3.18337 4.74909 2.70849 5.5602 2.35871C6.37131 2.00893 7.23797 1.83382 8.1602 1.83337C9.08242 1.83337 9.94909 2.00849 10.7602 2.35871C11.5713 2.70893 12.2769 3.18382 12.8769 3.78337C13.4769 4.38337 13.952 5.08893 14.3022 5.90004C14.6524 6.71115 14.8273 7.57782 14.8269 8.50004C14.8269 9.42226 14.6518 10.2889 14.3015 11.1C13.9513 11.9112 13.4764 12.6167 12.8769 13.2167C12.2769 13.8167 11.5713 14.2918 10.7602 14.642C9.94909 14.9923 9.08242 15.1672 8.1602 15.1667ZM8.1602 13.8334C9.64909 13.8334 10.9102 13.3167 11.9435 12.2834C12.9769 11.25 13.4935 9.98893 13.4935 8.50004C13.4935 7.01115 12.9769 5.75004 11.9435 4.71671C10.9102 3.68337 9.64909 3.16671 8.1602 3.16671C6.67131 3.16671 5.4102 3.68337 4.37686 4.71671C3.34353 5.75004 2.82686 7.01115 2.82686 8.50004C2.82686 9.98893 3.34353 11.25 4.37686 12.2834C5.4102 13.3167 6.67131 13.8334 8.1602 13.8334Z" fill="white"/></svg><svg class="mobile" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.54167 13.125H9.45833V8.08333H8.54167V13.125ZM9 6.77892C9.16011 6.77892 9.29394 6.72483 9.4015 6.61667C9.50967 6.5085 9.56375 6.37467 9.56375 6.21517C9.56375 6.05506 9.50967 5.92092 9.4015 5.81275C9.29394 5.70458 9.16011 5.6505 9 5.6505C8.83989 5.6505 8.70606 5.70458 8.5985 5.81275C8.49033 5.92092 8.43625 6.05506 8.43625 6.21517C8.43625 6.37467 8.49033 6.5085 8.5985 6.61667C8.70606 6.72483 8.83989 6.77892 9 6.77892ZM9.00275 17.25C7.86242 17.25 6.78992 17.0337 5.78525 16.601C4.78119 16.1677 3.90761 15.5798 3.1645 14.8373C2.42139 14.0954 1.83319 13.2228 1.39992 12.2193C0.966639 11.2159 0.75 10.1437 0.75 9.00275C0.75 7.86242 0.966333 6.78992 1.399 5.78525C1.83228 4.78119 2.42017 3.90761 3.16267 3.1645C3.90456 2.42139 4.77722 1.83319 5.78067 1.39992C6.78411 0.966639 7.85631 0.75 8.99725 0.75C10.1376 0.75 11.2101 0.966333 12.2148 1.399C13.2188 1.83228 14.0924 2.42017 14.8355 3.16267C15.5786 3.90456 16.1668 4.77722 16.6001 5.78067C17.0334 6.78411 17.25 7.85631 17.25 8.99725C17.25 10.1376 17.0337 11.2101 16.601 12.2148C16.1677 13.2188 15.5798 14.0924 14.8373 14.8355C14.0954 15.5786 13.2228 16.1668 12.2193 16.6001C11.2159 17.0334 10.1437 17.25 9.00275 17.25ZM9 16.3333C11.0472 16.3333 12.7812 15.6229 14.2021 14.2021C15.6229 12.7812 16.3333 11.0472 16.3333 9C16.3333 6.95278 15.6229 5.21875 14.2021 3.79792C12.7812 2.37708 11.0472 1.66667 9 1.66667C6.95278 1.66667 5.21875 2.37708 3.79792 3.79792C2.37708 5.21875 1.66667 6.95278 1.66667 9C1.66667 11.0472 2.37708 12.7812 3.79792 14.2021C5.21875 15.6229 6.95278 16.3333 9 16.3333Z" fill="white"/></svg></button>
            </span>
          </div>
        </div>
      </header>
      <!--<h1 class="mfc__title mfc__title--new">Узнайте <span class="text-accent">минимальную стоимость юридического сопровождения Вашей процедуры банкротства</span> в Арбитражном суде или МФЦ <span class="text-accent"><?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> г.,</span> ответив на 10 вопросов!</h1>-->
      <h1 class="mfc__title mfc__title--new">Пройдите тест и узнайте <span class="text-red">минимальную стоимость</span> сопровождения вашей процедуры банкротства</h1>
      <div class="sub-title">Бесплатное юридическое сопровождение банкротства в Арбитражном суде по <a href="https://fpa.ru/promotion-rules-2/" target="_blank">акции</a> до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> года. </div>
      <div class="sub-title-bootom">Организатор акции ООО "ФПА" (ИНН: 7838051976)</div>
      <div class="mfc__block-btn mfc__block-btn--new">
        <button class="btn btn--red mfc__btn mfc__btn--new hidden-btn" data-sms="18" data-popup-id="mfc-new__number-2" data-color-schema="red">
          <div class="btn__btn-arrow btn__btn-arrow--red">
            <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#arrow-btn"></use></svg>
          </div>
          <span class="btn__text--new">Пройти тест</span>
        </button>
        <div class="mfc__hint mfc-hint">
          <div class="mfc-hint__text">Более 9500 процедур банкротства сопровождено с 2016 года</div>
        </div>
      </div>
      <p class="mfc__subtitle mfc__subtitle--new">Что вы получите после прохождения теста?</p>
      <ul class="mfc__lst mfc__lst--new">
        <li class="mfc__lst-item mfc__lst-item--pink">
            Узнаете минимальную стоимость сопровождения процедуры банкротства в крупнейшей компании СПб и ЛО по банкротству физ. лиц <button class="info-symbol"><svg style="bottom: 5px;" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.41345 11.3334H8.74679V7.33337H7.41345V11.3334ZM8.08012 6.00004C8.26901 6.00004 8.42745 5.93604 8.55545 5.80804C8.68345 5.68004 8.74723 5.52182 8.74679 5.33337C8.74679 5.14448 8.68279 4.98626 8.55478 4.85871C8.42678 4.73115 8.26856 4.66715 8.08012 4.66671C7.89123 4.66671 7.73301 4.73071 7.60545 4.85871C7.4779 4.98671 7.4139 5.14493 7.41345 5.33337C7.41345 5.52226 7.47745 5.68071 7.60545 5.80871C7.73345 5.93671 7.89167 6.00048 8.08012 6.00004ZM8.08012 14.6667C7.1579 14.6667 6.29123 14.4916 5.48012 14.1414C4.66901 13.7912 3.96345 13.3163 3.36345 12.7167C2.76345 12.1167 2.28856 11.4112 1.93879 10.6C1.58901 9.78893 1.4139 8.92226 1.41345 8.00004C1.41345 7.07782 1.58856 6.21115 1.93879 5.40004C2.28901 4.58893 2.7639 3.88337 3.36345 3.28337C3.96345 2.68337 4.66901 2.20849 5.48012 1.85871C6.29123 1.50893 7.1579 1.33382 8.08012 1.33337C9.00234 1.33337 9.86901 1.50849 10.6801 1.85871C11.4912 2.20893 12.1968 2.68382 12.7968 3.28337C13.3968 3.88337 13.8719 4.58893 14.2221 5.40004C14.5723 6.21115 14.7472 7.07782 14.7468 8.00004C14.7468 8.92226 14.5717 9.78893 14.2215 10.6C13.8712 11.4112 13.3963 12.1167 12.7968 12.7167C12.1968 13.3167 11.4912 13.7918 10.6801 14.142C9.86901 14.4923 9.00234 14.6672 8.08012 14.6667ZM8.08012 13.3334C9.56901 13.3334 10.8301 12.8167 11.8635 11.7834C12.8968 10.75 13.4135 9.48893 13.4135 8.00004C13.4135 6.51115 12.8968 5.25004 11.8635 4.21671C10.8301 3.18337 9.56901 2.66671 8.08012 2.66671C6.59123 2.66671 5.33012 3.18337 4.29679 4.21671C3.26345 5.25004 2.74679 6.51115 2.74679 8.00004C2.74679 9.48893 3.26345 10.75 4.29679 11.7834C5.33012 12.8167 6.59123 13.3334 8.08012 13.3334Z" fill="#717B97"/></svg></button>
        </li>
        <li class="mfc__lst-item mfc__lst-item--pink">Подборку из 22 ответов на вопросы по процедуре банкротства, которые нам задают наши клиенты в офисе. Вы будете знать о банкротстве всё «от и до»;</li>
      </ul>
    </div>
  </div>
</section>