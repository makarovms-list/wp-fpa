<?php
  /*
    Template Name: Страница FAQ
    Template Post Type: page
  */
?>

   
<?php get_header(); ?>

<style>
section.faq h1.title-page {
    margin-bottom: 40px;
}
section.faq .content__cnt {
    margin-bottom: 12px;
}
section.faq .content__cnt p {
    font-size: 18px;
    line-height: 145%;
    color: #717B97;
}
section.faq .questions__cnt .spoiler__block::before {
    display: none;
}
section.faq .questions__cnt .spoiler__block .spoiler__head::after {
    position: absolute;
    left: 25px;
    top: calc(50% - 16px);
    content: counter(free-counter);
    counter-increment: free-counter;
    font-weight: 700;
    font-size: 14px;
    display: flex;
    align-items: center;
    text-align: center;
    color: #5381F6;
    background: #F3F4F4;
    border-radius: 200px;
    width: 32px;
    height: 32px;
    justify-content: center;
}
section.faq .questions__cnt .spoiler__category {
    font-weight: 600;
    font-size: 22px;
    line-height: 145%;
    color: #717B97;
    padding-left: 44px;
}
section.faq .questions__cnt .spoiler__block:hover .spoiler__category {
    color: #5381f6;
}
section.faq .questions__cnt .spoiler__text--unit p {
    font-weight: 400;
    font-size: 18px;
    line-height: 145%;
    color: #393939;
}
section.faq .questions__cnt .spoiler__text--unit ul {
    margin-bottom: 20px;
}
section.faq .questions__cnt .spoiler__text--unit ul li {
    font-weight: 400;
    font-size: 18px;
    line-height: 145%;
    color: #393939;    
}
section.faq .questions__cnt .spoiler__content ul li::before {
    background-color: #393939;
}
section.faq .questions__cnt .spoiler__btn {
    position: absolute!important;
    top: calc(50% - 12px)!important;
}
section.faq .questions__cnt .spoiler__category span.mobile {
    display: none;
}
main {
    position: relative;    
}
main::before{
    content: "";
    background-image:url(/wp-content/themes/fpalaw/assets/img/bg.jpg);
    opacity: .05;
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: -1;
}

@media (max-width: 768px) {
    section.faq h1.title-page {
        display: block!important;
        font-size: 22px;
    }
    section.faq .content__cnt p {
        font-size: 16px;
    }
    section.faq .questions__cnt .spoiler__category {
        font-size: 16px;
        font-weight: 700;
        padding-left: 0;
    }
    section.faq .questions__cnt .spoiler__category span.mobile {
        display: inline-block;
    }
    section.faq .questions__cnt .spoiler__text--unit p {
        font-size: 14px;
    }
    section.faq .questions__cnt .spoiler__block .spoiler__head::after {
        display: none;
    }
    section.faq .questions__cnt .spoiler__text--unit ul li {
        font-size: 14px;
    }
}
@media (max-width: 540px) {
    section.faq .questions__cnt .spoiler__category {
        font-size: 14px;
    }
}
</style>
<?php
    $questions = get_field('questions');
?>
<main>
    <div class="breadcrumbs">
        <div class="container breadcrumbs__container">
            <div id="breadcrumbs">
                <?php do_action('pretty_breadcrumb'); ?>
            </div>
        </div>
    </div>
    <section class="section faq articles">
        <div class="container">
            <h1 class="title-page"><?php the_title() ?></h1>
            <div class="container-default container-default__cnt">
                <div class="content__cnt"><?php the_content() ?></div>
            </div>
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
    <?php get_template_part( 'inc/bottom/info-reviews' ); ?>
</main>
    
  


<!--
<div class="inner inner--mobile">
    <div class="container">
        <div class="inner__wrap">
            <div class="inner__row inner__row--mobile">
                <div class="inner__block inner__block--aside-thanks">
                    <aside class="aside">
                        <?php get_template_part( 'inc/aside/lawyer-expert' ); ?>
                    </aside>
                </div>
                <div class="inner__block inner__block--main">
                    <main>
                        <?php get_template_part( 'inc/sections/thanks-expert' ); ?>
                    </main>
                </div>
            </div>
            <div class="inner__row inner__row--mobile">
                <div class="inner__block inner__block--aside-thanks">
                    <aside class="aside">
                        <?php get_template_part( 'inc/aside/lawyer-form' ); ?>
                    </aside>
                </div>
                <div class="inner__block inner__block--main">
                    <main>
                        <?php get_template_part( 'inc/sections/expert-media-publications' ); ?>
                        <?php get_template_part( 'inc/sections/expert-company-publications' ); ?>
                        <?php get_template_part( 'inc/sections/expert-video-publications' ); ?>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<?php get_footer(); ?>