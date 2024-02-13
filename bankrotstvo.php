<?php
  /*
    Template Name: Пошаговая инструкция банкротства
    Template Post Type: page
  */
?>
<?php 
    get_header();
    get_template_part( 'inc/bankrotstvo/content-head' );
    get_template_part( 'inc/bankrotstvo/content-content' );
    get_template_part( 'inc/bankrotstvo/related-video' );
    get_template_part( 'inc/bankrotstvo/related-info' );
    get_template_part( 'inc/sections/contact-form' );
    get_footer(); 
?>