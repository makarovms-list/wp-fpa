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

<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fpalaw
 */

get_header();
?>
 
  <main>
    <section class="section sngls">
      <div class="container">
        <div class="inner__head">
          <?php the_archive_title( '<h1 class="title-page">', '</h1>' ); ?>
<!--          <h1 class="title-page">Информация по банкротству</h1>-->
        </div>
        <div class="sngls__wrap">

          
          <?php if ( have_posts() ) : 
          
              /* Start the Loop */
              while ( have_posts() ) :
                  the_post();

                  get_template_part( 'template-parts/content', get_post_type() );

              endwhile;
                
              the_posts_pagination($args);
          
              else : 
          
          ?>
              
              <p>Записей нет.</p>
              
          <?php
            endif;
		  ?>
       
        </div>
      </div>
    </section>
  </main>

<?php
get_footer();
