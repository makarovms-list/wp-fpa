<?php 
  $arr = ['01' => 'января','02' => 'февраля','03' => 'марта','04' => 'апреля','05' => 'мая','06' => 'июня','07' => 'июля','08' => 'августа','09' => 'сентября','10' => 'октября','11' => 'ноября','12' => 'декабря'];
  $date = get_field('timer', 374, false);
  $date = new DateTime($date);
  $month = $date->format('m');
  $ruMonth = $arr[$month];
?>
<section class="bankruptcy2cost color_scheme_red">
    <div class="bankruptcy2cost_container">
        <div class="bankruptcy2cost__wrap">
            <span class="note">Вам не подходит списание долгов в МФЦ?</span>
            <h1 class="bankruptcy2cost__title">Пройдите тест и узнайте <span class="text-accent">минимальную стоимость вашего банкротства</span> в Арбитражном суде СПб и ЛО по акции до  <?=$date->format('j'); ?> <?=$arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> года</h1>
            <div class="bankruptcy2cost__block-btn">
                <!--<button class="btn mfc__btn mfc-btn-free" id="mfc-btn-free" data-master="bondar" data-sms="19">Пройти тест</button>-->
                <button class="btn bankruptcy2cost__btn hidden-btn" data-sms="20" data-popup-id="mfc-bankruptcy__number-2-test" onclick="ym(82134583, 'reachGoal', '1button'); return true;">Пройти тест</button>
                <span class="bankruptcy2cost__hint">
                    <span class="bankruptcy2cost__hint--big bankruptcy2cost__hint--bold text-accent">7 из 10</span> должников подходят под условия нашей <span class="bankruptcy2cost__hint--bold text-accent">акции</span> и будут вправе пройти банкротство по  минимальной стоимости
                </span>
            </div>
            <p class="bankruptcy2cost__subtitle">Что вы получите после прохождения теста?</p>
            <ul class="bankruptcy2cost__lst schema-red">
                <li class="bankruptcy2cost__lst-item">Вы узнаете, сможете ли вы пройти процедуру со скидкой в одной из крупнейших компаний СПб и ЛО по банкротству физических лиц и сколько это будет для вас стоить.</li>
                <li class="bankruptcy2cost__lst-item"><span class="bankruptcy2cost__hint--bold text-accent" onclick="ym(82134583, 'reachGoal', 'link1'); return true;">Инструкцию</span> <span class="bankruptcy2cost__hint--bold" onclick="ym(82134583, 'reachGoal', 'link1'); return true;">«Прохождение процедуры банкротства»</span> с описанием всех этапов и списком необходимых именно вам документов для сбора.</li>
                <li class="bankruptcy2cost__lst-item"><span class="bankruptcy2cost__hint--bold text-accent" onclick="ym(82134583, 'reachGoal', 'link1'); return true;">Подборку</span> из 72 ответов на вопросы о банкротстве, которые нам задают клиенты, и узнаете все от и до о процедуре. 72 ответа на вопросы о банкротстве, которые нам задают клиенты, и узнаете все от и до о процедуре.</li>
            </ul>
        </div>
    </div>
</section>