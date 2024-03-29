<style>
    @font-face {
        font-family: 'PT Sans';
        src: url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-Italic.eot');
        src: url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-Italic.eot?#iefix') format('embedded-opentype'),
            url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-Italic.woff2') format('woff2'),
            url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-Italic.woff') format('woff'),
            url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-Italic.ttf') format('truetype'),
            url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-Italic.svg#PTSans-Italic') format('svg');
        font-weight: normal;
        font-style: italic;
        font-display: swap;
    }
    
    @font-face {
        font-family: 'PT Sans';
        src: url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-Bold.eot');
        src: url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-Bold.eot?#iefix') format('embedded-opentype'),
            url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-Bold.woff2') format('woff2'),
            url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-Bold.woff') format('woff'),
            url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-Bold.ttf') format('truetype'),
            url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-Bold.svg#PTSans-Bold') format('svg');
        font-weight: bold;
        font-style: normal;
        font-display: swap;
    }
    
    @font-face {
        font-family: 'PT Sans';
        src: url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-BoldItalic.eot');
        src: url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-BoldItalic.eot?#iefix') format('embedded-opentype'),
            url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-BoldItalic.woff2') format('woff2'),
            url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-BoldItalic.woff') format('woff'),
            url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-BoldItalic.ttf') format('truetype'),
            url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-BoldItalic.svg#PTSans-BoldItalic') format('svg');
        font-weight: bold;
        font-style: italic;
        font-display: swap;
    }
    
    @font-face {
        font-family: 'PT Sans';
        src: url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-Regular.eot');
        src: url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-Regular.eot?#iefix') format('embedded-opentype'),
            url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-Regular.woff2') format('woff2'),
            url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-Regular.woff') format('woff'),
            url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-Regular.ttf') format('truetype'),
            url('/wp-content/themes/fpalaw/assets/fonts/PTSans/PTSans-Regular.svg#PTSans-Regular') format('svg');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }
    body {
        font-family: PT Sans,Arial,Helvetica,sans-serif;
    }
    .main-container {
        /*
        width: calc(100% - 64px);
        margin: 32px auto;
        */
        /*
        margin: 32px 150px 32px 100px;
        max-width: calc(100% - 250px);
        */
        margin: 0;
        max-width: 100%;
    }
    .main-row {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: calc(50% - 32px) calc(50% - 32px);
        grid-column-gap: 64px;
        grid-row-gap: 64px;
    }
    .main-image {
        height: 100%;
    }
    .main-image img {
        height: 100%;
        object-fit: cover;
        width: 100%;
    }
    .main-col .head {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        /*margin-bottom: 60px;*/
    }
    .header-text {
        /*
        background: rgba(78, 125, 245, 0.1);
        border-radius: 5px;
        padding: 16px;
        max-width: 380px;
        */
        /*
        background: rgba(78, 125, 245, 0.1);
        border-radius: 5px;
        padding: 16px;
        max-width: 240px;
        */
    }
    .header-text p {
        font-style: normal;
        font-weight: 700;
        font-size: 15px;
        line-height: 135%;
        letter-spacing: 0.02em;
        color: #393939;
        margin: 0;
    }
    .header-text p span {
        color: #5482F6;
    }    
    .content h1 {
        font-family: 'PT Sans';
        font-style: normal;
        font-weight: 700;
        font-size: 34px;
        line-height: 130%;
        letter-spacing: 0.01em;
        color: #393939;
        margin-bottom: 24px;
    }
    .content h1 span {
        color: #5381F6;
        position: relative;
        min-width: 46px;
        min-height: 46px;
    }
    .content h1 span.round:before {
        content: "";
        position: absolute;
        width: 46px;
        height: 46px;
        top: calc(50% - 23px);
        left: calc(50% - 23px);
        background: rgba(75, 123, 245, 0.1);
        border-radius: 50%;
    }
    .conditions-wrap {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 20px;
    }
    .conditions-wrap .conditions-item {
        max-width: 250px;
        margin-right: 10px;
        margin-bottom: 10px;
        padding: 30px 20px 20px;
        background: #EDF2FE;
        border-radius: 5px;
    }
    .conditions-item-title {
        font-style: normal;
        font-weight: 700;
        font-size: 17px;
        line-height: 135%;
        color: #5381F6;
        position: relative;
        margin-bottom: 20px;
    }
    .conditions-item-title:before {
        content: "";
        position: absolute;
        width: 30px;
        height: 30px;
        top: -3px;
        left: -8px;
        background: #fff;
        border-radius: 50%;
        z-index: 0;
    }
    .conditions-item-title .text {
        font-size: 14px;
    }
    .conditions-item-title span {
        z-index: 1;
        position: relative;
    }
    .conditions-item-content {
        margin-bottom: 20px;
    }
    .conditions-item-content p {
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 135%;
        color: #393939;
        margin: 0;
    }
    .conditions-item-foot {
        font-style: normal;
        font-weight: 400;
        font-size: 12px;
        line-height: 120%;
        display: flex;
        align-items: flex-end;
        letter-spacing: -0.02em;
        color: #8D98A5;
    }
    .custom-text {
        margin-bottom: 38px;
    }
    .custom-text p {
        font-family: 'PT Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 20px;
        line-height: 145%;
        color: #393939;
        max-width: 620px;
    }
    
    .custom-form br {
        display: none;
    }
    .custom-form form label {
        font-style: normal;
        font-weight: 400;
        font-size: 13px;
        line-height: 135%;
        color: #8E8E8E;
        display: block;
        margin-bottom: 20px;
    }
    .custom-form form .fields-row {
        align-items: flex-start;
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: calc(50% - 8px) calc(50% - 8px);
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        margin-bottom: 20px;
    }
    .custom-form form input {
        border-radius: 7px!important;
    }
    .custom-form form input:focus {
        outline: none;
    }
    .foot-text {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 30px auto;
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        margin-bottom: 60px;
        align-items: flex-start;
    }
    .foot-text .foot-custom-text p {
        font-style: normal;
        font-weight: 400;
        font-size: 12px;
        line-height: 135%;
        color: #393939;
        margin: 0;
    }
    .foot-text .foot-custom-text p span {
        color: #5A86F6;
        font-weight: 700;
    }
    .foot p {
        font-style: normal;
        font-weight: 400;
        font-size: 13px;
        line-height: 130%;
        color: #000000;
    }
    .wpcf7-response-output {
        display: none;
    }
    .main-image-mobile {
        display: none;
    }
    .custom-text p span {
        color: #5381F6;
        font-weight: 700;
    }
    .popup__cnt:not(.hidden) .popup__overlay {
        position: fixed;
    }
    .popup__cnt .popup__overlay {
        background: rgba(217, 217, 217, 0.45);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .popup-item__cnt.aimfree__thanks {
        background: #FFFFFF;
        border-radius: 10px;
        padding: 56px;
        position: relative;
        max-width: 760px;
    }
    .popup-item__cnt.aimfree__thanks .close {
        position: absolute;
        top: 0;
        right: 0;
        cursor: pointer;
    }
    .popup-item__cnt.aimfree__thanks .content .title {
        font-style: normal;
        font-weight: 400;
        font-size: 32px;
        line-height: 130%;
        color: #393939;
        margin: 0 0 30px;
    }
    .popup-item__cnt.aimfree__thanks .content .subtitle {
        font-style: normal;
        font-weight: 400;
        font-size: 20px;
        line-height: 130%;
        color: #393939;
        margin: 0 0 60px;
    }
    .foot-text .foot-custom-text p span.new-line {
        color: #393939;
        display: block;
        font-weight: 400;
    }
    .custom-form form input[type=tel] {
        border: 1px solid #000;
        background: transparent; 
        text-align: left;
    }
    
    .custom-form form input[type=tel]::-webkit-input-placeholder { /* WebKit, Blink, Edge */
        color:    #000;
    }
    .custom-form form input[type=tel]:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
       color:    #000;
       opacity:  1;
    }
    .custom-form form input[type=tel]::-moz-placeholder { /* Mozilla Firefox 19+ */
       color:    #000;
       opacity:  1;
    }
    .custom-form form input[type=tel]:-ms-input-placeholder { /* Internet Explorer 10-11 */
       color:    #000;
    }
    .custom-form form input[type=tel]::-ms-input-placeholder { /* Microsoft Edge */
       color:    #000;
    }
    .custom-form form input[type=tel]::placeholder { /* Most modern browsers support this now. */
       color:    #000;
    }
    
    
    .yandex-reviews-plashka {
        background: rgba(78, 125, 245, 0.1);
        border-radius: 5px;
        height: 60px;
        width: 280px;
    }
    .yandex-reviews-plashka-row {
        padding: 12px 36px 8px;
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 90px auto;
        grid-column-gap: 17px;
        grid-row-gap: 17px;
        align-items: center;
    }
    .yandex-reviews-plashka-row .plashka-col img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    .plashka-count {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: auto auto;
        grid-column-gap: 4px;
        grid-row-gap: 4px;
    }
    .plashka-count .num {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 600;
        font-size: 15px;
        line-height: 100%;
        display: flex;
        align-items: center;
        color: #393939;
    }
    .plashka-reviews-count {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 12px;
        line-height: 130%;
        text-align: left;
        color: #393939;
    }
    
    
    .main-row .main-col:last-child {
        justify-content: space-between;
        display: flex;
        flex-direction: column;
        padding-top: 35px;
        padding-bottom: 0px;
        padding-right: 64px;
    }
    
    .main-row .main-col .content a.btn {
        max-width: 282px!important;
        margin-bottom: 40px;
        font-family: 'PT Sans';
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 130%;
    }
    
    .plashka-main-row {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 140px auto;
        grid-column-gap: 4px;
        grid-row-gap: 4px;
        align-items: stretch;
    }
    .plashka-main-row .fpa-logo.mobile {
        display: none;
    }
    .plashka-main-row .youtube-reviews-plashka {
        background: rgba(78, 125, 245, 0.1);
        border-radius: 8px;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 14px;
        height: 100%;
    }
    .plashka-main-row .youtube-reviews-plashka img {
        /*max-width: 88px;*/
        /*margin: 16px auto;*/
    }
    .plashka-main-row .youtube-reviews-plashka img.Youtube-S-mbolo1 {
        width: 50px;
        margin: 0 auto 8px;
    }
    .plashka-main-row .youtube-reviews-plashka img.Youtube-S-mbolo2 {
        width: 60px;
        margin: 0 auto 10px;
    }
    .plashka-main-row .youtube-reviews-plashka .plashka-reviews-count {
        max-width: 90px;
        margin: 0 auto;
        text-align: center;
    }
    .plashka-main-row .youtube-reviews-plashka .plashka-reviews-count span {
        font-weight: 500;
        font-size: 15px;
    }
    .plashka-main-row .yandex-reviews-plashka {
        margin-bottom: 4px;
        height: 80px!important;
        display: flex;
        align-items: center;
    }
    .plashka-main-row .chanels-plashka {
        background: #EDF2FE;
        border-radius: 8px;
    }
    .plashka-main-row .chanels-plashka .chanels-plashka-row {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 74px auto;
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        justify-content: center;
        align-items: center;
        padding: 24px;
    }
    .plashka-main-row .yandex-reviews-plashka {
            border-radius: 8px;
    }
    
    .custom-form form .row-wrapper .question-title {
        font-weight: 700;
        font-size: 20px;
        line-height: 130%;
        letter-spacing: 0.01em;
        color: #5381F6;
    }
    .custom-form form .row-wrapper .question-text {
        font-weight: 700;
        font-size: 18px;
        line-height: 130%;
        letter-spacing: 0.01em;
        color: #393939;
    }
    .custom-form form .row-wrapper .question-text span {
        display: none;
    }
    .custom-form form .row-wrapper .col-wrapper .wpcf7-form-control-wrap {
        position: relative;
    }
    .custom-form form .row-wrapper .col-wrapper .variations .wpcf7-checkbox {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: calc(50% - 4px) calc(50% - 4px);
        grid-column-gap: 8px;
        grid-row-gap: 8px;
    }
    .custom-form form .row-wrapper .col-wrapper #answer_summ {
        grid-template-columns: auto auto auto;
    }
    .custom-form form .row-wrapper .col-wrapper .variations .wpcf7-checkbox .wpcf7-list-item {
        margin: 0;
    }
    .custom-form form .row-wrapper .col-wrapper .variations .wpcf7-checkbox .wpcf7-list-item label {
        display: block;
    } 
    .custom-form form .row-wrapper .col-wrapper .variations .wpcf7-checkbox .wpcf7-list-item input[type=checkbox] {
        display: none;
    }
    .custom-form form .row-wrapper .col-wrapper .variations .wpcf7-checkbox .wpcf7-list-item .wpcf7-list-item-label {
        border: 1px solid #393939;
        border-radius: 10px;
        font-weight: 400;
        font-size: 15px;
        letter-spacing: 0.01em;
        color: #393939;
        padding: 9px;
        text-align: center;
        align-items: center;
        cursor: pointer;
    }
    .custom-form form .row-wrapper .col-wrapper .variations .wpcf7-checkbox .wpcf7-list-item span {
        display: block;
    }
    .custom-form form .row-wrapper .col-wrapper .variations .wpcf7-checkbox .wpcf7-list-item .wpcf7-list-item-label {
        cursor: pointer;
    }
    .custom-form form .row-wrapper .col-wrapper .variations input[type=tel], 
    .custom-form form .row-wrapper .col-wrapper .variations input[type=text] {
        border: 1px solid #663A2A;
        border-radius: 10px;
        font-weight: 400;
        font-size: 15px;
        letter-spacing: 0.01em;
        color: #663A2A;
        width: 100%;
        padding: 10px;
    }
    .custom-form form .row-wrapper+.row-wrapper {
        margin-top: 30px;
    }
    .custom-form form .row-wrapper {
        display: grid;
        grid-template-rows: auto;
        /* grid-template-columns: calc(50% - 8px) calc(50% - 8px); */
        grid-template-columns: 100%;
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        margin-bottom: 30px;
        align-items: flex-end;
    }
    .custom-form form .row-wrapper .button-wrapper {
        margin-top: 30px;
    }

    .custom-form form .row-wrapper .col-wrapper .variations .wpcf7-checkbox .wpcf7-list-item input[type=checkbox]:checked+span {
        background: #3C70F4;
        color: #fff;
    }
    .popup-item__cnt .calculation--inpost {
        margin: 0px!important;
    }
    
    .popup__overlay {
        
        background-color: #fff!important;
        
    }
    .main-row {
        min-height: 100vh;
    }
    
    .popup__cnt .popup__overlay {
        align-items: flex-start;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    
    .popup__overlay {
        background-color: rgba(229,229,229,1)!important;
    }
    .popup-item__cnt .popup__close {
        padding: 0;
        background: 0 0;
        border: none;
        position: absolute;
        top: -26px;
        right: 0;
        z-index: 10;
        width: 16px;
        height: 16px;
        cursor: pointer;
        top: -33px;
        right: 10px;
    }    
    .popup-item__cnt .popup__close svg {
        -webkit-transition: fill .2s ease;
        -o-transition: fill .2s ease;
        transition: fill .2s ease;
        width: 16px;
        height: 16px;
    }
    .popup-item__cnt .popup__close:hover svg {
        fill: rgba(60,112,244,.8);
    }
    @media (min-width: 768px) {
        body .popup-item__cnt button.popup__close {
            position: fixed;
            z-index: 999999999;
            top: 32px;
            right: auto;
            width: 100%;
            max-width: 672px;
            text-align: right;
        }
        .popup-item__cnt:not(.calculator__cnt) .popup__close {
            top: 10px!important;
        }
    }

    
            .title-big {
            margin-bottom: 36px;
            font-size: 26px;
            margin-top: 0;
            font-weight: 700;
            line-height: 1.4;
        }
        .title-big span {
            color: #5381F6;
        }

    
    
    
    
    
    
    @media (min-width: 1440px) and (max-width: 2100px) {
        .conditions-wrap .conditions-item {
            max-width: calc(33.3% - 10px);
            margin-right: 10px;
            margin-bottom: 10px;
            padding: 20px;
            background: #EDF2FE;
            border-radius: 5px;
        }
        .conditions-wrap .conditions-item:last-child {
            max-width: calc(33.3% - 0px);
            margin-right: 0px;    
        }    
    }
    @media (max-width: 1440px) {
        .main-container {
            /*
            width: calc(100% - 64px);
            margin: 32px auto;
            */
            /*
            margin: 32px 75px 32px 50px;
            max-width: calc(100% - 125px);
            */
        }
    }
    
    
    
    @media (max-width: 1280px) {
        .plashka-main-row {
            margin-bottom: 24px;
        }
        .plashka-main-row .fpa-logo.mobile {
            background: rgba(78, 125, 245, 0.1);
            border-radius: 8px;
            margin-bottom: 4px;
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .plashka-main-row .fpa-logo.mobile img {
            height: 46px;
            object-fit: contain;
        }
        .plashka-main-row .youtube-reviews-plashka {
            height: 80px;
            flex-direction: row;
            align-items: center;
            font-weight: 500;
        }
        .plashka-main-row .youtube-reviews-plashka img {
            max-height: 46px;
            object-fit: contain;
        }
        .plashka-main-row .youtube-reviews-plashka .plashka-reviews-count {
            text-align: left;
            font-size: 9px;
        }
        .main-col .head .logo {
            display: none;
        }
        .plashka-main-row .youtube-reviews-plashka img {
            max-width: 50px;
        }
        .plashka-main-row .youtube-reviews-plashka a {
            flex-direction: row;
            align-items: center;
            font-weight: 500;
            display: flex;
        }
        .plashka-main-row .youtube-reviews-plashka img.Youtube-S-mbolo1 {
            width: 32px;
            margin-bottom: 4px;
        }
        .plashka-main-row .youtube-reviews-plashka img.Youtube-S-mbolo2 {
            width: 35px;
            margin-bottom: 0;
        }
        .img-grid-cnt {
            margin-right: 8px;
        }
    }
    
    
    @media (max-width: 1200px) {
        /*
        .main-container {
            width: calc(100% - 64px);
            margin: 32px auto;
            max-width: calc(100% - 64px);
        }
        */
        .header-text {
            max-width: 300px;
        }
        .header-text p {
            font-size: 12px;
        }
        .content h1 {
            font-size: 28px;
        }
        .conditions-wrap .conditions-item {
            max-width: calc(50% - 10px);
        }
        .conditions-wrap .conditions-item:last-child {
            max-width: 100%;
        }
        .main-col .head {
            margin-bottom: 20px;
        }
        .custom-text {
            margin-bottom: 28px;
        }
        .custom-form form input[type=submit] {
            white-space: nowrap;
        }
        .custom-form form .wpcf7-not-valid-tip {
            white-space: nowrap;
        }
        .plashka-main-row .youtube-reviews-plashka img {
            max-width: 50px;
        }
    }
    
    @media (max-width: 1080px) {
        #answer_summ {
            grid-template-columns: auto!important;
        }    
    }
    
    
    @media (min-width: 782px) {
        .logo svg {
            width: 122px;
            height: 96px;
        }
        .main-row .main-col .content a.btn {
            max-width: 100%;
        }
    }
    @media (max-width: 782px) {
        .main-container {
            width: calc(100% - 64px);
            margin: 32px auto;
            max-width: calc(100% - 64px);
        }
        
        .main-image {
            display: none;
        }
        .main-row {
            grid-template-columns: 100%;
            grid-column-gap: 0;
            grid-row-gap: 0;
        }    
        .main-image-mobile {
            display: block;
            max-height: 500px;
            margin-bottom: 20px;
        }
        .main-image-mobile img {
            max-height: 500px;
            width: 100%;
            object-fit: cover;
            object-position: top;
            border-radius: 8px;
        }
        .foot-text .foot-custom-text p span.new-line {
            display: initial;
        }
        .conditions-wrap .conditions-item:nth-child(2) {
            max-width: calc(50% - 0px);
        }
        .conditions-wrap .conditions-item:nth-child(2),
        .conditions-wrap .conditions-item:nth-child(3) {
            margin-right: 0;
        }
        .main-row .main-col:last-child {
            padding-right: 0px;
            padding-top: 8px;
        }
    }
    @media (max-width: 540px) {
        .main-col .head {
            margin-bottom: 0px!important;
        }
        .header-text {
            padding: 0!important;
            max-width: 100%!important;
        }
        .plashka-count .num {
            font-weight: 600!important;
            font-size: 13px!important;
        }
        .plashka-stars svg g:not(:first-child) {
            display: none;
        }
        .plashka-main-row .chanels-plashka .chanels-plashka-row img {
            max-height: 20px!important;
        }
        .plashka-main-row .chanels-plashka .chanels-plashka-row {
            grid-template-columns: 46px auto;
            grid-column-gap: 8px;
            grid-row-gap: 8px;
        }
        
        .plashka-main-row .fpa-logo.mobile {
            height: 60px!important;
        }
        .plashka-main-row .youtube-reviews-plashka {
            height: 60px!important;
        }
        .plashka-main-row .yandex-reviews-plashka {
            height: 60px!important;
            padding-top: 0!important;
            padding-bottom: 0!important;
            max-width: 250px!important;
            width: 100%!important;
        }
        .chanels-plashka {
            height: 60px!important;
            display: flex;
            align-items: center;
        }
        .main-container {
            width: calc(100% - 32px);
            max-width: calc(100% - 32px);
            margin: 16px auto;
        }
        .content h1 {
            font-size: 23px;
        }
        .conditions-wrap .conditions-item {
            padding: 24px 12px 17px;
        }
        .conditions-item-content p {
            font-size: 15px;
        }
        .conditions-item-foot p {
            margin: 0!important;
        }
        .main-col .head .logo svg {
            width: 80px;
            height: 60px;
        }
        .header-text {
            max-width: 260px;
        }
        .header-text p {
            font-size: 12px;
        }
        .custom-form form .fields-row {
            grid-template-columns: 100%;
            grid-column-gap: 10px;
            grid-row-gap: 10px;
        }
        .custom-form form label {
            margin-bottom: 10px;
        }
        
        
        .yandex-reviews-plashka {
            height: 55px!important;
            width: 230px!important;
            justify-content: center;
        }
        .yandex-reviews-plashka-row {
            padding: 12px 20px 8px!important;
            grid-template-columns: 65px 60px!important;
        }
        .plashka-reviews-count {
            font-weight: 500!important;
            font-size: 9px!important;
        }

        
        .title-big {
            font-size: 22px;
        }
        .plashka-main-row .youtube-reviews-plashka a {
            flex-direction: row;
            align-items: center;
            font-weight: 500;
            display: flex;
        }
        
        
        
        
        
        
        .popup-item__cnt.aimfree__thanks {
            padding: 16px;
        }
        .popup-item__cnt.aimfree__thanks .content .title {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .popup-item__cnt.aimfree__thanks .content .subtitle {
            font-size: 12px;
            margin-bottom: 20px;
        }
        .popup-item__cnt.aimfree__thanks a.btn {
            font-size: 14px;
        }
        .custom-text p {
            font-size: 15px;
        }
        .foot-text {
            margin-bottom: 30px;
        }
        .foot p {
            font-size: 12px;
            text-align: center;
        }
        .conditions-item-title {
            font-size: 14px;
            margin-left: 8px;
        }
        .conditions-item-title:before {
            top: -6px;
        }
        .conditions-item-title span.text {
            font-size: 11px;
        }
        .main-col .head {
            align-items: stretch;
        }
        .header-text {
           display: flex;
            align-items: center;
        }
        .foot-text {
            grid-template-columns: 26px auto;
            grid-column-gap: 12px;
            grid-row-gap: 12px;
        }
        .plashka-main-row .youtube-reviews-plashka img {
            max-width: 50px;
            margin-right: 5px;
        }
        .plashka-main-row .youtube-reviews-plashka .plashka-reviews-count span {
            font-weight: 600!important;
            font-size: 13px!important;
        }
        .header-text {
            width: 100%;
            display: block;
        }
        .plashka-main-row .plashka-main-col:last-child {
            max-width: 250px!important;
        }
        .plashka-main-row .chanels-plashka {
            justify-content: center;
        }
        /*
        .plashka-main-row .yandex-reviews-plashka {
            max-width: 200px!important;
        }
        */
        
        
        .img-grid-cnt {
            margin-right: 8px;
        }
        .plashka-main-row .youtube-reviews-plashka img.Youtube-S-mbolo1 {
            width: 32px;
            margin-bottom: 4px;    
        }
        .plashka-main-row .youtube-reviews-plashka img.Youtube-S-mbolo2 {
            width: 35px;
            margin-bottom: 0;
        }
        
        
        
        
    }
    
    @media (max-width: 400px) {
        /*
        .content h1 {
            font-size: 19px;
        }
        */
        .yandex-reviews-plashka-row {
            padding: 12px 20px 8px;
        }
        
        
        .conditions-item-content p {
            font-size: 15px;
        }
        .conditions-item-foot {
            font-size: 11px;
        }
        .custom-text p {
            font-size: 15px;
        }
        .foot p {
            font-size: 12px;
        }
        .header-text {
            /*
            max-width: 240px;
            padding: 10px;
            */
            padding: 0!important;
            max-width: 100%!important;
        }
        
        .plashka-main-row .plashka-main-col:last-child {
            max-width: 190px;
        }
        .plashka-main-row .yandex-reviews-plashka {
            max-width: 190px;
        }
        .plashka-main-row .yandex-reviews-plashka .yandex-reviews-plashka-row {
            padding: 12px 8px!important;
            grid-column-gap: 8px;
            grid-row-gap: 8px;
        }
        .main-row .main-col .content a.btn {
            margin-bottom: 40px;
            max-width: 100%!important;
        }
        
        
    }
    .form__btn {
        font-size: 15px;
    }
    
    
    
</style>
<section class="main-content">
    <div class="main-container">
        <div class="main-row">
            <div class="main-col">
                <div class="main-image">
                    <picture>
                        <img src="/wp-content/uploads/2023/05/aimfree-main-image.png" alt="Банкротство физических лиц в Санкт-Петербурге - услуги юристов" />
                    </picture>
                </div>
            </div>    
            <div class="main-col">
                <div class="head">
                    <div class="logo">
                        <a href="/">
                            <svg width="80" height="60" viewBox="0 0 80 60" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M23.2671 2.34861C23.2671 2.18293 23.4014 2.04861 23.5671 2.04861H57.249C57.4147 2.04861 57.549 2.18293 57.549 2.34861V24.6514C57.549 24.8171 57.6833 24.9514 57.849 24.9514H59.2223C59.388 24.9514 59.5223 24.8171 59.5223 24.6514V0.299999C59.5223 0.134313 59.388 0 59.2223 0H21.6004C21.4348 0 21.3004 0.134315 21.3004 0.3V24.6514C21.3004 24.8171 21.4348 24.9514 21.6004 24.9514H22.9671C23.1327 24.9514 23.2671 24.8171 23.2671 24.6514V2.34861Z" fill="#393939"/>
<path d="M57.549 57.6515C57.549 57.8172 57.4147 57.9515 57.249 57.9515H48.9859C48.8202 57.9515 48.6859 58.0858 48.6859 58.2515V59.7001C48.6859 59.8658 48.8202 60.0001 48.9859 60.0001H59.2223C59.388 60.0001 59.5223 59.8658 59.5223 59.7001V52.7307C59.5223 52.565 59.388 52.4307 59.2223 52.4307H57.849C57.6833 52.4307 57.549 52.565 57.549 52.7307V57.6515Z" fill="#393939"/>
<path d="M23.2671 52.7307C23.2671 52.565 23.1327 52.4307 22.9671 52.4307H21.6004C21.4348 52.4307 21.3004 52.565 21.3004 52.7307V59.7001C21.3004 59.8658 21.4348 60.0001 21.6004 60.0001H31.8369C32.0026 60.0001 32.1369 59.8658 32.1369 59.7001V58.2515C32.1369 58.0858 32.0026 57.9515 31.8369 57.9515H23.5671C23.4014 57.9515 23.2671 57.8172 23.2671 57.6515V52.7307Z" fill="#393939"/>
<path d="M2.14817 35.7542C2.02774 35.7542 1.93012 35.6566 1.93012 35.5362C1.93012 35.4202 1.83896 35.3257 1.72422 35.3085C1.54297 35.2813 1.36828 35.2306 1.20014 35.1565C0.969185 35.0502 0.762975 34.9063 0.581511 34.7248C0.400047 34.5433 0.257762 34.3285 0.154657 34.0806C0.0515524 33.8326 0 33.5559 0 33.2504C0 32.9316 0.0536145 32.6482 0.160843 32.4003C0.268072 32.1479 0.412419 31.9331 0.593884 31.756C0.779472 31.5745 0.985682 31.435 1.21251 31.3376C1.38699 31.2607 1.56618 31.209 1.75007 31.1826C1.85052 31.1682 1.93012 31.0854 1.93012 30.984C1.93012 30.8785 2.01561 30.793 2.12107 30.793H2.69805C2.8035 30.793 2.889 30.8785 2.889 30.984C2.889 31.0854 2.96859 31.1682 3.06905 31.1826C3.25294 31.209 3.43213 31.2607 3.60661 31.3376C3.83756 31.435 4.04377 31.5745 4.22523 31.756C4.4067 31.9331 4.55104 32.1479 4.65827 32.4003C4.7655 32.6526 4.81912 32.936 4.81912 33.2504C4.81912 33.5559 4.7655 33.8326 4.65827 34.0806C4.55517 34.3285 4.41288 34.5433 4.23142 34.7248C4.04996 34.9063 3.84375 35.0502 3.61279 35.1565C3.44552 35.2302 3.27284 35.2808 3.09476 35.3081C2.98009 35.3257 2.889 35.4201 2.889 35.5361C2.889 35.6566 2.79133 35.7542 2.67086 35.7542H2.14817ZM1.63398 34.3688C1.79596 34.4443 1.95487 34.303 1.95487 34.1243V32.368C1.95487 32.19 1.79676 32.048 1.63511 32.1226C1.58357 32.1464 1.53343 32.1748 1.48471 32.2077C1.34036 32.3051 1.22488 32.4423 1.13828 32.6194C1.05579 32.7921 1.01455 33.0024 1.01455 33.2504C1.01455 33.5028 1.05992 33.7153 1.15065 33.888C1.24138 34.0606 1.35686 34.1957 1.49708 34.2931C1.54192 34.322 1.58755 34.3472 1.63398 34.3688ZM2.86425 34.1252C2.86425 34.3036 3.02294 34.4457 3.18458 34.3703C3.23165 34.3484 3.27747 34.3226 3.32204 34.2931C3.46638 34.1957 3.58186 34.0606 3.66847 33.888C3.7592 33.7109 3.80457 33.4983 3.80457 33.2504C3.80457 33.0024 3.76126 32.7921 3.67465 32.6194C3.58805 32.4423 3.47257 32.3051 3.32822 32.2077C3.28161 32.1753 3.23341 32.1473 3.18361 32.1237C3.02268 32.0476 2.86425 32.19 2.86425 32.368V34.1252Z" fill="#393939"/>
<path d="M5.85533 35.7542C5.68965 35.7542 5.55533 35.6199 5.55533 35.4542V31.3387C5.55533 31.1731 5.68965 31.0387 5.85533 31.0387H6.26988C6.43557 31.0387 6.56988 31.1731 6.56988 31.3387V33.1198C6.56988 33.4244 6.97119 33.5352 7.12741 33.2737L8.37558 31.1849C8.42973 31.0942 8.52753 31.0387 8.63311 31.0387H9.10939C9.27508 31.0387 9.40939 31.1731 9.40939 31.3387V35.4542C9.40939 35.6199 9.27508 35.7542 9.10939 35.7542H8.69484C8.52915 35.7542 8.39484 35.6199 8.39484 35.4542V33.6995C8.39484 33.3945 7.99252 33.2841 7.83685 33.5464L6.61376 35.6073C6.55971 35.6984 6.46166 35.7542 6.35577 35.7542H5.85533Z" fill="#393939"/>
<path d="M13.8826 31.0387C14.0483 31.0387 14.1826 31.1731 14.1826 31.3387V35.4542C14.1826 35.6199 14.0483 35.7542 13.8826 35.7542H13.468C13.3024 35.7542 13.168 35.6199 13.168 35.4542V34.1215C13.168 33.9559 13.0337 33.8215 12.868 33.8215H11.7173C11.5516 33.8215 11.4173 33.9559 11.4173 34.1215V35.4542C11.4173 35.6199 11.283 35.7542 11.1173 35.7542H10.7028C10.5371 35.7542 10.4028 35.6199 10.4028 35.4542V31.3387C10.4028 31.1731 10.5371 31.0387 10.7028 31.0387H11.1173C11.283 31.0387 11.4173 31.1731 11.4173 31.3387V32.5652C11.4173 32.7309 11.5516 32.8652 11.7173 32.8652H12.868C13.0337 32.8652 13.168 32.7309 13.168 32.5652V31.3387C13.168 31.1731 13.3024 31.0387 13.468 31.0387H13.8826Z" fill="#393939"/>
<path d="M16.1885 31.2469C16.2284 31.1229 16.3438 31.0387 16.4741 31.0387H17.1314C17.2619 31.0387 17.3774 31.123 17.4172 31.2473L18.7346 35.3628C18.7965 35.5564 18.6521 35.7542 18.4488 35.7542H18.0391C17.9089 35.7542 17.7935 35.6702 17.7535 35.5462L17.5473 34.9062C17.5074 34.7823 17.392 34.6982 17.2618 34.6982H16.3329C16.2021 34.6982 16.0863 34.783 16.0469 34.9077L15.8454 35.5447C15.8059 35.6695 15.6902 35.7542 15.5593 35.7542H15.1513C14.9479 35.7542 14.8035 35.5561 14.8657 35.3624L16.1885 31.2469ZM16.9165 33.9477C17.1156 33.9477 17.2594 33.7575 17.2052 33.566L17.085 33.1418C17.0029 32.8517 16.5922 32.8504 16.5083 33.1399L16.3852 33.5642C16.3296 33.7561 16.4736 33.9477 16.6734 33.9477H16.9165Z" fill="#393939"/>
<path d="M22.896 31.0387C23.0617 31.0387 23.196 31.1731 23.196 31.3387V35.4542C23.196 35.6199 23.0617 35.7542 22.896 35.7542H22.4814C22.3157 35.7542 22.1814 35.6199 22.1814 35.4542V34.1215C22.1814 33.9559 22.0471 33.8215 21.8814 33.8215H20.7307C20.565 33.8215 20.4307 33.9559 20.4307 34.1215V35.4542C20.4307 35.6199 20.2964 35.7542 20.1307 35.7542H19.7161C19.5505 35.7542 19.4161 35.6199 19.4161 35.4542V31.3387C19.4161 31.1731 19.5505 31.0387 19.7161 31.0387H20.1307C20.2964 31.0387 20.4307 31.1731 20.4307 31.3387V32.5652C20.4307 32.7309 20.565 32.8652 20.7307 32.8652H21.8814C22.0471 32.8652 22.1814 32.7309 22.1814 32.5652V31.3387C22.1814 31.1731 22.3157 31.0387 22.4814 31.0387H22.896Z" fill="#393939"/>
<path d="M23.9078 33.3566C23.9078 33.0733 23.9573 32.7921 24.0563 32.5132C24.1553 32.2342 24.2996 31.9818 24.4893 31.756C24.679 31.5302 24.91 31.3509 25.1822 31.2181C25.4544 31.0808 25.7637 31.0122 26.1101 31.0122C26.5184 31.0122 26.8752 31.1074 27.1804 31.2978C27.4107 31.4415 27.5964 31.618 27.7375 31.8272C27.8178 31.9464 27.7778 32.1039 27.6628 32.1901L27.3938 32.3919C27.2361 32.5101 27.0128 32.4387 26.8758 32.297C26.8564 32.2771 26.8363 32.2583 26.8154 32.2409C26.704 32.1435 26.5844 32.077 26.4566 32.0416C26.3287 32.0018 26.205 31.9818 26.0854 31.9818C25.8256 31.9818 25.6111 32.0527 25.442 32.1944C25.2729 32.3361 25.1471 32.5154 25.0647 32.7323C24.9822 32.9493 24.9409 33.1707 24.9409 33.3965C24.9409 33.6444 24.9884 33.8791 25.0832 34.1005C25.1781 34.3174 25.3121 34.4923 25.4853 34.6252C25.6585 34.758 25.8627 34.8244 26.0978 34.8244C26.2215 34.8244 26.3473 34.8045 26.4751 34.7646C26.603 34.7204 26.7205 34.6495 26.8278 34.5521C26.8505 34.5322 26.8721 34.5111 26.8926 34.4888C27.0216 34.3486 27.2328 34.2694 27.3939 34.3713L27.7053 34.5685C27.8249 34.6442 27.8785 34.7952 27.8073 34.9175C27.7245 35.0597 27.6166 35.1858 27.4835 35.296C27.2855 35.4554 27.0608 35.5793 26.8092 35.6679C26.5617 35.752 26.3164 35.7941 26.073 35.7941C25.7555 35.7941 25.4647 35.7255 25.2008 35.5882C24.9368 35.4465 24.7079 35.2605 24.5141 35.0303C24.3202 34.7956 24.1697 34.5344 24.0625 34.2466C23.9594 33.9544 23.9078 33.6577 23.9078 33.3566Z" fill="#393939"/>
<path d="M30.4078 35.7941C30.082 35.7941 29.7851 35.7277 29.517 35.5948C29.2531 35.4576 29.0242 35.276 28.8303 35.0502C28.6365 34.82 28.488 34.5632 28.3849 34.2798C28.2818 33.992 28.2302 33.6954 28.2302 33.3898C28.2302 33.0799 28.2839 32.7833 28.3911 32.4999C28.5024 32.2121 28.655 31.9575 28.8489 31.7361C29.0468 31.5103 29.2799 31.3332 29.5479 31.2048C29.816 31.0764 30.1088 31.0122 30.4264 31.0122C30.7522 31.0122 31.0471 31.0808 31.311 31.2181C31.5791 31.3509 31.808 31.5324 31.9977 31.7627C32.1915 31.9929 32.34 32.2519 32.4431 32.5397C32.5462 32.8231 32.5978 33.1131 32.5978 33.4098C32.5978 33.7197 32.5421 34.0186 32.4307 34.3064C32.3235 34.5898 32.1709 34.8443 31.973 35.0702C31.7791 35.2915 31.5482 35.4686 31.2801 35.6015C31.0161 35.7299 30.7254 35.7941 30.4078 35.7941ZM29.2634 33.4031C29.2634 33.6467 29.3067 33.8769 29.3933 34.0939C29.4799 34.3064 29.6098 34.4813 29.783 34.6185C29.9562 34.7558 30.1666 34.8244 30.414 34.8244C30.6697 34.8244 30.8821 34.7536 31.0512 34.6119C31.2244 34.4702 31.3523 34.2909 31.4347 34.0739C31.5214 33.8525 31.5647 33.6245 31.5647 33.3898C31.5647 33.1463 31.5193 32.9183 31.4286 32.7058C31.342 32.4888 31.212 32.3139 31.0388 32.1811C30.8697 32.0483 30.6615 31.9818 30.414 31.9818C30.1583 31.9818 29.9439 32.0527 29.7706 32.1944C29.6015 32.3316 29.4737 32.5087 29.3871 32.7257C29.3046 32.9427 29.2634 33.1685 29.2634 33.4031Z" fill="#393939"/>
<path d="M36.9391 34.5455C36.9391 34.8156 36.871 35.0414 36.7349 35.2229C36.5988 35.4 36.4174 35.5328 36.1906 35.6214C35.9678 35.71 35.7204 35.7542 35.4482 35.7542H33.6077C33.4421 35.7542 33.3077 35.6199 33.3077 35.4542V31.3387C33.3077 31.1731 33.4421 31.0387 33.6077 31.0387H35.7513C35.9575 31.0387 36.1349 31.0985 36.2833 31.2181C36.4318 31.3332 36.5473 31.4837 36.6298 31.6697C36.7123 31.8557 36.7535 32.0483 36.7535 32.2475C36.7535 32.4689 36.6999 32.6814 36.5927 32.8851C36.4818 33.0956 36.5154 33.5166 36.6677 33.6994C36.6845 33.7195 36.7007 33.7403 36.7164 33.7618C36.8649 33.9654 36.9391 34.2267 36.9391 34.5455ZM34.6223 31.9686C34.4566 31.9686 34.3223 32.1029 34.3223 32.2686V32.6449C34.3223 32.8106 34.4566 32.9449 34.6223 32.9449H35.3183C35.4296 32.9449 35.5286 32.905 35.6152 32.8253C35.7018 32.7456 35.7451 32.6216 35.7451 32.4534C35.7451 32.2984 35.706 32.1789 35.6276 32.0948C35.5534 32.0106 35.4626 31.9686 35.3554 31.9686H34.6223ZM35.906 34.3263C35.906 34.1802 35.8668 34.0562 35.7884 33.9544C35.7101 33.8525 35.6111 33.8016 35.4915 33.8016H34.6223C34.4566 33.8016 34.3223 33.9359 34.3223 34.1016V34.5311C34.3223 34.6967 34.4566 34.8311 34.6223 34.8311H35.4482C35.576 34.8311 35.6833 34.7846 35.7699 34.6916C35.8606 34.5942 35.906 34.4724 35.906 34.3263Z" fill="#393939"/>
<path d="M39.5843 35.7941C39.2585 35.7941 38.9616 35.7277 38.6935 35.5948C38.4295 35.4576 38.2006 35.276 38.0068 35.0502C37.813 34.82 37.6645 34.5632 37.5614 34.2798C37.4583 33.992 37.4067 33.6954 37.4067 33.3898C37.4067 33.0799 37.4604 32.7833 37.5676 32.4999C37.6789 32.2121 37.8315 31.9575 38.0254 31.7361C38.2233 31.5103 38.4563 31.3332 38.7244 31.2048C38.9925 31.0764 39.2853 31.0122 39.6029 31.0122C39.9287 31.0122 40.2236 31.0808 40.4875 31.2181C40.7556 31.3509 40.9845 31.5324 41.1742 31.7627C41.368 31.9929 41.5165 32.2519 41.6196 32.5397C41.7227 32.8231 41.7743 33.1131 41.7743 33.4098C41.7743 33.7197 41.7186 34.0186 41.6072 34.3064C41.5 34.5898 41.3474 34.8443 41.1494 35.0702C40.9556 35.2915 40.7246 35.4686 40.4566 35.6015C40.1926 35.7299 39.9019 35.7941 39.5843 35.7941ZM38.4398 33.4031C38.4398 33.6467 38.4832 33.8769 38.5698 34.0939C38.6564 34.3064 38.7863 34.4813 38.9595 34.6185C39.1327 34.7558 39.343 34.8244 39.5905 34.8244C39.8462 34.8244 40.0586 34.7536 40.2277 34.6119C40.4009 34.4702 40.5287 34.2909 40.6112 34.0739C40.6978 33.8525 40.7411 33.6245 40.7411 33.3898C40.7411 33.1463 40.6958 32.9183 40.605 32.7058C40.5184 32.4888 40.3885 32.3139 40.2153 32.1811C40.0462 32.0483 39.8379 31.9818 39.5905 31.9818C39.3348 31.9818 39.1203 32.0527 38.9471 32.1944C38.778 32.3316 38.6502 32.5087 38.5636 32.7257C38.4811 32.9427 38.4398 33.1685 38.4398 33.4031Z" fill="#393939"/>
<path d="M42.6976 34.406C42.5319 34.406 42.3976 34.2717 42.3976 34.106V33.7496C42.3976 33.5839 42.5319 33.4496 42.6976 33.4496H44.003C44.1687 33.4496 44.303 33.5839 44.303 33.7496V34.106C44.303 34.2717 44.1687 34.406 44.003 34.406H42.6976Z" fill="#393939"/>
<path d="M45.5001 35.7542C45.3344 35.7542 45.2001 35.6199 45.2001 35.4542V31.3387C45.2001 31.1731 45.3344 31.0387 45.5001 31.0387H48.5562C48.7219 31.0387 48.8562 31.1731 48.8562 31.3387V35.4542C48.8562 35.6199 48.7219 35.7542 48.5562 35.7542H48.1417C47.976 35.7542 47.8417 35.6199 47.8417 35.4542V32.2951C47.8417 32.1294 47.7073 31.9951 47.5417 31.9951H46.5147C46.349 31.9951 46.2147 32.1294 46.2147 32.2951V35.4542C46.2147 35.6199 46.0803 35.7542 45.9147 35.7542H45.5001Z" fill="#393939"/>
<path d="M50.1423 35.7542C49.9766 35.7542 49.8423 35.6199 49.8423 35.4542V31.3387C49.8423 31.1731 49.9766 31.0387 50.1423 31.0387H51.7167C51.9271 31.0387 52.1188 31.0852 52.2921 31.1782C52.4694 31.2668 52.622 31.3885 52.7498 31.5435C52.8777 31.694 52.9767 31.8645 53.0468 32.0549C53.1169 32.2453 53.152 32.4379 53.152 32.6327C53.152 32.9072 53.0922 33.1663 52.9725 33.4098C52.8571 33.6533 52.6942 33.8525 52.4838 34.0075C52.2735 34.1581 52.0281 34.2333 51.7477 34.2333H51.1568C50.9912 34.2333 50.8568 34.3676 50.8568 34.5333V35.4542C50.8568 35.6199 50.7225 35.7542 50.5568 35.7542H50.1423ZM50.8568 32.9836C50.8568 33.1493 50.9912 33.2836 51.1568 33.2836H51.6858C51.8054 33.2836 51.9085 33.2282 51.9951 33.1175C52.0817 33.0069 52.125 32.8452 52.125 32.6327C52.125 32.4158 52.0735 32.2564 51.9704 32.1545C51.8714 32.0483 51.7642 31.9951 51.6487 31.9951H51.1568C50.9912 31.9951 50.8568 32.1294 50.8568 32.2951V32.9836Z" fill="#393939"/>
<path d="M54.5406 31.2469C54.5805 31.1229 54.6959 31.0387 54.8262 31.0387H55.4835C55.614 31.0387 55.7295 31.123 55.7692 31.2473L57.0866 35.3628C57.1486 35.5564 57.0042 35.7542 56.8009 35.7542H56.3912C56.2609 35.7542 56.1456 35.6702 56.1056 35.5462L55.8994 34.9062C55.8595 34.7823 55.7441 34.6982 55.6139 34.6982H54.685C54.5542 34.6982 54.4384 34.783 54.399 34.9077L54.1974 35.5447C54.158 35.6695 54.0422 35.7542 53.9114 35.7542H53.5034C53.3 35.7542 53.1556 35.5561 53.2178 35.3624L54.5406 31.2469ZM55.2686 33.9477C55.4676 33.9477 55.6115 33.7575 55.5573 33.566L55.4371 33.1418C55.355 32.8517 54.9443 32.8504 54.8603 33.1399L54.7373 33.5642C54.6817 33.7561 54.8256 33.9477 55.0254 33.9477H55.2686Z" fill="#393939"/>
<path d="M61.3996 34.5455C61.3996 34.8156 61.3315 35.0414 61.1954 35.2229C61.0593 35.4 60.8779 35.5328 60.651 35.6214C60.4283 35.71 60.1809 35.7542 59.9087 35.7542H58.0682C57.9025 35.7542 57.7682 35.6199 57.7682 35.4542V31.3387C57.7682 31.1731 57.9025 31.0387 58.0682 31.0387H60.2118C60.418 31.0387 60.5954 31.0985 60.7438 31.2181C60.8923 31.3332 61.0078 31.4837 61.0903 31.6697C61.1727 31.8557 61.214 32.0483 61.214 32.2475C61.214 32.4689 61.1604 32.6814 61.0531 32.8851C60.9423 33.0956 60.9758 33.5166 61.1282 33.6994C61.145 33.7195 61.1612 33.7403 61.1769 33.7618C61.3253 33.9654 61.3996 34.2267 61.3996 34.5455ZM59.0828 31.9686C58.9171 31.9686 58.7828 32.1029 58.7828 32.2686V32.6449C58.7828 32.8106 58.9171 32.9449 59.0828 32.9449H59.7788C59.8901 32.9449 59.9891 32.905 60.0757 32.8253C60.1623 32.7456 60.2056 32.6216 60.2056 32.4534C60.2056 32.2984 60.1664 32.1789 60.0881 32.0948C60.0138 32.0106 59.9231 31.9686 59.8159 31.9686H59.0828ZM60.3665 34.3263C60.3665 34.1802 60.3273 34.0562 60.2489 33.9544C60.1706 33.8525 60.0716 33.8016 59.952 33.8016H59.0828C58.9171 33.8016 58.7828 33.9359 58.7828 34.1016V34.5311C58.7828 34.6967 58.9171 34.8311 59.0828 34.8311H59.9087C60.0365 34.8311 60.1438 34.7846 60.2304 34.6916C60.3211 34.5942 60.3665 34.4724 60.3665 34.3263Z" fill="#393939"/>
<path d="M64.0448 35.7941C63.719 35.7941 63.422 35.7277 63.154 35.5948C62.89 35.4576 62.6611 35.276 62.4673 35.0502C62.2735 34.82 62.125 34.5632 62.0219 34.2798C61.9188 33.992 61.8672 33.6954 61.8672 33.3898C61.8672 33.0799 61.9208 32.7833 62.0281 32.4999C62.1394 32.2121 62.292 31.9575 62.4859 31.7361C62.6838 31.5103 62.9168 31.3332 63.1849 31.2048C63.453 31.0764 63.7458 31.0122 64.0634 31.0122C64.3892 31.0122 64.684 31.0808 64.948 31.2181C65.2161 31.3509 65.445 31.5324 65.6347 31.7627C65.8285 31.9929 65.977 32.2519 66.0801 32.5397C66.1832 32.8231 66.2347 33.1131 66.2347 33.4098C66.2347 33.7197 66.1791 34.0186 66.0677 34.3064C65.9605 34.5898 65.8079 34.8443 65.6099 35.0702C65.4161 35.2915 65.1851 35.4686 64.9171 35.6015C64.6531 35.7299 64.3624 35.7941 64.0448 35.7941ZM62.9003 33.4031C62.9003 33.6467 62.9436 33.8769 63.0302 34.0939C63.1168 34.3064 63.2468 34.4813 63.42 34.6185C63.5932 34.7558 63.8035 34.8244 64.051 34.8244C64.3067 34.8244 64.5191 34.7536 64.6882 34.6119C64.8614 34.4702 64.9892 34.2909 65.0717 34.0739C65.1583 33.8525 65.2016 33.6245 65.2016 33.3898C65.2016 33.1463 65.1563 32.9183 65.0655 32.7058C64.9789 32.4888 64.849 32.3139 64.6758 32.1811C64.5067 32.0483 64.2984 31.9818 64.051 31.9818C63.7953 31.9818 63.5808 32.0527 63.4076 32.1944C63.2385 32.3316 63.1107 32.5087 63.0241 32.7257C62.9416 32.9427 62.9003 33.1685 62.9003 33.4031Z" fill="#393939"/>
<path d="M70.5761 34.5455C70.5761 34.8156 70.508 35.0414 70.3719 35.2229C70.2358 35.4 70.0544 35.5328 69.8275 35.6214C69.6048 35.71 69.3574 35.7542 69.0852 35.7542H67.2447C67.079 35.7542 66.9447 35.6199 66.9447 35.4542V31.3387C66.9447 31.1731 67.079 31.0387 67.2447 31.0387H69.3883C69.5945 31.0387 69.7719 31.0985 69.9203 31.2181C70.0688 31.3332 70.1843 31.4837 70.2667 31.6697C70.3492 31.8557 70.3905 32.0483 70.3905 32.2475C70.3905 32.4689 70.3369 32.6814 70.2296 32.8851C70.1188 33.0956 70.1523 33.5166 70.3047 33.6994C70.3215 33.7195 70.3377 33.7403 70.3534 33.7618C70.5018 33.9654 70.5761 34.2267 70.5761 34.5455ZM68.2593 31.9686C68.0936 31.9686 67.9593 32.1029 67.9593 32.2686V32.6449C67.9593 32.8106 68.0936 32.9449 68.2593 32.9449H68.9553C69.0666 32.9449 69.1656 32.905 69.2522 32.8253C69.3388 32.7456 69.3821 32.6216 69.3821 32.4534C69.3821 32.2984 69.3429 32.1789 69.2646 32.0948C69.1903 32.0106 69.0996 31.9686 68.9924 31.9686H68.2593ZM69.543 34.3263C69.543 34.1802 69.5038 34.0562 69.4254 33.9544C69.3471 33.8525 69.2481 33.8016 69.1285 33.8016H68.2593C68.0936 33.8016 67.9593 33.9359 67.9593 34.1016V34.5311C67.9593 34.6967 68.0936 34.8311 68.2593 34.8311H69.0852C69.213 34.8311 69.3203 34.7846 69.4069 34.6916C69.4976 34.5942 69.543 34.4724 69.543 34.3263Z" fill="#393939"/>
<path d="M73.2213 35.7941C72.8955 35.7941 72.5985 35.7277 72.3305 35.5948C72.0665 35.4576 71.8376 35.276 71.6438 35.0502C71.4499 34.82 71.3015 34.5632 71.1984 34.2798C71.0953 33.992 71.0437 33.6954 71.0437 33.3898C71.0437 33.0799 71.0973 32.7833 71.2046 32.4999C71.3159 32.2121 71.4685 31.9575 71.6623 31.7361C71.8603 31.5103 72.0933 31.3332 72.3614 31.2048C72.6295 31.0764 72.9223 31.0122 73.2398 31.0122C73.5657 31.0122 73.8605 31.0808 74.1245 31.2181C74.3926 31.3509 74.6214 31.5324 74.8112 31.7627C75.005 31.9929 75.1535 32.2519 75.2566 32.5397C75.3597 32.8231 75.4112 33.1131 75.4112 33.4098C75.4112 33.7197 75.3556 34.0186 75.2442 34.3064C75.137 34.5898 74.9844 34.8443 74.7864 35.0702C74.5926 35.2915 74.3616 35.4686 74.0935 35.6015C73.8296 35.7299 73.5388 35.7941 73.2213 35.7941ZM72.0768 33.4031C72.0768 33.6467 72.1201 33.8769 72.2067 34.0939C72.2933 34.3064 72.4232 34.4813 72.5965 34.6185C72.7697 34.7558 72.98 34.8244 73.2275 34.8244C73.4832 34.8244 73.6956 34.7536 73.8647 34.6119C74.0379 34.4702 74.1657 34.2909 74.2482 34.0739C74.3348 33.8525 74.3781 33.6245 74.3781 33.3898C74.3781 33.1463 74.3327 32.9183 74.242 32.7058C74.1554 32.4888 74.0255 32.3139 73.8523 32.1811C73.6832 32.0483 73.4749 31.9818 73.2275 31.9818C72.9718 31.9818 72.7573 32.0527 72.5841 32.1944C72.415 32.3316 72.2872 32.5087 72.2005 32.7257C72.1181 32.9427 72.0768 33.1685 72.0768 33.4031Z" fill="#393939"/>
<path d="M76.4459 35.7542C76.2803 35.7542 76.1459 35.6199 76.1459 35.4542V31.3387C76.1459 31.1731 76.2803 31.0387 76.4459 31.0387H76.8605C77.0262 31.0387 77.1605 31.1731 77.1605 31.3387V33.1198C77.1605 33.4244 77.5618 33.5352 77.718 33.2737L78.9662 31.1849C79.0203 31.0942 79.1181 31.0387 79.2237 31.0387H79.7C79.8657 31.0387 80 31.1731 80 31.3387V35.4542C80 35.6199 79.8657 35.7542 79.7 35.7542H79.2855C79.1198 35.7542 78.9855 35.6199 78.9855 35.4542V33.6995C78.9855 33.3945 78.5831 33.2841 78.4275 33.5464L77.2044 35.6073C77.1503 35.6984 77.0523 35.7542 76.9464 35.7542H76.4459ZM78.0761 30.7864C77.8286 30.7864 77.6121 30.7421 77.4265 30.6535C77.2409 30.5606 77.0966 30.4366 76.9935 30.2816C76.9442 30.2055 76.9067 30.1248 76.881 30.0396C76.8331 29.881 76.9731 29.7437 77.1388 29.7437H77.2131C77.3788 29.7437 77.5047 29.8885 77.5933 30.0285C77.6095 30.054 77.6281 30.0786 77.6492 30.1023C77.7441 30.2041 77.8884 30.255 78.0823 30.255C78.2637 30.255 78.4019 30.2063 78.4967 30.1089C78.5225 30.0836 78.5449 30.0565 78.564 30.0279C78.6557 29.8899 78.7795 29.7437 78.9452 29.7437H79.0195C79.1852 29.7437 79.3252 29.881 79.2773 30.0396C79.2516 30.1248 79.2141 30.2055 79.1648 30.2816C79.0617 30.4366 78.9153 30.5606 78.7256 30.6535C78.54 30.7421 78.3235 30.7864 78.0761 30.7864Z" fill="#393939"/>
<path d="M28.3644 42.6324C28.4043 42.5084 28.5197 42.4242 28.65 42.4242H29.3073C29.4378 42.4242 29.5533 42.5085 29.593 42.6328L30.9104 46.7482C30.9724 46.9418 30.828 47.1397 30.6247 47.1397H30.215C30.0847 47.1397 29.9694 47.0557 29.9294 46.9317L29.7232 46.2917C29.6833 46.1677 29.5679 46.0837 29.4377 46.0837H28.5088C28.3779 46.0837 28.2622 46.1685 28.2227 46.2932L28.0212 46.9302C27.9818 47.0549 27.866 47.1397 27.7352 47.1397H27.3272C27.1238 47.1397 26.9794 46.9416 27.0416 46.7479L28.3644 42.6324ZM29.0924 45.3332C29.2914 45.3332 29.4353 45.143 29.3811 44.9515L29.2609 44.5272C29.1788 44.2372 28.7681 44.2359 28.6841 44.5254L28.5611 44.9496C28.5054 45.1415 28.6494 45.3332 28.8492 45.3332H29.0924Z" fill="#393939"/>
<path d="M34.6264 47.1397C34.4607 47.1397 34.3264 47.0054 34.3264 46.8397V43.6806C34.3264 43.5149 34.192 43.3806 34.0264 43.3806H33.5275C33.3658 43.3806 33.2332 43.5087 33.2277 43.6703L33.2128 44.1045C33.1922 44.7155 33.1427 45.2203 33.0644 45.6188C32.986 46.0173 32.8726 46.3316 32.7241 46.5619C32.5798 46.7877 32.3942 46.9471 32.1673 47.0401C32.0155 47.0994 31.8424 47.1398 31.6481 47.1614C31.4818 47.1798 31.3446 47.0427 31.3446 46.8754V46.5365C31.3446 46.3708 31.4842 46.2455 31.6381 46.1841C31.6672 46.1725 31.6952 46.159 31.7219 46.1435C31.8292 46.0771 31.9178 45.9575 31.9879 45.7848C32.0622 45.6122 32.1199 45.3664 32.1612 45.0476C32.2065 44.7244 32.2374 44.3038 32.2539 43.7857L32.288 42.7147C32.2932 42.5528 32.4259 42.4242 32.5879 42.4242H35.0409C35.2066 42.4242 35.3409 42.5585 35.3409 42.7242V46.8397C35.3409 47.0054 35.2066 47.1397 35.0409 47.1397H34.6264Z" fill="#393939"/>
<path d="M36.6257 47.1397C36.46 47.1397 36.3257 47.0054 36.3257 46.8397V42.7242C36.3257 42.5585 36.46 42.4242 36.6257 42.4242H37.0402C37.2059 42.4242 37.3402 42.5585 37.3402 42.7242V43.7514C37.3402 43.9171 37.4745 44.0514 37.6402 44.0514H38.1568C38.6435 44.0514 39.0229 44.1886 39.2951 44.4632C39.5714 44.7377 39.7096 45.1118 39.7096 45.5856C39.7096 46.0549 39.5776 46.4313 39.3137 46.7146C39.0497 46.998 38.6827 47.1397 38.2125 47.1397H36.6257ZM37.3402 45.9497C37.3402 46.1154 37.4745 46.2497 37.6402 46.2497H38.064C38.2744 46.2497 38.429 46.1877 38.528 46.0638C38.627 45.9398 38.6765 45.7804 38.6765 45.5856C38.6765 45.4173 38.627 45.269 38.528 45.1406C38.4331 45.0078 38.2785 44.9414 38.064 44.9414H37.6402C37.4745 44.9414 37.3402 45.0757 37.3402 45.2414V45.9497Z" fill="#393939"/>
<path d="M40.7956 47.1397C40.5661 47.1397 40.4216 46.8925 40.5341 46.6925L41.155 45.5895C41.2435 45.4323 41.1705 45.2355 41.0271 45.126C40.9036 45.0317 40.7997 44.9148 40.7155 44.7753C40.5711 44.5318 40.499 44.2462 40.499 43.9186C40.499 43.6308 40.5608 43.374 40.6846 43.1481C40.8083 42.9223 40.9815 42.7452 41.2042 42.6168C41.4269 42.4884 41.6826 42.4242 41.9713 42.4242H43.5272C43.6929 42.4242 43.8272 42.5585 43.8272 42.7242V46.8397C43.8272 47.0054 43.6929 47.1397 43.5272 47.1397H43.1126C42.9469 47.1397 42.8126 47.0054 42.8126 46.8397V45.7098C42.8126 45.5495 42.6827 45.4195 42.5224 45.4195C42.4154 45.4195 42.3171 45.4784 42.2666 45.5727L41.5117 46.9814C41.4595 47.0789 41.3579 47.1397 41.2473 47.1397H40.7956ZM42.1012 44.4964H42.5126C42.6783 44.4964 42.8126 44.3621 42.8126 44.1964V43.6474C42.8126 43.4817 42.6783 43.3474 42.5126 43.3474H42.1136C41.961 43.3474 41.8249 43.3917 41.7053 43.4802C41.5898 43.5688 41.5321 43.7149 41.5321 43.9186C41.5321 44.1178 41.5857 44.2639 41.6929 44.3569C41.8043 44.4499 41.9404 44.4964 42.1012 44.4964Z" fill="#393939"/>
<path d="M48.2747 42.4242C48.4404 42.4242 48.5747 42.5585 48.5747 42.7242V46.8397C48.5747 47.0054 48.4404 47.1397 48.2747 47.1397H47.8602C47.6945 47.1397 47.5602 47.0054 47.5602 46.8397V45.507C47.5602 45.3413 47.4259 45.207 47.2602 45.207H46.1095C45.9438 45.207 45.8095 45.3413 45.8095 45.507V46.8397C45.8095 47.0054 45.6751 47.1397 45.5095 47.1397H45.0949C44.9292 47.1397 44.7949 47.0054 44.7949 46.8397V42.7242C44.7949 42.5585 44.9292 42.4242 45.0949 42.4242H45.5095C45.6751 42.4242 45.8095 42.5585 45.8095 42.7242V43.9506C45.8095 44.1163 45.9438 44.2506 46.1095 44.2506H47.2602C47.4259 44.2506 47.5602 44.1163 47.5602 43.9506V42.7242C47.5602 42.5585 47.6945 42.4242 47.8602 42.4242H48.2747Z" fill="#393939"/>
<path d="M49.2866 44.7421C49.2866 44.4587 49.3361 44.1776 49.4351 43.8986C49.534 43.6197 49.6784 43.3673 49.8681 43.1415C50.0578 42.9157 50.2888 42.7364 50.561 42.6035C50.8332 42.4663 51.1425 42.3977 51.4889 42.3977C51.8972 42.3977 52.2539 42.4928 52.5591 42.6832C52.7895 42.8269 52.9752 43.0034 53.1162 43.2127C53.1966 43.3319 53.1566 43.4894 53.0416 43.5756L52.7725 43.7773C52.6148 43.8956 52.3915 43.8242 52.2545 43.6825C52.2352 43.6625 52.2151 43.6438 52.1941 43.6263C52.0828 43.5289 51.9632 43.4625 51.8353 43.4271C51.7075 43.3872 51.5838 43.3673 51.4642 43.3673C51.2043 43.3673 50.9899 43.4382 50.8208 43.5798C50.6517 43.7215 50.5259 43.9009 50.4434 44.1178C50.3609 44.3348 50.3197 44.5561 50.3197 44.782C50.3197 45.0299 50.3671 45.2646 50.462 45.486C50.5568 45.7029 50.6909 45.8778 50.8641 46.0106C51.0373 46.1435 51.2414 46.2099 51.4765 46.2099C51.6003 46.2099 51.726 46.19 51.8539 46.1501C51.9817 46.1058 52.0993 46.035 52.2065 45.9376C52.2293 45.9177 52.2509 45.8966 52.2714 45.8743C52.4004 45.734 52.6116 45.6549 52.7726 45.7568L53.0841 45.9539C53.2037 46.0296 53.2572 46.1807 53.186 46.303C53.1033 46.4452 52.9953 46.5713 52.8623 46.6814C52.6643 46.8408 52.4395 46.9648 52.188 47.0534C51.9405 47.1375 51.6951 47.1796 51.4518 47.1796C51.1342 47.1796 50.8435 47.1109 50.5795 46.9737C50.3156 46.832 50.0867 46.646 49.8928 46.4158C49.699 46.1811 49.5485 45.9199 49.4412 45.6321C49.3381 45.3398 49.2866 45.0432 49.2866 44.7421Z" fill="#393939"/>
</svg>

                            
                            
                            
                            
                            </svg>
                        </a>
                    </div>
                    <div class="header-text">
                        <!--
                        <img src="/wp-content/themes/fpalaw/assets/img/landing/yandex-banner.svg" alt="Отзывы финансово-правового альянса" />
                        <br />
                        -->
                        
                        <div class="plashka-main-row">
                            <div class="plashka-main-col">
                                <div class="fpa-logo mobile">
                                    <img src="/wp-content/themes/fpalaw/assets/img/landing/fpa-mobile-logo.svg" alt="Финансово-провавой альянс" />
                                </div>
                                <div class="youtube-reviews-plashka">
                                    <a href="https://www.youtube.com/watch?v=KIxANZYI4C4&list=PL_QZ4KRWHgKuM8Q3JO9uGgQuLe3ftnAQy&pp=gAQBiAQB&ab_channel=%D0%A4%D0%B8%D0%BD%D0%B0%D0%BD%D1%81%D0%BE%D0%B2%D0%BE-%D0%BF%D1%80%D0%B0%D0%B2%D0%BE%D0%B2%D0%BE%D0%B9%D0%90%D0%BB%D1%8C%D1%8F%D0%BD%D1%81%28%D0%A4%D0%9F%D0%90%29" target="_blank">
                                        <!--<img src="/wp-content/themes/fpalaw/assets/img/landing/youtube-logo3.png" alt="отзывы youtube">-->
                                        <div class="img-grid-cnt">
                                            <img class="Youtube-S-mbolo1" src="/wp-content/themes/fpalaw/assets/img/landing/Youtube-S-mbolo1.png" alt="Финансово-провавой альянс" />
                                            <img class="Youtube-S-mbolo2" src="/wp-content/themes/fpalaw/assets/img/landing/Youtube-S-mbolo2.png" alt="Финансово-провавой альянс" />
                                        </div>
                                        <div class="plashka-reviews-count"><span>558</span> видеоотзывов</div>
                                    </a>
                                </div>
                            </div>
                            <div class="plashka-main-col">
                                <div class="yandex-reviews-plashka">
                                <a href="https://yandex.ru/maps/org/finansovo_pravovoy_alyans/113571879971/reviews/?ll=30.321249%2C59.925689&z=16" target="_blank">
                                        <div class="yandex-reviews-plashka-row">
                                            <div class="plashka-col">
                                                <img src="/wp-content/themes/fpalaw/assets/img/landing/yandex-logo.svg" alt="Финансово-правовой альянс" />
                                            </div>
                                            <div class="plashka-col">
                                                <div class="plashka-count">
                                                    <div class="num">5.0</div>
                                                    <div class="plashka-stars">
                                                        <svg width="77" height="12" viewBox="0 0 77 12" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_9639_155057)"><path d="M6.50668 0L8.50668 4L12.5067 4.5L9.76002 7.58L10.5067 12L6.50668 10L2.50668 12L3.26002 7.58L0.506683 4.5L4.50668 4L6.50668 0Z" fill="#FFCC00"/></g><g clip-path="url(#clip1_9639_155057)"><path d="M22.5067 0L24.5067 4L28.5067 4.5L25.76 7.58L26.5067 12L22.5067 10L18.5067 12L19.26 7.58L16.5067 4.5L20.5067 4L22.5067 0Z" fill="#FFCC00"/></g><g clip-path="url(#clip2_9639_155057)"><path d="M38.5067 0L40.5067 4L44.5067 4.5L41.76 7.58L42.5067 12L38.5067 10L34.5067 12L35.26 7.58L32.5067 4.5L36.5067 4L38.5067 0Z" fill="#FFCC00"/></g><g clip-path="url(#clip3_9639_155057)"><path d="M54.5067 0L56.5067 4L60.5067 4.5L57.76 7.58L58.5067 12L54.5067 10L50.5067 12L51.26 7.58L48.5067 4.5L52.5067 4L54.5067 0Z" fill="#FFCC00"/></g><g clip-path="url(#clip4_9639_155057)"><path d="M70.5067 0L72.5067 4L76.5067 4.5L73.76 7.58L74.5067 12L70.5067 10L66.5067 12L67.26 7.58L64.5067 4.5L68.5067 4L70.5067 0Z" fill="#FFCC00"/></g><defs><clipPath id="clip0_9639_155057"><rect width="12" height="12" fill="white" transform="translate(0.506683)"/></clipPath><clipPath id="clip1_9639_155057"><rect width="12" height="12" fill="white" transform="translate(16.5067)"/></clipPath><clipPath id="clip2_9639_155057"><rect width="12" height="12" fill="white" transform="translate(32.5067)"/></clipPath><clipPath id="clip3_9639_155057"><rect width="12" height="12" fill="white" transform="translate(48.5067)"/></clipPath><clipPath id="clip4_9639_155057"><rect width="12" height="12" fill="white" transform="translate(64.5067)"/></clipPath></defs></svg>
            
                                                    </div>
                                                </div>
                                                <div class="plashka-reviews-count">530 отзывов</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="chanels-plashka">
                                    <div class="chanels-plashka-row">
                                        <a target="_blank" href="https://www.rbc.ru/life/news/647856779a79478a81ebbe50">
                                            <img src="/wp-content/themes/fpalaw/assets/img/landing/RBK-logo.svg" alt="РБК" />
                                        </a>
                                        <a target="_blank" href="https://vmeste-rf.tv/programs/dva-mneniya/dva-mneniya-kak-nuzhno-izmenit-zakon-o-bankrotstve/">
                                            <img src="/wp-content/themes/fpalaw/assets/img/landing/Rossiya24-logo.svg" alt="Россия24" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="main-image-mobile">
                    <picture>
                        <img src="/wp-content/uploads/2023/02/aimfree-main-image.png" alt="Банкротство физических лиц в Санкт-Петербурге - услуги юристов" />
                    </picture>
                </div>
                <div class="content">
                    <h1>Списать долги бесплатно в МФЦ?</h1>
                    <div class="custom-text">
                        <p>Пройдите тест и узнайте, подходит ли вам процедура внесудебного банкротства в МФЦ</p>
                    </div>
                    <!--<a href="/iam3free-form" class="btn">Пройти тест из 5 вопросов</a>-->
                    <a class="btn iam3free_form_call" data-sms="64" data-title="Списать долги бесплатно в МФЦ? Пройдите тест и узнайте" data-name="SMS-61 Списать долги бесплатно в МФЦ? Пройдите тест и узнайте">Пройти тест из 4 вопросов</a>
                    
                    
                </div>
                <div class="foot">
                     <p>Бесплатное банкротство в МФЦ для граждан стало возможным в соответствии с поправками от 31.07.2020 г. в ФЗ №127 «О несостоятельности (банкротстве)». ИНН - 7838051976.</p>
                </div>
            </div>    
        </div>
    </div>
</section>