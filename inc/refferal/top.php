<style>
    #refferal_top {
        position: relative;
    }
    #refferal_top:before {
        content: '';
        background: url(<?= get_template_directory_uri() ?>/assets/img/top/refferal_bg.png);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        background-size: cover;
        background-position: center center;
        /*background-repeat: no-repeat;*/
    }
    /*
    #refferal_top:after {
        content: '';
        background: linear-gradient(135deg, #EDF0F8 14.64%, #D7DEEF 85.36%);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.6;
        z-index: -1;
    }
    */
        
    .section--modal .modal__master {
        display: none!important;
    }
    
    .original-link__thumb--ruling {
        background-image: url(/wp-content/themes/fpalaw/assets/img/icons/sud_document_photo.png);
        border-radius: 50%;
        -webkit-box-shadow: 0 2px 3px 1px rgb(0 37 102 / 15%);
        box-shadow: 0 2px 3px 1px rgb(0 37 102 / 15%);
    }
    
    .original-link__thumb--cardfile {
        background-image: url(/wp-content/themes/fpalaw/assets/img/icons/arb_sud_document_photo.png);
        border-radius: 50%;
        -webkit-box-shadow: 0 2px 3px 1px rgb(0 37 102 / 15%);
        box-shadow: 0 2px 3px 1px rgb(0 37 102 / 15%);
    }
    
    
    @media (max-width: 576px) {
        .reviews__main--video .reviews__item:not(:nth-child(3n+1)) .reviews__original,
        .reviews__main--video .reviews__original {
            width: 100%;
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: calc(50% - 8px) calc(50% - 8px);
            grid-column-gap: 16px;
            grid-row-gap: 16px;
            align-items: center;
        }
        .reviews__main--video .reviews__item:not(:nth-child(3n+1)) .reviews__name,
        .reviews__main--video .reviews__item:nth-child(3n+1) .reviews__name {
            height: 52px;
            margin-bottom: 55px;
        }     
        .slider-reviews__content {
            background-color: #FB5A80;
        }
        .slider-reviews__name {
            margin-bottom: 0;
        }
        .amount__cnt .reviews__data-count {
            font-weight: 500;
            font-size: 14px;
            line-height: 145%;
            color: #FFFFFF;
        }
        footer.footer ul.copyright li span {
            white-space: nowrap;
        }
            

    }

    footer.footer ul.copyright li span {
        font-weight: 400!important;
    }

    
    .original-link__thumb--small {
        -webkit-box-flex: 1;
        -ms-flex: 1 0 32px;
        flex: 1 0 32px;
        width: 32px;
        height: 32px;
        background-size: contain;
    }
    
    .refferal_top__wrap {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: calc(65% - 8px) calc(35% - 8px);
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        align-items: center;
    }
    .refferal_top__title {
        font-size: 45px;
    }
    .refferal_top__text {
        margin-bottom: 35px;
    }
    .refferal_top__figure {
        position: relative;
        margin: 0;
        margin-left: -30%;
    }
    .refferal_top__figure.tablet {
        display: none;
    }
    .refferal_top__figure figcaption {
        max-width: 278px;
        position: absolute;
        bottom: 20px;
        right: 140px;
        background: rgba(255, 255, 255, 0.85);
        box-shadow: 0px 4px 14px rgb(0 37 102 / 10%);
        border-radius: 4px;
        padding: 10px;
    }
    .refferal_top__figure figcaption .refferal_top__label--name {
        display: block;
        font-weight: 400;
        font-size: 20px;
        line-height: 145%;
        color: #000000;
        margin-bottom: 0;
    }
    .refferal_top__figure figcaption .refferal_top__label--post {
        display: block;
        font-weight: 400;
        font-size: 14px;
        line-height: 145%;
        color: #717B97;
    }
    
	.page-template-refferal .warning__cnt {
	    display: none!important;
	}
	.page-template-refferal .header {
        margin-bottom: 60px;
    }
    #refferal_top .bnt__wrap {
        min-width: 220px;
    }
    #refferal_top .bnt__wrap.tablet {
        display: none;
    }
    #refferal_top .bnt__wrap.desktop {
        margin-bottom: 40px;
    }
    .calculator-navbar {
        display: none!important;
    }
	@media (max-width: 1200px) {
    	.page-template-refferal .header {
            margin-bottom: 44px;
        }
        .refferal_top__title {
            font-size: 34px;
        }        
        #refferal_top {
            padding: 40px 0 0;
        }
        .refferal_top__wrap {
            align-items: flex-end;
        }
	}
	@media (max-width: 992px) {
	    .refferal_top__figure figcaption {
            bottom: 20px;
            right: 20px;
	    }
	}
    @media (max-width: 768px) {
        .header__control {
            top: 40px!important;
        }
        .refferal_top__figure.desktop {
            display: none;
        }
        .refferal_top__figure.tablet {
            display: block;
        }
        .refferal_top__title {
            font-size: 23px;
        }  
        .refferal_top__figure {
            margin-left: 0;
        }
        .container {
            max-width: 100%;
            padding: 0 24px;
        }   
        #refferal_top {
            padding: 40px 0;
        }

        .refferal_top__figure figcaption {
            bottom: 0px;
            right: 0px;
        }
        .refferal_top__figure figcaption .refferal_top__label--name {
            font-size: 18px;
        }
        .refferal_top__figure figcaption .refferal_top__label--post {
            font-size: 12px;
        }
        header.header {
            background: transparent;
        }
        #refferal_top {
            margin-top: -180px;
            padding-top: 180px;
        }
        #refferal_top .btn--services {
            width: auto;
        }
        
        
        
        
        
    }
    @media (max-width: 540px) {
        .refferal_top__title {
            font-size: 26px;
            padding-top: 80px;
        } 
        .refferal_top__figure {
            margin: 0 auto 0px;
            max-width: 330px;
        }
        .refferal_top__wrap {
            grid-template-columns: 100%;
        }        
        
        #refferal_top .bnt__wrap.desktop {
            display: none;
        }
        #refferal_top .bnt__wrap.tablet {
            display: block;
            margin-bottom: 40px;
        }
        #refferal_top .btn--services {
            width: 100%;
        }
        
        #refferal_top {
            padding: 60px 0 30px;
        }
        header.header {
            background-color: transparent;
        }
        .btn-up {
            bottom: 20px;
        }
        .modal__title {
            font-size: 18px!important;
        }
        .modal__name {
            font-size: 16px!important;
        }
        .modal__post {
            font-size: 14px!important;
        }
        #refferal_top {
            margin-top: -180px;
            padding-top: 100px;
        }
        .refferal_top__figure figcaption {
            background: #FFFFFF;
            box-shadow: 0px 4px 14px rgb(0 37 102 / 10%);
            border-radius: 4px;
            position: absolute;
            bottom: 0px;
            width: 214px;
            left: calc(50% - 107px);
            padding: 10px;
        }
        .refferal_top__figure figcaption .refferal_top__label--name {
            font-weight: 500;
            font-size: 16px;
            line-height: 145%;
            color: #000000;
            margin-bottom: 0;
        }
        .refferal_top__figure figcaption .refferal_top__label--post {
            font-weight: 400;
            font-size: 10px;
            line-height: 145%;
            color: #717B97;
        }
        
        
        
        
        
        
        
        
        
        
    }
    .modal__title {
        font-size: 25px;
    }
    .modal__foto {
        border-radius: 40px;
    }
</style>
<section id="refferal_top" class="refferal_top">
    <div class="container">
        <div class="refferal_top__wrap">
            <div class="refferal_top__block refferal_top__block--main">
                <h1 class="refferal_top__title">Согласно статистике, у <span class="top__title--accent">каждого нашего клиента</span> есть знакомые, которые тоже <span class="top__title--accent">испытывают проблемы с долгами</span></h1>
                <div class="refferal_top__text">
                  Узнайте, как вы можете <span class="top__title--accent">помочь</span> своим знакомым <span class="top__title--accent">с пользой</span> для себя 
                </div>
                <button class="btn btn--services btn-master bnt__wrap desktop" id="btn-master-1" data-btn="SMS-48 Реферальная программа. Узнайте, как вы можете помочь своим знакомым с пользой для себя"  data-sms="51" data-thanks="2">Подробнее<span class="btn__highlights"></span></button>
                <div class="modal-content">
                    <div class="mod-content__title">Перезвоним и подробно всё расскажем</div>
                    <div class="mod-content__name">Алексей Сорокин</div>
                    <div class="mod-content__post">Руководитель юридического департамента по банкротству</div>
                    <div class="mod-content__foto">andrey-sorokin</div>
                </div>
            </div>
        
            <figure class="refferal_top__figure desktop">
                <picture>
                    <img class="refferal_top__image" src="<?= get_template_directory_uri() ?>/assets/img/top/sorokin.png">
                </picture>
                <figcaption class="refferal_top__figcaption">
                    <span class="refferal_top__label refferal_top__label--name">Алексей Сорокин</span>
                    <span class="refferal_top__label refferal_top__label--post">Эксперт-консультант по банкротству</span>
                </figcaption>
            </figure>
            <figure class="refferal_top__figure tablet">
                <picture>
                    <img class="refferal_top__image" src="<?= get_template_directory_uri() ?>/assets/img/top/sorokin_small.png">
                </picture>
                <figcaption class="refferal_top__figcaption">
                    <span class="refferal_top__label refferal_top__label--name">Алексей Сорокин</span>
                    <span class="refferal_top__label refferal_top__label--post">Эксперт-консультант по банкротству</span>
                </figcaption>
            </figure>
            <div class="bnt__wrap tablet">
                <button class="btn btn--services btn-master desktop" id="btn-master-1" data-btn="SMS-48 Реферальная программа. Узнайте, как вы можете помочь своим знакомым с пользой для себя"  data-sms="51" data-thanks="2">Подробнее<span class="btn__highlights"></span></button>
                <div class="modal-content">
                    <div class="mod-content__title">Перезвоним и подробно всё расскажем</div>
                    <div class="mod-content__name">Алексей Сорокин</div>
                    <div class="mod-content__post">Эксперт-консультант по банкротству</div>
                    <div class="mod-content__foto">andrey-sorokin</div>
                </div>
            </div>
        </div>
    </div>
</section>