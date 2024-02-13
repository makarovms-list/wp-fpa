<style>
#services_bankrotstvo_mfc:not(.hidden) {
    background: url(/wp-content/themes/fpalaw/assets/img/services/services-bankrot-mfc-bg.jpg) center center no-repeat;
    background-size: cover;
    padding: 120px 0;
}
#services_bankrotstvo_mfc h2.heading {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 34px;
    line-height: 145%;
    text-align: center;
    color: #393939;
    margin-bottom: 20px;
}
#services_bankrotstvo_mfc p.subtitle {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 145%;
    text-align: center;
    color: #717B97;
    margin-bottom: 60px;
}
.services_bankrotstvo_mfc-row {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: calc(50% - 8px) calc(50% - 8px);
    grid-column-gap: 40px;
    grid-row-gap: 40px;
    align-items: center;
}
.services_bankrotstvo_mfc-col ul.numirical-list {
    list-style: none;
    padding: 0;
    margin: 0;
    counter-reset: num;
}
.services_bankrotstvo_mfc-col ul.numirical-list li {
    padding-left: 40px;
    position: relative;
}
.services_bankrotstvo_mfc-col ul.numirical-list li:before {
    content: counter(num)"."; 
	counter-increment: num;
	display: flex;
	position: absolute;
	top: 0;
	left: 0px;
	width: 26px;
	height: 26px;
	font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
    line-height: 145%;
    text-align: center;
    color: #FFFFFF;
	background: linear-gradient(360deg, #3C70F4 0%, #638DF6 100%);
	border-radius: 50%;
	align-items: center;
    justify-content: center;
}
.services_bankrotstvo_mfc-col ul.numirical-list li+li {
    margin-top: 40px;
}
.services_bankrotstvo_mfc-col ul.numirical-list span.title {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
    line-height: 145%;
    color: #393939;
    margin-bottom: 20px;
    display: block;
}
.services_bankrotstvo_mfc-col ul.numirical-list span.subtitle {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 145%;
    color: #393939;
    display: block;
}
.bankrotstvo_mfc-form-wrapper {
    background: #FFFFFF;
    box-shadow: 0px 14px 34px rgb(0 37 102 / 20%);
    border-radius: 20px;
    padding: 40px;
}
.bankrotstvo_mfc-form-wrapper h3 {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 26px;
    line-height: 145%;
    color: #393939;
    margin-bottom: 20px;
}
.bankrotstvo_mfc-form-wrapper h3 span {
    color: #3c70f4;
    text-transform: uppercase;
}
.bankrotstvo_mfc-form-wrapper form *:focus {
    outline: none;
}
.bankrotstvo_mfc-form-wrapper form label {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 500;
    font-size: 15px;
    line-height: 145%;
    color: #393939;
    margin-bottom: 10px;
    display: block;
}
.bankrotstvo_mfc-form-wrapper form br {
    display: none;
}
.bankrotstvo_mfc-form-wrapper form input[type=text],
.bankrotstvo_mfc-form-wrapper form input[type=tel],
.bankrotstvo_mfc-form-wrapper form input[type=email],
.bankrotstvo_mfc-form-wrapper form input[type=number] {
    border: 2px solid #D7DEEF;
    border-radius: 10px;
    width: 100%;
    padding: 14px;
    color: #393939;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 145%;
}
.bankrotstvo_mfc-form-wrapper form input[type=text]::-webkit-input-placeholder,
.bankrotstvo_mfc-form-wrapper form input[type=tel]::-webkit-input-placeholder,
.bankrotstvo_mfc-form-wrapper form input[type=email]::-webkit-input-placeholder,
.bankrotstvo_mfc-form-wrapper form input[type=number]::-webkit-input-placeholder {
    color: #A5ACBD!important;
}
.bankrotstvo_mfc-form-wrapper form input[type=text]:-moz-placeholder,
.bankrotstvo_mfc-form-wrapper form input[type=tel]:-moz-placeholder,
.bankrotstvo_mfc-form-wrapper form input[type=email]:-moz-placeholder,
.bankrotstvo_mfc-form-wrapper form input[type=number]:-moz-placeholder {
    color: #A5ACBD!important;
    opacity:  1;
}
.bankrotstvo_mfc-form-wrapper form input[type=text]::-moz-placeholder,
.bankrotstvo_mfc-form-wrapper form input[type=tel]::-moz-placeholder,
.bankrotstvo_mfc-form-wrapper form input[type=email]::-moz-placeholder,
.bankrotstvo_mfc-form-wrapper form input[type=number]::-moz-placeholder {
    color: #A5ACBD!important;
    opacity:  1;
}
.bankrotstvo_mfc-form-wrapper form input[type=text]:-ms-input-placeholder,
.bankrotstvo_mfc-form-wrapper form input[type=tel]:-ms-input-placeholder,
.bankrotstvo_mfc-form-wrapper form input[type=email]:-ms-input-placeholder,
.bankrotstvo_mfc-form-wrapper form input[type=number]:-ms-input-placeholder {
    color: #A5ACBD!important;
}
.bankrotstvo_mfc-form-wrapper form input[type=text]::-ms-input-placeholder,
.bankrotstvo_mfc-form-wrapper form input[type=tel]::-ms-input-placeholder,
.bankrotstvo_mfc-form-wrapper form input[type=email]::-ms-input-placeholder,
.bankrotstvo_mfc-form-wrapper form input[type=number]::-ms-input-placeholder {
    color: #A5ACBD!important;
}
.bankrotstvo_mfc-form-wrapper form input[type=text]::placeholder,
.bankrotstvo_mfc-form-wrapper form input[type=tel]::placeholder,
.bankrotstvo_mfc-form-wrapper form input[type=email]::placeholder,
.bankrotstvo_mfc-form-wrapper form input[type=number]::placeholder {
    color: #A5ACBD!important;
}
.bankrotstvo_mfc-form-wrapper form .field-wrapper {
    position: relative;
}
.bankrotstvo_mfc-form-wrapper form .field-wrapper+.field-wrapper {
    margin-top: 10px;
}
.bankrotstvo_mfc-form-wrapper form .button-wrapper {
    margin-top: 20px;
}
.bankrotstvo_mfc-form-wrapper form input[type=submit] {
    background: -webkit-gradient(linear,left bottom,left top,from(rgba(255,255,255,0)),to(rgba(255,255,255,.2))),#3c70f4;
    background: -o-linear-gradient(bottom,rgba(255,255,255,0) 0,rgba(255,255,255,.2) 100%),#3c70f4;
    background: linear-gradient(360deg,rgba(255,255,255,0) 0,rgba(255,255,255,.2) 100%),#3c70f4;
    -webkit-box-shadow: 0 4px 14px rgb(0 37 102 / 18%);
    box-shadow: 0 4px 14px rgb(0 37 102 / 18%);
    border-radius: 10px;
    border: none;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 14px;
    line-height: 145%;
    color: #FFFFFF;
    padding: 15px;
    text-align: center;
    cursor: pointer;
    -webkit-transition: all .4s ease;
    -o-transition: all .4s ease;
    transition: all .4s ease;
}
.bankrotstvo_mfc-form-wrapper form input[type=submit]:hover {
    background: -webkit-gradient(linear,left bottom,left top,from(rgba(255,255,255,0)),to(rgba(255,255,255,.2))),#154ad0;
    background: -o-linear-gradient(bottom,rgba(255,255,255,0) 0,rgba(255,255,255,.2) 100%),#154ad0;
    background: linear-gradient(360deg,rgba(255,255,255,0) 0,rgba(255,255,255,.2) 100%),#154ad0;
    text-decoration: none;
}



.bankrotstvo_mfc-form-wrapper form input[type=range] {
    -webkit-appearance: none;
    height: 4px; /* установите свою высоту*/
    padding: 0;	
    width: 100%;
    cursor: pointer;
	/* стили вашего ползунка */
}
.bankrotstvo_mfc-form-wrapper form input[type=range]::-webkit-slider-thumb {
	-webkit-appearance: none;
	box-sizing: content-box;
	background: #FFFFFF;
    border: 2px solid #5381F6;
    box-shadow: 0px 4px 14px rgba(0, 37, 102, 0.18);
    width: 16px;
    height: 16px;
    border-radius: 50%;
    margin-top: -8px;
	/* стили вашего бегунка */
}
.bankrotstvo_mfc-form-wrapper form input[type=range]::-moz-range-thumb {
	background: #FFFFFF;
    border: 2px solid #5381F6;
    box-shadow: 0px 4px 14px rgba(0, 37, 102, 0.18);
    width: 16px;
    height: 16px;
    border-radius: 50%;
    margin-top: -8px;
	/* снова стили вашего бегунка */
}
.bankrotstvo_mfc-form-wrapper form input[type=range]::-ms-thumb { /* должен следовать после -webkit- */
	background: #FFFFFF;
    border: 2px solid #5381F6;
    box-shadow: 0px 4px 14px rgba(0, 37, 102, 0.18);
    width: 16px;
    height: 16px;
    border-radius: 50%;
    margin-top: -8px;
	/* снова стили вашего бегунка */
	/* могут потребоваться разные отступы */
}
.bankrotstvo_mfc-form-wrapper form input[type=range]::-webkit-slider-runnable-track {
    background: #D7DEEF;
    border-radius: 2px;
    height:4px;
    -webkit-transition: all .4s ease;
    -o-transition: all .4s ease;
    transition: all .4s ease;
	/* стили вашей дорожки*/
}
.bankrotstvo_mfc-form-wrapper form input[type=range]::-moz-range-track {
    background: #D7DEEF;
    border-radius: 2px;
    height:4px;
	/* снова стили вашей дорожки */
}
.bankrotstvo_mfc-form-wrapper form input[type=range]::-ms-track { /* должен следовать после -webkit- */
	border-color: transparent;
	color: transparent;
	/* снова стили вашей дорожки */
}
.bankrotstvo_mfc-form-wrapper form input[type=range]::-ms-fill-lower {
	background-color: #5082e0;	
}
.bankrotstvo_mfc-form-wrapper form input[type=range]::-moz-range-progress {
	background-color: #5082e0;	
}
.bankrotstvo_mfc-form-wrapper form input[type=range]::-ms-tooltip {
	display: none;
}
.bankrotstvo_mfc-form-wrapper form .wpcf7-form-control-wrap.range_summ {
    height: 0;
    position: absolute;
    left: 10px;
    bottom: 35px;
    width: calc(100% - 20px);
    z-index: 999999;
}
.bankrotstvo_mfc-form-wrapper form span.range_min-max-values {
    width: 100%;
    display: block;
    position: relative;
    height: 20px;
}
.bankrotstvo_mfc-form-wrapper form span.range_min-max-values:before {
    content: attr(data-min);
    position: absolute;
    left: 0;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    line-height: 145%;
    color: #717B97;
}
.bankrotstvo_mfc-form-wrapper form span.range_min-max-values:after {
    content: attr(data-max);
    position: absolute;
    right: 0;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    line-height: 145%;
    color: #717B97;
}
.bankrotstvo_mfc-form-wrapper form span.wpcf7-form-control-wrap.summ {
    position: relative;
}
.bankrotstvo_mfc-form-wrapper form span.wpcf7-form-control-wrap.summ:before {
    content: "50 000";
    position: absolute;
    left: 15px;
    top: 1px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 145%;
}
.bankrotstvo_mfc-form-wrapper form input#answer_text_summ {
    color: transparent;
}
.bankrotstvo_mfc-form-wrapper form input#answer_text_summ::-webkit-input-placeholder {
    color: transparent!important;
}
.bankrotstvo_mfc-form-wrapper form input#answer_text_summ:-moz-placeholder {
    color: transparent!important;
    opacity:  1;
}
.bankrotstvo_mfc-form-wrapper form input#answer_text_summ::-moz-placeholder {
    color: transparent!important;
    opacity:  1;
}
.bankrotstvo_mfc-form-wrapper form input#answer_text_summ:-ms-input-placeholder {
    color: transparent!important;
}
.bankrotstvo_mfc-form-wrapper form input#answer_text_summ::-ms-input-placeholder {
    color: transparent!important;
}
.bankrotstvo_mfc-form-wrapper form input#answer_text_summ::placeholder {
    color: transparent!important;
}


.bankrotstvo_mfc-form-wrapper form .field-wrapper .wpcf7-not-valid-tip {
    display: none;
}
.bankrotstvo_mfc-form-wrapper form .field-wrapper input.wpcf7-not-valid {
    border: 2px solid #FB5A80;
    color: #FB5A80;
}
.bankrotstvo_mfc-form-wrapper form .field-wrapper input.wpcf7-not-valid::-webkit-input-placeholder {
    color: #FB5A80!important;
}
.bankrotstvo_mfc-form-wrapper form .field-wrapper input.wpcf7-not-valid:-moz-placeholder {
    color: #FB5A80!important;
    opacity:  1;
}
.bankrotstvo_mfc-form-wrapper form .field-wrapper input.wpcf7-not-valid::-moz-placeholderr {
    color: #FB5A80!important;
    opacity:  1;
}
.bankrotstvo_mfc-form-wrapper form .field-wrapper input.wpcf7-not-valid:-ms-input-placeholder {
    color: #FB5A80!important;
}
.bankrotstvo_mfc-form-wrapper form .field-wrapper input.wpcf7-not-valid::-ms-input-placeholder {
    color: #FB5A80!important;
}
.bankrotstvo_mfc-form-wrapper form .field-wrapper input.wpcf7-not-valid::placeholder {
    color: #FB5A80!important;
}
@media (max-width: 1080px) {
    .services_bankrotstvo_mfc-row {
        grid-template-rows: auto;
        grid-template-columns: auto;
        grid-column-gap: 40px;
        grid-row-gap: 40px;
    }    
}
@media (max-width: 768px) {
    #services_bankrotstvo_mfc:not(.hidden) {
        padding: 60px 0;
    }
    #services_bankrotstvo_mfc h2.heading {
        font-size: 24px;
    }
}
@media (max-width: 440px) {
    #services_bankrotstvo_mfc:not(.hidden) {
        padding: 40px 0;
    }
    #services_bankrotstvo_mfc h2.heading {
        font-size: 22px;
    }
    #services_bankrotstvo_mfc p.subtitle {
        font-size: 16px;
        margin-bottom: 35px;
    }
    .services_bankrotstvo_mfc-col ul.numirical-list span.title {
        font-size: 16px;
    }
    .services_bankrotstvo_mfc-col ul.numirical-list span.subtitle {
        font-size: 14px;
    }
    .services_bankrotstvo_mfc-col ul.numirical-list li+li {
        margin-top: 14px;
    }
    .services_bankrotstvo_mfc-row {;
        grid-column-gap: 35x;
        grid-row-gap: 35px;
    }  
    .bankrotstvo_mfc-form-wrapper h3 {
        font-size: 16px;
    }
    .bankrotstvo_mfc-form-wrapper form label {
        font-size: 14px;
    }
    .bankrotstvo_mfc-form-wrapper {
        padding: 20px;
    }
}
</style>
<style id="summRangeSliderStyle">
</style>
<style id="summNumberFieldStyle">
</style>
<section id="services_bankrotstvo_mfc" class="section--services">
    <div class="container">
        <h2 class="heading">Бесплатное упрощенное банкротство через МФЦ</h2>
        <p class="subtitle">Упрощенное банкротство начало действовать в России с 01.09.2020 года. Процедура полностью проходит через МФЦ, без суда и судебных расходов</p>
        <div class="services_bankrotstvo_mfc-row">
            <div class="services_bankrotstvo_mfc-col">
                <ul class="numirical-list">
                    <li>
                        <span class="title">Проходит полностью через МФЦ по ФЗ №289</span>
                        <span class="subtitle">Мы детально изучаем все предоставленные клиентом документы и на их основе делаем вывод о целесообразности введения процедуры внесудебного банкротства</span>
                    </li>
                    <li>
                        <span class="title">Подходит тем, у кого нет дохода и имущества для погашения долга</span>
                        <span class="subtitle">На все ваши вопросы отвечают профессиональные юристы с обширным опытом и знаниями в сфере финансов и банкротства</span>
                    </li>
                    <li>
                        <span class="title">Подходит должникам, чей долг составляет от 50 до 500 тыс. руб.</span>
                        <span class="subtitle">Все наши гарантии четко прописаны в договоре. У нас нет мелких шрифтов и дополнительных условий</span>
                    </li>
                    <li>
                        <span class="title">Продолжительность процедуры - 6 месяцев</span>
                        <span class="subtitle"></span>
                    </li>
                </ul>
            </div>
            <div class="services_bankrotstvo_mfc-col">
                <div class="bankrotstvo_mfc-form-wrapper">
                    <h3>Записаться на <span>БЕСПЛАТНУЮ КОНСУЛЬТАЦИЮ</span> по банкротству</h3>
                    <div class="bankrotstvo_mfc-form__cnt">
                        <?php echo do_shortcode( '[contact-form-7 id="22028" title="Страница Услуги - Записаться на БЕСПЛАТНУЮ КОНСУЛЬТАЦИЮ по банкротству" html_class="services__form"]' ); ?>
                    </div>
                    <div class="politics">
                        <span class="politics__icon"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#shild"></use></svg></span>
                        <p class="politics__text">Мы гарантируем безопасность и сохранность Ваших данных. Нажимая на кнопку, вы даете согласие на обработку своих персональных данных в соответствии с <a href="https://fpa.ru/politika/">«Политикой конфиденциальности»</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>