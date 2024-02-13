<style>
.thanks__block-question h1 {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 44px;
    line-height: 145%;
    color: #393939;
}
.thanks__block-question span.title-page--left {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 145%;
    color: #393939;
}
.thanks__block-question .thanks__inner p {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 145%;
    color: #717B97;
}
.thanks__block-education .big-title {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 600;
    font-size: 34px;
    line-height: 145%;
    color: #393939;
    margin-bottom: 36px;
}
.thanks__block-education .universities_cnt .item {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: 70px auto;
    grid-column-gap: 24px;
    grid-row-gap: 24px;
}
.thanks__block-education .universities_cnt .item+.item {
    margin-top: 24px;
}
.thanks__block-education .universities_cnt .item .icon {
    width: 70px;
    height: 70px;
}
.thanks__block-education .universities_cnt .item .title a {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 500;
    font-size: 24px;
    line-height: 145%;
    text-decoration: none;
    color: #5381F6;
    /*cursor: pointer;*/
}
.thanks__block-education .universities_cnt .item .title a img {
    display: none;
    margin-left: 4px;
    margin-top: 4px;
}
.thanks__block-education .universities_cnt .item .title a:hover {
    /*text-decoration: underline;*/
}
.thanks__block-education .universities_cnt .item .title a:hover img {
    display: inline-block;
}
@media (max-width: 768px) {
    .thanks__block-education .big-title {
        font-size: 22px;
    }
    .thanks__block-education .universities_cnt .item {
        display: block;
        text-align: center;
    }
    .thanks__block-education .universities_cnt .item .icon {
        margin: 0 auto;
    }
    .thanks__block-education .universities_cnt .item .title a {
        font-size: 18px;
    }
    .thanks__block-education .universities_cnt .item .text p {
        font-size: 14px;
    }
}
</style>
<?php 
  $about = get_field('about');
  $education = get_field('education');
?>
<div class="thanks">
    <div class="thanks__block-question">
        <h1 class="title-page title-page--left"><?=$about['fio']; ?></h1>
        <span class="title-page title-page--left"><?=$about['post']; ?></span>
        <div class="thanks__inner"><?=$about['text']; ?></div>
    </div>
    <div class="thanks__block-education">
        <div class="big-title"><?=$education['title']; ?></div>
        <div class="universities_cnt">
            <?php
            /*
                foreach ($education['universities'] as $key => $item) {
            ?>
                    <div class="item">
                        <div class="left_cnt">
                            <div class="icon">
                                <img src="<?=$item['icon']['url']; ?>" alt="<?=$item['icon']['alt']; ?>" title="<?=$item['icon']['title']; ?>" />
                            </div>
                        </div>
                        <div class="right_cnt">
                            <div class="title">
                                <a class="" href="<?=$item['diplom']['url']; ?>" data-fancybox="diplom-gallery-<?=$key; ?>">
                                    <?=$item['title']; ?>
                                    <img src="/wp-content/themes/fpalaw/assets/img/experts/zoom.svg" />
                                </a>
                            </div>
                            <div class="text"><?=$item['text']; ?></div>
                        </div>
                    </div>
            <?php
                }
                */
            ?>
            
            <?php
                foreach ($education['universities'] as $key => $item) {
            ?>
                    <div class="item">
                        <div class="left_cnt">
                            <div class="icon">
                                <img src="<?=$item['icon']['url']; ?>" alt="<?=$item['icon']['alt']; ?>" title="<?=$item['icon']['title']; ?>" />
                            </div>
                        </div>
                        <div class="right_cnt">
                            <div class="title">
                                <a>
                                    <?=$item['title']; ?>
                                    
                                </a>
                            </div>
                            <div class="text"><?=$item['text']; ?></div>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
        <div class="universities_popup_cnt">
            <?php
                foreach ($education['universities'] as $key => $item) {
            ?>
                    <div class="popup_image_<?=$key; ?> hidden">
                        <img src="<?=$item['diplom']['url']; ?>" alt="<?=$item['diplom']['alt']; ?>" title="<?=$item['diplom']['title']; ?>" />
                    </div>
            <?php
                }
            ?>
        </div>
    </div>
    <?php /* get_template_part( 'inc/sections/thanks-block-guarantees' ); */ ?>
    <?php /* get_template_part( 'inc/sections/thanks-block-reso' ); */ ?>
    <?php /* get_template_part( 'inc/sections/thanks-block-attention' ); */ ?>
</div>