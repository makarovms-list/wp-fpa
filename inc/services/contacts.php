<section id="services_contacts" class="section contacts contacts--services">
  <div class="container">
    <div class="contacts__title">Контакты</div>
    <div class="contacts__wrap">
      <div class="contacts__block contacts__block--content">
        <div class="contacts__inner">
          <p class="contacts__subtitle"><?php echo the_field('district_and_city'); ?></p>
          <p class="contacts__text"><?php echo the_field('address'); ?></p>
          <ul class="contacts__metro-list">
            <li class="contacts__metro-item contacts__metro-item--purple">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#metro"></use>
              </svg>
              <span class="contacts__metro-text">Садовая</span>
            </li>
            <li class="contacts__metro-item contacts__metro-item--orange">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#metro"></use>
              </svg>
              <span class="contacts__metro-text">Спасская</span>
            </li>
            <li class="contacts__metro-item contacts__metro-item--blue">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#metro"></use>
              </svg>
              <span class="contacts__metro-text">Сенная</span>
            </li>
          </ul>
        </div>
        <!--
        <div class="contacts__inner contacts__inner--double">
          <p class="contacts__subtitle">Приемная в г. Санкт-Петербурге</p>
          <a class="link link--contact contacts__link link--telephone--cnt" href="tel:<? echo do_shortcode('[sc name="phone-link-1"]'); ?>"><? echo do_shortcode('[sc name="phone-1"]'); ?></a>
        </div>
        -->
        <div class="contacts__inner contacts__inner--double">
          <p class="contacts__subtitle">Звонки по РФ бесплатно</p>
          <a class="link link--contact contacts__link link--telephone--cnt" href="tel:<? echo do_shortcode('[sc name="phone-link-2"]'); ?>"><? echo do_shortcode('[sc name="phone-2"]'); ?></a>
        </div>
        <div class="contacts__inner contacts__inner--double">
          <p class="contacts__subtitle">E-mail:</p>
          <a class="link link--contact contacts__link link--mail--cnt" href="mailto:<? echo do_shortcode('[sc name="email"]'); ?>"><? echo do_shortcode('[sc name="email"]'); ?></a>
        </div>
        <div class="contacts__inner">
          <p class="contacts__subtitle">Наши социальные сети</p>
          <div class="contacts__social social">
            <ul class="social__list">
              <li class="social__item">
                <a class="social__link social__link--nobg" href="<? echo do_shortcode('[sc name="vk-page"]'); ?>" aria-label="Ссылка на vk.com" target="_blank" title="Вы переходите на нашу страницу сообщества в социальной сети Вконтакте" data-info="vk">
                  <svg>
                    <use xlink:href="#vk"></use>
                  </svg>
                </a>
              </li>
              <?php
              /*
              <li class="social__item">
                <a class="social__link social__link--nobg" href="<? echo do_shortcode('[sc name="instagram-page"]'); ?>" aria-label="Ссылка на instagram.com" target="_blank" title="Вы переходите на наш аккаунт сообщества в социальной сети Instagram" data-info="instagram">
                  <svg>
                    <use xlink:href="#instagram"></use>
                  </svg>
                </a>
              </li>
              */
              ?>
              <li class="social__item">
                <a class="social__link social__link--nobg" href="<? echo do_shortcode('[sc name="ok-page"]'); ?>" aria-label="Ссылка на ok.ru" target="_blank" title="Вы переходите на нашу страницу сообщества в социальной сети Одноклассники" data-info="ok">
                  <svg>
                    <use xlink:href="#ok"></use>
                  </svg>
                </a>
              </li>
              <li class="social__item">
                <a class="social__link social__link--nobg" href="<? echo do_shortcode('[sc name="youtube-page"]'); ?>" aria-label="Ссылка на youtube.com" target="_blank" title="Вы переходите на наш канал на видеохостинге YouTube" data-info="youtube">
                  <svg>
                    <use xlink:href="#youtube"></use>
                  </svg>
                </a>
              </li>
              <?php
              /*
              <li class="social__item">
                <a class="social__link social__link--nobg" href="<? echo do_shortcode('[sc name="facebook-page"]'); ?>" aria-label="Ссылка на facebook.com" target="_blank" title="Вы переходите на нашу страницу сообщества в социальной сети Facebook" data-info="facebook">
                  <svg>
                    <use xlink:href="#facebook"></use>
                  </svg>
                </a>
              </li>
              */
              ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="contacts__block contacts__block--map map">
        <div class="btns-map">
          <div class="btns-map__btn">
            <span class="btns-map__arrow"> </span>
            <span class="btns-map__text">Яндекс.Карты</span>
          </div>
          <ul class="btns-map__list">
            <li class="btns-map__item radio">
              <input class="radio__default" id="map-google" type="radio" name="map" data-name="map-google">
              <span class="radio__new"></span>
              <label class="radio__label" for="map-google">Google Maps</label>
            </li>
            <li class="btns-map__item radio active">
              <input class="radio__default" id="map-yandex" type="radio" name="map" data-name="map-yandex" checked>
              <span class="radio__new"></span>
              <label class="radio__label" for="map-yandex">Яндекс.Карты</label>
            </li>
<!--
            <li class="btns-map__item radio">
              <input class="radio__default" id="map-2gis" type="radio" name="map" data-name="map-2gis">
              <span class="radio__new"></span>
              <label class="radio__label" for="map-2gis">2gis</label>
            </li>
-->
          </ul>
        </div>
        <div class="map__wrap">
          <span class="map__loader">Карта загружается ...</span>
          <div class="map__block map__block--google map-google">
            <iframe id="script-google" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1999.4200657528636!2d30.32113760107826!3d59.92517159204843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4696310048b1ae0b%3A0xc755f7f056b43836!2z0KTQuNC90LDQvdGB0L7QstC-LdC_0YDQsNCy0L7QstC-0Lkg0JDQu9GM0Y_QvdGB!5e0!3m2!1sru!2sru!4v1615977938869!5m2!1sru!2sru" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="map__block map__block--yandex map-yandex">
            <script id="script-yandex" type="text/javascript" async data-src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5790a0c442e8a909e3688db64797afa78fb72bbd617bdb301962b2ea932407bd&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
          </div>
<!--
          <div class="map__block map__block--2gis map-2gis">
            <a class="dg-widget-link" href="http://2gis.ru/spb/firm/70000001026575492/center/30.32106399536133,59.925581708626154/zoom/15?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Санкт-Петербурга</a>
            <div class="dg-widget-link">
              <a href="http://2gis.ru/spb/center/30.321064,59.925776/zoom/15/routeTab/rsType/bus/to/30.321064,59.925776╎Финансово-правовой Альянс?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Финансово-правовой Альянс</a>
            </div>
            <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
            <script charset="utf-8">new DGWidgetLoader({"width":640,"height":480,"borderColor":"#a3a3a3","pos":{"lat":59.925581708626154,"lon":30.32106399536133,"zoom":15},"opt":{"city":"spb"},"org":[{"id":"70000001026575492"}]});</script>
            <noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
          </div>
-->
        </div>
      </div>
    </div>
  </div>
</section>