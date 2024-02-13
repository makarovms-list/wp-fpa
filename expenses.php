<?php
  /*
    Template Name: Расходы на банкротство
    Template Post Type: page
  */
?>

<?php get_header(); ?>
  
  <div class="expenses">
    <div class="container">
      <h1 class="title-page title-page--left"><?php the_title(); ?></h1>
    </div>
    <div class="container expenses__container">
     
      <?php the_content() ?>

    </div>
  </div>
	
<?php get_footer(); ?>