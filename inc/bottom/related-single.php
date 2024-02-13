<section class="related-single">
  <div class="related-single__head">
    <h3 class="related-single__title">Похожие статьи</h3>
  </div>
  <div class="swiper-container swiper-related-single">
    <div class="swiper-wrapper">
      <?php
        global $post;
        
        $args = ([
          'posts_per_page' => -1,
          'post_type'   => 'info',
          'post_status' => 'publish',
          'post__not_in' => array($post->ID),
        ]);
        $fpalaw_query = new WP_Query( $args );

        // если посты, удовлетворяющие нашим условиям, найдены
        if( $fpalaw_query->have_posts() ) :

            // запускаем цикл
            while( $fpalaw_query->have_posts() ) : $fpalaw_query->the_post();
                get_template_part('template-parts/content-related-sngl');
            endwhile;
      
        endif;

        wp_reset_postdata();
      ?>
    </div>
  </div>
  <ul class="related-single__list">
    <?php
      global $post;

      $args = ([
        'posts_per_page' => -1,
        'post_type'   => 'info',
        'post_status' => 'publish',
        'post__not_in' => array($post->ID),
      ]);
      $fpalaw_query = new WP_Query( $args );

      // если посты, удовлетворяющие нашим условиям, найдены
      if( $fpalaw_query->have_posts() ) :

          // запускаем цикл
          while( $fpalaw_query->have_posts() ) : $fpalaw_query->the_post();
              get_template_part('template-parts/content-related-sngl-list');
          endwhile;

      endif;

      wp_reset_postdata();
    ?>
  </ul>
</section>