
<div class="inner">
 
  <div class="container">
    <div class="inner__wrap">
     
      <div class="inner__row">
       
        <div class="inner__block inner__block--aside">
          <aside class="aside">
            
            <?php get_template_part( 'inc/aside/social' ); ?> 
            <?php get_template_part( 'inc/aside/guarantees' ); ?> 
            
          </aside>
        </div>
        
        <div class="inner__block inner__block--main">
          <main>
           
            <div class="news news--media">
             
              <div class="news__header news__header--mmedia">
                <h1 class="title-page title-page--acticle">Доверяют нашей компетенции</h1>
              </div>
              
              <div class="news__media mmedia">
                <ul class="mmedia__list">
                  <li class="mmedia__item mmedia__item--vedom">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#Vedomosti"></use>
                    </svg>
                  </li>
                  <li class="mmedia__item mmedia__item--inter">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#Interfax"></use>
                    </svg>
                  </li>
                  <li class="mmedia__item mmedia__item--poss">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#Rossiya-24"></use>
                    </svg>
                  </li>
                  <li class="mmedia__item mmedia__item--kp">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#KP"></use>
                    </svg>
                  </li>
                  <li class="mmedia__item mmedia__item--kom">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#Kommersant"></use>
                    </svg>
                  </li>
                  <li class="mmedia__item mmedia__item--perv">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#Pervyj"></use>
                    </svg>
                  </li>
                </ul>
              </div>
              
              <div class="news__main news__main--mmedia">
                
                <?php 
                  query_posts([
                      'numberposts' => '0',
                      'posts_per_page' => '3',
                      'post_type'   => 'news',
                      'post_status' => 'publish',
                      'tax_query'      => [
                        [
                          'taxonomy' => 'categories',
                          'field' => 'slug',
                          'terms' => 'smi'
                        ],
                      ],
                    ]);
                  if( have_posts() ){
                      while( have_posts() ){
                          the_post();
                          get_template_part('template-parts/content-smi');
                      }
                      wp_reset_query();
                  }
                           
                ?>

                <script>
                  let true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                  let current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                  let max_pages = '<?php echo $wp_query->max_num_pages; ?>';
                </script>

                <button class="btn btn--show" id="loadmore">
                  <span class="btn__icon btn__icon--load">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#load"></use>
                    </svg>
                  </span>
                  Показать ещё
                </button>
                  
                
              </div>

            </div>
            
            <div class="news__add-block"></div>
            
          </main>
        </div>
        
      </div>
      
    </div>
  </div>
  
</div>