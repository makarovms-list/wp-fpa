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
<main>
  <section class="section articles">
    <div class="container">
      <h1 class="title-page title-page--tiny title-page--left">Все статьи</h1>
      
<!--
      <div class="articles__block articles__block--settings">
        <form class="filters-line filters-line--show" id="filters" action="" method="POST">
          <span class="filters-line__lable">Популярное:</span>
          <div class="filters-line__inner">
            <div class="filters-line__best">
              <?php
                $tags = get_terms('markname', 'include=76,67,58,59,60');

                foreach ( $tags as $tag ) {
                  echo '<a href="' . get_term_link($tag) . '">' . $tag->name . '</a>';
                }
              ?>
            </div>
            <div class="filters filters-line__filters" role="filters" aria-selected="true" value="">
              <div class="filters__btn">
                <span class="filters__arrow"> </span>
                <span class="filters__text">Фильтр</span>
              </div>
              <ul class="filters__list">
                <?php
                  $tags = get_terms('markname');
                  
                  foreach ( $tags as $tag ) {
                    echo '<li class="filters__item filters__item--link"><a href="' . get_term_link($tag) . '">' . $tag->name . '</a></li>';
                  }
                ?>
              </ul>
            </div>
          </div>
        </form>
      </div>
-->
      
      <div class="articles__block articles__block--posts">
        <div class="articles__wrap">
          
          
          <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          
            $args_info = ([
              'posts_per_page' => '9',
              'posts_per_archive_page' => '9',
              'post_type'   => 'info',
              'post_status' => 'publish',
              'orderby' => 'meta_value',
              'meta_key' => 'date_publ',
              'order' => 'DESC',
              'paged' => $paged
            ]);

            $info = new WP_Query( $args_info );

            if( $info->have_posts() ) :
              // затем запускаем цикл
              while( $info->have_posts() ) : $info->the_post();

                  get_template_part('template-parts/content-info');

              endwhile;
          
              the_posts_pagination($args);
          
            endif;
          
            wp_reset_postdata(); 
          ?>
          
        </div>
        
        
<!--
        <nav class="navigation pagination" role="navigation">
          <div class="nav-links">
            <a class="prev page-numbers" href="/"></a>
            <span class="page-numbers current">1</span>
            <a class="page-numbers" href="/">2</a>
            <span class="page-numbers dots">…</span>
            <a class="page-numbers" href="/">98</a>
            <a class="page-numbers" href="/">99</a>
            <a class="next page-numbers" href="/"></a>
          </div>
        </nav>
-->
        
      </div>
      
      
      <div class="articles__block articles__block--hidden">
       
        <?php get_template_part( 'inc/sections/yandex-zen' ); ?>
        
      </div>
      
    </div>
  </section>
  
  <?php get_template_part( 'inc/bottom/info-reviews' ); ?>
  <?php get_template_part( 'inc/bottom/questions' ); ?>
  
</main>