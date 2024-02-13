<section class="related">
 
  <h2 class="related__title">Похожие новости</h2>
  
  <div class="related__wrap">
    <div class="swiper-container swiper-related">
      <div class="swiper-wrapper">
        <?php
          global $post;

          // тут можно указать post_tag (подборка постов по схожим меткам) или даже массив array('category', 'post_tag') - подборка и по меткам и по категориям
          $related_tax1 = 'categories';
          $related_tax2 = 'tags';

          // получаем ID всех элементов (категорий, меток или таксономий), к которым принадлежит текущий пост
          $cats_tags_or_taxes1 = wp_get_object_terms( $post->ID, $related_tax1, array( 'fields' => 'ids' ) );
          $cats_tags_or_taxes2 = wp_get_object_terms( $post->ID, $related_tax2, array( 'fields' => 'ids' ) );

          $args = ([
            'posts_per_page' => 4, // сколько похожих постов нужно вывести,
            'post__not_in' => array($post->ID),
            'tax_query' => [
              'relation' => 'OR',
              [
                'taxonomy' => $related_tax1,
                'field' => 'id',
                'include_children' => false, // нужно ли включать посты дочерних рубрик
                'terms' => $cats_tags_or_taxes1,
                'operator' => 'IN' // если пост принадлежит хотя бы одной рубрике текущего поста, он будет отображаться в похожих записях, укажите значение AND и тогда похожие посты будут только те, которые принадлежат каждой рубрике текущего поста
              ],
              [
                'taxonomy' => $related_tax2,
                'field' => 'id',
                'include_children' => false, // нужно ли включать посты дочерних рубрик
                'terms' => $cats_tags_or_taxes2,
                'operator' => 'IN' // если пост принадлежит хотя бы одной рубрике текущего поста, он будет отображаться в похожих записях, укажите значение AND и тогда похожие посты будут только те, которые принадлежат каждой рубрике текущего поста
              ],
            ]
          ]);
          $fpalaw_query = new WP_Query( $args );

          // если посты, удовлетворяющие нашим условиям, найдены
          if( $fpalaw_query->have_posts() ) :

              // запускаем цикл
              while( $fpalaw_query->have_posts() ) : $fpalaw_query->the_post();
                  get_template_part('template-parts/content-related');
              endwhile;

          endif;

          // не забудьте про эту функцию, её отсутствие может повлиять на другие циклы на странице
          wp_reset_postdata();
        ?>
      </div>
    </div>
    <div class="swiper-button-next">
      <svg>
        <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#arrow-swiper"></use>
      </svg>
    </div>
    <div class="swiper-button-prev">
      <svg>
        <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#arrow-swiper"></use>
      </svg>
    </div>
  </div>
</section>