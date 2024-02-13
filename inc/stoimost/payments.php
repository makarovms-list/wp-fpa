<style>
#services_payments .title-page {
    margin-bottom: 45px;
}
ul.payments__lst {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
    margin: 0;
    padding: 0;
    list-style: none;
}
.payments__item {
    width: 385px;
    overflow: hidden;
    background-color: #fff;
    border-radius: 20px;
    -webkit-box-shadow: 0 14px 34px rgb(0 29 104 / 12%);
    box-shadow: 0 14px 34px rgb(0 29 104 / 12%);
    padding: 25px;
}
.payments-item__head .title {
    font-weight: 500;
    font-size: 18px;
    line-height: 145%;
    color: #393939;
    margin-bottom: 10px;
}
.payments__item:nth-child(2) .payments-item__head .title {
    max-width: 250px;
}
.payments__item:nth-child(3) .payments-item__head .title {
    max-width: 150px;
}
.payments-item__head .price {
    font-weight: 700;
    font-size: 32px;
    line-height: 100%;
    color: #393939;
    margin-bottom: 4px;
}
.payments-item__head .subtitle {
    font-weight: 500;
    font-size: 14px;
    line-height: 145%;
    color: #717B97;
    margin-bottom: 25px;
}
.payments-item__head .separator {
    height: 1px;
    width: 100%;
    background: rgb(57 57 57 / 40%);
    margin-bottom: 20px;
}
.payments-item__head .desc p {
    font-weight: 500;
    font-size: 16px;
    line-height: 145%;
    color: #717B97;   
    margin: 0;
    padding: 0;
}
.payments-item__head .desc p+p {
    margin-top: 16px;
}
ul.payments__lst.hidden {
    display: none!important;
}
.swiper-container {
    overflow: initial;
}
@media (max-width: 1500px) {
    .payments__item {
        width: 32%;
    }
}
@media (max-width: 1080px) {
    .payments__item {
        margin: 10px;
    }
    /*
    .payments__lst {
        -webkit-box-orient: vertical!important;
        -webkit-box-direction: normal!important;
        -ms-flex-direction: column!important;
        flex-direction: column!important;
        -webkit-box-align: center!important;
        -ms-flex-align: center!important;
        align-items: center!important;
    }
    */
    .payments__item {
        width: 360px;
        margin-bottom: 20px;
    }
    .payments__item .payments-item__head .desc p {
        font-size: 14px;
    }
    #services_payments .title-page {
        margin-bottom: 40px;
    }
    .payments-item__head .title {
        font-size: 16px;
    }
    .payments-item__head .price {
        font-size: 24px;
    }
    .payments-item__head .subtitle {
        margin-bottom: 20px;   
    }
    .swiper-wrapper .payments__item {
        min-width: 320px;
        width: 320px;
        margin: 20px;
    }
    .swiper-wrapper .payments__item {
        overflow: initial;
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
    $block3_title = get_field('block3_title', 21616);
    $block3_content = get_field('block3_content', 21616);
?>
<section id="services_payments" class="section--services-grey payments">
    <div class="container">
        <h2 class="title-page"><?=$block3_title; ?></h2>
         <?php
            if ($block3_content) {
        ?>
                <ul id="payments__lst-desktop" class="payments__lst">
        <?php
                    foreach($block3_content as $key => $value) {
        ?>
                        <li class="payments__item payments-item">
                            <div class="payments-item__head">
                                <div class="payments-item__inner">
                                    <div class="title"><?=$value['title']; ?></div>
                                    <div class="price"><?=$value['price']; ?></div>
                                    <div class="subtitle"><?=$value['subtitle']; ?></div>
                                    <div class="separator"></div>
                                    <div class="desc"><?=$value['text']; ?></div>
                                </div>
                            </div>
                        </li>
        <?php
                    }
        ?>
                </ul>
        <?php
            }
            if ($block3_content) {
        ?>
                <div id="payments__lst-mobile" class="payments__lst payments__lst-mobile hidden">
                    <div class="swiper-wrapper">
        <?php
                        foreach($block3_content as $key => $value) {
        ?>    
                            <div class="payments__item payments-item">
                                <div class="payments-item__head">
                                    <div class="payments-item__inner">
                                        <div class="title"><?=$value['title']; ?></div>
                                        <div class="price"><?=$value['price']; ?></div>
                                        <div class="subtitle"><?=$value['subtitle']; ?></div>
                                        <div class="separator"></div>
                                        <div class="desc"><?=$value['text']; ?></div>
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