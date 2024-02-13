<style>
.not-available-content p {
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 145%;
    text-align: center;
    color: #393939;
    margin-bottom: 45px;
}
.not-available-content img {
    margin: 0 auto 45px;
    max-width: 263px;
    height: auto;
    width: 100%;
}
.not-available-content .btn {
    margin: 0 auto;
}
.not-available-content .btn svg {
    margin-right: 8px;
}
@media (max-width: 768px) {}
@media (max-width: 540px) {}
/*
.recovery-form__cnt {
    width: 100%;
}
.recovery-form__cnt .form_notice {
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
.recovery-form__cnt .form_notice.error {
    background: #E23836;
    border: 2px solid #E23836;
}
.recovery-form__cnt .form_notice.info {
    background: #17CC5F;
    border: 2px solid #17CC5F;
}
.recovery-form__cnt .form_notice.hidden {
    display: none!important;
}
.recovery-form__cnt .form_notice svg {}
.recovery-form__cnt .form_notice p.message {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 145%;
    color: #FFFFFF;
    margin-bottom: 0;
}
.recovery-form__cnt .form_notice p.message a {
    display: none!important;
}
.recovery-form__cnt .wrapperContainer {}
.recovery-form__cnt .wrapperContainer+.wrapperContainer {
    margin-top: 20px;
}
.recovery-form__cnt .wrapperContainer .lp-ellipsis {
    display: block;
    font-weight: 500;
    font-size: 14px;
    line-height: 145%;
    color: #717B97;
    margin-bottom: 5px;
}
.recovery-form__cnt .wrapperContainer input[type=email],
.recovery-form__cnt .wrapperContainer input[type=password],
.recovery-form__cnt .wrapperContainer input[type=text] {
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
.recovery-form__cnt .wrapperContainer input[type=email]:hover,
.recovery-form__cnt .wrapperContainer input[type=password]:hover {
    border: 2px solid #5381F6;
}
.recovery-form__cnt .wrapperContainer input[type=email]:focus,
.recovery-form__cnt .wrapperContainer input[type=password]:focus {
    border: 2px solid #5381F6;
}
.recovery-form__cnt .btn-recovery-form {
    width: 100%;
}
.recovery-form__cnt .separator {
    text-align: center;
    margin-bottom: 25px;
    position: relative;
}
.recovery-form__cnt .separator span {
    font-weight: 500;
    font-size: 18px;
    line-height: 145%;
    color: #717B97;
    background: #fff;
    position: relative;
    padding: 0 10px;
}
.recovery-form__cnt .separator:before {
    content: "";
    position: absolute;
    top: calc(50% - 1px);
    left: 0;
    height: 1px;
    width: 100%;
    background: rgb(0 0 0 / 20%);
}
.recovery-form__cnt .btn-login-form {
    width: 100%;
}
.online__block--slider {
    width: 40%;
}
.online__block--form {
    width: 50%;
}
*/
.online__block--form {
    margin: 0 auto;
}
.form-online__title {
    text-align: center;
}
@media (max-width: 768px) {
    .online__wrap {
        flex-direction: column;
        padding: 25px 0 50px 0;
    }
    /*
    .online__block--slider,
    .online__block--form {
        width: 100%;
    }
    .online__block--slider {
        display: flex!important;
        margin-bottom: 50px;
    }
    .online__item {
        width: 100%;
        margin: 0 auto;
    }
    */
    body.no-warning-block .header {
        margin-bottom: 0px!important;
    }
}
@media (max-width: 576px) {
    .online__wrap {
        flex-direction: column;
        padding: 0px 0 50px 0;
    }
    .online__sibtitle {
        font-size: 16px;
    }
    .online__text {
        font-size: 14px;
    }
}

</style>
<main>
    <section class="online">
        <div class="container">
            <div class="online__wrap">
                <div class="online__block online__block--form">
                    <div class="not-available__cnt">
                        <div class="not-available-content">
                            <h2 class="form-online__title">Страница не доступна</h2>
                            <p>К сожалению, эта страница сейчас не доступна для просмотра. Попробуйте повторить запрос немного позднее.</p>
                            <picture>
                                <source srcset="/wp-content/themes/fpalaw/assets/img/cabinet/cabinet_page_not_available-mobile.png" media="(max-width: 540px)">
                                <source srcset="/wp-content/themes/fpalaw/assets/img/cabinet/cabinet_page_not_available-desktop.png">
                                <img src="/wp-content/themes/fpalaw/assets/img/cabinet/cabinet_page_not_available-desktop.png" class="lazyloaded" alt="Cтраница находится в тестовом режиме">
                            </picture>
                            <button class="btn btn-go-back" onclick="window.history.go(-1); return false;">
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_7677_11699)"><path d="M17.7605 10.4411C17.5091 10.3627 17.2369 10.3869 17.0033 10.5085C16.7697 10.63 16.5936 10.8391 16.5133 11.09C16.042 12.5322 15.1231 13.7862 13.8903 14.6697C12.6575 15.5531 11.1752 16.0199 9.65904 16.0021C7.78368 16.0235 5.9764 15.2997 4.63351 13.9896C3.29062 12.6795 2.52173 10.89 2.49543 9.01338C2.52173 7.13682 3.29062 5.34727 4.63351 4.03716C5.9764 2.72704 7.78368 2.0033 9.65904 2.02463C11.3527 2.02054 12.9943 2.6105 14.2984 3.69195L12.1334 3.33253C12.0036 3.31116 11.8709 3.31568 11.7429 3.34581C11.6149 3.37594 11.4941 3.4311 11.3875 3.50811C11.2809 3.58512 11.1905 3.68247 11.1216 3.79455C11.0527 3.90663 11.0066 4.03123 10.986 4.16119C10.9647 4.29104 10.9692 4.42382 10.9993 4.55192C11.0294 4.68001 11.0845 4.80088 11.1615 4.90758C11.2384 5.01429 11.3357 5.10471 11.4477 5.17366C11.5597 5.24261 11.6842 5.28872 11.8141 5.30935L16.0444 6.00822H16.214C16.3297 6.00808 16.4445 5.98782 16.5533 5.94832C16.5898 5.93444 16.6236 5.91415 16.653 5.88841C16.7246 5.8618 16.7918 5.82479 16.8526 5.77859L16.9424 5.66877C16.9424 5.61885 17.0322 5.57891 17.0721 5.51901C17.112 5.45911 17.0721 5.41917 17.122 5.37923C17.1495 5.32109 17.1729 5.26103 17.1918 5.19952L17.9401 1.20595C17.965 1.07484 17.9638 0.940105 17.9367 0.809441C17.9095 0.678777 17.8569 0.554742 17.7819 0.444418C17.7069 0.334094 17.6108 0.239641 17.4993 0.166453C17.3878 0.0932637 17.263 0.0427723 17.1319 0.0178612C17.0009 -0.00704982 16.8663 -0.00589279 16.7357 0.0212663C16.6051 0.0484255 16.4812 0.101055 16.3709 0.176149C16.1483 0.32781 15.9949 0.561769 15.9447 0.82656L15.6753 2.27423C14.0051 0.825802 11.8692 0.0282752 9.65904 0.0278452C7.25447 0.00654673 4.93967 0.940672 3.22257 2.62525C1.50547 4.30982 0.526331 6.60724 0.5 9.01338C0.526331 11.4195 1.50547 13.7169 3.22257 15.4015C4.93967 17.0861 7.25447 18.0202 9.65904 17.9989C11.6077 18.0289 13.5145 17.432 15.0987 16.296C16.6829 15.1601 17.8608 13.5452 18.4589 11.6891C18.4967 11.5613 18.5086 11.4271 18.4938 11.2946C18.479 11.1622 18.4379 11.034 18.3728 10.9176C18.3077 10.8013 18.22 10.6992 18.1148 10.6174C18.0097 10.5355 17.8892 10.4756 17.7605 10.4411Z" fill="white"/></g><defs><clipPath id="clip0_7677_11699"><rect width="18" height="18" fill="white" transform="translate(0.5)"/></clipPath></defs></svg>
                                <span>Вернуться назад</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>