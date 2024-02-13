<?php get_header(); ?>

<?php 
  $args = [
    'show_all'     => false,
    'end_size'     => 1,     // количество страниц на концах
    'mid_size'     => 1,     // количество страниц вокруг текущей
    'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
    'prev_text'    => __(''),
    'next_text'    => __(''),
    'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
    'add_fragment' => '', 
    'screen_reader_text' => __('&nbsp;'),
  ]
?>
<style>
    .news__block--bankruptcy .news__name {
        overflow: initial;
        font-size: 20px;    
    }
    @media (max-width: 1200px) {
        .news__block--bankruptcy .news__name {
            font-size: 18px!important;
        }
    }
</style>
<main>
  <section class="section news news--main">
  
    <div class="container">
      <div class="news__wrap news__wrap--top">
       
        <div class="news__row">
         
          <div class="news__block news__block--company">
            <div class="news__header">
              <h1 class="news__title" id="filter">Новости компании</h1>
              
<!--     Фильтры временно отключены         -->
<!--
              <form class="filters-line" action="" method="POST">
                <span class="filters-line__lable">Популярное: </span>
                <div class="filters-line__best">
                  <div class="radio radio--link active">
                    <input class="radio__default" id="filter_01" type="radio" name="filter">
                    <label class="radio__label" for="filter_01">Результаты недели</label>
                  </div>
                </div>
                <div class="filters filters-line__filters" role="filters" aria-selected="true">
                  <div class="filters__btn">
                    <span class="filters__arrow"> </span>
                    <span class="filters__text">Рубрики</span>
                  </div>
                  <ul class="filters__list">
                   
                    <?php
                      $tags = get_terms( array( 'taxonomy' => 'tags' ) );
                      if ( $tags ) :
                    ?>
                      
                    <?php foreach ( $tags as $tag ) : ?>

                      <li class="filters__item radio">
                        <input class="radio__default" id="<?php echo $tag->term_id ?>" type="radio" name="filter">
                        <span class="radio__new"></span>
                        <label class="radio__label" for="<?php echo $tag->term_id ?>"><?php echo $tag->name ?></label>
                      </li>

                    <?php endforeach; ?>
                    
                    <?php  
                      endif;
                    ?>

                  </ul>
                </div>
              </form>
-->
            </div>
            <div class="news__main news__main--company">
             
              <?php 
                $args_com_desk = ([
                  'posts_per_page' => '3',
                  'post_type'   => 'news',
                  'post_status' => 'publish',
                  'orderby' => 'meta_value',
                  'meta_key' => 'date_publication',
                  'order' => 'DESC',
                  'tax_query'   => [
                    [
                      'taxonomy'  => 'categories',
                      'field'     => 'slug',
                      'terms'     => 'company'
                    ],
                  ],
                ]);

                $com_desk = new WP_Query( $args_com_desk );

                if( $com_desk->have_posts() ) :
                  // затем запускаем цикл
                  while( $com_desk->have_posts() ) : $com_desk->the_post();

                      get_template_part('template-parts/content-news');

                  endwhile;
                endif;

                wp_reset_postdata(); 
              ?>


              <?php if (  $com_desk->max_num_pages > 1 ) : ?>
                <button class="btn btn--show news__btn news__btn--desk news__com">
                  Показать ещё
                </button>
              <?php endif; ?>
              
              <script>
                let true_posts_news_com = '<?php echo serialize($com_desk->query_vars); ?>';
                let current_page_news_com = '<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>';
                let max_pages_news_com = '<?php echo $com_desk->max_num_pages; ?>';
              </script>
              
              
            </div>
          </div>
          <div class="news__block news__block--bankruptcy">
            <div class="news__header">
              <h2 class="news__title">Новости о банкротстве</h2>
<!--
              <form class="filters-line">
                <span class="filters-line__lable">Популярное: </span>
                <div class="filters-line__best">
                  <div class="radio radio--link active">
                    <input class="radio__default" id="filter_1" type="radio" name="filter">
                    <label class="radio__label" for="filter_1">Результаты недели</label>
                  </div>
                  <div class="radio radio--link">
                    <input class="radio__default" id="filter_2" type="radio" name="filter">
                    <label class="radio__label" for="filter_2">Изменения в графике работы</label>
                  </div>
                </div>
                <div class="filters filters-line__filters" role="filters" aria-selected="true">
                  <div class="filters__btn">
                    <span class="filters__arrow"> </span>
                    <span class="filters__text">Рубрики</span>
                  </div>
                  <ul class="filters__list">
                    <?php
                      $tags = get_terms( array( 'taxonomy' => 'tags' ) );
                      if ( $tags ) :
                    ?>
                         
                      <?php foreach ( $tags as $tag ) : ?>

                        <li class="filters__item radio">
                          <input class="radio__default" id="0<?php echo $tag->term_id ?>" type="radio" name="filter">
                          <span class="radio__new"></span>
                          <label class="radio__label" for="0<?php echo $tag->term_id ?>"><?php echo $tag->name ?></label>
                        </li>

                      <?php endforeach; ?>
                    
                    <?php  
                      endif;
                    ?>
                  </ul>
                </div>
              </form>
-->
            </div>
            <div class="news__main news__main--bankruptcy">
             
              <?php 
                $args_ban_desk = ([
                  'posts_per_page' => '5',
                  'post_type'   => 'news',
                  'post_status' => 'publish',
                  'orderby' => 'meta_value',
                  'meta_key' => 'date_publication',
                  'order' => 'DESC',
                  'tax_query'   => [
                    [
                      'taxonomy'  => 'categories',
                      'field'     => 'slug',
                      'terms'     => 'bankruptcy'
                    ],
                  ],
                ]);

                $ban_desk = new WP_Query( $args_ban_desk );

                if( $ban_desk->have_posts() ) :
                  // затем запускаем цикл
                  while( $ban_desk->have_posts() ) : $ban_desk->the_post();

                      get_template_part('template-parts/content-news');

                  endwhile;
                endif;

                wp_reset_postdata(); 
              ?>


              <?php if (  $ban_desk->max_num_pages > 1 ) : ?>
                <button class="btn btn--show news__btn news__btn--desk news__bank">
                  Показать ещё
                </button>
              <?php endif; ?>
              
              <script>
                let true_posts_news_bank = '<?php echo serialize($ban_desk->query_vars); ?>';
                let current_page_news_bank = '<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>';
                let max_pages_news_bank = '<?php echo $ban_desk->max_num_pages; ?>';
              </script>

            </div>
          </div>

        </div>
        
        <div class="hidden">
            <?php the_posts_pagination($args); ?>
        </div>
        
        <button class="btn btn--show news__btn news__btn--double">
          <span class="btn__icon btn__icon--load">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#load"></use>
            </svg>
          </span>
          Показать ещё
        </button>

        
        
        <div class="news__block news__block--mobile">
          <div class="news__header">
            <h1 class="news__title">Новости компании</h1>
          </div>
          <div class="news__main news__main--company">
            
          <?php 
            $args_com_mob = ([
              'posts_per_page' => '3',
              'post_type'   => 'news',
              'post_status' => 'publish',
              'orderby' => 'meta_value',
              'meta_key' => 'date_publication',
              'order' => 'DESC',
              'tax_query'   => [
                [
                  'taxonomy'  => 'categories',
                  'field'     => 'slug',
                  'terms'     => 'company'
                ],
              ],
            ]);

            $com_mob = new WP_Query( $args_com_mob );

            if( $com_mob->have_posts() ) :
              // затем запускаем цикл
              while( $com_mob->have_posts() ) : $com_mob->the_post();

                  get_template_part('template-parts/content-news');

              endwhile;
            endif;

            wp_reset_postdata();   
          ?>
            
            
          <?php if (  $com_mob->max_num_pages > 1 ) : ?>
            <button class="btn btn--show news__btn news__com--mobile">
              <span class="btn__icon btn__icon--load">
                <svg>
                  <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#load"></use>
                </svg>
              </span>
              Показать ещё
            </button>
          <?php endif; ?>
            
          <script>
            let true_posts_news_com_mob = '<?php echo serialize($com_mob->query_vars); ?>';
            let current_page_news_com_mob = '<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>';
            let max_pages_news_com_mob = '<?php echo $com_mob->max_num_pages; ?>';
          </script>
          
          </div>
          
          
        </div>
        
      </div>
    </div>
    
<!--    Временно отключеный блок перехода Новости СМИ  -->
<!--    <?php get_template_part( 'inc/sections/block-news-media' ); ?>-->
    
    
    <div class="container">
      <div class="news__wrap">
        
        <div class="news__block news__block--mobile">
          <div class="news__header">
            <h1 class="news__title">Новости о банкротстве</h1>
          </div>
          <div class="news__main news__main--bankruptcy">
           
          <?php 
            $args_ban_mob = ([
              'numberposts' => '0',
              'posts_per_page' => '3',
              'post_type'   => 'news',
              'post_status' => 'publish',
              'orderby' => 'meta_value',
              'meta_key' => 'date_publication',
              'order' => 'DESC',
              'tax_query'   => [
                [
                  'taxonomy'  => 'categories',
                  'field'     => 'slug',
                  'terms'     => 'bankruptcy'
                ],
              ],
            ]);

            $ban_mob = new WP_Query( $args_ban_mob );

            if( $ban_mob->have_posts() ) :
              // затем запускаем цикл
              while( $ban_mob->have_posts() ) : $ban_mob->the_post();

                  get_template_part('template-parts/content-news');

              endwhile;
            endif;

            wp_reset_postdata();
          ?>
            
            
          <?php if (  $ban_mob->max_num_pages > 1 ) : ?>
            <button class="btn btn--show news__btn news__bank--mobile">
              <span class="btn__icon btn__icon--load">
                <svg>
                  <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#load"></use>
                </svg>
              </span>
              Показать ещё
            </button>
          <?php endif; ?>
           
           
          <script>
            let true_posts_news_bank_mob = '<?php echo serialize($ban_mob->query_vars); ?>';
            let current_page_news_bank_mob = '<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>';
            let max_pages_news_bank_mob = '<?php echo $ban_mob->max_num_pages; ?>';
          </script>
            
            
          </div>
        </div>
        
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>