<?php
    /*
    $publication_order = get_field('publication_order');
    if ($publication_order = '-3') {
        $publication_order_class = 'publication_order_3';
        $publication_order_style = 'style="order: '.$publication_order.'"';
        $publication_order_title = '<div class="news-media__period">Статьи за <span>июль 2023</span> года</div>';
    }
    
    <article class="news-media__item publication_order<?=the_field('publication_order'); ?>" style="order: <?=the_field('publication_order'); ?>">
    
    */
?>
<style>

</style>
<article class="news-media__item">
  <!--<div class="news-media__period-new">Статьи за <span>июль 2023</span> года</div>-->
  <a class="news-media__link" href="<?php the_field('link_smi'); ?>" title="<?php the_field('desc_smi'); ?>" rel="nofollow">
    <div class="news-media__header">
      <div class="news-media__date"><?php the_field('date_publication'); ?></div>
      <h2 class="news-media__name"><?php the_title() ?></h2>
    </div>
    <ul class="media-info news-media__media-info">
      <li class="media-info__item">
        <span class="media-info__logo" style="width: 120px;display: block;">
          <?php if( get_field('logo_smi') ): ?>
              <img style="width: 100%;height: auto;max-height: fit-content;object-fit: contain;" src="<?php the_field('logo_smi'); ?>" />
          <?php endif; ?>
        </span>
        <span class="media-info__data" style="max-width: calc(100% - 120px);display: block;line-height: 100%;">
          <span class="media-info__title">Ссылка на статью: </span>
          <span class="media-info__link" style="white-space: normal;"><?php the_field('name_smi'); ?></span>
        </span>
      </li>
      <?php
        $comment_fpa = get_field('comment_fpa');
        switch ($comment_fpa['value']) {
            case "bodnar":
      ?>
            <li class="media-info__item">
              <span class="media-info__foto media-info__foto--bodnar"></span>
              <span class="media-info__data">
                <span class="media-info__title">Комментарий СМИ предоставляет:</span>
                <span class="media-info__author">Боднар Евгения Ивановна</span>
              </span>
            </li>
      <?php
        break;
            case "efremov":
      ?>
            <li class="media-info__item">
              <span class="media-info__foto media-info__foto--efremov"></span>
              <span class="media-info__data">
                <span class="media-info__title">Комментарий СМИ предоставляет:</span>
                <span class="media-info__author">Ефремов Александр Игоревич</span>
              </span>
            </li>
      <?php
            break;
            case "kopyrina":
      ?>
            <li class="media-info__item">
              <span class="media-info__foto media-info__foto--kopyrina"></span>
              <span class="media-info__data">
                <span class="media-info__title">Комментарий СМИ предоставляет:</span>
                <span class="media-info__author">Копырина Анжелика Владимировна</span>
              </span>
            </li>
      <?php
            break;
            
            
            case "okladnikov":
      ?>
            <li class="media-info__item">
              <span class="media-info__foto media-info__foto--okladnikov"></span>
              <span class="media-info__data">
                <span class="media-info__title">Комментарий СМИ предоставляет:</span>
                <span class="media-info__author">Окладников Илья Викторович</span>
              </span>
            </li>
      <?php
            break;
            
            
            case "sorokin":
      ?>
            <li class="media-info__item">
              <span class="media-info__foto media-info__foto--sorokin"></span>
              <span class="media-info__data">
                <span class="media-info__title">Комментарий СМИ предоставляет:</span>
                <span class="media-info__author">Сорокин Алексей Евгеньевич</span>
              </span>
            </li>
      <?php
            break;
        }
      ?>
    </ul>
    <div class="news-media__description"><?php the_content() ?></div>
  </a>
  
</article>