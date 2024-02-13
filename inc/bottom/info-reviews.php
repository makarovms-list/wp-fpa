<section class="section--services-grey reviews-art">
  <div class="container">
    <h2 class="title-page title-page--tiny">Отзывы наших клиентов</h2>
    <div class="reviews-art__wrap">
      <?php 
        $args_video_desk = ([
          'posts_per_page' => '3',
          'post__in'  => [ 785, 830, 781 ],
          'post_type'   => 'otzyvy',
          'post_status' => 'publish',
          'tax_query'   => [
            [
              'taxonomy'  => 'types',
              'field'     => 'slug',
              'terms'     => 'video'
            ],
          ],
        ]);

        $video_desk = new WP_Query( $args_video_desk );

        if( $video_desk->have_posts() ) :

          while( $video_desk->have_posts() ) : $video_desk->the_post();

              get_template_part('template-parts/content-info-reviews');

          endwhile;

        endif;
      ?>
    </div>
    <a class="btn btn--big reviews-art__btn" href="<?= get_post_type_archive_link('otzyvy');?>">Все отзывы</a>
  </div>
</section>