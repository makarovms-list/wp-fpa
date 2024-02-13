<?php 
  $others_title = get_field('others_title'); 
  $promo_block = get_field('promo_block'); 
?>
<div class="cta">
  <div class="cta__wrap">
    <p class="cta__text"><?php echo $others_title['subtitle_call']; ?></p>
    <a class="btn cta__link" href="<?php echo $promo_block['link']; ?>" target="_blank" rel="nofollow" title="Вы переходите на сайт Группы компаний HeadHunter по Санкт-Петербургу.">Перейти на hh.ru</a>
  </div>
</div>