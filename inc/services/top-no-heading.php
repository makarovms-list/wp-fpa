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
 
<section id="services_top-no-heading" class="top">
  <div class="container">
    <div class="top__wrap">
      <div class="top__block top__block--main">
        <div class="top__timer timer hidden" hidden>
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
        
        <span class="top__note">Спецпредложение</span>
        <?php echo $top['title']; ?>
        
        <div class="top__text">
          <?php echo $top['text']; ?>
        </div>
        
        <span class="deadline" hidden>до <?php echo $date->format('j') . ' ' . $arr[$month]; ?></span>
        
        <div class="top__inner">
          <ul class="spoiler--promo">
            <li class="spoiler__block spoiler__block--promo">
              <div class="spoiler__head spoiler__head--promo">
                <div class="spoiler__category spoiler__category--promo">Мы — крупнейшая в СПб компания по банкротству</div>
                <div class="spoiler__btn spoiler__btn--promo">
                  <span class="spoiler__btn-arrow"></span>
                </div>
              </div>
              <div class="spoiler__content spoiler__content--promo hide">
                <div class="spoiler__text">Обращаясь к нам, вы будете уверены, что «Финансово-правовой альянс» — не компания-однодневка с 5 сотрудниками. Мы — это 4 этажа офисов, более 300 профессиональных юристов в штате, 7 лет опыта работы в сфере банкротства и <?php echo $last_number_delo; ?> дел в производстве. Наша компания проводит более 57% процедур по банкротству в СПб и ЛО.</div>
                <a class="spoiler__link" href="#results">Узнать подробнее</a>
              </div>
            </li>
            <li class="spoiler__block spoiler__block--promo">
              <div class="spoiler__head spoiler__head--promo">
                <div class="spoiler__category spoiler__category--promo">Мы закрепляем гарантии списания долгов в договоре</div>
                <div class="spoiler__btn spoiler__btn--promo">
                  <span class="spoiler__btn-arrow"></span>
                </div>
              </div>
              <div class="spoiler__content spoiler__content--promo hide">
                <div class="spoiler__text">В п. 3.1. нашего Договора мы гарантируем вам полное освобождение от долгов, а не просто проведение процедуры банкротства. В отличие от конкурентов, у нас нет сомнительных условий и мелкого шрифта в договоре. Мы берём в работу только те дела, в успехе которых уверены на 100%. В обратном случае оплата юридических услуг возвращается Заказчику в полном объёме по первому требованию в течение 7 рабочих дней.</div>
                <a class="spoiler__link" href="#dogovor">Узнать подробнее</a>
              </div>
            </li>
            <li class="spoiler__block spoiler__block--promo">
              <div class="spoiler__head spoiler__head--promo">
                <div class="spoiler__category spoiler__category--promo">Мы предоставим рассрочку на удобный вам срок</div>
                <div class="spoiler__btn spoiler__btn--promo">
                  <span class="spoiler__btn-arrow"></span>
                </div>
              </div>
              <div class="spoiler__content spoiler__content--promo hide">
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
              <div class="spoiler__content spoiler__content--promo hide">
                <div class="spoiler__text">Мы понимаем что юридические услуги, как и скорая помощь, требуются незамедлительно, однако не всегда есть возможность сразу их оплатить, поэтому мы предоставим вам возможность начать процедуру банкротства без предоплаты</div>
              </div>
            </li>
            <li class="spoiler__block spoiler__block--promo">
              <div class="spoiler__head spoiler__head--promo">
                <div class="spoiler__category spoiler__category--promo">Мы страхуем наши юридические услуги</div>
                <div class="spoiler__btn spoiler__btn--promo">
                  <span class="spoiler__btn-arrow"></span>
                </div>
              </div>
              <div class="spoiler__content spoiler__content--promo hide">
                <div class="spoiler__text">Предоставляемые нами юридические услуги застрахованы в САО «РЕСО-Гарантия» на 10 000 000 ₽. Это гарантирует наш профессионализм и высокое качество работы.</div>
              </div>
            </li>
            <li class="spoiler__block spoiler__block--promo">
              <div class="spoiler__head spoiler__head--promo">
                <div class="spoiler__category spoiler__category--promo">Мы дорожим безупречной репутацией перед вами</div>
                <div class="spoiler__btn spoiler__btn--promo">
                  <span class="spoiler__btn-arrow"></span>
                </div>
              </div>
              <div class="spoiler__content spoiler__content--promo hide">
                <div class="spoiler__text">За 7 лет работы мы получили тысячи положительных отзывов от клиентов, которым мы помогли списать долги от 150 000 ₽ до 500 000 000 ₽. Для вас работают опытные и высококвалифицированные специалисты по банкротству, в портфеле которых нет ни одного проигранного дела.</div>
                <a class="spoiler__link" href="#reviews-services">Узнать подробнее</a>
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
<!--
      <div class="top__block top__block--form">
        <div class="top__form">
          <p class="top__form-title"><?php echo $top['title_form']; ?></p>
          
          <?php echo do_shortcode( '[contact-form-7 id="1088" title="Верхняя секция на странице Услуги - Пройти банкротство за 2000 р./мес"]' ); ?>
          
          <div class="politics">
            <span class="politics__icon politics__icon--timer"></span>
            <div class="politics__text">
              <?php echo $top['text_form']; ?>
            </div>
            
          </div>
        </div>
        <div class="top__timer timer" data-saledate="<?php the_field('timer'); ?>">
          <p class="top__timer-title">До конца акции осталось:</p>
          <div class="timer__inner" id="timer">
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
        </div>
      </div>
-->
      
    </div>
  </div>
</section>