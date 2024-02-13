<style>
    .sc-widget {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        width: 100%;
        position: fixed;
        z-index: 1000;
        bottom: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        background: #eef3ff;
        padding: 15px;
        -webkit-box-shadow: 0 -3px 10px rgba(0, 0, 0, 0.1);
        box-shadow: 0 -3px 10px rgba(0, 0, 0, 0.1);
    }
    .sc-widget * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }
    .sc-widget__img {
        width: 40px;
    }
    .sc-widget__text {
        width: calc(100% - 160px);
        padding: 0 15px;
        /*
        font: 14px "Open Sans", sans-serif;
        line-height: 1.3;
        color: #654d3b;
        */
        color: #393939;
        font-weight: 400;
        font-size: 16px;
        line-height: 145%;
    }
    .sc-widget__text a {
        color: #3c70f4;
        text-decoration: none;
    }
    
    .sc-widget__text a:visited {
        color: rgba(60,112,244,.8);
    }
    
    .sc-widget__text a:hover {
        -webkit-transition: 0.3s;
        transition: 0.3s;
        color: rgba(60,112,244,.8);
    }
    .sc-widget__button {
        width: 120px;
        font: bold 14px "Open Sans", sans-serif;
        border-radius: 3px;
        height: 40px;
        border: none;
        background: #3C70F4;
        text-transform: uppercase;
        color: #fff;
        -webkit-transition: 0.3s;
        transition: 0.3s;
        cursor: pointer;
    }
    
    .sc-widget__button:hover {
        background: #638DF6;
        color: #fff;
        -webkit-transition: 0.3s;
        transition: 0.3s;
    }
    @media (max-width: 768px) {
        .sc-widget__text {
            font-size: 14px;
        }
        .sc-widget__img {
            display:none;
        }
        .sc-widget {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-flow: column;
            flex-flow: column;
        }
        .sc-widget__img {
            margin-bottom: 15px;
        }
        .sc-widget__text {
            margin-bottom: 15px;
            text-align: center;
            width: 100%;
        }
    }
</style>
<div class="cookies__cnt">
    <script src="/wp-content/themes/fpalaw/assets/js/smart-cookies.js"></script>
</div>