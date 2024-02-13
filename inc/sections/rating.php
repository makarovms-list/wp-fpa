<?php
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
<div class="reviews__row--rating rating">
  <div class="rating__common">
    <p class="rating__text">Общий рейтинг
      <br> компании</p>
  </div>
  <ul class="rating__list">
    <li class="rating__item">
      <div class="rating__icon rating__icon--yandex">
        <svg>
          <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#Yandex"></use>
        </svg>
      </div>
      <div class="rating__stars stars">
        <div class="stars__body">
          <div class="stars__active"> </div>
          <div class="stars__items">
            <input class="stars__item" type="radio" value="1" name="rating">
            <input class="stars__item" type="radio" value="2" name="rating">
            <input class="stars__item" type="radio" value="3" name="rating">
            <input class="stars__item" type="radio" value="4" name="rating">
            <input class="stars__item" type="radio" value="5" name="rating">
          </div>
        </div>
        <div class="rating__value"><?=$rating_ya_rating_value; ?></div>
      </div>
      <a class="rating__reviews" href="https://yandex.ru/maps/org/finansovo_pravovoy_alyans/113571879971/?ll=30.321249%2C59.925689&source=wizbiz_new_text_single&z=14" target="_blank" title="Вы переходите на страницу отзывов о нашей компании на сайте Yandex">
        <span class="rating__reviews-sum"><?=$rating_ya_reviews_value; ?> </span>отзывов
      </a>
    </li>
    <li class="rating__item">
      <div class="rating__icon rating__icon--google">
        <svg>
          <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#Google"></use>
        </svg>
      </div>
      <div class="rating__stars stars">
        <div class="stars__body">
          <div class="stars__active"> </div>
          <div class="stars__items">
            <input class="stars__item" type="radio" value="1" name="rating">
            <input class="stars__item" type="radio" value="2" name="rating">
            <input class="stars__item" type="radio" value="3" name="rating">
            <input class="stars__item" type="radio" value="4" name="rating">
            <input class="stars__item" type="radio" value="5" name="rating">
          </div>
        </div>
        <div class="rating__value"><?=$rating_ga_rating_value; ?></div>
      </div>
      <a class="rating__reviews" href="https://www.google.com/maps/place/%D0%A4%D0%B8%D0%BD%D0%B0%D0%BD%D1%81%D0%BE%D0%B2%D0%BE-%D0%BF%D1%80%D0%B0%D0%B2%D0%BE%D0%B2%D0%BE%D0%B9+%D0%90%D0%BB%D1%8C%D1%8F%D0%BD%D1%81/@59.92517,30.3202503,17z/data=!4m7!3m6!1s0x4696310048b1ae0b:0xc755f7f056b43836!8m2!3d59.9250689!4d30.3221867!9m1!1b1?hl=ru-RU" target="_blank" title="Вы переходите на страницу отзывов о нашей компании на сайте Google">
        <span class="rating__reviews-sum"><?=$rating_ga_reviews_value; ?> </span>отзывов
      </a>
    </li>
    <li class="rating__item">
      <div class="rating__icon rating__icon--zoon">
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
      <div class="rating__stars stars">
        <div class="stars__body">
          <div class="stars__active"> </div>
          <div class="stars__items">
            <input class="stars__item" type="radio" value="1" name="rating">
            <input class="stars__item" type="radio" value="2" name="rating">
            <input class="stars__item" type="radio" value="3" name="rating">
            <input class="stars__item" type="radio" value="4" name="rating">
            <input class="stars__item" type="radio" value="5" name="rating">
          </div>
        </div>
        <div class="rating__value"><?=$rating_zoon_rating_value; ?></div>
      </div>
      <a class="rating__reviews" href="https://spb.zoon.ru/law/finansovo-pravovoj_alyans_na_ulitse_efimova_4a/" target="_blank" title="Вы переходите на страницу отзывов о нашей компании на сайте ZOON">
        <span class="rating__reviews-sum"><?=$rating_zoon_reviews_value; ?> </span>отзывов
      </a>
    </li>
    <li class="rating__item">
      <div class="rating__icon rating__icon--2gis">
        <svg>
          <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#2GIS"></use>
        </svg>
      </div>
      <div class="rating__stars stars">
        <div class="stars__body">
          <div class="stars__active"> </div>
          <div class="stars__items">
            <input class="stars__item" type="radio" value="1" name="rating">
            <input class="stars__item" type="radio" value="2" name="rating">
            <input class="stars__item" type="radio" value="3" name="rating">
            <input class="stars__item" type="radio" value="4" name="rating">
            <input class="stars__item" type="radio" value="5" name="rating">
          </div>
        </div>
        <div class="rating__value"><?=$rating_2gis_rating_value; ?></div>
      </div>
      <a class="rating__reviews" href="https://2gis.ru/spb/firm/70000001026575492" target="_blank" title="Вы переходите на страницу отзывов о нашей компании на сайте 2gis">
        <span class="rating__reviews-sum"><?=$rating_2gis_reviews_value; ?> </span>отзывов
      </a>
    </li>
    <li class="rating__item">
      <div class="rating__icon rating__icon--yell">
        <svg>
          <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#Yell"></use>
        </svg>
      </div>
      <div class="rating__stars stars">
        <div class="stars__body">
          <div class="stars__active"> </div>
          <div class="stars__items">
            <input class="stars__item" type="radio" value="1" name="rating">
            <input class="stars__item" type="radio" value="2" name="rating">
            <input class="stars__item" type="radio" value="3" name="rating">
            <input class="stars__item" type="radio" value="4" name="rating">
            <input class="stars__item" type="radio" value="5" name="rating">
          </div>
        </div>
        <div class="rating__value"><?=$rating_yell_rating_value; ?></div>
      </div>
      <a class="rating__reviews" href="https://www.yell.ru/spb/com/finansovo-pravovoj-alyans_11943907/" target="_blank" title="Вы переходите на страницу отзывов о нашей компании на сайте YELL">
        <span class="rating__reviews-sum"><?=$rating_yell_reviews_value; ?> </span>отзывов
      </a>
    </li>
    <li class="rating__item">
      <div class="rating__icon rating__icon--reviewer">
        <svg>
          <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#Reviewer"></use>
        </svg>
      </div>
      <div class="rating__stars stars">
        <div class="stars__body">
          <div class="stars__active"> </div>
          <div class="stars__items">
            <input class="stars__item" type="radio" value="1" name="rating">
            <input class="stars__item" type="radio" value="2" name="rating">
            <input class="stars__item" type="radio" value="3" name="rating">
            <input class="stars__item" type="radio" value="4" name="rating">
            <input class="stars__item" type="radio" value="5" name="rating">
          </div>
        </div>
        <div class="rating__value"><?=$rating_otzovik_rating_value; ?></div>
      </div>
      <a class="rating__reviews" href="https://otzovik.com/reviews/yuridicheskaya_kompaniya_finansovo-pravovoy_alyans_russia_sankt-peterburg/" target="_blank" title="Вы переходите на страницу отзывов о нашей компании на сайте Отзовик">
        <span class="rating__reviews-sum"><?=$rating_otzovik_reviews_value; ?> </span>отзывов
      </a>
    </li>
  </ul>
</div>