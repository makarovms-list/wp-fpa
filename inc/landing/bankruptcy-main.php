<style>
    *:focus {
        outline: none;
    }
    .row-cnt {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: calc(34% - 16px) calc(66% - 16px);
        grid-column-gap: 32px;
        grid-row-gap: 32px;
    }
    section.bankruptcy-main {
        padding: 140px 0;
    }
    .image-cnt {
        margin-bottom: 24px;
    }
    p.small {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 15px;
        line-height: 145%;
        color: #717B97;
        margin-bottom: 24px;
    }
    span.small {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 12px;
        line-height: 145%;
        color: #393939;
        text-align: center;
        display: block;
    }
    .row-cnt .col-cnt button.light-blue, 
    .row-cnt .col-cnt button.blue, 
    .row-cnt .col-cnt button.green, 
    .row-cnt .col-cnt button.pink {
        border-radius: 10px;
        border: none;
        display: block;
        width: 100%;
        padding: 15px 0;
        display: flex;
        justify-content: center;
        align-items: center;    
        cursor: pointer;
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
    }
    .row-cnt .col-cnt button.light-blue {
        background: linear-gradient(180deg, #2AABEE 0%, #229ED9 100%);
        box-shadow: 0px 4px 14px rgb(0 37 102 / 18%);        
    }
    .row-cnt .col-cnt button.light-blue:hover {
        background: linear-gradient(180deg, #0283C6 0%, #0480BB 100%);
    }
    .row-cnt .col-cnt button.blue {
        background: #0077FF;
        box-shadow: 0px 4px 14px rgba(0, 37, 102, 0.18);
    }
    .row-cnt .col-cnt button.blue:hover {
        background: #0045CD;
    }
    .row-cnt .col-cnt button.green {
        background: linear-gradient(0deg, #1FAF38 0%, #60D669 100%);
        box-shadow: 0px 4px 14px rgba(0, 37, 102, 0.18);
    }
    .row-cnt .col-cnt button.green:hover {
        background: linear-gradient(0deg, #008710 0%, #108619 100%);
    }
    .row-cnt .col-cnt button.pink {
        background: linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        box-shadow: 0px 4px 14px rgba(0, 37, 102, 0.18);
    }
    .row-cnt .col-cnt button.pink:hover {
        background: linear-gradient(180deg, #C9284E 0%, #C00733 100%);
    }
    .row-cnt .col-cnt button svg {
        margin-right: 8px;
    }
    .row-cnt .col-cnt button.light-blue span, 
    .row-cnt .col-cnt button.blue span, 
    .row-cnt .col-cnt button.green span, 
    .row-cnt .col-cnt button.pink span {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 14px;
        line-height: 145%;
        color: #FFFFFF;
    }
    .row-cnt .col-cnt button+button {
        margin-top: 20px;
    }
    .row-cnt .col-cnt .buttons {
        margin-bottom: 10px;
    }
    .row-cnt .col-cnt .bell-cnt {
        display: flex;
        align-items: center;
    }
    .row-cnt .col-cnt .bell-cnt svg {
        margin-right: 4px;
    }
    .row-cnt .col-cnt .bell-cnt span {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 14px;
        line-height: 145%;
        color: #393939;
    }
    .row-cnt .col-cnt .title-desc {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 145%;
        color: #393939;
        display: block;
    }
    .row-cnt .col-cnt .padding-bottom-40 {
        margin-bottom: 40px;
    }
    .row-cnt .col-cnt h1 {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 34px;
        line-height: 145%;
        color: #393939;
        margin: 4px 0;    
    }
    .row-cnt .col-cnt h2 {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 600;
        font-size: 24px;
        line-height: 145%;
        color: #393939;
    }
    .row-cnt .col-cnt p {
        font-family: 'Inter';
        font-style: normal;
        font-size: 16px;
        line-height: 145%;
        color: #393939;
    }
    .description-cnt {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: repeat(3, 1fr);
        grid-column-gap: 0;
        grid-row-gap: 0;
        justify-content: center;
        align-items: center;
        margin: 30px 0 50px;
    }
    .description-item {
        text-align: center;
        position: relative;
    }
    .description-item:before {
        content: "";
        position: absolute;
        right: 0;
        height: 34px;
        top: calc(50% - 17px);
        width: 1px;
        background: rgb(57 57 57 / 20%);
    }
    .description-item:last-child:before {
        display: none;
    }
    .description-item .bold {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 24px;
        line-height: 145%;
        color: #393939;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .description-item .thin {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 12px;
        line-height: 145%;
        color: #393939;
        text-transform: uppercase;
    }
    .row-cnt .col-cnt p+h2 {
        margin-top: 50px;
    }
    .reviews-head-cnt {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: auto 60px;
        grid-column-gap: 0;
        grid-row-gap: 0;
        border-bottom: 1px solid rgb(0 0 0 / 10%);
        margin-bottom: 28px;
    }
    .reviews-head-cnt h2 {
        margin-bottom: 10px;    
    }
    .reviews-head-cnt .star-cnt {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .reviews-head-cnt .star-cnt svg {
        margin-right: 4px;    
    }
    .reviews-head-cnt .star-cnt span {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 145%;
        color: #393939;    
    }
    .reviews-body-row {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 74px auto 52px;
        grid-column-gap: 10px;
        grid-row-gap: 10px;
        margin-bottom: 12px;
        align-items: center;
    }    
    .reviews-body-row .title {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 145%;
        color: #393939;
    }
    .reviews-body-row .line {
        background: #D9D9D9;
        border-radius: 32px;
        min-height: 7px;
        position: relative;    
    }
    .reviews-body-row .line span {
        position: absolute;
        border-radius: 32px;
        background: #FFCC01;
        height: 100%;
    }
    .reviews-body-row .count {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 145%;
        text-align: right;
        color: #393939;        
    }
    .reviews-form-cnt {
        background: #F7F7F7;
        border: 1px solid rgba(0, 0, 0, 0.05);
        border-radius: 8px;
        padding: 10px;
        margin-bottom: 20px;
    }
    .reviews-form-cnt .field-cnt {
        width: 100%;
    }
    .reviews-form-cnt .error input[type=text],
    .reviews-form-cnt .error textarea {
        border: 1px solid #dc3232;
    }
    .reviews-form-cnt .error span {
        color: #dc3232;
        font-weight: normal;
        display: block;
        font-size: 14px;
    }
    .reviews-form-cnt input[type=text],
    .reviews-form-cnt textarea {
        background: #FFFFFF;
        border-radius: 6px;
        display: block;
        width: 100%;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 14px;
        line-height: 145%;
        padding: 8px;
        border: 1px solid rgba(0, 0, 0, 0.05);
        color: #393939;        
    }
    .reviews-form-cnt input[type=submit] {
        background: linear-gradient(180deg, #2AABEE 0%, #229ED9 100%);
        box-shadow: 0px 4px 14px rgba(0, 37, 102, 0.18);
        border-radius: 6px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 145%;
        color: #FFFFFF;
        border: none;
        padding: 8px 16px;
        margin-left: auto;
        cursor: pointer;    
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
    }
    .reviews-form-cnt input[type=submit]:hover {
        /*opacity: 0.5;*/
        /*background: #0077FF;
        box-shadow: 0px 4px 14px rgba(0, 37, 102, 0.18);*/
        background: linear-gradient(180deg, #0283C6 0%, #0480BB 100%);
    }
    .reviews-body-cnt {
        margin-bottom: 20px;
    }
    .review-item-cnt .review-row {
        display: flex;
        align-items: center;
    }
    .review-item-cnt .review-row .review-col img {
        margin-right: 16px;
    }
    .review-item-cnt .review-row .review-col .name {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 600;
        font-size: 14px;
        line-height: 145%;
        color: #393939;
    }
    .review-item-cnt .review-col-row {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 16px 24px auto;
        grid-column-gap: 4px;
        grid-row-gap: 4px;
        align-items: center;
    }
    .review-item-cnt .review-col-row svg {
        width: 16px;
        height: 16px;
    }
    .review-item-cnt .review-col-row .star-count {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 12px;
        line-height: 145%;
        color: #393939;
        padding-right: 8px;
    }
    .review-item-cnt .review-col-row .date {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 12px;
        line-height: 145%;
        color: #393939;
    }
    .review-item-cnt .review-row+.review-row {
        margin-top: 10px;
    }
    .review-item-cnt .review-row p {
        font-weight: 400;
        font-size: 14px;
    }
    .book-pages-wrap {
        position: relative;
        padding-bottom: 50px;
        overflow: hidden;
    }
    .swiper-pagination-bullet {
        cursor: pointer;
    }
    .swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
        -webkit-transition: all .4s ease!important;
        -o-transition: all .4s ease!important;
        transition: all .4s ease!important;
    }
    .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main {
        width: 45px;
        border-radius: 8px;
    }
    .swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
        width: 200px!important;
    }
    .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next,
    .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next,
    .swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
        transform: scale(1)!important;
        background: #5381F6;
    }
    .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next,
    .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev-prev, 
    .swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
        opacity: 0.6;
    }
    .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next,
    .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev {
        opacity: 0.8!important;
    }
    .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main {
        opacity: 1!important;
    }
    
    .consultation-popup__cnt {
        display: flex;
        align-items: center;
        height: 100%;
    }
    .consultation-popup__cnt .consultation-wrapper {
        background: #FFFFFF;
        box-shadow: 0px 14px 34px rgb(0 29 104 / 12%);
        border-radius: 10px;
        padding: 35px;
        position: relative;
    }
    .consultation-popup__cnt .popup__close {
        position: absolute!important;
        top: -23px!important;
        right: 0!important;
    }
    .consultation-popup__cnt h3 {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 22px;
        line-height: 145%;
        color: #393939;
    }
    .consultation-popup__cnt input[type=text],
    .consultation-popup__cnt input[type=tel] {
        background: #F3F4F4;
        border-radius: 10px;
        width: 100%;
        padding: 10px;
        border: none;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 14px;
        line-height: 145%;
        color: #393939;    
    }
    .consultation-popup__cnt .row-wrapper {
        margin-bottom: 10px;
    }
    .tablet__cnt {
        display: none;
    }
    .mobile__cnt {
        display: none;
    }
    .col-cnt > .row-cnt {
        grid-template-columns: 100%;
    }
    .calculator-navbar--show {
        display: none;
    }
    .consultation-popup__cnt .success_message {
        text-align: center;
    }
    .consultation-popup__cnt .success_message svg {
        margin-top: 28px;
        margin-bottom: 28px;
    }
    .consultation-popup__cnt .success_message button {
        width: 100%;
    }
    .consultation-popup__cnt .consultation-wrapper .wpcf7-response-output {
        display: none;
    }
    .review-item-cnt+.review-item-cnt {
        margin-top: 36px;
    }
    
    
    .avatar-round-color {
        margin-right: 16px;
    }
    .avatar-round-color-wrap {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .avatar-round-color-wrap span {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 22px;
        line-height: 100%;
        text-align: center;
        color: #FFFFFF;
        text-transform: uppercase;
    }

    .avatar-color-1 {
        background: #FFFF00;
    }
    .avatar-color-2 {
        background: #B6D7A8;
    }
    .avatar-color-3 {
        background: #2036FF;
    }
    .avatar-color-4 {
        background: #A553F6;
    }
    .avatar-color-5 {
        background: #FF9040;
    }
    .avatar-color-6 {
        background: #3D85C6;
    }
    .avatar-color-7 {
        background: #CFE2F3;
    }
    .avatar-color-8 {
        background: #EA9999;
    }
    .avatar-color-9 {
        background: #EA9999;
    }
    .avatar-color-10 {
        background: #EC4A48;
    }
    .avatar-color-11 {
        background: #64D932;
    }
    .avatar-color-12 {
        background: #44D9FA;
    }
    .avatar-color-13 {
        background: #F653E6;
    }
    .avatar-color-14 {
        background: #38761D;
    }
    .avatar-color-15 {
        background: #4E358E;
    }
    .avatar-color-16 {
        background: #F9CB9C;
    }
    .avatar-color-17 {
        background: #D9D2E9;
    }
    .avatar-color-18 {
        background: #FFF2CC;
    }
    button.all-buttons {
        position: fixed;
        bottom: 20px;
        background: #5381F6;
        box-shadow: 0px 4px 14px rgb(0 37 102 / 18%);
        border-radius: 10px;
        width: calc(100% - 48px);
        border: none;
        padding: 15px;
        left: 24px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 14px;
        line-height: 145%;
        color: #FFFFFF;
        cursor: pointer;
        z-index: 9999999;
    }
    .reviews-form-succes-cnt {
        margin: 45px 0;
    }
    .reviews-form-succes-cnt .head-title {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 26px;
        line-height: 145%;
        text-align: center;
        color: #393939;
        margin-bottom: 10px;
    }
    .reviews-form-succes-cnt .head-subtitle {
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 160%;
        text-align: center;
        letter-spacing: 0.02em;
        color: #717B97;
        margin-bottom: 32px;
    }
    .reviews-form-succes-cnt .icon-cnt {
        text-align: center;
    }
    .image-cnt.view-content-link {
        position: relative;
    }
    .image-cnt.view-content-link a {
        position: absolute;
        bottom: 116px;
        background: rgba(57, 57, 57, 0.7);
        border: 1px solid rgba(57, 57, 57, 0.8);
        box-shadow: 0px 4px 14px rgb(0 37 102 / 18%);
        backdrop-filter: blur(4.5px);
        border-radius: 8px;
        padding: 6px 28px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 12px;
        line-height: 145%;
        color: #FFFFFF;
        /*
        left: calc(50% - 104px);
        */
        width: 180px;
        left: calc(50% - 90px);
        padding-left: 0;
        padding-right: 0;
        text-align: center;
        display: none;
    }
    .image-cnt.view-content-link:hover a {
        display: block;
    }
    .row-cnt .col-cnt p.small {
        font-size: 14px;
    }
    .view-new-five-reviews span {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 15px;
        line-height: 145%;
        text-align: center;
        color: #5381F6;
        display: block;
        padding: 40px 0 0;
        cursor: pointer;
    }
    
    .book-pages img {
        position: relative;
    }
    .book-pages a {
        position: relative;
        cursor: pointer;
    }
    .book-pages a:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3));
        border: 1.5px solid rgba(113, 123, 151, 0.15);
        border-radius: 8px;
        z-index: 999;
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
        opacity: 0;
    }
    .book-pages a:hover:before {
        opacity: 1;
    }
    .book-pages a:after {
        content: "";
        background: url(/wp-content/themes/fpalaw/assets/img/landing/zoom-combine.svg) center center no-repeat;
        position: absolute;
        width: calc(100% - 20px);
        height: calc(100% - 20px);
        top: 10px;
        bottom: 10px;
        left: 10px;
        right: 10px;
        background-size: contain;
        /*background-repeat: no-repeat;*/
        z-index: 9999;
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
        opacity: 0;
    }
    .book-pages a:hover:after {
        opacity: 1;
    }
    
    .image-popup {
        position: absolute;
        height:100%;
        width:100%;
        top:0;
        left:0;
        display:none;
        text-align:center;
    }
    .image-popup .popup_bg {
        position: fixed;
        z-index: 99999999;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: auto;
        height: auto;
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3));
    }
    .image-popup .popup_img {
        position: fixed;
        z-index: 999999999;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-47.5%);
        max-height: 90%;
        border-radius: 8px;
    }
    .image-popup .popup_img {
        pointer-events: none;
    }
    .lg-backdrop {
        background-color: rgb(0 0 0 / 65%)!important;
    }
    .lg-counter {
        color: #fff!important;
    }
    .lg-toolbar .lg-icon {
        color: #fff!important;
    }
    .lg-toolbar .lg-icon:hover {
        color: rgba(60,112,244,.8)!important;
    }
    .link--phone span {
        background-image: url(/wp-content/themes/fpalaw/assets/img/landing/phone.png);
        background-position: center;
        background-size: contain;
        background-repeat: no-repeat;
    }
    
    
    @media (max-width: 1500px) {
       .row-cnt .col-cnt p.small {
            font-size: 13px;
        }
    }
    @media (max-width: 992px) {
        section.bankruptcy-main {
            padding: 60px 0;
        }
        /*
        .container {
            max-width: calc(100% - 96px);
            padding: 0 10px;
        }
        */
        .row-cnt .col-cnt button {
            display: grid!important;
            grid-template-rows: auto;
            grid-template-columns: 20px auto;
            grid-column-gap: 10px;
            grid-row-gap: 10px;
            padding: 15px 15px!important;
            justify-content: flex-start!important;
        }
        .row-cnt .col-cnt button span {
            text-align: left;
            font-size: 12px;
        }
        
        .container > .row-cnt {
            grid-template-columns: 100%;
        }
        .row-cnt > .col-cnt:first-child {
            display: none;
        }
        .tablet__cnt {
            display: block;
        }
        .col-cnt > .row-cnt {
            grid-template-columns: calc(40% - 8px) calc(60% - 8px);
            grid-column-gap: 16px;
            grid-row-gap: 16px;
        }
        
        
        
        .row_3_cols {
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: repeat(2, 1fr);
            grid-column-gap: 16px;
            grid-row-gap: 16px;
            margin-bottom: 40px;
        }
        .row_3_cols .addition_item {
            background: #FFFFFF;
            border: 1px solid rgba(113, 123, 151, 0.15);
            border-radius: 10px;
            padding: 10px;
            position: relative;
            padding-bottom: 90px;
        }
        .row_3_cols .addition_item .title {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 145%;
            text-align: center;
            color: #393939;
            margin-bottom: 2px;
        }
        .row_3_cols .addition_item .subtitle {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 145%;
            text-align: center;
            color: #393939;
            margin-bottom: 20px;
        }
        .row_3_cols .addition_item .txt {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 145%;
            text-align: center;
            color: #393939;
            margin-bottom: 4px;
        }
        .row_3_cols .addition_item .line {
            background: #D9D9D9;
            border-radius: 16px;
            position: relative;
            height: 6px;
            width: 100%;
        }
        .row_3_cols .addition_item .line .percent {
            background: #5381F6;
            border-radius: 16px;
            height: 100%;
            position: absolute;
        }
        .row_3_cols .addition_item .bottom__cnt {
            position: absolute;
            bottom: 10px;
            width: calc(100% - 20px);
        }
        .tablet__cnt p.small {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-size: 15px;
            line-height: 145%;
            color: #717B97;            
        }

    }
    @media (max-width: 768px) {
        .row-cnt .col-cnt button {
            display: grid!important;
            grid-template-rows: auto;
            grid-template-columns: 20px auto;
            grid-column-gap: 10px;
            grid-row-gap: 10px;
            padding: 15px 15px!important;
            justify-content: center!important;
        }
        .popup-item__cnt:not(.calculator__cnt) .popup__close {
            top: -24px!important;
        }
        .view-new-five-reviews span {
            padding-top: 20px;
        }
    }
    @media (min-width: 540px) {
        button.all-buttons {
            display: none!important;
        }
    }
    @media (max-width: 540px) {
        section.bankruptcy-main {
            padding: 40px 0;
        }
        .row-cnt .col-cnt h1 {
            font-size: 28px;
        }
        .row-cnt .col-cnt .title-desc {
            font-size: 16px;
        }
        .mobile__cnt {
             display: block;
        }
        .tablet__cnt {
             display: none;
        }
        .col-cnt > .row-cnt {
            grid-template-columns: 100%;
        }
        /*
        p.small {
            font-size: 12px!important;
        }
        */
        p.small_2 {
            font-size: 12px!important;
            text-align: center;
            margin-bottom: 35px;
        }
        .addition_cnt {
            position: relative;
            padding-bottom: 50px;
        }
        .addition_cnt .addition_item {
            background: #FFFFFF;
            border: 1px solid rgba(113, 123, 151, 0.15);
            border-radius: 10px;
            padding: 12px;
        }
        .addition_cnt .addition_item .title {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 145%;
            text-align: center;
            color: #393939;
        }
        .addition_cnt .addition_item .subtitle {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 145%;
            text-align: center;
            color: #393939;
            margin-bottom: 20px;
        }
        .addition_cnt .addition_item .txt {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 145%;
            text-align: center;
            color: #393939;
            margin-bottom: 4px;
        }
        .addition_cnt .addition_item .line {
            background: #D9D9D9;
            border-radius: 16px;
            height: 6px;
            position: relative;
        }
        .addition_cnt .addition_item .line .percent {
            position: absolute;
            height: 100%;
            background: #5381F6;
            border-radius: 16px;
        }
        .consultation-popup__cnt h3 {
            font-size: 18px;
        }
        .review-item-cnt+.review-item-cnt {
            margin-top: 14px;
        }
        .addition_cnt .swiper-wrapper_1 {
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: calc(50% - 4px) calc(50% - 4px);
            grid-column-gap: 8px;
            grid-row-gap: 8px;
        }
        .addition_cnt .addition_item .title {
            white-space: nowrap;
        }
        .image-cnt {
            margin-bottom: 4px;
            position: relative;
        }
        .image-cnt a {
            position: absolute;
            bottom: 116px;
            background: rgba(57, 57, 57, 0.7);
            border: 1px solid rgba(57, 57, 57, 0.8);
            box-shadow: 0px 4px 14px rgb(0 37 102 / 18%);
            backdrop-filter: blur(4.5px);
            border-radius: 8px;
            padding: 6px 28px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-size: 12px;
            line-height: 145%;
            color: #FFFFFF;
            left: calc(50% - 104px);
        }
        /*
        .row-cnt .col-cnt p+h2 {
            margin-top: 20px;
        }
        .description-cnt {
            margin-bottom: 20px;
        }
        */
        
    }
</style>


<link type="text/css" rel="stylesheet" href="/wp-content/themes/fpalaw/js/lightGallery/css/lightgallery.css" />
<!--
<link type="text/css" rel="stylesheet" href="/wp-content/themes/fpalaw/js/lightGallery/css/lg-zoom.css" />
<link type="text/css" rel="stylesheet" href="/wp-content/themes/fpalaw/js/lightGallery/css/lg-thumbnail.css" />
-->

<script src="/wp-content/themes/fpalaw/js/lightGallery/lightgallery.min.js"></script>
<!--
<script src="/wp-content/themes/fpalaw/js/lightGallery/plugins/thumbnail/lg-thumbnail.min.js"></script>
<script src="/wp-content/themes/fpalaw/js/lightGallery/plugins/zoom/lg-zoom.min.js"></script>
-->
<!--
<script>
    lightGallery(document.getElementById('book-pages-light-gallery'), {
        thumbnail:true,
        animateThumb: false,
        showThumbByDefault: false
    }); 
</script>
-->

<script type="text/javascript">
    jQuery(document).ready(function() {
        /*
	    jQuery(".book-pages a").click(function(){
	  	    var img = jQuery(this).find('img');
		    var src = img.attr('src');
		    jQuery("body").append("<div class='image-popup'>"+ 
						 "<div class='popup_bg'></div>"+ 
						 "<img src='"+src+"' class='popup_img' />"+ 
						 "</div>");
		    jQuery(".image-popup").fadeIn(200);
		    jQuery(".popup_bg").click(function(){
			    jQuery(".image-popup").fadeOut(200);
                setTimeout(function() {
			          $(".image-popup").remove();
			    }, 200);
            });
	    });
        lightGallery(document.getElementById('book-pages-hidden'), {
            thumbnail:true,
            animateThumb: false,
            showThumbByDefault: false
        }); 
        */
        lightGallery(document.getElementById('book-pages-light-gallery'), {
            thumbnail:true,
            animateThumb: false,
            showThumbByDefault: false
        }); 
    });
</script>







<?php
    $reviews_content = get_field('reviews_content');
    /*print_r($reviews_content);*/
    
?>
<section class="bankruptcy-main">
    <div class="container">
        <div class="row-cnt">
            <div class="col-cnt">
                <div class="image-cnt view-content-link">
                    <img src="/wp-content/themes/fpalaw/assets/img/landing/bankruptcy-book-v1.png" />
                    <a href="/wp-content/uploads/2023/01/Книга-Банкротство-сжатая.pdf" target="_blank">Посмотреть содержание</a>
                </div>
                <p class="small">Выберите, в какой мессенджер вам отправить книгу</p>
                <div class="buttons">
                    <button class="light-blue" data-messenger="Telegram" data-message="Для того чтобы получить ссылку в Telegram введите пожалуйста ниже ваше имя и номер телефона">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.73723 9.45747C6.56997 7.34082 9.79181 5.94526 11.4027 5.27105C16.0076 3.3458 16.9632 3.01143 17.5874 3.0001C17.7247 2.99789 18.0303 3.032 18.2297 3.19411C18.3954 3.33083 18.4421 3.51572 18.4654 3.64554C18.4861 3.77522 18.5146 4.07079 18.4913 4.30152C18.2426 6.93692 17.1627 13.3322 16.6136 16.284C16.3831 17.5329 15.9247 17.9517 15.4818 17.9926C14.5184 18.0816 13.788 17.353 12.8557 16.7387C11.3975 15.777 10.574 15.1785 9.15728 14.2403C7.52047 13.1559 8.58232 12.5598 9.51469 11.5858C9.75814 11.3309 14.0004 7.45202 14.0807 7.1002C14.091 7.05619 14.1014 6.89213 14.003 6.80567C13.9072 6.71895 13.7647 6.74864 13.6611 6.77208C13.5135 6.80541 11.1852 8.35436 6.66839 11.4187C6.00797 11.8754 5.4097 12.0981 4.871 12.0864C4.28051 12.0736 3.14095 11.7499 2.29405 11.4733C1.2581 11.134 0.431918 10.9546 0.504435 10.3783C0.540694 10.0783 0.952487 9.77127 1.73723 9.45747Z" fill="white"/></svg>
                        <span>Получить бесплатно в Telegram</span>
                    </button>
                    <button class="blue" data-messenger="VKontakte" data-message="Для того чтобы получить ссылку в VK введите пожалуйста ниже ваше имя и номер телефона">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.9336 5.15625C19.0727 4.71563 18.9336 4.39531 18.3184 4.39531H16.2727C15.7566 4.39531 15.5184 4.67578 15.3793 4.97578C15.3793 4.97578 14.327 7.53828 12.8574 9.19961C12.3809 9.68008 12.1625 9.84023 11.9043 9.84023C11.7652 9.84023 11.5863 9.68008 11.5863 9.23984V5.13555C11.5863 4.61523 11.4277 4.375 10.9906 4.375H7.77344C7.45547 4.375 7.25703 4.61523 7.25703 4.85547C7.25703 5.35586 7.9918 5.47617 8.07109 6.87734V9.92188C8.07109 10.5824 7.95391 10.7031 7.69375 10.7031C6.99883 10.7031 5.31094 8.1207 4.29844 5.17812C4.10156 4.59531 3.90156 4.375 3.38516 4.375H1.31992C0.724219 4.375 0.625 4.65508 0.625 4.95547C0.625 5.49609 1.31992 8.21836 3.86172 11.8215C5.54961 14.2824 7.95234 15.6051 10.1168 15.6051C11.4277 15.6051 11.5863 15.3047 11.5863 14.8043V12.9426C11.5863 12.3422 11.7055 12.2422 12.1227 12.2422C12.4203 12.2422 12.9566 12.402 14.168 13.5832C15.5578 14.9844 15.7961 15.625 16.5707 15.625H18.616C19.2117 15.625 19.4898 15.3246 19.3309 14.7441C19.1523 14.1637 18.477 13.323 17.6031 12.3223C17.1266 11.7621 16.4117 11.1414 16.1934 10.841C15.8957 10.4406 15.975 10.2805 16.1934 9.92031C16.1734 9.92031 18.6758 6.35703 18.9336 5.15469" fill="white"/></svg>
                        <span>Получить бесплатно в VKontakte</span>
                    </button>
                    <button class="green" data-messenger="WhatsApp" data-message="Для того чтобы получить ссылку в WhatsApp введите пожалуйста ниже ваше имя и номер телефона">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_8967_151833)"><path d="M17.0513 2.9063C16.1333 1.98166 15.0408 1.24861 13.8372 0.7497C12.6336 0.250793 11.3429 -0.00402321 10.04 4.8025e-05C4.57877 4.8025e-05 0.13377 4.44505 0.13377 9.91005C0.13377 11.6563 0.591269 13.3638 1.45752 14.8638L0.0512695 20L5.30502 18.6213C6.75747 19.4125 8.38482 19.8276 10.0388 19.8288H10.0425C15.5038 19.8288 19.9525 15.3838 19.9525 9.9188C19.9558 8.61635 19.701 7.32614 19.2029 6.12273C18.7047 4.91932 17.973 3.82655 17.05 2.90755L17.0513 2.9063ZM10.0425 18.1563C8.56647 18.1566 7.11751 17.7598 5.84752 17.0075L5.54627 16.8275L2.42877 17.6438L3.26127 14.605L3.06627 14.2925C2.23847 12.981 1.80101 11.461 1.80502 9.91005C1.80767 7.72516 2.67704 5.63057 4.22234 4.08597C5.76765 2.54137 7.86263 1.67295 10.0475 1.6713C12.2463 1.6713 14.3175 2.5313 15.8713 4.08505C16.638 4.84903 17.2458 5.75738 17.6594 6.75762C18.0731 7.75786 18.2844 8.83015 18.2813 9.91255C18.2775 14.4588 14.5825 18.155 10.0425 18.155V18.1563ZM14.5588 11.985C14.3125 11.86 13.0938 11.2625 12.8675 11.18C12.6413 11.0975 12.4763 11.055 12.3088 11.305C12.145 11.5513 11.6688 12.11 11.5238 12.2775C11.3788 12.4413 11.235 12.465 10.9888 12.34C10.7425 12.215 9.94127 11.9538 8.99627 11.11C8.26127 10.4538 7.76252 9.6413 7.61752 9.39505C7.47252 9.1488 7.60127 9.01255 7.72752 8.8913C7.84127 8.7813 7.97377 8.60255 8.09877 8.45755C8.22377 8.31255 8.26252 8.2113 8.34502 8.0438C8.42752 7.88005 8.38752 7.73505 8.32502 7.61005C8.26252 7.48505 7.76627 6.2663 7.56377 5.77005C7.36502 5.28505 7.15752 5.35255 7.00502 5.3438C6.86002 5.3363 6.69627 5.3363 6.53252 5.3363C6.36877 5.3363 6.09877 5.3988 5.87252 5.64505C5.64627 5.8913 5.00502 6.49255 5.00502 7.7113C5.00502 8.93005 5.89127 10.1063 6.01627 10.2738C6.14127 10.4375 7.76252 12.9413 10.2463 14.0125C10.8363 14.2663 11.2975 14.4188 11.6563 14.5363C12.25 14.7238 12.7888 14.6963 13.215 14.6338C13.6913 14.5638 14.68 14.0363 14.8875 13.4575C15.095 12.8788 15.095 12.3838 15.0325 12.2813C14.9738 12.1713 14.81 12.11 14.56 11.9838L14.5588 11.985Z" fill="white"/></g><defs><clipPath id="clip0_8967_151833"><rect width="20" height="20" fill="white"/></clipPath></defs></svg>
                        <span>Получить бесплатно в WhatsApp</span>
                    </button>
                    <button class="pink" data-messenger="SMS" data-message="Для того чтобы получить ссылку в SMS введите пожалуйста ниже ваше имя и номер телефона">
                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 16.6666L4.08333 13.4166C3.14704 12.0318 2.80833 10.3919 3.13018 8.80182C3.45204 7.21173 4.41255 5.77963 5.83314 4.7718C7.25373 3.76397 9.03772 3.24898 10.8534 3.3226C12.6691 3.39622 14.3929 4.05343 15.7044 5.17204C17.0159 6.29064 17.8257 7.79452 17.9834 9.40406C18.1411 11.0136 17.6358 12.6193 16.5616 13.9225C15.4873 15.2258 13.9172 16.1379 12.1432 16.4894C10.3691 16.8408 8.51184 16.6077 6.91667 15.8332L3 16.6666Z" fill="white" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span>Получить ссылку в SMS</span>
                    </button>
                </div>
                <span class="small">Электронная книга абсолютно бесплатна</span>
            </div>
            <div class="col-cnt">
                <div class="row-cnt">
                    <div class="sub-col-cnt">
                        <div class="image-cnt tablet__cnt view-content-link">
                            <img src="/wp-content/themes/fpalaw/assets/img/landing/bankruptcy-book-v1.png" />
                            <a href="/wp-content/uploads/2023/01/Книга-Банкротство-сжатая.pdf" target="_blank">Посмотреть содержание</a>
                        </div>
                    </div>
                    <div class="sub-col-cnt">
                        <div class="bell-cnt">
                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.5" width="20" height="20" rx="10" fill="#EC4A48"/><path d="M10 13.3747L12.4249 14.9093C12.869 15.1906 13.4124 14.7748 13.2956 14.249L12.6528 11.3632L14.7973 9.41892C15.1888 9.0643 14.9784 8.39176 14.4642 8.34896L11.6419 8.09829L10.5376 5.37143C10.3389 4.87619 9.66109 4.87619 9.46243 5.37143L8.35806 8.09217L5.5358 8.34285C5.0216 8.38565 4.81124 9.05819 5.20273 9.4128L7.34719 11.3571L6.70444 14.2429C6.58757 14.7687 7.13099 15.1845 7.57507 14.9032L10 13.3747Z" fill="white"/></svg>
                            <span>Бестселлер 2022 г.</span>
                        </div>
                        <h1>САМОСТОЯТЕЛЬНОЕ БАНКРОТСТВО</h1>
                        <span class="title-desc padding-bottom-40">Без юристов и адвокатов, за 15 шагов</span>
                        <div class="mobile__cnt">
                            <div class="image-cnt">
                                <img src="/wp-content/themes/fpalaw/assets/img/landing/bankruptcy-book-v1.png" />
                                <a href="/wp-content/uploads/2023/01/Книга-Банкротство-сжатая.pdf" target="_blank">Посмотреть содержание</a>
                            </div>
                            <p class="small_2">Материалы актуальны на 9 января 2023 года</p>
                            <div class="addition_cnt">
                                <div class="swiper-wrapper_1">
                                    <div class="swiper-slide_1 addition_item">
                                        <div class="image_cnt">
                                            <img src="/wp-content/themes/fpalaw/assets/img/landing/bankruptcy-book-additional1.png" />
                                        </div>
                                        <div class="bottom__cnt">
                                            <div class="title">Электронная книга</div>
                                            <div class="subtitle">Бесплатно</div>
                                            <div class="txt">Скачано 18 920 раз</div>
                                            <div class="line">
                                                <span class="percent" style="width: 98%;"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide_2 addition_item">
                                        <div class="image_cnt">
                                            <img style="padding-bottom: 30%;" src="/wp-content/themes/fpalaw/assets/img/landing/bankruptcy-book-additional2.png" />
                                        </div>
                                        <div class="bottom__cnt">
                                            <div class="title">Бумажная книга</div>
                                            <div class="subtitle">400 ₽</div>
                                            <div class="txt">Осталось 191 книга</div>
                                            <div class="line">
                                                <span class="percent" style="width: 84%;"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--
                                    <div class="swiper-slide_3 addition_item">
                                        <div class="image_cnt">
                                            <img src="/wp-content/themes/fpalaw/assets/img/landing/bankruptcy-book-additional1.png" />
                                        </div>
                                        <div class="bottom__cnt">
                                            <div class="title">Аудиокнига</div>
                                            <div class="subtitle">1 400 ₽</div>
                                            <div class="txt">Прослушано 240 раз</div>
                                            <div class="line">
                                                <span class="percent" style="width: 32%;"></span>
                                            </div>
                                        </div>
                                    </div>
                                    -->
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <p class="small">Выберите, в какой мессенджер вам отправить книгу</p>
                            <div class="buttons" id="all-buttons-cnt">
                                <button class="light-blue" data-messenger="Telegram" data-message="Для того чтобы получить ссылку в Telegram введите пожалуйста ниже ваше имя и номер телефона">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.73723 9.45747C6.56997 7.34082 9.79181 5.94526 11.4027 5.27105C16.0076 3.3458 16.9632 3.01143 17.5874 3.0001C17.7247 2.99789 18.0303 3.032 18.2297 3.19411C18.3954 3.33083 18.4421 3.51572 18.4654 3.64554C18.4861 3.77522 18.5146 4.07079 18.4913 4.30152C18.2426 6.93692 17.1627 13.3322 16.6136 16.284C16.3831 17.5329 15.9247 17.9517 15.4818 17.9926C14.5184 18.0816 13.788 17.353 12.8557 16.7387C11.3975 15.777 10.574 15.1785 9.15728 14.2403C7.52047 13.1559 8.58232 12.5598 9.51469 11.5858C9.75814 11.3309 14.0004 7.45202 14.0807 7.1002C14.091 7.05619 14.1014 6.89213 14.003 6.80567C13.9072 6.71895 13.7647 6.74864 13.6611 6.77208C13.5135 6.80541 11.1852 8.35436 6.66839 11.4187C6.00797 11.8754 5.4097 12.0981 4.871 12.0864C4.28051 12.0736 3.14095 11.7499 2.29405 11.4733C1.2581 11.134 0.431918 10.9546 0.504435 10.3783C0.540694 10.0783 0.952487 9.77127 1.73723 9.45747Z" fill="white"/></svg>
                                    <span>Получить бесплатно в Telegram</span>
                                </button>
                                <button class="blue" data-messenger="VKontakte" data-message="Для того чтобы получить ссылку в VK введите пожалуйста ниже ваше имя и номер телефона">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.9336 5.15625C19.0727 4.71563 18.9336 4.39531 18.3184 4.39531H16.2727C15.7566 4.39531 15.5184 4.67578 15.3793 4.97578C15.3793 4.97578 14.327 7.53828 12.8574 9.19961C12.3809 9.68008 12.1625 9.84023 11.9043 9.84023C11.7652 9.84023 11.5863 9.68008 11.5863 9.23984V5.13555C11.5863 4.61523 11.4277 4.375 10.9906 4.375H7.77344C7.45547 4.375 7.25703 4.61523 7.25703 4.85547C7.25703 5.35586 7.9918 5.47617 8.07109 6.87734V9.92188C8.07109 10.5824 7.95391 10.7031 7.69375 10.7031C6.99883 10.7031 5.31094 8.1207 4.29844 5.17812C4.10156 4.59531 3.90156 4.375 3.38516 4.375H1.31992C0.724219 4.375 0.625 4.65508 0.625 4.95547C0.625 5.49609 1.31992 8.21836 3.86172 11.8215C5.54961 14.2824 7.95234 15.6051 10.1168 15.6051C11.4277 15.6051 11.5863 15.3047 11.5863 14.8043V12.9426C11.5863 12.3422 11.7055 12.2422 12.1227 12.2422C12.4203 12.2422 12.9566 12.402 14.168 13.5832C15.5578 14.9844 15.7961 15.625 16.5707 15.625H18.616C19.2117 15.625 19.4898 15.3246 19.3309 14.7441C19.1523 14.1637 18.477 13.323 17.6031 12.3223C17.1266 11.7621 16.4117 11.1414 16.1934 10.841C15.8957 10.4406 15.975 10.2805 16.1934 9.92031C16.1734 9.92031 18.6758 6.35703 18.9336 5.15469" fill="white"/></svg>
                                    <span>Получить бесплатно в VKontakte</span>
                                </button>
                                <button class="green" data-messenger="WhatsApp" data-message="Для того чтобы получить ссылку в WhatsApp введите пожалуйста ниже ваше имя и номер телефона">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_8967_151833)"><path d="M17.0513 2.9063C16.1333 1.98166 15.0408 1.24861 13.8372 0.7497C12.6336 0.250793 11.3429 -0.00402321 10.04 4.8025e-05C4.57877 4.8025e-05 0.13377 4.44505 0.13377 9.91005C0.13377 11.6563 0.591269 13.3638 1.45752 14.8638L0.0512695 20L5.30502 18.6213C6.75747 19.4125 8.38482 19.8276 10.0388 19.8288H10.0425C15.5038 19.8288 19.9525 15.3838 19.9525 9.9188C19.9558 8.61635 19.701 7.32614 19.2029 6.12273C18.7047 4.91932 17.973 3.82655 17.05 2.90755L17.0513 2.9063ZM10.0425 18.1563C8.56647 18.1566 7.11751 17.7598 5.84752 17.0075L5.54627 16.8275L2.42877 17.6438L3.26127 14.605L3.06627 14.2925C2.23847 12.981 1.80101 11.461 1.80502 9.91005C1.80767 7.72516 2.67704 5.63057 4.22234 4.08597C5.76765 2.54137 7.86263 1.67295 10.0475 1.6713C12.2463 1.6713 14.3175 2.5313 15.8713 4.08505C16.638 4.84903 17.2458 5.75738 17.6594 6.75762C18.0731 7.75786 18.2844 8.83015 18.2813 9.91255C18.2775 14.4588 14.5825 18.155 10.0425 18.155V18.1563ZM14.5588 11.985C14.3125 11.86 13.0938 11.2625 12.8675 11.18C12.6413 11.0975 12.4763 11.055 12.3088 11.305C12.145 11.5513 11.6688 12.11 11.5238 12.2775C11.3788 12.4413 11.235 12.465 10.9888 12.34C10.7425 12.215 9.94127 11.9538 8.99627 11.11C8.26127 10.4538 7.76252 9.6413 7.61752 9.39505C7.47252 9.1488 7.60127 9.01255 7.72752 8.8913C7.84127 8.7813 7.97377 8.60255 8.09877 8.45755C8.22377 8.31255 8.26252 8.2113 8.34502 8.0438C8.42752 7.88005 8.38752 7.73505 8.32502 7.61005C8.26252 7.48505 7.76627 6.2663 7.56377 5.77005C7.36502 5.28505 7.15752 5.35255 7.00502 5.3438C6.86002 5.3363 6.69627 5.3363 6.53252 5.3363C6.36877 5.3363 6.09877 5.3988 5.87252 5.64505C5.64627 5.8913 5.00502 6.49255 5.00502 7.7113C5.00502 8.93005 5.89127 10.1063 6.01627 10.2738C6.14127 10.4375 7.76252 12.9413 10.2463 14.0125C10.8363 14.2663 11.2975 14.4188 11.6563 14.5363C12.25 14.7238 12.7888 14.6963 13.215 14.6338C13.6913 14.5638 14.68 14.0363 14.8875 13.4575C15.095 12.8788 15.095 12.3838 15.0325 12.2813C14.9738 12.1713 14.81 12.11 14.56 11.9838L14.5588 11.985Z" fill="white"/></g><defs><clipPath id="clip0_8967_151833"><rect width="20" height="20" fill="white"/></clipPath></defs></svg>
                                    <span>Получить бесплатно в WhatsApp</span>
                                </button>
                                <button class="pink" data-messenger="SMS" data-message="Для того чтобы получить ссылку в SMS введите пожалуйста ниже ваше имя и номер телефона">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 16.6666L4.08333 13.4166C3.14704 12.0318 2.80833 10.3919 3.13018 8.80182C3.45204 7.21173 4.41255 5.77963 5.83314 4.7718C7.25373 3.76397 9.03772 3.24898 10.8534 3.3226C12.6691 3.39622 14.3929 4.05343 15.7044 5.17204C17.0159 6.29064 17.8257 7.79452 17.9834 9.40406C18.1411 11.0136 17.6358 12.6193 16.5616 13.9225C15.4873 15.2258 13.9172 16.1379 12.1432 16.4894C10.3691 16.8408 8.51184 16.6077 6.91667 15.8332L3 16.6666Z" fill="white" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    <span>Получить ссылку в SMS</span>
                                </button>
                            </div>
                            <span class="small" style="padding-bottom: 40px;">Электронная книга абсолютно бесплатна</span>
                            
                        </div>
                        <h2>О Книге</h2>
                        <p>Перед вами — подробная и понятная каждому книга о том, как набраться смелости начать путь к избавлению от всех долгов. Банкротство граждан существует на рынке юридических услуг уже 8 лет, но многие россияне все еще относятся к этой процедуре, как к чему-то трудному и почти невозможному. Эта книга расскажет вам просто о сложном, объяснит основные понятия, поможет разобраться в процедуре и, главное, поможет сделать первый шаг к списанию задолженностей. Поверьте — вы точно сможете сделать это самостоятельно и успешно избавиться от долговой нагрузки.</p>
                        
                    </div>
                </div>
                <div class="description-cnt">
                    <div class="description-item">
                        <div class="bold">69</div>
                        <div class="thin">СТРАНИЦ(Ы)</div>
                    </div>
                    <div class="description-item">
                        <div class="bold">2022</div>
                        <div class="thin">ГОД ИЗДАНИЯ</div>
                    </div>
                    <div class="description-item">
                        <div class="bold">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13 18.7091L17.4959 21.4282C18.3192 21.9266 19.3267 21.1899 19.11 20.2582L17.9184 15.1449L21.8942 11.6999C22.62 11.0716 22.23 9.87991 21.2767 9.80408L16.0442 9.35991L13.9967 4.52824C13.6284 3.65074 12.3717 3.65074 12.0034 4.52824L9.95585 9.34908L4.72335 9.79324C3.77002 9.86908 3.38002 11.0607 4.10585 11.6891L8.08168 15.1341L6.89002 20.2474C6.67335 21.1791 7.68085 21.9157 8.50418 21.4174L13 18.7091Z" fill="#FFCC01"/></svg>
                            <span><?=$reviews_content['main_count']; ?></span>
                        </div>
                        <div class="thin"><?=$reviews_content['reviews_count']; ?></div>
                    </div>
                </div>
                <div class="tablet__cnt">
                    <div class="row_3_cols">
                        <div class="addition_item">
                            <div class="image_cnt">
                                <img src="/wp-content/themes/fpalaw/assets/img/landing/bankruptcy-book-additional1.png" />
                            </div>
                            <div class="bottom__cnt">
                                <div class="title">Электронная книга</div>
                                <div class="subtitle">Бесплатно</div>
                                <div class="txt">Скачано 18 920 раз</div>
                                <div class="line">
                                    <span class="percent" style="width: 98%;"></span>
                                </div>
                            </div>
                        </div>
                        <div class="addition_item">
                            <div class="image_cnt">
                                <img src="/wp-content/themes/fpalaw/assets/img/landing/bankruptcy-book-additional2.png" />
                            </div>
                            <div class="bottom__cnt">
                                <div class="title">Бумажная книга</div>
                                <div class="subtitle">400 ₽</div>
                                <div class="txt">Осталось 191 книга</div>
                                <div class="line">
                                    <span class="percent" style="width: 84%;"></span>
                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="addition_item">
                            <div class="image_cnt">
                                <img src="/wp-content/themes/fpalaw/assets/img/landing/bankruptcy-book-additional1.png" />
                            </div>
                            <div class="bottom__cnt">
                                <div class="title">Аудиокнига</div>
                                <div class="subtitle">1 400 ₽</div>
                                <div class="txt">Прослушано 240 раз</div>
                                <div class="line">
                                    <span class="percent" style="width: 32%;"></span>
                                </div>
                            </div>
                        </div>
                        -->
                    </div>
                    <p class="small">Выберите, в какой мессенджер вам отправить книгу</p>
                    <div class="buttons">
                        <button class="light-blue" data-messenger="Telegram" data-message="Для того чтобы получить ссылку в Telegram введите пожалуйста ниже ваше имя и номер телефона">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.73723 9.45747C6.56997 7.34082 9.79181 5.94526 11.4027 5.27105C16.0076 3.3458 16.9632 3.01143 17.5874 3.0001C17.7247 2.99789 18.0303 3.032 18.2297 3.19411C18.3954 3.33083 18.4421 3.51572 18.4654 3.64554C18.4861 3.77522 18.5146 4.07079 18.4913 4.30152C18.2426 6.93692 17.1627 13.3322 16.6136 16.284C16.3831 17.5329 15.9247 17.9517 15.4818 17.9926C14.5184 18.0816 13.788 17.353 12.8557 16.7387C11.3975 15.777 10.574 15.1785 9.15728 14.2403C7.52047 13.1559 8.58232 12.5598 9.51469 11.5858C9.75814 11.3309 14.0004 7.45202 14.0807 7.1002C14.091 7.05619 14.1014 6.89213 14.003 6.80567C13.9072 6.71895 13.7647 6.74864 13.6611 6.77208C13.5135 6.80541 11.1852 8.35436 6.66839 11.4187C6.00797 11.8754 5.4097 12.0981 4.871 12.0864C4.28051 12.0736 3.14095 11.7499 2.29405 11.4733C1.2581 11.134 0.431918 10.9546 0.504435 10.3783C0.540694 10.0783 0.952487 9.77127 1.73723 9.45747Z" fill="white"/></svg>
                            <span>Получить бесплатно в Telegram</span>
                        </button>
                        <button class="blue" data-messenger="VKontakte" data-message="Для того чтобы получить ссылку в VK введите пожалуйста ниже ваше имя и номер телефона">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.9336 5.15625C19.0727 4.71563 18.9336 4.39531 18.3184 4.39531H16.2727C15.7566 4.39531 15.5184 4.67578 15.3793 4.97578C15.3793 4.97578 14.327 7.53828 12.8574 9.19961C12.3809 9.68008 12.1625 9.84023 11.9043 9.84023C11.7652 9.84023 11.5863 9.68008 11.5863 9.23984V5.13555C11.5863 4.61523 11.4277 4.375 10.9906 4.375H7.77344C7.45547 4.375 7.25703 4.61523 7.25703 4.85547C7.25703 5.35586 7.9918 5.47617 8.07109 6.87734V9.92188C8.07109 10.5824 7.95391 10.7031 7.69375 10.7031C6.99883 10.7031 5.31094 8.1207 4.29844 5.17812C4.10156 4.59531 3.90156 4.375 3.38516 4.375H1.31992C0.724219 4.375 0.625 4.65508 0.625 4.95547C0.625 5.49609 1.31992 8.21836 3.86172 11.8215C5.54961 14.2824 7.95234 15.6051 10.1168 15.6051C11.4277 15.6051 11.5863 15.3047 11.5863 14.8043V12.9426C11.5863 12.3422 11.7055 12.2422 12.1227 12.2422C12.4203 12.2422 12.9566 12.402 14.168 13.5832C15.5578 14.9844 15.7961 15.625 16.5707 15.625H18.616C19.2117 15.625 19.4898 15.3246 19.3309 14.7441C19.1523 14.1637 18.477 13.323 17.6031 12.3223C17.1266 11.7621 16.4117 11.1414 16.1934 10.841C15.8957 10.4406 15.975 10.2805 16.1934 9.92031C16.1734 9.92031 18.6758 6.35703 18.9336 5.15469" fill="white"/></svg>
                            <span>Получить бесплатно в VKontakte</span>
                        </button>
                        <button class="green" data-messenger="WhatsApp" data-message="Для того чтобы получить ссылку в WhatsApp введите пожалуйста ниже ваше имя и номер телефона">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_8967_151833)"><path d="M17.0513 2.9063C16.1333 1.98166 15.0408 1.24861 13.8372 0.7497C12.6336 0.250793 11.3429 -0.00402321 10.04 4.8025e-05C4.57877 4.8025e-05 0.13377 4.44505 0.13377 9.91005C0.13377 11.6563 0.591269 13.3638 1.45752 14.8638L0.0512695 20L5.30502 18.6213C6.75747 19.4125 8.38482 19.8276 10.0388 19.8288H10.0425C15.5038 19.8288 19.9525 15.3838 19.9525 9.9188C19.9558 8.61635 19.701 7.32614 19.2029 6.12273C18.7047 4.91932 17.973 3.82655 17.05 2.90755L17.0513 2.9063ZM10.0425 18.1563C8.56647 18.1566 7.11751 17.7598 5.84752 17.0075L5.54627 16.8275L2.42877 17.6438L3.26127 14.605L3.06627 14.2925C2.23847 12.981 1.80101 11.461 1.80502 9.91005C1.80767 7.72516 2.67704 5.63057 4.22234 4.08597C5.76765 2.54137 7.86263 1.67295 10.0475 1.6713C12.2463 1.6713 14.3175 2.5313 15.8713 4.08505C16.638 4.84903 17.2458 5.75738 17.6594 6.75762C18.0731 7.75786 18.2844 8.83015 18.2813 9.91255C18.2775 14.4588 14.5825 18.155 10.0425 18.155V18.1563ZM14.5588 11.985C14.3125 11.86 13.0938 11.2625 12.8675 11.18C12.6413 11.0975 12.4763 11.055 12.3088 11.305C12.145 11.5513 11.6688 12.11 11.5238 12.2775C11.3788 12.4413 11.235 12.465 10.9888 12.34C10.7425 12.215 9.94127 11.9538 8.99627 11.11C8.26127 10.4538 7.76252 9.6413 7.61752 9.39505C7.47252 9.1488 7.60127 9.01255 7.72752 8.8913C7.84127 8.7813 7.97377 8.60255 8.09877 8.45755C8.22377 8.31255 8.26252 8.2113 8.34502 8.0438C8.42752 7.88005 8.38752 7.73505 8.32502 7.61005C8.26252 7.48505 7.76627 6.2663 7.56377 5.77005C7.36502 5.28505 7.15752 5.35255 7.00502 5.3438C6.86002 5.3363 6.69627 5.3363 6.53252 5.3363C6.36877 5.3363 6.09877 5.3988 5.87252 5.64505C5.64627 5.8913 5.00502 6.49255 5.00502 7.7113C5.00502 8.93005 5.89127 10.1063 6.01627 10.2738C6.14127 10.4375 7.76252 12.9413 10.2463 14.0125C10.8363 14.2663 11.2975 14.4188 11.6563 14.5363C12.25 14.7238 12.7888 14.6963 13.215 14.6338C13.6913 14.5638 14.68 14.0363 14.8875 13.4575C15.095 12.8788 15.095 12.3838 15.0325 12.2813C14.9738 12.1713 14.81 12.11 14.56 11.9838L14.5588 11.985Z" fill="white"/></g><defs><clipPath id="clip0_8967_151833"><rect width="20" height="20" fill="white"/></clipPath></defs></svg>
                            <span>Получить бесплатно в WhatsApp</span>
                        </button>
                        <button class="pink" data-messenger="SMS" data-message="Для того чтобы получить ссылку в SMS введите пожалуйста ниже ваше имя и номер телефона">
                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 16.6666L4.08333 13.4166C3.14704 12.0318 2.80833 10.3919 3.13018 8.80182C3.45204 7.21173 4.41255 5.77963 5.83314 4.7718C7.25373 3.76397 9.03772 3.24898 10.8534 3.3226C12.6691 3.39622 14.3929 4.05343 15.7044 5.17204C17.0159 6.29064 17.8257 7.79452 17.9834 9.40406C18.1411 11.0136 17.6358 12.6193 16.5616 13.9225C15.4873 15.2258 13.9172 16.1379 12.1432 16.4894C10.3691 16.8408 8.51184 16.6077 6.91667 15.8332L3 16.6666Z" fill="white" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            <span>Получить ссылку в SMS</span>
                        </button>
                    </div>
                    <span class="small">Электронная книга абсолютно бесплатна</span>
                </div>
                <h2>От автора</h2>
                <p>Если вы читаете эту книгу, знайте — вы именно сейчас готовы изменить свою жизнь и обрести финансовую свободу. Моя цель — распутать большой клубок из трудных названий и юридических терминов, развеять мифы и сомнения. Смысл книги: банкротство под силу каждому и не обязательно быть юристом для того, чтоб пройти процедуру.</p>
                <p>Мне, как юристу, удалось поставить себя на место простого гражданина и описать весь процесс от лица должника: простыми словами. В результате я представляю вам легкую, удобную в своей простоте и максимально понятную пошаговую инструкцию. Действуя по ней, вы без страха начнете и без труда завершите ваш путь к свободе от долгов.</p>
                <h2>Содержание</h2>
                <div class="book-pages-wrap">
                    <div class="swiper book-pages">
                        <div class="swiper-wrapper" id="book-pages-light-gallery">
                            <div class="swiper-slide" data-src="/wp-content/themes/fpalaw/assets/img/landing/A4-4.jpg">
                                <a data-href="/wp-content/themes/fpalaw/assets/img/landing/A4-4.jpg" data-num="1">
                                    <img src="/wp-content/themes/fpalaw/assets/img/landing/A4-4.jpg" />
                                </a>
                            </div>
                            <div class="swiper-slide" data-src="/wp-content/themes/fpalaw/assets/img/landing/A4-5.jpg">
                                <a data-href="/wp-content/themes/fpalaw/assets/img/landing/A4-5.jpg" data-num="2">
                                    <img src="/wp-content/themes/fpalaw/assets/img/landing/A4-5.jpg" />
                                </a>
                            </div>
                            <div class="swiper-slide" data-src="/wp-content/themes/fpalaw/assets/img/landing/A4-6.jpg">
                                <a data-href="/wp-content/themes/fpalaw/assets/img/landing/A4-6.jpg" data-num="3">
                                    <img src="/wp-content/themes/fpalaw/assets/img/landing/A4-6.jpg" />
                                </a>
                            </div>
                            <div class="swiper-slide" data-src="/wp-content/themes/fpalaw/assets/img/landing/A4-7.jpg">
                                <a data-href="/wp-content/themes/fpalaw/assets/img/landing/A4-7.jpg" data-num="4">
                                    <img src="/wp-content/themes/fpalaw/assets/img/landing/A4-7.jpg" />
                                </a>
                            </div>
                            <div class="swiper-slide" data-src="/wp-content/themes/fpalaw/assets/img/landing/A4-8.jpg">
                                <a data-href="/wp-content/themes/fpalaw/assets/img/landing/A4-8.jpg" data-num="5">
                                    <img src="/wp-content/themes/fpalaw/assets/img/landing/A4-8.jpg" />
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="reviews-count-cnt">
                    <div class="reviews-head-cnt">
                        <h2>Отзывы</h2>
                        <div class="star-cnt">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13 18.7091L17.4959 21.4282C18.3192 21.9266 19.3267 21.1899 19.11 20.2582L17.9184 15.1449L21.8942 11.6999C22.62 11.0716 22.23 9.87991 21.2767 9.80408L16.0442 9.35991L13.9967 4.52824C13.6284 3.65074 12.3717 3.65074 12.0034 4.52824L9.95585 9.34908L4.72335 9.79324C3.77002 9.86908 3.38002 11.0607 4.10585 11.6891L8.08168 15.1341L6.89002 20.2474C6.67335 21.1791 7.68085 21.9157 8.50418 21.4174L13 18.7091Z" fill="#FFCC01"/></svg>
                            <span><?=$reviews_content['main_count']; ?></span>
                        </div>
                    </div>
                    <div class="reviews-body-cnt">
                        <?php
                            if (count($reviews_content['star_counts'])) {
                                foreach ($reviews_content['star_counts'] as $key => $value) {
                        ?>
                                    <div class="reviews-body-row">
                                        <div class="title"><?=$value['title']; ?></div>
                                        <div class="line">
                                            <span style="width: <?=$value['line_percent']; ?>%;"></span>
                                        </div>
                                        <div class="count"><?=$value['count']; ?></div>
                                    </div>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="reviews-form-cnt">
                        <form method="post" class="modal__form-reviews">
                            <div class="form__row">
                                <div class="field-cnt">
                                    <input type="text" name="cname" value="" placeholder="Введите ваше имя">
                                    <span class="hidden">Поле обязательно для заполнения.</span>
                                </div>
                            </div>
                            <div class="form__row">
                                <div class="field-cnt">
                                    <textarea rows="5" cols="45" name="ctext" placeholder="Написать отзыв"></textarea>
                                    <span class="hidden">Поле обязательно для заполнения.</span>
                                </div>
                            </div>
                            <div class="form__row">
                                <input type="submit" value="Оставить отзыв">
                            </div>
                        </form>
                    </div>
                    <div class="reviews-form-succes-cnt hidden">
                        <div class="form-success">
                            <div class="head-title">Cпасибо за Ваш отзыв</div>
                            <div class="head-subtitle">В ближайшее время мы проверим и опубликуем его</div>
                            <div class="icon-cnt">
                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.83334 10.0002L8.70834 16.6668L20.1667 3.3335" stroke="#17CC5F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    $args_book_desk = ([
                        'posts_per_page' => '200',
                        'posts_per_archive_page' => '200',
                        'post_type'   => 'otzyvy',
                        'post_status' => 'publish',
                        'tax_query'   => [
                            [
                                'taxonomy'  => 'types',
                                'field'     => 'slug',
                                'terms'     => 'bestseller-2022'
                            ],
                        ],
                    ]);
                    $book_desk = new WP_Query( $args_book_desk );
                ?>
                <div class="reviews-content-cnt">
                    <div class="reviews-head-cnt">
                        <h2><?=$reviews_content['reviews_count']; ?></h2>
                    </div>               
                    <?php 
                        if( $book_desk->have_posts() ) :
                            while( $book_desk->have_posts() ) : $book_desk->the_post();
                                get_template_part('template-parts/content-book');
                            endwhile;
                        endif;
                        wp_reset_postdata(); 
                    ?>
                    <div class="view-new-five-reviews hidden">
                        <span>Показать еще 5 отзывов</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="all-buttons hidden">Получить бесплатно</button>
</section>