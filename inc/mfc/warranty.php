<?php 
  $arr = [
    '01' => 'января',
    '02' => 'февраля',
    '03' => 'марта',
    '04' => 'апреля',
    '05' => 'мая',
    '06' => 'июня',
    '07' => 'июля',
    '08' => 'августа',
    '09' => 'сентября',
    '10' => 'октября',
    '11' => 'ноября',
    '12' => 'декабря'
  ];

  $date = get_field('timer', 374, false);
  $date = new DateTime($date);
  
  $month = $date->format('m');
  $ruMonth = $arr[$month];

?>

<section class="mfc">
  <div class="container">
    <div class="mfc__wrap">
      <span class="note note--blue">Для тех, у кого долги превышают 50 000 руб.</span>
      <h1 class="mfc__title"> Пройдите тест и узнайте, вправе ли вы списать все долги <span class="text-accent">сo 100% гарантией результата через МФЦ </span>СПб по акции <span class="text-nowrap">до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> года</span>:</h1>
      <div class="mfc__block-btn">
        <!--<button class="btn mfc__btn mfc-btn-free" id="mfc-btn-free" data-master="bondar" data-sms="19">Пройти тест</button>-->
        <button class="btn mfc__btn hidden-btn" data-sms="19" data-popup-id="mfc-bankruptcy__number-1" data-color-schema="blue">Пройти тест</button>
      </div>
      <p class="mfc__subtitle">Какие долги вы вправе списать в МФЦ?</p>
      <ul class="mfc__lst">
        <li class="mfc__lst-item">Задолженности, образовавшиеся в результате неисполнения должником принятых им обязательств. В эту группу входят потребительские кредиты, займы в микрофинансовых организациях и у третьих лиц, ипотеки, кредитные карты, карты рассрочки и другие.</li>
        <li class="mfc__lst-item">Налоги, пошлины, сборы, долги перед бюджетными и внебюджетными фондами, включая задолженность перед Федеральной налоговой службой (ФНС) и Пенсионным фондом России (ПФР).</li>
        <li class="mfc__lst-item">Другие долги, в том числе, установленные судебными актами. К ним относятся задолженности перед юридическими лицами, жилищно-коммунальными хозяйствами и так далее.</li>
      </ul>
    </div>
  </div>
</section>