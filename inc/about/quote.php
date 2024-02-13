<?php 
  $quotation = get_field('quotation'); 
?>
<section class="section section--services-grey section--main quote">
  <div class="container">
    <h2 class="title-page"><?php echo $quotation['title']; ?></h2>
    <div class="quote__wrap">
      <div class="quote__block quote__block--image">
        <div class="quote__image" style="background-image: url(<?php echo esc_url( $quotation['image']['url'] ); ?>);"></div>
      </div>
      <div class="quote__block quote__block--content">
        <p class="quote__title">
          <svg>
            <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#marks"></use>
          </svg><?php echo $quotation['text']; ?>
        </p>
        <div class="quote__author">
          <div class="quote__author-foto">
            <span class="quote__foto-img"></span>
          </div>
          <div class="quote__author-name">
            <span class="quote__name">Боднар Евгения Ивановна</span>
            <span class="quote__post">Руководитель отдела сопровождения клиентов по кредитам и долгам</span>
          </div>
        </div>
        <button class="btn btn--services quote__btn btn-master" data-master="3" data-btn="master-bodnar" data-sms="25" data-thanks="11">
          Проконсультироваться по телефону с Боднар&nbsp;Е.&nbsp;И.
          <span class="btn__highlights"></span>
        </button>
        <div class="modal-content">
          <div class="mod-content__title">Проконсультироваться по телефону</div>
          <div class="mod-content__name">С Боднар Евгенией Ивановной</div>
          <div class="mod-content__post">Руководителем отдела сопровождения клиентов по кредитам и долгам</div>
          <div class="mod-content__foto">bodnar-e-i_small</div>
        </div>
      </div>
    </div>
  </div>
</section>