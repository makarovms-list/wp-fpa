<style>
    .chat_button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 99;
        overflow: hidden;
        height: 100px;
        width: 100px;
        cursor: pointer;
    }
    .chat_button .icon {
        width: 100%;
        height: 100%;
        background: #517ff5;
        border-radius: 50%;
        background: url(/wp-content/themes/fpalaw/assets/img/chat/bondar_icon_transparent.png) center bottom no-repeat;
        background-size: contain;
    }
    
    .chat_button .icon div {
        position: absolute;
        background : #5381F6;
        background: linear-gradient(to top, #5381F6 100%, #5381F6 0px);
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        z-index: -1;
        
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
        
    }
    /*
    .chat_button .icon span {
        position: absolute;
        width: 100%;
        left: 0;
    }
    .chat_button .icon span.color_5381F6 {
        background : #5381F6;
        height: 100%;
        top: 0;
    }
    .chat_button .icon span.color_FB5A80 {
        background : #FB5A80;
        height: 0;
        bottom: 0;
    }
    .chat_button .icon span.color_17CC5F {
        background : #17CC5F;
        height: 0;
        bottom: 0;
    }
    .chat_button .icon span.color_7A55D9 {
        background : #7A55D9;
        height: 0;
        bottom: 0;
    }
    */
    .chat_button .messages_icon {
        background: #EC4A48;
        box-shadow: 0px 2px 4px rgb(0 0 0 / 10%);
        width: 36px;
        height: 36px;
        position: absolute;
        top: 0;
        right: 0;
        border-radius: 50%;
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 10px 10px 10px;
        grid-row-gap: 0px;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    .chat_button .messages_icon.hidden {
        display: none;
    }
    .chat_button .messages_icon span {
        background: #FFFFFF;
        opacity: 0.4;
        width: 6px;
        height: 6px;
        border-radius: 50px;
        margin: 0 auto;
    }
    .chat_button .messages_icon .number__cnt.number {
        color: #FFFFFF;
        font-weight: 700;
        font-size: 14px;
    }
    .chat_button .messages_icon span:nth-child(1) {
        animation: chat_dots 1.2s linear .3s infinite;
    }
    .chat_button .messages_icon span:nth-child(2) {
        animation: chat_dots 1.2s linear .6s infinite;
    }
    .chat_button .messages_icon span:nth-child(3) {
        animation: chat_dots 1.2s linear .9s infinite;
    }
    @keyframes chat_dots {
        from {
            opacity: 0.4;
            /*width: 8px;
            height: 8px;*/
        }
        50% {
            opacity: 1;
            /*width: 12px;
            height: 12px;*/
        }
        to {
            opacity: 0.4;
            /*width: 8px;
            height: 8px;*/
        }
    }
    
    
    
    
    @media (max-width: 1200px) {
        /*
        .chat_button {
            height: 120px;
            width: 120px;
        }
        .chat_button .messages_icon {
            width: 36px;
            height: 36px;
        }
        .chat_button .messages_icon span {
            width: 6px;
            height: 6px;
        }
        .chat_button .messages_icon {
            grid-template-columns: 10px 10px 10px;
        }
        */
    }
    @media (max-width: 768px) {
        .chat_button {
            height: 80px;
            width: 80px;
        }
        .chat_button .messages_icon {
            width: 24px;
            height: 24px;
        }
        .chat_button .messages_icon span {
            width: 4px;
            height: 4px;
        }
        .chat_button .messages_icon {
            grid-template-columns: 8px 8px 8px;
        }
        .chat_button .messages_icon .number__cnt.number {
            font-size: 12px;
        }
    }
    @media (max-width: 540px) {}
    
    
    
    
    
    
    
    
    
    
</style>
<div class="chat_button">
    <div class="icon">
        <div class="bg"></div>
    </div>
    <div class="messages_icon hidden">
        <span></span>
        <span></span>
        <span></span>
        <div class="number__cnt hidden"></div>
        <div class="number__cnt number hidden"></div>
        <div class="number__cnt hidden"></div>
    </div>
</div>