<style>
section.related related_v2 {
    margin-bottom: 40px;
}
.reviews-aside__name_v2 {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 22px;
    line-height: 145%;
    color: #393939;
    margin-bottom: 16px;
    display: block;
}
.reviews-aside__name_v2:hover {
    color: #3c70f4;
}
.reviews__text_v2 {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 145%;
    color: #717B97;
}
.reviews__link_v2 {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 145%;
    display: block;
}
.related .swiper-button-next-info {
    right: 0;
}
.related .swiper-button-prev-info {
    left: 0;
}
.related .swiper-button-next-info, .related .swiper-button-prev-info {
    top: 0;
    z-index: 2;
    margin-top: 0;
    width: 30px;
    height: 175px;
    margin-bottom: 0;
    background-color: #f3f4f4;
    border-radius: 10px;
    -webkit-transition: all .2s ease;
    -o-transition: all .2s ease;
    transition: all .2s ease;
    cursor: pointer;
} 
.related .swiper-button-next-info svg, .related .swiper-button-prev-info svg {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 12px;
    height: 12px;
    fill: #3c70f4;
    -webkit-transform: translate(-40%,-50%);
    -ms-transform: translate(-40%,-50%);
    transform: translate(-40%,-50%);
    -webkit-transition: .4s ease;
    -o-transition: .4s ease;
    transition: .4s ease;
}

.swiper-button-next-info, .swiper-button-prev-info {
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--swiper-navigation-color,var(--swiper-theme-color));
}
@media (max-width: 768px) {
    .swiper-button-next-info, .related .swiper-button-prev-info {
        display: none;
    }    
}


</style>
<section class="related">
    <h2 class="related__title">Отзывы наших клиентов</h2>
    <div class="related__wrap">
        <div class="swiper-container swiper-video-related">
            <div class="swiper-wrapper">
                <?php
                    $otzyvi = get_posts( [
                        'posts_per_page' => '16',
                        'post_type'  => 'otzyvy',
                        'meta_key' => 'popular_videos',
                        'meta_value' => true,
                        'meta_compare' => '=',
                        'orderby' => 'rand',
                    ] );
                    foreach( $otzyvi as $post ){
                        setup_postdata($post);
                ?>
                
                    <div class="swiper-slide">
                        <div class="reviews-aside__video">
                            <div class="youtube" data-embed="<?php the_field('id_video'); ?>">
                                <div class="youtube__button">
                                    <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#play"></use></svg>
                                </div>
                            </div>
                        </div>
                        <a class="reviews-aside__link" href="<?php the_permalink() ?>">
                            <span class="reviews-aside__foto" style="background-image: url(https://img.youtube.com/vi/<?php the_field('id_video'); ?>/sddefault.jpg)"></span>
                        </a>
                        <a class="reviews__link_v2" href="<?php the_permalink() ?>">
                            <span class="reviews-aside__name_v2"><?php the_title() ?></span>
                        </a>    
                        <div class="reviews__text_v2"><?php do_excerpt(get_the_excerpt(), 20); ?></div>
                        <a class="reviews__link_v2" href="<?php the_permalink() ?>">
                            <span>Подробнее</span>
                        </a>
                        
                    </div>
                <?php  
                    }
                    wp_reset_postdata(); 
                ?>
            </div>
        </div>
        <div class="swiper-button-next-info">
            <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#arrow-swiper"></use></svg>
        </div>
        <div class="swiper-button-prev-info">
            <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#arrow-swiper"></use></svg>
        </div>
    </div>
</section>














<!--
<div class="reviews-aside">
  <h3 class="reviews-aside__title">Истории реальных людей, прошедших банкротство</h3>
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
-->