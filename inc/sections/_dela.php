<?php $cases__total = wp_count_posts('dela')->publish; ?> 

<div class="inner">
  <div class="container">
    <div class="inner__head">
      <h1 class="title-page">Более 8500 дел находятся в работе на текущий момент.<br> Ознакомьтесь с делами, по которым уже завершена работа и все долги клиентов списаны.</h1>
    </div>
    <div class="inner__wrap">
      <div class="inner__row">
        <div class="inner__block inner__block--aside">
          <aside class="aside">
            
            <?php get_template_part( 'inc/aside/form-dela' ); ?> 
            <?php get_template_part( 'inc/aside/guarantees' ); ?> 
            
          </aside>
        </div>
        <div class="inner__block inner__block--main">
          <main>
            <div class="cases">
              <div class="cases__wrap">
               
                <?php 
                  $args_dela = ([
                    'posts_per_page' => '10',
                    'post_type'   => 'dela',
                    'post_status' => 'publish',
                    'orderby' => 'meta_value',
                    'meta_key' => 'сase_number',
                    'order' => 'DESC'
                  ]);

                  $dela = new WP_Query( $args_dela );

                  if( $dela->have_posts() ) :

                    while( $dela->have_posts() ) : $dela->the_post();

                        get_template_part('template-parts/content-dela');

                    endwhile;
                  endif;

                  wp_reset_postdata(); 
                ?>
                
                <?php if ( $dela->max_num_pages > 1 ) : ?>
                  <button class="btn btn--show btn--cases">
                    <span class="btn__loader btn-loader hidden">
                      <span class="btn-loader__point btn-loader__point--1"></span>
                      <span class="btn-loader__point btn-loader__point--2"></span>
                      <span class="btn-loader__point btn-loader__point--3"></span>
                    </span>
                    <span class="btn__text">
                      <span class="btn__icon btn__icon--load">
                        <svg>
                          <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#load"></use>
                        </svg>
                      </span>
                      Показать ещё&nbsp;
                      <span class="cases__posts">10</span>&nbsp;из&nbsp;
                      <? echo do_shortcode('[sc name="total-cases"]'); ?>
                    </span>
                  </button>
                <?php endif; ?>

                <script>
                  let true_posts_dela = '<?php echo serialize($dela->query_vars); ?>';
                  let current_page_dela = '<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>';
                  let max_pages_dela = '<?php echo $dela->max_num_pages; ?>';
                </script>
                
                <div class="cases__add-block cases__add-block--graph">
                
                    <?php get_template_part( 'inc/sections/graph-dela' ); ?> 

                </div>
                
                <div class="cases__add-block cases__add-block--form"></div>
                
              </div>
              
            </div>
          </main>
        </div>
      </div>
    </div>
  </div>
</div>