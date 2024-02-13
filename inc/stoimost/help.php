<style>
.btn.btn--services.help__btn {
    background: linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
    box-shadow: 0px 4px 14px rgba(0, 37, 102, 0.18);
    border-radius: 10px;
}
.btn.btn--services.help__btn:hover {
    background: linear-gradient(180deg, #DD3C62 0%, #D41B47 100%);
    box-shadow: 0px 4px 14px rgba(0, 37, 102, 0.18);
    border-radius: 10px;
}
#services_help .title-page {
    margin: 45px;
}
@media (max-width: 768px) {
    .help__item {
        display: flex;
        flex-direction: row;
    }
    .help__icon {
        width: 40px;
        height: 40px;
    }
    .help__item .desc__cnt {
        max-width: calc(100% - 50px);
        margin-left: 10px;
    }
    .help__item .desc__cnt span {
        display: block;
    }
    #services_help .title-page {
        margin: 40px;
    }
}
@media (max-width: 540px) {
    #services_help .title-page {
        margin: 35px;
        font-size: 22px;
    }
}
</style>
<?php 
  $help = get_field('content', 21616); 
?>
<section id="services_help" class="section--services help">
  <div class="container">
    <h2 class="title-page"><?php echo $help['title']; ?></h2>
    <?php
        if ($help['advantages']) {
    ?>
            <ul class="help__lst">
                <?php
                    foreach($help['advantages'] as $key => $value) {
                ?>
                    <li class="help__item">
                        <span class="help__icon" style="background-image: url(<?php echo esc_url( $value['image'] ); ?>);"></span>
                        <div class="desc__cnt">
                            <h3 class="help__name"><?php echo $value['title']; ?></h3>
                            <span class="help__desc"><?php echo $value['desc']; ?></span>
                        </div>
                    </li>
                <?php
                    }
                ?>
            </ul>
    <?php
        }
    ?>
    <button class="btn btn--services help__btn" id="uznajte-o-bankrotstve" data-btn="SMS-21 Узнайте все о банкротстве в вашем случае" data-sms="3" data-thanks="1">
      <span><?=$help['button']['button_title']; ?></span>
      <span class="btn__highlights"></span>
    </button>
    <div class="modal-content">
      <div class="mod-content__title"><?=$help['button']['modal_title']; ?></div>
    </div>
  </div>
</section>