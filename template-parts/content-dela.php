<?php
  $id = get_field('id_otzyva');

  $thumb_id = get_post_thumbnail_id($id);
  $thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail');

  $creditors = get_field('creditors_list'); 
?>
<article>
  <div class="cases__item case">
    <h2 class="case__title"><?php the_field('title_case'); ?> ₽</h2>
    <span class="case__number">№ 
      <span><?php the_title(); ?></span>
    </span>
    <div class="case__original">
      <a class="original-link" href="<?php the_field('link_court_ruling'); ?>" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области">
        <span class="original-link__thumb original-link__thumb--ruling"></span>
        <span>Оригинал <br> определения суда</span>
      </a>

      <a class="original-link" href="<?php if(isset($id)) echo get_permalink( $id ); ?>">
        <?php if( get_field('foto_video') == 'video' ) { ?>
          <span class="original-link__thumb original-link__thumb--video" style="background-image: url(https://img.youtube.com/vi/<?php if(isset($id)) echo get_post_meta( $id, 'id_video', true ); ?>/sddefault.jpg);"></span>
          <span>Видео-отзыв клиента</span>

        <?php } elseif( get_field('foto_video') == 'foto' ) { ?>

          <span class="original-link__thumb original-link__thumb--foto" style="background-image: url(<?php echo $thumb_url[0] ?>);"></span>
          <span>Фото-отзыв клиента</span>

        <?php } ?>
      </a>

    </div>
    <div class="case__row case__row--debtor">Должник: <span><?php the_field('debtor'); ?></span>
    </div>
    <div class="case__row case__row--number">
      <span class="case__name">Номер дела в суде: </span>
      <span class="case__data">
        <span><?php the_field('сase_number_court'); ?> </span>
        <a href="<?php the_field('link_cards'); ?>" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области">Посмотреть картотеку&nbsp;суда</a>
      </span>
    </div>
    <div class="case__row case__row--result">Результат работы: <span><?php the_field('result_of_work'); ?></span>
    </div>
    <div class="case__row case__row--period">Срок рассмотрения дела: <span><?php the_field('time_сase'); ?> месяцев</span>
    </div>
    
    <?php if( $creditors ): ?>
    <div class="case__row case__row--creditors">
      <span class="case__name">Список&nbsp;кредиторов:</span>
      <ul class="creditors creditors--cases">
          <?php foreach( $creditors as $creditor ): ?>
              <li><?php echo $creditor; ?></li>
          <?php endforeach; ?>
      </ul>
    </div>
    <?php endif; ?>
    
    <div class="case__row case__row--arbitration">Арбитражный управляющий: <span>
        <span><?php the_field('arbitration'); ?></span>
      </span>
    </div>
    <div class="case__row case__row--accompanying">Сопровождающий юрист: <span>
        <span><?php the_field('jurist_list'); ?></span>
      </span>
    </div>
  </div>
  <div class="cases__block-hide"></div>
</article>