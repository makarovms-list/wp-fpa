<style>
.stoimost-faq .h1 {
    font-weight: 700;
    font-size: 34px;
    line-height: 145%;
    text-align: center;
    color: #393939;
    margin-bottom: 25px;
}
.stoimost-faq p.subtitle {
    font-weight: 500;
    font-size: 18px;
    line-height: 145%;
    text-align: center;
    color: #717B97;
    margin-bottom: 45px;
}
.spoiler__wrap {
    margin: 0;
}
.questions__cnt .spoiler__wrap .spoiler__block .mobile {
    display: none;
}
.questions__cnt .spoiler__wrap .spoiler__block .spoiler__head .spoiler__category span:not(.mobile) {
    font-weight: 600;
    font-size: 22px;
    line-height: 145%;
    display: flex;
    align-items: center;
    color: #717B97;
}
.questions__cnt .spoiler__wrap .spoiler__block .spoiler__head:hover .spoiler__category span:not(.mobile) {
    color: rgba(60,112,244,.8);
}
.questions__cnt .spoiler__wrap .spoiler__block::before {
    position: absolute;
    left: 25px;
    top: 28px;
    content: counter(free-counter);
    counter-increment: free-counter;
    font-weight: 700;
    font-size: 14px;
    line-height: 17px;
    display: flex;
    color: #5381F6;
    background: #F3F4F4;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    text-align: center;
    justify-content: center;
    align-items: center;
}
.questions__cnt .spoiler__wrap .spoiler__block .spoiler__content .spoiler__text--unit p {
    font-weight: 400;
    font-size: 16px;
    line-height: 145%;
    color: #393939;
}
.questions__cnt .spoiler__wrap .spoiler__block .spoiler__content .spoiler__text--unit ol li {
    font-weight: 400;
    font-size: 16px;
    line-height: 145%;
    color: #393939;
}
.questions__cnt .spoiler__wrap .spoiler__block .spoiler__content .spoiler__text--unit ol li+li {
    margin-top: 8px;
}

@media (max-width: 768px) {
    .spoiler__category {
        padding-left: 40px;
    }  
    .questions__cnt .spoiler__wrap .spoiler__block .spoiler__head .spoiler__category span:not(.mobile) {
        font-size: 16px;
    }
    .questions__cnt .spoiler__wrap .spoiler__block .spoiler__content .spoiler__text--unit p {
        font-size: 14px;
    }
}



</style>
<?php 
    $faq_title = get_field('faq_title', 21616);
    $faq_subtitle = get_field('faq_subtitle', 21616);
    $questions = get_field('questions', 21616);
  /*print_r($block1_content);*/
?>
<section class="stoimost-faq section--services-white">
    <div class="container">
        <h2 class="title-page"><?=$faq_title; ?></h2>
        <p class="subtitle"><?=$faq_subtitle; ?></p>
        <div class="questions__cnt">
            <div class="content__cnt">
            <?php
                if ($questions) {
            ?>
                <ul class="spoiler__wrap spoiler__wrap--free" itemscope itemtype="https://schema.org/FAQPage">
            <?php
                    foreach($questions as $key => $value) {
            ?>
                        <li class="spoiler__block" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <div class="spoiler__head">
                                <div class="spoiler__category"><span class="mobile"><?=($key+1); ?>.</span> <span itemprop="name"><?=$value['question']; ?></span></div>
                                <div class="spoiler__btn">
                                    <span class="spoiler__btn-arrow"></span>
                                </div>
                            </div>
                            <div class="spoiler__content hide">
                                <div class="spoiler__unit">
                                    <div class="spoiler__unit spoiler__unit--text" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div class="spoiler__text--unit" itemprop="text">
                                            <?=$value['answer']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
            <?php
                    }
            ?>
                </ul>
            <?php
                }
            ?>
            </div>
        </div>
    </div>
</section>