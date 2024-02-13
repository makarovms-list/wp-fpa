<style>
.survey-form {
    position: relative;
    padding: 140px 0;
}
.survey-form:before {
    content: "";
    background: url(/wp-content/themes/fpalaw/assets/img/mfc/survey-bg.png) center center no-repeat;
    background-size: cover;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}
.survey-form h2.heading {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 45px;
    line-height: 145%;
    color: #393939;
    margin-bottom: 54px;
}
.survey-form h2.heading span {
    color: #5381F6;
}
.survey__block-btn {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: 280px auto;
    grid-column-gap: 35px;
    grid-row-gap: 35px;
    align-items: center;
}
.survey__block-btn .survey__hint {
    
}
.survey__block-btn .survey__hint .title {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 22px;
    line-height: 145%;
    color: #5381F6;
    display: block;
}
.survey__block-btn .survey__hint .subtitle {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 145%;
    color: #393939;
    display: block;
}
.survey__block-btn .survey__hint .text-accent {
    color: #5381F6;
}
.survey__block-btn .survey_btn {
    padding: 30px 0;
}
@media (max-width: 1080px) {
    .survey-form {
        padding: 100px 0;
    }
}
@media (max-width: 782px) {
    .survey-form {
        padding: 60px 0;
    }
    .survey-form h2.heading  {
        font-size: 24px;
        margin-bottom: 40px;
    }
    .survey__block-btn .survey__hint .title {
        font-size: 18px;
    }
    .survey__block-btn .survey__hint .subtitle {
        font-size: 16px;
    }
    .survey__block-btn .survey_btn {
        padding: 20px 0;
    }
    .survey__block-btn {
        grid-template-columns: auto;
        grid-row-gap: 10px;
    }
}
@media (max-width: 440px) {
    .survey-form {
        padding: 40px 0;
    }
    .survey-form h2.heading  {
        font-size: 18px;
        margin-bottom: 20px;
    }
    .survey__block-btn .survey__hint .title {
        font-size: 14px;
    }
    .survey__block-btn .survey__hint .subtitle {
        font-size: 14px;
    }
    .survey__block-btn .survey_btn {
        padding: 15px 0;
    }
}
@media (max-width: 380px) {
    
}


</style>
<div class="survey-form">
    <div class="container">
        <div class="content">
            <h2 class="heading">Тысячи людей уже списали больше <span>5&nbsp;000&nbsp;000&nbsp;000&nbsp;рублей</span>.Что мешает Вам сделать первый шаг?</div>
            <div class="survey__block-btn">
                <button class="btn survey_btn" data-sms="19" data-popup-id="bankruptcy8cost__number-2" data-color-schema="blue" onclick="ym(82134583, 'reachGoal', '1button'); return true;">Пройти тест<span class="btn__highlights"></span></button>
                <span class="survey__hint">
                    <span class="title">Пройдите тест для полного списания долгов</span>
                    <span class="subtitle">Ответьте на <span class="text-accent">3 вопроса</span> и начните решать вопрос с долгами уже сегодня</span>
                </span>
            </div>
        </div>
    </div>
</div>