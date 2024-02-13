<?php
    $right_col_content = get_field('right_col_content');
    /*print_r($right_col_content);*/
?>
<style>
    .right-col-wrapper .content ul {
        padding-left: 16px;
        margin: 0 0 2em;    
    }
    .right-col-wrapper {
        padding: 40px 5% 10px;
        height: 100%;
        justify-content: space-between;
        display: flex;
        flex-direction: column;
    }
    .header-grid2col {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: auto 240px;
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        align-items: center;
    }
    .header-grid2col .header-col button {
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 120%;
        background: transparent;
        color: #5381F6;
        border: 2px solid #5381F6;
        border-radius: 12px;
        padding: 12px;
    }
    .header__cnt .header-col a {
        display: block;
    }
    .header__cnt .header-col svg {
        width: 120px;
        height: auto;
    }
    .right-col-wrapper .body .content h1 {
        font-style: normal;
        font-weight: 700;
        font-size: 34px;
        line-height: 150%;
        color: #393939;
    }
    .right-col-wrapper .body .content em {
        font-style: normal;
        font-weight: 400;
        font-size: 22px;
        line-height: 150%;
        color: #5381F6;
        margin-bottom: 2em;
        display: block;
    }
    .right-col-wrapper .body .content p {
        font-style: normal;
        font-weight: 400;
        font-size: 20px;
        line-height: 150%;    
    }
    .right-col-wrapper .body .content p strong {
        font-weight: 700;
        color: #5381F6;
    }
    .right-col-wrapper .body .content .button__cnt {
        max-width: 280px;
    }
    .right-col-wrapper .body .content .button__cnt a.btn {
        padding: 14px 12px;
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 150%;
        background: linear-gradient(360deg, #3C70F4 0%, #638DF6 100%);
        border-radius: 10px;
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
    }
    .right-col-wrapper .body .content .button__cnt a.btn:hover {
        background: linear-gradient(360deg, #0A3EC2 0%, #456FD8 100%);
    }
    .right-col-wrapper .footer__cnt {
        margin-top: 30px;
    }
    .footer__cnt p {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 11px;
        line-height: 150%;
        color: #000000;
    }
    .header-mobile__cnt {
        display: none;
    }
    .right-col-wrapper .header__cnt {
        margin-bottom: 30px;
    }
    .header-mobile-wrapper {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: repeat(2, 1fr);
        grid-column-gap: 0;
        grid-row-gap: 0;
        align-items: stretch;
    }
    .header-mobile-wrapper .header-mobile-col {
        text-align: center;
    }
    .header-mobile-wrapper .header-mobile-col button {
        height: 100%;
        border-radius: 0;    
        width: 100%;
        font-style: normal;
        font-weight: 400;
        font-size: 12px;
        line-height: 150%;
        color: #FFFFFF;
        padding: 0;
    }
    .header-mobile-wrapper .header-mobile-col svg {
        height: 80px;
        width: auto;
        padding: 12px 0;
    }
    
    /* MFC Info Form */
    .form__cnt form .question-title {
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 26px;
        color: #5381F6;
    }
    .form__cnt form .question-text {
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 21px;
        color: #393939;
        padding-bottom: 12px;
        margin-bottom: 12px;
    }
    .form__cnt form .question-text span {
        display: none;
    }
    .form__cnt form input[type=checkbox] {
        display:none;
    }
    
    
    
    .form__cnt form #answer_creditors {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: repeat(3, 1fr);
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        width: 100%;
    }
    .form__cnt form #answer_creditors label .wpcf7-list-item-label {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .form__cnt form #answer_reduced-income {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: repeat(2, 1fr);
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        width: 100%;
    }
    .form__cnt form #answer_place {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: repeat(2, 1fr);
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        width: 100%;
    }
    .form__cnt form #answer_place label .wpcf7-list-item-label {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .form__cnt form .wpcf7-form-control-wrap.creditors .wpcf7-not-valid-tip, 
    .form__cnt form .wpcf7-form-control-wrap.summ .wpcf7-not-valid-tip, 
    .form__cnt form .wpcf7-form-control-wrap.creditors .wpcf7-not-valid-tip, 
    .form__cnt form .wpcf7-form-control-wrap.reduced-income .wpcf7-not-valid-tip, 
    .form__cnt form .wpcf7-form-control-wrap.place .wpcf7-not-valid-tip,
    .form__cnt form .wpcf7-form-control-wrap.fssp .wpcf7-not-valid-tip {
        margin-top: 0px;
    }
    
    
    
    
    
    
    
    
    .form__cnt form #answer_summ {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: repeat(3, 1fr);
        grid-column-gap: 16px;
        grid-row-gap: 16px;
    }
    .form__cnt form #answer_fssp {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: repeat(2, 1fr);
        grid-column-gap: 16px;
        grid-row-gap: 16px;
    }
    .form__cnt form #answer_officially-employed {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: repeat(2, 1fr);
        grid-column-gap: 16px;
        grid-row-gap: 16px;
    }
    .form__cnt form label .wpcf7-list-item-label {
        border: 1px solid #393939;
        border-radius: 10px;
        padding: 8px;
        font-style: normal;
        font-weight: 400;
        font-size: 15px;
        display: block;
        text-align: center;
    }
    .form__cnt form label input[type=checkbox]:checked+.wpcf7-list-item-label {
        background: -webkit-gradient(linear, 0 0, 100% 0, from(#3C70F4), to(#638DF6));
        background: -webkit-linear-gradient(360deg, #3C70F4 0%, #638DF6 100%);
        background: -moz-linear-gradient(360deg, #3C70F4 0%, #638DF6 100%);
        background: -o-linear-gradient(360deg, #3C70F4 0%, #638DF6 100%);
        background: linear-gradient(360deg, #3C70F4 0%, #638DF6 100%);
        border: 1px solid #3C70F4;
        color: #fff;
    }
    .form__cnt form .wpcf7-list-item {
        margin: 0 0em 2em 0;
    }
    .form__cnt form input[type=tel],
    .form__cnt form input[type=text] {
        border: 1px solid #393939;
        border-radius: 10px;
        color: #393939;
        padding: 10px;
        margin-bottom: 20px;
        width: 100%;
    }
    .form__cnt form .wpcf7-form-control-wrap.officially-employed .wpcf7-list-item, 
    .form__cnt form .wpcf7-form-control-wrap.fssp .wpcf7-list-item {
        /*width: calc(50% - 1em);*/
        width: 100%;
    }
    .form__cnt form .wpcf7-form-control-wrap.officially-employed .wpcf7-list-item .wpcf7-list-item-label, 
    .form__cnt form .wpcf7-form-control-wrap.fssp .wpcf7-list-item .wpcf7-list-item-label {
        width: 100%;
        display: block;
        text-align: center;
    }
    .form__cnt form .row-wrapper+.button-wrapper {
        margin-top: 20px;
    }
    .form__cnt form .button-wrapper {
        max-width: 265px;
    }
    .form__cnt form .wpcf7-not-valid-tip {
        color: #dc3232;
        font-size: 1em;
        font-weight: normal;
        display: block;
        margin-top: -16px;
        margin-bottom: 16px;
    }
    .form__cnt form .wpcf7-list-item {
        margin: 0 0em 0em 0;
    }
    .form__cnt form .row-wrapper+.row-wrapper {
        margin-top: 24px;
    }
    @media (max-width: 1600px) {
        .form__cnt form #answer_summ {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    @media (max-width: 1040px) {
        .form__cnt form #answer_summ {
            grid-template-columns: 100%;
            width: 100%;
        }
        .form__cnt form #answer_creditors {
            grid-template-columns: 100%;
            width: 100%;
        }
        .form__cnt form #answer_fssp {
            grid-template-columns: 100%;
            width: 100%;
        }
        .form__cnt form #answer_reduced-income {
            grid-template-columns: 100%;
            width: 100%;
        }
        .form__cnt form #answer_place {
            grid-template-columns: 100%;
            width: 100%;
        }
    }
    @media (max-width: 782px) {
        .form__cnt form #answer_fssp {
            grid-template-columns: 100%;
        }
        .form__cnt form #answer_officially-employed {
            grid-template-columns: 100%;
        }
    }
/*
    .form__cnt form #answer_fssp {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: repeat(2, 1fr);
        grid-column-gap: 16px;
        grid-row-gap: 16px;
    }
    .form__cnt form #answer_officially-employed {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: repeat(2, 1fr);
        grid-column-gap: 16px;
        grid-row-gap: 16px;
    }
*/
    
    
    @media (max-width: 540px) {
        .form__cnt form .wpcf7-list-item {
            display: block;
            margin: 0 0em 1.2em 0;
        }
        .form__cnt form .wpcf7-list-item-label {
            display: block;
        }
        .form__cnt form .wpcf7-form-control-wrap.officially-employed .wpcf7-list-item, .form__cnt form .wpcf7-form-control-wrap.fssp .wpcf7-list-item {
            width: calc(100% - 0em);
        }
        .form__cnt form .button-wrapper {
            max-width: 100%;
        }
    }
    /* MFC Info Form */
    
    /* MFC Info Spasibo */
    .additional_text__cnt p.big {
        font-style: normal;
        font-weight: 700;
        font-size: 26px;
        line-height: 150%;
        color: #393939;
    }
    .client_info p b {
        font-style: normal;
        font-weight: 400;
        font-size: 22px;
        line-height: 120%;
        color: #5381F6;
    }
    .additional_actions {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: calc(50% - 8px) calc(50% - 8px);
        grid-column-gap: 16px;
        grid-row-gap: 16px;
    }
    .additional_actions .additional_actions_col .item+.item {
        margin-top: 8px;
    }
    .additional_actions .additional_actions_col .item span {
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 120%;
        color: #393939;
    }
    .additional_actions .additional_actions_col .item span b {
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 120%;
        color: #5381F6;
    }
    @media (max-width: 1200px) {
        .additional_actions {
            grid-template-columns: 100%;
        }
    }
    
    
    
    
    
    
    /* MFC Info Spasibo */
    
    @media (max-width: 782px) {
        .right-col-wrapper .header__cnt {
            display: none;
        }
        .right-col-wrapper .footer__cnt {
            margin-top: 30px;
        }
        .right-col-wrapper .body .content .button__cnt {
            max-width: 100%;
        }
        .right-col-wrapper .body .content h1 {
            font-size: 28px;
            margin-bottom: 0;
        }
        .right-col-wrapper .body .content em {
            font-size: 18px;
        }
        .right-col-wrapper .body .content p {
            font-size: 18px;
        }
        .right-col-wrapper .body .content p b {
            font-size: 18px;
        }
        .header-mobile__cnt {
            display: block;
        }
        .header-mobile-wrapper .header-mobile-col button {
            font-size: 14px;
        }
    }
    @media (max-width: 540px) {
        .right-col-wrapper .body .content h1 {
            font-size: 28px;
        }
        .right-col-wrapper .body .content p {
            font-size: 14px;
        }
        .right-col-wrapper .body .content p b {
            font-size: 14px;
        }
        .right-col-wrapper .body .content em {
            margin-bottom: 1em;
        }
        .header-mobile-wrapper .header-mobile-col button {
            font-size: 12px;
        }
    }
    
    
    
</style>
<div class="right-col__cnt">
    <div class="right-col-wrapper">
        <div class="header__cnt">
            <div class="header-grid2col">
                <div class="header-col">
                    <a href="/">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 163 117"><path d="M47.407 3.995h69.85v44.66h4.02V0H43.4v48.655h4.007V3.995zM117.257 113.005H99.198V117h22.079v-14.76h-4.02v10.765zM47.407 102.24H43.4V117h22.08v-3.995H47.407V102.24zM3.933 69.72v-.828a4.35 4.35 0 01-1.488-.337 4.334 4.334 0 01-1.26-.842 3.834 3.834 0 01-.87-1.256A4.021 4.021 0 010 64.838c0-.621.11-1.174.328-1.658.218-.492.512-.91.882-1.256a4.135 4.135 0 011.26-.816c.471-.198.958-.31 1.463-.336v-.726h1.953v.726c.505.025.992.138 1.462.336.471.19.891.462 1.26.816.37.346.665.764.883 1.256.219.492.328 1.045.328 1.658 0 .596-.11 1.136-.328 1.619-.21.484-.5.902-.87 1.256s-.79.635-1.26.842c-.47.199-.962.31-1.475.337v.829H3.933zm.05-2.525v-4.727a2.135 2.135 0 00-.958.337 2.03 2.03 0 00-.706.803c-.168.337-.252.747-.252 1.23 0 .492.093.907.277 1.243.185.337.42.6.706.79.294.182.605.29.933.324zm1.853 0c.336-.034.647-.142.933-.324.294-.19.529-.453.705-.79.185-.345.278-.76.278-1.243 0-.483-.088-.893-.265-1.23a2.03 2.03 0 00-.706-.803c-.285-.19-.6-.302-.945-.337v4.727zM11.319 69.72v-9.195h2.067v6.178l3.857-6.178h1.929v9.196h-2.067v-6.14l-3.807 6.14h-1.979zM28.897 60.525v9.196H26.83v-3.77h-3.567v3.77h-2.067v-9.196h2.067v3.562h3.567v-3.562h2.067zM33.12 60.525h2.232l3.075 9.196h-2.118l-.693-2.06h-2.785l-.681 2.06h-2.118l3.088-9.196zm2.156 5.673l-1.046-3.536-1.072 3.536h2.118zM47.262 60.525v9.196h-2.067v-3.77h-3.568v3.77H39.56v-9.196h2.067v3.562h3.568v-3.562h2.067zM48.712 65.045c0-.552.101-1.1.303-1.644a4.696 4.696 0 01.882-1.477c.387-.44.857-.79 1.412-1.049.554-.267 1.185-.401 1.89-.401.832 0 1.56.185 2.181.557.622.37 1.084.854 1.386 1.45l-1.588 1.14a1.86 1.86 0 00-.542-.751c-.227-.19-.47-.32-.73-.389a2.641 2.641 0 00-.757-.117c-.53 0-.966.139-1.31.415-.345.276-.602.626-.77 1.049a3.481 3.481 0 00-.252 1.295c0 .483.097.941.29 1.373.193.423.466.764.82 1.023.352.259.768.388 1.247.388.252 0 .509-.038.77-.116.26-.086.5-.224.717-.415.227-.19.4-.436.517-.738l1.69 1.023a2.714 2.714 0 01-.87 1.166c-.404.31-.862.553-1.374.725a4.827 4.827 0 01-1.5.246c-.647 0-1.24-.133-1.778-.401a4.72 4.72 0 01-1.399-1.088 5.223 5.223 0 01-.92-1.528 4.982 4.982 0 01-.315-1.736zM61.956 69.798c-.664 0-1.269-.13-1.815-.388a4.632 4.632 0 01-1.4-1.062 4.884 4.884 0 01-.907-1.502 4.911 4.911 0 01-.315-1.736c0-.604.11-1.183.328-1.735a4.912 4.912 0 01.933-1.49c.403-.44.878-.785 1.424-1.036a4.243 4.243 0 011.79-.375 3.99 3.99 0 011.802.401 4.195 4.195 0 011.4 1.062c.394.45.697.954.907 1.515.21.553.315 1.118.315 1.697 0 .604-.114 1.187-.34 1.748a4.8 4.8 0 01-.933 1.49 4.513 4.513 0 01-1.412 1.036 4.16 4.16 0 01-1.777.375zm-2.332-4.662c0 .475.088.924.265 1.347.176.414.441.755.794 1.023.353.268.781.401 1.285.401.521 0 .954-.138 1.299-.414.353-.276.613-.626.781-1.049.177-.432.265-.876.265-1.334 0-.475-.092-.92-.277-1.334a2.375 2.375 0 00-.794-1.023c-.345-.259-.77-.389-1.273-.389-.521 0-.958.139-1.311.415a2.507 2.507 0 00-.782 1.036 3.546 3.546 0 00-.252 1.321zM75.263 67.364c0 .526-.138.967-.416 1.32a2.516 2.516 0 01-1.109.778 4.223 4.223 0 01-1.512.259h-4.361v-9.196h4.978c.42 0 .782.117 1.084.35.303.225.538.518.706.88.168.363.252.739.252 1.127 0 .432-.109.847-.328 1.244-.218.397-.537.69-.957.88.504.156.907.432 1.21.83.302.397.453.906.453 1.528zm-5.331-5.025v1.903h2.029a.89.89 0 00.605-.233c.177-.155.265-.397.265-.725 0-.302-.08-.535-.24-.7a.726.726 0 00-.554-.245h-2.105zm3.226 4.597c0-.285-.08-.527-.239-.725a.745.745 0 00-.605-.298h-2.382v2.007h2.294c.26 0 .479-.09.655-.272a.98.98 0 00.277-.712zM80.653 69.798c-.664 0-1.269-.13-1.815-.388a4.632 4.632 0 01-1.4-1.062 4.886 4.886 0 01-.907-1.502 4.913 4.913 0 01-.315-1.736c0-.604.11-1.183.328-1.735a4.912 4.912 0 01.933-1.49c.403-.44.878-.785 1.424-1.036a4.243 4.243 0 011.79-.375 3.99 3.99 0 011.802.401 4.195 4.195 0 011.4 1.062c.394.45.697.954.907 1.515.21.553.315 1.118.315 1.697 0 .604-.113 1.187-.34 1.748a4.8 4.8 0 01-.933 1.49 4.514 4.514 0 01-1.412 1.036 4.16 4.16 0 01-1.777.375zm-2.332-4.662c0 .475.088.924.265 1.347.176.414.441.755.794 1.023.353.268.782.401 1.286.401.52 0 .953-.138 1.298-.414.353-.276.613-.626.781-1.049.177-.432.265-.876.265-1.334 0-.475-.092-.92-.277-1.334a2.375 2.375 0 00-.794-1.023c-.345-.259-.77-.389-1.273-.389-.521 0-.958.139-1.311.415a2.506 2.506 0 00-.782 1.036 3.546 3.546 0 00-.252 1.321zM86.385 67.092v-1.865h3.882v1.865h-3.882zM92.095 69.72v-9.195h7.45v9.196h-2.068v-7.33h-3.315v7.33h-2.067zM101.554 69.72v-9.195h3.819c.428 0 .819.091 1.172.272.361.173.672.41.933.713a3.259 3.259 0 01.819 2.124 3.28 3.28 0 01-.365 1.515 3.084 3.084 0 01-.996 1.165c-.429.294-.929.44-1.5.44h-1.815v2.967h-2.067zm2.067-4.817h1.689c.244 0 .454-.108.63-.324.177-.216.265-.53.265-.945 0-.423-.105-.734-.315-.933-.202-.207-.421-.31-.656-.31h-1.613v2.512zM111.263 60.525h2.231l3.075 9.196h-2.117l-.693-2.06h-2.786l-.681 2.06h-2.117l3.088-9.196zm2.155 5.673l-1.046-3.536-1.071 3.536h2.117zM125.102 67.364c0 .526-.139.967-.416 1.32a2.517 2.517 0 01-1.11.778 4.215 4.215 0 01-1.512.259h-4.361v-9.196h4.979c.42 0 .781.117 1.084.35.302.225.537.518.705.88.168.363.253.739.253 1.127 0 .432-.11.847-.328 1.244a2.01 2.01 0 01-.958.88c.504.156.907.432 1.21.83.302.397.454.906.454 1.528zm-5.332-5.025v1.903h2.029a.888.888 0 00.605-.233c.177-.155.265-.397.265-.725 0-.302-.08-.535-.24-.7a.725.725 0 00-.554-.245h-2.105zm3.227 4.597c0-.285-.08-.527-.24-.725a.743.743 0 00-.605-.298h-2.382v2.007h2.294c.26 0 .479-.09.655-.272a.98.98 0 00.278-.712zM130.491 69.798c-.664 0-1.269-.13-1.815-.388a4.63 4.63 0 01-1.399-1.062 4.882 4.882 0 01-1.223-3.238c0-.604.11-1.183.328-1.735a4.915 4.915 0 01.933-1.49c.403-.44.878-.785 1.424-1.036a4.243 4.243 0 011.79-.375c.664 0 1.265.134 1.803.401a4.202 4.202 0 011.399 1.062c.395.45.697.954.907 1.515.21.553.315 1.118.315 1.697a4.62 4.62 0 01-.34 1.748 4.8 4.8 0 01-.933 1.49 4.513 4.513 0 01-1.411 1.036 4.164 4.164 0 01-1.778.375zm-2.332-4.662c0 .475.089.924.265 1.347.177.414.441.755.794 1.023.353.268.782.401 1.286.401.521 0 .954-.138 1.298-.414.353-.276.614-.626.782-1.049.176-.432.264-.876.264-1.334 0-.475-.092-.92-.277-1.334a2.37 2.37 0 00-.794-1.023c-.345-.259-.769-.389-1.273-.389-.521 0-.958.139-1.311.415a2.498 2.498 0 00-.781 1.036 3.529 3.529 0 00-.253 1.321zM143.799 67.364c0 .526-.139.967-.416 1.32a2.52 2.52 0 01-1.109.778 4.224 4.224 0 01-1.513.259H136.4v-9.196h4.979c.42 0 .781.117 1.084.35.302.225.537.518.706.88.168.363.252.739.252 1.127 0 .432-.11.847-.328 1.244a2.01 2.01 0 01-.958.88c.504.156.907.432 1.21.83.302.397.454.906.454 1.528zm-5.332-5.025v1.903h2.029a.888.888 0 00.605-.233c.177-.155.265-.397.265-.725 0-.302-.08-.535-.239-.7a.728.728 0 00-.555-.245h-2.105zm3.227 4.597c0-.285-.08-.527-.24-.725a.743.743 0 00-.605-.298h-2.382v2.007h2.294c.261 0 .479-.09.655-.272a.98.98 0 00.278-.712zM149.188 69.798c-.663 0-1.269-.13-1.815-.388a4.643 4.643 0 01-1.399-1.062 4.882 4.882 0 01-1.222-3.238c0-.604.109-1.183.327-1.735a4.915 4.915 0 01.933-1.49c.403-.44.878-.785 1.424-1.036a4.247 4.247 0 011.79-.375c.664 0 1.265.134 1.803.401a4.202 4.202 0 011.399 1.062c.395.45.697.954.907 1.515.21.553.315 1.118.315 1.697a4.62 4.62 0 01-.34 1.748 4.781 4.781 0 01-.933 1.49 4.513 4.513 0 01-1.411 1.036 4.164 4.164 0 01-1.778.375zm-2.331-4.662c0 .475.088.924.264 1.347.177.414.441.755.794 1.023.353.268.782.401 1.286.401.521 0 .954-.138 1.298-.414.353-.276.614-.626.782-1.049.176-.432.264-.876.264-1.334 0-.475-.092-.92-.277-1.334a2.37 2.37 0 00-.794-1.023c-.344-.259-.769-.389-1.273-.389-.521 0-.958.139-1.311.415a2.507 2.507 0 00-.781 1.036 3.548 3.548 0 00-.252 1.321zM155.147 69.72v-9.195h2.068v6.178l3.857-6.178H163v9.196h-2.067v-6.14l-3.807 6.14h-1.979zm3.933-9.687c-.504 0-.945-.086-1.323-.259a2.204 2.204 0 01-.883-.725c-.21-.31-.315-.66-.315-1.049h1.374c0 .268.092.5.277.7.194.198.488.297.883.297.369 0 .651-.095.844-.285a.937.937 0 00.303-.712h1.374c0 .389-.106.738-.316 1.049-.21.302-.508.544-.895.725-.378.173-.819.26-1.323.26zM57.929 82.727h2.23l3.076 9.195h-2.117l-.694-2.059H57.64l-.68 2.06H54.84l3.088-9.196zm2.155 5.673l-1.046-3.536-1.071 3.536h2.117zM69.94 91.922v-7.33h-2.218l-.05 1.412c-.043 1.191-.144 2.175-.303 2.953-.16.777-.391 1.39-.694 1.839a2.4 2.4 0 01-1.134.932c-.462.173-1.021.263-1.676.272v-1.839c.294 0 .55-.06.768-.181.219-.13.4-.363.542-.7.152-.336.27-.816.353-1.437.093-.63.156-1.45.19-2.46l.088-2.656h6.201v9.195H69.94zM74.014 91.922v-9.195h2.067V85.9h1.663c.992 0 1.765.268 2.32.803.563.535.844 1.265.844 2.189 0 .915-.269 1.649-.806 2.201-.538.553-1.286.83-2.244.83h-3.844zm2.067-1.735h1.474c.429 0 .744-.121.946-.363.201-.242.302-.552.302-.932 0-.328-.1-.618-.302-.868-.194-.259-.509-.389-.946-.389h-1.474v2.552zM82.076 91.922l2.117-3.6a2.494 2.494 0 01-1.235-1.01c-.294-.475-.441-1.032-.441-1.67 0-.562.126-1.063.378-1.503.252-.44.605-.786 1.059-1.036.453-.25.974-.376 1.563-.376h3.78v9.195h-2.066v-3.354h-.946l-1.878 3.354h-2.331zm3.705-5.154h1.45v-2.24h-1.425c-.31 0-.588.086-.831.258-.236.173-.353.458-.353.855 0 .389.109.673.327.855.227.181.505.272.832.272zM98.971 82.727v9.195h-2.067v-3.768h-3.567v3.768H91.27v-9.195h2.067v3.562h3.567v-3.562h2.067zM100.421 87.247c0-.553.101-1.1.303-1.645a4.71 4.71 0 01.882-1.476c.387-.44.857-.79 1.412-1.05.555-.267 1.185-.4 1.891-.4.832 0 1.558.185 2.18.556.622.371 1.084.855 1.387 1.45l-1.588 1.14a1.874 1.874 0 00-.542-.75 1.888 1.888 0 00-.732-.39 2.635 2.635 0 00-.756-.116c-.529 0-.966.138-1.311.415-.344.276-.6.626-.769 1.049a3.481 3.481 0 00-.252 1.295c0 .483.097.94.29 1.373.194.423.467.764.82 1.023a2.05 2.05 0 001.247.388c.253 0 .509-.039.769-.116.261-.087.5-.225.719-.415a1.79 1.79 0 00.517-.738l1.689 1.023a2.723 2.723 0 01-.87 1.166c-.403.31-.861.552-1.374.725a4.823 4.823 0 01-1.5.246 3.932 3.932 0 01-1.777-.401 4.713 4.713 0 01-1.399-1.088 5.21 5.21 0 01-.92-1.529 4.962 4.962 0 01-.316-1.735z" fill="#333"></path></svg>
					</a>
                </div>
				<div class="header-col">
					<button class="btn btn-gray">Бесплатная горячая линия</button>
				</div>
			</div>
		</div>
		<div class="body">
		    <?php
                if ($right_col_content['content_type']['value'] == 'text') {
            ?>
                    <div class="content">
            <?php
		                echo $right_col_content['text'];
            ?>
                        <div class="button__cnt">
							<a class="btn btn-blue btn-link" id="kviz_link" href="/mfcinfotest">Пройти тест из 5 вопросов</a>
						</div>
                    </div>
            <?php
		        }
            ?>
            
            <?php
                if ($right_col_content['content_type']['value'] == 'form') {
            ?>
                    <div class="form__cnt">
            <?php
		                echo do_shortcode("[contact-form-7 id='22452' title='Опрос - MFC Info']");
            ?>
                    </div>
            <?php
		        }
            ?>
            
            <?php
                if ($right_col_content['content_type']['value'] == 'form_vk') {
            ?>
                    <div class="content">
            <?php
                            echo $right_col_content['text'];
            ?>
                    </div>
                    <div class="form__cnt">
            <?php
		                echo do_shortcode("[contact-form-7 id='22524' title='Опрос - MFC Info VK']");
            ?>
                    </div>
            <?php
		        }
            ?>
            
            <?php
                if ($right_col_content['content_type']['value'] == 'form_vk_ver2') {
            ?>
                    <div class="content">
            <?php
                            echo $right_col_content['text'];
            ?>
                    </div>
                    <div class="form__cnt">
            <?php
		                echo do_shortcode("[contact-form-7 id='22532' title='Опрос - MFC Info VK ver2']");
            ?>
                    </div>
            <?php
		        }
            ?>
            
            <?php
                if ($right_col_content['content_type']['value'] == 'spasibo') {
            ?>
                    <div class="content">
            <?php
		                echo $right_col_content['text'];
            ?>
                        <div class="additional_text__cnt">
							
							<p class="big">Информация об обращении</p>
							<div class="client_info">
							    <p><b>Код обращения:</b> 9574889</p>
    							<p class="customer_name"><b>ФИО:</b> <span></span></p>
    							<p class="customer_phone"><b>Номер телефона:</b> <span></span></p>
    							<p><b>Тип заявителя:</b> Физическое лицо</p>
    							<p><b>Тип обращения:</b> Подача документов в офисе или онлайн</p>
    							<p><b>Услуга:</b> Прохождение внесудебной процедуры банкротства</p>
    							<p><b>Заявленное количество обращений по услуге на подачу документов или получение результата:</b> 1</p>
							</div>
							<p>Внесудебное банкротство физических лиц в МФЦ стало доступно гражданам РФ с 1 сентября 2020 года, после принятия федерального закона от 31.07.2020 № 289-ФЗ "О внесении изменений в Федеральный закон "О несостоятельности (банкротстве)" и отдельные законодательные акты Российской Федерации в части внесудебного банкротства гражданина"</p>
							<div class="additional_actions">
							    <div class="additional_actions_col">
							        <div class="item">
							            <span>Дата опубликования: <b>31.07.2020</b></span>
							        </div>
							        <div class="item">
							            <span>Номер опубликования: <b>0001202007310066</b></span>
							        </div>
							    </div>
							    <div class="additional_actions_col">
							        <div class="item">
							            <a href="https://fpa.ru/wp-content/uploads/2022/12/document-0001202007310066.pdf" download>
    							            <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.4737 10.5654C6.3357 10.5654 6.2427 10.5782 6.1947 10.5909V11.4253C6.2517 11.4381 6.32295 11.4416 6.4212 11.4416C6.78045 11.4416 7.0017 11.2702 7.0017 10.9805C7.0017 10.7213 6.8112 10.5654 6.4737 10.5654ZM9.08895 10.5739C8.93895 10.5739 8.84145 10.5867 8.7837 10.5994V12.4482C8.84145 12.4609 8.93445 12.4609 9.01845 12.4609C9.6312 12.4652 10.0302 12.1464 10.0302 11.4721C10.0347 10.8842 9.67095 10.5739 9.08895 10.5739Z" fill="#5381F6"/><path d="M10.7734 1.58398H4.77344C4.37561 1.58398 3.99408 1.73324 3.71278 1.99892C3.43147 2.26459 3.27344 2.62493 3.27344 3.00065V14.334C3.27344 14.7097 3.43147 15.07 3.71278 15.3357C3.99408 15.6014 4.37561 15.7507 4.77344 15.7507H13.7734C14.1713 15.7507 14.5528 15.6014 14.8341 15.3357C15.1154 15.07 15.2734 14.7097 15.2734 14.334V5.83398L10.7734 1.58398ZM7.39694 11.6352C7.16519 11.8407 6.82319 11.9327 6.42494 11.9327C6.34772 11.9335 6.27053 11.9293 6.19394 11.92V12.9301H5.52344V10.1421C5.82603 10.0994 6.13178 10.08 6.43769 10.084C6.85544 10.084 7.15244 10.1591 7.35269 10.3099C7.54319 10.453 7.67219 10.6875 7.67219 10.9637C7.67144 11.2414 7.57394 11.4759 7.39694 11.6352ZM10.2522 12.595C9.93719 12.8422 9.45794 12.9598 8.87219 12.9598C8.52119 12.9598 8.27294 12.9386 8.10419 12.9173V10.1428C8.40689 10.101 8.71254 10.0814 9.01844 10.084C9.58619 10.084 9.95519 10.1803 10.2432 10.3857C10.5544 10.6039 10.7494 10.9517 10.7494 11.4511C10.7494 11.9915 10.5402 12.3648 10.2522 12.595ZM13.0234 10.6294H11.8744V11.2747H12.9484V11.7946H11.8744V12.9308H11.1949V10.1052H13.0234V10.6294ZM10.0234 6.54232V3.00065L13.7734 6.54232H10.0234Z" fill="#5381F6"/></svg>
                                            <span>Сохранить на компьютер</span>
                                        </a>
							        </div>
							        <div class="item hidden">
							            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.22656 1.99121C4.82874 1.99121 4.44721 2.13937 4.1659 2.40309C3.8846 2.66682 3.72656 3.0245 3.72656 3.39746V3.86621H2.72656C2.19613 3.86621 1.68742 4.06376 1.31235 4.41539C0.937276 4.76702 0.726563 5.24393 0.726562 5.74121V9.95996C0.726563 10.3329 0.884598 10.6906 1.1659 10.9543C1.44721 11.2181 1.82874 11.3662 2.22656 11.3662H3.72656V11.835C3.72656 12.2079 3.8846 12.5656 4.1659 12.8293C4.44721 13.0931 4.82874 13.2412 5.22656 13.2412H10.3266C10.7244 13.2412 11.1059 13.0931 11.3872 12.8293C11.6685 12.5656 11.8266 12.2079 11.8266 11.835V11.3662H13.2266C13.6244 11.3662 14.0059 11.2181 14.2872 10.9543C14.5685 10.6906 14.7266 10.3329 14.7266 9.95996V5.74121C14.7266 5.24393 14.5158 4.76702 14.1408 4.41539C13.7657 4.06376 13.257 3.86621 12.7266 3.86621H11.7266V3.39746C11.7266 3.0245 11.5685 2.66682 11.2872 2.40309C11.0059 2.13937 10.6244 1.99121 10.2266 1.99121H5.22656ZM10.7266 3.86621H4.72656V3.39746C4.72656 3.27314 4.77924 3.15391 4.87301 3.066C4.96678 2.9781 5.09395 2.92871 5.22656 2.92871H10.2266C10.3592 2.92871 10.4863 2.9781 10.5801 3.066C10.6739 3.15391 10.7266 3.27314 10.7266 3.39746V3.86621ZM5.22656 9.49121H10.3266C10.4592 9.49121 10.5863 9.5406 10.6801 9.6285C10.7739 9.71641 10.8266 9.83564 10.8266 9.95996V11.835C10.8266 11.9593 10.7739 12.0785 10.6801 12.1664C10.5863 12.2543 10.4592 12.3037 10.3266 12.3037H5.22656C5.09395 12.3037 4.96678 12.2543 4.87301 12.1664C4.77924 12.0785 4.72656 11.9593 4.72656 11.835V9.95996C4.72656 9.83564 4.77924 9.71641 4.87301 9.6285C4.96678 9.5406 5.09395 9.49121 5.22656 9.49121Z" fill="#5381F6"/></svg>
                                        <span>Распечатать</span>
							        </div>
							    </div>
							</div>
                            <div class="swiper doc-slider-cnt hidden-old">
                                <div class="doc-slider-nav notforprint">
                                    <button class="btn doc-slider-prev-btn">Предыдущая</button>
                                    <div class="nav-cnt">
                                        <div class="doc-slider-pagination hidden"></div>
                                    </div>
                                    <button class="btn doc-slider-next-btn">Следующая</button>
                                </div>
                                <div class="swiper-wrapper">
                                    <?php
                                        foreach ($right_col_content['slider'] as $key => $value) {
                                            echo '<div class="swiper-slide"><img src="'.$value['url'].'" alt="Документ №0001202007310066. Страница '.($key + 1).' из '.count($right_col_content['slider']).'" /></div>';
                                        }
                                    ?>
                                </div>
                                <div class="notforprint">
                                    <div class="nav-cnt">
                                        <div class="doc-slider-pagination hidden"></div>
                                    </div>
                                </div>
                            </div>
						</div>
                    </div>
            <?php
		        }
            ?>
        </div>
		<div class="footer__cnt">
			<p>Бесплатное банкротство в МФЦ для граждан стало возможным в соответствии с поправками от 31.07.2020 г. в ФЗ №127 «О несостоятельности (банкротстве)». 2. Бесплатное банкротство граждан в Арбитражном суде Санкт-Петербурга возможно в соответствии с ФЗ №127 «О несостоятельности (банкротстве)» по pro bono программе компании ООО «Финансово-правовой альянс» - «100 банкротств за 0 руб.», ИНН - 7838051976.</p>
		</div>
    </div>
</div>