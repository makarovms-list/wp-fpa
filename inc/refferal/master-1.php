<style>
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
        width: 250px;
        left: calc(50% - 125px);
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
            font-size: 10px;
        }
        #services_master_first .person_desc {
            max-width: 200px;
            left: calc(50% - 100px);
        }
        #services_master_first .master__person {
            width: 250px;
            height: 250px;
        }
    }
        
</style>
<section id="services_master_first" class="section--services master">
  <div class="container">
    <h2 class="visually-hidden">Важное условие</h2>
    <div class="section__image section__image--price"></div>
    <div class="h2__title"><span>Бонусная программа</span>: за каждого клиента, который начал процедуру банкротства по вашей рекомендации, вы получаете бонус: <span>5000 руб.</span></div>
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
            <p class="master__name__mod desktop">Сергеева Ольга</p>
            <p class="master__post__mod desktop">Руководитель подразделения судопроизводства по списанию долговых обязательств</p>
          </div>
        </div>
      </div>
      <div class="master__block master__block--content" data-master="6">
        <!--<span class="master__note desktop">Бонусная программа</span>-->
        <p class="master__title desktop">Помогите своим знакомым — покажите им выход в лице надежного исполнителя, которому можно доверять и не опасаться, что компания возьмет деньги, а результата не будет</p>
        
        <p class="master__name desktop hidden">Сергеева Ольга Николаевна</p>
        <p class="master__post desktop hidden">Руководитель подразделения судопроизводства по списанию долговых обязательств</p>
        
        <button class="btn btn--services btn-master" id="btn-master-1" data-btn="SMS-47 Бонусная программа 5000 руб. Сергеева Ольга Николаевна"  data-sms="50" data-thanks="2">
          Узнать подробности
          <span class="btn__highlights"></span>
        </button>
        <div class="modal-content">
          <div class="mod-content__title">Проконсультироваться по телефону</div>
          <div class="mod-content__name">С Сергеевой Ольгой Николаевной</div>
          <div class="mod-content__post">Руководитель подразделения судопроизводства по списанию долговых обязательств</div>
          <div class="mod-content__foto">sergeeva-olga_small</div>
        </div>
      </div>
    </div>
  </div>
</section>