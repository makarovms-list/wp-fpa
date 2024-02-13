<style>

    .calculator-navbar.calculator-navbar--show {
        display: none!important;
    }
    .btn-up {
        bottom: 20px!important;
    }
    .modal__wrap--services .wpcf7-form input[type=submit] {
        background: -webkit-gradient(linear, 100% 0, 0 0, from(#FB5A80), to(#F23965));
        background: -webkit-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        background: -moz-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        background: -o-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        background: linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
    }
    .modal__wrap--services .wpcf7-form input[type=submit]:hover {
        background: -webkit-gradient(linear, 100% 0, 0 0, from(#DD3C62), to(#D41B47));
        background: -webkit-linear-gradient(180deg, #DD3C62 0%, #D41B47 100%);
        background: -moz-linear-gradient(180deg, #DD3C62 0%, #D41B47 100%);
        background: -o-linear-gradient(180deg, #DD3C62 0%, #D41B47 100%);
        background: linear-gradient(180deg, #DD3C62 0%, #D41B47 100%);
    }
    .modal__wrap--callback .wpcf7-form input[type=submit] {
        background: -webkit-gradient(linear, 100% 0, 0 0, from(#FB5A80), to(#F23965));
        background: -webkit-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        background: -moz-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        background: -o-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        background: linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
    }
    .modal__wrap--callback .wpcf7-form input[type=submit]:hover {
        background: -webkit-gradient(linear, 100% 0, 0 0, from(#DD3C62), to(#D41B47));
        background: -webkit-linear-gradient(180deg, #DD3C62 0%, #D41B47 100%);
        background: -moz-linear-gradient(180deg, #DD3C62 0%, #D41B47 100%);
        background: -o-linear-gradient(180deg, #DD3C62 0%, #D41B47 100%);
        background: linear-gradient(180deg, #DD3C62 0%, #D41B47 100%);
    }
    section#bonus-questions {
        background: -webkit-linear-gradient(135deg, #EDF0F8 0%, #D7DEEF 100%);
        background: -moz-linear-gradient(135deg, #EDF0F8 0%, #D7DEEF 100%);
        background: -o-linear-gradient(135deg, #EDF0F8 0%, #D7DEEF 100%);
        background: linear-gradient(135deg, #EDF0F8 0%, #D7DEEF 100%);    
        padding: 120px 0;
    }
    section#bonus-questions .title {
        font-family: Inter;
        font-size: 2.125em;
        font-weight: 700;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: center; 
        margin-bottom: 20px;
    }
    section#bonus-questions .subtitle {
        font-family: Inter;
        font-size: 1em;
        font-weight: 500;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        color: #717B97;
        margin-bottom: 40px;
    }
    section#bonus-questions .vertical-slider {
        margin-bottom: 40px;
        counter-reset: section;
    }
    section#bonus-questions .vertical-slider-item {
        box-shadow: 0px 14px 34px 0px #00256633;
        background: #FFFFFF;
        border-radius: 15px;
        position: relative;
    }
    section#bonus-questions .vertical-slider-item+.vertical-slider-item {
        margin-top: 20px;
    }
    section#bonus-questions .vertical-slider-item .item-title {
        font-family: Inter;
        font-size: 1.375em;
        font-weight: 600;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        position: relative;
        padding: 18px;
        padding-left: 60px;
        cursor: pointer;
        color: #717B97;
    }
    section#bonus-questions .vertical-slider-item .item-title:before {
        counter-increment: section;
        content: counter(section);
        background: #F3F4F4;
        position: absolute;
        left: 18px;
        top: calc(50% - 16px);
        width: 32px;
        height: 32px;
        font-family: Montserrat;
        font-size: .8em;
        font-weight: 700;
        line-height: 120%;
        letter-spacing: 0em;
        text-align: center;
        color: #5381F6;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    section#bonus-questions .vertical-slider-item .item-title:after {
        content: "";
        background: url(/wp-content/themes/fpalaw/assets/img/newbonusprogram/small-arrow.svg) center center no-repeat;
        background-size: contain;
        position: absolute;
        right: 18px;
        top: calc(50% - 4px);
        width: 8px;
        height: 8px;
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
        transform: rotate(-180deg);
        -ms-transform: rotate(-1800deg);
        -webkit-transform: rotate(-180deg);
    }
    section#bonus-questions .vertical-slider-item.expanded .item-title:after {
        transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
    }
    section#bonus-questions .vertical-slider-item .item-subtitle {
        display: none;
        padding: 0 20px 20px;
        font-family: Inter;
        font-size: 1em;
        font-weight: 400;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
    }
    section#bonus-questions .vertical-slider-item .item-subtitle p, 
    section#bonus-questions .vertical-slider-item .item-subtitle ul li {
        font-family: Inter;
        font-size: 1em;
        font-weight: 400;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
    } 
    .kviz-cnt .calculation__header {
        position: relative;
        padding: 25px 25px 15px;
        border-bottom: none;
    }
    .kviz-cnt .calculation__header .calculation__title-head {
        font-family: Inter;
        font-size: 1.125em;
        font-weight: 600;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        color: #5381F6;
        margin: 0;
    }
    .kviz-cnt .calculation__header .calculation__slides--inpost {
        top: 25px;
        font-family: Inter;
        font-size: 1.125em;
        font-weight: 700;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: right;
        color: #717B97;
    }
    .kviz-cnt .calculation__inner--inpost {
        background: #fff;
        padding: 0 25px 0;
        margin-bottom: 0;
    }
    .kviz-cnt .calculation__nav {
        background: #fff;
        padding: 15px 25px 25px;
    }
    .kviz-cnt .calculation__tab_success {
        padding-top: 25px;
        padding-bottom: 25px;
    }
    .kviz-cnt .calculation__tab_success .result_message img {
        margin: 0 auto;
    }
    .kviz-cnt .calculation__tab_success .result_message .title {
        font-size: 1.625em;
    }
    .kviz-cnt .calculation__tab_success .result_message .text {
        font-family: Inter;
        font-size: 1.125em;
        font-weight: 400;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: center;
        color: #717B97;
    }
    
    
    
    @media (max-width: 782px) {
        section#bonus-questions {
            padding: 60px 0;
        }
        section#bonus-questions .title {
            font-size: 1.375em;
            text-align: left;
            margin-bottom: 10px;
        }
        section#bonus-questions .subtitle {
            font-size: 1.125em;
            text-align: left;
        }
        section#bonus-questions .vertical-slider-item .item-title:before {
            display: none;
        }
        section#bonus-questions .vertical-slider-item .item-title {
            padding-left: 18px;
            font-size: 1em;
        }
        .kviz-cnt .calculation__tab_success .result_message .title {
            font-size: 1em;
        }
        .kviz-cnt .calculation__tab_success .result_message .text {
            font-size: 0.9em;
        }
        .kviz-cnt .calculation__tab_success .result_message .text {
            text-align: left;
        }
    }
</style>
<section id="bonus-questions">
    <div class="container">
        <div class="title">Главные вопросы о процедуре банкротства</div>
        <div class="subtitle">Банкротство кажется вам чем-то запутанным и неизведанным? Это вовсе не так! Отвечаем на самые распространенные вопросы и помогаем разобраться в нюансах процедуры:</div>
        <div class="vertical-slider">
            <div class="vertical-slider-item">
                <div class="item-title">Почему банкротство физических лиц — лучшее решение? </div>
                <div class="item-subtitle">Процедура списания долгов — единственный законный и гарантированный способ навсегда забыть о задолженностях и кредитах и начать финансовую жизнь заново. Права граждан при банкротстве охраняются ФЗ-127, в котором также зафиксирована обязанность инициировать процедуру, если сумма долгов перед всеми кредиторами превышает 500 000 руб.</div>
            </div>
            <div class="vertical-slider-item">
                <div class="item-title">При какой сумме долга можно инициировать банкротство?</div>
                <div class="item-subtitle">
                    <p>Вы вправе подать на банкротство при любой сумме задолженности. Помните: не нужно ждать, пока она достигнет 500 000 руб.</p>
                </div>
            </div>            
            <div class="vertical-slider-item">
                <div class="item-title">Сколько длится процедура банкротства?</div>
                <div class="item-subtitle">
                    <p>Вы вправе подать на банкротство при любой сумме задолженности. Помните: не нужно ждать, пока она достигнет 500 000 руб.</p>
                </div>
            </div>
            <div class="vertical-slider-item">
                <div class="item-title">Какие документы нужны для вступления в процедуру?</div>
                <div class="item-subtitle">
                    <p><strong>Заявление</strong></p>
                    <p>Прежде всего, нужно составить заявление, которое направляется в арбитражный суд вместе с остальными документами. Доверьте оформление заявления юристам: они помогут все правильно заполнить и избежать ошибок.</p>
                    <p><strong>Личные документы</strong></p>
                    <ul>
                        <li>паспорт</li>
                        <li>ИНН</li>
                        <li>СНИЛС</li>
                        <li>свидетельство о заключении или расторжении брака, брачный договор (при наличии)<br>
                        свидетельство о рождении ребенка (при наличии)</li>
                    </ul>
                    <p><strong>Финансовые документы</strong></p>
                    <ul>
                        <li>опись имущества,</li>
                        <li>справки о доходах (2-НДФЛ, о размере пенсии, из центра занятости и другие)</li>
                        <li>выписки со счетов и вкладов,</li>
                        <li>на автомобиль, на недвижимое имущество,</li>
                        <li>договоры за 3 года, предметом которых выступало имущество</li>
                    </ul>
                    <p><strong>Документы о долговых обязательствах</strong></p>
                    <ul>
                        <li>кредитные договоры</li>
                        <li>копии исполнительных листов</li>
                        <li>судебные акты</li>
                        <li>претензии от кредиторов о возврате задолженностей</li>
                        <li>расписки, подтверждающие займы у частных лиц</li>
                        <li>другие документы о наличии долговых обязательств (например, по оплате услуг ЖКХ, штрафам ГИБДД, налогам и сборам)</li>
                    </ul>
                    <p><strong>Дополнительные документы</strong></p>
                    <p>Не забудьте про оплату государственной пошлины: квитанция, подтверждающая платеж, прилагается к заявлению.</p>
                    <p>В случае если у должника имеется тяжелое заболевание или ему присвоена группа инвалидности, необходимо приложить к заявлению заключение врачебной комиссии или медицинскую справку.</p>
                </div>
            </div>
            <div class="vertical-slider-item">
                <div class="item-title">Как банкротство поможет избавиться от коллекторов?</div>
                <div class="item-subtitle">
                    <p>Признание финансовой несостоятельности — законный и надежный способ не только списать все долги, но и избавиться от коллекторов. Сразу после начала работы с вами мы отправляем Заявление о взаимодействии через адвоката. Взыскатели больше не будут иметь права приходить к вам, звонить и присылать уведомления, а вы перестанете беспокоиться.</p>
                    <p>Доверяйте ваше банкротство опытным специалистам. Записывайтесь на консультацию в удобное для вас время: юристы нашей компании детально проанализируют вашу ситуацию, помогут правильно подготовиться к процедуре, будут сопровождать вас на всех ее этапах и законно защищать от кредиторов. Результат — успешное списание задолженностей и прекращение взаимодействия с коллекторами.</p>
                </div>
            </div>
            <div class="vertical-slider-item">
                <div class="item-title">Почему банкротство — это выгодно</div>
                <div class="item-subtitle">
                    <p>Банкротство требует времени и расходов, поэтому мы тщательно оцениваем все перспективы и возможности. Юристы нашей компании, которые знакомы со всеми особенностями списания долгов и знают, как сократить расходы. Услуги специалистов в любом случае выйдут дешевле, чем неподъемные платежи или самостоятельные попытки вести банкротство.</p>
                    <p><strong>И еще один плюс — рассрочка.</strong> При обращении в нашу вам не нужно оплачивать всю стоимость банкротства разом, если нет такой возможности. Мы понимаем, что собрать такую сумму сложно, поэтому предлагаем рассрочку на 12 месяцев — рассчитывайтесь небольшими платежами в комфортном режиме. Доверяйте профессионалам и записывайтесь к нам на консультацию.</p>
                </div>
            </div>
            <div class="vertical-slider-item">
                <div class="item-title">Как мы работаем или что такое банкротство под ключ?</div>
                <div class="item-subtitle">
                    <p>Первым делом наши юристы отвечают на все вопросы должника, рассказывают, как проходит банкротство и какие долги удастся погасить с его помощью.</p>
                    <p>Банкротство под ключ состоит из следующих этапов:</p>
                    <p><strong>1. Разбор ситуации и определение плана действий.</strong><br>
                    Мы детально анализируем каждый случай, с которым обращаются в нашу компанию, чтобы разобраться в нюансах, разработать эффективную стратегию банкротства и списать все долги.</p>
                    <p><strong>2. Сбор документов.</strong><br>
                    Благодаря высокому уровню подготовки профессионалов и отсутствию недочетов при составлении, заявление и остальной пакет документов будут быстро приняты к производству.</p>
                    <p><strong>3. Первое судебное заседание.</strong><br>
                    Арбитражный суд рассматривает документы и принимает решение о введении процедуры банкротства. На всех заседаниях ваши интересы в суде будет представлять опытный юрист.</p>
                    <p><strong>4. Введение одной из процедур банкротства.</strong><br>
                    Для того чтобы ускорить процесс, мы направляем мотивированное ходатайство о пропуске этапа реструктуризации долгов и введении реализации имущества.</p>
                    <p><strong>5. Реализация имущества.</strong><br>
                    На этом этапе финансовый управляющий проводит все необходимые действия.</p>
                    <p><strong>6. Списание долгов.</strong><br>
                    Главный итог — списание долгов. Даже если с кредиторами не были произведены расчеты (например, если у должника нет имущества), задолженности все равно аннулируются, в полном объеме и безвозвратно.</p>
                </div>
            </div>
        </div>
        <div class="title">Нам важно ваше мнение</div>
        <div class="subtitle">Мы постоянно улучшаем качество нашего сервиса и нам очень важно ваше мнение. Поэтому мы предлагаем вам ответить на несколько вопросов, чтобы мы могли стать еще лучше</div>
        <div class="kviz-cnt">
            <div class="calculation-v2 calculation--inpost" id="calculation--inpost__v2">
                <div class="calculation__header">
  		            <div class="calculation__title-head">Опрос</div>
  		            <div class="calculation__slides calculation__slides--inpost">
			            <span class="calculation__slide--current">1</span> из <span class="calculation__slide--summ">3</span>
		            </div>
	            </div>
	            <div class="calculation__inner calculation__inner--inpost">
                    <div class="calculation__tab calculation__tab__indx__1" data-question-indx="1" data-question-id="usefully">
                        <div class="calculation__content calculation__content--small">
                            <h4 class="calculation__title calculation__title--small">
                                <span class="text">Была ли эта страница полезна для вас?</span>
                            </h4>
                        </div>
                        <div class="calculation__variants" id="question_usefully">
        	                <div class="radio calculation__radio calculation__radio--small">
                                <label id="label_question_usefully_1" for="usefully_answer_1" class="radio__label radio__label--small question_usefully question_usefully_yes" data-value="yes">Да, информация была полезна для меня</label>
                                <input id="usefully_answer_1" class="radio__default" type="radio" name="usefully" value="Да, информация была полезна для меня">
                                <span class="radio__new radio__new--accent"></span>
                            </div>
        	                <div class="radio calculation__radio calculation__radio--small ">
                                <label id="label_question_usefully_2" for="usefully_answer_2" class="radio__label radio__label--small question_usefully question_usefully_no" data-value="no">Нет, мне это не интересно</label>
                                <input id="usefully_answer_2" class="radio__default" type="radio" name="usefully" value="Нет, мне это не интересно">
                                <span class="radio__new radio__new--accent"></span>
                            </div>
    	                
        	                <div class="radio calculation__radio calculation__radio--small ">
                                <label id="label_question_usefully_3" for="usefully_answer_3" class="radio__label radio__label--small question_usefully question_usefully_difficult" data-value="difficult">Затрудняюсь ответить</label>
                                <input id="usefully_answer_3" class="radio__default" type="radio" name="usefully" value="Затрудняюсь ответить">
                                <span class="radio__new radio__new--accent"></span>
                            </div>
    	                </div>
                    </div>
                    <div class="calculation__tab calculation__tab__indx__2" data-question-indx="2" data-question-id="usage">
                        <div class="calculation__content calculation__content--small">
                            <h4 class="calculation__title calculation__title--small">
                                <span class="text">Вы уже пользовались нашей бонусной программой?</span>
                            </h4>
                        </div>
                        <div class="calculation__variants" id="question_usage">
        	                <div class="radio calculation__radio calculation__radio--small">
                                <label id="label_question_usage_1" for="usage_answer_1" class="radio__label radio__label--small question_usage question_usage_yes" data-value="yes">Да, уже посоветовал вас друзьям</label>
                                <input id="usage_answer_1" class="radio__default" type="radio" name="usage" value="Да, уже посоветовал вас друзьям">
                                <span class="radio__new radio__new--accent"></span>
                            </div>
        	                <div class="radio calculation__radio calculation__radio--small ">
                                <label id="label_question_usage_2" for="usage_answer_2" class="radio__label radio__label--small question_usage question_usage_no" data-value="no">Ещё нет, но воспользуюсь при случае</label>
                                <input id="usage_answer_2" class="radio__default" type="radio" name="usage" value="Ещё нет, но воспользуюсь при случае">
                                <span class="radio__new radio__new--accent"></span>
                            </div>
    	                
        	                <div class="radio calculation__radio calculation__radio--small ">
                                <label id="label_question_usage_3" for="usage_answer_3" class="radio__label radio__label--small question_usage question_usage_difficult" data-value="difficult">Нет, мне это не интересно</label>
                                <input id="usage_answer_3" class="radio__default" type="radio" name="usage" value="Нет, мне это не интересно">
                                <span class="radio__new radio__new--accent"></span>
                            </div>
    	                </div>
                    </div>
                    <div class="calculation__tab calculation__tab__indx__3" data-question-indx="3" data-question-id="use">
                        <div class="calculation__content calculation__content--small">
                            <h4 class="calculation__title calculation__title--small">
                                <span class="text">Почему воспользовались бонусной программой?</span>
                            </h4>
                        </div>
                        <div class="calculation__variants" id="question_use">
        	                <div class="radio calculation__radio calculation__radio--small">
                                <label id="label_question_use_1" for="use_answer_1" class="radio__label radio__label--small question_use question_use_yes" data-value="yes">Рад помочь друзьям</label>
                                <input id="use_answer_1" class="radio__default" type="radio" name="use" value="Рад помочь друзьям">
                                <span class="radio__new radio__new--accent"></span>
                            </div>
        	                <div class="radio calculation__radio calculation__radio--small ">
                                <label id="label_question_use_2" for="use_answer_2" class="radio__label radio__label--small question_use question_use_no" data-value="no">Дополнительных доход</label>
                                <input id="use_answer_2" class="radio__default" type="radio" name="use" value="Дополнительных доход">
                                <span class="radio__new radio__new--accent"></span>
                            </div>
    	                
        	                <div class="radio calculation__radio calculation__radio--small ">
                                <label id="label_question_use_3" for="use_answer_3" class="radio__label radio__label--small question_use question_use_difficult" data-value="difficult">Ещё не пользовался</label>
                                <input id="use_answer_3" class="radio__default" type="radio" name="use" value="Ещё не пользовался">
                                <span class="radio__new radio__new--accent"></span>
                            </div>
    	                </div>
                    </div>
                    
                    
                    <div class="calculation__tab_success hidden">
                        <div class="result_message">
                            <div class="image">
                                <img src="/wp-content/themes/fpalaw/assets/img/newbonusprogram/kviz-result.png" alt="Благодарим вас за участие в опросе" />
                            </div>
                            <div class="title">Благодарим вас за участие в опросе</div>
                            <div class="text">Ваши ответы помогают нам совершенствовать нашу работу и предоставлять более качественную информацию.</div>
                        </div>
                    </div>
                    
                </div>
                <div class="calculation__nav">
			        <a class="btn calculation__btn calculation__btn--prev disabled" formaction="" id="btn-prev-post" disabled="true">
				        <span>Назад</span>
			        </a>
			        <a class="btn calculation__btn calculation__btn--next" formaction="" id="btn-next-post">
				        <span>Ответить</span>
			        </a>
			        <a class="btn calculation__btn calculation__btn--form1 hidden" formaction="" data-name="SMS-32 Информационные статьи" data-id="btn-uznat-rezultat-post" data-sms="36" id="btn-calc-modal-post">
				        <span>Ответить</span>
			        </a>
                </div>
            </div>
            <?php 
            /*
                echo do_shortcode('[quiz_for_articles id="21208" title="___Заголовок__"]');
            */
            ?>
        </div>
    </div>
</section>