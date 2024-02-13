<?php 
  $offer = get_field('offers', 374); 
  
  $rating_ya = get_field('rating_ya', 374);
  $rating_ya_rating_value = $rating_ya['rating_value'];
  $rating_ya_reviews_value = $rating_ya['reviews_value'];
  
  $rating_ga = get_field('rating_ga', 374);
  $rating_ga_rating_value = $rating_ga['rating_value'];
  $rating_ga_reviews_value = $rating_ga['reviews_value'];
  
  $rating_zoon = get_field('rating_zoon', 374);
  $rating_zoon_rating_value = $rating_zoon['rating_value'];
  $rating_zoon_reviews_value = $rating_zoon['reviews_value'];
  
  $rating_2gis = get_field('rating_2gis', 374);
  $rating_2gis_rating_value = $rating_2gis['rating_value'];
  $rating_2gis_reviews_value = $rating_2gis['reviews_value'];
  
  $rating_yell = get_field('rating_yell', 374);
  $rating_yell_rating_value = $rating_yell['rating_value'];
  $rating_yell_reviews_value = $rating_yell['reviews_value'];
  
  $rating_otzovik = get_field('rating_otzovik', 374);
  $rating_otzovik_rating_value = $rating_otzovik['rating_value'];
  $rating_otzovik_reviews_value = $rating_otzovik['reviews_value'];
?>
   
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

  $deadline = strtotime(get_field('timer', 374));
  $now = strtotime("now");

  $differenceDay = ($deadline - $now) / (60*60*24);
?>   
   
    <footer class="footer" data-daysleft="<?php echo round($differenceDay); ?>">
      <div class="container">
        <div class="footer__row">
          <div class="footer__col footer__col--big">
            <div class="footer__title">ООО «Финансово-правовой альянс»</div>
            <p class="footer__desc">Компания специализирующаяся исключительно на банкротстве физических лиц и индивидуальных предпринимателей</p>
            <div class="footer__rating">
              <ul class="rating__list rating__list--small">
                <?php
                  if (is_front_page()) {
                ?>
                  <li class="rating__item rating__item--small" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
	            <?php
                  } else {
                ?>
                  <li class="rating__item rating__item--small">
	            <?php
                  }
                ?>
                  <div class="rating__icon rating__icon--yandex rating__icon--small">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#Yandex"></use>
                    </svg>
                  </div>
                <?php
                  if (is_front_page()) {
                ?>
                  <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization">
                    <meta itemprop="name" content="Финансово-правовой альянс">
                    <meta itemprop="telephone" content="88005118139">
                    <link itemprop="url" href="https://fpa.ru/"/>
                    <meta itemprop="email" content="office@fpa.ru">
                    <meta itemprop="image" content="https://fpa.ru/wp-content/themes/fpalaw/assets/img/logo.svg">
                    <span itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                      <meta itemprop="addressLocality" content="Санкт-Петербург">
                      <meta itemprop="streetAddress" content="ул. Ефимова, 4/А, оф. 326">
                    </span>
                  </div>
	            <?php
                  }
                ?>
                  <div class="rating__stars rating__stars--small">
                    <div class="stars__single"></div>
                <?php
                  if (is_front_page()) {
                ?>
                    <div class="rating__value rating__value--small" itemprop="ratingValue"><?=$rating_ya_rating_value; ?></div>
	            <?php
                  } else {
                ?>
                    <div class="rating__value rating__value--small"><?=$rating_ya_rating_value; ?></div>
	            <?php
                  }
                ?>
                  </div>
                  <a class="rating__reviews rating__reviews--small" href="https://yandex.ru/maps/org/finansovo_pravovoy_alyans/113571879971/?ll=30.321249%2C59.925689&amp;source=wizbiz_new_text_single&amp;z=14" title="Вы переходите на нашу страницу отзывов yandex.ru">

                <?php
                  if (is_front_page()) {
                ?>
                    <span class="rating__reviews-sum" itemprop="ratingCount"><?=$rating_ya_reviews_value; ?> </span>отзывов
	            <?php
                  } else {
                ?>
                    <span class="rating__reviews-sum"><?=$rating_ya_reviews_value; ?> </span>отзывов
	            <?php
                  }
                ?>
                  </a>
                </li>
                
                
                
                
                <li class="rating__item rating__item--small">
                  <div class="rating__icon rating__icon--google rating__icon--small">
                    <img src="/wp-content/themes/fpalaw/assets/img/rating/flamp_vector.png" />
                    <!--
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#Google"></use>
                    </svg>
                    -->
                  </div>
                  <div class="rating__stars rating__stars--small">
                    <div class="stars__single"></div>
                    <div class="rating__value rating__value--small"><?=$rating_ga_rating_value; ?></div>
                  </div>
                  <!--<a class="rating__reviews rating__reviews--small" href="https://www.google.com/maps/place/%D0%A4%D0%B8%D0%BD%D0%B0%D0%BD%D1%81%D0%BE%D0%B2%D0%BE-%D0%BF%D1%80%D0%B0%D0%B2%D0%BE%D0%B2%D0%BE%D0%B9+%D0%90%D0%BB%D1%8C%D1%8F%D0%BD%D1%81/@59.92517,30.3202503,17z/data=!4m7!3m6!1s0x4696310048b1ae0b:0xc755f7f056b43836!8m2!3d59.9250689!4d30.3221867!9m1!1b1?hl=ru-RU" title="Вы переходите на нашу страницу отзывов google.com">-->
                  <a class="rating__reviews rating__reviews--small" href="https://spb.flamp.ru/firm/finansovo_pravovojj_alyans_ooo-70000001026575492" target="_blank" title="Вы переходите на страницу отзывов о нашей компании на сайте Flamp">
                    <span class="rating__reviews-sum"><?=$rating_ga_reviews_value; ?> </span>отзывов
                  </a>
                </li>
                <li class="rating__item rating__item--small">
                  <div class="rating__icon rating__icon--zoon rating__icon--small">
                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140 34">
                      <path d="M1.228 1.127h29.156c.677 0 1.228.55 1.228 1.233v5.755c0 .766-.332 1.491-.908 1.994L14.401 23.8h15.983c.677 0 1.228.544 1.228 1.224v6.607c0 .68-.551 1.233-1.228 1.233H1.228c-.325 0-.638-.13-.868-.36A1.235 1.235 0 010 31.63v-5.746c0-.766.332-1.491.908-1.994L17.21 10.2H1.228a1.24 1.24 0 01-.87-.37A1.25 1.25 0 010 8.953V2.36c0-.68.551-1.233 1.228-1.233zM51.934 0c3.371 0 6.376.762 8.885 2.153a14.963 14.963 0 015.907 5.928c1.384 2.518 2.143 5.535 2.143 8.919 0 3.384-.759 6.401-2.145 8.92a14.963 14.963 0 01-5.905 5.929C58.31 33.239 55.305 34 51.934 34c-3.371 0-6.377-.762-8.885-2.153a14.964 14.964 0 01-5.907-5.928c-1.384-2.518-2.143-5.535-2.143-8.919 0-3.384.759-6.401 2.145-8.92a14.963 14.963 0 015.905-5.929C45.557.761 48.563 0 51.934 0zm0 9.067c-1.612 0-3.028.34-4.2.977a6.685 6.685 0 00-2.73 2.742c-.632 1.174-.973 2.596-.973 4.214 0 1.618.339 3.04.973 4.216a6.685 6.685 0 002.732 2.74c1.17.635 2.586.977 4.198.977 1.612 0 3.028-.34 4.2-.977a6.685 6.685 0 002.73-2.742c.632-1.174.973-2.596.973-4.214 0-1.618-.339-3.04-.973-4.216a6.692 6.692 0 00-2.733-2.74c-1.167-.635-2.583-.977-4.197-.977zM88.062 0c3.37 0 6.376.762 8.885 2.153a14.968 14.968 0 015.907 5.928c1.384 2.518 2.143 5.535 2.143 8.919 0 3.384-.759 6.401-2.145 8.92a14.968 14.968 0 01-5.905 5.929C94.438 33.239 91.433 34 88.062 34c-3.371 0-6.377-.762-8.885-2.153a14.963 14.963 0 01-5.907-5.928c-1.385-2.518-2.143-5.535-2.143-8.919 0-3.384.758-6.401 2.145-8.92a14.963 14.963 0 015.904-5.929C81.687.761 84.69 0 88.063 0zm0 9.067c-1.612 0-3.028.34-4.2.977a6.685 6.685 0 00-2.73 2.742c-.632 1.174-.973 2.596-.973 4.214 0 1.618.338 3.04.973 4.216a6.684 6.684 0 002.732 2.74c1.17.635 2.585.977 4.198.977 1.612 0 3.028-.34 4.2-.977a6.685 6.685 0 002.73-2.742c.632-1.174.973-2.596.973-4.214 0-1.618-.339-3.04-.974-4.216a6.693 6.693 0 00-2.732-2.74c-1.167-.635-2.583-.977-4.197-.977zM140 2.364v29.267c0 .68-.551 1.233-1.231 1.233h-5.728a2.629 2.629 0 01-1.987-.91l-13.638-16.366V31.63c0 .68-.565 1.233-1.242 1.233h-6.564a1.223 1.223 0 01-1.137-.76 1.235 1.235 0 01-.094-.473V2.364c0-.68.551-1.235 1.231-1.235h5.728c.763 0 1.486.333 1.987.913l13.639 16.368V2.362c0-.68.541-1.233 1.219-1.233h6.586c.678 0 1.231.553 1.231 1.235z" fill="url(#linear-zoon)" />
                      <defs>
                        <linearGradient id="linear-zoon" x1="108.28" y1="17" x2="30.535" y2="17" gradientUnits="userSpaceOnUse">
                          <stop offset="0" stop-color="#6339F5" />
                          <stop offset="1" stop-color="#3D3F55" />
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>
                  <div class="rating__stars rating__stars--small">
                    <div class="stars__single"></div>
                    <div class="rating__value rating__value--small"><?=$rating_zoon_rating_value; ?></div>
                  </div>
                  <a class="rating__reviews rating__reviews--small" href="https://spb.zoon.ru/law/finansovo-pravovoj_alyans_na_ulitse_efimova_4a/" title="Вы переходите на нашу страницу отзывов zoon.ru">
                    <span class="rating__reviews-sum"><?=$rating_zoon_reviews_value; ?> </span>отзывов
                  </a>
                </li>
                <li class="rating__item rating__item--small">
                  <div class="rating__icon rating__icon--2gis rating__icon--small">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#2GIS"></use>
                    </svg>
                  </div>
                  <div class="rating__stars rating__stars--small">
                    <div class="stars__single"></div>
                    <div class="rating__value rating__value--small"><?=$rating_2gis_rating_value; ?></div>
                  </div>
                  <a class="rating__reviews rating__reviews--small" href="https://2gis.ru/spb/firm/70000001026575492" title="Вы переходите на нашу страницу отзывов 2gis.ru">
                    <span class="rating__reviews-sum"><?=$rating_2gis_reviews_value; ?> </span>отзывов
                  </a>
                </li>
                <li class="rating__item rating__item--small">
                  <div class="rating__icon rating__icon--yell rating__icon--small">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#Yell"></use>
                    </svg>
                  </div>
                  <div class="rating__stars rating__stars--small">
                    <div class="stars__single"></div>
                    <div class="rating__value rating__value--small"><?=$rating_yell_rating_value; ?></div>
                  </div>
                  <a class="rating__reviews rating__reviews--small" href="https://www.yell.ru/spb/com/finansovo-pravovoj-alyans_11943907/" title="Вы переходите на нашу страницу отзывов yell.ru">
                    <span class="rating__reviews-sum"><?=$rating_yell_reviews_value; ?> </span>отзывов
                  </a>
                </li>
                <li class="rating__item rating__item--small">
                  <div class="rating__icon rating__icon--reviewer rating__icon--small">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#Reviewer"></use>
                    </svg>
                  </div>
                  <div class="rating__stars rating__stars--small">
                    <div class="stars__single"></div>
                    <div class="rating__value rating__value--small"><?=$rating_otzovik_rating_value; ?></div>
                  </div>
                  <a class="rating__reviews rating__reviews--small" href="https://otzovik.com/reviews/yuridicheskaya_kompaniya_finansovo-pravovoy_alyans_russia_sankt-peterburg/" title="Вы переходите на нашу страницу отзывов otzovik.com">
                    <span class="rating__reviews-sum"><?=$rating_otzovik_reviews_value; ?> </span>отзывов
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="footer__col">
            <div class="footer__subtitle">Рубрики статей о банкротстве</div>
            <ul class="categories">
              <li class="categories__item">
                <a class="link--inverse" href="<?php echo get_permalink(22269); ?>">Банкротство физ. лиц</a>
              </li>
              <li class="categories__item">
                <a class="link--inverse" href="<?php echo get_tag_link(80); ?>">Банкротство через МФЦ</a>
              </li>
              <li class="categories__item">
                <a class="link--inverse" href="<?php echo get_permalink(21616); ?>">Наши цены</a>
              </li>
              <li class="categories__item">
                <a class="link--inverse" href="<?php echo get_tag_link(73); ?>">Документы</a>
              </li>
              <li class="categories__item">
                <a class="link--inverse" href="<?php echo get_tag_link(61); ?>">Имущество</a>
              </li>
              <li class="categories__item">
                <a class="link--inverse" href="<?php echo get_tag_link(66); ?>">Приставы</a>
              </li>
              <li class="categories__item">
                <a class="link--inverse" href="<?php echo get_tag_link(64); ?>">Советы должникам</a>
              </li>
              <li class="categories__item">
                <a class="link" href="<?php echo get_post_type_archive_link('info'); ?>">Все статьи</a>
              </li>
            </ul>
          </div>
          <div class="footer__col">
            <div class="footer__subtitle">Популярные статьи о банкротстве</div>
            <ul class="popular">
              <?php 
                $args_pop_art = ([
                  'posts_per_page' => '5',
                  'post__in'  => [ 1318, 1648, 1776, 1671, 1656 ],
                  'post_type'   => 'info',
                  'post_status' => 'publish',
                ]);

                $args_art = new WP_Query( $args_pop_art );

                if( $args_art->have_posts() ) :

                  while( $args_art->have_posts() ) : $args_art->the_post();

                      get_template_part('template-parts/content-popular-sngl-footer');

                  endwhile;

                endif;
              ?>
            </ul>
          </div>
        </div>
        <div class="footer__row" style="justify-content: flex-start;">
          <!--
          <div class="footer__col footer__col--first">
            <div class="footer__subtitle">Приемная в г. Санкт-Петербурге</div>
            <a class="link--inverse link--contact link--telephone--cnt" href="tel:<? echo do_shortcode('[sc name="phone-link-1"]'); ?>"><? echo do_shortcode('[sc name="phone-1"]'); ?></a>
          </div>
          -->
          <div class="footer__col">
            <div class="footer__subtitle">Звонки по РФ бесплатно</div>
            <a class="link--inverse link--contact link--telephone--cnt" href="tel:<? echo do_shortcode('[sc name="phone-link-2"]'); ?>"><? echo do_shortcode('[sc name="phone-2"]'); ?></a>
          </div>
          <div class="footer__col footer__col--first">
            <div class="footer__subtitle">Наши социальные сети</div>
            <div class="social">
              <ul class="social__list">
                <li class="social__item">
                  <a class="social__link social__link--nobg social__link--middle" href="<? echo do_shortcode('[sc name="vk-page"]'); ?>" aria-label="Ссылка на vk.com" target="_blank" title="Вы переходите на нашу страницу сообщества в социальной сети Вконтакте" data-info="vk">
                    <svg>
                      <use xlink:href="#vk"></use>
                    </svg>
                  </a>
                </li>
                <?php
                /*
                <!--
                <li class="social__item">
                  <a class="social__link social__link--nobg social__link--middle" href="<? echo do_shortcode('[sc name="instagram-page"]'); ?>" aria-label="Ссылка на instagram.com" target="_blank" title="Вы переходите на наш аккаунт сообщества в социальной сети Instagram" data-info="instagram">
                    <svg>
                      <use xlink:href="#instagram"></use>
                    </svg>
                  </a>
                </li>
                -->
                */
                ?>
                <li class="social__item">
                  <a class="social__link social__link--nobg social__link--middle" href="<? echo do_shortcode('[sc name="ok-page"]'); ?>" aria-label="Ссылка на ok.ru" target="_blank" title="Вы переходите на нашу страницу сообщества в социальной сети Одноклассники" data-info="ok">
                    <svg>
                      <use xlink:href="#ok"></use>
                    </svg>
                  </a>
                </li>
                <?php
                /*
                <!--
                <li class="social__item">
                  <a class="social__link social__link--nobg social__link--middle" href="<? echo do_shortcode('[sc name="facebook-page"]'); ?>" aria-label="Ссылка на facebook.com" target="_blank" title="Вы переходите на нашу страницу сообщества в социальной сети Facebook" data-info="facebook">
                    <svg>
                      <use xlink:href="#facebook"></use>
                    </svg>
                  </a>
                </li>
                -->
                */
                ?>
                <li class="social__item">
                  <a class="social__link social__link--nobg social__link--middle" href="<? echo do_shortcode('[sc name="youtube-page"]'); ?>" aria-label="Ссылка на youtube.com" target="_blank" title="Вы переходите на наш канал на видеохостинге YouTube" data-info="youtube">
                    <svg>
                      <use xlink:href="#youtube"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="footer__col">
            <div class="footer__subtitle">Онлайн-чат</div>
            <div class="social">
              <ul class="social__list">
                <li class="social__item">
                  <a class="social__link social__link--nobg social__link--middle" href="https://t.me/fpalaw" aria-label="Ссылка на чат telegram" title="Вы переходите в наш чат Telegram">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#telegram"></use>
                    </svg>
                  </a>
                </li>
                <li class="social__item">
                  <a class="social__link social__link--nobg social__link--middle" href="https://vk.com/write-187830095" aria-label="Ссылка на чат vk" title="Вы переходите в наш чат vk.com">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#vk-chat"></use>
                    </svg>
                  </a>
                </li>
                <li class="social__item">
                  <a class="social__link social__link--nobg social__link--middle" href="https://api.whatsapp.com/send/?phone=79967972741&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%2C+%D0%BC%D0%B5%D0%BD%D1%8F+%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D1%81%D1%83%D0%B5%D1%82+%D0%BF%D1%80%D0%BE%D1%86%D0%B5%D0%B4%D1%83%D1%80%D0%B0+%D0%B1%D0%B0%D0%BD%D0%BA%D1%80%D0%BE%D1%82%D1%81%D1%82%D0%B2%D0%B0+%D0%BF%D0%BE+%D0%B0%D0%BA%D1%86%D0%B8%D0%B8&app_absent=0" aria-label="Ссылка на чат whatsapp" title="Вы переходите в наш чат Whatsapp">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#whatsapp"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer__row footer__row--last">
          <div class="footer__col">
            <div class="footer__subtitle">Работаем с гос. учреждениями</div>
            <ul class="footer-list" style="    align-items: flex-start;">
              <li class="footer-list__item footer-list__item--1--new">
                  <img src="/wp-content/themes/fpalaw/assets/img/icons/emblem_1-min.png" alt="Федеральная служба судебных приставов" />
                  <span class="caption">Федеральная служба судебных приставов</span>
              </li>
              <li class="footer-list__item footer-list__item--2--new">
                  <img src="/wp-content/themes/fpalaw/assets/img/icons/emblem_2-min.png" alt="Арбитражный суд" />
                  <span class="caption">Арбитражный суд</span>
              </li>
              <li class="footer-list__item footer-list__item--3--new">
                  <img src="/wp-content/themes/fpalaw/assets/img/icons/emblem_3-min.png" alt="Федеральная налоговоя служба" />
                  <span class="caption">Федеральная налоговая служба</span>
              </li>
            </ul>
          </div>
          <div class="footer__col">
            <div class="footer__subtitle">Способы оплаты</div>
            <ul class="footer-list">
              <li class="footer-list__item footer-list__item--mastercard"></li>
              <li class="footer-list__item footer-list__item--visa"></li>
              <li class="footer-list__item footer-list__item--mir"></li>
            </ul>
          </div>
          <div class="footer__col">
            <div class="footer__subtitle">Услуги застрахованы </div>
            <div class="footer__insurance insurance">
              <div class="insurance__icon"></div>
              <a class="link insurance__link" href="<?= get_template_directory_uri() ?>/assets/img/licenses/policy.jpg" data-fancybox="gallery-insurance">Открыть
                <br> страховой полис </a>
            </div>
          </div>
          <div class="footer__col">
            <ul class="copyright">
              <li class="copyright__item">© ООО «Финансово-правовой альянс»
                <br>2015 ‑ <?php echo date ( 'Y' ) ; ?>. Все права защищены</li>
              <li class="copyright__item">ОГРН - 1167847164121 ИНН - 7838051976</li>
              <li class="copyright__item">
                <a class="link link--underline" href="<?= get_permalink(123) ?>">Политика конфиденциальности </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    
    <style>
        .fixed-modalr-bk-info-popup {
            position: fixed;
            bottom: -100%;
            opacity: 0;
            width: 100%;
            border-radius: 8px 8px 0 0;
            z-index: 9999;
            background: #fff;
            -webkit-transition: all .4s ease;
            -o-transition: all .4s ease;
            transition: all .4s ease;
        }
        .fixed-modalr-bk-info-popup.showed {
            opacity: 1;
            bottom: 0;
        }
        .fixed-modalr-bk-info-popup .content-cnt .content {
            padding: 25px 25px 12px;
            border-bottom: 1px solid #EDEDED;
        }
        .fixed-modalr-bk-info-popup .content-cnt .content p {
            color: #333;
            font-family: Inter;
            font-size: 14px;
            font-weight: 500;
            line-height: 21px;
            letter-spacing: 0em;
            text-align: left;
        }
        .fixed-modalr-bk-info-popup .close button {
            border: none;
            background: transparent;
            width: 100%;
            padding: 30px;
            color: #000020;
            font-family: Inter;
            font-size: 15px;
            font-weight: 600;
            line-height: 19px;
            letter-spacing: 0.01em;
            text-align: center;
            cursor: pointer;
        }
        body.page-template-services.fixed-popup-bg:after {
            content: "";
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgb(227 227 227 / 90%);
            z-index: 999;
        }
        
        
                    
        
    </style>
    
    
    <div class="fixed-modal-cnt fixed-modal--rbk-info-popup fixed-modalr-bk-info-popup">
        <div class="content-cnt">
            <div class="content">
                <p>На основании предоставленного АО "РОСБИЗНЕСКОНСАЛТИНГ" (АО "РБК") исследования в октябре 2023 г, был сделан вывод о том, что компания «Финансово-правовой альянс» является лидером по среднесписочной численности юристов среди компаний, специализирующихся на банкротстве граждан в России.</p>
                <p>Сотни юристов ежедневно работают над тысячами дел наших клиентов по всей России. За время своей работы мы списали миллиарды рублей клиентам, предоставляя гарантии списания долгов в договоре.</p>
                    <p>Финансово-правовой Альянс - спишите свои долги в крупнейшей в России компании по банкротству с гарантией в договоре!</p>
            </div>
            <div class="close">
                <button>Закрыть</button>
            </div>
        </div>
    </div>
    
    <!--<button class="no-btn btn-new-year btn-new-year--show"></button>-->
    
    <button class="no-btn btn-up">
      <svg>
        <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#arrow-top"></use>
      </svg>
    </button>
    
    <button class="btn-up-whatsapp-button hidden" id="btn-up-whatsapp-button" onclick="location.href='https://wa.me/79967972741?text=Здравствуйте,%20Хочу%20уточнить%20несколько%20вопросов%20по%20банкротству';">
        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.5" y="0.5" width="41" height="41" rx="7.5" fill="url(#paint0_linear_9502_157425)"/><rect x="1.5" y="1.5" width="39" height="39" rx="6.5" stroke="white"/><path fill-rule="evenodd" clip-rule="evenodd" d="M29.0605 12.9309C28.0089 11.8788 26.7595 11.045 25.3843 10.4776C24.0091 9.91029 22.5353 9.62053 21.0477 9.62505C14.8047 9.62505 9.7225 14.6818 9.71996 20.8985C9.7172 22.878 10.239 24.8229 11.2322 26.5352L9.625 32.3751L15.6299 30.8074C17.2921 31.7079 19.1527 32.1792 21.0432 32.1785H21.0477C27.2903 32.1785 32.372 27.1212 32.375 20.9051C32.3788 19.4226 32.0877 17.9541 31.5187 16.5851C30.9496 15.2161 30.1141 13.974 29.0605 12.9309ZM21.0477 30.2758H21.0437C19.3584 30.2763 17.7038 29.8253 16.252 28.9697L15.9082 28.7665L12.3448 29.6968L13.296 26.2392L13.072 25.8837C12.1297 24.3918 11.6305 22.663 11.6324 20.8985C11.6324 15.7325 15.8579 11.5293 21.0513 11.5293C23.5426 11.5249 25.9337 12.5102 27.6986 14.2686C29.4635 16.0269 30.4577 18.4143 30.4626 20.9056C30.4605 26.0721 26.2371 30.2758 21.0477 30.2758ZM26.2117 23.2583C25.9288 23.1171 24.5359 22.4356 24.2779 22.3417C24.02 22.2477 23.8295 22.2005 23.6411 22.4829C23.4527 22.7652 22.9099 23.3969 22.7448 23.5874C22.5798 23.7778 22.4148 23.7986 22.1319 23.6574C21.8491 23.5163 20.9365 23.2192 19.8554 22.2594C19.0139 21.5124 18.4462 20.5902 18.2812 20.3084C18.1161 20.0266 18.2634 19.8737 18.4051 19.7336C18.5325 19.6071 18.6879 19.4045 18.8296 19.24C18.9713 19.0754 19.0185 18.9576 19.1125 18.7697C19.2064 18.5818 19.1597 18.4173 19.0891 18.2767C19.0185 18.136 18.4523 16.7492 18.2167 16.185C17.9866 15.6355 17.7536 15.7102 17.5799 15.7015C17.4148 15.6934 17.2244 15.6914 17.037 15.6914C16.8938 15.6951 16.7528 15.7283 16.623 15.789C16.4932 15.8496 16.3772 15.9364 16.2824 16.0438C16.0229 16.3261 15.2917 17.0086 15.2917 18.394C15.2917 19.7793 16.3073 21.1199 16.4475 21.3078C16.5876 21.4957 18.4432 24.341 21.2823 25.5612C21.8095 25.787 22.3482 25.985 22.8962 26.1543C23.5741 26.3686 24.1911 26.3387 24.6786 26.2661C25.2225 26.1853 26.3544 25.5846 26.5895 24.9265C26.8246 24.2683 26.8251 23.7047 26.7545 23.5874C26.6839 23.4701 26.495 23.399 26.2117 23.2583Z" fill="white"/><rect x="0.5" y="0.5" width="41" height="41" rx="7.5" stroke="#E3E2E2"/><defs><linearGradient id="paint0_linear_9502_157425" x1="2100" y1="4200" x2="2100" y2="0" gradientUnits="userSpaceOnUse"><stop stop-color="#1FAF38"/><stop offset="0.0001" stop-color="#1FAF38"/><stop offset="1" stop-color="#60D669"/></linearGradient></defs></svg>
    </button>
    <!--
    <form action="https://wa.me/79967972741?text=Здравствуйте,%20Хочу%20уточнить%20несколько%20вопросов%20по%20банкротству" target="_blank" class="btn-up-whatsapp-form hidden">
        <button>
            <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.5" y="0.5" width="41" height="41" rx="7.5" fill="url(#paint0_linear_9502_157425)"/><rect x="1.5" y="1.5" width="39" height="39" rx="6.5" stroke="white"/><path fill-rule="evenodd" clip-rule="evenodd" d="M29.0605 12.9309C28.0089 11.8788 26.7595 11.045 25.3843 10.4776C24.0091 9.91029 22.5353 9.62053 21.0477 9.62505C14.8047 9.62505 9.7225 14.6818 9.71996 20.8985C9.7172 22.878 10.239 24.8229 11.2322 26.5352L9.625 32.3751L15.6299 30.8074C17.2921 31.7079 19.1527 32.1792 21.0432 32.1785H21.0477C27.2903 32.1785 32.372 27.1212 32.375 20.9051C32.3788 19.4226 32.0877 17.9541 31.5187 16.5851C30.9496 15.2161 30.1141 13.974 29.0605 12.9309ZM21.0477 30.2758H21.0437C19.3584 30.2763 17.7038 29.8253 16.252 28.9697L15.9082 28.7665L12.3448 29.6968L13.296 26.2392L13.072 25.8837C12.1297 24.3918 11.6305 22.663 11.6324 20.8985C11.6324 15.7325 15.8579 11.5293 21.0513 11.5293C23.5426 11.5249 25.9337 12.5102 27.6986 14.2686C29.4635 16.0269 30.4577 18.4143 30.4626 20.9056C30.4605 26.0721 26.2371 30.2758 21.0477 30.2758ZM26.2117 23.2583C25.9288 23.1171 24.5359 22.4356 24.2779 22.3417C24.02 22.2477 23.8295 22.2005 23.6411 22.4829C23.4527 22.7652 22.9099 23.3969 22.7448 23.5874C22.5798 23.7778 22.4148 23.7986 22.1319 23.6574C21.8491 23.5163 20.9365 23.2192 19.8554 22.2594C19.0139 21.5124 18.4462 20.5902 18.2812 20.3084C18.1161 20.0266 18.2634 19.8737 18.4051 19.7336C18.5325 19.6071 18.6879 19.4045 18.8296 19.24C18.9713 19.0754 19.0185 18.9576 19.1125 18.7697C19.2064 18.5818 19.1597 18.4173 19.0891 18.2767C19.0185 18.136 18.4523 16.7492 18.2167 16.185C17.9866 15.6355 17.7536 15.7102 17.5799 15.7015C17.4148 15.6934 17.2244 15.6914 17.037 15.6914C16.8938 15.6951 16.7528 15.7283 16.623 15.789C16.4932 15.8496 16.3772 15.9364 16.2824 16.0438C16.0229 16.3261 15.2917 17.0086 15.2917 18.394C15.2917 19.7793 16.3073 21.1199 16.4475 21.3078C16.5876 21.4957 18.4432 24.341 21.2823 25.5612C21.8095 25.787 22.3482 25.985 22.8962 26.1543C23.5741 26.3686 24.1911 26.3387 24.6786 26.2661C25.2225 26.1853 26.3544 25.5846 26.5895 24.9265C26.8246 24.2683 26.8251 23.7047 26.7545 23.5874C26.6839 23.4701 26.495 23.399 26.2117 23.2583Z" fill="white"/><rect x="0.5" y="0.5" width="41" height="41" rx="7.5" stroke="#E3E2E2"/><defs><linearGradient id="paint0_linear_9502_157425" x1="2100" y1="4200" x2="2100" y2="0" gradientUnits="userSpaceOnUse"><stop stop-color="#1FAF38"/><stop offset="0.0001" stop-color="#1FAF38"/><stop offset="1" stop-color="#60D669"/></linearGradient></defs></svg>        
        </button>
    </form>
    -->
    <!--
    <a href="https://wa.me/79967972741?text=Здравствуйте,%20Хочу%20уточнить%20несколько%20вопросов%20по%20банкротству" target="_blank" class="btn-up-whatsapp hidden" aria-label="Ссылка на чат whatsapp" title="Вы переходите в наш чат Whatsapp">
        <svg>
            <use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#whatsapp"></use>
        </svg>
    </a>
    -->
    
    <div class="section--modal modal">
      <div class="modal__overlay hidden">
        <?php
            if ( is_user_logged_in() ) {
                $current_user_id = get_current_user_id();
        ?>
            <div class="modal__wrap modal__wrap--edit-job-popup edit-job-popup hidden">
                <button class="no-btn modal__close"><svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use></svg></button>
                <div class="popup-cnt">
                    <div class="title">Редактировать вакансию</div>
                    <div class="form-cnt">
                        <div class="form-row-cnt">
                            <div class="form-row all-width">
                                <div class="form-col">
                                    <label for="edit_job_title">Название вакансии</label>
                                    <input type="text" name="edit_job_title" id="edit_job_title" value="" size="40" placeholder="Название вакансии" />
                                </div>
                            </div>
                        </div>
                        <div class="form-row-cnt">
                            <label for="edit_salary_from">Заработная плата</label>
                            <div class="form-row two-col">
                                <div class="form-col">
                                    <input type="number" step="100" name="edit_salary_from" id="edit_salary_from" value="" placeholder="От (не обязательно указывать)" />
                                </div>
                                <div class="form-col">
                                    <input type="number" step="100" name="edit_salary_up_to" id="edit_salary_up_to" value="" placeholder="От (не обязательно указывать)" />
                                </div>
                            </div>
                        </div>
                        <div class="form-row-cnt">
                            <div class="form-row all-width">
                                <div class="form-col">
                                    <label for="edit_job_text">Описание вакансии</label>
                                    <textarea id="edit_job_text" name="edit_job_text" rows="5" cols="33"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row-cnt">
                            <div class="form-row all-width">
                                <div class="form-col">
                                    <label for="edit_job_link">Ссылка на вакансию на hh.ru</label>
                                    <input type="text" name="edit_job_link" id="edit_job_link" value="" size="40" placeholder="Ссылка на вакансию на hh.ru" />
                                </div>
                            </div>
                        </div>
                        <div class="form-row-cnt">
                            <div class="buttons-cnt">
                                <button class="btn" id="edit_save-job">Сохранить</button>
                                <button class="btn grey" id="edit_cancel-job">Отмена</button>
                            </div>
                        </div>
                        <input type="hidden" value="" name="edit_job_id" id="edit_job_id" />
                        <input type="hidden" value="<?=$current_user_id; ?>" name="edit_user_id" id="edit_user_id" />
                    </div>
                </div>
            </div>
            <div class="modal__wrap modal__wrap--add-job-popup add-job-popup hidden">
                <button class="no-btn modal__close"><svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use></svg></button>
                <div class="popup-cnt">
                    <div class="title">Добавить вакансию</div>
                    <div class="form-cnt">
                        <div class="form-row-cnt">
                            <div class="form-row all-width">
                                <div class="form-col">
                                    <label for="add_job_title">Название вакансии</label>
                                    <input type="text" name="add_job_title" id="add_job_title" value="" size="40" placeholder="Название вакансии" />
                                </div>
                            </div>
                        </div>
                        <div class="form-row-cnt">
                            <label for="add_salary_from">Заработная плата</label>
                            <div class="form-row two-col">
                                <div class="form-col">
                                    <input type="number" step="100" name="add_salary_from" id="add_salary_from" value="" placeholder="От (не обязательно указывать)" />
                                </div>
                                <div class="form-col">
                                    <input type="number" step="100" name="add_salary_up_to" id="add_salary_up_to" value="" placeholder="От (не обязательно указывать)" />
                                </div>
                            </div>
                        </div>
                        <div class="form-row-cnt">
                            <div class="form-row all-width">
                                <div class="form-col">
                                    <label for="add_job_text">Описание вакансии</label>
                                    <textarea id="add_job_text" name="add_job_text" rows="5" cols="33"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row-cnt">
                            <div class="form-row all-width">
                                <div class="form-col">
                                    <label for="add_job_link">Ссылка на вакансию на hh.ru</label>
                                    <input type="text" name="add_job_link" id="add_job_link" value="" size="40" placeholder="Ссылка на вакансию на hh.ru" />
                                </div>
                            </div>
                        </div>
                        <div class="form-row-cnt">
                            <div class="buttons-cnt">
                                <button class="btn" id="add_save-job">Добавить</button>
                                <button class="btn grey" id="add_cancel-job">Отмена</button>
                            </div>
                        </div>
                        <input type="hidden" value="<?=$current_user_id; ?>" name="add_user_id" id="add_user_id" />
                    </div>
                </div>
            </div>
            <div class="modal__wrap modal__wrap--remove-job-popup remove-job-popup hidden">
                <button class="no-btn modal__close"><svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use></svg></button>
                <div class="popup-cnt">
                    <div class="title">Вы точно хотите удалить вакансию?</div>
                    <div class="subtitle">Действие нельзя будет отменить</div>
                    <div class="form-cnt">
                        <div class="form-row-cnt">
                            <div class="buttons-cnt">
                                <button class="btn grey" id="remove_cancel-job">Не удалять</button>
                                <button class="btn red" id="remove_remove-job">Удалить</button>
                            </div>
                        </div>
                        <input type="hidden" value="" name="remove_job_id" id="remove_job_id" />
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
        
        <div class="modal__wrap modal__wrap--new-year-popup new-year-popup hidden">
            <button class="no-btn modal__close"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#close"></use></svg></button>
            <div class="content-cnt">
                <div class="content">
                    <div class="left-col">
                        <picture>
                            <!--<source srcset=<?= get_template_directory_uri() ?>/assets/img/services/header/logo-new-year_mobile.jpg" media="(max-width: 768px)" />-->
                            <img itemprop="logo url" src="<?= get_template_directory_uri() ?>/assets/img/services/header/popup-new-year.png" alt="Финансово-правовой альянс" title="Финансово-правовой альянс">
                        </picture>
                    </div>
                    <div class="right-col">
                        <div class="title">Бесплатное банкротство</div>
                        <div class="subtitle">Начни процедуру до 10 января и выиграй бесплатное банкротство</div>
                        <div class="form-cnt">
                            <?php echo do_shortcode('[contact-form-7 id="54996" title="Попап - Бесплатное банкротство Новый год"]'); ?>
                            <div class="politics">
                                <!--<span class="politics__icon"><svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#shild"></use></svg></span>-->
                                <p class="politics__text">Акция проводится с 18 декабря 2023 года по 10 января 2024 года, организатор акции ООО "ФПА" (ИНН:7838051976), о правилах проведения акции, количестве призов или выигрышей по результатам акции, сроках, месте и порядке их получения можете узнать, перейдя <a target="_blank" href="<?php echo get_permalink(55034); ?>">по ссылке</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <div class="modal__wrap modal__wrap--rbk-info-popup rbk-info-popup hidden">
            <div class="content-cnt">
                <div class="content">
                    <p>На основании предоставленного АО "РОСБИЗНЕСКОНСАЛТИНГ" (АО "РБК") исследования в октябре 2023 г, был сделан вывод о том, что компания «Финансово-правовой альянс» является лидером по среднесписочной численности юристов среди компаний, специализирующихся на банкротстве граждан в России.</p>
                    <p>Сотни юристов ежедневно работают над тысячами дел наших клиентов по всей России. За время своей работы мы списали миллиарды рублей клиентам, предоставляя гарантии списания долгов в договоре.</p>
                    <p>Финансово-правовой Альянс - спишите свои долги в крупнейшей в России компании по банкротству с гарантией в договоре!</p>
                </div>
                <div class="close">
                    <button>Закрыть</button>
                </div>
            </div>
        </div>
          
        <div class="modal__wrap modal__wrap--close-popup close-popup hidden">
          <button class="no-btn modal__close">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
            </svg>
          </button>
          <div class="modal-row">
            <div class="modal-col">
              <figure>
                <picture>
                  <source srcset="/wp-content/uploads/2022/09/okladnikov.webp" />
                  <img src="/wp-content/uploads/2022/09/okladnikov.png" alt="Окладников Илья Викторович" />
                </picture>
                <figcaption>
                  <span class="name">Окладников Илья Викторович</span>
                  <span class="post">Руководитель юридического департамента по банкротству</span>
                </figcaption>
              </figure>
            </div>
            <div class="modal-col">
              <div class="first-col">
                <div class="h1">Дайте мне три месяца и я спишу ваши долги <span>абсолютно бесплатно</span> или <span>выплачу за вас</span>!</div> 
                <div class="layer-person tablet-view">
                    <figure>
                        <picture>
                            <source srcset="/wp-content/themes/fpalaw/assets/img/forms/ep-layer-okladnikov.webp">
                            <img alt="Окладников Илья Викторович" src="/wp-content/themes/fpalaw/assets/img/forms/ep-layer-okladnikov.png">
                        </picture>
                        <figcaption>
                            <span class="name">Окладников Илья Викторович</span>
                            <span class="post">Руководитель юридического департамента по&nbsp;банкротству</span>
                        </figcaption>
                    </figure>
                </div>
                <button class="btn">Cписать бесплатно</button>
              </div>
              <div class="second-col hidden">
                <div class="form-cnt">
                  <?php echo do_shortcode( '[contact-form-7 id="21929" title="Модальное окно - Закрыть страницу"]' ); ?>
                  <div class="politics">
                    <span class="politics__icon"><svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#shild"></use></svg></span>
                    <p class="politics__text">Мы гарантируем безопасность и сохранность Ваших данных. Нажимая на кнопку, вы даете согласие на обработку своих персональных данных в соответствии с <a href="<?= get_permalink(123) ?>">«Политикой конфиденциальности»</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          
        <div class="modal__wrap modal__wrap--external-link external-link hidden">
          <button class="no-btn modal__close">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
            </svg>
          </button>
          <div class="external-link__title">Перейти по ссылке?</div>
          <div class="external-link__name">
            <span class="external-link__favicon">
              <svg class="external-link__svg">
                <use xlink:href=""></use>
              </svg>
            </span>
            <span class="external-link__name-resource"> </span>
          </div>
          <div class="external-link__text"></div>
          <a class="btn external-link__link" href="" target="_blank">Перейти</a>
        </div>
        
        <div class="modal__wrap modal__wrap--callback hidden">
          <button class="no-btn modal__close">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
            </svg>
          </button>
          <div class="callback__title">Перезвоним и бесплатно проконсультируем Вас по телефону</div>
          <p class="callback__subtitle">От самых простых до самых сложных вопросов</p>
          
          <?php echo do_shortcode( '[contact-form-7 id="1102" title="Модальное окно - Перезвоним и бесплатно проконсультируем Вас по телефону" html_class="modal__form"]' ); ?>

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
        
        <div class="modal__wrap modal__wrap--services hidden">
          <button class="no-btn modal__close">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
            </svg>
          </button>
          
          <div class="modal__title">Записаться на бесплатную консультацию</div>
          <div class="modal__master hidden">
            <div class="modal__icon">
              <div class="modal__foto"></div>
            </div>
            <div class="modal__content">
              <span class="modal__name"> </span>
              <span class="modal__post"></span>
            </div>
          </div>
          
          <?php echo do_shortcode( '[contact-form-7 id="1103" title="Форма для страницы Услуги - Записаться на бесплатную консультацию" html_class="modal__form"]' ); ?>
          
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
        
        
        <div class="modal__wrap modal__wrap--warning hidden">
          <button class="no-btn modal__close">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
            </svg>
          </button>
          
          <div class="modal__title">Бесплатное банкротство</div>
          <span>Узнайте, относитесь ли вы к категории граждан, которые подходят под условия бесплатного банкротства</span>
          
          <?php echo do_shortcode( '[contact-form-7 id="4073" title="Все страницы сайта - Записаться на бесплатное банкротство (В связи с напряжённой экономической ситуацией в мире)" html_class="modal__form"]' ); ?>
          
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
        
        <div class="modal__wrap modal__wrap--recording hidden">
          <button class="no-btn modal__close">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
            </svg>
          </button>
          <div class="modal__title">Записаться на консультацию к арбитражному управляющему</div>
          <div class="modal__master">
            <div class="modal__icon">
              <div class="modal__foto" style="background-image: url(<?= get_template_directory_uri() ?>/assets/img/services/humans/aleksandr-igorevich_small.png)"></div>
            </div>
            <div class="modal__content">
              <span class="modal__name">С Ефремовым Александром Игоревичем</span>
              <span class="modal__post">Арбитражным управляющем</span>
            </div>
          </div>
          <div class="modal__wrap-consult">
            <div class="modal__consult-time">Выбрать время консультации <span>(не&nbsp;обязательно)</span>
            </div>
            <div class="date-time">
              <div class="date-time__btn">
                <span class="date-time__arrow"> </span>
                <span class="date-time__text">День</span>
              </div>
              <div class="date-time__wrap">
                <table class="calendar" id="calendar2">
                  <thead>
                    <tr>
                      <td colspan="2"></td>
                      <td colspan="3"></td>
                      <td colspan="2"></td>
                    </tr>
                    <tr>
                      <td>Пн</td>
                      <td>Вт</td>
                      <td>Ср</td>
                      <td>Чт</td>
                      <td>Пт</td>
                      <td>Сб</td>
                      <td>Вс</td>
                    </tr>
                  </thead>
                  <tbody></tbody>
                </table>
              </div>
            </div>
            <div class="date-time">
              <div class="date-time__btn">
                <span class="date-time__arrow"> </span>
                <span class="date-time__text time-btn-text">Час</span>
              </div>
              <ul class="date-time__wrap time-rec">
                <li class="radio date-time__item">
                  <input class="radio__default" id="time_1-1" type="radio" name="timepiker" value="10">
                  <label class="radio__label" for="time_1-1">10:00</label>
                </li>
                <li class="radio date-time__item">
                  <input class="radio__default" id="time_1-2" type="radio" name="timepiker" value="11">
                  <label class="radio__label" for="time_1-2">11:00</label>
                </li>
                <li class="radio date-time__item">
                  <input class="radio__default" id="time_1-3" type="radio" name="timepiker" value="12">
                  <label class="radio__label" for="time_1-3">12:00</label>
                </li>
                <li class="radio date-time__item">
                  <input class="radio__default" id="time_1-4" type="radio" name="timepiker" value="13">
                  <label class="radio__label" for="time_1-4">13:00</label>
                </li>
                <li class="radio date-time__item">
                  <input class="radio__default" id="time_1-5" type="radio" name="timepiker" value="14">
                  <label class="radio__label" for="time_1-5">14:00</label>
                </li>
                <li class="radio date-time__item">
                  <input class="radio__default" id="time_1-6" type="radio" name="timepiker" value="15">
                  <label class="radio__label" for="time_1-6">15:00</label>
                </li>
                <li class="radio date-time__item">
                  <input class="radio__default" id="time_1-7" type="radio" name="timepiker" value="16">
                  <label class="radio__label" for="time_1-7">16:00</label>
                </li>
                <li class="radio date-time__item">
                  <input class="radio__default" id="time_1-8" type="radio" name="timepiker" value="17">
                  <label class="radio__label" for="time_1-8">17:00</label>
                </li>
                <li class="radio date-time__item">
                  <input class="radio__default" id="time_1-9" type="radio" name="timepiker" value="18">
                  <label class="radio__label" for="time_1-9">18:00</label>
                </li>
                <li class="radio date-time__item">
                  <input class="radio__default" id="time_1-10" type="radio" name="timepiker" value="19">
                  <label class="radio__label" for="time_1-10">19:00</label>
                </li>
              </ul>
            </div>
          </div>
          <div class="modal__wrap-time hidden">
            <div class="modal__content modal__content--recording">
              <span class="modal__date">
                <span class="modal__date-item modal__date-item--name">Дата записи: </span>
                <span class="modal__date-item rec-day"> </span>
                <span class="modal__date-item">- </span>
                <span class="modal__date-item rec-date"> </span>
                <span class="modal__date-item">г.</span>
              </span>
              <span class="modal__time">
                <span class="modal__time-item modal__time-item--name">Время записи: </span>
                <span class="modal__time-item rec-interval"> </span>
              </span>
            </div>
          </div>
          
          <?php echo do_shortcode( '[contact-form-7 id="2027" title="Модальное окно - Онлайн-запись к арбитражному управляющему" html_class="modal__form form"]' ); ?>
          
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
        
        <div class="modal__wrap modal__wrap--thanks hidden">
          <button class="no-btn modal__close">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
            </svg>
          </button>
          <div class="modal__title">Введите корректный номер телефона</div>
          
          <?php echo do_shortcode( '[contact-form-7 id="1104" title="Модальное окно - Введите корректный номер телефона" html_class="callback__form"]' ); ?>
          
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
        
        <div class="modal__wrap modal__wrap--calculation calc-modal hidden">
          <button class="no-btn modal__close">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
            </svg>
          </button>
          
          <div class="calc-modal__question">Ответ придёт в СМС-сообщении в течение 90 секунд</div>
          
          <div class="calc-modal__check hidden">
            <svg viewBox="0 0 51 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.584 25l17.188 16.667L48.418 8.334" stroke="#35D977" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <div class="calc-modal__loader">
            <div class="loader"></div>
          </div>
          
          <div class="calc-modal__block">
            <div class="calc-modal__bg"> </div>
            <div class="calc-modal__inner">
              <span>Читаем ответы...</span>
              <span>Анализируем условия...</span>
              <span>Подбираем варианты...</span>
              <span>Рассчитываем стоимость...</span>
              <span>Ожидаем ответа...</span>
              <span>Составляем отчёт...</span>
              <span>Расчет готов, введите номер для отправки...</span>
            </div>
          </div>
          
          <?php echo do_shortcode( '[contact-form-7 id="1109" title="Онлайн калькулятор - Ответ придёт в СМС-сообщении в течение 90 секунд" html_class="callback__form form-calc"]' ); ?>
          
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
        
        <div class="modal__wrap modal__wrap--answer answer hidden">
          <button class="no-btn modal__close">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
            </svg>
          </button>
          <div class="calc-modal__question">Ответ придёт в СМС-сообщении в течение 90 секунд</div>
          <div class="calc-modal__check hidden">
            <svg viewBox="0 0 51 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.584 25l17.188 16.667L48.418 8.334" stroke="#35D977" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <div class="calc-modal__loader">
            <div class="loader"></div>
          </div>
          <div class="calc-modal__block">
            <div class="calc-modal__bg"> </div>
            <div class="calc-modal__inner">
              <span>Читаем ответы...</span>
              <span>Анализируем условия...</span>
              <span>Подбираем варианты...</span>
              <span>Рассчитываем стоимость...</span>
              <span>Ожидаем ответа...</span>
              <span>Составляем отчёт...</span>
              <span>Расчет готов, введите номер для отправки...</span>
            </div>
          </div>
          
          <div class="selected-answers__cnt hidden">
            <div class="selected-answers-animate__cnt"></div>
          </div>
          
          <?php echo do_shortcode( '[contact-form-7 id="2950" title="Онлайн калькулятор на десктопах (из navbar) - Ответ придёт в СМС-сообщении в течение 90 секунд" html_class="form modal__form form-test"]' ); ?>
          
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
        
        
        
        
        
        
        <div class="modal__wrap modal__wrap--info_calculator modal__wrap--test hidden">
          <div class="modal__inner">
            <button class="no-btn modal__close">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
              </svg>
            </button>
            <div class="modal__title modal__title--test">Онлайн-калькулятор</div>
            <div class="test__wrap">
              <div class="test__block region__container">
                <div class="test__content">
                  <p class="test__question  test__question--mfc">
                    <span class="test__question-icon">1.</span> <span>Место вашего фактического проживания:</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-calculator-place-1">Санкт-Петербург и Ленинградская область</label>
                    <input class="radio__default" id="info-calculator-place-1" type="radio" name="place" value="Санкт-Петербург и Ленинградская область">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-calculator-place-2">Москва и Московская область</label>
                    <input class="radio__default" id="info-calculator-place-2" type="radio" name="place" value="Москва и Московская область">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-calculator-place-3">Другие регионы</label>
                    <input class="radio__default" id="info-calculator-place-3" type="radio" name="place" value="Другие регионы">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question  test__question--mfc">
                    <span class="test__question-icon">2.</span> <span>Примерная сумма всех кредитов и долгов</span>
                  </p>
                </div>
                <!--
                <div class="range-slider ">
                  <input type="text" value="0" class="js-range-slider-value" />
                  <input type="text" class="js-range-slider hidden" name="summ-value" value="0" />
                </div>
                
                <p class="range-slider-intro">В сумму долгов можно включить, не только сам кредит, но и пени, проценты, а так же задолженности по ЖКХ, штрафы ГИБДД и налоги</p>
                -->
                <div class="test__variants">
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-calculator-summ-2">300 001 руб. – 500 000 руб.</label>
                    <input class="radio__default" id="info-calculator-summ-2" type="radio" name="summ" value="300 001 руб. – 500 000 руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-calculator-summ-3">500 001 руб. – 1 000 000 руб.</label>
                    <input class="radio__default" id="info-calculator-summ-3" type="radio" name="summ" value="500 001 руб. – 1 000 000 руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-calculator-summ-4">1 000 001 руб. – 3 000 000 руб.</label>
                    <input class="radio__default" id="info-calculator-summ-4" type="radio" name="summ" value="1 000 001 руб. – 3 000 000 руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-calculator-summ-5">3 000 001 руб. – 7 000 000 руб.</label>
                    <input class="radio__default" id="info-calculator-summ-5" type="radio" name="summ" value="3 000 001 руб. – 7 000 000 руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-calculator-summ-6">Более 7 000 001 руб.</label>
                    <input class="radio__default" id="info-calculator-summ-6" type="radio" name="summ" value="Более 7 000 001 руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>

                  <div class="test__radio radio test__radio--mfc difficult_answer">
                    <label class="radio__label" for="info-calculator-summ-1">Менее 300 000 тыс. руб.</label>
                    <input class="radio__default" id="info-calculator-summ-1" type="radio" name="summ" value="Менее 300 000 тыс. руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc difficult_answer">
                    <label class="radio__label" for="info-calculator-summ-7">Затрудняюсь ответить</label>
                    <input class="radio__default" id="info-calculator-summ-7" type="radio" name="summ" value="Затрудняюсь ответить">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  
                  <!--
                  <div class="calculation__checkbox checkbox checkbox_donot_know">
                    <label class="checkbox_label" for="popup_calc_1_7">Затрудняюсь ответить</label>
                    <input class="checkbox__default" id="popup_calc_1_7" type="checkbox" name="summ" value="summ_not_selected">
                    <span class="checkbox__new checkbox__new--accent"></span>
                  </div>
                  <div class="calculation__checkbox checkbox checkbox_donot_know hidden">
                    <label class="checkbox_label" for="popup_calc_1_8">1 000 000 рублей</label>
                    <input class="checkbox__default" id="popup_calc_1_8" type="checkbox" checked="checked" name="summ" value="summ_selected">
                    <span class="checkbox__new checkbox__new--accent"></span>
                  </div>
                  -->
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question  test__question--mfc">
                    <span class="test__question-icon">3.</span> <span>Вы официально трудоустроены?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-calculator-officially-employed-1">Да</label>
                    <input class="radio__default" id="info-calculator-officially-employed-1" type="radio" name="officially-employed">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-calculator-officially-employed-2">Нет</label>
                    <input class="radio__default" id="info-calculator-officially-employed-2" type="radio" name="officially-employed">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc difficult_answer">
                    <label class="radio__label" for="info-calculator-officially-employed-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="info-calculator-officially-employed-3" type="radio" name="officially-employed">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question  test__question--mfc">
                    <span class="test__question-icon">4.</span> <span>Имеется ли у вас в собственности ценное имущество?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-calculator-realty-1">Есть транспортные средства</label>
                    <input class="radio__default" id="info-calculator-realty-1" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-calculator-realty-2">Есть ипотека</label>
                    <input class="radio__default" id="info-calculator-realty-2" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-calculator-realty-3">Есть недвижимость (не в ипотеке)</label>
                    <input class="radio__default" id="info-calculator-realty-3" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-calculator-realty-4">Нет ценного имущества</label>
                    <input class="radio__default" id="info-calculator-realty-4" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc difficult_answer">
                    <label class="radio__label" for="info-calculator-realty-5">Затрудняюсь ответить</label>
                    <input class="radio__default" id="info-calculator-realty-5" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question  test__question--mfc">
                    <span class="test__question-icon">5.</span> <span>Относитесь ли вы к одной из указанных категорий граждан?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-calculator-category-1">Безработные (более 3 месяцев)</label>
                    <input class="checkbox__default" id="info-calculator-category-1" type="checkbox" name="category" value="Безработные (более 3 месяцев)">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-calculator-category-2">Ипотечные должники</label>
                    <input class="checkbox__default" id="info-calculator-category-2" type="checkbox" name="category" value="Ипотечные должники">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-calculator-category-3">Родители-одиночки</label>
                    <input class="checkbox__default" id="info-calculator-category-3" type="checkbox" name="category" value="Родители-одиночки">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-calculator-category-4">Пенсионеры</label>
                    <input class="checkbox__default" id="info-calculator-category-4" type="checkbox" name="category" value="Пенсионеры">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-calculator-category-5">Инвалиды любой группы</label>
                    <input class="checkbox__default" id="info-calculator-category-5" type="checkbox" name="category" value="Инвалиды любой группы">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-calculator-category-6">Родители ребенка до 3 лет</label>
                    <input class="checkbox__default" id="info-calculator-category-6" type="checkbox" name="category" value="Родители ребенка до 3 лет">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-calculator-category-7">Семьи с двумя и более детьми</label>
                    <input class="checkbox__default" id="info-calculator-category-7" type="checkbox" name="category" value="Семьи с двумя и более детьми">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-calculator-category-8">Индивидуальные предприниматели, бывшие ИП</label>
                    <input class="checkbox__default" id="info-calculator-category-8" type="checkbox" name="category" value="Индивидуальные предприниматели, бывшие ИП">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-calculator-category-9">Военнослужащие и участники боевых действий</label>
                    <input class="checkbox__default" id="info-calculator-category-9" type="checkbox" name="category" value="Военнослужащие и участники боевых действий">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-calculator-category-10">Сотрудники здравоохранения, образования и защиты правопорядка</label>
                    <input class="checkbox__default" id="info-calculator-category-10" type="checkbox" name="category" value="Сотрудники здравоохранения, образования и защиты правопорядка">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-calculator-category-11">Другое</label>
                    <input class="checkbox__default" id="info-calculator-category-11" type="checkbox" name="category" value="Другое">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question  test__question--mfc">
                    <span class="test__question-icon">6.</span> <span>У вас произошло сокращение на работе или снижение официального дохода, не покрывающего размер ежемесячных платежей по кредитам и займам?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-calculator-reduced-income-1">Да</label>
                    <input class="radio__default" id="info-calculator-reduced-income-1" type="radio" name="reduced-income">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-calculator-reduced-income-2">Нет</label>
                    <input class="radio__default" id="info-calculator-reduced-income-2" type="radio" name="reduced-income">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question  test__question--mfc">
                    <span class="test__question-icon">7.</span> Кто является вашим(и) кредитором(ами)?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-calculator-creditors-1">Банки</label>
                    <input class="checkbox__default" id="info-calculator-creditors-1" type="checkbox" name="creditors" value="Банки">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-calculator-creditors-2">МФО</label>
                    <input class="checkbox__default" id="info-calculator-creditors-2" type="checkbox" name="creditors" value="МФО">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-calculator-creditors-3">Государственные органы</label>
                    <input class="checkbox__default" id="info-calculator-creditors-3" type="checkbox" name="creditors" value="Государственные органы">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-calculator-creditors-4">Физические лица</label>
                    <input class="checkbox__default" id="info-calculator-creditors-4" type="checkbox" name="creditors" value="Физические лица">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-calculator-creditors-5">Юридические лица</label>
                    <input class="checkbox__default" id="info-calculator-creditors-5" type="checkbox" name="creditors" value="Юридические лица">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc difficult_answer">
                    <label class="checkbox__label" for="info-calculator-creditors-6">Затрудняюсь ответить</label>
                    <input class="checkbox__default" id="info-calculator-creditors-6" type="checkbox" name="creditors" value="Затрудняюсь ответить">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question  test__question--mfc">
                    <span class="test__question-icon">8.</span> <span>Ваши долги уже просужены и исполнительные листы находятся в ФССП (Федеральной службе судебных приставов)? Произведён арест счетов, имущества, наложен запрет на выезд за границу?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-calculator-fssp-1">Да</label>
                    <input class="radio__default" id="info-calculator-fssp-1" type="radio" name="fssp">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-calculator-fssp-2">Нет</label>
                    <input class="radio__default" id="info-calculator-fssp-2" type="radio" name="fssp">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc difficult_answer">
                    <label class="radio__label" for="info-calculator-fssp-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="info-calculator-fssp-3" type="radio" name="fssp">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question  test__question--mfc">
                    <span class="test__question-icon">9.</span> <span>Вы совершали сделки продажи или дарения недвижимости или автомобилей за последние 3 года?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-calculator-transactions-1">Были сделки с ценным имуществом за 3&nbsp;года</label>
                    <input class="radio__default" id="info-calculator-transactions-1" type="radio" name="transactions">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-calculator-transactions-2">Не было сделок с ценным имуществом за 3&nbsp;года</label>
                    <input class="radio__default" id="info-calculator-transactions-2" type="radio" name="transactions">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-calculator-transactions-3">Другой вариант</label>
                    <input class="radio__default" id="info-calculator-transactions-3" type="radio" name="transactions">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc difficult_answer">
                    <label class="radio__label" for="info-calculator-transactions-4">Затрудняюсь ответить</label>
                    <input class="radio__default" id="info-calculator-transactions-4" type="radio" name="transactions">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question  test__question--mfc">
                    <span class="test__question-icon">10.</span> <span>Как получить расчет?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-calculator-callback-1">Звонок юриста</label>
                    <input class="radio__default" id="info-calculator-callback-1" type="radio" name="messenger">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-calculator-callback-2">СМС</label>
                    <input class="radio__default" id="info-calculator-callback-2" type="radio" name="messenger">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label radio__label--ws" for="info-calculator-callback-3">WhatsApp</label>
                    <input class="radio__default" id="info-calculator-callback-3" type="radio" name="messenger">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label radio__label--tl" for="info-calculator-callback-4">Telegram</label>
                    <input class="radio__default" id="info-calculator-callback-4" type="radio" name="messenger">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label radio__label--vb" for="info-calculator-callback-5">Viber</label>
                    <input class="radio__default" id="info-calculator-callback-5" type="radio" name="messenger">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <button class="btn test__btn test__btn--full test-btn" data-name="SMS-27 Спишем ваши долги за 2 000 ₽ в месяц" data-sms="2">Узнать результат</button>
                
                <?php 
                    /* echo do_shortcode( '[contact-form-7 id="1213" title="Cтатьи (форма в сайдбаре) - Спишем ваши долги за 2 000 ₽ в месяц" html_class="form-aside__form"]' ); */
                ?>
                
                
              </div>
            </div>
          </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="modal__wrap modal__wrap--info_collector modal__wrap--test hidden">
          <div class="modal__inner">
            <button class="no-btn modal__close">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
              </svg>
            </button>
            <div class="modal__title modal__title--test">Защита от коллекторов</div>
            <div class="test__wrap">
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question  test__question--mfc">
                    <span class="test__question-icon">1.</span> <span>Какова общая сумма задолженности перед всеми кредиторами?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-collector-summ-2">300 001 руб. – 500 000 руб.</label>
                    <input class="radio__default" id="info-collector-summ-2" type="radio" name="summ" value="300 001 руб. – 500 000 руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-collector-summ-3">500 001 руб. – 1 000 000 руб.</label>
                    <input class="radio__default" id="info-collector-summ-3" type="radio" name="summ" value="500 001 руб. – 1 000 000 руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-collector-summ-4">1 000 001 руб. – 3 000 000 руб.</label>
                    <input class="radio__default" id="info-collector-summ-4" type="radio" name="summ" value="1 000 001 руб. – 3 000 000 руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-collector-summ-5">3 000 001 руб. – 7 000 000 руб.</label>
                    <input class="radio__default" id="info-collector-summ-5" type="radio" name="summ" value="3 000 001 руб. – 7 000 000 руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-collector-summ-6">Более 7 000 001 руб.</label>
                    <input class="radio__default" id="info-collector-summ-6" type="radio" name="summ" value="Более 7 000 001 руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc difficult_answer">
                    <label class="radio__label" for="info-collector-summ-1">Менее 300 000 тыс. руб.</label>
                    <input class="radio__default" id="info-collector-summ-1" type="radio" name="summ" value="Менее 300 000 тыс. руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc difficult_answer">
                    <label class="radio__label" for="info-collector-summ-7">Затрудняюсь ответить</label>
                    <input class="radio__default" id="info-collector-summ-7" type="radio" name="summ" value="Затрудняюсь ответить">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question  test__question--mfc">
                    <span class="test__question-icon">2.</span> <span>Как часто вам звонят сотрудники службы взыскания банка или коллекторского агентства?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-collector-how_often_call-1">Более 2 раз в день</label>
                    <input class="radio__default" id="info-collector-how_often_call-1" type="radio" name="how_often_call" value="Более 2 раз в день">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-collector-how_often_call-2">1 раз в день</label>
                    <input class="radio__default" id="info-collector-how_often_call-2" type="radio" name="how_often_call" value="1 раз в день">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-collector-how_often_call-3">Раз в неделю и чаще</label>
                    <input class="radio__default" id="info-collector-how_often_call-3" type="radio" name="how_often_call" value="Раз в неделю и чаще">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-collector-how_often_call-4">Раз в месяц и реже</label>
                    <input class="radio__default" id="info-collector-how_often_call-4" type="radio" name="how_often_call" value="Раз в месяц и реже">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="info-collector-how_often_call-5">Не звонят</label>
                    <input class="radio__default" id="info-collector-how_often_call-5" type="radio" name="how_often_call" value="Не звонят">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question  test__question--mfc">
                    <span class="test__question-icon">3.</span> <span>Кто именно звонит вам по вопросу возврата задолженности?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-collector-who_calling-1">Коллекторы</label>
                    <input class="checkbox__default" id="info-collector-who_calling-1" type="checkbox" name="who_calling" value="Коллекторы">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-collector-who_calling-2">Сотрудники банковской службы взыскания</label>
                    <input class="checkbox__default" id="info-collector-who_calling-2" type="checkbox" name="who_calling" value="Сотрудники банковской службы взыскания">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-collector-who_calling-3">Cудебные приставы</label>
                    <input class="checkbox__default" id="info-collector-who_calling-3" type="checkbox" name="who_calling" value="Cудебные приставы">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-collector-who_calling-4">Иные представители кредиторов</label>
                    <input class="checkbox__default" id="info-collector-who_calling-4" type="checkbox" name="who_calling" value="Иные представители кредиторов">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question  test__question--mfc">
                    <span class="test__question-icon">4.</span> <span>Сталкивались ли вы с нарушением закона или ваших прав?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-collector-violation_law-1">Да, меня оскорбляют</label>
                    <input class="checkbox__default" id="info-collector-violation_law-1" type="checkbox" name="violation_law" value="Да, меня оскорбляют">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-collector-violation_law-2">Да, я получаю угрозы</label>
                    <input class="checkbox__default" id="info-collector-violation_law-2" type="checkbox" name="violation_law" value="Да, я получаю угрозы">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-collector-violation_law-3">Меня беспокоят каждый час</label>
                    <input class="checkbox__default" id="info-collector-violation_law-3" type="checkbox" name="violation_law" value="Меня беспокоят каждый час">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-collector-violation_law-4">Звонят родственникам</label>
                    <input class="checkbox__default" id="info-collector-violation_law-4" type="checkbox" name="violation_law" value="Звонят родственникам">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-collector-violation_law-5">Звонят знакомым и друзьям</label>
                    <input class="checkbox__default" id="info-collector-violation_law-5" type="checkbox" name="violation_law" value="Звонят знакомым и друзьям">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-collector-violation_law-6">Звонят на работу</label>
                    <input class="checkbox__default" id="info-collector-violation_law-6" type="checkbox" name="violation_law" value="Звонят на работу">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-collector-violation_law-7">Звонят рано утром или по ночам</label>
                    <input class="checkbox__default" id="info-collector-violation_law-7" type="checkbox" name="violation_law" value="Звонят рано утром или по ночам">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="info-collector-violation_law-8">Приезжали лично и угрожали</label>
                    <input class="checkbox__default" id="info-collector-violation_law-8" type="checkbox" name="violation_law" value="Приезжали лично и угрожали">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <button class="btn test__btn test__btn--full test-btn" data-name="SMS-77 Защита от коллекторов" data-sms="80">Получить инструкцию</button>
                
                <?php 
                    /* echo do_shortcode( '[contact-form-7 id="1213" title="Cтатьи (форма в сайдбаре) - Спишем ваши долги за 2 000 ₽ в месяц" html_class="form-aside__form"]' ); */
                ?>
                
                
              </div>
            </div>
          </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="modal__wrap modal__wrap--online test hidden">
          <button class="no-btn modal__close modal__close--test modal__close--in">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
            </svg>
          </button>
          <div class="test__title">Онлайн-калькулятор</div>
          <div class="test__wrap">
            <div class="test__inner">
              <div class="test__tab">
                <div class="test__content">
                  <p class="test__question" >
                    <span class="test__question-icon">1.</span> <span>Какова общая сумма задолженности перед всеми кредиторами?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio">
                    <label class="radio__label">Менее 300 000 тыс. руб.</label>
                    <input class="radio__default" type="radio" name="summ">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">300 001 руб. – 500 000 руб.</label>
                    <input class="radio__default" type="radio" name="summ">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">500 001 руб. – 1 000 000 руб.</label>
                    <input class="radio__default" type="radio" name="summ">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">1 000 001 руб. – 3 000 000 руб.</label>
                    <input class="radio__default" type="radio" name="summ">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">3 000 001 руб. – 7 000 000 руб.</label>
                    <input class="radio__default" type="radio" name="summ">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Более 7 000 001 руб.</label>
                    <input class="radio__default" type="radio" name="summ">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Затрудняюсь ответить</label>
                    <input class="radio__default" type="radio" name="summ">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                </div>
              </div>
              <div class="test__tab">
                <div class="test__content">
                  <p class="test__question " >
                    <span class="test__question-icon">2.</span> <span>Относитесь ли вы к одной из указанных категорий граждан?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio">
                    <label class="radio__label">Безработные (более 3 месяцев)</label>
                    <input class="radio__default" type="radio" name="category">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Ипотечные должники</label>
                    <input class="radio__default" type="radio" name="category">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Родители-одиночки</label>
                    <input class="radio__default" type="radio" name="category">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Пенсионеры</label>
                    <input class="radio__default" type="radio" name="category">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Инвалиды любой группы</label>
                    <input class="radio__default" type="radio" name="category">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Родители ребенка до 3 лет</label>
                    <input class="radio__default" type="radio" name="category">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Семьи с двумя и более детьми</label>
                    <input class="radio__default" type="radio" name="category">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Индивидуальные предприниматели, бывшие ИП</label>
                    <input class="radio__default" type="radio" name="category">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Военнослужащие и участники боевых действий</label>
                    <input class="radio__default" type="radio" name="category">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Сотрудники здравоохранения, образования и защиты правопорядка</label>
                    <input class="radio__default" type="radio" name="category">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Другое</label>
                    <input class="radio__default" type="radio" name="category">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                </div>
              </div>
              <div class="test__tab">
                <div class="test__content">
                  <p class="test__question " >
                    <span class="test__question-icon">3.</span> <span>Кто является вашим(и) кредитором(ами)?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio">
                    <label class="radio__label">Банки</label>
                    <input class="radio__default" type="radio" name="creditors">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">МФО</label>
                    <input class="radio__default" type="radio" name="creditors">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Государственные органы</label>
                    <input class="radio__default" type="radio" name="creditors">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Физические лица</label>
                    <input class="radio__default" type="radio" name="creditors">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Юридические лица</label>
                    <input class="radio__default" type="radio" name="creditors">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Затрудняюсь ответить</label>
                    <input class="radio__default" type="radio" name="creditors">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                </div>
              </div>
              <div class="test__tab test__block region__container">
                <div class="test__content">
                  <p class="test__question " >
                    <span class="test__question-icon">4.</span> <span>Место вашего фактического проживания:</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio">
                    <label class="radio__label">Санкт-Петербург и Ленинградская область</label>
                    <input class="radio__default" type="radio" name="place" value="Санкт-Петербург и Ленинградская область">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Москва и Московская область</label>
                    <input class="radio__default" type="radio" name="place" value="Москва и Московская область">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Другие регионы</label>
                    <input class="radio__default" type="radio" name="place" value="Другие регионы">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                </div>
              </div>                
              <div class="test__tab">
                <div class="test__content">
                  <p class="test__question " >
                    <span class="test__question-icon">5.</span> <span>Имеется ли у вас в собственности ценное имущество?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio">
                    <label class="radio__label">Есть транспортные средства</label>
                    <input class="radio__default" type="radio" name="valuable">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Есть ипотека</label>
                    <input class="radio__default" type="radio" name="valuable">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Есть недвижимость (не в ипотеке)</label>
                    <input class="radio__default" type="radio" name="valuable">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Нет ценного имущества</label>
                    <input class="radio__default" type="radio" name="valuable">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Затрудняюсь ответить</label>
                    <input class="radio__default" type="radio" name="valuable">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                </div>
              </div>
              <div class="test__tab">
                <div class="test__content">
                  <p class="test__question " >
                    <span class="test__question-icon">6.</span> <span>Вы совершали сделки с ценным имуществом в течение последних 3 лет?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio">
                    <label class="radio__label">Были сделки с ценным имуществом за 3 года</label>
                    <input class="radio__default" type="radio" name="transactions">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Не было сделок с ценным имуществом за 3 года</label>
                    <input class="radio__default" type="radio" name="transactions">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Другой вариант</label>
                    <input class="radio__default" type="radio" name="transactions">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Затрудняюсь ответить</label>
                    <input class="radio__default" type="radio" name="transactions">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                </div>
              </div>
              <div class="test__tab">
                <div class="test__content">
                  <p class="test__question " >
                    <span class="test__question-icon">7.</span> <span>Ваши долги уже просужены и исполнительные листы находятся в ФССП (Федеральной службе судебных приставов)? Произведён арест счетов, имущества, наложен запрет на выезд за границу?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio">
                    <label class="radio__label">Да</label>
                    <input class="radio__default" type="radio" name="fssp">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Нет</label>
                    <input class="radio__default" type="radio" name="fssp">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Затрудняюсь ответить</label>
                    <input class="radio__default" type="radio" name="fssp">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                </div>
              </div>
              <div class="test__tab">
                <div class="test__content">
                  <p class="test__question " >
                    <span class="test__question-icon">8.</span> <span>У вас произошло сокращение на работе или снижение официального дохода, не покрывающего размер ежемесячных платежей по кредитам и займам?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio">
                    <label class="radio__label">Да</label>
                    <input class="radio__default" type="radio" name="reduced-income">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">Нет</label>
                    <input class="radio__default" type="radio" name="reduced-income">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                </div>
              </div>
              <div class="test__tab">
                <div class="test__content">
                  <p class="test__question " >
                    <span class="test__question-icon">9.</span> <span>Как получить расчет?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio">
                    <label class="radio__label">Звонок юриста</label>
                    <input class="radio__default" type="radio" name="messenger">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label">СМС</label>
                    <input class="radio__default" type="radio" name="messenger">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label radio__label--ws">WhatsApp</label>
                    <input class="radio__default" type="radio" name="messenger">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label radio__label--tl">Telegram</label>
                    <input class="radio__default" type="radio" name="messenger">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                  <div class="test__radio radio">
                    <label class="radio__label radio__label--vb">Viber</label>
                    <input class="radio__default" type="radio" name="messenger">
                    <span class="radio__new radio__new--grey"></span>
                  </div>
                </div>
              </div>
              <div class="test__tab">
               
               
                <?php echo do_shortcode( '[contact-form-7 id="1110" title="Онлайн калькулятор на мобильных - Онлайн-калькулятор из navbar"]' ); ?>
                
                
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
        </div>
        
        <div class="modal__wrap modal__wrap--test test hidden">
          <div class="modal__inner">
            <button class="no-btn modal__close">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
              </svg>
            </button>
            <div class="modal__title modal__title--test">Онлайн-калькулятор</div>
            <div class="test__wrap">
              <div class="test__block region__container">
                <div class="test__content">
                  <p class="test__question  test__question--mfc">
                    <span class="test__question-icon">1.</span> <span>Место вашего фактического проживания:</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-place-1">Санкт-Петербург и Ленинградская область</label>
                    <input class="radio__default" id="test-place-1" type="radio" name="place" value="Санкт-Петербург и Ленинградская область">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-place-2">Москва и Московская область</label>
                    <input class="radio__default" id="test-place-2" type="radio" name="place" value="Москва и Московская область">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-place-3">Другие регионы</label>
                    <input class="radio__default" id="test-place-3" type="radio" name="place" value="Другие регионы">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question  test__question--mfc">
                    <span class="test__question-icon">2.</span> <span>Какова общая сумма задолженности перед всеми кредиторами?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-summ-1">Менее 300 000 тыс. руб.</label>
                    <input class="radio__default" id="test-summ-1" type="radio" name="summ" value="Менее 300 000 тыс. руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-summ-2">300 001 руб. – 500 000 руб.</label>
                    <input class="radio__default" id="test-summ-2" type="radio" name="summ" value="300 001 руб. – 500 000 руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-summ-3">500 001 руб. – 1 000 000 руб.</label>
                    <input class="radio__default" id="test-summ-3" type="radio" name="summ" value="500 001 руб. – 1 000 000 руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-summ-4">1 000 001 руб. – 3 000 000 руб.</label>
                    <input class="radio__default" id="test-summ-4" type="radio" name="summ" value="1 000 001 руб. – 3 000 000 руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-summ-5">3 000 001 руб. – 7 000 000 руб.</label>
                    <input class="radio__default" id="test-summ-5" type="radio" name="summ" value="3 000 001 руб. – 7 000 000 руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-summ-6">Более 7 000 001 руб.</label>
                    <input class="radio__default" id="test-summ-6" type="radio" name="summ" value="Более 7 000 001 руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-summ-7">Затрудняюсь ответить</label>
                    <input class="radio__default" id="test-summ-7" type="radio" name="summ" value="Затрудняюсь ответить">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question  test__question--mfc">
                    <span class="test__question-icon">3.</span> <span>Имеется ли у вас в собственности ценное имущество?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-realty-1">Есть транспортные средства</label>
                    <input class="radio__default" id="test-realty-1" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-realty-2">Есть ипотека</label>
                    <input class="radio__default" id="test-realty-2" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-realty-3">Есть недвижимость (не в ипотеке)</label>
                    <input class="radio__default" id="test-realty-3" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-realty-4">Нет ценного имущества</label>
                    <input class="radio__default" id="test-realty-4" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-realty-5">Затрудняюсь ответить</label>
                    <input class="radio__default" id="test-realty-5" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question  test__question--mfc">
                    <span class="test__question-icon">4.</span> <span>Относитесь ли вы к одной из указанных категорий граждан?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="test-category-1">Безработные (более 3 месяцев)</label>
                    <input class="checkbox__default" id="test-category-1" type="checkbox" name="category" value="Безработные (более 3 месяцев)">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="test-category-2">Ипотечные должники</label>
                    <input class="checkbox__default" id="test-category-2" type="checkbox" name="category" value="Ипотечные должники">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="test-category-3">Родители-одиночки</label>
                    <input class="checkbox__default" id="test-category-3" type="checkbox" name="category" value="Родители-одиночки">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="test-category-4">Пенсионеры</label>
                    <input class="checkbox__default" id="test-category-4" type="checkbox" name="category" value="Пенсионеры">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="test-category-5">Инвалиды любой группы</label>
                    <input class="checkbox__default" id="test-category-5" type="checkbox" name="category" value="Инвалиды любой группы">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="test-category-6">Родители ребенка до 3 лет</label>
                    <input class="checkbox__default" id="test-category-6" type="checkbox" name="category" value="Родители ребенка до 3 лет">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="test-category-7">Семьи с двумя и более детьми</label>
                    <input class="checkbox__default" id="test-category-7" type="checkbox" name="category" value="Семьи с двумя и более детьми">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="test-category-8">Индивидуальные предприниматели, бывшие ИП</label>
                    <input class="checkbox__default" id="test-category-8" type="checkbox" name="category" value="Индивидуальные предприниматели, бывшие ИП">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="test-category-9">Военнослужащие и участники боевых действий</label>
                    <input class="checkbox__default" id="test-category-9" type="checkbox" name="category" value="Военнослужащие и участники боевых действий">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="test-category-10">Сотрудники здравоохранения, образования и защиты правопорядка</label>
                    <input class="checkbox__default" id="test-category-10" type="checkbox" name="category" value="Сотрудники здравоохранения, образования и защиты правопорядка">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="test__checkbox checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="test-category-11">Другое</label>
                    <input class="checkbox__default" id="test-category-11" type="checkbox" name="category" value="Другое">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question  test__question--mfc">
                    <span class="test__question-icon">5.</span> <span>У вас произошло сокращение на работе или снижение официального дохода, не покрывающего размер ежемесячных платежей по кредитам и займам?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-reduced-income-1">Да</label>
                    <input class="radio__default" id="test-reduced-income-1" type="radio" name="reduced-income">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-reduced-income-2">Нет</label>
                    <input class="radio__default" id="test-reduced-income-2" type="radio" name="reduced-income">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question  test__question--mfc">
                    <span class="test__question-icon">6.</span> <span>Кто является вашим(и) кредитором(ами)?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="test-creditors-1">Банки</label>
                    <input class="checkbox__default" id="test-creditors-1" type="checkbox" name="creditors" value="Банки">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="test-creditors-2">МФО</label>
                    <input class="checkbox__default" id="test-creditors-2" type="checkbox" name="creditors" value="МФО">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="test-creditors-3">Государственные органы</label>
                    <input class="checkbox__default" id="test-creditors-3" type="checkbox" name="creditors" value="Государственные органы">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="test-creditors-4">Физические лица</label>
                    <input class="checkbox__default" id="test-creditors-4" type="checkbox" name="creditors" value="Физические лица">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="test-creditors-5">Юридические лица</label>
                    <input class="checkbox__default" id="test-creditors-5" type="checkbox" name="creditors" value="Юридические лица">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="test-creditors-6">Затрудняюсь ответить</label>
                    <input class="checkbox__default" id="test-creditors-6" type="checkbox" name="creditors" value="Затрудняюсь ответить">
                    <span class="checkbox__new checkbox__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question  test__question--mfc">
                    <span class="test__question-icon">7.</span> <span>Ваши долги уже просужены и исполнительные листы находятся в ФССП (Федеральной службе судебных приставов)? Произведён арест счетов, имущества, наложен запрет на выезд за границу?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-fssp-1">Да</label>
                    <input class="radio__default" id="test-fssp-1" type="radio" name="fssp">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-fssp-2">Нет</label>
                    <input class="radio__default" id="test-fssp-2" type="radio" name="fssp">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-fssp-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="test-fssp-3" type="radio" name="fssp">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question  test__question--mfc">
                    <span class="test__question-icon">8.</span> <span>Вы совершали сделки продажи или дарения недвижимости или автомобилей за последние 3 года?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-transactions-1">Были сделки с ценным имуществом за 3&nbsp;года</label>
                    <input class="radio__default" id="test-transactions-1" type="radio" name="transactions">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-transactions-2">Не было сделок с ценным имуществом за 3&nbsp;года</label>
                    <input class="radio__default" id="test-transactions-2" type="radio" name="transactions">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-transactions-3">Другой вариант</label>
                    <input class="radio__default" id="test-transactions-3" type="radio" name="transactions">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-transactions-4">Затрудняюсь ответить</label>
                    <input class="radio__default" id="test-transactions-4" type="radio" name="transactions">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question  test__question--mfc">
                    <span class="test__question-icon">9.</span> <span>Как получить расчет?</span>
                  </p>
                </div>
                <div class="test__variants">
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-callback-1">Звонок юриста</label>
                    <input class="radio__default" id="test-callback-1" type="radio" name="messenger">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label" for="test-callback-2">СМС</label>
                    <input class="radio__default" id="test-callback-2" type="radio" name="messenger">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label radio__label--ws" for="test-callback-3">WhatsApp</label>
                    <input class="radio__default" id="test-callback-3" type="radio" name="messenger">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label radio__label--tl" for="test-callback-4">Telegram</label>
                    <input class="radio__default" id="test-callback-4" type="radio" name="messenger">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="test__radio radio test__radio--mfc">
                    <label class="radio__label radio__label--vb" for="test-callback-5">Viber</label>
                    <input class="radio__default" id="test-callback-5" type="radio" name="messenger">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <button class="btn test__btn test__btn--full test-btn" data-name="SMS-3 АВТОМАТИЧЕСКИЙ РАСЧЕТ СТОИМОСТИ БАНКРОТСТВА" data-sms="2">Узнать результат</button>
              </div>
            </div>
          </div>
        </div>
        
        <div class="modal__wrap modal__wrap--offers hidden">
          <div class="modal__inner modal__inner--bg">
            <button class="no-btn modal__close">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
              </svg>
            </button>
            <div class="modal__title modal__title--big">Льготы и специальные предложения</div>
            <div class="offers__wrap offers__wrap--modal">
              <div class="offers__block offers__block--first">
                <div class="offers__item">
                  <div class="offers__foto offers__foto--modal">
                    <div class="offers__image lazy" style="background-image: url(<?php echo esc_url( $offer['icon_1'] ); ?>);"></div>
                  </div>
                  <div class="offers__content offers__content--modal">
                    <span class="offers__name">Пенсионерам</span>
                    <span class="offers__desc">Скидка от 6 000 рублей на процедуру банкротства</span>
                  </div>
                </div>
                <div class="offers__item">
                  <div class="offers__foto offers__foto--modal">
                    <div class="offers__image lazy" style="background-image: url(<?php echo esc_url( $offer['icon_2'] ); ?>);"></div>
                  </div>
                  <div class="offers__content offers__content--modal">
                    <span class="offers__name">Инвалидам любой группы</span>
                    <span class="offers__desc">Скидка от 6 000 рублей на процедуру банкротства</span>
                  </div>
                </div>
                <div class="offers__item">
                  <div class="offers__foto offers__foto--modal">
                    <div class="offers__image lazy" style="background-image: url(<?php echo esc_url( $offer['icon_3'] ); ?>);"></div>
                  </div>
                  <div class="offers__content offers__content--modal">
                    <span class="offers__name">Ипотечным должникам</span>
                    <span class="offers__desc">Бесплатное банкротство для ипотечных должников</span>
                  </div>
                </div>
                <div class="offers__item">
                  <div class="offers__foto offers__foto--modal">
                    <div class="offers__image lazy" style="background-image: url(<?php echo esc_url( $offer['icon_4'] ); ?>);"></div>
                  </div>
                  <div class="offers__content offers__content--modal">
                    <span class="offers__name">Бесплатная защита от коллекторов для наших клиентов</span>
                    <span class="offers__desc">Наших клиентов не беспокоят коллекторы, службы взыскания банков и МФО</span>
                  </div>
                </div>
              </div>
              <div class="offers__block offers__block--second">
                <div class="offers__item">
                  <div class="offers__foto offers__foto--modal">
                    <div class="offers__image lazy" style="background-image: url(<?php echo esc_url( $offer['icon_5'] ); ?>);"></div>
                  </div>
                  <div class="offers__content offers__content--modal">
                    <span class="offers__name">Родителям ребёнка до 3 лет, семьям с двумя и более детьми, одиноким родителям</span>
                    <span class="offers__desc">Скидка от 6 000 рублей на процедуру банкротства</span>
                  </div>
                </div>
                <div class="offers__item">
                  <div class="offers__foto offers__foto--modal">
                    <div class="offers__image lazy" style="background-image: url(<?php echo esc_url( $offer['icon_6'] ); ?>);"></div>
                  </div>
                  <div class="offers__content offers__content--modal">
                    <span class="offers__name">Специальное предложение для ИП и бывших ИП</span>
                    <span class="offers__desc">Мы снизили стоимость процедуры банкротства для ИП: теперь она стоит так же, как банкротство физических лиц, которые не занимались предпринимательской деятельностью</span>
                  </div>
                </div>
                <div class="offers__item">
                  <div class="offers__foto offers__foto--modal">
                    <div class="offers__image lazy" style="background-image: url(<?php echo esc_url( $offer['icon_7'] ); ?>);"></div>
                  </div>
                  <div class="offers__content offers__content--modal">
                    <span class="offers__name">Военнослужащим, сотрудникам здравоохранения, образования и защиты правопорядка</span>
                    <span class="offers__desc">Скидка от 6 000 рублей на процедуру банкротства</span>
                  </div>
                </div>
                <div class="offers__item">
                  <div class="offers__foto offers__foto--modal">
                    <div class="offers__image lazy" style="background-image: url(<?php echo esc_url( $offer['icon_8'] ); ?>);"></div>
                  </div>
                  <div class="offers__content offers__content--modal">
                    <span class="offers__name">Совместное банкротство</span>
                    <span class="offers__desc">Скидка от 10 000 рублей при совместном банкротстве двух граждан</span>
                  </div>
                </div>

              </div>
            </div>
            <div class="offers__btn-wrap">
              <button class="btn btn--services" data-btn="SMS-7 Льготы и специальные предложения" id="poluchenie-lgoty-modal" data-sms="9" data-thanks="4">Оставьте заявку на получение льготы</button>
              <div class="modal-content">
                <div class="mod-content__title">Получите свою льготу или специальное предложение</div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="modal__wrap modal__wrap--press-kit hidden">
          <div class="modal__inner modal__inner--press-kit">
            <button class="no-btn modal__close">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
              </svg>
            </button>
            <div class="modal__title modal__title--big modal__title--press-kit">Пресс-кит</div>
            <div class="press-block">
              <p class="press-block__text press-block__text--first">Компания «Финансово-правовой Альянс» занимает активную публичную позицию. Наши юристы регулярно пишут аналитические, информационные и практические статьи для ведущих СМИ Петербурга, Москвы и других регионов, делятся экспертными комментариями и дают интервью.</p>
              <div class="press-block__title">О компании</div>
              <p class="press-block__text">«Финансово-правовой Альянс» – компания, специализирующаяся исключительно на банкротстве физических лиц и индивидуальных предпринимателей. Мы по праву можем назвать себя первооткрывателями сферы банкротства в Петербурге — первые дела по банкротству юридических лиц и индивидуальных предпринимателей мы взяли в работу ещё в 2010 году. В 2015 году в портфеле наших услуг появилось банкротство физических лиц. На сегодня у нас более 10 тысяч клиентов одновременно в работе и ни одного проигранного дела.
                <br>
                <br> В области банкротства мы охватываем весь спектр необходимых компетенций — юридических и экономических. В нашей компании работают более 200 профессионалов в области банкротства. Масштаб компании позволяет нам работать над процедурами банкротств любой сложности: с большими сумма долга, подозрительными сделками, ценным имуществом, валютной ипотекой, единственным жильём и многим другим.</p>
              <div class="press-block__title">Ключевые спикеры</div>
              <ul class="press-block__lst">
                <li class="press-block__item">
                  <div class="press-block__foto">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/experts/5.png" alt="Фото специалиста" loading="lazy">
                  </div>
                  <div class="press-block__content">
                    <span class="press-block__name">Сорокин Алексей Евгеньевич</span>
                    <span class="press-block__post">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</span>
                  </div>
                </li>
                <li class="press-block__item">
                  <div class="press-block__foto">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/experts/6.png" alt="Фото специалиста" loading="lazy">
                  </div>
                  <div class="press-block__content">
                    <span class="press-block__name">Боднар Евгения Ивановна</span>
                    <span class="press-block__post">Руководитель отдела сопровождения клиентов по кредитам и долгам</span>
                  </div>
                </li>
                <li class="press-block__item">
                  <div class="press-block__foto">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/experts/3.png" alt="Фото специалиста" loading="lazy">
                  </div>
                  <div class="press-block__content">
                    <span class="press-block__name">Головин Алексей Юрьевич</span>
                    <span class="press-block__post">Адвокат в компании «Финансово-правовой Альянс»</span>
                  </div>
                </li>
              </ul>
              <div class="press-block__title">Контакты пресс‑службы</div>
              <p class="press-block__text">Мы всегда готовы к сотрудничеству с представителями средств массовой информации. Пресс-служба компании ответит на все интересующие Вас вопросы о банкротстве и работе «Финансово-правового Альянса», подготовит комментарии о событиях в юридической сфере, а также окажет помощь в поиске необходимой информации или организации интервью с нашими руководителями и ведущими юристами. </p>
              <div class="press-block__footer">
                <div class="press-block__post press-block__post--small">С уважением, специалист по&nbsp;связям с общественностью Маркелова Юлия</div>
                <div class="press-block__phone">+7 (952) 266-69-63</div>
                <a class="press-block__mail" href="mailto:markelova.yulia@fpa.ru">markelova.yulia@fpa.ru</a>
              </div>
              <a class="btn btn--download" href="<?= get_template_directory_uri() ?>/assets/img/fpa_press-kit_2022.pdf" download>
                <span class="btn__download">
                  <svg>
                    <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#download"></use>
                  </svg>
                </span>Скачать PDF-версию
              </a>
            </div>
          </div>
        </div>
        
        <div class="modal__wrap modal__wrap--all hidden">
          <button class="no-btn modal__close">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
            </svg>
          </button>
        </div>
      </div>
    </div>
    
    <div class="popup__cnt hidden">
        <div class="popup__overlay">
            
            <?php 
                $popup_year_arr = ['01' => 'января', '02' => 'февраля', '03' => 'марта', '04' => 'апреля', '05' => 'мая', '06' => 'июня', '07' => 'июля', '08' => 'августа', '09' => 'сентября', '10' => 'октября', '11' => 'ноября', '12' => 'декабря'];
                $popup_year_date = get_field('timer', 374, false);
                $popup_year_date = new DateTime($popup_year_date);
                $popup_year_month = $popup_year_date->format('m');
            ?>

            <!-- Получить консультацию бесплатно в Telegram -->
            <div class="popup-item__cnt consultation-popup__cnt consultation-telegram hidden">
                <div class="consultation-wrapper">
                    <button class="popup__close">
                        <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                    </button>
                    <div>Для того чтобы получить ссылку в SMS введите пожалуйста ниже ваше имя и номер телефона</div>
                    <div class="form_cnt">
                        <?php echo do_shortcode("[contact-form-7 id='22663' title='Бестселлер 2022 г. - Получить книгу бесплатно']"); ?>
                        <div class="politics">
                            <span class="politics__icon">
                                <svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#shild"></use></svg>
                            </span>
                            <p class="politics__text">Мы гарантируем безопасность и сохранность Ваших данных. Нажимая на кнопку, вы даете согласие на обработку своих персональных данных в соответствии с <a href="https://fpa.ru/politika/">«Политикой конфиденциальности»</a></p>
                        </div>
                    </div>
                    <div class="success_message hidden">
                        <svg width="51" height="38" viewBox="0 0 51 38" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.58331 18.9997L19.7708 35.6663L48.4166 2.33301" stroke="#17CC5F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <button class="btn close_popup_success">Вернуться на главную</button>

                    </div>
                </div>
            </div>
            <!-- Получить консультацию бесплатно в Telegram -->

            <!-- 1 тест /bankruptcy8cost/ -->
            <div class="popup-item__cnt bankruptcy8cost__cnt bankruptcy8cost__number-1 hidden" data-form-name="SMS-14 Пройдите тест и узнайте, вправе ли Вы списать все Ваши долги с 100% гарантией результата через МФЦ СПб по акции до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?>" data-form-sms="19" data-form-time="1" data-form-title="Пройдите тест и узнайте, вправе ли Вы списать все Ваши долги с 100% гарантией результата через МФЦ СПб по акции до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?> <?php echo date ( 'Y' ) ; ?> г. !">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                 <?php echo do_shortcode( "[quiz_for_articles id='4369' title='Ответив на <span class=\"text-accent\">4 вопросов</span> онлайн-теста, вы&nbsp;узнаете, вправе ли&nbsp;вы&nbsp;списать все&nbsp;ваши долги cо&nbsp;<span class=\"text-accent\">100% гарантией результата через МФЦ</span> СПб по&nbsp;акции <span class=\"text-accent text-nowrap\">до&nbsp;" . $popup_year_date->format('j') . "&nbsp;" . $popup_year_arr[$popup_year_month] . "&nbsp;" . date ( 'Y' ) . "&nbsp;г.</span>']" ); ?>
            </div>
            <!-- 1 тест /bankruptcy8cost/ -->
            
            <!-- 2 тест /bankruptcy8cost/ -->
            <div class="popup-item__cnt  bankruptcy8cost__cnt  bankruptcy8cost__number-2 hidden color_scheme_blue" data-form-name="SMS-14 Пройдите тест и узнайте, вправе ли Вы списать все Ваши долги с 100% гарантией результата через МФЦ СПб по акции до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?>" data-form-sms="19" data-form-time="1" data-form-title="Пройдите тест и узнайте, вправе ли Вы списать все Ваши долги с 100% гарантией результата через МФЦ СПб по акции до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?> <?php echo date ( 'Y' ) ; ?> г. !">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <div class="steps__cnt hidden">
                    <div class="calculation__header">
  		                <div class="calculation__title-head">Ответив на <span class=\"text-accent\">4 вопросов</span> онлайн-теста, вы&nbsp;узнаете, вправе ли&nbsp;вы&nbsp;списать все&nbsp;ваши долги cо&nbsp;<span class=\"text-accent\">100% гарантией результата через МФЦ</span> СПб по&nbsp;акции <span class=\"text-accent text-nowrap\">до&nbsp;" . $popup_year_date->format('j') . "&nbsp;" . $popup_year_arr[$popup_year_month] . "&nbsp;" . date ( 'Y' ) . "&nbsp;г.</span></div>
  		            </div>
                    <div class="h3 hiiden">
                        <span class="message_1">Для завершения осталось заполнить ваши данные</span>
                        <span class="message_2 hidden">Первый шаг сделан! Осталось ответить на 9 вопросов!</span>
                        <span class="message_3 hidden">Осталось 8 вопросов</span>
                        <span class="message_4 hidden">Осталось 7 вопросов</span>
                        <span class="message_5 hidden">Осталось 6 вопросов</span>
                        <span class="message_6 hidden">Вы на полпути к избавлению от всех долгов!</span>
                        <span class="message_7 hidden">Осталось 4 вопроса</span>
                        <span class="message_8 hidden">Осталось 3 вопроса</span>
                        <span class="message_9 hidden">Осталось 2 вопроса</span>
                        <span class="message_10 hidden">Вы почти у цели!</span>
                        <span class="message_11 hidden">Прекрасно! Осталось получить результат теста:</span>
                    </div>
                    <div class="steps__wrap hidden" data-active-color="#5381F6" data-default-color="#D9D9D9" >
                        <svg width="722" height="12" viewBox="0 0 722 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path data-title="Начало жизни без долгов положено!" class="valid" d="M0 0H55.3915L60.1667 6L55.3915 12H0V6V0Z" fill="#5381F6"/>
                            <path data-title="Первый шаг сделан! Осталось ответить на 9 вопросов!" d="M60.167 0H115.559L120.334 6L115.559 12H60.167L64.9421 6L60.167 0Z" fill="#D9D9D9"/>
                            <path data-title="Осталось 8 вопросов" d="M120.333 0H175.725L180.5 6L175.725 12H120.333L125.108 6L120.333 0Z" fill="#D9D9D9"/>
                            <path data-title="Осталось 7 вопросов" d="M180.5 0H235.892L240.667 6L235.892 12H180.5L185.275 6L180.5 0Z" fill="#D9D9D9"/>
                            <path data-title="Осталось 6 вопросов" d="M240.667 0H296.059L300.834 6L296.059 12H240.667L245.442 6L240.667 0Z" fill="#D9D9D9"/>
                            <path data-title="Вы на полпути к избавлению от всех долгов!" d="M300.833 0H356.225L361 6L356.225 12H300.833L305.608 6L300.833 0Z" fill="#D9D9D9"/>
                            <path data-title="Осталось 4 вопроса" d="M361 0H416.392L421.167 6L416.392 12H361L365.775 6L361 0Z" fill="#D9D9D9"/>
                            <path data-title="Осталось 3 вопроса" d="M421.167 0H476.559L481.334 6L476.559 12H421.167L425.942 6L421.167 0Z" fill="#D9D9D9"/>
                            <path data-title="Осталось 2 вопроса" d="M481.333 0H536.725L541.5 6L536.725 12H481.333L486.108 6L481.333 0Z" fill="#D9D9D9"/>
                            <path data-title="Вы почти у цели!" d="M541.5 0H596.892L601.667 6L596.892 12H541.5L546.275 6L541.5 0Z" fill="#D9D9D9"/>
                            <path data-title="Прекрасно! Осталось получить результат теста:" d="M601.667 0H657.059L661.834 6L657.059 12H601.667L606.442 6L601.667 0Z" fill="#D9D9D9"/>
                            <path data-title="Прекрасно! Осталось получить результат теста:" class="valid" d="M661.833 0H722V6V12H661.833L666.362 6L661.833 0Z" fill="#D9D9D9"/>
                        </svg>
                    </div>
                </div>
                <?php echo do_shortcode( "[quiz_for_articles id='4369' title='Ответив на <span class=\"text-accent\">4 вопросов</span> онлайн-теста, вы&nbsp;узнаете, вправе ли&nbsp;вы&nbsp;списать все&nbsp;ваши долги cо&nbsp;<span class=\"text-accent\">100% гарантией результата через МФЦ</span> СПб по&nbsp;акции <span class=\"text-accent text-nowrap\">до&nbsp;" . $popup_year_date->format('j') . "&nbsp;" . $popup_year_arr[$popup_year_month] . "&nbsp;" . date ( 'Y' ) . "&nbsp;г.</span>']" ); ?>
                <div class="situation_identical__cnt">
                    <span class="hidden">Ваша ситуация идентична <span><?=random_int(40, 80); ?>%</span> клиентов</span>
                </div>
            </div>
            <!-- 2 тест /bankruptcy8cost/ -->
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <div class="popup-item__cnt calculator__cnt hidden" data-form-name="SMS-27 Спишем ваши долги за 2 000 ₽ в месяц" data-form-sms="2" data-form-time="1" data-form-title="Банкротство за 2000 рублей в месяц в одной из крупнейших юридических фирм с гарантией списания в договоре">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <?php echo do_shortcode( '[quiz_for_articles id="4332" title="Онлайн-калькулятор"]' ); ?>
                <div class="additional_form mobile hidden">
                    <div class="calculation-v2 calculation--inpost">
                        <div class="calculation__header">
                            <div class="calculation__title-head">Онлайн-калькулятор</div>
                        </div>
	                    <div class="calculation__wrap calculation__wrap--inpost">
		                    <div class="calculation__inner calculation__inner--inpost">
                                <div class="calculation__tab_new hidden">
                                    <?php echo do_shortcode( '[contact-form-7 id="1110" title="Онлайн калькулятор на мобильных - Онлайн-калькулятор из navbar"]' ); ?>                    
                                    <div class="politics">
                                        <span class="politics__icon">
                                            <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#shild"></use></svg>
                                        </span>
                                        <p class="politics__text">Мы гарантируем безопасность и сохранность Ваших данных. Нажимая на кнопку, вы даете согласие на обработку своих персональных данных в соответствии с <a href="<?= get_permalink(123) ?>">«Политикой конфиденциальности»</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="popup-item__cnt popup-form-answer hidden">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <div class="calc-modal__question">Ответ придёт в СМС-сообщении в течение 90 секунд</div>
                <div class="calc-modal__check hidden">
                    <svg viewBox="0 0 51 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.584 25l17.188 16.667L48.418 8.334" stroke="#35D977" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" /></svg>
                </div>
                <div class="calc-modal__loader">
                    <div class="loader"></div>
                </div>
                <div class="calc-modal__block">
                    <div class="calc-modal__bg"></div>
                    <div class="calc-modal__inner">
                        <span>Читаем ответы...</span>
                        <span>Анализируем условия...</span>
                        <span>Подбираем варианты...</span>
                        <span>Рассчитываем стоимость...</span>
                        <span>Ожидаем ответа...</span>
                        <span>Составляем отчёт...</span>
                        <span>Расчет готов, введите номер для отправки...</span>
                    </div>
                </div>
                <?php echo do_shortcode( '[contact-form-7 id="2950" title="Онлайн калькулятор на десктопах (из navbar) - Ответ придёт в СМС-сообщении в течение 90 секунд" html_class="form modal__form form-test"]' ); ?>
                <div class="politics">
                    <span class="politics__icon">
                        <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#shild"></use></svg>
                    </span>
                    <p class="politics__text">Мы гарантируем безопасность и сохранность Ваших данных. Нажимая на кнопку, вы даете согласие на обработку своих персональных данных в соответствии с <a href="<?= get_permalink(123) ?>">«Политикой конфиденциальности»</a></p>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="calculator-navbar calculator-navbar--show hidden">
        <button class="calculator-navbar__close"></button>
        <div class="calculator-content__cnt">
            <div class="calculator-navbar__toggle">
                <div class="calculator-navbar__icon" style="background-image: url(https://fpa.ru/wp-content/themes/fpalaw/assets/img/icons/calc.svg)"></div>
                <div class="calculator-navbar__note">Онлайн<br> калькулятор</div>
            </div>
            <div class="calculator-navbar__wrap">
                <span class="calculator-title">Онлайн-калькулятор стоимости банкротства</span>
                <span class="calculator-title mobile">Онлайн<br> калькулятор</span>
                <span class="calculator-text">Рассчитайте минимальную стоимость банкротства с учётом ваших индивидуальных условий, включая все платежи в суде, АУ, юристу и другие</span>
                <span class="calculator-btn">Пройти расчёт онлайн</span>
                <span class="btn calculator-btn mobile">Расcчитать</span>
            </div>
        </div>
    </div>
    
  </div>
  
  <?php wp_footer(); ?>
  
</body>
</html>