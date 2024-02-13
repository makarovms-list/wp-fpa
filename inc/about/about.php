<?php 
  $about = get_field('about'); 
?>
<section class="section section--main about">
  <div class="container">
    <h2 class="title-page"><?php echo $about['title']; ?></h2>
    <ul class="about__lst">
      <li class="about__item">
        <span class="about__icon">
          <!--<span class="about__image about__image--1" style="background-image: url(<?php echo esc_url( $about['foto_1'] ); ?>);"></span>-->
		  <span class="about__image about__image--1">
			<?php echo wp_get_attachment_image( $about['foto_1']['ID'], 'full'); ?>
		  </span>
          <span class="about__number"> </span>
        </span>
        <span class="about__text"><?php echo $about['text_1']; ?></span>
        <button class="no-btn about__btn-link"><?php echo $about['btn_1']; ?><span class="arrow"></span></button>
      </li>
      <!--
      <li class="about__item">
        <span class="about__icon">
          !--<span class="about__image about__image--2" style="background-image: url(<?php echo esc_url( $about['foto_2'] ); ?>);"></span>--
		  <span class="about__image about__image--2">
			<?php echo wp_get_attachment_image( $about['foto_2']['ID'], 'full'); ?>
		  </span>
          <span class="about__number"> </span>
        </span>
        <span class="about__text"><?php echo $about['text_2']; ?></span>
        <button class="no-btn about__btn-link"><?php echo $about['btn_2']; ?><span class="arrow"></span></button>
      </li>
      <li class="about__item">
        <span class="about__icon">
          !--<span class="about__image about__image--3" style="background-image: url(<?php echo esc_url( $about['foto_3'] ); ?>);"></span>--
		  <span class="about__image about__image--3">
			<?php echo wp_get_attachment_image( $about['foto_3']['ID'], 'full'); ?>
		  </span>
          <span class="about__number"> </span>
        </span>
        <span class="about__text"><?php echo $about['text_3']; ?></span>
        <button class="no-btn about__btn-link"><?php echo $about['btn_3']; ?><span class="arrow"></span></button>
      </li>
      -->
      <li class="about__item">
        <span class="about__icon">
          <!--<span class="about__image about__image--4" style="background-image: url(<?php echo esc_url( $about['foto_4'] ); ?>);"></span>-->
		  <span class="about__image about__image--4">
			<?php echo wp_get_attachment_image( $about['foto_4']['ID'], 'full'); ?>
		  </span>
          <span class="about__number"> </span>
        </span>
        <span class="about__text"><?php echo $about['text_4']; ?></span>
        <button class="no-btn about__btn-link"><?php echo $about['btn_4']; ?><span class="arrow"></span></button>
      </li>
      <!--
      <li class="about__item">
        <span class="about__icon">
          !--<span class="about__image about__image--5" style="background-image: url(<?php echo esc_url( $about['foto_5'] ); ?>);"></span>--
		  <span class="about__image about__image--5">
			<?php echo wp_get_attachment_image( $about['foto_5']['ID'], 'full'); ?>
		  </span>
          <span class="about__number"> </span>
        </span>
        <span class="about__text"><?php echo $about['text_5']; ?></span>
        <button class="no-btn about__btn-link"><?php echo $about['btn_5']; ?><span class="arrow"></span></button>
      </li>
      -->
      <li class="about__item">
        <span class="about__icon">
          <!--<span class="about__image about__image--6" style="background-image: url(<?php echo esc_url( $about['foto_6'] ); ?>);"></span>-->
		  <span class="about__image about__image--6">
			<?php echo wp_get_attachment_image( $about['foto_6']['ID'], 'full'); ?>
		  </span>
          <span class="about__number"> </span>
        </span>
        <span class="about__text"><?php echo $about['text_6']; ?></span>
        <button class="no-btn about__btn-link"><?php echo $about['btn_6']; ?><span class="arrow"></span></button>
      </li>
      <li class="about__item">
        <span class="about__icon">
          <!--<span class="about__image about__image--7" style="background-image: url(<?php echo esc_url( $about['foto_7'] ); ?>);"></span>-->
		  <span class="about__image about__image--7">
			<?php echo wp_get_attachment_image( $about['foto_7']['ID'], 'full'); ?>
		  </span>
          <span class="about__number"> </span>
        </span>
        <span class="about__text"><?php echo $about['text_7']; ?></span>
        <button class="no-btn about__btn-link"><?php echo $about['btn_7']; ?><span class="arrow"></span></button>
      </li>
      <li class="about__item">
        <span class="about__icon">
          <!--<span class="about__image about__image--8" style="background-image: url(<?php echo esc_url( $about['foto_8'] ); ?>);"></span>-->
		  <span class="about__image about__image--8">
			<?php echo wp_get_attachment_image( $about['foto_8']['ID'], 'full'); ?>
		  </span>
          <span class="about__number"> </span>
        </span>
        <span class="about__text"><?php echo $about['text_8']; ?></span>
        <button class="no-btn about__btn-link"><?php echo $about['btn_8']; ?><span class="arrow"></span></button>
      </li>
      <li class="about__item">
        <span class="about__icon">
          <!--<span class="about__image about__image--9" style="background-image: url(<?php echo esc_url( $about['foto_9'] ); ?>);"></span>-->
		  <span class="about__image about__image--9">
			<?php echo wp_get_attachment_image( $about['foto_9']['ID'], 'full'); ?>
		  </span>
          <span class="about__number"> </span>
        </span>
        <span class="about__text"><?php echo $about['text_9']; ?></span>
        <button class="no-btn about__btn-link"><?php echo $about['btn_9']; ?><span class="arrow"></span></button>
      </li>
    </ul>
    <button class="btn btn--services about__btn" data-btn="<?php echo $about['btn_text']; ?>" data-sms="24" data-thanks="10">
      <span><?php echo $about['btn_text']; ?></span>
      <span class="btn__highlights"></span>
    </button>
    <div class="modal-content">
      <div class="mod-content__title"><?php echo $about['btn_text']; ?></div>
    </div>
  </div>
</section>