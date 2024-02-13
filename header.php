<!doctype html>

<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile# fb: http://ogp.me/ns/fb#">

  <?php get_template_part( 'inc/sections/head' ); ?> 

  <body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
    
    <?php get_template_part( 'inc/metrics/metrics' ); ?> 

   
    <div class="wrapper">

      <?php get_template_part( 'inc/sections/header' ); ?>
      <?php get_template_part( 'inc/sections/navbar' ); ?>