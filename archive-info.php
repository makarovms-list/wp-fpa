<?php get_header(); ?>
<style>
.articles__item:nth-child(15n+9) {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 100%;
    flex: 0 1 auto;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
    -ms-flex-direction: row-reverse;
    flex-direction: row-reverse;
    width: calc(33% - 30px);
}
.articles__item:nth-child(15n+9) .articles__link {
    max-width: 100%;
    margin-left: 0px;
}
.articles__item:nth-child(15n+9) .articles__footer {
    width: 100%;
}
@media screen and (max-width: 992px) {
    .articles__item:nth-child(15n+9) {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 100%;
        flex: 0 1 auto;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: reverse;
        -ms-flex-direction: row-reverse;
        flex-direction: row-reverse;
        width: calc(50% - 20px);
    }
	.articles__item:nth-child(15n+9) .articles__link {
		-webkit-box-flex: 1;
		-ms-flex: 1 0 385px;
		flex: 1 0 385px;
		max-width: 100%;
		margin-left: 20px;
	}
	.articles__item:nth-child(15n+9) .articles__footer {
		width: 100%;
	}
}
@media screen and (max-width: 768px) {
    .articles__item:nth-child(15n+9) {
        flex-direction: column-reverse;
        width: 100%;
    }
    .articles__item:nth-child(15n+9) .articles__link {
        margin-left: 0px;
    }
}

</style>
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
  <div class="breadcrumbs">
    <div class="container breadcrumbs__container">
	  <?php
		if ( function_exists('yoast_breadcrumb') ) {
          /*yoast_breadcrumb( '<div id="breadcrumbs">','</div>' );*/
        }
	  ?>
	  <div id="breadcrumbs">
	    <?php
		  do_action('pretty_breadcrumb');
	    ?>
	  </div>
    </div>
  </div>
  
  <section class="section articles">
    <div class="container">
      <h1 class="title-page title-page--tiny title-page--left">Всё о банкротстве</h1>
      <div class="articles__block articles__block--settings">
        <form class="filters-line filters-line--new">
          <div class="filters-line__inner">
            <div class="filters-line__block">
              <div class="filters-line__title">Рубрики</div>
              <div class="filters-line__categories">
                <?php
                  $tags = get_terms('markname');
                  //$current_tag_id = get_queried_object()->term_id;
                  foreach ( $tags as $tag ) {
                    echo '<a href="' . get_term_link($tag) . '">' . $tag->name . '</a>';
                  }
                ?>
              </div>
              <button class="no-btn btn-show-category">
                <span class="btn-show-category__text">Все рубрики</span>
                <span class="btn-show-category__arrow"></span>
              </button>
            </div>
            <div class="filters-line__block filters-line__block--aside">
              <div class="filters-line__title">Сортировка</div>
              <div class="filters-line__sort">
                <div class="btn-select">
                  <button class="no-btn btn-select__btn">
                    <span class="btn-select__text">По дате</span>
                    <span class="btn-select__arrow"> </span>
                  </button>
                  <ul class="btn-select__list">
                    <li class="btn-select__item radio radio--btn">
                      <input class="radio__default" id="sort_0" type="radio" name="sort" value="date_publ" checked>
                      <label class="radio__label" for="sort_0">По дате</label>
                    </li>
                    <li class="btn-select__item radio radio--btn">
                      <input class="radio__default" id="sort_1" type="radio" name="sort" value="rating_single">
                      <label class="radio__label" for="sort_1">По популярности</label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </form>
        
<!--
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
-->
      </div>
      
      <div class="articles__block articles__block--posts">
        <div class="articles__wrap">
          
          
          <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          
            $args_info = ([
              'posts_per_page' => '11',
              'posts_per_archive_page' => '11',
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

<?php get_footer(); ?>