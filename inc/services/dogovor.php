<style>
    .dogovor__block--content {
        width: calc(100% - 524px);
    }
    .dogovor__block--image {
        width: 490px;
    }
    .dogovor__wrap {
        margin-bottom: 60px;
    }
    @media (max-width: 1200px) {
        .dogovor__block--content {
            width: calc(100% - 354px);
        }
        .dogovor__block--image {
            width: 450px;
        }
    }
    @media (max-width: 992px) {
        .dogovor__block--image {
            width: 50%;
        }    
        .dogovor__block--content {
            width: 80%;
        }
    }
    @media (max-width: 768px) {
        .dogovor__block--content {
            width: 100%;
        }        
    }

        
</style>
<section id="services_dogovor" class="section--services dogovor" id="dogovor">
  <div class="container">
    <h2 class="title-page">Чем наш договор вам понравится?</h2>
    <div class="dogovor__wrap">
      <div class="dogovor__block dogovor__block--image">
        <picture>
          <source srcset="<?= get_template_directory_uri() ?>/assets/img/services/dogovor/dogovor_small.png" media="(max-width: 768px)">
          <source srcset="<?= get_template_directory_uri() ?>/assets/img/services/dogovor/dogovor_medium.png" media="(max-width: 992px)">
          <source srcset="<?= get_template_directory_uri() ?>/assets/img/services/dogovor/dogovor_big.png" media="(max-width: 1200px)">
          <img src="<?= get_template_directory_uri() ?>/assets/img/services/dogovor/dogovor.png" alt="Изображение договора" loading="lazy">
        </picture>
      </div>
      <div class="dogovor__block dogovor__block--content">
        <ol class="dogovor__lst">
          <li class="dogovor__item">
            <span class="dogovor__name">Конкретные гарантии в договоре</span>
            <span class="dogovor__point">Пункт 3.1. Договора закрепляет:</span>
            <span class="dogovor__desk">Исполнитель гарантирует полное освобождение Заказчика от долгов. В обратном случае оплата юридических услуг возвращается Заказчику в полном объёме по первому требованию в течение 7 рабочих дней.</span>
          </li>
          <li class="dogovor__item">
            <span class="dogovor__name">Отказ от договора в любое время</span>
            <span class="dogovor__point">Пункт 6.2. Договора закрепляет:</span>
            <span class="dogovor__desk">Заказчик вправе в одностороннем порядке отказаться от дальнейшего Исполнения Договора в любое время</span>
          </li>
          <li class="dogovor__item">
            <span class="dogovor__name">Никаких оговорок мелким шрифтом</span>
          </li>
        </ol>
      </div>
    </div>
        <div class="master__wrap master__wrap--in1 hidden-1">
      <div class="master__block master__block--person">
        <div class="master__person master__person--inverse">
          <picture>
            <source srcset="<?= get_template_directory_uri() ?>/assets/img/services/humans/aleksej-yurevich_medium.png" media="(max-width: 992px)">
            <img src="<?= get_template_directory_uri() ?>/assets/img/services/humans/aleksej-yurevich.png" alt="Фото специалиста" title="Головин Алексей Юрьевич" loading="lazy">
          </picture>
        </div>
        <div class="plashka-ver-second__cnt">
            <div class="name">Головин Алексей Юрьевич</div>
            <p class="master__post" style="margin-bottom: 0;">Адвокат <span class="hint">
                <span class="hint__toggle">Регистрационный номер 47/1987 в реестре адвокатов Ленинградской области, филиал ННО "ЛОКА" АК "Пелевин и партнеры". Представительство интересов ООО "ФПА" осуществляется по соглашению об оказании юридической помощи.</span>
              </span>
            </p>
        </div>
      </div>
      <div class="master__block master__block--content" data-master="4">
        <span class="master__note">Быстро и просто</span>
        <p class="master__title master__title--big">Начните работу над долгом прямо&nbsp;сейчас!</p>
        <!--
        <p class="master__name">Головин Алексей Юрьевич</p>
        <p class="master__post">Адвокат <span class="hint">
            <span class="hint__toggle">Регистрационный номер 47/1987 в реестре адвокатов Ленинградской области, филиал ННО "ЛОКА" АК "Пелевин и партнеры". Представительство интересов ООО "ФПА" осуществляется по соглашению об оказании юридической помощи.</span>
          </span>
        </p>
        -->
        <?php echo do_shortcode( '[contact-form-7 id="1098" title="Секция Как мы помогаем бесплатно? - Начните работу над долгом прямо сейчас!" html_class="form--width-100"]' ); ?>
        
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