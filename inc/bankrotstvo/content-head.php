<style>
    section.bankrotstvo-section-head {
        padding: 140px 0 45px;
        margin-bottom: 0;
    }
    section.bankrotstvo-section-head .bankrotstvo-section-head__cnt {
        padding-bottom: 45px;
        border-bottom: 1px solid rgb(83 129 246 / 20%);
    }
    section.section .inner__head {
        margin-bottom: 25px;
    }
    section.section .inner__head .title-page {
        font-weight: 700;
        font-size: 34px;
        line-height: 145%;
        color: #393939;
        border-bottom: 4px solid #5381F6;
        text-align: left;
    }
    section.bankrotstvo-section-head img {
        border-radius: 12px;
        margin-bottom: 25px;    
    }
    section.section p.italic-text {
        font-style: italic;
        font-weight: 400;
        font-size: 16px;
        line-height: 145%;
        color: #393939;
        margin-bottom: 45px;
    }
    section.section blockquote {
        background: #F3F4F4;
        border-radius: 12px;
        margin: 0;
        padding: 32px;
    }
    section.section blockquote .title {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 26px auto;
        grid-column-gap: 10px;
        grid-row-gap: 10px;
        align-items: center;
        margin-bottom: 16px;
    }
    section.section blockquote .title.green-color span {
        color: #17CC5F;
    }
    section.section blockquote .title.red-color span {
        color: #FB5A80;
    }
    section.section blockquote .title span {
        font-weight: 600;
        font-size: 18px;
        line-height: 145%;
        color: #5381F6;
    }
    section.section blockquote p {
        font-weight: normal;
        font-size: 16px;
        line-height: 145%;
        color: #393939;
    }
    section.section blockquote p:last-child {
        margin-bottom: 0;
    }
    section.section h2 {
        font-weight: 600;
        font-size: 26px;
        line-height: 145%;
        color: #393939;
        margin-bottom: 25px;
    }
    section.section p {
        font-weight: 400;
        font-size: 18px;
        line-height: 145%;
        color: #393939;    
    }    
    section.section p+h2 {
        margin-top: 45px;
    }
    section.section ul {
        margin: 0 0 25px;
        padding: 0;
        list-style: none;    
    }
    section.section ul li {
        font-weight: 400;
        font-size: 18px;
        line-height: 145%;
        color: #393939;
        position: relative;
    }
    section.section ul li {
        font-weight: 400;
        font-size: 18px;
        line-height: 145%;
        color: #393939; 
        padding-left: 16px;
        padding-bottom: 8px;
    }
    section.section ul li:before {
        content: "";
        background: #5381F6;
        width: 5px;
        height: 5px;
        border-radius: 50%;
        position: absolute;
        top: 12px;
        left: 0px;
    }
    blockquote .blockquote-title {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 26px auto;
        grid-column-gap: 10px;
        grid-row-gap: 10px;
        align-items: center;
        margin-bottom: 16px;
    }
    blockquote .blockquote-title span {
        font-weight: 600;
        font-size: 18px;
        line-height: 145%;
        color: #717B97;
    }
    blockquote .blockquote-foot {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 48px auto;
        grid-column-gap: 10px;
        grid-row-gap: 10px;
        align-items: center;
        margin-bottom: 16px;
        border-top: 1px solid #B5BDD1;
        padding-top: 24px;
        margin-top: 24px;
    }
    blockquote .blockquote-foot picture {
        background: -webkit-linear-gradient(135deg, #EDF0F8 14.64, #D7DEEF 85.36);
        background: -moz-linear-gradient(135deg, #EDF0F8 14.64, #D7DEEF 85.36);
        background: -o-linear-gradient(135deg, #EDF0F8 14.64, #D7DEEF 85.36);
        background: linear-gradient(135deg, #EDF0F8 14.64, #D7DEEF 85.36), rgba(0, 0, 0, 0.2);
        border-radius: 8px;
        overflow: hidden;
    }
    blockquote .blockquote-foot .text .name {
        font-weight: 700;
        font-size: 14px;
        line-height: 145%;
        display: flex;
        align-items: center;
        color: #393939;
    }
    blockquote .blockquote-foot .text .post {
        font-weight: 400;
        font-size: 14px;
        line-height: 145%;
        display: flex;
        align-items: center;
        color: #393939;
    }
    blockquote+h2 {
        margin-top: 45px;
    }
    blockquote+h3 {
        margin-top: 45px;
    }
    .all-width-block {
        
        margin: 45px 00;
    }
    .all-width-block.block-bg1 {
        background: url(/wp-content/themes/fpalaw/assets/img/bankrotstvo/bankrotstvo-all-width-bg1.png) top left no-repeat;
        background-size: cover;
    }
    .all-width-block.block-bg2 {
        background: url(/wp-content/themes/fpalaw/assets/img/bankrotstvo/bankrotstvo-all-width-bg2.png) top left no-repeat;
        background-size: cover;
        /*background: linear-gradient(270deg, rgba(255, 255, 255, 0.47) 15.82%, rgba(255, 255, 255, 0) 38.01%), linear-gradient(270deg, rgba(255, 255, 255, 0.97) -0.03%, rgba(255, 255, 255, 0.79) 23.85%, rgba(255, 255, 255, 0) 41.27%), linear-gradient(360deg, #3C70F4 0%, #638DF6 100%);*/
    }
    .all-width-block.block-bg3 {
        background: url(/wp-content/themes/fpalaw/assets/img/bankrotstvo/bankrotstvo-all-width-bg3.png) top left no-repeat;
        background-size: cover;
    }
    .all-width-block.block-bg4 {
        background: url(/wp-content/themes/fpalaw/assets/img/bankrotstvo/bankrotstvo-all-width-bg4.png) top left no-repeat;
        background-size: cover;
    }
    .all-width-block.block-bg2 .grid-cnt .content .title {
        color: #fff;
    }
    .all-width-block.block-bg2 .grid-cnt .content .text {
        color: #fff;
    }
    
    .all-width-block.block-bg2 .grid-cnt .content button {
        font-weight: 500;
        font-size: 14px;
        line-height: 140%;
        color: #5381F6;
        background: -webkit-linear-gradient(135deg, #edf0f8 15%, #d7deef 85%);
        background: -moz-linear-gradient(135deg, #edf0f8 15%, #d7deef 85%);
        background: -o-linear-gradient(135deg, #edf0f8 15%, #d7deef 85%);
        background: linear-gradient(135deg, #edf0f8 15%, #d7deef 85%);
    }
    .all-width-block.block-bg2 .grid-cnt .content button:hover {
        background: -o-linear-gradient(315deg,#edf0f8 15%,#d7deef 85%);
        background: linear-gradient(135deg,#edf0f8 15%,#d7deef 85%);    
        opacity: .9;
    }
    .all-width-block .grid-cnt {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 254px auto;
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        align-items: flex-end;
    }
    .all-width-block .grid-cnt .content {
        padding: 20px 0;
    }
    .all-width-block .grid-cnt .content .title {
        font-weight: 700;
        font-size: 18px;
        line-height: 145%;
        color: #393939;
        margin-bottom: 10px;
    }
    .all-width-block .grid-cnt .content .text {
        font-weight: 400;
        font-size: 14px;
        line-height: 145%;
        color: #393939;
        margin-bottom: 10px;
    }
    .all-width-block .grid-cnt .content button {
        font-weight: 500;
        font-size: 14px;
        line-height: 145%;
    }
    .all-width-block .grid-cnt .content button:hover {}
    p+blockquote {
        margin-top: 25px;
    }
    section.section ol {
        margin: 0;
        padding: 0;
        list-style: none;
        counter-reset: my-numbers;
        margin-left: 15px;
    }
    section.section ol li {
        font-weight: 400;
        font-size: 18px;
        line-height: 145%;
        color: #393939;
        padding-bottom: 8px;
        position: relative;
        padding-left: 8px;
    }
    section.section ol li:before {
        top: 0;
        left: -15px;
        content: counter(my-numbers) ". ";
        counter-increment: my-numbers;
        position: absolute;
        font-weight: 700;
        font-size: 18px;
        line-height: 145%;
        color: #5381F6;
    }
    section.section ol li:last-child {
        margin-bottom: 0;
    }
    section.section ol {
        margin-bottom: 25px;
    }
    blockquote.black-scheme .title {
        grid-template-columns: 100%!important;
        border-bottom: 1px solid rgb(0 0 0 / 5%)!important;
        padding-bottom: 20px!important;
        margin-bottom: 20px!important;
    }
    blockquote.black-scheme .title span {
        font-weight: 700!important;
        color: #393939!important;
    }
    blockquote.black-scheme ul {
        margin: 0!important;
    }
    blockquote.black-scheme ul li {
        font-size: 16px!important;
    }
    blockquote.black-scheme ul li:before {
        background: #000000!important;
    }    
    blockquote+blockquote {
        margin-top: 15px!important;
    }
    blockquote.blue-scheme {
        background: linear-gradient(360deg, #3C70F4 0%, #638DF6 100%)!important;
    }
    blockquote.blue-scheme .title {
        grid-template-columns: 100%!important;
        border-bottom: 1px solid rgb(0 0 0 / 5%)!important;
        padding-bottom: 10px!important;
        margin-bottom: 10px!important;
    }
    blockquote.blue-scheme .title span {
        font-weight: 700!important;
        color: #FFFFFF!important;
    }
    blockquote.blue-scheme ul {
        margin: 0!important;
    }
    blockquote.blue-scheme ul li {
        font-size: 16px!important;
        color: #ffffff!important;
    }
    blockquote.blue-scheme ul li:before {
        background: #FFFFFF!important;
    }
    blockquote.red-scheme {
        background: #FB5A80!important;
    }
    blockquote.red-scheme .title {
        grid-template-columns: 100%!important;
        border-bottom: 1px solid rgb(0 0 0 / 5%)!important;
        padding-bottom: 10px!important;
        margin-bottom: 10px!important;
    }
    blockquote.red-scheme .title span {
        font-weight: 700!important;
        color: #FFFFFF!important;
    }
    blockquote.red-scheme ul {
        margin: 0!important;
    }
    blockquote.red-scheme ul li {
        font-size: 16px!important;
        color: #ffffff!important;
    }
    blockquote.red-scheme ul li:before {
        background: #FFFFFF!important;
    }
    blockquote+p {
        margin-top: 25px;
    }
    .all-width-block.block-bg3 .btn {
        background: -webkit-gradient(linear, 100% 0, 0 0, from(#FB5A80), to(#F23965));
        background: -webkit-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        background: -moz-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        background: -o-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        background: linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
    }
    .all-width-block.block-bg3 .btn:hover {
        background: -webkit-gradient(linear, 100% 0, 0 0, from(#E7466C), to(#CA113D));
        background: -webkit-linear-gradient(180deg, #E7466C 0%, #CA113D 100%);
        background: -moz-linear-gradient(180deg, #E7466C 0%, #CA113D 100%);
        background: -o-linear-gradient(180deg, #E7466C 0%, #CA113D 100%);
        background: linear-gradient(180deg, #E7466C 0%, #CA113D 100%);
    }
    .prices__cnt {
        margin-bottom: 25px;
    }
    .cost__cards {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: repeat(3, 1fr);
        grid-column-gap: 24px;
        grid-row-gap: 24px;
        align-items: flex-start;
    }
    .cards__card {
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0px 14px 34px rgb(0 29 104 / 12%);
        /*padding-bottom: 24px;*/
    }
    .cards__card .card__header {
        background: linear-gradient(360deg, #3C70F4 0%, #638DF6 100%);
        font-weight: 500;
        font-size: 18px;
        line-height: 145%;
        text-align: center;
        color: #FFFFFF;
        padding: 24px 24px 16px;
    }
    .cards__card .card__price {
        background: linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        font-weight: 700;
        font-size: 32px;
        line-height: 100%;
        color: #FFFFFF;
        padding: 10px 24px;
        text-align: center;
    }
    .cards__card .card__descr {
        padding: 24px 24px 20px;
    }
    .cards__card .card__descr p {
        margin: 0;
        font-weight: 500;
        font-size: 14px;
        line-height: 145%;
        color: #717B97;
    }
    .cards__card .card__descr p+p {
        margin-top: 16px;
    }
    .cards__card .btn {
        font-weight: 700;
        font-size: 14px;
        line-height: 145%;
        margin: 0 24px 0;
        width: calc(100% - 48px);
    }
                            
    section.bankrotstvo-section-content .content-block {
        max-width: 70%;
    }
    .all-width-block .grid-cnt {
        max-width: 70%;
    }
    
    section.bankrotstvo-section-content {
        position: relative;
    }
    
    .right-sidebar {
        max-width: 385px;
        display: none;
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
    }
    .right-sidebar-nav__cnt {
        background: #FFFFFF;
        box-shadow: 0px 14px 34px rgb(0 29 104 / 12%);
        border-radius: 15px;
        padding: 24px;
        margin-bottom: 10px;
    }
    .nav-item__cnt {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 18px auto;
        grid-column-gap: 10px;
        grid-row-gap: 10px;
        align-items: flex-start;
        min-height: 44px;
        position:relative;
        cursor: pointer;
    }
    .nav-item__cnt:before {
        content: "";
        position: absolute;
        top: 18px;
        left: 7px;
        height: calc(100% - 18px);
        width: 4px;
        background: #5381F6;
    }
    .nav-item__cnt:last-child:before {
        display: none;
    }
    .nav-item__cnt .number span {
        font-weight: 600;
        font-size: 10px;
        line-height: 145%;
        display: flex;
        align-items: center;
        color: #5381F6;
        width: 18px;
        height: 18px;
        justify-content: center;
        border: 1px solid #5381F6;
        border-radius: 50%;
    }
    .nav-item__cnt .text {
        padding-bottom: 16px;
        margin-top: -4px;
    }
    .nav-item__cnt .text span {
        font-weight: 400;
        font-size: 14px;
        line-height: 145%;
        color: #5381F6;
    }
    .right-sidebar-intro__cnt {
        background: #FFFFFF;
        box-shadow: 0px 14px 34px rgb(0 29 104 / 12%);
        border-radius: 15px;
        padding: 25px;
    }
    .right-sidebar-intro__cnt .h3-title {
        font-weight: 700;
        font-size: 18px;
        line-height: 145%;
        text-align: center;
        color: #393939;
        margin-bottom: 20px;
    }
    .right-sidebar-intro__cnt .text {
        font-weight: 400;
        font-size: 16px;
        line-height: 145%;
        color: #717B97;
        margin-bottom: 20px;
    }
    .right-sidebar-intro__cnt .btn {
        font-weight: 700;
        font-size: 14px;
        line-height: 145%;
        text-align: center;
        color: #FFFFFF;
        padding-left: 0;
        padding-right: 0;
        width: 100%;
    }
    .container.bottom-border-container {
        border-bottom: 1px solid rgb(83 129 246 / 20%);
        padding-bottom: 45px;
        margin-bottom: 45px;
    }
    .contact-form {
        background: #F3F4F4;
        border-top: 1px solid #CECECE;
        border-bottom: 1px solid #CECECE;
        margin-bottom: 0px;
    }
    .contact-form .contact-form__lable {
        background: rgba(255, 255, 255, 0.85);
        box-shadow: 0px 4px 14px rgb(0 37 102 / 10%);
        border-radius: 4px;
        min-width: 270px;
        max-width: 340px;
        width: 100%;
    }
    .contact-form .contact-form__name {
        margin-bottom: 0;
    }
    .calculator-navbar.calculator-navbar--show {
        display: none;
    }
    
    .table-content {
        background: #F3F4F4;
        margin-bottom: 40px;
        padding: 20px 0;
        display: none;
    }
    .table-content .table-content__cnt .title {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: auto 20px;
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        align-items: center;
        cursor: pointer;
    }
    .table-content .table-content-list {
        padding-top: 10px;
        border-top: 1px solid rgb(0 0 0 / 5%);
        margin-top: 10px;
    }
    .table-content .table-content-item {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 12px auto;
        grid-column-gap: 12px;
        grid-row-gap: 12px;
        align-items: center;
        padding-bottom: 10px;
        cursor: pointer;
    }
    .table-content .table-content-item .number {
        font-weight: 600;
        font-size: 10px;
        line-height: 145%;
        display: flex;
        align-items: center;
        color: #5381F6;
        width: 18px;
        height: 18px;
        justify-content: center;
        border: 1px solid #5381F6;
        border-radius: 50%;
    }
    .table-content .table-content-item .item-title {
        font-weight: 400;
        font-size: 16px;
        line-height: 145%;
        color: #5381F6;
    }
    .table-content .table-content-item:last-child {
        padding-bottom: 0;
    }
    @media (max-width: 1200px) {
        section.bankrotstvo-section-content .content-block {
            max-width: 60%;
        }    
        section.bankrotstvo-section-content .all-width-block .grid-cnt {
            max-width: 60%;
            grid-template-columns: 100%;
        }
    }
    @media (max-width: 1200px) {
        .cost__cards {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    @media (max-width: 992px) {
        section.bankrotstvo-section-content .all-width-block .grid-cnt picture {
            display: none!important;
        }
        .cost__cards {
            grid-template-columns: repeat(1, 1fr);
        }
    }
    @media (max-width: 782px) {
        section.bankrotstvo-section-head {
            padding: 60px 0 45px;
        }
        section.section .inner__head .title-page {
            font-size: 26px;
        }
        .table-content {
            display: block;
        }
        section.bankrotstvo-section-content .content-block {
            max-width: 100%;
        }   
        section.bankrotstvo-section-content .right-sidebar {
            display: none!important;
        }
        section.bankrotstvo-section-content .all-width-block .grid-cnt {
            max-width: 100%!important;
        }
        .cost__cards {
            grid-template-columns: repeat(2, 1fr);
        }
        .form__field--white {
            background-color: #fff;
        }
    }
    @media (max-width: 768px) {
        section.bankrotstvo-section-content .all-width-block .grid-cnt {
            grid-template-columns: 100%!important;
        }
        section.bankrotstvo-section-content .all-width-block .grid-cnt picture {
            display: none!important;
        }
    }
    @media (max-width: 540px) {
        .cost__cards {
            grid-template-columns: 100%;
        }
    }
    
</style>
<section class="section bankrotstvo-section-head">
    <div class="container">
        <div class="bankrotstvo-section-head__cnt">
            <div class="inner__head">
                <h1 class="title-page">Процедура банкротства физического лица: пошаговая инструкция</h1>
            </div>
            <picture>
                <!--<source srcset="https://fpa.ru/wp-content/webp-express/webp-images/uploads/2022/10/Лисицина-Елена-Юрьевна-scaled.jpg.webp" type="image/webp">-->
                <img src="/wp-content/themes/fpalaw/assets/img/bankrotstvo/bankrotstvo-main-image.png" />
            </picture>
            <p class="italic-text">В 2015 году наше законодательство пополнилось нововведениями о банкротстве физических лиц. К тому моменту население было настолько закредитованным, что новая возможность стала для многих единственным способом начать жизнь с чистого листа. Долговая нагрузка россиян продолжает расти, и все больше людей официально признают свою финансовую несостоятельность. Как можно это сделать? В этой статье — наш обзор процедуры банкротства физического лица, пошаговая инструкция, которая поможет разобраться со всеми нюансами.</p>
            <blockquote>
                <div class="title">
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M25.5 13C25.5 16.3152 24.183 19.4946 21.8388 21.8388C19.4946 24.183 16.3152 25.5 13 25.5C9.68479 25.5 6.50537 24.183 4.16117 21.8388C1.81696 19.4946 0.5 16.3152 0.5 13C0.5 9.68479 1.81696 6.50537 4.16117 4.16117C6.50537 1.81696 9.68479 0.5 13 0.5C16.3152 0.5 19.4946 1.81696 21.8388 4.16117C24.183 6.50537 25.5 9.68479 25.5 13ZM14.5625 6.75C14.5625 7.1644 14.3979 7.56183 14.1049 7.85485C13.8118 8.14788 13.4144 8.3125 13 8.3125C12.5856 8.3125 12.1882 8.14788 11.8951 7.85485C11.6021 7.56183 11.4375 7.1644 11.4375 6.75C11.4375 6.3356 11.6021 5.93817 11.8951 5.64515C12.1882 5.35212 12.5856 5.1875 13 5.1875C13.4144 5.1875 13.8118 5.35212 14.1049 5.64515C14.3979 5.93817 14.5625 6.3356 14.5625 6.75ZM11.4375 11.4375C11.0231 11.4375 10.6257 11.6021 10.3326 11.8951C10.0396 12.1882 9.875 12.5856 9.875 13C9.875 13.4144 10.0396 13.8118 10.3326 14.1049C10.6257 14.3979 11.0231 14.5625 11.4375 14.5625V19.25C11.4375 19.6644 11.6021 20.0618 11.8951 20.3549C12.1882 20.6479 12.5856 20.8125 13 20.8125H14.5625C14.9769 20.8125 15.3743 20.6479 15.6674 20.3549C15.9604 20.0618 16.125 19.6644 16.125 19.25C16.125 18.8356 15.9604 18.4382 15.6674 18.1451C15.3743 17.8521 14.9769 17.6875 14.5625 17.6875V13C14.5625 12.5856 14.3979 12.1882 14.1049 11.8951C13.8118 11.6021 13.4144 11.4375 13 11.4375H11.4375Z" fill="#5381F6"/></svg>
                    <span>Определение</span>
                </div>
                <p><strong>Банкро́тство физического лица</strong> — признанная уполномоченным государственным органом неспособность должника (гражданина) удовлетворить в полном объёме требования кредиторов по денежным обязательствам и (или) исполнить обязанность по уплате обязательных государственных платежей.</p>
                <p><i>Под термином <span class="blue">«банкротство»</span> также понимается процедура, применяемая по отношению к должнику, направленная на оценку его финансового состояния, выработку мер по улучшению финансового состояния должника, а в случае, если применение таких мер будет признано нецелесообразным или невозможным, — на наиболее равное и справедливое удовлетворение интересов его кредиторов.</i></p>
            </blockquote>
        </div>
    </div>
</section>