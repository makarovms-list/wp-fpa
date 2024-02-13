
<style>
.price-item__head--accent .price-item__price--old {
    color: #fff;
}
.price-item__head--accent .price-item__note {
    color: #fff;
}
.price__item .price-item__btn {
    padding: 12px 20px;
    width: calc(100% - 40px);
}
.price-item__head {
    border-radius: 20px 20px 0px 0px;
}
.price-item__head {
    border-radius: 20px 20px 0px 0px;
}
.price__item {
    overflow: inherit;
}
.swiper-container {
    overflow: initial;
}

@media (max-width: 1080px) {
    .price__item .price-item__subtitle,
    .price__item .price-item__lst {
        display: none;
    }  
    .price__lst .price__item:nth-child(1) {
        order: 1;
    }
    .price__lst .price__item:nth-child(2) {
        order: 3;
    }
    .price__lst .price__item:nth-child(3) {
        order: 2;
    }
    .swiper-wrapper {
        /*justify-content: center;*/
        align-items: center;
    }
    .swiper-pagination {
        width: 100%;
    }
    .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        border-radius: 8px;
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
    }
    .swiper-pagination-bullet.swiper-pagination-bullet-active {
        width: 45px;
        background: #5381F6;
    }
    .swiper-pagination span {
        cursor: pointer;
    }
    .swiper-container .price__item {
        margin: 20px;
        min-width: 320px;
        width: 320px!important;
    }
    .swiper-container .price-item__body {
        padding: 0;
    }
    .swiper-container .content_desc {
        padding: 20px;
    }
    .swiper-container .price-item__timer {
        flex-direction: column-reverse;
        align-items: flex-start;
    }
}
</style>
<?php 
  $arr = [
    '01' => 'января',
    '02' => 'февраля',
    '03' => 'марта',
    '04' => 'апреля',
    '05' => 'мая',
    '06' => 'июня',
    '07' => 'июля',
    '08' => 'августа',
    '09' => 'сентября',
    '10' => 'октября',
    '11' => 'ноября',
    '12' => 'декабря'
  ];
  $date = get_field('timer', 374, false);
  $date = new DateTime($date);
  $month = $date->format('m');
  $ruMonth = $arr[$month];
  $block2_content = get_field('block2_content', 21616);
?>
<section id="services_price" class="section--services-white price">
    <div class="container">
        <div class="section__image section__image--price lazy"></div>
        <h2 class="title-page"><?=$block2_content['title']; ?></h2>
        <?php
            if ($block2_content['bundels']) {
        ?>
                <ul class="price__lst">
        <?php
                    foreach($block2_content['bundels'] as $key => $value) {
                        if (($key+1) == 3) { $additional_class = 'price-item__head--accent'; } else { $additional_class = ''; }
        ?>
                        <li class="price__item price-item">
                            <div class="price-item__head <?=$additional_class; ?>">
                                <div class="price-item__inner">
                                    <div class="price-item__uptitle"><?=$value['title']; ?></div>
                                    <div class="price-item__price"><?=$value['new_price']; ?> <span class="price-item__price--old"><?=$value['old_price']; ?></span></div>
                                    <span class="price-item__note"><?=$value['subtitle']; ?></span>
                                </div>
                            </div>
                            <div class="price-item__timer timer" id="timer-price-<?=($key+1); ?>" data-saledate="<?php the_field('timer', 374); ?>">
                                <div class="timer__inner">
                                    <div class="timer__number">
                                        <span class="timer__time days"> </span>
                                        <span class="timer__text">дней</span>
                                    </div>
                                    <div class="timer__number">
                                        <span class="timer__time hours"> </span>
                                        <span class="timer__text">часов</span>
                                    </div>
                                    <div class="timer__number">
                                        <span class="timer__time minutes"> </span>
                                        <span class="timer__text">минут</span>
                                    </div>
                                    <div class="timer__number">
                                        <span class="timer__time seconds"> </span>
                                        <span class="timer__text">секунд</span>
                                    </div>
                                </div>
                                <p class="timer__title"><?=$value['timer_title']; ?></p>
                            </div>
                            <div class="price-item__body">
                                <p class="price-item__text"><?=$value['annotation']; ?></p>
                                <?php if ($value['list_title']) { ?>
                                    <p class="price-item__subtitle"><?=$value['list_title']; ?></p>
                                <?php } ?>
                                <?php if ($value['list']) { ?>
                                    <ol class="price-item__lst">
                                        <?php foreach($value['list'] as $item_key => $item_value) { ?>
                                            <li class="price-item__elem"><?=$item_value['text']; ?></li>
                                        <?php } ?>
                                    </ol>
                                <?php } ?>
                                <button class="btn price-item__btn" id="price-btn-<?=($key+1); ?>" data-btn="SMS-8 Сколько это стоит?(Блок цен без скидок)" data-sms="8" data-thanks="3"><?=$value['button_title']; ?></button>
                                <div class="modal-content">
                                    <div class="mod-content__title"><?=$value['popup_title']; ?></div>
                                </div>
                            </div>
                        </li>
        <?php
                    }
        ?>
                </ul>
        <?php
            }
            if ($block2_content['bundels']) {
        ?>
                <div class="swiper-container hidden swiper-stoimost-price">
                    <div class="swiper-wrapper">
        <?php
                        foreach($block2_content['bundels'] as $key => $value) {
                            if (($key+1) == 2) { $additional_class = 'price-item__head--accent'; } else { $additional_class = ''; }
        ?>
                            <div class="price__item price-item">
                                <div class="price-item__head <?=$additional_class; ?>">
                                    <div class="price-item__inner">
                                        <div class="price-item__uptitle"><?=$value['title']; ?></div>
                                        <div class="price-item__price"><?=$value['new_price']; ?> <span class="price-item__price--old"><?=$value['old_price']; ?></span></div>
                                        <span class="price-item__note"><?=$value['subtitle']; ?></span>
                                    </div>
                                </div>
                                <div class="price-item__body">
                                    <div class="price-item__timer timer" id="timer-price-<?=($key+1); ?>-1" data-saledate="<?php the_field('timer', 374); ?>">
                                        <div class="timer__inner">
                                            <div class="timer__number">
                                                <span class="timer__time days"> </span>
                                                <span class="timer__text">дней</span>
                                            </div>
                                            <div class="timer__number">
                                                <span class="timer__time hours"> </span>
                                                <span class="timer__text">часов</span>
                                            </div>
                                            <div class="timer__number">
                                                <span class="timer__time minutes"> </span>
                                                <span class="timer__text">минут</span>
                                            </div>
                                            <div class="timer__number">
                                                <span class="timer__time seconds"> </span>
                                                <span class="timer__text">секунд</span>
                                            </div>
                                        </div>
                                        <p class="timer__title"><?=$value['timer_title']; ?></p>
                                    </div>
                                    <div class="content_desc">
                                        <div class="price-item__body">
                                            <p class="price-item__text"><?=$value['annotation']; ?></p>
                                            <button class="btn price-item__btn" id="price-btn-<?=($key+1); ?>-1" data-btn="SMS-8 Сколько это стоит?(Блок цен без скидок)" data-sms="8" data-thanks="3"><?=$value['button_title']; ?></button>
                                            <div class="modal-content">
                                                <div class="mod-content__title"><?=$value['popup_title']; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        <?php
                        }
        ?>
                    </div>
                    <div class="swiper-pagination">
                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                        <span class="swiper-pagination-bullet"></span>
                        <span class="swiper-pagination-bullet"></span>
                    </div>
                </div>
        <?php
            }
        ?>
    </div>
</section>