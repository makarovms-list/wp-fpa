<style>
    #services_master_first {
        position: relative;
    }
    #services_master_first:before {
        content: '';
        background: url(https://fpa.ru/wp-content/themes/fpalaw/assets/img/money/money_bg_v2.png);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        background-size: contain;
        background-position: top center;
        background-repeat: no-repeat;
    }
    #services_master_first .h2__title {
        font-style: normal;
        font-weight: 700;
        font-size: 34px;
        line-height: 145%;
        text-align: center;
        color: #393939;
        margin-bottom: 68px;
    }
    #services_master_first .h2__title span {
        color: #FB5A80;
    }
    #services_master_first .h2__subtitle.mobile {
        display: none;
    }
    #services_master_first .person_desc {
        background: rgba(255, 255, 255, 0.95);
        box-shadow: 0px 4px 14px rgb(0 37 102 / 10%);
        border-radius: 4px;
        z-index: 99;
        position: absolute;
        bottom: -10px;
        padding: 10px;
        width: 360px;
        right: 0;
    }
    #services_master_first .person_desc .master__name__mod {
        font-weight: 400;
        font-size: 24px;
        line-height: 145%;
        color: #000000;
        margin-bottom: 0;
    }
    #services_master_first .person_desc .master__post__mod {
        font-weight: 400;
        font-size: 14px;
        line-height: 145%;
        color: #717B97;
        margin-bottom: 0;
    }
    #services_master_first .master__title.desktop {
        margin-bottom: 40px;
    }
    
    
    
    #services_master_first .section__facts {
        margin-bottom: 120px;
    }
    #services_master_first .section__facts-row {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: calc(50% - 16px) calc(50% - 16px);
        grid-column-gap: 32px;
        grid-row-gap: 32px;
        align-items: stretch;
    }
    #services_master_first .section__facts-col {
        background: rgb(244 244 244 / 90%);
        border-radius: 15px;
        padding: 24px;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    #services_master_first .section__facts-col.fact-info-col-1:before {
        content: "";
        width: 100px;
        height: 100px;
        position: absolute;
        bottom: 24px;
        right: 24px;
        background: url(<?= get_template_directory_uri() ?>/assets/img/refferals/fact-info-col-1.svg) center center no-repeat;
        background-size: contain;
        z-index: 1;
    }
    #services_master_first .section__facts-col.fact-info-col-2:before {
        content: "";
        width: 100px;
        height: 100px;
        position: absolute;
        bottom: 24px;
        right: 24px;
        background: url(<?= get_template_directory_uri() ?>/assets/img/refferals/fact-info-col-2.svg) center center no-repeat;
        background-size: contain;
        z-index: 1;
    }
    #services_master_first .fact-title-small {
        background: #FB5A80;
        display: inline-block;
        padding: 4px 8px;
        font-family: Inter;
        font-size: 0.9em;
        font-weight: 500;
        line-height: 120%;
        letter-spacing: 0em;
        text-align: left;
        margin-bottom: 20px;
        color: #fff;
        position: relative;
        z-index: 2;
        border-radius: 2px;
    }
    #services_master_first .fact-title-big {
        font-family: Inter;
        font-size: 1.5em;
        font-weight: 700;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        margin-bottom: 10px;
        position: relative;
        z-index: 2;
    }
    #services_master_first .image.mobile {
        display: none;
    }
    #services_master_first .fact-title-text {
        font-family: Inter;
        font-size: 1.2em;
        font-weight: 400;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        position: relative;
        z-index: 2;
        margin-bottom: 60px;
        color: #5D6783;
    }
    #services_master_first button {
        position: relative;
        z-index: 2;
    }


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    @media (max-width: 992px) {
        #services_master_first .master__title {
            margin-bottom: 20px;
            font-weight: 700;
            font-size: 20px;
        }
        #services_master_first .h2__title {
            margin-bottom: 20px;
        }
    }
    @media (max-width: 768px) {
        .section--services {
            padding: 80px 0 150px;
        }
        #services_master_first .h2__title {
            font-size: 22px;
        }
        #services_master_first .h2__subtitle {
            font-weight: 500;
            font-size: 18px;
            line-height: 145%;
            text-align: center;
            color: #393939;
            margin-bottom: 80px;
        }
        #services_master_first .btn--services {
            width: calc(100% - 48px);
            padding: 13px 20px;
            position: absolute;
            left: 24px;
        }
        #services_master_first .section__image--price {
            height: 100px;
            width: auto;
        }
        #services_master_first .person_desc .desktop {
            display: block;
        }
        #services_master_first .master__person {
            max-width: 586px;
            max-height: 586px;
            width: 425px;
            height: 425px;
        }
        #services_master_first .h2__title {
            margin-bottom: 20px;
        }
        #services_master_first .master__title.desktop {
            display: none;
        }
        #services_master_first .h2__subtitle.mobile {
            display: block;
        }
        #services_master_first .section__facts-row {
            grid-template-columns: 100%;
        }
        #services_master_first .section__facts {
            margin-bottom: 80px;
        }
    }
    @media (max-width: 540px) {
        .section--services {
            padding: 80px 0 90px;
        }
        #services_master_first .h2__title {
            font-size: 18px;
            text-align: left;
            margin-bottom: 20px;
        }
        .section__image--price {
            height: 70px;
            width: auto;
        }
        #services_master_first .h2__subtitle.mobile {
            display: block;
            text-align: left;
            font-weight: 500;
            font-size: 16px;
            line-height: 145%;
            color: #717B97;
            margin-bottom: 35px;
        }
        #services_master_first .desktop {
            display:none;
        }
        .h2__subtitle.mobile {
            font-weight: 500;
            font-size: 16px;
            line-height: 145%;
            color: #717B97;
            margin-bottom: 40px;
        }
        #services_master_first .btn--services {
            width: calc(100% - 48px);
            position: absolute;
            left: 24px;
        }
        #services_master_first .person_desc .master__name__mod {
            font-size: 16px;
        }
        #services_master_first .person_desc .master__post__mod {
            font-size: 11px;
        }
        #services_master_first .person_desc {
            max-width: 200px;
            left: calc(50% - 100px);
        }
        #services_master_first .master__person {
            width: 250px;
            height: 250px;
        }
        
        
        #services_master_first .fact-title-big {
            font-size: 1.25em;
        }
        #services_master_first .fact-title-text {
            font-size: 1.125em;
        }
        #services_master_first .section__facts {
            margin-bottom: 45px;
        }
    }
    @media (max-width: 440px) {
        #services_master_first .section__facts-col.fact-info-col-1:before {
            display: none;
        }
        #services_master_first .section__facts-col.fact-info-col-2:before {
            display: none;
        }
        #services_master_first button {
            width: 100%;
        }
        #services_master_first .image.mobile {
            display: block;
        }  
        #services_master_first .fact-title-text {
            margin-bottom: 20px;
        }
        #services_master_first .image.mobile img {
            margin: 0 auto 20px;
        }
    }
        
</style>
<section id="services_master_first" class="section--services master">
  <div class="container">
    <div class="section__facts">
        <div class="section__facts-row">
            <div class="section__facts-col fact-info-col-1">
                <div class="content-ctn">
                    <div class="fact-title-small">Факт № 2</div>
                    <div class="fact-title-big">Знакомые наших клиентов не в курсе что:</div>
                    <div class="fact-title-text">Есть реальная возможность списать долги либо относятся к этому с недоверием</div>
                    <div class="image mobile">
                        <img src="/wp-content/themes/fpalaw/assets/img/refferals/fact-info-col-1.svg" alt="Есть реальная возможность списать долги либо относятся к этому с недоверием" />
                    </div>
                </div>
                <div class="button-ctn">
                    <button class="btn">Рекомендовать</button>
                </div>
            </div>
            <div class="section__facts-col fact-info-col-2">
                <div class="content-ctn">
                    <div class="fact-title-small">Факт № 3</div>
                    <div class="fact-title-big">Но вы точно знаете:</div>
                    <div class="fact-title-text">Банкротство реально работает и существует компания, которая отвечает за результат</div>
                    <div class="image mobile">
                        <img src="/wp-content/themes/fpalaw/assets/img/refferals/fact-info-col-2.svg" alt="Банкротство реально работает и существует компания, которая отвечает за результат" />
                    </div>
                </div>
                <div class="button-ctn">
                    <button class="btn">Рекомендовать</button>
                </div>
            </div>
        </div>
    </div>
    <div class="h2__title"><span>Бонусная программа</span>: за каждого клиента, который начал процедуру банкротства по вашей рекомендации, вы получаете бонус до <span>15 000 ₽</span>, и Ваш друг получает скидку на банкротство до <span>10 000 ₽</span> </div>
    <div class="h2__subtitle mobile">Помогите своим знакомым — покажите им выход в лице надежного исполнителя, которому можно доверять и не опасаться, что компания возьмет деньги, а результата не будет</div>
    
    <div class="master__wrap master__wrap--1">
      <div class="master__block master__block--person">
        <div class="master__person">
          <picture>
<!--            <source srcset="<?= get_template_directory_uri() ?>/assets/img/services/humans/sergeeva-olga_small.png" media="(max-width: 576px)">-->
            <source srcset="<?= get_template_directory_uri() ?>/assets/img/services/humans/sergeeva-olga_medium.png" media="(max-width: 992px)">
            <img src="<?= get_template_directory_uri() ?>/assets/img/services/humans/sergeeva-olga.png" alt="Фото специалиста" title="Сергеева Ольга Николаевна" loading="lazy">
          </picture>
          <div class="person_desc">
            <p class="master__name__mod desktop">Сергеева Ольга Николаевна</p>
            <p class="master__post__mod desktop">Руководитель подразделения судопроизводства по списанию долговых обязательств</p>
          </div>
        </div>
      </div>
      <div class="master__block master__block--content" data-master="6">
        <!--<span class="master__note desktop">Бонусная программа</span>-->
        <p class="master__title desktop">Помогите своим знакомым — покажите им выход в лице надежного исполнителя, которому можно доверять и не опасаться, что компания возьмет деньги, а результата не будет</p>
        
        <p class="master__name desktop hidden">Сергеева Ольга Николаевна</p>
        <p class="master__post desktop hidden">Руководитель подразделения судопроизводства по списанию долговых обязательств</p>
        
        <button class="btn btn--services btn-master" id="btn-master-1" data-btn="SMS-65 Реферальная программа. Начните рекомендовать"  data-sms="68" data-thanks="2">
          Узнать подробности
          <span class="btn__highlights"></span>
        </button>
        <div class="modal-content">
          <div class="mod-content__title">Начните рекомендовать и вы</div>
          <div class="mod-content__name">С Сергеевой Ольгой Николаевной</div>
          <div class="mod-content__post">Руководитель подразделения судопроизводства по списанию долговых обязательств</div>
          <div class="mod-content__foto">sergeeva-olga_small</div>
        </div>
      </div>
    </div>
  </div>
</section>