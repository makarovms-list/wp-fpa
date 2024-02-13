<style>
    .wrapper {
        min-height: 260px;
        overflow: hidden;
    }
    body {
        background: linear-gradient(135deg, #EDF0F8 14.64%, #D7DEEF 85.36%);
    }
    header.header {
        background: transparent!important;
    }
    .header__bottom {
        background-color: transparent!important;
    }
    .mfc-inner {
        display: none!important;
    }
    .header__bottom--fixed {
        background-color: #f3f4f4!important;
    }
    .header__bottom.show {
        background: #fff!important;
    }
    .section_gray {
        /*background: linear-gradient(135deg, #EDF0F8 14.64%, #D7DEEF 85.36%);*/
        background: transparent;
        padding: 60px 0;
    }
    .section_gray-cnt {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: calc(50% - 16px) calc(50% - 16px);
        grid-column-gap: 32px;
        grid-row-gap: 32px;
        align-items: center;
    }
    .section_gray-col img {
        max-height: 400px;
        width: auto;
        object-fit: contain;
        margin: 0 auto;
    }
    .section_gray-col .title {
        font-family: Inter;
        font-weight: 700;
        line-height: 130%;
        letter-spacing: 0em;
        text-align: left;
        color: #393939;
        font-size: 2.8em;
        max-width: 500px;
        margin-bottom: 16px;
        white-space: nowrap;
    }
    .section_gray-col .subtitle {
        color: #717B97;
        font-family: Inter;
        font-size: 1.2em;
        font-weight: 500;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        margin-bottom: 32px;
    }
    .section_gray-col button {
        font-size: 1em;
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
        cursor: pointer;
    }
    
    .popup__cnt .popup__overlay {
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 100;
        width: 100%;
        height: 100%;
        overflow-y: scroll;
        background-color: rgba(229,229,229,.9);
        -webkit-backdrop-filter: blur(30px);
        backdrop-filter: blur(30px);
    }
    
    .popup__cnt .mfc-bankruptcy-bonus-1,
    .popup__cnt .mfc-bankruptcy-bonus-2 {
        position: fixed;
        top: 50%;
        left: 50%;
        z-index: 1;
        width: 600px;
        padding: 40px;
        background-color: #fff;
        -webkit-box-shadow: 0 14px 34px rgba(0,29,104,.12);
        box-shadow: 0 14px 34px rgba(0,29,104,.12);
        border-radius: 10px;
        -webkit-transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
    }
    .popup__cnt .mfc-bankruptcy-bonus-1 button.popup__close,
    .popup__cnt .mfc-bankruptcy-bonus-2 button.popup__close {
        top: -32px;
        right: 0px;
    }
    .popup__cnt .mfc-bankruptcy-bonus-1 .form-cnt .title, 
    .popup__cnt .mfc-bankruptcy-bonus-2 .form-cnt .title {
        font-family: Inter;
        font-size: 1.75em;
        font-weight: 700;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        margin-bottom: 10px;
    }
    .popup__cnt .mfc-bankruptcy-bonus-1 .form-cnt form input[type=text],
    .popup__cnt .mfc-bankruptcy-bonus-1 .form-cnt form input[type=tel],
    .popup__cnt .mfc-bankruptcy-bonus-2 .form-cnt form input[type=text],
    .popup__cnt .mfc-bankruptcy-bonus-2 .form-cnt form input[type=tel] {
        border: none;
        background: #F3F4F4;
        width: 100%;
        border-radius: 15px;
        padding: 14px;
        font-family: Inter;
        font-size: 1em;
        font-weight: 500;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: center;
        margin-bottom: 10px;
    }
    .popup__cnt .popup-item__cnt.schema-red form input[type=submit] {
        background: -webkit-gradient(linear, 100% 0, 0 0, from(#FB5A80), to(#F23965));
        background: -webkit-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        background: -moz-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        background: -o-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        background: linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
        cursor: pointer;
    }
    .popup__cnt .popup-item__cnt.schema-red form input[type=submit]:hover {
        background: -webkit-gradient(linear, 100% 0, 0 0, from(#E7466C), to(#CA113D));
        background: -webkit-linear-gradient(180deg, #E7466C 0%, #CA113D 100%);
        background: -moz-linear-gradient(180deg, #E7466C 0%, #CA113D 100%);
        background: -o-linear-gradient(180deg, #E7466C 0%, #CA113D 100%);
        background: linear-gradient(180deg, #E7466C 0%, #CA113D 100%);
    }
    
    @media (max-width: 1200px) {
        .section_gray-col .title {
            white-space: unset;
        }
    }
    @media (max-width: 992px) {
        .wrapper {
            min-height: 238px;
        }
    }
    @media (max-width: 782px) {
        .section_gray-cnt {
            display: flex;
            flex-direction: column-reverse;
        }
        .section_gray-col .title {
            font-size: 2.25em;
            max-width: 100%;
        }
        .section_gray-col .subtitle {
            font-size: 1em;
        }
        .section_gray-col button {
            width: 100%;
        }
        .popup__cnt .mfc-bankruptcy-bonus-1 button.popup__close, 
        .popup__cnt .mfc-bankruptcy-bonus-2 button.popup__close {
            top: 10px;
            right: 10px;
        }
        .popup__cnt .mfc-bankruptcy-bonus-1, 
        .popup__cnt .mfc-bankruptcy-bonus-2 {
            max-width: calc(100% - 32px);
            margin: 0 auto;
        }
        .wrapper {
            min-height: 135px;
        }
    }
    @media (max-width: 540px) {
        .popup__cnt .mfc-bankruptcy-bonus-1 .form-cnt .title, 
        .popup__cnt .mfc-bankruptcy-bonus-2 .form-cnt .title {
            font-size: 1.1em;
        }
        .popup__cnt .mfc-bankruptcy-bonus-1, 
        .popup__cnt .mfc-bankruptcy-bonus-2 {
            padding: 40px 24px;
        }
        .section_gray-col .subtitle {
            font-size: 1.1875em;
        }
        .section_gray-col button {
            font-size: 1.125em;
        }
    }
    @media (max-width: 340px) {}
    
</style>
<section class="section_gray">
    <div class="container">
        <div class="section_gray-cnt">
            <div class="section_gray-col">
                <div class="content-cnt">
                    <div class="title">Деньги вам и друзьям!</div>
                    <div class="subtitle">Мы не тратим миллионы на рекламу, а отдаём их нашим клиентам за рекомендации</div>
                </div>
                <div class="buttons-cnt">
                    <button class="get-money btn">Получить деньги</button>
                </div>
            </div>
            <div class="section_gray-col">
                <picture>
                    <img src="/wp-content/themes/fpalaw/assets/img/bonus/get-money.png" alt="Деньги вам и друзьям!" />
                </picture>
            </div>
        </div>
    </div>
</section>