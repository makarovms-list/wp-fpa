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

  $deadline = strtotime(get_field('timer', 374));
  $now = strtotime("now");

  $differenceDay = ($deadline - $now) / (60*60*24);
?>    


    <style>
        footer.footer {
            display: block!important;
            position: relative;
            padding: 30px 0;
            background-color: #f3f4f4;
        }
        footer.footer ul.copyright li {
            margin-bottom: 0;
        }
        footer.footer ul.copyright li+li {
            margin-top: 20px;
        }
        footer.footer ul.copyright li span {
            /*font-weight: 500;*/
            margin: 0 15px;
        }
        .modal__wrap.modal__wrap--services .modal__new-subtitle {
            font-family: Inter;
            font-size: 1.25em;
            font-weight: 400;
            line-height: 130%;
            letter-spacing: 0em;
            text-align: left;
            color: #5D6783;
        }
        @media (max-width: 980px) {
            .copyright__item--center {
                font-size: 14px;
            }
        }
        @media (max-width: 768px) {
            .copyright__item--center {
                font-size: 12px;
            }
            footer.footer ul.copyright li+li {
                margin-top: 10px!important;
            }
            footer.footer ul.copyright li {
                width: 100%;
                display: flex;
                justify-content: space-evenly;
            }
            footer.footer ul.copyright li span {
                margin: 0!important;
            }
        }
        @media (max-width: 520px) {
            footer.footer ul.copyright li {
                display: block!important;
            }
            footer.footer ul.copyright li span {
                width: 40%;
                display: inline-block;
                margin-bottom: 8px!important;    
            }
            footer.footer ul.copyright li span:last-child {
                width: 100%;
                display: inline-block;
                margin-bottom: 0px!important;    
            }
            .popup__cnt .popup-item__cnt.mfc-bankruptcy-bonus-1 .btn,
            .popup__cnt .popup-item__cnt.mfc-bankruptcy-bonus-2 .btn {
                font-size: 1em!important;
            }
            .modal__wrap.modal__wrap--services .modal__new-subtitle {
                font-size: 1.125em;
            }
        }
        
        
        
    </style>

    <footer class="footer" style="display: block!important;" data-daysleft="<?php echo round($differenceDay); ?>">
      <div class="footer__bottom">
        <div class="container">
          <div class="footer__block">
            <ul class="copyright copyright--center">
              <li class="copyright__item copyright__item--center">© ООО «Финансово-правовой альянс», <?php echo date ( 'Y' ) ; ?>.</li>
              <li class="copyright__item copyright__item--center"><span>ОГРН - 1167847164121</span> <span>ИНН - 7838051976</span> <span><a class="link link--underline" href="/politika/">Политика конфиденциальности</a></span></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    
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
    <div class="section--modal modal old__cnt">
      <div class="modal__overlay hidden">
          



        <div class="modal__wrap modal__wrap--warning hidden">
          <button class="no-btn modal__close">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
            </svg>
          </button>
          
          <h3 class="modal__title">Бесплатное банкротство</h3>
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
        <div class="modal__wrap modal__wrap--services hidden">
          <button class="no-btn modal__close">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
            </svg>
          </button>
          <h3 class="modal__title">Записаться на бесплатную консультацию</h3>
          <p class="modal__new-subtitle hidden">Оставьте номер друга и мы расскажем ему о банкротстве. </p>
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
        <div class="modal__wrap modal__wrap--theirs__guarantees hidden">
            <button class="no-btn modal__close">
                <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use></svg>
            </button>
            <div class="title__cnt">
                <div class="h3">Гарантии другой компании</div>
                <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M32.7897 4.12183C32.9568 2.29749 34.5143 0.867859 36.411 0.867859C38.3077 0.867859 39.7758 2.22368 40.0471 4.12183L40.9653 10.3743C41.2536 12.3384 39.73 14.1007 37.7436 14.1007H19.6413L18.176 4.12183H32.7897Z" fill="#FF96BC"/><path d="M32.7897 4.12183C32.9568 2.29749 34.5143 0.867859 36.411 0.867859C38.3077 0.867859 39.7758 2.22368 40.0471 4.12183L40.9653 10.3743C41.2536 12.3384 39.73 14.1007 37.7436 14.1007H19.6413L18.176 4.12183H32.7897Z" fill="url(#paint0_linear_6860_3490)" fill-opacity="0.2"/><path d="M32.8837 4.12183L29.492 37.3174C29.3224 38.9779 27.9228 40.2409 26.2525 40.2409H4.36106C2.43191 40.2409 0.925683 38.5742 1.12178 36.6564L4.46049 4.12183C4.625 2.29749 6.15942 0.867859 8.02773 0.867859H36.4656C34.5973 0.867859 33.0483 2.29749 32.8837 4.12183Z" fill="white"/><path d="M32.8837 4.12183L29.492 37.3174C29.3224 38.9779 27.9228 40.2409 26.2525 40.2409H4.36106C2.43191 40.2409 0.925683 38.5742 1.12178 36.6564L4.46049 4.12183C4.625 2.29749 6.15942 0.867859 8.02773 0.867859H36.4656C34.5973 0.867859 33.0483 2.29749 32.8837 4.12183Z" fill="url(#paint1_linear_6860_3490)" fill-opacity="0.24"/><path d="M1.85643 8.61407C1.91746 7.97344 2.45569 7.48419 3.09943 7.48419H25.3256C26.062 7.48419 26.6384 8.11795 26.5686 8.85076C26.5076 9.49139 25.9694 9.98064 25.3256 9.98064H3.09943C2.36306 9.98064 1.78661 9.34688 1.85643 8.61407Z" fill="#FB5A80"/><path d="M1.14292 14.7957C1.20396 14.1551 1.74219 13.6659 2.38593 13.6659H24.6121C25.3485 13.6659 25.9249 14.2996 25.8551 15.0324C25.7941 15.6731 25.2559 16.1623 24.6121 16.1623H2.38593C1.64956 16.1623 1.07311 15.5286 1.14292 14.7957Z" fill="#FB5A80"/><path d="M0.548338 20.9774C0.60937 20.3368 1.1476 19.8475 1.79134 19.8475H24.0175C24.7539 19.8475 25.3303 20.4813 25.2605 21.2141C25.1995 21.8547 24.6613 22.344 24.0175 22.344H1.79134C1.05498 22.344 0.478524 21.7102 0.548338 20.9774Z" fill="#FB5A80"/><ellipse cx="19.9578" cy="30.1533" rx="4.01323" ry="4.01323" fill="url(#paint2_linear_6860_3490)"/><defs><linearGradient id="paint0_linear_6860_3490" x1="29.0627" y1="14.1007" x2="29.0627" y2="0.867859" gradientUnits="userSpaceOnUse"><stop stop-color="white"/><stop offset="1" stop-color="white" stop-opacity="0"/></linearGradient><linearGradient id="paint1_linear_6860_3490" x1="18.7851" y1="0.867859" x2="18.7851" y2="40.2409" gradientUnits="userSpaceOnUse"><stop stop-color="#C05770"/><stop offset="1" stop-color="#C05770" stop-opacity="0.44"/></linearGradient><linearGradient id="paint2_linear_6860_3490" x1="19.9578" y1="26.1401" x2="19.9578" y2="34.1665" gradientUnits="userSpaceOnUse"><stop stop-color="#FB5A80"/><stop offset="1" stop-color="#F23965"/></linearGradient></defs></svg>
            </div>
            <div class="content__cnt">
                <p>Фирмы по банкротству часто формулируют свои обязательства так: <span>“Признание клиента банкротом”</span>. Однако, это происходит уже на первом судебном заседании, после которого процедура банкротства только начинается. Будьте внимательны: признание гражданина банкротом <span>НЕ ОЗНАЧАЕТ гарантию списания долгов</span>.</p>
            </div>
        </div>
        <div class="modal__wrap modal__wrap--our__guarantees hidden">
            <button class="no-btn modal__close">
                <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use></svg>
            </button>
            <div class="title__cnt">
                <div class="h3">Наши гарантии</div>
                <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M32.7897 4.12183C32.9568 2.29749 34.5143 0.867859 36.411 0.867859C38.3077 0.867859 39.7758 2.22368 40.0471 4.12183L40.9653 10.3743C41.2536 12.3384 39.73 14.1007 37.7436 14.1007H19.6413L18.176 4.12183H32.7897Z" fill="#033DD2"/><path d="M32.7897 4.12183C32.9568 2.29749 34.5143 0.867859 36.411 0.867859C38.3077 0.867859 39.7758 2.22368 40.0471 4.12183L40.9653 10.3743C41.2536 12.3384 39.73 14.1007 37.7436 14.1007H19.6413L18.176 4.12183H32.7897Z" fill="url(#paint0_linear_6860_3473)" fill-opacity="0.2"/><path d="M32.8838 4.12183L29.4921 37.3174C29.3225 38.9779 27.9229 40.2409 26.2526 40.2409H4.36109C2.43194 40.2409 0.925713 38.5742 1.12181 36.6564L4.46052 4.12183C4.62503 2.29749 6.15945 0.867859 8.02776 0.867859H36.4656C34.5973 0.867859 33.0483 2.29749 32.8838 4.12183Z" fill="white"/><path d="M32.8838 4.12183L29.4921 37.3174C29.3225 38.9779 27.9229 40.2409 26.2526 40.2409H4.36109C2.43194 40.2409 0.925713 38.5742 1.12181 36.6564L4.46052 4.12183C4.62503 2.29749 6.15945 0.867859 8.02776 0.867859H36.4656C34.5973 0.867859 33.0483 2.29749 32.8838 4.12183Z" fill="url(#paint1_linear_6860_3473)" fill-opacity="0.24"/><path d="M1.85643 8.61407C1.91746 7.97344 2.45569 7.48419 3.09943 7.48419H25.3256C26.062 7.48419 26.6384 8.11795 26.5686 8.85076C26.5076 9.49139 25.9694 9.98064 25.3256 9.98064H3.09943C2.36306 9.98064 1.78661 9.34688 1.85643 8.61407Z" fill="#90AFFD"/><path d="M1.14292 14.7957C1.20396 14.1551 1.74219 13.6659 2.38593 13.6659H24.6121C25.3485 13.6659 25.9249 14.2996 25.8551 15.0324C25.7941 15.6731 25.2559 16.1623 24.6121 16.1623H2.38593C1.64956 16.1623 1.07311 15.5286 1.14292 14.7957Z" fill="#90AFFD"/><path d="M0.548338 20.9774C0.60937 20.3368 1.1476 19.8475 1.79134 19.8475H24.0175C24.7539 19.8475 25.3303 20.4813 25.2605 21.2141C25.1995 21.8547 24.6613 22.344 24.0175 22.344H1.79134C1.05498 22.344 0.478524 21.7102 0.548338 20.9774Z" fill="#90AFFD"/><ellipse cx="19.9578" cy="30.1533" rx="4.01323" ry="4.01323" fill="url(#paint2_linear_6860_3473)"/><defs><linearGradient id="paint0_linear_6860_3473" x1="29.0627" y1="14.1007" x2="29.0627" y2="0.867859" gradientUnits="userSpaceOnUse"><stop stop-color="white"/><stop offset="1" stop-color="white" stop-opacity="0"/></linearGradient><linearGradient id="paint1_linear_6860_3473" x1="18.7851" y1="0.867859" x2="18.7851" y2="40.2409" gradientUnits="userSpaceOnUse"><stop stop-color="#5673BC"/><stop offset="1" stop-color="#5673BC" stop-opacity="0.44"/></linearGradient><linearGradient id="paint2_linear_6860_3473" x1="19.773" y1="34.1665" x2="19.773" y2="26.1401" gradientUnits="userSpaceOnUse"><stop stop-color="#3C70F4"/><stop offset="1" stop-color="#638DF6"/></linearGradient></defs></svg>
            </div>
            <div class="content__cnt">
                <p>Обязательство, которое мы на себя берем и исполнение которого гарантируем, — <span>полное списание долгов</span>. Гарантия закреплена в <span>п. 3.1 Договора</span>, который обе стороны подписывают <span>ДО</span> начала процедуры. Наши клиенты могут быть уверены: мы доведем дело до <span>ЗАВЕРШЕНИЯ</span> процедуры банкротства и гарантируем полное освобождение от долгов.</p>
            </div>
        </div>
        <div class="modal__wrap modal__wrap--recording hidden">
          <button class="no-btn modal__close">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
            </svg>
          </button>
          <h3 class="modal__title">Записаться на консультацию к арбитражному управляющему</h3>
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
        
        
        
        
        <div class="modal__wrap modal__wrap--callback hidden">
          <button class="no-btn modal__close">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
            </svg>
          </button>
          <h3 class="callback__title">Перезвоним и бесплатно проконсультируем Вас по телефону</h3>
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
        
        <div class="modal__wrap modal__wrap--free test hidden">
          <div class="modal__inner">
            <button class="no-btn modal__close modal__close--out">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
              </svg>
            </button>
            <h3 class="modal__title modal__title--test">Ответив на <span class="text-accent">8 вопросов</span> онлайн-теста, вы узнаете, вправе ли вы списать все долги cо <span class="text-accent">100% гарантией результата через МФЦ</span> СПб по акции <span class="text-accent text-nowrap">до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> года</span>:</h3>
            <div class="test__wrap test__wrap--mfc">
              <div class="test__block region__container">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">1.</span> Место вашего фактического проживания:
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-8-1">Санкт-Петербург и Ленинградская область</label>
                    <input class="radio__default" id="sale-8-1" type="radio" name="place" value="Санкт-Петербург и Ленинградская область">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-8-2">Москва и Московская область</label>
                    <input class="radio__default" id="sale-8-2" type="radio" name="place" value="Москва и Московская область">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-8-3">Другие регионы</label>
                    <input class="radio__default" id="sale-8-3" type="radio" name="place" value="Другие регионы">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">2.</span> Относитесь ли вы к одной из указанных категорий граждан?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-1-1">Официально безработные</label>
                    <input class="checkbox__default" id="benefits-1-1" type="checkbox" name="category" value="Официально безработные">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-1-2">Ипотечные должники</label>
                    <input class="checkbox__default" id="benefits-1-2" type="checkbox" name="category" value="Ипотечные должники">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-1-3">Пенсионеры</label>
                    <input class="checkbox__default" id="benefits-1-3" type="checkbox" name="category" value="Пенсионеры">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-1-4">Инвалиды любой группы</label>
                    <input class="checkbox__default" id="benefits-1-4" type="checkbox" name="category" value="Инвалиды любой группы">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-1-5">Семьи, имеющие детей-инвалидов</label>
                    <input class="checkbox__default" id="benefits-1-5" type="checkbox" name="category" value="Семьи, имеющие детей инвалидов">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-1-6">Семьи (возраст родителей до 35 лет), имеющие 1 ребёнка</label>
                    <input class="checkbox__default" id="benefits-1-6" type="checkbox" name="category" value="Семьи (возраст родителей до 35 лет), имеющие 1 ребёнка">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-1-7">Родители-одиночки или семьи с двумя и более детьми</label>
                    <input class="checkbox__default" id="benefits-1-7" type="checkbox" name="category" value="Родители одиночки или семьи с двумя и более детьми">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-1-8">Индивидуальные предприниматели (действующие и бывшие)</label>
                    <input class="checkbox__default" id="benefits-1-8" type="checkbox" name="category" value="Индивидуальные предприниматели (действующие и бывшие)">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-1-9">Военнослужащие и участники боевых действий (действующие и бывшие)</label>
                    <input class="checkbox__default" id="benefits-1-9" type="checkbox" name="category" value="Военнослужащие и участники боевых действий (действующие и бывшие)">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-1-10">Сотрудники здравоохранения, образования и защиты правопорядка</label>
                    <input class="checkbox__default" id="benefits-1-10" type="checkbox" name="category" value="Сотрудники здравоохранения, образования и защиты правопорядка">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-1-11">Другое</label>
                    <input class="checkbox__default" id="benefits-1-11" type="checkbox" name="category" value="Другое" data-reset>
                    <span class="checkbox__new"></span>
                  </div>
                </div>
              </div>
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">3.</span> У вас произошло сокращение на работе или снижение официального дохода, не покрывающего размер ежемесячных платежей по кредитам и займам?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-2-1">Да</label>
                    <input class="radio__default" id="free-2-1" type="radio" name="reduced-income">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-2-2">Нет</label>
                    <input class="radio__default" id="free-2-2" type="radio" name="reduced-income">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">4.</span> Кто является вашим кредитором(ами)?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-3-1">Банки</label>
                    <input class="checkbox__default" id="free-3-1" type="checkbox" name="creditors" value="Банки">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-3-2">МФО</label>
                    <input class="checkbox__default" id="free-3-2" type="checkbox" name="creditors" value="МФО">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-3-3">Государственные органы</label>
                    <input class="checkbox__default" id="free-3-3" type="checkbox" name="creditors" value="Государственные органы">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-3-4">Физические лица</label>
                    <input class="checkbox__default" id="free-3-4" type="checkbox" name="creditors" value="Физические лица">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-3-5">Юридические лица</label>
                    <input class="checkbox__default" id="free-3-5" type="checkbox" name="creditors" value="Юридические лица">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-3-6">Затрудняюсь ответить</label>
                    <input class="checkbox__default" id="free-3-6" type="checkbox" name="creditors" value="Затрудняюсь ответить" data-reset>
                    <span class="checkbox__new"></span>
                  </div>
                </div>
              </div>
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">5.</span> Общая сумма всех ваших кредитов и долгов:
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-1-1">Менее 300 000 тыс. руб.</label>
                    <input class="radio__default" id="free-1-1" type="radio" name="summ" value="Менее 300 000 тыс. руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-1-2">300 001 руб. – 500 000 руб.</label>
                    <input class="radio__default" id="free-1-2" type="radio" name="summ" value="300 001 руб. – 500 000 руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-1-3">500 001 руб. – 1 000 000 руб.</label>
                    <input class="radio__default" id="free-1-3" type="radio" name="summ" value="500 001 руб. – 1 000 000 руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-1-4">1 000 001 руб. – 3 000 000 руб.</label>
                    <input class="radio__default" id="free-1-4" type="radio" name="summ" value="1 000 001 руб. – 3 000 000 руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-1-5">3 000 001 руб. – 7 000 000 руб.</label>
                    <input class="radio__default" id="free-1-5" type="radio" name="summ" value="3 000 001 руб. – 7 000 000 руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-1-6">Более 7 000 001 руб.</label>
                    <input class="radio__default" id="free-1-6" type="radio" name="summ" value="Более 7 000 001 руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-1-7">Затрудняюсь ответить</label>
                    <input class="radio__default" id="free-1-7" type="radio" name="summ" value="Затрудняюсь ответить">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">6.</span> Имеется ли у вас в собственности ценное имущество?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-bank-2-1">Есть транспортные средства</label>
                    <input class="radio__default" id="free-bank-2-1" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-bank-2-2">Есть ипотека</label>
                    <input class="radio__default" id="free-bank-2-2" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-bank-2-4">Есть недвижимость (не в ипотеке)</label>
                    <input class="radio__default" id="free-bank-2-4" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-bank-2-5">Нет ценного имущества</label>
                    <input class="radio__default" id="free-bank-2-5" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-bank-2-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="free-bank-2-3" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">7.</span>Ваши долги уже просужены и исполнительные листы находятся в ФССП (Федеральной службе судебных приставов)? Произведён арест счётов, имущества, наложен запрет на выезда за границу?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-7-1">Да</label>
                    <input class="radio__default" id="free-7-1" type="radio" name="fssp">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-7-2">Нет</label>
                    <input class="radio__default" id="free-7-2" type="radio" name="fssp">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-7-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="free-7-3" type="radio" name="fssp">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">8.</span> Вы совершали сделки с ценным имуществом в течение последних 3 лет?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-4-1">Были сделки с ценным имуществом за 3 года</label>
                    <input class="radio__default" id="free-4-1" type="radio" name="transactions">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-4-2">Не было сделок с ценным имуществом за 3 года</label>
                    <input class="radio__default" id="free-4-2" type="radio" name="transactions">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-4-4">Другой вариант</label>
                    <input class="radio__default" id="free-4-4" type="radio" name="transactions">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-4-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="free-4-3" type="radio" name="transactions">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              
              <button class="btn test__btn test-btn" data-test="free" data-name="SMS-14 Пройдите тест и узнайте, вправе ли Вы списать все Ваши долги с 100% гарантией результата через МФЦ СПб по акции до <?php echo $date->format('j') . ' ' . $arr[$month]; ?>" data-sms data-title="03">Узнать результат</button>
            </div>
          </div>
        </div>
        
        <div class="modal__wrap modal__wrap--free modal__wrap--free_v2 test hidden">
          <div class="modal__inner">
            <button class="no-btn modal__close modal__close--out">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
              </svg>
            </button>
            <h3 class="modal__title modal__title--test">Ответив на <span class="text-accent">5 вопросов</span> онлайн-теста, вы узнаете, вправе ли вы списать все долги cо <span class="text-accent">100% гарантией результата через МФЦ</span> СПб по акции <span class="text-accent text-nowrap">до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> года</span>:</h3>
            <div class="test__wrap test__wrap--mfc">

              <div class="test__block messenger__container">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">1. </span>В какой мессенджер прислать вам автоматический ответ?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc" style="background: url(/wp-content/themes/fpalaw/assets/img/mfc/whatsapp.svg) calc(100% - 8px) center no-repeat #fff;background-size: 32px;">
                    <label class="radio__label" for="sale-9-1">WhatsApp</label>
                    <input class="radio__default" id="sale-9-1" type="radio" name="messenger" value="WhatsApp">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc" style="background: url(/wp-content/themes/fpalaw/assets/img/mfc/telegram.svg) calc(100% - 8px) center no-repeat #fff;background-size: 32px;">
                    <label class="radio__label" for="sale-9-2">Telegram</label>
                    <input class="radio__default" id="sale-9-2" type="radio" name="messenger" value="Telegram">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc" style="background: url(/wp-content/themes/fpalaw/assets/img/mfc/viber.svg) calc(100% - 8px) center no-repeat #fff;background-size: 32px;">
                    <label class="radio__label" for="sale-9-3">Viber</label>
                    <input class="radio__default" id="sale-9-3" type="radio" name="messenger" value="Viber">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-9-5">СМС</label>
                    <input class="radio__default" id="sale-9-5" type="radio" name="messenger" value="SMS">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>

              <div class="test__block region__container">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">2.</span> Место вашего фактического проживания:
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-10-1">Санкт-Петербург и Ленинградская область</label>
                    <input class="radio__default" id="sale-10-1" type="radio" name="place" value="Санкт-Петербург и Ленинградская область">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-10-2">Москва и Московская область</label>
                    <input class="radio__default" id="sale-10-2" type="radio" name="place" value="Москва и Московская область">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-10-3">Другие регионы</label>
                    <input class="radio__default" id="sale-10-3" type="radio" name="place" value="Другие регионы">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">3.</span> Общая сумма всех ваших кредитов и долгов:
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-11-1">Менее 50 000 тыс. руб.</label>
                    <input class="radio__default" id="sale-11-1" type="radio" name="summ" value="Менее 50 000 тыс. руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-11-2">50 001 руб. – 500 000 руб.</label>
                    <input class="radio__default" id="sale-11-2" type="radio" name="summ" value="50 001 руб. – 500 000 руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-11-3">Более 500 001 руб.</label>
                    <input class="radio__default" id="sale-11-3" type="radio" name="summ" value="50 001 руб. – 500 000 руб.">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-11-4">Затрудняюсь ответить</label>
                    <input class="radio__default" id="sale-11-4" type="radio" name="summ" value="Затрудняюсь ответить">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">4.</span> Имеется ли у вас в собственности ценное имущество?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-12-1">Есть транспортные средства</label>
                    <input class="radio__default" id="sale-12-1" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-12-2">Есть ипотека</label>
                    <input class="radio__default" id="sale-12-2" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-12-4">Есть недвижимость (не в ипотеке)</label>
                    <input class="radio__default" id="sale-12-4" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-12-5">Нет ценного имущества</label>
                    <input class="radio__default" id="sale-12-5" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-12-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="sale-12-3" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">5.</span> Вы совершали сделки продажи или дарения недвижимости или автомобилей за последние 3 года?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-14-1">Да</label>
                    <input class="radio__default" id="sale-14-1" type="radio" name="transactions">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-14-2">Нет</label>
                    <input class="radio__default" id="sale-14-2" type="radio" name="transactions">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-14-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="sale-14-3" type="radio" name="transactions">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              
              <button class="btn test__btn test-btn" data-test="free" data-name="SMS-34 Пройдите тест и узнайте, вправе ли Вы списать все Ваши долги с 100% гарантией результата через МФЦ СПб по акции до <?php echo $date->format('j') . ' ' . $arr[$month]; ?>" data-sms="37" data-title="03">Узнать результат</button>
            </div>
          </div>
        </div>
        
        
        <div class="modal__wrap modal__wrap--sale test hidden">
          <div class="modal__inner">
            <button class="no-btn modal__close modal__close--out">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
              </svg>
            </button>
            <h3 class="modal__title modal__title--test">Ответив на <span class="text-pink">8 вопросов онлайн-теста</span>, вы узнаете, вправе ли вы списать все кредиты и долги <span class="text-pink">через Арбитражный суд и сколько это будет стоить</span></h3>
            <div class="test__wrap test__wrap--mfc">
              <div class="test__block region__container">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">1.</span> Место вашего фактического проживания:
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-new-8-1">Санкт-Петербург и Ленинградская область</label>
                    <input class="radio__default" id="sale-new-8-1" type="radio" name="place" value="Санкт-Петербург и Ленинградская область">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-new-8-2">Москва и Московская область</label>
                    <input class="radio__default" id="sale-new-8-2" type="radio" name="place" value="Москва и Московская область">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-new-8-3">Другие регионы</label>
                    <input class="radio__default" id="sale-new-8-3" type="radio" name="place" value="Другие регионы">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                </div>
              </div>
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">2.</span> Относитесь ли вы к одной из указанных категорий граждан?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-second-1-1">Официально безработные</label>
                    <input class="checkbox__default" id="benefits-second-1-1" type="checkbox" name="category" value="Официально безработные">
                    <span class="checkbox__new checkbox__new--pink"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-second-1-2">Ипотечные должники</label>
                    <input class="checkbox__default" id="benefits-second-1-2" type="checkbox" name="category" value="Ипотечные должники">
                    <span class="checkbox__new checkbox__new--pink"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-second-1-3">Пенсионеры</label>
                    <input class="checkbox__default" id="benefits-second-1-3" type="checkbox" name="category" value="Пенсионеры">
                    <span class="checkbox__new checkbox__new--pink"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-second-1-4">Инвалиды любой группы</label>
                    <input class="checkbox__default" id="benefits-second-1-4" type="checkbox" name="category" value="Инвалиды любой группы">
                    <span class="checkbox__new checkbox__new--pink"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-second-1-5">Семьи, имеющие детей-инвалидов</label>
                    <input class="checkbox__default" id="benefits-second-1-5" type="checkbox" name="category" value="Семьи, имеющие детей инвалидов">
                    <span class="checkbox__new checkbox__new--pink"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-second-1-6">Семьи (возраст родителей до 35 лет), имеющие 1 ребёнка</label>
                    <input class="checkbox__default" id="benefits-second-1-6" type="checkbox" name="category" value="Семьи (возраст родителей до 35 лет), имеющие 1 ребёнка">
                    <span class="checkbox__new checkbox__new--pink"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-second-1-7">Родители-одиночки или семьи с двумя и более детьми</label>
                    <input class="checkbox__default" id="benefits-second-1-7" type="checkbox" name="category" value="Родители одиночки или семьи с двумя и более детьми">
                    <span class="checkbox__new checkbox__new--pink"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-second-1-8">Индивидуальные предприниматели (действующие и бывшие)</label>
                    <input class="checkbox__default" id="benefits-second-1-8" type="checkbox" name="category" value="Индивидуальные предприниматели (действующие и бывшие)">
                    <span class="checkbox__new checkbox__new--pink"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-second-1-9">Военнослужащие и участники боевых действий (действующие и бывшие)</label>
                    <input class="checkbox__default" id="benefits-second-1-9" type="checkbox" name="category" value="Военнослужащие и участники боевых действий (действующие и бывшие)">
                    <span class="checkbox__new checkbox__new--pink"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-second-1-10">Сотрудники здравоохранения, образования и защиты правопорядка</label>
                    <input class="checkbox__default" id="benefits-second-1-10" type="checkbox" name="category" value="Сотрудники здравоохранения, образования и защиты правопорядка">
                    <span class="checkbox__new checkbox__new--pink"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-second-1-11">Другое</label>
                    <input class="checkbox__default" id="benefits-second-1-11" type="checkbox" name="category" value="Другое" data-reset>
                    <span class="checkbox__new checkbox__new--pink"></span>
                  </div>
                </div>
              </div>
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">3.</span> Вы официально трудоустроены?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-1-1">Да</label>
                    <input class="radio__default" id="sale-1-1" type="radio" name="officially-employed">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-1-2">Нет</label>
                    <input class="radio__default" id="sale-1-2" type="radio" name="officially-employed">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-1-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="sale-1-3" type="radio" name="officially-employed">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                </div>
              </div>
              
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">4.</span> У вас произошло сокращение на работе или снижение официального дохода, не покрывающего размер ежемесячных платежей по кредитам и займам?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-second-2-1">Да</label>
                    <input class="radio__default" id="free-second-2-1" type="radio" name="reduced-income">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-second-2-2">Нет</label>
                    <input class="radio__default" id="free-second-2-2" type="radio" name="reduced-income">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                </div>
              </div>
      
      
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">5.</span> Ваш официальный доход составляет более 48 000 рублей в месяц?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-2-1">Да</label>
                    <input class="radio__default" id="sale-2-1" type="radio" name="dohod48k">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-2-2">Нет</label>
                    <input class="radio__default" id="sale-2-2" type="radio" name="dohod48k">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-2-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="sale-2-3" type="radio" name="dohod48k">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                </div>
              </div>
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">5.</span> Кто является вашим кредитором(ами)?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-second-3-1">Банки</label>
                    <input class="checkbox__default" id="free-second-3-1" type="checkbox" name="creditors" value="Банки">
                    <span class="checkbox__new checkbox__new--pink"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-second-3-2">МФО</label>
                    <input class="checkbox__default" id="free-second-3-2" type="checkbox" name="creditors" value="МФО">
                    <span class="checkbox__new checkbox__new--pink"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-second-3-3">Государственные органы</label>
                    <input class="checkbox__default" id="free-second-3-3" type="checkbox" name="creditors" value="Государственные органы">
                    <span class="checkbox__new checkbox__new--pink"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-second-3-4">Физические лица</label>
                    <input class="checkbox__default" id="free-second-3-4" type="checkbox" name="creditors" value="Физические лица">
                    <span class="checkbox__new checkbox__new--pink"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-second-3-5">Юридические лица</label>
                    <input class="checkbox__default" id="free-second-3-5" type="checkbox" name="creditors" value="Юридические лица">
                    <span class="checkbox__new checkbox__new--pink"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-second-3-6">Затрудняюсь ответить</label>
                    <input class="checkbox__default" id="free-second-3-6" type="checkbox" name="creditors" value="Затрудняюсь ответить" data-reset>
                    <span class="checkbox__new checkbox__new--pink"></span>
                  </div>
                </div>
              </div>
              
              

              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">6.</span> Имеется ли у вас в собственности ценное имущество?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-3-1">Есть транспортные средства</label>
                    <input class="radio__default" id="sale-3-1" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-3-2">Есть ипотека</label>
                    <input class="radio__default" id="sale-3-2" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-3-3">Есть недвижимость (не в ипотеке)</label>
                    <input class="radio__default" id="sale-3-3" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-3-4">Нет ценного имущества</label>
                    <input class="radio__default" id="sale-3-4" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-3-5">Затрудняюсь ответить</label>
                    <input class="radio__default" id="sale-3-5" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                </div>
              </div>
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">7.</span> Какова общая сумма задолженности перед всеми кредиторами?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-4-1">Менее 300 000 тыс. руб.</label>
                    <input class="radio__default" id="sale-4-1" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-4-2">300 001 руб. – 500 000 руб.</label>
                    <input class="radio__default" id="sale-4-2" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-4-3">500 001 руб. – 1 000 000 руб.</label>
                    <input class="radio__default" id="sale-4-3" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-4-4">1 000 001 руб. – 3 000 000 руб.</label>
                    <input class="radio__default" id="sale-4-4" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-4-5">3 000 001 руб. – 7 000 000 руб.</label>
                    <input class="radio__default" id="sale-4-5" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-4-6">Более 7 000 001 руб.</label>
                    <input class="radio__default" id="sale-4-6" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-4-7">Затрудняюсь ответить</label>
                    <input class="radio__default" id="sale-4-7" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                </div>
              </div>
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">8.</span>Ваши долги уже просужены и исполнительные листы находятся в ФССП (Федеральной службе судебных приставов)? Произведён арест счётов, имущества, наложен запрет на выезда за границу?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-second-7-1">Да</label>
                    <input class="radio__default" id="free-second-7-1" type="radio" name="fssp">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-second-7-2">Нет</label>
                    <input class="radio__default" id="free-second-7-2" type="radio" name="fssp">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-second-7-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="free-second-7-3" type="radio" name="fssp">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                </div>
              </div>
              
              
              <button class="btn test__btn test__btn--pink test-btn" data-test="sale" data-name="SMS-15 Пройдите тест и узнайте минимальную стоимость банкротства в Арбитражном суде СПб и ЛО по акции до <?php echo $date->format('j') . ' ' . $arr[$month]; ?>" data-sms data-title="04">Узнать результат</button>
            </div>
          </div>
        </div>
        
        <div class="modal__wrap modal__wrap--sale modal__wrap--sale-v2 test hidden">
          <div class="modal__inner">
            <button class="no-btn modal__close modal__close--out">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
              </svg>
            </button>
            <h3 class="modal__title modal__title--test">Ответив на <span class="text-pink">6 вопросов онлайн-теста</span>, вы узнаете, вправе ли вы списать все кредиты и долги <span class="text-pink">через арбитражный суд и сколько это будет стоить</span></h3>
            <div class="test__wrap test__wrap--mfc">
                
              <div class="test__block messenger__container">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">1. </span>В какой мессенджер прислать вам автоматический ответ?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc" style="background: url(/wp-content/themes/fpalaw/assets/img/mfc/whatsapp.svg) calc(100% - 8px) center no-repeat #fff;background-size: 32px;">
                    <label class="radio__label" for="sale-messanger-9-1">WhatsApp</label>
                    <input class="radio__default" id="sale-messanger-9-1" type="radio" name="messenger" value="WhatsApp">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc" style="background: url(/wp-content/themes/fpalaw/assets/img/mfc/telegram.svg) calc(100% - 8px) center no-repeat #fff;background-size: 32px;">
                    <label class="radio__label" for="sale-messanger-9-2">Telegram</label>
                    <input class="radio__default" id="sale-messanger-9-2" type="radio" name="messenger" value="Telegram">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc" style="background: url(/wp-content/themes/fpalaw/assets/img/mfc/viber.svg) calc(100% - 8px) center no-repeat #fff;background-size: 32px;">
                    <label class="radio__label" for="sale-messanger-9-3">Viber</label>
                    <input class="radio__default" id="sale-messanger-9-3" type="radio" name="messenger" value="Viber">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-messanger-9-5">СМС</label>
                    <input class="radio__default" id="sale-messanger-9-5" type="radio" name="messenger" value="SMS">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                </div>
              </div>
                
              <div class="test__block region__container">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">2.</span> Место вашего фактического проживания:
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-new-ver-2-8-1">Санкт-Петербург и Ленинградская область</label>
                    <input class="radio__default" id="sale-new-ver-2-8-1" type="radio" name="place" value="Санкт-Петербург и Ленинградская область">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-new-ver-2-8-2">Москва и Московская область</label>
                    <input class="radio__default" id="sale-new-ver-2-8-2" type="radio" name="place" value="Москва и Московская область">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-new-ver-2-8-3">Другие регионы</label>
                    <input class="radio__default" id="sale-new-ver-2-8-3" type="radio" name="place" value="Другие регионы">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">3.</span> Вы официально трудоустроены?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-new-ver-2-1-1">Да</label>
                    <input class="radio__default" id="sale-new-ver-2-1-1" type="radio" name="officially-employed">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-new-ver-2-1-2">Нет</label>
                    <input class="radio__default" id="sale-new-ver-2-1-2" type="radio" name="officially-employed">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-new-ver-2-1-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="sale-new-ver-2-1-3" type="radio" name="officially-employed">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                </div>
              </div>
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">4.</span> Ваш официальный доход составляет более 48 000 рублей в месяц?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-new-ver-2-2-1">Да</label>
                    <input class="radio__default" id="sale-new-ver-2-2-1" type="radio" name="dohod48k">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-new-ver-2-2-2">Нет</label>
                    <input class="radio__default" id="sale-new-ver-2-2-2" type="radio" name="dohod48k">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-new-ver-2-2-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="sale-new-ver-2-2-3" type="radio" name="dohod48k">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">5.</span> Имеется ли у вас в собственности ценное имущество
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-new-ver-2-3-1">Есть транспортные средства</label>
                    <input class="radio__default" id="sale-new-ver-2-3-1" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-new-ver-2-3-2">Есть ипотека</label>
                    <input class="radio__default" id="sale-new-ver-2-3-2" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-new-ver-2-3-4">Есть недвижимость (не в ипотеке)</label>
                    <input class="radio__default" id="sale-new-ver-2-3-4" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-new-ver-2-3-5">Нет ценного имущества</label>
                    <input class="radio__default" id="sale-new-ver-2-3-5" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-new-ver-2-3-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="sale-new-ver-2-3-3" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                </div>
              </div>
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">6.</span> Общая сумма всех ваших кредитов и долгов:
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-new-ver-2-4-1">Менее 300 000 тыс. руб.</label>
                    <input class="radio__default" id="sale-new-ver-2-4-1" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-new-ver-2-4-2">300 001 руб. – 500 000 руб.</label>
                    <input class="radio__default" id="sale-new-ver-2-4-2" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-new-ver-2-4-3">500 001 руб. – 1 000 000 руб.</label>
                    <input class="radio__default" id="sale-new-ver-2-4-3" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-new-ver-2-4-4">1 000 001 руб. – 3 000 000 руб.</label>
                    <input class="radio__default" id="sale-new-ver-2-4-4" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-new-ver-2-4-5">Более 3 000 001 руб.</label>
                    <input class="radio__default" id="sale-new-ver-2-4-5" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-new-ver-2-4-6">Затрудняюсь ответить</label>
                    <input class="radio__default" id="sale-new-ver-2-4-6" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                </div>
              </div>
              
              <button class="btn test__btn test__btn--pink test-btn" data-test="sale" data-name="SMS-35 Пройдите тест и узнайте минимальную стоимость банкротства в Арбитражном суде СПб и ЛО по акции до <?php echo $date->format('j') . ' ' . $arr[$month]; ?>" data-sms="38" data-title="04">Узнать результат</button>
            </div>
          </div>
        </div>
        
        <div class="modal__wrap modal__wrap--benefits test hidden">
          <div class="modal__inner">
            <button class="no-btn modal__close modal__close--out">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
              </svg>
            </button>
            <h3 class="modal__title modal__title--test">Ответив на <span class="text-green">6 вопросов онлайн-теста</span>, вы&nbsp;узнаете, относитесь ли вы ко льготным категориям граждан и имеете ли право на <span class="text-green">банкротство с оплатой за результат</span></h3>
            <div class="test__wrap test__wrap--mfc">
              <div class="test__block region__container">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">1.</span> Место вашего фактического проживания:
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-8-1">Санкт-Петербург и Ленинградская область</label>
                    <input class="radio__default" id="benefits-8-1" type="radio" name="place" value="Санкт-Петербург и Ленинградская область">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-8-2">Москва и Московская область</label>
                    <input class="radio__default" id="benefits-8-2" type="radio" name="place" value="Москва и Московская область">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-8-3">Другие регионы</label>
                    <input class="radio__default" id="benefits-8-3" type="radio" name="place" value="Другие регионы">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">2.</span> Относитесь ли вы к одной из указанных категорий граждан?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-three-1-1">Официально безработные</label>
                    <input class="checkbox__default" id="benefits-three-1-1" type="checkbox" name="category" value="Официально безработные">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-three-1-2">Ипотечные должники</label>
                    <input class="checkbox__default" id="benefits-three-1-2" type="checkbox" name="category" value="Ипотечные должники">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-three-1-3">Пенсионеры</label>
                    <input class="checkbox__default" id="benefits-three-1-3" type="checkbox" name="category" value="Пенсионеры">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-three-1-4">Инвалиды любой группы</label>
                    <input class="checkbox__default" id="benefits-three-1-4" type="checkbox" name="category" value="Инвалиды любой группы">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-three-1-5">Семьи, имеющие детей-инвалидов</label>
                    <input class="checkbox__default" id="benefits-three-1-5" type="checkbox" name="category" value="Семьи, имеющие детей инвалидов">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-three-1-6">Семьи (возраст родителей до 35 лет), имеющие 1 ребёнка</label>
                    <input class="checkbox__default" id="benefits-three-1-6" type="checkbox" name="category" value="Семьи (возраст родителей до 35 лет), имеющие 1 ребёнка">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-three-1-7">Родители-одиночки или семьи с двумя и более детьми</label>
                    <input class="checkbox__default" id="benefits-three-1-7" type="checkbox" name="category" value="Родители одиночки или семьи с двумя и более детьми">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-three-1-8">Индивидуальные предприниматели (действующие и бывшие)</label>
                    <input class="checkbox__default" id="benefits-three-1-8" type="checkbox" name="category" value="Индивидуальные предприниматели (действующие и бывшие)">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-three-1-9">Военнослужащие и участники боевых действий (действующие и бывшие)</label>
                    <input class="checkbox__default" id="benefits-three-1-9" type="checkbox" name="category" value="Военнослужащие и участники боевых действий (действующие и бывшие)">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-three-1-10">Сотрудники здравоохранения, образования и защиты правопорядка</label>
                    <input class="checkbox__default" id="benefits-three-1-10" type="checkbox" name="category" value="Сотрудники здравоохранения, образования и защиты правопорядка">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-three-1-11">Другое</label>
                    <input class="checkbox__default" id="benefits-three-1-11" type="checkbox" name="category" value="Другое" data-reset>
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                </div>
              </div>
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">3.</span> Вы официально трудоустроены?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-2-1">Да</label>
                    <input class="radio__default" id="benefits-2-1" type="radio" name="officially-employed">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-2-2">Нет</label>
                    <input class="radio__default" id="benefits-2-2" type="radio" name="officially-employed">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-2-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="benefits-2-3" type="radio" name="officially-employed">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                </div>
              </div>
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">4.</span> У вас произошло сокращение на работе или снижение официального дохода, не покрывающего размер ежемесячных платежей по кредитам и займам?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-three-2-1">Да</label>
                    <input class="radio__default" id="free-three-2-1" type="radio" name="reduced-income">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-three-2-2">Нет</label>
                    <input class="radio__default" id="free-three-2-2" type="radio" name="reduced-income">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                </div>
              </div>
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">5.</span> Ваш официальный доход составляет более 48 000 рублей в месяц?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-3-1">Да</label>
                    <input class="radio__default" id="benefits-3-1" type="radio" name="dohod48k">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-3-2">Нет</label>
                    <input class="radio__default" id="benefits-3-2" type="radio" name="dohod48k">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-3-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="benefits-3-3" type="radio" name="dohod48k">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                </div>
              </div>
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">6.</span> Имеется ли у вас в собственности ценное имущество?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-4-1">Есть транспортные средства</label>
                    <input class="radio__default" id="benefits-4-1" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-4-2">Есть ипотека</label>
                    <input class="radio__default" id="benefits-4-2" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-4-3">Есть недвижимость (не в ипотеке)</label>
                    <input class="radio__default" id="benefits-4-3" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-4-4">Нет ценного имущества</label>
                    <input class="radio__default" id="benefits-4-4" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-4-5">Затрудняюсь ответить</label>
                    <input class="radio__default" id="benefits-4-5" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                </div>
              </div>
              

              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">7.</span> Кто является вашим кредитором(ами)?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-three-3-1">Банки</label>
                    <input class="checkbox__default" id="free-three-3-1" type="checkbox" name="creditors" value="Банки">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-three-3-2">МФО</label>
                    <input class="checkbox__default" id="free-three-3-2" type="checkbox" name="creditors" value="МФО">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-three-3-3">Государственные органы</label>
                    <input class="checkbox__default" id="free-three-3-3" type="checkbox" name="creditors" value="Государственные органы">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-three-3-4">Физические лица</label>
                    <input class="checkbox__default" id="free-three-3-4" type="checkbox" name="creditors" value="Физические лица">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-three-3-5">Юридические лица</label>
                    <input class="checkbox__default" id="free-three-3-5" type="checkbox" name="creditors" value="Юридические лица">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-three-3-6">Затрудняюсь ответить</label>
                    <input class="checkbox__default" id="free-three-3-6" type="checkbox" name="creditors" value="Затрудняюсь ответить" data-reset>
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                </div>
              </div>
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">8.</span>  Общая сумма всех ваших кредитов и долгов:
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-5-1">Менее 300 000 тыс. руб.</label>
                    <input class="radio__default" id="benefits-5-1" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-5-2">300 001 руб. – 500 000 руб.</label>
                    <input class="radio__default" id="benefits-5-2" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-5-3">500 001 руб. – 1 000 000 руб.</label>
                    <input class="radio__default" id="benefits-5-3" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-5-4">1 000 001 руб. – 3 000 000 руб.</label>
                    <input class="radio__default" id="benefits-5-4" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-5-5">3 000 001 руб. – 7 000 000 руб.</label>
                    <input class="radio__default" id="benefits-5-5" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-5-6">Более 7 000 001 руб.</label>
                    <input class="radio__default" id="benefits-5-6" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-5-7">Затрудняюсь ответить</label>
                    <input class="radio__default" id="benefits-5-7" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                </div>
              </div>
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">9.</span>Ваши долги уже просужены и исполнительные листы находятся в ФССП (Федеральной службе судебных приставов)? Произведён арест счётов, имущества, наложен запрет на выезда за границу?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-three-7-1">Да</label>
                    <input class="radio__default" id="free-three-7-1" type="radio" name="fssp">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-three-7-2">Нет</label>
                    <input class="radio__default" id="free-three-7-2" type="radio" name="fssp">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-three-7-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="free-three-7-3" type="radio" name="fssp">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                </div>
              </div>
              
              
              <button class="btn test__btn test__btn--green test-btn" data-test="benefits" data-name="SMS-16 Пройдите тест и узнайте, относитесь ли вы к льготным категориям граждан и имеете ли право на банкротство с оплатой за результат" data-sms data-title="05">Узнать результат</button>
            </div>
          </div>
        </div>
        
        <div class="modal__wrap modal__wrap--benefits modal__wrap--benefits-v2 test hidden">
          <div class="modal__inner">
            <button class="no-btn modal__close modal__close--out">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
              </svg>
            </button>
            <h3 class="modal__title modal__title--test">Ответив на <span class="text-green">7 вопросов онлайн-теста</span>, вы&nbsp;узнаете, относитесь ли вы ко льготным категориям граждан и имеете ли право на <span class="text-green">банкротство с оплатой за результат</span></h3>
            <div class="test__wrap test__wrap--mfc">
              <div class="test__block messenger__container">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">1.</span> В какой мессенджер прислать вам автоматический ответ?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc" style="background: url(/wp-content/themes/fpalaw/assets/img/mfc/whatsapp.svg) calc(100% - 8px) center no-repeat #fff;background-size: 32px;">
                    <label class="radio__label" for="sale-messanger-10-1">WhatsApp</label>
                    <input class="radio__default" id="sale-messanger-10-1" type="radio" name="messenger" value="WhatsApp">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc" style="background: url(/wp-content/themes/fpalaw/assets/img/mfc/telegram.svg) calc(100% - 8px) center no-repeat #fff;background-size: 32px;">
                    <label class="radio__label" for="sale-messanger-10-2">Telegram</label>
                    <input class="radio__default" id="sale-messanger-10-2" type="radio" name="messenger" value="Telegram">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc" style="background: url(/wp-content/themes/fpalaw/assets/img/mfc/viber.svg) calc(100% - 8px) center no-repeat #fff;background-size: 32px;">
                    <label class="radio__label" for="sale-messanger-10-3">Viber</label>
                    <input class="radio__default" id="sale-messanger-10-3" type="radio" name="messenger" value="Viber">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-messanger-10-5">СМС</label>
                    <input class="radio__default" id="sale-messanger-10-5" type="radio" name="messenger" value="SMS">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                </div>
              </div>
              <div class="test__block region__container">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">2.</span> Место вашего фактического проживания:
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-ver-2-8-1">Санкт-Петербург и Ленинградская область</label>
                    <input class="radio__default" id="benefits-ver-2-8-1" type="radio" name="place" value="Санкт-Петербург и Ленинградская область">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-ver-2-8-2">Москва и Московская область</label>
                    <input class="radio__default" id="benefits-ver-2-8-2" type="radio" name="place" value="Москва и Московская область">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-ver-2-8-3">Другие регионы</label>
                    <input class="radio__default" id="benefits-ver-2-8-3" type="radio" name="place" value="Другие регионы">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">3.</span> Относитесь ли вы к одной из указанных категорий граждан?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-ver-2-1-1">Официально безработные</label>
                    <input class="checkbox__default" id="benefits-ver-2-1-1" type="checkbox" name="category" value="Официально безработные">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-ver-2-1-2">Ипотечные должники</label>
                    <input class="checkbox__default" id="benefits-ver-2-1-2" type="checkbox" name="category" value="Ипотечные должники">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-ver-2-1-3">Пенсионеры</label>
                    <input class="checkbox__default" id="benefits-ver-2-1-3" type="checkbox" name="category" value="Пенсионеры">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-ver-2-1-4">Инвалиды любой группы</label>
                    <input class="checkbox__default" id="benefits-ver-2-1-4" type="checkbox" name="category" value="Инвалиды любой группы">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-ver-2-1-5">Семьи, имеющие детей-инвалидов</label>
                    <input class="checkbox__default" id="benefits-ver-2-1-5" type="checkbox" name="category" value="Семьи, имеющие детей инвалидов">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-ver-2-1-6">Семьи (возраст родителей до 35 лет), имеющие 1 ребёнка</label>
                    <input class="checkbox__default" id="benefits-ver-2-1-6" type="checkbox" name="category" value="Семьи (возраст родителей до 35 лет), имеющие 1 ребёнка">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-ver-2-1-7">Родители-одиночки или семьи с двумя и более детьми</label>
                    <input class="checkbox__default" id="benefits-ver-2-1-7" type="checkbox" name="category" value="Родители одиночки или семьи с двумя и более детьми">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-ver-2-1-8">Индивидуальные предприниматели (действующие и бывшие)</label>
                    <input class="checkbox__default" id="benefits-ver-2-1-8" type="checkbox" name="category" value="Индивидуальные предприниматели (действующие и бывшие)">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-ver-2-1-9">Военнослужащие и участники боевых действий (действующие и бывшие)</label>
                    <input class="checkbox__default" id="benefits-ver-2-1-9" type="checkbox" name="category" value="Военнослужащие и участники боевых действий (действующие и бывшие)">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-ver-2-1-10">Сотрудники здравоохранения, образования и защиты правопорядка</label>
                    <input class="checkbox__default" id="benefits-ver-2-1-10" type="checkbox" name="category" value="Сотрудники здравоохранения, образования и защиты правопорядка">
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="benefits-ver-2-1-11">Другое</label>
                    <input class="checkbox__default" id="benefits-ver-2-1-11" type="checkbox" name="category" value="Другое" data-reset>
                    <span class="checkbox__new checkbox__new--green"></span>
                  </div>
                </div>
              </div>
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">4.</span> Вы официально трудоустроены?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-ver-2-2-1">Да</label>
                    <input class="radio__default" id="benefits-ver-2-2-1" type="radio" name="officially-employed">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-ver-2-2-2">Нет</label>
                    <input class="radio__default" id="benefits-ver-2-2-2" type="radio" name="officially-employed">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-ver-2-2-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="benefits-ver-2-2-3" type="radio" name="officially-employed">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                </div>
              </div>
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">5.</span> Ваш официальный доход составляет более 48 000 рублей в месяц?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-ver-2-3-1">Да</label>
                    <input class="radio__default" id="benefits-ver-2-3-1" type="radio" name="dohod48k">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-ver-2-3-2">Нет</label>
                    <input class="radio__default" id="benefits-ver-2-3-2" type="radio" name="dohod48k">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-ver-2-3-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="benefits-ver-2-3-3" type="radio" name="dohod48k">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">6.</span> Имеется ли у вас в собственности ценное имущество?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-ver-2-4-1">Есть транспортные средства</label>
                    <input class="radio__default" id="benefits-ver-2-4-1" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-ver-2-4-2">Есть ипотека</label>
                    <input class="radio__default" id="benefits-ver-2-4-2" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-ver-2-4-4">Есть недвижимость (не в ипотеке)</label>
                    <input class="radio__default" id="benefits-ver-2-4-4" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-ver-2-4-5">Нет ценного имущества</label>
                    <input class="radio__default" id="benefits-ver-2-4-5" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-ver-2-4-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="benefits-ver-2-4-3" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                </div>
              </div>
              
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">7.</span>  Общая сумма всех ваших кредитов и долгов:
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-ver-2-5-1">Менее 300 000 тыс. руб.</label>
                    <input class="radio__default" id="benefits-ver-2-5-1" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-ver-2-5-2">300 001 руб. – 500 000 руб.</label>
                    <input class="radio__default" id="benefits-ver-2-5-2" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-ver-2-5-3">500 001 руб. – 1 000 000 руб.</label>
                    <input class="radio__default" id="benefits-ver-2-5-3" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-ver-2-5-4">1 000 001 руб. – 3 000 000 руб.</label>
                    <input class="radio__default" id="benefits-ver-2-5-4" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-ver-2-5-5">Более 3 000 001 руб.</label>
                    <input class="radio__default" id="benefits-ver-2-5-5" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="benefits-ver-2-5-6">Затрудняюсь ответить</label>
                    <input class="radio__default" id="benefits-ver-2-5-6" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--green"></span>
                  </div>
                </div>
              </div>
              
              <button class="btn test__btn test__btn--green test-btn" data-test="benefits" data-name="SMS-36 Пройдите тест и узнайте, относитесь ли вы к льготным категориям граждан и имеете ли право на банкротство с оплатой за результат" data-sms="39" data-title="05">Узнать результат</button>
            </div>
          </div>
        </div>
        
        <div class="modal__wrap modal__wrap--answer answer hidden">
          <button class="no-btn modal__close">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
            </svg>
          </button>
          <h3 class="calc-modal__question">Ответ придёт в СМС-сообщении в течение 90 секунд</h3>
          <div class="calc-modal__check hidden">
            <svg viewBox="0 0 51 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.584 25l17.188 16.667L48.418 8.334" stroke="#35D977" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <div class="calc-modal__loader">
            <div class="loader"></div>
          </div>
          <!-- 
              <span>Читаем ответы...</span>
              <span>Анализируем условия...</span>
              <span>Подбираем варианты...</span>
              <span>Рассчитываем стоимость...</span>
              <span>Ожидаем ответа...</span>
              <span>Составляем отчёт...</span>
              <span>Расчет готов, введите номер для отправки...</span>

          -->
          <div class="calc-modal__block">
            <div class="calc-modal__bg"> </div>
            <div class="calc-modal__inner">
              <span>Анализируем условия...</span>
              <span>Составляем отчёт...</span>
              <span>Расчет готов, введите номер для отправки...</span>
            </div>
          </div>
          
          <div class="selected-answers__cnt hidden">
            <div class="selected-answers-animate__cnt"></div>
          </div>
          
          <div class="contact_form_1238__cnt">
              <?php echo do_shortcode( '[contact-form-7 id="1238" title="Тесты на странице МФЦ - Ответ придёт в СМС-сообщении в течение 90 секунд" html_class="modal__form form-test"]' ); ?>
          </div>
          <div class="contact_form_21482__cnt">
              <?php echo do_shortcode( '[contact-form-7 id="21482" title="Тесты на странице МФЦ - Ответ придёт в СМС-сообщении в течение 90 секунд" html_class="modal__form form-test"]' ); ?>
          </div>
              
        
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
        
        
        
        
        
        
        
        
        
        <div class="modal__wrap modal__wrap--all hidden">
          <button class="no-btn modal__close">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
            </svg>
          </button>
        </div>
      </div>
    </div>
    
    <?php 
        $popup_year_arr = ['01' => 'января', '02' => 'февраля', '03' => 'марта', '04' => 'апреля', '05' => 'мая', '06' => 'июня', '07' => 'июля', '08' => 'августа', '09' => 'сентября', '10' => 'октября', '11' => 'ноября', '12' => 'декабря'];
        $popup_year_date = get_field('timer', 374, false);
        $popup_year_date = new DateTime($popup_year_date);
        $popup_year_month = $popup_year_date->format('m');
    ?>
    
    <style>
        body.page-template-bankruptcy2cost .modal__overlay {
            z-index: 9999;
        }
        body.overflow-y-none {
            position: fixed;
        }
        .chat_popup__cnt {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: 999;
            /*background: rgba(243, 244, 244, 0.9);*/
            /*background: rgba(229,229,229,1);*/
            /*backdrop-filter: blur(30px);*/
            overflow-y: auto;
            background: url(/wp-content/themes/fpalaw/assets/img/chat/moneybg.jpg);
            background-repeat: repeat;
            background-size: contain;
        }
        /*
        .chat_popup__cnt:before {
            content: "";
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(229,229,229,1);
            /-background: rgb(29 67 67);-/
            z-index: -2;
        }
        .chat_popup__cnt:after {
            content: "";
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: url(/wp-content/themes/fpalaw/assets/img/chat/moneybg.jpg);
            /-background: url(/wp-content/themes/fpalaw/assets/img/chat/1610832560_22-p-fon-dlya-telegramm-chata-27.jpg) center center no-repeat;
            background: url(/wp-content/themes/fpalaw/assets/img/chat/67e65de530b272a7603459cb34e94271.jpg) center center no-repeat;
            background-size: cover;-/
            z-index: -1;
            /-opacity: 0.75;-/
            background-repeat: repeat;
            background-size: contain;
            /-
            -webkit-filter: blur(1px);
            -moz-filter: blur(1px);
            -o-filter: blur(1px);
            -ms-filter: blur(1px);
            filter: blur(1px);
            -/
        }
        */
        .chat_popup__cnt .header__cnt {
            background: #FFFFFF;
            backdrop-filter: blur(12px);
            padding: 18px 0;
            position: sticky;
            /*width: 100%;*/
            top: 0;
            z-index: 999;
        }
        .chat_popup__cnt .header__cnt .header__wrapper {
            max-width: 1040px;
            margin: 0 auto;
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: 32px auto 32px;
            grid-column-gap: 16px;
            grid-row-gap: 16px;
            align-items: center;
            justify-content: space-between;            
        }
        .chat_popup__cnt .header__cnt .header__wrapper .back_arrow__cnt,
        .chat_popup__cnt .header__cnt .header__wrapper .phone__cnt {
            cursor: pointer;
            width: 32px;
            height: 32px;
        }
        .chat_popup__cnt .header__cnt .urist_content__cnt {
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: 64px auto;
            grid-column-gap: 10px;
            grid-row-gap: 10px;
            align-items: center;
        }
        .chat_popup__cnt .header__cnt .urist_content__cnt .icon {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            background: url(/wp-content/themes/fpalaw/assets/img/chat/bondar_icon_transparent.png) center bottom no-repeat;
            background-size: contain;
            position: relative;
        }
        .chat_popup__cnt .header__cnt .urist_content__cnt .icon .bg {
            position: absolute;
            background: #5381F6;
            background: linear-gradient(to top, #5381F6 100%, #5381F6 0px);
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            z-index: -1;
            -webkit-transition: all .4s ease;
            -o-transition: all .4s ease;
            transition: all .4s ease;
        }
            
        
        .chat_popup__cnt .header__cnt .urist_content__cnt .urist_content .name {
            font-weight: 600;
            font-size: 27px;
            line-height: 145%;
            display: flex;
            align-items: center;
            color: #393939;
        }
        .chat_popup__cnt .header__cnt .urist_content__cnt .urist_content .action .write {
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: 16px auto;
            grid-column-gap: 6px;
            grid-row-gap: 6px;
            align-items: center;
        }
        .chat_popup__cnt .header__cnt .urist_content__cnt .urist_content .action .write.hidden {
            display: none;
        }
        .chat_popup__cnt .header__cnt .urist_content__cnt .urist_content .action .write_paused .text {
            color: #17CC5F;
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 145%;
        }
        .chat_popup__cnt .header__cnt .urist_content__cnt .urist_content .action .write .points {
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: 4px 4px 4px;
            grid-column-gap: 2px;
            grid-row-gap: 2px;
        }
        .chat_popup__cnt .header__cnt .urist_content__cnt .urist_content .action .write .points span {
            margin: 0 2px;
            width: 4px;
            height: 4px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            opacity: 1;
            background-color: rgb(57 57 57 / 80%);
            display: block;
        }
        .chat_popup__cnt .header__cnt .urist_content__cnt .urist_content .action .write .points span:nth-child(1) {
            animation: dots 1.2s linear .3s infinite;
        }
        .chat_popup__cnt .header__cnt .urist_content__cnt .urist_content .action .write .points span:nth-child(2) {
            animation: dots 1.2s linear .6s infinite;
        }
        .chat_popup__cnt .header__cnt .urist_content__cnt .urist_content .action .write .points span:nth-child(3) {
            animation: dots 1.2s linear .9s infinite;
        }
        .chat_popup__cnt .header__cnt .urist_content__cnt .urist_content .action .write .text {
            font-style: italic;
            font-weight: 400;
            font-size: 14px;
            line-height: 145%;
            color: rgb(57 57 57 / 80%);
        }
        @keyframes dots {
            from {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        .chat_popup__cnt .body__cnt {
            max-width: 1040px;
            margin: 20px auto;
        }
        .chat_popup__cnt .body__cnt .audio_type__cnt {
            margin: 20px;
            cursor: pointer;
        }
        .chat_popup__cnt .body__cnt .audio_type {
            box-shadow: 0px 4px 14px rgb(0 0 0 / 12%);
            border-radius: 61px;
            max-width: 300px;
            margin: auto;
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: 24px auto;
            grid-column-gap: 4px;
            grid-row-gap: 4px;
            padding: 8px 12px;
            align-items: center;
            justify-content: center;
            width: fit-content;
        }
        .chat_popup__cnt .body__cnt .audio_type.off {
            background: #99C7FF;
        }
        .chat_popup__cnt .body__cnt .audio_type.on {
            background: #5381F6;     
        }
        .chat_popup__cnt .body__cnt .audio_type .icon_sound_low,
        .chat_popup__cnt .body__cnt .audio_type .icon_sound_high {
            height: 24px;
            width: 24px;
        }
        .chat_popup__cnt .body__cnt .audio_type.off .icon_sound_low,
        .chat_popup__cnt .body__cnt .audio_type.on .icon_sound_high {
            display: none;
        }
        .chat_popup__cnt .body__cnt .audio_type.on .icon_sound_low,
        .chat_popup__cnt .body__cnt .audio_type.off .icon_sound_high {
            display: block;
        }
        .chat_popup__cnt .body__cnt .audio_type .text {
            font-weight: 600;
            font-size: 16px;
            line-height: 145%;
            color: #FFFFFF;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt {
            max-width: 75%;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .thank_block__cnt_v2 .audio_description__cnt {
            max-width: 100%!important;
        }
        
        
        .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt {
            background: #fff;
            width: auto;
            position: relative;
            border-radius: 0 14px 14px 14px;
            padding: 10px;
            margin-bottom: 10px;
            position: relative;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt span.message_time {
            position: absolute;
            right: 20px;
            bottom: 2px;
            font-weight: 400;
            font-size: 12px;
            line-height: 145%;
            text-align: right;
            color: rgb(57 57 57 / 40%);
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt .controls_audio_cnt {
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: 28px auto auto;
            grid-column-gap: 16px;
            grid-row-gap: 16px;
            justify-content: flex-start;
            align-items: center;
            margin-bottom: 10px;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt .controls_audio_cnt .audio-track {
            max-height: 32px;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt .controls_audio_cnt .audio-track svg {
            -webkit-transition: all .4s ease;
            -o-transition: all .4s ease;
            transition: all .4s ease;
            /*cursor: pointer;*/
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt .controls_audio_cnt .audio-track svg path {
            -webkit-transition: all .4s ease;
            -o-transition: all .4s ease;
            transition: all .4s ease;
        }
        
        .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt .controls_audio_cnt .audio-track .time {
            height: 3px;
            width: 0%;
            background: red;
        }
        
        .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt .controls_audio_cnt .actions__btn .play,
        .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt .controls_audio_cnt .actions__btn .pause {
            cursor: pointer;
            max-height: 28px;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt .controls_audio_cnt .audio_track_duration span {
            font-style: normal;
            font-weight: 700;
            font-size: 12px;
            line-height: 145%;
            color: rgb(83 129 246 / 60%);
            display: block;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt .content__cnt {
            border-left: 2px solid #5381F6;
            padding-left: 12px;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt .content__cnt .content_btn__cnt {
            width: 24px;
            height: 10px;
            background: #5381F6;
            border-radius: 4px;
            display: grid;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            cursor: pointer;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt .content__cnt .content_btn__cnt svg {
            -webkit-transition: all .4s ease;
            -o-transition: all .4s ease;
            transition: all .4s ease;            
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt .content__cnt.show .content_btn__cnt svg {
            transform: rotate(180deg);
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt .content__cnt .text__cnt {
            /*
            -webkit-transition: all .4s ease;
            -o-transition: all .4s ease;
            transition: all .4s ease;
            */
            display: none;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt .content__cnt .text__cnt p {
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 145%;
            color: rgb(57 57 57 / 80%);
            margin-bottom: 0;
        }
        /*
        .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt .content__cnt.show .text__cnt p {
            display: block;
            opacity: 1;
        }
        */
            
        
        
        
        .chat_popup__cnt .body__cnt .questions_content__cnt .description__cnt {
            max-width: 75%;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .description__cnt p {
            background: #FFFFFF;
            border-radius: 0px 14px 14px 14px;
            padding: 10px 15px 12px 15px;
            font-weight: 500;
            font-size: 16px;
            line-height: 145%;
            color: rgb(57 57 57 / 80%);
            margin-bottom: 10px;
            position: relative;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .description__cnt p span {
            position: absolute;
            right: 20px;
            bottom: 2px;
            font-weight: 400;
            font-size: 12px;
            line-height: 145%;
            text-align: right;
            color: rgb(57 57 57 / 40%);
        }
        /*
        .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt .description__cnt p span:not(.block) {
            display: none;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt .description__cnt p span:not(.block):first-child {
            display: block!important;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt .description__cnt p span.name:not(.block):first-child {
            display: inline-block!important;
        }
        */
        
        .chat_popup__cnt .body__cnt .questions_content__cnt .description__cnt p span.block {
            display: block;
            text-align: left;
            position: relative;
            bottom: auto;
            left: auto;
            right: auto;
            font-weight: 500;
            font-size: 16px;
            line-height: 145%;
            color: rgb(57 57 57 / 80%);
            margin-bottom: 10px;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .description__cnt p span.name {
            display: inline-block;
            text-align: left;
            position: relative;
            bottom: auto;
            left: auto;
            right: auto;
            font-weight: 500;
            font-size: 16px;
            line-height: 145%;
            color: rgb(57 57 57 / 80%);
            margin-bottom: 0px;            
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .variations__cnt {
            max-width: 75%;
            background: #FFFFFF;
            border-radius: 0px 14px 14px 14px;
            padding: 10px 15px 10px;
            margin-bottom: 30px;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .variations__cnt p.intro_text {
            font-weight: 400;
            font-size: 14px;
            line-height: 145%;
            color: rgb(57 57 57 / 80%);
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .variations__cnt .calculation__variants_v2 {
            margin-bottom: 16px;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .variations__cnt .calculation__variants_v2 .calculation__radio {
            background: transparent;
            -webkit-box-shadow: none;
            box-shadow: none;
            min-height: auto;
            margin-left: 0;
            padding-left: 28px;
            width: auto;
            margin-bottom: 0px;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .variations__cnt .calculation__variants_v2 .calculation__radio+.calculation__radio {
            margin-top: 20px;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .variations__cnt .calculation__variants_v2 .calculation__radio  .radio__new--accent {
            left: 0;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .variations__cnt .selected_answer_text__cnt .line__cnt {
            background: #D9D9D9;
            height: 4px;
            width: 100%;
            border-radius: 2px;
            position: relative;
            margin-bottom: 10px;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .variations__cnt .selected_answer_text__cnt .line__cnt .selected_percent {
            position: absolute;
            left: 0;
            top: 0;
            height: 4px;
            width: 0%;
            background: #5381F6;
            border-radius: 2px;
            -webkit-transition: all .4s ease;
            -o-transition: all .4s ease;
            transition: all .4s ease;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .variations__cnt .selected_answer_text__cnt p {
            margin-bottom: 0;
            min-height: 20px;
            position: relative;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .variations__cnt .selected_answer_text__cnt p span.text {
            font-weight: 600;
            font-size: 14px;
            line-height: 145%;
            color: #5381F6;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .variations__cnt .selected_answer_text__cnt p span.date {
            position: absolute;
            right: 0;
            bottom: 0;
            font-weight: 400;
            font-size: 12px;
            line-height: 145%;
            text-align: right;
            color: rgb(57 57 57 / 40%);
        }
        
        .chat_popup__cnt .body__cnt .questions_content__cnt .answer__cnt {
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: auto;
            grid-column-gap: 0;
            grid-row-gap: 0;
            justify-content: flex-end;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .answer__cnt.hidden {
            display: none;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .answer__cnt .variation__cnt {
            margin-bottom: 30px;
            background: #5381F6;
            border-radius: 14px 0px 14px 14px;
            padding: 10px 15px 15px;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .answer__cnt .not_selected_answer {
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: auto 40px;
            grid-column-gap: 4px;
            grid-row-gap: 4px;
            align-items: center;
            position: relative;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .answer__cnt .points__cnt {
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: 8px 8px 8px;
            grid-column-gap: 4px;
            grid-row-gap: 4px;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .answer__cnt .points__cnt.hidden {
            display: none;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .answer__cnt .points__cnt span {
            margin: 0 4px;
            width: 8px;
            height: 8px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            opacity: 1;
            background-color: #fff;
            display: block;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .answer__cnt .points__cnt span:nth-child(1) {
            animation: dots 1.2s linear .3s infinite;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .answer__cnt .points__cnt span:nth-child(2) {
            animation: dots 1.2s linear .3s infinite;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .answer__cnt .points__cnt span:nth-child(3) {
            animation: dots 1.2s linear .3s infinite;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .answer__cnt .selected_answer, 
        .chat_popup__cnt .body__cnt .questions_content__cnt .answer__cnt .selected_answer span {
            font-weight: 500;
            font-size: 14px;
            line-height: 145%;
            color: #FFFFFF;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .answer__cnt .date__cnt {
            text-align: right;
            position: absolute;
            bottom: -12px;
            right: 0;
        }
        .chat_popup__cnt .body__cnt .questions_content__cnt .answer__cnt .date__cnt span {
            font-weight: 400;
            font-size: 12px;
            line-height: 145%;
            color: rgb(255 255 255 / 80%);
        }
        
        
        .chat_popup__cnt .body__cnt .result_form__cnt {
            max-width: 75%;
            margin-bottom: 10px;
        }
        .chat_popup__cnt .body__cnt .result_form__cnt form .form__row input[type=text],
        .chat_popup__cnt .body__cnt .result_form__cnt form .form__row input[type=tel] {
            background: #FFFFFF;
            box-shadow: 0px 4px 14px rgb(0 0 0 / 12%);
            border-radius: 10px;
            text-align: left;
        }

        .chat_popup__cnt .body__cnt .thank_block__cnt_v2 {
            max-width: 75%;
            margin-top: 20px;
        }
        .chat_popup__cnt .body__cnt .thank_block__cnt_v2 .audio_description__cnt {
            display: none;
        }
        .chat_popup__cnt .body__cnt .thank_block__cnt_v2.show .audio_description__cnt {
            display: block;
        }
        .chat_popup__cnt .body__cnt .thank_block__cnt_v2 .row__cnt {
            background: #EFFFF4;
            border-radius: 0px 28px 28px 28px;
            /*padding: 20px;*/
            margin-bottom: 20px;
        }
        .chat_popup__cnt .body__cnt .thank_block__cnt_v2 .row__cnt p {
            font-weight: 500;
            font-size: 16px;
            line-height: 145%;
            color: rgb(57 57 57 / 80%);
            padding: 20px;
        }
        .chat_popup__cnt .body__cnt .thank_block__cnt_v2 .row__cnt p:first-child {
            padding-bottom: 0!important;
        }
        .chat_popup__cnt .body__cnt .thank_block__cnt_v2 .row__cnt p+p {
            padding-top: 0!important;
        }
        .chat_popup__cnt .body__cnt .thank_block__cnt_v2 .row__cnt p span {
            font-weight: 700;
        }
        .chat_popup__cnt .body__cnt .video_wrap__cnt {
            background: #FFFFFF;
            border-radius: 0px 14px 14px 14px;
            /*
            padding: 10px 15px 12px 15px;
            font-weight: 500;
            font-size: 16px;
            line-height: 145%;
            color: rgb(57 57 57 / 80%);
            */
            margin-bottom: 10px;
            position: relative;            
        }
        .chat_popup__cnt .body__cnt .video_wrap__cnt span {
            position: absolute;
            right: 20px;
            bottom: 2px;
            font-weight: 400;
            font-size: 12px;
            line-height: 145%;
            text-align: right;
            color: rgb(57 57 57 / 40);            
        }
        .chat_popup__cnt .body__cnt .video__cnt {
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: calc(50% - 10px) calc(50% - 10px);
            grid-column-gap: 20px;
            grid-row-gap: 20px;
            padding: 10px 15px 20px 15px;
        }
        .chat_popup__cnt .body__cnt .video__cnt .video_item__cnt .reviews__video {
            margin-bottom: 0;
        }
        
        .chat_popup__cnt .wpcf7 form.sent .wpcf7-response-output {
            /*background: #EFFFF4!important;*/
            background: #FFF!important;
            border-radius: 0px 28px 28px 28px!important;
            padding: 10px 15px 12px 15px!important;
            margin: 10px 0!important;
            border-color: transparent!important;
            color: rgb(57 57 57 / 80%)!important;
        }
        

        
        body.page-template-bankruptcy4cost .popup__cnt .popup-item__cnt .steps__cnt {
            margin-top: 50px;
            display: none;
            
            position: sticky;
            z-index: 999;
            background: #e5e5e6;
            left: 0;
            width: 100%;
            top: 0;
            
            
        }
        body.page-template-bankruptcy4cost .popup__cnt .popup-item__cnt .steps__cnt .h3 {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 145%;
            text-align: center;
            margin-bottom: 10px;
            padding-top: 10px;
        }
        body.page-template-bankruptcy4cost .popup__cnt .popup-item__cnt.mfc-bankruptcy__number-1 .steps__cnt .h3 {
            color: #5381F6;
        }
        body.page-template-bankruptcy4cost .popup__cnt .popup-item__cnt.mfc-bankruptcy__number-2 .steps__cnt .h3 {
            color: #FB5A80;
        }
        body.page-template-bankruptcy4cost .popup__cnt .popup-item__cnt.mfc-bankruptcy__number-3 .steps__cnt .h3 {
            color: #17CC5F;
        }
        body.page-template-bankruptcy4cost .popup__cnt .popup-item__cnt.mfc-bankruptcy__number-4 .steps__cnt .h3 {
            color: #7A55D9;
        }
        body.page-template-bankruptcy4cost .popup__cnt .popup-item__cnt .steps__cnt .steps__wrap svg {
            max-width: 100%;
            width: 100%;
            margin-bottom: 10px;
        }
        body.page-template-bankruptcy4cost .popup__cnt .popup-item__cnt .steps__cnt .steps__wrap svg path {
            -webkit-transition: all .4s ease;
            -o-transition: all .4s ease;
            transition: all .4s ease;            
        }
        body.page-template-bankruptcy4cost .popup__cnt .popup-item__cnt .notice:not(.hidden) {
            display: grid!important; 
        }
        body.page-template-bankruptcy4cost .popup-item__cnt .calculation--inpost {
            margin: 50px 0 10px!important;
        }
        
        body.page-template-bankruptcy4cost .popup-item__cnt .situation_identical__cnt {
            text-align: center;
            margin-bottom: 40px;
        }
        body.page-template-bankruptcy4cost .popup-item__cnt .situation_identical__cnt span {
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            line-height: 145%;
            text-align: center;
            color: #393939;
        }
        body.page-template-bankruptcy4cost .popup-item__cnt .situation_identical__cnt span span {
            font-weight: 700;
        }
        body.page-template-bankruptcy4cost .popup-item__cnt.color_scheme_blue .situation_identical__cnt span span {
            color: #5381F6;
        }
        body.page-template-bankruptcy4cost .popup-item__cnt.color_scheme_red .situation_identical__cnt span span {
            color: #FB5A80;
        }
        body.page-template-bankruptcy4cost .popup-item__cnt.color_scheme_green .situation_identical__cnt span span {
            color: #17CC5F;
        }
        body.page-template-bankruptcy4cost .popup-item__cnt.color_scheme_purple .situation_identical__cnt span span {
            color: #7A55D9;
        }
        
        /* New */
        .chat_popup__cnt .header__cnt .urist_content__cnt {
            grid-template-columns: 48px auto;
        }
        .chat_popup__cnt .header__cnt .urist_content__cnt .icon {
            width: 48px;
            height: 48px;
        }
        .chat_popup__cnt .header__cnt .urist_content__cnt .urist_content .name {
            font-size: 20px;
        }
        /* New */
        
        @media (max-width: 1088px) {
            .chat_popup__cnt .header__cnt .header__wrapper {
                margin: 0 24px;
            }
            .chat_popup__cnt .body__cnt {
                margin: 20px 24px;
            }
        }
        @media (max-width: 768px) {
            
            body.page-template-bankruptcy4cost .popup__cnt .popup-item__cnt .steps__cnt {
                display: block;
            }
            body.page-template-bankruptcy4cost .popup__cnt .popup-item__cnt .calculation__title-head {
                display: none;
            }
            
            .chat_popup__cnt .header__cnt .urist_content__cnt {
                grid-template-columns: 48px auto;
            }
            .chat_popup__cnt .header__cnt .urist_content__cnt .icon {
                width: 48px;
                height: 48px;
            }
            .chat_popup__cnt .header__cnt .urist_content__cnt .urist_content .name {
                font-size: 20px;
            }
            .chat_popup__cnt .body__cnt .audio_type .text {
                font-size: 14px;
            }
            .chat_popup__cnt .body__cnt .questions_content__cnt .description__cnt p {
                font-size: 14px;
            }
            .chat_popup__cnt .body__cnt .questions_content__cnt .description__cnt p span.block {
                font-size: 14px!important;
            }
            .chat_popup__cnt .body__cnt .questions_content__cnt .description__cnt p span.name {
                font-size: 14px!important;
            }
            .chat_popup__cnt .body__cnt .questions_content__cnt .variations__cnt p.intro_text {
                font-size: 12px;
            }
            .chat_popup__cnt .body__cnt .questions_content__cnt .variations__cnt .calculation__variants_v2 .calculation__radio+.calculation__radio {
                margin-top: 10px;
            }
            .chat_popup__cnt .body__cnt .questions_content__cnt .variations__cnt {
                margin-bottom: 20px;
            }
            .chat_popup__cnt .body__cnt .questions_content__cnt .answer__cnt .variation__cnt {
                margin-bottom: 20px;
            }
            .chat_popup__cnt .body__cnt .questions_content__cnt .answer__cnt .selected_answer, 
            .chat_popup__cnt .body__cnt .questions_content__cnt .answer__cnt .selected_answer span {
                font-size: 14px;
            }
            .chat_popup__cnt .body__cnt .thank_block__cnt p {
                font-size: 14px;
            }
            .chat_popup__cnt .body__cnt .video__cnt {
                grid-template-columns: 100%;
            }
            .chat_popup__cnt .body__cnt .questions_content__cnt .variations__cnt .selected_answer_text__cnt p span.text {
                font-size: 12px;
            }
            .chat_popup__cnt .body__cnt .questions_content__cnt .variations__cnt .selected_answer_text__cnt p span.date {
                font-size: 12px;
            }
            
            .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt .controls_audio_cnt .audio-track svg {
                max-width: 100%;
            }
            
            
        }        
        @media (max-width: 576px) {
            body.page-template-bankruptcy4cost .popup__cnt .popup-item__cnt.mfc-bankruptcy__number-1 .steps__cnt .h3 {
                font-size: 14px;
            }
            .chat_popup__cnt .body__cnt .questions_content__cnt .description__cnt p {
                font-size: 13px;
            }
            .chat_popup__cnt .body__cnt .questions_content__cnt .description__cnt p span.block {
                font-size: 13px!important;
            }
            .chat_popup__cnt .body__cnt .questions_content__cnt .description__cnt p span.name {
                font-size: 13px!important;
            }
            .chat_popup__cnt .body__cnt .questions_content__cnt .description__cnt p span {
                font-size: 10px;
            }
            .chat_popup__cnt .header__cnt .urist_content__cnt {
                grid-template-columns: 42px auto;
            }
            .chat_popup__cnt .header__cnt .urist_content__cnt .icon {
                width: 42px;
                height: 42px;
            }
            .chat_popup__cnt .header__cnt .urist_content__cnt .urist_content .name {
                font-size: 14px;
            }
            .chat_popup__cnt .header__cnt .urist_content__cnt .urist_content .action .write .text {
                font-size: 12px;
            }
            .chat_popup__cnt .header__cnt .urist_content__cnt .urist_content .action .write_paused .text {
                font-size: 12px;
            }
            .chat_popup__cnt .body__cnt .audio_type .text {
                font-size: 12px;
            }
            .chat_popup__cnt .body__cnt .questions_content__cnt .variations__cnt .selected_answer_text__cnt p span.text {
                font-size: 10px;
            }
            .chat_popup__cnt .body__cnt .questions_content__cnt .variations__cnt .selected_answer_text__cnt p span.date {
                font-size: 10px;
            }
            .chat_popup__cnt .body__cnt .questions_content__cnt .answer__cnt .date__cnt span {
                font-size: 10px;
            }
            .chat_popup__cnt .body__cnt .questions_content__cnt .variations__cnt p.intro_text {
                font-size: 12px;
            }
            .chat_popup__cnt .body__cnt .questions_content__cnt .variations__cnt .calculation__variants_v2 .calculation__radio+.calculation__radio {
                margin-top: 10px;
            }
            .chat_popup__cnt .body__cnt .questions_content__cnt .variations__cnt {
                margin-bottom: 20px;
            }
            .chat_popup__cnt .body__cnt .questions_content__cnt .answer__cnt .variation__cnt {
                margin-bottom: 20px;
            }
            .chat_popup__cnt .body__cnt .questions_content__cnt .answer__cnt .selected_answer, 
            .chat_popup__cnt .body__cnt .questions_content__cnt .answer__cnt .selected_answer span {
                font-size: 12px;
            }
            .chat_popup__cnt .body__cnt .thank_block__cnt p {
                font-size: 14px;
            }
            .chat_popup__cnt .body__cnt .video__cnt {
                grid-template-columns: 100%;
            }
        }
        @media (max-width: 360px) {
            body.page-template-bankruptcy4cost .popup__cnt .popup-item__cnt.mfc-bankruptcy__number-1 .steps__cnt .h3 {
                font-size: 12px;
            }
        }
    </style>
    <!--
    <link rel="stylesheet" href="/wp-content/themes/fpalaw/assets/css/tinyPlayer/tinyPlayer.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.0.13/howler.min.js"></script>
    <script src="/wp-content/themes/fpalaw/js/tinyPlayer/tinyPlayer.min.js"></script>
    -->
    
    <div class="chat_popup__cnt hidden">
        <div class="header__cnt">
            <div class="header__wrapper">
                <div class="back_arrow__cnt">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.25 25L6.25 16M6.25 16L15.25 7M6.25 16H25.75" stroke="#5381F6" stroke-width="2.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <div class="urist_content__cnt">
                    <div class="icon">
                        <div class="bg"></div>
                    </div>
                    <div class="urist_content">
                        <div class="name">Боднар Евгения Ивановна</div>
                        <div class="action">
                            <div class="write">
                                <div class="points">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="text">Печатает</div>
                            </div>
                            <div class="write_paused hidden">
                                <div class="text">В сети</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="phone__cnt">
                    <a class="mobile_link" href="tel:88005118139">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.3293 26.6667C13.9546 26.6827 5.32126 17.9467 5.33326 6.67071C5.33326 5.93337 5.9306 5.33337 6.6666 5.33337H10.1866C10.8466 5.33337 11.4079 5.81871 11.5053 6.47204C11.7374 8.03878 12.1932 9.5641 12.8586 11.0014L12.9959 11.2974C13.0882 11.4966 13.108 11.7217 13.052 11.934C12.9961 12.1462 12.8678 12.3323 12.6893 12.46C11.5986 13.2387 11.1826 14.8054 12.0319 16.0267C13.1012 17.5645 14.4359 18.8995 15.9733 19.9694C17.1959 20.8174 18.7626 20.4014 19.5399 19.312C19.6676 19.133 19.8538 19.0042 20.0663 18.948C20.2789 18.8917 20.5044 18.9116 20.7039 19.004L20.9986 19.14C22.4359 19.8067 23.9613 20.2627 25.5279 20.4947C26.1813 20.592 26.6666 21.1534 26.6666 21.8147V25.3334C26.6666 25.5086 26.6321 25.6821 26.565 25.8439C26.4979 26.0058 26.3996 26.1528 26.2756 26.2767C26.1516 26.4005 26.0045 26.4987 25.8426 26.5656C25.6807 26.6325 25.5071 26.6669 25.3319 26.6667H25.3293Z" fill="#5381F6"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="body__cnt">
           <div class="audio_type__cnt ">
                <div class="audio_type off">
                    <div class="icon_sound_high">
                        <svg width="24" height="24" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5 7.5C18.5 7.5 20 9 20 11.5C20 14 18.5 15.5 18.5 15.5" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 14V10C4 9.44772 4.44772 9 5 9H7.69722C7.89465 9 8.08766 8.94156 8.25192 8.83205L12.4453 6.03647C13.1099 5.59343 14 6.06982 14 6.86852V17.1315C14 17.9302 13.1099 18.4066 12.4453 17.9635L8.25192 15.1679C8.08766 15.0584 7.89465 15 7.69722 15H5C4.44772 15 4 14.5523 4 14Z" stroke="#ffffff" stroke-width="1.5"/></svg>
                    </div>
                    <div class="icon_sound_low">
                        <svg width="24" height="24" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 14L19.0005 12M21 10L19.0005 12M19.0005 12L17 10M19.0005 12L21 14" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"/><path d="M3 14V10C3 9.44772 3.44772 9 4 9H6.69722C6.89465 9 7.08766 8.94156 7.25192 8.83205L11.4453 6.03647C12.1099 5.59343 13 6.06982 13 6.86852V17.1315C13 17.9302 12.1099 18.4066 11.4453 17.9635L7.25192 15.1679C7.08766 15.0584 6.89465 15 6.69722 15H4C3.44772 15 3 14.5523 3 14Z" stroke="#ffffff" stroke-width="1.5"/></svg>
                    </div>
                    <div class="text">Включить голосовую версию</div>
                </div>
                <!--
                <audio controls class="iru-tiny-player" data-title="Sample Audio File">
                    <source src="https://www.jqueryscript.net/demo/Cross-Platform-Audio-Player-tinyPlayer/audio.mp3" type="audio/mpeg">
                </audio>
                -->
           </div>
           <div class="questions_content__cnt">
               <?php
                   $chat_questions = get_field('chat_popup');
                   /*print_r($chat_content);*/
                ?>
               <?php
                if ($chat_questions) {
                    $question_item_class = '';
                    foreach($chat_questions as $key => $value) {
                        $question_item_class = 'hidden';
                        /*
                        if ($key > 0) {
                            $question_item_class = 'hidden';
                        } else {
                            $question_item_class = '';
                        }
                        */
                ?>
                        <div class="question_item__cnt not_answered <?=$question_item_class; ?>">
                            <div class="audio_description__cnt hidden">
                                <?php
                                    foreach( $value['audio_messages'] as $audio_messages_key => $audio_messages_value ) {
                                ?>
                                        <div class="custom_player_item__cnt hidden">
                                            <div class="audio__cnt">
                                                <audio controls class="hidden" id="audio_file_<?=$key; ?>_<?=$audio_messages_key; ?>">
                                                    <?php if ($audio_messages_value['audio_file_mp3']['url']) { ?>
                                                        <source src="<?=$audio_messages_value['audio_file_mp3']['url']; ?>" type="audio/mpeg">
                                                    <?php }?>
                                                    <?php if ($audio_messages_value['audio_file_ogg']['url']) { ?>
                                                        <source src="<?=$audio_messages_value['audio_file_ogg']['url']; ?>" type="audio/ogg">
                                                    <?php }?>
                                                    <?php if ($audio_messages_value['audio_file_wav']['url']) { ?>
                                                        <source src="<?=$audio_messages_value['audio_file_wav']['url']; ?>" type="audio/wav">
                                                    <?php }?>
                                                </audio>
                                                <div class="controls_audio_cnt">
                                                    <div class="actions__btn">
                                                        <div class="play">
                                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 0C6.26875 0 0 6.26875 0 14C0 21.7313 6.26875 28 14 28C21.7313 28 28 21.7313 28 14C28 6.26875 21.7313 0 14 0ZM18.5031 14.2156L11.6781 19.1812C11.6407 19.2081 11.5966 19.2242 11.5507 19.2276C11.5047 19.2311 11.4587 19.2218 11.4177 19.2008C11.3767 19.1798 11.3422 19.1479 11.3182 19.1087C11.2941 19.0694 11.2813 19.0242 11.2812 18.9781V9.05313C11.2811 9.00696 11.2937 8.96165 11.3178 8.92222C11.3418 8.8828 11.3762 8.85079 11.4173 8.82976C11.4584 8.80873 11.5046 8.79948 11.5506 8.80305C11.5966 8.80663 11.6408 8.82288 11.6781 8.85L18.5031 13.8125C18.5354 13.8353 18.5617 13.8655 18.5798 13.9006C18.598 13.9357 18.6075 13.9746 18.6075 14.0141C18.6075 14.0536 18.598 14.0925 18.5798 14.1275C18.5617 14.1626 18.5354 14.1928 18.5031 14.2156Z" fill="#5381F6"/></svg>
                                                        </div>
                                                        <div class="pause hidden">
                                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 0C6.26875 0 0 6.26875 0 14C0 21.7313 6.26875 28 14 28C21.7313 28 28 21.7313 28 14C28 6.26875 21.7313 0 14 0ZM11.5 18.75C11.5 18.8875 11.3875 19 11.25 19H9.75C9.6125 19 9.5 18.8875 9.5 18.75V9.25C9.5 9.1125 9.6125 9 9.75 9H11.25C11.3875 9 11.5 9.1125 11.5 9.25V18.75ZM18.5 18.75C18.5 18.8875 18.3875 19 18.25 19H16.75C16.6125 19 16.5 18.8875 16.5 18.75V9.25C16.5 9.1125 16.6125 9 16.75 9H18.25C18.3875 9 18.5 9.1125 18.5 9.25V18.75Z" fill="#5381F6"/></svg>
                                                        </div>
                                                    </div>
                                                    <div class="audio-track">
                                                        <?=$audio_messages_value['svg']; ?>
                                                        <div class="time"></div>
                                                    </div>
                                                    <div class="audio_track_duration">
                                                        <span><?=$audio_messages_value['audio_length']; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="content__cnt">
                                                <div class="content_btn__cnt">
                                                    <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.79445 4.89225C2.81739 4.92556 2.84808 4.9528 2.88388 4.97161C2.91968 4.99043 2.95951 5.00026 2.99995 5.00026C3.0404 5.00026 3.08023 4.99043 3.11603 4.97161C3.15183 4.9528 3.18252 4.92556 3.20545 4.89225L5.45545 1.64225C5.4815 1.60476 5.49677 1.56086 5.49961 1.5153C5.50245 1.46975 5.49276 1.42428 5.47158 1.38385C5.45039 1.34342 5.41853 1.30956 5.37946 1.28596C5.34039 1.26237 5.2956 1.24993 5.24995 1.25H0.749954C0.704415 1.25019 0.659788 1.26279 0.620874 1.28644C0.581959 1.3101 0.550229 1.34391 0.529096 1.38425C0.507962 1.42459 0.498225 1.46992 0.500931 1.51538C0.503637 1.56084 0.518684 1.6047 0.544454 1.64225L2.79445 4.89225Z" fill="white"/></svg>
                                                </div>
                                                <div class="text__cnt">
                                                    <p><?=$audio_messages_value['description']; ?></p>
                                                </div>
                                            </div>
                                            <span class="message_time">00:00</span>
                                        </div>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="description__cnt">
                                <?=$value['description']; ?>
                            </div>
                            <div class="variations__cnt hidden">
                                <p class="intro_text">Ответ:</p>
                                <div class="calculation__variants_v2">
                                    <?php 
                                        foreach( $value['answers'] as $answer_key => $answer_value ) { 
                                            $answer_option_key = 'answer_option_'.$value['question']['value'];
                                            $randim_id = rand(1, 1000000);
                                            $video_list = '';
                                            switch ($answer_value[$answer_option_key][$answer_option_key.'_variant']['value']) {
                                                case 'unemployed':
                                                    $video_list = 'cVGt6LHQzAE,fHJ_cmLO7bI,graQHUjh-oo,0-l6WnOwGjc,2GSU20NbUPY,HWIjYGADQNE';
                                                    break;
                                                case 'ipoteka':
                                                    $video_list = '2ln4JJbxmfo,fuo74cXDoIk,jH2Fw4z5xm0,LCKem02kDL0,9Ptf86U90k8,Iy_oGdudJm4';
                                                    break;
                                                case 'single_parent':
                                                    $video_list = '67B51nUyUs4,d1ZxVdQD09M,9y6Ae87hpwc,gmXaUCku4cs,hKttHSHgEi4,ECGKk5fA9N8';
                                                    break;
                                                case 'pensioner':
                                                    $video_list = 'UhQNT2p0N_s,5dLyXVCOAWc,317ic7T4H7M,tKHfLGh1YWY,0vXzxjHSVM0,h5fve_W2si4';
                                                    break;
                                                case 'invalid':
                                                    $video_list = 'cJwDtEmlHTM,HzrOAuJ2V3Y,6yJKyEDYh4Q,akPMJyl3DEg,irMBA8-n0Rg,x4-CqnAvTJs';
                                                    break;
                                                case 'parent_under_three_year':
                                                    $video_list = '67B51nUyUs4,d1ZxVdQD09M,9y6Ae87hpwc,gmXaUCku4cs,hKttHSHgEi4,ECGKk5fA9N8';
                                                    break;
                                                case 'parent_with_two_children':
                                                    $video_list = '67B51nUyUs4,d1ZxVdQD09M,9y6Ae87hpwc,gmXaUCku4cs,hKttHSHgEi4,ECGKk5fA9N8';
                                                    break;
                                                case 'ip':
                                                    $video_list = '9Ptf86U90k8,SJo3f6wXkcI,NuzciIJq_ZY,Mqu8dCoX1wg,2_9jBz5UgZ4,PLhyUgS95e4';
                                                    break;
                                                case 'army':
                                                    $video_list = 'B2tTeuFGMx0,R0w281t-8yg';
                                                    break;
                                                case 'police':
                                                    $video_list = 'algfnJXZHy0,67B51nUyUs4,KmCTlpYRvi0,7-yvYUrT7Ro,ByC-UbPtubw,Z1XG-j_NXBo';
                                                    break;
                                                case 'other':
                                                    $video_list = '2ln4JJbxmfo,fuo74cXDoIk,jH2Fw4z5xm0,LCKem02kDL0,9Ptf86U90k8,Iy_oGdudJm4';
                                                    break;
                                            }
                                    ?>
                                            <div class="<?=$value['type_answer']; ?> calculation__<?=$value['type_answer']; ?> calculation__<?=$value['type_answer']; ?>--small" data-video-list="<?=$video_list; ?>" data-percent="<?=$answer_value[$answer_option_key][$answer_option_key.'_percent']; ?>">
                                                <label for="answer_<?=$key; ?>_<?=$answer_key; ?>_<?=$randim_id; ?>" class="<?=$value['type_answer']; ?>__label <?=$value['type_answer']; ?>__label--small question_<?=$value['question']['value']; ?> question_<?=$value['question']['value']; ?>_<?=$answer_value[$answer_option_key][$answer_option_key.'_variant']['value'];?>" data-value="<?=$answer_value[$answer_option_key][$answer_option_key.'_variant']['value']; ?>"><?=$answer_value[$answer_option_key][$answer_option_key.'_variant']['label']; ?></label>
                                                <input id="answer_<?=$key; ?>_<?=$answer_key; ?>_<?=$randim_id; ?>" class="<?=$value['type_answer']; ?>__default" type="<?=$value['type_answer']; ?>" name="<?=$value['question']['value']; ?>" value="<?=$answer_value[$answer_option_key][$answer_option_key.'_variant']['label']; ?>">
                                                <span class="<?=$value['type_answer']; ?>__new <?=$value['type_answer']; ?>__new--accent"></span>
                                            </div>
                                    <?php 
                                        } 
                                    ?>
                                </div>
                                <div class="selected_answer_text__cnt">
                                    <div class="line__cnt">
                                        <div class="selected_percent"></div>
                                    </div>
                                    <p><span class="text">&nbsp;</span><span class="date"></span></p>
                                </div>
                            </div>
                            <div class="answer__cnt hidden">
                                <div class="variation__cnt">
                                    <div class="not_selected_answer">
                                        <div class="points__cnt">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                        <div class="selected_answer hidden">
                                            <span></span>
                                        </div>
                                        <div class="date__cnt">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                        }
                    }
                ?>

                <div class="question_item__cnt not_answered hidden">
                    <div class="audio_description__cnt hidden">
                        <div class="custom_player_item__cnt hidden">
                            <div class="audio__cnt">
                                <audio controls class="hidden" id="audio_file_11_1">
                                    <source src="https://fpa.ru/wp-content/uploads/2022/06/message_11.mp3" type="audio/mpeg">
                                    <source src="https://fpa.ru/wp-content/uploads/2022/06/message_11.ogg" type="audio/ogg">
                                    <source src="https://fpa.ru/wp-content/uploads/2022/06/message_11.wav" type="audio/wav">
                                </audio>
                                <div class="controls_audio_cnt">
                                    <div class="actions__btn">
                                        <div class="play">
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 0C6.26875 0 0 6.26875 0 14C0 21.7313 6.26875 28 14 28C21.7313 28 28 21.7313 28 14C28 6.26875 21.7313 0 14 0ZM18.5031 14.2156L11.6781 19.1812C11.6407 19.2081 11.5966 19.2242 11.5507 19.2276C11.5047 19.2311 11.4587 19.2218 11.4177 19.2008C11.3767 19.1798 11.3422 19.1479 11.3182 19.1087C11.2941 19.0694 11.2813 19.0242 11.2812 18.9781V9.05313C11.2811 9.00696 11.2937 8.96165 11.3178 8.92222C11.3418 8.8828 11.3762 8.85079 11.4173 8.82976C11.4584 8.80873 11.5046 8.79948 11.5506 8.80305C11.5966 8.80663 11.6408 8.82288 11.6781 8.85L18.5031 13.8125C18.5354 13.8353 18.5617 13.8655 18.5798 13.9006C18.598 13.9357 18.6075 13.9746 18.6075 14.0141C18.6075 14.0536 18.598 14.0925 18.5798 14.1275C18.5617 14.1626 18.5354 14.1928 18.5031 14.2156Z" fill="#5381F6"/></svg>
                                        </div>
                                        <div class="pause hidden">
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 0C6.26875 0 0 6.26875 0 14C0 21.7313 6.26875 28 14 28C21.7313 28 28 21.7313 28 14C28 6.26875 21.7313 0 14 0ZM11.5 18.75C11.5 18.8875 11.3875 19 11.25 19H9.75C9.6125 19 9.5 18.8875 9.5 18.75V9.25C9.5 9.1125 9.6125 9 9.75 9H11.25C11.3875 9 11.5 9.1125 11.5 9.25V18.75ZM18.5 18.75C18.5 18.8875 18.3875 19 18.25 19H16.75C16.6125 19 16.5 18.8875 16.5 18.75V9.25C16.5 9.1125 16.6125 9 16.75 9H18.25C18.3875 9 18.5 9.1125 18.5 9.25V18.75Z" fill="#5381F6"/></svg>
                                        </div>
                                    </div>
                                    <div class="audio-track">
                                        <svg width="526" height="32" viewBox="0 0 526 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 9.33333C0 8.59695 1.45369 8 3.24691 8C5.04013 8 6.49383 8.59695 6.49383 9.33333V22.6667C6.49383 23.403 5.04013 24 3.24691 24C1.45369 24 0 23.403 0 22.6667V9.33333Z" fill="#D9D9D9"/><path d="M12.9877 12C12.9877 11.2636 14.4413 10.6667 16.2346 10.6667C18.0278 10.6667 19.4815 11.2636 19.4815 12V20C19.4815 20.7364 18.0278 21.3333 16.2346 21.3333C14.4413 21.3333 12.9877 20.7364 12.9877 20V12Z" fill="#D9D9D9"/><path d="M25.9753 14.6667C25.9753 13.9303 27.429 13.3333 29.2222 13.3333C31.0154 13.3333 32.4691 13.9303 32.4691 14.6667V17.3333C32.4691 18.0697 31.0154 18.6667 29.2222 18.6667C27.429 18.6667 25.9753 18.0697 25.9753 17.3333V14.6667Z" fill="#D9D9D9"/><path d="M38.963 16C38.963 15.2636 40.4167 14.6667 42.2099 14.6667C44.0031 14.6667 45.4568 15.2636 45.4568 16C45.4568 16.7364 44.0031 17.3333 42.2099 17.3333C40.4167 17.3333 38.963 16.7364 38.963 16Z" fill="#D9D9D9"/><path d="M51.9506 10.6667C51.9506 9.93029 53.4043 9.33333 55.1975 9.33333C56.9908 9.33333 58.4444 9.93029 58.4444 10.6667V21.3333C58.4444 22.0697 56.9908 22.6667 55.1975 22.6667C53.4043 22.6667 51.9506 22.0697 51.9506 21.3333V10.6667Z" fill="#D9D9D9"/><path d="M64.9383 13.3333C64.9383 12.597 66.392 12 68.1852 12C69.9784 12 71.4321 12.597 71.4321 13.3333V18.6667C71.4321 19.403 69.9784 20 68.1852 20C66.392 20 64.9383 19.403 64.9383 18.6667V13.3333Z" fill="#D9D9D9"/><path d="M77.9259 14.6667C77.9259 13.9303 79.3796 13.3333 81.1728 13.3333C82.9661 13.3333 84.4198 13.9303 84.4198 14.6667V17.3333C84.4198 18.0697 82.9661 18.6667 81.1728 18.6667C79.3796 18.6667 77.9259 18.0697 77.9259 17.3333V14.6667Z" fill="#D9D9D9"/><path d="M90.9136 13.3333C90.9136 12.597 92.3673 12 94.1605 12C95.9537 12 97.4074 12.597 97.4074 13.3333V18.6667C97.4074 19.403 95.9537 20 94.1605 20C92.3673 20 90.9136 19.403 90.9136 18.6667V13.3333Z" fill="#D9D9D9"/><path d="M103.901 8C103.901 7.26362 105.355 6.66667 107.148 6.66667C108.941 6.66667 110.395 7.26362 110.395 8V24C110.395 24.7364 108.941 25.3333 107.148 25.3333C105.355 25.3333 103.901 24.7364 103.901 24V8Z" fill="#D9D9D9"/><path d="M116.889 12C116.889 11.2636 118.343 10.6667 120.136 10.6667C121.929 10.6667 123.383 11.2636 123.383 12V20C123.383 20.7364 121.929 21.3333 120.136 21.3333C118.343 21.3333 116.889 20.7364 116.889 20V12Z" fill="#D9D9D9"/><path d="M129.877 13.3333C129.877 12.597 131.33 12 133.123 12C134.917 12 136.37 12.597 136.37 13.3333V18.6667C136.37 19.403 134.917 20 133.123 20C131.33 20 129.877 19.403 129.877 18.6667V13.3333Z" fill="#D9D9D9"/><path d="M142.864 14.6667C142.864 13.9303 144.318 13.3333 146.111 13.3333C147.904 13.3333 149.358 13.9303 149.358 14.6667V17.3333C149.358 18.0697 147.904 18.6667 146.111 18.6667C144.318 18.6667 142.864 18.0697 142.864 17.3333V14.6667Z" fill="#D9D9D9"/><path d="M155.852 5.33333C155.852 4.59695 157.306 4 159.099 4C160.892 4 162.346 4.59695 162.346 5.33333V26.6667C162.346 27.403 160.892 28 159.099 28C157.306 28 155.852 27.403 155.852 26.6667V5.33333Z" fill="#D9D9D9"/><path d="M168.84 6.66667C168.84 5.93029 170.293 5.33333 172.086 5.33333C173.88 5.33333 175.333 5.93029 175.333 6.66667V25.3333C175.333 26.0697 173.88 26.6667 172.086 26.6667C170.293 26.6667 168.84 26.0697 168.84 25.3333V6.66667Z" fill="#D9D9D9"/><path d="M181.827 9.33333C181.827 8.59695 183.281 8 185.074 8C186.867 8 188.321 8.59695 188.321 9.33333V22.6667C188.321 23.403 186.867 24 185.074 24C183.281 24 181.827 23.403 181.827 22.6667V9.33333Z" fill="#D9D9D9"/><path d="M194.815 9.33333C194.815 8.59695 196.269 8 198.062 8C199.855 8 201.309 8.59695 201.309 9.33333V22.6667C201.309 23.403 199.855 24 198.062 24C196.269 24 194.815 23.403 194.815 22.6667V9.33333Z" fill="#D9D9D9"/><path d="M207.802 12C207.802 11.2636 209.256 10.6667 211.049 10.6667C212.843 10.6667 214.296 11.2636 214.296 12V20C214.296 20.7364 212.843 21.3333 211.049 21.3333C209.256 21.3333 207.802 20.7364 207.802 20V12Z" fill="#D9D9D9"/><path d="M220.79 14.6667C220.79 13.9303 222.244 13.3333 224.037 13.3333C225.83 13.3333 227.284 13.9303 227.284 14.6667V17.3333C227.284 18.0697 225.83 18.6667 224.037 18.6667C222.244 18.6667 220.79 18.0697 220.79 17.3333V14.6667Z" fill="#D9D9D9"/><path d="M233.778 14.6667C233.778 13.9303 235.231 13.3333 237.025 13.3333C238.818 13.3333 240.272 13.9303 240.272 14.6667V17.3333C240.272 18.0697 238.818 18.6667 237.025 18.6667C235.231 18.6667 233.778 18.0697 233.778 17.3333V14.6667Z" fill="#D9D9D9"/><path d="M246.765 9.33333C246.765 8.59695 248.219 8 250.012 8C251.806 8 253.259 8.59695 253.259 9.33333V22.6667C253.259 23.403 251.806 24 250.012 24C248.219 24 246.765 23.403 246.765 22.6667V9.33333Z" fill="#D9D9D9"/><path d="M259.753 6.66667C259.753 5.93029 261.207 5.33333 263 5.33333C264.793 5.33333 266.247 5.93029 266.247 6.66667V25.3333C266.247 26.0697 264.793 26.6667 263 26.6667C261.207 26.6667 259.753 26.0697 259.753 25.3333V6.66667Z" fill="#D9D9D9"/><path d="M272.741 8C272.741 7.26362 274.194 6.66667 275.988 6.66667C277.781 6.66667 279.235 7.26362 279.235 8V24C279.235 24.7364 277.781 25.3333 275.988 25.3333C274.194 25.3333 272.741 24.7364 272.741 24V8Z" fill="#D9D9D9"/><path d="M285.728 14.6667C285.728 13.9303 287.182 13.3333 288.975 13.3333C290.769 13.3333 292.222 13.9303 292.222 14.6667V17.3333C292.222 18.0697 290.769 18.6667 288.975 18.6667C287.182 18.6667 285.728 18.0697 285.728 17.3333V14.6667Z" fill="#D9D9D9"/><path d="M298.716 13.3333C298.716 12.597 300.17 12 301.963 12C303.756 12 305.21 12.597 305.21 13.3333V18.6667C305.21 19.403 303.756 20 301.963 20C300.17 20 298.716 19.403 298.716 18.6667V13.3333Z" fill="#D9D9D9"/><path d="M311.704 9.33333C311.704 8.59695 313.157 8 314.951 8C316.744 8 318.198 8.59695 318.198 9.33333V22.6667C318.198 23.403 316.744 24 314.951 24C313.157 24 311.704 23.403 311.704 22.6667V9.33333Z" fill="#D9D9D9"/><path d="M324.691 1.33333C324.691 0.596954 326.145 0 327.938 0C329.732 0 331.185 0.596954 331.185 1.33333V30.6667C331.185 31.403 329.732 32 327.938 32C326.145 32 324.691 31.403 324.691 30.6667V1.33333Z" fill="#D9D9D9"/><path d="M337.679 4C337.679 3.26362 339.133 2.66667 340.926 2.66667C342.719 2.66667 344.173 3.26362 344.173 4V28C344.173 28.7364 342.719 29.3333 340.926 29.3333C339.133 29.3333 337.679 28.7364 337.679 28V4Z" fill="#D9D9D9"/><path d="M350.667 6.66667C350.667 5.93029 352.12 5.33333 353.914 5.33333C355.707 5.33333 357.161 5.93029 357.161 6.66667V25.3333C357.161 26.0697 355.707 26.6667 353.914 26.6667C352.12 26.6667 350.667 26.0697 350.667 25.3333V6.66667Z" fill="#D9D9D9"/><path d="M363.654 8C363.654 7.26362 365.108 6.66667 366.901 6.66667C368.694 6.66667 370.148 7.26362 370.148 8V24C370.148 24.7364 368.694 25.3333 366.901 25.3333C365.108 25.3333 363.654 24.7364 363.654 24V8Z" fill="#D9D9D9"/><path d="M376.642 4C376.642 3.26362 378.096 2.66667 379.889 2.66667C381.682 2.66667 383.136 3.26362 383.136 4V28C383.136 28.7364 381.682 29.3333 379.889 29.3333C378.096 29.3333 376.642 28.7364 376.642 28V4Z" fill="#D9D9D9"/><path d="M389.63 8C389.63 7.26362 391.083 6.66667 392.877 6.66667C394.67 6.66667 396.123 7.26362 396.123 8V24C396.123 24.7364 394.67 25.3333 392.877 25.3333C391.083 25.3333 389.63 24.7364 389.63 24V8Z" fill="#D9D9D9"/><path d="M402.617 6.66667C402.617 5.93029 404.071 5.33333 405.864 5.33333C407.657 5.33333 409.111 5.93029 409.111 6.66667V25.3333C409.111 26.0697 407.657 26.6667 405.864 26.6667C404.071 26.6667 402.617 26.0697 402.617 25.3333V6.66667Z" fill="#D9D9D9"/><path d="M415.605 4C415.605 3.26362 417.059 2.66667 418.852 2.66667C420.645 2.66667 422.099 3.26362 422.099 4V28C422.099 28.7364 420.645 29.3333 418.852 29.3333C417.059 29.3333 415.605 28.7364 415.605 28V4Z" fill="#D9D9D9"/><path d="M428.593 10.6667C428.593 9.93029 430.046 9.33333 431.84 9.33333C433.633 9.33333 435.086 9.93029 435.086 10.6667V21.3333C435.086 22.0697 433.633 22.6667 431.84 22.6667C430.046 22.6667 428.593 22.0697 428.593 21.3333V10.6667Z" fill="#D9D9D9"/><path d="M441.58 4C441.58 3.26362 443.034 2.66667 444.827 2.66667C446.62 2.66667 448.074 3.26362 448.074 4V28C448.074 28.7364 446.62 29.3333 444.827 29.3333C443.034 29.3333 441.58 28.7364 441.58 28V4Z" fill="#D9D9D9"/><path d="M454.568 10.6667C454.568 9.93029 456.022 9.33333 457.815 9.33333C459.608 9.33333 461.062 9.93029 461.062 10.6667V21.3333C461.062 22.0697 459.608 22.6667 457.815 22.6667C456.022 22.6667 454.568 22.0697 454.568 21.3333V10.6667Z" fill="#D9D9D9"/><path d="M467.556 12C467.556 11.2636 469.009 10.6667 470.802 10.6667C472.596 10.6667 474.049 11.2636 474.049 12V20C474.049 20.7364 472.596 21.3333 470.802 21.3333C469.009 21.3333 467.556 20.7364 467.556 20V12Z" fill="#D9D9D9"/><path d="M480.543 13.3333C480.543 12.597 481.997 12 483.79 12C485.583 12 487.037 12.597 487.037 13.3333V18.6667C487.037 19.403 485.583 20 483.79 20C481.997 20 480.543 19.403 480.543 18.6667V13.3333Z" fill="#D9D9D9"/><path d="M493.531 14.6667C493.531 13.9303 494.985 13.3333 496.778 13.3333C498.571 13.3333 500.025 13.9303 500.025 14.6667V17.3333C500.025 18.0697 498.571 18.6667 496.778 18.6667C494.985 18.6667 493.531 18.0697 493.531 17.3333V14.6667Z" fill="#D9D9D9"/><path d="M506.519 16C506.519 15.2636 507.972 14.6667 509.765 14.6667C511.559 14.6667 513.012 15.2636 513.012 16C513.012 16.7364 511.559 17.3333 509.765 17.3333C507.972 17.3333 506.519 16.7364 506.519 16Z" fill="#D9D9D9"/><path d="M519.506 16C519.506 15.2636 520.96 14.6667 522.753 14.6667C524.546 14.6667 526 15.2636 526 16C526 16.7364 524.546 17.3333 522.753 17.3333C520.96 17.3333 519.506 16.7364 519.506 16Z" fill="#D9D9D9"/></svg>
                                        <div class="time"></div>
                                    </div>
                                    <div class="audio_track_duration">
                                        <span>00:11</span>
                                    </div>
                                </div>
                            </div>
                            <div class="content__cnt">
                                <div class="content_btn__cnt">
                                    <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.79445 4.89225C2.81739 4.92556 2.84808 4.9528 2.88388 4.97161C2.91968 4.99043 2.95951 5.00026 2.99995 5.00026C3.0404 5.00026 3.08023 4.99043 3.11603 4.97161C3.15183 4.9528 3.18252 4.92556 3.20545 4.89225L5.45545 1.64225C5.4815 1.60476 5.49677 1.56086 5.49961 1.5153C5.50245 1.46975 5.49276 1.42428 5.47158 1.38385C5.45039 1.34342 5.41853 1.30956 5.37946 1.28596C5.34039 1.26237 5.2956 1.24993 5.24995 1.25H0.749954C0.704415 1.25019 0.659788 1.26279 0.620874 1.28644C0.581959 1.3101 0.550229 1.34391 0.529096 1.38425C0.507962 1.42459 0.498225 1.46992 0.500931 1.51538C0.503637 1.56084 0.518684 1.6047 0.544454 1.64225L2.79445 4.89225Z" fill="white"/></svg>
                                </div>
                                <div class="text__cnt">
                                    <p>Отлично. Благодарю за ваши ответы! Остался всего один шаг. Укажите номер телефона и мы пришлём вам инструкцию, как пройти процедуру банкротства бесплатно именно в вашем случае.</p>
                                </div>
                            </div>
                            <span class="message_time">00:00</span>
                        </div>
                    </div>
                    <div class="description__cnt">
                        <p>Отлично. Благодарю за ваши ответы!</p>
                        <p>Остался всего один шаг. Укажите номер телефона и мы пришлём вам инструкцию, как пройти процедуру банкротства бесплатно именно в вашем случае.</p>
                    </div>
                    <div class="result_form__cnt hidden">
                        <?php echo do_shortcode("[contact-form-7 id='21305' title='Форма для онлайн-чата - Записаться на бесплатную консультацию']"); ?>
                        <div class="politics">
                            <span class="politics__icon">
                                <svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#shild"></use></svg>
                            </span>
                            <p class="politics__text">Мы гарантируем безопасность и сохранность Ваших данных. Нажимая на кнопку, вы даете согласие на обработку своих персональных данных в соответствии с <a href="https://fpa.ru/politika/">«Политикой конфиденциальности»</a></p>
                        </div>
                    </div>
                    
                    <div class="answer__cnt answer_result_form__cnt hidden">
                        <div class="variation__cnt" style="margin-bottom: 0;margin-top: 10px;">
                            <div class="not_selected_answer">
                                <div class="points__cnt hidden">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="selected_answer">
                                    <span class="customer_name"></span>, <span class="customer_phone"></span></span>
                                </div>
                                <div class="date__cnt"><span></span></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="thank_block__cnt_v2">
                        <div class="audio_description__cnt hidden">
                            <div class="custom_player_item__cnt hidden">
                                <div class="audio__cnt">
                                    <audio controls class="hidden" id="audio_file_12_1">
                                        <source src="https://fpa.ru/wp-content/uploads/2022/06/message_12.mp3" type="audio/mpeg">
                                        <source src="https://fpa.ru/wp-content/uploads/2022/06/message_12.ogg" type="audio/ogg">
                                        <source src="https://fpa.ru/wp-content/uploads/2022/06/message_12.wav" type="audio/wav">
                                    </audio>
                                    <div class="controls_audio_cnt">
                                        <div class="actions__btn">
                                            <div class="play">
                                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 0C6.26875 0 0 6.26875 0 14C0 21.7313 6.26875 28 14 28C21.7313 28 28 21.7313 28 14C28 6.26875 21.7313 0 14 0ZM18.5031 14.2156L11.6781 19.1812C11.6407 19.2081 11.5966 19.2242 11.5507 19.2276C11.5047 19.2311 11.4587 19.2218 11.4177 19.2008C11.3767 19.1798 11.3422 19.1479 11.3182 19.1087C11.2941 19.0694 11.2813 19.0242 11.2812 18.9781V9.05313C11.2811 9.00696 11.2937 8.96165 11.3178 8.92222C11.3418 8.8828 11.3762 8.85079 11.4173 8.82976C11.4584 8.80873 11.5046 8.79948 11.5506 8.80305C11.5966 8.80663 11.6408 8.82288 11.6781 8.85L18.5031 13.8125C18.5354 13.8353 18.5617 13.8655 18.5798 13.9006C18.598 13.9357 18.6075 13.9746 18.6075 14.0141C18.6075 14.0536 18.598 14.0925 18.5798 14.1275C18.5617 14.1626 18.5354 14.1928 18.5031 14.2156Z" fill="#5381F6"/></svg>
                                            </div>
                                            <div class="pause hidden">
                                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 0C6.26875 0 0 6.26875 0 14C0 21.7313 6.26875 28 14 28C21.7313 28 28 21.7313 28 14C28 6.26875 21.7313 0 14 0ZM11.5 18.75C11.5 18.8875 11.3875 19 11.25 19H9.75C9.6125 19 9.5 18.8875 9.5 18.75V9.25C9.5 9.1125 9.6125 9 9.75 9H11.25C11.3875 9 11.5 9.1125 11.5 9.25V18.75ZM18.5 18.75C18.5 18.8875 18.3875 19 18.25 19H16.75C16.6125 19 16.5 18.8875 16.5 18.75V9.25C16.5 9.1125 16.6125 9 16.75 9H18.25C18.3875 9 18.5 9.1125 18.5 9.25V18.75Z" fill="#5381F6"/></svg>
                                            </div>
                                        </div>
                                        <div class="audio-track">
                                            <svg width="526" height="32" viewBox="0 0 526 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 1.45455C0 0.651223 1.45369 0 3.24691 0C5.04013 0 6.49383 0.651222 6.49383 1.45455V30.5455C6.49383 31.3488 5.04013 32 3.24691 32C1.45369 32 0 31.3488 0 30.5455V1.45455Z" fill="#D9D9D9"/><path d="M12.9877 4.36364C12.9877 3.56031 14.4413 2.90909 16.2346 2.90909C18.0278 2.90909 19.4815 3.56031 19.4815 4.36364V27.6364C19.4815 28.4397 18.0278 29.0909 16.2346 29.0909C14.4413 29.0909 12.9877 28.4397 12.9877 27.6364V4.36364Z" fill="#D9D9D9"/><path d="M25.9753 7.27273C25.9753 6.4694 27.429 5.81818 29.2222 5.81818C31.0154 5.81818 32.4691 6.4694 32.4691 7.27273V24.7273C32.4691 25.5306 31.0154 26.1818 29.2222 26.1818C27.429 26.1818 25.9753 25.5306 25.9753 24.7273V7.27273Z" fill="#D9D9D9"/><path d="M38.963 8.72727C38.963 7.92395 40.4167 7.27273 42.2099 7.27273C44.0031 7.27273 45.4568 7.92395 45.4568 8.72727V23.2727C45.4568 24.0761 44.0031 24.7273 42.2099 24.7273C40.4167 24.7273 38.963 24.0761 38.963 23.2727V8.72727Z" fill="#D9D9D9"/><path d="M51.9506 10.1818C51.9506 9.3785 53.4043 8.72727 55.1975 8.72727C56.9908 8.72727 58.4444 9.3785 58.4444 10.1818V21.8182C58.4444 22.6215 56.9908 23.2727 55.1975 23.2727C53.4043 23.2727 51.9506 22.6215 51.9506 21.8182V10.1818Z" fill="#D9D9D9"/><path d="M64.9383 13.0909C64.9383 12.2876 66.392 11.6364 68.1852 11.6364C69.9784 11.6364 71.4321 12.2876 71.4321 13.0909V18.9091C71.4321 19.7124 69.9784 20.3636 68.1852 20.3636C66.392 20.3636 64.9383 19.7124 64.9383 18.9091V13.0909Z" fill="#D9D9D9"/><path d="M77.9259 14.5455C77.9259 13.7421 79.3796 13.0909 81.1728 13.0909C82.9661 13.0909 84.4198 13.7421 84.4198 14.5455V17.4545C84.4198 18.2579 82.9661 18.9091 81.1728 18.9091C79.3796 18.9091 77.9259 18.2579 77.9259 17.4545V14.5455Z" fill="#D9D9D9"/><path d="M90.9136 14.5455C90.9136 13.7421 92.3673 13.0909 94.1605 13.0909C95.9537 13.0909 97.4074 13.7421 97.4074 14.5455V17.4545C97.4074 18.2579 95.9537 18.9091 94.1605 18.9091C92.3673 18.9091 90.9136 18.2579 90.9136 17.4545V14.5455Z" fill="#D9D9D9"/><path d="M103.901 16C103.901 15.1967 105.355 14.5455 107.148 14.5455C108.941 14.5455 110.395 15.1967 110.395 16C110.395 16.8033 108.941 17.4545 107.148 17.4545C105.355 17.4545 103.901 16.8033 103.901 16Z" fill="#D9D9D9"/><path d="M116.889 8.72727C116.889 7.92395 118.343 7.27273 120.136 7.27273C121.929 7.27273 123.383 7.92395 123.383 8.72727V23.2727C123.383 24.0761 121.929 24.7273 120.136 24.7273C118.343 24.7273 116.889 24.0761 116.889 23.2727V8.72727Z" fill="#D9D9D9"/><path d="M129.877 11.6364C129.877 10.833 131.33 10.1818 133.123 10.1818C134.917 10.1818 136.37 10.833 136.37 11.6364V20.3636C136.37 21.167 134.917 21.8182 133.123 21.8182C131.33 21.8182 129.877 21.167 129.877 20.3636V11.6364Z" fill="#D9D9D9"/><path d="M142.864 14.5455C142.864 13.7421 144.318 13.0909 146.111 13.0909C147.904 13.0909 149.358 13.7421 149.358 14.5455V17.4545C149.358 18.2579 147.904 18.9091 146.111 18.9091C144.318 18.9091 142.864 18.2579 142.864 17.4545V14.5455Z" fill="#D9D9D9"/><path d="M155.852 8.72727C155.852 7.92395 157.306 7.27273 159.099 7.27273C160.892 7.27273 162.346 7.92395 162.346 8.72727V23.2727C162.346 24.0761 160.892 24.7273 159.099 24.7273C157.306 24.7273 155.852 24.0761 155.852 23.2727V8.72727Z" fill="#D9D9D9"/><path d="M168.84 5.81818C168.84 5.01486 170.293 4.36364 172.086 4.36364C173.88 4.36364 175.333 5.01486 175.333 5.81818V26.1818C175.333 26.9851 173.88 27.6364 172.086 27.6364C170.293 27.6364 168.84 26.9851 168.84 26.1818V5.81818Z" fill="#D9D9D9"/><path d="M181.827 8.72727C181.827 7.92395 183.281 7.27273 185.074 7.27273C186.867 7.27273 188.321 7.92395 188.321 8.72727V23.2727C188.321 24.0761 186.867 24.7273 185.074 24.7273C183.281 24.7273 181.827 24.0761 181.827 23.2727V8.72727Z" fill="#D9D9D9"/><path d="M194.815 11.6364C194.815 10.833 196.269 10.1818 198.062 10.1818C199.855 10.1818 201.309 10.833 201.309 11.6364V20.3636C201.309 21.167 199.855 21.8182 198.062 21.8182C196.269 21.8182 194.815 21.167 194.815 20.3636V11.6364Z" fill="#D9D9D9"/><path d="M207.802 14.5455C207.802 13.7421 209.256 13.0909 211.049 13.0909C212.843 13.0909 214.296 13.7421 214.296 14.5455V17.4545C214.296 18.2579 212.843 18.9091 211.049 18.9091C209.256 18.9091 207.802 18.2579 207.802 17.4545V14.5455Z" fill="#D9D9D9"/><path d="M220.79 16C220.79 15.1967 222.244 14.5455 224.037 14.5455C225.83 14.5455 227.284 15.1967 227.284 16C227.284 16.8033 225.83 17.4545 224.037 17.4545C222.244 17.4545 220.79 16.8033 220.79 16Z" fill="#D9D9D9"/><path d="M233.778 16C233.778 15.1967 235.231 14.5455 237.025 14.5455C238.818 14.5455 240.272 15.1967 240.272 16C240.272 16.8033 238.818 17.4545 237.025 17.4545C235.231 17.4545 233.778 16.8033 233.778 16Z" fill="#D9D9D9"/><path d="M246.765 8.72727C246.765 7.92395 248.219 7.27273 250.012 7.27273C251.806 7.27273 253.259 7.92395 253.259 8.72727V23.2727C253.259 24.0761 251.806 24.7273 250.012 24.7273C248.219 24.7273 246.765 24.0761 246.765 23.2727V8.72727Z" fill="#D9D9D9"/><path d="M259.753 8.72727C259.753 7.92395 261.207 7.27273 263 7.27273C264.793 7.27273 266.247 7.92395 266.247 8.72727V23.2727C266.247 24.0761 264.793 24.7273 263 24.7273C261.207 24.7273 259.753 24.0761 259.753 23.2727V8.72727Z" fill="#D9D9D9"/><path d="M272.741 8.72727C272.741 7.92395 274.194 7.27273 275.988 7.27273C277.781 7.27273 279.235 7.92395 279.235 8.72727V23.2727C279.235 24.0761 277.781 24.7273 275.988 24.7273C274.194 24.7273 272.741 24.0761 272.741 23.2727V8.72727Z" fill="#D9D9D9"/><path d="M285.728 11.6364C285.728 10.833 287.182 10.1818 288.975 10.1818C290.769 10.1818 292.222 10.833 292.222 11.6364V20.3636C292.222 21.167 290.769 21.8182 288.975 21.8182C287.182 21.8182 285.728 21.167 285.728 20.3636V11.6364Z" fill="#D9D9D9"/><path d="M298.716 13.0909C298.716 12.2876 300.17 11.6364 301.963 11.6364C303.756 11.6364 305.21 12.2876 305.21 13.0909V18.9091C305.21 19.7124 303.756 20.3636 301.963 20.3636C300.17 20.3636 298.716 19.7124 298.716 18.9091V13.0909Z" fill="#D9D9D9"/><path d="M311.704 8.72727C311.704 7.92395 313.157 7.27273 314.951 7.27273C316.744 7.27273 318.198 7.92395 318.198 8.72727V23.2727C318.198 24.0761 316.744 24.7273 314.951 24.7273C313.157 24.7273 311.704 24.0761 311.704 23.2727V8.72727Z" fill="#D9D9D9"/><path d="M324.691 10.1818C324.691 9.3785 326.145 8.72727 327.938 8.72727C329.732 8.72727 331.185 9.3785 331.185 10.1818V21.8182C331.185 22.6215 329.732 23.2727 327.938 23.2727C326.145 23.2727 324.691 22.6215 324.691 21.8182V10.1818Z" fill="#D9D9D9"/><path d="M337.679 11.6364C337.679 10.833 339.133 10.1818 340.926 10.1818C342.719 10.1818 344.173 10.833 344.173 11.6364V20.3636C344.173 21.167 342.719 21.8182 340.926 21.8182C339.133 21.8182 337.679 21.167 337.679 20.3636V11.6364Z" fill="#D9D9D9"/><path d="M350.667 13.0909C350.667 12.2876 352.12 11.6364 353.914 11.6364C355.707 11.6364 357.161 12.2876 357.161 13.0909V18.9091C357.161 19.7124 355.707 20.3636 353.914 20.3636C352.12 20.3636 350.667 19.7124 350.667 18.9091V13.0909Z" fill="#D9D9D9"/><path d="M363.654 1.45455C363.654 0.651223 365.108 0 366.901 0C368.694 0 370.148 0.651222 370.148 1.45455V30.5455C370.148 31.3488 368.694 32 366.901 32C365.108 32 363.654 31.3488 363.654 30.5455V1.45455Z" fill="#D9D9D9"/><path d="M376.642 5.81818C376.642 5.01486 378.096 4.36364 379.889 4.36364C381.682 4.36364 383.136 5.01486 383.136 5.81818V26.1818C383.136 26.9851 381.682 27.6364 379.889 27.6364C378.096 27.6364 376.642 26.9851 376.642 26.1818V5.81818Z" fill="#D9D9D9"/><path d="M389.63 8.72727C389.63 7.92395 391.083 7.27273 392.877 7.27273C394.67 7.27273 396.123 7.92395 396.123 8.72727V23.2727C396.123 24.0761 394.67 24.7273 392.877 24.7273C391.083 24.7273 389.63 24.0761 389.63 23.2727V8.72727Z" fill="#D9D9D9"/><path d="M402.617 10.1818C402.617 9.3785 404.071 8.72727 405.864 8.72727C407.657 8.72727 409.111 9.3785 409.111 10.1818V21.8182C409.111 22.6215 407.657 23.2727 405.864 23.2727C404.071 23.2727 402.617 22.6215 402.617 21.8182V10.1818Z" fill="#D9D9D9"/><path d="M415.605 2.90909C415.605 2.10577 417.059 1.45455 418.852 1.45455C420.645 1.45455 422.099 2.10577 422.099 2.90909V29.0909C422.099 29.8942 420.645 30.5455 418.852 30.5455C417.059 30.5455 415.605 29.8942 415.605 29.0909V2.90909Z" fill="#D9D9D9"/><path d="M428.593 1.45455C428.593 0.651223 430.046 0 431.84 0C433.633 0 435.086 0.651222 435.086 1.45455V30.5455C435.086 31.3488 433.633 32 431.84 32C430.046 32 428.593 31.3488 428.593 30.5455V1.45455Z" fill="#D9D9D9"/><path d="M441.58 5.81818C441.58 5.01486 443.034 4.36364 444.827 4.36364C446.62 4.36364 448.074 5.01486 448.074 5.81818V26.1818C448.074 26.9851 446.62 27.6364 444.827 27.6364C443.034 27.6364 441.58 26.9851 441.58 26.1818V5.81818Z" fill="#D9D9D9"/><path d="M454.568 11.6364C454.568 10.833 456.022 10.1818 457.815 10.1818C459.608 10.1818 461.062 10.833 461.062 11.6364V20.3636C461.062 21.167 459.608 21.8182 457.815 21.8182C456.022 21.8182 454.568 21.167 454.568 20.3636V11.6364Z" fill="#D9D9D9"/><path d="M467.556 13.0909C467.556 12.2876 469.009 11.6364 470.802 11.6364C472.596 11.6364 474.049 12.2876 474.049 13.0909V18.9091C474.049 19.7124 472.596 20.3636 470.802 20.3636C469.009 20.3636 467.556 19.7124 467.556 18.9091V13.0909Z" fill="#D9D9D9"/><path d="M480.543 14.5455C480.543 13.7421 481.997 13.0909 483.79 13.0909C485.583 13.0909 487.037 13.7421 487.037 14.5455V17.4545C487.037 18.2579 485.583 18.9091 483.79 18.9091C481.997 18.9091 480.543 18.2579 480.543 17.4545V14.5455Z" fill="#D9D9D9"/><path d="M493.531 14.5455C493.531 13.7421 494.985 13.0909 496.778 13.0909C498.571 13.0909 500.025 13.7421 500.025 14.5455V17.4545C500.025 18.2579 498.571 18.9091 496.778 18.9091C494.985 18.9091 493.531 18.2579 493.531 17.4545V14.5455Z" fill="#D9D9D9"/><path d="M506.519 16C506.519 15.1967 507.972 14.5455 509.765 14.5455C511.559 14.5455 513.012 15.1967 513.012 16C513.012 16.8033 511.559 17.4545 509.765 17.4545C507.972 17.4545 506.519 16.8033 506.519 16Z" fill="#D9D9D9"/><path d="M519.506 16C519.506 15.1967 520.96 14.5455 522.753 14.5455C524.546 14.5455 526 15.1967 526 16C526 16.8033 524.546 17.4545 522.753 17.4545C520.96 17.4545 519.506 16.8033 519.506 16Z" fill="#D9D9D9"/></svg>
                                            <div class="time"></div>
                                        </div>
                                        <div class="audio_track_duration">
                                            <span>00:21</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="content__cnt">
                                    <div class="content_btn__cnt">
                                        <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.79445 4.89225C2.81739 4.92556 2.84808 4.9528 2.88388 4.97161C2.91968 4.99043 2.95951 5.00026 2.99995 5.00026C3.0404 5.00026 3.08023 4.99043 3.11603 4.97161C3.15183 4.9528 3.18252 4.92556 3.20545 4.89225L5.45545 1.64225C5.4815 1.60476 5.49677 1.56086 5.49961 1.5153C5.50245 1.46975 5.49276 1.42428 5.47158 1.38385C5.45039 1.34342 5.41853 1.30956 5.37946 1.28596C5.34039 1.26237 5.2956 1.24993 5.24995 1.25H0.749954C0.704415 1.25019 0.659788 1.26279 0.620874 1.28644C0.581959 1.3101 0.550229 1.34391 0.529096 1.38425C0.507962 1.42459 0.498225 1.46992 0.500931 1.51538C0.503637 1.56084 0.518684 1.6047 0.544454 1.64225L2.79445 4.89225Z" fill="white"/></svg>
                                    </div>
                                    <div class="text__cnt">
                                        <p>Спасибо. Мы пришлем вам инструкцию, как пройти процедуру банкротства бесплатно в вашем случае, или позвоним с телефона <span>8 (812) 425-69-18</span> и всё расскажем. Вы можете посмотреть успешно завершенные процедуры наших клиентов в схожей с вашей ситуации.</p>
                                    </div>
                                </div>
                                <span class="message_time">00:00</span>
                            </div>
                        </div>
                        <div class="row__cnt hidden">
                            <p class="name"><span>Константин</span>, спасибо.</p>
                            <p class="text">Мы пришлем вам инструкцию, как пройти процедуру банкротства бесплатно в вашем случае, или позвоним с телефона <span>8 (812) 425-69-18</span> и всё расскажем.</p>
                        </div>
                        <div class="row__cnt hidden">
                            <p class="text">Вы можете посмотреть успешно завершенные процедуры наших клиентов в схожей с вашей ситуации.</p>
                            <div class="video__cnt">
                                <div class="video_item__cnt"><div class="reviews__video"><div class="youtube" data-embed="2ln4JJbxmfo" onclick="ym(82134583,'reachGoal','start')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img src="https://img.youtube.com/vi/2ln4JJbxmfo/hqdefault.jpg" alt="Превью для видео"></div></div></div>
                                <div class="video_item__cnt"><div class="reviews__video"><div class="youtube" data-embed="fuo74cXDoIk" onclick="ym(82134583,'reachGoal','start')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img src="https://img.youtube.com/vi/fuo74cXDoIk/hqdefault.jpg" alt="Превью для видео"></div></div></div>
                                <div class="video_item__cnt"><div class="reviews__video"><div class="youtube" data-embed="jH2Fw4z5xm0" onclick="ym(82134583,'reachGoal','start')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img src="https://img.youtube.com/vi/jH2Fw4z5xm0/hqdefault.jpg" alt="Превью для видео"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                
                
                
                
                
                <div class="question_item__cnt not_answered hidden">
                    <div class="description__cnt">
                        <p class="hidden">Спасибо, <span class="name"></span>, мы проинформируем вас о том, вправе ли вы бесплатно списать все долги со 100% гарантией результата через МФЦ.<span class="time"></span></p>
                        <p class="hidden work_hours">
                            <span class="block">Рабочие часы, в которые юристы проанализируют вашу ситуацию и уведомят вас:</span>
                            <span class="block">Пн-Пт: 09:00 - 20:00</span>
                            <span class="block">Сб-Вс: 11:00 - 18:00</span>
                            <span class="time"></span>
                        </p>
                        <p class="hidden">Каким образом вас уведомить?<span class="time"></span></p>
                    </div>
                    <div class="variations__cnt hidden">
                        <p class="intro_text">Ответ:</p>
                        <div class="calculation__variants_v2">
        	                <div class="radio calculation__radio calculation__radio--small" data-video-list="" data-percent="40" data-message="Хорошо. Мы позвоним вам.">
                                <label for="additional_answer_1_0" id="label_question_messenger_1_0"  class="radio__label radio__label--small question_messenger question_messenger_call" data-value="whatsapp">Звонок юриста</label>
                                <input id="additional_answer_1_0" class="radio__default" type="radio" name="messenger" value="Звонок юриста">
                                <span class="radio__new radio__new--accent"></span>
                            </div>
        	                <div class="radio calculation__radio calculation__radio--small" data-video-list="" data-percent="10" data-message="Хорошо. Мы пришлём вам сообщение в Telegram.">
                                <label id="label_question_messenger_2_0" for="additional_answer_2_0" class="radio__label radio__label--small question_messenger question_messenger_telegram" data-value="telegram">Сообщение в Telegram</label>
                                <input id="additional_answer_2_0" class="radio__default" type="radio" name="messenger" value="Сообщение в Telegram">
                                <span class="radio__new radio__new--accent"></span>
                            </div>
        	                <div class="radio calculation__radio calculation__radio--small" data-video-list="" data-percent="30" data-message="Хорошо. Мы пришлём вам сообщение в WhatsApp.">
                                <label id="label_question_messenger_3_0" for="additional_answer_3_0" class="radio__label radio__label--small question_messenger question_messenger_whatsapp" data-value="viber">Сообщение в WhatsApp</label>
                                <input id="additional_answer_3_0" class="radio__default" type="radio" name="messenger" value="Сообщение в WhatsApp">
                                <span class="radio__new radio__new--accent"></span>
                            </div>
        	                <div class="radio calculation__radio calculation__radio--small" data-video-list="" data-percent="20" data-message="Хорошо. Мы пришлём вам СМС-сообщение.">
                                <label id="label_question_messenger_4_0" for="additional_answer_4_0" class="radio__label radio__label--small question_messenger question_messenger_sms" data-value="sms">СМС-сообщение</label>
                                <input id="additional_answer_4_0" class="radio__default" type="radio" name="messenger" value="СМС-сообщение">
                                <span class="radio__new radio__new--accent"></span>
                            </div>
                        </div>
                        <div class="selected_answer_text__cnt">
                            <div class="line__cnt">
                                <div class="selected_percent"></div>
                            </div>
                            <p><span class="text">&nbsp;</span><span class="date"></span></p>
                        </div>
                    </div>
                    <div class="answer__cnt hidden">
                        <div class="variation__cnt">
                            <div class="not_selected_answer">
                                <div class="points__cnt hidden">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="selected_answer">
                                    <span></span>
                                </div>
                                <div class="date__cnt">
                                    <span class="time"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="question_item__cnt not_answered hidden question_item_pre_last_child">
                    <div class="description__cnt" data-percent="<?=random_int(40, 80); ?>">
                        <p class="block_why_us hidden"></p>
                        <p class="block_cases_example hidden"></p>
                        <!--
                        <p class="hidden">
                            <span class="block"><span class="name"></span>, так же, как и вы, 56% наших клиентов безработные. Почему для консультации по списанию долгов клиенты в похожих ситуациях выбирают в первую очередь нас?</span>
                            <span class="block">1. Мы останавливаем все текущие исполнительные производства, и вы без проблем можете устроиться на работу </span>
                            <span class="block">2. Мы защищаем все выплаты и пособия по безработице от взыскания по исполнительным листам</span>
                            <span class="block">3. Мы не разглашаем факт прохождения вами процедуры банкротства потенциальным работодателям</span>
                            <span class="block">4. Мы защищаем вас от коллекторов и кредиторов, а также от их звонков и визитов, если во время банкротства вы решите устроиться на новую работу</span>
                            <span class="block">5. Мы берем на себя взаимодействие с судебными приставами и банками: если во время процедуры вы трудоустроитесь, можете не переживать, что исполнительный лист придет на новую работу — мы прекращаем и предотвращаем любые удержания с вашей заработной платы</span>
                            <span class="time"></span>
                        </p>
                        <p class="hidden">Посмотрите отзывы клиентов, которые, будучи безработными, прошли процедуру банкротства и списали все долги<span class="time"></span></p>
                        -->
                        <div class="video_wrap__cnt hidden">
                            <div class="video__cnt"></div>
                            <span class="time"></span>
                        </div>
                        <p class="hidden">Какая проблема наиболее остро беспокоит вас сейчас:<span class="time"></span></p>
                    </div>
                    <div class="variations__cnt hidden">
                        <p class="intro_text">Ответ:</p>
                        <div class="calculation__variants_v2">
        	                <div class="radio calculation__radio calculation__radio--small" data-video-list="" data-percent="28">
                                <label for="additional_answer_1_1" id="label_question_messenger_1_1"  class="radio__label radio__label--small" data-value="pain_call">Звонки</label>
                                <input id="additional_answer_1_1" class="radio__default" type="radio" name="pain" value="Звонки">
                                <span class="radio__new radio__new--accent"></span>
                            </div>
        	                <div class="radio calculation__radio calculation__radio--small" data-video-list="" data-percent="14">
                                <label id="label_question_messenger_2_0" for="additional_answer_2_1" class="radio__label radio__label--small" data-value="pain_loss_property">Потеря имущества</label>
                                <input id="additional_answer_2_0" class="radio__default" type="radio" name="pain" value="Потеря имущества">
                                <span class="radio__new radio__new--accent"></span>
                            </div>
        	                <div class="radio calculation__radio calculation__radio--small" data-video-list="" data-percent="9">
                                <label id="label_question_messenger_3_1" for="additional_answer_3_1" class="radio__label radio__label--small" data-value="pain_collectors_visits">Визиты домой коллекторов</label>
                                <input id="additional_answer_3_1" class="radio__default" type="radio" name="pain" value="Визиты домой коллекторов">
                                <span class="radio__new radio__new--accent"></span>
                            </div>
        	                <div class="radio calculation__radio calculation__radio--small" data-video-list="" data-percent="11">
                                <label id="label_question_messenger_4_1" for="additional_answer_4_1" class="radio__label radio__label--small" data-value="pain_hard_pay">Тяжело платить</label>
                                <input id="additional_answer_4_1" class="radio__default" type="radio" name="pain" value="Тяжело платить">
                                <span class="radio__new radio__new--accent"></span>
                            </div>
        	                <div class="radio calculation__radio calculation__radio--small" data-video-list="" data-percent="8">
                                <label id="label_question_messenger_5_1" for="additional_answer_5_1" class="radio__label radio__label--small" data-value="pain_travel_abroad">Выезд за границу</label>
                                <input id="additional_answer_5_1" class="radio__default" type="radio" name="pain" value="Выезд за границу">
                                <span class="radio__new radio__new--accent"></span>
                            </div>
        	                <div class="radio calculation__radio calculation__radio--small" data-video-list="" data-percent="18">
                                <label id="label_question_messenger_6_1" for="additional_answer_6_1" class="radio__label radio__label--small" data-value="pain_withdraw_salary">Снимают зарплату</label>
                                <input id="additional_answer_6_1" class="radio__default" type="radio" name="pain" value="Снимают зарплату">
                                <span class="radio__new radio__new--accent"></span>
                            </div>
        	                <div class="radio calculation__radio calculation__radio--small" data-video-list="" data-percent="12">
                                <label id="label_question_messenger_7_1" for="additional_answer_7_1" class="radio__label radio__label--small" data-value="pain_no_job">Не устроиться на работу</label>
                                <input id="additional_answer_7_1" class="radio__default" type="radio" name="pain" value="Не устроиться на работу">
                                <span class="radio__new radio__new--accent"></span>
                            </div>
                        </div>
                        <div class="selected_answer_text__cnt">
                            <div class="line__cnt">
                                <div class="selected_percent"></div>
                            </div>
                            <p><span class="text">&nbsp;</span><span class="date"></span></p>
                        </div>
                    </div>
                    <div class="answer__cnt hidden">
                        <div class="variation__cnt">
                            <div class="not_selected_answer">
                                <div class="points__cnt hidden">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="selected_answer">
                                    <span></span>
                                </div>
                                <div class="date__cnt">
                                    <span class="time"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="question_item__cnt not_answered hidden question_item_last_child">
                    <div class="description__cnt">
                        <p class="block_pain hidden"></p>
                        <p class="block_consider hidden"></p>
                        <!--
                        <p class="hidden">
                            <span class="block"><span class="name"></span>, если вас беспокоят звонки коллекторов, на консультации у юриста вы узнаете:</span>
                            <span class="block">1. Как забыть о коллекторах, а также звонках и уведомлениях от них</span>
                            <span class="block">2. Как прекратить их работу в отношении взыскания долга и угрозы в вашу сторону</span>
                            <span class="block">3. Как списать полностью и навсегда все задолженности</span>
                            <span class="time"></span>
                        </p>
                        <p class="hidden">
                            <span class="block">Пожалуйста, учтите особенности банкротства безработных.</span>
                            <span class="block">Потенциальные работодатели негативно относятся как к кандидатам-неплательщикам, так и к должникам, которые уже в штате. Главным образом это относится к вакансиям в госструктурах или компаниях с государственным участием (банки, страховые, нефтегазовый сектор и другие).</span>
                            <span class="block">Конечно, формально вам это вряд ли озвучат, однако треть наших клиентов рассказывают о такой проблеме при первом обращении к нам за помощью. Чем раньше вы избавитесь от долгов и исполнительных производств, тем быстрее сможете выйти из замкнутого круга и устроиться на работу.</span>
                            <span class="time"></span>
                        </p>
                        -->
                    </div>
                </div>





































           </div>
        </div>
    </div>    
    
    <div class="popup__cnt hidden">
        <div class="popup__overlay">
            <!-- / *** / -->
            <div class="popup-item__cnt mfc__cnt mfc-bankruptcy__number-1-test hidden color_scheme_blue" data-form-name="SMS-14 Пройдите тест и узнайте, вправе ли Вы списать все Ваши долги с 100% гарантией результата через МФЦ СПб по акции до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?>" data-form-sms="19" data-form-time="1" data-form-title="Пройдите тест и узнайте, вправе ли Вы списать все Ваши долги с 100% гарантией результата через МФЦ СПб по акции до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?> <?php echo date ( 'Y' ) ; ?> г. !">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <div class="steps__cnt hidden">
                    <div class="h3">
                        <span class="message_1">Вы начали заполнять тест</span>
                        <span class="message_2 hidden">Так держать!</span>
                        <span class="message_3 hidden">Вы молодец. Осталось всего несколько вопросов</span>
                        <span class="message_4 hidden">Последний вопрос</span>
                        <span class="message_5 hidden">Финишная прямая</span>
                    </div>
                    <div class="steps__wrap" data-active-color="#5381F6" data-default-color="#D9D9D9" >
                        <svg width="722" height="13" viewBox="0 0 722 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0.5H132.94L144.4 6.5L132.94 12.5H0V6.5V0.5Z" fill="#5381F6"/>
                            <path d="M144.4 0.5H277.34L288.8 6.5L277.34 12.5H144.4L155.861 6.5L144.4 0.5Z" fill="#D9D9D9"/>
                            <path d="M288.801 0.5H421.74L433.201 6.5L421.74 12.5H288.801L300.261 6.5L288.801 0.5Z" fill="#D9D9D9"/>
                            <path d="M433.199 0.5H566.139L577.599 6.5L566.139 12.5H433.199L444.66 6.5L433.199 0.5Z" fill="#D9D9D9"/>
                            <path d="M577.6 0.5H722V6.5V12.5H577.6L588.468 6.5L577.6 0.5Z" fill="#D9D9D9"/>
                        </svg>
                    </div>
                </div>
                <?php echo do_shortcode( "[quiz_for_articles id='4369' title='Ответив на <span class=\"text-accent\">4 вопросов</span> онлайн-теста, вы&nbsp;узнаете, вправе ли&nbsp;вы&nbsp;списать все&nbsp;ваши долги cо&nbsp;<span class=\"text-accent\">100% гарантией результата через МФЦ</span> СПб по&nbsp;акции <span class=\"text-accent text-nowrap\">до&nbsp;" . $popup_year_date->format('j') . "&nbsp;" . $popup_year_arr[$popup_year_month] . "&nbsp;" . date ( 'Y' ) . "&nbsp;г.</span>']" ); ?>
                <div class="result_inline_form__cnt hidden" data-message="Спасибо за ответы! Ваша ситуация идентична <b><?=random_int(40, 80); ?>%</b> наших клиентов. Укажите телефон и мы проинформируем вас вправе ли вы списать все ваши долги cо 100% гарантией результата через МФЦ СПб по акции до <?=$popup_year_date->format('j'); ?>&nbsp;<?=$popup_year_arr[$popup_year_month]; ?>&nbsp;<?=date('Y'); ?>&nbsp;г.">
                    <?php echo do_shortcode( "[contact-form-7 id='21516' title='Тесты на странице МФЦ (bankruptcy4cost) - Ответ придёт в СМС-сообщении в течение 90 секунд']" ); ?>
                </div>
                <div class="situation_identical__cnt">
                    <span class="hidden">Ваша ситуация идентична <span><?=random_int(40, 80); ?>%</span> клиентов</span>
                </div>
            </div>
            <div class="popup-item__cnt mfc__cnt mfc-bankruptcy__number-2-test hidden color_scheme_red" data-form-name="SMS-15 Пройдите тест и узнайте минимальную стоимость банкротства в Арбитражном суде СПб и ЛО по акции до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?>" data-form-sms="20" data-form-time="1" data-form-title="Пройдите тест и узнайте минимальную стоимость банкротства в Арбитражном суде СПб и ЛО по акции до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?> <?php echo date ( 'Y' ) ; ?> г. !">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <div class="steps__cnt hidden">
                    <div class="h3">
                        <span class="message_1">Вы начали заполнять тест</span>
                        <span class="message_2 hidden">Так держать!</span>
                        <span class="message_3 hidden">Вы молодец. Осталось всего несколько вопросов</span>
                        <span class="message_4 hidden">Последний вопрос</span>
                        <span class="message_5 hidden">Финишная прямая</span>
                    </div>
                    <div class="steps__wrap" data-active-color="#FB5A80" data-default-color="#D9D9D9" >
                        <svg width="722" height="13" viewBox="0 0 722 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0.5H132.94L144.4 6.5L132.94 12.5H0V6.5V0.5Z" fill="#fb5a80"/>
                            <path d="M144.4 0.5H277.34L288.8 6.5L277.34 12.5H144.4L155.861 6.5L144.4 0.5Z" fill="#D9D9D9"/>
                            <path d="M288.801 0.5H421.74L433.201 6.5L421.74 12.5H288.801L300.261 6.5L288.801 0.5Z" fill="#D9D9D9"/>
                            <path d="M433.199 0.5H566.139L577.599 6.5L566.139 12.5H433.199L444.66 6.5L433.199 0.5Z" fill="#D9D9D9"/>
                            <path d="M577.6 0.5H722V6.5V12.5H577.6L588.468 6.5L577.6 0.5Z" fill="#D9D9D9"/>
                        </svg>
                    </div>
                </div>
                <?php echo do_shortcode( "[quiz_for_articles id='4371' title='Ответив на <span class=\"text-pink\">4 вопросов онлайн-теста</span>, вы&nbsp;узнаете, вправе ли&nbsp;вы&nbsp;списать кредиты и&nbsp;долги <span class=\"text-pink\">через Арбитражный суд и&nbsp;сколько это будет стоить</span>']" ); ?>
                <div class="result_inline_form__cnt hidden" data-message="Спасибо за ответы! Ваша ситуация идентична <b><?=random_int(40, 80); ?>%</b> наших клиентов. Укажите телефон и мы проинформируем вас вправе ли вы списать все ваши долги cо 100% гарантией результата через МФЦ СПб по акции до <?=$popup_year_date->format('j'); ?>&nbsp;<?=$popup_year_arr[$popup_year_month]; ?>&nbsp;<?=date('Y'); ?>&nbsp;г.">
                    <?php echo do_shortcode( "[contact-form-7 id='21516' title='Тесты на странице МФЦ (bankruptcy4cost) - Ответ придёт в СМС-сообщении в течение 90 секунд']" ); ?>
                </div>
                <div class="situation_identical__cnt">
                    <span class="hidden">Ваша ситуация идентична <span><?=random_int(40, 80); ?>%</span> клиентов</span>
                </div>
            </div>
            
            
            
            <div class="popup-item__cnt mfc__cnt mfc-bankruptcy__number-3-test hidden color_scheme_blue" data-form-name="SMS-59 Узнайте подходит ли списание долгов через МФЦ и стоимость подготовки документов" data-form-sms="62" data-form-time="1" data-form-title="Пройдите тест и узнайте, как в вашем случае можно снизить долговую нагрузку. Подходит ли Вам реструктуризация или рефинансирование кредита?">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <div class="steps__cnt hidden">
                    <div class="h3">
                        <span class="message_1">Вы начали заполнять тест</span>
                        <span class="message_2 hidden">Так держать!</span>
                        <span class="message_3 hidden">Вы молодец. Осталось всего несколько вопросов</span>
                        <span class="message_4 hidden">Последний вопрос</span>
                        <span class="message_5 hidden">Финишная прямая</span>
                    </div>
                    <div class="steps__wrap" data-active-color="#5381F6" data-default-color="#D9D9D9" >
                        <svg width="722" height="13" viewBox="0 0 722 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0.5H132.94L144.4 6.5L132.94 12.5H0V6.5V0.5Z" fill="#5381F6"/>
                            <path d="M144.4 0.5H277.34L288.8 6.5L277.34 12.5H144.4L155.861 6.5L144.4 0.5Z" fill="#D9D9D9"/>
                            <path d="M288.801 0.5H421.74L433.201 6.5L421.74 12.5H288.801L300.261 6.5L288.801 0.5Z" fill="#D9D9D9"/>
                            <path d="M433.199 0.5H566.139L577.599 6.5L566.139 12.5H433.199L444.66 6.5L433.199 0.5Z" fill="#D9D9D9"/>
                            <path d="M577.6 0.5H722V6.5V12.5H577.6L588.468 6.5L577.6 0.5Z" fill="#D9D9D9"/>
                        </svg>
                    </div>
                </div>
                <?php echo do_shortcode( "[quiz_for_articles id='4369' title='Ответив на <span class=\"text-accent\">4 вопроса</span> онлайн-теста, вы&nbsp;узнаете, как в&nbsp;вашем случае можно снизить долговую нагрузку. Подходит ли&nbsp;Вам <span class=\"text-accent\">реструктуризация</span> или <span class=\"text-accent\">рефинансирование</span> кредита?']" ); ?>
                <div class="result_inline_form__cnt hidden" data-message="Спасибо за ответы! Ваша ситуация идентична <b><?=random_int(40, 80); ?>%</b> наших клиентов. Укажите телефон и мы проинформируем вас вправе ли вы списать все ваши долги cо 100% гарантией результата через МФЦ СПб по акции до <?=$popup_year_date->format('j'); ?>&nbsp;<?=$popup_year_arr[$popup_year_month]; ?>&nbsp;<?=date('Y'); ?>&nbsp;г.">
                    <?php echo do_shortcode( "[contact-form-7 id='21516' title='Тесты на странице МФЦ (bankruptcy4cost) - Ответ придёт в СМС-сообщении в течение 90 секунд']" ); ?>
                </div>
                <div class="situation_identical__cnt">
                    <span class="hidden">Ваша ситуация идентична <span><?=random_int(40, 80); ?>%</span> клиентов</span>
                </div>
            </div>
            
            
            
            
            
            
            
            <!-- / *** / -->
            <div class="popup-item__cnt mfc__cnt mfc-bankruptcy__number-1 hidden color_scheme_blue" data-form-name="SMS-14 Пройдите тест и узнайте, вправе ли Вы списать все Ваши долги с 100% гарантией результата через МФЦ СПб по акции до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?>" data-form-sms="19" data-form-time="1" data-form-title="Пройдите тест и узнайте, вправе ли Вы списать все Ваши долги с 100% гарантией результата через МФЦ СПб по акции до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?> <?php echo date ( 'Y' ) ; ?> г. !">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <div class="steps__cnt hidden">
                    <div class="h3">
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
                    <div class="steps__wrap" data-active-color="#5381F6" data-default-color="#D9D9D9" >
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
                <?php 
                        echo do_shortcode( "[quiz_for_articles id='4369' title='Ответив на <span class=\"text-accent\">4 вопросов</span> онлайн-теста, вы&nbsp;узнаете, вправе ли&nbsp;вы&nbsp;списать все&nbsp;ваши долги cо&nbsp;<span class=\"text-accent\">100% гарантией результата через МФЦ</span> СПб по&nbsp;акции <span class=\"text-accent text-nowrap\">до&nbsp;" . $popup_year_date->format('j') . "&nbsp;" . $popup_year_arr[$popup_year_month] . "&nbsp;" . date ( 'Y' ) . "&nbsp;г.</span>']" ); 
                    /*
                    echo do_shortcode( "[quiz_for_articles id='4369' title='Ответив на <span class=\"text-accent\">4 вопроса</span> онлайн-теста, вы узнаете, вправе ли списать все долги <span class=\"text-accent\">бесплатно в МФЦ</span>']" ); 
                    */
                ?>
                <div class="situation_identical__cnt">
                    <span class="hidden">Ваша ситуация идентична <span><?=random_int(40, 80); ?>%</span> клиентов</span>
                </div>
            </div>
            <div class="popup-item__cnt mfc__cnt mfc-bankruptcy__number-2 hidden color_scheme_red" data-form-name="SMS-15 Пройдите тест и узнайте минимальную стоимость банкротства в Арбитражном суде СПб и ЛО по акции до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?>" data-form-sms="20" data-form-time="1" data-form-title="Пройдите тест и узнайте минимальную стоимость банкротства в Арбитражном суде СПб и ЛО по акции до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?> <?php echo date ( 'Y' ) ; ?> г. !">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <div class="steps__cnt hidden">
                    <div class="h3">
                        <span class="message_1">Для завершения осталось заполнить ваши данные</span>
                        <span class="message_2 hidden">Начало жизни без долгов положено!</span>
                        <span class="message_3 hidden">Первый шаг сделан! Осталось ответить на 7 вопросов!</span>
                        <span class="message_4 hidden">Осталось 6 вопросов</span>
                        <span class="message_5 hidden">Осталось 5 вопросов</span>
                        <span class="message_6 hidden">Вы на полпути к избавлению от всех долгов!</span>
                        <span class="message_7 hidden">Осталось 3 вопроса</span>
                        <span class="message_8 hidden">Осталось 2 вопроса</span>
                        <span class="message_9 hidden">Вы почти у цели!</span>
                        <span class="message_10 hidden">Прекрасно! Осталось получить результат теста:</span>
                    </div>
                    <div class="steps__wrap" data-active-color="#FB5A80" data-default-color="#D9D9D9" >
                        <svg width="661" height="12" viewBox="0 0 661 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path data-title="Начало жизни без долгов положено!" class="valid" d="M0 0H55.3915L60.1667 6L55.3915 12H0V6V0Z" fill="#FB5A80"></path>
                            <path data-title="Первый шаг сделан! Осталось ответить на 8 вопросов!" d="M60.167 0H115.559L120.334 6L115.559 12H60.167L64.9421 6L60.167 0Z" fill="#D9D9D9"></path>
                            <path data-title="Осталось 7 вопросов" d="M120.333 0H175.725L180.5 6L175.725 12H120.333L125.108 6L120.333 0Z" fill="#D9D9D9"></path>
                            <path data-title="Осталось 6 вопросов" d="M180.5 0H235.892L240.667 6L235.892 12H180.5L185.275 6L180.5 0Z" fill="#D9D9D9"></path>
                            <path data-title="Осталось 5 вопросов" d="M240.667 0H296.059L300.834 6L296.059 12H240.667L245.442 6L240.667 0Z" fill="#D9D9D9"></path>
                            <path data-title="Вы на полпути к избавлению от всех долгов!" d="M300.833 0H356.225L361 6L356.225 12H300.833L305.608 6L300.833 0Z" fill="#D9D9D9"></path>
                            <path data-title="Осталось 3 вопроса" d="M361 0H416.392L421.167 6L416.392 12H361L365.775 6L361 0Z" fill="#D9D9D9"></path>
                            <path data-title="Осталось 2 вопроса" d="M421.167 0H476.559L481.334 6L476.559 12H421.167L425.942 6L421.167 0Z" fill="#D9D9D9"></path>
                            <path data-title="Вы почти у цели!" d="M481.333 0H536.725L541.5 6L536.725 12H481.333L486.108 6L481.333 0Z" fill="#D9D9D9"></path>
                            <path data-title="Прекрасно! Осталось получить результат теста:" d="M541.5 0H596.892L601.667 6L596.892 12H541.5L546.275 6L541.5 0Z" fill="#D9D9D9"></path>
                            <path data-title="Прекрасно! Осталось получить результат теста:" class="valid" d="M601.833 0H657V6V12H601.833L606.362 6L601.833 0Z" fill="#D9D9D9"></path>
                        </svg>
                    </div>
                </div>
                <?php echo do_shortcode( "[quiz_for_articles id='4371' title='Ответив на <span class=\"text-pink\">4 вопросов онлайн-теста</span>, вы&nbsp;узнаете, вправе ли&nbsp;вы&nbsp;списать кредиты и&nbsp;долги <span class=\"text-pink\">через Арбитражный суд и&nbsp;сколько это будет стоить</span>']" ); ?>
                <div class="situation_identical__cnt">
                    <span class="hidden">Ваша ситуация идентична <span><?=random_int(40, 80); ?>%</span> клиентов</span>
                </div>
            </div>
            <div class="popup-item__cnt mfc__cnt mfc-bankruptcy__number-3 hidden color_scheme_green" data-form-name="SMS-16 Пройдите тест и узнайте, относитесь ли вы к льготным категориям граждан и имеете ли право на банкротство с оплатой за результат" data-form-sms="21" data-form-time="1" data-form-title="Пройдите тест и узнайте, относитесь ли вы к льготным категориям граждан и имеете ли право на банкротство с оплатой за результат">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <div class="steps__cnt hidden">
                    <div class="h3">
                        <span class="message_1">Для завершения осталось заполнить ваши данные</span>
                        <span class="message_2 hidden">Начало жизни без долгов положено!</span>
                        <span class="message_3 hidden">Первый шаг сделан! Осталось ответить на 7 вопросов!</span>
                        <span class="message_4 hidden">Осталось 6 вопросов</span>
                        <span class="message_5 hidden">Осталось 5 вопросов</span>
                        <span class="message_6 hidden">Вы на полпути к избавлению от всех долгов!</span>
                        <span class="message_7 hidden">Осталось 3 вопроса</span>
                        <span class="message_8 hidden">Осталось 2 вопроса</span>
                        <span class="message_9 hidden">Вы почти у цели!</span>
                        <span class="message_10 hidden">Прекрасно! Осталось получить результат теста:</span>
                    </div>
                    <div class="steps__wrap" data-active-color="#17CC5F" data-default-color="#D9D9D9" >
                        <svg width="661" height="12" viewBox="0 0 661 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path data-title="Начало жизни без долгов положено!" class="valid" d="M0 0H55.3915L60.1667 6L55.3915 12H0V6V0Z" fill="#17CC5F"></path>
                            <path data-title="Первый шаг сделан! Осталось ответить на 8 вопросов!" d="M60.167 0H115.559L120.334 6L115.559 12H60.167L64.9421 6L60.167 0Z" fill="#D9D9D9"></path>
                            <path data-title="Осталось 7 вопросов" d="M120.333 0H175.725L180.5 6L175.725 12H120.333L125.108 6L120.333 0Z" fill="#D9D9D9"></path>
                            <path data-title="Осталось 6 вопросов" d="M180.5 0H235.892L240.667 6L235.892 12H180.5L185.275 6L180.5 0Z" fill="#D9D9D9"></path>
                            <path data-title="Осталось 5 вопросов" d="M240.667 0H296.059L300.834 6L296.059 12H240.667L245.442 6L240.667 0Z" fill="#D9D9D9"></path>
                            <path data-title="Вы на полпути к избавлению от всех долгов!" d="M300.833 0H356.225L361 6L356.225 12H300.833L305.608 6L300.833 0Z" fill="#D9D9D9"></path>
                            <path data-title="Осталось 3 вопроса" d="M361 0H416.392L421.167 6L416.392 12H361L365.775 6L361 0Z" fill="#D9D9D9"></path>
                            <path data-title="Осталось 2 вопроса" d="M421.167 0H476.559L481.334 6L476.559 12H421.167L425.942 6L421.167 0Z" fill="#D9D9D9"></path>
                            <path data-title="Вы почти у цели!" d="M481.333 0H536.725L541.5 6L536.725 12H481.333L486.108 6L481.333 0Z" fill="#D9D9D9"></path>
                            <path data-title="Прекрасно! Осталось получить результат теста:" d="M541.5 0H596.892L601.667 6L596.892 12H541.5L546.275 6L541.5 0Z" fill="#D9D9D9"></path>
                            <path data-title="Прекрасно! Осталось получить результат теста:" class="valid" d="M601.833 0H657V6V12H601.833L606.362 6L601.833 0Z" fill="#D9D9D9"></path>
                        </svg>
                    </div>
                </div>
                <?php echo do_shortcode( "[quiz_for_articles id='4370' title='Ответив на <span class=\"text-green\">4 вопросов онлайн-теста</span>, вы&nbsp;узнаете, вправе ли&nbsp;вы&nbsp;пройти банкротство <span class=\"text-green\">бесплатно или с&nbsp;оплатой за результат</span>']" ); ?>
                <div class="situation_identical__cnt">
                    <span class="hidden">Ваша ситуация идентична <span><?=random_int(40, 80); ?>%</span> клиентов</span>
                </div>
            </div>
            <div class="popup-item__cnt mfc__cnt mfc-bankruptcy__number-4 hidden color_scheme_purple" data-form-name="SMS-43 Пройдите тест и узнайте как снизить долговую нагрузку" data-form-sms="46" data-form-time="1" data-form-title="Пройдите тест и узнайте как снизить долговую нагрузку">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <div class="steps__cnt hidden">
                    <div class="h3">
                        <span class="message_1">Для завершения осталось заполнить ваши данные</span>
                        <span class="message_2 hidden">Начало жизни без долгов положено!</span>
                        <span class="message_3 hidden">Первый шаг сделан! Осталось ответить на 7 вопросов!</span>
                        <span class="message_4 hidden">Осталось 6 вопросов</span>
                        <span class="message_5 hidden">Осталось 5 вопросов</span>
                        <span class="message_6 hidden">Вы на полпути к избавлению от всех долгов!</span>
                        <span class="message_7 hidden">Осталось 3 вопроса</span>
                        <span class="message_8 hidden">Осталось 2 вопроса</span>
                        <span class="message_9 hidden">Вы почти у цели!</span>
                        <span class="message_10 hidden">Прекрасно! Осталось получить результат теста:</span>
                    </div>
                    <div class="steps__wrap" data-active-color="#7A55D9" data-default-color="#D9D9D9" >
                        <svg width="661" height="12" viewBox="0 0 661 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path data-title="Начало жизни без долгов положено!" class="valid" d="M0 0H55.3915L60.1667 6L55.3915 12H0V6V0Z" fill="#7A55D9"></path>
                            <path data-title="Первый шаг сделан! Осталось ответить на 8 вопросов!" d="M60.167 0H115.559L120.334 6L115.559 12H60.167L64.9421 6L60.167 0Z" fill="#D9D9D9"></path>
                            <path data-title="Осталось 7 вопросов" d="M120.333 0H175.725L180.5 6L175.725 12H120.333L125.108 6L120.333 0Z" fill="#D9D9D9"></path>
                            <path data-title="Осталось 6 вопросов" d="M180.5 0H235.892L240.667 6L235.892 12H180.5L185.275 6L180.5 0Z" fill="#D9D9D9"></path>
                            <path data-title="Осталось 5 вопросов" d="M240.667 0H296.059L300.834 6L296.059 12H240.667L245.442 6L240.667 0Z" fill="#D9D9D9"></path>
                            <path data-title="Вы на полпути к избавлению от всех долгов!" d="M300.833 0H356.225L361 6L356.225 12H300.833L305.608 6L300.833 0Z" fill="#D9D9D9"></path>
                            <path data-title="Осталось 3 вопроса" d="M361 0H416.392L421.167 6L416.392 12H361L365.775 6L361 0Z" fill="#D9D9D9"></path>
                            <path data-title="Осталось 2 вопроса" d="M421.167 0H476.559L481.334 6L476.559 12H421.167L425.942 6L421.167 0Z" fill="#D9D9D9"></path>
                            <path data-title="Вы почти у цели!" d="M481.333 0H536.725L541.5 6L536.725 12H481.333L486.108 6L481.333 0Z" fill="#D9D9D9"></path>
                            <path data-title="Прекрасно! Осталось получить результат теста:" d="M541.5 0H596.892L601.667 6L596.892 12H541.5L546.275 6L541.5 0Z" fill="#D9D9D9"></path>
                            <path data-title="Прекрасно! Осталось получить результат теста:" class="valid" d="M601.833 0H657V6V12H601.833L606.362 6L601.833 0Z" fill="#D9D9D9"></path>
                        </svg>
                    </div>
                </div>
                <?php echo do_shortcode( "[quiz_for_articles id='21208' title='Ответив на <span class=\"text-green\">4 вопросов онлайн-теста</span>, вы&nbsp;узнаете, как именно в&nbsp;вашем случае <span class=\"text-green\">снизить долговую нагрузку по&nbsp;кредитам</span> через процедуру реструктуризации']" ); ?>
                <div class="situation_identical__cnt">
                    <span class="hidden">Ваша ситуация идентична <span><?=random_int(40, 80); ?>%</span> клиентов</span>
                </div>
            </div>
            <div class="popup-item__cnt mfc__cnt mfc-bankruptcy-soc__number-1 hidden" data-form-name="SMS-34 Пройдите тест и узнайте, вправе ли Вы списать все Ваши долги с 100% гарантией результата через МФЦ СПб по акции до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?>" data-form-sms="37" data-form-time="1" data-form-title="Пройдите тест и узнайте, вправе ли вы обанкротиться бесплатно или с субсидией в арбитражном суде или МФЦ до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?> <?php echo date ( 'Y' ) ; ?> г. !">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <?php echo do_shortcode( "[quiz_for_articles id='4373' title='Ответив на <span class=\"text-accent\">9 вопросов</span> онлайн-теста, вы узнаете, вправе ли вы списать все долги cо <span class=\"text-accent\">100% гарантией результата через МФЦ</span> СПб по акции <span class=\"text-accent text-nowrap\">до&nbsp;" . $popup_year_date->format('j') . "&nbsp;" . $popup_year_arr[$popup_year_month] . "&nbsp;" . date ( 'Y' ) . "&nbsp;г., </span> ответив на&nbsp;10&nbsp;вопросов!']" ); ?>
            </div>
            <div class="popup-item__cnt mfc__cnt mfc-bankruptcy-soc__number-2 hidden" data-form-name="SMS-35 Пройдите тест и узнайте минимальную стоимость банкротства в Арбитражном суде СПб и ЛО по акции до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?>" data-form-sms="38" data-form-time="1" data-form-title="Пройдите тест и узнайте, вправе ли вы обанкротиться бесплатно или с субсидией в арбитражном суде или МФЦ до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?> <?php echo date ( 'Y' ) ; ?> г. !">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <?php echo do_shortcode( "[quiz_for_articles id='4374' title='Ответив на <span class=\"text-pink\">9 вопросов онлайн-теста</span>, вы узнаете, вправе ли вы списать все кредиты и долги <span class=\"text-pink\">через арбитражный суд и сколько это будет стоить</span>']" ); ?>
            </div>
            <div class="popup-item__cnt mfc__cnt mfc-bankruptcy-soc__number-3 hidden" data-form-name="SMS-36 Пройдите тест и узнайте, относитесь ли вы к льготным категориям граждан и имеете ли право на банкротство с оплатой за результат" data-form-sms="39" data-form-time="1" data-form-title="Пройдите тест и узнайте, вправе ли вы обанкротиться бесплатно или с субсидией в арбитражном суде или МФЦ до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?> <?php echo date ( 'Y' ) ; ?> г. !">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <?php echo do_shortcode( "[quiz_for_articles id='4375' title='Ответив на <span class=\"text-green\">10 вопросов онлайн-теста</span>, вы&nbsp;узнаете, относитесь ли вы ко льготным категориям граждан и имеете ли право на <span class=\"text-green\">банкротство с оплатой за результат</span>']" ); ?>
            </div>
            
            <div class="popup-item__cnt feedback-thanks-popup hidden">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <p class="big">Спасибо.</p>
                <p class="small">Ваше обращение принято в работу и будет рассмотрено в течении двух рабочих дней. В случае необходимости уполномоченный сотрудник свяжется с Вами для уточнения информации.</p>
            </div>
            <div class="popup-item__cnt mfc__cnt mfc-bankruptcy-bonus-1 schema-blue hidden">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <div class="form-cnt">
                    <!--<div class="title">Рекомендовать банкротство другу</div>-->
                    <div class="form-wrap">
                        <?php echo do_shortcode("[contact-form-7 id='26259' title='newbonus - Реферальная программа: Получить деньги']"); ?>
                    </div>
                    <div class="politics">
                        <span class="politics__icon"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#shild"></use></svg></span>
                        <p class="politics__text">Мы гарантируем безопасность и сохранность Ваших данных. Нажимая на кнопку, вы даете согласие на обработку своих персональных данных в соответствии с <a href="https://fpa.ru/politika/">«Политикой конфиденциальности»</a></p>
                    </div>
                </div>
            </div>
            <div class="popup-item__cnt mfc__cnt mfc-bankruptcy-bonus-2 schema-red hidden">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <div class="form-cnt">
                    <!--<div class="title">Рекомендовать банкротство другу</div>-->
                    <div class="form-wrap">
                        <?php echo do_shortcode("[contact-form-7 id='26261' title='newbonus - Реферальная программа: Рекомендовать']"); ?>
                    </div>
                    <div class="politics">
                        <span class="politics__icon"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#shild"></use></svg></span>
                        <p class="politics__text">Мы гарантируем безопасность и сохранность Ваших данных. Нажимая на кнопку, вы даете согласие на обработку своих персональных данных в соответствии с <a href="https://fpa.ru/politika/">«Политикой конфиденциальности»</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
  </div>
  
  <?php wp_footer(); ?>
  
</body>
</html>