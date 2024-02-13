<?php get_header(); ?>

<?php 
  $args = [
    'show_all'     => false,
    'end_size'     => 1,     // количество страниц на концах
    'mid_size'     => 1,     // количество страниц вокруг текущей
    'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
    'prev_text'    => __(''),
    'next_text'    => __(''),
    'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
    'add_fragment' => '', 
    'screen_reader_text' => __('&nbsp;'),
  ]
?>
<style>
section.reviews .btn--show.btn--reviews.reviews__btn--double {
    display: none;
}
.reviews__wrap {
    margin-bottom: 40px!important;
}
.otzivy-text-cnt {
    margin-bottom: 140px;
}
.otzivy-text-cnt h2 {
    text-align: center;
}
.otzivy-text-cnt .picture-row {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: calc(50% - 8px) calc(50% - 8px);
    grid-column-gap: 16px;
    grid-row-gap: 16px;
    margin-bottom: 16px;
}
@media (max-width: 782px) {
    .otzivy-text-cnt .picture-row {
        grid-template-columns: 100%;
    }   
}

section.reviews-v2 {
    padding: 100px 0;
}
section.reviews-v2 .reviews-v2__row {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: calc(40% - 16px) calc(60% - 16px);
    grid-column-gap: 32px;
    grid-row-gap: 32px;
}
section.reviews-v2 .reviews-v2__col {
    
}
section.reviews-v2 .reviews-v2__col .not-found {
    text-align: center;
}
section.reviews-v2 .reviews-v2__col .not-found p {
    font-weight: 400;
    font-size: 16px;
    line-height: 145%;
    text-align: center;
    color: #393939;
    margin-bottom: 0;
}
section.reviews-v2 .reviews-v2__col .not-found svg {
    margin: 60px auto;
}
section.reviews-v2 .reviews-v2__col .not-found .not-found-actions button {
    margin: 0 auto;
}
section.reviews-v2 .reviews-v2__col .not-found .not-found-actions button svg {
    margin: 0 8px 0 0;
}
section.reviews-v2 .reviews-v2__col .not-found .not-found-actions button span {}


section.reviews-v2 .filter-wrap {
    background: #FFFFFF;
    box-shadow: 0px 14px 34px rgba(0, 29, 104, 0.12);
    border-radius: 20px;
    padding: 25px;
}
section.reviews-v2 .filter-block__cnt .title {
    font-weight: 700;
    font-size: 16px;
    line-height: 145%;
    color: #393939;
}
.field-range__cnt *:focus {
    outline: none;
}
.field-range__cnt {
    position: relative;
    /*margin-bottom: 32px;*/
}
.field-range__cnt .tooltip-top {}
.field-range__cnt .tooltip-top .tooltip-top__cnt {
    font-weight: 400;
    font-size: 12px;
    line-height: 145%;
    color: #5381F6;
    display: inline-block;
    position: absolute;
    left: 0%;
    top: 0px;
    white-space: nowrap;
}
.field-range__cnt input[type="range"] {
    -webkit-appearance: none;
    height: 80px;
    padding: 32px 0 16px;
    cursor: pointer;
    width: calc(100% + 0px);
}
.field-range__cnt input[type="range"]::-webkit-slider-thumb {
	-webkit-appearance: none;
	box-sizing: content-box;
	background: #FFFFFF;
    border: 2px solid #5381F6;
    box-shadow: 0px 4px 14px rgba(0, 37, 102, 0.18);
    width: 16px;
    height: 16px;
    border-radius: 50%;
    margin-top: -8px;
}
.field-range__cnt input[type="range"]::-moz-range-thumb {
	background: #FFFFFF;
    border: 2px solid #5381F6;
    box-shadow: 0px 4px 14px rgba(0, 37, 102, 0.18);
    width: 16px;
    height: 16px;
    border-radius: 50%;
    margin-top: -8px;
}
.field-range__cnt input[type="range"]::-ms-thumb {
	background: #FFFFFF;
    border: 2px solid #5381F6;
    box-shadow: 0px 4px 14px rgba(0, 37, 102, 0.18);
    width: 16px;
    height: 16px;
    border-radius: 50%;
    margin-top: -8px;
    z-index: 999;
}
.field-range__cnt input[type="range"]::-webkit-slider-runnable-track {
    /*background: #D7DEEF;*/
    background: #5381F6;
    /*background: transparent;*/
    border-radius: 2px;
    height:4px;
    -webkit-transition: all .4s ease;
    -o-transition: all .4s ease;
    transition: all .4s ease;
}
.field-range__cnt input[type="range"]::-moz-range-track {
    /*background: #D7DEEF;*/
    background: #5381F6;
    /*background: transparent;*/
    background: transparent;
    border-radius: 2px;
    height:4px;
	
}
.field-range__cnt input[type="range"]::-ms-track {
	border-color: transparent;
	color: transparent;
}
.field-range__cnt input[type="range"]::-ms-fill-lower {
	background-color: #5082e0;	
}
.field-range__cnt input[type="range"]::-moz-range-progress {
	background-color: #5082e0;	
}
.field-range__cnt input[type="range"]::-ms-fill-lower {
	background-color: #5082e0;	
}
.field-range__cnt input[type="range"]::-ms-tooltip {
	display: none;
}


.field-range__cnt .range-lines__cnt {
    /*
    height: 8px;
    position: relative;
    width: 100%;
    margin: -49px 8px 0;
    */
}
.field-range__cnt .range-lines__cnt .range-line-item {
    position: absolute;
    top: 44px;
    background: #FFFFFF;
    border-radius: 0px;
    height: 8px;
    width: 4px;
}
.field-range__cnt .range-lines__cnt .range-line-item.range-segment-1 {
    left: 26%;
}
.field-range__cnt .range-lines__cnt .range-line-item.range-segment-2 {
    left: 49.5%;
}
.field-range__cnt .range-lines__cnt .range-line-item.range-segment-3 {
    left: 73%;
}
.field-range__cnt .tooltip-bottom {
    position: relative;
    bottom: 20px;
    margin: 0;
    padding: 0;
    list-style: none;
}
.field-range__cnt .tooltip-bottom li {
    font-weight: 400;
    font-size: 9px;
    line-height: 145%;
    text-align: center;
    color: #A9B0C0;
    position: absolute;
    top: 0;
    white-space: nowrap;
    cursor: pointer;
}
.field-range__cnt .tooltip-bottom li.range-segment-1 {
    left: -4%;
    background: linear-gradient(270deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.8) 100%), #A9B0C0;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-fill-color: transparent;
}
.field-range__cnt .tooltip-bottom li.range-segment-2 {
    left: 18%;
}
.field-range__cnt .tooltip-bottom li.range-segment-3 {
    left: 39%;
}
.field-range__cnt .tooltip-bottom li.range-segment-4 {
    left: 67%;
}
.field-range__cnt .tooltip-bottom li.range-segment-5 {
    left: 92%;
    background: linear-gradient(270deg, rgba(255, 255, 255, 0.8) 0%, rgba(255, 255, 255, 0) 100%), #A9B0C0;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-fill-color: transparent;
}
.filter-block__cnt+.filter-block__cnt {
    padding-top: 30px;
}
.filter-block__cnt .radio {
    display: inline-block;
    margin-bottom: 10px;
    margin-right: 15px;
}
.filter-block__cnt .radio label {
    font-weight: 400;
    font-size: 12px;
    line-height: 145%;
    color: #717B97;
    padding-left: 24px;
}
.filter-block__cnt .m-btm-15 {
    margin-bottom: 15px;
}

  
.filter-block__cnt .checkbox .checkbox__new {
    left: 0;
}
.filter-block__cnt .checkbox label {
    font-weight: 400;
    font-size: 12px;
    line-height: 145%;
    color: #717B97;
    padding-left: 24px;
    white-space: nowrap;
}
.filter-block__cnt .checkbox {
    display: inline-block;
    margin-right: 15px;
    margin-bottom: 10px;
    min-height: auto;
}


.reviews-v2__wrap .filter-wrap .actions {
    margin-top: 30px;
}
.reviews-v2__wrap .filter-wrap .actions button {
    border: none;
    background: #EEF3FF;
    border-radius: 200px;
    display: block;
    width: 100%;
    padding: 8px 0;
    cursor: pointer;
}
.reviews-v2__wrap .filter-wrap .actions button span {
    font-weight: 500;
    font-size: 14px;
    line-height: 145%;
    color: #5381F6;
}

.reviews-selection-grid .reviews-intro .h1 {
    font-weight: 700;
    font-size: 26px;
    line-height: 145%;
    color: #393939;
    margin-bottom: 10px;
}
.reviews-selection-grid .reviews-intro .text-intro {
    font-weight: 500;
    font-size: 16px;
    line-height: 145%;
    color: #717B97;
}
section.reviews-v2 .reviews-v2__col .review-first__cnt {
    background: #FFFFFF;
    box-shadow: 0px 14px 34px rgb(0 29 104 / 12%);
    border-radius: 20px;
    padding: 35px;
}
section.reviews-v2 .reviews-v2__col .review-first__cnt .head {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: auto 100px;
    grid-column-gap: 16px;
    grid-row-gap: 16px;
    margin-bottom: 25px;
    align-items: center;    
}
section.reviews-v2 .reviews-v2__col .review-first__cnt .head .title {
    text-align: left;
    font-weight: 700;
    font-size: 26px;
    line-height: 145%;
    color: #393939;    
}
section.reviews-v2 .reviews-v2__col .review-first__cnt .head .number {
    text-align: right;
    font-weight: 500;
    font-size: 14px;
    line-height: 145%;
    color: #717B97;
}
section.reviews-v2 .reviews-v2__col .review-first__cnt .body .reviews-item {
    margin-bottom: 30px;
}
section.reviews-v2 .reviews-v2__col .review-first__cnt .body .additional-resources-row {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: calc(50% - 8px) calc(50% - 8px);
    grid-column-gap: 16px;
    grid-row-gap: 16px;
    align-items: center;
}
section.reviews-v2 .reviews-v2__col .review-first__cnt .body .reviews-item .additional-items .additional-resources-row img {
    margin-right: 8px;
}
section.reviews-v2 .reviews-v2__col .review-first__cnt .foot .item-features .item-features-row {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: calc(50% - 8px) calc(50% - 8px);
    grid-column-gap: 16px;
    grid-row-gap: 16px;
    align-items: center;
}
section.reviews-v2 .reviews-v2__col .review-first__cnt .foot .item-features .item-features-row .title {
    font-weight: 500;
    font-size: 16px;
    line-height: 145%;
    color: #717B97;
}
section.reviews-v2 .reviews-v2__col .review-first__cnt .foot .item-features .item-features-row .value {
    font-weight: 500;
    font-size: 16px;
    line-height: 145%;
    color: #393939;
}
section.reviews-v2 .reviews-v2__col .review-first__cnt .foot .item-features {
    border-bottom: 1px solid rgb(0 0 0 / 5%);
    padding-bottom: 15px;
    margin-bottom: 15px;
}
section.reviews-v2 .reviews-v2__col .review-first__cnt .foot .link {
    display: block;
    text-align: center;
}
section.reviews-v2 .reviews-v2__col .reviews-selection-grid .review-first {
    margin-bottom: 20px;
}
section.reviews-v2 .reviews-v2__col .review-video-additional__cnt {
    background: #FFFFFF;
    box-shadow: 0px 14px 34px rgb(0 37 102 / 20%);
    border-radius: 20px;
    padding: 35px;
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: repeat(3, 1fr);
    grid-column-gap: 16px;
    grid-row-gap: 16px;
    margin-bottom: 20px;
}
section.reviews-v2 .reviews-v2__col .review-video__cnt img {
    border-radius: 8px;
}
section.reviews-v2 .reviews-v2__col .reviews-item {
    position: relative;
}
section.reviews-v2 .reviews-v2__col .reviews-item .case-number {
    font-weight: 600;
    font-size: 10px;
    line-height: 145%;
    color: #CECECE;
    position: absolute;
    bottom: 10px;
    background: #173887;
    box-shadow: 0px 4px 14px rgb(0 37 102 / 18%);
    border-radius: 5px;
    padding: 5px 8px;
    left: 10px;
}
section.reviews-v2 .reviews-v2__col .reviews-item .case-number__cnt {
    position: absolute;
    bottom: 10px;
    background: #173887;
    box-shadow: 0px 4px 14px rgb(0 37 102 / 18%);
    border-radius: 5px;
    padding: 5px 8px;
    left: 10px;
    right: 10px;
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: repeat(2, 1fr);
    grid-column-gap: 16px;
    grid-row-gap: 16px;
}
section.reviews-v2 .reviews-v2__col .reviews-item .case-number__cnt > span {
    font-weight: 500;
    font-size: 12px;
    line-height: 145%;
    color: #CECECE;    
}
section.reviews-v2 .reviews-v2__col .reviews-item .case-number__cnt span span {
    font-size: 14px;
}
section.reviews-v2 .reviews-v2__col .reviews-item .case-number__cnt > span:first-child {
    text-align: left;
}
section.reviews-v2 .reviews-v2__col .reviews-item .case-number__cnt > span:last-child {
    text-align: right;
}

section.reviews-v2 .reviews-v2__col .review-first {
    margin-bottom: 20px;
}
section.reviews-v2 .filter-more-link {
    display: none;
    margin-top: 10px;
    margin-bottom: 20px;
}
section.reviews-v2 .filter-more-link span {
    font-weight: 500;
    font-size: 14px;
    line-height: 145%;
    color: #5381F6;
    margin-right: 4px;
}
section.reviews-v2 .reviews-v2__col .review-first__cnt .body .additional-resources-row img {
    margin-right: 8px;
}
.screen-reader-text {
    display: none!important;
}
.reviews__slider {
    display: none!important;
}
section.reviews-v2 .reviews-v2__col .review-video-additional__cnt.hidden {
    display: none!important;
}
section.reviews-v2 .radio-block-mobile__cnt {
    display: none;
    margin-top: 10px;
}
@media (max-width: 782px) {
    section.reviews-v2 .hidden-tablet {
        display: none;
    }
    section.reviews-v2 .field-range__cnt {
        display: none;
    }
    section.reviews-v2 .radio-block-mobile__cnt {
        display: block;
    }
    section.reviews-v2 .reviews-v2__row {
        grid-template-columns: 100%;
    }
    section.reviews-v2 .filter-more-link {
        display: block;
    }

}
@media (max-width: 540px) {
    section.reviews-v2 .reviews-v2__col .review-first__cnt {
        background: #FFFFFF;
        box-shadow: 0px 14px 34px rgb(0 29 104 / 12%);
        border-radius: 20px;
        padding: 15px;
    }
    section.reviews-v2 .reviews-v2__col .review-video-additional__cnt {
        padding: 15px;
    }
    section.reviews-v2 .reviews-v2__col .review-video-additional__cnt {
        grid-template-columns: repeat(1, 1fr);
    }
    section.reviews-v2 .reviews-v2__col .reviews-item .case-number__cnt > span:last-child {
        display: none;
    }
    section.reviews-v2 .reviews-v2__col .reviews-item .case-number__cnt {
        grid-template-columns: repeat(1, 1fr);
    }
    section.reviews-v2 .reviews-v2__col .review-first__cnt .head .title {
        text-align: left;
        font-weight: 700;
        font-size: 18px;
    }
    section.reviews-v2 .reviews-v2__col .review-first__cnt .foot .item-features .item-features-row .title {
        font-size: 12px;
    }
    section.reviews-v2 .reviews-v2__col .review-first__cnt .foot .item-features .item-features-row .value {
        font-size: 14px;
    }
    section.reviews-v2 .reviews-v2__col .review-first__cnt .foot .item-features .item-features-row {
        grid-template-columns: 100%;
        grid-row-gap: 4px;
    }
    section.reviews-v2 .reviews-v2__col .review-first__cnt .head {
        grid-template-columns: auto 70px;
    }
    section.reviews-v2 .reviews-v2__col .review-first__cnt .body .additional-resources-row {
        grid-template-columns: 100%;
        grid-row-gap: 0px;
    }
    .field-range__cnt .tooltip-bottom {
        display: none;
    }
    .rating__item {
        width: 50%;
    }
}
</style>
<main>
    <section class="section reviews-v2" style="padding-bottom: 0;margin-bottom: 0;">
        <div class="container">
            <div class="inner__head">
                <h1 class="title-page"><?php echo get_theme_mod( 'otzivy_header' ); ?></h1>
            </div>
            <div class="reviews-v2__wrap hidden_">
                <div class="reviews-v2__row">
                    <div class="reviews-v2__col">
                        <?php
                            $min_summ = isset($_GET['min_summ']) ? $_GET['min_summ'] : '0';
                            $max_summ = isset($_GET['max_summ']) ? $_GET['max_summ'] : '700000000';
                            $age = isset($_GET['age']) ? $_GET['age'] : 'all';
                            $work_type = isset($_GET['work_type']) ? $_GET['work_type'] : 'all';
                            $problem = isset($_GET['problem']) ? $_GET['problem'] : 'all';
                            $debt = isset($_GET['debt']) ? $_GET['debt'] : 'all';
                            $creditors = isset($_GET['creditors']) ? $_GET['creditors'] : 'all';
                            $tag_others_bankruptcy_guarantor = $_GET['tag_others_bankruptcy_guarantor'];
                            $tag_others_family_bankruptcy = $_GET['tag_others_family_bankruptcy'];
                            $tag_others_bankruptcy_proxy = $_GET['tag_others_bankruptcy_proxy'];
                            $tag_others_other_companies = $_GET['tag_others_other_companies'];
                            $tag_arr = array();
                            if ($age != 'all' && !empty($age)) { $tag_arr[] = $age; }
                            if ($work_type != 'all' && !empty($work_type)) { $tag_arr[] = $work_type; }
                            if ($problem != 'all' && !empty($problem)) { $tag_arr[] = $problem; }
                            if ($debt != 'all' && !empty($debt)) { $tag_arr[] = $debt; }
                            if ($creditors != 'all' && !empty($creditors)) { $tag_arr[] = $creditors; }
                            if (!empty($tag_others_bankruptcy_guarantor)) { $tag_arr[] = $tag_others_bankruptcy_guarantor; }
                            if (!empty($tag_others_family_bankruptcy)) { $tag_arr[] = $tag_others_family_bankruptcy; }
                            if (!empty($tag_others_bankruptcy_proxy)) { $tag_arr[] = $tag_others_bankruptcy_proxy; }
                            if (!empty($tag_others_other_companies)) { $tag_arr[] = $tag_others_other_companies; }
                            $range_summ_input_val = 0;
                            if ($min_summ == '300000' && $max_summ == '500000') {
                                $range_summ_input_val = 1;
                                $tag_arr[] = 'debt_300_500';
                            }
                            if ($min_summ == '500000' && $max_summ == '1000000') {
                                $range_summ_input_val = 2;
                                $tag_arr[] = 'debt_500_1k';
                            }
                            if ($min_summ == '1000000' && $max_summ == '3000000') {
                                $range_summ_input_val = 3;
                                $tag_arr[] = 'debt_1k_3k';
                            }
                            if ($min_summ == '3000000' && $max_summ == '700000000') {
                                $range_summ_input_val = 4;
                                $tag_arr[] = 'debt_3k';
                            }
                            
                            if (empty($tag_arr)) {
                                $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                $parts = parse_url($url);
                                parse_str($parts['query'], $query);
                                
                                if ($query['age'] != 'all' && $query['age'] != '') {
                                    $tag_arr[] = $query['age'];
                                }
                                if ($query['work_type'] != 'all' && $query['work_type'] != '') {
                                    $tag_arr[] = $query['work_type'];
                                }
                                if ($query['problem'] != 'all' && $query['problem'] != '') {
                                    $tag_arr[] = $query['problem'];
                                }
                                if ($query['debt'] != 'all' && $query['debt'] != '') {
                                    $tag_arr[] = $query['debt'];
                                }
                                if ($query['creditors'] != 'all' && $query['creditors'] != '') {
                                    $tag_arr[] = $query['creditors'];
                                }
                                $range_summ_input_val = 0;
                                if ($query['min_summ'] == '300000' && $query['max_summ'] == '500000') {
                                    $range_summ_input_val = 1;
                                    $tag_arr[] = 'debt_300_500';
                                }
                                if ($query['min_summ'] == '500000' && $query['max_summ'] == '1000000') {
                                    $range_summ_input_val = 2;
                                    $tag_arr[] = 'debt_500_1k';
                                }
                                if ($query['min_summ'] == '1000000' && $query['max_summ'] == '3000000') {
                                    $range_summ_input_val = 3;
                                    $tag_arr[] = 'debt_1k_3k';
                                }
                                if ($query['min_summ'] == '3000000' && $query['max_summ'] == '700000000') {
                                    $range_summ_input_val = 4;
                                    $tag_arr[] = 'debt_3k';
                                }
                            }
                        ?>
                        <div class="hidden">
                            <?php print_r($tag_arr); ?>
                            <?php
                                /*
                                $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                $parts = parse_url($url);
                                parse_str($parts['query'], $query);
                                print_r($query);
                                */
                            ?>
                        </div>
                        
                        <div class="filter-wrap">
                            <div class="filter-block__cnt first-filter-block__cnt">
                                <div class="title">Сумма долга</div>
                                <div class="field-range__cnt">
                                    <div class="tooltip-top">
                                        <div class="tooltip-top__cnt">Все суммы</div>
                                    </div>
                                    <div class="range-lines__cnt">
                                        <input type="range" name="range_summ" value="<?=$range_summ_input_val; ?>" class="field_range_summ" id="answer_range_summ" min="0" max="4" step="1">
                                        <div class="range-line-item range-segment-1"></div>
                                        <div class="range-line-item range-segment-2"></div>
                                        <div class="range-line-item range-segment-3"></div>
                                    </div>
                                    <ul class="tooltip-bottom">
                                        <li class="range-segment-1" data-value="0" data-min="0" data-max="700000000">Все суммы</li>
                                        <li class="range-segment-2" data-value="1" data-min="300000" data-max="500000">300 - 500 т.р.</li>
                                        <li class="range-segment-3" data-value="2" data-min="500000" data-max="1000000">500 т.р. - 1 млн.р.</li>
                                        <li class="range-segment-4" data-value="3" data-min="1000000" data-max="3000000">1 - 3 млн.р.</li>
                                        <li class="range-segment-5" data-value="4" data-min="3000000" data-max="700000000">от 3 млн.р.</li>
                                    </ul>
                                </div>
                                <div class="radio-block-mobile__cnt">
                                    <div class="radio <?php if ($min_summ == "0" && $max_summ == "700000000") { echo "active"; } ?>">
                                        <input class="radio__default" id="tag_summ_1" type="radio" name="tag_summ" value="all" <?php if ($min_summ == "0" && $max_summ == "700000000") { echo "checked='checked'"; } ?>>
                                        <span class="radio__new"></span>
                                        <label class="radio__label" for="tag_summ_1">Любая сумма</label>
                                    </div>
                                    <div class="radio <?php if ($min_summ == "300000" && $max_summ == "500000") { echo "active"; } ?>">
                                        <input class="radio__default" id="tag_summ_2" type="radio" name="tag_summ" value="from_300000" <?php if ($min_summ == "300000" && $max_summ == "500000") { echo "checked='checked'"; } ?>>
                                        <span class="radio__new"></span>
                                        <label class="radio__label" for="tag_summ_2">300 000 - 500 000 рублей</label>
                                    </div>
                                    <div class="radio <?php if ($min_summ == "500000" && $max_summ == "1000000") { echo "active"; } ?>">
                                        <input class="radio__default" id="tag_summ_3" type="radio" name="tag_summ" value="from_500000" <?php if ($min_summ == "500000" && $max_summ == "1000000") { echo "checked='checked'"; } ?>>
                                        <span class="radio__new"></span>
                                        <label class="radio__label" for="tag_summ_3">500 000 - 1 000 000 рублей</label>
                                    </div>
                                    <div class="radio <?php if ($min_summ == "1000000" && $max_summ == "3000000") { echo "active"; } ?>">
                                        <input class="radio__default" id="tag_summ_4" type="radio" name="tag_summ" value="from_1000000" <?php if ($min_summ == "1000000" && $max_summ == "3000000") { echo "checked='checked'"; } ?>>
                                        <span class="radio__new"></span>
                                        <label class="radio__label" for="tag_summ_4">1 000 000 - 3 000 000 рублей</label>
                                    </div>
                                    <div class="radio <?php if ($min_summ == "3000000" && $max_summ == "700000000") { echo "active"; } ?>">
                                        <input class="radio__default" id="tag_summ_5" type="radio" name="tag_summ" value="from_3000000" <?php if ($min_summ == "3000000" && $max_summ == "700000000") { echo "checked='checked'"; } ?>>
                                        <span class="radio__new"></span>
                                        <label class="radio__label" for="tag_summ_5">более 3 000 000 рублей</label>
                                    </div>    
                                </div>
                            </div>
                            <div class="filter-more-link">
                                <span>Показать все фильтры</span>
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.55189 7.66542C4.30534 8.11153 3.69465 8.11153 3.44811 7.66542L0.0879975 1.58561C-0.160471 1.13603 0.146773 0.571428 0.639892 0.571428L7.36011 0.571429C7.85323 0.571429 8.16047 1.13603 7.912 1.58561L4.55189 7.66542Z" fill="#5381F6"/></svg>
                            </div>
                            <div class="filter-block__cnt hidden-tablet">
                                <div class="title m-btm-15">Возраст</div>
                                <div class="radio <?php if ($age == "all") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_2_1" type="radio" name="age" value="all" <?php if ($age == "all") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_2_1">Любой возраст</label>
                                </div>
                                <div class="radio <?php if ($age == "to_30_years") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_2_2" type="radio" name="age" value="to_30_years" <?php if ($age == "to_30_years") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_2_2">До 30 лет</label>
                                </div>
                                <div class="radio <?php if ($age == "over_30_years") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_2_3" type="radio" name="age" value="over_30_years" <?php if ($age == "over_30_years") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_2_3">Старше 30 лет</label>
                                </div>
                                <div class="radio <?php if ($age == "over_40_years") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_2_4" type="radio" name="age" value="over_40_years" <?php if ($age == "over_40_years") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_2_4">Старше 40 лет</label>
                                </div>
                                <div class="radio <?php if ($age == "over_65_years") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_2_5" type="radio" name="age" value="over_65_years" <?php if ($age == "over_65_years") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_2_5">Старше 65 лет</label>
                                </div>
                            </div>
                            <div class="filter-block__cnt hidden-tablet">
                                <div class="title m-btm-15">Виды деятельности</div>
                                <div class="radio <?php if ($work_type == "all") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_3_1" type="radio" name="work_type" value="all" <?php if ($work_type == "all") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_3_1">Все виды деятельности</label>
                                </div>
                                <div class="radio <?php if ($work_type == "ip") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_3_2" type="radio" name="work_type" value="ip" <?php if ($work_type == "ip") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_3_2">ИП</label>
                                </div>
                                <div class="radio <?php if ($work_type == "self_employed") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_3_3" type="radio" name="work_type" value="self_employed" <?php if ($work_type == "self_employed") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_3_3">Самозанятые</label>
                                </div>
                                <div class="radio <?php if ($work_type == "pensionery") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_3_4" type="radio" name="work_type" value="pensionery" <?php if ($work_type == "pensionery") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_3_4">Пенсионеры</label>
                                </div>
                                <div class="radio <?php if ($work_type == "bezrabotnye") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_3_5" type="radio" name="work_type" value="bezrabotnye" <?php if ($work_type == "bezrabotnye") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_3_5">Безработные</label>
                                </div>
                            </div>
                            <div class="filter-block__cnt hidden-tablet">
                                <div class="title m-btm-15">Проблемы клиента</div>
                                <div class="radio <?php if ($problem == "all") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_5_1" type="radio" name="problem" value="all" <?php if ($problem == "all") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_5_1">Все проблемы</label>
                                </div>
                                <div class="radio <?php if ($problem == "foreclosures_banks_i_mfo") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_5_2" type="radio" name="problem" value="foreclosures_banks_i_mfo" <?php if ($problem == "foreclosures_banks_i_mfo") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_5_2">Службы взыскания банков и МФО</label>
                                </div>
                                <div class="radio <?php if ($problem == "collection_agencies") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_5_3" type="radio" name="problem" value="collection_agencies" <?php if ($problem == "collection_agencies") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_5_3">Коллекторские агенства</label>
                                </div>
                                <div class="radio <?php if ($problem == "home_visits") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_5_4" type="radio" name="problem" value="home_visits" <?php if ($problem == "home_visits") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_5_4">Визиты домой коллекторов и ФССП</label>
                                </div>
                                <div class="radio <?php if ($problem == "courts_with_banks") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_5_5" type="radio" name="problem" value="courts_with_banks" <?php if ($problem == "courts_with_banks") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_5_5">Суды с банками</label>
                                </div>
                                <div class="radio <?php if ($problem == "calls_family_and_friends") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_5_6" type="radio" name="problem" value="calls_family_and_friends" <?php if ($problem == "calls_family_and_friends") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_5_6">Звонки родным и друзьям</label>
                                </div>
                                <div class="radio <?php if ($problem == "calls_work") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_5_7" type="radio" name="problem" value="calls_work" <?php if ($problem == "calls_work") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_5_7">Звонки на работу</label>
                                </div>
                                <div class="radio <?php if ($problem == "fssp") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_5_8" type="radio" name="problem" value="fssp" <?php if ($problem == "fssp") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_5_8">ФССП</label>
                                </div>
                                <div class="radio <?php if ($problem == "loss_property") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_5_9" type="radio" name="problem" value="loss_property" <?php if ($problem == "loss_property") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_5_9">Потеря имущества</label>
                                </div>
                                <div class="radio <?php if ($problem == "ban_on_traveling") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_5_10" type="radio" name="problem" value="ban_on_traveling" <?php if ($problem == "ban_on_traveling") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_5_10">Запрет на выезд за границу</label>
                                </div>
                                <div class="radio <?php if ($problem == "salary_arrest") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_5_11" type="radio" name="problem" value="salary_arrest" <?php if ($problem == "salary_arrest") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_5_11">Арест зарплаты</label>
                                </div>
                                <div class="radio <?php if ($problem == "problems_device_work") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_5_12" type="radio" name="problem" value="problems_device_work" <?php if ($problem == "problems_device_work") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_5_12">Проблемы с устройством на работу</label>
                                </div>
                            </div>
                            <div class="filter-block__cnt hidden-tablet">
                                <div class="title m-btm-15">Вид долгов</div>
                                <div class="radio <?php if ($debt == "all") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_6_1" type="radio" name="debt" value="all" <?php if ($debt == "all") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_6_1">Все виды долгов</label>
                                </div>
                                <div class="radio <?php if ($debt == "bank_loans") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_6_2" type="radio" name="debt" value="bank_loans" <?php if ($debt == "bank_loans") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_6_2">Банковские кредиты</label>
                                </div>
                                <div class="radio <?php if ($debt == "credit_cards") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_6_3" type="radio" name="debt" value="credit_cards" <?php if ($debt == "credit_cards") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_6_3">Кредитные карты</label>
                                </div>
                                <div class="radio <?php if ($debt == "loans_to_mfo") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_6_4" type="radio" name="debt" value="loans_to_mfo" <?php if ($debt == "loans_to_mfo") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_6_4">Займы в МФО</label>
                                </div>
                                <div class="radio <?php if ($debt == "tax_debts") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_6_5" type="radio" name="debt" value="tax_debts" <?php if ($debt == "tax_debts") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_6_5">Долги по налогам</label>
                                </div>
                                <div class="radio <?php if ($debt == "penalty_debts") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_6_6" type="radio" name="debt" value="penalty_debts" <?php if ($debt == "penalty_debts") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_6_6">Долги по штрафам</label>
                                </div>
                                <div class="radio <?php if ($debt == "zhkkh_debts") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_6_7" type="radio" name="debt" value="zhkkh_debts" <?php if ($debt == "zhkkh_debts") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_6_7">Долги по ЖКХ</label>
                                </div>
                            </div>
                            <div class="filter-block__cnt hidden-tablet">
                                <div class="title m-btm-15">Количество кредиторов</div>
                                <div class="radio <?php if ($creditors == "all") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_7_1" type="radio" name="creditors" value="all" <?php if ($creditors == "all") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_7_1">Любое количество</label>
                                </div>
                                <div class="radio <?php if ($creditors == "less_5_lenders") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_7_2" type="radio" name="creditors" value="less_5_lenders" <?php if ($creditors == "less_5_lenders") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_7_2">Меньше 5</label>
                                </div>
                                <div class="radio <?php if ($creditors == "less_10_lenders") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_7_3" type="radio" name="creditors" value="less_10_lenders" <?php if ($creditors == "less_10_lenders") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_7_3">Меньше 10</label>
                                </div>
                                <div class="radio <?php if ($creditors == "more_10_lenders") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_7_4" type="radio" name="creditors" value="more_10_lenders" <?php if ($creditors == "more_10_lenders") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_7_4">Больше 10</label>
                                </div>
                                <div class="radio <?php if ($creditors == "more_20_lenders") { echo "active"; } ?>">
                                    <input class="radio__default" id="tag_7_5" type="radio" name="creditors" value="more_20_lenders" <?php if ($creditors == "more_20_lenders") { echo "checked='checked'"; } ?>>
                                    <span class="radio__new"></span>
                                    <label class="radio__label" for="tag_7_5">Больше 20</label>
                                </div>
                            </div>
                            <div class="filter-block__cnt hidden-tablet">
                                <div class="title m-btm-15">Другое</div>
                                <div class="checkbox">
                                    <input class="checkbox__default" id="tag_others_1" type="checkbox" name="tag_others_bankruptcy_guarantor" value="bankruptcy_guarantor" <?php if (!empty($tag_others_bankruptcy_guarantor)) { echo "checked='checked'"; } ?>>
                                    <span class="checkbox__new"></span>
                                    <label class="checkbox__label" for="tag_others_1">Банкротство поручителя</label>
                                </div>
                                <div class="checkbox">
                                    <input class="checkbox__default" id="tag_others_3" type="checkbox" name="tag_others_family_bankruptcy" value="family_bankruptcy" <?php if (!empty($tag_others_family_bankruptcy)) { echo "checked='checked'"; } ?>>
                                    <span class="checkbox__new"></span>
                                    <label class="checkbox__label" for="tag_others_3">Семейное банкротство</label>
                                </div>
                                <div class="checkbox">
                                    <input class="checkbox__default" id="tag_others_2" type="checkbox" name="tag_others_bankruptcy_proxy" value="bankruptcy_proxy" <?php if (!empty($tag_others_bankruptcy_proxy)) { echo "checked='checked'"; } ?>>
                                    <span class="checkbox__new"></span>
                                    <label class="checkbox__label" for="tag_others_2">Банкротство по доверенности</label>
                                </div>
                                <div class="checkbox">
                                    <input class="checkbox__default" id="tag_others_4" type="checkbox" name="tag_others_other_companies" value="other_companies" <?php if (!empty($tag_others_other_companies)) { echo "checked='checked'"; } ?>>
                                    <span class="checkbox__new"></span>
                                    <label class="checkbox__label" for="tag_others_4">Опыт в других компаниях</label>
                                </div>
                            </div>
                            <div class="actions <?php if(empty($tag_arr)) { echo "hidden hidden-tablet"; } ?>">
                                <button class="reset-filter">
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.783113 0.134361C0.962261 -0.0447866 1.25272 -0.0447866 1.43186 0.134361L9.86564 8.56813C10.0448 8.74728 10.0448 9.03774 9.86564 9.21689L9.21689 9.86564C9.03774 10.0448 8.74728 10.0448 8.56814 9.86564L0.134361 1.43186C-0.044787 1.25272 -0.0447869 0.962261 0.134361 0.783113L0.783113 0.134361Z" fill="#5381F6"/><path d="M0.134361 9.21689C-0.0447869 9.03774 -0.0447869 8.74728 0.134361 8.56813L8.56814 0.134361C8.74728 -0.044787 9.03774 -0.0447869 9.21689 0.134361L9.86564 0.783113C10.0448 0.962261 10.0448 1.25272 9.86564 1.43186L1.43186 9.86564C1.25272 10.0448 0.962261 10.0448 0.783113 9.86564L0.134361 9.21689Z" fill="#5381F6"/></svg>
                                    <span>Очистить всё</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="reviews-v2__col">
                        <div class="not-found hidden">
                            <p>К сожалению, мы не нашли результатов по вашим параметрам. Попробуйте задать другие параметры поиска.</p>
                            <svg width="263" height="207" viewBox="0 0 263 207" fill="none" xmlns="http://www.w3.org/2000/svg"><g opacity="0.5"><g opacity="0.2"><path fill-rule="evenodd" clip-rule="evenodd" d="M145.411 35C165.576 34.9883 178.302 54.1911 191.86 69.2946C207.328 86.5257 229.92 102.496 226.688 125.542C223.308 149.638 199.572 164.609 177.228 173.62C156.948 181.798 132.777 183.452 115.049 170.561C99.4434 159.212 102.828 136.508 99.7884 117.308C97.1592 100.698 90.8957 84.0205 99.0281 69.3486C108.888 51.5598 125.253 35.0117 145.411 35Z" fill="#5381F6"/><path fill-rule="evenodd" clip-rule="evenodd" d="M145.411 35C165.576 34.9883 178.302 54.1911 191.86 69.2946C207.328 86.5257 229.92 102.496 226.688 125.542C223.308 149.638 199.572 164.609 177.228 173.62C156.948 181.798 132.777 183.452 115.049 170.561C99.4434 159.212 102.828 136.508 99.7884 117.308C97.1592 100.698 90.8957 84.0205 99.0281 69.3486C108.888 51.5598 125.253 35.0117 145.411 35Z" fill="url(#paint0_linear_8480_146034)"/></g><path d="M144.174 122.907C142.717 124.364 140.355 124.364 138.898 122.907L108.093 92.1021C106.636 90.6452 106.636 88.2831 108.093 86.8262L108.826 86.0927C110.283 84.6358 112.645 84.6358 114.102 86.0927L144.907 116.898C146.364 118.355 146.364 120.717 144.907 122.174L144.174 122.907Z" fill="url(#paint1_linear_8480_146034)"/><path d="M108.093 122.174C106.636 120.717 106.636 118.355 108.093 116.898L138.898 86.0927C140.355 84.6358 142.717 84.6358 144.174 86.0927L144.907 86.8262C146.364 88.2831 146.364 90.6452 144.907 92.1021L114.102 122.907C112.645 124.364 110.283 124.364 108.826 122.907L108.093 122.174Z" fill="url(#paint2_linear_8480_146034)"/><path fill-rule="evenodd" clip-rule="evenodd" d="M164.115 99.5241C169.049 96.044 174.885 94.1225 180.89 94.0004C189.048 93.9586 196.893 97.192 202.718 102.998C208.544 108.803 211.88 116.711 212 125.003C211.999 131.108 210.224 137.077 206.899 142.161C203.574 147.245 198.846 151.218 193.308 153.582C187.771 155.946 181.67 156.595 175.771 155.448C169.871 154.301 164.437 151.409 160.148 147.135C155.859 142.861 152.907 137.395 151.662 131.423C150.417 125.45 150.935 119.237 153.15 113.562C155.366 107.888 159.18 103.004 164.115 99.5241ZM181.5 149C194.479 149 205 138.479 205 125.5C205 112.521 194.479 102 181.5 102C168.521 102 158 112.521 158 125.5C158 138.479 168.521 149 181.5 149Z" fill="url(#paint3_linear_8480_146034)"/><path fill-rule="evenodd" clip-rule="evenodd" d="M204.294 155.928C207.342 153.592 210.002 150.747 212.152 147.495L228.579 163.922C230.141 165.485 230.141 168.017 228.579 169.579L226.09 172.068C224.528 173.63 221.996 173.63 220.434 172.068L204.294 155.928Z" fill="url(#paint4_linear_8480_146034)"/><circle opacity="0.4" cx="216.5" cy="27.5" r="15.5" fill="url(#paint5_linear_8480_146034)"/><circle opacity="0.4" cx="97.5" cy="27.5" r="4.5" fill="url(#paint6_linear_8480_146034)"/><circle opacity="0.8" cx="47.5" cy="175.5" r="15.5" fill="url(#paint7_linear_8480_146034)"/><path fill-rule="evenodd" clip-rule="evenodd" d="M148.76 152.416H63.1667C61.4723 152.416 59.8472 151.743 58.6491 150.545C57.4509 149.347 56.7778 147.722 56.7778 146.027V62.9719C56.7778 61.2775 57.4509 59.6524 58.6491 58.4543C59.8472 57.2561 61.4723 56.583 63.1667 56.583H187.056C188.75 56.583 190.375 57.2561 191.573 58.4543C192.771 59.6524 193.445 61.2775 193.445 62.9719V83.8964C191.36 83.2536 189.225 82.7695 187.056 82.4513V62.9719H63.1667V146.027H144.429C145.677 148.28 147.126 150.419 148.76 152.416Z" fill="url(#paint8_linear_8480_146034)"/></g><defs><linearGradient id="paint0_linear_8480_146034" x1="161" y1="35" x2="161" y2="121.373" gradientUnits="userSpaceOnUse"><stop stop-color="white" stop-opacity="0"/><stop offset="0.0001" stop-color="white" stop-opacity="0"/><stop offset="1" stop-color="white" stop-opacity="0.63"/></linearGradient><linearGradient id="paint1_linear_8480_146034" x1="126.5" y1="85" x2="126.5" y2="124" gradientUnits="userSpaceOnUse"><stop stop-color="#FF9C9B"/><stop offset="1" stop-color="#D83634"/></linearGradient><linearGradient id="paint2_linear_8480_146034" x1="126.5" y1="85" x2="126.5" y2="124" gradientUnits="userSpaceOnUse"><stop stop-color="#FF9C9B"/><stop offset="1" stop-color="#D83634"/></linearGradient><linearGradient id="paint3_linear_8480_146034" x1="180.095" y1="156" x2="180.095" y2="94" gradientUnits="userSpaceOnUse"><stop stop-color="#3C70F4"/><stop offset="1" stop-color="#638DF6"/></linearGradient><linearGradient id="paint4_linear_8480_146034" x1="216.436" y1="173.239" x2="216.436" y2="147.495" gradientUnits="userSpaceOnUse"><stop stop-color="#3C70F4"/><stop offset="1" stop-color="#638DF6"/></linearGradient><linearGradient id="paint5_linear_8480_146034" x1="215.786" y1="43" x2="215.786" y2="12" gradientUnits="userSpaceOnUse"><stop stop-color="#3C70F4"/><stop offset="1" stop-color="#638DF6"/></linearGradient><linearGradient id="paint6_linear_8480_146034" x1="97.2928" y1="32" x2="97.2928" y2="23" gradientUnits="userSpaceOnUse"><stop stop-color="#3C70F4"/><stop offset="1" stop-color="#638DF6"/></linearGradient><linearGradient id="paint7_linear_8480_146034" x1="46.7862" y1="191" x2="46.7862" y2="160" gradientUnits="userSpaceOnUse"><stop stop-color="#3C70F4"/><stop offset="1" stop-color="#638DF6"/></linearGradient><linearGradient id="paint8_linear_8480_146034" x1="121.964" y1="152.416" x2="121.964" y2="56.583" gradientUnits="userSpaceOnUse"><stop stop-color="#3C70F4"/><stop offset="1" stop-color="#638DF6"/></linearGradient></defs></svg>
                            <div class="not-found-actions">
                                <a href="/otzyvy/" class="btn">
                                    <svg style="margin: 0 8px 0 0;" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_8484_1523)"><path d="M17.2605 10.4411C17.0091 10.3627 16.7369 10.3869 16.5033 10.5085C16.2697 10.63 16.0936 10.8391 16.0133 11.09C15.542 12.5322 14.6231 13.7862 13.3903 14.6697C12.1575 15.5531 10.6752 16.0199 9.15904 16.0021C7.28368 16.0235 5.4764 15.2997 4.13351 13.9896C2.79062 12.6795 2.02173 10.89 1.99543 9.01338C2.02173 7.13682 2.79062 5.34727 4.13351 4.03716C5.4764 2.72704 7.28368 2.0033 9.15904 2.02463C10.8527 2.02054 12.4943 2.6105 13.7984 3.69195L11.6334 3.33253C11.5036 3.31116 11.3709 3.31568 11.2429 3.34581C11.1149 3.37594 10.9941 3.4311 10.8875 3.50811C10.7809 3.58512 10.6905 3.68247 10.6216 3.79455C10.5527 3.90663 10.5066 4.03123 10.486 4.16119C10.4647 4.29104 10.4692 4.42382 10.4993 4.55192C10.5294 4.68001 10.5845 4.80088 10.6615 4.90758C10.7384 5.01429 10.8357 5.10471 10.9477 5.17366C11.0597 5.24261 11.1842 5.28872 11.3141 5.30935L15.5444 6.00822H15.714C15.8297 6.00808 15.9445 5.98782 16.0533 5.94832C16.0898 5.93444 16.1236 5.91415 16.153 5.88841C16.2246 5.8618 16.2918 5.82479 16.3526 5.77859L16.4424 5.66877C16.4424 5.61885 16.5322 5.57891 16.5721 5.51901C16.612 5.45911 16.5721 5.41917 16.622 5.37923C16.6495 5.32109 16.6729 5.26103 16.6918 5.19952L17.4401 1.20595C17.465 1.07484 17.4638 0.940105 17.4367 0.809441C17.4095 0.678777 17.3569 0.554742 17.2819 0.444418C17.2069 0.334094 17.1108 0.239641 16.9993 0.166453C16.8878 0.0932637 16.763 0.0427723 16.6319 0.0178612C16.5009 -0.00704982 16.3663 -0.00589279 16.2357 0.0212663C16.1051 0.0484255 15.9812 0.101055 15.8709 0.176149C15.6483 0.32781 15.4949 0.561769 15.4447 0.82656L15.1753 2.27423C13.5051 0.825802 11.3692 0.0282752 9.15904 0.0278452C6.75447 0.00654673 4.43967 0.940672 2.72257 2.62525C1.00547 4.30982 0.0263306 6.60724 0 9.01338C0.0263306 11.4195 1.00547 13.7169 2.72257 15.4015C4.43967 17.0861 6.75447 18.0202 9.15904 17.9989C11.1077 18.0289 13.0145 17.432 14.5987 16.296C16.1829 15.1601 17.3608 13.5452 17.9589 11.6891C17.9967 11.5613 18.0086 11.4271 17.9938 11.2946C17.979 11.1622 17.9379 11.034 17.8728 10.9176C17.8077 10.8013 17.72 10.6992 17.6148 10.6174C17.5097 10.5355 17.3892 10.4756 17.2605 10.4411Z" fill="white"/></g><defs><clipPath id="clip0_8484_1523"><rect width="18" height="18" fill="white"/></clipPath></defs></svg>
                                    <span>Сбросить параметры поиска</span>
                                </a>
                            </div>
                        </div>
                        <div class="reviews-selection-grid">
                            <?php
                                $pagination_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                if ($pagination_paged > 1) {
                                    $pagination_offset = 21 * ($pagination_paged-1);
                                    if (!empty($tag_arr)) {
                                        $args_video_reviews = ([
                                            'posts_per_page' => '21',
                                            'posts_per_archive_page' => '21',
                                            'post_type'   => 'otzyvy',
                                            'post_status' => 'publish',
                                            'offset'        => $pagination_offset,
                                            'orderby'   => array(
                                                'date' =>'DESC',
                                            ),
                                            'tax_query'   => [
                                                [
                                                    'taxonomy'  => 'types',
                                                    'field'     => 'slug',
                                                    'terms'     => 'video'
                                                ], [
                                                    'taxonomy' => 'mark',
                                                    'field' => 'slug',
                                                    'terms' => $tag_arr,
                                                    'operator' => 'IN'
                                                ],
                                            ],
                                        ]);
                                        $args_photo_reviews = ([
                                            'posts_per_page' => '21',
                                            'posts_per_archive_page' => '21',
                                            'post_type'   => 'otzyvy',
                                            'post_status' => 'publish',
                                            'offset'        => $pagination_offset,
                                            'orderby'   => array(
                                                'date' =>'DESC',
                                            ),
                                            'tax_query'   => [
                                                [
                                                    'taxonomy'  => 'types',
                                                    'field'     => 'slug',
                                                    'terms'     => 'foto'
                                                ], [
                                                    'taxonomy' => 'mark',
                                                    'field' => 'slug',
                                                    'terms' => $tag_arr,
                                                    'operator' => 'IN'
                                                ],
                                            ],
                                        ]);
                                    } else {
                                        $args_video_reviews = ([
                                            'posts_per_page' => '21',
                                            'posts_per_archive_page' => '21',
                                            'post_type'   => 'otzyvy',
                                            'post_status' => 'publish',
                                            'offset'        => $pagination_offset,
                                            'orderby'   => array(
                                                'date' =>'DESC',
                                            ),
                                            'tax_query'   => [
                                                [
                                                    'taxonomy'  => 'types',
                                                    'field'     => 'slug',
                                                    'terms'     => 'video'
                                                ],
                                            ],
                                        ]);
                                        $args_photo_reviews = ([
                                            'posts_per_page' => '21',
                                            'posts_per_archive_page' => '21',
                                            'post_type'   => 'otzyvy',
                                            'post_status' => 'publish',
                                            'offset'        => $pagination_offset,
                                            'orderby'   => array(
                                                'date' =>'DESC',
                                            ),
                                            'tax_query'   => [
                                                [
                                                    'taxonomy'  => 'types',
                                                    'field'     => 'slug',
                                                    'terms'     => 'foto'
                                                ],
                                            ],
                                        ]);
                                    }
                                } else {
                                    if (!empty($tag_arr)) {
                                        $args_video_reviews = ([
                                            'posts_per_page' => '21',
                                            'posts_per_archive_page' => '21',
                                            'post_type'   => 'otzyvy',
                                            'post_status' => 'publish',
                                            'orderby'   => array(
                                                'date' =>'DESC',
                                            ),
                                            'tax_query'   => [
                                                [
                                                    'taxonomy'  => 'types',
                                                    'field'     => 'slug',
                                                    'terms'     => 'video'
                                                ], [
                                                    'taxonomy' => 'mark',
                                                    'field' => 'slug',
                                                    'terms' => $tag_arr,
                                                    'operator' => 'IN'
                                                ],
                                            ],
                                        ]);
                                        $args_photo_reviews = ([
                                            'posts_per_page' => '21',
                                            'posts_per_archive_page' => '21',
                                            'post_type'   => 'otzyvy',
                                            'post_status' => 'publish',
                                            'orderby'   => array(
                                                'date' =>'DESC',
                                            ),
                                            'tax_query'   => [
                                                [
                                                    'taxonomy'  => 'types',
                                                    'field'     => 'slug',
                                                    'terms'     => 'foto'
                                                ], [
                                                    'taxonomy' => 'mark',
                                                    'field' => 'slug',
                                                    'terms' => $tag_arr,
                                                    'operator' => 'IN'
                                                ],
                                            ],
                                        ]);
                                    } else {
                                        $args_video_reviews = ([
                                            'posts_per_page' => '21',
                                            'posts_per_archive_page' => '21',
                                            'post_type'   => 'otzyvy',
                                            'post_status' => 'publish',
                                            'orderby'   => array(
                                                'date' =>'DESC',
                                            ),
                                            'tax_query'   => [
                                                [
                                                    'taxonomy'  => 'types',
                                                    'field'     => 'slug',
                                                    'terms'     => 'video'
                                                ],
                                            ],
                                        ]);
                                        $args_photo_reviews = ([
                                            'posts_per_page' => '21',
                                            'posts_per_archive_page' => '21',
                                            'post_type'   => 'otzyvy',
                                            'post_status' => 'publish',
                                            'orderby'   => array(
                                                'date' =>'DESC',
                                            ),
                                            'tax_query'   => [
                                                [
                                                    'taxonomy'  => 'types',
                                                    'field'     => 'slug',
                                                    'terms'     => 'foto'
                                                ],
                                            ],
                                        ]);
                                    }
                                }
                                $video_reviews_arr = new WP_Query($args_video_reviews);
                                $photo_reviews_arr = new WP_Query($args_photo_reviews);
                                if (!count($photo_reviews_arr->posts)) {
                                    if (!empty($tag_arr)) {
                                        $args_photo_reviews = ([
                                            'posts_per_page' => '21',
                                            'posts_per_archive_page' => '21',
                                            'post_type'   => 'otzyvy',
                                            'post_status' => 'publish',
                                            'orderby'   => array(
                                                'date' =>'DESC',
                                            ),
                                            'tax_query'   => [
                                                [
                                                    'taxonomy'  => 'types',
                                                    'field'     => 'slug',
                                                    'terms'     => 'foto'
                                                ], [
                                                    'taxonomy' => 'mark',
                                                    'field' => 'slug',
                                                    'terms' => $tag_arr,
                                                    'operator' => 'IN'
                                                ],
                                            ],
                                        ]);
                                    } else {
                                        $args_photo_reviews = ([
                                            'posts_per_page' => '21',
                                            'posts_per_archive_page' => '21',
                                            'post_type'   => 'otzyvy',
                                            'post_status' => 'publish',
                                            'orderby'   => array(
                                                'date' =>'DESC',
                                            ),
                                            'tax_query'   => [
                                                [
                                                    'taxonomy'  => 'types',
                                                    'field'     => 'slug',
                                                    'terms'     => 'foto'
                                                ],
                                            ],
                                        ]);
                                    }
                                    $photo_reviews_arr = new WP_Query($args_photo_reviews);
                                }
                            ?>
                            <div class="reviews-row reviews-type-video selection-grid-1" data-photo-count="<?=count($photo_reviews_arr->posts); ?>" data-video-count="<?=count($video_reviews_arr->posts); ?>">
                                <div class="review-first <?php if (count($video_reviews_arr->posts) == 0) { echo "hidden"; } ?>">
                                    <?php if (count($video_reviews_arr->posts) > 0) { ?>
                                    <div class="review-first__cnt">
                                        <div class="head" data-publication-date="<?=get_the_date( '', $video_reviews_arr->posts[0]->ID); ?>">
                                            <div class="title"><?=$video_reviews_arr->posts[0]->post_title; ?></div>
                                            <div class="number">№ <?=$video_reviews_arr->posts[0]->ID; ?></div>
                                        </div>
                                        <div class="body">
                                            <div class="reviews-item">
                                                <div class="youtube" data-embed="<?=get_field('id_video', $video_reviews_arr->posts[0]->ID); ?>" onclick="ym(82134583,'reachGoal','start')">
                                                    <div class="youtube__button">
                                                        <svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg>
                                                    </div>
                                                    <img src="https://img.youtube.com/vi/<?=get_field('id_video', $video_reviews_arr->posts[0]->ID); ?>/maxresdefault.jpg" alt="Превью для видео">
                                                </div>
                                            </div>
                                            <div class="additional-items">
                                                <div class="additional-resources-row">
                                                    <a class="original-link" href="<?=get_field('link_court_ruling', $video_reviews_arr->posts[0]->ID); ?>" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области">
                                                        <img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" alt="" />
                                                        <span>Оригинал<br> определения суда</span>
                                                    </a>
                                                    <a class="original-link" href="<?=get_field('link_cards', $video_reviews_arr->posts[0]->ID); ?>" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области">
                                                        <img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" alt="" />
                                                        <span>Картотека<br> арбитражного суда</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="foot">
                                            <div class="item-features">
                                                <div class="item-features-row">
                                                    <div class="title">Номер дела в суде:</div>
                                                    <div class="value"><?=get_field('case', $video_reviews_arr->posts[0]->ID); ?></div>
                                                </div>
                                            </div>
                                            <div class="link">
                                                <a href="<?=get_permalink($video_reviews_arr->posts[0]->ID); ?>">Посмотреть всю информацию</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="review-video-additional__cnt <?php if (count($video_reviews_arr->posts) < 2) { echo "hidden"; } ?>">
                                    <?php if (count($video_reviews_arr->posts) > 1) { ?>
                                    <?php
                                        for ($i = 1; $i < 10; $i++) {
                                    ?>
                                        <div class="review-video__cnt <?php if (!$video_reviews_arr->posts[$i]->ID) { echo "hidden"; } ?>" data-publication-date="<?=get_the_date( '',  $video_reviews_arr->posts[$i]->ID); ?>" data-customer-name="<?=$video_reviews_arr->posts[$i]->post_title; ?>">
                                            <div class="reviews-item">
                                                <div class="youtube" data-embed="<?=get_field('id_video', $video_reviews_arr->posts[$i]->ID); ?>" onclick="ym(82134583,'reachGoal','start')">
                                                    <div class="youtube__button">
                                                        <svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg>
                                                    </div>
                                                    <img src="https://img.youtube.com/vi/<?=get_field('id_video', $video_reviews_arr->posts[$i]->ID); ?>/maxresdefault.jpg" alt="Превью для видео">
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                        }
                                    ?>
                                    <?php } ?>
                                </div>
                            </div>
                            
                            <div class="reviews-row reviews-type-photo selection-grid-2">
                                <div class="review-first <?php if (count($photo_reviews_arr->posts) == 0) { echo "hidden"; } ?>">
                                    <?php if (count($photo_reviews_arr->posts) > 0) { ?>
                                    <div class="review-first__cnt">
                                        <div class="head" data-publication-date="<?=get_the_date( '', $photo_reviews_arr->posts[0]->ID); ?>">
                                            <div class="title"><?=$photo_reviews_arr->posts[0]->post_title; ?></div>
                                            <div class="number">№ <?=$photo_reviews_arr->posts[0]->ID; ?></div>
                                        </div>
                                        <div class="body">
                                            <div class="reviews-item">
                                                <?php if (has_post_thumbnail($photo_reviews_arr->posts[0]->ID) ): ?>
                                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($photo_reviews_arr->posts[0]->ID), 'single-post-thumbnail' ); ?>
                                                    <img src="<?=$image[0]; ?>" alt="<?=$photo_reviews_arr->posts[0]->post_title; ?>">
                                                    <div class="case-number__cnt">
                                                        <span>Дело: <span><?=get_field('case', $photo_reviews_arr->posts[0]->ID); ?></span></span>
                                                        <span>Списан долг: <span><?=get_field('amount_of_debt', $photo_reviews_arr->posts[0]->ID); ?> ₽</span></span>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="additional-items">
                                                <div class="additional-resources-row">
                                                    <a class="original-link" href="<?=get_field('link_court_ruling', $photo_reviews_arr->posts[0]->ID); ?>" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области">
                                                        <img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" alt="" />
                                                        <span>Оригинал<br> определения суда</span>
                                                    </a>
                                                    <a class="original-link" href="<?=get_field('link_cards', $photo_reviews_arr->posts[0]->ID); ?>" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области">
                                                        <img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" alt="" />
                                                        <span>Картотека<br> арбитражного суда</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="foot">
                                            <div class="item-features">
                                                <div class="item-features-row">
                                                    <div class="title">Номер дела в суде:</div>
                                                    <div class="value"><?=get_field('case', $photo_reviews_arr->posts[0]->ID); ?></div>
                                                </div>
                                            </div>
                                            <div class="link">
                                                <a href="<?=get_permalink($photo_reviews_arr->posts[0]->ID); ?>">Посмотреть всю информацию</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="review-video-additional__cnt <?php if (count($photo_reviews_arr->posts) < 2) { echo "hidden"; } ?>">
                                    <?php if (count($photo_reviews_arr->posts) > 1) { ?>
                                    <?php
                                        for ($i = 1; $i < 10; $i++) {
                                    ?>
                                        <div class="review-video__cnt <?php if (!$photo_reviews_arr->posts[$i]->ID) { echo "hidden"; } ?>" data-publication-date="<?=get_the_date( '',  $photo_reviews_arr->posts[$i]->ID); ?>" data-customer-name="<?=$photo_reviews_arr->posts[$i]->post_title; ?>">
                                            <div class="reviews-item">
                                                <?php if (has_post_thumbnail($photo_reviews_arr->posts[$i]->ID) ): ?>
                                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($photo_reviews_arr->posts[$i]->ID), 'single-post-thumbnail' ); ?>
                                                    <a href="<?=get_permalink($photo_reviews_arr->posts[$i]->ID); ?>">
                                                        <img src="<?=$image[0]; ?>" alt="<?=$photo_reviews_arr->posts[$i]->post_title; ?>">
                                                    </a>
                                                    <div class="case-number">Дело: <?=get_field('case', $photo_reviews_arr->posts[$i]->ID); ?></div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php
                                        }
                                    ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="reviews-row reviews-type-video selection-grid-3">
                                <div class="review-first <?php if (count($video_reviews_arr->posts) < 10) { echo "hidden"; } ?>">
                                    <?php if (count($video_reviews_arr->posts) > 9) { ?>
                                    <div class="review-first__cnt">
                                        <div class="head" data-publication-date="<?=get_the_date( '', $video_reviews_arr->posts[10]->ID); ?>">
                                            <div class="title"><?=$video_reviews_arr->posts[10]->post_title; ?></div>
                                            <div class="number">№ <?=$video_reviews_arr->posts[10]->ID; ?></div>
                                        </div>
                                        <div class="body">
                                            <div class="reviews-item">
                                                <div class="youtube" data-embed="<?=get_field('id_video', $video_reviews_arr->posts[10]->ID); ?>" onclick="ym(82134583,'reachGoal','start')">
                                                    <div class="youtube__button">
                                                        <svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg>
                                                    </div>
                                                    <img src="https://img.youtube.com/vi/<?=get_field('id_video', $video_reviews_arr->posts[10]->ID); ?>/maxresdefault.jpg" alt="Превью для видео">
                                                </div>
                                            </div>
                                            <div class="additional-items">
                                                <div class="additional-resources-row">
                                                    <a class="original-link" href="<?=get_field('link_court_ruling', $video_reviews_arr->posts[10]->ID); ?>" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области">
                                                        <img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" alt="" />
                                                        <span>Оригинал<br> определения суда</span>
                                                    </a>
                                                    <a class="original-link" href="<?=get_field('link_cards', $video_reviews_arr->posts[10]->ID); ?>" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области">
                                                        <img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" alt="" />
                                                        <span>Картотека<br> арбитражного суда</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="foot">
                                            <div class="item-features">
                                                <div class="item-features-row">
                                                    <div class="title">Номер дела в суде:</div>
                                                    <div class="value"><?=get_field('case', $video_reviews_arr->posts[10]->ID); ?></div>
                                                </div>
                                            </div>
                                            <div class="link">
                                                <a href="<?=get_permalink($video_reviews_arr->posts[10]->ID); ?>">Посмотреть всю информацию</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="review-video-additional__cnt <?php if (count($video_reviews_arr->posts) < 11) { echo "hidden"; } ?>">
                                    <?php if (count($video_reviews_arr->posts) > 10) { ?>
                                    <?php
                                        for ($i = 11; $i <= 16; $i++) {
                                    ?>
                                        <div class="review-video__cnt <?php if (!$video_reviews_arr->posts[$i]->ID) { echo "hidden"; } ?>" data-publication-date="<?=get_the_date( '',  $video_reviews_arr->posts[$i]->ID); ?>" data-customer-name="<?=$video_reviews_arr->posts[$i]->post_title; ?>">
                                            <div class="reviews-item">
                                                <div class="youtube" data-embed="<?=get_field('id_video', $video_reviews_arr->posts[$i]->ID); ?>" onclick="ym(82134583,'reachGoal','start')">
                                                    <div class="youtube__button">
                                                        <svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg>
                                                    </div>
                                                    <img src="https://img.youtube.com/vi/<?=get_field('id_video', $video_reviews_arr->posts[$i]->ID); ?>/maxresdefault.jpg" alt="Превью для видео">
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                        }
                                    ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="reviews-row reviews-type-photo selection-grid-4">
                                <div class="review-first <?php if (count($photo_reviews_arr->posts) < 10) { echo "hidden"; } ?>">
                                    <?php if (count($photo_reviews_arr->posts) > 9) { ?>
                                    <div class="review-first__cnt">
                                        <div class="head" data-publication-date="<?=get_the_date( '', $photo_reviews_arr->posts[10]->ID); ?>">
                                            <div class="title"><?=$photo_reviews_arr->posts[10]->post_title; ?></div>
                                            <div class="number">№ <?=$photo_reviews_arr->posts[10]->ID; ?></div>
                                        </div>
                                        <div class="body">
                                            <div class="reviews-item">
                                                <?php if (has_post_thumbnail($photo_reviews_arr->posts[10]->ID) ): ?>
                                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($photo_reviews_arr->posts[10]->ID), 'single-post-thumbnail' ); ?>
                                                    <img src="<?=$image[0]; ?>" alt="<?=$photo_reviews_arr->posts[10]->post_title; ?>">
                                                    <div class="case-number__cnt">
                                                        <span>Дело: <span><?=get_field('case', $photo_reviews_arr->posts[10]->ID); ?></span></span>
                                                        <span>Списан долг: <span><?=get_field('amount_of_debt', $photo_reviews_arr->posts[10]->ID); ?> ₽</span></span>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="additional-items">
                                                <div class="additional-resources-row">
                                                    <a class="original-link" href="<?=get_field('link_court_ruling', $photo_reviews_arr->posts[10]->ID); ?>" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области">
                                                        <img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" alt="" />
                                                        <span>Оригинал<br> определения суда</span>
                                                    </a>
                                                    <a class="original-link" href="<?=get_field('link_cards', $photo_reviews_arr->posts[10]->ID); ?>" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области">
                                                        <img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" alt="" />
                                                        <span>Картотека<br> арбитражного суда</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="foot">
                                            <div class="item-features">
                                                <div class="item-features-row">
                                                    <div class="title">Номер дела в суде:</div>
                                                    <div class="value"><?=get_field('case', $photo_reviews_arr->posts[10]->ID); ?></div>
                                                </div>
                                            </div>
                                            <div class="link">
                                                <a href="<?=get_permalink($photo_reviews_arr->posts[10]->ID); ?>">Посмотреть всю информацию</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="review-video-additional__cnt <?php if (count($photo_reviews_arr->posts) < 11) { echo "hidden"; } ?>">
                                    <?php if (count($photo_reviews_arr->posts) > 10) { ?>
                                    <?php
                                        for ($i = 11; $i <= 16; $i++) {
                                    ?>
                                        <div class="review-video__cnt <?php if (!$photo_reviews_arr->posts[$i]->ID) { echo "hidden"; } ?>" data-publication-date="<?=get_the_date( '',  $photo_reviews_arr->posts[$i]->ID); ?>" data-customer-name="<?=$photo_reviews_arr->posts[$i]->post_title; ?>">
                                            <div class="reviews-item">
                                                <?php if (has_post_thumbnail($photo_reviews_arr->posts[$i]->ID) ): ?>
                                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($photo_reviews_arr->posts[$i]->ID), 'single-post-thumbnail' ); ?>
                                                    <a href="<?=get_permalink($photo_reviews_arr->posts[$i]->ID); ?>">
                                                        <img src="<?=$image[0]; ?>" alt="<?=$photo_reviews_arr->posts[$i]->post_title; ?>">
                                                    </a>
                                                    <div class="case-number">Дело: <?=get_field('case', $photo_reviews_arr->posts[$i]->ID); ?></div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php
                                        }
                                    ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="reviews-intro">
                                <div class="h1">Тысячи положительных отзывов</div>
                                <p class="text-intro">В поиске подходящей компании по банкротству абсолютное большинство клиентов ориентируется именно отзывы людей, которые уже прошли данную процедуру.</p>
                                <?php get_template_part( 'inc/sections/rating-otzyvy' ); ?>
                            </div>
                            <div class="reviews-row reviews-type-video selection-grid-5 <?php if (count($video_reviews_arr->posts) < 17) { echo "hidden"; } ?>">
                                <div class="review-first">
                                    <?php if (count($video_reviews_arr->posts) > 16) { ?>
                                    <div class="review-first__cnt">
                                        <div class="head" data-publication-date="<?=get_the_date( '', $video_reviews_arr->posts[17]->ID); ?>">
                                            <div class="title"><?=$video_reviews_arr->posts[17]->post_title; ?></div>
                                            <div class="number">№ <?=$video_reviews_arr->posts[17]->ID; ?></div>
                                        </div>
                                        <div class="body">
                                            <div class="reviews-item">
                                                <div class="youtube" data-embed="<?=get_field('id_video', $video_reviews_arr->posts[17]->ID); ?>" onclick="ym(82134583,'reachGoal','start')">
                                                    <div class="youtube__button">
                                                        <svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg>
                                                    </div>
                                                    <img src="https://img.youtube.com/vi/<?=get_field('id_video', $video_reviews_arr->posts[17]->ID); ?>/maxresdefault.jpg" alt="Превью для видео">
                                                </div>
                                            </div>
                                            <div class="additional-items">
                                                <div class="additional-resources-row">
                                                    <a class="original-link" href="<?=get_field('link_court_ruling', $video_reviews_arr->posts[17]->ID); ?>" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области">
                                                        <img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" alt="" />
                                                        <span>Оригинал<br> определения суда</span>
                                                    </a>
                                                    <a class="original-link" href="<?=get_field('link_cards', $video_reviews_arr->posts[17]->ID); ?>" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области">
                                                        <img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" alt="" />
                                                        <span>Картотека<br> арбитражного суда</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="foot">
                                            <div class="item-features">
                                                <div class="item-features-row">
                                                    <div class="title">Номер дела в суде:</div>
                                                    <div class="value"><?=get_field('case', $video_reviews_arr->posts[17]->ID); ?></div>
                                                </div>
                                            </div>
                                            <div class="link">
                                                <a href="<?=get_permalink($video_reviews_arr->posts[17]->ID); ?>">Посмотреть всю информацию</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="review-video-additional__cnt <?php if (count($video_reviews_arr->posts) < 18) { echo "hidden"; } ?>">
                                    <?php if (count($video_reviews_arr->posts) > 17) { ?>
                                    <?php
                                        for ($i = 18; $i <= 20; $i++) {
                                    ?>
                                        <div class="review-video__cnt <?php if (!$video_reviews_arr->posts[$i]->ID) { echo "hidden"; } ?>" data-publication-date="<?=get_the_date( '',  $video_reviews_arr->posts[$i]->ID); ?>" data-customer-name="<?=$video_reviews_arr->posts[$i]->post_title; ?>">
                                            <div class="reviews-item">
                                                <div class="youtube" data-embed="<?=get_field('id_video', $video_reviews_arr->posts[$i]->ID); ?>" onclick="ym(82134583,'reachGoal','start')">
                                                    <div class="youtube__button">
                                                        <svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg>
                                                    </div>
                                                    <img src="https://img.youtube.com/vi/<?=get_field('id_video', $video_reviews_arr->posts[$i]->ID); ?>/maxresdefault.jpg" alt="Превью для видео">
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                        }
                                    ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="reviews-row reviews-type-photo selection-grid-6">
                                <div class="review-first <?php if (count($photo_reviews_arr->posts) < 17) { echo "hidden"; } ?>">
                                    <?php if (count($photo_reviews_arr->posts) > 16) { ?>
                                    <div class="review-first__cnt">
                                        <div class="head" data-publication-date="<?=get_the_date( '', $photo_reviews_arr->posts[17]->ID); ?>">
                                            <div class="title"><?=$photo_reviews_arr->posts[17]->post_title; ?></div>
                                            <div class="number">№ <?=$photo_reviews_arr->posts[17]->ID; ?></div>
                                        </div>
                                        <div class="body">
                                            <div class="reviews-item">
                                                <?php if (has_post_thumbnail($photo_reviews_arr->posts[17]->ID) ): ?>
                                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($photo_reviews_arr->posts[17]->ID), 'single-post-thumbnail' ); ?>
                                                    <img src="<?=$image[0]; ?>" alt="<?=$photo_reviews_arr->posts[17]->post_title; ?>">
                                                    <div class="case-number__cnt">
                                                        <span>Дело: <span><?=get_field('case', $photo_reviews_arr->posts[17]->ID); ?></span></span>
                                                        <span>Списан долг: <span><?=get_field('amount_of_debt', $photo_reviews_arr->posts[17]->ID); ?> ₽</span></span>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="additional-items">
                                                <div class="additional-resources-row">
                                                    <a class="original-link" href="<?=get_field('link_court_ruling', $photo_reviews_arr->posts[17]->ID); ?>" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области">
                                                        <img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" alt="" />
                                                        <span>Оригинал<br> определения суда</span>
                                                    </a>
                                                    <a class="original-link" href="<?=get_field('link_cards', $photo_reviews_arr->posts[17]->ID); ?>" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области">
                                                        <img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" alt="" />
                                                        <span>Картотека<br> арбитражного суда</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="foot">
                                            <div class="item-features">
                                                <div class="item-features-row">
                                                    <div class="title">Номер дела в суде:</div>
                                                    <div class="value"><?=get_field('case', $photo_reviews_arr->posts[17]->ID); ?></div>
                                                </div>
                                            </div>
                                            <div class="link">
                                                <a href="<?=get_permalink($photo_reviews_arr->posts[17]->ID); ?>">Посмотреть всю информацию</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="review-video-additional__cnt <?php if (count($photo_reviews_arr->posts) < 18) { echo "hidden"; } ?>">
                                    <?php if (count($photo_reviews_arr->posts) > 17) { ?>
                                    <?php
                                        for ($i = 18; $i <= 20; $i++) {
                                    ?>
                                        <div class="review-video__cnt <?php if (!$photo_reviews_arr->posts[$i]->ID) { echo "hidden"; } ?>" data-publication-date="<?=get_the_date( '',  $photo_reviews_arr->posts[$i]->ID); ?>" data-customer-name="<?=$photo_reviews_arr->posts[$i]->post_title; ?>">
                                            <div class="reviews-item">
                                                <?php if (has_post_thumbnail($photo_reviews_arr->posts[$i]->ID) ): ?>
                                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($photo_reviews_arr->posts[$i]->ID), 'single-post-thumbnail' ); ?>
                                                    <a href="<?=get_permalink($photo_reviews_arr->posts[$i]->ID); ?>">
                                                        <img src="<?=$image[0]; ?>" alt="<?=$photo_reviews_arr->posts[$i]->post_title; ?>">
                                                    </a>
                                                    <div class="case-number">Дело: <?=get_field('case', $photo_reviews_arr->posts[$i]->ID); ?></div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php
                                        }
                                    ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
    
    
  <section class="section reviews" style="margin-top: 0;padding-top: 0;">
    <div class="container">
      <div class="inner__head">
        <!--<h1 class="title-page"><?php echo get_theme_mod( 'otzivy_header' ); ?></h1>-->
      </div>
      <div class="reviews__wrap">
        <div class="reviews__row hidden">
          <div class="reviews__block reviews__block--foto">
            <div class="reviews__header">
              <h2 class="reviews__title">Фото-отзывы</h2>
              <div class="reviews__line">
                <span class="reviews__lable">Отзывы клиентов, завершивших процедуру банкротства </span>
              </div>
            </div>
            <div class="reviews__main reviews__main--foto">
              <?php 
                $pagination_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                /*echo $pagination_paged;*/
                if ($pagination_paged > 1) {
                    $pagination_offset = 20 * $pagination_paged;
                    $args_foto_desk = ([
                      'posts_per_page' => '20',
                      'posts_per_archive_page' => '20',
                      'post_type'   => 'otzyvy',
                      'post_status' => 'publish',
                      'offset'        => $pagination_offset,
                      'orderby'   => array(
                        'date' =>'DESC',
                      ),
                      'tax_query'   => [
                        [
                          'taxonomy'  => 'types',
                          'field'     => 'slug',
                          'terms'     => 'foto'
                        ],
                      ],
                    ]);
                } else {
                    $args_foto_desk = ([
                      'posts_per_page' => '20',
                      'posts_per_archive_page' => '20',
                      'post_type'   => 'otzyvy',
                      'post_status' => 'publish',
                      'orderby'   => array(
                        'date' =>'DESC',
                      ),
                      'tax_query'   => [
                        [
                          'taxonomy'  => 'types',
                          'field'     => 'slug',
                          'terms'     => 'foto'
                        ],
                      ],
                    ]);
                }

                $foto_desk = new WP_Query( $args_foto_desk );

                if (!count($foto_desk->posts)) {
                    $args_foto_desk = ([
                      'posts_per_page' => '20',
                      'posts_per_archive_page' => '20',
                      'post_type'   => 'otzyvy',
                      'post_status' => 'publish',
                      'orderby'        => 'rand',
                      'tax_query'   => [
                        [
                          'taxonomy'  => 'types',
                          'field'     => 'slug',
                          'terms'     => 'foto'
                        ],
                      ],
                    ]);
                    $foto_desk = new WP_Query( $args_foto_desk );
                }

                if( $foto_desk->have_posts() ) :
                  
                  while( $foto_desk->have_posts() ) : $foto_desk->the_post();

                      get_template_part('template-parts/content-foto');

                  endwhile;
                endif;
              
                wp_reset_postdata(); 
              ?>
              
              <?php if (  $foto_desk->max_num_pages > 1 ) : ?>
                <button class="btn btn--show btn--reviews reviews__btn--foto" data-show="true">
                  <span class="btn__icon btn__icon--load">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#load"></use>
                    </svg>
                  </span>
                  Показать ещё
                </button>
              <?php endif; ?>
              
              <script>
                let true_posts_foto = '<?php echo serialize($foto_desk->query_vars); ?>';
                let current_page_foto = '<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>';
                let max_pages_foto = '<?php echo $foto_desk->max_num_pages; ?>';
              </script>
              
            </div>
          </div>
          <div class="reviews__block reviews__block--video">
            <div class="reviews__header">
              <h2 class="reviews__title">Видео-отзывы</h2>
              <form class="filters-line" id="filters" method="POST">
                <span class="filters-line__lable">Популярное:</span>
                <div class="filters-line__best filters-line__best--reviews">
                  <div class="radio radio--link">
                    <input class="radio__default" id="tag_1_1" type="radio" name="filter" value="from_500000">
                    <label class="radio__label" for="tag_1_1">долги от 500 000 ₽</label>
                  </div>
                  <div class="radio radio--link">
                    <input class="radio__default" id="tag_1_2" type="radio" name="filter" value="from_1000000">
                    <label class="radio__label" for="tag_1_2">долг от 1 000 000 ₽</label>
                  </div>
                  <div class="radio radio--link">
                    <input class="radio__default" id="tag_1_3" type="radio" name="filter" value="pensionery">
                    <label class="radio__label" for="tag_1_3">Пенсионеры</label>
                  </div>
                </div>
                <div class="filters filters-line__filters" role="checkbox" aria-checked="false" tabindex="0">
                  <div class="filters__btn">
                    <span class="filters__arrow"> </span>
                    <span class="filters__text">Фильтр</span>
                  </div>
                  <ul class="filters__list">
                    <li class="filters__item filters__item--reset radio">
                      <input class="radio__default" id="tag_2_0" type="radio" name="filter" data-reset>
                      <label class="radio__label" for="tag_2_0">Сбросить настройки фильтра</label>
                    </li>
                    <li class="filters__item filters__item--title">
                      <span>Возраст</span>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_2_1" type="radio" name="filter" value="to_30_years">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_2_1">До 30-ти лет</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_2_2" type="radio" name="filter" value="over_30_years">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_2_2">Старше 30-ти лет</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_2_3" type="radio" name="filter" value="over_40_years">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_2_3">Старше 40-ка лет</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_2_4" type="radio" name="filter" value="over_65_years">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_2_4">Старше 65-ти лет</label>
                    </li>
                    <li class="filters__item filters__item--title">
                      <span>Вид деятельности</span>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_3_2" type="radio" name="filter" value="ip">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_3_2">ИП</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_3_3" type="radio" name="filter" value="self_employed">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_3_3">Самозанятые</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_3_4" type="radio" name="filter" value="pensionery">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_3_4">Пенсионеры</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_3_5" type="radio" name="filter" value="bezrabotnye">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_3_5">Безработные</label>
                    </li>
                    <li class="filters__item filters__item--title">
                      <span>Сумма долга</span>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_4_1" type="radio" name="filter" value="up_to_300000">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_4_1">До 300 000 руб</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_4_2" type="radio" name="filter" value="from_300000">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_4_2">От 300 000 руб</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_4_3" type="radio" name="filter" value="from_500000">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_4_3">От 500 000 руб</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_4_4" type="radio" name="filter" value="from_1000000">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_4_4">От 1 000 000 руб</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_4_5" type="radio" name="filter" value="from_3000000">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_4_5">От 3 000 000 руб</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_4_6" type="radio" name="filter" value="from_5000000">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_4_6">От 5 000 000 руб</label>
                    </li>
                    <li class="filters__item filters__item--title">
                      <span>Проблемы клиента</span>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_5_1" type="radio" name="filter" value="foreclosures_banks_i_mfo">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_5_1">Службы взыскания банков и МФО</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_5_2" type="radio" name="filter" value="collection_agencies">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_5_2">Коллекторские агентства</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_5_3" type="radio" name="filter" value="home_visits">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_5_3">Визиты домой коллекторов и ФССП</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_5_4" type="radio" name="filter" value="courts_with_banks">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_5_4">Cуды с банками</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_5_5" type="radio" name="filter" value="calls_family_and_friends">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_5_5">Звонки родным и друзьям</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_5_6" type="radio" name="filter" value="calls_work">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_5_6">Звонки на работу</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_5_7" type="radio" name="filter" value="loss_property">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_5_7">Потеря имущества</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_5_8" type="radio" name="filter" value="ban_on_traveling">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_5_8">Запрет на выезд за границу</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_5_9" type="radio" name="filter" value="salary_arrest">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_5_9">Арест зарплаты</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_5_10" type="radio" name="filter" value="problems_device_work">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_5_10">Проблемы с устройством на работу</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_5_11" type="radio" name="filter" value="fssp">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_5_11">ФССП</label>
                    </li>
                    <li class="filters__item filters__item--title">
                      <span>Вид долгов</span>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_6_1" type="radio" name="filter" value="bank_loans">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_6_1">Банковские кредиты</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_6_2" type="radio" name="filter" value="credit_cards">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_6_2">Кредитные карты</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_6_3" type="radio" name="filter" value="loans_to_mfo">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_6_3">Займы в МФО</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_6_4" type="radio" name="filter" value="tax_debts">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_6_4">Долги по налогам</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_6_5" type="radio" name="filter" value="penalty_debts">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_6_5">Долги по штрафам</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_6_6" type="radio" name="filter" value="zhkkh_debts">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_6_6">Долги по ЖКХ</label>
                    </li>
                    <li class="filters__item filters__item--title">
                      <span>Количество кредиторов</span>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_7_1" type="radio" name="filter" value="less_5_lenders">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_7_1">Меньше 5-ти кредиторов</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_7_2" type="radio" name="filter" value="less_10_lenders">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_7_2">Меньше 10-ти кредиторов</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_7_3" type="radio" name="filter" value="more_10_lenders">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_7_3">Больше 10-ти кредиторов</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_7_4" type="radio" name="filter" value="move_20_lenders">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_7_4">Больше 20-ти кредиторов</label>
                    </li>
                    <li class="filters__item filters__item--title">
                      <span>Источник</span>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_8_1" type="radio" name="filter" value="recommendation">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_8_1">Обратились по рекомендации</label>
                    </li>
                    <li class="filters__item filters__item--title">
                      <span>Другое</span>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_9_1" type="radio" name="filter" value="bankruptcy_guarantor">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_9_1">Банкротство поручителя</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_9_2" type="radio" name="filter" value="bankruptcy_proxy">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_9_2">Банкротство по доверенности</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_9_3" type="radio" name="filter" value="family_bankruptcy">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_9_3">Семейное банкротство</label>
                    </li>
                    <li class="filters__item radio">
                      <input class="radio__default" id="tag_9_4" type="radio" name="filter" value="other_companies">
                      <span class="radio__new"></span>
                      <label class="radio__label" for="tag_9_4">Опыт в других компаниях</label>
                    </li>
                    <li class="filters__item radio">
                    
                    </li>
                  </ul>
                </div>
              </form>
            </div>
            <div class="reviews__main reviews__main--video">
              
              <?php 
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              
                $args_video_desk = ([
                  'posts_per_page' => '6',
                  'posts_per_archive_page' => '6',
                  'post_type'   => 'otzyvy',
                  'post_status' => 'publish',
                  'orderby'   => array(
                    'date' =>'DESC',
                  ),
                  'tax_query'   => [
                    [
                      'taxonomy'  => 'types',
                      'field'     => 'slug',
                      'terms'     => 'video'
                    ],
                  ],
                  'paged' => $paged,
                ]);

                $video_desk = new WP_Query( $args_video_desk );

                if( $video_desk->have_posts() ) :
                  
                  while( $video_desk->have_posts() ) : $video_desk->the_post();

                      get_template_part('template-parts/content-video');

                  endwhile;
              
//                  the_posts_pagination($args);
              
                endif;
              ?>
              
              <?php if (  $video_desk->max_num_pages > 1 ) : ?>
                <a href class="btn btn--show btn--reviews reviews__btn--video" data-show="true">
                  <span class="btn__icon btn__icon--load">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#load"></use>
                    </svg>
                  </span>
                  Показать ещё
                </a>
              <?php endif; ?>
              
              <script>
                let true_posts_video = '<?php echo serialize($video_desk->query_vars); ?>';
                let current_page_video = '<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>';
                let max_pages_video = '<?php echo $video_desk->max_num_pages; ?>';
              </script>
              
            </div>
          </div>
        </div>
        
        <?php /*get_template_part( 'inc/sections/rating' );*/ ?>
        
        
        <?php the_posts_pagination($args); ?>
        
        <?php if (  $video_desk->max_num_pages > 1 ) : ?>
          <a href class="btn btn--show btn--reviews reviews__btn--double">
            <span class="btn__icon btn__icon--load">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#load"></use>
              </svg>
            </span>
            Показать ещё
          </a>
        <?php endif; ?>
        
       
            
        
        <div class="reviews__slider slider-reviews slider-reviews slider-reviews--first">
          <div class="swiper-container swiper-reviews">
            <div class="swiper-wrapper">
              <?php 
                $args_foto_1 = ([
                  'posts_per_page' => '10',
                  'post_type'   => 'otzyvy',
                  'post_status' => 'publish',
                  'tax_query'   => [
                    [
                      'taxonomy'  => 'types',
                      'field'     => 'slug',
                      'terms'     => 'foto'
                    ],
                  ],
                ]);

                $foto_mob1 = new WP_Query( $args_foto_1 );

                if( $foto_mob1->have_posts() ) :
                  
                  while( $foto_mob1->have_posts() ) : $foto_mob1->the_post();

                      get_template_part('template-parts/content-fotoslide');

                  endwhile;
              
                endif;
              ?>
            </div>
          </div>
        </div>
        <div class="reviews__slider slider-reviews slider-reviews slider-reviews--second">
          <div class="swiper-container swiper-reviews">
            <div class="swiper-wrapper">
              <?php 
                $args_foto_2 = ([
                  'offset'         => '10',
                  'posts_per_page' => '20',
                  'post_type'   => 'otzyvy',
                  'post_status' => 'publish',
                  'tax_query'   => [
                    [
                      'taxonomy'  => 'types',
                      'field'     => 'slug',
                      'terms'     => 'foto'
                    ],
                  ],
                ]);

                $foto_mob2 = new WP_Query( $args_foto_2 );

                if( $foto_mob2->have_posts() ) :
                  
                  while( $foto_mob2->have_posts() ) : $foto_mob2->the_post();

                      get_template_part('template-parts/content-fotoslide');

                  endwhile;
              
                endif;
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="otzivy-text-cnt">
          
          <?php
            if ($pagination_paged == 1) {
              /*echo get_theme_mod( 'otzivy_text' );*/
          ?>
                <h2>Отзывы о процедуре банкротства физического лица</h2>
                <p>В поиске подходящей компании по банкротству абсолютное большинство клиентов ориентируется именно отзывы людей, которые уже прошли данную процедуру. Рассказываем, как выбрать юридическую фирму по банкротству по отзывам и на какие критерии важно обратить внимание.</p>
                <h2>Положительные отзывы</h2>
                <p>Однозначно не стоит доверять компаниям, на сайтах которых встречаются только однотипные письменные комментарии. Так поступают недобросовестные или только начинающие свою деятельность фирмы. Такие отзывы легко придумать и опубликовать, они зачастую носят очевидно заказной характер: напечатаны в большом количестве и невозможно убедиться, что их действительно оставили клиенты.</p>
                <p>Вызывают сомнения и компании, которые публикуют на своих сайтах видеоотзывы, однако их мало (менее 20 видео). Это говорит о том, что перед вами маленькая фирма с совсем небольшим опытом, а значит, вероятность того, что такая компания проиграет ваше дело в суде, очень высока.</p>
                <p>В отзывах о работе крупной серьёзной компании всегда присутствуют существенные доказательства: скриншоты документов с результатами по делу, фотографии клиентов с ними, ссылки на официальную картотеку и определения суда, одни и те же арбитражные управляющие в делах, а также видеоотзывы в большом количестве, которые регулярно пополняются новыми интервью. Это означает, что у фирмы есть реальные завершенные дела, подкрепленная репутация и обширный опыт</p>
                <h2>Негативные отзывы</h2>
                <p>На сайтах компаний вы вряд ли встретите негативные отклики. Однако стоит обратить внимание на их количество на сторонних ресурсах (например, сервисах Яндекса, таких как Яндекс.Карты). Пример низкого рейтинга:</p>
                <div class="picture-row">
                    <div class="picture-col">
                        <picture>
                            <source srcset="/wp-content/themes/fpalaw/assets/img/reviews/sample-otzivy1.webp">
                            <img src="/wp-content/themes/fpalaw/assets/img/reviews/sample-otzivy1.png" alt="">
                        </picture>
                    </div>
                    <div class="picture-col">
                        <picture>
                            <source srcset="/wp-content/themes/fpalaw/assets/img/reviews/sample-otzivy2.webp">
                            <img src="/wp-content/themes/fpalaw/assets/img/reviews/sample-otzivy2.png" alt="">
                        </picture>
                    </div>
                </div>
                <p>Если вы видите, что среди множества комментариев каждый 3-4 отзыв &mdash; отрицательный, обращаться в такую фирму точно не стоит.</p>
                <h2>Согласие на публикацию отзывов</h2>
                <p>Каждому клиенту, завершившему процедуру, мы предлагаем рассказать свою историю о том, какие проблемы с долгами у него были до банкротства и какой результат был получен по итогам нашей работы. Процедура банкротства поначалу пугает некоторых граждан в силу недостатка у них знаний о ней, однако после просмотра десятков интервью наших клиентов они понимают, что процедура совсем не страшная, понятная и прогнозируемая.</p>
                <p>Реальные рассказы и истории эффективнее всего подтверждают достоверность отзывов и комментариев, а также качество работы компании. Наши клиенты довольны результатом и охотно делятся опытом взаимодействия. На нашем сайте опубликованы более тысячи видео от клиентов в формате живого интервью, посмотрев которые, вы можете самостоятельно убедиться в успешном результате.</p>
          <?php
            }
          ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>