<style>
    /* Общие стили (Заголовок, подзаголовок и т.д.)*/
    #services_reviews-services-v2 {
        background: transparent;
    }
    #services_reviews-services-v2 .container {
        
    }
    #services_reviews-services-v2 .coment_icon {
        height: 130px;
        margin: 0 auto 60px
    }
    #services_reviews-services-v2 h3.title-page {
        
    }
    #services_reviews-services-v2 p.subtitle-page {
        margin-bottom: 60px;
    }
    
    /* Стили Grid */
    #services_reviews-services-v2 .reviews__row-v2 {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 40% auto;
        grid-column-gap: 32px;
        grid-row-gap: 32px;
    }
    
    /* Стили левая колонка (отзыв во всю ширину) */
    .reviews__row-v2 .reviews__row-item-v2 .reviews__item-v2 {
        margin-bottom: 30px;
    }
    #services_reviews-services-v2 .reviews__row-v2 .reviews__foto-v2 {
        /*height: 395px;*/
        margin-bottom: 20px;
        overflow: hidden;
        border-radius: 10px;
        position: relative;
        width: 100%;
        /*padding-top: 80.5%;*/
    }
    #services_reviews-services-v2 .reviews__row-v2 .reviews__foto-v2 picture {
        position: absolute;
        top: 0;        
    }
    #services_reviews-services-v2 .reviews__row-v2 .reviews__foto-v2 .reviews__data-v2 {
        position: absolute;
        bottom: 16px;
        left: 16px;
        right: 16px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 8px 15px;
        font-size: 14px;
        color: #fff;
        border-radius: 5px;
        background-color: #FB5A80;
    }
    #services_reviews-services-v2 .reviews__row-v2 .reviews__item-v2 .reviews__name-v2 {
        margin-bottom: 0px;
        font-weight: 700;
        font-size: 26px;
        color: #333;
        -webkit-transition: color .2s ease;
        -o-transition: color .2s ease;
        transition: color .2s ease;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    #services_reviews-services-v2 .reviews__row-v2 .reviews__foto-v2 .reviews__data-v2 .reviews__data-name-v2.reviews__data-name--mobile-v2 {
        display: none;
    }
    #services_reviews-services-v2 .reviews__row-v2 .reviews__item-v2:hover .reviews__name-v2 {
        color: #3c70f4;
    }
    #services_reviews-services-v2 .reviews__row-v2 .reviews__item-v2 .sud_links__cnt {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 160px auto;
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        margin: 16px 0;
    }
    #services_reviews-services-v2 .reviews__row-v2 .reviews__item-v2 .sud_links__cnt a {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 32px auto;
        grid-column-gap: 12px;
        grid-row-gap: 12px;
    }
    #services_reviews-services-v2 .reviews__row-v2 .reviews__item-v2 .sud_links__cnt a span.original-link__thumb-v2 {
        display: block;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        -webkit-box-shadow: 0 2px 3px 1px rgb(0 37 102 / 15%);
        box-shadow: 0 2px 3px 1px rgb(0 37 102 / 15%);
    }
    #services_reviews-services-v2 .reviews__row-v2 .reviews__item-v2 .sud_links__cnt a span.original-link__thumb--ruling-v2 {
        background-image: url(/wp-content/themes/fpalaw/assets/img/icons/sud_document_photo.png);
        background-size: contain;
    }
    #services_reviews-services-v2 .reviews__row-v2 .reviews__item-v2 .sud_links__cnt a span.original-link__thumb--cardfile-v2 {
        background-image: url(/wp-content/themes/fpalaw/assets/img/icons/arb_sud_document_photo.png);
        background-size: contain;
    }
    #services_reviews-services-v2 .reviews__row-v2 .reviews__item-v2 .sud_links__cnt a span.title {
        font-size: 12px;
        color: #3c70f4;
    }
    #services_reviews-services-v2 .reviews__row-v2 .reviews__item-v2 .sud_links__cnt a:hover span.title {
        color: rgba(60,112,244,.8);
    }
    #services_reviews-services-v2 .reviews__row-v2 .reviews__item-v2 .reviews__content-v2 .reviews__text-v2 {
        font-size: 14px;
        color: #717b97;
    }
    
    #services_reviews-services-v2 .reviews__row-v2 .reviews__row-item-v3 .reviews__content-v2 {
        display: none;
    }
    #services_reviews-services-v2 .reviews__row-v2 .reviews__row-item-v3 .reviews__case-v2:first-child {
        display: none;
    }
    
    #services_reviews-services-v2 .reviews__row-v2 .reviews__row-item-v3 {
        /*
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: calc(50% - 4px) calc(50% - 4px);
        grid-column-gap: 8px;
        grid-row-gap: 8px;
        */
        margin-left: -4px;
    }
    #services_reviews-services-v2 .reviews__row-v2  .reviews__row-item-v3 article {
        display: inline-block;
        vertical-align: top;
        width: calc(33% - 8px);
        margin: 0 4px;
    }
    #services_reviews-services-v2 .reviews__row-v2 .reviews__row-item-v3 article .reviews__foto-v2 {
        padding-top: 0;
        margin-bottom: 8px;
    }
    #services_reviews-services-v2 .reviews__row-v2  .reviews__row-item-v3 article picture {
        position: relative;
    }
    #services_reviews-services-v2 .reviews__row-v2 .reviews__row-item-v3 article .reviews__data-v2 {
        bottom: 4px;
        left: 4px;
        right: 4px;
        padding: 8px 8px;
    }
    
    #services_reviews-services-v2 .reviews__row-v2 .reviews__row-item-v3 .reviews__data-v2 .reviews__data-name-v2 {
        display: none;
    }
    #services_reviews-services-v2 .reviews__row-v2 .reviews__row-item-v3 .reviews__data-v2 .reviews__data-name-v2.reviews__data-name--mobile-v2 {
        display: inline-block;
    }
    #services_reviews-services-v2 .reviews__row-v2 .reviews__row-item-v3 .reviews__data-v2 {
        font-size: 10px;
    }
    
    
    /* Стили правая колонка */
    .reviews__item {
        margin-left: 0px!important;
    }
    
    #services_reviews-services-v2 .reviews__row-v2 .reviews__row-item-v4 {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: calc(50% - 16px) auto;
        grid-column-gap: 32px;
        grid-row-gap: 32px;
    }
    #services_reviews-services-v2 .reviews__row-v2 .reviews__row-item-v4 .reviews__item-v2 .sud_links__cnt {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: calc(49% - 8px) auto;
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        margin: 16px 0;
    }
    
    #services_reviews-services-v2 .reviews__row-v2 .reviews__row-item-v4 .reviews__item-v2 {
        margin-left: 0px;
        margin-bottom: 0px;    
    }
    
    #services_reviews-services-v2 .reviews__row-v2 .slider-reviews__content {
        background-color: #FB5A80;
        color: #fff;
    }
    #services_reviews-services-v2 .reviews__row-v2 .slider-reviews {
        margin-top: 32px;
    }
    #services_reviews-services-v2 h3.title-page {
        margin-bottom: 35px;
    }

    @media (max-width: 1200px) {
        #services_reviews-services-v2 .reviews__row-v2 .reviews__foto-v2 {
            /*padding-top: 79.5%;*/
        }
        #services_reviews-services-v2 .reviews__row-v2 .reviews__foto-v2 .reviews__data-v2 {
            font-size: 10px;
        }
        #services_reviews-services-v2 .reviews__row-v2 .reviews__foto-v2 .reviews__data-v2 .reviews__data-name-v2 {
            display: none;
        }
        #services_reviews-services-v2 .reviews__row-v2 .reviews__foto-v2 .reviews__data-v2 .reviews__data-name-v2.reviews__data-name--mobile-v2 {
            display: inline-block;
        }
        #services_reviews-services-v2 .reviews__row-v2  .reviews__row-item-v3 article {
            width: calc(50% - 8px);
        }
        #services_reviews-services-v2 .reviews__row-v2 .reviews__row-item-v3 .reviews__data-v2 .reviews__data-name-v2.reviews__data-name--mobile-v2 {
            display: inline-block;
        }
        #services_reviews-services-v2 .reviews__row-v2 .reviews__row-item-v3 .reviews__data-v2 .reviews__data-name-v2 {
            display: none;
        }
        #services_reviews-services-v2 .reviews__row-v2 .reviews__row-item-v4 {
            grid-template-columns: 100%;
        }
    }
    @media (max-width: 992px) {
        #services_reviews-services-v2 .reviews__row-v2 .reviews__foto-v2 {
            /*padding-top: 77.5%;*/
        }
        #services_reviews-services-v2 .reviews__row-v2 .reviews__item-v2 .sud_links__cnt {
            grid-template-columns: 50% auto;
        }
    }
    @media (max-width: 768px) {
        #services_reviews-services-v2 .reviews__row-v2 {
            display: block;
        }
        #services_reviews-services-v2 .reviews__row-v2 .reviews__row-item-v2:first-child,
        #services_reviews-services-v2 .reviews__row-v2 .reviews__row-item-v3:first-child {
            display: none;
        }
        #services_reviews-services-v2 .reviews__row-v2 .reviews__item-v2 .sud_links__cnt {
            grid-template-columns: 160px auto;
        }
    }
    @media (max-width: 576px) {
        #services_reviews-services-v2 h3.title-page {
            font-size: 20px!important;
        }
    }

</style>
<section id="services_reviews-services-v2" class="section--services-grey reviews-services">
    <div class="container">
        <img src="/wp-content/themes/fpalaw/assets/img/refferals/comment.png" class="coment_icon" />
        <h3 class="title-page">Более 1000 отзывов от благодарных клиентов подтверждают нашу безупречную репутацию</h3>
        <!--<p class="subtitle-page">&nbsp;</p>-->
        <div class="reviews__row-v2">
            <div class="reviews__row-item-v2">
                <?php 
                    $args_foto_desk = ([
                      'posts_per_page' => '1',
                      'post__in'  => [ 646 ],
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
                          get_template_part('template-parts/content-foto-refferal');
                      endwhile;
                    endif;
                    wp_reset_postdata(); 
                ?>
            </div>
            <div class="reviews__row-item-v2">
                <?php 
                    $args_video_desk = ([
                        'posts_per_page' => '1',
                        'post__in'  => [ 785 ],
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
                            get_template_part('template-parts/content-video-refferal');
                        endwhile;
                    endif;
                ?>
            </div>
        </div>
        <div class="reviews__row-v2">
            <div class="reviews__row-item-v3">
                <?php 
                    $args_foto_desk = ([
                      'posts_per_page' => '9',
                      'post__in'  => [ 1049, 981, 649, 1018, 1042, 1032, 1154, 1158, 1148 ],
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
                          get_template_part('template-parts/content-foto-refferal');
                      endwhile;
                    endif;
                    wp_reset_postdata(); 
                ?>
            </div>
            <div class="reviews__row-item-v4">
                <?php 
                    $args_video_desk = ([
                        'posts_per_page' => '2',
                        'post__in'  => [ 830, 781 ],
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
                            get_template_part('template-parts/content-video-refferal');
                        endwhile;
                    endif;
                ?>
            </div>
        </div>
        
        <div class="reviews__row-v2">
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