<style>
#services_competitors .title-page {
    font-weight: 700;
    font-size: 34px;
    line-height: 145%;
    text-align: center;
    color: #393939;
    margin-bottom: 45px;
}
.competitors__lst {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin: 0;
    padding: 0;
    list-style: none;
    margin-top: 60px;
    margin-bottom: 25px;
}
.competitors__lst .competitors__item {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
    width: 31.5%;
    margin-bottom: 35px;
    padding: 25px;
}
.competitors__icon {
    width: 100px;
    height: 100px;
    background-size: contain;
    background-repeat: no-repeat;
    margin-bottom: 25px;
    display: block;
    
}
.competitors__title {
    font-weight: 700;
    font-size: 22px;
    line-height: 145%;
    color: #393939;
    margin-bottom: 15px;
}
.competitors__desc {
   font-weight: 400;
    font-size: 16px;
    line-height: 145%;
    color: #717B97; 
}
.competitors__desc b {
    color: #393939;
}
@media (max-width: 768px) {
    #services_competitors .title-page {
        font-size: 24px;
        text-align: center;
        margin-bottom: 40px;
    }  
    .competitors__lst .competitors__item {
        padding: 10px;
    }
    .competitors__lst .competitors__item {
        width: 50%;
    }
    .competitors__icon {
        width: 64x;
        height: 64px;
    }
    .competitors__title {
        font-size: 18px;
    }
    .competitors__desc {
        font-size: 14px;
    }
}
@media (max-width: 560px) {
    .competitors__lst .competitors__item {
        width: 100%;
    }
    .competitors__icon {
        width: 40px;
        height: 40px;
    }
}
</style>
<?php
    $block7_content = get_field('block7_content', 21616);
?>
<section id="services_competitors" class="section--services-white competitors">
    <div class="container">
        <h2 class="title-page"><?=$block7_content['title']; ?></h2>
        <?php
            if ($block7_content['list_references']) {
        ?>
                <ul class="competitors__lst">
        <?php
                    foreach($block7_content['list_references'] as $key => $value) {
        ?>
                        <li class="competitors__item">
                            <span class="competitors__icon" style="background-image: url(<?=$value['image']; ?>);"></span>
                            <span class="competitors__title"><?=$value['title']; ?></span>
                            <span class="competitors__desc"><?=$value['text']; ?></span>
                        </li>
        <?php      
                    }
        ?>
                </ul>
        <?php      
            }
        ?>
    </div>
</section>