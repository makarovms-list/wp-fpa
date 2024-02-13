<?php 
  $help = get_field('help', 374); 
?>
<section id="services_help" class="section--services help">
  <div class="container">
    <h2 class="title-page"><?php echo $help['title']; ?></h2>
    <ul class="help__lst">
      <li class="help__item">
        <span class="help__icon" style="background-image: url(<?php echo esc_url( $help['icon_1'] ); ?>);"></span>
        <span class="help__name"><?php echo $help['name_1']; ?></span>
        <span class="help__desc"><?php echo $help['text_1']; ?></span>
      </li>
      <li class="help__item">
        <span class="help__icon" style="background-image: url(<?php echo esc_url( $help['icon_2'] ); ?>);"></span>
        <span class="help__name"><?php echo $help['name_2']; ?></span>
        <span class="help__desc"><?php echo $help['text_2']; ?></span>
      </li>
      <li class="help__item">
        <span class="help__icon" style="background-image: url(<?php echo esc_url( $help['icon_3'] ); ?>);"></span>
        <span class="help__name"><?php echo $help['name_3']; ?></span>
        <span class="help__desc"><?php echo $help['text_3']; ?></span>
      </li>
      <li class="help__item">
        <span class="help__icon" style="background-image: url(<?php echo esc_url( $help['icon_4'] ); ?>);"></span>
        <span class="help__name"><?php echo $help['name_4']; ?></span>
        <span class="help__desc"><?php echo $help['text_4']; ?></span>
      </li>
      <li class="help__item">
        <span class="help__icon" style="background-image: url(<?php echo esc_url( $help['icon_5'] ); ?>);"></span>
        <span class="help__name"><?php echo $help['name_5']; ?></span>
        <span class="help__desc"><?php echo $help['text_5']; ?></span>
      </li>
      <li class="help__item">
        <span class="help__icon" style="background-image: url(<?php echo esc_url( $help['icon_6'] ); ?>);"></span>
        <span class="help__name"><?php echo $help['name_6']; ?></span>
        <span class="help__desc"><?php echo $help['text_6']; ?></span>
      </li>
    </ul>
    <button class="btn btn--services help__btn" id="uznajte-o-bankrotstve" data-btn="SMS-21 Узнайте все о банкротстве в вашем случае" data-sms="3" data-thanks="1">
      <span><?php echo $help['text_btn']; ?></span>
      <span class="btn__highlights"></span>
    </button>
    <div class="modal-content">
      <div class="mod-content__title"><?php echo $help['text_modal']; ?></div>
    </div>
  </div>
</section>