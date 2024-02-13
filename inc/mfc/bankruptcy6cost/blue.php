`<?php 
  $arr = ['01' => 'января','02' => 'февраля','03' => 'марта','04' => 'апреля','05' => 'мая','06' => 'июня','07' => 'июля','08' => 'августа','09' => 'сентября','10' => 'октября','11' => 'ноября','12' => 'декабря'];
  $date = get_field('timer', 374, false);
  $date = new DateTime($date);
  $month = $date->format('m');
  $ruMonth = $arr[$month];
?>
<style>
    body.page-template-bankruptcy2cost .modal__overlay {
        overflow-y: auto!important;
    }
    body.page-template-bankruptcy2cost .popup-item__cnt .calculation__variants .calculation__radio, 
    body.page-template-bankruptcy2cost .popup-item__cnt .calculation__variants .calculation__checkbox {
        max-height: 68px;
    }
    body.page-template-bankruptcy2cost .header__bottom {
        display: none;
    }
    body.page-template-bankruptcy2cost .header__bottom.show {
        display: block;
    }
    .bankruptcy2cost_container {
        max-width: 1135px;
        margin: 0 auto;
    }
    .header__logo--mfc {
        margin-left: 0px;
    }
    section.bankruptcy2cost {
        position: relative;
        z-index: 3;
        /*padding-top: 20px;*/
        padding-bottom: 100px;
    }
    section.bankruptcy2cost.color_scheme_red {
        padding: 100px 0;
    }
    section.bankruptcy2cost.color_scheme_green {
        padding: 100px 0;
        background: #EDEDF8;
    }
    section.bankruptcy2cost.color_scheme_purple {
        padding: 100px 0;
    }
    .bankruptcy2cost__wrap .note {
        font-weight: 700;
        font-size: 22px;
        line-height: 145%;
        background: transparent;
        padding: 0;
        margin-bottom: 25px;
    }
    .color_scheme_blue .bankruptcy2cost__wrap .note {
        color: #5381F6;
    }
    .color_scheme_red .bankruptcy2cost__wrap .note {
        color: #FB5A80;
    }
    .color_scheme_green .bankruptcy2cost__wrap .note {
        color: #17CC5F;
    }
    .color_scheme_purple .bankruptcy2cost__wrap .note {
        color: #7A55D9;
    }
    .color_scheme_blue .bankruptcy2cost__wrap .bankruptcy2cost__subtitle {
        color: #5381F6;
    }
    .color_scheme_red .bankruptcy2cost__wrap .bankruptcy2cost__subtitle {
        color: #FB5A80;
    }
    .color_scheme_green .bankruptcy2cost__wrap .bankruptcy2cost__subtitle {
        color: #17CC5F;
    }
    .color_scheme_purple .bankruptcy2cost__wrap .bankruptcy2cost__subtitle {
        color: #7A55D9;
    }
    .color_scheme_blue .bankruptcy2cost__wrap .btn {
        background: -webkit-gradient(linear, 0 0, 100% 0, from(#3C70F4), to(#638DF6));
        background: -webkit-linear-gradient(360deg, #3C70F4 0%, #638DF6 100%);
        background: -moz-linear-gradient(360deg, #3C70F4 0%, #638DF6 100%);
        background: -o-linear-gradient(360deg, #3C70F4 0%, #638DF6 100%);
        background: linear-gradient(360deg, #3C70F4 0%, #638DF6 100%);
    }
    .color_scheme_blue .bankruptcy2cost__wrap .btn:hover {
        background: -webkit-gradient(linear, 0 0, 100% 0, from(#1E52D6), to(#4F79E2));
        background: -webkit-linear-gradient(360deg, #1E52D6 0%, #4F79E2 100%);
        background: -moz-linear-gradient(360deg, #1E52D6 0%, #4F79E2 100%);
        background: -o-linear-gradient(360deg, #1E52D6 0%, #4F79E2 100%);
        background: linear-gradient(360deg, #1E52D6 0%, #4F79E2 100%);
    }
    .color_scheme_red .bankruptcy2cost__wrap .btn {
        background: -webkit-gradient(linear, 100% 0, 0 0, from(#FB5A80), to(#F23965));
        background: -webkit-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        background: -moz-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        background: -o-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        background: linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
    }
    .color_scheme_red .bankruptcy2cost__wrap .btn:hover {
        background: -webkit-gradient(linear, 100% 0, 0 0, from(#E7466C), to(#CA113D));
        background: -webkit-linear-gradient(180deg, #E7466C 0%, #CA113D 100%);
        background: -moz-linear-gradient(180deg, #E7466C 0%, #CA113D 100%);
        background: -o-linear-gradient(180deg, #E7466C 0%, #CA113D 100%);
        background: linear-gradient(180deg, #E7466C 0%, #CA113D 100%);
    }
    .color_scheme_green .bankruptcy2cost__wrap .btn {
        background: -webkit-gradient(linear, 0 0, 100% 0, from(#18C55D), to(#1BDC74));
        background: -webkit-linear-gradient(360deg, #18C55D 0%, #1BDC74 100%);
        background: -moz-linear-gradient(360deg, #18C55D 0%, #1BDC74 100%);
        background: -o-linear-gradient(360deg, #18C55D 0%, #1BDC74 100%);
        background: linear-gradient(360deg, #18C55D 0%, #1BDC74 100%);
    }
    .color_scheme_green .bankruptcy2cost__wrap .btn:hover {
        background: -webkit-gradient(linear, 0 0, 100% 0, from(#009F3F), to(#00C157));
        background: -webkit-linear-gradient(360deg, #009F3F 0%, #00C157 100%);
        background: -moz-linear-gradient(360deg, #009F3F 0%, #00C157 100%);
        background: -o-linear-gradient(360deg, #009F3F 0%, #00C157 100%);
        background: linear-gradient(360deg, #009F3F 0%, #00C157 100%);
    }
    .color_scheme_purple .bankruptcy2cost__wrap .btn {
        background: -webkit-gradient(linear, 0 0, 100% 0, from(#522DB1), to(#7A55D9));
        background: -webkit-linear-gradient(360deg, #522DB1 0%, #7A55D9 100%);
        background: -moz-linear-gradient(360deg, #522DB1 0%, #7A55D9 100%);
        background: -o-linear-gradient(360deg, #522DB1 0%, #7A55D9 100%);
        background: linear-gradient(360deg, #522DB1 0%, #7A55D9 100%);
    }
    .color_scheme_purple .bankruptcy2cost__wrap .btn:hover {
        background: -webkit-gradient(linear, 0 0, 100% 0, from(#2A0589), to(#5C37BB));
        background: -webkit-linear-gradient(360deg, #2A0589 0%, #5C37BB 100%);
        background: -moz-linear-gradient(360deg, #2A0589 0%, #5C37BB 100%);
        background: -o-linear-gradient(360deg, #2A0589 0%, #5C37BB 100%);
        background: linear-gradient(360deg, #2A0589 0%, #5C37BB 100%);
    }
    .bankruptcy2cost__wrap h1.bankruptcy2cost__title {
        font-size: 45px;
        line-height: 145%;
        color: #393939;
        margin-bottom: 45px;
    }
    .bankruptcy2cost__wrap .bankruptcy2cost__block-btn {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 280px auto;
        grid-column-gap: 35px;
        grid-row-gap: 35px;
        margin-bottom: 60px;
        align-items: center;
    }
    .bankruptcy2cost__wrap .bankruptcy2cost__block-btn button {
        font-weight: 600;
        font-size: 20px;
        line-height: 145%;
        text-align: center;
        color: #FFFFFF;
        padding: 25px 0;
    }
    .bankruptcy2cost__wrap .bankruptcy2cost__block-btn .bankruptcy2cost__hint {
        font-size: 18px;
        line-height: 145%;
    }
    .bankruptcy2cost__wrap .bankruptcy2cost__hint--bold {
        font-weight: 700;
    }
    .color_scheme_blue .text-accent {
        color: #5381F6;
    }
    .color_scheme_red .text-accent {
        color: #FB5A80;
    }
    .color_scheme_green .text-accent {
        color: #17CC5F;
    }
    .color_scheme_purple .text-accent {
        color: #7A55D9;
    }
    .color_scheme_purple .text-green {
        color: #7A55D9;
    }
    .bankruptcy2cost__wrap .bankruptcy2cost__subtitle {
        font-weight: 700;
        font-size: 22px;
        line-height: 145%;
        color: #5381F6;
        margin-bottom: 25px;
    }
    .bankruptcy2cost__wrap .bankruptcy2cost__lst {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .bankruptcy2cost__wrap .bankruptcy2cost__lst li {
        padding-left: 25px;
        font-weight: 400;
        font-size: 18px;
        line-height: 145%;
        color: #393939;
        position: relative;
    }
    .bankruptcy2cost__wrap .bankruptcy2cost__lst li+li {
        margin-top: 15px;
    }
    .bankruptcy2cost__wrap .bankruptcy2cost__lst li::before {
        content: '';
        position: absolute;
        left: 0;
        top: 10px;
        width: 6px;
        height: 6px;
        background-color: #5381f6;
        border-radius: 50%;
    }
    .color_scheme_red .bankruptcy2cost__wrap .bankruptcy2cost__lst li::before {
        background-color: #FB5A80;
    }
    .color_scheme_green .bankruptcy2cost__wrap .bankruptcy2cost__lst li::before {
        background-color: #17CC5F;
    }
    .color_scheme_purple .bankruptcy2cost__wrap .bankruptcy2cost__lst li::before {
        background-color: #7A55D9;
    }
    footer.footer {
        display: block!important;
        position: relative;
        padding: 30px 0;
        background-color: #f3f4f4;
    }
    footer.footer ul.copyright li {
        margin-bottom: 0;
    }
    footer.footer ul.copyright li+li {
        margin-top: 20px;
    }
    .color_scheme_blue .radio__new--accent {
        border: 1px solid #3c70f4;
    }
    .color_scheme_red .radio__new--accent {
        border: 1px solid #FB5A80;
    }
    .color_scheme_green .radio__new--accent {
        border: 1px solid #17CC5F;
    }
    .color_scheme_purple .radio__new--accent {
        border: 1px solid #7A55D9;
    }
    .color_scheme_blue .checkbox__new--accent {
        border: 1px solid #3c70f4;
    }
    .color_scheme_red .checkbox__new--accent {
        border: 1px solid #FB5A80;
    }
    .color_scheme_green .checkbox__new--accent {
        border: 1px solid #17CC5F;
    }
    .color_scheme_purple .checkbox__new--accent {
        border: 1px solid #7A55D9;
    }
    .color_scheme_blue .radio__new::before {
        background: #3c70f4;
    }
    .color_scheme_red .radio__new::before {
        background: #FB5A80;
    }
    .color_scheme_green .radio__new::before {
        background: #17CC5F;
    }
    .color_scheme_purple .radio__new::before {
        background: #7A55D9;
    }    
    .color_scheme_blue .checkbox__new::before {
        background-color: #3c70f4;
    }
    .color_scheme_red .checkbox__new::before {
        background-color: #FB5A80;
    }
    .color_scheme_green .checkbox__new::before {
        background-color: #17CC5F;
    }
    .color_scheme_purple .checkbox__new::before {
        background-color: #7A55D9;
    }    
   .color_scheme_blue .btn {
        background: -webkit-gradient(linear, 0 0, 100% 0, from(#3C70F4), to(#638DF6));
        background: -webkit-linear-gradient(360deg, #3C70F4 0%, #638DF6 100%);
        background: -moz-linear-gradient(360deg, #3C70F4 0%, #638DF6 100%);
        background: -o-linear-gradient(360deg, #3C70F4 0%, #638DF6 100%);
        background: linear-gradient(360deg, #3C70F4 0%, #638DF6 100%);
    }
    .color_scheme_blue .btn:hover {
        background: -webkit-gradient(linear, 0 0, 100% 0, from(#1E52D6), to(#4F79E2));
        background: -webkit-linear-gradient(360deg, #1E52D6 0%, #4F79E2 100%);
        background: -moz-linear-gradient(360deg, #1E52D6 0%, #4F79E2 100%);
        background: -o-linear-gradient(360deg, #1E52D6 0%, #4F79E2 100%);
        background: linear-gradient(360deg, #1E52D6 0%, #4F79E2 100%);
    }
    .color_scheme_red .btn {
        background: -webkit-gradient(linear, 100% 0, 0 0, from(#FB5A80), to(#F23965));
        background: -webkit-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        background: -moz-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        background: -o-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        background: linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
    }
    .color_scheme_red .btn:hover {
        background: -webkit-gradient(linear, 100% 0, 0 0, from(#E7466C), to(#CA113D));
        background: -webkit-linear-gradient(180deg, #E7466C 0%, #CA113D 100%);
        background: -moz-linear-gradient(180deg, #E7466C 0%, #CA113D 100%);
        background: -o-linear-gradient(180deg, #E7466C 0%, #CA113D 100%);
        background: linear-gradient(180deg, #E7466C 0%, #CA113D 100%);
    }
    .color_scheme_green .btn {
        background: -webkit-gradient(linear, 0 0, 100% 0, from(#18C55D), to(#1BDC74));
        background: -webkit-linear-gradient(360deg, #18C55D 0%, #1BDC74 100%);
        background: -moz-linear-gradient(360deg, #18C55D 0%, #1BDC74 100%);
        background: -o-linear-gradient(360deg, #18C55D 0%, #1BDC74 100%);
        background: linear-gradient(360deg, #18C55D 0%, #1BDC74 100%);
    }
    .color_scheme_green .btn:hover {
        background: -webkit-gradient(linear, 0 0, 100% 0, from(#009F3F), to(#00C157));
        background: -webkit-linear-gradient(360deg, #009F3F 0%, #00C157 100%);
        background: -moz-linear-gradient(360deg, #009F3F 0%, #00C157 100%);
        background: -o-linear-gradient(360deg, #009F3F 0%, #00C157 100%);
        background: linear-gradient(360deg, #009F3F 0%, #00C157 100%);
    }
    .color_scheme_purple .btn {
        background: -webkit-gradient(linear, 0 0, 100% 0, from(#522DB1), to(#7A55D9));
        background: -webkit-linear-gradient(360deg, #522DB1 0%, #7A55D9 100%);
        background: -moz-linear-gradient(360deg, #522DB1 0%, #7A55D9 100%);
        background: -o-linear-gradient(360deg, #522DB1 0%, #7A55D9 100%);
        background: linear-gradient(360deg, #522DB1 0%, #7A55D9 100%);
    }
    .color_scheme_purple .btn:hover {
        background: -webkit-gradient(linear, 0 0, 100% 0, from(#2A0589), to(#5C37BB));
        background: -webkit-linear-gradient(360deg, #2A0589 0%, #5C37BB 100%);
        background: -moz-linear-gradient(360deg, #2A0589 0%, #5C37BB 100%);
        background: -o-linear-gradient(360deg, #2A0589 0%, #5C37BB 100%);
        background: linear-gradient(360deg, #2A0589 0%, #5C37BB 100%);
    }
    
    
    .section--modal.old__cnt .modal__overlay .modal__wrap--services h3.modal__title {
        font-weight: 700;
        font-size: 26px;
        line-height: 145%;
        color: #393939;
    }
    .section--modal.old__cnt .modal__overlay .modal__wrap--services h3.modal__title span {
        display: block;
        color: #5381F6;
    }
    body.page-template-bankruptcy4cost .section--modal.old__cnt .modal__overlay {
        z-index: 9999;
    }
    
    body.page-template-bankruptcy4cost header .header__control {
        top: 33px!important;
        position: absolute!important;
    }

    .popup-item__cnt.mfc-bankruptcy__number-1-test .result_inline_form__cnt,
    .popup-item__cnt.mfc-bankruptcy__number-2-test .result_inline_form__cnt {
        margin-bottom: 50px;
    }
    .popup-item__cnt.mfc-bankruptcy__number-1-test .result_inline_form__cnt .color_bulet__cnt,
    .popup-item__cnt.mfc-bankruptcy__number-2-test .result_inline_form__cnt .color_bulet__cnt {
        background: linear-gradient(135deg, #EDF0F8 0%, #D7DEEF 100%);
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 20px;
    }
    .popup-item__cnt.mfc-bankruptcy__number-1-test .result_inline_form__cnt .color_bulet__cnt .message__cnt p,
    .popup-item__cnt.mfc-bankruptcy__number-2-test .result_inline_form__cnt .color_bulet__cnt .message__cnt p {
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 145%;
        color: #393939;
        margin-bottom: 20px;
    }
    .popup-item__cnt.mfc-bankruptcy__number-1-test .result_inline_form__cnt .color_bulet__cnt input[type=tel],
    .popup-item__cnt.mfc-bankruptcy__number-2-test .result_inline_form__cnt .color_bulet__cnt input[type=tel] {
        text-align: left;
    }
    .popup-item__cnt.mfc-bankruptcy__number-1-test .result_inline_form__cnt input[type=submit],
    .popup-item__cnt.mfc-bankruptcy__number-2-test .result_inline_form__cnt input[type=submit] {
        min-height: 68px;
        font-size: 20px;    
    }
    .popup-item__cnt.mfc-bankruptcy__number-1-test .calculation--inpost,
    .popup-item__cnt.mfc-bankruptcy__number-2-test .calculation--inpost {
        margin-bottom: 30px;
    }
    .popup-item__cnt.mfc-bankruptcy__number-1-test .calculation__nav,
    .popup-item__cnt.mfc-bankruptcy__number-2-test .calculation__nav {
        display: none;
    }
    
    
    
    @media (max-width: 1180px) {
        .bankruptcy2cost_container {
            padding: 0 24px;
        }
        .bankruptcy2cost__wrap .note {
            font-size: 20px;
            margin-bottom: 20px;
        }
        .bankruptcy2cost__wrap h1.bankruptcy2cost__title {
            font-size: 36px;
            margin-bottom: 40px;
        }
        .bankruptcy2cost__wrap .bankruptcy2cost__block-btn button {
            font-size: 18px;
        }
    }
    @media (max-width: 980px) {
        .bankruptcy2cost__wrap h1.bankruptcy2cost__title {
            font-size: 28px;
            margin-bottom: 40px;
        }
        .bankruptcy2cost__wrap .bankruptcy2cost__subtitle {
            font-size: 20px;
        }
    }
    @media (max-width: 768px) {
        section.bankruptcy2cost {
            padding-bottom: 45px;
        }
        section.bankruptcy2cost.color_scheme_red {
            padding: 45px 0;
        }
        section.bankruptcy2cost.color_scheme_green {
            padding: 45px 0;
        }
        section.bankruptcy2cost.color_scheme_purple {
            padding: 45px 0;
        }
        .bankruptcy2cost__wrap .note {
            font-size: 18px;
        }
        .bankruptcy2cost__wrap h1.bankruptcy2cost__title {
            font-size: 24px;
        }
        .bankruptcy2cost__wrap .bankruptcy2cost__block-btn button {
            font-size: 14px;
            padding: 20px 0;
        }
        .bankruptcy2cost__wrap .bankruptcy2cost__block-btn .bankruptcy2cost__hint {
            font-size: 16px;
        }
        .bankruptcy2cost__wrap .bankruptcy2cost__block-btn {
            grid-template-columns: 100%;
            grid-column-gap: 10px;
            grid-row-gap: 10px;
            margin-bottom: 40px;
        }
        .bankruptcy2cost__wrap .bankruptcy2cost__subtitle {
            font-size: 18px;
        }
        .bankruptcy2cost__wrap .bankruptcy2cost__lst li {
            font-size: 16px;
        }
        
        body.page-template-bankruptcy2cost .header__control {
            position: absolute!important;
            top: 40px!important;
            display: grid;
            grid-template-rows: auto;
            /*grid-template-columns: 42px 42px 42px;*/
            /*grid-template-columns: 42px 42px;*/
            grid-template-columns: 42px;
            grid-column-gap: 20px;
            grid-row-gap: 20px;
        }
        body.page-template-bankruptcy2cost .header__control button.phone,
        body.page-template-bankruptcy2cost .header__control button.percent {
            background-color: #f3f4f4;
            border: 1px solid #fff;
            border-radius: 8px;
            cursor: pointer;
            height: 42px;
        }
        body.page-template-bankruptcy2cost .header__control button.phone {
            /*display: block;*/
        }
        body.page-template-bankruptcy2cost .header__control button.percent {
            /*display: block;*/
        }
        .section--modal.old__cnt .modal__overlay .modal__wrap--services h3.modal__title {
            font-size: 22px;
        }
         .section--modal.old__cnt .modal__overlay .modal__wrap--services h3.modal__title span {
            font-size: 26px;
        }
        .section--modal.old__cnt .modal__overlay .modal__wrap--services {
            overflow-y: initial!important;
        }
        .popup-item__cnt.mfc-bankruptcy__number-1-test form.wpcf7-form,
        .popup-item__cnt.mfc-bankruptcy__number-2-test form.wpcf7-form {
            margin: 0 16px;
            max-width: 640px;
        }
        .popup-item__cnt.mfc-bankruptcy__number-1-test .result_inline_form__cnt .color_bulet__cnt .message__cnt p, 
        .popup-item__cnt.mfc-bankruptcy__number-2-test .result_inline_form__cnt .color_bulet__cnt .message__cnt p {
            font-size: 14px;
        }
        .popup-item__cnt.mfc-bankruptcy__number-1-test .result_inline_form__cnt input[type=submit], 
        .popup-item__cnt.mfc-bankruptcy__number-2-test .result_inline_form__cnt input[type=submit] {
            min-height: 40px;
            font-size: 16px;
        }
        
    }
    @media (max-width: 520px) {
        .bankruptcy2cost__wrap .note {
            font-size: 14px;
        }
        .bankruptcy2cost__wrap h1.bankruptcy2cost__title {
            font-size: 18px;
        }
        .bankruptcy2cost__wrap .bankruptcy2cost__block-btn button {
            padding: 15px 0;
        }
        .bankruptcy2cost__wrap .bankruptcy2cost__block-btn .bankruptcy2cost__hint {
            font-size: 14px;
        }
        .bankruptcy2cost__wrap .bankruptcy2cost__subtitle {
            font-size: 16px;
        }
        .bankruptcy2cost__wrap .bankruptcy2cost__lst li {
            font-size: 14px;
        }
    }
</style>
<section class="bankruptcy2cost color_scheme_blue">
    <div class="bankruptcy2cost_container">
        <div class="bankruptcy2cost__wrap">
            <span class="note note--blue">Ваш долг более 50 000 руб?</span>
            <h1 class="bankruptcy2cost__title">Пройдите тест и узнайте, вправе ли вы бесплатно списать все долги <span class="text-accent">сo 100% гарантией результата через МФЦ</span> до <?=$date->format('j'); ?> <?=$arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> года</h1>
            <div class="bankruptcy2cost__block-btn">
                <!--<button class="btn mfc__btn mfc-btn-free" id="mfc-btn-free" data-master="bondar" data-sms="19">Пройти тест</button>-->
                <button class="btn bankruptcy2cost__btn hidden-btn" data-sms="19" data-popup-id="mfc-bankruptcy__number-1-test" data-color-schema="blue" onclick="ym(82134583, 'reachGoal', '1button'); return true;">Пройти тест</button>
                <span class="bankruptcy2cost__hint">
                    <span class="bankruptcy2cost__hint--big bankruptcy2cost__hint--bold text-accent">1 из 3</span> должников имел основания списать все долги через МФЦ <span class="bankruptcy2cost__hint--bold text-accent">в 2023 году бесплатно</span>, но не воспользовался этим правом
                </span>
            </div>
            <p class="bankruptcy2cost__subtitle">Какие долги вы вправе списать в МФЦ?</p>
            <ul class="bankruptcy2cost__lst">
                <li class="bankruptcy2cost__lst-item">Задолженности, образовавшиеся в результате неисполнения должником принятых им обязательств. В эту группу входят потребительские кредиты, займы в микрофинансовых организациях и у третьих лиц, ипотеки, кредитные карты, карты рассрочки и другие.</li>
                <li class="bankruptcy2cost__lst-item">Налоги, пошлины, сборы, долги перед бюджетными и внебюджетными фондами, включая задолженность перед Федеральной налоговой службой и Пенсионным фондом России.</li>
                <li class="bankruptcy2cost__lst-item">Другие долги, в том числе, установленные судебными актами. К ним относятся задолженности перед юридическими лицами, жилищно-коммунальными хозяйствами и так далее.</li>
            </ul>
        </div>
    </div>
</section>