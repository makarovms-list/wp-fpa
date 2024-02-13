<?php
    $thank_you = get_field('thank_you');
    if ($thank_you) {
?>
        <style>
            section.thank_you .h1_title p {
                font-weight: 700;
                font-size: 34px;
                line-height: 145%;
                text-align: center;
                color: #393939;
            } 
            section.thank_you .our_guarantees {
                display: flex;
                flex-flow: row wrap;  
                grid-column-gap: 16px;
                grid-row-gap: 16px;
            }
            .block-info--doc {
                height: 100%;
            }
            section.thank_you .block-info--doc-2 {
                background-color: #fff6e1;
            }
            section.thank_you .block-info--doc-2::before {
                right: 0px;
                -webkit-box-shadow: none!important;
                box-shadow: none!important;
            }
            section.thank_you .block-info--doc-2 p+p {
                margin-top: 16px;
            }
            <?php foreach($thank_you['our_guarantees'] as $key => $value) { ?>
                .block-info--doc-<?=$key; ?>::before {
                    background-image: url(<?=$value['Image']['url'];?>);
                }
            <?php } ?>
            @media (max-width: 992px) {
                section.thank_you .block-info--doc-2::before {
                    right: 50%;
                }
            }
            @media (min-width: 768px) {
                section.thank_you .doc-aside-1 { order: 1; }
                section.thank_you .aside-2 { order: 3; }
                section.thank_you .block-info--doc-2  { order: 4; }
                .doc-aside {
                    flex: 1 0 0;
                }
            }
            @media (max-width: 768px) {
                section.thank_you .our_guarantees {
                    flex-direction: column;
                }
                section.thank_you .h1_title p {
                    font-size: 22px;
                }
                .block-info__content {
                    font-size: 14px;
                }
                .block-info__content .block-info__subtitle {
                    font-size: 16px;
                }
                section.thank_you .block-info--doc {
                    padding-bottom: 25px;    
                }
                section.thank_you .block-info--doc::before {
                    display: none;
                }
                /*
                section.thank_you .our_guarantees .doc-aside.aside-1,
                section.thank_you .our_guarantees .doc-aside.aside-2 {
                    display: none!important;
                }
                */
                section.thank_you .inner__wrap {
                    margin-bottom: 0!important;
                }
            }
        </style>
        <section class="section thank_you">
            <div class="inner inner--mobile">
                <div class="container">
                    <div class="inner__wrap">
                        <div class="inner__row inner__row--mobile">
                            <div class="inner__block">
                                <div class="h1_title"><?=$thank_you['title']; ?></div>
                                <div class="our_guarantees">
                                    <?php
                                        foreach($thank_you['our_guarantees'] as $key => $value) {
                                            if ($key < 2) {
                                    ?>
                                                <aside class="doc-aside aside-<?=($key+1); ?>">
                                    <?php
                                            }
                                    ?>
                                        <div class="thanks__block-info block-info block-info--doc block-info--doc-<?=$key; ?>">
                                            <div class="block-info__head">
                                                <span class="block-info__icon block-info__<?=$value['title_icon'];?>">!</span>
                                                <div class="block-info__title"><?=$value['title']; ?></div>
                                            </div>
                                            <div class="block-info__content">
                                                <div class="block-info__subtitle"><?=$value['subtitle']; ?></div>
                                                <?=$value['text']; ?>
                                            </div>
                                        </div>
                                    <?php
                                            if ($key < 2) {
                                    ?>
                                                </aside>
                                    <?php
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
    }
?>