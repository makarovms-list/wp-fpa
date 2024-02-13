<style>
section.user_detail {
    padding: 140px 0;
}
.user_detail .user_detail__wrap {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
    margin: 0;
    padding: 0;
    list-style: none;
    margin-top: 0px;
}
.user_detail .user_detail__wrap .col:first-child {
    width: 100%;
    padding-right: 20px;
    max-width: 418px;
}
.user_detail .user_detail__wrap .col:last-child {
    width: 100%;
    padding-left: 20px;
    /*max-width: calc(100% - 300px);*/
}
.menu__cnt {
    background: #FFFFFF;
    box-shadow: 0px 14px 34px rgb(0 29 104 / 12%);
    border-radius: 10px;
    padding: 20px;
}
.menu__cnt ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
.menu__cnt ul li {
    position: relative;
}
.menu__cnt ul li+li {
    margin-top: 4px;
}
.menu__cnt ul li span {
    color: rgb(57 57 57 / 100%);
    font-weight: 500;
    font-size: 18px;
    line-height: 145%;
}
.menu__cnt ul li.active span {
    color: #5381F6;
    font-weight: 700;
}
.menu__cnt ul li.disabled span {
    color: rgb(57 57 57 / 60%)!important;
}
.menu__cnt ul li.disabled {
    cursor: pointer;
}
.menu__cnt ul li.disabled:after {
    content: "";
    position: absolute;
    right: 0;
    top: calc(50% - 12px);
    width: 48px;
    height: 24px;
    background: url(/wp-content/themes/fpalaw/assets/img/cabinet/cabinet_item_disabled.svg) center center no-repeat;
    background-size: contain;
}
.user_detail_form__cnt  .form_notice {
    box-sizing: border-box;
    border-radius: 6px;
    margin-bottom: 20px;
    grid-template-rows: auto;
    grid-template-columns: 20px auto;
    grid-column-gap: 8px;
    grid-row-gap: 8px;
    padding: 8px 16px;
    display: grid;
    align-items: flex-start;
}
.user_detail_form__cnt  .form_notice.error {
    background: #E23836;
    border: 2px solid #E23836;
}
.user_detail_form__cnt  .form_notice.info {
    background: #17CC5F;
    border: 2px solid #17CC5F;
}
.user_detail_form__cnt  .form_notice.hidden {
    display: none!important;
}
.user_detail_form__cnt  .form_notice svg {}
.user_detail_form__cnt  .form_notice p.message {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 145%;
    color: #FFFFFF;
    margin-bottom: 0;
}
.user_detail_form__cnt .form_notice p.message a {
    display: none!important;
}
.user_detail_form__cnt .wrapperContainer+.wrapperContainer {
    margin-top: 20px;
}
.user_detail_form__cnt .lp-ellipsis {
    display: block;
    font-weight: 500;
    font-size: 14px;
    line-height: 145%;
    color: #717B97;
    margin-bottom: 5px;
}
.user_detail_form__cnt .wrapperContainer-row {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: calc(33% - 8px) calc(33% - 8px) calc(33% - 8px);
    grid-column-gap: 16px;
    grid-row-gap: 16px;
}
.user_detail_form__cnt .wrapperContainer-row select {
    padding: 14px;
    height: 57px;
    background: #F3F4F4;
    border: 2px solid rgb(0 0 0 / 20%);
    border-radius: 10px;
    font-weight: 500;
    font-size: 20px;
    line-height: 145%;
    color: #393939;
    display: block;
    width: 100%;
}
.user_detail_form__cnt .wrapperContainer input[type=email],
.user_detail_form__cnt .wrapperContainer input[type=password],
.user_detail_form__cnt .wrapperContainer input[type=text],
.user_detail_form__cnt .wrapperContainer input[type=tel] {
    padding: 14px;
    height: 57px;
    background: #F3F4F4;
    border: 2px solid rgb(0 0 0 / 20%);
    border-radius: 10px;
    font-weight: 500;
    font-size: 20px;
    line-height: 145%;
    color: #393939;
    display: block;
    width: 100%;
}
.user_detail_form__cnt .wrapperContainer input:disabled {
    opacity: 0.5;
    cursor: not-allowed;
}
.user_detail_form__cnt .wrapperContainer sup.red {
    color: #EC4A48;
}
.user_detail_form__cnt .wrapperContainer input[type=email]:hover,
.user_detail_form__cnt .wrapperContainer input[type=password]:hover,
.user_detail_form__cnt .wrapperContainer input[type=text]:hover,
.user_detail_form__cnt .wrapperContainer input[type=tel]:hober {
    border: 2px solid #5381F6;
}
.user_detail_form__cnt .wrapperContainer input[type=email]:focus,
.user_detail_form__cnt .wrapperContainer input[type=password]:focus,
.user_detail_form__cnt .wrapperContainer input[type=text]:focus,
.user_detail_form__cnt .wrapperContainer input[type=tel]:focus {
    border: 2px solid #5381F6;
}
.user_detail_form__cnt .btn-save-form {
    width: 100%;
    margin-bottom: 20px;
}
.required_fields {
    font-weight: 400;
    font-size: 14px;
    line-height: 145%;
    text-align: center;
    color: #EC4A48;
}

.stylized-select__cnt .select {
    position: relative;
    display: block;
    min-width: 220px;
    width: 100%;
    /*max-width: 400px;*/
    margin-bottom: 20px;
}

.stylized-select__cnt .select__head {
    width: 100%;
    max-width: 100%;
    /*box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);*/
    border: 2px solid #cecece;
    border-radius: 10px;
    padding: 14px 15px;
    font-size: 14px;
    line-height: 18px;
    color: rgba(66, 67, 72, 0.8);
    cursor: pointer;
    font-weight: 700;
    font-size: 16px;
    line-height: 145%;
    color: #5381F6;
    position: relative;
}
.stylized-select__cnt .select__head.disabled {
    color: rgb(57 57 57 / 40%)!important;
}
.stylized-select__cnt .select__head.disabled:before {
    content: "";
    position: absolute;
    right: 34px;
    top: calc(50% - 12px);
    width: 48px;
    height: 24px;
    background: url(/wp-content/themes/fpalaw/assets/img/cabinet/cabinet_item_disabled.svg) center center no-repeat;
    background-size: contain;
}
.stylized-select__cnt .select__head::after {
    width: 10px;
    height: 6px;
    background-image: url("data:image/svg+xml,%3Csvg width='9' height='7' viewBox='0 0 9 7' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M8.54973 9.53674e-07H0.449498C0.367488 0.000267982 0.2871 0.023766 0.216988 0.0679655C0.146875 0.112164 0.089694 0.175391 0.0515995 0.250839C0.013504 0.326288 -0.00406361 0.411102 0.000789642 0.496151C0.00564194 0.5812 0.0327301 0.663264 0.0791378 0.733509L4.12925 6.81101C4.29711 7.063 4.70122 7.063 4.86952 6.81101L8.91964 0.733509C8.96652 0.66341 8.99401 0.581306 8.99913 0.496115C9.00424 0.410924 8.98679 0.325906 8.94866 0.250297C8.91053 0.174689 8.85318 0.111381 8.78285 0.0672536C8.71252 0.0231261 8.63189 -0.000133514 8.54973 9.53674e-07Z' fill='%23CECECE'/%3E%3C/svg%3E%0A");
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    position: absolute;
    right: 20px;
    bottom: 50%;
    transform: translateY(50%);
    content: '';
    display: block;
    transition: .2s ease-in;
}

.stylized-select__cnt .select__head.open::after {
    transform: translateY(50%) rotate(180deg);
}

.stylized-select__cnt .select__list {
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
    padding: 14px;
    list-style: none;
    margin: 0;
}

.stylized-select__cnt .select__list::-webkit-scrollbar {
    width: 7px;
    background-color: #F8F9FA;
    padding: 5px;
}

.stylized-select__cnt .select__list::-webkit-scrollbar-thumb {
    border-radius: 10px;
    background-color: #D9D9D9;
}

.stylized-select__cnt .select__list .select__item {
    position: relative;
    padding: 0px;
    cursor: pointer;
    list-style-type: none;
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 145%;
    color: rgb(57 57 57 / 100%);
    position: relative;
}
.stylized-select__cnt .select__list .select__item+.select__item {
    margin-top: 10px;
}
.stylized-select__cnt .select__list .select__item.disabled {
    color: rgb(57 57 57 / 40%)!important;
}
.stylized-select__cnt .select__list .select__item.active {
    font-weight: 700;
    font-size: 16px;
    line-height: 145%;
    color: #5381F6;
} 
.stylized-select__cnt .select__list .select__item.disabled:after {
    content: "";
    position: absolute;
    right: 0;
    top: calc(50% - 12px);
    width: 48px;
    height: 24px;
    background: url(/wp-content/themes/fpalaw/assets/img/cabinet/cabinet_item_disabled.svg) center center no-repeat;
    background-size: contain;
}
.stylized-select__cnt .select__list .select__item:hover {
    background-color: rgba(224, 229, 231, 0.5);
}



.user_detail .desktop {
    display: block;
}
.user_detail .mobile {
    display: none;
}
.user_detail .logout__cnt {
    margin-top: 80px;
}
.user_detail .logout__cnt .logout-link {
    padding: 20px;
    border-top: 1px solid rgb(0 0 0 / 20%);
}
.user_detail .logout__cnt .logout-link a {
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 145%;
    color: #717B97; 
}
.user_detail .logout__cnt .logout-link a:hover {
    color: #5381F6;
}




@media (max-width: 980px) {
    .user_detail_form__cnt .wrapperContainer-row {
        grid-template-columns: 100%;
    }
}
@media (max-width: 768px) {
    .user_detail .logout__cnt {
        display: none;
    }
    .user_detail_form__cnt .wrapperContainer-row {
        grid-template-columns: 100%;
    }
    .user_detail .user_detail__wrap {
        flex-direction: column;
    }
    .user_detail .user_detail__wrap .col:first-child {
        padding: 20px 0 35px;
        max-width: 100%;
        border-bottom: 1px solid rgb(0 0 0 / 20%);
    }
    .user_detail .user_detail__wrap .col:last-child {
        padding: 35px 0 20px;
        max-width: 100%;
    }
    .menu__cnt ul li a {
        font-size: 16px;
    }
    section.user_detail {
        padding: 60px 0;
    }
    body.no-warning-block .header {
        margin-bottom: 0px!important;
    }
    .user_detail .desktop {
        display: none!important;
    }
    .user_detail .mobile {
        display: block!important;
    }
}
@media (max-width: 540px) {
    .menu__cnt ul li a {
        font-size: 14px;
    }
    section.user_detail {
        padding: 40px 0;
    }
    .user_detail_form__cnt .wrapperContainer input[type=email],
    .user_detail_form__cnt .wrapperContainer input[type=password],
    .user_detail_form__cnt .wrapperContainer input[type=text],
    .user_detail_form__cnt .wrapperContainer input[type=tel] {
        font-size: 16px;
    }
    .user_detail_form__cnt .btn-save-form {
        font-size: 16px;
    }
}
</style>
<?php
    $current_user = wp_get_current_user();
?>
<main>
<section class="user_detail">
    <div class="container">
        <div class="user_detail__wrap">
            <div class="col">
                <div class="menu__cnt desktop">
                    <ul>
                        <li class="active" data-section="personal_data"><span>Личные данные</span></li>
                        <li class="disabled" data-section="feedback"><span>Обратная связь</span></li>
                        <li class="disabled" data-section="tracking_procedure"><span>Отслеживание процедуры</span></li>
                        <li class="disabled"data-section="payments"><span>График платежей</span></li>
                    </ul>
                </div>
                <div class="stylized-select__cnt mobile">
                    <div class="select">
                        <input class="select__input" type="hidden" name="">
                        <div class="select__head">Выберите</div>
                        <ul class="select__list" style="display: none;">
                            <li class="select__item active" data-section="personal_data">Личные данные</li>
                            <li class="select__item disabled" data-section="feedback">Обратная связь</li>
                            <li class="select__item disabled" data-section="tracking_procedure">Отслеживание процедуры</li>
                            <li class="select__item disabled" data-section="payments">График платежей</li>
                        </ul>
                    </div>
                </div>
                <div class="logout__cnt">
                    <div class="logout-link">
                        <a href="<?php echo wp_logout_url( get_permalink() ) ?>">Выйти</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="cabiten_section personal_data_section__cnt" data-section-id="personal_data">
                    <?php
                        $personal_data_section = get_user_meta($current_user->ID, 'personal_data_section', true);
                        if (checked( $personal_data_section, 'yes', false )) {
                            get_template_part( 'template-parts/cabinet/personal_data_section' );
                        } else {
                            get_template_part( 'template-parts/cabinet/page_not_available' );
                        }
                    ?>
                </div>
                <div class="cabiten_section feedback_section__cnt hidden" data-section-id="feedback">
                    <?php
                        $feedback_section = get_user_meta($current_user->ID, 'feedback_section', true);
                        if (checked( $feedback_section, 'yes', false )) {
                            get_template_part( 'template-parts/cabinet/feedback_section' );
                        } else {
                            get_template_part( 'template-parts/cabinet/page_not_available' );
                        }
                    ?>
                </div>
            	<div class="cabiten_section tracking_procedure_section__cnt hidden" data-section-id="tracking_procedure">
            	    <?php
                        $tracking_procedure_section = get_user_meta($current_user->ID, 'tracking_procedure_section', true);
                        if (checked( $tracking_procedure_section, 'yes', false )) {
                            get_template_part( 'template-parts/cabinet/tracking_procedure_section' );
                        } else {
                            get_template_part( 'template-parts/cabinet/page_not_available' );
                        }
                    ?>
            	</div>
            	<div class="cabiten_section payments_section__cnt hidden" data-section-id="payments">
            	    <?php
                        $payments_section = get_user_meta($current_user->ID, 'payments_section', true);
                        if (checked( $payments_section, 'yes', false )) {
                            get_template_part( 'template-parts/cabinet/payments_section' );
                        } else {
                            get_template_part( 'template-parts/cabinet/page_not_available' );
                        }
                    ?>
            	</div>
            </div>
        </div>
    </div>
</div>
</main>