<?php
  /*
    Template Name: Чат 2
    Template Post Type: page
  */
?>

   
<?php get_header(); ?>

<style>
    body.page-template-chat2 header .warning__cnt {
        display: none!important;
    }
    body.page-template-chat2 section.chat2 h1.title-page {
        padding-top: 60px;
    }
    h1.title-page {
        font-size: 34px;
        line-height: 145%;
        text-align: center;
        color: #393939;
        margin-bottom: 20px;
    }
    p.desc {
        font-weight: 500;
        font-size: 16px;
        line-height: 145%;
        text-align: center;
        color: #717B97;  
        margin-bottom: 40px;
    }
    div.notice {
        background: #F3F4F4;
        border-radius: 10px;
        justify-content: center;
        align-items: center;
        display: flex;
        padding: 16px 24px;
        margin-bottom: 40px;
        display: none!important;
    }
    div.notice svg {
        margin-right: 12px;
    }
    div.notice p {
        margin: 0;
        font-weight: 400;
        font-size: 16px;
        line-height: 145%;
        color: #393939;
    }
    div.notice p span {
        font-weight: 700;
        font-size: 18px;
        color: #FB5A80;
        margin-right: 16px;
    }
    .chat__cnt .urist__cnt {
        /*
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 88px auto;
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        justify-content: start;
        align-items: center;
        margin-bottom: 10px;
        */
        max-width: 880px;
    }
    .chat__cnt .urist__cnt .container {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 88px auto;
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        justify-content: start;
        align-items: center;
        margin-bottom: 10px;
    }
    .chat__cnt .urist__cnt:not(.fixed) .container {
        padding-left: 0;
        padding-right: 0;
    }
    .chat__cnt .urist__cnt .content__cnt .title {
        font-weight: 700;
        font-size: 20px;
        line-height: 145%;
        color: #5381F6;
    }
    .chat__cnt .urist__cnt .content__cnt .subtitle {
        font-weight: 500;
        font-size: 12px;
        line-height: 145%;
        color: rgb(57 57 57 / 40%);
    }
    .chat__cnt .description__cnt {
        max-width: 880px;    
    }
    .chat__cnt .description__cnt p {
        background: #EFF4FF;
        border-radius: 0px 10px 10px 10px;
        padding: 20px;
        font-weight: 500;
        font-size: 16px;
        line-height: 145%;
        color: rgb(57 57 57 / 80%);
        display: none;
        opacity: 0;
    }
    /*
    .chat__cnt .description__cnt p.write {
        display: block;
        opacity: 1;
        font-weight: 300;    
    }
    */
    .chat__cnt .description__cnt div.write {
        background: #EFF4FF;
        border-radius: 0px 10px 10px 10px;
        padding: 20px;
        display: flex;
        align-items: flex-end;
    }
    .chat__cnt .description__cnt div.write .ask__writing-text {
        font-weight: 300;
        font-size: 16px;
        line-height: 145%;
        color: rgb(57 57 57 / 80%);
    }
    .chat__cnt .description__cnt div.write .ask__writing-dots {
        margin-left: 3px;
        display: flex;
        position: relative;
        bottom: 6px;
    }
    .chat__cnt .description__cnt div.write .ask__writing-dots span {
        margin: 0 2px;
        width: 4px;
        height: 4px;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        opacity: 1;
        background-color: rgb(57 57 57 / 80%);
    }
    .chat__cnt .description__cnt div.write .ask__writing-dots span:nth-child(1) {
        animation: dots 1.2s linear .3s infinite;
    }
    .chat__cnt .description__cnt div.write .ask__writing-dots span:nth-child(2) {
        animation: dots 1.2s linear .6s infinite;
    }
    .chat__cnt .description__cnt div.write .ask__writing-dots span:nth-child(3) {
        animation: dots 1.2s linear .9s infinite;
    }
    .chat__cnt .description__cnt p.show {
        display: block;
        opacity: 1;
    }
    .chat__cnt .question_item__cnt {
        margin-bottom: 30px;
    }
    .chat__cnt .answer__cnt .people__cnt {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: calc(100% - 104px) 88px;
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        justify-content: start;
        align-items: center;
        margin-bottom: 10px;
    }
    .chat__cnt .answer__cnt .people__cnt .content__cnt {
        text-align: right;
    }
    .chat__cnt .answer__cnt .people__cnt .content__cnt .title {
        font-weight: 700;
        font-size: 20px;
        line-height: 145%;
        text-align: right;
        color: #5381F6;
    }
    .chat__cnt .answer__cnt .people__cnt .content__cnt .subtitle {
        font-weight: 700;
        font-size: 12px;
        line-height: 145%;
        text-align: right;
        color: rgb(57 57 57 / 40%);
    }
    .chat__cnt .answer__cnt .variation__cnt {
        /*display: flex;*/
        justify-content: end;
        grid-template-columns: 75% auto;
        display: grid;
    }
    .chat__cnt .answer__cnt .variation__cnt p {
        margin: 0;
        background: #5381F6;
        border-radius: 10px 0px 10px 10px;
        font-weight: 700;
        font-size: 16px;
        line-height: 145%;
        color: #FFFFFF;
        padding: 20px;
        text-align: right;
        max-width: fit-content;
        justify-content: end;
        display: flex;
        float: right;
    }
    .calculation__checkbox, 
    .calculation__radio {
        -webkit-box-shadow: 0 4px 10px rgb(0 0 0 / 12%);
        box-shadow: 0 4px 14px rgb(0 0 0 / 12%);
    }
    .question_item__cnt .variations__cnt .calculation__variants {
        max-width: 880px ;
    }
    footer {
        display: none!important;
    }
    .calculator-navbar {
        display: none!important;
    }
    .hidden {
        display: none!important;
    }
    
    .result_form__cnt input[type=text],
    .result_form__cnt input[type=tel] {
        box-shadow: 0px 4px 14px rgb(0 0 0 / 12%);
        background: #fff;
        text-align: left;
    }
    
    .thank_block__cnt {
        background: #EFFFF4;
        border-radius: 0px 10px 10px 10px;
        padding: 20px;
        margin-top: 30px;
    }
    .thank_block__cnt p {
        font-weight: 500;
        font-size: 16px;
        line-height: 145%;
        color: rgb(57 57 57 / 80%);
    }
    .thank_block__cnt p span {
        font-weight: 700;
    }
    .thank_block__cnt .video__cnt {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: calc(50% - 10px) calc(50% - 10px);
        grid-column-gap: 20px;
        grid-row-gap: 20px;
    }
    .thank_block__cnt .video__cnt .reviews-aside__link::before {
        width: 12%;
        height: 16%;
    }
    .chat__cnt .answer__cnt {
        margin-top: 30px;
    }
    .chat__cnt .answer__cnt .people__cnt {
        display: none;
    }
    .chat__cnt .question_item__cnt .calculation__radio.checked label {
        color: #5381F6;
    }
    .chat__cnt .question_item__cnt .urist__cnt_0.fixed {
       position: fixed;
        background: #fff;
        top: 0;
        padding: 20px 20px;
        left: 0;
        width: 100%;
        z-index: 999;
        max-width: 100%;
        will-change:transform;
    }
    .chat__cnt .answer__cnt .variation__cnt {
        width: 100%;
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
    
    
    
@media (max-width: 1180px) {
    .question_item__cnt .variations__cnt .calculation__variants,
    .chat__cnt .description__cnt {
        max-width: 75%;    
    }
    .chat__cnt .urist__cnt {
        max-width: 100%!important;
    }
}
    
@media (max-width: 768px) {
    h1.title-page {
        font-size: 22px;
    }
    div.notice p {
        font-size: 12px;
    }
    div.notice p span {
        font-size: 14px;
        margin-right: 8px;
    }
    .chat__cnt .description__cnt p {
        font-size: 14px;
    }
    .chat__cnt .urist__cnt .content__cnt .title {
        font-size: 14px;
    }
    .chat__cnt .answer__cnt .people__cnt {
        grid-template-columns: calc(100% - 60px) 44px;
    }
    .chat__cnt .answer__cnt .people__cnt svg {
        width: 44px;
        height: 44px;
    }
    .chat__cnt .answer__cnt .people__cnt .content__cnt .title {
        font-size: 14px;
    }
    .chat__cnt .answer__cnt .variation__cnt p {
        font-size: 12px;
        padding: 12px;
    }
    .thank_block__cnt .video__cnt {
        grid-template-columns: 100%;
    }
    
    .chat__cnt .urist__cnt {
        grid-template-columns: 66px auto;
    }
    .chat__cnt .urist__cnt img {
        width: 66px;
        height: 66px;
    }
    .btn-up {
        display: none!important;
    }
    .header__control {
        top: 40px!important;
        position: absolute!important;
    }
    p.desc {    
        max-width: 460px;
        margin: 0 auto 40px;
    }

    
}
@media (max-width: 576px) {
    .chat__cnt .urist__cnt .container {
        padding: 0;
    }
}
@media (max-width: 360px) {
    .chat__cnt .urist__cnt .content__cnt .subtitle {
        font-size: 9px;
    }
}
</style>
<?php
    $chat_questions = get_field('chat');
    //$quantity_of_voices = the_views();
    $quantity_of_voices = get_post_meta(get_the_ID(), 'views', true);
    $quantity_of_voices = 2400 + $quantity_of_voices; /*rand(5, 15);*/
?>
<main>
    <section class="section chat2">
        <div class="container">
            <h1 class="title-page">Подходит ли&nbsp;вам бесплатное банкротство в&nbsp;МФЦ?</h1>
            <div class="chat__cnt">
                <div class="content__cnt">
                    <div class="urist__cnt urist__cnt_<?=$key; ?> <?=$question_item_class; ?>">
                        <div class="container">
                            <img width="88" height="88" alt=""src="/wp-content/themes/fpalaw/assets/img/chat/bondar.png" />
                            <div class="content__cnt">
                                <div class="title">Боднар Евгения Ивановна</div>
                                <div class="subtitle">Руководитель отдела сопровождения клиентов по кредитам и долгам</div>
                            </div>
                        </div>
                    </div>
                    <!-- 1 вопрос -->
                    <div class="question_item__cnt not_answered">
                        <div class="description__cnt">
                            <p>Ответьте на 4 вопроса и узнайте, возможно ли в вашей ситуации списать долги бесплатно:</p>
                            <p>Ваша сумма долга больше 500 тыс. руб.?</p>
                            <div class="write">
                                <div class="ask__writing-text">Евгения печатает</div>
                                <div class="ask__writing-dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="variations__cnt hidden">
                            <div class="calculation__variants">
                                <div class="radio calculation__radio calculation__radio--small" data-video-list="UhQNT2p0N_s,5dLyXVCOAWc,317ic7T4H7M,tKHfLGh1YWY,0vXzxjHSVM0,h5fve_W2si4,3bNCeCY4cpI,4dWLfTW2sss,HzrOAuJ2V3Y,Bg51ok04H9c,kC0_b8WJds4,6yJKyEDYh4Q,hcEVh2If5VY,irMBA8-n0Rg,QjwLXDQZXMc,H-prwumzDi0">
                                    <label id="label_question_summ_0_0_980010" for="answer_0_0_980010" class="radio__label radio__label--small question_summ question_summ_300K" data-value="300K">Менее 500 000 руб.</label>
                                    <input id="answer_0_0_980010" class="radio__default" type="radio" name="summ" value="Менее 500 000 руб.">
                                    <span class="radio__new radio__new--accent"></span>
                                </div>
                                <div class="radio calculation__radio calculation__radio--small" data-video-list="UhQNT2p0N_s,5dLyXVCOAWc,317ic7T4H7M,tKHfLGh1YWY,0vXzxjHSVM0,h5fve_W2si4,3bNCeCY4cpI,4dWLfTW2sss,HzrOAuJ2V3Y,Bg51ok04H9c,kC0_b8WJds4,6yJKyEDYh4Q,hcEVh2If5VY,irMBA8-n0Rg,QjwLXDQZXMc,H-prwumzDi0">
                                    <label id="label_question_summ_0_1_870174" for="answer_0_1_870174" class="radio__label radio__label--small question_summ question_summ_500K" data-value="500K">Более 500 000 руб.</label>
                                    <input id="answer_0_1_870174" class="radio__default" type="radio" name="summ" value="Более 500 000 руб.">
                                    <span class="radio__new radio__new--accent"></span>
                                </div>
                                <div class="radio calculation__radio calculation__radio--small" data-video-list="UhQNT2p0N_s,5dLyXVCOAWc,317ic7T4H7M,tKHfLGh1YWY,0vXzxjHSVM0,h5fve_W2si4,3bNCeCY4cpI,4dWLfTW2sss,HzrOAuJ2V3Y,Bg51ok04H9c,kC0_b8WJds4,6yJKyEDYh4Q,hcEVh2If5VY,irMBA8-n0Rg,QjwLXDQZXMc,H-prwumzDi0">
                                    <label id="label_question_summ_0_2_781790" for="answer_0_2_781790" class="radio__label radio__label--small question_summ question_summ_donot_know" data-value="donot_know">Затрудняюсь ответить</label>
                                    <input id="answer_0_2_781790" class="radio__default" type="radio" name="summ" value="Затрудняюсь ответить">
                                    <span class="radio__new radio__new--accent"></span>
                                </div>
                            </div>
                        </div>
                        <div class="answer__cnt hidden">
                            <div class="variation__cnt">
                                <div>
                                    <p>Менее 500 000 руб.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 2 вопрос -->
                    <div class="question_item__cnt hidden not_answered">
                        <div class="description__cnt not_answered">
                            <p data-selected-value="300K">Скорее всего, необходимо подавать на банкротство в МФЦ.</p>
                            <p data-selected-value="500K">Скорее всего, необходимо подавать на банкротство в арбитражный суд.</p>
                            <p data-selected-value="donot_know">Ничего, продолжаем просто дальше тест.</p>
                            <p>Где вы проживаете? От этого зависит, в какой МФЦ или АС вам необходимо будет подать документы.</p>
                            <div class="write">
                                <div class="ask__writing-text">Евгения печатает</div>
                                <div class="ask__writing-dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="variations__cnt hidden">
                            <div class="calculation__variants">
                                <div class="radio calculation__radio calculation__radio--small" data-video-list="UhQNT2p0N_s,5dLyXVCOAWc,317ic7T4H7M,tKHfLGh1YWY,0vXzxjHSVM0,h5fve_W2si4,3bNCeCY4cpI,4dWLfTW2sss,HzrOAuJ2V3Y,Bg51ok04H9c,kC0_b8WJds4,6yJKyEDYh4Q,hcEVh2If5VY,irMBA8-n0Rg,QjwLXDQZXMc,H-prwumzDi0">
                                    <label id="label_question_place_1_0_354833" for="answer_1_0_354833" class="radio__label radio__label--small question_place question_place_spb" data-value="spb">Санкт-Петербург и Ленинградская область</label>
                                    <input id="answer_1_0_354833" class="radio__default" type="radio" name="place" value="Санкт-Петербург и Ленинградская область">
                                    <span class="radio__new radio__new--accent"></span>
                                </div>
                                <div class="radio calculation__radio calculation__radio--small" data-video-list="UhQNT2p0N_s,5dLyXVCOAWc,317ic7T4H7M,tKHfLGh1YWY,0vXzxjHSVM0,h5fve_W2si4,3bNCeCY4cpI,4dWLfTW2sss,HzrOAuJ2V3Y,Bg51ok04H9c,kC0_b8WJds4,6yJKyEDYh4Q,hcEVh2If5VY,irMBA8-n0Rg,QjwLXDQZXMc,H-prwumzDi0">
                                    <label id="label_question_place_1_1_840816" for="answer_1_1_840816" class="radio__label radio__label--small question_place question_place_msk" data-value="msk">Москва и Московская область</label>
                                    <input id="answer_1_1_840816" class="radio__default" type="radio" name="place" value="Москва и Московская область">
                                    <span class="radio__new radio__new--accent"></span>
                                </div>
                                <div class="radio calculation__radio calculation__radio--small" data-video-list="UhQNT2p0N_s,5dLyXVCOAWc,317ic7T4H7M,tKHfLGh1YWY,0vXzxjHSVM0,h5fve_W2si4,3bNCeCY4cpI,4dWLfTW2sss,HzrOAuJ2V3Y,Bg51ok04H9c,kC0_b8WJds4,6yJKyEDYh4Q,hcEVh2If5VY,irMBA8-n0Rg,QjwLXDQZXMc,H-prwumzDi0">
                                    <label id="label_question_place_1_2_278283" for="answer_1_2_278283" class="radio__label radio__label--small question_place question_place_other" data-value="other">Другие регионы</label>
                                    <input id="answer_1_2_278283" class="radio__default" type="radio" name="place" value="Другие регионы">
                                    <span class="radio__new radio__new--accent"></span>
                                </div>
                            </div>
                        </div>
                        <div class="answer__cnt hidden">
                            <div class="variation__cnt">
                                <div>
                                    <p>Санкт-Петербург и Ленинградская область</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 3 вопрос -->
                    <div class="question_item__cnt hidden not_answered">
                        <div class="description__cnt">
                            <p data-selected-value="spb">Принято, скорее всего необходимо будет подавать документы в МФЦ по адресу ул. Садовая ул., 55-57.</p>
                            <p data-selected-value="300K">Принято, скорее всего, необходимо будет подавать документы в АС СПб и ЛО по адресу ул. Смольного, 6.</p>
                            <p data-selected-value="msk">Ничего, продолжаем просто дальше тест.</p>
                            <p data-selected-value="other">Ничего, продолжаем просто дальше тест.</p>
                            <p>Ваши долги связаны с возмещением вреда жизни и здоровью, морального вреда, выплаты зарплат или алиментов?</p>
                            <div class="write">
                                <div class="ask__writing-text">Евгения печатает</div>
                                <div class="ask__writing-dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="variations__cnt hidden">
                            <div class="calculation__variants">
                                <div class="radio calculation__radio calculation__radio--small" data-video-list="UhQNT2p0N_s,5dLyXVCOAWc,317ic7T4H7M,tKHfLGh1YWY,0vXzxjHSVM0,h5fve_W2si4,3bNCeCY4cpI,4dWLfTW2sss,HzrOAuJ2V3Y,Bg51ok04H9c,kC0_b8WJds4,6yJKyEDYh4Q,hcEVh2If5VY,irMBA8-n0Rg,QjwLXDQZXMc,H-prwumzDi0">
                                    <label id="label_question_debt-compensation_2_0_645268" for="answer_2_0_645268" class="radio__label radio__label--small question_debt-compensation question_debt-compensation_yes" data-value="yes">Да</label>
                                    <input id="answer_2_0_645268" class="radio__default" type="radio" name="debt-compensation" value="Да">
                                    <span class="radio__new radio__new--accent"></span>
                                </div>
                                <div class="radio calculation__radio calculation__radio--small" data-video-list="UhQNT2p0N_s,5dLyXVCOAWc,317ic7T4H7M,tKHfLGh1YWY,0vXzxjHSVM0,h5fve_W2si4,3bNCeCY4cpI,4dWLfTW2sss,HzrOAuJ2V3Y,Bg51ok04H9c,kC0_b8WJds4,6yJKyEDYh4Q,hcEVh2If5VY,irMBA8-n0Rg,QjwLXDQZXMc,H-prwumzDi0">
                                    <label id="label_question_debt-compensation_2_1_421088" for="answer_2_1_421088" class="radio__label radio__label--small question_debt-compensation question_debt-compensation_no" data-value="no">Нет</label>
                                    <input id="answer_2_1_421088" class="radio__default" type="radio" name="debt-compensation" value="Нет">
                                    <span class="radio__new radio__new--accent"></span>
                                </div>
                                <div class="radio calculation__radio calculation__radio--small" data-video-list="UhQNT2p0N_s,5dLyXVCOAWc,317ic7T4H7M,tKHfLGh1YWY,0vXzxjHSVM0,h5fve_W2si4,3bNCeCY4cpI,4dWLfTW2sss,HzrOAuJ2V3Y,Bg51ok04H9c,kC0_b8WJds4,6yJKyEDYh4Q,hcEVh2If5VY,irMBA8-n0Rg,QjwLXDQZXMc,H-prwumzDi0">
                                    <label id="label_question_debt-compensation_2_2_421088" for="answer_2_2_421088" class="radio__label radio__label--small question_debt-compensation question_debt-compensation_no" data-value="donot_know">Затрудняюсь ответить</label>
                                    <input id="answer_2_2_421088" class="radio__default" type="radio" name="debt-compensation" value="Затрудняюсь ответить">
                                    <span class="radio__new radio__new--accent"></span>
                                </div>
                            </div>
                        </div>
                        <div class="answer__cnt hidden">
                            <div class="variation__cnt">
                                <div>
                                    <p>Да</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 4 вопрос -->
                    <div class="question_item__cnt hidden not_answered">
                        <div class="description__cnt">
                            <p data-selected-value="yes">Нам необходимо уточнить вид ваших долгов для ответа, подойдет ли вам банкротство через МФЦ.</p>
                            <p data-selected-value="no">Ничего, продолжаем просто дальше тест.</p>
                            <p data-selected-value="donot_know">Нам необходимо уточнить вид ваших долгов для ответа, подойдет ли вам банкротство через МФЦ.</p>
                            <p>Ваши долги уже просужены и исполнительные листы находятся в ФССП (Федеральной службе судебных приставов)?</p>
                            <div class="write">
                                <div class="ask__writing-text">Евгения печатает</div>
                                <div class="ask__writing-dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="variations__cnt hidden">
                            <div class="calculation__variants">
                                <div class="radio calculation__radio calculation__radio--small" data-video-list="UhQNT2p0N_s,5dLyXVCOAWc,317ic7T4H7M,tKHfLGh1YWY,0vXzxjHSVM0,h5fve_W2si4,3bNCeCY4cpI,4dWLfTW2sss,HzrOAuJ2V3Y,Bg51ok04H9c,kC0_b8WJds4,6yJKyEDYh4Q,hcEVh2If5VY,irMBA8-n0Rg,QjwLXDQZXMc,H-prwumzDi0">
                                    <label id="label_question_fssp_3_0_645268" for="answer_3_0_645268" class="radio__label radio__label--small question_fssp question_fssp_yes" data-value="yes">Да</label>
                                    <input id="answer_3_0_645268" class="radio__default" type="radio" name="fssp" value="Да">
                                    <span class="radio__new radio__new--accent"></span>
                                </div>
                                <div class="radio calculation__radio calculation__radio--small" data-video-list="UhQNT2p0N_s,5dLyXVCOAWc,317ic7T4H7M,tKHfLGh1YWY,0vXzxjHSVM0,h5fve_W2si4,3bNCeCY4cpI,4dWLfTW2sss,HzrOAuJ2V3Y,Bg51ok04H9c,kC0_b8WJds4,6yJKyEDYh4Q,hcEVh2If5VY,irMBA8-n0Rg,QjwLXDQZXMc,H-prwumzDi0">
                                    <label id="label_question_fssp_3_1_421088" for="answer_3_1_421088" class="radio__label radio__label--small question_fssp question_fssp_no" data-value="no">Нет</label>
                                    <input id="answer_3_1_421088" class="radio__default" type="radio" name="fssp" value="Нет">
                                    <span class="radio__new radio__new--accent"></span>
                                </div>
                                <div class="radio calculation__radio calculation__radio--small" data-video-list="UhQNT2p0N_s,5dLyXVCOAWc,317ic7T4H7M,tKHfLGh1YWY,0vXzxjHSVM0,h5fve_W2si4,3bNCeCY4cpI,4dWLfTW2sss,HzrOAuJ2V3Y,Bg51ok04H9c,kC0_b8WJds4,6yJKyEDYh4Q,hcEVh2If5VY,irMBA8-n0Rg,QjwLXDQZXMc,H-prwumzDi0">
                                    <label id="label_question_fssp_3_2_421088" for="answer_3_2_421088" class="radio__label radio__label--small question_fssp question_fssp_no" data-value="donot_know">Затрудняюсь ответить</label>
                                    <input id="answer_3_2_421088" class="radio__default" type="radio" name="fssp" value="Затрудняюсь ответить">
                                    <span class="radio__new radio__new--accent"></span>
                                </div>
                            </div>
                        </div>
                        <div class="answer__cnt hidden">
                            <div class="variation__cnt">
                                <div>
                                    <p>Да</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Финальный блок с сообщениями -->
                    <div class="question_item__cnt result_form__cnt not_answered hidden">
                        <div class="description__cnt">
                            <p data-selected-value="yes">Хорошо. Тогда осталось только выяснить, было ли постановление об окончании исполнительного производства и по какой причине.</p>
                            <p data-selected-value="no">Понятно. Продолжаем просто дальше.</p>
                            <p data-selected-value="donot_know">Ничего, продолжаем просто дальше.</p>
                            <p>Отлично. Благодарю за ваши ответы!</p>
                            <p>Укажите ваш номер телефона и мы сообщим, вправе ли вы пройти банкротство бесплатно в МФЦ или АС СПб и ЛО.</p>
                            <div class="write">
                                <div class="ask__writing-text">Евгения печатает</div>
                                <div class="ask__writing-dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="result_form__cnt hidden">
                            <?php echo do_shortcode("[contact-form-7 id='22792' title='Форма для страницы Чат - Записаться на бесплатную консультацию']"); ?>
                            <div class="politics">
                                <span class="politics__icon">
                                    <svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#shild"></use></svg>
                                </span>
                                <p class="politics__text">Мы гарантируем безопасность и сохранность Ваших данных. Нажимая на кнопку, вы даете согласие на обработку своих персональных данных в соответствии с <a href="https://fpa.ru/politika/">«Политикой конфиденциальности»</a></p>
                            </div>
                        </div>
                        <div id="thank_block_result" class="thank_block__cnt hidden">
                            <p class="name"><span>Константин</span>, спасибо.</p>
                            <p class="text">Мы сообщим вам, вправе ли вы пройти банкротство бесплатно в МФЦ или АС СПб и ЛО.</p>
                            <p class="text">Вы можете посмотреть успешно завершенные процедуры наших клиентов в схожей с вашей ситуации.</p>
                            <div class="video__cnt"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php /*get_template_part( 'inc/bottom/info-reviews' );*/ ?>
</main>
<?php get_footer(); ?>