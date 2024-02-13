<div class="reviews-services">
  <div class="note">Доверие</div>
  <h2 class="reviews__title reviews__title--big">Почему 81,4% клиентов выбирают нас, когда решают пройти банкротство?</h2>
  <p class="reviews__subtitle">Смотрите тысячи отзыв довольных клиентов и причины побудившие их довериться одним из лучших юристов по банкротству в России</p>
  <div class="reviews__main reviews__main--video">
    <?php 
      $args_video_desk = ([
        'posts_per_page' => '6',
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

            get_template_part('template-parts/content-video');

        endwhile;

      endif;
    ?>


    <?php if (  $video_desk->max_num_pages > 1 ) : ?>
      <button class="btn btn--show btn--reviews btn-reviews-thanks">
        <span class="btn__icon btn__icon--load">
          <svg>
            <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#load"></use>
          </svg>
        </span>
        Показать ещё
      </button>
    <?php endif; ?>

    <script>
      let true_posts_video = '<?php echo serialize($video_desk->query_vars); ?>';
      let current_page_video = '<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>';
      let max_pages_video = '<?php echo $video_desk->max_num_pages; ?>';
    </script>
    
  </div>
</div>