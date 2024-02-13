<style>
    #services_questions form .form__row span {
        font-weight: 500;
        font-size: 14px;
        line-height: 145%;
        color: #717B97;
        margin-bottom: 5px;
    }
    #services_questions .master__text {
        margin-bottom: 40px;
    }
    #services_questions .person_desc {
        background: rgba(255, 255, 255, 0.95);
        box-shadow: 0px 4px 14px rgb(0 37 102 / 10%);
        border-radius: 4px;
        z-index: 9999999;
        position: absolute;
        bottom: -10px;
        padding: 10px;
        width: 355px;
        /*left: calc(50% - 155px);*/
        right: 0;
    }
    #services_questions .person_desc .master__name {
        font-weight: 700;
        font-size: 18px;
        line-height: 145%;
        color: #000000;
        margin-bottom: 0;
    }
    #services_questions .person_desc .master__post {
        font-weight: 400;
        font-size: 14px;
        line-height: 145%;
        color: #717B97;
        margin-bottom: 0;
    }
    @media (max-width: 992px) {
        #services_questions .master__title--big {
            font-size: 26px;
        }
    }
    @media (max-width: 768px) {
        #services_questions .master__person {
            max-width: 586px;
            max-height: 586px;
            width: 425px;
            height: 425px;
        }
        #services_questions .master__title--big {
            font-size: 22px;
        }
    }
    @media (max-width: 540px) {
        #services_questions .master__person {
            max-width: 586px;
            max-height: 586px;
            width: 250px;
            height: 250px;
        }
        #services_questions .person_desc {
            width: 270px;
            left: calc(50% - 135px);
        }
        #services_questions .person_desc .master__name {
            font-size: 16px;
        }
        #services_questions .person_desc .master__post {
            font-size: 11px;
        }
        #services_questions {
            padding: 80px 0 45px;
        }
        #services_questions .master__title--big {
            font-size: 20px!important;
        }
        #services_questions .master__text {
            font-size: 18px!important;
            margin-bottom: 35px;
        }
        #services_questions form .form__row span {
            font-size: 12px!important;
        }
        #services_questions form input[type=submit] {
            font-size: 1.125em;
        }
    }   
    
    
</style>
<section id="services_questions" class="section--services questions section--services-grey ">
  <div class="container">
    <div class="master__wrap master__wrap--in2">
      <div class="master__block master__block--person">
        <div class="master__person master__person--inverse">
          <picture>
            <source srcset="<?= get_template_directory_uri() ?>/assets/img/refferals/anzhelika-vladimirovna.png" media="(max-width: 992px)">
            <img src="<?= get_template_directory_uri() ?>/assets/img/refferals/anzhelika-vladimirovna.png" alt="Фото специалиста" title="Копырина Анжелика Владимировна" loading="lazy">
          </picture>
          <div class="person_desc">
            <p class="master__name desktop">Копырина Анжелика Владимировна</p>
            <p class="master__post desktop">Руководитель подразделения судопроизводства по банкротным делам</p>
          </div>
        </div>
      </div>
      <div class="master__block master__block--content" data-master="5">
        <p class="master__title master__title--big">Начните рекомендовать и вы</p>
        <p class="master__text">Оставьте номер друга и мы расскажем ему о банкротстве. Ваш телефон нужен, чтобы вы получили свой бонус</p>
        <?php echo do_shortcode( '[contact-form-7 id="21231" title="Реферальная страница - Начните рекомендовать и вы" html_class="form--width-100"]' ); ?>
        <div class="politics">
          <span class="politics__icon">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#shild"></use>
            </svg>
          </span>
          <p class="politics__text">Мы гарантируем безопасность и сохранность Ваших данных. Нажимая на кнопку, вы даете согласие на обработку своих персональных данных в соответствии с <a href="<?= get_permalink(123) ?>">«Политикой конфиденциальности»</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>