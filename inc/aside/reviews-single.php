<div class="reviews-aside">
  <h3 class="reviews-aside__title">Сотни видеоотзывов и тысячи слов благодарности</h3>
  <ul class="reviews-aside__list">
    <?php 
      global $post;

      $otzyvi = get_posts( [
        'posts_per_page' => '6',
        'post_type'  => 'otzyvy',
        'meta_key' => 'popular_videos',
        'meta_value' => true,
        'meta_compare' => '=',
        'orderby' => 'rand',
      ] );

      foreach( $otzyvi as $post ){
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
      </a>
    </li>
    
    <?php  
      }
    
      wp_reset_postdata(); 
    ?>
  </ul>
  <a class="btn btn--link reviews-aside__btn" href="<?= get_post_type_archive_link('otzyvy');?>">Все отзывы</a>
</div>