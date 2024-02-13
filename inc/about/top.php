<?php 
  $top = get_field('top_sections'); 
  $list = $top['list']
?>
<style>
body.page-template-about .section.top-m .section_top-m-bg {
	position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
	z-index: 2;
	background-size: cover;
    background-position: center bottom;
    background-repeat: no-repeat;
    opacity: .08;
}
.top-m::before {
	display: none;
}
</style>
<section class="section section--main top-m">
  <div style="background-image: url('/wp-content/themes/fpalaw/assets/img/top/bg.webp')" data-bg="/wp-content/themes/fpalaw/assets/img/top/bg.png" data-bg-webp="/wp-content/themes/fpalaw/assets/img/top/bg.webp" class="section_top-m-bg"></div>
  <div class="container">
    <div class="top-m__wrap">
      <div class="top-m__content">
        <h1 class="top-m__title"><?php echo $top['title']; ?></h1>
        <p class="top-m__text"><?php echo $top['text']; ?></p>
        <button class="btn top-m__btn callback-btn"><?php echo $top['text_btn']; ?> <span class="btn__highlights"></span></button>
        <ul class="top-m__lst">
          <li class="top-m__lst-item">
            <span class="top-m__lst-name"><?php echo $list['name_1']; ?></span>
            <span class="top-m__lst-text"><?php echo $list['description_1']; ?></span>
          </li>
          <li class="top-m__lst-item">
            <span class="top-m__lst-name"><?php echo $list['name_2']; ?></span>
            <span class="top-m__lst-text"><?php echo $list['description_2']; ?></span>
          </li>
          <li class="top-m__lst-item">
            <span class="top-m__lst-name"><?php echo $list['name_3']; ?></span>
            <span class="top-m__lst-text"><?php echo $list['description_3']; ?></span>
          </li>
        </ul>
      </div>
	  <!--
      <picture>
        <img class="top-m__image" alt="Фото руководителя юридического департамента по банкротству" src="<?= get_template_directory_uri() ?>/assets/img/top/ilya-viktorovich.png">
      </picture>
	  -->
	  <?php echo wp_get_attachment_image( $top['image']['ID'], 'full', false, array('class'  => 'top-m__image') ); ?>
    </div>
  </div>
</section>
