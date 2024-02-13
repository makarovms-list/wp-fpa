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
  $top = get_field('top_services', 374); 
?>

<?php 
  $last_args = ([
    'posts_per_page' => 1,
    'offset'      => 0,
    'post_type'   => 'dela',
    'post_status' => 'draft',
    'orderby' => 'title',
    'order' => 'DESC'
  ]);

  $last_delo = new WP_Query( $last_args );

  $last_number_delo = '';
  
  if( $last_delo->have_posts() ) :
    while( $last_delo->have_posts() ) : $last_delo->the_post();

        $last_number_delo = get_the_title();

    endwhile;
  endif;

  wp_reset_postdata(); 
?>

<style>
/*
    #services_top-promo .top__image {
        width: 800px;
    }
    #services_top-promo .top__figcaption {
        bottom: 85px;
        left: 35%;
    }
    #services_top-promo .bulets {
        position: absolute;
        bottom: -150px;
        z-index: 999;
    }
    .section--services {
        padding-top: 200px;
    }
    #services_top-promo .bulets-cnt .bulets-item .content-cnt .title span.bold {
        margin-right: 4px;
    }
    #services_top-promo .mobile {
        display: none;
    }
    #services_top-promo .mobile.subtitle {
        font-family: Inter;
        font-size: 18px;
        font-weight: 600;
        line-height: 24px;
        letter-spacing: 0em;
        text-align: left;
        margin: 24px 0 16px;
    }
    #services_top-promo .bulets.mobile {
        position: relative!important;
        bottom: auto!important;
    }
    @media (min-width: 992px) and (max-width: 1440px) {
        #services_top-promo .bulets-cnt .bulets-item {
            padding: 20px;
        }
    }
    @media (max-width: 992px) {
        #services_top-promo .bulets {
            display: none!important;
        }
        .spoiler--promo {
            margin-top: 16px;
        }
        #services_top-promo .bulets:not(.mobile) {
            display: none!important;
        }
        #services_top-promo .bulets.mobile {
            display: block!important;
        }
    }
    */
</style>

<div class="navbar navbar--desktop">
  <button class="no-btn navbar__close"></button>
  <div class="navbar__toggle btn-test" data-screens="desktop">
    <div class="navbar__icon" style="background-image: url(<?= get_template_directory_uri() ?>/assets/img/icons/calc.svg)"></div>
    <div class="navbar__note no-visible">Онлайн
      <br> калькулятор</div>
  </div>
  <div class="navbar__wrap">
    <div class="navbar__test nav-calc btn-test" data-screens="desktop">
      <span class="nav-calc__title">Онлайн-калькулятор стоимости банкротства</span>
      <span class="nav-calc__text">Рассчитайте минимальную стоимость банкротства с учётом ваших индивидуальных условий, включая все платежи в суде, АУ, юристу и другие</span>
      <span class="navbar__btn">Пройти расчёт онлайн</span>
    </div>
  </div>
</div>
 
<section id="services_top-promo" class="top">
  <div class="container">
    <div class="top__wrap">
      <div class="top__block top__block--main">
          
          
        
        <div class="top__timer timer" >
          <div class="timer__inner" id="timer" data-saledate="<?php the_field('timer', 374); ?>">
            <div class="timer__number">
              <span class="timer__time days"> </span>
              <span class="timer__text">дней</span>
            </div>
            <div class="timer__number">
              <span class="timer__time hours"> </span>
              <span class="timer__text">часов</span>
            </div>
            <div class="timer__number">
              <span class="timer__time minutes"> </span>
              <span class="timer__text">минут</span>
            </div>
            <div class="timer__number">
              <span class="timer__time seconds"> </span>
              <span class="timer__text">секунд</span>
            </div>
          </div>
          <p class="timer__title">Осталось времени
            <br> до завершения акции</p>
        </div>
        

        
        
        
        <?php echo $top['title']; ?>
        
        <div class="top__text">
          <?php echo $top['text']; ?>
        </div>
        
        
        <span class="deadline" hidden>до <?php echo $date->format('j') . ' ' . $arr[$month]; ?></span>
        
        
        
        
        
        
        <div class="top__inner">
          <ul class="spoiler--promo">
            <li class="spoiler__block spoiler__block--promo">
              <div class="spoiler__head spoiler__head--promo">
                <div class="spoiler__category spoiler__category--promo">Мы — одна из крупнейших компаний по банкротству в России</div>
                <div class="spoiler__btn spoiler__btn--promo">
                  <span class="spoiler__btn-arrow"></span>
                </div>
              </div>
              <div class="spoiler__content spoiler__content--promo hide" id="content-promo-1">
                <div class="spoiler__text">Обращаясь к нам, вы будете уверены, что «Финансово-правовой Альянс» — не компания-однодневка с несколькими сотрудниками. Мы — это четыре этажа офисов, более 223 профессиональных юристов в штате, семь лет опыта работы в сфере банкротства и более 12 058 дел в производстве. В 2022 году мы ежедневно завершаем больше процедур по банкротству, чем некоторые наши конкуренты за целый месяц.</div>
                <a class="spoiler__link" href="#services_results">Узнать подробнее</a>
              </div>
            </li>
            
            

            <li class="spoiler__block spoiler__block--promo">
              <div class="spoiler__head spoiler__head--promo">
                <div class="spoiler__category spoiler__category--promo">Мы закрепляем гарантии списания долгов в договоре</div>
                <div class="spoiler__btn spoiler__btn--promo">
                  <span class="spoiler__btn-arrow"></span>
                </div>
              </div>
              <div class="spoiler__content spoiler__content--promo hide" id="content-promo-2">
                <div class="spoiler__text">В п. 3.1. нашего Договора мы гарантируем вам полное освобождение от долгов, а не просто проведение процедуры банкротства. В отличие от конкурентов, у нас нет сомнительных условий и мелкого шрифта в договоре. Мы берём в работу только те дела, в успехе которых уверены на 100%. В обратном случае оплата юридических услуг возвращается Заказчику в полном объёме по первому требованию в течение 7 рабочих дней.</div>
                <a class="spoiler__link" href="#services_dogovor">Узнать подробнее</a>
              </div>
            </li>
            
            
            
            
            <li class="spoiler__block spoiler__block--promo">
              <div class="spoiler__head spoiler__head--promo">
                <div class="spoiler__category spoiler__category--promo">Мы получили тысячи отзывов от благодарных клиентов</div>
                <div class="spoiler__btn spoiler__btn--promo">
                  <span class="spoiler__btn-arrow"></span>
                </div>
              </div>
              <div class="spoiler__content spoiler__content--promo hide" id="content-promo-6">
                <div class="spoiler__text">За 7 лет работы мы получили тысячи положительных отзывов от клиентов, которым мы помогли списать долги от 150 000 ₽ до 500 000 000 ₽. Для вас работают опытные и высококвалифицированные специалисты по банкротству, в портфеле которых нет ни одного проигранного дела.</div>
                <a class="spoiler__link" href="#services_reviews-services">Узнать подробнее</a>
              </div>
            </li>
            
            <li class="spoiler__block spoiler__block--promo">
              <div class="spoiler__head spoiler__head--promo">
                <div class="spoiler__category spoiler__category--promo">Мы выступаем в эфире ведущих российских СМИ</div>
                <div class="spoiler__btn spoiler__btn--promo">
                  <span class="spoiler__btn-arrow"></span>
                </div>
              </div>
              <div class="spoiler__content spoiler__content--promo hide" id="content-promo-6">
                <div class="spoiler__text">Наши юристы регулярно делятся экспертными комментариями и дают интервью, пишут аналитические, информационные и практические статьи для ведущих СМИ Петербурга, Москвы и других регионов.</div>
                <a class="spoiler__link" href="#services_free_custom">Узнать подробнее</a>
              </div>
            </li>
            

            <li class="spoiler__block spoiler__block--promo">
              <div class="spoiler__head spoiler__head--promo">
                <div class="spoiler__category spoiler__category--promo">Мы предоставим рассрочку на удобный вам срок</div>
                <div class="spoiler__btn spoiler__btn--promo">
                  <span class="spoiler__btn-arrow"></span>
                </div>
              </div>
              <div class="spoiler__content spoiler__content--promo hide" id="content-promo-3">
                <div class="spoiler__text">Наша компания предлагает вам возможность оплачивать все услуги в рассрочку от 10 до 24 месяцев. Мы убеждены: процедура банкротства должна быть доступна каждому, поэтому все платежи будут для вас комфортны по сумме и срокам.</div>
              </div>
            </li>
            <li class="spoiler__block spoiler__block--promo">
              <div class="spoiler__head spoiler__head--promo">
                <div class="spoiler__category spoiler__category--promo">Мы начнём работу для вас без предоплаты</div>
                <div class="spoiler__btn spoiler__btn--promo">
                  <span class="spoiler__btn-arrow"></span>
                </div>
              </div>
              <div class="spoiler__content spoiler__content--promo hide" id="content-promo-4">
                <div class="spoiler__text">Мы понимаем что юридические услуги, как и скорая помощь, требуются незамедлительно, однако не всегда есть возможность сразу их оплатить, поэтому мы предоставим вам возможность начать процедуру банкротства без предоплаты</div>
              </div>
            </li>
            <li class="spoiler__block spoiler__block--promo">
              <div class="spoiler__head spoiler__head--promo">
                <div class="spoiler__category spoiler__category--promo">Мы сертифицируем наши юридические услуги</div>
                <div class="spoiler__btn spoiler__btn--promo">
                  <span class="spoiler__btn-arrow"></span>
                </div>
              </div>
              <div class="spoiler__content spoiler__content--promo hide" id="content-promo-5">
                <div class="spoiler__text">Предоставляемые нами юридические услуги застрахованы в САО «РЕСО-Гарантия» на 10 000 000 ₽. Это гарантирует наш профессионализм и высокое качество работы.</div>
              </div>
            </li>
          </ul>
        </div>
        
        
        
        
      </div>
      
      <figure class="top__figure">
        <picture>
          <img class="top__image" src="<?= get_template_directory_uri() ?>/assets/img/top/man.png">
        </picture>
        <figcaption class="top__figcaption">
          <span class="top__label top__label--name">Окладников Илья Викторович</span>
          <span class="top__label top__label--post">Руководитель юридического департамента по банкротству</span>
        </figcaption>
      </figure>
      
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  </div>
</section>