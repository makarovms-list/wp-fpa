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
        margin: 32px 150px 32px 100px;
        max-width: calc(100% - 250px);
    }
    .main-row {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: calc(50% - 32px) calc(50% - 32px);
        grid-column-gap: 64px;
        grid-row-gap: 64px;
    }
    .main-image {
        /*height: 100%;*/
        position: relative;
        max-width: 700px;
        margin: 0 auto;
    }
    .main-image .image-content {
        background: rgba(83, 129, 246, 0.95);
        box-shadow: 0px 4px 14px rgba(0, 37, 102, 0.1);
        border-radius: 4px;
        padding: 10px;
        max-width: 495px;
        position: absolute;
        bottom: 0;
        right: 0;
    }
    .main-image .image-content .name {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 2em;
        line-height: 145%;
        color: #FFFFFF;
    }
    .main-image .image-content .post {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 1.2em;
        line-height: 145%;
        color: #FFFFFF;
    }
    .main-image img {
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
        width: 100%;
    }
    .main-col .head {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        margin-bottom: 60px;
    }
    .header-text {
        background: rgba(78, 125, 245, 0.1);
        border-radius: 5px;
        padding: 16px;
        max-width: 324px;
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
        font-style: normal;
        font-weight: 700;
        font-size: 33px;
        line-height: 130%;
        letter-spacing: 0.01em;
        color: #393939;
        margin-bottom: 32px;
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
        margin-bottom: 60px;
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
        margin-bottom: 60px;
    }
    .custom-text p {
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 140%;
        color: #393939;
    }
    .custom-form {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 100%;
        grid-column-gap: 10px;
        grid-row-gap: 10px;
        align-items: center;
        margin-bottom: 60px;
    }
    .custom-form a {
        min-height: 48px;
        padding: 0;
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
        margin-bottom: 10px;
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
    .custom-form form .fields-row.all-width {
        grid-template-columns: 100%;
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
        grid-column-gap: 10px;
        grid-row-gap: 10px;
        margin-bottom: 0px;
        align-items: flex-start;
    }
    .foot-text .icon-clock {
        width: 26px;
        height: 26px;
        background: url(/wp-content/themes/fpalaw/assets/img/landing/icons8-clock.svg);
        background-size: contain;
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
    .main-row .main-col:last-child {
    	display: flex;
    	flex-direction: column;
    }
    .foot {
    	margin-top: auto;
    }
    .foot p {
        font-style: normal;
        font-weight: 400;
        font-size: 13px;
        line-height: 130%;
        color: #000000;
        margin-bottom: 0;
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
    .custom-form form input[type=tel],
    .custom-form form input[type=text] {
        border: 1px solid #000;
        background: transparent; 
        text-align: left;
    }
    .custom-form form input[type=tel]::-webkit-input-placeholder {
        color:    #000;
    }
    .custom-form form input[type=tel]:-moz-placeholder {
       color:    #000;
       opacity:  1;
    }
    .custom-form form input[type=tel]::-moz-placeholder {
       color:    #000;
       opacity:  1;
    }
    .custom-form form input[type=tel]:-ms-input-placeholder {
       color:    #000;
    }
    .custom-form form input[type=tel]::-ms-input-placeholder {
       color:    #000;
    }
    .custom-form form input[type=tel]::placeholder {
       color:    #000;
    }
    .custom-form form input[type=text]::-webkit-input-placeholder {
        color: #8E8E8E;
    }
    .custom-form form input[type=text]:-moz-placeholder {
       color: #8E8E8E;
       opacity:  1;
    }
    .custom-form form input[type=text]::-moz-placeholder {
       color: #8E8E8E;
       opacity:  1;
    }
    .custom-form form input[type=text]:-ms-input-placeholder {
       color: #8E8E8E;
    }
    .custom-form form input[type=text]::-ms-input-placeholder {
       color: #8E8E8E;
    }
    .custom-form form input[type=text]::placeholder {
       color: #8E8E8E;
    }
    .main-image-mobile {
        position: relative;
    }
    .main-image-mobile .image-content {
        background: rgba(83, 129, 246, 0.95);
        box-shadow: 0px 4px 14px rgba(0, 37, 102, 0.1);
        border-radius: 4px;
        padding: 10px;
        max-width: 260px;
        position: absolute;
        bottom: 0;
        right: 0;
    }
    .main-image-mobile .image-content .name {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 1em;
        line-height: 145%;
        color: #FFFFFF;
    }
    .main-image-mobile .image-content .post {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: .8em;
        line-height: 145%;
        color: #FFFFFF;
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
            margin: 32px 75px 32px 50px;
            max-width: calc(100% - 125px);
        }
    }
    @media (max-width: 1200px) {
        .main-container {
            width: calc(100% - 64px);
            margin: 32px auto;
            max-width: calc(100% - 64px);
        }
        .header-text {
            max-width: 270px;
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
            width: 100%;
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
        .custom-form {
            grid-template-columns: 100%;
        }
        .foot-text .foot-custom-text p span.new-line {
            display: initial;
        }
        .custom-form form .fields-row {
            grid-template-columns: 100%;
        }
        .main-image .image-content {
            max-width: 355px;
        }

        .main-image .image-content .name {
            font-size: 1.4em;
        }

        .main-image .image-content .post {
            font-size: .8em;
        }
    }
    @media (min-width: 782px) and (max-width: 980px) {
        .main-col .head .logo svg {
            width: 72px;
            height: 54px;
        }
        .header-text {
            max-width: 250px;
        }
        .main-image .image-content {
            max-width: 310px;
        }

        .main-image .image-content .name {
            font-size: 1.2em;
        }
    }
    @media (max-width: 782px) {
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
            /*
            max-height: 500px;
            margin-bottom: 20px;
            */
            max-width: 324px;
            margin: 0 auto 20px;
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
        .conditions-wrap {
    		margin-bottom: 25px;
    	}
    	.custom-form {
    		margin-bottom: 25px;
    	}
    }
    @media (max-width: 540px) {
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
            margin-bottom: 0px;
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
    }
    
    @media (max-width: 400px) {
        /*
        .content h1 {
            font-size: 19px;
        }
        */
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
            max-width: 240px;
            padding: 10px;
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
                        <img src="/wp-content/uploads/2023/03/aimfreef-main-image.png" alt="Банкротство физических лиц в Санкт-Петербурге - услуги юристов" />
                    </picture>
                    <div class="image-content">
                        <div class="name">Окладников Илья Викторович</div>
                        <div class="post">Руководитель юридического департамента по банкротству</div>
                    </div>
                </div>
            </div>    
            <div class="main-col">
                <div class="head">
                    <div class="logo">
                        <a href="/">
                            <svg width="122" height="96" viewBox="0 0 122 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M35.4823 3.57778C35.4823 3.41209 35.6166 3.27778 35.7823 3.27778H87.4622C87.6279 3.27778 87.7622 3.41209 87.7622 3.57778V39.6222C87.7622 39.7879 87.8966 39.9222 88.0622 39.9222H90.4715C90.6372 39.9222 90.7715 39.7879 90.7715 39.6222V0.299999C90.7715 0.134314 90.6372 0 90.4715 0H32.7832C32.6175 0 32.4832 0.134315 32.4832 0.3V39.6222C32.4832 39.7879 32.6175 39.9222 32.7832 39.9222H35.1823C35.348 39.9222 35.4823 39.7879 35.4823 39.6222V3.57778Z" fill="#393939"/>
                                <path d="M87.7622 92.4222C87.7622 92.5879 87.6279 92.7222 87.4622 92.7222H74.5459C74.3802 92.7222 74.2459 92.8566 74.2459 93.0222V95.7C74.2459 95.8657 74.3802 96 74.5459 96H90.4715C90.6371 96 90.7715 95.8657 90.7715 95.7V84.1889C90.7715 84.0232 90.6371 83.8889 90.4715 83.8889H88.0622C87.8965 83.8889 87.7622 84.0232 87.7622 84.1889V92.4222Z" fill="#393939"/>
                                <path d="M35.4822 84.1889C35.4822 84.0232 35.3479 83.8889 35.1822 83.8889H32.7832C32.6175 83.8889 32.4832 84.0232 32.4832 84.1889V95.7C32.4832 95.8657 32.6175 96 32.7832 96H48.7087C48.8744 96 49.0087 95.8657 49.0087 95.7V93.0222C49.0087 92.8566 48.8744 92.7222 48.7087 92.7222H35.7822C35.6166 92.7222 35.4822 92.5879 35.4822 92.4222V84.1889Z" fill="#393939"/>
                                <path d="M3.24344 57.2068C3.07775 57.2068 2.94344 57.0725 2.94344 56.9068V56.8108C2.94344 56.6514 2.8185 56.5215 2.66085 56.4984C2.3732 56.4562 2.09632 56.3735 1.83021 56.2504C1.47801 56.0804 1.16354 55.8501 0.886804 55.5597C0.610071 55.2692 0.393087 54.9256 0.235852 54.5289C0.0786174 54.1322 0 53.6894 0 53.2006C0 52.6905 0.0817621 52.2371 0.245286 51.8404C0.408811 51.4366 0.628939 51.093 0.905672 50.8097C1.1887 50.5192 1.50316 50.296 1.84908 50.1402C2.11283 50.0182 2.38364 49.9359 2.66149 49.8933C2.81879 49.8692 2.94344 49.7395 2.94344 49.5803V49.5688C2.94344 49.4031 3.07775 49.2688 3.24344 49.2688H4.10572C4.2714 49.2688 4.40572 49.4031 4.40572 49.5688V49.5803C4.40572 49.7395 4.53036 49.8692 4.68766 49.8933C4.96552 49.9359 5.23632 50.0182 5.50007 50.1402C5.85228 50.296 6.16675 50.5192 6.44348 50.8097C6.72022 51.093 6.94034 51.4366 7.10387 51.8404C7.26739 52.2442 7.34915 52.6976 7.34915 53.2006C7.34915 53.6894 7.26739 54.1322 7.10387 54.5289C6.94663 54.9256 6.72965 55.2692 6.45292 55.5597C6.17618 55.8501 5.86171 56.0804 5.50951 56.2504C5.24457 56.373 4.97073 56.4554 4.68799 56.4978C4.53051 56.5214 4.40572 56.6513 4.40572 56.8105V56.9068C4.40572 57.0725 4.2714 57.2068 4.10572 57.2068H3.24344ZM2.65399 55.0585C2.82295 55.1186 2.98117 54.9773 2.98117 54.798V51.5907C2.98117 51.4121 2.824 51.2706 2.65523 51.3292C2.51886 51.3765 2.38851 51.4442 2.26418 51.5323C2.04405 51.6881 1.86795 51.9077 1.73587 52.1911C1.61008 52.4674 1.54719 52.8039 1.54719 53.2006C1.54719 53.6044 1.61637 53.9445 1.75474 54.2207C1.89311 54.497 2.06921 54.7131 2.28305 54.869C2.40296 54.95 2.52661 55.0132 2.65399 55.0585ZM4.36798 54.7989C4.36798 54.9779 4.52571 55.1195 4.69462 55.0603C4.8242 55.0149 4.94803 54.9511 5.0661 54.869C5.28623 54.7131 5.46234 54.497 5.59441 54.2207C5.73278 53.9374 5.80196 53.5973 5.80196 53.2006C5.80196 52.8039 5.73593 52.4674 5.60385 52.1911C5.47177 51.9077 5.29567 51.6881 5.07554 51.5323C4.95525 51.4446 4.82799 51.3771 4.69377 51.3298C4.52527 51.2704 4.36798 51.4121 4.36798 51.5907V54.7989Z" fill="#393939"/>
                                <path d="M8.77188 57.2068C8.6062 57.2068 8.47188 57.0725 8.47188 56.9068V49.962C8.47188 49.7963 8.6062 49.662 8.77188 49.662H9.71908C9.88476 49.662 10.0191 49.7963 10.0191 49.962V53.5979C10.0191 53.9057 10.4274 54.0139 10.5798 53.7463L12.8196 49.8135C12.873 49.7198 12.9725 49.662 13.0803 49.662H14.0493C14.215 49.662 14.3493 49.7963 14.3493 49.962V56.9068C14.3493 57.0725 14.215 57.2068 14.0493 57.2068H13.1021C12.9364 57.2068 12.8021 57.0725 12.8021 56.9068V53.3096C12.8021 53.0012 12.3928 52.8935 12.241 53.1618L10.0392 57.0545C9.98595 57.1486 9.88619 57.2068 9.77806 57.2068H8.77188Z" fill="#393939"/>
                                <path d="M21.3285 49.662C21.4941 49.662 21.6285 49.7963 21.6285 49.962V56.9068C21.6285 57.0725 21.4941 57.2068 21.3285 57.2068H20.3813C20.2156 57.2068 20.0813 57.0725 20.0813 56.9068V54.4145C20.0813 54.2488 19.947 54.1145 19.7813 54.1145H17.7114C17.5457 54.1145 17.4114 54.2488 17.4114 54.4145V56.9068C17.4114 57.0725 17.2771 57.2068 17.1114 57.2068H16.1642C15.9985 57.2068 15.8642 57.0725 15.8642 56.9068V49.962C15.8642 49.7963 15.9985 49.662 16.1642 49.662H17.1114C17.2771 49.662 17.4114 49.7963 17.4114 49.962V52.2843C17.4114 52.45 17.5457 52.5843 17.7114 52.5843H19.7813C19.947 52.5843 20.0813 52.45 20.0813 52.2843V49.962C20.0813 49.7963 20.2156 49.662 20.3813 49.662H21.3285Z" fill="#393939"/>
                                <path d="M24.7246 49.8741C24.7632 49.7481 24.8796 49.662 25.0114 49.662H26.2373C26.3692 49.662 26.4857 49.7482 26.5242 49.8745L28.6431 56.8192C28.7019 57.012 28.5577 57.2068 28.3561 57.2068H27.3981C27.2663 57.2068 27.15 57.1208 27.1113 56.9948L26.7226 55.7291C26.6839 55.6031 26.5676 55.5172 26.4358 55.5172H24.7954C24.6631 55.5172 24.5464 55.6039 24.5082 55.7306L24.1275 56.9934C24.0893 57.1201 23.9726 57.2068 23.8402 57.2068H22.8839C22.6822 57.2068 22.5379 57.0117 22.597 56.8189L24.7246 49.8741ZM26.0111 54.3164C26.2085 54.3164 26.3522 54.1289 26.3007 53.9382L25.9059 52.4757C25.8263 52.1808 25.4085 52.1796 25.3271 52.4739L24.9229 53.9364C24.87 54.1275 25.0138 54.3164 25.212 54.3164H26.0111Z" fill="#393939"/>
                                <path d="M35.0738 49.662C35.2395 49.662 35.3738 49.7963 35.3738 49.962V56.9068C35.3738 57.0725 35.2395 57.2068 35.0738 57.2068H34.1267C33.961 57.2068 33.8267 57.0725 33.8267 56.9068V54.4145C33.8267 54.2488 33.6923 54.1145 33.5267 54.1145H31.4568C31.2911 54.1145 31.1568 54.2488 31.1568 54.4145V56.9068C31.1568 57.0725 31.0225 57.2068 30.8568 57.2068H29.9096C29.7439 57.2068 29.6096 57.0725 29.6096 56.9068V49.962C29.6096 49.7963 29.7439 49.662 29.9096 49.662H30.8568C31.0225 49.662 31.1568 49.7963 31.1568 49.962V52.2843C31.1568 52.45 31.2911 52.5843 31.4568 52.5843H33.5267C33.6923 52.5843 33.8267 52.45 33.8267 52.2843V49.962C33.8267 49.7963 33.961 49.662 34.1267 49.662H35.0738Z" fill="#393939"/>
                                <path d="M36.4594 53.3706C36.4594 52.9172 36.5349 52.4674 36.6859 52.0211C36.8368 51.5748 37.0569 51.171 37.3462 50.8097C37.6356 50.4484 37.9878 50.1614 38.4029 49.9489C38.818 49.7293 39.2897 49.6195 39.818 49.6195C40.4406 49.6195 40.9847 49.7718 41.4501 50.0764C41.8466 50.336 42.1564 50.6624 42.3795 51.0557C42.448 51.1766 42.4107 51.3273 42.3014 51.4132L41.6189 51.9502C41.4601 52.0751 41.2274 52.0077 41.1149 51.8399C41.0491 51.7419 40.9753 51.6571 40.8935 51.5854C40.7236 51.4295 40.5412 51.3233 40.3463 51.2666C40.1513 51.2028 39.9626 51.171 39.7802 51.171C39.384 51.171 39.057 51.2843 38.7991 51.511C38.5412 51.7377 38.3494 52.0246 38.2236 52.3717C38.0978 52.7189 38.0349 53.0731 38.0349 53.4344C38.0349 53.8311 38.1073 54.2066 38.2519 54.5608C38.3966 54.9079 38.601 55.1877 38.8651 55.4003C39.1293 55.6128 39.4406 55.7191 39.7991 55.7191C39.9878 55.7191 40.1796 55.6872 40.3746 55.6234C40.5696 55.5526 40.7488 55.4392 40.9123 55.2834C40.9951 55.2074 41.0682 55.1204 41.1316 55.0225C41.2376 54.8587 41.4566 54.7823 41.6192 54.8902L42.3688 55.388C42.4832 55.464 42.5333 55.6089 42.475 55.7332C42.3421 56.0165 42.1545 56.2633 41.9123 56.4735C41.6104 56.7286 41.2677 56.9269 40.884 57.0686C40.5067 57.2032 40.1324 57.2705 39.7614 57.2705C39.2771 57.2705 38.8337 57.1607 38.4312 56.9411C38.0286 56.7144 37.6796 56.4169 37.384 56.0485C37.0884 55.673 36.8588 55.255 36.6953 54.7946C36.5381 54.327 36.4594 53.8524 36.4594 53.3706Z" fill="#393939"/>
                                <path d="M46.3719 57.2705C45.8751 57.2705 45.4222 57.1643 45.0134 56.9517C44.6109 56.7321 44.2618 56.4417 43.9662 56.0804C43.6706 55.712 43.4442 55.3011 43.287 54.8477C43.1297 54.3872 43.0511 53.9126 43.0511 53.4238C43.0511 52.9279 43.1329 52.4532 43.2964 51.9998C43.4662 51.5393 43.6989 51.132 43.9945 50.7778C44.2964 50.4165 44.6518 50.1331 45.0606 49.9277C45.4694 49.7222 45.916 49.6195 46.4002 49.6195C46.8971 49.6195 47.3468 49.7293 47.7493 49.9489C48.1581 50.1614 48.5072 50.4519 48.7965 50.8203C49.0921 51.1887 49.3185 51.6031 49.4757 52.0636C49.633 52.517 49.7116 52.981 49.7116 53.4556C49.7116 53.9515 49.6267 54.4297 49.4569 54.8902C49.2934 55.3436 49.0606 55.7509 48.7588 56.1122C48.4632 56.4665 48.111 56.7498 47.7021 56.9624C47.2996 57.1678 46.8562 57.2705 46.3719 57.2705ZM44.6266 53.445C44.6266 53.8346 44.6927 54.203 44.8247 54.5502C44.9568 54.8902 45.1549 55.17 45.4191 55.3896C45.6832 55.6093 46.004 55.7191 46.3814 55.7191C46.7713 55.7191 47.0952 55.6057 47.3531 55.379C47.6172 55.1523 47.8122 54.8654 47.938 54.5183C48.0701 54.1641 48.1361 53.7992 48.1361 53.4238C48.1361 53.0341 48.0669 52.6693 47.9286 52.3292C47.7965 51.9821 47.5984 51.7023 47.3342 51.4897C47.0763 51.2772 46.7587 51.171 46.3814 51.171C45.9914 51.171 45.6644 51.2843 45.4002 51.511C45.1424 51.7306 44.9474 52.014 44.8153 52.3611C44.6895 52.7082 44.6266 53.0695 44.6266 53.445Z" fill="#393939"/>
                                <path d="M56.3321 55.2728C56.3321 55.7049 56.2283 56.0662 56.0208 56.3567C55.8132 56.64 55.5365 56.8526 55.1906 56.9942C54.851 57.1359 54.4736 57.2068 54.0585 57.2068H51.0943C50.9286 57.2068 50.7943 57.0725 50.7943 56.9068V49.962C50.7943 49.7963 50.9286 49.662 51.0943 49.662H54.5208C54.8352 49.662 55.1057 49.7576 55.3321 49.9489C55.5585 50.1331 55.7346 50.374 55.8604 50.6715C55.9862 50.9691 56.0491 51.2772 56.0491 51.596C56.0491 51.9502 55.9673 52.2903 55.8038 52.6161C55.7556 52.7122 55.7009 52.8008 55.6396 52.8821C55.4787 53.0954 55.5104 53.5193 55.7096 53.6974C55.8143 53.7909 55.9086 53.8981 55.9925 54.0188C56.2189 54.3447 56.3321 54.7627 56.3321 55.2728ZM52.6415 51.1497C52.4758 51.1497 52.3415 51.284 52.3415 51.4497V52.4118C52.3415 52.5775 52.4758 52.7118 52.6415 52.7118H53.8604C54.0302 52.7118 54.1811 52.648 54.3132 52.5205C54.4453 52.393 54.5113 52.1946 54.5113 51.9254C54.5113 51.6775 54.4516 51.4862 54.3321 51.3516C54.2189 51.217 54.0805 51.1497 53.917 51.1497H52.6415ZM54.7566 54.9221C54.7566 54.6883 54.6969 54.4899 54.5774 54.327C54.4579 54.1641 54.3069 54.0826 54.1245 54.0826H52.6415C52.4758 54.0826 52.3415 54.2169 52.3415 54.3826V55.4297C52.3415 55.5954 52.4758 55.7297 52.6415 55.7297H54.0585C54.2535 55.7297 54.417 55.6553 54.5491 55.5065C54.6874 55.3507 54.7566 55.1559 54.7566 54.9221Z" fill="#393939"/>
                                <path d="M60.3661 57.2705C59.8692 57.2705 59.4164 57.1643 59.0076 56.9517C58.605 56.7321 58.256 56.4417 57.9604 56.0804C57.6648 55.712 57.4384 55.3011 57.2811 54.8477C57.1239 54.3872 57.0453 53.9126 57.0453 53.4238C57.0453 52.9279 57.127 52.4532 57.2906 51.9998C57.4604 51.5393 57.6931 51.132 57.9887 50.7778C58.2906 50.4165 58.6459 50.1331 59.0547 49.9277C59.4635 49.7222 59.9101 49.6195 60.3944 49.6195C60.8912 49.6195 61.3409 49.7293 61.7435 49.9489C62.1523 50.1614 62.5013 50.4519 62.7906 50.8203C63.0862 51.1887 63.3127 51.6031 63.4699 52.0636C63.6271 52.517 63.7057 52.981 63.7057 53.4556C63.7057 53.9515 63.6208 54.4297 63.451 54.8902C63.2875 55.3436 63.0548 55.7509 62.7529 56.1122C62.4573 56.4665 62.1051 56.7498 61.6963 56.9624C61.2938 57.1678 60.8504 57.2705 60.3661 57.2705ZM58.6208 53.445C58.6208 53.8346 58.6868 54.203 58.8189 54.5502C58.951 54.8902 59.1491 55.17 59.4132 55.3896C59.6774 55.6093 59.9981 55.7191 60.3755 55.7191C60.7654 55.7191 61.0894 55.6057 61.3472 55.379C61.6114 55.1523 61.8063 54.8654 61.9321 54.5183C62.0642 54.1641 62.1302 53.7992 62.1302 53.4238C62.1302 53.0341 62.0611 52.6693 61.9227 52.3292C61.7906 51.9821 61.5925 51.7023 61.3284 51.4897C61.0705 51.2772 60.7529 51.171 60.3755 51.171C59.9856 51.171 59.6585 51.2843 59.3944 51.511C59.1365 51.7306 58.9415 52.014 58.8095 52.3611C58.6837 52.7082 58.6208 53.0695 58.6208 53.445Z" fill="#393939"/>
                                <path d="M64.9564 55.0496C64.7907 55.0496 64.6564 54.9153 64.6564 54.7496V53.8194C64.6564 53.6537 64.7907 53.5194 64.9564 53.5194H67.2621C67.4278 53.5194 67.5621 53.6537 67.5621 53.8194V54.7496C67.5621 54.9153 67.4278 55.0496 67.2621 55.0496H64.9564Z" fill="#393939"/>
                                <path d="M69.2302 57.2068C69.0645 57.2068 68.9302 57.0725 68.9302 56.9068V49.962C68.9302 49.7963 69.0645 49.662 69.2302 49.662H74.2057C74.3714 49.662 74.5057 49.7963 74.5057 49.962V56.9068C74.5057 57.0725 74.3714 57.2068 74.2057 57.2068H73.2585C73.0928 57.2068 72.9585 57.0725 72.9585 56.9068V51.4922C72.9585 51.3265 72.8242 51.1922 72.6585 51.1922H70.7774C70.6117 51.1922 70.4774 51.3265 70.4774 51.4922V56.9068C70.4774 57.0725 70.343 57.2068 70.1774 57.2068H69.2302Z" fill="#393939"/>
                                <path d="M76.3095 57.2068C76.1438 57.2068 76.0095 57.0725 76.0095 56.9068V49.962C76.0095 49.7963 76.1438 49.662 76.3095 49.662H78.868C79.1888 49.662 79.4812 49.7364 79.7454 49.8852C80.0158 50.0268 80.2485 50.2217 80.4435 50.4696C80.6385 50.7105 80.7894 50.9832 80.8963 51.2878C81.0033 51.5925 81.0567 51.9006 81.0567 52.2123C81.0567 52.6516 80.9655 53.066 80.7831 53.4556C80.607 53.8453 80.3586 54.1641 80.0378 54.412C79.7171 54.6529 79.3429 54.7733 78.9152 54.7733H77.8567C77.691 54.7733 77.5567 54.9076 77.5567 55.0733V56.9068C77.5567 57.0725 77.4224 57.2068 77.2567 57.2068H76.3095ZM77.5567 52.9537C77.5567 53.1194 77.691 53.2537 77.8567 53.2537H78.8208C79.0032 53.2537 79.1605 53.1652 79.2925 52.9881C79.4246 52.811 79.4907 52.5524 79.4907 52.2123C79.4907 51.8652 79.412 51.6102 79.2548 51.4472C79.1039 51.2772 78.9403 51.1922 78.7642 51.1922H77.8567C77.691 51.1922 77.5567 51.3265 77.5567 51.4922V52.9537Z" fill="#393939"/>
                                <path d="M83.2115 49.8741C83.2501 49.7481 83.3665 49.662 83.4983 49.662H84.7242C84.8561 49.662 84.9726 49.7482 85.0111 49.8745L87.13 56.8192C87.1888 57.012 87.0446 57.2068 86.843 57.2068H85.885C85.7532 57.2068 85.6369 57.1208 85.5982 56.9948L85.2095 55.7291C85.1708 55.6031 85.0545 55.5172 84.9227 55.5172H83.2824C83.15 55.5172 83.0333 55.6039 82.9951 55.7306L82.6144 56.9934C82.5762 57.1201 82.4595 57.2068 82.3271 57.2068H81.3708C81.1691 57.2068 81.0249 57.0117 81.0839 56.8189L83.2115 49.8741ZM84.498 54.3164C84.6955 54.3164 84.8391 54.1289 84.7876 53.9382L84.3929 52.4757C84.3133 52.1808 83.8954 52.1796 83.8141 52.4739L83.4098 53.9364C83.357 54.1275 83.5007 54.3164 83.6989 54.3164H84.498Z" fill="#393939"/>
                                <path d="M93.6344 55.2728C93.6344 55.7049 93.5306 56.0662 93.323 56.3567C93.1155 56.64 92.8388 56.8526 92.4928 56.9942C92.1532 57.1359 91.7758 57.2068 91.3607 57.2068H88.3965C88.2309 57.2068 88.0965 57.0725 88.0965 56.9068V49.962C88.0965 49.7963 88.2309 49.662 88.3965 49.662H91.823C92.1375 49.662 92.4079 49.7576 92.6343 49.9489C92.8608 50.1331 93.0369 50.374 93.1627 50.6715C93.2884 50.9691 93.3513 51.2772 93.3513 51.596C93.3513 51.9502 93.2696 52.2903 93.106 52.6161C93.0579 52.7122 93.0031 52.8008 92.9418 52.8821C92.781 53.0954 92.8127 53.5193 93.0119 53.6974C93.1165 53.7909 93.2108 53.8981 93.2947 54.0188C93.5211 54.3447 93.6344 54.7627 93.6344 55.2728ZM89.9437 51.1497C89.7781 51.1497 89.6437 51.284 89.6437 51.4497V52.4118C89.6437 52.5775 89.7781 52.7118 89.9437 52.7118H91.1626C91.3324 52.7118 91.4834 52.648 91.6155 52.5205C91.7475 52.393 91.8136 52.1946 91.8136 51.9254C91.8136 51.6775 91.7538 51.4862 91.6343 51.3516C91.5211 51.217 91.3828 51.1497 91.2192 51.1497H89.9437ZM92.0589 54.9221C92.0589 54.6883 91.9991 54.4899 91.8796 54.327C91.7601 54.1641 91.6092 54.0826 91.4268 54.0826H89.9437C89.7781 54.0826 89.6437 54.2169 89.6437 54.3826V55.4297C89.6437 55.5954 89.7781 55.7297 89.9437 55.7297H91.3607C91.5557 55.7297 91.7192 55.6553 91.8513 55.5065C91.9897 55.3507 92.0589 55.1559 92.0589 54.9221Z" fill="#393939"/>
                                <path d="M97.6683 57.2705C97.1715 57.2705 96.7186 57.1643 96.3098 56.9517C95.9073 56.7321 95.5582 56.4417 95.2626 56.0804C94.967 55.712 94.7406 55.3011 94.5834 54.8477C94.4261 54.3872 94.3475 53.9126 94.3475 53.4238C94.3475 52.9279 94.4293 52.4532 94.5928 51.9998C94.7626 51.5393 94.9953 51.132 95.2909 50.7778C95.5928 50.4165 95.9482 50.1331 96.357 49.9277C96.7658 49.7222 97.2123 49.6195 97.6966 49.6195C98.1935 49.6195 98.6432 49.7293 99.0457 49.9489C99.4545 50.1614 99.8036 50.4519 100.093 50.8203C100.388 51.1887 100.615 51.6031 100.772 52.0636C100.929 52.517 101.008 52.981 101.008 53.4556C101.008 53.9515 100.923 54.4297 100.753 54.8902C100.59 55.3436 100.357 55.7509 100.055 56.1122C99.7595 56.4665 99.4073 56.7498 98.9985 56.9624C98.596 57.1678 98.1526 57.2705 97.6683 57.2705ZM95.923 53.445C95.923 53.8346 95.989 54.203 96.1211 54.5502C96.2532 54.8902 96.4513 55.17 96.7155 55.3896C96.9796 55.6093 97.3004 55.7191 97.6778 55.7191C98.0677 55.7191 98.3916 55.6057 98.6495 55.379C98.9136 55.1523 99.1086 54.8654 99.2344 54.5183C99.3665 54.1641 99.4325 53.7992 99.4325 53.4238C99.4325 53.0341 99.3633 52.6693 99.2249 52.3292C99.0929 51.9821 98.8947 51.7023 98.6306 51.4897C98.3727 51.2772 98.0551 51.171 97.6778 51.171C97.2878 51.171 96.9608 51.2843 96.6966 51.511C96.4387 51.7306 96.2438 52.014 96.1117 52.3611C95.9859 52.7082 95.923 53.0695 95.923 53.445Z" fill="#393939"/>
                                <path d="M107.629 55.2728C107.629 55.7049 107.525 56.0662 107.317 56.3567C107.11 56.64 106.833 56.8526 106.487 56.9942C106.147 57.1359 105.77 57.2068 105.355 57.2068H102.391C102.225 57.2068 102.091 57.0725 102.091 56.9068V49.962C102.091 49.7963 102.225 49.662 102.391 49.662H105.817C106.132 49.662 106.402 49.7576 106.628 49.9489C106.855 50.1331 107.031 50.374 107.157 50.6715C107.283 50.9691 107.345 51.2772 107.345 51.596C107.345 51.9502 107.264 52.2903 107.1 52.6161C107.052 52.7122 106.997 52.8008 106.936 52.8821C106.775 53.0954 106.807 53.5193 107.006 53.6974C107.111 53.7909 107.205 53.8981 107.289 54.0188C107.515 54.3447 107.629 54.7627 107.629 55.2728ZM103.938 51.1497C103.772 51.1497 103.638 51.284 103.638 51.4497V52.4118C103.638 52.5775 103.772 52.7118 103.938 52.7118H105.157C105.327 52.7118 105.478 52.648 105.61 52.5205C105.742 52.393 105.808 52.1946 105.808 51.9254C105.808 51.6775 105.748 51.4862 105.628 51.3516C105.515 51.217 105.377 51.1497 105.213 51.1497H103.938ZM106.053 54.9221C106.053 54.6883 105.993 54.4899 105.874 54.327C105.754 54.1641 105.603 54.0826 105.421 54.0826H103.938C103.772 54.0826 103.638 54.2169 103.638 54.3826V55.4297C103.638 55.5954 103.772 55.7297 103.938 55.7297H105.355C105.55 55.7297 105.713 55.6553 105.845 55.5065C105.984 55.3507 106.053 55.1559 106.053 54.9221Z" fill="#393939"/>
                                <path d="M111.662 57.2705C111.166 57.2705 110.713 57.1643 110.304 56.9517C109.901 56.7321 109.552 56.4417 109.257 56.0804C108.961 55.712 108.735 55.3011 108.578 54.8477C108.42 54.3872 108.342 53.9126 108.342 53.4238C108.342 52.9279 108.423 52.4532 108.587 51.9998C108.757 51.5393 108.989 51.132 109.285 50.7778C109.587 50.4165 109.942 50.1331 110.351 49.9277C110.76 49.7222 111.206 49.6195 111.691 49.6195C112.188 49.6195 112.637 49.7293 113.04 49.9489C113.449 50.1614 113.798 50.4519 114.087 50.8203C114.383 51.1887 114.609 51.6031 114.766 52.0636C114.924 52.517 115.002 52.981 115.002 53.4556C115.002 53.9515 114.917 54.4297 114.747 54.8902C114.584 55.3436 114.351 55.7509 114.049 56.1122C113.754 56.4665 113.401 56.7498 112.993 56.9624C112.59 57.1678 112.147 57.2705 111.662 57.2705ZM109.917 53.445C109.917 53.8346 109.983 54.203 110.115 54.5502C110.247 54.8902 110.445 55.17 110.71 55.3896C110.974 55.6093 111.295 55.7191 111.672 55.7191C112.062 55.7191 112.386 55.6057 112.644 55.379C112.908 55.1523 113.103 54.8654 113.229 54.5183C113.361 54.1641 113.427 53.7992 113.427 53.4238C113.427 53.0341 113.357 52.6693 113.219 52.3292C113.087 51.9821 112.889 51.7023 112.625 51.4897C112.367 51.2772 112.049 51.171 111.672 51.171C111.282 51.171 110.955 51.2843 110.691 51.511C110.433 51.7306 110.238 52.014 110.106 52.3611C109.98 52.7082 109.917 53.0695 109.917 53.445Z" fill="#393939"/>
                                <path d="M116.423 57.2068C116.257 57.2068 116.123 57.0725 116.123 56.9068V49.962C116.123 49.7963 116.257 49.662 116.423 49.662H117.37C117.535 49.662 117.67 49.7963 117.67 49.962V53.5979C117.67 53.9057 118.078 54.0139 118.23 53.7463L120.47 49.8135C120.524 49.7198 120.623 49.662 120.731 49.662H121.7C121.866 49.662 122 49.7963 122 49.962V56.9068C122 57.0725 121.866 57.2068 121.7 57.2068H120.753C120.587 57.2068 120.453 57.0725 120.453 56.9068V53.3095C120.453 53.0012 120.044 52.8935 119.892 53.1618L117.69 57.0545C117.637 57.1486 117.537 57.2068 117.429 57.2068H116.423ZM119.066 49.2582C118.689 49.2582 118.358 49.1874 118.075 49.0457C117.792 48.8969 117.572 48.6985 117.415 48.4506C117.309 48.2778 117.238 48.0905 117.204 47.8885C117.176 47.7252 117.313 47.5898 117.479 47.5898H117.908C118.073 47.5898 118.201 47.728 118.255 47.8847C118.289 47.9855 118.343 48.0784 118.415 48.1637C118.56 48.3266 118.78 48.4081 119.075 48.4081C119.352 48.4081 119.563 48.3302 119.708 48.1743C119.79 48.0894 119.85 47.9928 119.887 47.8848C119.941 47.7282 120.068 47.5898 120.234 47.5898H120.662C120.828 47.5898 120.965 47.7252 120.938 47.8885C120.903 48.0905 120.833 48.2778 120.726 48.4506C120.569 48.6985 120.346 48.8969 120.057 49.0457C119.774 49.1874 119.443 49.2582 119.066 49.2582Z" fill="#393939"/>
                                <path d="M43.2928 68.0909C43.3314 67.9648 43.4478 67.8787 43.5796 67.8787H44.8055C44.9374 67.8787 45.0539 67.965 45.0924 68.0912L47.2113 75.036C47.2701 75.2287 47.1259 75.4235 46.9243 75.4235H45.9663C45.8345 75.4235 45.7182 75.3375 45.6795 75.2116L45.2908 73.9458C45.2521 73.8199 45.1358 73.7339 45.004 73.7339H43.3636C43.2313 73.7339 43.1146 73.8206 43.0764 73.9473L42.6957 75.2101C42.6575 75.3368 42.5408 75.4235 42.4084 75.4235H41.4521C41.2504 75.4235 41.1061 75.2285 41.1652 75.0356L43.2928 68.0909ZM44.5793 72.5331C44.7767 72.5331 44.9204 72.3456 44.8689 72.155L44.4741 70.6924C44.3945 70.3976 43.9767 70.3963 43.8953 70.6907L43.4911 72.1532C43.4382 72.3443 43.582 72.5331 43.7802 72.5331H44.5793Z" fill="#393939"/>
                                <path d="M52.6477 75.4235C52.482 75.4235 52.3477 75.2892 52.3477 75.1235V69.709C52.3477 69.5433 52.2134 69.409 52.0477 69.409H50.9777C50.8158 69.409 50.6831 69.5374 50.6778 69.6992L50.6496 70.5672C50.6181 71.5449 50.5426 72.3525 50.4231 72.9901C50.3036 73.6277 50.1307 74.1306 49.9043 74.499C49.6841 74.8603 49.4011 75.1154 49.0552 75.2641C48.7831 75.3756 48.4662 75.4454 48.1045 75.4736C47.9376 75.4866 47.8005 75.3503 47.8005 75.1829V74.2783C47.8005 74.1126 47.9369 73.9837 48.0978 73.9441C48.1982 73.9193 48.2909 73.8811 48.3759 73.8296C48.5395 73.7233 48.6747 73.532 48.7816 73.2557C48.8948 72.9794 48.9829 72.5863 49.0458 72.0762C49.1149 71.559 49.1621 70.886 49.1873 70.0572L49.2445 68.1697C49.2494 68.0076 49.3822 67.8787 49.5443 67.8787H53.5949C53.7606 67.8787 53.8949 68.0131 53.8949 68.1787V75.1235C53.8949 75.2892 53.7606 75.4235 53.5949 75.4235H52.6477Z" fill="#393939"/>
                                <path d="M55.6967 75.4235C55.531 75.4235 55.3967 75.2892 55.3967 75.1235V68.1787C55.3967 68.0131 55.531 67.8787 55.6967 67.8787H56.6439C56.8095 67.8787 56.9439 68.0131 56.9439 68.1787V70.1822C56.9439 70.3479 57.0782 70.4822 57.2439 70.4822H58.1892C58.9313 70.4822 59.5099 70.7018 59.925 71.1411C60.3464 71.5803 60.5571 72.1789 60.5571 72.9369C60.5571 73.6879 60.3559 74.29 59.9533 74.7434C59.5508 75.1968 58.9911 75.4235 58.2741 75.4235H55.6967ZM56.9439 73.6996C56.9439 73.8653 57.0782 73.9996 57.2439 73.9996H58.0476C58.3684 73.9996 58.6043 73.9004 58.7552 73.702C58.9061 73.5037 58.9816 73.2486 58.9816 72.9369C58.9816 72.6677 58.9061 72.4304 58.7552 72.225C58.6105 72.0124 58.3747 71.9062 58.0476 71.9062H57.2439C57.0782 71.9062 56.9439 72.0405 56.9439 72.2062V73.6996Z" fill="#393939"/>
                                <path d="M61.9321 75.4235C61.7053 75.4235 61.5605 75.1815 61.6678 74.9817L62.8609 72.7578C62.9441 72.6027 62.8747 72.4115 62.7266 72.3166C62.4663 72.1497 62.2545 71.9244 62.0911 71.6405C61.871 71.2509 61.7609 70.7939 61.7609 70.2697C61.7609 69.8092 61.8553 69.3983 62.0439 69.037C62.2326 68.6757 62.4968 68.3924 62.8364 68.1869C63.176 67.9815 63.566 67.8787 64.0062 67.8787H66.5365C66.7021 67.8787 66.8365 68.0131 66.8365 68.1787V75.1235C66.8365 75.2892 66.7021 75.4235 66.5365 75.4235H65.5893C65.4236 75.4235 65.2893 75.2892 65.2893 75.1235V72.9713C65.2893 72.8056 65.155 72.6713 64.9893 72.6713H64.7654C64.6526 72.6713 64.5494 72.7344 64.4982 72.8348L63.2596 75.26C63.2083 75.3603 63.1051 75.4235 62.9924 75.4235H61.9321ZM64.2043 71.1942H64.9893C65.155 71.1942 65.2893 71.0599 65.2893 70.8942V69.6558C65.2893 69.4901 65.155 69.3558 64.9893 69.3558H64.2232C63.9905 69.3558 63.783 69.4267 63.6006 69.5684C63.4245 69.71 63.3364 69.9438 63.3364 70.2697C63.3364 70.5885 63.4182 70.8223 63.5817 70.971C63.7515 71.1198 63.9591 71.1942 64.2043 71.1942Z" fill="#393939"/>
                                <path d="M73.7765 67.8787C73.9421 67.8787 74.0765 68.0131 74.0765 68.1787V75.1235C74.0765 75.2892 73.9421 75.4235 73.7765 75.4235H72.8293C72.6636 75.4235 72.5293 75.2892 72.5293 75.1235V72.6312C72.5293 72.4655 72.395 72.3312 72.2293 72.3312H70.1594C69.9937 72.3312 69.8594 72.4655 69.8594 72.6312V75.1235C69.8594 75.2892 69.7251 75.4235 69.5594 75.4235H68.6122C68.4465 75.4235 68.3122 75.2892 68.3122 75.1235V68.1787C68.3122 68.0131 68.4465 67.8787 68.6122 67.8787H69.5594C69.7251 67.8787 69.8594 68.0131 69.8594 68.1787V70.501C69.8594 70.6667 69.9937 70.801 70.1594 70.801H72.2293C72.395 70.801 72.5293 70.6667 72.5293 70.501V68.1787C72.5293 68.0131 72.6636 67.8787 72.8293 67.8787H73.7765Z" fill="#393939"/>
                                <path d="M75.162 71.5874C75.162 71.134 75.2375 70.6841 75.3885 70.2378C75.5394 69.7915 75.7595 69.3877 76.0488 69.0264C76.3382 68.6651 76.6904 68.3782 77.1055 68.1657C77.5206 67.946 77.9923 67.8362 78.5206 67.8362C79.1432 67.8362 79.6873 67.9886 80.1527 68.2932C80.5492 68.5527 80.859 68.8791 81.0821 69.2724C81.1507 69.3933 81.1133 69.544 81.004 69.63L80.3215 70.1669C80.1627 70.2918 79.93 70.2245 79.8175 70.0567C79.7517 69.9587 79.6779 69.8738 79.5961 69.8021C79.4262 69.6463 79.2439 69.54 79.0489 69.4833C78.8539 69.4196 78.6652 69.3877 78.4828 69.3877C78.0866 69.3877 77.7596 69.5011 77.5017 69.7277C77.2438 69.9544 77.052 70.2414 76.9262 70.5885C76.8004 70.9356 76.7375 71.2898 76.7375 71.6511C76.7375 72.0479 76.8099 72.4233 76.9545 72.7775C77.0992 73.1247 77.3036 73.4045 77.5677 73.617C77.8319 73.8296 78.1432 73.9358 78.5017 73.9358C78.6904 73.9358 78.8822 73.9039 79.0772 73.8402C79.2722 73.7693 79.4514 73.656 79.6149 73.5001C79.6977 73.4241 79.7708 73.3372 79.8342 73.2393C79.9402 73.0754 80.1592 72.999 80.3218 73.107L81.0714 73.6047C81.1858 73.6807 81.2359 73.8257 81.1776 73.95C81.0447 74.2332 80.8571 74.48 80.6149 74.6903C80.313 74.9453 79.9703 75.1437 79.5866 75.2854C79.2093 75.42 78.835 75.4873 78.464 75.4873C77.9797 75.4873 77.5363 75.3775 77.1338 75.1579C76.7312 74.9312 76.3822 74.6336 76.0866 74.2652C75.791 73.8898 75.5614 73.4718 75.3979 73.0113C75.2407 72.5438 75.162 72.0691 75.162 71.5874Z" fill="#393939"/>
                            </svg>
                        </a>
                    </div>
                    <div class="header-text">
                        <p>С <span>01.01.2023 г.</span> по <span>01.09.2023 г.</span> мы меняем правила банкротства в России!</p>
                    </div>
                </div>
                
                <div class="main-image-mobile">
                    <picture>
                        <img src="/wp-content/uploads/2023/03/aimfreef-main-image.png" alt="Банкротство физических лиц в Санкт-Петербурге - услуги юристов" />
                    </picture>
                    <div class="image-content">
                        <div class="name">Окладников Илья Викторович</div>
                        <div class="post">Руководитель юридического департамента по банкротству</div>
                    </div>
                </div>
                
                <div class="content">
                    <h1>Оставьте ваши данные и мы расскажем, как <span>списать долги бесплатно</span></h1>
                    <div class="custom-text">
                        <p>Если ваша ситуация подходит под эти 3 условия, оставьте номер телефона и через 6 месяцев ваши долги будут списаны в одной из крупнейших юридических фирм России <span>бесплатно</span></p>
                    </div>
                    <div class="custom-form">
                        <?=do_shortcode('[contact-form-7 id="22948" title="Форма aimfeef"]'); ?>
                    </div>
                </div>
                <div class="foot">
                     <p>ООО «Финансово-правовой альянс» ИНН 7838051976</p>
                </div>
            </div>    
        </div>
    </div>
</section>