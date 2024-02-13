<?php 
  $licenses = get_field('licenses'); 
?>
<section class="section section--main licenses">
  <div class="container">
    <h2 class="title-page"><?php echo $licenses['title']; ?></h2>
    <ul class="licenses__lst">
      <li class="licenses__item">
        <!--<a class="licenses__link" href="<?= get_template_directory_uri() ?>/assets/img/licenses/1.jpg" data-fancybox="gallery-1">-->
		<a class="licenses__link" href="<?php echo $licenses['license_1']['url']; ?>" data-fancybox="gallery-1">
		  <?php echo wp_get_attachment_image( $licenses['license_1']['ID'], 'full', false, array('alt'  => 'Фото документа') ); ?>
		<!--
          <picture>
            <img src="<?= get_template_directory_uri() ?>/assets/img/licenses/1.jpg" alt="Фото документа" loading="lazy">
          </picture>
		-->
        </a>
      </li>
      <li class="licenses__item">
	    <a class="licenses__link" href="<?php echo $licenses['license_2']['url']; ?>" data-fancybox="gallery-1">
		  <?php echo wp_get_attachment_image( $licenses['license_2']['ID'], 'full', false, array('alt'  => 'Фото документа') ); ?>
		</a>
      </li>
      <li class="licenses__item">
	    <a class="licenses__link" href="<?php echo $licenses['license_3']['url']; ?>" data-fancybox="gallery-1">
		  <?php echo wp_get_attachment_image( $licenses['license_3']['ID'], 'full', false, array('alt'  => 'Фото документа') ); ?>
		</a>
      </li>
      <li class="licenses__item">
	    <a class="licenses__link" href="<?php echo $licenses['license_4']['url']; ?>" data-fancybox="gallery-1">
		 <?php echo wp_get_attachment_image( $licenses['license_4']['ID'], 'full', false, array('alt'  => 'Фото документа') ); ?>
		</a>
      </li>
      <li class="licenses__item">
	    <a class="licenses__link" href="<?php echo $licenses['license_5']['url']; ?>" data-fancybox="gallery-1">
		  <?php echo wp_get_attachment_image( $licenses['license_5']['ID'], 'full', false, array('alt'  => 'Фото документа') ); ?>
		</a>
      </li>
      <li class="licenses__item">
	    <a class="licenses__link" href="<?php echo $licenses['license_6']['url']; ?>" data-fancybox="gallery-1">
		  <?php echo wp_get_attachment_image( $licenses['license_6']['ID'], 'full', false, array('alt'  => 'Фото документа') ); ?>
		</a>
      </li>
    </ul>
  </div>
  <div class="licenses__slider">
    <div class="swiper-container swiper-licenses">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="licenses__item">
            <a class="licenses__link" href="<?php echo $licenses['license_1']['url']; ?>" data-fancybox="gallery-2">
			  <?php echo wp_get_attachment_image( $licenses['license_1']['ID'], 'full', false, array('alt'  => 'Фото документа') ); ?>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="licenses__item">
            <a class="licenses__link" href="<?php echo $licenses['license_2']['url']; ?>" data-fancybox="gallery-2">
			  <?php echo wp_get_attachment_image( $licenses['license_2']['ID'], 'full', false, array('alt'  => 'Фото документа') ); ?>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="licenses__item">
            <a class="licenses__link" href="<?php echo $licenses['license_3']['url']; ?>" data-fancybox="gallery-2">
			  <?php echo wp_get_attachment_image( $licenses['license_3']['ID'], 'full', false, array('alt'  => 'Фото документа') ); ?>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="licenses__item">
            <a class="licenses__link" href="<?php echo $licenses['license_4']['url']; ?>" data-fancybox="gallery-2">
			  <?php echo wp_get_attachment_image( $licenses['license_4']['ID'], 'full', false, array('alt'  => 'Фото документа') ); ?>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="licenses__item">
            <a class="licenses__link" href="<?php echo $licenses['license_5']['url']; ?>" data-fancybox="gallery-2">
			  <?php echo wp_get_attachment_image( $licenses['license_5']['ID'], 'full', false, array('alt'  => 'Фото документа') ); ?>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="licenses__item">
            <a class="licenses__link" href="<?php echo $licenses['license_6']['url']; ?>" data-fancybox="gallery-2">
			  <?php echo wp_get_attachment_image( $licenses['license_6']['ID'], 'full', false, array('alt'  => 'Фото документа') ); ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>