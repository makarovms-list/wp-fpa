<style>
    body {
        /*
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        */
    }
    .first-view__cnt {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
    .container {
        width: 100%;
        max-width: 1170px;
    }
    *:focus {
        outline: none;
    }
    @media (max-width: 1240px) {
        .container {
            width: calc(100% - 64px);
            margin: 0 32px;
        }    
    }
    body.page-template-bankrot-konsalt header {
        background-color: #f3f4f4;
    }

    
    header .header-row {
        display: flex;
        align-items: center;
        padding: 25px 0;
    }
    header .logo a {
        text-decoration:; none;
    }    
    header .logo svg {
        height: 68px;
        width: auto;
    }
    header .slogan {
        max-width: 200px;
        margin-left: 46px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 150%;
    }
    header .slogan p {
        padding: 0;
        margin: 0;
    }
    header .phone {
        margin-left: auto;
    }
    header .phone a {
        display: flex;
        text-decoration: none;
    }
    header .phone a svg {
        margin-right: 16px;
    }
    header .phone a .number__cnt .number {
        display: block;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 150%;
        border-bottom: 1px solid transparent;
        color: #5381F6;
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
    }
    header .phone a .number__cnt .number:hover {
        border-bottom: 1px solid #5381F6;
    }
    header .phone a .number__cnt .time {
        display: block;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 14px;
        line-height: 150%;
        color: #717B97;
        text-align: right;
    }
    header a.header-btn {
        margin-left: 50px;
        border: 2px solid #5381F6;
        padding: 10px 30px;
        background: transparent;
        border-radius: 4px;
        color: #5381F6;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 150%;
        cursor: pointer;
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
    }
    header a.header-btn:hover {
        border: 2px solid #2B59CE;
        color: #2B59CE;
    }
    header a.header-btn:hover span {
        border-bottom: 1px solid #2B59CE;
    }
    
    .landing-konslt-main {
        flex: 1;
        display: flex;
        align-items: center;
        background: url(/wp-content/themes/fpalaw/assets/img/bankrotkonsalt/main-bg.png) center center no-repeat;
        background-size: cover;
    }
    .landing-konslt-main .content {
        max-width: 740px;
        padding-top: 80px;
        padding-bottom: 80px;
    }
    .landing-konslt-main .content .main-heading {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 800;
        font-size: 48px;
        line-height: 120%;
        margin: 0 0 20px;
        color: #fff;
    }
    .landing-konslt-main .content .main-heading i {
        font-style: normal;
        color: #FB5A80;
    }
    .landing-konslt-main .content p.big {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 600;
        font-size: 24px;
        line-height: 150%;
        margin: 0 0 10px;
        color: #fff;
    }
    .landing-konslt-main .content p.small {
        font-family: 'Inter';
        font-style: normal;
        font-weight: normal;
        font-size: 14px;
        line-height: 150%;
        margin: 0 0 20px;
        color: #fff;
    }
    .landing-konslt-main .content .main-btn {
        background: linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        box-shadow: 0px 4px 14px rgba(255, 226, 255, 0.18);
        border-radius: 10px;
        padding: 15px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 14px;
        line-height: 145%;
        color: #FFFFFF;
        cursor: pointer;
        border: none;
        margin-bottom: 20px;
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
    }
    .landing-konslt-main .content .main-btn:hover {
        background: linear-gradient(180deg, #D33258 0%, #C00733 100%);
    }
    .landing-konslt-main .content p.after-text {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 150%;
        color: #fff;
    }
    footer {
        background-color: #f3f4f4;
    }
    footer .footer-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    footer .footer-row:first-child {
        padding-top: 25px;
    }
    footer .footer-row:last-child {
        padding-bottom: 25px;
    }
    footer .logo {
        display: flex;
        flex-direction: column;
        max-width: 270px;
        width: 100%;
        text-align: left;
        align-items: flex-start;
    }
    footer .logo a {
        text-decoration:; none;
    }    
    footer .logo svg {
        height: 68px;
        width: auto;
        margin-bottom: 10px;
    }
    footer .logo p {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 14px;
        line-height: 150%;
        margin: 0;
        padding: 0;
    }
    footer .footer-requisites {
        max-width: 300px;
        width: 100%;
    }
    footer .footer-requisites p {
        margin: 0;
        padding: 0;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 14px;
        line-height: 150%;
    }
    footer .footer-requisites p+p {
        margin-top: 4px;
    }
    footer .footer-contacts {
        max-width: 320px;
        width: 100%;
        text-align: right;
    }
    footer .phone {
        margin-bottom: 4px;   
    }
    footer .phone a {
        display: flex;
        text-decoration: none;
        justify-content: flex-end;
    }
    footer .phone a svg {
        margin-right: 16px;
    }
    footer .phone a .number__cnt .number {
        display: block;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 150%;
        border-bottom: 1px solid transparent;
        color: #5381F6;
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
    }
    footer .phone a .number__cnt .number:hover {
        border-bottom: 1px solid #5381F6;
    }
    footer .work-time {
        margin-bottom: 10px;
    }
    footer .work-time span {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 14px;
        line-height: 150%;
        display: block;
    }
    footer .work-time span+span {
        margin-top: 4px;
    }
    footer .info p {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 10px;
        line-height: 150%;
    }
    footer .info.mobile {
        display: none;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 10px;
        line-height: 150%;
        margin-top: 10px;
    }
    footer .footer-btn__cnt.mobile {
        display: none;
        width: 100%;
    }
    footer a.footer-btn {
        display: block;
        margin-bottom: 20px;
        text-align: center;
        border: 2px solid #5381F6;
        padding: 10px 30px;
        background: transparent;
        border-radius: 4px;
        color: #5381F6;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 150%;
        cursor: pointer;
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
    }
    footer a.footer-btn:hover {
        border: 2px solid #2B59CE;
        color: #2B59CE;
    }
    footer a.footer-btn:hover span {
        border-bottom: 1px solid #2B59CE;
    }
    .bankrotkonsalt_popup__cnt h3.modal__title {
        text-align: center;
        font-size: 30px;
        line-height: 145%;
    }
    .popup__overlay {
        /*
        background: rgba(243, 244, 244, 0.85);
        backdrop-filter: blur(30px);
        */
        background: url(/wp-content/themes/fpalaw/assets/img/bankrotkonsalt/popup-bg.png) center center no-repeat;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .bankrotkonsalt_popup__cnt {
        position: relative;
    }
    .bankrotkonsalt_popup__cnt.popup_callback .popup__close {
        top: -30px!important;
        position: absolute!important;
        right: 0!important;
    }
    .bankrotkonsalt_popup__cnt .popup_callback {
        background: #FFFFFF;
        box-shadow: 0px 14px 34px rgb(0 29 104 / 12%);
        border-radius: 10px;
        padding: 40px;
    }
    .bankrotkonsalt_popup__cnt.popup_callback {
        background: #FFFFFF;
        box-shadow: 0px 14px 34px rgb(0 29 104 / 12%);
        border-radius: 10px;
        padding: 40px;
    }
    .bankrotkonsalt_popup__cnt .callback_form label {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 15px;
        line-height: 145%;
        color: #393939;
        margin-bottom: 10px;
        display: block;
    }
    .bankrotkonsalt_popup__cnt .callback_form input[type=text],
    .bankrotkonsalt_popup__cnt .callback_form input[type=email],
    .bankrotkonsalt_popup__cnt .callback_form input[type=tel] {
        background: #F3F4F4;
        border-radius: 10px;
        display: block;
        padding: 14px;
        border: none;
        color: #393939;
        max-width: 100%;
        width: 100%;
        }
    .bankrotkonsalt_popup__cnt .callback_form input::-webkit-input-placeholder {
    	color: #39393966!important;
    }
    .bankrotkonsalt_popup__cnt .callback_form input:-moz-placeholder {
    	color: #39393966!important;
       opacity:  1;
    }
    .bankrotkonsalt_popup__cnt .callback_form input::-moz-placeholder {
    	color: #39393966!important;
       opacity:  1;
    }
    .bankrotkonsalt_popup__cnt .callback_form input:-ms-input-placeholder {
    	color: #39393966!important;
    }
    .bankrotkonsalt_popup__cnt .callback_form input::-ms-input-placeholder {
    	color: #39393966!important;
    }
    .bankrotkonsalt_popup__cnt .callback_form input::placeholder {
    	color: #39393966!important;
    }
    .bankrotkonsalt_popup__cnt .callback_form input[type=submit] {
        background: #5381F6;
        box-shadow: 0px 4px 14px rgb(0 37 102 / 18%);
        border-radius: 10px;
        border: none;
        color: #fff;
        padding: 15px;
        cursor: pointer;
    }
    .bankrotkonsalt_popup__cnt .callback_form br {
        display: none;
    }
    .bankrotkonsalt_popup__cnt .callback_form label input[type=submit]:hover {
        background: #3563D8;
    }
    .bankrotkonsalt_popup__cnt .callback_form .field-wrapper+.field-wrapper {
        margin-top: 10px;
    }
    .bankrotkonsalt_popup__cnt .callback_form .button-wrapper {
        margin-top: 20px;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros:not(.hidden) {
        display: flex;
        flex-direction: column;
        height: 100%;
        justify-content: space-between;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .progress__cnt {
        padding-top: 80px;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .progress__cnt .progress-line {
        background: #0000001a;
        max-width: 400px;
        height: 4px;
        border-radius: 10px;
        position: relative;
        width: 100%;
        white-space: nowrap;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .progress__cnt .progress-line .progress-line-item {
        background: #5381F6;
        width: 16%;
        position: absolute;
        left: 0;
        top: 0;
        height: 4px;
        border-radius: 10px;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .progress__cnt .progress-line .progress-line-tooltip {
        position: absolute;
        background: #fff;
        bottom: 12px;
        left: calc(8% - 36px);
        padding: 10px 20px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 145%;
        color: #5381F6;
        border-radius: 10px;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .progress__cnt .progress-line .progress-line-tooltip:after {
        content: "";
        position: absolute;
        bottom: -16px;
        left: calc(50% - 10px);
        border: 10px solid transparent;
        border-top: 10px solid #fff;
    }
    
    .bankrotkonsalt_popup__cnt.popup_main_opros form .rows__cnt {
        margin-top: auto;
    }
    
    
    
    
    
        
   .bankrotkonsalt_popup__cnt.popup_main_opros form .button-wrapper {
        display: flex;
        align-items: center;
        margin-top: auto;
        margin-bottom: 40px;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form .button-wrapper  div.action-back {
        border: none;
        padding: 0;
        height: 40px;
        width: 44px;
        margin-right: 20px;
        border-radius: 4px;
        cursor: pointer;
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form .button-wrapper  div.action-back svg {}
    .bankrotkonsalt_popup__cnt.popup_main_opros form .button-wrapper  div.action-back:hover svg rect {
         fill: #C3C3C3;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form .button-wrapper  div.action-next {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 8px 38px;
        width: 120px;
        height: 39px;
        background: #5381F6;
        border-radius: 8px;
        border: none;
        color: #fff;
        margin-right: 20px;
        cursor: pointer;
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form .button-wrapper  div.action-next:hover {
        background: #3563D8;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form .button-wrapper input[type=submit] {}
    .bankrotkonsalt_popup__cnt.popup_main_opros form .button-wrapper .submit-notice {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 14px;
        line-height: 145%;
        color: rgb(57 57 57 / 40%);
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form .button-wrapper br {
        display: none;
    }
    .main_opros__cnt {
        flex: 1;
    }
    .bankrotkonsalt_popup__cnt.popup_callback form .wpcf7-response-output {
        display: none!important;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form .wpcf7-response-output {
        margin: 0 0 40px;
        display: none!important;
    }
    .main_opros__cnt .opros_steps__cnt,
    .main_opros__cnt .opros_steps__wrap,
    .main_opros__cnt .wpcf7 {
        height: 100%;
    }
    .main_opros__cnt form {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        height: 100%;
    }
    
    
    
    
    
    .bankrotkonsalt_popup__cnt.popup_main_opros .main_opros_actions__cnt {
        margin-bottom: 40px;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .main_opros_actions__cnt .main_opros_actions__wrapper {
        display: flex;
        align-items: center;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .main_opros_actions__cnt .main_opros_actions__wrapper .action-back {
        border: none;
        padding: 0;
        height: 40px;
        width: 44px;
        margin-right: 20px;
        border-radius: 4px;
        cursor: pointer;
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .main_opros_actions__cnt .main_opros_actions__wrapper .action-back:hover svg rect {
        fill: #C3C3C3;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .main_opros_actions__cnt .main_opros_actions__wrapper .action-next {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 8px 38px;
        width: 120px;
        height: 39px;
        background: #5381F6;
        border-radius: 8px;
        border: none;
        color: #fff;
        margin-right: 20px;
        cursor: pointer;
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .main_opros_actions__cnt .main_opros_actions__wrapper .action-next:hover {
        background: #3563D8;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .main_opros_actions__cnt .main_opros_actions__wrapper .submit-notice {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 14px;
        line-height: 145%;
        color: rgb(57 57 57 / 40%);
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    .bankrotkonsalt_popup__cnt.popup_main_opros .opros_steps__cnt .row-wrapper .col-wrapper+.col-wrapper {
        margin-top: 50px;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .opros_steps__cnt .row-wrapper .col-wrapper .question-title {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 30px;
        line-height: 145%;
        color: #393939;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .opros_steps__cnt .row-wrapper .col-wrapper .variations .wpcf7-form-control {}
    .bankrotkonsalt_popup__cnt.popup_main_opros .opros_steps__cnt .row-wrapper .col-wrapper .variations .wpcf7-list-item {
        display: block;
        margin: 0;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .opros_steps__cnt .row-wrapper .col-wrapper .variations .wpcf7-list-item+.wpcf7-list-item {
        margin-top: 14px;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .opros_steps__cnt .row-wrapper .col-wrapper .variations .wpcf7-list-item .wpcf7-list-item-label {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        line-height: 145%;
        color: #393939;
        padding-left: 36px;
        position: relative;
        display: block;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .opros_steps__cnt .row-wrapper .col-wrapper .variations .wpcf7-list-item .wpcf7-list-item-label:before {
        content: " ";
        position: absolute;
        top: 12px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        left: 0;
        border: 1px solid #3c70f4;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .opros_steps__cnt .row-wrapper .col-wrapper .variations .wpcf7-list-item input[type=checkbox]:checked+.wpcf7-list-item-label:after {
        content: " ";
        position: absolute;
        left: 10px;
        top: 12px;
        width: 14px;
        height: 14px;
        background: -webkit-gradient(linear,left bottom,left top,from(rgba(255,255,255,0)),to(rgba(255,255,255,.2))),#3c70f4;
        background: -o-linear-gradient(bottom,rgba(255,255,255,0) 0,rgba(255,255,255,.2) 100%),#3c70f4;
        background: linear-gradient(360deg,rgba(255,255,255,0) 0,rgba(255,255,255,.2) 100%),#3c70f4;
        border-radius: 50%;
        -webkit-transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);      
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .opros_steps__cnt .row-wrapper .col-wrapper .variations .wpcf7-list-item label input[type=checkbox] {
        display: none;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .opros_steps__cnt .row-wrapper .col-wrapper .variations label {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 15px;
        line-height: 145%;
        color: #393939;
        display: block;
        margin-bottom: 5px;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .opros_steps__cnt .row-wrapper .col-wrapper .variations br {
        display: none;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form input[type=text],
    .bankrotkonsalt_popup__cnt.popup_main_opros form input[type=email],
    .bankrotkonsalt_popup__cnt.popup_main_opros form input[type=tel] {
        background: #F3F4F4;
        border-radius: 10px;
        display: block;
        padding: 14px;
        border: none;
        color: #393939;
        max-width: 100%;
        width: 100%;
        }
    .bankrotkonsalt_popup__cnt.popup_main_opros form input::-webkit-input-placeholder {
    	color: #39393966!important;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form input:-moz-placeholder {
    	color: #39393966!important;
       opacity:  1;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form input::-moz-placeholder {
    	color: #39393966!important;
       opacity:  1;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form input:-ms-input-placeholder {
    	color: #39393966!important;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form input::-ms-input-placeholder {
    	color: #39393966!important;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form input::placeholder {
    	color: #39393966!important;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .opros_steps__cnt .row-wrapper .col-wrapper .variations .wpcf7-list-item .wpcf7-list-item-label.zoom:before {
        -webkit-animation-name: zoom-radio;
        animation-name: zoom-radio;
        -webkit-animation-duration: .5s;
        animation-duration: .5s;
        -webkit-animation-fill-mode: none;
        animation-fill-mode: none;
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
    }
    @keyframes zoom-radio{
    	0%{-webkit-transform:translateY(-50%) scale(1);transform:translateY(-50%) scale(1)}
    	25%{-webkit-transform:translateY(-50%) scale(1.25);transform:translateY(-50%) scale(1.25)}
    	50%{-webkit-transform:translateY(-50%) scale(1.1);transform:translateY(-50%) scale(1.1)}
    	75%{-webkit-transform:translateY(-50%) scale(1.5);transform:translateY(-50%) scale(1.5)}
    	100%{-webkit-transform:translateY(-50%) scale(1);transform:translateY(-50%) scale(1)}
    }
    
    
    .bankrotkonsalt_popup__cnt.popup_main_opros form input.wpcf7-not-valid {
        border: 2px solid #E04E39!important;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form input.wpcf7-not-valid::-webkit-input-placeholder {
    	color: #E04E39!important;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form input.wpcf7-not-valid:-moz-placeholder {
        color: #E04E39!important;
        opacity:  1;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form input.wpcf7-not-valid::-moz-placeholder {
    	color: #E04E39!important;
        opacity:  1;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form input.wpcf7-not-valid:-ms-input-placeholder {
    	color: #E04E39!important;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form input.wpcf7-not-valid::-ms-input-placeholder {
    	color: #E04E39!important;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form input.wpcf7-not-valid::placeholder {
    	color: #E04E39!important;
    }
    
    .bankrotkonsalt_popup__cnt.popup_main_opros form input.error {
        border: 2px solid #E04E39!important;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form input.error::-webkit-input-placeholder {
    	color: #E04E39!important;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form input.error:-moz-placeholder {
        color: #E04E39!important;
        opacity:  1;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form input.error::-moz-placeholder {
    	color: #E04E39!important;
        opacity:  1;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form input.error:-ms-input-placeholder {
    	color: #E04E39!important;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form input.error::-ms-input-placeholder {
    	color: #E04E39!important;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros form input.error::placeholder {
    	color: #E04E39!important;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .action-back.disabled {
        cursor: not-allowed!important;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .action-back.disabled svg rect {
        fill: #C3C3C3!important;
    }
    
    .bankrotkonsalt_popup__cnt.popup_main_opros {
        position: relative;
    }
    .bankrotkonsalt_popup__cnt.popup_main_opros .popup__close {
        right: 0;
        left: initial;
        position: absolute;
        width: auto;
    }
    
    .bankrotkonsalt_popup__cnt.popup_main_opros .opros_steps__cnt .row-wrapper .col-wrapper .variations .checkbox_template_square .wpcf7-list-item .wpcf7-list-item-label:before {
        background: #FFFFFF;
        border: 1px solid #5381F6;
        border-radius: 4px;
    }

    .bankrotkonsalt_popup__cnt.popup_main_opros .opros_steps__cnt .row-wrapper .col-wrapper .variations .checkbox_template_square .wpcf7-list-item .wpcf7-list-item-label:after {
        background-image: url(/wp-content/themes/fpalaw/assets/img/icons/check.svg)!important;
        background-position: center!important;
        background-size: 10px!important;
        background-repeat: no-repeat!important;
        border-radius: 4px!important;
        width: 16px!important;
        height: 16px!important;
    }
        
    
    @media (max-width: 1024px) {
        .container {
            width: calc(100% - 48px);
            margin: 0 24px;
        }
        header .slogan {
            margin-left: 10px;
            font-size: 14px;
            max-width: 160px;
        }
        header a.header-btn {
            margin-left: 10px;
        }
        .landing-konslt-main .content .main-heading {
            font-size: 40px;
            margin-bottom: 10px;
        }
    }
    @media (max-width: 782px) {
        .container {
            width: calc(100% - 32px);
            margin: 0 16px;
        }
        footer .logo {
            display: none;
        }
        footer .footer-contacts .info {
            display: none;
        }
        footer .info.mobile {
            display: block;
        }
        footer .footer-row:first-child {
            align-items: flex-start;
        }
        footer .footer-row:first-child {
            padding-top: 60px;
        }
        footer .footer-row:last-child {
            padding-bottom: 60px;
        }
        .bankrotkonsalt_popup__cnt.popup_callback {
            padding: 32px 32px;
        }
        .bankrotkonsalt_popup__cnt.popup_main_opros {
            max-width: calc(100% - 64px);
            margin: 0 auto;
        }
        .bankrotkonsalt_popup__cnt.popup_main_opros .progress__cnt .progress-line {
            max-width: 100%;
        }
        .bankrotkonsalt_popup__cnt.popup_main_opros .opros_steps__cnt .row-wrapper .col-wrapper+.col-wrapper {
            margin-top: 40px;
        }
    }
    @media (max-width: 700px) {
        header .slogan {
            display: none;
        }
        .landing-konslt-main .content {
            padding-top: 40px;
            padding-bottom: 40px;
        }
    }
    @media (max-width: 600px) {
        header a.header-btn {
            padding: 10px 10px;
            font-size: 14px;
        }
        header .phone a .number__cnt .number {
            font-size: 14px;
        }
        header .phone a .number__cnt .time {
            font-size: 12px;
        }
    }
    
    @media (max-width: 540px) {
        header a.header-btn {
            display: none;
        }
        header .phone a svg {
            margin-right: 8px;
        }
        header .phone a .number__cnt .number {
            font-size: 14px;
        }
        .landing-konslt-main .content .main-heading {
            font-size: 30px;
        }
        .landing-konslt-main .content p.big {
            font-size: 20px;
        }
        .landing-konslt-main .content p.after-text {
            font-size: 14px;
        }
        footer .footer-contacts {
            display: none;
        }
        footer .footer-requisites {        
            max-width: 100%;
            text-align: center;
            margin-bottom: 20px;
        }
        footer .info.mobile p {
            font-size: 11px;
            text-align: center;
        }
        footer .footer-row:first-child {
            padding-top: 40px;
        }
        footer .footer-row:last-child {
            padding-bottom: 40px;
        }
        footer .footer-btn__cnt.mobile {
            display: block;
        }
        main .content .main-btn {
            width: 100%;
        }
    }
    @media (max-width: 440px) {
        .bankrotkonsalt_popup__cnt h3.modal__title {
            font-size: 18px;
        }
        .bankrotkonsalt_popup__cnt.popup_callback {
            padding: 24px 24px;
        }
        .bankrotkonsalt_popup__cnt.popup_main_opros .opros_steps__cnt .row-wrapper .col-wrapper .question-title {
            font-size: 24px;
        }
        .bankrotkonsalt_popup__cnt.popup_main_opros .opros_steps__cnt .row-wrapper .col-wrapper+.col-wrapper {
            margin-top: 20px;
        }
        .bankrotkonsalt_popup__cnt.popup_main_opros {
            max-width: calc(100% - 48px);
        }
        .bankrotkonsalt_popup__cnt.popup_main_opros form .button-wrapper .submit-notice {
            display: none;
        }
        .bankrotkonsalt_popup__cnt.popup_main_opros form .button-wrapper div.action-next {
            width: calc(100% - 64px);
            margin-right: 0;
        }
    }
    
    
    
    
    
    
</style>
<header>
    <div class="container">
        <div class="header-row-new hidden">
            <div class="header__top hidden">
                <div class="logo"></div>
                <div class="menu__info"></div>
                <ul class="copyright"></ul>
            </div>
            <div class="header__control hidden">
                <button class="toggle-menu toggle-menu--open hidden" aria-label="Открыть меню">
                    <span class="open"></span>
                </button>
                <button class="toggle-menu toggle-menu--close hide hidden" aria-label="Закрыть меню">
                    <span class="close"></span>
                </button>
                <a class="link link--phone phone-call hidden" href="tel:88005118139">
                    <span></span>
                </a>
            </div>
            <div class="header__bottom hidden">
                <div class="header__menu hidden">
                    <div class="logo"></div>
                </div>
                <div class="menu__info hidden"></div>
            </div>
            <div class="header__spec_info hidden">
                <div itemscope="" itemtype="http://schema.org/Organization">
                    <div class="header__social social hidden">
                        <div class="social__title">Мы в социальных сетях:</div>
                        <ul class="social__list">
                            <li class="social__item">
                                <a class="social__link" href="https://vk.com/fpalaw/" aria-label="Ссылка на vk.com" target="_blank" title="Вы переходите на нашу страницу сообщества в социальной сети Вконтакте" data-info="vk">
                                    <svg><use xlink:href="#vk"></use></svg>
                                </a>
                            </li>
                            <li class="social__item">
                                <a class="social__link" href="https://ok.ru/groupfpa" aria-label="Ссылка на ok.ru" target="_blank" title="Вы переходите на нашу страницу сообщества в социальной сети Одноклассники" data-info="ok">
                                    <svg><use xlink:href="#ok"></use></svg>
                                </a>
                            </li>
                            <li class="social__item">
                                <a class="social__link" href="https://www.youtube.com/channel/UCLajhno8_wifVnJ-9RP1TQw" aria-label="Ссылка на youtube.com" target="_blank" title="Вы переходите на наш канал на видеохостинге YouTube" data-info="youtube">
                                    <svg><use xlink:href="#youtube"></use></svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__links links-header">
                        <div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress" class="header__address address">
                            <span itemprop="addressLocality" class="address__city">Санкт-Петербург</span>
                            <span class="address__office">
                                <span class="address__office-metro">м. Сенная пл., </span> 
                                <span itemprop="streetAddress">ул. Ефимова, 4/А, оф. 326</span> 
                                <span itemprop="postalCode" class="address__index" hidden="">190031</span>
                            </span>
                        </div>
                        <a itemprop="telephone" class="link link--contact callback-btn" href="tel:88005118139">8 (800) 511 81 39</a>
                        <span class="link__note">Бесплатная горячая линия</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-row">
            <div class="logo">
                <a href="/">
                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 163 117"><path d="M47.407 3.995h69.85v44.66h4.02V0H43.4v48.655h4.007V3.995zM117.257 113.005H99.198V117h22.079v-14.76h-4.02v10.765zM47.407 102.24H43.4V117h22.08v-3.995H47.407V102.24zM3.933 69.72v-.828a4.35 4.35 0 01-1.488-.337 4.334 4.334 0 01-1.26-.842 3.834 3.834 0 01-.87-1.256A4.021 4.021 0 010 64.838c0-.621.11-1.174.328-1.658.218-.492.512-.91.882-1.256a4.135 4.135 0 011.26-.816c.471-.198.958-.31 1.463-.336v-.726h1.953v.726c.505.025.992.138 1.462.336.471.19.891.462 1.26.816.37.346.665.764.883 1.256.219.492.328 1.045.328 1.658 0 .596-.11 1.136-.328 1.619-.21.484-.5.902-.87 1.256s-.79.635-1.26.842c-.47.199-.962.31-1.475.337v.829H3.933zm.05-2.525v-4.727a2.135 2.135 0 00-.958.337 2.03 2.03 0 00-.706.803c-.168.337-.252.747-.252 1.23 0 .492.093.907.277 1.243.185.337.42.6.706.79.294.182.605.29.933.324zm1.853 0c.336-.034.647-.142.933-.324.294-.19.529-.453.705-.79.185-.345.278-.76.278-1.243 0-.483-.088-.893-.265-1.23a2.03 2.03 0 00-.706-.803c-.285-.19-.6-.302-.945-.337v4.727zM11.319 69.72v-9.195h2.067v6.178l3.857-6.178h1.929v9.196h-2.067v-6.14l-3.807 6.14h-1.979zM28.897 60.525v9.196H26.83v-3.77h-3.567v3.77h-2.067v-9.196h2.067v3.562h3.567v-3.562h2.067zM33.12 60.525h2.232l3.075 9.196h-2.118l-.693-2.06h-2.785l-.681 2.06h-2.118l3.088-9.196zm2.156 5.673l-1.046-3.536-1.072 3.536h2.118zM47.262 60.525v9.196h-2.067v-3.77h-3.568v3.77H39.56v-9.196h2.067v3.562h3.568v-3.562h2.067zM48.712 65.045c0-.552.101-1.1.303-1.644a4.696 4.696 0 01.882-1.477c.387-.44.857-.79 1.412-1.049.554-.267 1.185-.401 1.89-.401.832 0 1.56.185 2.181.557.622.37 1.084.854 1.386 1.45l-1.588 1.14a1.86 1.86 0 00-.542-.751c-.227-.19-.47-.32-.73-.389a2.641 2.641 0 00-.757-.117c-.53 0-.966.139-1.31.415-.345.276-.602.626-.77 1.049a3.481 3.481 0 00-.252 1.295c0 .483.097.941.29 1.373.193.423.466.764.82 1.023.352.259.768.388 1.247.388.252 0 .509-.038.77-.116.26-.086.5-.224.717-.415.227-.19.4-.436.517-.738l1.69 1.023a2.714 2.714 0 01-.87 1.166c-.404.31-.862.553-1.374.725a4.827 4.827 0 01-1.5.246c-.647 0-1.24-.133-1.778-.401a4.72 4.72 0 01-1.399-1.088 5.223 5.223 0 01-.92-1.528 4.982 4.982 0 01-.315-1.736zM61.956 69.798c-.664 0-1.269-.13-1.815-.388a4.632 4.632 0 01-1.4-1.062 4.884 4.884 0 01-.907-1.502 4.911 4.911 0 01-.315-1.736c0-.604.11-1.183.328-1.735a4.912 4.912 0 01.933-1.49c.403-.44.878-.785 1.424-1.036a4.243 4.243 0 011.79-.375 3.99 3.99 0 011.802.401 4.195 4.195 0 011.4 1.062c.394.45.697.954.907 1.515.21.553.315 1.118.315 1.697 0 .604-.114 1.187-.34 1.748a4.8 4.8 0 01-.933 1.49 4.513 4.513 0 01-1.412 1.036 4.16 4.16 0 01-1.777.375zm-2.332-4.662c0 .475.088.924.265 1.347.176.414.441.755.794 1.023.353.268.781.401 1.285.401.521 0 .954-.138 1.299-.414.353-.276.613-.626.781-1.049.177-.432.265-.876.265-1.334 0-.475-.092-.92-.277-1.334a2.375 2.375 0 00-.794-1.023c-.345-.259-.77-.389-1.273-.389-.521 0-.958.139-1.311.415a2.507 2.507 0 00-.782 1.036 3.546 3.546 0 00-.252 1.321zM75.263 67.364c0 .526-.138.967-.416 1.32a2.516 2.516 0 01-1.109.778 4.223 4.223 0 01-1.512.259h-4.361v-9.196h4.978c.42 0 .782.117 1.084.35.303.225.538.518.706.88.168.363.252.739.252 1.127 0 .432-.109.847-.328 1.244-.218.397-.537.69-.957.88.504.156.907.432 1.21.83.302.397.453.906.453 1.528zm-5.331-5.025v1.903h2.029a.89.89 0 00.605-.233c.177-.155.265-.397.265-.725 0-.302-.08-.535-.24-.7a.726.726 0 00-.554-.245h-2.105zm3.226 4.597c0-.285-.08-.527-.239-.725a.745.745 0 00-.605-.298h-2.382v2.007h2.294c.26 0 .479-.09.655-.272a.98.98 0 00.277-.712zM80.653 69.798c-.664 0-1.269-.13-1.815-.388a4.632 4.632 0 01-1.4-1.062 4.886 4.886 0 01-.907-1.502 4.913 4.913 0 01-.315-1.736c0-.604.11-1.183.328-1.735a4.912 4.912 0 01.933-1.49c.403-.44.878-.785 1.424-1.036a4.243 4.243 0 011.79-.375 3.99 3.99 0 011.802.401 4.195 4.195 0 011.4 1.062c.394.45.697.954.907 1.515.21.553.315 1.118.315 1.697 0 .604-.113 1.187-.34 1.748a4.8 4.8 0 01-.933 1.49 4.514 4.514 0 01-1.412 1.036 4.16 4.16 0 01-1.777.375zm-2.332-4.662c0 .475.088.924.265 1.347.176.414.441.755.794 1.023.353.268.782.401 1.286.401.52 0 .953-.138 1.298-.414.353-.276.613-.626.781-1.049.177-.432.265-.876.265-1.334 0-.475-.092-.92-.277-1.334a2.375 2.375 0 00-.794-1.023c-.345-.259-.77-.389-1.273-.389-.521 0-.958.139-1.311.415a2.506 2.506 0 00-.782 1.036 3.546 3.546 0 00-.252 1.321zM86.385 67.092v-1.865h3.882v1.865h-3.882zM92.095 69.72v-9.195h7.45v9.196h-2.068v-7.33h-3.315v7.33h-2.067zM101.554 69.72v-9.195h3.819c.428 0 .819.091 1.172.272.361.173.672.41.933.713a3.259 3.259 0 01.819 2.124 3.28 3.28 0 01-.365 1.515 3.084 3.084 0 01-.996 1.165c-.429.294-.929.44-1.5.44h-1.815v2.967h-2.067zm2.067-4.817h1.689c.244 0 .454-.108.63-.324.177-.216.265-.53.265-.945 0-.423-.105-.734-.315-.933-.202-.207-.421-.31-.656-.31h-1.613v2.512zM111.263 60.525h2.231l3.075 9.196h-2.117l-.693-2.06h-2.786l-.681 2.06h-2.117l3.088-9.196zm2.155 5.673l-1.046-3.536-1.071 3.536h2.117zM125.102 67.364c0 .526-.139.967-.416 1.32a2.517 2.517 0 01-1.11.778 4.215 4.215 0 01-1.512.259h-4.361v-9.196h4.979c.42 0 .781.117 1.084.35.302.225.537.518.705.88.168.363.253.739.253 1.127 0 .432-.11.847-.328 1.244a2.01 2.01 0 01-.958.88c.504.156.907.432 1.21.83.302.397.454.906.454 1.528zm-5.332-5.025v1.903h2.029a.888.888 0 00.605-.233c.177-.155.265-.397.265-.725 0-.302-.08-.535-.24-.7a.725.725 0 00-.554-.245h-2.105zm3.227 4.597c0-.285-.08-.527-.24-.725a.743.743 0 00-.605-.298h-2.382v2.007h2.294c.26 0 .479-.09.655-.272a.98.98 0 00.278-.712zM130.491 69.798c-.664 0-1.269-.13-1.815-.388a4.63 4.63 0 01-1.399-1.062 4.882 4.882 0 01-1.223-3.238c0-.604.11-1.183.328-1.735a4.915 4.915 0 01.933-1.49c.403-.44.878-.785 1.424-1.036a4.243 4.243 0 011.79-.375c.664 0 1.265.134 1.803.401a4.202 4.202 0 011.399 1.062c.395.45.697.954.907 1.515.21.553.315 1.118.315 1.697a4.62 4.62 0 01-.34 1.748 4.8 4.8 0 01-.933 1.49 4.513 4.513 0 01-1.411 1.036 4.164 4.164 0 01-1.778.375zm-2.332-4.662c0 .475.089.924.265 1.347.177.414.441.755.794 1.023.353.268.782.401 1.286.401.521 0 .954-.138 1.298-.414.353-.276.614-.626.782-1.049.176-.432.264-.876.264-1.334 0-.475-.092-.92-.277-1.334a2.37 2.37 0 00-.794-1.023c-.345-.259-.769-.389-1.273-.389-.521 0-.958.139-1.311.415a2.498 2.498 0 00-.781 1.036 3.529 3.529 0 00-.253 1.321zM143.799 67.364c0 .526-.139.967-.416 1.32a2.52 2.52 0 01-1.109.778 4.224 4.224 0 01-1.513.259H136.4v-9.196h4.979c.42 0 .781.117 1.084.35.302.225.537.518.706.88.168.363.252.739.252 1.127 0 .432-.11.847-.328 1.244a2.01 2.01 0 01-.958.88c.504.156.907.432 1.21.83.302.397.454.906.454 1.528zm-5.332-5.025v1.903h2.029a.888.888 0 00.605-.233c.177-.155.265-.397.265-.725 0-.302-.08-.535-.239-.7a.728.728 0 00-.555-.245h-2.105zm3.227 4.597c0-.285-.08-.527-.24-.725a.743.743 0 00-.605-.298h-2.382v2.007h2.294c.261 0 .479-.09.655-.272a.98.98 0 00.278-.712zM149.188 69.798c-.663 0-1.269-.13-1.815-.388a4.643 4.643 0 01-1.399-1.062 4.882 4.882 0 01-1.222-3.238c0-.604.109-1.183.327-1.735a4.915 4.915 0 01.933-1.49c.403-.44.878-.785 1.424-1.036a4.247 4.247 0 011.79-.375c.664 0 1.265.134 1.803.401a4.202 4.202 0 011.399 1.062c.395.45.697.954.907 1.515.21.553.315 1.118.315 1.697a4.62 4.62 0 01-.34 1.748 4.781 4.781 0 01-.933 1.49 4.513 4.513 0 01-1.411 1.036 4.164 4.164 0 01-1.778.375zm-2.331-4.662c0 .475.088.924.264 1.347.177.414.441.755.794 1.023.353.268.782.401 1.286.401.521 0 .954-.138 1.298-.414.353-.276.614-.626.782-1.049.176-.432.264-.876.264-1.334 0-.475-.092-.92-.277-1.334a2.37 2.37 0 00-.794-1.023c-.344-.259-.769-.389-1.273-.389-.521 0-.958.139-1.311.415a2.507 2.507 0 00-.781 1.036 3.548 3.548 0 00-.252 1.321zM155.147 69.72v-9.195h2.068v6.178l3.857-6.178H163v9.196h-2.067v-6.14l-3.807 6.14h-1.979zm3.933-9.687c-.504 0-.945-.086-1.323-.259a2.204 2.204 0 01-.883-.725c-.21-.31-.315-.66-.315-1.049h1.374c0 .268.092.5.277.7.194.198.488.297.883.297.369 0 .651-.095.844-.285a.937.937 0 00.303-.712h1.374c0 .389-.106.738-.316 1.049-.21.302-.508.544-.895.725-.378.173-.819.26-1.323.26zM57.929 82.727h2.23l3.076 9.195h-2.117l-.694-2.059H57.64l-.68 2.06H54.84l3.088-9.196zm2.155 5.673l-1.046-3.536-1.071 3.536h2.117zM69.94 91.922v-7.33h-2.218l-.05 1.412c-.043 1.191-.144 2.175-.303 2.953-.16.777-.391 1.39-.694 1.839a2.4 2.4 0 01-1.134.932c-.462.173-1.021.263-1.676.272v-1.839c.294 0 .55-.06.768-.181.219-.13.4-.363.542-.7.152-.336.27-.816.353-1.437.093-.63.156-1.45.19-2.46l.088-2.656h6.201v9.195H69.94zM74.014 91.922v-9.195h2.067V85.9h1.663c.992 0 1.765.268 2.32.803.563.535.844 1.265.844 2.189 0 .915-.269 1.649-.806 2.201-.538.553-1.286.83-2.244.83h-3.844zm2.067-1.735h1.474c.429 0 .744-.121.946-.363.201-.242.302-.552.302-.932 0-.328-.1-.618-.302-.868-.194-.259-.509-.389-.946-.389h-1.474v2.552zM82.076 91.922l2.117-3.6a2.494 2.494 0 01-1.235-1.01c-.294-.475-.441-1.032-.441-1.67 0-.562.126-1.063.378-1.503.252-.44.605-.786 1.059-1.036.453-.25.974-.376 1.563-.376h3.78v9.195h-2.066v-3.354h-.946l-1.878 3.354h-2.331zm3.705-5.154h1.45v-2.24h-1.425c-.31 0-.588.086-.831.258-.236.173-.353.458-.353.855 0 .389.109.673.327.855.227.181.505.272.832.272zM98.971 82.727v9.195h-2.067v-3.768h-3.567v3.768H91.27v-9.195h2.067v3.562h3.567v-3.562h2.067zM100.421 87.247c0-.553.101-1.1.303-1.645a4.71 4.71 0 01.882-1.476c.387-.44.857-.79 1.412-1.05.555-.267 1.185-.4 1.891-.4.832 0 1.558.185 2.18.556.622.371 1.084.855 1.387 1.45l-1.588 1.14a1.874 1.874 0 00-.542-.75 1.888 1.888 0 00-.732-.39 2.635 2.635 0 00-.756-.116c-.529 0-.966.138-1.311.415-.344.276-.6.626-.769 1.049a3.481 3.481 0 00-.252 1.295c0 .483.097.94.29 1.373.194.423.467.764.82 1.023a2.05 2.05 0 001.247.388c.253 0 .509-.039.769-.116.261-.087.5-.225.719-.415a1.79 1.79 0 00.517-.738l1.689 1.023a2.723 2.723 0 01-.87 1.166c-.403.31-.861.552-1.374.725a4.823 4.823 0 01-1.5.246 3.932 3.932 0 01-1.777-.401 4.713 4.713 0 01-1.399-1.088 5.21 5.21 0 01-.92-1.529 4.962 4.962 0 01-.316-1.735z" fill="#333"></path></svg>
                    </a>
            </div>
            <div class="slogan">
                <p>Решаем проблемы с кредитами с 2010 года</p>
            </div>
            <div class="phone">
                <a href="tel:88005118139">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 10.999H22C22 5.869 18.127 2 12.99 2V4C17.052 4 20 6.943 20 10.999Z" fill="#5381F6"/><path d="M13 8.00024C15.103 8.00024 16 8.89724 16 11.0002H18C18 7.77524 16.225 6.00024 13 6.00024V8.00024ZM16.422 13.4432C16.2299 13.2686 15.9774 13.1754 15.7178 13.1835C15.4583 13.1915 15.212 13.3001 15.031 13.4862L12.638 15.9472C12.062 15.8372 10.904 15.4762 9.71204 14.2872C8.52004 13.0942 8.15904 11.9332 8.05204 11.3612L10.511 8.96724C10.6975 8.78637 10.8062 8.54006 10.8142 8.28045C10.8222 8.02083 10.7289 7.76828 10.554 7.57624L6.85904 3.51324C6.68408 3.3206 6.44092 3.20374 6.18119 3.1875C5.92146 3.17125 5.66564 3.2569 5.46804 3.42624L3.29804 5.28724C3.12515 5.46075 3.02196 5.69169 3.00804 5.93624C2.99304 6.18624 2.70704 12.1082 7.29904 16.7022C11.305 20.7072 16.323 21.0002 17.705 21.0002C17.907 21.0002 18.031 20.9942 18.064 20.9922C18.3086 20.9786 18.5394 20.8749 18.712 20.7012L20.572 18.5302C20.7415 18.3328 20.8273 18.077 20.8113 17.8173C20.7952 17.5576 20.6785 17.3143 20.486 17.1392L16.422 13.4432Z" fill="#5381F6"/></svg>
                    <span class="number__cnt">
                       <span class="number">8 800 511 81 39</span>
                       <span class="time">Звонок бесплатный</span>
                    </span> 
                </a>
            </div>
            <a class="header-btn bankrotkonsalt-callback-form"><span>Перезвоните мне</span></a>
        </div>
    </div>
</header>