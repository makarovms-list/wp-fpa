<style>
.form-aside--single-collector {
    background: url(/wp-content/themes/fpalaw/assets/img/info/info-collector-bg.png);
    height: 510px;
    background-size: contain;
    position: relative;
    background-position: bottom left;
    background-repeat: no-repeat;
}
.form-aside--single-collector .form-aside__title--big {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 22px;
    line-height: 145%;
    color: #393939;
}
.form-aside--single-collector p {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 145%;
    color: #717B97;
}
.form-aside--single-collector a {
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
.calculator-navbar {
    display: none!important;
}


.collector-fixed-block {
    display: none;
    position: fixed;
    bottom: 12px;
    left: 30px;
    width: calc(100% - 60px);
    z-index: 99999;
    padding: 12px;
    box-shadow: 0px 14px 34px 0px #001D681F;
    border-radius: 24px;
    border: 1px solid #D7DEEF;
    background: -webkit-gradient(linear, 0 0, 100% 0, from(#F3F4F4), to(#F3F4F4));
    background: -webkit-linear-gradient(#F3F4F4, #F3F4F4);
    background: -moz-linear-gradient(#F3F4F4, #F3F4F4);
    background: -o-linear-gradient(#F3F4F4, #F3F4F4);
    background: linear-gradient(#F3F4F4, #F3F4F4), linear-gradient(0deg, #FFFFFF, #FFFFFF);
}
.collector-fixed-block-wrap {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: 40px auto 130px;
    grid-column-gap: 16px;
    grid-row-gap: 16px;
    align-items: center;
}
.collector-fixed-block .image {}
.collector-fixed-block .image img {}
.collector-fixed-block .text {}
.collector-fixed-block .text p {
    margin: 0;
    font-family: Inter;
    font-size: 16px;
    font-weight: 500;
    line-height: 135%;
    letter-spacing: 0em;
    text-align: left;
    color: #717B97;
}
.collector-fixed-block .button {}
.collector-fixed-block .button a {
    font-family: Inter;
    font-size: 16px;
    font-weight: 500;
    line-height: 120%;
    letter-spacing: 0em;
    text-align: center;
    cursor: pointer;
}
        






@media (max-width: 998px) {
    .form-aside--single-collector .form-aside__title--big {
        font-size: 20px;
    }
    .form-aside--single-collector p {
        font-size: 14px;
    }
}
@media (max-width: 768px) {
    .collector-fixed-block {
        display: block;
    }
}
@media (max-width: 460px) {
    .collector-fixed-block .text p {
        font-size: 14px;
    }
    .collector-fixed-block .button a {
        font-size: 14px;
        padding-top: 12px;
        padding-bottom: 12px;
    }
    .collector-fixed-block-wrap {
        grid-template-columns: 40px auto 90px;
        grid-column-gap: 12px;
        grid-row-gap: 12px;
    }
}
@media (max-width: 435px) {
    .collector-fixed-block .text p {
        font-size: 12px;
    }
    .collector-fixed-block .button a {
        font-size: 12px;
        padding-top: 10px;
        padding-bottom: 10px;
    }
}



</style>
<div class="form-aside form-aside--single-collector">
    <h3 class="form-aside__title form-aside__title--big">Защита от коллекторов</h3>
    <p>Узнайте, нарушают ли коллекторы ваши права, и как прекратить их звонки и угрозы</p>
    <a class="btn" formaction="" id="info-collector"><span>Пройти онлайн опрос</span></a>
</div>
