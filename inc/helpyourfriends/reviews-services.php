<style>
    .section__image--reviews {
        background-image: url(/wp-content/themes/fpalaw/assets/img/services/comment.png)!important;
    }
    .reviews__data {
        background-color: #FB5A80;
    }
    .reviews__main--foto .reviews__item:not(:nth-child(10n+1)) .reviews__data {
        background-color: #FB5A80;
    }
    @media (max-width: 768px) {
        #services_reviews-services .section__image.lazy {
            height: 100px;
            width: auto;
        }
        #services_reviews-services .reviews__main--video .reviews__item .reviews__name br {
            display: none;
        }
        #services_reviews-services .title-page {
            font-size: 22px;
            text-align: center;
        }
        #services_reviews-services .subtitle-page {
            font-size: 18px;
            text-align: center;
        }
        #services_reviews-services article+article {
            margin-top: 40px!important;
        }
        #services_reviews-services .slider-reviews {
            margin-top: 40px!important;
        }
    }
    @media (max-width: 576px) {
        .reviews__main--video .reviews__original {
            top: 38px;
        }
        .reviews__main--video .reviews__item:not(:nth-child(3n+1)) .reviews__original {
            top: 38px;
        }
        #services_reviews-services article+article {
            margin-top: 40px;
        }
        #services_reviews-services .section__image.lazy {
            height: 70px;
            width: auto;
        }
        #services_reviews-services .title-page {
            font-size: 18px;
            text-align: left;
        }
        #services_reviews-services .subtitle-page {
            font-size: 16px;
            text-align: left;
        }
        #services_reviews-services .title-page {
            font-size: 18px;
        }
        #services_reviews-services .subtitle-page {
            margin-top: 20px;
        }
        a.reviews-services__btn {
            font-size: 14px;
        }
    }

</style>
<section id="services_reviews-services" class="section--services-grey reviews-services" id="reviews-services">
  <div class="container">
    <div class="section__image section__image--reviews lazy"></div>
    <h3 class="title-page">Но вы точно знаете: банкротство реально работает и существует компания, которая отвечает за результат</h3>
    <p class="subtitle-page">Более 1000 отзывов от благодарных клиентов подтверждают нашу безупречную репутацию</p>
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

                    get_template_part('template-parts/content-fotoslide-v2');

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