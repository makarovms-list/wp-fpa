<style>
    section#bonus-top {
        background: #5381F6;
    }
    section#bonus-top .bonus-top-cnt {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: calc(60% - 8px) calc(40% - 8px);
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        align-items: center;
    }
    section#bonus-top .title-big {
        font-family: Inter;
        font-size: 3em;
        font-weight: 700;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        color: #fff;
        margin-bottom: 25px;
    }
    section#bonus-top .title-small {
        font-family: Inter;
        font-size: 1.5em;
        font-weight: 500;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        color: #fff;
        margin-bottom: 25px;
    }
    section#bonus-top button.red {
        background: -webkit-gradient(linear, 100% 0, 0 0, from(#FB5A80), to(#F23965));
        background: -webkit-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        background: -moz-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        background: -o-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        background: linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
        font-family: Inter;
        font-size: 1em;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: center;
        font-weight: 600;
    }
    section#bonus-top button.red:hover {
        background: -webkit-gradient(linear, 100% 0, 0 0, from(#DD3C62), to(#D41B47));
        background: -webkit-linear-gradient(180deg, #DD3C62 0%, #D41B47 100%);
        background: -moz-linear-gradient(180deg, #DD3C62 0%, #D41B47 100%);
        background: -o-linear-gradient(180deg, #DD3C62 0%, #D41B47 100%);
        background: linear-gradient(180deg, #DD3C62 0%, #D41B47 100%);
    }
    
    
    @media (max-width: 782px) {
        section#bonus-top .bonus-top-cnt {
            grid-template-columns: 100%;
            position: relative;
            z-index: 99;
        }
        section#bonus-top .bonus-top-cnt .bonus-top-col:last-child {
            display: none;
        }
        section#bonus-top .title-big {
            margin-top: 60px;
            font-size: 1.75em;
            margin-bottom: 10px;
        }
        section#bonus-top .title-small {
            font-size: 1.125em;
            margin-bottom: 200px;
        }
        section#bonus-top button.red {
            width: 100%;
            margin-bottom: 60px;
        }
        section#bonus-top {
            position: relative;
        }
        section#bonus-top:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url(/wp-content/themes/fpalaw/assets/img/newbonusprogram/newbonus-top-mobile.png) bottom right no-repeat;
            background-size: 50%;
        }
    }
    @media (max-width: 540px) {
        section#bonus-top:before {
            background-size: 75%;
        }
    }
</style>
<section id="bonus-top">
    <div class="container">
        <div class="bonus-top-cnt">
            <div class="bonus-top-col">
                <div class="title-big">Обновленные условия бонусной программы</div>
                <div class="title-small">Бонус до 10 000 ₽ рублей вам за рекомендацию и скидка до 10 000 ₽ рублей другу</div>
                <button class="btn red">Узнать подробности</button>
            </div>
            <div class="bonus-top-col">
                <img src="/wp-content/themes/fpalaw/assets/img/newbonusprogram/newbonus-top.png" alt="Обновленные условия бонусной программы" />
            </div>
        </div>
    </div>
</section>