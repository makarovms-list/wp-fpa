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
    
    
    
    
    
    .section-pamytka {
        background: #fff;
        /*
        background: url(/wp-content/themes/fpalaw/assets/img/instruction/white-noise.png) center center repeat;
        background-size: cover;
        */
    }
    .section-pamytka .pamytka-cnt {
        padding: 120px 0;
    }
    .section-pamytka .image {
        margin-bottom: 20px;
    }
    .section-pamytka .image img {
        margin: 0 auto;
    }
    .section-pamytka .text-cnt p {
        font-family: Inter;
        font-size: 1.125em;
        font-weight: 400;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;  
        color: #717B97;
    }
    .section-pamytka .text-white-cnt {
        background: #FFFFFF;
        border-radius: 10px;
        padding: 24px;
        box-shadow: 0px 8px 24px 0px #001D681F;
        margin-bottom: 20px;
    }
    .section-pamytka .text-white-item+.text-white-item {
        margin-top: 16px;
    }
    .section-pamytka .text-white-item .number {
        font-family: Inter;
        font-size: 2.0625em;
        font-weight: 800;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left; 
        color: #5381F6;
    }
    .section-pamytka .text-white-item .txt p {
        font-family: Inter;
        font-size: 0.875;
        font-weight: 400;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;   
        color: #717B97;
    }
    .text-card-cnt {
        margin-bottom: 20px;
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: repeat(2, 1fr);
        grid-column-gap: 20px;
        grid-row-gap: 20px;
        align-items: stretch;
    }
    .text-card-cnt .text-card-item {
        box-shadow: 0px 8px 24px 0px #001D681F;
        background: #FFFFFF;
        border-radius: 10px;
        padding: 24px;
    }
    .text-card-cnt .text-card-item .title {
        font-family: Inter;
        font-size: 1em;
        font-weight: 600;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        border-bottom: 1px solid rgb(0 0 0 / 12%);
        padding-bottom: 12px;
        margin-bottom: 16px;
    }
    .text-card-cnt .text-card-item .content ul {
        padding-left: 20px;
    }
    
    .text-card-cnt .text-card-item .content ul li {
        font-family: Inter;
        font-size: 0.875em;
        font-weight: 400;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        color: #717B97;
    }
    .text-card-cnt .text-card-item .content ul li span {
        font-size: 1em;
        font-weight: 700;
    }
    .text-card-cnt .text-card-item .content ul li span.blue {
        color: #5381F6;
    }
    .text-card-cnt .text-card-item .content ul li span.red {
        color: #FB5A80;
    }
    @media (max-width: 992px) {
        .section-pamytka .pamytka-cnt {
            padding: 100px 0;
        }
    }
    @media (max-width: 782px) {
        .text-card-cnt {
            grid-template-columns: 100%;
        }
    }
    @media (max-width: 600px) {
        .section-pamytka .pamytka-cnt {
            padding: 60px 0;
        }
    }
    @media (max-width: 480px) {
        .section-pamytka .pamytka-cnt {
            padding: 40px 0;
        }
    }
    @media (max-width: 380px) {
        .text-card-cnt .text-card-item .content ul li {
            font-size: 0.750em;
        }
    }
    
</style>
<section class="section-title">
    <div class="container">
        <div class="title-cnt">
            <div class="title">Памятка по взаимодействию с компанией ФПА</div>
            <!--<div class="subtitle">Для владельцев телефонов</div>-->
        </div>
    </div>
</section>
<section class="section-pamytka">
    <div class="container">
        <div class="pamytka-cnt">
            <div class="image">
                <img src="/wp-content/themes/fpalaw/assets/img/instruction/logo.png" alt="Финансово-правовой альянс" />
            </div>
            <div class="text-cnt">
                <p>Для комфортного и эффективного сотрудничества мы просим вас соблюдать следующие правила взаимодействия:</p>
            </div>
            <div class="text-white-cnt">
                <div class="text-white-item">
                    <div class="number">1</div>
                    <div class="txt">
                        <p>Если вы позвоните нам, трубку может взять любой сотрудник подразделения. Он попросит сформулировать суть вашего вопроса. Далее он направит ваш вопрос в ответственное подразделение компании или сразу ответит на него.</p>
                    </div>
                </div>
                <div class="text-white-item">
                    <div class="number">2</div>
                    <div class="txt">
                        <p>Если вы хотите приехать на встречу со своим юристом, обязательно записывайтесь заранее! Мы хотим уделить вам максимум внимания, а для этого нужно точно определить дату и время встречи (если вы подойдете без записи – возможно, вас не смогут принять в этот день).</p>
                        <p>Чтобы записаться на встречу, достаточно просто заранее позвонить или написать нам.</p>
                    </div>
                </div>
                <div class="text-white-item">
                    <div class="number">3</div>
                    <div class="txt">
                        <p>Режим работы юридического подразделения – с <strong>9:00 до 19:00 (пн-чт)</strong> и с <strong>9:00 до 18:00 (пт)</strong>. Обеденный перерыв – <strong>с 13:30 до 14:30</strong>.</p>
                    </div>
                </div>
            </div>
            <div class="text-cnt">
                <p>Если вы хотите просто передать документы без встречи с юристом, это можно сделать в будние дни с 9:00 до 20:00, или в субботу с 10:00 до 19:00, оставив документы секретарям в приёмной (офис 326).</p>
                <p>Если вы хотите оплатить наши услуги или внести судебные расходы, это можно сделать в любое время в нашей бухгалтерии с 9:00 до 20:00 в будние дни, или с 10:00 до 18:30 в субботу. Инструкция по оплате услуг онлайн доступна на <a href="https://fpa.ru/oplata/">cтранице оплаты</a></p>
            </div>
            <div class="text-card-cnt">
                <div class="text-card-item">
                    <div class="title">Ваш юрист и его команда</div>
                    <div class="content">
                        <ul>
                            <li>Пн-Чт: <span class="blue">9:00</span>-<span class="blue">19:00</span> | обед с <span class="blue">13:30</span> до <span class="blue">14:30</span></li>
                            <li>Пт: <span class="blue">9:00</span>-<span class="blue">18:00</span> | обед с <span class="blue">13:30</span> до <span class="blue">14:30</span></li>
                            <li>Сб и Вс: <span class="red">выходной</span></li>
                        </ul>
                    </div>
                </div>
                <div class="text-card-item">
                    <div class="title">Касса бухгалтерии</div>
                    <div class="content">
                        <ul>
                            <li>Пн-Пт: <span class="blue">9:00</span>-<span class="blue">20:00</span> | без обеда</li>
                            <li>Сб: <span class="blue">10:00</span>-<span class="blue">18:30</span> | без обеда</li>
                            <li>Вс: <span class="red">выходной</span></li>
                        </ul>
                    </div>
                </div>
                <div class="text-card-item">
                    <div class="title">Прием документов секретарями (326 каб.)</div>
                    <div class="content">
                        <ul>
                            <li>Пн-Пт: <span class="blue">9:00</span>-<span class="blue">20:00</span> | без обеда</li>
                            <li>Сб: <span class="blue">10:00</span>-<span class="blue">19:00</span> | без обеда</li>
                            <li>Вс: <span class="red">выходной</span></li>
                        </ul>
                    </div>
                </div>
                <div class="text-card-item">
                    <div class="title">Дежурный юрист</div>
                    <div class="content">
                        <ul>
                            <li>Сб: <span class="blue">11:00</span>-<span class="blue">18:00</span> | обед с <span class="blue">13:30</span> до <span class="blue">14:30</span></li>
                            <li>Вс: <span class="red">выходной</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            
            <div class="text-cnt">
                <p>Суббота и воскресенье — выходные дни, но по субботам с 11:00 до 18:00 в офисе присутствует дежурный специалист. Это человек, который не занимается непосредственно вашим делом, но может помочь со срочными вопросами или встретиться с вами для подписания документов, которые для вас подготовили, если вы не смогли приехать в будни.</p>
            </div>
        </div>
    </div>
</section>











