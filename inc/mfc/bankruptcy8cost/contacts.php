<style>
    .contacts-section {
        padding: 140px 0;
    }
    
    .contacts-section .ymaps-layers-pane {
        -webkit-filter: grayscale(100%);
    }
    
    .contacts-section h1.heading {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 34px;
        line-height: 145%;
        color: #393939;
        margin-bottom: 25px;
    }
    .contacts-section .contacts__subtitle {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 24px;
        line-height: 140%;
        letter-spacing: 0.02em;
        color: #717B97;
        margin-bottom: 10px;
    }
    .contacts-section .contacts__text {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 34px;
        line-height: 145%;
        color: #393939;
    }
    .contacts-section .contacts-section__metro-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
    }
    .contacts-section .contacts-section__metro-list .contacts-section__metro-item {
        border-radius: 50px;
        padding: 10px 24px;
        display: flex;
        align-items: center;
        margin-right: 14px;
    }
    .contacts-section .contacts-section__metro-list .contacts-section__metro-item svg {
        margin-right: 5px;
    }
    .contacts-section .contacts-section__metro-list .contacts-section__metro-item span {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 145%;
        color: #FFFFFF;
    }
    .contacts-section .contacts-section__inner+.contacts-section__inner {
        margin-top: 25px;
    }
    .contacts-section .contacts-section__subtitle {
        margin-bottom: 4px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 24px;
        line-height: 140%;
        letter-spacing: 0.02em;
        color: #717B97;
    }
    .contacts-section .contacts-section__inner a {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 26px;
        line-height: 140%;
        letter-spacing: 0.02em;
        color: #5381F6;        
    }
    .contacts-section .contacts__social {
        margin-bottom: 45px;
    }
    .contacts-section .contacts-section__social .contact-social__list {
        padding: 0;
        margin: 0;
        list-style: none;
        display: flex;
        align-items: center;
    }
    .contacts-section .contacts-section__social .contact-social__list .contact-social__item {
        display: block;
        height: 48px;
    }
    .contacts-section .contacts-section__social .contact-social__list .contact-social__item a {
        display: block;
    }
    .contacts-section .contacts-section__social .contact-social__list .contact-social__item svg {
        height: 100%;
        width: auto;
    }
    .contacts-section .contacts-section__social .contact-social__list .contact-social__item+.contact-social__item {
        margin-left: 20px;
    }
    .contacts-section .contact-map__cnt {
        position: relative;
    }
    .contacts-section .map-route__cnt {
        position: absolute;
        right: 16px;
        top: 16px;
        z-index: 999;
    }
    
    .fpaOfficeMap__wrapper {
        /*width: 100%;*/
        /*
        max-height: calc(100vw * 0.57);
        position: relative;
        */
        padding-top: calc(100% * 0.57);
        position: relative;
    }
    .fpaOfficeMap__wrapper #fpaOfficeMap {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    }
    
    /*
    #fpaOfficeMap {
        width: 100%;
        height: calc(100vw * 0.57);
        position: relative;
    }
    #fpaOfficeMap ymaps.ymaps-map {
        max-height: calc(100% * 0.57);
    }
    */
    
    .contacts-section .map-route__cnt button {
        background: rgba(83, 129, 246, 0.85);
        box-shadow: 0px 4px 14px rgb(0 37 102 / 10%);
        border-radius: 8px;
        border: none;
        padding: 10px 24px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 24px;
        line-height: 145%;
        color: #FFFFFF;
        cursor: pointer;
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
    }
    .contacts-section .map-route__cnt button:hover {
        background: -webkit-gradient(linear,left bottom,left top,from(rgba(255,255,255,0)),to(rgba(255,255,255,.2))),#154ad0;
        background: -o-linear-gradient(bottom,rgba(255,255,255,0) 0,rgba(255,255,255,.2) 100%),#154ad0;
        background: linear-gradient(360deg,rgba(255,255,255,0) 0,rgba(255,255,255,.2) 100%),#154ad0;
        text-decoration: none;
    }
    #fpaOfficeMap .popover-inner > ymaps {
        background: rgba(83, 129, 246, 0.75);
        box-shadow: 0px 4px 14px rgb(0 37 102 / 15%);
        backdrop-filter: blur(12px);
        border-radius: 8px;
        padding: 25px;
        height: auto!important;
    }
    #fpaOfficeMap .popover-inner > ymaps .popover-title {
        font-weight: 400;
        display: block;
        font-size: 47px;
        line-height: 100%;
        margin-bottom: 20px;
        color: #fff;
        padding-right: 240px;
        font-family: 'Inter';
    }
    #fpaOfficeMap .popover-inner > ymaps .popover-content {
        font-weight: 500;
        display: block;
        font-size: 30px;
        line-height: 150%;
        color: #fff;
        padding-right: 240px;
        font-family: 'Inter';
    }
    
    #fpaOfficeMap .popover {
        position: absolute;
    }
    
    .contacts-section .contacts-section__social .contact-social__list .contact-social__item {
        height: 48px;
    }
    .contacts-section .contacts-section__social .contact-social__list .contact-social__item a {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 48px;
    }
    .contacts-section .contacts-section__social .contact-social__list .contact-social__item.vk--link svg {
        max-height: 28px;
    }
    .contacts-section .contacts-section__social .contact-social__list .contact-social__item.youtube--link svg {
        max-height: 28px;
    }
    
    .contacts-section .contacts__social .social__link {
        width: 48px;
        height: 48px;
    }
    .contacts-section .contacts__social .social__link svg {
        width: 48px;
        height: 48px;
    }
    #fpaOfficeMap .popover .close {
        color: #fff;
        font-size: 36px;
        position: absolute;
        right: 12px;
        top: 0;
        z-index: 999;
    }
    @media (max-width: 1080px) {
        #fpaOfficeMap .popover-inner > ymaps {
            padding: 20px;
        }
        #fpaOfficeMap .popover-inner > ymaps .popover-title {
            font-size: 40px;
            padding-right: 0px;
        }
        #fpaOfficeMap .popover-inner > ymaps .popover-content {
            font-size: 24px;
            padding-right: 200px;
        }
    } 
    @media (max-width: 782px) {
        #fpaOfficeMap .popover-inner > ymaps {
            padding: 15px;
        }
        #fpaOfficeMap .popover-inner > ymaps .popover-title {
            font-size: 34px;
            padding-right: 0px;
        }
        #fpaOfficeMap .popover-inner > ymaps .popover-content {
            font-size: 20px;
            padding-right: 150px;
        }
        .contacts-section .contacts__social .social__link {
            width: 36px;
            height: 36px;
        }
        .contacts-section .contacts__social .social__link svg {
            width: 36px;
            height: 36px;
        }
        .fpaOfficeMap__wrapper {
            padding-top: calc(100% * 0.9);
        }
    } 
    @media (max-width: 440px) {
        #fpaOfficeMap .popover-inner > ymaps .popover-title {
            font-size: 16px;
            padding-right: 0px;
            margin-bottom: 8px;
        }
        #fpaOfficeMap .popover-inner > ymaps .popover-content {
            font-size: 10px;
            padding-right: 80px;
        }
    } 
        
    @media (max-width: 1080px) {
        .contacts-section {
            padding: 100px 0;
        }
    }
    @media (max-width: 782px) {
        .contacts-section {
            padding: 60px 0;
        }
        .contacts-section h1.heading {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .contacts-section .contacts__subtitle {
            font-size: 18px;
            margin-bottom: 4px;
        }
        .contacts-section .contacts__text {
            font-size: 24px;
            margin-bottom: 4px;
        }
        .contacts-section .contacts-section__metro-list .contacts-section__metro-item {
            padding: 4px 24px;
        }
        .contacts-section .contacts-section__metro-list .contacts-section__metro-item span {
            font-size: 12px;
        }
        .contacts-section .contacts-section__subtitle {
            font-size: 18px;
            margin-bottom: 4px;
        }
        .contacts-section .contacts-section__inner a {
            font-size: 24px;
        }
        .contacts-section .contacts-section__inner+.contacts-section__inner {
            margin-top: 20px;
        }
        .contacts-section .contacts__social {
            margin-bottom: 40px;
        }
        .contacts-section .contacts-section__social .contact-social__list .contact-social__item {
            height: 36px;
        }
        .contacts-section .contacts-section__social .contact-social__list .contact-social__item a {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .contacts-section .contacts-section__social .contact-social__list .contact-social__item.vk--link svg {
            max-height: 20px;
        }
        .contacts-section .contacts-section__social .contact-social__list .contact-social__item.youtube--link svg {
            max-height: 20px;
        }
        .contacts-section .map-route__cnt button {
            padding: 6px 18px;
            font-size: 18px;
        }
        #fpaOfficeMap {
            width: 100%;
            height: calc(100vw * 0.9);
            position: relative;
        }
        
    }
    @media (max-width: 440px) {
        .contacts-section {
            padding: 40px 0;
        }
        .contacts-section h1.heading {
            font-size: 18px;
            margin-bottom: 15px;
        }
        .contacts-section .contacts__subtitle {
            font-size: 14px;
        }
        .contacts-section .contacts__text {
            font-size: 16px;
        }
        .contacts-section .contacts-section__metro-list .contacts-section__metro-item {
            padding: 4px 24px;
        }
        .contacts-section .contacts-section__metro-list .contacts-section__metro-item span {
            font-size: 12px;
        }
        .contacts-section .contacts-section__subtitle {
            font-size: 14px;
            margin-bottom: 4px;
        }
        .contacts-section .contacts__inner:not(:last-child) {
            margin-bottom: 15px;
        }
        .contacts-section .contacts-section__inner a {
            font-size: 16px;
        }
        .contacts-section .contacts-section__inner+.contacts-section__inner {
            margin-top: 15px;
        }
        .contacts-section .contacts__social {
            margin-bottom: 35px;
        }
        .contacts-section .contacts-section__social .contact-social__list .contact-social__item {
            height: 24px;
        }
        .contacts-section .contacts-section__social .contact-social__list .contact-social__item.vk--link svg {
            max-height: 16px;
        }
        .contacts-section .contacts-section__social .contact-social__list .contact-social__item.youtube--link svg {
            max-height: 16px;
        }
        .contacts-section .map-route__cnt button {
            padding: 6px 18px;
            font-size: 12px;
        }
        .contacts-section .contacts__social .social__link {
            width: 24px;
            height: 24px;
        }
        .contacts-section .contacts__social .social__link svg {
            width: 24px;
            height: 24px;
        }
    }
    @media (max-width: 380px) {
        .contacts-section .contacts-section__metro-list {
            flex-direction: column;
        }
        .contacts-section .contacts-section__metro-list li+li {
            margin-top: 8px;
        }
    }






</style>
<div class="contacts-section">
    <div class="container">
        <div class="contacts-content__cnt">
            <h1 class="heading">Контакты</h1>
            <div itemscope="" itemtype="http://schema.org/Organization" class="contacts-section--content">
                <p itemprop="name" hidden="">Финансово-правовой альянс</p>
                <div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress" class="contacts__inner">
                    <p itemprop="addressLocality" class="contacts__subtitle">Адмиралтейский район, Санкт-Петербург, 190031</p>
                    <p itemprop="streetAddress" class="contacts__text">Бизнес-центр «Мир», ул. Ефимова, 4/А, Офис 326</p>
                    <ul class="contacts-section__metro-list">
                        <li class="contacts-section__metro-item contacts__metro-item--purple">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="16" viewBox="0 0 17 16"><path d="M13.92 3.2c-1.395-1.23-2.716-1.6-2.716-1.6l-2.692 8.873h-.024L5.796 1.6s-1.32.37-2.717 1.6C1.582 4.52.311 6.53.523 9.721c.168 2.526 2.095 4.68 2.095 4.68l3.711-.008s-3.19-1.646-3.959-4.238c-.909-3.065.514-5.19 1.613-6.204.442-.378 1.094-.466 1.34.35.828 2.596 3.172 10.015 3.172 10.015h.01s2.344-7.42 3.17-10.015c.247-.816.899-.728 1.34-.35 1.1 1.014 2.523 3.139 1.615 6.204-.769 2.592-3.96 4.238-3.96 4.238l3.711.007s1.927-2.154 2.096-4.679c.212-3.19-1.06-5.202-2.556-6.52z" fill="#ffffff"/></svg>
                            <span class="contacts__metro-text">Садовая</span>
                        </li>
                        <li class="contacts-section__metro-item contacts__metro-item--orange">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="16" viewBox="0 0 17 16"><path d="M13.92 3.2c-1.395-1.23-2.716-1.6-2.716-1.6l-2.692 8.873h-.024L5.796 1.6s-1.32.37-2.717 1.6C1.582 4.52.311 6.53.523 9.721c.168 2.526 2.095 4.68 2.095 4.68l3.711-.008s-3.19-1.646-3.959-4.238c-.909-3.065.514-5.19 1.613-6.204.442-.378 1.094-.466 1.34.35.828 2.596 3.172 10.015 3.172 10.015h.01s2.344-7.42 3.17-10.015c.247-.816.899-.728 1.34-.35 1.1 1.014 2.523 3.139 1.615 6.204-.769 2.592-3.96 4.238-3.96 4.238l3.711.007s1.927-2.154 2.096-4.679c.212-3.19-1.06-5.202-2.556-6.52z" fill="#ffffff"/></svg>
                            <span class="contacts__metro-text">Спасская</span>
                        </li>
                        <li class="contacts-section__metro-item contacts__metro-item--blue">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="16" viewBox="0 0 17 16"><path d="M13.92 3.2c-1.395-1.23-2.716-1.6-2.716-1.6l-2.692 8.873h-.024L5.796 1.6s-1.32.37-2.717 1.6C1.582 4.52.311 6.53.523 9.721c.168 2.526 2.095 4.68 2.095 4.68l3.711-.008s-3.19-1.646-3.959-4.238c-.909-3.065.514-5.19 1.613-6.204.442-.378 1.094-.466 1.34.35.828 2.596 3.172 10.015 3.172 10.015h.01s2.344-7.42 3.17-10.015c.247-.816.899-.728 1.34-.35 1.1 1.014 2.523 3.139 1.615 6.204-.769 2.592-3.96 4.238-3.96 4.238l3.711.007s1.927-2.154 2.096-4.679c.212-3.19-1.06-5.202-2.556-6.52z" fill="#ffffff"/></svg>
                            <span class="contacts__metro-text">Сенная</span>
                        </li>
                    </ul>
                </div>
                <div class="contacts-section__inner">
                    <p class="contacts-section__subtitle">Звонки по РФ бесплатно</p>
                    <a itemprop="telephone" class="link link--contact contacts__link" href="tel:88005118139">8 (800) 511 81 39</a>
                </div>
                <div class="contacts-section__inner">
                    <p class="contacts-section__subtitle">E-mail:</p>
                    <a itemprop="email" class="link link--contact contacts__link" href="mailto:office@fpa.ru">office@fpa.ru</a>
                </div>
                <div class="contacts-section__inner">
                    <p class="contacts-section__subtitle">Наши социальные сети</p>
                    <div class="contacts__social social">
                        <ul class="social__list">
                            <li class="social__item">
                                <a class="social__link social__link--nobg" href="https://vk.com/fpalaw/" aria-label="Ссылка на vk.com" target="_blank" title="Вы переходите на нашу страницу сообщества в социальной сети Вконтакте" data-info="vk">
                                    <svg><use xlink:href="#vk_big"></use></svg>
                                </a>
                            </li>
                            <li class="social__item">
                                <a class="social__link social__link--nobg" href="https://t.me/fpalaw" aria-label="Ссылка на чат telegram" title="Вы переходите в наш чат Telegram" data-info="telegram">
                                    <svg><use xlink:href="#telegram_big"></use></svg>
                                </a>
                            </li>
                            <li class="social__item">
                                <a class="social__link social__link--nobg" href="https://ok.ru/groupfpa" aria-label="Ссылка на ok.ru" target="_blank" title="Вы переходите на нашу страницу сообщества в социальной сети Одноклассники" data-info="ok">
                                    <svg><use xlink:href="#ok_big"></use></svg>
                                </a>
                            </li>
                            <li class="social__item">
                                <a class="social__link social__link--nobg" href="https://www.youtube.com/channel/UCLajhno8_wifVnJ-9RP1TQw" aria-label="Ссылка на youtube.com" target="_blank" title="Вы переходите на наш канал на видеохостинге YouTube" data-info="youtube">
                                    <svg><use xlink:href="#youtube_big"></use></svg>
                                </a>
                            </li>
                            <li class="social__item">
                                <a class="social__link social__link--nobg" href="https://dzen.ru/fpa" aria-label="Ссылка на Yandex Dzen" target="_blank" title="Вы переходите на наш канал на Yandex Dzen" data-info="Dzen">
                                    <svg><use xlink:href="#yandex_dzen"></use></svg>
                                </a>
                            </li>
                            <li class="social__item">
                                <a class="social__link social__link--nobg" href="https://yandex.ru/q/org/finansovo_pravovoi_alians/" aria-label="Ссылка на Яндекс.Кью" target="_blank" title="Вы переходите на наш канал на Yandex.Кью" data-info="yndex_ku">
                                    <svg><use xlink:href="#yandex_ku"></use></svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="contacts-section__social social hidden">
                        <ul class="contact-social__list">
                            <li class="contact-social__item vk--link">
                                <a class="contact-social__link social__link--nobg" href="https://vk.com/fpalaw/" aria-label="Ссылка на vk.com" target="_blank" title="Вы переходите на нашу страницу сообщества в социальной сети Вконтакте" data-info="vk">
                                    <svg width="48" height="30" viewBox="0 0 48 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M46.9061 2.5531C47.2357 1.4281 46.9061 0.600098 45.3199 0.600098H40.0715C38.7349 0.600098 38.1201 1.3111 37.7904 2.1031C37.7904 2.1031 35.1172 8.6821 31.339 12.9481C30.1182 14.1811 29.5569 14.5771 28.8886 14.5771C28.5589 14.5771 28.051 14.1811 28.051 13.0561V2.5531C28.051 1.2031 27.6767 0.600098 26.5718 0.600098H18.3204C17.4828 0.600098 16.9838 1.2301 16.9838 1.8151C16.9838 3.0931 18.8729 3.3901 19.069 6.9901V14.8021C19.069 16.5121 18.766 16.8271 18.0977 16.8271C16.3155 16.8271 11.9849 10.2211 9.41864 2.6611C8.90181 1.1941 8.3939 0.600098 7.04838 0.600098H1.79997C0.302965 0.600098 0 1.3111 0 2.1031C0 3.5071 1.78214 10.4821 8.29588 19.6981C12.6354 25.9891 18.7482 29.4001 24.3085 29.4001C27.65 29.4001 28.0599 28.6441 28.0599 27.3391C28.0599 21.3271 27.7569 20.7601 29.4321 20.7601C30.2074 20.7601 31.544 21.1561 34.6627 24.1891C38.227 27.7891 38.8151 29.4001 40.8111 29.4001H46.0595C47.5565 29.4001 48.3139 28.6441 47.8773 27.1501C46.8793 24.0091 40.1339 17.5471 39.8309 17.1151C39.0557 16.1071 39.2785 15.6571 39.8309 14.7571C39.8398 14.7481 46.2467 5.6401 46.9061 2.5531Z" fill="#5381F6"/></svg>
                                </a>
                            </li>
                            <li class="contact-social__item">
                                <a class="contact-social__link" href="https://t.me/fpalaw" aria-label="Ссылка на чат telegram" title="Вы переходите в наш чат Telegram" data-info="telegram">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M48 24C48 30.3652 45.4714 36.4697 40.9706 40.9706C36.4697 45.4714 30.3652 48 24 48C17.6348 48 11.5303 45.4714 7.02944 40.9706C2.52856 36.4697 0 30.3652 0 24C0 17.6348 2.52856 11.5303 7.02944 7.02944C11.5303 2.52856 17.6348 0 24 0C30.3652 0 36.4697 2.52856 40.9706 7.02944C45.4714 11.5303 48 17.6348 48 24ZM24.861 17.718C22.527 18.69 17.859 20.7 10.863 23.748C9.729 24.198 9.132 24.642 9.078 25.074C8.988 25.803 9.903 26.091 11.148 26.484L11.673 26.649C12.897 27.048 14.547 27.513 15.402 27.531C16.182 27.549 17.049 27.231 18.006 26.571C24.543 22.158 27.918 19.929 28.128 19.881C28.278 19.845 28.488 19.803 28.626 19.929C28.767 20.052 28.752 20.289 28.737 20.352C28.647 20.739 25.056 24.075 23.199 25.803C22.62 26.343 22.209 26.724 22.125 26.811C21.94 27 21.752 27.1861 21.561 27.369C20.421 28.467 19.569 29.289 21.606 30.633C22.587 31.281 23.373 31.812 24.156 32.346C25.008 32.928 25.86 33.507 26.964 34.233C27.243 34.413 27.513 34.608 27.774 34.794C28.767 35.502 29.664 36.138 30.765 36.036C31.407 35.976 32.07 35.376 32.406 33.576C33.201 29.325 34.764 20.118 35.124 16.323C35.146 16.0075 35.1329 15.6906 35.085 15.378C35.0568 15.1258 34.9347 14.8934 34.743 14.727C34.47 14.5386 34.1446 14.4409 33.813 14.448C32.913 14.463 31.524 14.946 24.861 17.718Z" fill="#5381F6"/></svg>
                                </a>
                            </li>
                            <li class="contact-social__item">
                                <a class="contact-social__link" href="https://ok.ru/groupfpa" aria-label="Ссылка на ok.ru" target="_blank" title="Вы переходите на нашу страницу сообщества в социальной сети Одноклассники" data-info="ok">
                                    <svg width="30" height="48" viewBox="0 0 30 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.0002 7.26001C17.9303 7.26001 20.3131 9.56047 20.3131 12.3892C20.3131 15.2152 17.9303 17.5162 15.0002 17.5162C12.073 17.5162 9.68727 15.2152 9.68727 12.3892C9.68727 9.56047 12.073 7.26001 15.0002 7.26001ZM15.0002 24.7735C22.0782 24.7735 27.8318 19.2188 27.8318 12.3892C27.8318 5.55683 22.0782 0 15.0002 0C7.92392 0 2.1686 5.55683 2.1686 12.3892C2.1686 19.2186 7.92392 24.7735 15.0002 24.7735ZM20.1917 34.8794C22.8039 34.3048 25.3232 33.3071 27.6431 31.8999C29.3988 30.8316 29.9282 28.5906 28.8217 26.8953C27.7166 25.1962 25.3967 24.6854 23.6379 25.7537C18.382 28.9454 11.6145 28.944 6.36143 25.7537C4.60232 24.6854 2.28273 25.1965 1.17873 26.8953C0.072185 28.592 0.59989 30.8316 2.35618 31.8999C4.67577 33.3055 7.19508 34.3048 9.80734 34.8794L2.63331 41.8051C1.16658 43.2224 1.16658 45.5199 2.63472 46.937C3.3695 47.645 4.33084 47.9998 5.29189 47.9998C6.25465 47.9998 7.2174 47.6452 7.95217 46.937L14.9985 40.1313L22.0511 46.937C23.5178 48.3543 25.8976 48.3543 27.3654 46.937C28.835 45.5199 28.835 43.2208 27.3654 41.8051C27.3657 41.8051 20.1917 34.8794 20.1917 34.8794Z" fill="#5381F6"/></svg>
                                </a>
                            </li>
                            <li class="contact-social__item youtube--link">
                                <a class="contact-social__link" href="https://www.youtube.com/channel/UCLajhno8_wifVnJ-9RP1TQw" aria-label="Ссылка на youtube.com" target="_blank" title="Вы переходите на наш канал на видеохостинге YouTube" data-info="youtube">
                                      <svg width="48" height="34" viewBox="0 0 48 34" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M46.997 5.45721C46.445 3.38784 44.8185 1.75806 42.7533 1.20498C39.01 0.199951 24 0.199951 24 0.199951C24 0.199951 8.99006 0.199951 5.24671 1.20498C3.18155 1.75815 1.55505 3.38784 1.00301 5.45721C0 9.20808 0 17.0339 0 17.0339C0 17.0339 0 24.8597 1.00301 28.6106C1.55505 30.68 3.18155 32.2418 5.24671 32.7949C8.99006 33.8 24 33.8 24 33.8C24 33.8 39.0099 33.8 42.7533 32.7949C44.8185 32.2418 46.445 30.68 46.997 28.6106C48 24.8597 48 17.0339 48 17.0339C48 17.0339 48 9.20808 46.997 5.45721ZM19.0969 24.137V9.92651L31.6423 17.032L19.0969 24.137Z" fill="#5381F6"/></svg>

                                </a>
                            </li>
                            
                            <li class="contact-social__item">
                                <a class="contact-social__link" href="https://dzen.ru/fpa" aria-label="Ссылка на Yandex Dzen" target="_blank" title="Вы переходите на наш канал на Yandex Dzen" data-info="Dzen">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.8722 0.431997C2.96621 1.20378 0.837117 3.58663 0.286823 16.756L0 23.615L5.78621 23.2969C18.6684 22.5891 21.9499 19.5628 23.056 7.36983C23.353 4.09654 23.4677 1.08205 23.3109 0.670845C23.1617 0.278521 22.5883 0.0179326 21.8759 0.000889733C21.7905 -0.00115254 21.7032 0.000302427 21.6143 0.00544702C20.8381 0.0499432 17.8039 0.242249 14.8722 0.431997ZM24.3636 0.363636C23.9494 1.16508 24.8937 12.0373 25.5379 14.034C27.6762 20.6594 33.1222 23.436 44.0007 23.4463L48 23.4504L47.6599 17.6965C46.7755 2.75398 45.0673 1.03091 30.283 0.172691C28.6078 0.0754883 27.0682 0.0430723 25.9848 0.0701753C25.056 0.0934127 24.4194 0.256216 24.3636 0.363636ZM0.150265 29.3397C0.150265 39.2082 1.76154 44.1529 5.81818 46.1818C8.30821 47.4277 14.264 47.9898 20.0756 47.9959L23.5022 48V45.3016C23.5022 40.654 22.4854 34.1765 21.3864 31.8203C19.14 27.0065 15.1179 25.1438 5.86135 24.6323L0 24.3636L0.150265 29.3397ZM36.2519 25.0502C32.6598 25.6511 28.9301 27.7425 27.3513 30.0409C25.6395 32.5332 24.615 37.0268 24.4231 42.8855V47.9959L30.5455 48C44.2851 47.7693 46.8735 44.8372 47.6533 30.7385L48 24.4733L43.4926 24.5331C41.0137 24.5658 37.7556 24.7985 36.2519 25.0502Z" fill="#5381F6"/><path d="M5.78621 23.2969L0 23.615V24.3636L5.86135 24.6323C15.1179 25.1438 19.14 27.0065 21.3864 31.8203C22.4854 34.1765 23.5022 40.654 23.5022 45.3016V48L24.4231 47.9959V42.8855C24.615 37.0268 25.6395 32.5332 27.3513 30.0409C28.9301 27.7425 32.6598 25.6511 36.2519 25.0502C37.7556 24.7985 41.0137 24.5658 43.4926 24.5331L48 24.4733V23.4504L44.0007 23.4463C33.1222 23.436 27.6762 20.6594 25.5379 14.034C24.8937 12.0373 23.9494 1.16508 24.3636 0.363636C24.4194 0.256216 25.056 0.0934127 25.9848 0.0701753C24.2051 0.0309982 22.5373 -0.000559812 21.8759 0.000889733C22.5883 0.0179326 23.1617 0.278521 23.3109 0.670845C23.4677 1.08205 23.353 4.09654 23.056 7.36983C21.9499 19.5628 18.6684 22.5891 5.78621 23.2969Z" fill="white"/></svg>

                                </a>
                            </li>
                            <li class="contact-social__item" hidden>
                                <a class="contact-social__link" href="https://yandex.ru/q/org/finansovo_pravovoi_alians/" aria-label="" target="_blank" title="Вы переходите на наш канал на Yandex Кью" data-info="Яндекс Кью">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" rx="6" fill="#5381F6"/><circle cx="21.75" cy="15.75" r="9.75" fill="white"/><path fill-rule="evenodd" clip-rule="evenodd" d="M34.0387 22.3657C33.474 22.264 32.8924 22.2109 32.2984 22.2109C26.9097 22.2109 22.5414 26.5793 22.5414 31.9679C22.5414 36.8293 26.0966 40.8602 30.7488 41.6026L34.0387 22.3657Z" fill="white"/></svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-map__cnt hidden">
            <div class="map-route__cnt">
                <button class="map-route-btn" data-href="https://yandex.ru/maps/?rtext=~59.925773,30.321276">Построить маршрут</button>
            </div>
            <picture>
                <source srcset="/wp-content/themes/fpalaw/assets/img/mfc/contact-map-mobile.jpg" media="(max-width: 440px)">
                <source srcset="/wp-content/themes/fpalaw/assets/img/mfc/contact-map-tablet.jpg" media="(max-width: 782px)">
                <source srcset="/wp-content/themes/fpalaw/assets/img/mfc/contact-map-desktop.jpg">
                <img src="/wp-content/themes/fpalaw/assets/img/mfc/contact-map-desktop.jpg" />
            </picture>
        </div>
        <div class="fpaOfficeMap__wrapper">
            <div id="fpaOfficeMap">
                <div class="map-route__cnt">
                    <button class="map-route-btn" data-href="https://yandex.ru/maps/?rtext=~59.925773,30.321276">Построить маршрут</button>
                </div>
            </div>
        </div>
        <script src="//api-maps.yandex.ru/2.0/?apikey=9a60b4a6-a929-48e1-86d5-eeae3f7d9343&load=package.standard,package.geoObjects&lang=ru-RU" type="text/javascript"></script>
        <script>
            /*
            [59.926073, 30.319418]
            [59.925773, 30.321276]
            */
            ymaps.ready(function () {
                const screenWidth = window.screen.width;
                let zoom_map = 18;
                let center_coor = [59.926073, 30.319418];
                let iconImageSize = [177, 243];
                let iconImageOffset = [-40, -160];
                let maxWidthPopover = 828;
                let = maxHeightPopover = 350;
                if (screenWidth > 782 && screenWidth < 1080) {
                    zoom_map = 17;
                    center_coor = [59.926073, 30.319418];
                    iconImageSize = [143, 198];
                    iconImageOffset = [-72, -150];
                    maxWidthPopover = 640;
                    maxHeightPopover = 250;
                }
                if (screenWidth < 783 && screenWidth > 440) {
                    zoom_map = 16;
                    center_coor = [59.926073, 30.319418];
                    iconImageSize = [109, 154];
                    iconImageOffset = [-55, -100];
                    maxWidthPopover = 455;
                    maxHeightPopover = 218;
                }
                if (screenWidth < 441) {
                    zoom_map = 16;
                    center_coor = [59.926073, 30.319418];
                    iconImageSize = [54, 71];
                    iconImageOffset = [-27, -50];
                    maxWidthPopover = 224;
                    maxHeightPopover= 100;
                }

                // Создание экземпляра карты и его привязка к созданному контейнеру.
                var myMap = new ymaps.Map('fpaOfficeMap', {
                    center: center_coor,
                    zoom: zoom_map,
                    behaviors: ['default', 'scrollZoom'],
                    controls: ['routeButtonControl']
                }, {
                    searchControlProvider: 'yandex#search'
                }),

                // Создание макета балуна на основе Twitter Bootstrap.
                MyBalloonLayout = ymaps.templateLayoutFactory.createClass(
                    '<div class="popover popover-top">' +
                        '<a class="close" href="#">&times;</a>' +
                        '<div class="arrow"></div>' +
                        '<div class="popover-inner">' +
                            '$[[options.contentLayout observeSize minWidth=224 maxWidth='+maxWidthPopover+' minHeight=100 maxHeight='+maxHeightPopover+']]' +
                        '</div>' +
                    '</div>', {
                        
                        /**
                         * Строит экземпляр макета на основе шаблона и добавляет его в родительский HTML-элемент.
                         * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/layout.templateBased.Base.xml#build
                         * @function
                         * @name build
                         */
                        build: function () {
                            this.constructor.superclass.build.call(this);
        
                            this._$element = $('.popover', this.getParentElement());
        
                            this.applyElementOffset();
        
                            this._$element.find('.close')
                                .on('click', $.proxy(this.onCloseClick, this));
                        },

                        /**
                         * Удаляет содержимое макета из DOM.
                         * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/layout.templateBased.Base.xml#clear
                         * @function
                         * @name clear
                         */
                        clear: function () {
                            this._$element.find('.close')
                                .off('click');
                            jQuery('ymaps.ymaps-image-with-content').css({"background-image": "url(https://fpa.ru/wp-content/themes/fpalaw/assets/img/mfc/fpaMapRouteBallon.svg)"});
                            this.constructor.superclass.clear.call(this);
                        },

                        /**
                         * Метод будет вызван системой шаблонов АПИ при изменении размеров вложенного макета.
                         * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/IBalloonLayout.xml#event-userclose
                         * @function
                         * @name onSublayoutSizeChange
                         */
                        onSublayoutSizeChange: function () {
                            MyBalloonLayout.superclass.onSublayoutSizeChange.apply(this, arguments);
        
                            if(!this._isElement(this._$element)) {
                                return;
                            }
        
                            this.applyElementOffset();
        
                            this.events.fire('shapechange');
                        },

                        /**
                         * Сдвигаем балун, чтобы "хвостик" указывал на точку привязки.
                         * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/IBalloonLayout.xml#event-userclose
                         * @function
                         * @name applyElementOffset
                         */
                        applyElementOffset: function () {
                            const screenWidth = window.screen.width;
                            let ymaps_image_with_content_offset = parseInt(this._$element.closest('.ymaps-overlay-stepwise-pane').find('.ymaps-image-with-content').css('width'));
                            /*
                            if (screenWidth > 782 && screenWidth < 1080) {
                                ymaps_image_with_content_offset = parseInt(this._$element.closest('.ymaps-overlay-stepwise-pane').find('.ymaps-image-with-content').css('width')) * 2/3;
                            }
                            if (screenWidth < 782 && screenWidth > 440) {
                                ymaps_image_with_content_offset = parseInt(this._$element.closest('.ymaps-overlay-stepwise-pane').find('.ymaps-image-with-content').css('width')) * 2/3;
                            }
                            if (screenWidth < 440) {
                                ymaps_image_with_content_offset = parseInt(this._$element.closest('.ymaps-overlay-stepwise-pane').find('.ymaps-image-with-content').css('width')) * 2/3;
                            }
                            */
                            jQuery('ymaps.ymaps-image-with-content').css({"background-image": "url(https://fpa.ru/wp-content/themes/fpalaw/assets/img/mfc/fpaMapRouteBallon-white.svg)"});
                            this._$element.css({
                                left: -(this._$element[0].offsetWidth - ymaps_image_with_content_offset),
                                top: -(this._$element[0].offsetHeight + this._$element.find('.arrow')[0].offsetHeight - 40)
                            });
                        },

                        /**
                         * Закрывает балун при клике на крестик, кидая событие "userclose" на макете.
                         * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/IBalloonLayout.xml#event-userclose
                         * @function
                         * @name onCloseClick
                         */
                        onCloseClick: function (e) {
                            e.preventDefault();
                            jQuery('ymaps.ymaps-image-with-content').css({"background-image": "url(https://fpa.ru/wp-content/themes/fpalaw/assets/img/mfc/fpaMapRouteBallon.svg)"});
                            this.events.fire('userclose');
                        },

                        /**
                         * Используется для автопозиционирования (balloonAutoPan).
                         * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/ILayout.xml#getClientBounds
                         * @function
                         * @name getClientBounds
                         * @returns {Number[][]} Координаты левого верхнего и правого нижнего углов шаблона относительно точки привязки.
                         */
                        getShape: function () {
                            if(!this._isElement(this._$element)) {
                                return MyBalloonLayout.superclass.getShape.call(this);
                            }
        
                            var position = this._$element.position();
                            
                            return new ymaps.shape.Rectangle(new ymaps.geometry.pixel.Rectangle([
                                [position.left, position.top], [
                                    position.left + this._$element[0].offsetWidth,
                                    position.top + this._$element[0].offsetHeight + this._$element.find('.arrow')[0].offsetHeight
                                ]
                            ]));
                        },

                        /**
                         * Проверяем наличие элемента (в ИЕ и Опере его еще может не быть).
                         * @function
                         * @private
                         * @name _isElement
                         * @param {jQuery} [element] Элемент.
                         * @returns {Boolean} Флаг наличия.
                         */
                        _isElement: function (element) {
                            return element && element[0] && element.find('.arrow')[0];
                        }
                    }
                ),

                // Создание вложенного макета содержимого балуна.
                MyBalloonContentLayout = ymaps.templateLayoutFactory.createClass(
                    '<h3 class="popover-title">$[properties.balloonHeader]</h3>' +
                        '<div class="popover-content">$[properties.balloonContent]</div>'
                ),

                // Создание метки с пользовательским макетом балуна.
                myPlacemark = window.myPlacemark = new ymaps.Placemark([59.925773, 30.321276], {
                    balloonHeader: '«Финансово - правовой альянс»',
                    balloonContent: 'Бизнес-центр «Мир», ул. Ефимова 4/А, Офис 326'
                }, {
                    balloonShadow: false,
                    balloonLayout: MyBalloonLayout,
                    balloonContentLayout: MyBalloonContentLayout,
                    balloonPanelMaxMapArea: 0,
                    // Не скрываем иконку при открытом балуне.
                    hideIconOnBalloonOpen: false,
                    // И дополнительно смещаем балун, для открытия над иконкой.
                    balloonOffset: [3, -40],
                    // Своё изображение иконки метки.
                    iconImageHref: 'https://fpa.ru/wp-content/themes/fpalaw/assets/img/mfc/fpaMapRouteBallon.svg',
                    // Размеры метки.
                    iconImageSize: iconImageSize,
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: iconImageOffset
                });

                myMap.geoObjects.add(myPlacemark);
                /*
                var control = myMap.controls.get('routeButtonControl');
                
                // Зададим координаты пункта отправления с помощью геолокации.
                control.routePanel.geolocate('from');
                
                control.routePanel.state.set({
                    type: "pedestrian",
                    to: '55.659172, 37.762848'
                });
                
                // Откроем панель для построения маршрутов.
                control.state.set('expanded', true);
                */
            });
        </script>
    </div>
</div>