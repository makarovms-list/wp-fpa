<?php
  /*
    Template Name: О нас
    Template Post Type: page
  */
?>


<?php get_header(); ?>
  <script src="//code.jivo.ru/widget/FUQrTJWICf" async></script>
  <main>
    <?php get_template_part( 'inc/about/top' ); ?> 
    <?php get_template_part( 'inc/about/history' ); ?> 
    <?php get_template_part( 'inc/about/staff' ); ?> 
    <?php get_template_part( 'inc/about/about' ); ?> 
    <?php get_template_part( 'inc/about/results' ); ?> 
    <?php get_template_part( 'inc/about/quote' ); ?> 
    <?php get_template_part( 'inc/about/licenses' ); ?> 
    <?php get_template_part( 'inc/about/bottom' ); ?> 
  </main>
	
<?php get_footer(); ?>