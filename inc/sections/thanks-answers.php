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
  
<script>
	window.onload = function () {
        if (localStorage.customer_phone != '' && localStorage.customer_phone != undefined) {
            jQuery(".thanks .thanks__block-question ol.thanks__lst").append('<li class="thanks__lst-item"><span class="thanks__problem">Ваш телефон: </span><span class="thanks__answer">' + localStorage.customer_phone + '</span></li>');
        }
        let history_state = window.history.state;
        if (history_state != null) {
            jQuery('.thanks .thanks__fix').removeClass('hidden');
        }
	} 
</script>
   
<div class="thanks">
  <div class="thanks__block-question">
    
     <div class="thanks-title">
      <h1 class="title-page title-page--left" data-title="00">Рассчитаем и сообщим стоимость процедуры банкротства, при заданных вами параметрах:</h1>
      <h1 class="title-page title-page--left hidden" data-title="01">Рассчитаем и сообщим, вправе ли вы обанкротиться бесплатно или с субсидией в Арбитражном суде или МФЦ до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> г., при заданных вами параметрах:</h1>
      <h1 class="title-page title-page--left hidden" data-title="02">Рассчитаем и сообщим минимальную стоимость банкротства в Арбитражном суде или МФЦ до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> г., при заданных вами параметрах:</h1>
      <h1 class="title-page title-page--left hidden" data-title="03">Рассчитаем и сообщим, вправе ли вы списать все свои долги со 100% гарантией результата через МФЦ СПб по акции до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> г., при заданных вами параметрах:</h1>
      <h1 class="title-page title-page--left hidden" data-title="04">Рассчитаем и сообщим минимальную стоимость банкротства в Арбитражном суде СПб и ЛО до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> г., при заданных вами параметрах:</h1>
      <h1 class="title-page title-page--left hidden" data-title="05">Оценим вашу ситуацию и сообщим, относитесь ли вы к льготным категориям граждан и имеете ли право на банкротство с оплатой за результат</h1>
      <h1 class="title-page title-page--left hidden" data-title="06">Оценим вашу ситуацию и сообщим, вправе ли вы бесплатно списать долги в МФЦ до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> г., при заданных вами параметрах:</h1>
      <h1 class="title-page title-page--left hidden" data-title="07">Оценим вашу ситуацию и сообщим, вправе ли вы списать кредиты через банкротство в Арбитражном суде до <?php echo $date->format('j') . ' ' . $arr[$month]; ?> <?php echo date ( 'Y' ) ; ?> г., при заданных вами параметрах:</h1>
    </div>
    
    <div class="thanks__inner">
      <ol class="thanks__lst thanks__lst--ol thanks-answers"></ol>
      <div class="thanks__fix hidden">
        <span>Вы всегда можете исправить
          <br> введенные данные:</span>
        <a class="btn thanks__back" href="#" onclick="history.back(); return false;">
          <svg>
            <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#pen"></use>
          </svg>Изменить
        </a>
      </div>
    </div>
  </div>

  <?php get_template_part( 'inc/sections/thanks-block-guarantees' ); ?>
  <?php get_template_part( 'inc/sections/thanks-block-reso' ); ?>
  <?php get_template_part( 'inc/sections/thanks-block-attention' ); ?>
  
</div>