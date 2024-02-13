<style>
.form-aside--single {
    background: url(/wp-content/themes/fpalaw/assets/img/info/info-calculator-bg.jpg);
    height: 510px;
    background-size: contain;
    position: relative;
    background-position: bottom left;
    background-repeat: no-repeat;
}
.form-aside--single .form-aside__title--big {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 22px;
    line-height: 145%;
    color: #393939;
}
.form-aside--single p {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 145%;
    color: #717B97;
}
.form-aside--single a {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 14px;
    line-height: 145%;
    color: #FFFFFF;  
    position: absolute;
    bottom: 25px;
    width: calc(100% - 50px);
}
/*
.inner__block--aside-slim.is-affixed aside {
    top: 150px!important;
}
*/
@media (max-width: 998px) {
    .form-aside--single .form-aside__title--big {
        font-size: 20px;
    }
    .form-aside--single p {
        font-size: 14px;
    }
}

</style>
<div class="form-aside form-aside--single">
    <h3 class="form-aside__title form-aside__title--big">Онлайн калькулятор стоимости банкротства</h3>
    <p>Рассчитайте минимальную стоимость банкротства с учётом ваших индивидуальных условий, включая все платежи в суде, АУ, юристу и другие</p>
    
    <a class="btn" formaction="" id="info-calculator"><span>Пройти онлайн расчёт</span></a>
    
    <?php /* echo do_shortcode( '[contact-form-7 id="1213" title="Cтатьи (форма в сайдбаре) - Спишем ваши долги за 2 000 ₽ в месяц" html_class="form-aside__form"]' ); */ ?>  
    <!--
        <div class="politics">
            <span class="politics__icon">
                <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#shild"></use></svg>
            </span>
            <p class="politics__text">Мы гарантируем безопасность и сохранность Ваших данных. Нажимая на кнопку, вы даете согласие на обработку своих персональных данных в соответствии с <a href="<?= get_permalink(123) ?>">«Политикой конфиденциальности»</a></p>
        </div>
    -->
</div>