<?php 
  $block1_content = get_field('block1_content'); 
  /*print_r($block1_content);*/
?>
<style>
/*
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
*/
.top-m::before,
.top-m::after {
	display: none;
}
section.section--main.top-m {
    margin-bottom: 0!important;
}
.section_top-m-bg {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: -1;
    background-position: top center;
    background-size: cover;
}
h1.top-m__title {
    font-size: 52px;
    line-height: 135%;
    text-transform: initial;
    margin-bottom: 45px;
}
button.top-m__btn {
    font-size: 22px;
    line-height: 145%;
    margin-bottom: 45px;
}
button.top-m__btn.color_scheme_red {
    background: -webkit-gradient(linear, 100% 0, 0 0, from(#FB5A80), to(#F23965));
    background: -webkit-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
    background: -moz-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
    background: -o-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
    background: linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
    border-radius: 13px;
    color: #ffffff;
}
ul.top-item-list__cnt {
    list-style: none;
    padding: 0;
    margin: 0;
    max-width: 700px;
}
ul.top-item-list__cnt li {
    font-weight: 400;
    font-size: 22px;
    line-height: 145%;
    color: #FFFFFF;
    padding-left: 0px;
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: 32px auto;
    grid-column-gap: 28px;
    grid-row-gap: 16px;
}
ul.top-item-list__cnt li svg {
    width: 32px;
    height: 32px;
}
ul.top-item-list__cnt li+li {
    margin-top: 15px;
}
.section--main.top-m p.subtitle {
    font-weight: 700;
    font-size: 24px;
    line-height: 145%;
    color: #FFFFFF;
    margin: 25px 0;
}
.section--main.top-m figure figcaption {
    position: absolute;
    right: 0;
    background: rgba(255, 255, 255, 0.85);
    box-shadow: 0px 4px 14px rgb(0 37 102 / 10%);
    border-radius: 4px;
    padding: 10px;
    max-width: 380px;
    bottom: 70px;
}
.section--main.top-m figure figcaption span {
    display: block;
    line-height: 145%;
    color: #393939;
}
.section--main.top-m figure figcaption span.name {
    font-weight: 500;
    font-size: 24px;
}
.section--main.top-m figure figcaption span.post {
    font-weight: 400;
    font-size: 16px;
}
.desktop__cnt {
    display: block;
}
.mobile__cnt {
    display: none;
}
@media (max-width: 1200px) {
    h1.top-m__title {
        font-size: 38px;
        margin-bottom: 40px;
    }
    button.top-m__btn {
        font-size: 18px;
        margin-bottom: 40px;
    }
    ul.top-item-list__cnt li {
        font-size: 18px;
        grid-template-columns: 24px auto;
    }
    ul.top-item-list__cnt li svg {
        width: 24px;
        height: 24px;
    }
    .section--main.top-m p.subtitle {
        font-size: 20px;
    }
    .section--main.top-m figure figcaption {
        max-width: 330px;
    }
    .section--main.top-m figure figcaption span.name {
        font-size: 20px;
    }
    .section--main.top-m figure figcaption span.post {
        font-size: 14px;
    }
    .top-m__wrap {
        min-height: auto;
    }
}
@media (max-width: 992px) {
    body.no-warning-block .header {
        margin-bottom: 0px!important;
    }   
}
@media (max-width: 768px) {
    .desktop__cnt {
        display: none;
    }
    .mobile__cnt {
        display: block;
    }
    h1.top-m__title {
        font-size: 24px;
    }
    .mobile__cnt figure {
        position: relative;
        margin: 0 auto 35px;
    }
    .mobile__cnt figure figcaption {
        bottom: 0!important;
    }
    button.top-m__btn {
        margin: 0 auto;
    }
    .top-m__wrap {
        padding-bottom: 80px!important;
    }
}
@media (max-width: 480px) {
    h1.top-m__title {
        font-size: 22px;
        margin-bottom: 35px;
    }
    ul.top-item-list__cnt li {
        font-size: 16px;
    }
    .section--main.top-m figure figcaption span.name {
        font-size: 16px;
    }
    .section--main.top-m figure figcaption span.post {
        font-size: 12px;
    }
    ul.top-item-list__cnt li {
        grid-column-gap: 16px;
    }
    button.top-m__btn {
        font-size: 16px;
        margin-bottom: 0px;
        padding: 15px 15px;
    }
}



</style>
<section class="section section--main top-m">
    <div style="background-image: url('/wp-content/themes/fpalaw/assets/img/top/stoimost_top_bg_desktop.webp')" data-bg="/wp-content/themes/fpalaw/assets/img/top/stoimost_top_bg_desktop.png" data-bg-webp="/wp-content/themes/fpalaw/assets/img/top/stoimost_top_bg_desktop.webp" class="section_top-m-bg"></div>
    <div class="container">
        <div class="top-m__wrap">
            <div class="top-m__content">
                <h1 class="top-m__title"><?php echo $block1_content['title']; ?></h1>
                <div class="desktop__cnt">
                    <?php
                        foreach ($block1_content['button'] as $key => $value) {
                    ?>
                            <button class="btn top-m__btn callback-btn color_scheme_<?=$value['color_scheme']; ?>" data-popup-id="<?=$value['popup_id']; ?>"><?=$value['title']; ?> <span class="btn__highlights"></span></button>
                    <?php
                        }
                    ?>
                </div>
                <ul class="top-item-list__cnt">
                    <?php
                        foreach ($block1_content['item_list'] as $key => $value) {
                    ?>
                            <li><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="16" cy="16" r="11" fill="#5381F6" stroke="white" stroke-width="2"/><path d="M14 21L9 16L10.41 14.58L14 18.17L21.59 10.58L23 12L14 21Z" fill="white"/></svg><?=$value['text']; ?></li>
                    <?php
                        }
                    ?>
                </ul>
                <p class="subtitle"><?=$block1_content['subtitle']; ?></p>
                <ul class="top-item-list__cnt">
                    <?php
                        foreach ($block1_content['item_sublist'] as $key => $value) {
                    ?>
                            <li><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="16" cy="16" r="11" fill="#5381F6" stroke="white" stroke-width="2"/><path d="M14 21L9 16L10.41 14.58L14 18.17L21.59 10.58L23 12L14 21Z" fill="white"/></svg><?=$value['text']; ?></li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
            <div class="desktop__cnt">
                <figure>
                    <?php echo wp_get_attachment_image( $block1_content['lawyer']['Image']['ID'], 'full', false, array('class'  => 'top-m__image') ); ?>
                    <figcaption>
                        <span class="name"><?=$block1_content['lawyer']['name']; ?></span>
                        <span class="post"><?=$block1_content['lawyer']['post']; ?></span>
                    </figcaption>
                </figure>
            </div>
            <div class="mobile__cnt">
                <figure>
                    <?php echo wp_get_attachment_image( $block1_content['lawyer']['Image_mobile']['ID'], 'full', false, array('class'  => 'top-m__image-mobile') ); ?>
                    <figcaption>
                        <span class="name"><?=$block1_content['lawyer']['name']; ?></span>
                        <span class="post"><?=$block1_content['lawyer']['post']; ?></span>
                    </figcaption>
                </figure>
                <?php
                    foreach ($block1_content['button'] as $key => $value) {
                ?>
                        <button class="btn top-m__btn callback-btn color_scheme_<?=$value['color_scheme']; ?>" data-popup-id="<?=$value['popup_id']; ?>"><?=$value['title']; ?> <span class="btn__highlights"></span></button>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</section>
