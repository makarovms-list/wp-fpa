<article class="news__item">
  <a class="news__link" href="<?php the_permalink() ?>">
    <div class="news__metka ">
     
      <?php 
        if(!empty(get_field('metka_category'))) {
      ?>
      
        <span><?php the_field('metka_category')?></span>
        
      <?php 
        } 
      ?>
      
    </div>
    <div class="news__foto">
      <?php the_post_thumbnail( 'post_thumb' )?>
    </div>
    <div class="news__content">
      <h3 class="news__name"><?php the_title() ?></h3>
      <div class="news__description"><?php the_excerpt() ?></div>
    </div>
  </a>
</article>