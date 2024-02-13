<main>
  <section class="section reviews">
    <div class="container">
      <div class="inner__head">
        <h1 class="title-page">Тысячи отзывов и десятки тысяч<br> слов благодарности</h1>
      </div>
      <div class="reviews__wrap">
        <div class="reviews__row">
          <div class="reviews__block reviews__block--foto">
            <div class="reviews__header">
              <h2 class="reviews__title">Фото-отзывы</h2>
              <div class="reviews__line">
                <span class="reviews__lable">Отзывы клиентов, завершивших процедуру банкротства </span>
              </div>
            </div>
            <div class="reviews__main reviews__main--foto">
              
              <?php 
                $args_foto_desk = ([
                  'posts_per_page' => '14',
                  'post_type'   => 'otzyvy',
                  'post_status' => 'publish',
                  'tax_query'   => [
                    [
                      'taxonomy'  => 'types',
                      'field'     => 'slug',
                      'terms'     => 'foto'
                    ],
                  ],
                ]);

                $foto_desk = new WP_Query( $args_foto_desk );

                if( $foto_desk->have_posts() ) :
                  
                  while( $foto_desk->have_posts() ) : $foto_desk->the_post();

                      get_template_part('template-parts/content-foto');

                  endwhile;
                endif;
              
                wp_reset_postdata(); 
              ?>
              
              <?php if (  $foto_desk->max_num_pages > 1 ) : ?>
                <button class="btn btn--show btn--reviews reviews__btn--foto" data-show="true">
                  <span class="btn__icon btn__icon--load">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#load"></use>
                    </svg>
                  </span>
                  Показать ещё
                </button>
              <?php endif; ?>
              
              <script>
                let true_posts_foto = '<?php echo serialize($foto_desk->query_vars); ?>';
                let current_page_foto = '<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>';
                let max_pages_foto = '<?php echo $foto_desk->max_num_pages; ?>';
              </script>
              
            </div>
          </div>
          <div class="reviews__block reviews__block--video">
            <div class="reviews__header">
              <h2 class="reviews__title">Видео-отзывы</h2>
              <form class="filters-line" id="filters" method="POST">
                <span class="filters-line__lable">Популярное:</span>
                <div class="filters-line__best filters-line__best--reviews">
                  <div class="radio radio--link">
                    <input class="radio__default" id="tag_1_1" type="radio" name="filter" value="from_500000">
                    <label class="radio__label" for="tag_1_1">долги от 500 000 ₽</label>
                  </div>
                  <div class="radio radio--link">
                    <input class="radio__default" id="tag_1_2" type="radio" name="filter" value="from_1000000">
                    <label class="radio__label" for="tag_1_2">долг от 1 000 000 ₽</label>
                  </div>
                  <div class="radio radio--link">
                    <input class="radio__default" id="tag_1_3" type="radio" name="filter" value="pensionery">
                    <label class="radio__label" for="tag_1_3">Пенсионеры</label>
                  </div>
                </div>
                <div class="filters filters-line__filters" role="checkbox" aria-checked="false" tabindex="0">
                  <div class="filters__btn">
                    <span class="filters__arrow"> </span>
                    <span class="filters__text">Фильтр</span>
                  </div>
                  <ul class="filters__list">
                    <li class="filters__item filters__item--reset radio">
                      <input class="radio__default" id="tag_2_0" type="radio" name="filter" data-reset>
                      <label class="radio__label" for="tag_2_0">Сбросить настройки фильтра</label>
                    </li>
                    <li class="filters__item filters__item--title">
                      <span>Возраст</span>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_2_1" type="radio" name="filter" value="to_30_years">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_2_1">До 30-ти лет</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_2_2" type="radio" name="filter" value="over_30_years">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_2_2">Старше 30-ти лет</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_2_3" type="radio" name="filter" value="over_40_years">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_2_3">Старше 40-ка лет</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_2_4" type="radio" name="filter" value="over_65_years">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_2_4">Старше 65-ти лет</label>
                    </li>
                    <li class="filters__item filters__item--title">
                      <span>Вид деятельности</span>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_3_2" type="radio" name="filter" value="ip">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_3_2">ИП</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_3_3" type="radio" name="filter" value="self_employed">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_3_3">Самозанятые</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_3_4" type="radio" name="filter" value="pensionery">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_3_4">Пенсионеры</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_3_5" type="radio" name="filter" value="bezrabotnye">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_3_5">Безработные</label>
                    </li>
                    <li class="filters__item filters__item--title">
                      <span>Сумма долга</span>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_4_1" type="radio" name="filter" value="up_to_300000">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_4_1">До 300 000 руб</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_4_2" type="radio" name="filter" value="from_300000">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_4_2">От 300 000 руб</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_4_3" type="radio" name="filter" value="from_500000">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_4_3">От 500 000 руб</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_4_4" type="radio" name="filter" value="from_1000000">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_4_4">От 1 000 000 руб</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_4_5" type="radio" name="filter" value="from_3000000">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_4_5">От 3 000 000 руб</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_4_6" type="radio" name="filter" value="from_5000000">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_4_6">От 5 000 000 руб</label>
                    </li>
                    <li class="filters__item filters__item--title">
                      <span>Проблемы клиента</span>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_5_1" type="radio" name="filter" value="foreclosures_banks_i_mfo">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_5_1">Службы взыскания банков и МФО</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_5_2" type="radio" name="filter" value="collection_agencies">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_5_2">Коллекторские агентства</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_5_3" type="radio" name="filter" value="home_visits">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_5_3">Визиты домой коллекторов и ФССП</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_5_4" type="radio" name="filter" value="courts_with_banks">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_5_4">Cуды с банками</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_5_5" type="radio" name="filter" value="calls_family_and_friends">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_5_5">Звонки родным и друзьям</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_5_6" type="radio" name="filter" value="calls_work">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_5_6">Звонки на работу</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_5_7" type="radio" name="filter" value="loss_property">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_5_7">Потеря имущества</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_5_8" type="radio" name="filter" value="ban_on_traveling">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_5_8">Запрет на выезд за границу</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_5_9" type="radio" name="filter" value="salary_arrest">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_5_9">Арест зарплаты</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_5_10" type="radio" name="filter" value="problems_device_work">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_5_10">Проблемы с устройством на работу</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_5_11" type="radio" name="filter" value="fssp">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_5_11">ФССП</label>
                    </li>
                    <li class="filters__item filters__item--title">
                      <span>Вид долгов</span>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_6_1" type="radio" name="filter" value="bank_loans">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_6_1">Банковские кредиты</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_6_2" type="radio" name="filter" value="credit_cards">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_6_2">Кредитные карты</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_6_3" type="radio" name="filter" value="loans_to_mfo">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_6_3">Займы в МФО</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_6_4" type="radio" name="filter" value="tax_debts">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_6_4">Долги по налогам</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_6_5" type="radio" name="filter" value="penalty_debts">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_6_5">Долги по штрафам</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_6_6" type="radio" name="filter" value="zhkkh_debts">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_6_6">Долги по ЖКХ</label>
                    </li>
                    <li class="filters__item filters__item--title">
                      <span>Количество кредиторов</span>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_7_1" type="radio" name="filter" value="less_5_lenders">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_7_1">Меньше 5-ти кредиторов</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_7_2" type="radio" name="filter" value="less_10_lenders">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_7_2">Меньше 10-ти кредиторов</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_7_3" type="radio" name="filter" value="more_10_lenders">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_7_3">Больше 10-ти кредиторов</label>
                    </li>
                    <li class="filters__item filters__item--title">
                      <span>Источник</span>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_8_1" type="radio" name="filter" value="recommendation">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_8_1">Обратились по рекомендации</label>
                    </li>
                    <li class="filters__item filters__item--title">
                      <span>Другое</span>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_9_1" type="radio" name="filter" value="bankruptcy_guarantor">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_9_1">Банкротство поручителя</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_9_2" type="radio" name="filter" value="bankruptcy_proxy">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_9_2">Банкротство по доверенности</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_9_3" type="radio" name="filter" value="family_bankruptcy">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_9_3">Семейное банкротство</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_9_4" type="radio" name="filter" value="other_companies">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_9_4">Опыт в других компаниях</label>
                    </li>
                    <li class="filters__item radio">
                    
                    </li>
                  </ul>
                </div>
              </form>
            </div>
            <div class="reviews__main reviews__main--video">
              
              <?php 
                $args_video_desk = ([
                  'posts_per_page' => '6',
                  'post_type'   => 'otzyvy',
                  'post_status' => 'publish',
                  'tax_query'   => [
                    [
                      'taxonomy'  => 'types',
                      'field'     => 'slug',
                      'terms'     => 'video'
                    ],
                  ],
                ]);

                $video_desk = new WP_Query( $args_video_desk );

                if( $video_desk->have_posts() ) :
                  
                  while( $video_desk->have_posts() ) : $video_desk->the_post();

                      get_template_part('template-parts/content-video');

                  endwhile;
              
                endif;
              ?>
              
              
              
              <?php if (  $video_desk->max_num_pages > 1 ) : ?>
                <button class="btn btn--show btn--reviews reviews__btn--video" data-show="true">
                  <span class="btn__icon btn__icon--load">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#load"></use>
                    </svg>
                  </span>
                  Показать ещё
                </button>
              <?php endif; ?>
              
              <script>
                let true_posts_video = '<?php echo serialize($video_desk->query_vars); ?>';
                let current_page_video = '<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>';
                let max_pages_video = '<?php echo $video_desk->max_num_pages; ?>';
              </script>
              
            </div>
          </div>
        </div>
        
        <?php get_template_part( 'inc/sections/rating' ); ?>
        
        
        <?php if (  $video_desk->max_num_pages > 1 ) : ?>
          <button class="btn btn--show btn--reviews reviews__btn--double">
            <span class="btn__icon btn__icon--load">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#load"></use>
              </svg>
            </span>
            Показать ещё
          </button>
        <?php endif; ?>
            
        
        <div class="reviews__slider slider-reviews slider-reviews slider-reviews--first">
          <div class="swiper-container swiper-reviews">
            <div class="swiper-wrapper">
              <?php 
                $args_foto_1 = ([
                  'posts_per_page' => '10',
                  'post_type'   => 'otzyvy',
                  'post_status' => 'publish',
                  'tax_query'   => [
                    [
                      'taxonomy'  => 'types',
                      'field'     => 'slug',
                      'terms'     => 'foto'
                    ],
                  ],
                ]);

                $foto_mob1 = new WP_Query( $args_foto_1 );

                if( $foto_mob1->have_posts() ) :
                  
                  while( $foto_mob1->have_posts() ) : $foto_mob1->the_post();

                      get_template_part('template-parts/content-fotoslide');

                  endwhile;
              
                endif;
              ?>
            </div>
          </div>
        </div>
        <div class="reviews__slider slider-reviews slider-reviews slider-reviews--second">
          <div class="swiper-container swiper-reviews">
            <div class="swiper-wrapper">
              <?php 
                $args_foto_2 = ([
                  'offset'         => '10',
                  'posts_per_page' => '10',
                  'post_type'   => 'otzyvy',
                  'post_status' => 'publish',
                  'tax_query'   => [
                    [
                      'taxonomy'  => 'types',
                      'field'     => 'slug',
                      'terms'     => 'foto'
                    ],
                  ],
                ]);

                $foto_mob2 = new WP_Query( $args_foto_2 );

                if( $foto_mob2->have_posts() ) :
                  
                  while( $foto_mob2->have_posts() ) : $foto_mob2->the_post();

                      get_template_part('template-parts/content-fotoslide');

                  endwhile;
              
                endif;
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>