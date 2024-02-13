<style>
#question_category .h1 {
    font-weight: 700;
    font-size: 34px;
    line-height: 145%;
    text-align: center;
    color: #393939;
    margin-bottom: 45px;
}
.question-category__cnt {
    background: #FFFFFF;
    border-radius: 20px;
    padding: 25px;
}
.question-category__cnt .question_title {
    font-weight: 700;
    font-size: 24px;
    line-height: 145%;
    color: #393939;
    margin-bottom: 25px;
}
.question-category__cnt .calculation__checkbox, .question-category__cnt .calculation__radio {
    -webkit-box-shadow: none!important;
    box-shadow: none!important;
    background: #FFFFFF;
    border: 2px solid #D7DEEF;
    border-radius: 10px;
}
.question_category_result__cnt ol.slogan {
    margin: 0 0 45px;
    padding: 0px 16px;
}
.question_category_result__cnt ol.slogan li {
    font-weight: 500;
    font-size: 18px;
    line-height: 145%;
    color: #393939;
}
.question_category_result__cnt ol.slogan li+li {
    margin-top: 10px;
}
.question_category_result__cnt .images__cnt {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin: 0;
    padding: 0;
    list-style: none;
    margin-bottom: 45px;
}
.question_category_result__cnt .images__cnt-item {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
    width: 31.5%;
    margin-bottom: 20px;
}
.question_category_result__cnt .images__cnt-item img {
    width: 100%;
    height: auto;
    margin-bottom: 20px;
    border-radius: 8px;
}
.question_category_result__cnt .images__cnt-item .title {
    font-weight: 700;
    font-size: 22px;
    line-height: 145%;
    color: #393939;
    margin-bottom: 10px;
}
.question_category_result__cnt .images__cnt-item .text {
    font-weight: 500;
    font-size: 18px;
    line-height: 145%;
    color: #717B97;
}
.question_category_result__cnt .button__cnt button {
    margin: 0 auto;
}
@media (max-width: 768px) {
    .question-category__cnt .question_title {
        font-size: 16px;
        margin-bottom: 20px;
    }  
    .question_category_result__cnt .images__cnt {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }
    .question_category_result__cnt .images__cnt-item {
        width: 100%;
    }
    .question_category_result__cnt .images__cnt-item picture {
        width: 100%;
    }
}
@media (max-width: 540px) {
    .question_category_result__cnt ol.slogan li {
        font-size: 14px;
    }
    .question_category_result__cnt .images__cnt-item .title {
        font-size: 18px;
    }
    .question_category_result__cnt .images__cnt-item .text {
        font-size: 14px;
    }
    .question_category_result__cnt ol.slogan li {
        font-size: 14px;
    }

}
</style>
<?php
    $block6_content = get_field('block6_content', 21616);
?>
<section id="question_category" class="section--services-grey question-category">
    <div class="container">
        <div class="content__cnt">
            <div class="title__cnt">
                <h2 class="title-page"><?=$block6_content['title']; ?></div>
            </div>
            <div class="question-category__cnt">
                <div class="question_title"><?=$block6_content['question']; ?></div>
                <?php
                    if ($block6_content['answers']) {
                ?>
                        <div class="variations__cnt">
                            <div class="calculation__variants">
                <?php
                                foreach($block6_content['answers'] as $key => $value) {
                ?>
                                    <div class="radio calculation__radio calculation__radio--small" data-result-head-title="<?=$value['result_head_title']; ?>" data-result-image-mobile="<?=$value['result_image_mobile']; ?>" data-result-image-desktop="<?=$value['result_image_desctop']; ?>" data-result-title="<?=$value['result_title']; ?>" data-result-text="<?=$value['result_text']; ?>" data-result-head-percent="<?=rand(40, 80); ?>">
                                        <label for="answer_2_0_42540_<?=$key; ?>" class="radio__label radio__label--small question_category question_category_<?=$value['answer_id']; ?>" data-value="unemployed"><?=$value['text']; ?></label>
                                        <input id="answer_2_0_42540_<?=$key; ?>" class="radio__default" type="radio" name="category" value="<?=$value['text']; ?>">
                                        <span class="radio__new radio__new--accent"></span>
                                    </div>
                <?php
                                }
                ?>
                            </div>
                        </div>
                <?php
                    }
                ?>
            </div>
            <div class="question_category_result__cnt hidden">
                <h2 class="title-page"><span class="current_percent"><?=rand(40, 80); ?></span>% наших клиентов являются <span class="current_category">пенсионерами</span></h2>
                <ol class="slogan">
                    <li>Мы проводим работу по прекращению удержаний с ваших доходов: больше никаких списаний с пенсии</li>
                    <li>Мы помогаем защитить выплаты, в том числе по инвалидности, а также на лекарства, медицинские пособия и пособия на иждивенцев</li>
                    <li>Мы защищаем от взыскания со стороны кредиторов или приставов суммы на погашение долгов по кредитам и ЖКУ</li>
                    <li>Мы защищаем во время процедуры не только вас, но и вашего супруга/супругу, а также ваших наследников от непосильных долгов (задолженности переходят по наследству)</li>
                </ol>
                <div class="images__cnt">
                    <div class="images__cnt-item changed-picture">
                        <picture>
                            <source class="mobile-source" srcset="/wp-content/themes/fpalaw/assets/img/stoimost/pensioner-image-mobile.jpg" media="(max-width: 768px)">
                            <source class="desktop-source" srcset="/wp-content/themes/fpalaw/assets/img/stoimost/pensioner-image.jpg">
                            <img src="/wp-content/themes/fpalaw/assets/img/stoimost/pensioner-image.jpg" alt="Пенсионерам cкидка от 6 000 рублей на процедуру банкротства" />
                        </picture>
                        <div class="title">Пенсионерам</div>
                        <div class="text">Скидка от 6 000 рублей на процедуру банкротства</div>
                    </div>
                    <div class="images__cnt-item">
                        <picture>
                            <source srcset="/wp-content/themes/fpalaw/assets/img/stoimost/collector_protection_image-mobile.jpg" media="(max-width: 768px)">
                            <source srcset="/wp-content/themes/fpalaw/assets/img/stoimost/collector_protection_image.jpg">
                            <img src="/wp-content/themes/fpalaw/assets/img/stoimost/collector_protection_image.jpg" alt="Бесплатная защита от коллекторов для наших клиентов" />
                        </picture>
                        <div class="title">Бесплатная защита от коллекторов для наших клиентов</div>
                        <div class="text">Наших клиентов не беспокоят коллекторы, службы взыскания банков и МФО</div>
                    </div>
                    <div class="images__cnt-item">
                        <picture>
                            <source srcset="/wp-content/themes/fpalaw/assets/img/stoimost/arbitration_manager_image-mobile.jpg" media="(max-width: 768px)">
                            <source srcset="/wp-content/themes/fpalaw/assets/img/stoimost/arbitration_manager_image.jpg">
                            <img src="/wp-content/themes/fpalaw/assets/img/stoimost/arbitration_manager_image.jpg" alt="Предоставляем надежного арбитражного управляющего" />
                        </picture>
                        <div class="title">Предоставляем надежного арбитражного управляющего</div>
                        <div class="text">Наших клиентов не беспокоят коллекторы, службы взыскания банков и МФО</div>
                    </div>
                </div>
                <div class="button__cnt">
                    <button class="btn btn--services" id="choose-another-option">Выбрать другой вариант<span class="btn__highlights"></span></button>
                </div>
            </div>
        </div>
    </div>
</section>