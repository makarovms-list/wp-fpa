<?php  
  if(function_exists('the_views')) { 
	$views = the_views(false); 
	$fieldViews = get_field('number_of_views');
	$totalViews = $views + $fieldViews;
  };
?>
<article class="articles__item" data-publish="<?php the_field('date_publ'); ?>" data-popular="<?php echo $totalViews; ?>">
  <a class="articles__link" href="<?php the_permalink() ?>">
    <div class="articles__image">
      <?php the_post_thumbnail( 'post_thumb', array('alt'   => trim(strip_tags($post->post_title))) )?>
    </div>
    <div class="articles__content">
      <div class="articles__header" >
        <h2 class="articles__title"><?php the_title() ?></h2>
        <div class="articles__text"><?php the_excerpt() ?></div>
      </div>
      
    </div>
  </a>
  
  <div class="articles__footer">
    <div class="articles__taxonomies">
        
<!-- // Список тегов(меток) для статьи -->
<!--          <?php the_terms( $post->ID, 'markname', '#', ' ', '' ); ?>--> 
       
<!-- // Список ссылок на метоки -->   
      <?php
        $tags = get_the_terms( get_the_ID(), 'markname' );

        foreach ( $tags as $tag ) {
          echo '<a href="' . get_term_link($tag) . '">#' . $tag->name . '</a>';
        }
      ?>
          
    </div>
    <span class="articles__data"><?php the_field('date_publ'); ?></span>
  </div>
  
  <div class="articles__block-hide"></div>
</article>