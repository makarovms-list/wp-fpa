<style>
.master__title--small {
    padding-top: 28px;
    font-size: 34px;
    margin-bottom: 45px;
}
.master__text {
    font-size: 16px;
}
#services_master_three .master__block--person {
    position: relative;
}
#services_master_three .master__block--person figcaption {
    background: rgba(83, 129, 246, 0.95);
    box-shadow: 0px 4px 14px rgb(0 37 102 / 10%);
    border-radius: 4px;
    padding: 10px;
    position: absolute;
    z-index: 99;
    bottom: 0;
    max-width: 332px;
    right: 0;
}
#services_master_three .master__block--person figcaption  .master__name {
    margin-bottom: 4px;
    font-size: 24px;
    color: #fff;
}
#services_master_three .master__block--person figcaption  .master__post {
    margin-bottom: 0;
    color: #fff;
    font-size: 14px;
}
/*
.desktop-view {
    display: block;
} 
.tablet-view {
    display: none;
}
.mobile-view {
    display: none;
}
*/

@media (max-width: 1080px) {
    .master__title--small {
        font-size: 22px;
    }
}
@media (max-width: 992px) {
    .master__block--person {
        width: 40%;
        -ms-flex: 0 1 40%;
        flex: 0 1 40%;
    }
    .master__person {
        width: 450px;
        height: 450px;
        width: 100%;
        height: calc(100vw * 0.3725);
    }
    #services_master_three .master__block--person figcaption {
        max-width: 300px;
    }
    #services_master_three .master__block--person figcaption  .master__name {
        font-size: 22px;
    }
}
@media (max-width: 782px) {
    .master__title--small {
        font-size: 20px;
    }
    /*
    .desktop-view {
        display: none;
    } 
    .tablet-view {
        display: block;
    }
    */
    #services_master_three .master__block--person figcaption {
        max-width: 260px;
    }
    #services_master_three .master__block--person figcaption  .master__name {
        font-size: 20px;
    }
    .master__person {
        width: 350px;
        height: 350px;
    }
    #services_master_three .btn--services {
        width: 100%;
    }
    .master__wrap {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
    }
    .master__block--person {
        width: 100%;
        -ms-flex: 0 1 100%;
        flex: 0 1 100%;
    }
    .master__block--person .master__person {
        margin: 40px auto 20px;
    }
}


@media (max-width: 768px) {
    .master__block--person {
        width: 100%;
        -ms-flex: 0 1 100%;
        flex: 0 1 100%;
    }
    .master__block--person .master__person {
        margin: 40px auto 20px;
    }
}
@media (max-width: 460px) {
    .master__title--small {
        font-size: 18px;
    }   
    .master__text {
        font-size: 14px;
    }
    #services_master_three .master__block--person figcaption  .master__name {
        font-size: 16px;
    }
    #services_master_three .master__block--person figcaption  .master__post {
        font-size: 10px;
    }
    /*
    .tablet-view {
        display: none;
    }
    .mobile-view {
        display: block;
    }
    */
    #services_master_three .master__block--person figcaption  .master__name {
        font-size: 18px;
    }
    .master__person {
        width: 300px;
        height: 300px;
    }
}
@media (max-width: 380px) {
    .master__person {
        width: 280px;
        height: 280px;
    }
}
</style>
<section id="services_master_three" class="section--services master">
  <div class="container">
    <h2 class="visually-hidden">О сотрудничестве с нами</h2>
    <div class="master__wrap master__wrap--3">
      <div class="mobile-view tablet-view">
        <p class="master__title master__title--small">
          <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#marks"></use></svg>
          Ни один юрист не даст вам гарантию, если будет браться за все дела подряд. Но уже на этапе консультации я с 99% точностью смогу сказать, каким будет результат вашего дела
        </p>
      </div>
      <div class="master__block master__block--person master__block--bondar">
        <div class="master__person">
          <figure>
            <picture>
              <source srcset="<?= get_template_directory_uri() ?>/assets/img/services/humans/bodnar-e-i_medium.png" media="(max-width: 992px)">
              <img src="<?= get_template_directory_uri() ?>/assets/img/services/humans/bodnar-e-i.png" alt="Фото специалиста" title="Боднар Е. И." loading="lazy">
            </picture>
            <figcaption>
              <p class="master__name">Боднар Евгения Ивановна</p>
              <p class="master__post">Руководитель отдела сопровождения клиентов по кредитам и долгам</p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="master__block master__block--content" data-master="3">
        <span class="master__note">О сотрудничестве с нами</span>
        <div class="desktop-view">
          <p class="master__title master__title--small">
            <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#marks"></use></svg>
            Ни один юрист не даст вам гарантию, если будет браться за все дела подряд. Но уже на этапе консультации я с 99% точностью смогу сказать, каким будет результат вашего дела
          </p>
        </div>
        <p class="master__text">Многие считают, что списать свои долги нереально — банки отнимут и распродадут все имущество, приставы закроют выезд за границу, появятся проблемы с работодателем. Некоторые из этих страшилок — не более, чем миф. Другие же можно обойти с помощью законных приемов, о которых знают далеко не все.</p>
        <p class="master__text">Во многих случаях закон позволяет списать долги и при этом сохранить имущество.</p>
        <p class="master__text">Но для этого нужно выбрать опытного юриста. Только в 2020 году нашей компании удалось сохранить десятки квартир, загородных домов, автомобилей и другого имущества. А всего за пять лет работы наши клиенты списали более 5 000 000 000 рублей долгов.</p>
        <button class="btn btn--services btn-master" data-master="3" data-btn="SMS-22 Для вас работает одна из самых крупных и опытных в России компаний по банкротству Проконсультироваться по телефону с Боднар Е. И." data-sms="10" data-thanks="5">
          Проконсультироваться по телефону с Боднар&nbsp;Е.&nbsp;И.
          <span class="btn__highlights"></span>
        </button>
        <div class="modal-content">
          <div class="mod-content__title">Проконсультироваться по телефону</div>
          <div class="mod-content__name">С Боднар Евгенией Ивановной</div>
          <div class="mod-content__post">Руководителем отдела сопровождения клиентов по кредитам и долгам</div>
          <div class="mod-content__foto">bodnar-e-i_small</div>
        </div>
      </div>
    </div>
  </div>
</section>