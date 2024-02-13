<style>
    .calculator-navbar {
        display: none!important;
    }
    .btn-up {
        bottom: 33px!important;
    }
    .step-item .step_item-cnt {
        padding: 120px 0;
    }
    .step-item.odd_item {
        background: #fff;
        /*
        background: url(/wp-content/themes/fpalaw/assets/img/instruction/white-noise.png) center center repeat;
        background-size: cover;
        */
    }
    .step-item.even_item {
        background: -webkit-linear-gradient(135deg, #EDF0F8 0%, #D7DEEF 100%);
        background: -moz-linear-gradient(135deg, #EDF0F8 0%, #D7DEEF 100%);
        background: -o-linear-gradient(135deg, #EDF0F8 0%, #D7DEEF 100%);
        background: linear-gradient(135deg, #EDF0F8 0%, #D7DEEF 100%);
    }
    .step-item .step_item-cnt {

    }
    .step-item .step-number {
        font-family: Inter;
        font-size: 1.125em;
        font-weight: 600;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        color: #3262AC;
    }
    .step-item .step-text {
        color: #202020;
        font-family: Inter;
        letter-spacing: 0em;
        text-align: left;  
        margin-bottom: 20px;
    }
    .step-item .step-text-additional p {
        font-family: Inter;
        /*font-size: 0.875em;*/
        font-weight: 400;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
    }
    .step-item .step-text-additional p strong {
        font-size: 1em;
        font-weight: 600;
    }
    .step-item .step-text a {
        text-decoration: underline;
    }
    .step-item .step-text a:hover {
        text-decoration: none;
    }
    .step-item .step-text strong {
        font-size: 1.375em;
        font-weight: 600;
        line-height: 145%;        
    }
    .step-item .step-text ul {}
    .step-item .step-text ul li {
        font-family: Inter;
        font-size: 1em;
        font-weight: 500;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        color: #303030;
    }
    .step-item .step-text ul li strong,
    .step-item .step-text ul li b {
        font-size: 1em!important;
        font-weight: 700!important;
    }
    .step-item .step-image {}
    .step-item .step-image img {
        max-width: 100%;
    }
    .step-item .step-image+.additional_block_cnt {
        margin-top: 20px;
    }
    .step-item .template_cnt {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 16px auto;
        grid-column-gap: 4px;
        grid-row-gap: 4px;
        align-items: center;
        margin-top: 20px;
    }
    .step-item .template_cnt svg {
        width: 16px;
        height: 26px;
    }
    @media (max-width: 992px) {
        .step-item .step_item-cnt {
            padding: 100px 0;
        }
    }
    @media (max-width: 600px) {
        .step-item .step_item-cnt {
            padding: 60px 0;
        }
        .step-item .step-text strong {
            font-size: 1.125em;
        }
        .step-item .step-number {
            font-size: 0.875em;
        }
    }
    @media (max-width: 480px) {
        .step-item .step_item-cnt {
            padding: 40px 0;
        }
    }
</style>
<?php
    $steps_content = get_field('steps_content');
    //print_r($steps_content);
?>
<section class="section-steps">
    <div class="steps-cnt">
        <?php
            foreach ($steps_content as $key => $value) {
                $item_class = '';
                if (($key+1) % 2) {
                    $item_class = "odd_item";
                } else {
                    $item_class = "even_item";
                }
        ?>
                <div class="step-item <?=$item_class; ?>">
                    <div class="container">
                        <div class="step_item-cnt">
                            <div class="step-number">Шаг <?=($key+1); ?></div>
                            <div class="step-text"><?=$value['text']; ?></div>
                            <div class="step-image">
                                <img src="<?=$value['image']['url']; ?>" alt="<?=$value['image']['title']; ?>" />
                            </div>
                            <?php
                                if ($value['additional_block']['value'] == 'on') {
                            ?>
                                    <div class="additional_block_cnt">
                                         <div class="step-text-additional"><?=$value['additional_text']; ?></div>
                                         <div class="step-image">
                                            <img src="<?=$value['additional_image']['url']; ?>" alt="<?=$value['additional_image']['title']; ?>" />
                                        </div>
                                        
                            <?
                                        if ($value['additional_template_file']['url'] != '') {
                            ?>
                                            <div class="template_cnt">
                                                <svg width="16" height="26" viewBox="0 0 16 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.77958 13.3547C7.13445 13.6923 7.13445 14.2462 6.77958 14.5838C6.44201 14.9213 5.88806 14.9213 5.5505 14.5838C4.73981 13.7719 4.28447 12.6714 4.28447 11.5241C4.28447 10.3767 4.73981 9.27626 5.5505 8.46435L8.61454 5.40031C9.42645 4.58962 10.5269 4.13428 11.6743 4.13428C12.8216 4.13428 13.9221 4.58962 14.734 5.40031C15.5447 6.21222 16 7.31267 16 8.46002C16 9.60738 15.5447 10.7078 14.734 11.5197L13.4443 12.8094C13.453 12.0997 13.3404 11.3899 13.0981 10.7148L13.5049 10.2993C13.7475 10.0593 13.9402 9.77352 14.0716 9.45855C14.2031 9.14358 14.2708 8.80566 14.2708 8.46435C14.2708 8.12304 14.2031 7.78513 14.0716 7.47016C13.9402 7.15518 13.7475 6.86942 13.5049 6.62939C13.2649 6.38674 12.9791 6.19411 12.6641 6.06264C12.3492 5.93118 12.0112 5.86348 11.6699 5.86348C11.3286 5.86348 10.9907 5.93118 10.6757 6.06264C10.3608 6.19411 10.075 6.38674 9.83496 6.62939L6.77958 9.68477C6.53693 9.9248 6.3443 10.2106 6.21283 10.5255C6.08137 10.8405 6.01367 11.1784 6.01367 11.5197C6.01367 11.861 6.08137 12.199 6.21283 12.5139C6.3443 12.8289 6.53693 13.1147 6.77958 13.3547ZM9.22042 9.68477C9.55799 9.34721 10.1119 9.34721 10.4495 9.68477C11.2602 10.4967 11.7155 11.5971 11.7155 12.7445C11.7155 13.8918 11.2602 14.9923 10.4495 15.8042L7.38546 18.8682C6.57355 19.6789 5.4731 20.1343 4.32575 20.1343C3.17839 20.1343 2.07794 19.6789 1.26603 18.8682C0.455339 18.0563 0 16.9559 0 15.8085C0 14.6612 0.455339 13.5607 1.26603 12.7488L2.5557 11.4592C2.54704 12.1689 2.65956 12.8786 2.90192 13.5624L2.49511 13.9692C2.25246 14.2093 2.05983 14.495 1.92837 14.81C1.7969 15.125 1.72921 15.4629 1.72921 15.8042C1.72921 16.1455 1.7969 16.4834 1.92837 16.7984C2.05983 17.1134 2.25246 17.3991 2.49511 17.6392C2.73514 17.8818 3.02091 18.0744 3.33588 18.2059C3.65085 18.3374 3.98877 18.4051 4.33007 18.4051C4.67138 18.4051 5.0093 18.3374 5.32427 18.2059C5.63924 18.0744 5.92501 17.8818 6.16504 17.6392L9.22042 14.5838C9.46307 14.3438 9.6557 14.058 9.78717 13.743C9.91864 13.428 9.98633 13.0901 9.98633 12.7488C9.98633 12.4075 9.91864 12.0696 9.78717 11.7546C9.6557 11.4397 9.46307 11.1539 9.22042 10.9139C9.13636 10.8351 9.06935 10.7399 9.02354 10.6342C8.97773 10.5285 8.9541 10.4145 8.9541 10.2993C8.9541 10.1841 8.97773 10.0701 9.02354 9.96443C9.06935 9.85873 9.13636 9.76355 9.22042 9.68477Z" fill="#3262AC"/></svg>
                                                <span>Шаблон для заполнения запроса по <a href="<?=$value['additional_template_file']['url']; ?>" download>ссылке</a></span>
                                            </div>
                            <?
                                        }
                            ?>
                                        
                                        
                                    </div>
                            <?
                                }
                            ?>
                        </div>
                    </div>    
                </div>
        <?php
                //print_r($value);
            }
        ?>
    </div>
</section>