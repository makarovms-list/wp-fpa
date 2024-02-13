<div class="reviews-aside reviews-aside--full">
  <h3 class="reviews-aside__title reviews-aside__title--big">Популярные видео</h3>
  <a class="reviews-aside__link-back" href="<?= get_post_type_archive_link('otzyvy');?>">Вернуться в раздел «Отзывы»</a>
  <ul class="reviews-aside__list">
   
    <?php 
      global $post;

      $posts = get_posts( [
        'posts_per_page' => '6',
        'post_type'  => 'otzyvy',
        'meta_key' => 'popular_videos',
        'meta_value' => true,
        'meta_compare' => '=',
        'orderby' => 'rand',
      ] );

      foreach( $posts as $post ){
        setup_postdata($post);
    ?>
    
    <li class="reviews-aside__item">
      <div class="reviews-aside__video">
        <div class="youtube" data-embed="<?php the_field('id_video'); ?>">
          <div class="youtube__button">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#play"></use>
            </svg>
          </div>
        </div>
      </div>
      <a class="reviews-aside__link" href="<?php the_permalink() ?>">
        <span class="reviews-aside__foto" style="background-image: url(https://img.youtube.com/vi/<?php the_field('id_video'); ?>/sddefault.jpg)"></span>
        <span class="reviews-aside__name"><?php the_title() ?></span>
        <span class="reviews-aside__text"><?php the_excerpt() ?></span>
      </a>
    </li>
    
    <?php  
      }
    
      wp_reset_postdata(); 
    ?>
    

  </ul>
</div>