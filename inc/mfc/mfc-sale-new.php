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
            <span class="mfc-adv__text">Крупнейшая в СПб и ЛО компания по банкротству физических лиц и ИП</span>
          </div>
        </div>
      </header>
      <h1 class="mfc__title mfc__title--new">Пройдите тест и узнайте <span class="text-red">минимальную стоимость банкротства </span>в Арбитражном суде или МФЦ <span class="text-red text-nowrap">до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> г.</span>!</h1>
      <div class="mfc__block-btn mfc__block-btn--new">
        <!--        
        <button class="btn btn--red mfc__btn mfc__btn--new mfc-btn-sale-new">
          <div class="btn__btn-arrow btn__btn-arrow--red">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#arrow-btn"></use>
            </svg>
          </div>
          <span class="btn__text--new">Пройти тест</span>
        </button>
        -->
        <button class="btn btn--red mfc__btn mfc__btn--new hidden-btn" data-sms="18" data-popup-id="mfc-new__number-2" data-color-schema="red">
          <div class="btn__btn-arrow btn__btn-arrow--red">
            <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#arrow-btn"></use></svg>
          </div>
          <span class="btn__text--new">Пройти тест</span>
        </button>

        <div class="mfc__hint mfc-hint">
          <div class="mfc-hint__number mfc-hint__number--red hidden">1</div>
          <div class="mfc-hint__text">
            <span class="mfc__hint--big mfc__hint--bold text-red">1 из 2 </span>дел по банкротству в СПб и ЛО ведётся нашей компанией (57%&nbsp;дел&nbsp;за&nbsp;2023&nbsp;г.)
          </div>
        </div>
      </div>
      <p class="mfc__subtitle mfc__subtitle--new">Что вы получите после прохождения теста?</p>
      <ul class="mfc__lst mfc__lst--new">
        <li class="mfc__lst-item mfc__lst-item--pink">Узнаете минимальную стоимость банкротства в крупнейшей компании СПб и ЛО по банкротству физ. лиц и ИП;</li>
        <li class="mfc__lst-item mfc__lst-item--pink">Вам направят <span class="text-red">инструкцию</span> по прохождению процедуры банкротства с описанием всех стадий и необходимых документов для сбора;</li>
        <li class="mfc__lst-item mfc__lst-item--pink">Подборку из 72 ответов на вопросы по процедуре банкротства, которые нам задают наши клиенты в офисе. Вы будете знать о банкротстве всё «от и до»;</li>
      </ul>
    </div>
  </div>
</section>