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

    
    <?php 
        $popup_year_arr = ['01' => 'января', '02' => 'февраля', '03' => 'марта', '04' => 'апреля', '05' => 'мая', '06' => 'июня', '07' => 'июля', '08' => 'августа', '09' => 'сентября', '10' => 'октября', '11' => 'ноября', '12' => 'декабря'];
        $popup_year_date = get_field('timer', 374, false);
        $popup_year_date = new DateTime($popup_year_date);
        $popup_year_month = $popup_year_date->format('m');
    ?>
    
    <div class="popup__cnt hidden">
        <div class="popup__overlay">
            <div class="popup-item__cnt aim3free-form hidden" data-form-name="SMS-61 Списать долги бесплатно в МФЦ? Пройдите тест и узнайте" data-form-sms="64" data-form-time="1" data-form-title="Списать долги бесплатно в МФЦ? Пройдите тест и узнайте">
                
                <div class="close">
                    <button class="popup__close">
                        <svg><path d="M1.253.215a.734.734 0 011.038 0l13.494 13.494a.734.734 0 010 1.038l-1.038 1.038a.734.734 0 01-1.038 0L.215 2.291a.734.734 0 010-1.038L1.253.215z"></path><path d="M.215 14.747a.734.734 0 010-1.038L13.709.215a.734.734 0 011.038 0l1.038 1.038a.734.734 0 010 1.038L2.291 15.785a.734.734 0 01-1.038 0L.215 14.747z"></path></svg>
                    </button>
                </div>
                <div class="content">
                    <!--<div class="title-big">Ответив на <span>4 вопроса</span> онлайн-теста, вы узнаете, вправе ли списать все долги <span>бесплатно в МФЦ</span></div>-->
                    
                    <?php echo do_shortcode( "[quiz_for_articles id='4369' title='Ответьте на <span class=\"text-accent\">4 вопроса</span> онлайн-теста и узнайте, вправе ли вы списать все долги <span class=\"text-accent\">в МФЦ бесплатно</span>?']" ); ?>
                    
                    
                    <!--
                    <div class="custom-form">
                        <?=do_shortcode('[contact-form-7 id="25832" title="Форма aim3free"]'); ?>
                    </div>
                    -->
                    <!--
                    <div class="custom_form_kviz">
                        <div class="calculation__tab calculation__tab__indx__1 " data-question-indx="1" data-question-id="summ">
                            <div class="calculation__content calculation__content--small">
                                <h4 class="calculation__title calculation__title--small"><span class="number hidden">1. </span><span class="text"> Какова сумма ваших долгов?</span></h4>
                                <div class="notice hidden">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 0.5C8.02219 0.5 6.08879 1.08649 4.4443 2.1853C2.79981 3.28412 1.51809 4.8459 0.761209 6.67316C0.00433284 8.50042 -0.1937 10.5111 0.192152 12.4509C0.578004 14.3907 1.53041 16.1725 2.92894 17.5711C4.32746 18.9696 6.10929 19.922 8.0491 20.3078C9.98891 20.6937 11.9996 20.4957 13.8268 19.7388C15.6541 18.9819 17.2159 17.7002 18.3147 16.0557C19.4135 14.4112 20 12.4778 20 10.5C20 9.18678 19.7413 7.88642 19.2388 6.67316C18.7362 5.45991 17.9997 4.35752 17.0711 3.42893C16.1425 2.50035 15.0401 1.76375 13.8268 1.2612C12.6136 0.758658 11.3132 0.5 10 0.5ZM10 15.5C9.80222 15.5 9.60888 15.4413 9.44443 15.3315C9.27998 15.2216 9.15181 15.0654 9.07612 14.8827C9.00044 14.7 8.98063 14.4989 9.01922 14.3049C9.0578 14.1109 9.15304 13.9327 9.2929 13.7929C9.43275 13.653 9.61093 13.5578 9.80491 13.5192C9.99889 13.4806 10.2 13.5004 10.3827 13.5761C10.5654 13.6518 10.7216 13.78 10.8315 13.9444C10.9414 14.1089 11 14.3022 11 14.5C11 14.7652 10.8946 15.0196 10.7071 15.2071C10.5196 15.3946 10.2652 15.5 10 15.5ZM11 11.5C11 11.7652 10.8946 12.0196 10.7071 12.2071C10.5196 12.3946 10.2652 12.5 10 12.5C9.73479 12.5 9.48043 12.3946 9.2929 12.2071C9.10536 12.0196 9 11.7652 9 11.5V6.5C9 6.23478 9.10536 5.98043 9.2929 5.79289C9.48043 5.60536 9.73479 5.5 10 5.5C10.2652 5.5 10.5196 5.60536 10.7071 5.79289C10.8946 5.98043 11 6.23478 11 6.5V11.5Z" fill="white"></path></svg>
                                    <span>Пожалуйста, ответьте на данный вопрос</span>
                                </div>
                            </div>
                            <div class="calculation__variants" id="question_0_142618">
            	                <div class="radio calculation__radio calculation__radio--small ">
                                    <label id="label_question_summ_0_0_500997" for="answer_0_0_500997" class="radio__label radio__label--small question_summ question_summ_300K" data-value="300K">До 300 000 руб.</label>
                                    <input id="answer_0_0_500997" class="radio__default" type="radio" name="summ" value="До 300 000 руб.">
                                    <span class="radio__new radio__new--accent"></span>
                                </div>
            	                <div class="radio calculation__radio calculation__radio--small ">
                                    <label id="label_question_summ_0_1_94226" for="answer_0_1_94226" class="radio__label radio__label--small question_summ question_summ_500K" data-value="500K">300 000 руб. - 500 000 руб.</label>
                                    <input id="answer_0_1_94226" class="radio__default" type="radio" name="summ" value="300 000 руб. - 500 000 руб.">
                                    <span class="radio__new radio__new--accent"></span>
                                </div>
            	                <div class="radio calculation__radio calculation__radio--small ">
                                    <label id="label_question_summ_0_2_602704" for="answer_0_2_602704" class="radio__label radio__label--small question_summ question_summ_1000K" data-value="1000K">Более 500 000 руб.</label>
                                    <input id="answer_0_2_602704" class="radio__default" type="radio" name="summ" value="Более 500 000 руб.">
                                    <span class="radio__new radio__new--accent"></span>
                                </div>
    	                    </div>
                        </div>
                        <div class="calculation__tab calculation__tab__indx__2 hidden" data-question-indx="2" data-question-id="fssp">
                            <div class="calculation__content calculation__content--small">
                                <h4 class="calculation__title calculation__title--small"><span class="number hidden">2. </span><span class="text"> Банки подавали на вас в суд?</span></h4>
                                <div class="notice hidden">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 0.5C8.02219 0.5 6.08879 1.08649 4.4443 2.1853C2.79981 3.28412 1.51809 4.8459 0.761209 6.67316C0.00433284 8.50042 -0.1937 10.5111 0.192152 12.4509C0.578004 14.3907 1.53041 16.1725 2.92894 17.5711C4.32746 18.9696 6.10929 19.922 8.0491 20.3078C9.98891 20.6937 11.9996 20.4957 13.8268 19.7388C15.6541 18.9819 17.2159 17.7002 18.3147 16.0557C19.4135 14.4112 20 12.4778 20 10.5C20 9.18678 19.7413 7.88642 19.2388 6.67316C18.7362 5.45991 17.9997 4.35752 17.0711 3.42893C16.1425 2.50035 15.0401 1.76375 13.8268 1.2612C12.6136 0.758658 11.3132 0.5 10 0.5ZM10 15.5C9.80222 15.5 9.60888 15.4413 9.44443 15.3315C9.27998 15.2216 9.15181 15.0654 9.07612 14.8827C9.00044 14.7 8.98063 14.4989 9.01922 14.3049C9.0578 14.1109 9.15304 13.9327 9.2929 13.7929C9.43275 13.653 9.61093 13.5578 9.80491 13.5192C9.99889 13.4806 10.2 13.5004 10.3827 13.5761C10.5654 13.6518 10.7216 13.78 10.8315 13.9444C10.9414 14.1089 11 14.3022 11 14.5C11 14.7652 10.8946 15.0196 10.7071 15.2071C10.5196 15.3946 10.2652 15.5 10 15.5ZM11 11.5C11 11.7652 10.8946 12.0196 10.7071 12.2071C10.5196 12.3946 10.2652 12.5 10 12.5C9.73479 12.5 9.48043 12.3946 9.2929 12.2071C9.10536 12.0196 9 11.7652 9 11.5V6.5C9 6.23478 9.10536 5.98043 9.2929 5.79289C9.48043 5.60536 9.73479 5.5 10 5.5C10.2652 5.5 10.5196 5.60536 10.7071 5.79289C10.8946 5.98043 11 6.23478 11 6.5V11.5Z" fill="white"></path></svg>
                                    <span>Пожалуйста, ответьте на данный вопрос</span>
                                </div>
                            </div>
                            <div class="calculation__variants" id="question_1_79601">
            	                <div class="radio calculation__radio calculation__radio--small ">
                                    <label id="label_question_fssp_1_0_42574" for="answer_1_0_42574" class="radio__label radio__label--small question_fssp question_fssp_yes" data-value="yes">Да</label>
                                    <input id="answer_1_0_42574" class="radio__default" type="radio" name="fssp" value="Да">
                                    <span class="radio__new radio__new--accent"></span>
                                </div>
            	                <div class="radio calculation__radio calculation__radio--small ">
                                    <label id="label_question_fssp_1_1_595442" for="answer_1_1_595442" class="radio__label radio__label--small question_fssp question_fssp_no" data-value="no">Нет</label>
                                    <input id="answer_1_1_595442" class="radio__default" type="radio" name="fssp" value="Нет">
                                    <span class="radio__new radio__new--accent"></span>
                                </div>
            	                <div class="radio calculation__radio calculation__radio--small ">
                                    <label id="label_question_fssp_1_2_531777" for="answer_1_2_531777" class="radio__label radio__label--small question_fssp question_fssp_donot_know" data-value="donot_know">Затрудняюсь ответить</label>
                                    <input id="answer_1_2_531777" class="radio__default" type="radio" name="fssp" value="Затрудняюсь ответить">
                                    <span class="radio__new radio__new--accent"></span>
                                </div>
        	                </div>
                        </div>
                        <div class="calculation__tab calculation__tab__indx__3 hidden" data-question-indx="3" data-question-id="officially-employed">
                            <div class="calculation__content calculation__content--small">
                                <h4 class="calculation__title calculation__title--small"><span class="number hidden">3. </span><span class="text">Вы официально трудоустроены?</span></h4>
                                <div class="notice hidden">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 0.5C8.02219 0.5 6.08879 1.08649 4.4443 2.1853C2.79981 3.28412 1.51809 4.8459 0.761209 6.67316C0.00433284 8.50042 -0.1937 10.5111 0.192152 12.4509C0.578004 14.3907 1.53041 16.1725 2.92894 17.5711C4.32746 18.9696 6.10929 19.922 8.0491 20.3078C9.98891 20.6937 11.9996 20.4957 13.8268 19.7388C15.6541 18.9819 17.2159 17.7002 18.3147 16.0557C19.4135 14.4112 20 12.4778 20 10.5C20 9.18678 19.7413 7.88642 19.2388 6.67316C18.7362 5.45991 17.9997 4.35752 17.0711 3.42893C16.1425 2.50035 15.0401 1.76375 13.8268 1.2612C12.6136 0.758658 11.3132 0.5 10 0.5ZM10 15.5C9.80222 15.5 9.60888 15.4413 9.44443 15.3315C9.27998 15.2216 9.15181 15.0654 9.07612 14.8827C9.00044 14.7 8.98063 14.4989 9.01922 14.3049C9.0578 14.1109 9.15304 13.9327 9.2929 13.7929C9.43275 13.653 9.61093 13.5578 9.80491 13.5192C9.99889 13.4806 10.2 13.5004 10.3827 13.5761C10.5654 13.6518 10.7216 13.78 10.8315 13.9444C10.9414 14.1089 11 14.3022 11 14.5C11 14.7652 10.8946 15.0196 10.7071 15.2071C10.5196 15.3946 10.2652 15.5 10 15.5ZM11 11.5C11 11.7652 10.8946 12.0196 10.7071 12.2071C10.5196 12.3946 10.2652 12.5 10 12.5C9.73479 12.5 9.48043 12.3946 9.2929 12.2071C9.10536 12.0196 9 11.7652 9 11.5V6.5C9 6.23478 9.10536 5.98043 9.2929 5.79289C9.48043 5.60536 9.73479 5.5 10 5.5C10.2652 5.5 10.5196 5.60536 10.7071 5.79289C10.8946 5.98043 11 6.23478 11 6.5V11.5Z" fill="white"></path></svg>
                                    <span>Пожалуйста, ответьте на данный вопрос</span>
                                </div>
                            </div>
                            <div class="calculation__variants" id="question_2_843324">
            	                <div class="radio calculation__radio calculation__radio--small ">
                                    <label id="label_question_officially-employed_2_0_720860" for="answer_2_0_720860" class="radio__label radio__label--small question_officially-employed question_officially-employed_yes" data-value="yes">Да</label>
                                    <input id="answer_2_0_720860" class="radio__default" type="radio" name="officially-employed" value="Да">
                                    <span class="radio__new radio__new--accent"></span>
                                </div>
            	                <div class="radio calculation__radio calculation__radio--small ">
                                    <label id="label_question_officially-employed_2_1_239617" for="answer_2_1_239617" class="radio__label radio__label--small question_officially-employed question_officially-employed_no" data-value="no">Нет</label>
                                    <input id="answer_2_1_239617" class="radio__default" type="radio" name="officially-employed" value="Нет">
                                    <span class="radio__new radio__new--accent"></span>
                                </div>
            	                <div class="radio calculation__radio calculation__radio--small difficult_answer">
                                    <label id="label_question_officially-employed_2_2_233513" for="answer_2_2_233513" class="radio__label radio__label--small question_officially-employed question_officially-employed_donot_know" data-value="donot_know"><span>Затрудняюсь ответить</span></label>
                                    <input id="answer_2_2_233513" class="radio__default" type="radio" name="officially-employed" value="Затрудняюсь ответить">
                                    <span class="radio__new radio__new--accent"></span>
                                </div>
        	                </div>
                        </div>
                        <div class="calculation__nav">
        			        <a class="btn calculation__btn calculation__btn--form hidden" formaction="" data-name="SMS-60 Мы бесплатно спишем долги, если Ваша ситуация соответствует 3 условиям" data-id="btn-uznat-rezultat-post" data-sms="63" data-title="Мы бесплатно спишем долги, если Ваша ситуация соответствует 3 условиям" id="btn-calc-modal-post">
        				        <span>Ответить</span>
        			        </a>
                        </div>
                    </div>
                    -->
                </div>
            </div>
            <div class="popup-item__cnt aimfree__thanks hidden">
                <div class="close">
                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0H34C39.5228 0 44 4.47715 44 10V44H0V0Z" fill="#5381F6"/>
                        <path d="M10.6709 10.6709C11.1006 10.2413 11.6834 10 12.291 10C12.8986 10 13.4814 10.2413 13.9111 10.6709L22.0138 18.7737L30.1166 10.6709C30.5488 10.2535 31.1276 10.0225 31.7284 10.0278C32.3292 10.033 32.904 10.274 33.3288 10.6988C33.7537 11.1237 33.9947 11.6984 33.9999 12.2993C34.0051 12.9001 33.7742 13.4789 33.3567 13.9111L25.254 22.0138L33.3567 30.1166C33.7742 30.5488 34.0051 31.1276 33.9999 31.7284C33.9947 32.3292 33.7537 32.904 33.3288 33.3288C32.904 33.7537 32.3292 33.9947 31.7284 33.9999C31.1276 34.0051 30.5488 33.7742 30.1166 33.3567L22.0138 25.254L13.9111 33.3567C13.4789 33.7742 12.9001 34.0051 12.2993 33.9999C11.6984 33.9947 11.1237 33.7537 10.6988 33.3288C10.274 32.904 10.033 32.3292 10.0278 31.7284C10.0225 31.1276 10.2535 30.5488 10.6709 30.1166L18.7737 22.0138L10.6709 13.9111C10.2413 13.4814 10 12.8986 10 12.291C10 11.6834 10.2413 11.1006 10.6709 10.6709Z" fill="white"/>
                    </svg>
                </div>
                <div class="content">
                    <p class="title">Мы получили ваше обращение</p>
                    <p class="subtitle">Наши специалисты свяжутся с вами в самое ближайшее время</p>
                    <a class="btn" href="https://fpa.ru/otzyvy/">Смотреть отзывы 5 856 клиентов</a>
                </div>
            </div>
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
                <?php echo do_shortcode( '[contact-form-7 id="20982" title="Онлайн калькулятор на десктопах (из navbar) - Ответ придёт в СМС-сообщении в течение 90 секунд" html_class="form modal__form form-test"]' ); ?>
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
       
       
        <div class="modal__wrap modal__wrap--services hidden">
          <button class="no-btn modal__close">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#close"></use>
            </svg>
          </button>
          <h3 class="modal__title">Узнайте можно ли вам списать долги бесплатно</h3>
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