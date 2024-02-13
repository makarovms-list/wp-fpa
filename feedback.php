<?php
  /*
    Template Name: Форма обратной связи
    Template Post Type: page
  */
?>

    <?php get_header(); ?>
    <style>
        section.feedback *:focus {
            outline: none;
        }
        section.feedback {
            background: linear-gradient(135deg, #EDEDF8 14.64%, #D7DEEF 85.36%);
            padding: 140px 0;
        }
        section.feedback .politics {
            margin-bottom: 15px;
        }
        section.feedback h1.feedback__title {
            font-style: normal;
            font-weight: 700;
            font-size: 34px;
            line-height: 145%;
            text-align: center;
            color: #393939;            
        }
        section.feedback p.has-text-align-center {
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 145%;
            text-align: center;
            color: #717B97;
        }
        section.feedback form.wpcf7-form {
            margin-top: 60px;
        }
        section.feedback form.wpcf7-form .form__row {
            position: relative;
        }
        section.feedback form.wpcf7-form .form__row .wpcf7-form-control-wrap .wpcf7-not-valid-tip {
            position: absolute;
            bottom: -36px;
        }
        section.feedback form.wpcf7-form .form__row .hidden_field__cnt input[type=text] {
            display: none;
        }
        section.feedback form.wpcf7-form .form__row .hidden_field__cnt {
            width: 100%;
        }
        section.feedback form.wpcf7-form .form__row .hidden_field__cnt .wpcf7-form-control-wrap {
            display: block;
            position: relative;
        }
        section.feedback form.wpcf7-form .form__row .hidden_field__cnt .wpcf7-not-valid-tip {
            bottom: -20px;
        }
        section.feedback form.wpcf7-form .form__row .text_area {
            position: relative;
            width: 100%;
        }
        section.feedback form.wpcf7-form .form__row .text_area .wpcf7-not-valid-tip {
            position: absolute;
            bottom: -18px;
        }
        section.feedback form.wpcf7-form .form__row+.form__row {
            margin-top: 20px;
            margin-bottom: 0;
        }
        section.feedback form.wpcf7-form .form__row label {
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 145%;
            color: #717B97;
            margin-bottom: 4px;
            /*display: block;*/
            display: flex;
            align-items: center;
            white-space: nowrap;
        }
        
        section.feedback form.wpcf7-form .form__row br {
            display: none;
        }
        section.feedback form.wpcf7-form .form__row .form__row_wrap {
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: calc(50% - 8px) calc(50% - 8px);
            grid-column-gap: 16px;
            grid-row-gap: 16px;
            width: 100%;
        }
        section.feedback form.wpcf7-form .form__row .form__row_wrap input[type=tel],
        section.feedback form.wpcf7-form .form__row .form__row_wrap input[type=text],
        section.feedback form.wpcf7-form .form__row .form__row_wrap input[type=email] {
            background: #FFFFFF;
            border-radius: 10px;
            text-align: left;
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 145%;
            /*color: #B5BDD1;*/
            color: #393939;
            box-shadow: 0 0 4px rgb(0 0 0 / 20%);
        }
        section.feedback form.wpcf7-form .form__row textarea {
            background: #fff;
            box-shadow: 0 0 4px rgb(0 0 0 / 20%);
            text-align: left;
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 145%;
            color: #393939;
            padding: 13px 20px 50px;
        }
        section.feedback form.wpcf7-form .form__row select {
            width: 100%;
            height: 39px;
            background: #FFFFFF;
            border-radius: 10px;
            border: 1px solid #fff;
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 145%;
            color: #393939;
            padding: 10px;
        }
        section.feedback form.wpcf7-form .form__row div.select_item {
            position: relative;
            display: block;
            min-width: 220px;
            width: 100%;
            background: #fff;
            border-radius: 10px;
        }
        
        section.feedback form.wpcf7-form .form__row div.select_item.border_modifed {
            border-radius: 10px 10px 0 0;
        }
        section.feedback form.wpcf7-form .form__row div.select_item.border_modifed .select__head {
            border-radius: 10px 10px 0 0;
        }
        section.feedback form.wpcf7-form .form__row div.select_item.border_modifed .select__list {
            border-radius: 0 0 10px 10px;
        }
        
        
        section.feedback form.wpcf7-form .form__row div.select_item .select__head {
            width: 100%;
            max-width: 100%;
            box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            padding: 14px 15px;
            font-size: 14px;
            line-height: 18px;
            /*color: rgba(66, 67, 72, 0.8);*/
            color: #393939;
            cursor: pointer;
            white-space: nowrap;
            padding: 14px 30px 14px 15px;
            /*overflow: hidden;*/
            text-overflow: ellipsis;
        }
        
        section.feedback form.wpcf7-form .form__row div.select_item .select__head {
            max-height: 46px;
        }
        section.feedback form.wpcf7-form .form__row div.select_item .select__head span.image {
            position: relative;
            bottom: 75%;
            transform: translateY(50%);
        }
        section.feedback form.wpcf7-form .form__row div.select_item .select__head span.name {
            position: relative;
            bottom: 50%;
            transform: translateY(50%);
        }
        
        section.feedback form.wpcf7-form .form__row div.select_item .select__head::after {
            width: 10px;
            height: 8px;
            background: #FFF url("data:image/svg+xml,%3Csvg width='10' height='8' viewBox='0 0 10 8' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M4.58903 7.7845C4.6349 7.85112 4.69628 7.90559 4.76787 7.94323C4.83947 7.98086 4.91914 8.00052 5.00003 8.00052C5.08091 8.00052 5.16059 7.98086 5.23218 7.94323C5.30378 7.90559 5.36516 7.85112 5.41103 7.7845L9.91103 1.2845C9.96312 1.20953 9.99366 1.12172 9.99935 1.0306C10.005 0.93949 9.98564 0.848562 9.94327 0.767697C9.90091 0.686832 9.83719 0.619124 9.75905 0.571929C9.6809 0.524734 9.59132 0.499857 9.50003 0.500001L0.500029 0.500001C0.408951 0.500377 0.319698 0.525574 0.24187 0.572882C0.164041 0.62019 0.100581 0.68782 0.0583138 0.768497C0.0160467 0.849175 -0.00342795 0.939848 0.00198403 1.03077C0.00739601 1.12168 0.0374899 1.20941 0.0890293 1.2845L4.58903 7.7845Z' fill='%23393939'/%3E%3C/svg%3E%0A") no-repeat center / cover;
            /*background: #FFF url("data:image/svg+xml,%3Csvg width='10' height='6' viewBox='0 0 10 6' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M4.50495 5.78413L0.205241 1.25827C-0.0684138 0.970375 -0.0684138 0.503596 0.205241 0.215836C0.478652 -0.0719461 0.922098 -0.071946 1.19549 0.215837L5.00007 4.22052L8.80452 0.215953C9.07805 -0.0718292 9.52145 -0.0718292 9.79486 0.215953C10.0684 0.503736 10.0684 0.970492 9.79486 1.25839L5.49508 5.78425C5.35831 5.92814 5.17925 6 5.00009 6C4.82085 6 4.64165 5.928 4.50495 5.78413Z' fill='%23ED266A'/%3E%3C/svg%3E%0A") no-repeat center / cover;*/
            position: absolute;
            right: 20px;
            bottom: 50%;
            transform: translateY(50%);
            content: '';
            display: block;
            transition: .2s ease-in;
        }
        section.feedback form.wpcf7-form .form__row div.select_item .select__head.open::after {
            transform: translateY(50%) rotate(180deg);
        }
        section.feedback form.wpcf7-form .form__row div.select_item .select__list {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: #fff;
            box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            margin-top: 5px;
            max-height: 205px;
            overflow-x: hidden;
            overflow-y: auto;
            z-index: 100;
            margin: 0;
            padding: 0;
            font-size: 14px;
            color: #424348;
            scrollbar-color: dark;
            scrollbar-width: thin;
            overscroll-behavior: contain;
        }
        section.feedback form.wpcf7-form .form__row div.select_item .select__list::-webkit-scrollbar {
            width: 7px;
            background-color: #F8F9FA;
            padding: 5px;
        }
        section.feedback form.wpcf7-form .form__row div.select_item .select__list::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background-color: #D9D9D9;
        }
        section.feedback form.wpcf7-form .form__row div.select_item .select__list .select__item {
            position: relative;
            border-top: 1px solid rgba(224, 229, 231, 0.5);
            padding: 10px 15px;
            cursor: pointer;
            list-style-type: none;
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: 32px auto;
            grid-column-gap: 8px;
            grid-row-gap: 8px;
            align-items: center;
            justify-content: flex-start;
        }
        section.feedback form.wpcf7-form .form__row #customer_request .select__list .select__item,
        section.feedback form.wpcf7-form .form__row #subject .select__list .select__item {
            grid-template-columns: 100%;
        }
        section.feedback form.wpcf7-form .form__row div.select_item .select__list .select__item span.image,
        section.feedback form.wpcf7-form .form__row div.select_item .select__head span.image {
            width: 32px;
            height: 32px;
            display: block;
        }
        section.feedback form.wpcf7-form .form__row div.select_item .select__list .select__item span.image.bodnar,
        section.feedback form.wpcf7-form .form__row div.select_item .select__head span.image.bodnar {
            background: url(/wp-content/themes/fpalaw/assets/img/feedback/bondar.png) center center no-repeat;
            background-size: cover;
        }
        section.feedback form.wpcf7-form .form__row div.select_item .select__list .select__item span.image.golovin,
        section.feedback form.wpcf7-form .form__row div.select_item .select__head span.image.golovin {
            background: url(/wp-content/themes/fpalaw/assets/img/feedback/golovin.png) center center no-repeat;
            background-size: cover;
        }
        section.feedback form.wpcf7-form .form__row div.select_item .select__list .select__item span.image.okladnikov,
        section.feedback form.wpcf7-form .form__row div.select_item .select__head span.image.okladnikov {
            background: url(/wp-content/themes/fpalaw/assets/img/feedback/okladnikov.png) center center no-repeat;
            background-size: cover;
        }
        section.feedback form.wpcf7-form .form__row div.select_item .select__list .select__item span.image.kopyrina,
        section.feedback form.wpcf7-form .form__row div.select_item .select__head span.image.kopyrina {
            background: url(/wp-content/themes/fpalaw/assets/img/feedback/kopyrina.png) center center no-repeat;
            background-size: cover;
        }
        section.feedback form.wpcf7-form .form__row div.select_item .select__list .select__item span.image.sergeeva,
        section.feedback form.wpcf7-form .form__row div.select_item .select__head span.image.sergeeva {
            background: url(/wp-content/themes/fpalaw/assets/img/feedback/sergeeva.png) center center no-repeat;
            background-size: cover;
        }
        section.feedback form.wpcf7-form .form__row div.select_item .select__list .select__item span.image.chernova,
        section.feedback form.wpcf7-form .form__row div.select_item .select__head span.image.chernova {
            background: url(/wp-content/themes/fpalaw/assets/img/feedback/chernova.png) center center no-repeat;
            background-size: cover;
        }
        section.feedback form.wpcf7-form .form__row div.select_item .select__list .select__item span.image.efremov,
        section.feedback form.wpcf7-form .form__row div.select_item .select__head span.image.efremov {
            background: url(/wp-content/themes/fpalaw/assets/img/feedback/efremov.png) center center no-repeat;
            background-size: cover;
        }
        section.feedback form.wpcf7-form .form__row div.select_item .select__head {
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: 32px auto;
            grid-column-gap: 8px;
            grid-row-gap: 8px;
            align-items: center;
            justify-content: flex-start;
        }
        section.feedback form.wpcf7-form .form__row div.select_item .select__head span.name {
            color: #5381F6;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        section.feedback form.wpcf7-form .form__row div.select_item .select__head span.name span {
            color: #B5BDD1;
            font-weight: normal;
        }
        section.feedback form.wpcf7-form .form__row div.select_item .select__list .select__item span.name span {
            color: #B5BDD1;
            font-weight: normal;
        }
        section.feedback form.wpcf7-form .form__row div.select_item .select__list .select__item:hover {
            background-color: rgba(224, 229, 231, 0.5);
        }
        section.feedback .attach__cnt {
            position: absolute;
            bottom: 0px;
            right: 0px;
            left: 0px;
            cursor: pointer;
            border-radius: 0 0 10px 10px;
            background: #fff;
            padding: 6px;
        }
        section.feedback .attach__cnt .attach__wrap {
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: auto 50px 168px;
            grid-column-gap: 10px;
            grid-row-gap: 10px;
            justify-content: flex-end;
            align-items: center;
        }
        section.feedback .attach__cnt .notice.mobile {
            display: none;
        }
        section.feedback .attach__cnt .notice .notice_txt {
            font-style: normal;
            font-weight: 500;
            font-size: 12px;
            line-height: 145%;
            text-align: right;
            color: #717B97;
            display: block;
        }
        section.feedback .attach__cnt .attach__wrap .attach_img,
        section.feedback .attach__cnt .attach__wrap .attach_doc {
            background: #5381F6;
            border-radius: 10px;
            height: 40px;
            width: 50px;
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: auto 16px;
            grid-column-gap: 4px;
            grid-row-gap: 4px;
            justify-content: center;
            align-items: center;
        }
        section.feedback .attach__cnt .attach__wrap .attach_img .txt,
        section.feedback .attach__cnt .attach__wrap .attach_doc .txt  {
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 145%;
            color: #FFFFFF;            
        }
        section.feedback .attach__cnt .attach__wrap .attach_img .icon {
            width: 20px;
            height: 20px;
            display: block;
            background: url(/wp-content/themes/fpalaw/assets/img/feedback/ant-design_picture.svg) center center no-repeat;
            background-size: contain;
        }
        section.feedback .attach__cnt .attach__wrap .attach_doc .icon {
            width: 20px;
            height: 20px;
            display: block;
            background: url(/wp-content/themes/fpalaw/assets/img/feedback/bi_file-earmark-text-fill.svg) center center no-repeat;
            background-size: contain;
        }
        
        section.feedback .attach__cnt .attach__wrap .attach_btn {
            padding: 8px;
            border: 2px solid #5381F6;
            border-radius: 10px;
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: auto 16px;
            grid-column-gap: 8px;
            grid-row-gap: 8px;
            justify-content: center;
            align-items: center;
        }
        section.feedback .attach__cnt .attach__wrap .attach_btn .txt {
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 145%;
            color: #5381F6;
        }
        section.feedback .attach__cnt .attach__wrap .attach_btn .icon {
            width: 16px;
            height: 16px;
            display: block;
            background: url(/wp-content/themes/fpalaw/assets/img/feedback/attach_icon.svg) center center no-repeat;
            background-size: contain;
        }
        
        section.feedback .attach__cnt .upload-file {
            opacity: 0;
            /*visibility: hidden;*/
            position: absolute;
            top: 0;
            right: 0;
            width: 168px;
            height: 40px;
        }
        section.feedback form.wpcf7-form .form__row textarea::-webkit-scrollbar {
            width: 7px;
            background-color: #F8F9FA;
            padding: 5px;
        }
        section.feedback form.wpcf7-form .form__row textarea::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background-color: #D9D9D9;
        }
        section.feedback form.wpcf7-form .form__field--callback {
            border: none;
            width: 100%;
        }
        section.feedback form.wpcf7-form button.btn {
            width: 100%;
        }
        
        section.feedback form.wpcf7-form .error label {
            color: #EC4A48;
        }
        
        section.feedback form.wpcf7-form .error .select__head,
        section.feedback form.wpcf7-form .error textarea, 
        section.feedback form.wpcf7-form .error input[type=text], 
        section.feedback form.wpcf7-form .error input[type=tel], 
        section.feedback form.wpcf7-form .error input[type=email] {
            border: 2px solid #EC4A48;
        }
        section.feedback form.wpcf7-form .error .attach__cnt {
            border-left: 2px solid #EC4A48;
            border-right: 2px solid #EC4A48;
            border-bottom: 2px solid #EC4A48;
        }
        
        section.feedback form.wpcf7-form .form__row .not-valid-tip,
        section.feedback form.wpcf7-form .form__row_item .not-valid-tip {
            display: none;
            color: #dc3232;
            font-weight: normal;
            font-size: 14px;
        }
        section.feedback form.wpcf7-form .form__row.error .not-valid-tip,
        section.feedback form.wpcf7-form .form__row_item.error .not-valid-tip {
            /*display: block;*/
            display: none;
        }
        
        section.feedback form.wpcf7-form .error label .error-svg {
            background: url(/wp-content/themes/fpalaw/assets/img/feedback/error-svg.svg) center center no-repeat;
            background-size: contain;
            width: 18px;
            height: 18px;
            margin-left: 8px;
        }
        section.feedback form.wpcf7-form .form__row textarea {
            border-radius: 10px;
        }
        
        .popup__overlay {
            background-color: transparent!important;
            -webkit-backdrop-filter: blur(30px)!important;
            backdrop-filter: blur(30px)!important;
            /*
            display: flex;
            align-items: center;
            justify-content: center;
            */
        }
        
        .feedback-thanks-popup {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 1;
            width: 600px;
            padding: 40px;
            background-color: #fff;
            -webkit-box-shadow: 0 14px 34px rgb(0 29 104 / 12%);
            box-shadow: 0 14px 34px rgb(0 29 104 / 12%);
            border-radius: 10px;
            -webkit-transform: translate(-50%,-50%);
            -ms-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);    
        }
        .feedback-thanks-popup button.popup__close {
            top: -32px!important;
            right: 0!important;
        }
        .feedback-thanks-popup p.big {
            margin-bottom: 10px;
            font-size: 26px;
        }
        .feedback-thanks-popup p.small {
            margin-bottom: 0px;
            font-size: 16px;
        }
        
        @media (max-width: 768px) {
            .feedback-thanks-popup {
                max-width: calc(100% - 32px);
                margin: 0;
            }
            .feedback-thanks-popup button.popup__close {
                right: 10px!important;
            }
            section.feedback {
                padding: 70px 0;
            }
            section.feedback h1.feedback__title {
                font-size: 28px;
            }
            section.feedback p.has-text-align-center {
                font-size: 16px;
            }
        }
        
        
        @media (max-width: 600px) {
            section.feedback .attach__cnt .notice.mobile {
                display: block;
            }
            section.feedback .attach__cnt .notice:not(.mobile) {
                display: none;
            }
            section.feedback .attach__cnt .attach__wrap {
                margin-bottom: 6px;
            }
            section.feedback .attach__cnt .attach__wrap {
                grid-template-columns: 50px 168px;
            }
            section.feedback form.wpcf7-form .form__row textarea {
                padding: 13px 20px 100px;
            }
            section.feedback form.wpcf7-form .form__row .form__row_wrap {
                grid-template-columns: 100%;
            }
        }
        @media (max-width: 540px) {
            section.feedback {
                padding: 40px 0;
            }
            section.feedback h1.feedback__title {
                font-size: 22px;
            }
        }
        
        
        
        
        
        
        
</div>
        
        
    </style>
    <section class="feedback">
        <div class="container">
            <div class="feedback__wrap">
                <h1 class="feedback__title"><?php the_title() ?></h1>
                <?php the_content() ?>
                
                <div class="feedback-custom-form hidden1">
                    <form class="wpcf7-form">
                        <input type="hidden" name="attach_file" value="" />
                        <input type="hidden" name="action" value="add_feedback" />
                        <input type="hidden" name="customer_request" value="" />
                        <input type="hidden" name="lawyer_field" value="" />
                        <input type="hidden" name="subject" value="" />
                        <div class="form__row customer_request">
                            <label for="customer_request">Являетесь ли Вы нашим клиентом? <span class="error-svg"></span></label>
                            <div class="select_item" id="customer_request">
                                <div class="select__head">Выберите</div>
                                <ul class="select__list" style="display: none;">
                                    <li class="select__item" data-value="first">Обращаюсь в вашу компанию впервые</li>
                                    <li class="select__item" data-value="existing">Являюсь клиентом</li>
                                </ul>
                            </div>
                            <span class="not-valid-tip hidden">Поле обязательно для заполнения.</span>
                        </div>
                        <div class="form__row lawyer_field">
                            <label for="lawyer_field">Выберите сотрудника, к которому хотите обратиться <span class="error-svg"></span></label>
                            <div class="select_item" id="lawyer_field">
                                <div class="select__head">Выберите</div>
                                <ul class="select__list" style="display: none;">
                                    <li class="select__item" data-value="okladnikov">
                                        <span class="image okladnikov"></span>
                                        <span class="name">Окладников Илья Викторович, <span>руководитель юридического департамента по банкротству</span></span>
                                    </li>
                                    <li class="select__item" data-value="bodnar">
                                        <span class="image bodnar"></span>
                                        <span class="name">Боднар Евгения Ивановна, <span>руководитель отдела сопровождения клиентов по кредитам и долгам</span></span>
                                    </li>
                                    <li class="select__item" data-value="kopyrina">
                                        <span class="image kopyrina"></span>
                                        <span class="name">Копырина Анжелика Владимировна, <span>руководитель подразделения судопроизводства по банкротным делам</span></span>
                                    </li>
                                    <li class="select__item" data-value="sergeeva">
                                        <span class="image sergeeva"></span>
                                        <span class="name">Сергеева Ольга Николаевна, <span>руководитель подразделения судопроизводства по списанию долговых обязательств</span></span>
                                    </li>
                                    <li class="select__item" data-value="chernova">
                                        <span class="image chernova"></span>
                                        <span class="name">Чернова Екатерина Юрьевна, <span>руководитель отдела клиентского сервиса</span></span>
                                    </li>
                                </ul>
                            </div>
                            <span class="not-valid-tip hidden">Поле обязательно для заполнения.</span>
                        </div>
                        <div class="form__row">
                            <div class="form__row_wrap">
                                <div class="form__row_item input-field__cnt input_cname">
                                    <label for="cname">ФИО <span class="error-svg"></span></label>
                                    <input type="text" name="cname" value="" class="form__field--callback" id="cname" placeholder="Константинов Константин Константинович" />
                                    <span class="not-valid-tip hidden">Поле обязательно для заполнения.</span>
                                </div>
                                <div class="form__row_item input-field__cnt">
                                    <label for="delo_number">Номер дела в Арбитражном суде <span class="error-svg"></span></label>
                                    <input type="text" name="cdnumber" class="form__field--callback" value="" id="delo_number" placeholder="А56-75507/2020" />
                                    <span class="not-valid-tip hidden">Поле обязательно для заполнения.</span>
                                </div>
                            </div>
                        </div>
                        <div class="form__row">
                            <div class="form__row_wrap">
                                <div class="form__row_item input-field__cnt">
                                    <label for="email">Контактный e-mail <span class="error-svg"></span></label>
                                    <input type="email" name="email" class="form__field--callback" value="" id="email" placeholder="konstance@gmail.com" />
                                    <span class="not-valid-tip hidden">Поле обязательно для заполнения.</span>
                                </div>
                                <div class="form__row_item input-field__cnt input_cphone">
                                    <label for="cphone">Контактный телефон <span class="error-svg"></span></label>
                                    <input type="tel" name="cphone" class="form__field--callback" value="" size="40" maxlength="19" minlength="19" id="cphone" placeholder="+7 (000) 000 00 00" />
                                    <span class="not-valid-tip hidden">Поле обязательно для заполнения.</span>
                                </div>
                            </div>
                        </div>
                        <div class="form__row subject">
                            <label for="subject">Тема обращения <span class="error-svg"></span></label>
                            <div class="select_item" id="subject">
                                <div class="select__head">Выберите</div>
                                <ul class="select__list" style="display: none;">
                                    <li class="select__item" data-value="question_procedure">Вопрос по процедуре банкротства</li>
                                    <li class="select__item" data-value="question_current_case">Вопрос по текущему делу</li>
                                    <li class="select__item" data-value="complaint">Оставить жалобу</li>
                                    <li class="select__item" data-value="employee">Обратиться к сотруднику</li>
                                    <li class="select__item" data-value="other">Другое</li>
                                </ul>
                            </div>
                            <span class="not-valid-tip hidden">Поле обязательно для заполнения.</span>
                        </div>
                        <div class="form__row message">
                            <label for="message">Текст обращения <span class="error-svg"></span></label>
                            <div class="text_area">
                                <textarea name="message" class="form__field--callback" cols="40" rows="10" id="message"></textarea>
                                <span class="not-valid-tip hidden">Поле обязательно для заполнения.</span>
                                <div class="attach__cnt">
                                    <input name="upload-file" type="file" id="upload-file" class="upload-file" accept=".xls,.xlsx,.docx,.doc,.png,.jpg,.jpeg,.pdf">
                                    <div class="attach__wrap"><span class="notice"><span class="notice_txt">Поддерживаемые форматы загрузки: png, jpg, jpeg, doc, docx, rtf, xls, xlsx.</span><span class="notice_txt">Максимальный размер файла: 10Мб</span></span><span class="attach_doc" style="opacity: 0;"><span class="txt"></span><span class="icon"></span></span><span class="attach_btn"><span class="txt">Прикрепить файл</span><span class="icon"></span></span></div>
                                    <p><span class="notice mobile"><span class="notice_txt">Поддерживаемые форматы загрузки: png, jpg, jpeg, doc, docx, rtf, xls, xlsx.</span><span class="notice_txt">Максимальный размер файла: 10Мб</span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="form__row">
                            <button class="btn">Отправить</button>
                        </div>
                    </form>
                </div>
                <div class="politics">
                    <span class="politics__icon"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#shild"></use></svg></span>
                    <p class="politics__text">Мы гарантируем безопасность и сохранность Ваших данных. Нажимая на кнопку, вы даете согласие на обработку своих персональных данных в соответствии с <a href="https://fpa.ru/politika/">«Политикой конфиденциальности»</a></p>
                </div>
            </div>
        </div>
    </section>
  </div>
<?php get_footer('bankruptcy'); ?>