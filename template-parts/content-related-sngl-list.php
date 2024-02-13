<li class="related-single__item">
  <a class="related-single__link" href="<?php the_permalink() ?>">
    <div class="related-single__image">
      <?php the_post_thumbnail( 'post_thumb' )?>
    </div>
    <div class="related-single__content">
      <h4 class="related-single__name"><?php the_title() ?></h4>
    </div>
  </a>
</li>