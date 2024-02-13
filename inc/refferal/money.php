<style>
    #refferal_money {
        position: relative;
        margin-top: -12px;
        margin-bottom: -40px;
        z-index: 9;    
    }
    #refferal_money:before {
        content: '';
        background: url(<?= get_template_directory_uri() ?>/assets/img/money/money_bg_v2.png);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        background-size: contain;
        background-position: center center;
        background-repeat: no-repeat;
    }
    .refferal_money__title {
        font-style: normal;
        font-weight: 700;
        font-size: 39px;
        line-height: 145%;
        text-align: center;
        text-transform: uppercase;
        color: #393939;    
        /*max-width: 1000px;*/
        margin: 180px auto;
    }
    @media (max-width: 1600px) {
        #refferal_money:before {
            background-size: cover;
            background-position: 70%;
        }
    }
    @media (max-width: 980px) {
        .refferal_money__title {
            font-size: 26px;
        }
    }    
    @media (max-width: 768px) {
        .refferal_money__title {
            font-size: 24px;
        }
        .refferal_money__title {
            margin: 130px auto 140px;
        }
    }
    @media (max-width: 540px) {
        .refferal_money__title {
            font-size: 18px;
            text-align: left;
            margin: 60px 0;
        }
        #refferal_money:before {
            background: url(<?= get_template_directory_uri() ?>/assets/img/money/piastry_v2.png);
            background-repeat: no-repeat;
            background-position: right;
        }
        #refferal_money {
            margin-top: 0;
            margin-bottom: 0;
        }
    }
    
    
    
</style>
<section id="refferal_money" class="refferal_money">
    <div class="container">
        <div class="refferal_money__wrap">
            <div class="refferal_money__block refferal_money__block--main">
                <div class="refferal_money__title">Как правило, знакомые наших клиентов <span class="top__title--accent">не в курсе</span>, что есть реальная возможность <span class="top__title--accent">полностью избавиться от долгов</span> либо относятся к этому с недоверием</div>
            </div>
        </div>
    </div>
</section>