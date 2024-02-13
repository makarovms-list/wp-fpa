<?php 
  $arr = ['01' => 'января','02' => 'февраля','03' => 'марта','04' => 'апреля','05' => 'мая','06' => 'июня','07' => 'июля','08' => 'августа','09' => 'сентября','10' => 'октября','11' => 'ноября','12' => 'декабря'];
  $date = get_field('timer', 374, false);
  $date = new DateTime($date);
  $month = $date->format('m');
  $ruMonth = $arr[$month];
?>
<section class="bankruptcy2cost color_scheme_green">
    <div class="bankruptcy2cost_container">
        <div class="bankruptcy2cost__wrap">
            <span class="note">Есть ли у вас льготы?</span>
            <h1 class="bankruptcy2cost__title">Пройдите тест и узнайте, относитесь ли вы к 1 из 10 льготных категорий граждан, которые вправе пройти <span class="text-accent">банкротство бесплатно или с оплатой за результат</span></h1>
            <div class="bankruptcy2cost__block-btn">
                <!--<button class="btn mfc__btn mfc-btn-free" id="mfc-btn-free" data-master="bondar" data-sms="19">Пройти тест</button>-->
                <button class="btn bankruptcy2cost__btn hidden-btn" data-sms="21" data-popup-id="mfc-bankruptcy__number-3" onclick="ym(82134583, 'reachGoal', '1button'); return true;">Пройти тест</button>
                <span class="bankruptcy2cost__hint">
                    <span class="bankruptcy2cost__hint--big bankruptcy2cost__hint--bold text-accent">3 из 5</span> должников подпадают под льготную категорию для <span class="bankruptcy2cost__hint--bold text-accent">бесплатного списания</span> долгов в МФЦ или АС СПб и ЛО, но не знает об этом
                </span>
            </div>
            <p class="bankruptcy2cost__subtitle">Что вы получите после прохождения теста?</p>
            <ul class="bankruptcy2cost__lst schema-red">
                <li class="bankruptcy2cost__lst-item">Вы узнаете, имеете ли вы право на бесплатное или льготное банкротство с оплатой за результат в одной из крупнейших компаний СПб и ЛО по банкротству физлиц и ИП и сколько это будет стоить именно в вашей ситуации.</li>
                <li class="bankruptcy2cost__lst-item"><span class="bankruptcy2cost__hint--bold text-accent">Инструкцию</span> <span class="bankruptcy2cost__hint--bold">«Банкротство льготных категорий граждан»</span> с описанием всех этапов и особенностей процедуры для каждой из категорий (пенсионеры, безработные, родители-одиночки, многодетные семьи и другие);</li>
            </ul>
        </div>
    </div>
</section>