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




    #services_top-promo .top__block--main {
        padding-top: 100px;
    }
    .spoiler--promo {
        margin-top: 35px;
    }
    
    
    
    #services_top-promo .top__title 
        max-width: 680px!important;
        font-family: Inter;
        font-size: 44px;
        font-weight: 700;
        line-height: 59px;
        letter-spacing: 0em;
    }




    #services_top-promo .top__image {
        width: 800px;
    }
    #services_top-promo .top__figcaption {
        bottom: 85px;
        left: 35%;
    }
    #services_top-promo .container {
        position: relative;
    }
    #services_top-promo .bulets {
        position: absolute;
        bottom: -200px;
        z-index: 2;
        max-width: calc(100% - 50px);
        width: 100%;
        /*box-sizing: content-box;*/
        left: 25px;
    }
    .section--services {
        padding-top: 200px;
    }
    #services_top-promo .bulets-cnt .bulets-item {
        box-shadow: 0px 14px 34px 0px #001D681F;
        border: none!important;
    }
    #services_top-promo .bulets-cnt .bulets-item .content-cnt .title {
        font-size: 17px;
        line-height: 22px;
    }
    .section--services {
        padding-top: 240px;
    }
    #services_top-promo .bulets-cnt {
        grid-column-gap: 10px!important;
        grid-row-gap: 10px!important;
    }
    
    #services_top-promo .top__title {
        font-family: Inter;
        font-size: 44px;
        font-weight: 700;
        line-height: 59px;
        letter-spacing: 0em;
        text-align: left;   
        max-width: 700px!important;
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
    #services_top-promo .bulets.mobile .bulets-cnt {
        display: block;
    }
    #services_top-promo .bulets.mobile .bulets-cnt .bulets-item {
        padding: 34px 26px;
    }
    #services_top-promo .bulets.mobile .bulets-cnt .bulets-item .content-cnt .title {
        font-size: 15px;
        line-height: 19px;
        letter-spacing: 0.01em;
        margin-bottom: 8px;
    }
    #services_top-promo .bulets.mobile .bulets-cnt .bulets-item .content-cnt .subtitle {
        font-size: 13px;
        font-weight: 500;
        line-height: 17px;
        letter-spacing: 0.01em;
    }

    #services_top-promo .bulets.mobile .bulets-cnt .bulets-item .image-cnt img {
        padding-bottom: 24px;
    }
    #services_top-promo .bulets.mobile .bulets-cnt .bulets-item .content-cnt {
        margin-top: 16px;
    }
    #services_top-promo .bulets.mobile .bulets-cnt .bulets-item {
        min-height: 190px;
        box-sizing: border-box;
    }
    #services_top-promo .bulets.mobile .bulets-cnt .bulets-item {
        min-height: 192px;
        box-sizing: border-box;
        max-width: 215px;
        margin-right: 5px!important;
        max-width: 152px;
    }
    #services_top-promo .bulets.mobile .bulets-cnt .bulets-item .content-cnt .stars-new-cnt svg {
        width: 11px;
        height: 11px;
    }
    #services_top-promo .bulets-cnt .bulets-item .content-cnt .subtitle button {
        margin-bottom: -4px;
        padding-left: 4px;
        padding-right: 0px;
    }
    .rbk-info-popup {
        padding: 0;
    }
    .rbk-info-popup .content {
        padding: 24px 24px 15px;
        border-bottom: 1px solid #EDEDED;
    }
    .rbk-info-popup .content p {
        font-family: Inter;
        font-size: 14px;
        font-weight: 500;
        line-height: 21px;
        letter-spacing: 0em;
        text-align: left;
    }
    .rbk-info-popup .close button {
        font-family: Inter;
        font-size: 15px;
        font-weight: 600;
        line-height: 19px;
        letter-spacing: 0.01em;
        text-align: center;
        width: 100%;
        padding: 30px 0;
        border: none;
        background: transparent;
        cursor: pointer;
    }

    .spoiler__category--promo {
        color: #404040;
    }

    #services_top-promo figure.top__figure {
        right: -520px;
    }
    #services_top-promo figure.top__figure img {
        max-width: 780px;
    }

    .spoiler--promo .spoiler__text {
        font-family: Inter;
        font-size: 16px;
        font-weight: 500;
        line-height: 25px;
        letter-spacing: 0em;
        text-align: left;
    }
    #services_top-promo .bulets-cnt .bulets-item .content-cnt .stars-new-cnt svg {
        width: 14px!important;
        height: 14px!important;
    }
    #services_top-promo .bulets-cnt .bulets-item .image-cnt img {
        height: 60px;
        object-fit: contain;
    }


    section#services_top-promo {
        min-height: 933px;
        display: flex;
        width: 100%;
        align-items: flex-end;
    }
    section#services_top-promo .container {
        width: 100%;
    }
    section#services_top-promo .top__block--main .top__inner {
        min-height: 560px;
    }
    #services_top-promo .bulets-cnt .bulets-item .content-cnt .stars-new-cnt {
        flex-wrap: nowrap;
        display: flex;
    }


    @media (max-width: 1440px) {
        #services_top-promo .bulets {
            bottom: -160px;
        }
    }
    @media (max-width: 1200px) {
        #services_top-promo figure.top__figure {
            right: -400px;
        }
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
        #services_top-promo .mobile.subtitle {
            display: block!important;
        }
    }
        
    @media (max-width: 440px) {
        #services_top-promo .new-timer-text {
            padding: 0px 16px;
            max-width: 170px;
            height: 32px;
            align-items: center;
            grid-template-columns: 16px auto;
            grid-column-gap: 2px;
            grid-row-gap: 2px;
            margin-bottom: 20px;
        }
        #services_top-promo .new-timer-text svg {
            width: 16px;
            height: 12px;
        }
        #services_top-promo .new-timer-text span {
            font-size: 12px;
            line-height: 12px;
            font-weight: 500;
        }  
        #services_top-promo .top__title {
            max-width: 600px;
            font-family: Inter;
            font-size: 26px;
            font-weight: 700;
            line-height: 38px;
            letter-spacing: 0em;
            text-align: left;
        }
        #services_top-promo .top__title span.hide-text {
            display: none;
        }
        .header__line {
            padding: 20px 0;
            margin-bottom: -3px;
        }
        #services_top-promo .bulets.mobile .bulets-cnt .bulets-item {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }
        #services_top-promo .bulets.mobile .bulets-cnt .bulets-item .image-cnt img {
            /*height: 50px;*/
            object-fit: contain;
        }
        .spoiler__category--promo {
            font-family: Inter;
            font-size: 15px;
            font-weight: 700;
            line-height: 22px;
            letter-spacing: 0.01em;
        }
        .spoiler__block--promo::before {
            color: #404040;
        }
        .spoiler--promo .spoiler__text {
            font-family: Inter;
            font-size: 14px;
            font-weight: 500;
            line-height: 22px;
            letter-spacing: 0em;
            text-align: left;
            color: #505050;
        }
        .spoiler__content--promo {
            max-height: 320px;
        }
        .spoiler__head {
            padding-bottom: 12px;
        }
        .spoiler__link {
            font-family: Inter;
            font-size: 14px;
            font-weight: 500;
            line-height: 20px;
            letter-spacing: 0em;
            text-align: left;
        }
        .section--services {
            padding-top: 60px;
        }
        
        #services_top-promo .bulets.mobile .bulets-cnt .bulets-item {
            width: 152px!important;
        }
        #services_top-promo .top__title {
            max-width: 600px!important;
        }
        #services_top-promo .top__block--main {
            padding-top: 50px;
        }
        section#services_top-promo .top__block--main .top__inner {
            min-height: auto;
        }
        section#services_top-promo {
            min-height: auto;
        }
        section#services_top-promo .top__wrap {
            padding-bottom: 60px;
        }
        #services_top-promo .bulets {
            left: 0px;
        }
        .container {
            max-width: 100%;
            padding: 0 20px;
        }
    }
    
    
    
    
    
    
    
    
    
    
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
          
          
        
        <div class="top__timer timer" style="display: none!important;">
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
        
        <div class="new-timer-text">
            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.8599 7.2891C14.6628 7.02242 14.4229 6.7913 14.2001 6.56019C13.6259 6.02684 12.9746 5.64461 12.4261 5.08459C11.1492 3.78677 10.8664 1.64449 11.6805 0C10.8664 0.20445 10.1551 0.666686 9.54663 1.17337C7.32704 3.02231 6.45291 6.28462 7.49844 9.0847C7.53272 9.1736 7.56699 9.26249 7.56699 9.37805C7.56699 9.57361 7.43845 9.75139 7.26705 9.8225C7.06994 9.91139 6.86427 9.85806 6.70144 9.71583C6.65251 9.67387 6.61178 9.62257 6.58146 9.56472C5.61307 8.29357 5.45881 6.4713 6.11012 5.01348C4.67895 6.2224 3.8991 8.2669 4.0105 10.1958C4.06192 10.6403 4.11334 11.0848 4.25903 11.5292C4.37901 12.0626 4.61039 12.5959 4.86749 13.067C5.79303 14.6049 7.3956 15.7071 9.11814 15.9293C10.9521 16.1693 12.9146 15.8227 14.32 14.5071C15.8883 13.0315 16.4368 10.667 15.6312 8.64025L15.5198 8.40913C15.3399 8.00023 14.8599 7.2891 14.8599 7.2891ZM12.1519 12.8893C11.9119 13.1026 11.5177 13.3337 11.2092 13.4226C10.2494 13.7782 9.28954 13.2804 8.72393 12.6937C9.74374 12.4448 10.3522 11.6626 10.5322 10.8714C10.6779 10.1603 10.4036 9.57361 10.2922 8.88914C10.1894 8.23135 10.2065 7.67133 10.4379 7.05798C10.6007 7.39577 10.7721 7.73355 10.9778 8.00023C11.6377 8.88914 12.6746 9.28026 12.8974 10.4892C12.9317 10.6136 12.9489 10.7381 12.9489 10.8714C12.9746 11.6003 12.6661 12.4004 12.1519 12.8893Z" fill="#DE1747"/></svg>
            <span>Акция до 20 февраля</span>
        </div>
        
        
        
        <?php echo $top['title']; ?>
        <!--
        <div class="top__text">
          <?php echo $top['text']; ?>
        </div>
        -->
        
        <span class="deadline" hidden>до <?php echo $date->format('j') . ' ' . $arr[$month]; ?></span>
        
        
        
        <!--
        <div class="book-pages-wrap">
                    <div class="swiper book-pages">
                        <div class="swiper-wrapper" id="book-pages-light-gallery">
                            <div class="swiper-slide" data-src="/wp-content/themes/fpalaw/assets/img/landing/A4-4.jpg">
                                <a data-href="/wp-content/themes/fpalaw/assets/img/landing/A4-4.jpg" data-num="1">
                                    <img src="/wp-content/themes/fpalaw/assets/img/landing/A4-4.jpg" />
                                </a>
                            </div>
                            <div class="swiper-slide" data-src="/wp-content/themes/fpalaw/assets/img/landing/A4-5.jpg">
                                <a data-href="/wp-content/themes/fpalaw/assets/img/landing/A4-5.jpg" data-num="2">
                                    <img src="/wp-content/themes/fpalaw/assets/img/landing/A4-5.jpg" />
                                </a>
                            </div>
                            <div class="swiper-slide" data-src="/wp-content/themes/fpalaw/assets/img/landing/A4-6.jpg">
                                <a data-href="/wp-content/themes/fpalaw/assets/img/landing/A4-6.jpg" data-num="3">
                                    <img src="/wp-content/themes/fpalaw/assets/img/landing/A4-6.jpg" />
                                </a>
                            </div>
                            <div class="swiper-slide" data-src="/wp-content/themes/fpalaw/assets/img/landing/A4-7.jpg">
                                <a data-href="/wp-content/themes/fpalaw/assets/img/landing/A4-7.jpg" data-num="4">
                                    <img src="/wp-content/themes/fpalaw/assets/img/landing/A4-7.jpg" />
                                </a>
                            </div>
                            <div class="swiper-slide" data-src="/wp-content/themes/fpalaw/assets/img/landing/A4-8.jpg">
                                <a data-href="/wp-content/themes/fpalaw/assets/img/landing/A4-8.jpg" data-num="5">
                                    <img src="/wp-content/themes/fpalaw/assets/img/landing/A4-8.jpg" />
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
        -->
        
        
        
        
        <div class="bulets mobile">
            <div class="swiper bulets-cnt">
                <div class="swiper-wrapper">
                    <div class="bulets-item swiper-slide">
                        <div class="image-cnt">
                            <img src="/wp-content/themes/fpalaw/assets/img/services/services-top-rbk-mobile.svg" alt="РБК" />    
                        </div>
                        <div class="content-cnt">
                            <div class="title">
                                <p>Мы №1</p>
                            </div>
                            <div class="subtitle">
                                <p>
                                    <span>в России</span>
                                    <button class="attention">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.40012 8.99982H6.60012V5.39982H5.40012V8.99982ZM6.00012 4.19982C6.17012 4.19982 6.31272 4.14222 6.42792 4.02702C6.54312 3.91182 6.60052 3.76942 6.60012 3.59982C6.60012 3.42982 6.54252 3.28722 6.42732 3.17202C6.31212 3.05682 6.16972 2.99942 6.00012 2.99982C5.83012 2.99982 5.68752 3.05742 5.57232 3.17262C5.45712 3.28782 5.39972 3.43022 5.40012 3.59982C5.40012 3.76982 5.45772 3.91242 5.57292 4.02762C5.68812 4.14282 5.83052 4.20022 6.00012 4.19982ZM6.00012 11.9998C5.17012 11.9998 4.39012 11.8422 3.66012 11.527C2.93012 11.2118 2.29512 10.7844 1.75512 10.2448C1.21512 9.70482 0.787722 9.06982 0.472922 8.33982C0.158122 7.60982 0.00052207 6.82982 0.00012207 5.99982C0.00012207 5.16982 0.157722 4.38982 0.472922 3.65982C0.788122 2.92982 1.21552 2.29482 1.75512 1.75482C2.29512 1.21482 2.93012 0.787417 3.66012 0.472617C4.39012 0.157817 5.17012 0.000216894 6.00012 -0.000183105C6.83012 -0.000183105 7.61012 0.157417 8.34012 0.472617C9.07012 0.787817 9.70512 1.21522 10.2451 1.75482C10.7851 2.29482 11.2127 2.92982 11.5279 3.65982C11.8431 4.38982 12.0005 5.16982 12.0001 5.99982C12.0001 6.82982 11.8425 7.60982 11.5273 8.33982C11.2121 9.06982 10.7847 9.70482 10.2451 10.2448C9.70512 10.7848 9.07012 11.2124 8.34012 11.5276C7.61012 11.8428 6.83012 12.0002 6.00012 11.9998ZM6.00012 10.7998C7.34012 10.7998 8.47512 10.3348 9.40512 9.40482C10.3351 8.47482 10.8001 7.33982 10.8001 5.99982C10.8001 4.65982 10.3351 3.52482 9.40512 2.59482C8.47512 1.66482 7.34012 1.19982 6.00012 1.19982C4.66012 1.19982 3.52512 1.66482 2.59512 2.59482C1.66512 3.52482 1.20012 4.65982 1.20012 5.99982C1.20012 7.33982 1.66512 8.47482 2.59512 9.40482C3.52512 10.3348 4.66012 10.7998 6.00012 10.7998Z" fill="#717B97"/></svg>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bulets-item swiper-slide">
                        <div class="image-cnt">
                            <img src="/wp-content/themes/fpalaw/assets/img/services/services-top-yandex-mobile.svg" alt="Яндекс" />    
                        </div>
                        <div class="content-cnt">
                            <div class="title">
                                <p>
                                    <span class="bold">5.0</span>
                                    <span class="stars-new-cnt">
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                    </span>
                                </p>
                            </div>
                            <div class="subtitle">634 отзыва</div>
                        </div>
                    </div>
                    <div class="bulets-item swiper-slide">
                        <div class="image-cnt">
                            <img src="/wp-content/themes/fpalaw/assets/img/services/services-top-youtube-mobile.svg" alt="YouTube" />    
                        </div>
                        <div class="content-cnt">
                            <div class="title">628</div>
                            <div class="subtitle">Видеоотзывов</div>
                        </div>
                    </div>
                    <div class="bulets-item swiper-slide">
                        <div class="image-cnt">
                            <img src="/wp-content/themes/fpalaw/assets/img/services/services-top-2gis-mobile.svg" alt="2GIS" />    
                        </div>
                        <div class="content-cnt">
                            <div class="title">
                                <p>
                                    <span class="bold">5.0</span>
                                    <span class="stars-new-cnt">
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                    </span>
                                </p>
                            </div>
                            <div class="subtitle">466 отзывов</div>
                        </div>
                    </div>
                    <div class="bulets-item swiper-slide">
                        <div class="image-cnt">
                            <img src="/wp-content/themes/fpalaw/assets/img/services/services-top-zoon-mobile.svg" alt="ZOON" />    
                        </div>
                        <div class="content-cnt">
                            <div class="title">
                                <p>
                                    <span class="bold">4.8</span>
                                    <span class="stars-new-cnt">
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_10613_36269)"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.50918 4.96511L4.96501 4.46407L6.51039 1.33324C6.55509 1.24253 6.62429 1.16614 6.71016 1.11273C6.79603 1.05932 6.89514 1.03101 6.99626 1.03101C7.09739 1.03101 7.1965 1.05932 7.28237 1.11273C7.36824 1.16614 7.43744 1.24253 7.48214 1.33324V10.9692L6.99951 10.7149L3.90876 12.3399C3.82381 12.3846 3.7285 12.4059 3.6326 12.4017C3.53669 12.3975 3.44363 12.3678 3.36295 12.3158C3.28226 12.2638 3.21686 12.1913 3.17343 12.1056C3.12999 12.02 3.11009 11.9244 3.11576 11.8286L3.12281 11.769L3.71322 8.3267L1.20964 5.88974C1.14086 5.82296 1.09103 5.73912 1.06525 5.64679C1.03946 5.55445 1.03865 5.45693 1.06288 5.36417C1.08712 5.27142 1.13553 5.18676 1.20319 5.11884C1.27085 5.05092 1.35532 5.00217 1.44797 4.97757L1.50918 4.96511Z" fill="#FFCC00"/><path d="M5.03688 4.95914L5.29711 4.92141L5.41349 4.68562L6.95887 1.55479L6.95901 1.5545C6.96245 1.54752 6.96777 1.54165 6.97438 1.53754C6.98098 1.53343 6.98861 1.53125 6.99639 1.53125C7.00417 1.53125 7.01179 1.53343 7.01839 1.53754C7.025 1.54165 7.03032 1.54752 7.03376 1.5545L7.03388 1.55473L8.57871 4.68556L8.69506 4.92136L8.95528 4.95913L12.4111 5.46072L12.4113 5.46074C12.4186 5.46179 12.4254 5.46476 12.4312 5.46934L12.7421 5.07776L12.4312 5.46934C12.437 5.47392 12.4414 5.47995 12.4441 5.48681L12.9098 5.30484L12.4441 5.48681C12.4468 5.49367 12.4476 5.50112 12.4465 5.5084L12.4536 5.50951L12.4465 5.5084C12.4457 5.5135 12.4439 5.51838 12.4414 5.52282L12.4247 5.54098L9.93017 7.96862L9.74157 8.15216L9.7861 8.41154L10.3771 11.8538L10.3771 11.854C10.3783 11.8613 10.3776 11.8688 10.375 11.8757C10.3724 11.8826 10.3681 11.8887 10.3623 11.8934C10.3566 11.8981 10.3497 11.9011 10.3424 11.9023C10.3371 11.9031 10.3317 11.9029 10.3266 11.9017L10.3045 11.8915L7.23273 10.2728L6.9999 10.1501L6.76696 10.2726L3.67621 11.8976L3.67601 11.8977C3.66948 11.9011 3.66215 11.9028 3.65477 11.9024C3.64739 11.9021 3.64023 11.8998 3.63403 11.8958C3.62782 11.8918 3.62279 11.8863 3.61945 11.8797C3.61707 11.875 3.61561 11.8699 3.61512 11.8647L3.61794 11.8409L4.20615 8.41147L4.25062 8.15216L4.0621 7.96865L1.55852 5.53169L1.55805 5.53125C1.55276 5.52611 1.54893 5.51966 1.54695 5.51256C1.54496 5.50545 1.5449 5.49795 1.54676 5.49082C1.54863 5.48368 1.55235 5.47717 1.55756 5.47194C1.56125 5.46824 1.5656 5.46527 1.57036 5.46318L1.59511 5.45815L5.03688 4.95914Z" stroke="#FFCC00"/></g><defs><clipPath id="clip0_10613_36269"><rect width="13" height="13" fill="white" transform="translate(0.5 0.488281)"/></clipPath></defs></svg>
                                        </span>
                                    </span>
                                </p>
                            </div>
                            <div class="subtitle">934 отзыва</div>
                        </div>
                    </div>
                    <div class="bulets-item swiper-slide">
                        <div class="image-cnt">
                            <img src="/wp-content/themes/fpalaw/assets/img/services/services-top-rbk-mobile.svg" alt="РБК" />    
                        </div>
                        <div class="content-cnt">
                            <div class="title">
                                <p>Мы №1</p>
                            </div>
                            <div class="subtitle">
                                <p>
                                    <span>в России</span>
                                    <button class="attention">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.40012 8.99982H6.60012V5.39982H5.40012V8.99982ZM6.00012 4.19982C6.17012 4.19982 6.31272 4.14222 6.42792 4.02702C6.54312 3.91182 6.60052 3.76942 6.60012 3.59982C6.60012 3.42982 6.54252 3.28722 6.42732 3.17202C6.31212 3.05682 6.16972 2.99942 6.00012 2.99982C5.83012 2.99982 5.68752 3.05742 5.57232 3.17262C5.45712 3.28782 5.39972 3.43022 5.40012 3.59982C5.40012 3.76982 5.45772 3.91242 5.57292 4.02762C5.68812 4.14282 5.83052 4.20022 6.00012 4.19982ZM6.00012 11.9998C5.17012 11.9998 4.39012 11.8422 3.66012 11.527C2.93012 11.2118 2.29512 10.7844 1.75512 10.2448C1.21512 9.70482 0.787722 9.06982 0.472922 8.33982C0.158122 7.60982 0.00052207 6.82982 0.00012207 5.99982C0.00012207 5.16982 0.157722 4.38982 0.472922 3.65982C0.788122 2.92982 1.21552 2.29482 1.75512 1.75482C2.29512 1.21482 2.93012 0.787417 3.66012 0.472617C4.39012 0.157817 5.17012 0.000216894 6.00012 -0.000183105C6.83012 -0.000183105 7.61012 0.157417 8.34012 0.472617C9.07012 0.787817 9.70512 1.21522 10.2451 1.75482C10.7851 2.29482 11.2127 2.92982 11.5279 3.65982C11.8431 4.38982 12.0005 5.16982 12.0001 5.99982C12.0001 6.82982 11.8425 7.60982 11.5273 8.33982C11.2121 9.06982 10.7847 9.70482 10.2451 10.2448C9.70512 10.7848 9.07012 11.2124 8.34012 11.5276C7.61012 11.8428 6.83012 12.0002 6.00012 11.9998ZM6.00012 10.7998C7.34012 10.7998 8.47512 10.3348 9.40512 9.40482C10.3351 8.47482 10.8001 7.33982 10.8001 5.99982C10.8001 4.65982 10.3351 3.52482 9.40512 2.59482C8.47512 1.66482 7.34012 1.19982 6.00012 1.19982C4.66012 1.19982 3.52512 1.66482 2.59512 2.59482C1.66512 3.52482 1.20012 4.65982 1.20012 5.99982C1.20012 7.33982 1.66512 8.47482 2.59512 9.40482C3.52512 10.3348 4.66012 10.7998 6.00012 10.7998Z" fill="#717B97"/></svg>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bulets-item swiper-slide">
                        <div class="image-cnt">
                            <img src="/wp-content/themes/fpalaw/assets/img/services/services-top-yandex-mobile.svg" alt="Яндекс" />    
                        </div>
                        <div class="content-cnt">
                            <div class="title">
                                <p>
                                    <span class="bold">5.0</span>
                                    <span class="stars-new-cnt">
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                    </span>
                                </p>
                            </div>
                            <div class="subtitle">634 отзыва</div>
                        </div>
                    </div>
                    <div class="bulets-item swiper-slide">
                        <div class="image-cnt">
                            <img src="/wp-content/themes/fpalaw/assets/img/services/services-top-youtube-mobile.svg" alt="YouTube" />    
                        </div>
                        <div class="content-cnt">
                            <div class="title">628</div>
                            <div class="subtitle">Видеоотзывов</div>
                        </div>
                    </div>
                    <div class="bulets-item swiper-slide">
                        <div class="image-cnt">
                            <img src="/wp-content/themes/fpalaw/assets/img/services/services-top-2gis-mobile.svg" alt="2GIS" />    
                        </div>
                        <div class="content-cnt">
                            <div class="title">
                                <p>
                                    <span class="bold">5.0</span>
                                    <span class="stars-new-cnt">
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                    </span>
                                </p>
                            </div>
                            <div class="subtitle">466 отзывов</div>
                        </div>
                    </div>
                    <div class="bulets-item swiper-slide">
                        <div class="image-cnt">
                            <img src="/wp-content/themes/fpalaw/assets/img/services/services-top-zoon-mobile.svg" alt="ZOON" />    
                        </div>
                        <div class="content-cnt">
                            <div class="title">
                                <p>
                                    <span class="bold">4.8</span>
                                    <span class="stars-new-cnt">
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_10613_36269)"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.50918 4.96511L4.96501 4.46407L6.51039 1.33324C6.55509 1.24253 6.62429 1.16614 6.71016 1.11273C6.79603 1.05932 6.89514 1.03101 6.99626 1.03101C7.09739 1.03101 7.1965 1.05932 7.28237 1.11273C7.36824 1.16614 7.43744 1.24253 7.48214 1.33324V10.9692L6.99951 10.7149L3.90876 12.3399C3.82381 12.3846 3.7285 12.4059 3.6326 12.4017C3.53669 12.3975 3.44363 12.3678 3.36295 12.3158C3.28226 12.2638 3.21686 12.1913 3.17343 12.1056C3.12999 12.02 3.11009 11.9244 3.11576 11.8286L3.12281 11.769L3.71322 8.3267L1.20964 5.88974C1.14086 5.82296 1.09103 5.73912 1.06525 5.64679C1.03946 5.55445 1.03865 5.45693 1.06288 5.36417C1.08712 5.27142 1.13553 5.18676 1.20319 5.11884C1.27085 5.05092 1.35532 5.00217 1.44797 4.97757L1.50918 4.96511Z" fill="#FFCC00"/><path d="M5.03688 4.95914L5.29711 4.92141L5.41349 4.68562L6.95887 1.55479L6.95901 1.5545C6.96245 1.54752 6.96777 1.54165 6.97438 1.53754C6.98098 1.53343 6.98861 1.53125 6.99639 1.53125C7.00417 1.53125 7.01179 1.53343 7.01839 1.53754C7.025 1.54165 7.03032 1.54752 7.03376 1.5545L7.03388 1.55473L8.57871 4.68556L8.69506 4.92136L8.95528 4.95913L12.4111 5.46072L12.4113 5.46074C12.4186 5.46179 12.4254 5.46476 12.4312 5.46934L12.7421 5.07776L12.4312 5.46934C12.437 5.47392 12.4414 5.47995 12.4441 5.48681L12.9098 5.30484L12.4441 5.48681C12.4468 5.49367 12.4476 5.50112 12.4465 5.5084L12.4536 5.50951L12.4465 5.5084C12.4457 5.5135 12.4439 5.51838 12.4414 5.52282L12.4247 5.54098L9.93017 7.96862L9.74157 8.15216L9.7861 8.41154L10.3771 11.8538L10.3771 11.854C10.3783 11.8613 10.3776 11.8688 10.375 11.8757C10.3724 11.8826 10.3681 11.8887 10.3623 11.8934C10.3566 11.8981 10.3497 11.9011 10.3424 11.9023C10.3371 11.9031 10.3317 11.9029 10.3266 11.9017L10.3045 11.8915L7.23273 10.2728L6.9999 10.1501L6.76696 10.2726L3.67621 11.8976L3.67601 11.8977C3.66948 11.9011 3.66215 11.9028 3.65477 11.9024C3.64739 11.9021 3.64023 11.8998 3.63403 11.8958C3.62782 11.8918 3.62279 11.8863 3.61945 11.8797C3.61707 11.875 3.61561 11.8699 3.61512 11.8647L3.61794 11.8409L4.20615 8.41147L4.25062 8.15216L4.0621 7.96865L1.55852 5.53169L1.55805 5.53125C1.55276 5.52611 1.54893 5.51966 1.54695 5.51256C1.54496 5.50545 1.5449 5.49795 1.54676 5.49082C1.54863 5.48368 1.55235 5.47717 1.55756 5.47194C1.56125 5.46824 1.5656 5.46527 1.57036 5.46318L1.59511 5.45815L5.03688 4.95914Z" stroke="#FFCC00"/></g><defs><clipPath id="clip0_10613_36269"><rect width="13" height="13" fill="white" transform="translate(0.5 0.488281)"/></clipPath></defs></svg>
                                        </span>
                                    </span>
                                </p>
                            </div>
                            <div class="subtitle">934 отзыва</div>
                        </div>
                    </div>
                    <div class="bulets-item swiper-slide">
                        <div class="image-cnt">
                            <img src="/wp-content/themes/fpalaw/assets/img/services/services-top-rbk-mobile.svg" alt="РБК" />    
                        </div>
                        <div class="content-cnt">
                            <div class="title">
                                <p>Мы №1</p>
                            </div>
                            <div class="subtitle">
                                <p>
                                    <span>в России</span>
                                    <button class="attention">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.40012 8.99982H6.60012V5.39982H5.40012V8.99982ZM6.00012 4.19982C6.17012 4.19982 6.31272 4.14222 6.42792 4.02702C6.54312 3.91182 6.60052 3.76942 6.60012 3.59982C6.60012 3.42982 6.54252 3.28722 6.42732 3.17202C6.31212 3.05682 6.16972 2.99942 6.00012 2.99982C5.83012 2.99982 5.68752 3.05742 5.57232 3.17262C5.45712 3.28782 5.39972 3.43022 5.40012 3.59982C5.40012 3.76982 5.45772 3.91242 5.57292 4.02762C5.68812 4.14282 5.83052 4.20022 6.00012 4.19982ZM6.00012 11.9998C5.17012 11.9998 4.39012 11.8422 3.66012 11.527C2.93012 11.2118 2.29512 10.7844 1.75512 10.2448C1.21512 9.70482 0.787722 9.06982 0.472922 8.33982C0.158122 7.60982 0.00052207 6.82982 0.00012207 5.99982C0.00012207 5.16982 0.157722 4.38982 0.472922 3.65982C0.788122 2.92982 1.21552 2.29482 1.75512 1.75482C2.29512 1.21482 2.93012 0.787417 3.66012 0.472617C4.39012 0.157817 5.17012 0.000216894 6.00012 -0.000183105C6.83012 -0.000183105 7.61012 0.157417 8.34012 0.472617C9.07012 0.787817 9.70512 1.21522 10.2451 1.75482C10.7851 2.29482 11.2127 2.92982 11.5279 3.65982C11.8431 4.38982 12.0005 5.16982 12.0001 5.99982C12.0001 6.82982 11.8425 7.60982 11.5273 8.33982C11.2121 9.06982 10.7847 9.70482 10.2451 10.2448C9.70512 10.7848 9.07012 11.2124 8.34012 11.5276C7.61012 11.8428 6.83012 12.0002 6.00012 11.9998ZM6.00012 10.7998C7.34012 10.7998 8.47512 10.3348 9.40512 9.40482C10.3351 8.47482 10.8001 7.33982 10.8001 5.99982C10.8001 4.65982 10.3351 3.52482 9.40512 2.59482C8.47512 1.66482 7.34012 1.19982 6.00012 1.19982C4.66012 1.19982 3.52512 1.66482 2.59512 2.59482C1.66512 3.52482 1.20012 4.65982 1.20012 5.99982C1.20012 7.33982 1.66512 8.47482 2.59512 9.40482C3.52512 10.3348 4.66012 10.7998 6.00012 10.7998Z" fill="#717B97"/></svg>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bulets-item swiper-slide">
                        <div class="image-cnt">
                            <img src="/wp-content/themes/fpalaw/assets/img/services/services-top-yandex-mobile.svg" alt="Яндекс" />    
                        </div>
                        <div class="content-cnt">
                            <div class="title">
                                <p>
                                    <span class="bold">5.0</span>
                                    <span class="stars-new-cnt">
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                    </span>
                                </p>
                            </div>
                            <div class="subtitle">634 отзыва</div>
                        </div>
                    </div>
                    <div class="bulets-item swiper-slide">
                        <div class="image-cnt">
                            <img src="/wp-content/themes/fpalaw/assets/img/services/services-top-youtube-mobile.svg" alt="YouTube" />    
                        </div>
                        <div class="content-cnt">
                            <div class="title">628</div>
                            <div class="subtitle">Видеоотзывов</div>
                        </div>
                    </div>
                    <div class="bulets-item swiper-slide">
                        <div class="image-cnt">
                            <img src="/wp-content/themes/fpalaw/assets/img/services/services-top-2gis-mobile.svg" alt="2GIS" />    
                        </div>
                        <div class="content-cnt">
                            <div class="title">
                                <p>
                                    <span class="bold">5.0</span>
                                    <span class="stars-new-cnt">
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                    </span>
                                </p>
                            </div>
                            <div class="subtitle">466 отзывов</div>
                        </div>
                    </div>
                    <div class="bulets-item swiper-slide">
                        <div class="image-cnt">
                            <img src="/wp-content/themes/fpalaw/assets/img/services/services-top-zoon-mobile.svg" alt="ZOON" />    
                        </div>
                        <div class="content-cnt">
                            <div class="title">
                                <p>
                                    <span class="bold">4.8</span>
                                    <span class="stars-new-cnt">
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                        </span>
                                        <span>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_10613_36269)"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.50918 4.96511L4.96501 4.46407L6.51039 1.33324C6.55509 1.24253 6.62429 1.16614 6.71016 1.11273C6.79603 1.05932 6.89514 1.03101 6.99626 1.03101C7.09739 1.03101 7.1965 1.05932 7.28237 1.11273C7.36824 1.16614 7.43744 1.24253 7.48214 1.33324V10.9692L6.99951 10.7149L3.90876 12.3399C3.82381 12.3846 3.7285 12.4059 3.6326 12.4017C3.53669 12.3975 3.44363 12.3678 3.36295 12.3158C3.28226 12.2638 3.21686 12.1913 3.17343 12.1056C3.12999 12.02 3.11009 11.9244 3.11576 11.8286L3.12281 11.769L3.71322 8.3267L1.20964 5.88974C1.14086 5.82296 1.09103 5.73912 1.06525 5.64679C1.03946 5.55445 1.03865 5.45693 1.06288 5.36417C1.08712 5.27142 1.13553 5.18676 1.20319 5.11884C1.27085 5.05092 1.35532 5.00217 1.44797 4.97757L1.50918 4.96511Z" fill="#FFCC00"/><path d="M5.03688 4.95914L5.29711 4.92141L5.41349 4.68562L6.95887 1.55479L6.95901 1.5545C6.96245 1.54752 6.96777 1.54165 6.97438 1.53754C6.98098 1.53343 6.98861 1.53125 6.99639 1.53125C7.00417 1.53125 7.01179 1.53343 7.01839 1.53754C7.025 1.54165 7.03032 1.54752 7.03376 1.5545L7.03388 1.55473L8.57871 4.68556L8.69506 4.92136L8.95528 4.95913L12.4111 5.46072L12.4113 5.46074C12.4186 5.46179 12.4254 5.46476 12.4312 5.46934L12.7421 5.07776L12.4312 5.46934C12.437 5.47392 12.4414 5.47995 12.4441 5.48681L12.9098 5.30484L12.4441 5.48681C12.4468 5.49367 12.4476 5.50112 12.4465 5.5084L12.4536 5.50951L12.4465 5.5084C12.4457 5.5135 12.4439 5.51838 12.4414 5.52282L12.4247 5.54098L9.93017 7.96862L9.74157 8.15216L9.7861 8.41154L10.3771 11.8538L10.3771 11.854C10.3783 11.8613 10.3776 11.8688 10.375 11.8757C10.3724 11.8826 10.3681 11.8887 10.3623 11.8934C10.3566 11.8981 10.3497 11.9011 10.3424 11.9023C10.3371 11.9031 10.3317 11.9029 10.3266 11.9017L10.3045 11.8915L7.23273 10.2728L6.9999 10.1501L6.76696 10.2726L3.67621 11.8976L3.67601 11.8977C3.66948 11.9011 3.66215 11.9028 3.65477 11.9024C3.64739 11.9021 3.64023 11.8998 3.63403 11.8958C3.62782 11.8918 3.62279 11.8863 3.61945 11.8797C3.61707 11.875 3.61561 11.8699 3.61512 11.8647L3.61794 11.8409L4.20615 8.41147L4.25062 8.15216L4.0621 7.96865L1.55852 5.53169L1.55805 5.53125C1.55276 5.52611 1.54893 5.51966 1.54695 5.51256C1.54496 5.50545 1.5449 5.49795 1.54676 5.49082C1.54863 5.48368 1.55235 5.47717 1.55756 5.47194C1.56125 5.46824 1.5656 5.46527 1.57036 5.46318L1.59511 5.45815L5.03688 4.95914Z" stroke="#FFCC00"/></g><defs><clipPath id="clip0_10613_36269"><rect width="13" height="13" fill="white" transform="translate(0.5 0.488281)"/></clipPath></defs></svg>
                                        </span>
                                    </span>
                                </p>
                            </div>
                            <div class="subtitle">934 отзыва</div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        
        
        
        <div class="mobile subtitle">Почему мы:</div>
        
        
        <div class="top__inner">
          <ul class="spoiler--promo">
            <li class="spoiler__block spoiler__block--promo">
              <div class="spoiler__head spoiler__head--promo">
                <div class="spoiler__category spoiler__category--promo">Мы крупнейшая компания по банкротству граждан в России</div>
                <div class="spoiler__btn spoiler__btn--promo">
                  <span class="spoiler__btn-arrow"></span>
                </div>
              </div>
              <div class="spoiler__content spoiler__content--promo" id="content-promo-1">
                <div class="spoiler__text">Обращаясь к нам, вы будете уверены, что «Финансово-правовой Альянс» — не компания-однодневка с несколькими сотрудниками. Мы — это четыре этажа офисов, более 223 профессиональных юристов в штате, восемь лет опыта работы в сфере банкротства и более 18 616 дел в производстве. В 2023 году мы ежедневно завершаем больше процедур по банкротству, чем некоторые наши конкуренты за целый месяц.</div>
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
            
            <!--
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
            -->
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
    
    
    
    <div class="bulets">
        <div class="bulets-cnt">
            <div class="bulets-item">
                <div class="image-cnt">
                    <img src="/wp-content/themes/fpalaw/assets/img/services/services-top-rbk.png" alt="РБК" />    
                </div>
                <div class="content-cnt">
                    <div class="title">
                        <p></p>Мы №1
                    </div>
                    <div class="subtitle">
                        <p>
                            <span>в России</span>
                            <button class="attention">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.40012 8.99982H6.60012V5.39982H5.40012V8.99982ZM6.00012 4.19982C6.17012 4.19982 6.31272 4.14222 6.42792 4.02702C6.54312 3.91182 6.60052 3.76942 6.60012 3.59982C6.60012 3.42982 6.54252 3.28722 6.42732 3.17202C6.31212 3.05682 6.16972 2.99942 6.00012 2.99982C5.83012 2.99982 5.68752 3.05742 5.57232 3.17262C5.45712 3.28782 5.39972 3.43022 5.40012 3.59982C5.40012 3.76982 5.45772 3.91242 5.57292 4.02762C5.68812 4.14282 5.83052 4.20022 6.00012 4.19982ZM6.00012 11.9998C5.17012 11.9998 4.39012 11.8422 3.66012 11.527C2.93012 11.2118 2.29512 10.7844 1.75512 10.2448C1.21512 9.70482 0.787722 9.06982 0.472922 8.33982C0.158122 7.60982 0.00052207 6.82982 0.00012207 5.99982C0.00012207 5.16982 0.157722 4.38982 0.472922 3.65982C0.788122 2.92982 1.21552 2.29482 1.75512 1.75482C2.29512 1.21482 2.93012 0.787417 3.66012 0.472617C4.39012 0.157817 5.17012 0.000216894 6.00012 -0.000183105C6.83012 -0.000183105 7.61012 0.157417 8.34012 0.472617C9.07012 0.787817 9.70512 1.21522 10.2451 1.75482C10.7851 2.29482 11.2127 2.92982 11.5279 3.65982C11.8431 4.38982 12.0005 5.16982 12.0001 5.99982C12.0001 6.82982 11.8425 7.60982 11.5273 8.33982C11.2121 9.06982 10.7847 9.70482 10.2451 10.2448C9.70512 10.7848 9.07012 11.2124 8.34012 11.5276C7.61012 11.8428 6.83012 12.0002 6.00012 11.9998ZM6.00012 10.7998C7.34012 10.7998 8.47512 10.3348 9.40512 9.40482C10.3351 8.47482 10.8001 7.33982 10.8001 5.99982C10.8001 4.65982 10.3351 3.52482 9.40512 2.59482C8.47512 1.66482 7.34012 1.19982 6.00012 1.19982C4.66012 1.19982 3.52512 1.66482 2.59512 2.59482C1.66512 3.52482 1.20012 4.65982 1.20012 5.99982C1.20012 7.33982 1.66512 8.47482 2.59512 9.40482C3.52512 10.3348 4.66012 10.7998 6.00012 10.7998Z" fill="#717B97"/></svg>
                            </button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="bulets-item">
                <div class="image-cnt">
                    <img src="/wp-content/themes/fpalaw/assets/img/services/services-top-yandex.png" alt="Яндекс" />    
                </div>
                <div class="content-cnt">
                    <div class="title">
                        <p>
                            <span class="bold">5.0</span>
                            <span class="stars-new-cnt">
                                <span>
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                </span>
                                <span>
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                </span>
                                <span>
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                </span>
                                <span>
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                </span>
                                <span>
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                </span>
                            </span>
                        </p>
                    </div>
                    <div class="subtitle">634 отзыва</div>
                </div>
            </div>
            <div class="bulets-item">
                <div class="image-cnt">
                    <img src="/wp-content/themes/fpalaw/assets/img/services/services-top-youtube.png" alt="YouTube" />    
                </div>
                <div class="content-cnt">
                    <div class="title">628</div>
                    <div class="subtitle">Видеоотзывов</div>
                </div>
            </div>
            <div class="bulets-item">
                <div class="image-cnt">
                    <img src="/wp-content/themes/fpalaw/assets/img/services/services-top-2gis.png" alt="2GIS" />    
                </div>
                <div class="content-cnt">
                    <div class="title">
                        <p>
                            <span class="bold">5.0</span>
                            <span class="stars-new-cnt">
                                <span>
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                </span>
                                <span>
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                </span>
                                <span>
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                </span>
                                <span>
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                </span>
                                <span>
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                </span>
                            </span>
                        </p>
                    </div>
                    <div class="subtitle">466 отзывов</div>
                </div>
            </div>
            <div class="bulets-item">
                <div class="image-cnt">
                    <img src="/wp-content/themes/fpalaw/assets/img/services/services-top-zoon-mobile.png" alt="ZOON" />    
                </div>
                <div class="content-cnt">
                    <div class="title">
                        <p>
                            <span class="bold">4.8</span>
                            <span class="stars-new-cnt">
                                <span>
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                </span>
                                <span>
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                </span>
                                <span>
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                </span>
                                <span>
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.4953 4.39334L1.24197 5.01001L1.16663 5.02534C1.05259 5.05562 0.948629 5.11562 0.865361 5.19921C0.782092 5.28281 0.722502 5.387 0.692674 5.50116C0.662847 5.61532 0.663851 5.73535 0.695584 5.84899C0.727318 5.96263 0.788644 6.06582 0.873299 6.14801L3.95463 9.14734L3.22797 13.384L3.2193 13.4573C3.21232 13.5753 3.23681 13.693 3.29027 13.7983C3.34372 13.9037 3.42422 13.993 3.52352 14.057C3.62282 14.121 3.73736 14.1575 3.8554 14.1627C3.97344 14.168 4.09074 14.1417 4.1953 14.0867L7.9993 12.0867L11.7946 14.0867L11.8613 14.1173C11.9713 14.1607 12.0909 14.174 12.2078 14.1558C12.3247 14.1377 12.4346 14.0888 12.5264 14.0142C12.6181 13.9395 12.6883 13.8418 12.7299 13.7311C12.7714 13.6204 12.7827 13.5006 12.7626 13.384L12.0353 9.14734L15.118 6.14734L15.17 6.09068C15.2442 5.99919 15.293 5.88965 15.3111 5.77321C15.3293 5.65677 15.3162 5.53759 15.2734 5.42783C15.2305 5.31807 15.1593 5.22163 15.067 5.14835C14.9747 5.07507 14.8646 5.02757 14.748 5.01068L10.4946 4.39334L8.5933 0.540009C8.53828 0.428366 8.45311 0.334353 8.34743 0.268612C8.24174 0.202872 8.11976 0.16803 7.9953 0.16803C7.87084 0.16803 7.74886 0.202872 7.64317 0.268612C7.53749 0.334353 7.45232 0.428366 7.3973 0.540009L5.4953 4.39334Z" fill="#FFCC00"/></svg>
                                </span>
                                <span>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_10613_36269)"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.50918 4.96511L4.96501 4.46407L6.51039 1.33324C6.55509 1.24253 6.62429 1.16614 6.71016 1.11273C6.79603 1.05932 6.89514 1.03101 6.99626 1.03101C7.09739 1.03101 7.1965 1.05932 7.28237 1.11273C7.36824 1.16614 7.43744 1.24253 7.48214 1.33324V10.9692L6.99951 10.7149L3.90876 12.3399C3.82381 12.3846 3.7285 12.4059 3.6326 12.4017C3.53669 12.3975 3.44363 12.3678 3.36295 12.3158C3.28226 12.2638 3.21686 12.1913 3.17343 12.1056C3.12999 12.02 3.11009 11.9244 3.11576 11.8286L3.12281 11.769L3.71322 8.3267L1.20964 5.88974C1.14086 5.82296 1.09103 5.73912 1.06525 5.64679C1.03946 5.55445 1.03865 5.45693 1.06288 5.36417C1.08712 5.27142 1.13553 5.18676 1.20319 5.11884C1.27085 5.05092 1.35532 5.00217 1.44797 4.97757L1.50918 4.96511Z" fill="#FFCC00"/><path d="M5.03688 4.95914L5.29711 4.92141L5.41349 4.68562L6.95887 1.55479L6.95901 1.5545C6.96245 1.54752 6.96777 1.54165 6.97438 1.53754C6.98098 1.53343 6.98861 1.53125 6.99639 1.53125C7.00417 1.53125 7.01179 1.53343 7.01839 1.53754C7.025 1.54165 7.03032 1.54752 7.03376 1.5545L7.03388 1.55473L8.57871 4.68556L8.69506 4.92136L8.95528 4.95913L12.4111 5.46072L12.4113 5.46074C12.4186 5.46179 12.4254 5.46476 12.4312 5.46934L12.7421 5.07776L12.4312 5.46934C12.437 5.47392 12.4414 5.47995 12.4441 5.48681L12.9098 5.30484L12.4441 5.48681C12.4468 5.49367 12.4476 5.50112 12.4465 5.5084L12.4536 5.50951L12.4465 5.5084C12.4457 5.5135 12.4439 5.51838 12.4414 5.52282L12.4247 5.54098L9.93017 7.96862L9.74157 8.15216L9.7861 8.41154L10.3771 11.8538L10.3771 11.854C10.3783 11.8613 10.3776 11.8688 10.375 11.8757C10.3724 11.8826 10.3681 11.8887 10.3623 11.8934C10.3566 11.8981 10.3497 11.9011 10.3424 11.9023C10.3371 11.9031 10.3317 11.9029 10.3266 11.9017L10.3045 11.8915L7.23273 10.2728L6.9999 10.1501L6.76696 10.2726L3.67621 11.8976L3.67601 11.8977C3.66948 11.9011 3.66215 11.9028 3.65477 11.9024C3.64739 11.9021 3.64023 11.8998 3.63403 11.8958C3.62782 11.8918 3.62279 11.8863 3.61945 11.8797C3.61707 11.875 3.61561 11.8699 3.61512 11.8647L3.61794 11.8409L4.20615 8.41147L4.25062 8.15216L4.0621 7.96865L1.55852 5.53169L1.55805 5.53125C1.55276 5.52611 1.54893 5.51966 1.54695 5.51256C1.54496 5.50545 1.5449 5.49795 1.54676 5.49082C1.54863 5.48368 1.55235 5.47717 1.55756 5.47194C1.56125 5.46824 1.5656 5.46527 1.57036 5.46318L1.59511 5.45815L5.03688 4.95914Z" stroke="#FFCC00"/></g><defs><clipPath id="clip0_10613_36269"><rect width="13" height="13" fill="white" transform="translate(0.5 0.488281)"/></clipPath></defs></svg>
                                </span>
                            </span>
                        </p>
                    </div>
                    <div class="subtitle">934 отзыва</div>
                </div>
            </div>
            <!--
            <div class="bulets-item">
                <div class="image-cnt">
                    <img src="/wp-content/themes/fpalaw/assets/img/services/services-top-youtube-rossiya24.png" alt="Россия24" />    
                </div>
                <div class="content-cnt">
                    <div class="title">148</div>
                    <div class="subtitle">Интервью</div>
                </div>
            </div>
            -->
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  </div>
</section>