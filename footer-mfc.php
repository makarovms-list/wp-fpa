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
    <footer class="footer" style="display: block!important;" data-daysleft="<?php echo round($differenceDay); ?>">
      <div class="footer__bottom">
        <div class="container">
          <div class="footer__block">
            <ul class="copyright copyright--center">
              <li class="copyright__item copyright__item--center">© ООО «Финансово-правовой альянс», 2015‑<?php echo date ( 'Y' ) ; ?></li>
              <li class="copyright__item copyright__item--center">ОГРН - 1167847164121 ИНН - 7838051976</li>
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
    <?php 
        $popup_year_arr = ['01' => 'января', '02' => 'февраля', '03' => 'марта', '04' => 'апреля', '05' => 'мая', '06' => 'июня', '07' => 'июля', '08' => 'августа', '09' => 'сентября', '10' => 'октября', '11' => 'ноября', '12' => 'декабря'];
        $popup_year_date = get_field('timer', 374, false);
        $popup_year_date = new DateTime($popup_year_date);
        $popup_year_month = $popup_year_date->format('m');
    ?>
    
    <div class="popup__cnt hidden">
        <div class="popup__overlay">
            <div class="popup-item__cnt mfc__cnt mfc__number-1 hidden" data-form-name="SMS-12 Пройдите тест и узнайте, вправе ли вы обанкротиться бесплатно или с субсидией в Арбитражном суде или МФЦ до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?>" data-form-sms="17" data-form-time="1" data-form-title="Пройдите тест и узнайте, вправе ли вы обанкротиться бесплатно или с субсидией в Арбитражном суде или МФЦ до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?> <?php echo date ( 'Y' ) ; ?> г. !">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <?php echo do_shortcode( "[quiz_for_articles id='4361' title='Узнайте, вправе&nbsp;ли&nbsp;вы <span class=\"text-accent\">обанкротиться бесплатно </span>в&nbsp;Арбитражном суде или&nbsp;МФЦ&nbsp; <span class=\"text-accent \">до&nbsp;" . $popup_year_date->format('j') . "&nbsp;" . $popup_year_arr[$popup_year_month] . "&nbsp;" . date ( 'Y' ) . "&nbsp;г., </span> ответив на&nbsp;10&nbsp;вопросов!']" ); ?>
            </div>
            <div class="popup-item__cnt mfc__cnt mfc__number-2 hidden" data-form-name="SMS-13 Пройдите тест и узнайте минимальную стоимость банкротства в Арбитражном суде или МФЦ до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?>" data-form-sms="18" data-form-time="1" data-form-title="Пройдите тест и узнайте минимальную стоимость банкротства в Арбитражном суде или МФЦ до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?> <?php echo date ( 'Y' ) ; ?> г. !">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <?php echo do_shortcode( "[quiz_for_articles id='4362' title='Узнайте <span class=\"text-pink\">минимальную стоимость&nbsp;банкротства</span> в&nbsp;Арбитражном суде или&nbsp;МФЦ <span class=\"text-pink\">до&nbsp;" . $popup_year_date->format('j') . "&nbsp;" . $popup_year_arr[$popup_year_month] . "&nbsp;" . date ( 'Y' ) . " г.,</span> ответив на&nbsp;12&nbsp;вопросов!']" ); ?>
            </div>
            <div class="popup-item__cnt mfc__cnt mfc-fineko__number-1 hidden" data-form-name="SMS-12 (Финико) Пройдите тест и узнайте, вправе ли вы обанкротиться бесплатно или с субсидией в Арбитражном суде или МФЦ до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?>" data-form-sms="22" data-form-time="1" data-form-title="Потеряли до 500 000 ₽ на Финико и не можете платить кредиты? Узнайте вправе ли вы бесплатно списать долги в МФЦ до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?> <?php echo date ( 'Y' ) ; ?> г. !">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <?php echo do_shortcode( "[quiz_for_articles id='4363' title='Узнайте, вправе ли вы <span class=\"text-accent\">списать кредиты,</span> которые вкладывали в Финико, ответив на&nbsp;10&nbsp;вопросов!']" ); ?>
            </div>
            <div class="popup-item__cnt mfc__cnt mfc-fineko__number-2 hidden" data-form-name="SMS-13 Пройдите тест и узнайте минимальную стоимость банкротства в Арбитражном суде или МФЦ до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?>" data-form-sms="23" data-form-time="1" data-form-title="Потеряли больше 500 000 ₽ на Финико и не можете платить кредиты? Узнайте вправе ли вы списать кредиты через банкротство в Арбитражном суде до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?> <?php echo date ( 'Y' ) ; ?> г.!">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <?php echo do_shortcode( "[quiz_for_articles id='4364' title='Узнайте, вправе ли вы <span class=\"text-pink\">списать кредиты,</span> которые вкладывали в Финико, ответив на&nbsp;11&nbsp;вопросов!']" ); ?>
            </div>
            <div class="popup-item__cnt mfc__cnt mfc-ac__number-1 hidden" data-form-name="SMS-12 Пройдите тест и узнайте, вправе ли вы обанкротиться бесплатно или с субсидией в Арбитражном суде или МФЦ до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?>" data-form-sms="17" data-form-time="1" data-form-title="Узнайте, вправе ли вы обанкротиться бесплатно или с субсидией в Арбитражном суде или МФЦ до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?> <?php echo date ( 'Y' ) ; ?> г.!">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <form id="mfc-ac__number-1">
                <?php echo do_shortcode( "[quiz_for_articles id='4365' title='Узнайте, вправе&nbsp;ли&nbsp;вы <span class=\"text-accent\">обанкротиться бесплатно </span>в&nbsp;Арбитражном суде или&nbsp;МФЦ&nbsp; <span class=\"text-accent text-nowrap\">до&nbsp;" . $popup_year_date->format('j') . "&nbsp;" . $popup_year_arr[$popup_year_month] . "&nbsp;" . date ( 'Y' ) ."&nbsp;г., </span> ответив на&nbsp;11&nbsp;вопросов!']" ); ?>
                </form>
            </div>
            <div class="popup-item__cnt mfc__cnt mfc-ac__number-2 hidden" data-form-name="SMS-13 Пройдите тест и узнайте минимальную стоимость банкротства в Арбитражном суде или МФЦ до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?>" data-form-sms="18" data-form-time="1" data-form-title="Узнайте минимальную стоимость банкротства в Арбитражном суде или МФЦ до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?> <?php echo date ( 'Y' ) ; ?> г.!">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <?php echo do_shortcode( "[quiz_for_articles id='4366' title='Узнайте <span class=\"text-red\">минимальную стоимость&nbsp;банкротства </span>в&nbsp;Арбитражном суде или&nbsp;МФЦ&nbsp; <span class=\"text-red text-nowrap\">до&nbsp;" . $popup_year_date->format('j') . "&nbsp;" . $popup_year_arr[$popup_year_month] . "&nbsp;" . date ( 'Y' ) ."&nbsp;г.,</span> ответив на&nbsp;10&nbsp;вопросов!']" ); ?>
            </div>
            <div class="popup-item__cnt mfc__cnt mfc-new__number-1 hidden" data-form-name="SMS-12 Пройдите тест и узнайте, вправе ли вы обанкротиться бесплатно или с субсидией в Арбитражном суде или МФЦ до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?>" data-form-sms="17" data-form-time="1" data-form-title="Узнайте, вправе ли вы обанкротиться бесплатно или с субсидией в Арбитражном суде или МФЦ до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?> <?php echo date ( 'Y' ) ; ?> г.!">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <?php echo do_shortcode( "[quiz_for_articles id='4367' title='Узнайте, вправе&nbsp;ли&nbsp;вы <span class=\"text-accent\">обанкротиться бесплатно </span>в&nbsp;Арбитражном суде или&nbsp;МФЦ&nbsp; <span class=\"text-accent text-nowrap\">до&nbsp;" . $popup_year_date->format('j') . "&nbsp;" . $popup_year_arr[$popup_year_month] . "&nbsp;" . date ( 'Y' ) ."&nbsp;г.,</span> ответив на&nbsp;11&nbsp;вопросов!']" ); ?>
            </div>
            <div class="popup-item__cnt mfc__cnt mfc-new__number-2 hidden" data-form-name="SMS-13 Пройдите тест и узнайте минимальную стоимость банкротства в Арбитражном суде или МФЦ до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?>" data-form-sms="18" data-form-time="1" data-form-title="Узнайте минимальную стоимость банкротства в Арбитражном суде или МФЦ до <?php echo $popup_year_date->format('j') . ' ' . $popup_year_arr[$popup_year_month]; ?> <?php echo date ( 'Y' ) ; ?> г.!">
                <button class="popup__close">
                    <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"/><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"/></svg>
                </button>
                <?php echo do_shortcode( "[quiz_for_articles id='4366' title='Узнайте <span class=\"text-red\">минимальную стоимость&nbsp;банкротства </span>в&nbsp;Арбитражном суде или&nbsp;МФЦ&nbsp; <span class=\"text-red text-nowrap\">до&nbsp;" . $popup_year_date->format('j') . "&nbsp;" . $popup_year_arr[$popup_year_month] . "&nbsp;" . date ( 'Y' ) ."&nbsp;г.,</span> ответив на&nbsp;10&nbsp;вопросов!']" ); ?>
            </div>
            <div class="modal__wrap modal__wrap--answer answer hidden">
                <button class="no-btn modal__close"><svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use></svg></button>
                <h3 class="calc-modal__question">Ответ придёт в СМС-сообщении в течение 90 секунд</h3>
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
                <?php /*echo do_shortcode( '[contact-form-7 id="2950" title="Онлайн калькулятор на десктопах (из navbar) - Ответ придёт в СМС-сообщении в течение 90 секунд" html_class="form modal__form form-test"]' );*/ ?>
                <?php echo do_shortcode( '[contact-form-7 id="20982" title="Онлайн калькулятор на десктопах (из navbar) - Ответ придёт в СМС-сообщении в течение 90 секунд" html_class="form modal__form form-test 123"]' ); ?>
                <div class="politics">
                    <span class="politics__icon">
                        <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#shild"></use></svg>
                    </span>
                    <p class="politics__text">Мы гарантируем безопасность и сохранность Ваших данных. Нажимая на кнопку, вы даете согласие на обработку своих персональных данных в соответствии с <a href="<?= get_permalink(123) ?>">«Политикой конфиденциальности»</a></p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section--modal modal">
      <div class="modal__overlay hidden">
       
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
        
        <div class="modal__wrap modal__wrap--recording hidden">
          <button class="no-btn modal__close">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
            </svg>
          </button>
          <h3 class="modal__title">Записаться на консультацию к арбитражному управляющему</h3>
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
          
          <?php echo do_shortcode( '[contact-form-7 id="2027" title="Модальное окно - Онлайн-запись к арбитражному управляющему" html_class="callback__form"]' ); ?>

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
        
        <div class="modal__wrap modal__wrap--free test hidden">
          <div class="modal__inner">
            <button class="no-btn modal__close modal__close--out">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
              </svg>
            </button>
            <h3 class="modal__title modal__title--test">Узнайте, вправе ли вы <span class="text-accent">обанкротиться бесплатно </span>в Арбитражном суде или МФЦ  <span class="text-accent text-nowrap">до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> г., </span> ответив на 8 вопросов!</h3>
            <div class="test__wrap test__wrap--mfc">
              <div class="test__block region__container">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">1.</span> Вы проживаете в:
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-6-1">Санкт-Петербург и Ленинградская область</label>
                    <input class="radio__default" id="free-6-1" type="radio" name="place" value="Санкт-Петербург и Ленинградская область">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-6-2">Москва и Московская область</label>
                    <input class="radio__default" id="free-6-2" type="radio" name="place" value="Москва и Московская область">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-6-3">Другие регионы</label>
                    <input class="radio__default" id="free-6-3" type="radio" name="place" value="Другие регионы">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">2.</span> Какова общая сумма задолженности перед всеми кредиторами?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-8-1">Менее 300 000 тыс. руб.</label>
                    <input class="radio__default" id="free-8-1" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-8-2">300 001 руб. – 500 000 руб.</label>
                    <input class="radio__default" id="free-8-2" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-8-3">500 001 руб. – 1 000 000 руб.</label>
                    <input class="radio__default" id="free-8-3" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-8-4">1 000 001 руб. – 3 000 000 руб.</label>
                    <input class="radio__default" id="free-8-4" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-8-5">3 000 001 руб. – 7 000 000 руб.</label>
                    <input class="radio__default" id="free-8-5" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-8-6">Более 7 000 001 руб.</label>
                    <input class="radio__default" id="free-8-6" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-8-7">Затрудняюсь ответить</label>
                    <input class="radio__default" id="free-8-7" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc"></span>
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
                    <label class="checkbox__label" for="free-1-1">Безработные (более 3 месяцев)</label>
                    <input class="checkbox__default" id="free-1-1" type="checkbox" name="category" value="Безработные (более 3 месяцев)">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-1-2">Ипотечные должники</label>
                    <input class="checkbox__default" id="free-1-2" type="checkbox" name="category" value="Ипотечные должники">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-1-3">Родители одиночки</label>
                    <input class="checkbox__default" id="free-1-3" type="checkbox" name="category" value="Родители одиночки">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-1-4">Пенсионеры</label>
                    <input class="checkbox__default" id="free-1-4" type="checkbox" name="category" value="Пенсионеры">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-1-5">Инвалиды любой группы</label>
                    <input class="checkbox__default" id="free-1-5" type="checkbox" name="category" value="Инвалиды любой группы">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-1-6">Родители ребенка до 3 лет</label>
                    <input class="checkbox__default" id="free-1-6" type="checkbox" name="category" value="Родители ребенка до 3 лет">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-1-7">Семьи с двумя и более детьми</label>
                    <input class="checkbox__default" id="free-1-7" type="checkbox" name="category" value="Семьи с двумя и более детьми">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-1-8">Индивидуальные предприниматели, бывшие ИП</label>
                    <input class="checkbox__default" id="free-1-8" type="checkbox" name="category" value="Индивидуальные предприниматели, бывшие ИП">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-1-9">Военнослужащие и участники боевых действий</label>
                    <input class="checkbox__default" id="free-1-9" type="checkbox" name="category" value="Военнослужащие и участники боевых действий">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-1-10">Сотрудники здравоохранения, образования и защиты правопорядка</label>
                    <input class="checkbox__default" id="free-1-10" type="checkbox" name="category" value="Сотрудники здравоохранения, образования и защиты правопорядка">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="free-1-11">Другое</label>
                    <input class="checkbox__default" id="free-1-11" type="checkbox" name="category" value="Другое" data-reset>
                    <span class="checkbox__new"></span>
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
                    <span class="test__question-icon">5.</span> Кто является вашим кредитором(ами)?
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
                    <span class="test__question-icon">6.</span> Есть ли среди ваших кредиторов банки с гос. участием (Сбербанк, ВТБ, Россельхозбанк и др.)?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-4-1">Да</label>
                    <input class="radio__default" id="free-4-1" type="radio" name="gosbanks">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-4-2">Нет</label>
                    <input class="radio__default" id="free-4-2" type="radio" name="gosbanks">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-4-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="free-4-3" type="radio" name="gosbanks">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">7.</span> Ваш официальный доход составляет более 48 000 рублей в месяц?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-5-1">Да</label>
                    <input class="radio__default" id="free-5-1" type="radio" name="dohod48k">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-5-2">Нет</label>
                    <input class="radio__default" id="free-5-2" type="radio" name="dohod48k">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-5-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="free-5-3" type="radio" name="dohod48k">
                    <span class="radio__new radio__new--mfc"></span>
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
                    <label class="radio__label" for="free-7-1">Да</label>
                    <input class="radio__default" id="free-7-1" type="radio" name="fssp">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="free-7-2">Нет</label>
                    <input class="radio__default" id="free-7-2" type="radio" name="fssp">
                    <span class="radio__new radio__new--mfc"></span>
                  </div>
                </div>
              </div>
              
              <button class="btn test__btn test-btn" data-test="free" data-name="SMS-12 Пройдите тест и узнайте, вправе ли вы обанкротиться бесплатно или с субсидией в Арбитражном суде или МФЦ до <?php echo $date->format('j') . ' ' . $arr[$month]; ?>" data-sms data-title="01">Узнать результат</button>
            </div>
          </div>
        </div>
        
        <div class="modal__wrap modal__wrap--mfc-new modal__wrap--free-new test hidden">
          <div class="modal__inner modal__inner--new">
            <button class="no-btn modal__close modal__close--out">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
              </svg>
            </button>
            <h3 class="modal__title modal__title--test">Узнайте, вправе ли вы <span class="text-accent">обанкротиться бесплатно </span>в Арбитражном суде или МФЦ  <span class="text-accent text-nowrap">до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> г., </span> ответив на 8 вопросов!</h3>
            <div class="test__wrap test__wrap--mfc">
              <div class="test__block region__container">
                <div class="test__content">
                  <p class="test__question test__question--new">1. Место вашего фактического проживания:</p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="free-new-6-1">Санкт-Петербург и Ленинградская область</label>
                    <input class="radio__default" id="free-new-6-1" type="radio" name="place" value="Санкт-Петербург и Ленинградская область">
                    <span class="radio__new"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="free-new-6-2">Москва и Московская область</label>
                    <input class="radio__default" id="free-new-6-2" type="radio" name="place" value="Москва и Московская область">
                    <span class="radio__new"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="free-new-6-3">Другие регионы</label>
                    <input class="radio__default" id="free-new-6-3" type="radio" name="place" value="Другие регионы">
                    <span class="radio__new"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--new">2. Относитесь ли вы к одной из указанных категорий граждан?</p>
                </div>
                <div class="test__variants">
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="checkbox__label" for="free-new-1-1">Безработные (более 3 месяцев)</label>
                    <input class="checkbox__default" id="free-new-1-1" type="checkbox" name="category" value="Безработные (более 3 месяцев)">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="checkbox__label" for="free-new-1-2">Ипотечные должники</label>
                    <input class="checkbox__default" id="free-new-1-2" type="checkbox" name="category" value="Ипотечные должники">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="checkbox__label" for="free-new-1-3">Родители-одиночки</label>
                    <input class="checkbox__default" id="free-new-1-3" type="checkbox" name="category" value="Родители одиночки">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="checkbox__label" for="free-new-1-4">Пенсионеры</label>
                    <input class="checkbox__default" id="free-new-1-4" type="checkbox" name="category" value="Пенсионеры">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="checkbox__label" for="free-new-1-5">Инвалиды любой группы</label>
                    <input class="checkbox__default" id="free-new-1-5" type="checkbox" name="category" value="Инвалиды любой группы">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="checkbox__label" for="free-new-1-6">Родители ребенка до 3 лет</label>
                    <input class="checkbox__default" id="free-new-1-6" type="checkbox" name="category" value="Родители ребенка до 3 лет">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="checkbox__label" for="free-new-1-7">Семьи с двумя и более детьми</label>
                    <input class="checkbox__default" id="free-new-1-7" type="checkbox" name="category" value="Семьи с двумя и более детьми">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="checkbox__label" for="free-new-1-8">Индивидуальные предприниматели, бывшие ИП</label>
                    <input class="checkbox__default" id="free-new-1-8" type="checkbox" name="category" value="Индивидуальные предприниматели, бывшие ИП">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="checkbox__label" for="free-new-1-9">Военнослужащие и участники боевых действий</label>
                    <input class="checkbox__default" id="free-new-1-9" type="checkbox" name="category" value="Военнослужащие и участники боевых действий">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="checkbox__label" for="free-new-1-10">Сотрудники здравоохранения, образования и защиты правопорядка</label>
                    <input class="checkbox__default" id="free-new-1-10" type="checkbox" name="category" value="Сотрудники здравоохранения, образования и защиты правопорядка">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="checkbox__label" for="free-new-1-11">Другое</label>
                    <input class="checkbox__default" id="free-new-1-11" type="checkbox" name="category" value="Другое" data-reset>
                    <span class="checkbox__new"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--new">3. У вас произошло сокращение на работе или снижение официального дохода, не покрывающего размер ежемесячных платежей по кредитам и займам?</p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="free-new-2-1">Да</label>
                    <input class="radio__default" id="free-new-2-1" type="radio" name="reduced-income">
                    <span class="radio__new"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="free-new-2-2">Нет</label>
                    <input class="radio__default" id="free-new-2-2" type="radio" name="reduced-income">
                    <span class="radio__new"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--new">4. Кто является вашим(и) кредитором(ами)?</p>
                </div>
                <div class="test__variants">
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="checkbox__label" for="free-new-3-1">Банки</label>
                    <input class="checkbox__default" id="free-new-3-1" type="checkbox" name="creditors" value="Банки">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="checkbox__label" for="free-new-3-2">МФО</label>
                    <input class="checkbox__default" id="free-new-3-2" type="checkbox" name="creditors" value="МФО">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="checkbox__label" for="free-new-3-3">Государственные органы</label>
                    <input class="checkbox__default" id="free-new-3-3" type="checkbox" name="creditors" value="Государственные органы">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="checkbox__label" for="free-new-3-4">Физические лица</label>
                    <input class="checkbox__default" id="free-new-3-4" type="checkbox" name="creditors" value="Физические лица">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="checkbox__label" for="free-new-3-5">Юридические лица</label>
                    <input class="checkbox__default" id="free-new-3-5" type="checkbox" name="creditors" value="Юридические лица">
                    <span class="checkbox__new"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="checkbox__label" for="free-new-3-6">Затрудняюсь ответить</label>
                    <input class="checkbox__default" id="free-new-3-6" type="checkbox" name="creditors" value="Затрудняюсь ответить" data-reset>
                    <span class="checkbox__new"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--new">5. Есть ли среди ваших кредиторов банки с госучастием (Сбербанк, ВТБ, Россельхозбанк и другие)?</p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="free-new-4-1">Да</label>
                    <input class="radio__default" id="free-new-4-1" type="radio" name="gosbanks">
                    <span class="radio__new"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="free-new-4-2">Нет</label>
                    <input class="radio__default" id="free-new-4-2" type="radio" name="gosbanks">
                    <span class="radio__new"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="free-new-4-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="free-new-4-3" type="radio" name="gosbanks">
                    <span class="radio__new"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--new">6. Ваш официальный доход составляет более 48 000 рублей в месяц?</p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="free-new-5-1">Да</label>
                    <input class="radio__default" id="free-new-5-1" type="radio" name="dohod48k">
                    <span class="radio__new"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="free-new-5-2">Нет</label>
                    <input class="radio__default" id="free-new-5-2" type="radio" name="dohod48k">
                    <span class="radio__new"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="free-new-5-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="free-new-5-3" type="radio" name="dohod48k">
                    <span class="radio__new"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--new">7. Ваши долги уже просужены и исполнительные листы находятся в ФССП (Федеральной службе судебных приставов)? Произведён арест счетов, имущества, наложен запрет на выезд за границу?</p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="free-new-7-1">Да</label>
                    <input class="radio__default" id="free-new-7-1" type="radio" name="fssp">
                    <span class="radio__new"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="free-new-7-2">Нет</label>
                    <input class="radio__default" id="free-new-7-2" type="radio" name="fssp">
                    <span class="radio__new"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--new">8. Какова общая сумма задолженности перед всеми кредиторами?</p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="free-new-8-1">Менее 300 000 тыс. руб.</label>
                    <input class="radio__default" id="free-new-8-1" type="radio" name="summ">
                    <span class="radio__new"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="free-new-8-2">300 001 руб. – 500 000 руб.</label>
                    <input class="radio__default" id="free-new-8-2" type="radio" name="summ">
                    <span class="radio__new"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="free-new-8-3">500 001 руб. – 1 000 000 руб.</label>
                    <input class="radio__default" id="free-new-8-3" type="radio" name="summ">
                    <span class="radio__new"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="free-new-8-4">1 000 001 руб. – 3 000 000 руб.</label>
                    <input class="radio__default" id="free-new-8-4" type="radio" name="summ">
                    <span class="radio__new"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="free-new-8-5">3 000 001 руб. – 7 000 000 руб.</label>
                    <input class="radio__default" id="free-new-8-5" type="radio" name="summ">
                    <span class="radio__new"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="free-new-8-6">Более 7 000 001 руб.</label>
                    <input class="radio__default" id="free-new-8-6" type="radio" name="summ">
                    <span class="radio__new"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="free-new-8-7">Затрудняюсь ответить</label>
                    <input class="radio__default" id="free-new-8-7" type="radio" name="summ">
                    <span class="radio__new"></span>
                  </div>
                </div>
              </div>
              <a class="btn test__btn link-test" href="<?= get_permalink(3279) ?>" data-test="free" data-name="SMS-12 Пройдите тест и узнайте, вправе ли вы обанкротиться бесплатно или с субсидией в Арбитражном суде или МФЦ до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?>" data-sms="17" data-title="01">Узнать результат</a>
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
            <h3 class="modal__title modal__title--test">Узнайте <span class="text-pink">минимальную стоимость&nbsp;банкротства </span>в Арбитражном суде или МФЦ  <span class="text-pink text-nowrap">до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> г., </span> ответив на 9 вопросов!</h3>
            <div class="test__wrap test__wrap--mfc">
              <div class="test__block region__container">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">1.</span> Вы проживаете в:
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-8-1">Санкт-Петербург и Ленинградская область</label>
                    <input class="radio__default" id="sale-8-1" type="radio" name="place" value="Санкт-Петербург и Ленинградская область">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-8-2">Москва и Московская область</label>
                    <input class="radio__default" id="sale-8-2" type="radio" name="place" value="Москва и Московская область">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-8-3">Другие регионы</label>
                    <input class="radio__default" id="sale-8-3" type="radio" name="place" value="Другие регионы">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">2.</span> Какова общая сумма задолженности перед всеми кредиторами?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-9-1">Менее 300 000 тыс. руб.</label>
                    <input class="radio__default" id="sale-9-1" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-9-2">300 001 руб. – 500 000 руб.</label>
                    <input class="radio__default" id="sale-9-2" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-9-3">500 001 руб. – 1 000 000 руб.</label>
                    <input class="radio__default" id="sale-9-3" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-9-4">1 000 001 руб. – 3 000 000 руб.</label>
                    <input class="radio__default" id="sale-9-4" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-9-5">3 000 001 руб. – 7 000 000 руб.</label>
                    <input class="radio__default" id="sale-9-5" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-9-6">Более 7 000 001 руб.</label>
                    <input class="radio__default" id="sale-9-6" type="radio" name="summ">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-9-7">Затрудняюсь ответить</label>
                    <input class="radio__default" id="sale-9-7" type="radio" name="summ">
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
                    <label class="radio__label" for="sale-1-1">Да</label>
                    <input class="radio__default" id="sale-1-1" type="radio" name="officially-employed">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-1-2">Нет</label>
                    <input class="radio__default" id="sale-1-2" type="radio" name="officially-employed">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">4.</span> Ваш официальный доход более 48 000 рублей?
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
                    <span class="test__question-icon">5.</span> Имеется ли в собственности ценное имущество?
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
                    <label class="radio__label" for="sale-3-2">Есть недвижимость (не в ипотеке)</label>
                    <input class="radio__default" id="sale-3-2" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-3-2">Нет ценного имущества</label>
                    <input class="radio__default" id="sale-3-2" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-3-2">Затрудняюсь ответить</label>
                    <input class="radio__default" id="sale-3-2" type="radio" name="valuable">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">6.</span> Вы совершали сделки с ценным имуществом в течение последних 3 лет?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-5-1">Были сделки с ценным имуществом за 3 года</label>
                    <input class="radio__default" id="sale-5-1" type="radio" name="transactions">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-5-2">Не было сделок с ценным имуществом за 3 года</label>
                    <input class="radio__default" id="sale-5-2" type="radio" name="transactions">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-5-3">Другой вариант</label>
                    <input class="radio__default" id="sale-5-3" type="radio" name="transactions">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-5-4">Затрудняюсь ответить</label>
                    <input class="radio__default" id="sale-5-4" type="radio" name="transactions">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
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
                    <label class="checkbox__label" for="sale-6-1">Банки</label>
                    <input class="checkbox__default" id="sale-6-1" type="checkbox" name="creditors" value="Банки">
                    <span class="checkbox__new checkbox__new--pink"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="sale-6-2">МФО</label>
                    <input class="checkbox__default" id="sale-6-2" type="checkbox" name="creditors" value="МФО">
                    <span class="checkbox__new checkbox__new--pink"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="sale-6-3">Государственные органы</label>
                    <input class="checkbox__default" id="sale-6-3" type="checkbox" name="creditors" value="Государственные органы">
                    <span class="checkbox__new checkbox__new--pink"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="sale-6-4">Физические лица</label>
                    <input class="checkbox__default" id="sale-6-4" type="checkbox" name="creditors" value="Физические лица">
                    <span class="checkbox__new checkbox__new--pink"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="sale-6-5">Юридические лица</label>
                    <input class="checkbox__default" id="sale-6-5" type="checkbox" name="creditors" value="Юридические лица">
                    <span class="checkbox__new checkbox__new--pink"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--mfc">
                    <label class="checkbox__label" for="sale-6-6">Затрудняюсь ответить</label>
                    <input class="checkbox__default" id="sale-6-6" type="checkbox" name="creditors" value="Затрудняюсь ответить" data-reset>
                    <span class="checkbox__new checkbox__new--pink"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--mfc">
                    <span class="test__question-icon">8.</span> Общее количество ваших кредиторов (банки, МФО, физ.лица, ФНС, ЖКХ)?
                  </p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-7-1">1-3</label>
                    <input class="radio__default" id="sale-7-1" type="radio" name="number-creditors">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-7-2">3-5</label>
                    <input class="radio__default" id="sale-7-2" type="radio" name="number-creditors">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                  <div class="radio test__radio test__radio--mfc">
                    <label class="radio__label" for="sale-7-3">Более 5</label>
                    <input class="radio__default" id="sale-7-3" type="radio" name="number-creditors">
                    <span class="radio__new radio__new--mfc radio__new--pink"></span>
                  </div>
                </div>
              </div>

              
              <button class="btn test__btn test__btn--pink test-btn" data-test="sale" data-name="SMS-13 Пройдите тест и узнайте минимальную стоимость банкротства в Арбитражном суде или МФЦ до <?php echo $date->format('j') . ' ' . $arr[$month]; ?>" data-sms data-title="02">Узнать результат</button>
            </div>
          </div>
        </div>
        
        <div class="modal__wrap modal__wrap--mfc-new modal__wrap--sale-new test hidden">
          <div class="modal__inner modal__inner--new">
            <button class="no-btn modal__close modal__close--out">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
              </svg>
            </button>
            <h3 class="modal__title modal__title--test">Узнайте <span class="text-red">минимальную стоимость&nbsp;банкротства </span>в Арбитражном суде или МФЦ  <span class="text-red text-nowrap">до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> г., </span> ответив на 9 вопросов!</h3>
            <div class="test__wrap test__wrap--mfc">
              <div class="test__block region__container">
                <div class="test__content">
                  <p class="test__question test__question--new">1. Место вашего фактического проживания:</p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-8-1">Санкт-Петербург и Ленинградская область</label>
                    <input class="radio__default" id="sale-new-8-1" type="radio" name="place" value="Санкт-Петербург и Ленинградская область">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="radio__label" for="sale-new-8-2">Москва и Московская область</label>
                    <input class="radio__default" id="sale-new-8-2" type="radio" name="place" value="Москва и Московская область">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="radio__label" for="sale-new-8-3">Другие регионы</label>
                    <input class="radio__default" id="sale-new-8-3" type="radio" name="place" value="Другие регионы">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--new">2. Вы официально трудоустроены?</p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-1-1">Да</label>
                    <input class="radio__default" id="sale-new-1-1" type="radio" name="officially-employed">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-1-2">Нет</label>
                    <input class="radio__default" id="sale-new-1-2" type="radio" name="officially-employed">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--new">3. Ваш официальный доход составляет более 48 000 рублей в месяц?</p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-2-1">Да</label>
                    <input class="radio__default" id="sale-new-2-1" type="radio" name="dohod48k">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-2-2">Нет</label>
                    <input class="radio__default" id="sale-new-2-2" type="radio" name="dohod48k">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-2-3">Затрудняюсь ответить</label>
                    <input class="radio__default" id="sale-new-2-3" type="radio" name="dohod48k">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                  
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--new">4. Имеется ли у вас в собственности ценное имущество?</p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-3-1">Есть транспортные средства</label>
                    <input class="radio__default" id="sale-new-3-1" type="radio" name="valuable">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-3-2">Есть ипотека</label>
                    <input class="radio__default" id="sale-new-3-2" type="radio" name="valuable">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                  
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-3-3">Есть недвижимость (не в ипотеке)</label>
                    <input class="radio__default" id="sale-new-3-3" type="radio" name="valuable">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-3-4">Нет ценного имущества</label>
                    <input class="radio__default" id="sale-new-3-4" type="radio" name="valuable">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-3-5">Затрудняюсь ответить</label>
                    <input class="radio__default" id="sale-new-3-5" type="radio" name="valuable">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--new">5. Вы совершали сделки с ценным имуществом в течение последних 3 лет?</p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-5-1">Были сделки с ценным имуществом за 3 года</label>
                    <input class="radio__default" id="sale-new-5-1" type="radio" name="transactions">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-5-2">Не было сделок с ценным имуществом за 3 года</label>
                    <input class="radio__default" id="sale-new-5-2" type="radio" name="transactions">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-5-3">Другой вариант</label>
                    <input class="radio__default" id="sale-new-5-3" type="radio" name="transactions">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-5-4">Затрудняюсь ответить</label>
                    <input class="radio__default" id="sale-new-5-4" type="radio" name="transactions">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--new">6. Кто является вашим(и) кредитором(ами)?</p>
                </div>
                <div class="test__variants">
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="checkbox__label" for="sale-new-6-1">Банки</label>
                    <input class="checkbox__default" id="sale-new-6-1" type="checkbox" name="creditors" value="Банки">
                    <span class="checkbox__new checkbox__new--red"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="checkbox__label" for="sale-new-6-2">МФО</label>
                    <input class="checkbox__default" id="sale-new-6-2" type="checkbox" name="creditors" value="МФО">
                    <span class="checkbox__new checkbox__new--red"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="checkbox__label" for="sale-new-6-3">Государственные органы</label>
                    <input class="checkbox__default" id="sale-new-6-3" type="checkbox" name="creditors" value="Государственные органы">
                    <span class="checkbox__new checkbox__new--red"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="checkbox__label" for="sale-new-6-4">Физические лица</label>
                    <input class="checkbox__default" id="sale-new-6-4" type="checkbox" name="creditors" value="Физические лица">
                    <span class="checkbox__new checkbox__new--red"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="checkbox__label" for="sale-new-6-5">Юридические лица</label>
                    <input class="checkbox__default" id="sale-new-6-5" type="checkbox" name="creditors" value="Юридические лица">
                    <span class="checkbox__new checkbox__new--red"></span>
                  </div>
                  <div class="checkbox test__checkbox test__checkbox--new">
                    <label class="checkbox__label" for="sale-new-6-6">Затрудняюсь ответить</label>
                    <input class="checkbox__default" id="sale-new-6-6" type="checkbox" name="creditors" value="Затрудняюсь ответить" data-reset>
                    <span class="checkbox__new checkbox__new--red"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--new">7. Общее количество ваших кредиторов (банки, МФО, физлица, ФНС, ЖКХ)?</p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-7-1">1-3</label>
                    <input class="radio__default" id="sale-new-7-1" type="radio" name="number-creditors">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-7-2">3-5</label>
                    <input class="radio__default" id="sale-new-7-2" type="radio" name="number-creditors">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-7-3">Более 5</label>
                    <input class="radio__default" id="sale-new-7-3" type="radio" name="number-creditors">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                </div>
              </div>
              <div class="test__block">
                <div class="test__content">
                  <p class="test__question test__question--new">8. Какова общая сумма задолженности перед всеми кредиторами?</p>
                </div>
                <div class="test__variants">
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-9-1">Менее 300 000 тыс. руб.</label>
                    <input class="radio__default" id="sale-new-9-1" type="radio" name="summ">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-9-2">300 001 руб. – 500 000 руб.</label>
                    <input class="radio__default" id="sale-new-9-2" type="radio" name="summ">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-9-3">500 001 руб. – 1 000 000 руб.</label>
                    <input class="radio__default" id="sale-new-9-3" type="radio" name="summ">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-9-4">1 000 001 руб. – 3 000 000 руб.</label>
                    <input class="radio__default" id="sale-new-9-4" type="radio" name="summ">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-9-5">3 000 001 руб. – 7 000 000 руб.</label>
                    <input class="radio__default" id="sale-new-9-5" type="radio" name="summ">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-9-6">Более 7 000 001 руб.</label>
                    <input class="radio__default" id="sale-new-9-6" type="radio" name="summ">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                  <div class="radio test__radio test__radio--new">
                    <label class="radio__label" for="sale-new-9-7">Затрудняюсь ответить</label>
                    <input class="radio__default" id="sale-new-9-7" type="radio" name="summ">
                    <span class="radio__new radio__new--red"></span>
                  </div>
                </div>
              </div>
              <a class="btn test__btn test__btn--red link-test" href="<?= get_permalink(3279) ?>" data-test="sale" data-name="SMS-13 Пройдите тест и узнайте минимальную стоимость банкротства в Арбитражном суде или МФЦ до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?>" data-sms="18" data-title="02">Узнать результат</a>
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
          
          <?php echo do_shortcode( '[contact-form-7 id="1238" title="Тесты на странице МФЦ - Ответ придёт в СМС-сообщении в течение 90 секунд" html_class="modal__form form-test"]' ); ?>

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
  
  <?php wp_footer(); ?>
  
</body>
</html>