<section class="section content-page">
  <div class="container">
   
   
    <?php the_content() ?>
    
    
    <div class="master__wrap master__wrap--dogovor">
      <div class="master__block master__block--person">
        <div class="master__person">
          <picture>
            <source srcset="<?= get_template_directory_uri() ?>/assets/img/services/humans/aleksej-yurevich_small.png" media="(max-width: 576px)">
            <source srcset="<?= get_template_directory_uri() ?>/assets/img/services/humans/aleksej-yurevich_medium.png" media="(max-width: 992px)">
            <img src="<?= get_template_directory_uri() ?>/assets/img/services/humans/aleksej-yurevich.png" alt="Фото специалиста" title="Головин Алексей Юрьевич" loading="lazy">
          </picture>
        </div>
      </div>
      <div class="master__block master__block--content" data-master="4">
        <div class="master__title master__title--big">
          Возникли вопросы?
        </div>
        <div class="master__text master__text--big">
          Если у вас возникли вопросы по договору или процедуре,
          вы можете связаться с нами любым удобным способом:
        </div>
        <div class="master__link"><a href="mailto:<? echo do_shortcode('[sc name="email"]'); ?>"><? echo do_shortcode('[sc name="email"]'); ?></a></div>
        <div class="master__link master__link--phone">
          <a href="tel:<? echo do_shortcode('[sc name="phone-link-1"]'); ?>"><? echo do_shortcode('[sc name="phone-1"]'); ?></a>
        </div>
      </div>
    </div>
    
  </div>
</section>