<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fpalaw
 */

?>


<article class="sngls__item">
  <a class="sngls__link" href="<?php the_permalink() ?>">
    <div class="sngls__image">
      <?php the_post_thumbnail()?>
    </div>
    <div class="sngls__content">
      <h2 class="sngls__title"><?php the_title() ?></h2>
      <div class="sngls__footer">
        <span class="sngls__data"><?php the_field('date_publ'); ?></span>
      </div>
    </div>
  </a>
</article>


