<?php 
  $arr = ['01' => 'января','02' => 'февраля','03' => 'марта','04' => 'апреля','05' => 'мая','06' => 'июня','07' => 'июля','08' => 'августа','09' => 'сентября','10' => 'октября','11' => 'ноября','12' => 'декабря'];
  $date = get_field('timer', 374, false);
  $date = new DateTime($date);
  $month = $date->format('m');
  $ruMonth = $arr[$month];
?>
<section class="bankruptcy2cost color_scheme_purple">
    <div class="bankruptcy2cost_container">
        <div class="bankruptcy2cost__wrap">
            <span class="note">Если вы не можете или не хотите списать долги через банкротство…</span>
            <h1 class="bankruptcy2cost__title">Пройдите тест и узнайте, как именно в вашем случае <span class="text-accent">снизить долговую нагрузку</span> по кредитам через процедуру реструктуризации</h1>
            <div class="bankruptcy2cost__block-btn">
                <!--<button class="btn mfc__btn mfc-btn-free" id="mfc-btn-free" data-master="bondar" data-sms="19">Пройти тест</button>-->
                <button class="btn bankruptcy2cost__btn hidden-btn" data-sms="46" data-popup-id="mfc-bankruptcy__number-4" onclick="ym(82134583, 'reachGoal', '1button'); return true;" >Пройти тест</button>
                <span class="bankruptcy2cost__hint">
                    <span class="bankruptcy2cost__hint--big bankruptcy2cost__hint--bold text-accent">Для 9 из 10</span> клиентов, кто не хочет проходить банкротство, есть возможность облегчить долговую нагрузку через реструктуризацию
                </span>
            </div>
            <p class="bankruptcy2cost__subtitle">Что вы получите после прохождения теста?</p>
            <ul class="bankruptcy2cost__lst schema-red">
                <li class="bankruptcy2cost__lst-item">Вы узнаете, подходит ли ваш случай под условия реструктуризации долгов и сможете ли вы облегчить долговую нагрузку по кредитам.</li>
                <li class="bankruptcy2cost__lst-item">Пошаговую схему «Снижение долговой нагрузки без банкротства», которая объясняет, как уменьшить размер обязательств по займам без вступления в процедуру банкротства </li>
            </ul>
        </div>
    </div>
</section>