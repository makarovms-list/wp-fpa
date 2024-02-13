<?php
  /*
    Template Name: Страница Эксперт
    Template Post Type: page
  */
?>

   
<?php get_header(); ?>
    
<div class="inner inner--mobile">
    <div class="container">
        <div class="inner__wrap">
            <div class="inner__row inner__row--mobile">
                <div class="inner__block inner__block--aside-thanks">
                    <aside class="aside">
                        <?php get_template_part( 'inc/aside/lawyer-expert' ); ?>
                    </aside>
                </div>
                <div class="inner__block inner__block--main">
                    <main>
                        <?php get_template_part( 'inc/sections/thanks-expert' ); ?>
                    </main>
                </div>
            </div>
            <div class="inner__row inner__row--mobile">
                <div class="inner__block inner__block--aside-thanks">
                    <aside class="aside">
                        <?php get_template_part( 'inc/aside/lawyer-form' ); ?>
                    </aside>
                </div>
                <div class="inner__block inner__block--main">
                    <main>
                        <?php get_template_part( 'inc/sections/expert-media-publications' ); ?>
                        <?php get_template_part( 'inc/sections/expert-company-publications' ); ?>
                        <?php get_template_part( 'inc/sections/expert-video-publications' ); ?>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>