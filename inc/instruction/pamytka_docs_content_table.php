<style>
.table-of-contents {
    max-width: 300px;
    padding: 24px;
    box-shadow: 8px -3px 24px 0px #0025661A;
    box-shadow: -8px 3px 24px 0px #0025660D;
    background: #FFFFFF;
    border-radius: 17px;
    left: 20px;
}
.table-of-contents.absolute {
    position: absolute;
    top: 320px;
}
.table-of-contents.fixed {
    position: fixed;
    top: 80px!important;
}

.table-of-contents-tablet {
    max-width: 300px;
    padding: 0px;
    left: 0px;
    cursor: pointer;
}
.table-of-contents-tablet.absolute {
    position: absolute;
    top: 320px;
}
.table-of-contents-tablet.fixed {
    position: fixed;
    top: 80px!important;
    z-index: 99999;
}
.table-of-contents-tablet .icon {
    box-shadow: 4px 4px 48px 0px #00256626;
    background: #EEF3FF;
    padding: 20px 30px;
    border-radius: 0px 18px 18px 0px;
    -webkit-transition: all .4s ease;
    -o-transition: all .4s ease;
    transition: all .4s ease;
}
.table-of-contents-tablet .icon svg {
    margin-bottom: 4px;
}
.table-of-contents-tablet .icon span {
    font-family: Inter;
    font-size: 12px;
    font-weight: 500;
    line-height: 100%;
    letter-spacing: 0em;
    text-align: left;
    color: #3C70F4;
    display: block;
}

.table-of-contents-tablet .table-of-contents-tablet-cnt {
    position: fixed;
    left: -300px;
    top: 237px;
    width: 300px;
    background: #EEF3FF;
    padding: 24px 24px 24px 24px;
    height: 100%;
    -webkit-transition: left .4s ease;
    -o-transition: left .4s ease;
    transition: left .4s ease;    
    
    -webkit-transition: top .0s ease;
    -o-transition: top .0s ease;
    transition: top .0s ease;    
}
.table-of-contents-tablet .table-of-contents-tablet-cnt.viewed {
    left: 0px;
    z-index: 9999;
}
.table-of-contents-tablet-cnt button.back {
    border: none;
    background: transparent;
    cursor: pointer;
    margin-bottom: 16px;
    padding: 0;
}
.table-of-contents-cnt .title {
    font-family: Inter;
    font-size: 18px;
    font-weight: 600;
    line-height: 26px;
    letter-spacing: 0em;
    text-align: left;
    margin-bottom: 8px;
    color: #202020;
}
.table-of-contents-tablet-cnt .title {
    font-family: Inter;
    font-size: 18px;
    font-weight: 600;
    line-height: 145%;
    letter-spacing: 0em;
    text-align: left;    
    margin-bottom: 8px;
    color: #202020;
}
.table-of-contents-cnt ol {
	counter-reset: num;
	padding: 0px 0px 0px 20px;
    margin: 0px 0px 0px 0px;
}
.table-of-contents-tablet-cnt ol {
	counter-reset: num;
	padding: 0px 0px 0px 20px;
    margin: 0px 0px 0px 0px;
}
.table-of-contents-cnt ol li+li {
    margin-top: 8px;    
}
.table-of-contents-tablet-cnt ol li+li {
    margin-top: 8px;    
}
.table-of-contents-cnt ol li a {
    font-family: Inter;
    font-size: 16px;
    font-weight: 500;
    line-height: 162%;
    letter-spacing: 0em;
    text-align: left;    
    color: #303030;
    display: block;
    cursor: pointer;
}
.table-of-contents-tablet-cnt ol li a {
    font-family: Inter;
    font-size: 16px;
    font-weight: 500;
    line-height: 162%;
    letter-spacing: 0em;
    text-align: left;    
    color: #303030;
    display: block;
    cursor: pointer;
}
.table-of-contents-cnt ol li.active {
    position: relative;
}
.table-of-contents-tablet-cnt ol li.active {
    position: relative;
}
.table-of-contents-cnt ol li.active a {
    color: #5381F6;
    display: contents;
}
.table-of-contents-tablet-cnt ol li.active a {
    color: #5381F6;
    display: contents;
}
.table-of-contents-cnt ol li.active::marker {
    color: #5381F6;
}
.table-of-contents-tablet-cnt ol li.active::marker {
    color: #5381F6;
}
body.content-margin-300 main {
    margin-left: 300px;
    -webkit-transition: all .4s ease;
    -o-transition: all .4s ease;
    transition: all .4s ease;
}
body:not(.content-margin-300) main {
    margin-left: 0px;
    -webkit-transition: all .4s ease;
    -o-transition: all .4s ease;
    transition: all .4s ease;
}


.table-of-contents-mobile.fixed {
    position: fixed;
    bottom: 0;
    width: 100%;
    z-index: 9999999;
}
.table-of-contents-mobile .text {
    box-shadow: 0px -4px 24px 0px #00256626;
    background: #FFFFFF;
    text-align: center;
    padding: 30px 0;
    cursor: pointer;
    background: #5381F6;
}
.table-of-contents-mobile .text span {
    font-family: Inter;
    font-size: 15px;
    font-weight: 500;
    line-height: 125%;
    letter-spacing: 0.01em;
    text-align: center;    
    color: #FFFFFF;
}
.table-of-contents-mobile .table-of-contents-mobile-cnt {
    position: fixed;
    bottom: -100%;
    width: 100%;
    background: #FFFFFF;
    border-bottom: 1px solid #EDEDED;
    border-radius: 8px 8px 0 0;
    -webkit-transition: all .4s ease;
    -o-transition: all .4s ease;
    transition: all .4s ease;
    z-index: -1;
}
.table-of-contents-mobile .table-of-contents-mobile-cnt.viewed {
    bottom: 80px;
    max-height: calc(100% - 80px);
    overflow: auto;
}
.table-of-contents-mobile .table-of-contents-mobile-cnt .title {
    color: #202020;
    font-family: Inter;
    font-size: 15px;
    font-weight: 500;
    line-height: 145%;
    letter-spacing: 0em;
    text-align: center;
    padding: 15px 0;
    border-bottom: 1px solid #EDEDED;
}
.table-of-contents-mobile .table-of-contents-mobile-cnt ol {
    counter-reset: num;
    margin: 0;
    padding: 15px 24px 15px 48px;
}
.table-of-contents-mobile .table-of-contents-mobile-cnt ol li+li {
    margin-top: 8px;    
}
.table-of-contents-mobile .table-of-contents-mobile-cnt ol li a {
    font-family: Inter;
    font-size: 14px;
    font-weight: 500;
    line-height: 185%;
    letter-spacing: 0em;
    text-align: left;    
    color: #2B2D33;
    display: block;
    cursor: pointer;
}
.table-of-contents-mobile .table-of-contents-mobile-cnt ol li.active {
    position: relative;
}
.table-of-contents-mobile .table-of-contents-mobile-cnt ol li.active a {
    color: #5381F6;
    display: contents;
}
.table-of-contents-mobile .table-of-contents-mobile-cnt ol li::marker {
    font-family: Inter;
    font-size: 14px;
    font-weight: 500;
    line-height: 185%;
    letter-spacing: 0em;
    text-align: left;
    color: #2B2D33;
}
.table-of-contents-mobile .table-of-contents-mobile-cnt ol li.active::marker {
    color: #5381F6;
}

body.table-of-contents-mobile-viewed:after {
    content: "";
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 999;
    background: #E3E3E3E5;
    -webkit-transition: all .4s ease;
    -o-transition: all .4s ease;
    transition: all .4s ease;
}






















</style>

<div class="table-of-contents absolute hidden" id="table-of-contents">
    <div class="table-of-contents-cnt">
        <div class="title">Список документов:</div>
        <ol>
            <li data-item-id="2"><a href="#pamytka-item-2">Кредитные договоры</a></li>
            <li data-item-id="3"><a href="#pamytka-item-3">Справки о задолженности</a></li>
            <li data-item-id="4"><a href="#pamytka-item-4">Справка по форме 67ф</a></li>
            <li data-item-id="5"><a href="#pamytka-item-5">Выписки из БКИ</a></li>
            <li data-item-id="6"><a href="#pamytka-item-6">Госпошлина и депозит суда</a></li>
            <li data-item-id="7"><a href="#pamytka-item-7">Доверенность в суд</a></li>
            <li data-item-id="8"><a href="#pamytka-item-8">Декларации по доходам ИП</a></li>
            <li data-item-id="9"><a href="#pamytka-item-9">Справка о задолженности перед налоговой</a></li>
            <li data-item-id="10"><a href="#pamytka-item-10">Уведомление о снятии с учета в качестве ИП</a></li>
            <li data-item-id="11"><a href="#pamytka-item-11">Постановления об испол. производствах</a></li>
            <li data-item-id="12"><a href="#pamytka-item-12">Справки по форме 2-НДФЛ</a></li>
            <li data-item-id="13"><a href="#pamytka-item-13">Копия трудовой книжки</a></li>
            <li data-item-id="14"><a href="#pamytka-item-14">Выписка CЗИ-6 из ПФР</a></li>
            <li data-item-id="15"><a href="#pamytka-item-15">Справка из ГИБДД </a></li>
            <li data-item-id="16"><a href="#pamytka-item-16">Выписка из ЕГРН</a></li>
            <li data-item-id="17"><a href="#pamytka-item-17">Выписка из ЕГРН ФНС</a></li>
        </ol>
    </div>
</div>

<div class="table-of-contents-tablet absolute hidden">
    <div class="icon">
        <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.000365954 15.0005C0.000163845 6.71601 6.71601 4.25494e-05 15.0005 9.50356e-05L56.8753 0.000360334C64.1239 0.000360334 70 5.22368 70 11.667V58.3334C70 64.7767 64.1239 70 56.8753 70H13.1262C5.87756 70 0.00142311 64.7767 0.00142311 58.3334L0.000365954 15.0005Z" fill="url(#paint0_linear_918_1831)"/><rect x="20" y="19" width="38" height="5" rx="2.5" fill="white"/><rect x="20" y="28" width="38" height="5" rx="2.5" fill="white"/><rect x="20" y="37" width="38" height="5" rx="2.5" fill="white"/><rect x="20" y="46" width="38" height="5" rx="2.5" fill="white"/><rect x="12" y="19" width="5" height="5" rx="2.5" fill="white"/><rect x="12" y="28" width="5" height="5" rx="2.5" fill="white"/><rect x="12" y="37" width="5" height="5" rx="2.5" fill="white"/><rect x="12" y="46" width="5" height="5" rx="2.5" fill="white"/><defs><linearGradient id="paint0_linear_918_1831" x1="35" y1="0" x2="35" y2="70" gradientUnits="userSpaceOnUse"><stop stop-color="#5A8EFF"/><stop offset="0.708333" stop-color="#3C70F4"/></linearGradient></defs></svg>        
        <span>Оглавление</span>
    </div>
    <div class="table-of-contents-tablet-cnt">
        <button class="back">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.25 25L6.25 16L15.25 7M7.5 16H25.75" stroke="#393939" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>    
        </button>
        <div class="title">Cписок документов:</div>
        <ol>
            <li data-item-id="2"><a href="#pamytka-item-2">Кредитные договоры</a></li>
            <li data-item-id="3"><a href="#pamytka-item-3">Справки о задолженности</a></li>
            <li data-item-id="4"><a href="#pamytka-item-4">Справка по форме 67ф</a></li>
            <li data-item-id="5"><a href="#pamytka-item-5">Выписки из БКИ</a></li>
            <li data-item-id="6"><a href="#pamytka-item-6">Госпошлина и депозит суда</a></li>
            <li data-item-id="7"><a href="#pamytka-item-7">Доверенность в суд</a></li>
            <li data-item-id="8"><a href="#pamytka-item-8">Декларации по доходам ИП</a></li>
            <li data-item-id="9"><a href="#pamytka-item-9">Справка о задолженности перед налоговой</a></li>
            <li data-item-id="10"><a href="#pamytka-item-10">Уведомление о снятии с учета в качестве ИП</a></li>
            <li data-item-id="11"><a href="#pamytka-item-11">Постановления об испол. производствах</a></li>
            <li data-item-id="12"><a href="#pamytka-item-12">Справки по форме 2-НДФЛ</a></li>
            <li data-item-id="13"><a href="#pamytka-item-13">Копия трудовой книжки</a></li>
            <li data-item-id="14"><a href="#pamytka-item-14">Выписка CЗИ-6 из ПФР</a></li>
            <li data-item-id="15"><a href="#pamytka-item-15">Справка из ГИБДД </a></li>
            <li data-item-id="16"><a href="#pamytka-item-16">Выписка из ЕГРН</a></li>
            <li data-item-id="17"><a href="#pamytka-item-17">Выписка из ЕГРН ФНС</a></li>
        </ol>
    </div>
</div>

<div class="table-of-contents-mobile fixed hidden">
    <div class="text">
        <span class="list-docs">Открыть cписок документов</span>
        <span class="close hidden">Свернуть cписок документов</span>
    </div>
    <div class="table-of-contents-mobile-cnt">
        <div class="title">Список документов:</div>
        <ol>
            <li data-item-id="2"><a href="#pamytka-item-2">Кредитные договоры</a></li>
            <li data-item-id="3"><a href="#pamytka-item-3">Справки о задолженности</a></li>
            <li data-item-id="4"><a href="#pamytka-item-4">Справка по форме 67ф</a></li>
            <li data-item-id="5"><a href="#pamytka-item-5">Выписки из БКИ</a></li>
            <li data-item-id="6"><a href="#pamytka-item-6">Госпошлина и депозит суда</a></li>
            <li data-item-id="7"><a href="#pamytka-item-7">Доверенность в суд</a></li>
            <li data-item-id="8"><a href="#pamytka-item-8">Декларации по доходам ИП</a></li>
            <li data-item-id="9"><a href="#pamytka-item-9">Справка о задолженности перед налоговой</a></li>
            <li data-item-id="10"><a href="#pamytka-item-10">Уведомление о снятии с учета в качестве ИП</a></li>
            <li data-item-id="11"><a href="#pamytka-item-11">Постановления об испол. производствах</a></li>
            <li data-item-id="12"><a href="#pamytka-item-12">Справки по форме 2-НДФЛ</a></li>
            <li data-item-id="13"><a href="#pamytka-item-13">Копия трудовой книжки</a></li>
            <li data-item-id="14"><a href="#pamytka-item-14">Выписка CЗИ-6 из ПФР</a></li>
            <li data-item-id="15"><a href="#pamytka-item-15">Справка из ГИБДД </a></li>
            <li data-item-id="16"><a href="#pamytka-item-16">Выписка из ЕГРН</a></li>
            <li data-item-id="17"><a href="#pamytka-item-17">Выписка из ЕГРН ФНС</a></li>
        </ol>
    </div>
</div>