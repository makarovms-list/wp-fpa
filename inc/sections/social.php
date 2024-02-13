<style>
img.main_logo {
    margin: 0 auto;  
}
main h1 {
    font-size: 34px;
    line-height: 145%;
    text-align: center;
    color: #393939;
    margin-bottom: 8px;
}
main p.desc {
    font-weight: 400;
    font-size: 18px;
    line-height: 145%;
    text-align: center;
    color: #717B97;
    margin-bottom: 60px;
}
ul.social_links {
    list-style: none;
    padding: 0;
    max-width: 525px;
    margin: 0 auto;
}
ul.social_links li {
    border-radius: 10px;
    box-shadow: 0px 14px 34px rgb(0 37 102 / 12%);
    margin-bottom: 16px;
}
ul.social_links li:hover {
    box-shadow: none;
}
ul.social_links li a {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: 32px auto auto;
    grid-column-gap: 16px;
    grid-row-gap: 16px;
    align-items: center;
    padding: 14px 20px;    
}
ul.social_links li svg {
    width: 36px;
    height: 36px;
}
ul.social_links li p.title {
    font-weight: 700;
    font-size: 28px;
    line-height: 150%;
    color: #FFFFFF;
    margin: 0;
    padding: 0;
}
ul.social_links li p.subscribers {
    font-weight: 400;
    font-size: 14px;
    line-height: 150%;
    text-align: right;
    color: #FFFFFF;
    margin: 0;
    padding: 0;
}
ul.social_links li.social_vk {background: #289FFF;}
ul.social_links li.social_ok {background: #FFA43E;}
ul.social_links li.social_telegram {background: #2CA5E0;}
ul.social_links li.social_youtube {background: #FF4646;}
ul.social_links li.social_ku {background: #FFF4DE;}
ul.social_links li.social_dzen {background: #8293A0;}
ul.social_links li.social_ku p.title {color: #1F2334;}
ul.social_links li.social_ku p.subscribers {color: #1F2334;}
.dzen-logo {
    background: url(/wp-content/themes/fpalaw/assets/img/social/simple-icons_dzen.svg) center center no-repeat;
    background-size: contain;
    width: 32px;
    height: 32px;
}
@media (max-width: 768px) {
    main h1 {
        font-size: 22px;
        margin-bottom: 20px;
    }
}
@media (max-width: 600px) {
    main p.desc {
        font-size: 16px;
        text-align: left;
    }
    ul.social_links li p.title {
        font-size: 18px;
    }
    ul.social_links li p.subscribers {
        font-size: 8px;
    }
    ul.social_links li img {
        width: 24px;
        height: 24px;
    }
    .dzen-logo {
        width: 24px;
        height: 24px;
    }
}
@media (max-width: 375px) {
    ul.social_links li p.title {
        font-size: 16px;
    }
    ul.social_links li a {
        grid-column-gap: 8px;
        padding: 12px 10px;
    }
    ul.social_links li .a__cnt {
        grid-column-gap: 8px;
        padding: 12px 10px;
    }
}
</style>
<main>
    <img class="main_logo" src="/wp-content/themes/fpalaw/assets/img/social/social_logo.svg" />
    <h1>Подпишитесь на наши социальные сети</h1>
    <p class="desc">Чтобы узнать больше о процедуре банкротства, нашей компании, сотрудниках, которые будут вести ваше дело и успешных делах.</p>
    <ul class="social_links">
        <li class="social_vk">
            <a target="_blank" href="https://vk.com/fpalaw" title="Вы переходите на нашу страницу сообщества в социальной сети Вконтакте" aria-label="Ссылка на vk.com" data-info="vk">
                <img src="/wp-content/themes/fpalaw/assets/img/social/simple-icons_vk.svg" />
                <p class="title">ВКонтакте</p>
                <p class="subscribers">подписчиков <strong>3.4К+</strong></p>
            </a>
        </li>
        <li class="social_ok">
            <a target="_blank" href="https://ok.ru/groupfpa" aria-label="Ссылка на ok.ru" title="Вы переходите на нашу страницу сообщества в социальной сети Одноклассники" data-info="ok">
                <img src="/wp-content/themes/fpalaw/assets/img/social/bxl_ok-ru.svg" />
                <p class="title">Одноклассники</p>
                <p class="subscribers">подписчиков <strong>1.4К+</strong></p>
            </a>
        </li>
        <li class="social_telegram">
            <a target="_blank" href="https://t.me/fpa_law" aria-label="Ссылка на чат telegram" title="Вы переходите в наш чат Telegram">
                <img src="/wp-content/themes/fpalaw/assets/img/social/bi_telegram.svg" />
                <p class="title">Telegram</p>
                <!--<p class="subscribers">подписчиков <strong>24</strong></p>-->
            </a>
        </li>
        <li class="social_youtube">
            <a target="_blank" href="https://www.youtube.com/channel/UCLajhno8_wifVnJ-9RP1TQw" aria-label="Ссылка на youtube.com" title="Вы переходите на наш канал на видеохостинге YouTube" data-info="youtube">
                <img src="/wp-content/themes/fpalaw/assets/img/social/akar-icons_youtube-fill.svg" />
                <p class="title">YouTube</p>
                <!--<p class="subscribers">подписчиков <strong>411</strong></p>-->
            </a>
        </li>
        <li class="social_ku">
            <a target="_blank" href="https://yandex.ru/q/org/finansovo_pravovoi_alians/" aria-label="Ссылка на yandex.ru" title="Вы переходите на наш канал на сервисе Яндекс Кью" data-info="yandex">
                <img src="/wp-content/themes/fpalaw/assets/img/social/simple-icons_ku.svg" />
                <p class="title">Яндекс.Кью</p>
                <!--<p class="subscribers">подписчиков <strong>1</strong></p>-->
            </a>
        </li>
        <li class="social_dzen">
            <a target="_blank" href="https://zen.yandex.ru/fpa" aria-label="Ссылка на yandex.ru" title="Вы переходите на наш канал на сервисе Яндекс Дзен" data-info="yandex">
                <div class="dzen-logo"></div>
                <p class="title">Яндекс.Дзен</p>
                <!--<p class="subscribers">подписчиков <strong>65</strong></p>-->
            </a>
        </li>
    </ul>
</main>