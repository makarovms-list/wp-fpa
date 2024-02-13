<style>
    .section--smi-items {
        margin-top: 140px;
    }
    .smi-intro__cnt h2 {
        font-weight: 700;
        font-size: 34px;
        line-height: 145%;
        text-align: center;
        color: #393939;
    }
    .smi-intro__cnt p {
        font-weight: 400;
        font-size: 18px;
        line-height: 145%;
        color: #717B97;        
    }
    .smi-items__cnt.tablet-view .smi-intro__cnt {
        margin-bottom: 25px;
    }
    .smi-items__cnt.tablet-view .smi-intro__cnt h2 {
        font-size: 22px;
    }
    .smi-items__cnt.tablet-view .smi-intro__cnt p {
        font-size: 14px;
    }
    .smi-items__cnt.tablet-view {
        display: none;
    }
    .smi-items__cnt.desktop-view {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: calc(50% - 8px) calc(50% - 8px);
        grid-column-gap: 16px;
        grid-row-gap: 16px;
    }
    .smi-items__cnt .smi-item__cnt {
        /*filter: drop-shadow(0px 6px 12px rgba(0, 37, 102, 0.1));*/
        box-shadow: 0px 6px 12px rgb(0 37 102 / 10%);
        border-radius: 10px;
        margin-bottom: 25px;
    }
    .smi-items__cnt .item-head {
        background: linear-gradient(135deg, #EDEDF8 14.64%, #D7DEEF 85.36%);
        border-radius: 10px 10px 0px 0px;
        padding: 20px 0;
        display: flex;
        justify-content: center;
    }
    .smi-items__cnt .item-head img {
        height: 32px;
        width: auto;
        object-fit: contain;
    }
    .smi-items__cnt .item-body {
        background: #FFFFFF;
        border-radius: 0px 0px 10px 10px;
        padding: 25px;
    }
    .smi-items__cnt .item-body .image__cnt img {
        width: 100%;
        height: auto;
        object-fit: contain;
    }
    .smi-items__cnt .item-body h3 {
        font-weight: 700;
        font-size: 22px;
        line-height: 145%;
        color: #393939;
    }
    .smi-items__cnt .item-body video {
        border-radius: 8px;
        margin-bottom: 10px;
    }
    .smi-items__cnt .urist__cnt {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 50px auto;
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        align-items: center;
        margin-bottom: 10px;
    }
    .smi-items__cnt .urist__cnt .post-name__cnt .post__cnt {
        font-weight: 400;
        font-size: 12px;
        line-height: 145%;
        color: #717B97;
    }
    .smi-items__cnt .urist__cnt .post-name__cnt .name__cnt {
        font-weight: 500;
        font-size: 14px;
        line-height: 145%;
        color: #717B97;
    }
    .smi-items__cnt .post-intro {
        font-weight: 400;
        font-size: 16px;
        line-height: 145%;
        color: #717B97;
        margin-bottom: 10px;
    }
    
    .smi-items__cnt .item-body .image__cnt img {
        border-radius: 8px;
        margin-bottom: 10px;
    }
    .calculator-navbar {
        display: none!important;
    }
    .btn-up {
        bottom: 30px!important;
    }
    .smi-items__cnt .btn {
        width: 100%;
        cursor: pointer;
        padding-left: 0;
        padding-right: 0;
        font-size: 14px;
    }
    /*
    .section--modal .modal__wrap--external-link .external-link__favicon {
        background: transparent!important;
    }
    */
    @media (max-width: 1200px) {
        .section--smi-items {
            margin-top: 100px;
        }
    }
    @media (max-width: 782px) {
        .section--smi-items {
            margin-top: 70px;
        }
        .smi-items__cnt.desktop-view {
            display: none;
        }
        .smi-items__cnt.tablet-view {
            display: block;
        }
        .smi-intro__cnt-desktop {
            display: none;
        }
        body.page-template-mobilepage-smi .section.top-m .top-m__wrap {
            grid-template-columns: 100%;
            padding: 60px 0;
        }    
        .smi-items__cnt .btn {
            font-size: 14px;
        }
        .section--main {
            margin-bottom: 40px;
        }
        .smi-items__cnt .smi-item__cnt {
            margin-bottom: 40px;
        }
        .smi-items__cnt .btn {
            font-size: 14px;
        }
    }
    
    @media (max-width: 540px) {
        .section--smi-items {
            margin-top: 40px;
        }
        body.page-template-mobilepage-smi .section.top-m .top-m__wrap {
            padding: 40px 0;
        }    
        .smi-items__cnt a.btn {
            font-size: 12px;
        }
        .smi-items__cnt .item-body h3 {
            font-size: 18px;
        }
        .smi-items__cnt .post-intro {
            font-size: 14px;
        }
        .smi-items__cnt .btn {
            font-size: 14px;
        }
    }   
</style>
<section class="section section--smi-items">
    <div class="container">
        <!--
        <div class="smi-intro__cnt smi-intro__cnt-desktop">
            <h2>Почему мы интересны СМИ?</h2>
            <p>«Финансово-правовой Альянс» – компания, специализирующаяся исключительно на банкротстве физических лиц и индивидуальных предпринимателей. Мы по праву можем назвать себя первооткрывателями сферы банкротства в Петербурге — первые дела по банкротству юридических лиц и индивидуальных предпринимателей мы взяли в работу ещё в 2010 году. В 2015 году в портфеле наших услуг появилось банкротство физических лиц. На сегодня у нас более 11 тысяч клиентов одновременно в работе и ни одного проигранного дела.</p>
            <p>В области банкротства мы охватываем весь спектр необходимых компетенций — юридических и экономических. В нашей компании работают более 200 профессионалов в области банкротства. Масштаб компании позволяет нам работать над процедурами банкротств любой сложности: с большими сумма долга, подозрительными сделками, ценным имуществом, валютной ипотекой, единственным жильём и многим другим.</p>
        </div>
        -->
        <div class="smi-items__cnt tablet-view">
            <div class="smi-item__cnt">
                <div class="item-head">
                    <picture>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/smi/Rossiya-24.png">
                    </picture>
                </div>
                <div class="item-body">
                    <h3>Два мнения. Как нужно изменить закон о банкротстве</h3>
                    <div class="video__cnt">
                        <video class="video-unit-local" src="<?= get_template_directory_uri() ?>/assets/video/smi/7e8cd39ccf718d17d9c09aea11d8b.mp4" controls="" title="Два мнения. Как нужно изменить закон о банкротстве.mp4" poster="<?= get_template_directory_uri() ?>/assets/img/smi/vmeste-rf-video-poster.png" preload="auto">
                            <!--source   type='video/mp4;  codecs="avc1.42E01E, mp4a.40.2, h.264"'-->
                        </video>
                    </div>
                    <div class="urist__cnt">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                        </picture>
                        <div class="post-name__cnt">
                            <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                            <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                        </div>
                    </div>
                    <div class="post-intro">Какие изменения нужны в закон о банкротстве? На это вопрос отвечает адвокат, практикующий в сфере банкротства Алексей Сорокин.</div>
                    <a class="btn smi-external-news-link" href="https://vmeste-rf.tv/programs/dva-mneniya/dva-mneniya-kak-nuzhno-izmenit-zakon-o-bankrotstve/">Смотреть на сайте издания</a>
                </div>
            </div>
            <div class="smi-item__cnt">
                <div class="item-head">
                    <picture>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/smi/rbk-logo.png">
                    </picture>
                </div>
                <div class="item-body">
                    <h3>«Неутешительный прогноз на годы вперёд»: юристы — о банкротстве физлиц</h3>
                    <div class="urist__cnt">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                        </picture>
                        <div class="post-name__cnt">
                            <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                            <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                        </div>
                    </div>
                    <div class="post-intro">По итогам 2021 года в Санкт-Петербурге и Ленинградской области значительно вырастет число физлиц, признанных банкротами. Согласно прогнозу специалистов «Финансово-правового Альянса», которые проанализировали статистику Федресурса, всего за год Арбитражный суд Петербурга и Ленобласти признает несостоятельными 8 114 граждан. Эксперты не сомневаются в том, что в 2022 году тенденция к росту сохранится.</div>
                    <a class="btn smi-external-news-link" href="https://www.rbc.ru/spb_sz/01/12/2021/61a76da39a7947786d8946e4?from=regional_newsfeed">Читать статью на сайте издания</a>
                </div>
            </div>
            <!--
            <div class="smi-intro__cnt">
                <h2>Почему мы интересны СМИ?</h2>
                <p>«Финансово-правовой Альянс» – компания, специализирующаяся исключительно на банкротстве физических лиц и индивидуальных предпринимателей. Мы по праву можем назвать себя первооткрывателями сферы банкротства в Петербурге — первые дела по банкротству юридических лиц и индивидуальных предпринимателей мы взяли в работу ещё в 2010 году. В 2015 году в портфеле наших услуг появилось банкротство физических лиц. На сегодня у нас более 11 тысяч клиентов одновременно в работе и ни одного проигранного дела.</p>
                <p>В области банкротства мы охватываем весь спектр необходимых компетенций — юридических и экономических. В нашей компании работают более 200 профессионалов в области банкротства. Масштаб компании позволяет нам работать над процедурами банкротств любой сложности: с большими сумма долга, подозрительными сделками, ценным имуществом, валютной ипотекой, единственным жильём и многим другим.</p>
            </div>
            -->
            
            
            
            
            <div class="smi-item__cnt">
                <div class="item-head">
                    <picture>
                        <img src="https://fpa.ru/wp-content/uploads/2022/12/Ф.png">
                    </picture>
                </div>
                <div class="item-body">
                    <h3>В Петербурге резкий всплеск исков о личном банкротстве</h3>
                    <div class="urist__cnt">
                        <picture>
                            <img style="border-radius: 50%;background: #edf0f8" src="<?= get_template_directory_uri() ?>/assets/img/news/commentator/bodnar.png">
                        </picture>
                        <div class="post-name__cnt">
                            <div class="name__cnt">Боднар Евгения Ивановна</div>
                            <div class="post__cnt">Руководитель отдела сопровождения клиентов по кредитам и долгам</div>
                        </div>
                    </div>
                    <div class="post-intro">По данным ЕФРСБ, Петербург на 6 месте в стране по показателю банкротств, однако увеличение числа процедур — общероссийская тенденция. Юрист и эксперт по банкротству Евгения Боднар рассказала редакции «Фонтанки» о причинах и предпосылках этого явления, о законных способах банкротства с ипотекой, озвучила статистические данные и напомнила, когда признание финансовой несостоятельности становится уже не правом, а обязанностью гражданина-должника.</div>
                    <a class="btn smi-external-news-link" href="https://www.fontanka.ru/2022/12/16/71904329/">Читать статью на сайте издания</a>
                </div>
            </div>
            
            
            
            
            
            
            
            
            <div class="smi-item__cnt">
                <div class="item-head">
                    <picture>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/smi/rbk-pro-logo.png">
                    </picture>
                </div>
                <div class="item-body">
                    <h3>Как финансовому директору избежать ответственности по долгам компании</h3>
                    <div class="urist__cnt">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                        </picture>
                        <div class="post-name__cnt">
                            <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                            <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                        </div>
                    </div>
                    <div class="post-intro">Финансовый директор имеет широкие полномочия в компании, поэтому, если она идет ко дну, часто отвечает по ее долгам наряду с другими топ-менеджерами. Как этого избежать, рассказывает Алексей Сорокин, юрист компании «Финансово-правовой альянс»</div>
                    <a class="btn smi-external-news-link" href="https://pro.rbc.ru/news/62e8a13a9a79470e62b7406e">Читать статью на сайте издания</a>
                </div>
            </div>            
            <div class="smi-item__cnt">
                <div class="item-head">
                    <picture>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aif-logo.png">
                    </picture>
                </div>
                <div class="item-body">
                    <h3>Голый, но свободный. Как банкротятся петербуржцы?</h3>
                    <div class="urist__cnt">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                        </picture>
                        <div class="post-name__cnt">
                            <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                            <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                        </div>
                    </div>
                    <div class="post-intro">В Санкт-Петербурге – все больше банкротов: прирост в сравнении с прошлым годом составил почти 30%. Процедуру эту горожане почти всегда инициируют сами, не видя иного способа уйти от долгов.</div>
                    <a class="btn smi-external-news-link" href="https://spb.aif.ru/money/finances/golyy_no_svobodnyy_kak_bankrotyatsya_peterburzhcy">Читать статью на сайте издания</a>
                </div>
            </div>
            <div class="smi-item__cnt">
                <div class="item-head">
                    <picture>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/smi/izvestiya-iz-logo.png">
                    </picture>
                </div>
                <div class="item-body">
                    <h3>Пересчитать на личное: россиян захотели избавить от онлайн-кредитов</h3>
                    <div class="urist__cnt">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                        </picture>
                        <div class="post-name__cnt">
                            <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                            <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                        </div>
                    </div>
                    <div class="post-intro">В Госдуме предложили ввести запрет на выдачу кредитов и займов гражданам без личного присутствия в финансовой организации. Исключение — наличие юридически оформленной доверенности. Опасно ли брать онлайн-кредиты, нужна ли такая мера сфере кредитования и что думают об инициативе юристы и игроки рынка, выясняли «Известия» вместе со спикером компании Финансово-правовой альянс - Сорокиным Алексеем Евгеньевичем.</div>
                    <a class="btn smi-external-news-link" href="https://iz.ru/1394732/oksana-belkina/pereschitat-na-lichnoe-rossiian-zakhoteli-izbavit-ot-onlain-kreditov">Читать статью на сайте издания</a>
                </div>
            </div>
            
            
            
            <div class="smi-item__cnt">
                <div class="item-head">
                    <picture>
                        <img src="https://fpa.ru/wp-content/uploads/2022/12/КМ.png">
                    </picture>
                </div>
                <div class="item-body">
                    <h3>Долгам готовят отсрочку</h3>
                    <div class="urist__cnt">
                        <picture>
                            <img style="border-radius: 50%;background: #edf0f8;" src="<?= get_template_directory_uri() ?>/assets/img/news/commentator/bodnar.png">
                        </picture>
                        <div class="post-name__cnt">
                            <div class="name__cnt">Боднар Евгения Ивановна</div>
                            <div class="post__cnt">Руководитель отдела сопровождения клиентов по кредитам и долгам</div>
                        </div>
                    </div>
                    <div class="post-intro">Госдума приняла в первом чтении федеральный закон о так называемых антикризисных кредитных каникулах. Подойдет ли такой механизм тем, кто явно утратил возможность рассчитаться по долгу? Эксперт и юрист Евгения Боднар рассуждает о том, какой смысл данные каникулы имеют для должника, а также дает рекомендации, как быть, если платить по обязательствам нечем, а финансовое состояние вряд ли изменится в ближайшее время.</div>
                    <a class="btn smi-external-news-link" href="https://www.kommersant.ru/doc/5747132">Читать статью на сайте издания</a>
                </div>
            </div>
            
            
            
            
            
            <div class="smi-item__cnt">
                <div class="item-head">
                    <picture>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aif-logo.png">
                    </picture>
                </div>
                <div class="item-body">
                    <h3>ЦБ снизил ставку до 7,5%. А когда банки снизят проценты по кредитам?</h3>
                    <div class="urist__cnt">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                        </picture>
                        <div class="post-name__cnt">
                            <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                            <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                        </div>
                    </div>
                    <div class="post-intro">Центробанк России понизил ключевую ставку на 0,5 процентного пункта, до 7,5% годовых. Ключевая ставка является ориентиром для установки процентов по кредитам и вкладам коммерческими банками. Когда же финансовые организации снизят ставки по кредитам, aif.ru спросил у эксперта компании «Финансово-правовой альянс» — Сорокина Алексея.</div>
                    <a class="btn smi-external-news-link" href="https://aif.ru/money/economy/cb_snizil_stavku_do_7_5_a_kogda_banki_snizyat_procenty_po_kreditam">Читать статью на сайте издания</a>
                </div>
            </div>
            <div class="smi-item__cnt">
                <div class="item-head">
                    <picture>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/smi/mk-logo.png">
                    </picture>
                </div>
                <div class="item-body">
                    <h3>Петербуржцы потеряли миллионы рублей, вложившись в рухнувшую финансовую пирамиду Finiko</h3>
                    <div class="urist__cnt">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                        </picture>
                        <div class="post-name__cnt">
                            <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                            <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                        </div>
                    </div>
                    <div class="post-intro">Сотни жителей Петербурга сейчас, едва сдерживая гнев и отчаяние, обивают пороги отделов полиции и юридических компаний. Их жизни рухнули в один момент — когда в казанском суде сообщили об аресте основателя финансовой пирамиды Finiko Кирилла Доронина. Его и других основателей обвинили в мошенничестве в особо крупном размере. Но бывшим вкладчикам от этого не легче. Все они, поверив в обещания быстрой и постоянной прибыли, вложили в пирамиду сотни тысяч и даже миллионы рублей.</div>
                    <a class="btn smi-external-news-link" href="https://spb.mk.ru/social/2021/09/29/peterburzhcy-poteryali-milliony-rubley-vlozhivshis-v-rukhnuvshuyu-finansovuyu-piramidu-finiko.html">Читать статью на сайте издания</a>
                </div>
            </div>
            <div class="smi-item__cnt">
                <div class="item-head">
                    <picture>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/smi/kp-logo.png">
                    </picture>
                </div>
                <div class="item-body">
                    <h3>Как взять кредит с плохой кредитной историей в 2022 году</h3>
                    <div class="urist__cnt">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                        </picture>
                        <div class="post-name__cnt">
                            <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                            <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                        </div>
                    </div>
                    <div class="post-intro">Как быть, если кредитная история оставляет желать лучшего, можно ли оформить заем с плохой кредитной историей в 2022 году и как это сделать проще всего, рассказал «Комсомолке» адвокат, эксперт-консультант по банкротству Алексей Сорокин.</div>
                    <a class="btn smi-external-news-link" href="https://www.kp.ru/expert/finansy/kak-vzyat-kredit-s-plokhoj-kreditnoj-istoriej/">Читать статью на сайте издания</a>
                </div>
            </div>
            <div class="smi-item__cnt">
                <div class="item-head">
                    <picture>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/smi/ria-novosti-logo.png">
                    </picture>
                </div>
                <div class="item-body">
                    <h3>Пенсия в 2022 году: как рассчитать и за счет чего можно увеличить</h3>
                    <div class="urist__cnt">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                        </picture>
                        <div class="post-name__cnt">
                            <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                            <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                        </div>
                    </div>
                    <div class="post-intro">Юрист и эксперт-консультант по банкротству Алексей Сорокин комментирует изменения в законодательстве в сфере социального обеспечения и рассказывает, как именно судебная практика идет навстречу гражданам пенсионного возраста при прохождении банкротства.</div>
                    <a class="btn smi-external-news-link" href="https://ria.ru/20220731/pensiya-1806142348.html">Читать статью на сайте издания</a>
                </div>
            </div>
            <div class="smi-item__cnt">
                <div class="item-head">
                    <picture>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aif-logo.png">
                    </picture>
                </div>
                <div class="item-body">
                    <h3>Банки снижают ставки по кредитам. Не пора ли перекредитоваться?</h3>
                    <div class="urist__cnt">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                        </picture>
                        <div class="post-name__cnt">
                            <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                            <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                        </div>
                    </div>
                    <div class="post-intro">Эксперт-консультант по банкротству, адвокат и юрист Алексей Сорокин рассказал редакции «АиФ», как правильно поступить, если вы планируете рефинансировать имеющиеся кредиты и на какие аспекты стоит обратить особое внимание.</div>
                    <a class="btn smi-external-news-link" href="https://aif.ru/money/mymoney/banki_snizhayut_stavki_po_kreditam_ne_pora_li_perekreditovatsya">Читать статью на сайте издания</a>
                </div>
            </div>
            <div class="smi-item__cnt">
                <div class="item-head">
                    <picture>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/smi/rg-logo.png">
                    </picture>
                </div>
                <div class="item-body">
                    <h3>Розничное кредитование в России</h3>
                    <div class="urist__cnt">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                        </picture>
                        <div class="post-name__cnt">
                            <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                            <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                        </div>
                    </div>
                    <div class="post-intro">Адвокат, юрист и эксперт-консультант по банкротству Алексей Сорокин рассказывает, с чем связан рост розничного кредитования в регионах России, дает оценку этому явлению и объясняет, чем поможет банкротство физических лиц в текущей ситуации.</div>
                    <a class="btn smi-external-news-link" href="https://rg.ru/2022/08/09/reg-skfo/stavka-na-ssudu.html">Читать статью на сайте издания</a>
                </div>
            </div>
            <div class="smi-item__cnt">
                <div class="item-head">
                    <picture>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/smi/ria-novosti-logo.png">
                    </picture>
                </div>
                <div class="item-body">
                    <h3>МРОТ в 2022 году: на сколько вырос, как рассчитывается и на что влияет</h3>
                    <div class="image__cnt">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/ria-novosti-image.png">
                        </picture>
                    </div>
                    <div class="urist__cnt">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                        </picture>
                        <div class="post-name__cnt">
                            <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                            <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                        </div>
                    </div>
                    <div class="post-intro">Минимальный размер оплаты труда - нижний порог вознаграждения, которое житель России по закону должен получать за свою работу. МРОТ - что это такое в деталях, как соотносится с прожиточным минимумом и как часто его повышают, что влияет на его размер, сколько составляет МРОТ в 2022 году в различных регионах страны.</div>
                    <a class="btn smi-external-news-link" href="https://ria.ru/20220627/mrot-1798493712.html">Читать статью на сайте издания</a>
                </div>
            </div>
            <div class="smi-item__cnt">
                <div class="item-head">
                    <picture>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aif-logo.png">
                    </picture>
                </div>
                <div class="item-body">
                    <h3>Что делать, чтобы данные паспорта не попали к мошенникам?</h3>
                    <div class="urist__cnt">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                        </picture>
                        <div class="post-name__cnt">
                            <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                            <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                        </div>
                    </div>
                    <div class="post-intro">Каждый знает, насколько важна безопасность паспортных данных. Завладев информацией о них, злоумышленники могут оформить на ваше имя микрозайм, кредит, сим-карту или даже доверенность у нотариуса на продажу имущества.  Адвокат, юрист и эксперт-консультант по банкротству Алексей Сорокин рассказывает, как не допустить, чтобы ваши паспортные данные угодили в руки злоумышленников, и как быть, если это все-таки случилось.</div>
                    <a class="btn smi-external-news-link" href="https://aif.ru/money/mymoney/chto_delat_chtoby_dannye_pasporta_ne_popali_k_moshennikam">Читать статью на сайте издания</a>
                </div>
            </div>
        </div>
        <div class="smi-items__cnt desktop-view">
            <div class="smi-items-col__cnt">
                <div class="smi-item__cnt">
                    <div class="item-head">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/Rossiya-24.png">
                        </picture>
                    </div>
                    <div class="item-body">
                        <h3>Два мнения. Как нужно изменить закон о банкротстве</h3>
                        <div class="video__cnt">
                            <video class="video-unit-local" src="<?= get_template_directory_uri() ?>/assets/video/smi/7e8cd39ccf718d17d9c09aea11d8b.mp4" controls="" title="Два мнения. Как нужно изменить закон о банкротстве.mp4" poster="<?= get_template_directory_uri() ?>/assets/img/smi/vmeste-rf-video-poster.png" preload="auto">
                                <!--source   type='video/mp4;  codecs="avc1.42E01E, mp4a.40.2, h.264"'-->
                            </video>
                        </div>
                        <div class="urist__cnt">
                            <picture>
                                <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                            </picture>
                            <div class="post-name__cnt">
                                <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                                <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                            </div>
                        </div>
                        <div class="post-intro">Какие изменения нужны в закон о банкротстве? На это вопрос отвечает адвокат, практикующий в сфере банкротства Алексей Сорокин.</div>
                        <a class="btn smi-external-news-link" href="https://vmeste-rf.tv/programs/dva-mneniya/dva-mneniya-kak-nuzhno-izmenit-zakon-o-bankrotstve/">Смотреть на сайте издания</a>
                    </div>
                </div>
                <div class="smi-item__cnt">
                    <div class="item-head">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/rbk-pro-logo.png">
                        </picture>
                    </div>
                    <div class="item-body">
                        <h3>Как финансовому директору избежать ответственности по долгам компании</h3>
                        <div class="urist__cnt">
                            <picture>
                                <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                            </picture>
                            <div class="post-name__cnt">
                                <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                                <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                            </div>
                        </div>
                        <div class="post-intro">Финансовый директор имеет широкие полномочия в компании, поэтому, если она идет ко дну, часто отвечает по ее долгам наряду с другими топ-менеджерами. Как этого избежать, рассказывает Алексей Сорокин, юрист компании «Финансово-правовой альянс»</div>
                        <a class="btn smi-external-news-link" href="https://pro.rbc.ru/news/62e8a13a9a79470e62b7406e">Читать статью на сайте издания</a>
                    </div>
                </div>            
                <div class="smi-item__cnt">
                    <div class="item-head">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/izvestiya-iz-logo.png">
                        </picture>
                    </div>
                    <div class="item-body">
                        <h3>Пересчитать на личное: россиян захотели избавить от онлайн-кредитов</h3>
                        <div class="urist__cnt">
                            <picture>
                                <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                            </picture>
                            <div class="post-name__cnt">
                                <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                                <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                            </div>
                        </div>
                        <div class="post-intro">В Госдуме предложили ввести запрет на выдачу кредитов и займов гражданам без личного присутствия в финансовой организации. Исключение — наличие юридически оформленной доверенности. Опасно ли брать онлайн-кредиты, нужна ли такая мера сфере кредитования и что думают об инициативе юристы и игроки рынка, выясняли «Известия» вместе со спикером компании Финансово-правовой альянс - Сорокиным Алексеем Евгеньевичем.</div>
                        <a class="btn smi-external-news-link" href="https://iz.ru/1394732/oksana-belkina/pereschitat-na-lichnoe-rossiian-zakhoteli-izbavit-ot-onlain-kreditov">Читать статью на сайте издания</a>
                    </div>
                </div>
                <div class="smi-item__cnt">
                    <div class="item-head">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/mk-logo.png">
                        </picture>
                    </div>
                    <div class="item-body">
                        <h3>Петербуржцы потеряли миллионы рублей, вложившись в рухнувшую финансовую пирамиду Finiko</h3>
                        <div class="urist__cnt">
                            <picture>
                                <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                            </picture>
                            <div class="post-name__cnt">
                                <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                                <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                            </div>
                        </div>
                        <div class="post-intro">Сотни жителей Петербурга сейчас, едва сдерживая гнев и отчаяние, обивают пороги отделов полиции и юридических компаний. Их жизни рухнули в один момент — когда в казанском суде сообщили об аресте основателя финансовой пирамиды Finiko Кирилла Доронина. Его и других основателей обвинили в мошенничестве в особо крупном размере. Но бывшим вкладчикам от этого не легче. Все они, поверив в обещания быстрой и постоянной прибыли, вложили в пирамиду сотни тысяч и даже миллионы рублей.</div>
                        <a class="btn smi-external-news-link" href="https://spb.mk.ru/social/2021/09/29/peterburzhcy-poteryali-milliony-rubley-vlozhivshis-v-rukhnuvshuyu-finansovuyu-piramidu-finiko.html">Читать статью на сайте издания</a>
                    </div>
                </div>
                <div class="smi-item__cnt">
                    <div class="item-head">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/ria-novosti-logo.png">
                        </picture>
                    </div>
                    <div class="item-body">
                        <h3>Пенсия в 2022 году: как рассчитать и за счет чего можно увеличить</h3>
                        <div class="urist__cnt">
                            <picture>
                                <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                            </picture>
                            <div class="post-name__cnt">
                                <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                                <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                            </div>
                        </div>
                        <div class="post-intro">Юрист и эксперт-консультант по банкротству Алексей Сорокин комментирует изменения в законодательстве в сфере социального обеспечения и рассказывает, как именно судебная практика идет навстречу гражданам пенсионного возраста при прохождении банкротства.</div>
                        <a class="btn smi-external-news-link" href="https://ria.ru/20220731/pensiya-1806142348.html">Читать статью на сайте издания</a>
                    </div>
                </div>
                <div class="smi-item__cnt">
                    <div class="item-head">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/rg-logo.png">
                        </picture>
                    </div>
                    <div class="item-body">
                        <h3>Розничное кредитование в России</h3>
                        <div class="urist__cnt">
                            <picture>
                                <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                            </picture>
                            <div class="post-name__cnt">
                                <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                                <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                            </div>
                        </div>
                        <div class="post-intro">Адвокат, юрист и эксперт-консультант по банкротству Алексей Сорокин рассказывает, с чем связан рост розничного кредитования в регионах России, дает оценку этому явлению и объясняет, чем поможет банкротство физических лиц в текущей ситуации.</div>
                        <a class="btn smi-external-news-link" href="https://rg.ru/2022/08/09/reg-skfo/stavka-na-ssudu.html">Читать статью на сайте издания</a>
                    </div>
                </div>
                <div class="smi-item__cnt">
                    <div class="item-head">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aif-logo.png">
                        </picture>
                    </div>
                    <div class="item-body">
                        <h3>Что делать, чтобы данные паспорта не попали к мошенникам?</h3>
                        <div class="urist__cnt">
                            <picture>
                                <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                            </picture>
                            <div class="post-name__cnt">
                                <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                                <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                            </div>
                        </div>
                        <div class="post-intro">Каждый знает, насколько важна безопасность паспортных данных. Завладев информацией о них, злоумышленники могут оформить на ваше имя микрозайм, кредит, сим-карту или даже доверенность у нотариуса на продажу имущества.  Адвокат, юрист и эксперт-консультант по банкротству Алексей Сорокин рассказывает, как не допустить, чтобы ваши паспортные данные угодили в руки злоумышленников, и как быть, если это все-таки случилось.</div>
                        <a class="btn smi-external-news-link" href="https://aif.ru/money/mymoney/chto_delat_chtoby_dannye_pasporta_ne_popali_k_moshennikam">Читать статью на сайте издания</a>
                    </div>
                </div>    
            </div>
            <div class="smi-items-col__cnt">
                <div class="smi-item__cnt">
                    <div class="item-head">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/rbk-logo.png">
                        </picture>
                    </div>
                    <div class="item-body">
                        <h3>«Неутешительный прогноз на годы вперёд»: юристы — о банкротстве физлиц</h3>
                        <div class="urist__cnt">
                            <picture>
                                <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                            </picture>
                            <div class="post-name__cnt">
                                <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                                <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                            </div>
                        </div>
                        <div class="post-intro">По итогам 2021 года в Санкт-Петербурге и Ленинградской области значительно вырастет число физлиц, признанных банкротами. Согласно прогнозу специалистов «Финансово-правового Альянса», которые проанализировали статистику Федресурса, всего за год Арбитражный суд Петербурга и Ленобласти признает несостоятельными 8 114 граждан. Эксперты не сомневаются в том, что в 2022 году тенденция к росту сохранится.</div>
                        <a class="btn smi-external-news-link" href="https://www.rbc.ru/spb_sz/01/12/2021/61a76da39a7947786d8946e4?from=regional_newsfeed">Читать статью на сайте издания</a>
                    </div>
                </div> 
                <div class="smi-item__cnt">
                    <div class="item-head">
                        <picture>
                            <img src="https://fpa.ru/wp-content/uploads/2022/12/Ф.png">
                        </picture>
                    </div>
                    <div class="item-body">
                        <h3>В Петербурге резкий всплеск исков о личном банкротстве</h3>
                        <div class="urist__cnt">
                            <picture>
                                <img style="border-radius: 50%;background: #edf0f8" src="<?= get_template_directory_uri() ?>/assets/img/news/commentator/bodnar.png">
                            </picture>
                            <div class="post-name__cnt">
                                <div class="name__cnt">Боднар Евгения Ивановна</div>
                                <div class="post__cnt">Руководитель отдела сопровождения клиентов по кредитам и долгам</div>
                            </div>
                        </div>
                        <div class="post-intro">По данным ЕФРСБ, Петербург на 6 месте в стране по показателю банкротств, однако увеличение числа процедур — общероссийская тенденция. Юрист и эксперт по банкротству Евгения Боднар рассказала редакции «Фонтанки» о причинах и предпосылках этого явления, о законных способах банкротства с ипотекой, озвучила статистические данные и напомнила, когда признание финансовой несостоятельности становится уже не правом, а обязанностью гражданина-должника.</div>
                        <a class="btn smi-external-news-link" href="https://www.fontanka.ru/2022/12/16/71904329/">Читать статью на сайте издания</a>
                    </div>
                </div>
                <div class="smi-item__cnt">
                    <div class="item-head">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aif-logo.png">
                        </picture>
                    </div>
                    <div class="item-body">
                        <h3>Голый, но свободный. Как банкротятся петербуржцы?</h3>
                        <div class="urist__cnt">
                            <picture>
                                <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                            </picture>
                            <div class="post-name__cnt">
                                <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                                <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                            </div>
                        </div>
                        <div class="post-intro">В Санкт-Петербурге – все больше банкротов: прирост в сравнении с прошлым годом составил почти 30%. Процедуру эту горожане почти всегда инициируют сами, не видя иного способа уйти от долгов.</div>
                        <a class="btn smi-external-news-link" href="https://spb.aif.ru/money/finances/golyy_no_svobodnyy_kak_bankrotyatsya_peterburzhcy">Читать статью на сайте издания</a>
                    </div>
                </div>
                <div class="smi-item__cnt">
                    <div class="item-head">
                        <picture>
                            <img src="https://fpa.ru/wp-content/uploads/2022/12/КМ.png">
                        </picture>
                    </div>
                    <div class="item-body">
                        <h3>Долгам готовят отсрочку</h3>
                        <div class="urist__cnt">
                            <picture>
                                <img style="border-radius: 50%;background: #edf0f8;" src="<?= get_template_directory_uri() ?>/assets/img/news/commentator/bodnar.png">
                            </picture>
                            <div class="post-name__cnt">
                                <div class="name__cnt">Боднар Евгения Ивановна</div>
                                <div class="post__cnt">Руководитель отдела сопровождения клиентов по кредитам и долгам</div>
                            </div>
                        </div>
                        <div class="post-intro">Госдума приняла в первом чтении федеральный закон о так называемых антикризисных кредитных каникулах. Подойдет ли такой механизм тем, кто явно утратил возможность рассчитаться по долгу? Эксперт и юрист Евгения Боднар рассуждает о том, какой смысл данные каникулы имеют для должника, а также дает рекомендации, как быть, если платить по обязательствам нечем, а финансовое состояние вряд ли изменится в ближайшее время.</div>
                        <a class="btn smi-external-news-link" href="https://www.kommersant.ru/doc/5747132">Читать статью на сайте издания</a>
                    </div>
                </div>
                <div class="smi-item__cnt">
                    <div class="item-head">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aif-logo.png">
                        </picture>
                    </div>
                    <div class="item-body">
                        <h3>ЦБ снизил ставку до 7,5%. А когда банки снизят проценты по кредитам?</h3>
                        <div class="urist__cnt">
                            <picture>
                                <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                            </picture>
                            <div class="post-name__cnt">
                                <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                                <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                            </div>
                        </div>
                        <div class="post-intro">Центробанк России понизил ключевую ставку на 0,5 процентного пункта, до 7,5% годовых. Ключевая ставка является ориентиром для установки процентов по кредитам и вкладам коммерческими банками. Когда же финансовые организации снизят ставки по кредитам, aif.ru спросил у эксперта компании «Финансово-правовой альянс» — Сорокина Алексея.</div>
                        <a class="btn smi-external-news-link" href="https://aif.ru/money/economy/cb_snizil_stavku_do_7_5_a_kogda_banki_snizyat_procenty_po_kreditam">Читать статью на сайте издания</a>
                    </div>
                </div>
                <div class="smi-item__cnt">
                    <div class="item-head">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/kp-logo.png">
                        </picture>
                    </div>
                    <div class="item-body">
                        <h3>Как взять кредит с плохой кредитной историей в 2022 году</h3>
                        <div class="urist__cnt">
                            <picture>
                                <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                            </picture>
                            <div class="post-name__cnt">
                                <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                                <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                            </div>
                        </div>
                        <div class="post-intro">Как быть, если кредитная история оставляет желать лучшего, можно ли оформить заем с плохой кредитной историей в 2022 году и как это сделать проще всего, рассказал «Комсомолке» адвокат, эксперт-консультант по банкротству Алексей Сорокин.</div>
                        <a class="btn smi-external-news-link" href="https://www.kp.ru/expert/finansy/kak-vzyat-kredit-s-plokhoj-kreditnoj-istoriej/">Читать статью на сайте издания</a>
                    </div>
                </div>
                <div class="smi-item__cnt">
                    <div class="item-head">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aif-logo.png">
                        </picture>
                    </div>
                    <div class="item-body">
                        <h3>Банки снижают ставки по кредитам. Не пора ли перекредитоваться?</h3>
                        <div class="urist__cnt">
                            <picture>
                                <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                            </picture>
                            <div class="post-name__cnt">
                                <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                                <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                            </div>
                        </div>
                        <div class="post-intro">Эксперт-консультант по банкротству, адвокат и юрист Алексей Сорокин рассказал редакции «АиФ», как правильно поступить, если вы планируете рефинансировать имеющиеся кредиты и на какие аспекты стоит обратить особое внимание.</div>
                        <a class="btn smi-external-news-link" href="https://aif.ru/money/mymoney/banki_snizhayut_stavki_po_kreditam_ne_pora_li_perekreditovatsya">Читать статью на сайте издания</a>
                    </div>
                </div>
                <div class="smi-item__cnt">
                    <div class="item-head">
                        <picture>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/smi/ria-novosti-logo.png">
                        </picture>
                    </div>
                    <div class="item-body">
                        <h3>МРОТ в 2022 году: на сколько вырос, как рассчитывается и на что влияет</h3>
                        <div class="image__cnt">
                            <picture>
                                <img src="<?= get_template_directory_uri() ?>/assets/img/smi/ria-novosti-image.png">
                            </picture>
                        </div>
                        <div class="urist__cnt">
                            <picture>
                                <img src="<?= get_template_directory_uri() ?>/assets/img/smi/aleksey-sorokin.png">
                            </picture>
                            <div class="post-name__cnt">
                                <div class="name__cnt">Сорокин Алексей Евгенивич</div>
                                <div class="post__cnt">Эксперт-консультант по банкротству компании «Финансово-правовой Альянс»</div>
                            </div>
                        </div>
                        <div class="post-intro">Минимальный размер оплаты труда - нижний порог вознаграждения, которое житель России по закону должен получать за свою работу. МРОТ - что это такое в деталях, как соотносится с прожиточным минимумом и как часто его повышают, что влияет на его размер, сколько составляет МРОТ в 2022 году в различных регионах страны.</div>
                        <a class="btn smi-external-news-link" href="https://ria.ru/20220627/mrot-1798493712.html">Читать статью на сайте издания</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>