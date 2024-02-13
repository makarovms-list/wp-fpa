<?php 
  $offer = get_field('offers', 374); 
?>
<div class="hidden">
<?php 
  print_r($offer); 
?>
</div>
<section id="services_offers" class="section--services offers">
  <div class="container">
    <h2 class="title-page"><?php echo $offer['title']; ?></h2>
    <div class="offers__wrap">
      <div class="offers__block offers__block--first">
        <div class="offers__item">
          <div class="offers__foto">
            <div class="offers__image lazy" style='background-image: url("<?php echo $offer['icon_1_base64']; ?>");'></div>
          </div>
          <div class="offers__content">
            <span class="offers__name"><?php echo $offer['name_1']; ?></span>
            <span class="offers__desc"><?php echo $offer['text_1']; ?></span>
          </div>
        </div>
        <div class="offers__item">
          <div class="offers__foto">
            <div class="offers__image lazy" style='background-image: url("<?php echo $offer['icon_2_base64']; ?>");'></div>
          </div>
          <div class="offers__content">
            <span class="offers__name"><?php echo $offer['name_2']; ?></span>
            <span class="offers__desc"><?php echo $offer['text_2']; ?></span>
          </div>
        </div>
        <div class="offers__item">
          <div class="offers__foto">
            <div class="offers__image lazy" style='background-image: url("<?php echo $offer['icon_3_base64']; ?>");'></div>
          </div>
          <div class="offers__content">
            <span class="offers__name"><?php echo $offer['name_3']; ?></span>
            <span class="offers__desc"><?php echo $offer['text_3']; ?></span>
          </div>
        </div>
        <div class="offers__item">
          <div class="offers__foto">
            <div class="offers__image lazy" style='background-image: url("<?php echo $offer['icon_4_base64']; ?>");'></div>
          </div>
          <div class="offers__content">
            <span class="offers__name"><?php echo $offer['name_4']; ?></span>
            <span class="offers__desc"><?php echo $offer['text_4']; ?></span>
          </div>
        </div>
      </div>
      <div class="offers__block offers__block--second">
        <div class="offers__item">
          <div class="offers__foto">
            <div class="offers__image lazy" style='background-image: url("<?php echo $offer['icon_5_base64']; ?>");'></div>
          </div>
          <div class="offers__content">
            <span class="offers__name"><?php echo $offer['name_5']; ?></span>
            <span class="offers__desc"><?php echo $offer['text_5']; ?></span>
          </div>
        </div>
        <div class="offers__item">
          <div class="offers__foto">
            <div class="offers__image lazy" style='background-image: url("<?php echo $offer['icon_6_base64']; ?>");'></div>
          </div>
          <div class="offers__content">
            <span class="offers__name"><?php echo $offer['name_6']; ?></span>
            <span class="offers__desc"><?php echo $offer['text_6']; ?></span>
          </div>
        </div>
        <div class="offers__item">
          <div class="offers__foto">
            <div class="offers__image lazy" style='background-image: url("<?php echo $offer['icon_7_base64']; ?>");'></div>
          </div>
          <div class="offers__content">
            <span class="offers__name"><?php echo $offer['name_7']; ?></span>
            <span class="offers__desc"><?php echo $offer['text_7']; ?></span>
          </div>
        </div>
        <div class="offers__item">
          <div class="offers__foto">
            <div class="offers__image lazy" style='background-image: url("<?php echo $offer['icon_8_base64']; ?>");'></div>
          </div>
          <div class="offers__content">
            <span class="offers__name"><?php echo $offer['name_8']; ?></span>
            <span class="offers__desc"><?php echo $offer['text_8']; ?></span>
          </div>
        </div>
<!--
        <div class="offers__item">
          <div class="offers__foto">
            <div class="offers__image offers__image--9 lazy"></div>
          </div>
          <div class="offers__content">
            <span class="offers__name">Бесплатное предоставление финансового управляющего</span>
            <span class="offers__desc">Мы сотрудничаем с СРО, из участников которой назначается финансовый управляющий — лидер по количеству дел о банкротстве граждан. Управляющий работает строго за официальное вознаграждение по ФЗ-127 без каких-либо дополнительных вложений</span>
          </div>
        </div>
-->
      </div>
    </div>
    <div class="offers__btn-wrap">
      <button class="btn btn--services" data-btn="SMS-7 Льготы и специальные предложения" id="poluchenie-lgoty" data-sms="9" data-thanks="4">
        Оставьте заявку на получение льготы
        <span class="btn__highlights"></span>
      </button>
      <div class="modal-content">
        <div class="mod-content__title">Получите свою льготу или специальное предложение</div>
      </div>
    </div>
  </div>
</section>