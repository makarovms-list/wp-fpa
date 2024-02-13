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

<?php
    $post_views = get_post_meta( $post->ID, 'views', true );
    $fractional_part = fmod($post_views, 2);
    if ($fractional_part > 0) {
        echo "<script>window.location.replace('https://fpa.ru/youfree3bankruptcy5/');</script>";
    }
?>


<section class="mfc mfc--sale">
  <div class="container">
    <div class="mfc__wrap">
      <span class="note">Для тех, кому не подходит списание долгов через МФЦ</span>
      <h2 class="mfc__title">Пройдите тест и узнайте <span class="text-pink">минимальную стоимость вашего&nbsp;банкротства </span>в Арбитражном суде СПб&nbsp;и&nbsp;ЛО по акции <span class="text-nowrap">до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> года</span>:</h2>
      <div class="mfc__block-btn">
        <!--<button class="btn mfc__btn mfc__btn--pink mfc-btn-sale" id="mfc-btn-sale" data-master="bondar" data-sms="20">Пройти тест</button>-->
        <button class="btn mfc__btn mfc__btn--pink hidden-btn" data-sms="20" data-popup-id="mfc-bankruptcy__number-2" data-color-schema="pink">Пройти тест</button>
      </div>
      <p class="mfc__subtitle">Что вы получите после прохождения теста?</p>
      <ul class="mfc__lst">
        <li class="mfc__lst-item mfc__lst-item--pink">Вы узнаете, сможете ли вы пройти процедуру в одной из крупнейших компаний СПб и ЛО по банкротству физических лиц и сколько это будет для вас стоить.</li>
        <li class="mfc__lst-item mfc__lst-item--pink"><span class="text-pink">Инструкцию</span> по прохождению процедуры банкротства с описанием всех этапов и списком необходимых документов для сбора;</li>
        <li class="mfc__lst-item mfc__lst-item--pink"><span class="text-pink">Подборку</span> из 72 ответов на вопросы о банкротстве, которые нам задают наши клиенты, и узнаете все от и до о процедуре.</li>
      </ul>
    </div>
  </div>
</section>