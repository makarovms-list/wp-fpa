<?php
    $rewiews_title = get_field('rewiews_title', 374, false);
?>
<style>
    #services_reviews-services {
        overflow-x: hidden;
    }
    #services_reviews-services .reviews__main--video .reviews__item:nth-child(3n+1),
    #services_reviews-services .reviews__main--video .reviews__item:not(:nth-child(3n+1)) {
        height: auto!important;
    }

    @media (max-width: 768px) {
        .reviews__main--video .reviews__item:nth-child(3) {
            margin-bottom: 70px!important;
        }
        .reviews-services__btn {
            width: 100%;
        }
    }
</style>
<section id="services_reviews-services" class="section--services-grey reviews-services" id="reviews-services">
  <div class="container">
    <div class="section__image section__image--reviews lazy"></div>
    <?php
        if ($rewiews_title != '') {
    ?>
        <h3 class="title-page"><?=$rewiews_title; ?></h3>
    <?
        } else { 
    ?>
        <h3 class="title-page">1075 отзывов от благодарных клиентов</h3>    
    <?php
        }
    ?>
    <p class="subtitle-page">Тысячи клиентов списали все свои долги и делятся опытом с вами</p>
    <div class="reviews__row reviews__row--services">
      <div class="reviews__block reviews__block--foto">
        <div class="reviews__main reviews__main--foto">
          <?php 
            $args_foto_desk = ([
              'posts_per_page' => '10',
              'post__in'  => [ 646, 1049, 981, 649, 1018, 1042, 1032, 1154, 1158, 1148 ],
              'post_type'   => 'otzyvy',
              'post_status' => 'publish',
              'orderby'     => 'none',
              'tax_query'   => [
                [
                  'taxonomy'  => 'types',
                  'field'     => 'slug',
                  'terms'     => 'foto'
                ],
              ],
            ]);

            $foto_desk = new WP_Query( $args_foto_desk );

            if( $foto_desk->have_posts() ) :

              while( $foto_desk->have_posts() ) : $foto_desk->the_post();

                  get_template_part('template-parts/content-foto');

              endwhile;
            endif;

            wp_reset_postdata(); 
          ?>
        </div>
      </div>
      <div class="reviews__block reviews__block--video">
        <div class="reviews__main reviews__main--video">
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

                  get_template_part('template-parts/content-video');

              endwhile;

            endif;
          ?>
        </div>
      </div>
      <div class="reviews__slider slider-reviews slider-reviews--services">
        <div class="swiper-container swiper-reviews">
          <div class="swiper-wrapper">
            <?php 
              $args_foto_1 = ([
                'posts_per_page' => '10',
                'post__in'  => [ 646, 1049, 981, 649, 1018, 1042, 1032, 1154, 1158, 1148 ],
                'post_type'   => 'otzyvy',
                'post_status' => 'publish',
                'tax_query'   => [
                  [
                    'taxonomy'  => 'types',
                    'field'     => 'slug',
                    'terms'     => 'foto'
                  ],
                ],
              ]);

              $foto_mob1 = new WP_Query( $args_foto_1 );

              if( $foto_mob1->have_posts() ) :

                while( $foto_mob1->have_posts() ) : $foto_mob1->the_post();

                    get_template_part('template-parts/content-fotoslide');

                endwhile;

              endif;
            ?>
          </div>
        </div>
      </div>
    </div>
    <div class="reviews-services__btn-wrap">
      <a class="btn reviews-services__btn" id="reviews-btn" href="<?= get_post_type_archive_link('otzyvy');?>">Смотреть все отзывы</a>
    </div>
  </div>
</section>