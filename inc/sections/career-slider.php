<div class="career__slider">
  <div class="swiper-container swiper-career">
    <div class="swiper-wrapper">
     
      <?php 
        query_posts([
            'posts_per_page' => '-1',
            'post_type'   => 'post',
            'post_status' => 'publish',
            'category_name' => 'slider_career',
            'order' => 'DESC',
          ]);
        if( have_posts() ){
            while( have_posts() ){
                the_post();
              
                get_template_part('template-parts/content-career');
            }
            wp_reset_query();
        }
      ?>
      
    </div>
  </div>
  <div class="swiper-button-next">
    <svg>
      <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#arrow-swiper"></use>
    </svg>
  </div>
  <div class="swiper-button-prev">
    <svg>
      <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#arrow-swiper"></use>
    </svg>
  </div>
</div>