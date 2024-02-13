<style>
    .calculator-navbar {
        display: none!important;
    }
    .btn-up {
        bottom: 33px!important;
    }
    section.section-title {
        background: #5381F6;
    }
    section.section-title .title-cnt {
        padding: 140px 0;
    }
    section.section-title .title {
        font-family: Inter;
        font-size: 3.25em;
        font-weight: 700;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        color: #fff;
        margin-bottom: 24px;
    }
    section.section-title .subtitle {
        font-family: Inter;
        font-size: 1.75em;
        font-weight: 500;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        color: #fff;
    }
    @media (max-width: 992px) {
        section.section-title .title-cnt {
            padding: 100px 0;
        }
        section.section-title .title {
            font-size: 1.6em;
        }
        section.section-title .subtitle {
            font-size: 1.25em;
        }
    }
    @media (max-width: 600px) {
        section.section-title .title-cnt {
            padding: 60px 0;
        }
        section.section-title .title {
            font-size: 1.6em;
        }
        section.section-title .subtitle {
            font-size: 1.125em;
            font-weight: 400;
        }
    }
    
    section.section-pamytka-docs .container {
        max-width: 970px;
        margin: 0 auto;
    }
    section.section-title .container {
        max-width: 970px;
        margin: 0 auto;
    }
    .pamytka-docs-item {
        padding: 120px 0;
    }
    .pamytka-docs-item .pamytka-text p.title {
        font-family: Inter;
        font-size: 1.375em;
        font-weight: 600;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        color: #202020;
    }
    .pamytka-docs-item .pamytka-text p.text {
        font-family: Inter;
        font-size: 1em;
        font-weight: 400;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        color: #303030;
    }
    .pamytka-docs-item .video-cnt iframe {
        width: 100%;
        height:36vw;
        border-radius: 10px;
    }
    .pamytka-docs-item .video-cnt .caption {
        margin-top: 4px;
    }
    .pamytka-docs-item .video-cnt .caption p.name {
        font-family: Inter;
        font-size: 0.875em;
        font-weight: 600;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        margin-bottom
        : 0;
    }
    .pamytka-docs-item .video-cnt .caption p.post {
        font-family: Inter;
        font-size: 0.875em;
        font-weight: 400;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
    }
    
    .pamytka-docs-item:nth-child(even) {
        background: -webkit-linear-gradient(135deg, #EDF0F8 0%, #D7DEEF 100%);
        background: -moz-linear-gradient(135deg, #EDF0F8 0%, #D7DEEF 100%);
        background: -o-linear-gradient(135deg, #EDF0F8 0%, #D7DEEF 100%);
        background: linear-gradient(135deg, #EDF0F8 0%, #D7DEEF 100%);
    }
    .pamytka-docs-item .pamytka-text-v2 p.title {
        font-family: Inter;
        font-size: 1.375em;
        font-weight: 600;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        color: #202020;
        margin-bottom: 10px;
    }
    .pamytka-docs-item .pamytka-text-v2 p.text-small {
        font-family: Inter;
        font-size: 0.875em;
        font-weight: 400;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        margin-bottom: 10px;
    }
    .pamytka-docs-item .line {
        background: rgb(0 0 0 / 11%);
        height: 1px;
        margin-bottom: 20px;
    }
    .pamytka-docs-item .text-additional p.title {
        font-family: Inter;
        font-size: 1.125em;
        font-weight: 600;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        margin-bottom: 14px;
    }
    .pamytka-docs-item .text-additional ul {
        margin-bottom: 16px;
        padding-left: 36px;
    }
    .pamytka-docs-item .text-additional ul li+li {
        margin-top: 10px;
    }
    .pamytka-docs-item .text-additional ul li {
        font-family: Inter;
        font-size: 1em;
        font-weight: 400;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        color: #303030;
    }
    .pamytka-docs-item .text-additional ul li::marker {
        color: #3262AC;
        font-size: 0.75em;
        border-radius: 50%;
    }
    .pamytka-docs-item .text-additional ul li sup {
        color: #3262AC;
        font-size: 1em;
        top: -0.2em;
    }
    .pamytka-docs-item .text-additional ul li a {
        color: #3262AC;
        text-decoration: underline;
    }
    .pamytka-docs-item .text-additional ul li a:hover {
        text-decoration: none;
    }
    .pamytka-docs-item .text-additional .text a {
        color: #3262AC;
        text-decoration: underline;
    }
    .pamytka-docs-item .text-additional .text a:hover {
        text-decoration: none;
    }
    .pamytka-docs-item .text-additional p.text {
        font-family: Inter;
        font-size: 1em;
        font-weight: 400;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        color: #303030;
        margin-bottom: 16px;
        margin-left: 20px;
    }
    .pamytka-docs-item .doc-links .link-item {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 18px auto;
        grid-column-gap: 4px;
        grid-row-gap: 4px;
        align-items: center;
    }
    .pamytka-docs-item .doc-links .link-item+.link-item {
        margin-top: 8px;
    }
    .pamytka-docs-item .doc-links .link-item span a {
        color: #3262AC;
        text-decoration: underline;
    }
    .pamytka-docs-item .doc-links .link-item span a:hover {
        text-decoration: none;
    }
    .pamytka-docs-item .doc-links .link-item svg {
        width: 18px;
        height: 18px;
    }
    .pamytka-docs-item .doc-links .link-item span {
        font-family: Inter;
        font-size: 1em;
        font-weight: 400;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
    }
    .pamytka-docs-item .text-additional .text sup {
        color: #3262AC;
        font-size: 1em;
        top: -0.2em;
    }
    .faq-cnt .faq-item {
        box-shadow: 0px 14px 34px 0px #0025661F;
        border-radius: 10px;
        background: #fff;
        padding: 18px;
    }
    .faq-cnt .faq-item+.faq-item {
        margin-top: 16px;
    }
    .faq-item .faq-item-title {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 32px auto 8px;
        grid-column-gap: 10px;
        grid-row-gap: 10px;
        align-items: center;
        cursor: pointer;
    }
    .faq-item .faq-item-title .number {
        font-family: Montserrat;
        font-size: 0.875em;
        font-weight: 700;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: center;
        border-radius: 50%;
        width: 32px;
        height: 32px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #F3F4F4;
        color: #5381F6;
    }
    .faq-item .faq-item-title .title {
        font-family: Inter;
        font-size: 1.125em;
        font-weight: 600;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        color: #202020;
    }
    .faq-item .faq-item-title .arrow {
        -moz-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        -webkit-transform: rotate(180deg);
        -o-transform: rotate(180deg);
        transform: rotate(180deg);
        -webkit-transition: all .2s ease;
        -o-transition: all .2s ease;
        transition: all .2s ease;    
    }
    .faq-item.expanded .faq-item-title .arrow {
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    .faq-item .faq-item-content {
        margin-top: 12px;
        display: none;
    }
    .faq-item .faq-item-content p {
        font-family: Inter;
        font-size: 1em;
        font-weight: 400;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        color: #333;
    }
    
    
    @media (max-width: 1920px) {
        .pamytka-docs-item .video-cnt iframe {
            height: 27vw;
        }
    }
    @media (max-width: 1800px) {
        .pamytka-docs-item .video-cnt iframe {
            height: 29vw;
        }
    }
    @media (max-width: 1700px) {
        .pamytka-docs-item .video-cnt iframe {
            height: 31vw;
        }
    }
    @media (max-width: 1600px) {
        .pamytka-docs-item .video-cnt iframe {
            height: 33vw;
        }
    }
    @media (max-width: 1440px) {
        .pamytka-docs-item .video-cnt iframe {
            height: 36vw;
        }
    }
    
    @media (max-width: 992px) {
       .pamytka-docs-item {
            padding: 100px 0;
        }
        section.section-pamytka-docs .container {
            padding: 0 22px;
            max-width: 970px!important;
        }
        section.section-title .container {
            padding: 0 22px;
            max-width: 970px!important;
        }
        .pamytka-docs-item .video-cnt iframe {
            height: 51vw;
        }
    }
    @media (max-width: 782px) {
        .pamytka-docs-item {
            padding: 60px 0;
        }
        .pamytka-docs-item .pamytka-text p.title {
            font-size: 1.25em;
        }
        .pamytka-docs-item .pamytka-text-v2 p.title {
            font-size: 1.25em;
        }
        .pamytka-docs-item .video-cnt iframe {
            height: 53vw;
        }
    }
    @media (max-width: 480px) {
        .pamytka-docs-item {
            padding: 40px 0;
        }
        .pamytka-docs-item .pamytka-text p.title {
            font-size: 1.125em;
        }
        .pamytka-docs-item .pamytka-text p.text {
            font-size: 0.875em;
        }
        .pamytka-docs-item .video-cnt .caption p.post {
            font-size: 0.75em;
        }
        .pamytka-docs-item .pamytka-text-v2 p.title {
            font-size: 1.125em;
            margin-bottom: 6px;
        }
        .pamytka-docs-item .pamytka-text-v2 p.text-small {
            font-size: 0.75em;
        }
        .pamytka-docs-item .pamytka-text-v2 p.title {
            font-size: 1em;
        }
        .pamytka-docs-item .text-additional ul li {
            font-size: 0.875em;
        }
        .pamytka-docs-item .text-additional p.text {
            font-size: 0.875em;
        }
        .pamytka-docs-item .doc-links .link-item span {
            font-size: 0.875em;
        }
        .faq-cnt .faq-item {
            box-shadow: none;
            background: #fff;
            padding: 0px;
        }
        .faq-item .faq-item-title .title {
            font-size: 1em;
        }
        .faq-item .faq-item-title .number {
            display: none;
        }
        .faq-item .faq-item-title .arrow {
            display: none;
        }
        .faq-item .faq-item-title {
            grid-template-columns: 100%;
        }
        .faq-item .faq-item-content {
            display: block!important;
            border-bottom: 1px solid rgb(0 0 0 / 11%);
        }
        .faq-item:last-child .faq-item-content {
            border-bottom: none!important;
        }
        .faq-item .faq-item-content p {
            font-size: 0.875em;
        }
        .pamytka-docs-item .video-cnt iframe {
            height: 47vw;
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</style>
<section class="section-title">
    <div class="container">
        <div class="title-cnt">
            <div class="title">Как и где получить документы для вашего банкротства</div>
            <!--<div class="subtitle">Для подачи заявления в суд</div>-->
        </div>
    </div>
</section>
<section class="section-pamytka-docs">

    <div class="pamytka-docs-cnt">
        <div class="pamytka-docs-item" id="pamytka-item-1" data-item-id="1">
            <div class="container">
                <div class="pamytka-text">
                    <p class="title">Уважаемый клиент!</p>
                    <p class="text">Вам направлен список документов для сбора. Данные документы потребуются для того, чтобы составить заявление о признании вас банкротом и направить его в арбитражный суд.</p>
                    <div class="video-cnt">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/WM8e6g42xis?si=snYbSWCFCnM2gfop" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <div class="caption">
                            <p class="name">Боднар Евгения</p>
                            <p class="post">Руководитель отдела сопровождения клиентов по кредитам и долгам</p>
                        </div>
                    </div>
                    <p class="text">Для вашего удобства мы прикрепляем памятку с рекомендациями, где можно получить указанные документы. Обращаем ваше внимание, что большую часть документов удобнее получить онлайн через личные кабинеты или сайт Госуслуги.</p>
                </div>
            </div>
        </div>
        <div class="pamytka-docs-item" id="pamytka-item-2" data-item-id="2">
            <div class="container">
                <div class="pamytka-text-v2">
                    <p class="title">Кредитные договоры</p>
                    <p class="text-small">Договор выдается вам при оформлении кредита, поэтому, скорее всего, он уже у вас на руках</p>
                    <div class="line"></div>
                    <div class="text-additional">
                        <p class="title">Срок изготовления (при отсутствии на руках):</p>
                        <ul>
                            <li>Сразу при заказе онлайн</li>
                            <li>До 3-х дней (в отделении банка)</li>
                        </ul>
                        <p class="title">Где получить:</p>
                        <ul>
                            <li>В отделении банка</li>
                            <li>В приложении банка<sup>*</sup></li>
                            <li>В личном кабинете на сайте банка<sup>*</sup></li>
                        </ul>
                        <p class="title">Комментарий юриста:</p>
                        <p class="text">Договоры с вашими кредиторами необходимы для подтверждения наличия обязательств в конкретном банке, МФО и так далее</p>
                    </div>
                    <div class="line"></div>
                    <div class="doc-links">
                        <div class="link-item">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.77958 10.0476C7.13445 10.3851 7.13445 10.9391 6.77958 11.2767C6.44201 11.6142 5.88806 11.6142 5.5505 11.2767C4.73981 10.4647 4.28447 9.36429 4.28447 8.21694C4.28447 7.06958 4.73981 5.96913 5.5505 5.15722L8.61454 2.09318C9.42645 1.28249 10.5269 0.827148 11.6743 0.827148C12.8216 0.827148 13.9221 1.28249 14.734 2.09318C15.5447 2.90509 16 4.00554 16 5.15289C16 6.30025 15.5447 7.4007 14.734 8.21261L13.4443 9.50228C13.453 8.79253 13.3404 8.08278 13.0981 7.40765L13.5049 6.99219C13.7475 6.75216 13.9402 6.46639 14.0716 6.15142C14.2031 5.83645 14.2708 5.49853 14.2708 5.15722C14.2708 4.81592 14.2031 4.478 14.0716 4.16303C13.9402 3.84806 13.7475 3.56229 13.5049 3.32226C13.2649 3.07961 12.9791 2.88698 12.6641 2.75551C12.3492 2.62405 12.0112 2.55635 11.6699 2.55635C11.3286 2.55635 10.9907 2.62405 10.6757 2.75551C10.3608 2.88698 10.075 3.07961 9.83496 3.32226L6.77958 6.37765C6.53693 6.61767 6.3443 6.90344 6.21283 7.21841C6.08137 7.53338 6.01367 7.8713 6.01367 8.21261C6.01367 8.55392 6.08137 8.89183 6.21283 9.20681C6.3443 9.52178 6.53693 9.80754 6.77958 10.0476ZM9.22042 6.37765C9.55799 6.04008 10.1119 6.04008 10.4495 6.37765C11.2602 7.18955 11.7155 8.29001 11.7155 9.43736C11.7155 10.5847 11.2602 11.6852 10.4495 12.4971L7.38546 15.5611C6.57355 16.3718 5.4731 16.8271 4.32575 16.8271C3.17839 16.8271 2.07794 16.3718 1.26603 15.5611C0.455339 14.7492 0 13.6488 0 12.5014C0 11.3541 0.455339 10.2536 1.26603 9.44169L2.5557 8.15202C2.54704 8.86177 2.65956 9.57152 2.90192 10.2553L2.49511 10.6621C2.25246 10.9021 2.05983 11.1879 1.92837 11.5029C1.7969 11.8179 1.72921 12.1558 1.72921 12.4971C1.72921 12.8384 1.7969 13.1763 1.92837 13.4913C2.05983 13.8062 2.25246 14.092 2.49511 14.332C2.73514 14.5747 3.02091 14.7673 3.33588 14.8988C3.65085 15.0303 3.98877 15.0979 4.33007 15.0979C4.67138 15.0979 5.0093 15.0303 5.32427 14.8988C5.63924 14.7673 5.92501 14.5747 6.16504 14.332L9.22042 11.2767C9.46307 11.0366 9.6557 10.7509 9.78717 10.4359C9.91864 10.1209 9.98633 9.783 9.98633 9.44169C9.98633 9.10038 9.91864 8.76246 9.78717 8.44749C9.6557 8.13252 9.46307 7.84675 9.22042 7.60673C9.13636 7.52795 9.06935 7.43277 9.02354 7.32707C8.97773 7.22137 8.9541 7.10739 8.9541 6.99219C8.9541 6.87698 8.97773 6.763 9.02354 6.6573C9.06935 6.5516 9.13636 6.45642 9.22042 6.37765Z" fill="#3262AC"/></svg>
                            <span>Пример, как может выглядеть заказ в приложении банка: <a href="https://fpa.ru/dogovorsber-mobile/">Сбербанк</a>, <a href="https://fpa.ru/dogovoralfa-mobile/" target="_blank">Альфа-Банк</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pamytka-docs-item" id="pamytka-item-3" data-item-id="3">
            <div class="container">
                <div class="pamytka-text-v2">
                    <p class="title">Справки о состоянии задолженности</p>
                    <div class="line"></div>
                    <div class="text-additional">
                        <p class="title">Срок изготовления (при отсутствии на руках):</p>
                        <ul>
                            <li>Сразу при заказе онлайн</li>
                            <li>До 3-х дней (в отделении банка)</li>
                        </ul>
                        <p class="title">Где получить:</p>
                        <ul>
                            <li>В отделении банка</li>
                            <li>В приложении банка<sup>*</sup></li>
                            <li>В личном кабинете на сайте банка<sup>*</sup></li>
                        </ul>
                        <p class="title">Комментарий юриста:</p>
                        <p class="text">Справки требуются для расчета суммы долга при подаче заявления в суд. Они заказываются в последнюю очередь, чтобы отразить актуальную сумму просроченного долга на момент подачи вашего заявления</p>
                    </div>
                    <div class="line"></div>
                    <div class="doc-links">
                        <div class="link-item">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.77958 10.0476C7.13445 10.3851 7.13445 10.9391 6.77958 11.2767C6.44201 11.6142 5.88806 11.6142 5.5505 11.2767C4.73981 10.4647 4.28447 9.36429 4.28447 8.21694C4.28447 7.06958 4.73981 5.96913 5.5505 5.15722L8.61454 2.09318C9.42645 1.28249 10.5269 0.827148 11.6743 0.827148C12.8216 0.827148 13.9221 1.28249 14.734 2.09318C15.5447 2.90509 16 4.00554 16 5.15289C16 6.30025 15.5447 7.4007 14.734 8.21261L13.4443 9.50228C13.453 8.79253 13.3404 8.08278 13.0981 7.40765L13.5049 6.99219C13.7475 6.75216 13.9402 6.46639 14.0716 6.15142C14.2031 5.83645 14.2708 5.49853 14.2708 5.15722C14.2708 4.81592 14.2031 4.478 14.0716 4.16303C13.9402 3.84806 13.7475 3.56229 13.5049 3.32226C13.2649 3.07961 12.9791 2.88698 12.6641 2.75551C12.3492 2.62405 12.0112 2.55635 11.6699 2.55635C11.3286 2.55635 10.9907 2.62405 10.6757 2.75551C10.3608 2.88698 10.075 3.07961 9.83496 3.32226L6.77958 6.37765C6.53693 6.61767 6.3443 6.90344 6.21283 7.21841C6.08137 7.53338 6.01367 7.8713 6.01367 8.21261C6.01367 8.55392 6.08137 8.89183 6.21283 9.20681C6.3443 9.52178 6.53693 9.80754 6.77958 10.0476ZM9.22042 6.37765C9.55799 6.04008 10.1119 6.04008 10.4495 6.37765C11.2602 7.18955 11.7155 8.29001 11.7155 9.43736C11.7155 10.5847 11.2602 11.6852 10.4495 12.4971L7.38546 15.5611C6.57355 16.3718 5.4731 16.8271 4.32575 16.8271C3.17839 16.8271 2.07794 16.3718 1.26603 15.5611C0.455339 14.7492 0 13.6488 0 12.5014C0 11.3541 0.455339 10.2536 1.26603 9.44169L2.5557 8.15202C2.54704 8.86177 2.65956 9.57152 2.90192 10.2553L2.49511 10.6621C2.25246 10.9021 2.05983 11.1879 1.92837 11.5029C1.7969 11.8179 1.72921 12.1558 1.72921 12.4971C1.72921 12.8384 1.7969 13.1763 1.92837 13.4913C2.05983 13.8062 2.25246 14.092 2.49511 14.332C2.73514 14.5747 3.02091 14.7673 3.33588 14.8988C3.65085 15.0303 3.98877 15.0979 4.33007 15.0979C4.67138 15.0979 5.0093 15.0303 5.32427 14.8988C5.63924 14.7673 5.92501 14.5747 6.16504 14.332L9.22042 11.2767C9.46307 11.0366 9.6557 10.7509 9.78717 10.4359C9.91864 10.1209 9.98633 9.783 9.98633 9.44169C9.98633 9.10038 9.91864 8.76246 9.78717 8.44749C9.6557 8.13252 9.46307 7.84675 9.22042 7.60673C9.13636 7.52795 9.06935 7.43277 9.02354 7.32707C8.97773 7.22137 8.9541 7.10739 8.9541 6.99219C8.9541 6.87698 8.97773 6.763 9.02354 6.6573C9.06935 6.5516 9.13636 6.45642 9.22042 6.37765Z" fill="#3262AC"/></svg>
                            <span>Пример, как может выглядеть заказ в приложении банка: <a href="https://fpa.ru/dolgisber-mobile/">Сбербанк</a>, <a href="https://fpa.ru/dolgialfa-mobile/">Альфа-Банк</a>, <a href="https://fpa.ru/dolgipsb-mobile/">ПСБ</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pamytka-docs-item" id="pamytka-item-4" data-item-id="4">
            <div class="container">
                <div class="pamytka-text-v2">
                    <p class="title">Справка о наличии счетов, выписки по счетам (форма 67ф) </p>
                    <div class="line"></div>
                    <div class="text-additional">
                        <p class="title">Срок изготовления (при отсутствии на руках):</p>
                        <ul>
                            <li>До 3-х дней (в отделении банка)</li>
                            <li>Сразу при заказе онлайн</li>
                        </ul>
                        <p class="title">Где получить:</p>
                        <ul>
                            <li>На сайте <a href="https://www.nalog.gov.ru/" target="_blank">ФНС</a></li>
                            <li>В приложении банка<sup>*</sup></li>
                            <li>В отделении банка</li>
                            <li>В личном кабинете на сайте банка<sup>*</sup></li>
                        </ul>
                        <p class="title">Комментарий юриста:</p>
                        <p class="text">Cправка о наличии счетов отражает все открытые счета на ваше имя в кредитной организации. По всем счетам, указанным в справке, необходимо получить выписку за последние 3 года</p>
                    </div>
                    <div class="line"></div>
                    <div class="doc-links">
                        <div class="link-item">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.77958 10.0476C7.13445 10.3851 7.13445 10.9391 6.77958 11.2767C6.44201 11.6142 5.88806 11.6142 5.5505 11.2767C4.73981 10.4647 4.28447 9.36429 4.28447 8.21694C4.28447 7.06958 4.73981 5.96913 5.5505 5.15722L8.61454 2.09318C9.42645 1.28249 10.5269 0.827148 11.6743 0.827148C12.8216 0.827148 13.9221 1.28249 14.734 2.09318C15.5447 2.90509 16 4.00554 16 5.15289C16 6.30025 15.5447 7.4007 14.734 8.21261L13.4443 9.50228C13.453 8.79253 13.3404 8.08278 13.0981 7.40765L13.5049 6.99219C13.7475 6.75216 13.9402 6.46639 14.0716 6.15142C14.2031 5.83645 14.2708 5.49853 14.2708 5.15722C14.2708 4.81592 14.2031 4.478 14.0716 4.16303C13.9402 3.84806 13.7475 3.56229 13.5049 3.32226C13.2649 3.07961 12.9791 2.88698 12.6641 2.75551C12.3492 2.62405 12.0112 2.55635 11.6699 2.55635C11.3286 2.55635 10.9907 2.62405 10.6757 2.75551C10.3608 2.88698 10.075 3.07961 9.83496 3.32226L6.77958 6.37765C6.53693 6.61767 6.3443 6.90344 6.21283 7.21841C6.08137 7.53338 6.01367 7.8713 6.01367 8.21261C6.01367 8.55392 6.08137 8.89183 6.21283 9.20681C6.3443 9.52178 6.53693 9.80754 6.77958 10.0476ZM9.22042 6.37765C9.55799 6.04008 10.1119 6.04008 10.4495 6.37765C11.2602 7.18955 11.7155 8.29001 11.7155 9.43736C11.7155 10.5847 11.2602 11.6852 10.4495 12.4971L7.38546 15.5611C6.57355 16.3718 5.4731 16.8271 4.32575 16.8271C3.17839 16.8271 2.07794 16.3718 1.26603 15.5611C0.455339 14.7492 0 13.6488 0 12.5014C0 11.3541 0.455339 10.2536 1.26603 9.44169L2.5557 8.15202C2.54704 8.86177 2.65956 9.57152 2.90192 10.2553L2.49511 10.6621C2.25246 10.9021 2.05983 11.1879 1.92837 11.5029C1.7969 11.8179 1.72921 12.1558 1.72921 12.4971C1.72921 12.8384 1.7969 13.1763 1.92837 13.4913C2.05983 13.8062 2.25246 14.092 2.49511 14.332C2.73514 14.5747 3.02091 14.7673 3.33588 14.8988C3.65085 15.0303 3.98877 15.0979 4.33007 15.0979C4.67138 15.0979 5.0093 15.0303 5.32427 14.8988C5.63924 14.7673 5.92501 14.5747 6.16504 14.332L9.22042 11.2767C9.46307 11.0366 9.6557 10.7509 9.78717 10.4359C9.91864 10.1209 9.98633 9.783 9.98633 9.44169C9.98633 9.10038 9.91864 8.76246 9.78717 8.44749C9.6557 8.13252 9.46307 7.84675 9.22042 7.60673C9.13636 7.52795 9.06935 7.43277 9.02354 7.32707C8.97773 7.22137 8.9541 7.10739 8.9541 6.99219C8.9541 6.87698 8.97773 6.763 9.02354 6.6573C9.06935 6.5516 9.13636 6.45642 9.22042 6.37765Z" fill="#3262AC"/></svg>
                            <span><a href="https://fpa.ru/67f/">Инструкция</a>, как заказать справку по форме 67ф через сайт ФНС на компьютере</span>
                        </div>
                        <div class="link-item">
                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.24875 4.87544L9.93339 4.61818C10.4894 4.41641 11.208 4.21044 12.0562 4.34075C13.794 4.6081 14.9923 5.46646 15.7064 6.60479C15.9821 7.04364 15.7597 7.62205 15.2451 7.80616C14.8042 7.96394 14.4273 8.24242 14.166 8.60353C13.9046 8.96464 13.7716 9.39078 13.7849 9.82369C13.7983 10.2566 13.9575 10.6752 14.2407 11.0222C14.5239 11.3693 14.9174 11.6278 15.3673 11.7626C15.8433 11.9055 16.1117 12.3889 15.9554 12.8244C15.5492 13.9526 14.9648 14.9943 14.2728 15.835C13.5891 16.6656 12.7546 17.355 11.8256 17.6921C11.219 17.9107 10.5684 17.8291 9.94625 17.6879L9.57683 17.5979L9.0282 17.4525C8.77916 17.3861 8.52276 17.3289 8.27096 17.3289C8.01824 17.3289 7.76277 17.3861 7.51373 17.4525L6.9651 17.5979L6.59567 17.6879C5.97353 17.8291 5.32197 17.9115 4.71637 17.6921C3.54651 17.2684 2.5145 16.2797 1.73429 15.1136C0.889633 13.8295 0.332355 12.4047 0.0948426 10.9218C-0.113765 9.61538 -0.000730756 8.14833 0.660012 6.90744C1.34005 5.62872 2.58618 4.63332 4.4857 4.34075C5.25764 4.22221 5.92114 4.3811 6.45231 4.56354L6.75649 4.67283L7.29317 4.87544C7.66076 5.00743 7.95024 5.08478 8.27096 5.08478C8.59077 5.08478 8.88116 5.00743 9.24875 4.87544ZM8.05776 1.58237C8.95468 0.760996 10.3322 0.690377 10.6566 0.987989C10.9819 1.28476 10.9047 2.54499 10.0069 3.36552C9.10999 4.18606 7.73244 4.25668 7.40805 3.95991C7.08273 3.66314 7.15992 2.40291 8.05776 1.58237Z" fill="#3262AC"/></svg>
                            <span><a href="https://fpa.ru/67f-apple/">Инструкция</a>, как заказать справку по форме 67ф через приложение Налоги ФЛ на iOS</span>
                        </div>
                        <div class="link-item">
                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.9325 4.90709C2.99381 4.87211 3.06112 4.85011 3.13058 4.84233C3.20004 4.83456 3.27028 4.84116 3.33729 4.86178C3.40431 4.8824 3.46677 4.91661 3.5211 4.96248C3.57543 5.00834 3.62057 5.06494 3.65394 5.12904L5.01713 7.73918C6.12696 7.28626 7.30847 7.05549 8.5 7.0589C9.69153 7.05549 10.873 7.28626 11.9829 7.73918L13.3461 5.12904C13.3784 5.06315 13.423 5.00467 13.4773 4.95706C13.5316 4.90945 13.5944 4.87368 13.6622 4.85184C13.7299 4.83 13.8012 4.82254 13.8717 4.8299C13.9422 4.83726 14.0106 4.85929 14.0729 4.89469C14.1352 4.93009 14.19 4.97815 14.2342 5.03604C14.2784 5.09392 14.3111 5.16046 14.3303 5.23173C14.3495 5.30301 14.3548 5.37757 14.346 5.45104C14.3372 5.52451 14.3144 5.59539 14.2789 5.65951L12.9487 8.20638C15.3797 9.57359 17 12.0272 17 14.8271H0C0 12.0272 1.62031 9.57359 4.05131 8.20638L2.72 5.66061C2.6527 5.5314 2.63727 5.37955 2.67712 5.23846C2.71697 5.09737 2.80883 4.97747 2.9325 4.90709ZM5.3125 12.6076C5.59429 12.6076 5.86454 12.4907 6.0638 12.2826C6.26306 12.0745 6.375 11.7922 6.375 11.4979C6.375 11.2036 6.26306 10.9213 6.0638 10.7132C5.86454 10.5051 5.59429 10.3881 5.3125 10.3881C5.03071 10.3881 4.76046 10.5051 4.5612 10.7132C4.36194 10.9213 4.25 11.2036 4.25 11.4979C4.25 11.7922 4.36194 12.0745 4.5612 12.2826C4.76046 12.4907 5.03071 12.6076 5.3125 12.6076ZM11.6875 12.6076C11.9693 12.6076 12.2395 12.4907 12.4388 12.2826C12.6381 12.0745 12.75 11.7922 12.75 11.4979C12.75 11.2036 12.6381 10.9213 12.4388 10.7132C12.2395 10.5051 11.9693 10.3881 11.6875 10.3881C11.4057 10.3881 11.1355 10.5051 10.9362 10.7132C10.7369 10.9213 10.625 11.2036 10.625 11.4979C10.625 11.7922 10.7369 12.0745 10.9362 12.2826C11.1355 12.4907 11.4057 12.6076 11.6875 12.6076Z" fill="#3262AC"/></svg>
                            <span><a href="https://fpa.ru/67f-android/">Инструкция</a>, как заказать справку по форме 67ф через приложение Налоги ФЛ на Android</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pamytka-docs-item" id="pamytka-item-5" data-item-id="5">
            <div class="container">
                <div class="pamytka-text-v2">
                    <p class="title">Выписки из Национального бюро кредитных историй и Объединенного кредитного бюро</p>
                    <div class="line"></div>
                    <div class="text-additional">
                        <p class="title">Срок изготовления (при отсутствии на руках):</p>
                        <ul>
                            <li>В течение суток при заказе онлайн</li>
                        </ul>
                        <p class="title">Где получить:</p>
                        <ul>
                            <li>НБКИ - онлайн на <a href="https://nbki.ru/" target="_blank">сайте</a></li>
                            <li>ОКБ - онлайн на <a href="https://credistory.ru/" target="_blank">сайте</a></li>
                        </ul>
                        <p class="title">Комментарий юриста:</p>
                        <p class="text">Выписки необходимы для проверки информации о количестве и составе кредиторов, а также времени возникновения задолженности</p>
                    </div>
                    <div class="line"></div>
                    <div class="doc-links">
                        <div class="link-item">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.77958 10.0476C7.13445 10.3851 7.13445 10.9391 6.77958 11.2767C6.44201 11.6142 5.88806 11.6142 5.5505 11.2767C4.73981 10.4647 4.28447 9.36429 4.28447 8.21694C4.28447 7.06958 4.73981 5.96913 5.5505 5.15722L8.61454 2.09318C9.42645 1.28249 10.5269 0.827148 11.6743 0.827148C12.8216 0.827148 13.9221 1.28249 14.734 2.09318C15.5447 2.90509 16 4.00554 16 5.15289C16 6.30025 15.5447 7.4007 14.734 8.21261L13.4443 9.50228C13.453 8.79253 13.3404 8.08278 13.0981 7.40765L13.5049 6.99219C13.7475 6.75216 13.9402 6.46639 14.0716 6.15142C14.2031 5.83645 14.2708 5.49853 14.2708 5.15722C14.2708 4.81592 14.2031 4.478 14.0716 4.16303C13.9402 3.84806 13.7475 3.56229 13.5049 3.32226C13.2649 3.07961 12.9791 2.88698 12.6641 2.75551C12.3492 2.62405 12.0112 2.55635 11.6699 2.55635C11.3286 2.55635 10.9907 2.62405 10.6757 2.75551C10.3608 2.88698 10.075 3.07961 9.83496 3.32226L6.77958 6.37765C6.53693 6.61767 6.3443 6.90344 6.21283 7.21841C6.08137 7.53338 6.01367 7.8713 6.01367 8.21261C6.01367 8.55392 6.08137 8.89183 6.21283 9.20681C6.3443 9.52178 6.53693 9.80754 6.77958 10.0476ZM9.22042 6.37765C9.55799 6.04008 10.1119 6.04008 10.4495 6.37765C11.2602 7.18955 11.7155 8.29001 11.7155 9.43736C11.7155 10.5847 11.2602 11.6852 10.4495 12.4971L7.38546 15.5611C6.57355 16.3718 5.4731 16.8271 4.32575 16.8271C3.17839 16.8271 2.07794 16.3718 1.26603 15.5611C0.455339 14.7492 0 13.6488 0 12.5014C0 11.3541 0.455339 10.2536 1.26603 9.44169L2.5557 8.15202C2.54704 8.86177 2.65956 9.57152 2.90192 10.2553L2.49511 10.6621C2.25246 10.9021 2.05983 11.1879 1.92837 11.5029C1.7969 11.8179 1.72921 12.1558 1.72921 12.4971C1.72921 12.8384 1.7969 13.1763 1.92837 13.4913C2.05983 13.8062 2.25246 14.092 2.49511 14.332C2.73514 14.5747 3.02091 14.7673 3.33588 14.8988C3.65085 15.0303 3.98877 15.0979 4.33007 15.0979C4.67138 15.0979 5.0093 15.0303 5.32427 14.8988C5.63924 14.7673 5.92501 14.5747 6.16504 14.332L9.22042 11.2767C9.46307 11.0366 9.6557 10.7509 9.78717 10.4359C9.91864 10.1209 9.98633 9.783 9.98633 9.44169C9.98633 9.10038 9.91864 8.76246 9.78717 8.44749C9.6557 8.13252 9.46307 7.84675 9.22042 7.60673C9.13636 7.52795 9.06935 7.43277 9.02354 7.32707C8.97773 7.22137 8.9541 7.10739 8.9541 6.99219C8.9541 6.87698 8.97773 6.763 9.02354 6.6573C9.06935 6.5516 9.13636 6.45642 9.22042 6.37765Z" fill="#3262AC"/></svg>
                            <span><a href="https://fpa.ru/nbki/">Инструкция</a>, как заказать выписку через сайт НБКИ
на компьютере</span>
                        </div>
                        <div class="link-item">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.77958 10.0476C7.13445 10.3851 7.13445 10.9391 6.77958 11.2767C6.44201 11.6142 5.88806 11.6142 5.5505 11.2767C4.73981 10.4647 4.28447 9.36429 4.28447 8.21694C4.28447 7.06958 4.73981 5.96913 5.5505 5.15722L8.61454 2.09318C9.42645 1.28249 10.5269 0.827148 11.6743 0.827148C12.8216 0.827148 13.9221 1.28249 14.734 2.09318C15.5447 2.90509 16 4.00554 16 5.15289C16 6.30025 15.5447 7.4007 14.734 8.21261L13.4443 9.50228C13.453 8.79253 13.3404 8.08278 13.0981 7.40765L13.5049 6.99219C13.7475 6.75216 13.9402 6.46639 14.0716 6.15142C14.2031 5.83645 14.2708 5.49853 14.2708 5.15722C14.2708 4.81592 14.2031 4.478 14.0716 4.16303C13.9402 3.84806 13.7475 3.56229 13.5049 3.32226C13.2649 3.07961 12.9791 2.88698 12.6641 2.75551C12.3492 2.62405 12.0112 2.55635 11.6699 2.55635C11.3286 2.55635 10.9907 2.62405 10.6757 2.75551C10.3608 2.88698 10.075 3.07961 9.83496 3.32226L6.77958 6.37765C6.53693 6.61767 6.3443 6.90344 6.21283 7.21841C6.08137 7.53338 6.01367 7.8713 6.01367 8.21261C6.01367 8.55392 6.08137 8.89183 6.21283 9.20681C6.3443 9.52178 6.53693 9.80754 6.77958 10.0476ZM9.22042 6.37765C9.55799 6.04008 10.1119 6.04008 10.4495 6.37765C11.2602 7.18955 11.7155 8.29001 11.7155 9.43736C11.7155 10.5847 11.2602 11.6852 10.4495 12.4971L7.38546 15.5611C6.57355 16.3718 5.4731 16.8271 4.32575 16.8271C3.17839 16.8271 2.07794 16.3718 1.26603 15.5611C0.455339 14.7492 0 13.6488 0 12.5014C0 11.3541 0.455339 10.2536 1.26603 9.44169L2.5557 8.15202C2.54704 8.86177 2.65956 9.57152 2.90192 10.2553L2.49511 10.6621C2.25246 10.9021 2.05983 11.1879 1.92837 11.5029C1.7969 11.8179 1.72921 12.1558 1.72921 12.4971C1.72921 12.8384 1.7969 13.1763 1.92837 13.4913C2.05983 13.8062 2.25246 14.092 2.49511 14.332C2.73514 14.5747 3.02091 14.7673 3.33588 14.8988C3.65085 15.0303 3.98877 15.0979 4.33007 15.0979C4.67138 15.0979 5.0093 15.0303 5.32427 14.8988C5.63924 14.7673 5.92501 14.5747 6.16504 14.332L9.22042 11.2767C9.46307 11.0366 9.6557 10.7509 9.78717 10.4359C9.91864 10.1209 9.98633 9.783 9.98633 9.44169C9.98633 9.10038 9.91864 8.76246 9.78717 8.44749C9.6557 8.13252 9.46307 7.84675 9.22042 7.60673C9.13636 7.52795 9.06935 7.43277 9.02354 7.32707C8.97773 7.22137 8.9541 7.10739 8.9541 6.99219C8.9541 6.87698 8.97773 6.763 9.02354 6.6573C9.06935 6.5516 9.13636 6.45642 9.22042 6.37765Z" fill="#3262AC"/></svg>
                            <span><a href="https://fpa.ru/okb/">Инструкция</a>, как заказать выписку через сайт ОКБ
на компьютере</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pamytka-docs-item" id="pamytka-item-6" data-item-id="6">
            <div class="container">
                <div class="pamytka-text-v2">
                    <p class="title">Госпошлина и депозит суда</p>
                    <div class="line"></div>
                    <div class="text-additional">
                        <p class="title">Где оплатить?</p>
                        <ul>
                            <li>В кассе ФПА (наличными)</li>
                        </ul>
                        <p class="text">Государственную пошлину за рассмотрение заявления в Арбитражном суде и вознаграждение финансового управляющего на депозит суда необходимо внести в кассу ФПА</p>
                        <p class="title">Комментарий юриста:</p>
                        <p class="text">Госпошлина оплачивается в бюджет РФ за рассмотрение заявления о банкротстве гражданина арбитражным судом. Депозит — вознаграждение арбитражного управляющего в деле о банкротстве</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="pamytka-docs-item" id="pamytka-item-7" data-item-id="7">
            <div class="container">
                <div class="pamytka-text-v2">
                    <p class="title">Доверенность на представление интересов в суде</p>
                    <div class="line"></div>
                    <div class="text-additional">
                        <p class="title">Где получить:</p>
                        <ul>
                            <li>Оформить у нотариуса (по установленному образцу ФПА)</li>
                        </ul>
                        <p class="title">Комментарий юриста:</p>
                        <p class="text">Доверенность оформляется для защиты ваших интересов в суде. Можно уточнить у вашего юриста, к какому нотариусу лучше обратиться для оформления доверенности</p>
                    </div>
                    <div class="line"></div>
                    <div class="doc-links">
                        <div class="link-item">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.77958 10.0476C7.13445 10.3851 7.13445 10.9391 6.77958 11.2767C6.44201 11.6142 5.88806 11.6142 5.5505 11.2767C4.73981 10.4647 4.28447 9.36429 4.28447 8.21694C4.28447 7.06958 4.73981 5.96913 5.5505 5.15722L8.61454 2.09318C9.42645 1.28249 10.5269 0.827148 11.6743 0.827148C12.8216 0.827148 13.9221 1.28249 14.734 2.09318C15.5447 2.90509 16 4.00554 16 5.15289C16 6.30025 15.5447 7.4007 14.734 8.21261L13.4443 9.50228C13.453 8.79253 13.3404 8.08278 13.0981 7.40765L13.5049 6.99219C13.7475 6.75216 13.9402 6.46639 14.0716 6.15142C14.2031 5.83645 14.2708 5.49853 14.2708 5.15722C14.2708 4.81592 14.2031 4.478 14.0716 4.16303C13.9402 3.84806 13.7475 3.56229 13.5049 3.32226C13.2649 3.07961 12.9791 2.88698 12.6641 2.75551C12.3492 2.62405 12.0112 2.55635 11.6699 2.55635C11.3286 2.55635 10.9907 2.62405 10.6757 2.75551C10.3608 2.88698 10.075 3.07961 9.83496 3.32226L6.77958 6.37765C6.53693 6.61767 6.3443 6.90344 6.21283 7.21841C6.08137 7.53338 6.01367 7.8713 6.01367 8.21261C6.01367 8.55392 6.08137 8.89183 6.21283 9.20681C6.3443 9.52178 6.53693 9.80754 6.77958 10.0476ZM9.22042 6.37765C9.55799 6.04008 10.1119 6.04008 10.4495 6.37765C11.2602 7.18955 11.7155 8.29001 11.7155 9.43736C11.7155 10.5847 11.2602 11.6852 10.4495 12.4971L7.38546 15.5611C6.57355 16.3718 5.4731 16.8271 4.32575 16.8271C3.17839 16.8271 2.07794 16.3718 1.26603 15.5611C0.455339 14.7492 0 13.6488 0 12.5014C0 11.3541 0.455339 10.2536 1.26603 9.44169L2.5557 8.15202C2.54704 8.86177 2.65956 9.57152 2.90192 10.2553L2.49511 10.6621C2.25246 10.9021 2.05983 11.1879 1.92837 11.5029C1.7969 11.8179 1.72921 12.1558 1.72921 12.4971C1.72921 12.8384 1.7969 13.1763 1.92837 13.4913C2.05983 13.8062 2.25246 14.092 2.49511 14.332C2.73514 14.5747 3.02091 14.7673 3.33588 14.8988C3.65085 15.0303 3.98877 15.0979 4.33007 15.0979C4.67138 15.0979 5.0093 15.0303 5.32427 14.8988C5.63924 14.7673 5.92501 14.5747 6.16504 14.332L9.22042 11.2767C9.46307 11.0366 9.6557 10.7509 9.78717 10.4359C9.91864 10.1209 9.98633 9.783 9.98633 9.44169C9.98633 9.10038 9.91864 8.76246 9.78717 8.44749C9.6557 8.13252 9.46307 7.84675 9.22042 7.60673C9.13636 7.52795 9.06935 7.43277 9.02354 7.32707C8.97773 7.22137 8.9541 7.10739 8.9541 6.99219C8.9541 6.87698 8.97773 6.763 9.02354 6.6573C9.06935 6.5516 9.13636 6.45642 9.22042 6.37765Z" fill="#3262AC"/></svg>
                            <span>Образец доверенности в <a href="https://drive.google.com/file/d/1qqHblOVo9rGX6xsHyQr_Oks8AEtP6_kx/view" target="_blank">формате .pdf</a>, а также в <a href="https://docs.google.com/document/d/1Eege6mmS8tG15eV_lCZjsPhxlY5NtPPw/edit" target="_blank">формате .doc</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pamytka-docs-item" id="pamytka-item-8" data-item-id="8">
            <div class="container">
                <div class="pamytka-text-v2">
                    <p class="title">Декларации по доходам ИП</p>
                    <div class="line"></div>
                    <div class="text-additional">
                        <p class="title">Срок изготовления (при отсутствии на руках):</p>
                        <ul>
                            <li>Срок изготовления зависит от отделения налоговой</li>
                        </ul>
                        <p class="title">Где получить:</p>
                        <ul>
                            <li>В отделе ФНС по месту регистрации</li>
                            <li>На сайте <a href="https://www.nalog.gov.ru/" target="_blank">ФНС</a></li>
                        </ul>
                        <p class="title">Комментарий юриста:</p>
                        <p class="text">Документ необходим для подтверждения доходов от индивидуального предпринимательства, если вы являлись предпринимателем в течение последних 3 лет</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="pamytka-docs-item" id="pamytka-item-9" data-item-id="9">
            <div class="container">
                <div class="pamytka-text-v2">
                    <p class="title">Справка о задолженности перед налоговым органом</p>
                    <div class="line"></div>
                    <div class="text-additional">
                        <p class="title">Срок изготовления (при отсутствии на руках):</p>
                        <ul>
                            <li>Срок изготовления зависит от отделения налоговой</li>
                            <li>В течение суток при заказе онлайн</li>
                        </ul>
                        <p class="title">Где получить:</p>
                        <ul>
                            <li>В отделе ФНС по месту регистрации</li>
                            <li>На сайте <a href="https://www.nalog.gov.ru/" target="_blank">ФНС</a></li>
                            <li>На сайте <a href="https://www.gosuslugi.ru/" target="_blank">Госуслуги</a><sup>**</sup></li>
                        </ul>
                        <p class="title">Комментарий юриста:</p>
                        <p class="text">Документ требуется для определения наличия долга перед государством по налогам</p>
                    </div>
                    <div class="line"></div>
                    <div class="doc-links">
                        <div class="link-item">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.77958 10.0476C7.13445 10.3851 7.13445 10.9391 6.77958 11.2767C6.44201 11.6142 5.88806 11.6142 5.5505 11.2767C4.73981 10.4647 4.28447 9.36429 4.28447 8.21694C4.28447 7.06958 4.73981 5.96913 5.5505 5.15722L8.61454 2.09318C9.42645 1.28249 10.5269 0.827148 11.6743 0.827148C12.8216 0.827148 13.9221 1.28249 14.734 2.09318C15.5447 2.90509 16 4.00554 16 5.15289C16 6.30025 15.5447 7.4007 14.734 8.21261L13.4443 9.50228C13.453 8.79253 13.3404 8.08278 13.0981 7.40765L13.5049 6.99219C13.7475 6.75216 13.9402 6.46639 14.0716 6.15142C14.2031 5.83645 14.2708 5.49853 14.2708 5.15722C14.2708 4.81592 14.2031 4.478 14.0716 4.16303C13.9402 3.84806 13.7475 3.56229 13.5049 3.32226C13.2649 3.07961 12.9791 2.88698 12.6641 2.75551C12.3492 2.62405 12.0112 2.55635 11.6699 2.55635C11.3286 2.55635 10.9907 2.62405 10.6757 2.75551C10.3608 2.88698 10.075 3.07961 9.83496 3.32226L6.77958 6.37765C6.53693 6.61767 6.3443 6.90344 6.21283 7.21841C6.08137 7.53338 6.01367 7.8713 6.01367 8.21261C6.01367 8.55392 6.08137 8.89183 6.21283 9.20681C6.3443 9.52178 6.53693 9.80754 6.77958 10.0476ZM9.22042 6.37765C9.55799 6.04008 10.1119 6.04008 10.4495 6.37765C11.2602 7.18955 11.7155 8.29001 11.7155 9.43736C11.7155 10.5847 11.2602 11.6852 10.4495 12.4971L7.38546 15.5611C6.57355 16.3718 5.4731 16.8271 4.32575 16.8271C3.17839 16.8271 2.07794 16.3718 1.26603 15.5611C0.455339 14.7492 0 13.6488 0 12.5014C0 11.3541 0.455339 10.2536 1.26603 9.44169L2.5557 8.15202C2.54704 8.86177 2.65956 9.57152 2.90192 10.2553L2.49511 10.6621C2.25246 10.9021 2.05983 11.1879 1.92837 11.5029C1.7969 11.8179 1.72921 12.1558 1.72921 12.4971C1.72921 12.8384 1.7969 13.1763 1.92837 13.4913C2.05983 13.8062 2.25246 14.092 2.49511 14.332C2.73514 14.5747 3.02091 14.7673 3.33588 14.8988C3.65085 15.0303 3.98877 15.0979 4.33007 15.0979C4.67138 15.0979 5.0093 15.0303 5.32427 14.8988C5.63924 14.7673 5.92501 14.5747 6.16504 14.332L9.22042 11.2767C9.46307 11.0366 9.6557 10.7509 9.78717 10.4359C9.91864 10.1209 9.98633 9.783 9.98633 9.44169C9.98633 9.10038 9.91864 8.76246 9.78717 8.44749C9.6557 8.13252 9.46307 7.84675 9.22042 7.60673C9.13636 7.52795 9.06935 7.43277 9.02354 7.32707C8.97773 7.22137 8.9541 7.10739 8.9541 6.99219C8.9541 6.87698 8.97773 6.763 9.02354 6.6573C9.06935 6.5516 9.13636 6.45642 9.22042 6.37765Z" fill="#3262AC"/></svg>
                            <span><a href="https://fpa.ru/dolginalogi/">Инструкция</a>, как заказать справку через сайт ФНС на компьютере</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pamytka-docs-item" id="pamytka-item-10" data-item-id="10">
            <div class="container">
                <div class="pamytka-text-v2">
                    <p class="title">Уведомление о снятии с учета в качестве ИП</p>
                    <div class="line"></div>
                    <div class="text-additional">
                        <p class="title">Где получить:</p>
                        <ul>
                            <li>В отделении МИ ФНС по месту регистрации</li>
                            <li>Удаленно по почте с объявленной ценностью</li>
                            <li>В электронном виде</li>
                            <li>Через МФЦ</li>
                        </ul>
                        <p class="title">Комментарий юриста:</p>
                        <p class="text">Если в настоящий момент вы являетесь индивидуальным предпринимателем, чтобы пройти процедуру банкротства как физическому лицу, ИП нужно закрыть и получить свидетельство о снятии с учета</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="pamytka-docs-item" id="pamytka-item-11" data-item-id="11">
            <div class="container">
                <div class="pamytka-text-v2">
                    <p class="title">Постановления о возбуждении исполнительного производства</p>
                    <div class="line"></div>
                    <div class="text-additional">
                        <p class="title">Срок изготовления (при отсутствии на руках):</p>
                        <ul>
                            <li>Сразу при личном запросе (см. график приёма граждан)</li>
                        </ul>
                        <p class="title">Где получить:</p>
                        <ul>
                            <li>В отделе судебных приставов по месту вашей регистрации<sup style="color: #EC4A48;">*</sup></li>
                        </ul>
                        <p class="text"><sup style="color: #EC4A48;">*</sup>График приема граждан судебными приставами-исполнителями: <span style="margin-top: 8px;display: block;">Вт: <strong>9:00-13:00</strong></span><span>Чт: <strong>13:00-18:00</strong></span></p>
                        <p class="title">Комментарий юриста:</p>
                        <p class="text">Копия постановления необходима, если кредитор уже получил судебное решение по взысканию долга и передал его в ФССП</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="pamytka-docs-item" id="pamytka-item-12" data-item-id="12">
            <div class="container">
                <div class="pamytka-text-v2">
                    <p class="title">Справки о доходах и удержанных суммах налога (2-НДФЛ)</p>
                    <div class="line"></div>
                    <div class="text-additional">
                        <p class="title">Срок изготовления (при отсутствии на руках):</p>
                        <ul>
                            <li>Сразу при заказе онлайн на сайте <a href="https://www.nalog.gov.ru/" target="_blank">ФНС</a></li>
                        </ul>
                        <p class="title">Где получить:</p>
                        <ul>
                            <li>У работодателя (если вы были трудоустроены более 3-х месяцев - работодатель обязан предоставить данную справку по форме 2-НДФЛ)</li>
                            <li>На сайте <a href="https://www.nalog.gov.ru/" target="_blank">ФНС</a></li>
                            <li>На сайте <a href="https://www.gosuslugi.ru/" target="_blank">Госуслуги</a><sup>**</sup></li>
                        </ul>
                        <p class="title">Комментарий юриста:</p>
                        <p class="text">Требуется для подтверждения финансового положения гражданина за последние 3 года до подачи в суд</p>
                    </div>
                    <div class="line"></div>
                    <div class="doc-links">
                        <div class="link-item">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.77958 10.0476C7.13445 10.3851 7.13445 10.9391 6.77958 11.2767C6.44201 11.6142 5.88806 11.6142 5.5505 11.2767C4.73981 10.4647 4.28447 9.36429 4.28447 8.21694C4.28447 7.06958 4.73981 5.96913 5.5505 5.15722L8.61454 2.09318C9.42645 1.28249 10.5269 0.827148 11.6743 0.827148C12.8216 0.827148 13.9221 1.28249 14.734 2.09318C15.5447 2.90509 16 4.00554 16 5.15289C16 6.30025 15.5447 7.4007 14.734 8.21261L13.4443 9.50228C13.453 8.79253 13.3404 8.08278 13.0981 7.40765L13.5049 6.99219C13.7475 6.75216 13.9402 6.46639 14.0716 6.15142C14.2031 5.83645 14.2708 5.49853 14.2708 5.15722C14.2708 4.81592 14.2031 4.478 14.0716 4.16303C13.9402 3.84806 13.7475 3.56229 13.5049 3.32226C13.2649 3.07961 12.9791 2.88698 12.6641 2.75551C12.3492 2.62405 12.0112 2.55635 11.6699 2.55635C11.3286 2.55635 10.9907 2.62405 10.6757 2.75551C10.3608 2.88698 10.075 3.07961 9.83496 3.32226L6.77958 6.37765C6.53693 6.61767 6.3443 6.90344 6.21283 7.21841C6.08137 7.53338 6.01367 7.8713 6.01367 8.21261C6.01367 8.55392 6.08137 8.89183 6.21283 9.20681C6.3443 9.52178 6.53693 9.80754 6.77958 10.0476ZM9.22042 6.37765C9.55799 6.04008 10.1119 6.04008 10.4495 6.37765C11.2602 7.18955 11.7155 8.29001 11.7155 9.43736C11.7155 10.5847 11.2602 11.6852 10.4495 12.4971L7.38546 15.5611C6.57355 16.3718 5.4731 16.8271 4.32575 16.8271C3.17839 16.8271 2.07794 16.3718 1.26603 15.5611C0.455339 14.7492 0 13.6488 0 12.5014C0 11.3541 0.455339 10.2536 1.26603 9.44169L2.5557 8.15202C2.54704 8.86177 2.65956 9.57152 2.90192 10.2553L2.49511 10.6621C2.25246 10.9021 2.05983 11.1879 1.92837 11.5029C1.7969 11.8179 1.72921 12.1558 1.72921 12.4971C1.72921 12.8384 1.7969 13.1763 1.92837 13.4913C2.05983 13.8062 2.25246 14.092 2.49511 14.332C2.73514 14.5747 3.02091 14.7673 3.33588 14.8988C3.65085 15.0303 3.98877 15.0979 4.33007 15.0979C4.67138 15.0979 5.0093 15.0303 5.32427 14.8988C5.63924 14.7673 5.92501 14.5747 6.16504 14.332L9.22042 11.2767C9.46307 11.0366 9.6557 10.7509 9.78717 10.4359C9.91864 10.1209 9.98633 9.783 9.98633 9.44169C9.98633 9.10038 9.91864 8.76246 9.78717 8.44749C9.6557 8.13252 9.46307 7.84675 9.22042 7.60673C9.13636 7.52795 9.06935 7.43277 9.02354 7.32707C8.97773 7.22137 8.9541 7.10739 8.9541 6.99219C8.9541 6.87698 8.97773 6.763 9.02354 6.6573C9.06935 6.5516 9.13636 6.45642 9.22042 6.37765Z" fill="#3262AC"/></svg>
                            <span><a href="https://fpa.ru/2ndflnalogi/">Инструкция</a>, как заказать справку 2-НДФЛ через сайт ФНС на компьютере</span>
                        </div>
                        <div class="link-item">
                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.24875 4.87544L9.93339 4.61818C10.4894 4.41641 11.208 4.21044 12.0562 4.34075C13.794 4.6081 14.9923 5.46646 15.7064 6.60479C15.9821 7.04364 15.7597 7.62205 15.2451 7.80616C14.8042 7.96394 14.4273 8.24242 14.166 8.60353C13.9046 8.96464 13.7716 9.39078 13.7849 9.82369C13.7983 10.2566 13.9575 10.6752 14.2407 11.0222C14.5239 11.3693 14.9174 11.6278 15.3673 11.7626C15.8433 11.9055 16.1117 12.3889 15.9554 12.8244C15.5492 13.9526 14.9648 14.9943 14.2728 15.835C13.5891 16.6656 12.7546 17.355 11.8256 17.6921C11.219 17.9107 10.5684 17.8291 9.94625 17.6879L9.57683 17.5979L9.0282 17.4525C8.77916 17.3861 8.52276 17.3289 8.27096 17.3289C8.01824 17.3289 7.76277 17.3861 7.51373 17.4525L6.9651 17.5979L6.59567 17.6879C5.97353 17.8291 5.32197 17.9115 4.71637 17.6921C3.54651 17.2684 2.5145 16.2797 1.73429 15.1136C0.889633 13.8295 0.332355 12.4047 0.0948426 10.9218C-0.113765 9.61538 -0.000730756 8.14833 0.660012 6.90744C1.34005 5.62872 2.58618 4.63332 4.4857 4.34075C5.25764 4.22221 5.92114 4.3811 6.45231 4.56354L6.75649 4.67283L7.29317 4.87544C7.66076 5.00743 7.95024 5.08478 8.27096 5.08478C8.59077 5.08478 8.88116 5.00743 9.24875 4.87544ZM8.05776 1.58237C8.95468 0.760996 10.3322 0.690377 10.6566 0.987989C10.9819 1.28476 10.9047 2.54499 10.0069 3.36552C9.10999 4.18606 7.73244 4.25668 7.40805 3.95991C7.08273 3.66314 7.15992 2.40291 8.05776 1.58237Z" fill="#3262AC"></path></svg>
                            <span><a href="https://fpa.ru/egrnnalogi-fns-apple/">Инструкция</a>, как заказать справку 2-НДФЛ через приложение Налоги ФЛ на iOS</span>
                        </div>
                        <div class="link-item">
                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.9325 4.90709C2.99381 4.87211 3.06112 4.85011 3.13058 4.84233C3.20004 4.83456 3.27028 4.84116 3.33729 4.86178C3.40431 4.8824 3.46677 4.91661 3.5211 4.96248C3.57543 5.00834 3.62057 5.06494 3.65394 5.12904L5.01713 7.73918C6.12696 7.28626 7.30847 7.05549 8.5 7.0589C9.69153 7.05549 10.873 7.28626 11.9829 7.73918L13.3461 5.12904C13.3784 5.06315 13.423 5.00467 13.4773 4.95706C13.5316 4.90945 13.5944 4.87368 13.6622 4.85184C13.7299 4.83 13.8012 4.82254 13.8717 4.8299C13.9422 4.83726 14.0106 4.85929 14.0729 4.89469C14.1352 4.93009 14.19 4.97815 14.2342 5.03604C14.2784 5.09392 14.3111 5.16046 14.3303 5.23173C14.3495 5.30301 14.3548 5.37757 14.346 5.45104C14.3372 5.52451 14.3144 5.59539 14.2789 5.65951L12.9487 8.20638C15.3797 9.57359 17 12.0272 17 14.8271H0C0 12.0272 1.62031 9.57359 4.05131 8.20638L2.72 5.66061C2.6527 5.5314 2.63727 5.37955 2.67712 5.23846C2.71697 5.09737 2.80883 4.97747 2.9325 4.90709ZM5.3125 12.6076C5.59429 12.6076 5.86454 12.4907 6.0638 12.2826C6.26306 12.0745 6.375 11.7922 6.375 11.4979C6.375 11.2036 6.26306 10.9213 6.0638 10.7132C5.86454 10.5051 5.59429 10.3881 5.3125 10.3881C5.03071 10.3881 4.76046 10.5051 4.5612 10.7132C4.36194 10.9213 4.25 11.2036 4.25 11.4979C4.25 11.7922 4.36194 12.0745 4.5612 12.2826C4.76046 12.4907 5.03071 12.6076 5.3125 12.6076ZM11.6875 12.6076C11.9693 12.6076 12.2395 12.4907 12.4388 12.2826C12.6381 12.0745 12.75 11.7922 12.75 11.4979C12.75 11.2036 12.6381 10.9213 12.4388 10.7132C12.2395 10.5051 11.9693 10.3881 11.6875 10.3881C11.4057 10.3881 11.1355 10.5051 10.9362 10.7132C10.7369 10.9213 10.625 11.2036 10.625 11.4979C10.625 11.7922 10.7369 12.0745 10.9362 12.2826C11.1355 12.4907 11.4057 12.6076 11.6875 12.6076Z" fill="#3262AC"></path></svg>
                            <span><a href="https://fpa.ru/egrnnalogi-fns-android/">Инструкция</a>, как заказать справку 2-НДФЛ через приложение Налоги ФЛ на Android 
</span>
                        </div>
                        <div class="link-item">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.77958 10.0476C7.13445 10.3851 7.13445 10.9391 6.77958 11.2767C6.44201 11.6142 5.88806 11.6142 5.5505 11.2767C4.73981 10.4647 4.28447 9.36429 4.28447 8.21694C4.28447 7.06958 4.73981 5.96913 5.5505 5.15722L8.61454 2.09318C9.42645 1.28249 10.5269 0.827148 11.6743 0.827148C12.8216 0.827148 13.9221 1.28249 14.734 2.09318C15.5447 2.90509 16 4.00554 16 5.15289C16 6.30025 15.5447 7.4007 14.734 8.21261L13.4443 9.50228C13.453 8.79253 13.3404 8.08278 13.0981 7.40765L13.5049 6.99219C13.7475 6.75216 13.9402 6.46639 14.0716 6.15142C14.2031 5.83645 14.2708 5.49853 14.2708 5.15722C14.2708 4.81592 14.2031 4.478 14.0716 4.16303C13.9402 3.84806 13.7475 3.56229 13.5049 3.32226C13.2649 3.07961 12.9791 2.88698 12.6641 2.75551C12.3492 2.62405 12.0112 2.55635 11.6699 2.55635C11.3286 2.55635 10.9907 2.62405 10.6757 2.75551C10.3608 2.88698 10.075 3.07961 9.83496 3.32226L6.77958 6.37765C6.53693 6.61767 6.3443 6.90344 6.21283 7.21841C6.08137 7.53338 6.01367 7.8713 6.01367 8.21261C6.01367 8.55392 6.08137 8.89183 6.21283 9.20681C6.3443 9.52178 6.53693 9.80754 6.77958 10.0476ZM9.22042 6.37765C9.55799 6.04008 10.1119 6.04008 10.4495 6.37765C11.2602 7.18955 11.7155 8.29001 11.7155 9.43736C11.7155 10.5847 11.2602 11.6852 10.4495 12.4971L7.38546 15.5611C6.57355 16.3718 5.4731 16.8271 4.32575 16.8271C3.17839 16.8271 2.07794 16.3718 1.26603 15.5611C0.455339 14.7492 0 13.6488 0 12.5014C0 11.3541 0.455339 10.2536 1.26603 9.44169L2.5557 8.15202C2.54704 8.86177 2.65956 9.57152 2.90192 10.2553L2.49511 10.6621C2.25246 10.9021 2.05983 11.1879 1.92837 11.5029C1.7969 11.8179 1.72921 12.1558 1.72921 12.4971C1.72921 12.8384 1.7969 13.1763 1.92837 13.4913C2.05983 13.8062 2.25246 14.092 2.49511 14.332C2.73514 14.5747 3.02091 14.7673 3.33588 14.8988C3.65085 15.0303 3.98877 15.0979 4.33007 15.0979C4.67138 15.0979 5.0093 15.0303 5.32427 14.8988C5.63924 14.7673 5.92501 14.5747 6.16504 14.332L9.22042 11.2767C9.46307 11.0366 9.6557 10.7509 9.78717 10.4359C9.91864 10.1209 9.98633 9.783 9.98633 9.44169C9.98633 9.10038 9.91864 8.76246 9.78717 8.44749C9.6557 8.13252 9.46307 7.84675 9.22042 7.60673C9.13636 7.52795 9.06935 7.43277 9.02354 7.32707C8.97773 7.22137 8.9541 7.10739 8.9541 6.99219C8.9541 6.87698 8.97773 6.763 9.02354 6.6573C9.06935 6.5516 9.13636 6.45642 9.22042 6.37765Z" fill="#3262AC"/></svg>
                            <span><a href="https://fpa.ru/2ndflgosuslugi/">Инструкция</a>, как заказать справку 2-НДФЛ через сайт Госуслуги на компьютере</span>
                        </div>
                        <div class="link-item">
                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.24875 4.87544L9.93339 4.61818C10.4894 4.41641 11.208 4.21044 12.0562 4.34075C13.794 4.6081 14.9923 5.46646 15.7064 6.60479C15.9821 7.04364 15.7597 7.62205 15.2451 7.80616C14.8042 7.96394 14.4273 8.24242 14.166 8.60353C13.9046 8.96464 13.7716 9.39078 13.7849 9.82369C13.7983 10.2566 13.9575 10.6752 14.2407 11.0222C14.5239 11.3693 14.9174 11.6278 15.3673 11.7626C15.8433 11.9055 16.1117 12.3889 15.9554 12.8244C15.5492 13.9526 14.9648 14.9943 14.2728 15.835C13.5891 16.6656 12.7546 17.355 11.8256 17.6921C11.219 17.9107 10.5684 17.8291 9.94625 17.6879L9.57683 17.5979L9.0282 17.4525C8.77916 17.3861 8.52276 17.3289 8.27096 17.3289C8.01824 17.3289 7.76277 17.3861 7.51373 17.4525L6.9651 17.5979L6.59567 17.6879C5.97353 17.8291 5.32197 17.9115 4.71637 17.6921C3.54651 17.2684 2.5145 16.2797 1.73429 15.1136C0.889633 13.8295 0.332355 12.4047 0.0948426 10.9218C-0.113765 9.61538 -0.000730756 8.14833 0.660012 6.90744C1.34005 5.62872 2.58618 4.63332 4.4857 4.34075C5.25764 4.22221 5.92114 4.3811 6.45231 4.56354L6.75649 4.67283L7.29317 4.87544C7.66076 5.00743 7.95024 5.08478 8.27096 5.08478C8.59077 5.08478 8.88116 5.00743 9.24875 4.87544ZM8.05776 1.58237C8.95468 0.760996 10.3322 0.690377 10.6566 0.987989C10.9819 1.28476 10.9047 2.54499 10.0069 3.36552C9.10999 4.18606 7.73244 4.25668 7.40805 3.95991C7.08273 3.66314 7.15992 2.40291 8.05776 1.58237Z" fill="#3262AC"></path></svg>
                            <span><a href="https://fpa.ru/2ndflgosuslugi-apple/">Инструкция</a>, как заказать справку 2-НДФЛ через приложение Госуслуги на iOS</span>
                        </div>
                        <div class="link-item">
                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.9325 4.90709C2.99381 4.87211 3.06112 4.85011 3.13058 4.84233C3.20004 4.83456 3.27028 4.84116 3.33729 4.86178C3.40431 4.8824 3.46677 4.91661 3.5211 4.96248C3.57543 5.00834 3.62057 5.06494 3.65394 5.12904L5.01713 7.73918C6.12696 7.28626 7.30847 7.05549 8.5 7.0589C9.69153 7.05549 10.873 7.28626 11.9829 7.73918L13.3461 5.12904C13.3784 5.06315 13.423 5.00467 13.4773 4.95706C13.5316 4.90945 13.5944 4.87368 13.6622 4.85184C13.7299 4.83 13.8012 4.82254 13.8717 4.8299C13.9422 4.83726 14.0106 4.85929 14.0729 4.89469C14.1352 4.93009 14.19 4.97815 14.2342 5.03604C14.2784 5.09392 14.3111 5.16046 14.3303 5.23173C14.3495 5.30301 14.3548 5.37757 14.346 5.45104C14.3372 5.52451 14.3144 5.59539 14.2789 5.65951L12.9487 8.20638C15.3797 9.57359 17 12.0272 17 14.8271H0C0 12.0272 1.62031 9.57359 4.05131 8.20638L2.72 5.66061C2.6527 5.5314 2.63727 5.37955 2.67712 5.23846C2.71697 5.09737 2.80883 4.97747 2.9325 4.90709ZM5.3125 12.6076C5.59429 12.6076 5.86454 12.4907 6.0638 12.2826C6.26306 12.0745 6.375 11.7922 6.375 11.4979C6.375 11.2036 6.26306 10.9213 6.0638 10.7132C5.86454 10.5051 5.59429 10.3881 5.3125 10.3881C5.03071 10.3881 4.76046 10.5051 4.5612 10.7132C4.36194 10.9213 4.25 11.2036 4.25 11.4979C4.25 11.7922 4.36194 12.0745 4.5612 12.2826C4.76046 12.4907 5.03071 12.6076 5.3125 12.6076ZM11.6875 12.6076C11.9693 12.6076 12.2395 12.4907 12.4388 12.2826C12.6381 12.0745 12.75 11.7922 12.75 11.4979C12.75 11.2036 12.6381 10.9213 12.4388 10.7132C12.2395 10.5051 11.9693 10.3881 11.6875 10.3881C11.4057 10.3881 11.1355 10.5051 10.9362 10.7132C10.7369 10.9213 10.625 11.2036 10.625 11.4979C10.625 11.7922 10.7369 12.0745 10.9362 12.2826C11.1355 12.4907 11.4057 12.6076 11.6875 12.6076Z" fill="#3262AC"></path></svg>
                            <span><a href="https://fpa.ru/2ndflgosuslugi-android/">Инструкция</a>, как заказать справку 2-НДФЛ через приложение Госуслуги на Android</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pamytka-docs-item" id="pamytka-item-13" data-item-id="13">
            <div class="container">
                <div class="pamytka-text-v2">
                    <p class="title">Копия трудовой книжки</p>
                    <div class="line"></div>
                    <div class="text-additional">
                        <p class="title">Срок изготовления (при отсутствии на руках):</p>
                        <ul>
                            <li>В течение суток при заказе онлайн через <a href="https://www.gosuslugi.ru/" target="_blank">Госуслуги</a></li>
                        </ul>
                        <p class="title">Где получить:</p>
                        <ul>
                            <li>У работодателя <span style="display: block;">Копии всех заполненных страниц с копией следующей (пустой) страницы после отметки о последнем трудоустройстве, заверенная работодателем, если работаете в настоящий момент и обязательно с отметкой “работает по настоящее время”</span></li>
                            <li>На сайте <a href="https://www.gosuslugi.ru/" target="_blank">Госуслуги</a> (доступна выписка из электронной трудовой книжки)<sup>**</sup></li>
                        </ul>
                        <p class="title">Комментарий юриста:</p>
                        <p class="text">Копия документа необходима для проверки статуса официального трудоустройства. Формат ведения ТК (в электронном виде или нет) можно узнать у работодателя</p>
                    </div>
                    <div class="line"></div>
                    <div class="doc-links">
                        <div class="link-item">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.77958 10.0476C7.13445 10.3851 7.13445 10.9391 6.77958 11.2767C6.44201 11.6142 5.88806 11.6142 5.5505 11.2767C4.73981 10.4647 4.28447 9.36429 4.28447 8.21694C4.28447 7.06958 4.73981 5.96913 5.5505 5.15722L8.61454 2.09318C9.42645 1.28249 10.5269 0.827148 11.6743 0.827148C12.8216 0.827148 13.9221 1.28249 14.734 2.09318C15.5447 2.90509 16 4.00554 16 5.15289C16 6.30025 15.5447 7.4007 14.734 8.21261L13.4443 9.50228C13.453 8.79253 13.3404 8.08278 13.0981 7.40765L13.5049 6.99219C13.7475 6.75216 13.9402 6.46639 14.0716 6.15142C14.2031 5.83645 14.2708 5.49853 14.2708 5.15722C14.2708 4.81592 14.2031 4.478 14.0716 4.16303C13.9402 3.84806 13.7475 3.56229 13.5049 3.32226C13.2649 3.07961 12.9791 2.88698 12.6641 2.75551C12.3492 2.62405 12.0112 2.55635 11.6699 2.55635C11.3286 2.55635 10.9907 2.62405 10.6757 2.75551C10.3608 2.88698 10.075 3.07961 9.83496 3.32226L6.77958 6.37765C6.53693 6.61767 6.3443 6.90344 6.21283 7.21841C6.08137 7.53338 6.01367 7.8713 6.01367 8.21261C6.01367 8.55392 6.08137 8.89183 6.21283 9.20681C6.3443 9.52178 6.53693 9.80754 6.77958 10.0476ZM9.22042 6.37765C9.55799 6.04008 10.1119 6.04008 10.4495 6.37765C11.2602 7.18955 11.7155 8.29001 11.7155 9.43736C11.7155 10.5847 11.2602 11.6852 10.4495 12.4971L7.38546 15.5611C6.57355 16.3718 5.4731 16.8271 4.32575 16.8271C3.17839 16.8271 2.07794 16.3718 1.26603 15.5611C0.455339 14.7492 0 13.6488 0 12.5014C0 11.3541 0.455339 10.2536 1.26603 9.44169L2.5557 8.15202C2.54704 8.86177 2.65956 9.57152 2.90192 10.2553L2.49511 10.6621C2.25246 10.9021 2.05983 11.1879 1.92837 11.5029C1.7969 11.8179 1.72921 12.1558 1.72921 12.4971C1.72921 12.8384 1.7969 13.1763 1.92837 13.4913C2.05983 13.8062 2.25246 14.092 2.49511 14.332C2.73514 14.5747 3.02091 14.7673 3.33588 14.8988C3.65085 15.0303 3.98877 15.0979 4.33007 15.0979C4.67138 15.0979 5.0093 15.0303 5.32427 14.8988C5.63924 14.7673 5.92501 14.5747 6.16504 14.332L9.22042 11.2767C9.46307 11.0366 9.6557 10.7509 9.78717 10.4359C9.91864 10.1209 9.98633 9.783 9.98633 9.44169C9.98633 9.10038 9.91864 8.76246 9.78717 8.44749C9.6557 8.13252 9.46307 7.84675 9.22042 7.60673C9.13636 7.52795 9.06935 7.43277 9.02354 7.32707C8.97773 7.22137 8.9541 7.10739 8.9541 6.99219C8.9541 6.87698 8.97773 6.763 9.02354 6.6573C9.06935 6.5516 9.13636 6.45642 9.22042 6.37765Z" fill="#3262AC"/></svg>
                            <span><a href="https://fpa.ru/etk/">Инструкция</a>, как заказать выписку через сайт Госуслуги на компьютере</span>
                        </div>
                        <div class="link-item">
                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.24875 4.87544L9.93339 4.61818C10.4894 4.41641 11.208 4.21044 12.0562 4.34075C13.794 4.6081 14.9923 5.46646 15.7064 6.60479C15.9821 7.04364 15.7597 7.62205 15.2451 7.80616C14.8042 7.96394 14.4273 8.24242 14.166 8.60353C13.9046 8.96464 13.7716 9.39078 13.7849 9.82369C13.7983 10.2566 13.9575 10.6752 14.2407 11.0222C14.5239 11.3693 14.9174 11.6278 15.3673 11.7626C15.8433 11.9055 16.1117 12.3889 15.9554 12.8244C15.5492 13.9526 14.9648 14.9943 14.2728 15.835C13.5891 16.6656 12.7546 17.355 11.8256 17.6921C11.219 17.9107 10.5684 17.8291 9.94625 17.6879L9.57683 17.5979L9.0282 17.4525C8.77916 17.3861 8.52276 17.3289 8.27096 17.3289C8.01824 17.3289 7.76277 17.3861 7.51373 17.4525L6.9651 17.5979L6.59567 17.6879C5.97353 17.8291 5.32197 17.9115 4.71637 17.6921C3.54651 17.2684 2.5145 16.2797 1.73429 15.1136C0.889633 13.8295 0.332355 12.4047 0.0948426 10.9218C-0.113765 9.61538 -0.000730756 8.14833 0.660012 6.90744C1.34005 5.62872 2.58618 4.63332 4.4857 4.34075C5.25764 4.22221 5.92114 4.3811 6.45231 4.56354L6.75649 4.67283L7.29317 4.87544C7.66076 5.00743 7.95024 5.08478 8.27096 5.08478C8.59077 5.08478 8.88116 5.00743 9.24875 4.87544ZM8.05776 1.58237C8.95468 0.760996 10.3322 0.690377 10.6566 0.987989C10.9819 1.28476 10.9047 2.54499 10.0069 3.36552C9.10999 4.18606 7.73244 4.25668 7.40805 3.95991C7.08273 3.66314 7.15992 2.40291 8.05776 1.58237Z" fill="#3262AC"></path></svg>
                            <span><a href="https://fpa.ru/etk-apple/">Инструкция</a>, как заказать выписку через приложение Госуслуги на iOS</span>
                        </div>
                        <div class="link-item">
                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.9325 4.90709C2.99381 4.87211 3.06112 4.85011 3.13058 4.84233C3.20004 4.83456 3.27028 4.84116 3.33729 4.86178C3.40431 4.8824 3.46677 4.91661 3.5211 4.96248C3.57543 5.00834 3.62057 5.06494 3.65394 5.12904L5.01713 7.73918C6.12696 7.28626 7.30847 7.05549 8.5 7.0589C9.69153 7.05549 10.873 7.28626 11.9829 7.73918L13.3461 5.12904C13.3784 5.06315 13.423 5.00467 13.4773 4.95706C13.5316 4.90945 13.5944 4.87368 13.6622 4.85184C13.7299 4.83 13.8012 4.82254 13.8717 4.8299C13.9422 4.83726 14.0106 4.85929 14.0729 4.89469C14.1352 4.93009 14.19 4.97815 14.2342 5.03604C14.2784 5.09392 14.3111 5.16046 14.3303 5.23173C14.3495 5.30301 14.3548 5.37757 14.346 5.45104C14.3372 5.52451 14.3144 5.59539 14.2789 5.65951L12.9487 8.20638C15.3797 9.57359 17 12.0272 17 14.8271H0C0 12.0272 1.62031 9.57359 4.05131 8.20638L2.72 5.66061C2.6527 5.5314 2.63727 5.37955 2.67712 5.23846C2.71697 5.09737 2.80883 4.97747 2.9325 4.90709ZM5.3125 12.6076C5.59429 12.6076 5.86454 12.4907 6.0638 12.2826C6.26306 12.0745 6.375 11.7922 6.375 11.4979C6.375 11.2036 6.26306 10.9213 6.0638 10.7132C5.86454 10.5051 5.59429 10.3881 5.3125 10.3881C5.03071 10.3881 4.76046 10.5051 4.5612 10.7132C4.36194 10.9213 4.25 11.2036 4.25 11.4979C4.25 11.7922 4.36194 12.0745 4.5612 12.2826C4.76046 12.4907 5.03071 12.6076 5.3125 12.6076ZM11.6875 12.6076C11.9693 12.6076 12.2395 12.4907 12.4388 12.2826C12.6381 12.0745 12.75 11.7922 12.75 11.4979C12.75 11.2036 12.6381 10.9213 12.4388 10.7132C12.2395 10.5051 11.9693 10.3881 11.6875 10.3881C11.4057 10.3881 11.1355 10.5051 10.9362 10.7132C10.7369 10.9213 10.625 11.2036 10.625 11.4979C10.625 11.7922 10.7369 12.0745 10.9362 12.2826C11.1355 12.4907 11.4057 12.6076 11.6875 12.6076Z" fill="#3262AC"></path></svg>
                            <span><a href="https://fpa.ru/etk-android/">Инструкция</a>, как заказать выписку через приложение Госуслуги на Android</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pamytka-docs-item" id="pamytka-item-14" data-item-id="14">
            <div class="container">
                <div class="pamytka-text-v2">
                    <p class="title">Выписка из индивидуального лицевого счета застрахованного лица (форма СЗИ-6)</p>
                    <div class="line"></div>
                    <div class="text-additional">
                        <p class="title">Срок изготовления (при отсутствии на руках):</p>
                        <ul>
                            <li>В течение суток при заказе онлайн</li>
                        </ul>
                        <p class="title">Где получить:</p>
                        <ul>
                            <li>В МФЦ</li>
                            <li>На сайте <a href="https://www.gosuslugi.ru/" target="_blank">Госуслуги</a><sup>**</sup></li>
                        </ul>
                        <p class="title">Комментарий юриста:</p>
                        <p class="text">Справка необходима для проверки отчислений в фонд с официального дохода за последние 3 года</p>
                    </div>
                    <div class="line"></div>
                    <div class="doc-links">
                        <div class="link-item">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.77958 10.0476C7.13445 10.3851 7.13445 10.9391 6.77958 11.2767C6.44201 11.6142 5.88806 11.6142 5.5505 11.2767C4.73981 10.4647 4.28447 9.36429 4.28447 8.21694C4.28447 7.06958 4.73981 5.96913 5.5505 5.15722L8.61454 2.09318C9.42645 1.28249 10.5269 0.827148 11.6743 0.827148C12.8216 0.827148 13.9221 1.28249 14.734 2.09318C15.5447 2.90509 16 4.00554 16 5.15289C16 6.30025 15.5447 7.4007 14.734 8.21261L13.4443 9.50228C13.453 8.79253 13.3404 8.08278 13.0981 7.40765L13.5049 6.99219C13.7475 6.75216 13.9402 6.46639 14.0716 6.15142C14.2031 5.83645 14.2708 5.49853 14.2708 5.15722C14.2708 4.81592 14.2031 4.478 14.0716 4.16303C13.9402 3.84806 13.7475 3.56229 13.5049 3.32226C13.2649 3.07961 12.9791 2.88698 12.6641 2.75551C12.3492 2.62405 12.0112 2.55635 11.6699 2.55635C11.3286 2.55635 10.9907 2.62405 10.6757 2.75551C10.3608 2.88698 10.075 3.07961 9.83496 3.32226L6.77958 6.37765C6.53693 6.61767 6.3443 6.90344 6.21283 7.21841C6.08137 7.53338 6.01367 7.8713 6.01367 8.21261C6.01367 8.55392 6.08137 8.89183 6.21283 9.20681C6.3443 9.52178 6.53693 9.80754 6.77958 10.0476ZM9.22042 6.37765C9.55799 6.04008 10.1119 6.04008 10.4495 6.37765C11.2602 7.18955 11.7155 8.29001 11.7155 9.43736C11.7155 10.5847 11.2602 11.6852 10.4495 12.4971L7.38546 15.5611C6.57355 16.3718 5.4731 16.8271 4.32575 16.8271C3.17839 16.8271 2.07794 16.3718 1.26603 15.5611C0.455339 14.7492 0 13.6488 0 12.5014C0 11.3541 0.455339 10.2536 1.26603 9.44169L2.5557 8.15202C2.54704 8.86177 2.65956 9.57152 2.90192 10.2553L2.49511 10.6621C2.25246 10.9021 2.05983 11.1879 1.92837 11.5029C1.7969 11.8179 1.72921 12.1558 1.72921 12.4971C1.72921 12.8384 1.7969 13.1763 1.92837 13.4913C2.05983 13.8062 2.25246 14.092 2.49511 14.332C2.73514 14.5747 3.02091 14.7673 3.33588 14.8988C3.65085 15.0303 3.98877 15.0979 4.33007 15.0979C4.67138 15.0979 5.0093 15.0303 5.32427 14.8988C5.63924 14.7673 5.92501 14.5747 6.16504 14.332L9.22042 11.2767C9.46307 11.0366 9.6557 10.7509 9.78717 10.4359C9.91864 10.1209 9.98633 9.783 9.98633 9.44169C9.98633 9.10038 9.91864 8.76246 9.78717 8.44749C9.6557 8.13252 9.46307 7.84675 9.22042 7.60673C9.13636 7.52795 9.06935 7.43277 9.02354 7.32707C8.97773 7.22137 8.9541 7.10739 8.9541 6.99219C8.9541 6.87698 8.97773 6.763 9.02354 6.6573C9.06935 6.5516 9.13636 6.45642 9.22042 6.37765Z" fill="#3262AC"/></svg>
                            <span><a href="https://fpa.ru/szisfr/">Инструкция</a>, как заказать выписку по форме СЗИ-6 через сайт Госуслуги на компьютере</span>
                        </div>
                        <div class="link-item">
                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.24875 4.87544L9.93339 4.61818C10.4894 4.41641 11.208 4.21044 12.0562 4.34075C13.794 4.6081 14.9923 5.46646 15.7064 6.60479C15.9821 7.04364 15.7597 7.62205 15.2451 7.80616C14.8042 7.96394 14.4273 8.24242 14.166 8.60353C13.9046 8.96464 13.7716 9.39078 13.7849 9.82369C13.7983 10.2566 13.9575 10.6752 14.2407 11.0222C14.5239 11.3693 14.9174 11.6278 15.3673 11.7626C15.8433 11.9055 16.1117 12.3889 15.9554 12.8244C15.5492 13.9526 14.9648 14.9943 14.2728 15.835C13.5891 16.6656 12.7546 17.355 11.8256 17.6921C11.219 17.9107 10.5684 17.8291 9.94625 17.6879L9.57683 17.5979L9.0282 17.4525C8.77916 17.3861 8.52276 17.3289 8.27096 17.3289C8.01824 17.3289 7.76277 17.3861 7.51373 17.4525L6.9651 17.5979L6.59567 17.6879C5.97353 17.8291 5.32197 17.9115 4.71637 17.6921C3.54651 17.2684 2.5145 16.2797 1.73429 15.1136C0.889633 13.8295 0.332355 12.4047 0.0948426 10.9218C-0.113765 9.61538 -0.000730756 8.14833 0.660012 6.90744C1.34005 5.62872 2.58618 4.63332 4.4857 4.34075C5.25764 4.22221 5.92114 4.3811 6.45231 4.56354L6.75649 4.67283L7.29317 4.87544C7.66076 5.00743 7.95024 5.08478 8.27096 5.08478C8.59077 5.08478 8.88116 5.00743 9.24875 4.87544ZM8.05776 1.58237C8.95468 0.760996 10.3322 0.690377 10.6566 0.987989C10.9819 1.28476 10.9047 2.54499 10.0069 3.36552C9.10999 4.18606 7.73244 4.25668 7.40805 3.95991C7.08273 3.66314 7.15992 2.40291 8.05776 1.58237Z" fill="#3262AC"></path></svg>
                            <span><a href="https://fpa.ru/szisfr-apple/">Инструкция</a>, как заказать выписку по форме СЗИ-6 через приложение Госуслуги на iOS</span>
                        </div>
                        <div class="link-item">
                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.9325 4.90709C2.99381 4.87211 3.06112 4.85011 3.13058 4.84233C3.20004 4.83456 3.27028 4.84116 3.33729 4.86178C3.40431 4.8824 3.46677 4.91661 3.5211 4.96248C3.57543 5.00834 3.62057 5.06494 3.65394 5.12904L5.01713 7.73918C6.12696 7.28626 7.30847 7.05549 8.5 7.0589C9.69153 7.05549 10.873 7.28626 11.9829 7.73918L13.3461 5.12904C13.3784 5.06315 13.423 5.00467 13.4773 4.95706C13.5316 4.90945 13.5944 4.87368 13.6622 4.85184C13.7299 4.83 13.8012 4.82254 13.8717 4.8299C13.9422 4.83726 14.0106 4.85929 14.0729 4.89469C14.1352 4.93009 14.19 4.97815 14.2342 5.03604C14.2784 5.09392 14.3111 5.16046 14.3303 5.23173C14.3495 5.30301 14.3548 5.37757 14.346 5.45104C14.3372 5.52451 14.3144 5.59539 14.2789 5.65951L12.9487 8.20638C15.3797 9.57359 17 12.0272 17 14.8271H0C0 12.0272 1.62031 9.57359 4.05131 8.20638L2.72 5.66061C2.6527 5.5314 2.63727 5.37955 2.67712 5.23846C2.71697 5.09737 2.80883 4.97747 2.9325 4.90709ZM5.3125 12.6076C5.59429 12.6076 5.86454 12.4907 6.0638 12.2826C6.26306 12.0745 6.375 11.7922 6.375 11.4979C6.375 11.2036 6.26306 10.9213 6.0638 10.7132C5.86454 10.5051 5.59429 10.3881 5.3125 10.3881C5.03071 10.3881 4.76046 10.5051 4.5612 10.7132C4.36194 10.9213 4.25 11.2036 4.25 11.4979C4.25 11.7922 4.36194 12.0745 4.5612 12.2826C4.76046 12.4907 5.03071 12.6076 5.3125 12.6076ZM11.6875 12.6076C11.9693 12.6076 12.2395 12.4907 12.4388 12.2826C12.6381 12.0745 12.75 11.7922 12.75 11.4979C12.75 11.2036 12.6381 10.9213 12.4388 10.7132C12.2395 10.5051 11.9693 10.3881 11.6875 10.3881C11.4057 10.3881 11.1355 10.5051 10.9362 10.7132C10.7369 10.9213 10.625 11.2036 10.625 11.4979C10.625 11.7922 10.7369 12.0745 10.9362 12.2826C11.1355 12.4907 11.4057 12.6076 11.6875 12.6076Z" fill="#3262AC"></path></svg>
                            <span><a href="https://fpa.ru/szisfr-android/">Инструкция</a>, как заказать выписку по форме СЗИ-6 через приложение Госуслуги на Android</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pamytka-docs-item" id="pamytka-item-15" data-item-id="15">
            <div class="container">
                <div class="pamytka-text-v2">
                    <p class="title">Справка из ГИБДД МВД России о наличии (отсутствии) зарегистрированных транспортных средств за последние 3 года</p>
                    <div class="line"></div>
                    <div class="text-additional">
                        <p class="title">Срок изготовления (при отсутствии на руках):</p>
                        <ul>
                            <li>В течение суток при заказе онлайн через <a href="https://www.gosuslugi.ru/" target="_blank">Госуслуги</a></li>
                        </ul>
                        <p class="title">Где получить:</p>
                        <ul>
                            <li>Лично в ГИБДД</li>
                            <li>На сайте <a href="https://xn--90adear.xn--p1ai/" target="_blank">ГИБДД</a></li>
                        </ul>
                        <p class="title">Комментарий юриста:</p>
                        <p class="text">Документ заказывается по отдельному запросу вашего юриста, если за последние 3 года вы совершали сделки с движимым имуществом</p>
                    </div>
                    <div class="line"></div>
                    <div class="doc-links">
                        <div class="link-item">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.77958 10.0476C7.13445 10.3851 7.13445 10.9391 6.77958 11.2767C6.44201 11.6142 5.88806 11.6142 5.5505 11.2767C4.73981 10.4647 4.28447 9.36429 4.28447 8.21694C4.28447 7.06958 4.73981 5.96913 5.5505 5.15722L8.61454 2.09318C9.42645 1.28249 10.5269 0.827148 11.6743 0.827148C12.8216 0.827148 13.9221 1.28249 14.734 2.09318C15.5447 2.90509 16 4.00554 16 5.15289C16 6.30025 15.5447 7.4007 14.734 8.21261L13.4443 9.50228C13.453 8.79253 13.3404 8.08278 13.0981 7.40765L13.5049 6.99219C13.7475 6.75216 13.9402 6.46639 14.0716 6.15142C14.2031 5.83645 14.2708 5.49853 14.2708 5.15722C14.2708 4.81592 14.2031 4.478 14.0716 4.16303C13.9402 3.84806 13.7475 3.56229 13.5049 3.32226C13.2649 3.07961 12.9791 2.88698 12.6641 2.75551C12.3492 2.62405 12.0112 2.55635 11.6699 2.55635C11.3286 2.55635 10.9907 2.62405 10.6757 2.75551C10.3608 2.88698 10.075 3.07961 9.83496 3.32226L6.77958 6.37765C6.53693 6.61767 6.3443 6.90344 6.21283 7.21841C6.08137 7.53338 6.01367 7.8713 6.01367 8.21261C6.01367 8.55392 6.08137 8.89183 6.21283 9.20681C6.3443 9.52178 6.53693 9.80754 6.77958 10.0476ZM9.22042 6.37765C9.55799 6.04008 10.1119 6.04008 10.4495 6.37765C11.2602 7.18955 11.7155 8.29001 11.7155 9.43736C11.7155 10.5847 11.2602 11.6852 10.4495 12.4971L7.38546 15.5611C6.57355 16.3718 5.4731 16.8271 4.32575 16.8271C3.17839 16.8271 2.07794 16.3718 1.26603 15.5611C0.455339 14.7492 0 13.6488 0 12.5014C0 11.3541 0.455339 10.2536 1.26603 9.44169L2.5557 8.15202C2.54704 8.86177 2.65956 9.57152 2.90192 10.2553L2.49511 10.6621C2.25246 10.9021 2.05983 11.1879 1.92837 11.5029C1.7969 11.8179 1.72921 12.1558 1.72921 12.4971C1.72921 12.8384 1.7969 13.1763 1.92837 13.4913C2.05983 13.8062 2.25246 14.092 2.49511 14.332C2.73514 14.5747 3.02091 14.7673 3.33588 14.8988C3.65085 15.0303 3.98877 15.0979 4.33007 15.0979C4.67138 15.0979 5.0093 15.0303 5.32427 14.8988C5.63924 14.7673 5.92501 14.5747 6.16504 14.332L9.22042 11.2767C9.46307 11.0366 9.6557 10.7509 9.78717 10.4359C9.91864 10.1209 9.98633 9.783 9.98633 9.44169C9.98633 9.10038 9.91864 8.76246 9.78717 8.44749C9.6557 8.13252 9.46307 7.84675 9.22042 7.60673C9.13636 7.52795 9.06935 7.43277 9.02354 7.32707C8.97773 7.22137 8.9541 7.10739 8.9541 6.99219C8.9541 6.87698 8.97773 6.763 9.02354 6.6573C9.06935 6.5516 9.13636 6.45642 9.22042 6.37765Z" fill="#3262AC"/></svg>
                            <span><a href="https://fpa.ru/gibdd/">Инструкция</a>, как заказать справку через сайт ГИБДД на компьютере</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pamytka-docs-item" id="pamytka-item-16" data-item-id="16">
            <div class="container">
                <div class="pamytka-text-v2">
                    <p class="title">Выписка из ЕГРН о правах на имевшиеся (имеющиеся) объекты недвижимости на территории РФ</p>
                    <div class="line"></div>
                    <div class="text-additional">
                        <p class="title">Срок изготовления (при отсутствии на руках):</p>
                        <ul>
                            <li>До 3-х рабочих дней</li>
                        </ul>
                        <p class="title">Где получить:</p>
                        <ul>
                            <li>В МФЦ</li>
                            <li>На сайте <a href="https://www.gosuslugi.ru/" target="_blank">Госуслуги</a><sup>**</sup></li>
                        </ul>
                        <p class="title">Комментарий юриста:</p>
                        <p class="text">
                            <span style="display: block;">Документ заказывается по отдельному запросу вашего юриста с целью выявления недвижимого имущества. Срок, за который необходима справка, отражен в вашем индивидуальном списке документов.</span>
                            <br />
                            <span style="display: block;">Рекомендуем заказывать справку через Госуслуги, так как документ платный и стоимость при заказе онлайн ниже.</span>
                        </p>
                    </div>
                    <div class="line"></div>
                    <div class="doc-links">
                        <div class="link-item">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.77958 10.0476C7.13445 10.3851 7.13445 10.9391 6.77958 11.2767C6.44201 11.6142 5.88806 11.6142 5.5505 11.2767C4.73981 10.4647 4.28447 9.36429 4.28447 8.21694C4.28447 7.06958 4.73981 5.96913 5.5505 5.15722L8.61454 2.09318C9.42645 1.28249 10.5269 0.827148 11.6743 0.827148C12.8216 0.827148 13.9221 1.28249 14.734 2.09318C15.5447 2.90509 16 4.00554 16 5.15289C16 6.30025 15.5447 7.4007 14.734 8.21261L13.4443 9.50228C13.453 8.79253 13.3404 8.08278 13.0981 7.40765L13.5049 6.99219C13.7475 6.75216 13.9402 6.46639 14.0716 6.15142C14.2031 5.83645 14.2708 5.49853 14.2708 5.15722C14.2708 4.81592 14.2031 4.478 14.0716 4.16303C13.9402 3.84806 13.7475 3.56229 13.5049 3.32226C13.2649 3.07961 12.9791 2.88698 12.6641 2.75551C12.3492 2.62405 12.0112 2.55635 11.6699 2.55635C11.3286 2.55635 10.9907 2.62405 10.6757 2.75551C10.3608 2.88698 10.075 3.07961 9.83496 3.32226L6.77958 6.37765C6.53693 6.61767 6.3443 6.90344 6.21283 7.21841C6.08137 7.53338 6.01367 7.8713 6.01367 8.21261C6.01367 8.55392 6.08137 8.89183 6.21283 9.20681C6.3443 9.52178 6.53693 9.80754 6.77958 10.0476ZM9.22042 6.37765C9.55799 6.04008 10.1119 6.04008 10.4495 6.37765C11.2602 7.18955 11.7155 8.29001 11.7155 9.43736C11.7155 10.5847 11.2602 11.6852 10.4495 12.4971L7.38546 15.5611C6.57355 16.3718 5.4731 16.8271 4.32575 16.8271C3.17839 16.8271 2.07794 16.3718 1.26603 15.5611C0.455339 14.7492 0 13.6488 0 12.5014C0 11.3541 0.455339 10.2536 1.26603 9.44169L2.5557 8.15202C2.54704 8.86177 2.65956 9.57152 2.90192 10.2553L2.49511 10.6621C2.25246 10.9021 2.05983 11.1879 1.92837 11.5029C1.7969 11.8179 1.72921 12.1558 1.72921 12.4971C1.72921 12.8384 1.7969 13.1763 1.92837 13.4913C2.05983 13.8062 2.25246 14.092 2.49511 14.332C2.73514 14.5747 3.02091 14.7673 3.33588 14.8988C3.65085 15.0303 3.98877 15.0979 4.33007 15.0979C4.67138 15.0979 5.0093 15.0303 5.32427 14.8988C5.63924 14.7673 5.92501 14.5747 6.16504 14.332L9.22042 11.2767C9.46307 11.0366 9.6557 10.7509 9.78717 10.4359C9.91864 10.1209 9.98633 9.783 9.98633 9.44169C9.98633 9.10038 9.91864 8.76246 9.78717 8.44749C9.6557 8.13252 9.46307 7.84675 9.22042 7.60673C9.13636 7.52795 9.06935 7.43277 9.02354 7.32707C8.97773 7.22137 8.9541 7.10739 8.9541 6.99219C8.9541 6.87698 8.97773 6.763 9.02354 6.6573C9.06935 6.5516 9.13636 6.45642 9.22042 6.37765Z" fill="#3262AC"/></svg>
                            <span><a href="https://fpa.ru/egrngosuslugi/">Инструкция</a>, как заказать выписку из ЕГРН через сайт Госуслуги на компьютере</span>
                        </div>
                        <div class="link-item">
                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.24875 4.87544L9.93339 4.61818C10.4894 4.41641 11.208 4.21044 12.0562 4.34075C13.794 4.6081 14.9923 5.46646 15.7064 6.60479C15.9821 7.04364 15.7597 7.62205 15.2451 7.80616C14.8042 7.96394 14.4273 8.24242 14.166 8.60353C13.9046 8.96464 13.7716 9.39078 13.7849 9.82369C13.7983 10.2566 13.9575 10.6752 14.2407 11.0222C14.5239 11.3693 14.9174 11.6278 15.3673 11.7626C15.8433 11.9055 16.1117 12.3889 15.9554 12.8244C15.5492 13.9526 14.9648 14.9943 14.2728 15.835C13.5891 16.6656 12.7546 17.355 11.8256 17.6921C11.219 17.9107 10.5684 17.8291 9.94625 17.6879L9.57683 17.5979L9.0282 17.4525C8.77916 17.3861 8.52276 17.3289 8.27096 17.3289C8.01824 17.3289 7.76277 17.3861 7.51373 17.4525L6.9651 17.5979L6.59567 17.6879C5.97353 17.8291 5.32197 17.9115 4.71637 17.6921C3.54651 17.2684 2.5145 16.2797 1.73429 15.1136C0.889633 13.8295 0.332355 12.4047 0.0948426 10.9218C-0.113765 9.61538 -0.000730756 8.14833 0.660012 6.90744C1.34005 5.62872 2.58618 4.63332 4.4857 4.34075C5.25764 4.22221 5.92114 4.3811 6.45231 4.56354L6.75649 4.67283L7.29317 4.87544C7.66076 5.00743 7.95024 5.08478 8.27096 5.08478C8.59077 5.08478 8.88116 5.00743 9.24875 4.87544ZM8.05776 1.58237C8.95468 0.760996 10.3322 0.690377 10.6566 0.987989C10.9819 1.28476 10.9047 2.54499 10.0069 3.36552C9.10999 4.18606 7.73244 4.25668 7.40805 3.95991C7.08273 3.66314 7.15992 2.40291 8.05776 1.58237Z" fill="#3262AC"></path></svg>
                            <span><a href="https://fpa.ru/egrngosuslugi-apple/">Инструкция</a>, как заказать выписку из ЕГРН через приложение Госуслуги на iOS</span>
                        </div>
                        <div class="link-item">
                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.9325 4.90709C2.99381 4.87211 3.06112 4.85011 3.13058 4.84233C3.20004 4.83456 3.27028 4.84116 3.33729 4.86178C3.40431 4.8824 3.46677 4.91661 3.5211 4.96248C3.57543 5.00834 3.62057 5.06494 3.65394 5.12904L5.01713 7.73918C6.12696 7.28626 7.30847 7.05549 8.5 7.0589C9.69153 7.05549 10.873 7.28626 11.9829 7.73918L13.3461 5.12904C13.3784 5.06315 13.423 5.00467 13.4773 4.95706C13.5316 4.90945 13.5944 4.87368 13.6622 4.85184C13.7299 4.83 13.8012 4.82254 13.8717 4.8299C13.9422 4.83726 14.0106 4.85929 14.0729 4.89469C14.1352 4.93009 14.19 4.97815 14.2342 5.03604C14.2784 5.09392 14.3111 5.16046 14.3303 5.23173C14.3495 5.30301 14.3548 5.37757 14.346 5.45104C14.3372 5.52451 14.3144 5.59539 14.2789 5.65951L12.9487 8.20638C15.3797 9.57359 17 12.0272 17 14.8271H0C0 12.0272 1.62031 9.57359 4.05131 8.20638L2.72 5.66061C2.6527 5.5314 2.63727 5.37955 2.67712 5.23846C2.71697 5.09737 2.80883 4.97747 2.9325 4.90709ZM5.3125 12.6076C5.59429 12.6076 5.86454 12.4907 6.0638 12.2826C6.26306 12.0745 6.375 11.7922 6.375 11.4979C6.375 11.2036 6.26306 10.9213 6.0638 10.7132C5.86454 10.5051 5.59429 10.3881 5.3125 10.3881C5.03071 10.3881 4.76046 10.5051 4.5612 10.7132C4.36194 10.9213 4.25 11.2036 4.25 11.4979C4.25 11.7922 4.36194 12.0745 4.5612 12.2826C4.76046 12.4907 5.03071 12.6076 5.3125 12.6076ZM11.6875 12.6076C11.9693 12.6076 12.2395 12.4907 12.4388 12.2826C12.6381 12.0745 12.75 11.7922 12.75 11.4979C12.75 11.2036 12.6381 10.9213 12.4388 10.7132C12.2395 10.5051 11.9693 10.3881 11.6875 10.3881C11.4057 10.3881 11.1355 10.5051 10.9362 10.7132C10.7369 10.9213 10.625 11.2036 10.625 11.4979C10.625 11.7922 10.7369 12.0745 10.9362 12.2826C11.1355 12.4907 11.4057 12.6076 11.6875 12.6076Z" fill="#3262AC"></path></svg>
                            <span><a href="https://fpa.ru/egrngosuslugi-android/">Инструкция</a>, как заказать выписку из ЕГРН через приложение Госуслуги на Android</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pamytka-docs-item" id="pamytka-item-17" data-item-id="17">
            <div class="container">
                <div class="pamytka-text-v2">
                    <p class="title">Выписка из Единого государственного реестра налогоплательщиков (ЕГРН ФНС)</p>
                    <div class="line"></div>
                    <div class="text-additional">
                        <p class="title">Срок изготовления (при отсутствии на руках):</p>
                        <ul>
                            <li>До 5-ти рабочих днейй</li>
                        </ul>
                        <p class="title">Где получить:</p>
                        <ul>
                            <li>Через личный кабинет налогоплательщика по инструкции</li>
                        </ul>
                        <p class="title">Комментарий юриста:</p>
                        <p class="text">Документ необходим для проверки сделок и имущества, зарегистрированного за гражданином за последние 3 года</p>
                    </div>
                    <div class="line"></div>
                    <div class="doc-links">
                        <div class="link-item">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.77958 10.0476C7.13445 10.3851 7.13445 10.9391 6.77958 11.2767C6.44201 11.6142 5.88806 11.6142 5.5505 11.2767C4.73981 10.4647 4.28447 9.36429 4.28447 8.21694C4.28447 7.06958 4.73981 5.96913 5.5505 5.15722L8.61454 2.09318C9.42645 1.28249 10.5269 0.827148 11.6743 0.827148C12.8216 0.827148 13.9221 1.28249 14.734 2.09318C15.5447 2.90509 16 4.00554 16 5.15289C16 6.30025 15.5447 7.4007 14.734 8.21261L13.4443 9.50228C13.453 8.79253 13.3404 8.08278 13.0981 7.40765L13.5049 6.99219C13.7475 6.75216 13.9402 6.46639 14.0716 6.15142C14.2031 5.83645 14.2708 5.49853 14.2708 5.15722C14.2708 4.81592 14.2031 4.478 14.0716 4.16303C13.9402 3.84806 13.7475 3.56229 13.5049 3.32226C13.2649 3.07961 12.9791 2.88698 12.6641 2.75551C12.3492 2.62405 12.0112 2.55635 11.6699 2.55635C11.3286 2.55635 10.9907 2.62405 10.6757 2.75551C10.3608 2.88698 10.075 3.07961 9.83496 3.32226L6.77958 6.37765C6.53693 6.61767 6.3443 6.90344 6.21283 7.21841C6.08137 7.53338 6.01367 7.8713 6.01367 8.21261C6.01367 8.55392 6.08137 8.89183 6.21283 9.20681C6.3443 9.52178 6.53693 9.80754 6.77958 10.0476ZM9.22042 6.37765C9.55799 6.04008 10.1119 6.04008 10.4495 6.37765C11.2602 7.18955 11.7155 8.29001 11.7155 9.43736C11.7155 10.5847 11.2602 11.6852 10.4495 12.4971L7.38546 15.5611C6.57355 16.3718 5.4731 16.8271 4.32575 16.8271C3.17839 16.8271 2.07794 16.3718 1.26603 15.5611C0.455339 14.7492 0 13.6488 0 12.5014C0 11.3541 0.455339 10.2536 1.26603 9.44169L2.5557 8.15202C2.54704 8.86177 2.65956 9.57152 2.90192 10.2553L2.49511 10.6621C2.25246 10.9021 2.05983 11.1879 1.92837 11.5029C1.7969 11.8179 1.72921 12.1558 1.72921 12.4971C1.72921 12.8384 1.7969 13.1763 1.92837 13.4913C2.05983 13.8062 2.25246 14.092 2.49511 14.332C2.73514 14.5747 3.02091 14.7673 3.33588 14.8988C3.65085 15.0303 3.98877 15.0979 4.33007 15.0979C4.67138 15.0979 5.0093 15.0303 5.32427 14.8988C5.63924 14.7673 5.92501 14.5747 6.16504 14.332L9.22042 11.2767C9.46307 11.0366 9.6557 10.7509 9.78717 10.4359C9.91864 10.1209 9.98633 9.783 9.98633 9.44169C9.98633 9.10038 9.91864 8.76246 9.78717 8.44749C9.6557 8.13252 9.46307 7.84675 9.22042 7.60673C9.13636 7.52795 9.06935 7.43277 9.02354 7.32707C8.97773 7.22137 8.9541 7.10739 8.9541 6.99219C8.9541 6.87698 8.97773 6.763 9.02354 6.6573C9.06935 6.5516 9.13636 6.45642 9.22042 6.37765Z" fill="#3262AC"/></svg>
                            <span><a href="https://fpa.ru/egrnnalogi/">Инструкция</a>, как заказать выписку из ЕГРН ФНС через сайт ФНС на компьютере</span>
                        </div>
                        <div class="link-item">
                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.24875 4.87544L9.93339 4.61818C10.4894 4.41641 11.208 4.21044 12.0562 4.34075C13.794 4.6081 14.9923 5.46646 15.7064 6.60479C15.9821 7.04364 15.7597 7.62205 15.2451 7.80616C14.8042 7.96394 14.4273 8.24242 14.166 8.60353C13.9046 8.96464 13.7716 9.39078 13.7849 9.82369C13.7983 10.2566 13.9575 10.6752 14.2407 11.0222C14.5239 11.3693 14.9174 11.6278 15.3673 11.7626C15.8433 11.9055 16.1117 12.3889 15.9554 12.8244C15.5492 13.9526 14.9648 14.9943 14.2728 15.835C13.5891 16.6656 12.7546 17.355 11.8256 17.6921C11.219 17.9107 10.5684 17.8291 9.94625 17.6879L9.57683 17.5979L9.0282 17.4525C8.77916 17.3861 8.52276 17.3289 8.27096 17.3289C8.01824 17.3289 7.76277 17.3861 7.51373 17.4525L6.9651 17.5979L6.59567 17.6879C5.97353 17.8291 5.32197 17.9115 4.71637 17.6921C3.54651 17.2684 2.5145 16.2797 1.73429 15.1136C0.889633 13.8295 0.332355 12.4047 0.0948426 10.9218C-0.113765 9.61538 -0.000730756 8.14833 0.660012 6.90744C1.34005 5.62872 2.58618 4.63332 4.4857 4.34075C5.25764 4.22221 5.92114 4.3811 6.45231 4.56354L6.75649 4.67283L7.29317 4.87544C7.66076 5.00743 7.95024 5.08478 8.27096 5.08478C8.59077 5.08478 8.88116 5.00743 9.24875 4.87544ZM8.05776 1.58237C8.95468 0.760996 10.3322 0.690377 10.6566 0.987989C10.9819 1.28476 10.9047 2.54499 10.0069 3.36552C9.10999 4.18606 7.73244 4.25668 7.40805 3.95991C7.08273 3.66314 7.15992 2.40291 8.05776 1.58237Z" fill="#3262AC"></path></svg>
                            <span><a href="https://fpa.ru/egrnnalogi-apple/">Инструкция</a>, как заказать выписку из ЕГРН ФНС через приложение Налог ФЛ на iOS</span>
                        </div>
                        <div class="link-item">
                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.9325 4.90709C2.99381 4.87211 3.06112 4.85011 3.13058 4.84233C3.20004 4.83456 3.27028 4.84116 3.33729 4.86178C3.40431 4.8824 3.46677 4.91661 3.5211 4.96248C3.57543 5.00834 3.62057 5.06494 3.65394 5.12904L5.01713 7.73918C6.12696 7.28626 7.30847 7.05549 8.5 7.0589C9.69153 7.05549 10.873 7.28626 11.9829 7.73918L13.3461 5.12904C13.3784 5.06315 13.423 5.00467 13.4773 4.95706C13.5316 4.90945 13.5944 4.87368 13.6622 4.85184C13.7299 4.83 13.8012 4.82254 13.8717 4.8299C13.9422 4.83726 14.0106 4.85929 14.0729 4.89469C14.1352 4.93009 14.19 4.97815 14.2342 5.03604C14.2784 5.09392 14.3111 5.16046 14.3303 5.23173C14.3495 5.30301 14.3548 5.37757 14.346 5.45104C14.3372 5.52451 14.3144 5.59539 14.2789 5.65951L12.9487 8.20638C15.3797 9.57359 17 12.0272 17 14.8271H0C0 12.0272 1.62031 9.57359 4.05131 8.20638L2.72 5.66061C2.6527 5.5314 2.63727 5.37955 2.67712 5.23846C2.71697 5.09737 2.80883 4.97747 2.9325 4.90709ZM5.3125 12.6076C5.59429 12.6076 5.86454 12.4907 6.0638 12.2826C6.26306 12.0745 6.375 11.7922 6.375 11.4979C6.375 11.2036 6.26306 10.9213 6.0638 10.7132C5.86454 10.5051 5.59429 10.3881 5.3125 10.3881C5.03071 10.3881 4.76046 10.5051 4.5612 10.7132C4.36194 10.9213 4.25 11.2036 4.25 11.4979C4.25 11.7922 4.36194 12.0745 4.5612 12.2826C4.76046 12.4907 5.03071 12.6076 5.3125 12.6076ZM11.6875 12.6076C11.9693 12.6076 12.2395 12.4907 12.4388 12.2826C12.6381 12.0745 12.75 11.7922 12.75 11.4979C12.75 11.2036 12.6381 10.9213 12.4388 10.7132C12.2395 10.5051 11.9693 10.3881 11.6875 10.3881C11.4057 10.3881 11.1355 10.5051 10.9362 10.7132C10.7369 10.9213 10.625 11.2036 10.625 11.4979C10.625 11.7922 10.7369 12.0745 10.9362 12.2826C11.1355 12.4907 11.4057 12.6076 11.6875 12.6076Z" fill="#3262AC"></path></svg>
                            <span><a href="https://fpa.ru/egrnnalogi-android/">Инструкция</a>, как заказать выписку из ЕГРН ФНС через приложение Налог ФЛ на Android</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pamytka-docs-item" style="padding: 40px 0;">
            <div class="container">
                <div class="pamytka-text-v2">
                    <div class="text-additional">
                        <p class="text" style="margin: 0;">
                            <span style="display: block;font-size: 0.875em;margin-bottom: 12px;"><sup>*</sup> Возможность получения документа в приложении или на сайте в личном кабинете предусмотрена не во всех банках</span>
                            <span style="display: block;font-size: 0.875em;"><sup>**</sup> Чтобы зарегистрироваться и верифицировать аккаунт на Госуслугах, можно ознакомиться с подробной <a href="https://www.gosuslugi.ru/help/faq/popular/1" target="_blank">инструкцией</a> на сайте Госуслуг.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="pamytka-docs-item">
            <div class="container">
                <div class="pamytka-text">
                    <p class="title">Ответы на часто задаваемые вопросы</p>
                    <p class="text">В начале процедуры у клиентов возникают вопросы на которые мы ответили максимально подробно.</p>
                    <div class="video-cnt">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/3M0u8naPz6c?si=MBHB5pvwo3rnWRN1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <div class="caption">
                            <p class="name">Боднар Евгения</p>
                            <p class="post">Руководитель отдела сопровождения клиентов по кредитам и долгам</p>
                        </div>
                    </div>
                    <p class="text">Для вашего удобства мы прикрепляем памятку с рекомендациями, где можно получить указанные документы. Обращаем ваше внимание, что большую часть документов удобнее получить онлайн через личные кабинеты или сайт Госуслуги.</p>
                </div>
                <div class="faq-cnt">
                    <div class="faq-item expanded">
                        <div class="faq-item-title">
                            <div class="number">1</div>
                            <div class="title">Все ли 16 документов из перечня выше необходимо собрать?</div>
                            <div class="arrow">
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.44811 0.334581C3.69466 -0.111527 4.30535 -0.111526 4.55189 0.334582L7.912 6.41439C8.16047 6.86397 7.85323 7.42857 7.36011 7.42857L0.639891 7.42857C0.146771 7.42857 -0.160472 6.86397 0.0879975 6.41439L3.44811 0.334581Z" fill="#B5BDD1"/></svg>
                            </div>
                        </div>
                        <div class="faq-item-content" style="display: block;">
                            <p>Необходимо запрашивать только те документы, которые перечислены в индивидуальном, сформированном именно для вас, списке.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-item-title">
                            <div class="number">2</div>
                            <div class="title">А что делать, если я никогда не работал/не работал официально?</div>
                            <div class="arrow">
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.44811 0.334581C3.69466 -0.111527 4.30535 -0.111526 4.55189 0.334582L7.912 6.41439C8.16047 6.86397 7.85323 7.42857 7.36011 7.42857L0.639891 7.42857C0.146771 7.42857 -0.160472 6.86397 0.0879975 6.41439L3.44811 0.334581Z" fill="#B5BDD1"/></svg>
                            </div>
                        </div>
                        <div class="faq-item-content">
                            <p>В таком случае нет ни необходимости, ни возможности запрашивать справку по форме 2-НДФЛ.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-item-title">
                            <div class="number">3</div>
                            <div class="title">Почему доверенность оформлена на 3 года? Моя процедура будет столько длиться?</div>
                            <div class="arrow">
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.44811 0.334581C3.69466 -0.111527 4.30535 -0.111526 4.55189 0.334582L7.912 6.41439C8.16047 6.86397 7.85323 7.42857 7.36011 7.42857L0.639891 7.42857C0.146771 7.42857 -0.160472 6.86397 0.0879975 6.41439L3.44811 0.334581Z" fill="#B5BDD1"/></svg>
                            </div>
                        </div>
                        <div class="faq-item-content">
                            <p>Доверенность оформляется на максимально возможный срок с целью предусмотреть возможные форс-мажорные обстоятельства. По окончании процедуры вы сможете забрать доверенность.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-item-title">
                            <div class="number">4</div>
                            <div class="title">Вижу документ о доходах ИП. А если у меня нет ИП?</div>
                            <div class="arrow">
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.44811 0.334581C3.69466 -0.111527 4.30535 -0.111526 4.55189 0.334582L7.912 6.41439C8.16047 6.86397 7.85323 7.42857 7.36011 7.42857L0.639891 7.42857C0.146771 7.42857 -0.160472 6.86397 0.0879975 6.41439L3.44811 0.334581Z" fill="#B5BDD1"/></svg>
                            </div>
                        </div>
                        <div class="faq-item-content">
                            <p>Документ нужен только в том случае, если вы были индивидуальным предпринимателем в течение последних 3-х лет. В таком случае, нет ни необходимости, ни возможности запрашивать декларацию о доходах ИП.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-item-title">
                            <div class="number">5</div>
                            <div class="title">А что, юристы не будут собирать все документы за меня?</div>
                            <div class="arrow">
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.44811 0.334581C3.69466 -0.111527 4.30535 -0.111526 4.55189 0.334582L7.912 6.41439C8.16047 6.86397 7.85323 7.42857 7.36011 7.42857L0.639891 7.42857C0.146771 7.42857 -0.160472 6.86397 0.0879975 6.41439L3.44811 0.334581Z" fill="#B5BDD1"/></svg>
                            </div>
                        </div>
                        <div class="faq-item-content">
                            <p>Такой необходимости нет, поскольку большинство из них уже у вас на руках (выдаются по запросу онлайн).</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-item-title">
                            <div class="number">6</div>
                            <div class="title">Я боюсь идти в банк запрашивать справку. Вдруг меня там схватит служба безопасности?</div>
                            <div class="arrow">
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.44811 0.334581C3.69466 -0.111527 4.30535 -0.111526 4.55189 0.334582L7.912 6.41439C8.16047 6.86397 7.85323 7.42857 7.36011 7.42857L0.639891 7.42857C0.146771 7.42857 -0.160472 6.86397 0.0879975 6.41439L3.44811 0.334581Z" fill="#B5BDD1"/></svg>
                            </div>
                        </div>
                        <div class="faq-item-content">
                            <p>Вы можете запросить документы онлайн: в приложении, либо в личном кабинете. Однако даже, если вы придете лично, у банка нет законных оснований не выдавать вам нужные справки. Выдачей подобных документов занимается рядовой сотрудник, который является обычным менеджером или оператором. Он не занимается вопросами вашей задолженности и ее возврата.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-item-title">
                            <div class="number">7</div>
                            <div class="title">Я не умею пользоваться приложением/сайтом/компьютером и у меня кнопочный телефон. Что делать?</div>
                            <div class="arrow">
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.44811 0.334581C3.69466 -0.111527 4.30535 -0.111526 4.55189 0.334582L7.912 6.41439C8.16047 6.86397 7.85323 7.42857 7.36011 7.42857L0.639891 7.42857C0.146771 7.42857 -0.160472 6.86397 0.0879975 6.41439L3.44811 0.334581Z" fill="#B5BDD1"/></svg>
                            </div>
                        </div>
                        <div class="faq-item-content">
                            <p>Вы всегда можете запросить документ лично в ведомстве/офисе организации. Также на встрече сотрудник нашей компании поможет вам запросить нужные данные с помощью компьютера (при наличии у вас зарегистрированных аккаунтов, например, на <a href="https://www.gosuslugi.ru/" target="_blank">Госуслугах</a>).</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-item-title">
                            <div class="number">8</div>
                            <div class="title">Если у меня открытое исполнительное производство, надо ли мне идти в банк брать справку о задолженности?</div>
                            <div class="arrow">
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.44811 0.334581C3.69466 -0.111527 4.30535 -0.111526 4.55189 0.334582L7.912 6.41439C8.16047 6.86397 7.85323 7.42857 7.36011 7.42857L0.639891 7.42857C0.146771 7.42857 -0.160472 6.86397 0.0879975 6.41439L3.44811 0.334581Z" fill="#B5BDD1"/></svg>
                            </div>
                        </div>
                        <div class="faq-item-content">
                            <p>Нет, поскольку ваш долг уже просужен и передан в ФССП. Такую справку нужно запрашивать у судебных приставов.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-item-title">
                            <div class="number">9</div>
                            <div class="title">Зачем нужна выписка из ЕГРН о недвижимости, если у меня ничего нет?</div>
                            <div class="arrow">
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.44811 0.334581C3.69466 -0.111527 4.30535 -0.111526 4.55189 0.334582L7.912 6.41439C8.16047 6.86397 7.85323 7.42857 7.36011 7.42857L0.639891 7.42857C0.146771 7.42857 -0.160472 6.86397 0.0879975 6.41439L3.44811 0.334581Z" fill="#B5BDD1"/></svg>
                            </div>
                        </div>
                        <div class="faq-item-content">
                            <p>Выписка потребуется для анализа вашего имущественного положения, чтобы исключить возможность реализации имущества, если вы не знали, что являетесь собственником.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-item-title">
                            <div class="number">10</div>
                            <div class="title">Если я предоставил выписку из ЕГРН на объект недвижимости, нужно ли заказывать выписку ЕГРН из налоговой?</div>
                            <div class="arrow">
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.44811 0.334581C3.69466 -0.111527 4.30535 -0.111526 4.55189 0.334582L7.912 6.41439C8.16047 6.86397 7.85323 7.42857 7.36011 7.42857L0.639891 7.42857C0.146771 7.42857 -0.160472 6.86397 0.0879975 6.41439L3.44811 0.334581Z" fill="#B5BDD1"/></svg>
                            </div>
                        </div>
                        <div class="faq-item-content">
                            <p>Конечно, нужно. В выписке из ЕГРН ФНС содержатся сведения о проводимых сделках, в том числе и с движимым имуществом.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-item-title">
                            <div class="number">11</div>
                            <div class="title">Зачем нужны две выписки: из НБКИ и еще отчет из Объединенного Кредитного Бюро?</div>
                            <div class="arrow">
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.44811 0.334581C3.69466 -0.111527 4.30535 -0.111526 4.55189 0.334582L7.912 6.41439C8.16047 6.86397 7.85323 7.42857 7.36011 7.42857L0.639891 7.42857C0.146771 7.42857 -0.160472 6.86397 0.0879975 6.41439L3.44811 0.334581Z" fill="#B5BDD1"/></svg>
                            </div>
                        </div>
                        <div class="faq-item-content">
                            <p>Данные выписки требуются вашему юристу, чтобы четко обозначить перечень ваших кредиторов. Эти документы имеют разную форму и исключают возможность упустить кого-то из них. Кроме того, при подаче заявления в суд, каждый кредитор должен быть уведомлен о начале процесса.</p>
                            <p>Получить выписку и кредитный отчет очень удобно онлайн через Госуслуги.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-item-title">
                            <div class="number">12</div>
                            <div class="title">Где можно получить договор купли-продажи имущества, если он был утерян?</div>
                            <div class="arrow">
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.44811 0.334581C3.69466 -0.111527 4.30535 -0.111526 4.55189 0.334582L7.912 6.41439C8.16047 6.86397 7.85323 7.42857 7.36011 7.42857L0.639891 7.42857C0.146771 7.42857 -0.160472 6.86397 0.0879975 6.41439L3.44811 0.334581Z" fill="#B5BDD1"/></svg>
                            </div>
                        </div>
                        <div class="faq-item-content">
                            <p>Для получения копии договора необходимо обратиться в регистрирующий орган, например, при продаже автомобиля в ГИБДД, при продаже недвижимости в МФЦ (Росреестр).</p>
                            <p>Также вы можете взять копию у второй стороны по сделке.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-item-title">
                            <div class="number">13</div>
                            <div class="title">Почему требуются выписки и справки за 3 года до подачи в суд?</div>
                            <div class="arrow">
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.44811 0.334581C3.69466 -0.111527 4.30535 -0.111526 4.55189 0.334582L7.912 6.41439C8.16047 6.86397 7.85323 7.42857 7.36011 7.42857L0.639891 7.42857C0.146771 7.42857 -0.160472 6.86397 0.0879975 6.41439L3.44811 0.334581Z" fill="#B5BDD1"/></svg>
                            </div>
                        </div>
                        <div class="faq-item-content">
                            <p>Согласно 127-ФЗ «О несостоятельности (банкротстве)», период проверки должника составляет три года до подачи заявления в суд. А именно: проверяются сделки, переводы, имущество и доходы.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>