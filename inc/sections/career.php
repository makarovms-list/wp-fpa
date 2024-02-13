<section class="career">
  <div class="container">
    <h2 class="visually-hidden">Карьера в нашей компании</h2>
    <div class="career__wrap">
     
      <div class="career__block career__block--aside">
        <aside class="aside">
         
          <?php get_template_part( 'inc/aside/hh-block' ); ?> 
          
        </aside>
      </div>
      
      <div class="career__block career__block--main">
        <h1 class="career__title visually-hidden">Карьера в нашей компании «Финансово-правовой альянс»</h1>
        <div class="career__info">
          <h2 class="career__subtitle"><?php the_field('career_title_1'); ?></h2>
          <div class="career__content">
            <?php the_field('career_text_1'); ?>
          </div>
        </div>
        <div class="career__info">
          <h2 class="career__subtitle"><?php the_field('career_title_2'); ?></h2>
          <div class="career__content">
            <?php the_field('career_text_2'); ?>
          </div>
        </div>
        <div class="career__info">
          <h2 class="career__subtitle"><?php the_field('career_title_3'); ?></h2>
          <div class="career__content">
            <?php the_field('career_text_3'); ?>
          </div>
          
<!--          <?php get_template_part( 'inc/sections/career-slider' ); ?> -->
          
        </div>
        <div class="career__info">
          <h3 class="career__subtitle"><?php the_field('career_title_4'); ?></h3>
          <div class="career__content">
            <?php the_field('career_text_4'); ?>
          </div>
        </div>
        <div class="career__info">
          <h3 class="career__subtitle"><?php the_field('career_title_5'); ?></h3>
          <div class="career__content">
            <?php the_field('career_text_5'); ?>
          </div>
        </div>
        <div class="career__info">
          <h3 class="career__subtitle"><?php the_field('career_title_6'); ?></h3>
          <div class="career__content">
            <?php the_field('career_text_6'); ?>
          </div>
        </div>
      </div>
      
    </div>
    
    <?php get_template_part( 'inc/sections/vacancies' ); ?> 
    <?php get_template_part( 'inc/sections/vacancies-new' ); ?> 
    
  </div>
</section>