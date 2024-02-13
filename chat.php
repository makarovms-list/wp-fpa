<?php
  /*
    Template Name: Чат
    Template Post Type: page
  */
?>

   
<?php get_header(); ?>

<style>
    body.page-template-chat header .warning__cnt {
        display: none!important;
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
    <section class="section chat">
        <div class="container">
            <h1 class="title-page">Для 96% граждан подходит бесплатное банкротство в&nbsp;МФЦ&nbsp;или&nbsp;АС</h1>
            <p class="desc">Ответив на&nbsp;6&nbsp;вопросов, вы&nbsp;получите инструкцию по&nbsp;бесплатному прохождению процедуры банкротства</p>
            <div class="notice">
                <svg width="26" height="22" viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.0008 16.5693L16.2795 2.62399C15.9268 2.09207 15.441 1.65431 14.8667 1.35109C14.2924 1.04786 13.6482 0.888916 12.9934 0.888916C12.3386 0.888916 11.6944 1.04786 11.1201 1.35109C10.5458 1.65431 10.0599 2.09207 9.70727 2.62399L0.985987 16.5693C0.677903 17.0645 0.510454 17.6291 0.500474 18.2064C0.490494 18.7838 0.638335 19.3535 0.929134 19.8583C1.26534 20.4265 1.75198 20.8984 2.33932 21.2259C2.92666 21.5533 3.59364 21.7245 4.2721 21.722H21.7147C22.3887 21.729 23.0526 21.5644 23.6396 21.2448C24.2265 20.9253 24.7157 20.4622 25.0576 19.9021C25.357 19.3921 25.5095 18.8142 25.4995 18.2283C25.4895 17.6423 25.3174 17.0696 25.0008 16.5693ZM12.9934 17.3367C12.7685 17.3367 12.5487 17.2724 12.3617 17.152C12.1747 17.0315 12.0289 16.8603 11.9429 16.6599C11.8568 16.4596 11.8343 16.2392 11.8782 16.0265C11.922 15.8138 12.0303 15.6185 12.1894 15.4652C12.3484 15.3118 12.551 15.2074 12.7716 15.1651C12.9921 15.1228 13.2207 15.1445 13.4285 15.2275C13.6363 15.3105 13.8139 15.451 13.9388 15.6313C14.0638 15.8116 14.1304 16.0236 14.1304 16.2404C14.1304 16.5312 14.0106 16.81 13.7974 17.0156C13.5842 17.2212 13.295 17.3367 12.9934 17.3367ZM14.1304 12.9514C14.1304 13.2422 14.0106 13.521 13.7974 13.7266C13.5842 13.9322 13.295 14.0477 12.9934 14.0477C12.6918 14.0477 12.4026 13.9322 12.1894 13.7266C11.9761 13.521 11.8563 13.2422 11.8563 12.9514V8.56609C11.8563 8.27533 11.9761 7.99647 12.1894 7.79087C12.4026 7.58527 12.6918 7.46976 12.9934 7.46976C13.295 7.46976 13.5842 7.58527 13.7974 7.79087C14.0106 7.99647 14.1304 8.27533 14.1304 8.56609V12.9514Z" fill="#FB5A80"/></svg>
                <p><span>Важно!</span>Анализ вашей ситуации полностью автоматизирован</p>
            </div>
            <div class="chat__cnt">
                <div class="content__cnt">
                <?php
                    if ($chat_questions) {
                        $question_item_class = '';
                        foreach($chat_questions as $key => $value) {
                            if ($key > 0) {
                                $question_item_class = 'hidden'; 
                            } else {
                                $question_item_class = '';
                            }
                            
                ?>
                            <div class="question_item__cnt not_answered <?=$question_item_class; ?>">
                                <div class="urist__cnt urist__cnt_<?=$key; ?> <?=$question_item_class; ?>">
                                    <div class="container">
                                        <img width="88" height="88" alt=""src="/wp-content/themes/fpalaw/assets/img/chat/bondar.png" />
                                        <div class="content__cnt">
                                            <div class="title">Боднар Евгения Ивановна</div>
                                            <div class="subtitle">Руководитель отдела сопровождения клиентов по кредитам и долгам</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="description__cnt">
                                    <?=$value['description']; ?>
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
                                        <?php 
                                            foreach( $value['answers'] as $answer_key => $answer_value ) { 
                                                $answer_option_key = 'answer_option_'.$value['question']['value'];
                                                $randim_id = rand(1, 1000000);
                                                $video_list = '';
                                                switch ($answer_value[$answer_option_key]['value']) {
                                                    case 'unemployed':
                                                        $video_list = 'cVGt6LHQzAE,fHJ_cmLO7bI,graQHUjh-oo,0-l6WnOwGjc,2GSU20NbUPY,HWIjYGADQNE,NWOGXMHXPfY,O4UP6Pu71L0,gl1TGH3Rezo,hcEVh2If5VY,_YKexAw4EiU';
                                                        break;
                                                    case 'ipoteka':
                                                        $video_list = '2ln4JJbxmfo,fuo74cXDoIk,jH2Fw4z5xm0,LCKem02kDL0,9Ptf86U90k8,Iy_oGdudJm4';
                                                        break;
                                                    case 'single_parent':
                                                        $video_list = '67B51nUyUs4,d1ZxVdQD09M,9y6Ae87hpwc,gmXaUCku4cs,hKttHSHgEi4,ECGKk5fA9N8,3bNCeCY4cpI,2GSU20NbUPY,PLhyUgS95e4,VfieLUF869g';
                                                        break;
                                                    case 'pensioner':
                                                        $video_list = 'UhQNT2p0N_s,5dLyXVCOAWc,317ic7T4H7M,tKHfLGh1YWY,0vXzxjHSVM0,h5fve_W2si4,3bNCeCY4cpI,4dWLfTW2sss,HzrOAuJ2V3Y,Bg51ok04H9c,kC0_b8WJds4,6yJKyEDYh4Q,hcEVh2If5VY,irMBA8-n0Rg,QjwLXDQZXMc,H-prwumzDi0';
                                                        break;
                                                    case 'invalid':
                                                        $video_list = 'cJwDtEmlHTM,HzrOAuJ2V3Y,6yJKyEDYh4Q,akPMJyl3DEg,irMBA8-n0Rg,x4-CqnAvTJs,H-prwumzDi0';
                                                        break;
                                                    case 'parent_under_three_year':
                                                        $video_list = '67B51nUyUs4,d1ZxVdQD09M,9y6Ae87hpwc,gmXaUCku4cs,hKttHSHgEi4,ECGKk5fA9N8,3bNCeCY4cpI,2GSU20NbUPY,PLhyUgS95e4,VfieLUF869g';
                                                        break;
                                                    case 'parent_with_two_children':
                                                        $video_list = '67B51nUyUs4,d1ZxVdQD09M,9y6Ae87hpwc,gmXaUCku4cs,hKttHSHgEi4,ECGKk5fA9N8,3bNCeCY4cpI,2GSU20NbUPY,PLhyUgS95e4,VfieLUF869g';
                                                        break;
                                                    case 'ip':
                                                        $video_list = '9Ptf86U90k8,SJo3f6wXkcI,NuzciIJq_ZY,Mqu8dCoX1wg,2_9jBz5UgZ4,PLhyUgS95e4,O4UP6Pu71L0,amC9uyVVzuk,QjwLXDQZXMc';
                                                        break;
                                                    case 'army':
                                                        $video_list = 'B2tTeuFGMx0,R0w281t-8yg';
                                                        break;
                                                    case 'police':
                                                        $video_list = 'algfnJXZHy0,67B51nUyUs4,KmCTlpYRvi0,7-yvYUrT7Ro,ByC-UbPtubw,Z1XG-j_NXBo,gmXaUCku4cs,ECGKk5fA9N8,TiTzZpy4ty4,elb8B6EeSSk,G3ZFJzr98Wc,tnzC3Oxetqs,3FJ_C4wNMaQ,Nwzob-QkidA';
                                                        break;
                                                    case 'other':
                                                        $video_list = '2ln4JJbxmfo,fuo74cXDoIk,jH2Fw4z5xm0,LCKem02kDL0,9Ptf86U90k8,Iy_oGdudJm4';
                                                        break;
                                                }
                                        ?>
                                                <div class="<?=$value['type_answer']; ?> calculation__<?=$value['type_answer']; ?> calculation__<?=$value['type_answer']; ?>--small" data-video-list="<?=$video_list; ?>">
                                                    <label id="label_question_<?=$value['question']['value']; ?>_<?=$key; ?>_<?=$answer_key; ?>_<?=$randim_id; ?>" for="answer_<?=$key; ?>_<?=$answer_key; ?>_<?=$randim_id; ?>" class="<?=$value['type_answer']; ?>__label <?=$value['type_answer']; ?>__label--small question_<?=$value['question']['value']; ?> question_<?=$value['question']['value']; ?>_<?=$answer_value[$answer_option_key]['value'];?>" data-value="<?=$answer_value[$answer_option_key]['value']; ?>"><?=$answer_value[$answer_option_key]['label']; ?></label>
                                                    <input id="answer_<?=$key; ?>_<?=$answer_key; ?>_<?=$randim_id; ?>" class="<?=$value['type_answer']; ?>__default" type="<?=$value['type_answer']; ?>" name="<?=$value['question']['value']; ?>" value="<?=$answer_value[$answer_option_key]['label']; ?>">
                                                    <span class="<?=$value['type_answer']; ?>__new <?=$value['type_answer']; ?>__new--accent"></span>
                                                </div>
                                        <?php 
                                            } 
                                        ?>
                                    </div>
                                </div>
                                <div class="answer__cnt hidden">
                                    <div class="people__cnt">
                                        <div class="content__cnt">
                                            <div class="title">Вы</div>
                                            <div class="subtitle">Анализ ситуации №<?=$quantity_of_voices; ?></div>
                                        </div>
                                        <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg"><circle r="44" transform="matrix(-1 0 0 1 44 44)" fill="url(#paint0_linear_6378_111547)"/><path fill-rule="evenodd" clip-rule="evenodd" d="M32 33.5C32 36.55 33.2643 39.4751 35.5147 41.6317C37.7652 43.7884 40.8174 45 44 45C47.1826 45 50.2348 43.7884 52.4853 41.6317C54.7357 39.4751 56 36.55 56 33.5C56 30.45 54.7357 27.5249 52.4853 25.3683C50.2348 23.2116 47.1826 22 44 22C40.8174 22 37.7652 23.2116 35.5147 25.3683C33.2643 27.5249 32 30.45 32 33.5ZM38 33.5C38 35.025 38.6321 36.4875 39.7574 37.5659C40.8826 38.6442 42.4087 39.25 44 39.25C45.5913 39.25 47.1174 38.6442 48.2426 37.5659C49.3679 36.4875 50 35.025 50 33.5C50 31.975 49.3679 30.5125 48.2426 29.4341C47.1174 28.3558 45.5913 27.75 44 27.75C42.4087 27.75 40.8826 28.3558 39.7574 29.4341C38.6321 30.5125 38 31.975 38 33.5Z" fill="white"/><path d="M38 33.5C38 35.025 38.6321 36.4875 39.7574 37.5659C40.8826 38.6442 42.4087 39.25 44 39.25C45.5913 39.25 47.1174 38.6442 48.2426 37.5659C49.3679 36.4875 50 35.025 50 33.5C50 31.975 49.3679 30.5125 48.2426 29.4341C47.1174 28.3558 45.5913 27.75 44 27.75C42.4087 27.75 40.8826 28.3558 39.7574 29.4341C38.6321 30.5125 38 31.975 38 33.5Z" fill="white"/><path fill-rule="evenodd" clip-rule="evenodd" d="M44.1558 69C51.9914 69.0118 59.5904 66.3015 65.667 61.3276C63.2211 57.8069 59.9656 54.9323 56.1774 52.9485C52.3892 50.9647 48.1805 49.9303 43.9093 49.9334C39.6914 49.93 35.5336 50.9384 31.7811 52.875C28.0286 54.8116 24.7898 57.6205 22.3337 61.0683C28.4574 66.2037 36.1817 69.0112 44.1558 69Z" fill="white"/><defs><linearGradient id="paint0_linear_6378_111547" x1="41.9737" y1="88" x2="41.9737" y2="-2.08455e-06" gradientUnits="userSpaceOnUse"><stop stop-color="#3C70F4"/><stop offset="1" stop-color="#638DF6"/></linearGradient></defs></svg>
                                    </div>
                                    <div class="variation__cnt">
                                        <div>
                                            <p>От 1 000 001 до 3 000 000 рублей</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    }
                ?>
                
                
                
                <div class="question_item__cnt result_form__cnt not_answered hidden">
                    <div class="urist__cnt hidden">
                        <img width="88" height="88" alt="" src="/wp-content/themes/fpalaw/assets/img/chat/bondar.png">
                        <div class="content__cnt">
                            <div class="title">Боднар Евгения Ивановна</div>
                            <div class="subtitle">Руководитель отдела сопровождения клиентов по кредитам и долгам</div>
                        </div>
                    </div>
                    <div class="description__cnt">
                        <p>Отлично. Благодарю за ваши ответы!</p>
                        <p>Остался всего один шаг. Укажите номер телефона и мы пришлём вам инструкцию, как пройти процедуру банкротства бесплатно именно в вашем случае.</p>
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
                        <?php echo do_shortcode("[contact-form-7 id='21162' title='Форма для страницы Чат - Записаться на бесплатную консультацию']"); ?>
                        <div class="politics">
                            <span class="politics__icon">
                                <svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#shild"></use></svg>
                            </span>
                            <p class="politics__text">Мы гарантируем безопасность и сохранность Ваших данных. Нажимая на кнопку, вы даете согласие на обработку своих персональных данных в соответствии с <a href="https://fpa.ru/politika/">«Политикой конфиденциальности»</a></p>
                        </div>
                    </div>
                    <div id="thank_block_result" class="thank_block__cnt hidden">
                        <p class="name"><span>Константин</span>, спасибо.</p>
                        <p class="text">Мы пришлем вам инструкцию, как пройти процедуру банкротства бесплатно в вашем случае, или позвоним с телефона <span>8 (812) 425-69-18</span> и всё расскажем.</p>
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