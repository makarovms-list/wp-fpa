<style>
    header.header {
        display: none!important;
    }
    footer {
        display: none!important;
    }
    .calculator-navbar {
        display: none!important;
    }
    body {
        background-color: rgba(229,229,229,1);
    }
    section.custom-kviz {
        max-width: 980px;
        margin: 120px auto;
    }
    section.custom-kviz h1 {
        margin-bottom: 36px;
    }
    section.custom-kviz h2 {
        color: #393939;
        font-size: 18px;
        padding: 0;
    }
    section.custom-kviz .question-item {
        margin-bottom: 30px;
    }
    section.custom-kviz .question-item .notice {
        background: #E23836;
        border: 2px solid #E23836;
        box-sizing: border-box;
        border-radius: 6px;
        margin-bottom: 20px;
        grid-template-rows: auto;
        grid-template-columns: 20px auto;
        grid-column-gap: 8px;
        grid-row-gap: 8px;
        padding: 8px 16px;
    }    
    section.custom-kviz .question-item .notice:not(.hidden) {
        display: grid;
        align-items: center;
    }
    section.custom-kviz .question-item .notice span {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 145%;
        color: #FFFFFF;
    }
    
    
    
    
    
    
    @media (max-width: 768px) {
        section.custom-kviz {
            margin: 60px auto;
        }
        section.custom-kviz h1 {
            font-size: 22px;
        }
        section.custom-kviz h2 {
            font-size: 16px;
        }
        section.custom-kviz .submit-cnt button {
            width: 100%;
        }
    }

</style>
<section class="custom-kviz">
    <div class="container">
        <h1>Ответив на <span class="text-accent">3 вопроса</span> онлайн-теста, вы узнаете, вправе ли вы списать все ваши долги cо <span class="text-accent">100% гарантией результата через МФЦ</span> СПб по акции до <span class="text-accent">3 мая 2023 г.</span></h1>
        <div class="kviz-cnt">
            <div class="question-item">
                <h2>1. Какова общая сумма задолженности перед всеми кредиторами?</h2>
                <div class="notice hidden"><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 0.5C8.02219 0.5 6.08879 1.08649 4.4443 2.1853C2.79981 3.28412 1.51809 4.8459 0.761209 6.67316C0.00433284 8.50042 -0.1937 10.5111 0.192152 12.4509C0.578004 14.3907 1.53041 16.1725 2.92894 17.5711C4.32746 18.9696 6.10929 19.922 8.0491 20.3078C9.98891 20.6937 11.9996 20.4957 13.8268 19.7388C15.6541 18.9819 17.2159 17.7002 18.3147 16.0557C19.4135 14.4112 20 12.4778 20 10.5C20 9.18678 19.7413 7.88642 19.2388 6.67316C18.7362 5.45991 17.9997 4.35752 17.0711 3.42893C16.1425 2.50035 15.0401 1.76375 13.8268 1.2612C12.6136 0.758658 11.3132 0.5 10 0.5ZM10 15.5C9.80222 15.5 9.60888 15.4413 9.44443 15.3315C9.27998 15.2216 9.15181 15.0654 9.07612 14.8827C9.00044 14.7 8.98063 14.4989 9.01922 14.3049C9.0578 14.1109 9.15304 13.9327 9.2929 13.7929C9.43275 13.653 9.61093 13.5578 9.80491 13.5192C9.99889 13.4806 10.2 13.5004 10.3827 13.5761C10.5654 13.6518 10.7216 13.78 10.8315 13.9444C10.9414 14.1089 11 14.3022 11 14.5C11 14.7652 10.8946 15.0196 10.7071 15.2071C10.5196 15.3946 10.2652 15.5 10 15.5ZM11 11.5C11 11.7652 10.8946 12.0196 10.7071 12.2071C10.5196 12.3946 10.2652 12.5 10 12.5C9.73479 12.5 9.48043 12.3946 9.2929 12.2071C9.10536 12.0196 9 11.7652 9 11.5V6.5C9 6.23478 9.10536 5.98043 9.2929 5.79289C9.48043 5.60536 9.73479 5.5 10 5.5C10.2652 5.5 10.5196 5.60536 10.7071 5.79289C10.8946 5.98043 11 6.23478 11 6.5V11.5Z" fill="white"></path></svg><span>Пожалуйста, ответьте на данный вопрос</span></div>
                <div class="calculation__variants" id="question_0_811268">
	                <div class="radio calculation__radio calculation__radio--small ">
                        <label id="label_question_summ_0_0_866261" for="answer_0_0_866261" class="radio__label radio__label--small question_summ question_summ_500K" data-value="500K">300 001 руб. – 500 000 руб.</label>
                        <input id="answer_0_0_866261" class="radio__default" type="radio" name="summ" value="300 001 руб. – 500 000 руб.">
                        <span class="radio__new radio__new--accent"></span>
                    </div>
	                <div class="radio calculation__radio calculation__radio--small ">
                        <label id="label_question_summ_0_1_283741" for="answer_0_1_283741" class="radio__label radio__label--small question_summ question_summ_1000K" data-value="1000K">500 001 руб. – 1 000 000 руб.</label>
                        <input id="answer_0_1_283741" class="radio__default" type="radio" name="summ" value="500 001 руб. – 1 000 000 руб.">
                        <span class="radio__new radio__new--accent"></span>
                    </div>
	                <div class="radio calculation__radio calculation__radio--small ">
                        <label id="label_question_summ_0_2_882519" for="answer_0_2_882519" class="radio__label radio__label--small question_summ question_summ_3000K" data-value="3000K">1 000 001 руб. – 3 000 000 руб.</label>
                        <input id="answer_0_2_882519" class="radio__default" type="radio" name="summ" value="1 000 001 руб. – 3 000 000 руб.">
                        <span class="radio__new radio__new--accent"></span>
                    </div>
	                <div class="radio calculation__radio calculation__radio--small ">
                        <label id="label_question_summ_0_3_583557" for="answer_0_3_583557" class="radio__label radio__label--small question_summ question_summ_7000K" data-value="7000K">3 000 001 руб. – 7 000 000 руб.</label>
                        <input id="answer_0_3_583557" class="radio__default" type="radio" name="summ" value="3 000 001 руб. – 7 000 000 руб.">
                        <span class="radio__new radio__new--accent"></span>
                    </div>
	                <div class="radio calculation__radio calculation__radio--small ">
                        <label id="label_question_summ_0_4_355166" for="answer_0_4_355166" class="radio__label radio__label--small question_summ question_summ_10000K" data-value="10000K">Более 7 000 001 руб.</label>
                        <input id="answer_0_4_355166" class="radio__default" type="radio" name="summ" value="Более 7 000 001 руб.">
                        <span class="radio__new radio__new--accent"></span>
                    </div>
	                <div class="radio calculation__radio calculation__radio--small difficult_answer">
                        <label for="answer_0_5_602831" class="radio__label radio__label--small question_summ question_summ_300K" data-value="300K"><span>Менее 300 000 руб.</span></label>
                        <input id="answer_0_5_602831" class="radio__default" type="radio" name="summ" value="Менее 300 000 руб.">
                        <span class="radio__new radio__new--accent"></span>
                    </div>
	                <div class="radio calculation__radio calculation__radio--small difficult_answer">
                        <label for="answer_0_6_68244" class="radio__label radio__label--small question_summ question_summ_donot_know" data-value="donot_know"><span>Затрудняюсь ответить</span></label>
                        <input id="answer_0_6_68244" class="radio__default" type="radio" name="summ" value="Затрудняюсь ответить">
                        <span class="radio__new radio__new--accent"></span>
                    </div>
                </div>
            </div>
            <div class="question-item">
                <h2>2. Место вашего фактического проживания:</h2>
                <div class="notice hidden"><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 0.5C8.02219 0.5 6.08879 1.08649 4.4443 2.1853C2.79981 3.28412 1.51809 4.8459 0.761209 6.67316C0.00433284 8.50042 -0.1937 10.5111 0.192152 12.4509C0.578004 14.3907 1.53041 16.1725 2.92894 17.5711C4.32746 18.9696 6.10929 19.922 8.0491 20.3078C9.98891 20.6937 11.9996 20.4957 13.8268 19.7388C15.6541 18.9819 17.2159 17.7002 18.3147 16.0557C19.4135 14.4112 20 12.4778 20 10.5C20 9.18678 19.7413 7.88642 19.2388 6.67316C18.7362 5.45991 17.9997 4.35752 17.0711 3.42893C16.1425 2.50035 15.0401 1.76375 13.8268 1.2612C12.6136 0.758658 11.3132 0.5 10 0.5ZM10 15.5C9.80222 15.5 9.60888 15.4413 9.44443 15.3315C9.27998 15.2216 9.15181 15.0654 9.07612 14.8827C9.00044 14.7 8.98063 14.4989 9.01922 14.3049C9.0578 14.1109 9.15304 13.9327 9.2929 13.7929C9.43275 13.653 9.61093 13.5578 9.80491 13.5192C9.99889 13.4806 10.2 13.5004 10.3827 13.5761C10.5654 13.6518 10.7216 13.78 10.8315 13.9444C10.9414 14.1089 11 14.3022 11 14.5C11 14.7652 10.8946 15.0196 10.7071 15.2071C10.5196 15.3946 10.2652 15.5 10 15.5ZM11 11.5C11 11.7652 10.8946 12.0196 10.7071 12.2071C10.5196 12.3946 10.2652 12.5 10 12.5C9.73479 12.5 9.48043 12.3946 9.2929 12.2071C9.10536 12.0196 9 11.7652 9 11.5V6.5C9 6.23478 9.10536 5.98043 9.2929 5.79289C9.48043 5.60536 9.73479 5.5 10 5.5C10.2652 5.5 10.5196 5.60536 10.7071 5.79289C10.8946 5.98043 11 6.23478 11 6.5V11.5Z" fill="white"></path></svg><span>Пожалуйста, ответьте на данный вопрос</span></div>
                <div class="calculation__variants" id="question_1_572754">
	                <div class="radio calculation__radio calculation__radio--small ">
                        <label id="label_question_place_1_0_67194" for="answer_1_0_67194" class="radio__label radio__label--small question_place question_place_spb" data-value="spb">Санкт-Петербург и Ленинградская область</label>
                        <input id="answer_1_0_67194" class="radio__default" type="radio" name="place" value="Санкт-Петербург и Ленинградская область">
                        <span class="radio__new radio__new--accent"></span>
                    </div>
	                <div class="radio calculation__radio calculation__radio--small ">
                        <label id="label_question_place_1_1_433302" for="answer_1_1_433302" class="radio__label radio__label--small question_place question_place_msk" data-value="msk">Москва и Московская область</label>
                        <input id="answer_1_1_433302" class="radio__default" type="radio" name="place" value="Москва и Московская область">
                        <span class="radio__new radio__new--accent"></span>
                    </div>
	                <div class="radio calculation__radio calculation__radio--small ">
                        <label id="label_question_place_1_2_444269" for="answer_1_2_444269" class="radio__label radio__label--small question_place question_place_other" data-value="other">Другие регионы</label>
                        <input id="answer_1_2_444269" class="radio__default" type="radio" name="place" value="Другие регионы">
                        <span class="radio__new radio__new--accent"></span>
                    </div>
                </div>
            </div>
            <div class="question-item">
                <h2>3. Кто является вашим(и) кредитором(ами)?</h2>
                <div class="notice hidden"><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 0.5C8.02219 0.5 6.08879 1.08649 4.4443 2.1853C2.79981 3.28412 1.51809 4.8459 0.761209 6.67316C0.00433284 8.50042 -0.1937 10.5111 0.192152 12.4509C0.578004 14.3907 1.53041 16.1725 2.92894 17.5711C4.32746 18.9696 6.10929 19.922 8.0491 20.3078C9.98891 20.6937 11.9996 20.4957 13.8268 19.7388C15.6541 18.9819 17.2159 17.7002 18.3147 16.0557C19.4135 14.4112 20 12.4778 20 10.5C20 9.18678 19.7413 7.88642 19.2388 6.67316C18.7362 5.45991 17.9997 4.35752 17.0711 3.42893C16.1425 2.50035 15.0401 1.76375 13.8268 1.2612C12.6136 0.758658 11.3132 0.5 10 0.5ZM10 15.5C9.80222 15.5 9.60888 15.4413 9.44443 15.3315C9.27998 15.2216 9.15181 15.0654 9.07612 14.8827C9.00044 14.7 8.98063 14.4989 9.01922 14.3049C9.0578 14.1109 9.15304 13.9327 9.2929 13.7929C9.43275 13.653 9.61093 13.5578 9.80491 13.5192C9.99889 13.4806 10.2 13.5004 10.3827 13.5761C10.5654 13.6518 10.7216 13.78 10.8315 13.9444C10.9414 14.1089 11 14.3022 11 14.5C11 14.7652 10.8946 15.0196 10.7071 15.2071C10.5196 15.3946 10.2652 15.5 10 15.5ZM11 11.5C11 11.7652 10.8946 12.0196 10.7071 12.2071C10.5196 12.3946 10.2652 12.5 10 12.5C9.73479 12.5 9.48043 12.3946 9.2929 12.2071C9.10536 12.0196 9 11.7652 9 11.5V6.5C9 6.23478 9.10536 5.98043 9.2929 5.79289C9.48043 5.60536 9.73479 5.5 10 5.5C10.2652 5.5 10.5196 5.60536 10.7071 5.79289C10.8946 5.98043 11 6.23478 11 6.5V11.5Z" fill="white"></path></svg><span>Пожалуйста, ответьте на данный вопрос</span></div>
                <div class="calculation__variants" id="question_7_865861">
	                <div class="checkbox calculation__checkbox calculation__checkbox--small ">
                        <label id="label_question_creditors_7_0_744988" for="answer_7_0_744988" class="checkbox__label checkbox__label--small question_creditors question_creditors_bank" data-value="bank">Банки</label>
                        <input id="answer_7_0_744988" class="checkbox__default" type="checkbox" name="creditors" value="Банки">
                        <span class="checkbox__new checkbox__new--accent"></span>
                    </div>
	                <div class="checkbox calculation__checkbox calculation__checkbox--small ">
                        <label id="label_question_creditors_7_1_550763" for="answer_7_1_550763" class="checkbox__label checkbox__label--small question_creditors question_creditors_mfo" data-value="mfo">МФО</label>
                        <input id="answer_7_1_550763" class="checkbox__default" type="checkbox" name="creditors" value="МФО">
                        <span class="checkbox__new checkbox__new--accent"></span>
                    </div>
	                <div class="checkbox calculation__checkbox calculation__checkbox--small ">
                        <label id="label_question_creditors_7_2_128661" for="answer_7_2_128661" class="checkbox__label checkbox__label--small question_creditors question_creditors_gosorgan" data-value="gosorgan">Государственные органы</label>
                        <input id="answer_7_2_128661" class="checkbox__default" type="checkbox" name="creditors" value="Государственные органы">
                        <span class="checkbox__new checkbox__new--accent"></span>
                    </div>
	                <div class="checkbox calculation__checkbox calculation__checkbox--small ">
                        <label id="label_question_creditors_7_3_406305" for="answer_7_3_406305" class="checkbox__label checkbox__label--small question_creditors question_creditors_fiz" data-value="fiz">Физические лица</label>
                        <input id="answer_7_3_406305" class="checkbox__default" type="checkbox" name="creditors" value="Физические лица">
                        <span class="checkbox__new checkbox__new--accent"></span>
                    </div>
	                <div class="checkbox calculation__checkbox calculation__checkbox--small ">
                        <label id="label_question_creditors_7_4_112109" for="answer_7_4_112109" class="checkbox__label checkbox__label--small question_creditors question_creditors_company" data-value="company">Юридические лица</label>
                        <input id="answer_7_4_112109" class="checkbox__default" type="checkbox" name="creditors" value="Юридические лица">
                        <span class="checkbox__new checkbox__new--accent"></span>
                    </div>
	                <div class="checkbox calculation__checkbox calculation__checkbox--small difficult_answer">
                        <label id="label_question_creditors_7_5_172248" for="answer_7_5_172248" class="checkbox__label checkbox__label--small question_creditors question_creditors_donot_know" data-value="donot_know"><span>Затрудняюсь ответить</span></label>
                        <input id="answer_7_5_172248" class="checkbox__default" type="checkbox" name="creditors" value="Затрудняюсь ответить">
                        <span class="checkbox__new checkbox__new--accent"></span>
                    </div>
                </div>
            </div>
            <div class="submit-cnt">
                <button class="btn">Получить анализ ситуации в Whatsapp</button>
            </div>
        </div>
    </div>
</section>