<style>
    .container {
        width: 100%;
        max-width: 1170px;
        margin: 0 auto;
    }
    .modal__title {
        font-size: 24px;
    }
    *:focus {
        outline: none;
    }
    .mobile-view {
        display: none;
    }
    .tablet-view {
        display: none;
    }
    .desktop-view {
        display: flex;
    }
    .header__mfc {
        width: 100%;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }
    header.mfc__gray-theme {
        position :relative;
    }
    header.mfc__gray-theme:before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 2;
        background-image: url(/wp-content/themes/fpalaw/assets/img/top/bg.png);
        background-size: cover;
        background-position: center bottom;
        background-repeat: no-repeat;
        opacity: .07;
    }
    header.mfc__gray-theme:after {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        background: -o-linear-gradient(315deg,#edf0f8 15%,#d7deef 85%);
        background: linear-gradient(135deg,#edf0f8 15%,#d7deef 85%); 
    }
    .header-row {
        display: grid;
        position: relative;
        z-index: 9999;
        justify-content: space-between;
        align-items: center;
        grid-template-rows: auto;
        grid-template-columns: repeat(2, 1fr);
        /*grid-template-columns: 130px calc(100% - 330px) 200px;*/
        grid-column-gap: 0;
        grid-row-gap: 0;
        padding: 140px 0 70px;
    }
    .header-row .contacts {
        margin-top: 0px;
        margin-bottom: 0px;
    }
    header .phone-call--show {
        margin-top: 0;
    }
    .yandex_partner img {
        margin: 0 auto;
    }
    
    .calculator-navbar {
        display: none!important;
    }

    header .yandex_partner .logo__cnt {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding: 10px 25px;
        background: #FFCC00;
        border-radius: 33px;
        max-width: fit-content;
        margin: 0 auto;
    }
    header .yandex_partner .logo__cnt .logo-row {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
    }
    header .yandex_partner .logo__cnt .logo-row .logo-col:first-child {
        
    }
    header .yandex_partner .logo__cnt .logo-row .logo-col .ya-logo img {
        border-right: 1px solid #000;
        padding-right: 10px;
    }
    header .yandex_partner .logo__cnt .logo-row .logo-col .bankruptcy8cost-stars__cnt {
        padding-left: 10px;
        display: flex;
        /*align-items: stretch;*/
    }
    header .yandex_partner .logo__cnt .logo-row .logo-col .bankruptcy8cost-stars__cnt .bankruptcy8cost-stars {
        display: flex;
        align-items: center;
    }
    header .yandex_partner .logo__cnt .logo-row .logo-col .bankruptcy8cost-stars__cnt .bankruptcy8cost-stars .count {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 120%;
        color: #000000;
        margin: 0 2px;
        height: 18px;
    }
    header .yandex_partner .logo__cnt .logo-row+.logo-row {
        margin-top: 4px;
    }
    header .yandex_partner .logo__cnt .logo-row .logo-col .bankruptcy8cost-stars__cnt .bankruptcy8cost-stars svg {
        margin-left: 4px;
    }
    header .yandex_partner .logo__cnt .logo-row .logo-col .slogan {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 10px;
        line-height: 145%;
        color: #000000;
    }
    .first_opros {
        position: relative;
        z-index: 999;
        padding-bottom: 80px;
    }
    .first_opros .notice {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 145%;
        display: block;
        margin-bottom: 25px;
    }
    .color_scheme_blue .notice {
        color: #5381F6;
    }
    .first_opros h1.opros__title {
       font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 45px;
        line-height: 145%; 
        margin-bottom: 45px;
    }
    .color_scheme_blue h1.opros__title {
        color: #393939;        
    } 
    .color_scheme_blue .text-accent {
        color: #5381F6;
    }
    .first_opros .text-accent-bold {
        font-weight: 700;
    }
    .first_opros .opros__block-btn {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 280px auto;
        grid-column-gap: 35px;
        grid-row-gap: 35px;
        margin-bottom: 60px;
        align-items: center;
    }
    .first_opros .opros__block-btn button {
        width: 100%;
        font-size: 16px;
        font-weight: 500;
        padding: 25px 0;
    }
    .first_opros .opros__hint {
        font-size: 18px;
        line-height: 145%;
    }
    .first_opros .opros__hint--big {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 22px;
        line-height: 145%;
        display: block;
    }
    .color_scheme_blue .opros__hint--big {
        color: #5381F6;
    }
    .first_opros .opros__hint--bold {
        font-weight: 700;
    }
    .first_opros .desc__title {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 22px;
        line-height: 145%;
        color: #5381F6;
    }
    .first_opros .desc_list {
        list-style: none;
        padding-left: 0;
    }
    .first_opros .desc_list li {
        padding-left: 16px;
        position: relative;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        line-height: 145%;
        color: #393939;
    }
    .first_opros .desc_list li+li {
        margin-top: 15px;
    }
    .first_opros .desc_list li::before {
        content: '';
        position: absolute;
        left: 0;
        top: 10px;
        width: 6px;
        height: 6px;
        background-color: #5381f6;
        border-radius: 50%;
    }
    .opros__btn {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        overflow: hidden;
        padding: 15px 30px;
        font-weight: 700;
        font-size: 18px;
        color: #fff;
        text-align: center;
        background: -webkit-gradient(linear,left bottom,left top,from(rgba(255,255,255,0)),to(rgba(255,255,255,.2))),#3c70f4;
        background: -o-linear-gradient(bottom,rgba(255,255,255,0) 0,rgba(255,255,255,.2) 100%),#3c70f4;
        background: linear-gradient(360deg,rgba(255,255,255,0) 0,rgba(255,255,255,.2) 100%),#3c70f4;
        -webkit-box-shadow: 0 4px 14px rgb(0 37 102 / 18%);
        box-shadow: 0 4px 14px rgb(0 37 102 / 18%);
        border: none;
        border-radius: 10px;
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
        cursor: pointer;
    }
    .opros__btn:hover {
        color: #fff;
        background: -webkit-gradient(linear,left bottom,left top,from(rgba(255,255,255,0)),to(rgba(255,255,255,.2))),#154ad0;
        background: -o-linear-gradient(bottom,rgba(255,255,255,0) 0,rgba(255,255,255,.2) 100%),#154ad0;
        background: linear-gradient(360deg,rgba(255,255,255,0) 0,rgba(255,255,255,.2) 100%),#154ad0;
        text-decoration: none;
    }
    header .logo__name {
        width: auto!important;
    }
    header .logo__name img{
        max-height: 122px;
        object-fit: contain;
    }
    @media (max-width: 1240px) {
        .container {
            width: 100%;
            padding: 0 32px;
        }
    }
    @media (max-width: 1180px) {
        .first_opros .notice {
            margin-bottom: 20px;  
            font-size: 18px;
        }
        .first_opros h1.opros__title {
            font-size: 36px;
            margin-bottom: 40px;
        }
        .first_opros .opros__block-btn button {
            font-size: 18px;
        }
        .first_opros .desc__title {
            font-size: 20px;
        }
        .first_opros .opros__hint--big {
            font-size: 20px;
        }
        header .header-row {
            padding: 100px 0 60px;
        }
    }
    @media (max-width: 992px) {
        header .address__office-metro {
            display: none;
        }
    }
    @media (max-width: 782px) {
        .container {
            width: 100%;
            padding: 0 24px;
        }
        .desktop-view {
            display: none;
        }
        .mobile-view {
            display: none;
        }
        .tablet-view {
            display: flex;
        }
        header .header-row {
            padding: 60px 0;
        }
        header .phone-call--show {
            margin-left: auto;
            margin-top: 0;
        }
        .header-row {
            /*grid-template-columns: 130px calc(100% - 180px) 44px;*/
            grid-template-columns: repeat(2, 1fr);
        }
        header .logo__name img{
            max-height: 90px;
        }
    }
    @media (max-width: 768px) {
        .first_opros .notice {
            font-size: 18px;        
        }
        .first_opros h1.opros__title {
            font-size: 24px;
            margin-bottom: 40px;
        }
        .first_opros .opros__block-btn {
            grid-template-columns: 100%;
            grid-column-gap: 10px;
            grid-row-gap: 10px;
            margin-bottom: 40px;            
        }
        .first_opros .opros__hint {
            font-size: 16px;
        }
        .first_opros .desc__title {
            font-size: 18px;
        }
        .first_opros .desc_list li {
            font-size: 16px;
        }
        .first_opros {
            padding-bottom: 40px;
        }
        .first_opros .opros__hint--big {
            font-size: 16px;
        }
    }
    @media (max-width: 540px) {
        header .yandex_partner .logo__cnt .logo-row .logo-col .ya-logo img {
            height: 18px;
            width: auto;
        }
        header .yandex_partner .logo__cnt {
            padding: 6px 25px 2px;
        }
        header .yandex_partner .logo__cnt .logo-row .logo-col .bankruptcy8cost-stars__cnt .bankruptcy8cost-stars svg {
            height: 12px;
            width: auto;
        }
        header .yandex_partner .logo__cnt .logo-row .logo-col .bankruptcy8cost-stars__cnt .bankruptcy8cost-stars .count {
            font-size: 14px;
            line-height: normal;
        }
        .first_opros .opros__block-btn {
            margin-bottom: 20px;            
        }
        .first_opros {
            padding-bottom: 20px;
        }
        .first_opros .opros__hint {
            font-size: 14px;
        }
        .first_opros .opros__block-btn button {
            padding: 15px 0;
        }
        .first_opros h1.opros__title {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .first_opros .notice {
            font-size: 14px;
        }
        .first_opros .desc_list li {
            font-size: 14px;
        }
        .first_opros .opros__hint--big {
            font-size: 14px;
        }
        header .header-row {
            padding: 40px 0;
        }
        .header-row {
            /*grid-template-columns: 90px calc(100% - 140px) 44px;*/
            grid-template-columns: repeat(2, 1fr);
        }
        header .yandex_partner .logo__cnt .logo-row .logo-col .bankruptcy8cost-stars__cnt .bankruptcy8cost-stars svg+svg {
            display: none;
        }
        .tablet-view {
            display: none;
        }
        .mobile-view {
            display: flex;
        }
    }
    @media (max-width: 440px) {
        .container {
            width: 100%;
            padding: 0 16px;
        }
        header .yandex_partner {
            margin-left: -120px;
            margin-top: -70px;
        }
        header .yandex_partner .logo__cnt .logo-row .logo-col .bankruptcy8cost-stars__cnt .bankruptcy8cost-stars svg+svg {
            display: block;
        }
    }
    @media (max-width: 380px) {
        header .yandex_partner {
            margin-left: -80px;
            margin-top: -70px;
        }
    }
    @media (max-width: 340px) {
        header .yandex_partner {
            margin-left: -60px;
            margin-top: -70px;
        }
    }
    
</style>
<svg xmlns="http://www.w3.org/2000/svg" class="visually-hidden">
    <symbol viewBox="0 0 48 30" id="vk_big">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M46.9061 2.5531C47.2357 1.4281 46.9061 0.600098 45.3199 0.600098H40.0715C38.7349 0.600098 38.1201 1.3111 37.7904 2.1031C37.7904 2.1031 35.1172 8.6821 31.339 12.9481C30.1182 14.1811 29.5569 14.5771 28.8886 14.5771C28.5589 14.5771 28.051 14.1811 28.051 13.0561V2.5531C28.051 1.2031 27.6767 0.600098 26.5718 0.600098H18.3204C17.4828 0.600098 16.9838 1.2301 16.9838 1.8151C16.9838 3.0931 18.8729 3.3901 19.069 6.9901V14.8021C19.069 16.5121 18.766 16.8271 18.0977 16.8271C16.3155 16.8271 11.9849 10.2211 9.41864 2.6611C8.90181 1.1941 8.3939 0.600098 7.04838 0.600098H1.79997C0.302965 0.600098 0 1.3111 0 2.1031C0 3.5071 1.78214 10.4821 8.29588 19.6981C12.6354 25.9891 18.7482 29.4001 24.3085 29.4001C27.65 29.4001 28.0599 28.6441 28.0599 27.3391C28.0599 21.3271 27.7569 20.7601 29.4321 20.7601C30.2074 20.7601 31.544 21.1561 34.6627 24.1891C38.227 27.7891 38.8151 29.4001 40.8111 29.4001H46.0595C47.5565 29.4001 48.3139 28.6441 47.8773 27.1501C46.8793 24.0091 40.1339 17.5471 39.8309 17.1151C39.0557 16.1071 39.2785 15.6571 39.8309 14.7571C39.8398 14.7481 46.2467 5.6401 46.9061 2.5531Z" fill="#5381F6"></path>
    </symbol>
    <symbol viewBox="0 0 48 48" id="telegram_big">
        <path d="M48 24C48 30.3652 45.4714 36.4697 40.9706 40.9706C36.4697 45.4714 30.3652 48 24 48C17.6348 48 11.5303 45.4714 7.02944 40.9706C2.52856 36.4697 0 30.3652 0 24C0 17.6348 2.52856 11.5303 7.02944 7.02944C11.5303 2.52856 17.6348 0 24 0C30.3652 0 36.4697 2.52856 40.9706 7.02944C45.4714 11.5303 48 17.6348 48 24ZM24.861 17.718C22.527 18.69 17.859 20.7 10.863 23.748C9.729 24.198 9.132 24.642 9.078 25.074C8.988 25.803 9.903 26.091 11.148 26.484L11.673 26.649C12.897 27.048 14.547 27.513 15.402 27.531C16.182 27.549 17.049 27.231 18.006 26.571C24.543 22.158 27.918 19.929 28.128 19.881C28.278 19.845 28.488 19.803 28.626 19.929C28.767 20.052 28.752 20.289 28.737 20.352C28.647 20.739 25.056 24.075 23.199 25.803C22.62 26.343 22.209 26.724 22.125 26.811C21.94 27 21.752 27.1861 21.561 27.369C20.421 28.467 19.569 29.289 21.606 30.633C22.587 31.281 23.373 31.812 24.156 32.346C25.008 32.928 25.86 33.507 26.964 34.233C27.243 34.413 27.513 34.608 27.774 34.794C28.767 35.502 29.664 36.138 30.765 36.036C31.407 35.976 32.07 35.376 32.406 33.576C33.201 29.325 34.764 20.118 35.124 16.323C35.146 16.0075 35.1329 15.6906 35.085 15.378C35.0568 15.1258 34.9347 14.8934 34.743 14.727C34.47 14.5386 34.1446 14.4409 33.813 14.448C32.913 14.463 31.524 14.946 24.861 17.718Z" fill="#5381F6"></path>
    </symbol>
    <symbol viewBox="0 0 30 48" id="ok_big">
        <path d="M15.0002 7.26001C17.9303 7.26001 20.3131 9.56047 20.3131 12.3892C20.3131 15.2152 17.9303 17.5162 15.0002 17.5162C12.073 17.5162 9.68727 15.2152 9.68727 12.3892C9.68727 9.56047 12.073 7.26001 15.0002 7.26001ZM15.0002 24.7735C22.0782 24.7735 27.8318 19.2188 27.8318 12.3892C27.8318 5.55683 22.0782 0 15.0002 0C7.92392 0 2.1686 5.55683 2.1686 12.3892C2.1686 19.2186 7.92392 24.7735 15.0002 24.7735ZM20.1917 34.8794C22.8039 34.3048 25.3232 33.3071 27.6431 31.8999C29.3988 30.8316 29.9282 28.5906 28.8217 26.8953C27.7166 25.1962 25.3967 24.6854 23.6379 25.7537C18.382 28.9454 11.6145 28.944 6.36143 25.7537C4.60232 24.6854 2.28273 25.1965 1.17873 26.8953C0.072185 28.592 0.59989 30.8316 2.35618 31.8999C4.67577 33.3055 7.19508 34.3048 9.80734 34.8794L2.63331 41.8051C1.16658 43.2224 1.16658 45.5199 2.63472 46.937C3.3695 47.645 4.33084 47.9998 5.29189 47.9998C6.25465 47.9998 7.2174 47.6452 7.95217 46.937L14.9985 40.1313L22.0511 46.937C23.5178 48.3543 25.8976 48.3543 27.3654 46.937C28.835 45.5199 28.835 43.2208 27.3654 41.8051C27.3657 41.8051 20.1917 34.8794 20.1917 34.8794Z" fill="#5381F6"></path>
    </symbol>
    <symbol viewBox="0 0 48 34" id="youtube_big">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M46.997 5.45721C46.445 3.38784 44.8185 1.75806 42.7533 1.20498C39.01 0.199951 24 0.199951 24 0.199951C24 0.199951 8.99006 0.199951 5.24671 1.20498C3.18155 1.75815 1.55505 3.38784 1.00301 5.45721C0 9.20808 0 17.0339 0 17.0339C0 17.0339 0 24.8597 1.00301 28.6106C1.55505 30.68 3.18155 32.2418 5.24671 32.7949C8.99006 33.8 24 33.8 24 33.8C24 33.8 39.0099 33.8 42.7533 32.7949C44.8185 32.2418 46.445 30.68 46.997 28.6106C48 24.8597 48 17.0339 48 17.0339C48 17.0339 48 9.20808 46.997 5.45721ZM19.0969 24.137V9.92651L31.6423 17.032L19.0969 24.137Z" fill="#5381F6"></path>
    </symbol>
    <symbol viewBox="0 0 48 48" id="yandex_ku">
        <rect width="48" height="48" rx="6" fill="#5381F6"></rect>
        <circle cx="21.75" cy="15.75" r="9.75" fill="white"></circle>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M34.0387 22.3657C33.474 22.264 32.8924 22.2109 32.2984 22.2109C26.9097 22.2109 22.5414 26.5793 22.5414 31.9679C22.5414 36.8293 26.0966 40.8602 30.7488 41.6026L34.0387 22.3657Z" fill="white"></path>
    </symbol>
    <symbol viewBox="0 0 48 48" id="yandex_dzen">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8722 0.431997C2.96621 1.20378 0.837117 3.58663 0.286823 16.756L0 23.615L5.78621 23.2969C18.6684 21.59 21.9499 19.5628 23.056 7.36983C23.353 4.09654 23.4677 1.08205 23.3109 0.670845C23.1617 0.278521 22.5883 0.0179326 21.8759 0.000889733C21.7905 -0.00115254 21.7032 0.000302427 21.6143 0.00544702C20.8381 0.0499432 17.8039 0.242249 14.8722 0.431997ZM24.3636 0.363636C23.9494 1.16508 24.8937 12.0373 25.5379 14.034C27.6762 20.6594 33.1222 23.436 44.0007 23.4463L48 23.4504L47.6599 17.6965C46.7755 2.75398 45.0673 1.03091 30.283 0.172691C28.6078 0.0754883 27.0682 0.0430723 25.9848 0.0701753C25.056 0.0934127 24.4194 0.256216 24.3636 0.363636ZM0.150265 29.3397C0.150265 39.2082 1.76154 44.1529 5.81818 46.1818C8.30821 47.4277 14.264 47.9898 20.0756 47.9959L23.5022 48V45.3016C23.5022 40.654 22.4854 34.1765 21.3864 31.8203C19.14 27.0065 15.1179 25.1438 5.86135 24.6323L0 24.3636L0.150265 29.3397ZM36.2519 25.0502C32.6598 25.6511 28.9301 27.7425 27.3513 30.0409C25.6395 32.5332 24.615 37.0268 24.4231 42.8855V47.9959L30.5455 48C44.2851 47.7693 46.8735 44.8372 47.6533 30.7385L48 24.4733L43.4926 24.5331C41.0137 24.5658 37.7556 24.7985 36.2519 25.0502Z" fill="#5381F6"></path>
        <path d="M5.78621 23.2969L0 23.615V24.3636L5.86135 24.6323C15.1179 25.1438 19.14 27.0065 21.3864 31.8203C22.4854 34.1765 23.5022 40.654 23.5022 45.3016V48L24.4231 47.9959V42.8855C24.615 37.0268 25.6395 32.5332 27.3513 30.0409C28.9301 27.7425 32.6598 25.6511 36.2519 25.0502C37.7556 24.7985 41.0137 24.5658 43.4926 24.5331L48 24.4733V23.4504L44.0007 23.4463C33.1222 23.436 27.6762 20.6594 25.5379 14.034C24.8937 12.0373 23.9494 1.16508 24.3636 0.363636C24.4194 0.256216 25.056 0.0934127 25.9848 0.0701753C24.2051 0.0309982 22.5373 -0.000559812 21.8759 0.000889733C22.5883 0.0179326 23.1617 0.278521 23.3109 0.670845C23.4677 1.08205 23.353 4.09654 23.056 7.36983C21.9499 19.5628 18.6684 22.5891 5.78621 23.2969Z" fill="white"></path>
    </symbol>

  <symbol viewBox="0 0 16 16" id="facebook">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 8.04865C16 3.60384 12.4179 0 8 0C3.58206 0 0 3.60384 0 8.04865C0 12.0656 2.92507 15.3955 6.75012 16V10.3758H4.71832V8.04865H6.75012V6.27501C6.75012 4.25802 7.94488 3.14314 9.7719 3.14314C10.6471 3.14314 11.5629 3.30046 11.5629 3.30046V5.28124H10.5538C9.56041 5.28124 9.24988 5.9015 9.24988 6.53872V8.04858H11.4684L11.114 10.3757H9.24981V15.9999C13.0749 15.3966 15.9999 12.0667 15.9999 8.04858L16 8.04865Z" fill="url(#paint0_linear)"></path>
    <defs>
      <linearGradient id="paint0_linear" x1="7.63158" y1="16" x2="7.63158" y2="-3.7901e-07" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#3C70F4"></stop>
        <stop offset="1" stop-color="#638DF6"></stop>
      </linearGradient>
    </defs>
  </symbol>
  <symbol viewBox="0 0 16 16" id="instagram">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.7016 0.0481342C5.55489 0.00921719 5.82734 0 8.00002 0C10.1727 0 10.4451 0.00921719 11.2984 0.0481342C12.1499 0.0869798 12.7314 0.222237 13.2403 0.419966C13.7664 0.624411 14.2125 0.897974 14.6573 1.34271C15.102 1.78744 15.3756 2.23363 15.58 2.7597C15.7778 3.26855 15.913 3.8501 15.9519 4.7016C15.9908 5.55489 16 5.82734 16 8.00002C16 10.1727 15.9908 10.4451 15.9519 11.2984C15.913 12.1499 15.7778 12.7314 15.58 13.2403C15.3756 13.7664 15.102 14.2125 14.6573 14.6573C14.2125 15.102 13.7664 15.3756 13.2403 15.58C12.7314 15.7778 12.1499 15.913 11.2984 15.9519C10.4451 15.9908 10.1727 16 8.00002 16C5.82734 16 5.55489 15.9908 4.7016 15.9519C3.8501 15.913 3.26855 15.7778 2.75968 15.58C2.23361 15.3756 1.78749 15.102 1.34273 14.6573C0.897997 14.2125 0.624435 13.7664 0.41999 13.2403C0.222213 12.7314 0.0870036 12.1499 0.0481104 11.2984C0.00919338 10.4451 0 10.1727 0 8.00002C0 5.82734 0.00919338 5.55489 0.0481104 4.7016C0.0870036 3.8501 0.222213 3.26855 0.41999 2.7597C0.624411 2.23363 0.897974 1.78744 1.34273 1.34271C1.78747 0.897974 2.23361 0.624411 2.75968 0.419966C3.26855 0.222237 3.8501 0.0869798 4.7016 0.0481342ZM11.2327 1.48809C10.3891 1.4496 10.1361 1.44143 8.00002 1.44143C5.86395 1.44143 5.61089 1.4496 4.76731 1.48809C3.98733 1.52365 3.56372 1.65397 3.28182 1.76353C2.90842 1.90867 2.6419 2.08201 2.36196 2.36198C2.08204 2.6419 1.90867 2.90839 1.76353 3.28184C1.65397 3.56372 1.52367 3.98731 1.48809 4.76731C1.4496 5.61089 1.44143 5.86392 1.44143 8C1.44143 10.1361 1.4496 10.3891 1.48809 11.2327C1.52367 12.0127 1.65397 12.4363 1.76353 12.7182C1.90867 13.0916 2.08204 13.3581 2.36198 13.638C2.6419 13.918 2.90839 14.0913 3.28184 14.2365C3.56372 14.346 3.98731 14.4764 4.76731 14.5119C5.61079 14.5504 5.86375 14.5586 8 14.5586C10.1362 14.5586 10.3893 14.5504 11.2327 14.5119C12.0127 14.4764 12.4363 14.346 12.7182 14.2365C13.0916 14.0913 13.3581 13.918 13.638 13.638C13.918 13.3581 14.0913 13.0916 14.2365 12.7182C14.346 12.4363 14.4764 12.0127 14.5119 11.2327C14.5504 10.3891 14.5586 10.1361 14.5586 8C14.5586 5.86392 14.5504 5.61089 14.5119 4.76731C14.4764 3.98733 14.346 3.56372 14.2365 3.28182C14.0913 2.90842 13.918 2.6419 13.638 2.36196C13.3581 2.08201 13.0916 1.90867 12.7182 1.76353C12.4363 1.65397 12.0127 1.52365 11.2327 1.48809ZM5.33275 7.99976C5.33275 9.47251 6.52665 10.6664 7.99945 10.6664C9.4722 10.6664 10.6661 9.47251 10.6661 7.99976C10.6661 6.52696 9.4722 5.33306 7.99945 5.33306C6.52665 5.33306 5.33275 6.52696 5.33275 7.99976ZM3.89132 7.99976C3.89132 5.73088 5.73057 3.89163 7.99945 3.89163C10.2683 3.89163 12.1075 5.73088 12.1075 7.99976C12.1075 10.2686 10.2683 12.1078 7.99945 12.1078C5.73057 12.1078 3.89132 10.2686 3.89132 7.99976ZM12.2698 4.68931C12.8 4.68931 13.2299 4.25953 13.2299 3.72932C13.2299 3.19913 12.8 2.7693 12.2698 2.7693C11.7397 2.7693 11.3098 3.19913 11.3098 3.72932C11.3098 4.25953 11.7397 4.68931 12.2698 4.68931Z" fill="url(#paint1_linear)"></path>
    <defs>
      <linearGradient id="paint1_linear" x1="7.63158" y1="16.0001" x2="7.63158" y2="-3.79011e-07" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#3C70F4"></stop>
        <stop offset="1" stop-color="#638DF6"></stop>
      </linearGradient>
    </defs>
  </symbol>
  <symbol viewBox="0 0 9.599887 16.000334" id="ok">
    <path d="M4.80008 2.42C5.77677 2.42 6.57105 3.18682 6.57105 4.12973C6.57105 5.07173 5.77677 5.83874 4.80008 5.83874C3.82433 5.83874 3.0291 5.07173 3.0291 4.12973C3.0291 3.18682 3.82433 2.42 4.80008 2.42ZM4.80008 8.25783C7.1594 8.25783 9.07728 6.40628 9.07728 4.12973C9.07728 1.85227 7.1594 0 4.80008 0C2.44132 0 0.522875 1.85227 0.522875 4.12973C0.522875 6.40619 2.44132 8.25783 4.80008 8.25783ZM6.53056 11.6265C7.40132 11.4349 8.24109 11.1024 9.01438 10.6333C9.59962 10.2772 9.77608 9.5302 9.40724 8.96511C9.03886 8.39874 8.26557 8.22847 7.67929 8.58456C5.92734 9.64847 3.6715 9.64801 1.92048 8.58456C1.33411 8.22847 0.560918 8.39883 0.192918 8.96511C-0.17593 9.53065 -2.84228e-05 10.2772 0.585401 10.6333C1.3586 11.1018 2.19837 11.4349 3.06912 11.6265L0.677778 13.935C0.188869 14.4075 0.188868 15.1733 0.678248 15.6457C0.923174 15.8817 1.24362 15.9999 1.56397 15.9999C1.88489 15.9999 2.20581 15.8817 2.45073 15.6457L4.79951 13.3771L7.15036 15.6457C7.63927 16.1181 8.43253 16.1181 8.92181 15.6457C9.41166 15.1733 9.41166 14.4069 8.92181 13.935C8.92191 13.935 6.53056 11.6265 6.53056 11.6265Z" fill="url(#paint2_linear)"></path>
    <defs>
      <linearGradient id="paint2_linear" x1="4.57895" y1="3.7901e-07" x2="4.57895" y2="16" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#638DF6"></stop>
        <stop offset="1" stop-color="#3C70F4"></stop>
      </linearGradient>
    </defs>
  </symbol>
  <symbol viewBox="0 0 16 14" id="twitter">
    <path d="M16 1.65642C15.4111 1.93751 14.7792 2.12814 14.1153 2.21324C14.7932 1.77597 15.3121 1.08239 15.5581 0.258473C14.9222 0.663419 14.2203 0.957461 13.4724 1.11686C12.8736 0.428658 12.0217 0 11.0769 0C9.26422 0 7.7945 1.5832 7.7945 3.53473C7.7945 3.81151 7.82349 4.08184 7.87949 4.34034C5.15201 4.19277 2.73347 2.78514 1.11477 0.646183C0.831818 1.16747 0.670851 1.77487 0.670851 2.42325C0.670851 3.64997 1.25075 4.73236 2.13059 5.36562C1.59268 5.34624 1.08677 5.18684 0.64387 4.92189V4.96605C0.64387 6.67849 1.77566 8.10766 3.27637 8.43294C3.00142 8.51264 2.71148 8.5568 2.41153 8.5568C2.19958 8.5568 1.99462 8.53418 1.79365 8.49109C2.21156 9.89659 3.42335 10.9187 4.85909 10.9467C3.73629 11.8944 2.32055 12.4577 0.782851 12.4577C0.517909 12.4577 0.256942 12.4405 0 12.4093C1.45273 13.4141 3.17742 14 5.03107 14C11.0689 14 14.3693 8.61281 14.3693 3.94077L14.3583 3.48305C15.0032 2.98759 15.5611 2.3651 16 1.65642Z" fill="url(#paint3_linear)"></path>
    <defs>
      <linearGradient id="paint3_linear" x1="7.63158" y1="14" x2="7.63158" y2="-3.31633e-07" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#3C70F4"></stop>
        <stop offset="1" stop-color="#638DF6"></stop>
      </linearGradient>
    </defs>
  </symbol>
  <symbol viewBox="0 0 15.999905 9.599999" id="vk">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.6354 0.651C15.7452 0.276 15.6354 0 15.1066 0H13.3572C12.9116 0 12.7067 0.237 12.5968 0.501C12.5968 0.501 11.7057 2.694 10.4463 4.116C10.0394 4.527 9.85229 4.659 9.62952 4.659C9.51962 4.659 9.35032 4.527 9.35032 4.152V0.651C9.35032 0.201 9.22557 0 8.85726 0H6.10682C5.82761 0 5.66128 0.21 5.66128 0.405C5.66128 0.831 6.29097 0.93 6.35632 2.13V4.734C6.35632 5.304 6.25533 5.409 6.03256 5.409C5.43851 5.409 3.99497 3.207 3.13955 0.687C2.96727 0.198 2.79797 0 2.34946 0H0.599989C0.100988 0 0 0.237 0 0.501C0 0.969 0.594048 3.294 2.76529 6.366C4.2118 8.463 6.24939 9.6 8.10282 9.6C9.21666 9.6 9.35329 9.348 9.35329 8.913C9.35329 6.909 9.2523 6.72 9.81071 6.72C10.0691 6.72 10.5147 6.852 11.5542 7.863C12.7423 9.063 12.9384 9.6 13.6037 9.6H15.3532C15.8522 9.6 16.1047 9.348 15.9591 8.85C15.6264 7.803 13.378 5.649 13.277 5.505C13.0186 5.169 13.0928 5.019 13.277 4.719C13.28 4.716 15.4156 1.68 15.6354 0.651Z" fill="url(#paint4_linear)"></path>
    <defs>
      <linearGradient id="paint4_linear" x1="7.63158" y1="9.6" x2="7.63158" y2="-2.27406e-07" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#3C70F4"></stop>
        <stop offset="1" stop-color="#638DF6"></stop>
      </linearGradient>
    </defs>
  </symbol>
  <symbol viewBox="0 0 16 11.2" id="youtube">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.6657 1.75242C15.4817 1.06263 14.9395 0.519371 14.2511 0.335008C13.0033 0 8 0 8 0C8 0 2.99669 0 1.7489 0.335008C1.06052 0.5194 0.518349 1.06263 0.334336 1.75242C0 3.00271 0 5.61132 0 5.61132C0 5.61132 0 8.21993 0.334336 9.47021C0.518349 10.16 1.06052 10.6806 1.7489 10.865C2.99669 11.2 8 11.2 8 11.2C8 11.2 13.0033 11.2 14.2511 10.865C14.9395 10.6806 15.4817 10.16 15.6657 9.47021C16 8.21993 16 5.61132 16 5.61132C16 5.61132 16 3.00271 15.6657 1.75242ZM6.36562 7.97957V3.24272L10.5474 5.6112L6.36562 7.97957Z" fill="url(#paint5_linear)"></path>
    <defs>
      <linearGradient id="paint5_linear" x1="7.63158" y1="11.2" x2="7.63158" y2="-2.65307e-07" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#3C70F4"></stop>
        <stop offset="1" stop-color="#638DF6"></stop>
      </linearGradient>
    </defs>
  </symbol>
</svg>
<header class="header__mfc mfc__gray-theme">
    <div class="container">
        <div class="header-row-new hidden">
            <div class="menu__info hidden">
                <div class="logo"></div>
            </div>
            <div class="header__menu hidden">
                <div class="logo"></div>
            </div>
            <div class="header__control hidden">
                <button class="toggle-menu toggle-menu--open hidden" aria-label="Открыть меню">
                    <span class="open"></span>
                </button>
                <button class="toggle-menu toggle-menu--close hide hidden" aria-label="Закрыть меню">
                    <span class="close"></span>
                </button>
                <a class="link link--phone phone-call hidden link--telephone--cnt" href="tel:88005118139">
                    <span></span>
                </a>
            </div>
            <div class="header__top hidden"></div>
            <div class="header__bottom hidden"></div>
        </div>
        <div class="header-row">
            <div class="logo">
                <a class="logo__name" href="/">
                    <picture>
                        <source srcset="/wp-content/themes/fpalaw/assets/img/mfc/fpa_mfc_ya-logo.png">
                        <img src="/wp-content/themes/fpalaw/assets/img/mfc/fpa_mfc_ya-logo.png" />
                    </picture>
                </a>
                <span itemprop="name" hidden="">Финансово-правовой альянс</span>
            </div>
            <div class="yandex_partner hidden">
                <div class="logo__cnt">
                    <div class="logo-row">
                        <div class="logo-col">
                            <picture class="ya-logo">
                                <img src="/wp-content/themes/fpalaw/assets/img/mfc/ya-logo.png" />
                            </picture>
                        </div>
                        <div class="logo-col">
                            <div class="bankruptcy8cost-stars__cnt">
                                <span class="bankruptcy8cost-stars">
                                    <span class="count">5</span>
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.01074 0L12.0107 6L18.0107 6.75L13.8907 11.37L15.0107 18L9.01074 15L3.01074 18L4.14074 11.37L0.0107422 6.75L6.01074 6L9.01074 0Z" fill="black"/></svg>
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.01074 0L12.0107 6L18.0107 6.75L13.8907 11.37L15.0107 18L9.01074 15L3.01074 18L4.14074 11.37L0.0107422 6.75L6.01074 6L9.01074 0Z" fill="black"/></svg>
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.01074 0L12.0107 6L18.0107 6.75L13.8907 11.37L15.0107 18L9.01074 15L3.01074 18L4.14074 11.37L0.0107422 6.75L6.01074 6L9.01074 0Z" fill="black"/></svg>
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.01074 0L12.0107 6L18.0107 6.75L13.8907 11.37L15.0107 18L9.01074 15L3.01074 18L4.14074 11.37L0.0107422 6.75L6.01074 6L9.01074 0Z" fill="black"/></svg>
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.01074 0L12.0107 6L18.0107 6.75L13.8907 11.37L15.0107 18L9.01074 15L3.01074 18L4.14074 11.37L0.0107422 6.75L6.01074 6L9.01074 0Z" fill="black"/></svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="logo-row">
                        <div class="logo-col">
                            <div class="slogan tablet-view desktop-view">Выбор пользователей 2020, 2021, 2022 год</div>
                            <div class="slogan mobile-view">664 оценки</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contacts header__links links-header desktop-view">
                <div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress" class="header__address address">
                    <span itemprop="addressLocality" class="address__city">Санкт-Петербург</span>
                    <span class="address__office">
                        <span class="address__office-metro">м. Сенная пл., </span> 
                        <span itemprop="streetAddress">ул. Ефимова, 4/А, оф. 326</span> 
                        <span itemprop="postalCode" class="address__index" hidden="">190031</span>
                    </span>
                </div>
                <a itemprop="telephone" class="link link--contact callback-btn link--telephone--cnt" href="tel:88005118139">8 (800) 511 81 39</a>
                <span class="link__note">Звонок бесплатный</span>
            </div>
            <a class="tablet-view mobile-view link link--phone phone-call phone-call--show link--telephone--cnt" href="tel:88005118139">
                <span></span>
            </a>
        </div>
        <div class="first_opros color_scheme_blue">
            <span class="notice">Тысячи клиентов уже списали долги с МФЦ</span>
            <h1 class="opros__title">Пройдите тест и узнайте, вправе ли вы списать долги через <span class="text-accent">МФЦ</span> и сколько это будет стоить?</h1>
            <div class="opros__block-btn">
                <button class="opros__btn" data-sms="19" data-popup-id="mfc-bankruptcy__number-1-test" data-color-schema="blue" onclick="ym(82134583, 'reachGoal', '1button'); return true;">Пройти тест</button>
                <span class="opros__hint">
                    <span class="opros__hint--big">Вам подходит?</span>
                    <span class=" opros__hint--bold text-accent">1&nbsp;из&nbsp;7</span>&nbsp;заявителей вправе пройти процедуру банкротства по льготным условиям или через МФЦ
                </span>
            </div>
            <p class="desc__title">Что вы получите после прохождения теста?</p>
            <ul class="desc_list">
                <li>Одновременный <span class="text-accent text-accent-bold">АВТОМАТИЧЕСКИЙ РАСЧЕТ</span> минимальной стоимости проведения банкротства в Арбитражном суде и МФЦ, в одной из крупнейших юридических компаний СПб и ЛО по банкротству физлиц и ИП;</li>
                <li><span class="text-accent text-accent-bold">ИНСТРУКЦИЮ</span> по прохождению процедуры банкротства в Арбитражном суде СПб и ЛО с описанием стадий и приложением образцов заявлений, необходимых для подачи в АС СПБ и ЛО.</li>
            </ul>
        </div>
    </div>
</header>