<?php
  $specialist = get_field('specialist');
?>
<section class="section section--main bottom-m">
  <div class="container">
    <h2 class="visually-hidden"><?php echo $specialist['slogan']; ?></h2>
    <div class="master__wrap">
      <div class="master__block master__block--person">
        <div class="master__person">
		  <?php echo wp_get_attachment_image( $specialist['image']['ID'], 'full', false, array('alt'  => 'Фото специалиста', 'title'  => 'Головин Алексей Юрьевич') ); ?>
		  <!--
          <picture>
            <source srcset="<?= get_template_directory_uri() ?>/assets/img/services/humans/aleksej-yurevich_medium.png" media="(max-width: 992px)">
            <img src="<?= get_template_directory_uri() ?>/assets/img/services/humans/aleksej-yurevich.png" alt="Фото специалиста" title="Головин Алексей Юрьевич" loading="lazy">
          </picture>
		  -->
        </div>
        <div class="plashka-ver-second__cnt">
            <div class="name"><?php echo $specialist['fio']; ?></div>
            <p class="master__post" style="margin-bottom: 0;"><?php echo $specialist['post']; ?> <span class="hint"><span class="hint__toggle"><?php echo $specialist['tooltip']; ?></span></span></p>
        </div>
      </div>
      <div class="master__block master__block--content" data-master="4">
        <span class="master__note"><?php echo $specialist['slogan']; ?></span>
        <p class="master__title master__title--big"><?php echo $specialist['text']; ?></p>
        <!--
        <p class="master__name"><?php echo $specialist['fio']; ?></p>
        <p class="master__post"><?php echo $specialist['post']; ?> <span class="hint">
            <span class="hint__toggle"><?php echo $specialist['tooltip']; ?></span>
          </span>
        </p>
        -->
        <?php echo do_shortcode( '[contact-form-7 id="1649" title="Нижняя секция на странице О нас - Начните работу над долгом прямо сейчас!" html_class="form--width-100"]' ); ?>
        <div class="politics">
          <span class="politics__icon">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#shild"></use>
            </svg>
          </span>
          <p class="politics__text">Мы гарантируем безопасность и сохранность Ваших данных. Нажимая на кнопку, вы даете согласие на обработку своих персональных данных в соответствии с <a href="<?= get_permalink(123) ?>">«Политикой конфиденциальности»</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>