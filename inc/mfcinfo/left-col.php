<?php
    $left_col_content = get_field('left_col_content');
?>
<script>
	window.onload = function () {
	    if (localStorage.customer_name != '') {
	        jQuery('.additional_text__cnt .client_info p.customer_name span').html(localStorage.customer_name);
	    }
	    if (localStorage.customer_phone != '') {
	        jQuery('.additional_text__cnt .client_info p.customer_phone span').html(localStorage.customer_phone);    
	    }
	    jQuery('.header-grid2col .header-col button').click(function() {
	        jQuery('body').addClass('body-fixed');
            jQuery('.popup__cnt').removeClass('hidden');
            jQuery('.mfc-info__cnt').removeClass('hidden');
	    });
	    jQuery('.header-mobile-wrapper .header-mobile-col button').click(function() {
	        jQuery('body').addClass('body-fixed');
            jQuery('.popup__cnt').removeClass('hidden');
            jQuery('.mfc-info__cnt').removeClass('hidden');
	    });
	    jQuery('.popup-item__cnt .mfc-info-close').click(function() {
	        jQuery('body').removeClass('body-fixed');
            jQuery('.popup__cnt').addClass('hidden');
            jQuery('.mfc-info__cnt').addsClass('hidden');
	    });
	    
	    if (jQuery('.doc-slider-cnt').length > 0) {
    		const docSliderSwiper = new Swiper(".doc-slider-cnt", {
    			navigation: {
    				nextEl: '.doc-slider-next-btn',
    				prevEl: '.doc-slider-prev-btn',
    			}, 
    			pagination: {
    			  el: ".doc-slider-pagination",
    			  dynamicBullets: true,
    			  clickable: true,
    			  renderBullet: function (index, className) {
    				return '<span class="' + className + '"><span class="number">' + (index + 1) + '</span></span>';
    				},  
    			},
    		});
    	}
	}

</script>
<style>
    .doc-slider-cnt {
        overflow: hidden;
        margin-top: 48px;
    }
    .doc-slider-cnt .doc-slider-nav {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 170px auto 170px;
        grid-column-gap: 16px;
        grid-row-gap: 16px;
    }
    /*
    .doc-slider-cnt .doc-slider-nav .nav-cnt {
        display: none;
    }
    */
    .doc-slider-cnt .doc-slider-nav .nav-cnt .doc-slider-pagination {
        width: 100%!important;
    }
    .doc-slider-cnt .doc-slider-nav .nav-cnt .doc-slider-pagination .swiper-pagination-bullet {
        width: 32px;
        height: 32px;
        display: inline-flex;
        justify-content: center;
        align-items: center;
    }
    .doc-slider-cnt .doc-slider-nav .nav-cnt .doc-slider-pagination .swiper-pagination-bullet span.number {
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 150%;
        color: #393939;
    }
    .doc-slider-cnt .doc-slider-nav .nav-cnt .doc-slider-pagination .swiper-pagination-bullet-active {
        background: rgba(57, 57, 57, 0.45);
        border-radius: 8px;
    }
    .doc-slider-cnt .doc-slider-nav .nav-cnt .doc-slider-pagination .swiper-pagination-bullet-active span.number {
        color: #fff;    
    }


    @media (max-width: 782px) {
        .doc-slider-cnt .doc-slider-nav {
            grid-template-columns: repeat(2, 1fr);
        }
        .doc-slider-cnt .doc-slider-nav .nav-cnt {
            display: none;
        }
        .doc-slider-cnt .doc-slider-nav button {
            font-size: 14px;
            font-weight: 500;
            padding: 16px;            
        }
    }
    @media (max-width: 540px) {
        .doc-slider-cnt .doc-slider-nav button {
            font-size: 14px;
            font-weight: 500;
            padding: 8px;            
        }
    }












    .main-wrapper {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 50% 50%;
        grid-column-gap: 0;
        grid-row-gap: 0;
        height: 100vh;
    }
    .main-image__cnt {
        /*height: 100%;*/
        height: 100vh;
        position: fixed;
        width: 50%;
    }
    .main-image__cnt img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
    .popup-item__cnt {
        background: #FFFFFF;
        border-radius: 10px;
        padding: 60px 56px;
    }
    .popup-item__cnt .mfc-info-close {
        padding: 10px;
        background: #5381F6;
        border-radius: 0px 10px 0px 0px;
        width: 44px;
        height: 44px;
        position: absolute;
        top: 0;
        right: 0;
        cursor: pointer;
    }
    .popup-item__cnt .big-txt {
        font-style: normal;
        font-weight: 400;
        font-size: 32px;
        line-height: 130%;
        color: #393939;
        margin-bottom: 30px;
    }
    .popup-item__cnt .normal-txt {
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 130%;
        color: #393939;
        margin-bottom: 40px;
    }
    .popup-item__cnt form .wpcf7-response-output {
        display: none;
    }
    .popup-item__cnt form .row-wrapper {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 160px auto;
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        align-items: center;
    }
    .popup-item__cnt form .row-wrapper .question-text {
        font-style: normal;
        font-weight: 700;
        font-size: 18px;
        line-height: 130%;
        color: #393939;
    }
    .popup-item__cnt form .row-wrapper .col-wrapper:last-child {
        max-width: calc(100% - 60px);
    }
    .popup-item__cnt form .row-wrapper .col-wrapper input[type=text],
    .popup-item__cnt form .row-wrapper .col-wrapper input[type=tel] {
        border: 1px solid #393939;
        border-radius: 10px;
        max-width: calc(100% - 14px);
        padding: 10px;
        color: #393939;
    }
    .popup-item__cnt form .row-wrapper+.row-wrapper {
        margin-top: 12px;
    }
    .popup-item__cnt form .button-wrapper {
        margin-top: 40px;
    }
    body.body-fixed .popup__overlay {
        display: flex;
        align-items: center;
    }
    .popup-item__cnt {
        position: relative;
    }
    


    
    @media (max-width: 782px) {
        .main-wrapper {
            grid-template-columns: 100%;
            height: auto;
        }
        .main-image__cnt {
            height: 100%;
            position: initial;
            width: 100%;
        }
        .main-image__cnt img {
            max-height: 500px;
        }
    }
    @media (max-width: 540px) {
        .main-image__cnt img {
            max-height: 400px;
        }
        .popup-item__cnt form .row-wrapper {
            grid-template-columns: 100%;
        }
        .popup-item__cnt form .row-wrapper .col-wrapper:last-child {
            max-width: calc(100% - 0px);
        }
        .popup-item__cnt .big-txt {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .popup-item__cnt .normal-txt {
            font-size: 14px;
            margin-bottom: 20px;
        }
        .popup-item__cnt form .button-wrapper {
            margin-top: 20px;
        }
        .popup-item__cnt {
            background: #FFFFFF;
            border-radius: 10px;
            padding: 30px 16px;
        }
    }
    @media (max-width: 400px) {
        .main-image__cnt img {
            max-height: 300px;
        }
    }

</style>
<div class="left-col__cnt">
    <div class="header-mobile__cnt">
        <div class="header-mobile-wrapper">
            <div class="header-mobile-col">
                <a href="/">
                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 163 117"><path d="M47.407 3.995h69.85v44.66h4.02V0H43.4v48.655h4.007V3.995zM117.257 113.005H99.198V117h22.079v-14.76h-4.02v10.765zM47.407 102.24H43.4V117h22.08v-3.995H47.407V102.24zM3.933 69.72v-.828a4.35 4.35 0 01-1.488-.337 4.334 4.334 0 01-1.26-.842 3.834 3.834 0 01-.87-1.256A4.021 4.021 0 010 64.838c0-.621.11-1.174.328-1.658.218-.492.512-.91.882-1.256a4.135 4.135 0 011.26-.816c.471-.198.958-.31 1.463-.336v-.726h1.953v.726c.505.025.992.138 1.462.336.471.19.891.462 1.26.816.37.346.665.764.883 1.256.219.492.328 1.045.328 1.658 0 .596-.11 1.136-.328 1.619-.21.484-.5.902-.87 1.256s-.79.635-1.26.842c-.47.199-.962.31-1.475.337v.829H3.933zm.05-2.525v-4.727a2.135 2.135 0 00-.958.337 2.03 2.03 0 00-.706.803c-.168.337-.252.747-.252 1.23 0 .492.093.907.277 1.243.185.337.42.6.706.79.294.182.605.29.933.324zm1.853 0c.336-.034.647-.142.933-.324.294-.19.529-.453.705-.79.185-.345.278-.76.278-1.243 0-.483-.088-.893-.265-1.23a2.03 2.03 0 00-.706-.803c-.285-.19-.6-.302-.945-.337v4.727zM11.319 69.72v-9.195h2.067v6.178l3.857-6.178h1.929v9.196h-2.067v-6.14l-3.807 6.14h-1.979zM28.897 60.525v9.196H26.83v-3.77h-3.567v3.77h-2.067v-9.196h2.067v3.562h3.567v-3.562h2.067zM33.12 60.525h2.232l3.075 9.196h-2.118l-.693-2.06h-2.785l-.681 2.06h-2.118l3.088-9.196zm2.156 5.673l-1.046-3.536-1.072 3.536h2.118zM47.262 60.525v9.196h-2.067v-3.77h-3.568v3.77H39.56v-9.196h2.067v3.562h3.568v-3.562h2.067zM48.712 65.045c0-.552.101-1.1.303-1.644a4.696 4.696 0 01.882-1.477c.387-.44.857-.79 1.412-1.049.554-.267 1.185-.401 1.89-.401.832 0 1.56.185 2.181.557.622.37 1.084.854 1.386 1.45l-1.588 1.14a1.86 1.86 0 00-.542-.751c-.227-.19-.47-.32-.73-.389a2.641 2.641 0 00-.757-.117c-.53 0-.966.139-1.31.415-.345.276-.602.626-.77 1.049a3.481 3.481 0 00-.252 1.295c0 .483.097.941.29 1.373.193.423.466.764.82 1.023.352.259.768.388 1.247.388.252 0 .509-.038.77-.116.26-.086.5-.224.717-.415.227-.19.4-.436.517-.738l1.69 1.023a2.714 2.714 0 01-.87 1.166c-.404.31-.862.553-1.374.725a4.827 4.827 0 01-1.5.246c-.647 0-1.24-.133-1.778-.401a4.72 4.72 0 01-1.399-1.088 5.223 5.223 0 01-.92-1.528 4.982 4.982 0 01-.315-1.736zM61.956 69.798c-.664 0-1.269-.13-1.815-.388a4.632 4.632 0 01-1.4-1.062 4.884 4.884 0 01-.907-1.502 4.911 4.911 0 01-.315-1.736c0-.604.11-1.183.328-1.735a4.912 4.912 0 01.933-1.49c.403-.44.878-.785 1.424-1.036a4.243 4.243 0 011.79-.375 3.99 3.99 0 011.802.401 4.195 4.195 0 011.4 1.062c.394.45.697.954.907 1.515.21.553.315 1.118.315 1.697 0 .604-.114 1.187-.34 1.748a4.8 4.8 0 01-.933 1.49 4.513 4.513 0 01-1.412 1.036 4.16 4.16 0 01-1.777.375zm-2.332-4.662c0 .475.088.924.265 1.347.176.414.441.755.794 1.023.353.268.781.401 1.285.401.521 0 .954-.138 1.299-.414.353-.276.613-.626.781-1.049.177-.432.265-.876.265-1.334 0-.475-.092-.92-.277-1.334a2.375 2.375 0 00-.794-1.023c-.345-.259-.77-.389-1.273-.389-.521 0-.958.139-1.311.415a2.507 2.507 0 00-.782 1.036 3.546 3.546 0 00-.252 1.321zM75.263 67.364c0 .526-.138.967-.416 1.32a2.516 2.516 0 01-1.109.778 4.223 4.223 0 01-1.512.259h-4.361v-9.196h4.978c.42 0 .782.117 1.084.35.303.225.538.518.706.88.168.363.252.739.252 1.127 0 .432-.109.847-.328 1.244-.218.397-.537.69-.957.88.504.156.907.432 1.21.83.302.397.453.906.453 1.528zm-5.331-5.025v1.903h2.029a.89.89 0 00.605-.233c.177-.155.265-.397.265-.725 0-.302-.08-.535-.24-.7a.726.726 0 00-.554-.245h-2.105zm3.226 4.597c0-.285-.08-.527-.239-.725a.745.745 0 00-.605-.298h-2.382v2.007h2.294c.26 0 .479-.09.655-.272a.98.98 0 00.277-.712zM80.653 69.798c-.664 0-1.269-.13-1.815-.388a4.632 4.632 0 01-1.4-1.062 4.886 4.886 0 01-.907-1.502 4.913 4.913 0 01-.315-1.736c0-.604.11-1.183.328-1.735a4.912 4.912 0 01.933-1.49c.403-.44.878-.785 1.424-1.036a4.243 4.243 0 011.79-.375 3.99 3.99 0 011.802.401 4.195 4.195 0 011.4 1.062c.394.45.697.954.907 1.515.21.553.315 1.118.315 1.697 0 .604-.113 1.187-.34 1.748a4.8 4.8 0 01-.933 1.49 4.514 4.514 0 01-1.412 1.036 4.16 4.16 0 01-1.777.375zm-2.332-4.662c0 .475.088.924.265 1.347.176.414.441.755.794 1.023.353.268.782.401 1.286.401.52 0 .953-.138 1.298-.414.353-.276.613-.626.781-1.049.177-.432.265-.876.265-1.334 0-.475-.092-.92-.277-1.334a2.375 2.375 0 00-.794-1.023c-.345-.259-.77-.389-1.273-.389-.521 0-.958.139-1.311.415a2.506 2.506 0 00-.782 1.036 3.546 3.546 0 00-.252 1.321zM86.385 67.092v-1.865h3.882v1.865h-3.882zM92.095 69.72v-9.195h7.45v9.196h-2.068v-7.33h-3.315v7.33h-2.067zM101.554 69.72v-9.195h3.819c.428 0 .819.091 1.172.272.361.173.672.41.933.713a3.259 3.259 0 01.819 2.124 3.28 3.28 0 01-.365 1.515 3.084 3.084 0 01-.996 1.165c-.429.294-.929.44-1.5.44h-1.815v2.967h-2.067zm2.067-4.817h1.689c.244 0 .454-.108.63-.324.177-.216.265-.53.265-.945 0-.423-.105-.734-.315-.933-.202-.207-.421-.31-.656-.31h-1.613v2.512zM111.263 60.525h2.231l3.075 9.196h-2.117l-.693-2.06h-2.786l-.681 2.06h-2.117l3.088-9.196zm2.155 5.673l-1.046-3.536-1.071 3.536h2.117zM125.102 67.364c0 .526-.139.967-.416 1.32a2.517 2.517 0 01-1.11.778 4.215 4.215 0 01-1.512.259h-4.361v-9.196h4.979c.42 0 .781.117 1.084.35.302.225.537.518.705.88.168.363.253.739.253 1.127 0 .432-.11.847-.328 1.244a2.01 2.01 0 01-.958.88c.504.156.907.432 1.21.83.302.397.454.906.454 1.528zm-5.332-5.025v1.903h2.029a.888.888 0 00.605-.233c.177-.155.265-.397.265-.725 0-.302-.08-.535-.24-.7a.725.725 0 00-.554-.245h-2.105zm3.227 4.597c0-.285-.08-.527-.24-.725a.743.743 0 00-.605-.298h-2.382v2.007h2.294c.26 0 .479-.09.655-.272a.98.98 0 00.278-.712zM130.491 69.798c-.664 0-1.269-.13-1.815-.388a4.63 4.63 0 01-1.399-1.062 4.882 4.882 0 01-1.223-3.238c0-.604.11-1.183.328-1.735a4.915 4.915 0 01.933-1.49c.403-.44.878-.785 1.424-1.036a4.243 4.243 0 011.79-.375c.664 0 1.265.134 1.803.401a4.202 4.202 0 011.399 1.062c.395.45.697.954.907 1.515.21.553.315 1.118.315 1.697a4.62 4.62 0 01-.34 1.748 4.8 4.8 0 01-.933 1.49 4.513 4.513 0 01-1.411 1.036 4.164 4.164 0 01-1.778.375zm-2.332-4.662c0 .475.089.924.265 1.347.177.414.441.755.794 1.023.353.268.782.401 1.286.401.521 0 .954-.138 1.298-.414.353-.276.614-.626.782-1.049.176-.432.264-.876.264-1.334 0-.475-.092-.92-.277-1.334a2.37 2.37 0 00-.794-1.023c-.345-.259-.769-.389-1.273-.389-.521 0-.958.139-1.311.415a2.498 2.498 0 00-.781 1.036 3.529 3.529 0 00-.253 1.321zM143.799 67.364c0 .526-.139.967-.416 1.32a2.52 2.52 0 01-1.109.778 4.224 4.224 0 01-1.513.259H136.4v-9.196h4.979c.42 0 .781.117 1.084.35.302.225.537.518.706.88.168.363.252.739.252 1.127 0 .432-.11.847-.328 1.244a2.01 2.01 0 01-.958.88c.504.156.907.432 1.21.83.302.397.454.906.454 1.528zm-5.332-5.025v1.903h2.029a.888.888 0 00.605-.233c.177-.155.265-.397.265-.725 0-.302-.08-.535-.239-.7a.728.728 0 00-.555-.245h-2.105zm3.227 4.597c0-.285-.08-.527-.24-.725a.743.743 0 00-.605-.298h-2.382v2.007h2.294c.261 0 .479-.09.655-.272a.98.98 0 00.278-.712zM149.188 69.798c-.663 0-1.269-.13-1.815-.388a4.643 4.643 0 01-1.399-1.062 4.882 4.882 0 01-1.222-3.238c0-.604.109-1.183.327-1.735a4.915 4.915 0 01.933-1.49c.403-.44.878-.785 1.424-1.036a4.247 4.247 0 011.79-.375c.664 0 1.265.134 1.803.401a4.202 4.202 0 011.399 1.062c.395.45.697.954.907 1.515.21.553.315 1.118.315 1.697a4.62 4.62 0 01-.34 1.748 4.781 4.781 0 01-.933 1.49 4.513 4.513 0 01-1.411 1.036 4.164 4.164 0 01-1.778.375zm-2.331-4.662c0 .475.088.924.264 1.347.177.414.441.755.794 1.023.353.268.782.401 1.286.401.521 0 .954-.138 1.298-.414.353-.276.614-.626.782-1.049.176-.432.264-.876.264-1.334 0-.475-.092-.92-.277-1.334a2.37 2.37 0 00-.794-1.023c-.344-.259-.769-.389-1.273-.389-.521 0-.958.139-1.311.415a2.507 2.507 0 00-.781 1.036 3.548 3.548 0 00-.252 1.321zM155.147 69.72v-9.195h2.068v6.178l3.857-6.178H163v9.196h-2.067v-6.14l-3.807 6.14h-1.979zm3.933-9.687c-.504 0-.945-.086-1.323-.259a2.204 2.204 0 01-.883-.725c-.21-.31-.315-.66-.315-1.049h1.374c0 .268.092.5.277.7.194.198.488.297.883.297.369 0 .651-.095.844-.285a.937.937 0 00.303-.712h1.374c0 .389-.106.738-.316 1.049-.21.302-.508.544-.895.725-.378.173-.819.26-1.323.26zM57.929 82.727h2.23l3.076 9.195h-2.117l-.694-2.059H57.64l-.68 2.06H54.84l3.088-9.196zm2.155 5.673l-1.046-3.536-1.071 3.536h2.117zM69.94 91.922v-7.33h-2.218l-.05 1.412c-.043 1.191-.144 2.175-.303 2.953-.16.777-.391 1.39-.694 1.839a2.4 2.4 0 01-1.134.932c-.462.173-1.021.263-1.676.272v-1.839c.294 0 .55-.06.768-.181.219-.13.4-.363.542-.7.152-.336.27-.816.353-1.437.093-.63.156-1.45.19-2.46l.088-2.656h6.201v9.195H69.94zM74.014 91.922v-9.195h2.067V85.9h1.663c.992 0 1.765.268 2.32.803.563.535.844 1.265.844 2.189 0 .915-.269 1.649-.806 2.201-.538.553-1.286.83-2.244.83h-3.844zm2.067-1.735h1.474c.429 0 .744-.121.946-.363.201-.242.302-.552.302-.932 0-.328-.1-.618-.302-.868-.194-.259-.509-.389-.946-.389h-1.474v2.552zM82.076 91.922l2.117-3.6a2.494 2.494 0 01-1.235-1.01c-.294-.475-.441-1.032-.441-1.67 0-.562.126-1.063.378-1.503.252-.44.605-.786 1.059-1.036.453-.25.974-.376 1.563-.376h3.78v9.195h-2.066v-3.354h-.946l-1.878 3.354h-2.331zm3.705-5.154h1.45v-2.24h-1.425c-.31 0-.588.086-.831.258-.236.173-.353.458-.353.855 0 .389.109.673.327.855.227.181.505.272.832.272zM98.971 82.727v9.195h-2.067v-3.768h-3.567v3.768H91.27v-9.195h2.067v3.562h3.567v-3.562h2.067zM100.421 87.247c0-.553.101-1.1.303-1.645a4.71 4.71 0 01.882-1.476c.387-.44.857-.79 1.412-1.05.555-.267 1.185-.4 1.891-.4.832 0 1.558.185 2.18.556.622.371 1.084.855 1.387 1.45l-1.588 1.14a1.874 1.874 0 00-.542-.75 1.888 1.888 0 00-.732-.39 2.635 2.635 0 00-.756-.116c-.529 0-.966.138-1.311.415-.344.276-.6.626-.769 1.049a3.481 3.481 0 00-.252 1.295c0 .483.097.94.29 1.373.194.423.467.764.82 1.023a2.05 2.05 0 001.247.388c.253 0 .509-.039.769-.116.261-.087.5-.225.719-.415a1.79 1.79 0 00.517-.738l1.689 1.023a2.723 2.723 0 01-.87 1.166c-.403.31-.861.552-1.374.725a4.823 4.823 0 01-1.5.246 3.932 3.932 0 01-1.777-.401 4.713 4.713 0 01-1.399-1.088 5.21 5.21 0 01-.92-1.529 4.962 4.962 0 01-.316-1.735z" fill="#333"></path></svg>
                </a>
            </div>
            <div class="header-mobile-col">
                <button class="btn btn-gray">Бесплатная горячая линия</button>
            </div>
        </div>
    </div>
    <div class="main-image__cnt">
        <picture>
			<source srcset="<?=$left_col_content['image_mobile']; ?>" media="(max-width: 375px)">
			<source srcset="<?=$left_col_content['image_tablet']; ?>" media="(max-width: 782px)">
			<source srcset="<?=$left_col_content['image_desktop']; ?>">
			<img src="<?=$left_col_content['image_desktop']; ?>" alt="Списать долги бесплатно">
		</picture>
    </div>
</div>
