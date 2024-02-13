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
<?php
/*
    $post_views = get_post_meta( $post->ID, 'views', true );
    $fractional_part = fmod($post_views, 2);
    if ($fractional_part > 0) {
        echo "<script>window.location.replace('https://fpa.ru/youfree3bankruptcy4/');</script>";
    }
*/
?>
<section class="mfc mfc--new" >
  <div class="container">
    <div class="mfc__wrap mfc__wrap--new">
      <header class="mfc__header">
        <div class="logo">
          <span class="logo__name">
            <img src="<?= get_template_directory_uri() ?>/assets/img/logo.svg" alt="Логотип компании" title="Финансово-правовой альянс">
          </span>
        </div>
        <div class="mfc__advantages mfc-adv mfc-adv--free">
          <div class="mfc-adv__image mfc-adv__image--themis"></div>
          <div class="mfc-adv__content">
            <span class="mfc-adv__text">Онлайн калькулятор доступности реструктуризации и рефинансирования</span>
          </div>
        </div>
      </header>
      <h1 class="mfc__title mfc__title--new">Пройдите тест и&nbsp;узнайте, как в&nbsp;вашем случае можно снизить долговую нагрузку. Подходит ли&nbsp;Вам <span class="text-accent">реструктуризация</span> или <span class="text-accent">рефинансирование</span> кредита?</h1>
      <div class="mfc__block-btn mfc__block-btn--new">
        <!--
        <button class="btn mfc__btn mfc__btn--new mfc-btn-free-new">
          <div class="btn__btn-arrow btn__btn-arrow--accent">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#arrow-btn"></use>
            </svg>
          </div>
          <span class="btn__text--new">Пройти тест</span>
        </button>
        -->
        <button class="btn mfc__btn mfc__btn--new hidden-btn" data-sms="62" data-popup-id="mfc-bankruptcy__number-3-test" data-color-schema="blue">
          <div class="btn__btn-arrow btn__btn-arrow--accent">
            <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#arrow-btn"></use></svg>
          </div>
          <span class="btn__text--new">Пройти тест</span>
        </button>
        
        <!--        
        <button class="btn bankruptcy2cost__btn hidden-btn" data-sms="19" data-popup-id="mfc-bankruptcy__number-1" data-color-schema="blue" onclick="ym(82134583, 'reachGoal', '1button'); return true;">Пройти тест</button>
        -->
        
        <div class="mfc__hint mfc-hint">
          <div class="mfc-hint__number mfc-hint__number--accent hidden">1</div>
          <div class="mfc-hint__text">
              <span class="mfc__hint--big mfc__hint--bold text-accent">1 из 4</span> заемщиков мог снизить свою долговую нагрузку в <span class="mfc__hint--bold text-accent">2023 году</span>, но не воспользовался своим правом, узнайте, вправе ли это сделать Вы
          </div>
        </div>
      </div>
      <p class="mfc__subtitle mfc__subtitle--new">Что вы получите после прохождения теста?</p>
      <ul class="mfc__lst mfc__lst--new">
        <li class="mfc__lst-item">Вы узнаете, подходит ли ваша ситуация под условия реструктуризации долгов и сможете ли вы снизить долговую нагрузку по кредитам;</li>
        <li class="mfc__lst-item">Пошаговую инструкцию «Снижение долговой нагрузки»</li>
      </ul>
    </div>
  </div>
</section>