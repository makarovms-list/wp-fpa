<style>
    section#refferal_recomended {}
    section#refferal_recomended .h2 {
        font-weight: 700;
        font-size: 34px;
        line-height: 145%;
        text-align: center;
        color: #393939;
        margin-bottom: 20px;
    }
    section#refferal_recomended .subtitle {
        font-weight: 400;
        font-size: 18px;
        line-height: 145%;
        text-align: center;
        color: #717B97;
        margin-bottom: 60px;    
    }
    section#refferal_recomended .refferal_recomended__cnt {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: calc(50% - 16px) calc(50% - 16px);
        grid-column-gap: 32px;
        grid-row-gap: 32px;
    }
    section#refferal_recomended .refferal_recomended__cnt .refferal_recomended__item .item_title {
        font-weight: 700;
        font-size: 22px;
        line-height: 145%;
        margin-bottom: 20px;
    }
    section#refferal_recomended .refferal_recomended__cnt .refferal_recomended__item:first-child .item_title {
        color: #5381F6;
    }
    section#refferal_recomended .refferal_recomended__cnt .refferal_recomended__item:last-child .item_title {
        color: #FB5A80;
    }
    section#refferal_recomended .refferal_recomended__cnt .refferal_recomended__item .recomended__el+.recomended__el {
        margin-top: 15px;
    }
    section#refferal_recomended .refferal_recomended__cnt .refferal_recomended__item .recomended__el .el_title {
        font-weight: 500;
        font-size: 14px;
        line-height: 145%;
        color: #393939;
        margin-bottom: 5px;
    }
    section#refferal_recomended .refferal_recomended__cnt .refferal_recomended__item .recomended__el .el_icon {
        background: #F3F4F4;
        border-radius: 10px;
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 25px auto;
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        min-height: 90px;
        align-items: center;
        padding: 0 32px;
    }
    section#refferal_recomended .refferal_recomended__cnt .refferal_recomended__item .recomended__el .el_icon svg {
        height: 25px;
        width: 25px;
    }
    section#refferal_recomended .refferal_recomended__cnt .refferal_recomended__item .recomended__el .el_icon .desc {
        font-weight: 400;
        font-size: 16px;
        line-height: 145%;
        color: #717B97;
    }
    
    section#refferal_recomended .recomended_intro__cnt {
        margin-top: 60px;
    }
    section#refferal_recomended .recomended_intro__cnt img {
        height: 134px;
        width: auto;
        margin: 0 auto 60px;
    }
    section#refferal_recomended img.stars_icon {
        height: 134px;
        width: auto;
        margin: 0 auto 60px;
    }
    section#refferal_recomended .recomended_intro__cnt .h3 {
        font-weight: 700;
        font-size: 34px;
        line-height: 145%;
        text-align: center;
        color: #393939;
        margin-bottom: 60px;
    }
    section#refferal_recomended .recomended_intro__cnt .recomended_grid__cnt {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 400px 300px 300px;
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        text-align: center;
        justify-content: space-between;
    }
    section#refferal_recomended .recomended_intro__cnt .recomended_grid__cnt .grid_el svg {
        margin-bottom: 40px;
    }
    section#refferal_recomended .recomended_intro__cnt .recomended_grid__cnt .grid_el .el_title {
        font-family: 'Montserrat';
        font-weight: 700;
        font-size: 45px;
        line-height: 100%;
        text-align: center;
        color: #5381F6;
        margin-bottom: 10px;
    }
    section#refferal_recomended .recomended_intro__cnt .recomended_grid__cnt .grid_el .el_subtitle {
        font-weight: 400;
        font-size: 18px;
        line-height: 145%;
        color: #717B97;
    }
    .refferal_recomended__cnt_title {
        display: none;
    }
    section#refferal_recomended .refferal_recomended__cnt .refferal_recomended__item .item_title.mobile {
        display: none;
    }
    .refferal_recomended__cnt {
        margin-top: 20px;
    }
    section#refferal_recomended .refferal_recomended__cnt .refferal_recomended__item .recomended__el .el_icon.three_elem {
        grid-template-columns: 25px auto 14px;
    }
    section#refferal_recomended .refferal_recomended__cnt .refferal_recomended__item .recomended__el .el_icon.three_elem svg.cursor {
        cursor: pointer;
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
    }
    
    section#refferal_recomended .refferal_recomended__cnt .refferal_recomended__item .recomended__el .el_icon.three_elem.blue svg.cursor:hover path {
        fill: #5381F6;
    }
    section#refferal_recomended .refferal_recomended__cnt .refferal_recomended__item .recomended__el .el_icon.three_elem.red svg.cursor:hover path {
        fill: #FB5A80;
    }
    
    .section--modal .modal__wrap--theirs__guarantees .title__cnt,
    .section--modal .modal__wrap--our__guarantees .title__cnt {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: auto 41px;
        grid-column-gap: 32px;
        grid-row-gap: 32px;
        align-items: center;
        margin-bottom: 20px;
    }
    .section--modal .modal__wrap--theirs__guarantees .title__cnt .h3,
    .section--modal .modal__wrap--our__guarantees .title__cnt .h3 {
        font-weight: 700;
        font-size: 16px;
        line-height: 145%;
    }
    .section--modal .modal__wrap--theirs__guarantees .title__cnt .h3 {
        color: #FB5A80;
    }
    .section--modal .modal__wrap--our__guarantees .title__cnt .h3 {
        color: #5381F6;
    }
    .section--modal .modal__wrap--theirs__guarantees .content__cnt p,
    .section--modal .modal__wrap--our__guarantees .content__cnt p {
        font-weight: 500;
        font-size: 14px;
        line-height: 145%;
        color: #393939;
        margin-bottom: 0;
    }
    .section--modal .modal__wrap--theirs__guarantees .content__cnt p span {
        color: #FB5A80;
        font-weight: 700;
    }
    .section--modal .modal__wrap--our__guarantees .content__cnt p span {
        color: #5381F6;
        font-weight: 700;
    }
    
    
    @media (max-width: 1200px) {
        section#refferal_recomended .recomended_intro__cnt .recomended_grid__cnt {
            grid-template-columns: calc(50% - 8px) calc(50% - 8px);
            grid-row-gap: 40px;
        }
        section#refferal_recomended .recomended_intro__cnt .recomended_grid__cnt .grid_el {
            max-width: 400px;
            margin: 0 auto;
        }
    }
    @media (max-width: 998px) {
        section#refferal_recomended .recomended_intro__cnt .recomended_grid__cnt {
            grid-template-columns: 100%;
        }
        section#refferal_recomended .recomended_intro__cnt .recomended_grid__cnt .grid_el svg {
            height: 70px;
            width: auto;
        }
    }
    @media (max-width: 768px) {
        section#refferal_recomended .h2 {
            font-size: 30px;
        }
        section#refferal_recomended .recomended_intro__cnt .h3 {
            font-size: 30px;
        }
        section#refferal_recomended .refferal_recomended__cnt .refferal_recomended__item .item_title {
            font-size: 18px;
        }
        section#refferal_recomended img.stars_icon {
            height: 100px;
            width: auto;
        }
        section#refferal_recomended .recomended_intro__cnt .recomended_grid__cnt .grid_el svg {
            height: 70px;
            width: auto;
        }
        section#refferal_recomended img.stars_icon {
            margin: 0 auto 20px;
        }
    }
    @media (max-width: 660px) {
        section#refferal_recomended .refferal_recomended__cnt {
            grid-template-columns: 100%;
        }
    }
    @media (max-width: 540px) {
        .refferal_recomended__cnt {
            margin-top: 0px;
        }
        section#refferal_recomended .refferal_recomended__cnt .refferal_recomended__item .item_title.mobile {
            display: block;
        }
        section#refferal_recomended .h2 {
            font-size: 18px;
            text-align: left;
        }
        section#refferal_recomended .subtitle {
            font-size: 16px;
            text-align: left;
            margin-bottom: 35px;
        }
        section#refferal_recomended .recomended_intro__cnt .h3 {
            font-size: 18px;
            margin-bottom: 20px;
        }
        section#refferal_recomended .recomended_intro__cnt .recomended_grid__cnt .grid_el .el_title {
            font-size: 24px;
        }
        section#refferal_recomended .refferal_recomended__cnt .refferal_recomended__item .recomended__el .el_title {
            font-size: 12px;
        }
        section#refferal_recomended img.stars_icon {
            height: 70px;
            width: auto;
        }
        section#refferal_recomended .recomended_intro__cnt .recomended_grid__cnt .grid_el svg {
            display: none;
        }
        section#refferal_recomended .refferal_recomended__cnt .refferal_recomended__item .recomended__el .el_title {
            display: none;
        }
        .refferal_recomended__cnt+.refferal_recomended__cnt_title {
            margin-top: 20px;
        }
        .refferal_recomended__cnt_title {
            font-weight: 700;
            font-size: 16px;
            line-height: 145%;
            color: #393939; 
            margin-bottom: 15px;
        }
        section#refferal_recomended .recomended_intro__cnt .recomended_grid__cnt {
            grid-row-gap: 25px;
        }
        section#refferal_recomended .refferal_recomended__cnt {
            grid-column-gap: 10px;
            grid-row-gap: 10px;
        }
        section#refferal_recomended .refferal_recomended__cnt .refferal_recomended__item:first-child .item_title,
        section#refferal_recomended .refferal_recomended__cnt .refferal_recomended__item:last-child .item_title {
            font-weight: 500;
            font-size: 14px;
            line-height: 145%;
            margin-bottom: 5px;
        }
        section#refferal_recomended .recomended_intro__cnt .recomended_grid__cnt .grid_el .el_subtitle {
            font-size: 14px;
        }
        .refferal_recomended__cnt_title {
            display: block;
        }
        section#refferal_recomended .refferal_recomended__cnt .refferal_recomended__item .recomended__el .el_icon {
            min-height: 44px;
            padding: 10px 32px;
        }
        
        
        
    }
</style>
<section class="refferal_recomended section--services-grey" id="refferal_recomended">
    <div class="container">
        <div class="refferal_recomended__wrap">
            <img class="stars_icon" src="/wp-content/themes/fpalaw/assets/img/refferals/stars.png" />
            <div class="h2">Почему рекомендуют именно нас</div>
            <div class="subtitle">Разница между ФПА и любой другой юридической компанией в СПб:</div>
            <div class="refferal_recomended__cnt_title">Количество дел</div>
            <div class="refferal_recomended__cnt">
                <div class="refferal_recomended__item">
                    <div class="item_title">Финансово-правовой Альянс</div>
                    <div class="recomended__el">
                        <div class="el_title">Количество дел</div>
                        <div class="el_icon">
                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 13.7812C-4.71612e-09 13.4735 0.0623382 13.1687 0.183455 12.8843C0.304572 12.6 0.482095 12.3416 0.70589 12.124C0.929684 11.9063 1.19537 11.7337 1.48777 11.6159C1.78017 11.4981 2.09356 11.4375 2.41006 11.4375C2.72655 11.4375 3.03995 11.4981 3.33235 11.6159C3.62475 11.7337 3.89043 11.9063 4.11423 12.124C4.33802 12.3416 4.51554 12.6 4.63666 12.8843C4.75778 13.1687 4.82012 13.4735 4.82012 13.7812V23.1562C4.82012 23.7779 4.5662 24.374 4.11423 24.8135C3.66225 25.2531 3.04925 25.5 2.41006 25.5C1.77087 25.5 1.15786 25.2531 0.70589 24.8135C0.253916 24.374 9.52463e-09 23.7779 0 23.1562V13.7812Z" fill="#5381F6"/><path d="M6.42682 13.5203V22.0047C6.42654 22.5854 6.59266 23.1547 6.90655 23.6488C7.22043 24.1428 7.66966 24.542 8.20384 24.8016L8.28417 24.8406C9.17571 25.274 10.1587 25.4997 11.1554 25.5H19.8573C20.6004 25.5003 21.3207 25.2501 21.8955 24.792C22.4702 24.3339 22.864 23.6962 23.0096 22.9875L24.9377 13.6125C25.0308 13.1592 25.0194 12.6914 24.9043 12.2429C24.7891 11.7944 24.573 11.3763 24.2716 11.0188C23.9703 10.6613 23.5911 10.3732 23.1614 10.1754C22.7317 9.97766 22.2623 9.87505 21.7869 9.875H16.0671V3.625C16.0671 2.7962 15.7285 2.00134 15.1259 1.41529C14.5232 0.82924 13.7059 0.5 12.8536 0.5C12.4275 0.5 12.0188 0.66462 11.7175 0.957646C11.4162 1.25067 11.2469 1.6481 11.2469 2.0625V3.10469C11.2469 4.457 10.7959 5.77284 9.96157 6.85469L7.71219 9.77031C6.87784 10.8522 6.42682 12.168 6.42682 13.5203Z" fill="#5381F6"/></svg>
                            <div class="desc">Более 9300 дел</div>
                        </div>
                    </div>
                </div>
                <div class="refferal_recomended__item">
                    <div class="item_title">Другая компания</div>
                    <div class="recomended__el">
                        <div class="el_title">Количество дел</div>
                        <div class="el_icon">
                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6221_109583)"><path d="M7.42682 3.99483V3.99531V12.4797C7.42682 13.6085 7.80311 14.7101 8.50394 15.6189C8.50398 15.6189 8.50401 15.6189 8.50405 15.619L10.7533 18.5345L10.7534 18.5346C11.7212 19.7895 12.2469 21.3196 12.2469 22.8953V23.9375C12.2469 24.0775 12.3039 24.2177 12.4147 24.3255C12.5265 24.4342 12.6839 24.5 12.8536 24.5C13.4495 24.5 14.0156 24.2695 14.4287 23.8678C14.8408 23.467 15.0671 22.9294 15.0671 22.375V16.125V15.125H16.0671H21.7868C21.7869 15.125 21.7869 15.125 21.7869 15.125C22.1187 15.125 22.4454 15.0533 22.7433 14.9162C23.0411 14.7791 23.3015 14.5805 23.5071 14.3367C23.7125 14.093 23.8583 13.8099 23.9357 13.5084C24.0131 13.2071 24.0207 12.8932 23.9582 12.5889C23.9582 12.5889 23.9582 12.5889 23.9581 12.5888L22.0301 3.21394L22.0301 3.21382C21.9324 2.73838 21.6671 2.30478 21.2722 1.99003C20.8767 1.67484 20.377 1.4998 19.8577 1.5H19.8573H11.1557C11.1556 1.5 11.1555 1.5 11.1554 1.5C10.3093 1.50031 9.47598 1.692 8.72146 2.0587C8.72141 2.05872 8.72137 2.05874 8.72132 2.05877L8.64112 2.09776L8.64091 2.09786C8.27084 2.2777 7.96357 2.55232 7.7506 2.88752C7.5378 3.22243 7.42663 3.6058 7.42682 3.99483ZM1 12.2188C1 12.3913 1.03491 12.5628 1.10348 12.7238C1.17208 12.8849 1.2734 13.033 1.40307 13.1591C1.53279 13.2853 1.6883 13.3868 1.86141 13.4565C2.03456 13.5263 2.22107 13.5625 2.41006 13.5625C2.59904 13.5625 2.78555 13.5263 2.9587 13.4565C3.13181 13.3868 3.28733 13.2853 3.41705 13.1591C3.54672 13.033 3.64804 12.8849 3.71664 12.7238C3.78521 12.5628 3.82012 12.3913 3.82012 12.2188V2.84375C3.82012 2.49651 3.67853 2.15766 3.41705 1.90337C3.15462 1.64816 2.79289 1.5 2.41006 1.5C2.02723 1.5 1.6655 1.64816 1.40307 1.90337C1.14158 2.15766 1 2.49651 1 2.84375V12.2188Z" stroke="#FB5A80" stroke-width="2"/></g><defs><clipPath id="clip0_6221_109583"><rect width="25" height="25" fill="white" transform="matrix(1 0 0 -1 0 25.5)"/></clipPath></defs></svg>
                            <div class="desc">Менее 150 дел</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="refferal_recomended__cnt_title">Штат сотрудников</div>
            <div class="refferal_recomended__cnt">
                <div class="refferal_recomended__item">
                    <div class="item_title mobile">Финансово-правовой Альянс</div>
                    <div class="recomended__el">
                        <div class="el_title">Штат сотрудников</div>
                        <div class="el_icon">
                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6221_109439)"><path d="M25 13C25 19.9036 19.4036 25.5 12.5 25.5C5.59644 25.5 0 19.9036 0 13C0 6.09644 5.59644 0.5 12.5 0.5C19.4036 0.5 25 6.09644 25 13ZM2.28942 13C2.28942 18.6391 6.86085 23.2106 12.5 23.2106C18.1391 23.2106 22.7106 18.6391 22.7106 13C22.7106 7.36085 18.1391 2.78942 12.5 2.78942C6.86085 2.78942 2.28942 7.36085 2.28942 13Z" fill="#5381F6"/><path d="M12.4995 13.175C13.3398 13.175 14.1458 12.8497 14.74 12.2707C15.3343 11.6917 15.6681 10.9064 15.6681 10.0875C15.6681 9.26864 15.3343 8.48332 14.74 7.90431C14.1458 7.32529 13.3398 7 12.4995 7C11.6591 7 10.8531 7.32529 10.2589 7.90431C9.66468 8.48332 9.33085 9.26864 9.33085 10.0875C9.33085 10.9064 9.66468 11.6917 10.2589 12.2707C10.8531 12.8497 11.6591 13.175 12.4995 13.175Z" fill="#5381F6"/><path d="M5 22C5 22 6.69033 15.4831 12.4995 15.4831C18.3086 15.4831 20 22 20 22L12.4995 24L5 22Z" fill="#5381F6"/><path d="M12.4995 13.175C13.3398 13.175 14.1458 12.8497 14.74 12.2707C15.3343 11.6917 15.6681 10.9064 15.6681 10.0875C15.6681 9.26864 15.3343 8.48332 14.74 7.90431C14.1458 7.32529 13.3398 7 12.4995 7C11.6591 7 10.8531 7.32529 10.2589 7.90431C9.66468 8.48332 9.33085 9.26864 9.33085 10.0875C9.33085 10.9064 9.66468 11.6917 10.2589 12.2707C10.8531 12.8497 11.6591 13.175 12.4995 13.175Z" stroke="#5381F6" stroke-width="1.5625" stroke-linecap="round" stroke-linejoin="round"/><path d="M5 22C5 22 6.69033 15.4831 12.4995 15.4831C18.3086 15.4831 20 22 20 22L12.4995 24L5 22Z" stroke="#5381F6" stroke-width="1.5625" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_6221_109439"><rect width="25" height="25" fill="white" transform="translate(0 0.5)"/></clipPath></defs></svg>
                            <div class="desc">>300 юристов и адвокатов</div>
                        </div>
                    </div>
                </div>
                <div class="refferal_recomended__item">
                    <div class="item_title mobile">Другая компания</div>
                    <div class="recomended__el">
                        <div class="el_title">Штат сотрудников</div>
                        <div class="el_icon">
                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6221_109650)"><path d="M25 13C25 19.9036 19.4036 25.5 12.5 25.5C5.59644 25.5 0 19.9036 0 13C0 6.09644 5.59644 0.5 12.5 0.5C19.4036 0.5 25 6.09644 25 13ZM2.28942 13C2.28942 18.6391 6.86085 23.2106 12.5 23.2106C18.1391 23.2106 22.7106 18.6391 22.7106 13C22.7106 7.36085 18.1391 2.78942 12.5 2.78942C6.86085 2.78942 2.28942 7.36085 2.28942 13Z" fill="#FB5A80"/><path d="M12.4995 13.175C13.3398 13.175 14.1458 12.8497 14.74 12.2707C15.3343 11.6917 15.6681 10.9064 15.6681 10.0875C15.6681 9.26864 15.3343 8.48332 14.74 7.90431C14.1458 7.32529 13.3398 7 12.4995 7C11.6591 7 10.8531 7.32529 10.2589 7.90431C9.66468 8.48332 9.33085 9.26864 9.33085 10.0875C9.33085 10.9064 9.66468 11.6917 10.2589 12.2707C10.8531 12.8497 11.6591 13.175 12.4995 13.175Z" stroke="#FB5A80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M5 22C5 22 6.69033 15.4831 12.4995 15.4831C18.3086 15.4831 20 22 20 22L12.4995 24L5 22Z" stroke="#FB5A80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_6221_109650"><rect width="25" height="25" fill="white" transform="translate(0 0.5)"/></clipPath></defs></svg>
                            <div class="desc">Не более 20 сотрудников в штате</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="refferal_recomended__cnt_title">Гарантия</div>
            <div class="refferal_recomended__cnt">
                <div class="refferal_recomended__item">
                    <div class="item_title mobile">Финансово-правовой Альянс</div>
                    <div class="recomended__el">
                        <div class="el_title">Гарантия</div>
                        <div class="el_icon three_elem blue">
                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6437_2957)"><path d="M24.5605 25.0605C24.2676 25.3535 23.9176 25.5 23.5107 25.5C23.1038 25.5 22.7539 25.3535 22.4609 25.0605L12.2061 14.8057C11.8156 14.4152 11.1824 14.4152 10.7919 14.8057L9.64265 15.955C9.25213 16.3455 9.29661 16.9971 9.36292 17.5454C9.37097 17.6119 9.375 17.6797 9.375 17.7485C9.375 18.1636 9.22852 18.5176 8.93555 18.8105C8.64258 19.1035 8.28857 19.25 7.87353 19.25C7.4585 19.25 7.10449 19.1035 6.81152 18.8105L0.439453 12.4385C0.146484 12.1455 0 11.7915 0 11.3765C0 10.9614 0.146484 10.6074 0.439453 10.3145C0.732422 10.0215 1.08643 9.875 1.50146 9.875C1.57337 9.875 1.64417 9.88013 1.71362 9.89013C2.26026 9.96888 2.90447 10.0223 3.295 9.63176L9.13176 3.795C9.52228 3.40447 9.46888 2.76026 9.39013 2.21362C9.38013 2.14417 9.375 2.07337 9.375 2.00146C9.375 1.58643 9.52148 1.23242 9.81445 0.939453C10.1074 0.646484 10.4614 0.5 10.8765 0.5C11.2915 0.5 11.6455 0.646484 11.9385 0.939453L18.3105 7.31152C18.6035 7.60449 18.75 7.9585 18.75 8.37353C18.75 8.78857 18.6035 9.14258 18.3105 9.43555C18.0176 9.72852 17.6636 9.875 17.2485 9.875C17.1766 9.875 17.1058 9.86987 17.0364 9.85987C16.4897 9.78112 15.8455 9.72771 15.455 10.1182L14.305 11.2683C13.9147 11.6585 13.9144 12.2911 14.3042 12.6817L24.5605 22.9609C24.8535 23.2539 25 23.6038 25 24.0107C25 24.4176 24.8535 24.7676 24.5605 25.0605Z" fill="#5381F6"/></g><defs><clipPath id="clip0_6437_2957"><rect width="25" height="25" fill="white" transform="translate(0 0.5)"/></clipPath></defs></svg>
                            <div class="desc">Полная гарантия списания долгов</div>
                            <svg data-popup-id="our__guarantees" class="cursor" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 0C5.61553 0 4.26215 0.410543 3.11101 1.17971C1.95987 1.94888 1.06266 3.04213 0.532846 4.32121C0.00303299 5.6003 -0.13559 7.00776 0.134506 8.36563C0.404603 9.7235 1.07129 10.9708 2.05026 11.9497C3.02922 12.9287 4.2765 13.5954 5.63437 13.8655C6.99224 14.1356 8.3997 13.997 9.67879 13.4672C10.9579 12.9373 12.0511 12.0401 12.8203 10.889C13.5895 9.73784 14 8.38447 14 7C14 6.08075 13.8189 5.17049 13.4672 4.32121C13.1154 3.47194 12.5998 2.70026 11.9497 2.05025C11.2997 1.40024 10.5281 0.884626 9.67879 0.532843C8.82951 0.18106 7.91925 0 7 0ZM7.7 9.8C7.7 9.98565 7.62625 10.1637 7.49498 10.295C7.3637 10.4262 7.18565 10.5 7 10.5C6.81435 10.5 6.6363 10.4262 6.50503 10.295C6.37375 10.1637 6.3 9.98565 6.3 9.8V6.3C6.3 6.11435 6.37375 5.9363 6.50503 5.80502C6.6363 5.67375 6.81435 5.6 7 5.6C7.18565 5.6 7.3637 5.67375 7.49498 5.80502C7.62625 5.9363 7.7 6.11435 7.7 6.3V9.8ZM7 4.9C6.86155 4.9 6.72622 4.85894 6.6111 4.78203C6.49599 4.70511 6.40627 4.59579 6.35329 4.46788C6.3003 4.33997 6.28644 4.19922 6.31345 4.06344C6.34046 3.92765 6.40713 3.80292 6.50503 3.70502C6.60292 3.60713 6.72765 3.54046 6.86344 3.51345C6.99923 3.48644 7.13997 3.5003 7.26788 3.55328C7.39579 3.60626 7.50511 3.69599 7.58203 3.8111C7.65895 3.92621 7.7 4.06155 7.7 4.2C7.7 4.38565 7.62625 4.5637 7.49498 4.69497C7.3637 4.82625 7.18565 4.9 7 4.9Z" fill="#8FBDFF"/></svg>
                        </div>
                    </div>
                </div>
                <div class="refferal_recomended__item">
                    <div class="item_title mobile">Другая компания</div>
                    <div class="recomended__el">
                        <div class="el_title">Гарантия</div>
                        <div class="el_icon three_elem red">
                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6437_3010)"><path d="M23.8527 23.6673L23.8534 23.668C23.9627 23.7773 24 23.8744 24 24.0107C24 24.1471 23.9627 24.2442 23.8534 24.3534C23.7442 24.4627 23.6471 24.5 23.5107 24.5C23.3744 24.5 23.2773 24.4627 23.168 24.3534L12.9132 14.0986C12.1322 13.3176 10.8659 13.3176 10.0848 14.0986L8.93555 15.2479C8.51901 15.6644 8.37974 16.1787 8.33694 16.5867C8.2948 16.9882 8.3363 17.3855 8.37016 17.6654C8.37326 17.6911 8.375 17.7188 8.375 17.7485C8.375 17.8989 8.33351 17.9984 8.22844 18.1034C8.12337 18.2085 8.02388 18.25 7.87353 18.25C7.72319 18.25 7.6237 18.2085 7.51863 18.1034L1.14656 11.7314C1.04149 11.6263 1 11.5268 1 11.3765C1 11.2261 1.04149 11.1266 1.14656 11.0216C1.25163 10.9165 1.35112 10.875 1.50146 10.875C1.52572 10.875 1.54887 10.8767 1.57104 10.8799C1.85283 10.9205 2.25057 10.9699 2.65456 10.9327C3.06682 10.8947 3.58318 10.7578 4.0021 10.3389L9.83887 4.5021C10.2578 4.08318 10.3947 3.56682 10.4327 3.15456C10.4699 2.75057 10.4205 2.35283 10.3799 2.07104C10.3767 2.04887 10.375 2.02572 10.375 2.00146C10.375 1.85112 10.4165 1.75163 10.5216 1.64656C10.6266 1.54149 10.7261 1.5 10.8765 1.5C11.0268 1.5 11.1263 1.54149 11.2314 1.64656L17.6034 8.01863C17.7085 8.1237 17.75 8.22319 17.75 8.37353C17.75 8.52388 17.7085 8.62337 17.6034 8.72844C17.4984 8.83351 17.3989 8.875 17.2485 8.875C17.2243 8.875 17.2011 8.87328 17.179 8.87008C16.8972 8.82949 16.4994 8.78009 16.0954 8.81729C15.6832 8.85526 15.1668 8.9922 14.7479 9.41113L13.5978 10.5612C12.8174 11.3416 12.8167 12.6067 13.5963 13.388L23.8527 23.6673Z" stroke="#FB5A80" stroke-width="2"/></g><defs><clipPath id="clip0_6437_3010"><rect width="25" height="25" fill="white" transform="translate(0 0.5)"/></clipPath></defs></svg>
                            <div class="desc">Неполная (гарантия только банкротства)</div>
                            <svg data-popup-id="theirs__guarantees" class="cursor" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 0C5.61553 0 4.26215 0.410543 3.11101 1.17971C1.95987 1.94888 1.06266 3.04213 0.532846 4.32121C0.00303299 5.6003 -0.13559 7.00776 0.134506 8.36563C0.404603 9.7235 1.07129 10.9708 2.05026 11.9497C3.02922 12.9287 4.2765 13.5954 5.63437 13.8655C6.99224 14.1356 8.3997 13.997 9.67879 13.4672C10.9579 12.9373 12.0511 12.0401 12.8203 10.889C13.5895 9.73784 14 8.38447 14 7C14 6.08075 13.8189 5.17049 13.4672 4.32121C13.1154 3.47194 12.5998 2.70026 11.9497 2.05025C11.2997 1.40024 10.5281 0.884626 9.67879 0.532843C8.82951 0.18106 7.91925 0 7 0ZM7.7 9.8C7.7 9.98565 7.62625 10.1637 7.49498 10.295C7.3637 10.4262 7.18565 10.5 7 10.5C6.81435 10.5 6.6363 10.4262 6.50503 10.295C6.37375 10.1637 6.3 9.98565 6.3 9.8V6.3C6.3 6.11435 6.37375 5.9363 6.50503 5.80502C6.6363 5.67375 6.81435 5.6 7 5.6C7.18565 5.6 7.3637 5.67375 7.49498 5.80502C7.62625 5.9363 7.7 6.11435 7.7 6.3V9.8ZM7 4.9C6.86155 4.9 6.72622 4.85894 6.6111 4.78203C6.49599 4.70511 6.40627 4.59579 6.35329 4.46788C6.3003 4.33997 6.28644 4.19922 6.31345 4.06344C6.34046 3.92765 6.40713 3.80292 6.50503 3.70502C6.60292 3.60713 6.72765 3.54046 6.86344 3.51345C6.99923 3.48644 7.13997 3.5003 7.26788 3.55328C7.39579 3.60626 7.50511 3.69599 7.58203 3.8111C7.65895 3.92621 7.7 4.06155 7.7 4.2C7.7 4.38565 7.62625 4.5637 7.49498 4.69497C7.3637 4.82625 7.18565 4.9 7 4.9Z" fill="#FFAAD0"/></svg>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="refferal_recomended__cnt_title">Видеотзывы довольных клиентов</div>
            <div class="refferal_recomended__cnt">
                <div class="refferal_recomended__item">
                    <div class="item_title mobile">Финансово-правовой Альянс</div>
                    <div class="recomended__el">
                        <div class="el_title">Видеотзывы довольных клиентов</div>
                        <div class="el_icon">
                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23.75 19.25V6.75C23.75 5.375 22.625 4.25 21.25 4.25H3C1.625 4.25 0.5 5.375 0.5 6.75V19.25C0.5 20.625 1.625 21.75 3 21.75H21.25C22.625 21.75 23.75 20.625 23.75 19.25ZM10 18V8L17.5 13L10 18Z" fill="#5381F6"/></svg>
                            <div class="desc">Более 1000 видеоотзывов</div>
                        </div>
                    </div>
                </div>
                <div class="refferal_recomended__item">
                    <div class="item_title mobile">Другая компания</div>
                    <div class="recomended__el">
                        <div class="el_title">Видеотзывы довольных клиентов</div>
                        <div class="el_icon">
                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M24.9143 19.3571V9.49513L23.2391 11.1714L23.2038 11.1422L23.1934 11.1524L22.3499 10.4381L22.1306 10.2573L22.1332 10.2547L19.6613 8.16185L15.8985 11.1443L18.3071 12.75L10.3786 18.0357V14.9345L7.506 17.4602L6.55901 18.4938L3.11495 15.3383L0.335693 18.4503V19.3571C0.335693 20.8107 1.52498 22 2.97855 22H22.2714C23.725 22 24.9143 20.8107 24.9143 19.3571ZM0.335693 16.4325V6.14286C0.335693 4.68929 1.52498 3.5 2.97855 3.5H22.2714C23.725 3.5 24.9143 4.68929 24.9143 6.14286V7.47184L23.4391 8.94793L19.6331 5.7255L18.5295 6.803L14.3526 10.1137L10.3786 7.46429V12.6986L6.47153 16.1338L4.23473 14.0845L4.23698 14.082L4.03866 13.9048L3.27535 13.2055L3.26647 13.2152L3.23452 13.1867L0.335693 16.4325Z" fill="#FB5A80"/></svg>
                            <div class="desc">Менее 20 отзывов</div>
                        </div>
                    </div>
                </div>
            </div>
            
<!--
            <div class="refferal_recomended__cnt">
                <div class="refferal_recomended__item">
                    <div class="item_title">Финансово-правовой Альянс</div>
                    <div class="recomended__el">
                        <div class="el_title">Колличество дел</div>
                        <div class="el_icon">
                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 13.7812C-4.71612e-09 13.4735 0.0623382 13.1687 0.183455 12.8843C0.304572 12.6 0.482095 12.3416 0.70589 12.124C0.929684 11.9063 1.19537 11.7337 1.48777 11.6159C1.78017 11.4981 2.09356 11.4375 2.41006 11.4375C2.72655 11.4375 3.03995 11.4981 3.33235 11.6159C3.62475 11.7337 3.89043 11.9063 4.11423 12.124C4.33802 12.3416 4.51554 12.6 4.63666 12.8843C4.75778 13.1687 4.82012 13.4735 4.82012 13.7812V23.1562C4.82012 23.7779 4.5662 24.374 4.11423 24.8135C3.66225 25.2531 3.04925 25.5 2.41006 25.5C1.77087 25.5 1.15786 25.2531 0.70589 24.8135C0.253916 24.374 9.52463e-09 23.7779 0 23.1562V13.7812Z" fill="#5381F6"/><path d="M6.42682 13.5203V22.0047C6.42654 22.5854 6.59266 23.1547 6.90655 23.6488C7.22043 24.1428 7.66966 24.542 8.20384 24.8016L8.28417 24.8406C9.17571 25.274 10.1587 25.4997 11.1554 25.5H19.8573C20.6004 25.5003 21.3207 25.2501 21.8955 24.792C22.4702 24.3339 22.864 23.6962 23.0096 22.9875L24.9377 13.6125C25.0308 13.1592 25.0194 12.6914 24.9043 12.2429C24.7891 11.7944 24.573 11.3763 24.2716 11.0188C23.9703 10.6613 23.5911 10.3732 23.1614 10.1754C22.7317 9.97766 22.2623 9.87505 21.7869 9.875H16.0671V3.625C16.0671 2.7962 15.7285 2.00134 15.1259 1.41529C14.5232 0.82924 13.7059 0.5 12.8536 0.5C12.4275 0.5 12.0188 0.66462 11.7175 0.957646C11.4162 1.25067 11.2469 1.6481 11.2469 2.0625V3.10469C11.2469 4.457 10.7959 5.77284 9.96157 6.85469L7.71219 9.77031C6.87784 10.8522 6.42682 12.168 6.42682 13.5203Z" fill="#5381F6"/></svg>
                            <div class="desc">Более 9300 дел</div>
                        </div>
                    </div>
                    <div class="recomended__el">
                        <div class="el_title">Штат сотрудников</div>
                        <div class="el_icon">
                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6221_109439)"><path d="M25 13C25 19.9036 19.4036 25.5 12.5 25.5C5.59644 25.5 0 19.9036 0 13C0 6.09644 5.59644 0.5 12.5 0.5C19.4036 0.5 25 6.09644 25 13ZM2.28942 13C2.28942 18.6391 6.86085 23.2106 12.5 23.2106C18.1391 23.2106 22.7106 18.6391 22.7106 13C22.7106 7.36085 18.1391 2.78942 12.5 2.78942C6.86085 2.78942 2.28942 7.36085 2.28942 13Z" fill="#5381F6"/><path d="M12.4995 13.175C13.3398 13.175 14.1458 12.8497 14.74 12.2707C15.3343 11.6917 15.6681 10.9064 15.6681 10.0875C15.6681 9.26864 15.3343 8.48332 14.74 7.90431C14.1458 7.32529 13.3398 7 12.4995 7C11.6591 7 10.8531 7.32529 10.2589 7.90431C9.66468 8.48332 9.33085 9.26864 9.33085 10.0875C9.33085 10.9064 9.66468 11.6917 10.2589 12.2707C10.8531 12.8497 11.6591 13.175 12.4995 13.175Z" fill="#5381F6"/><path d="M5 22C5 22 6.69033 15.4831 12.4995 15.4831C18.3086 15.4831 20 22 20 22L12.4995 24L5 22Z" fill="#5381F6"/><path d="M12.4995 13.175C13.3398 13.175 14.1458 12.8497 14.74 12.2707C15.3343 11.6917 15.6681 10.9064 15.6681 10.0875C15.6681 9.26864 15.3343 8.48332 14.74 7.90431C14.1458 7.32529 13.3398 7 12.4995 7C11.6591 7 10.8531 7.32529 10.2589 7.90431C9.66468 8.48332 9.33085 9.26864 9.33085 10.0875C9.33085 10.9064 9.66468 11.6917 10.2589 12.2707C10.8531 12.8497 11.6591 13.175 12.4995 13.175Z" stroke="#5381F6" stroke-width="1.5625" stroke-linecap="round" stroke-linejoin="round"/><path d="M5 22C5 22 6.69033 15.4831 12.4995 15.4831C18.3086 15.4831 20 22 20 22L12.4995 24L5 22Z" stroke="#5381F6" stroke-width="1.5625" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_6221_109439"><rect width="25" height="25" fill="white" transform="translate(0 0.5)"/></clipPath></defs></svg>
                            <div class="desc">>300 юристов и адвокатов в штате</div>
                        </div>
                    </div>
                    <div class="recomended__el">
                        <div class="el_title">Гарантия</div>
                        <div class="el_icon">
                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6437_2957)"><path d="M24.5605 25.0605C24.2676 25.3535 23.9176 25.5 23.5107 25.5C23.1038 25.5 22.7539 25.3535 22.4609 25.0605L12.2061 14.8057C11.8156 14.4152 11.1824 14.4152 10.7919 14.8057L9.64265 15.955C9.25213 16.3455 9.29661 16.9971 9.36292 17.5454C9.37097 17.6119 9.375 17.6797 9.375 17.7485C9.375 18.1636 9.22852 18.5176 8.93555 18.8105C8.64258 19.1035 8.28857 19.25 7.87353 19.25C7.4585 19.25 7.10449 19.1035 6.81152 18.8105L0.439453 12.4385C0.146484 12.1455 0 11.7915 0 11.3765C0 10.9614 0.146484 10.6074 0.439453 10.3145C0.732422 10.0215 1.08643 9.875 1.50146 9.875C1.57337 9.875 1.64417 9.88013 1.71362 9.89013C2.26026 9.96888 2.90447 10.0223 3.295 9.63176L9.13176 3.795C9.52228 3.40447 9.46888 2.76026 9.39013 2.21362C9.38013 2.14417 9.375 2.07337 9.375 2.00146C9.375 1.58643 9.52148 1.23242 9.81445 0.939453C10.1074 0.646484 10.4614 0.5 10.8765 0.5C11.2915 0.5 11.6455 0.646484 11.9385 0.939453L18.3105 7.31152C18.6035 7.60449 18.75 7.9585 18.75 8.37353C18.75 8.78857 18.6035 9.14258 18.3105 9.43555C18.0176 9.72852 17.6636 9.875 17.2485 9.875C17.1766 9.875 17.1058 9.86987 17.0364 9.85987C16.4897 9.78112 15.8455 9.72771 15.455 10.1182L14.305 11.2683C13.9147 11.6585 13.9144 12.2911 14.3042 12.6817L24.5605 22.9609C24.8535 23.2539 25 23.6038 25 24.0107C25 24.4176 24.8535 24.7676 24.5605 25.0605Z" fill="#5381F6"/></g><defs><clipPath id="clip0_6437_2957"><rect width="25" height="25" fill="white" transform="translate(0 0.5)"/></clipPath></defs></svg>
                            <div class="desc">Полная гарантия списания долгов</div>
                        </div>
                    </div>
                    <div class="recomended__el">
                        <div class="el_title">Видеотзывы довольных клиентов</div>
                        <div class="el_icon">
                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23.75 19.25V6.75C23.75 5.375 22.625 4.25 21.25 4.25H3C1.625 4.25 0.5 5.375 0.5 6.75V19.25C0.5 20.625 1.625 21.75 3 21.75H21.25C22.625 21.75 23.75 20.625 23.75 19.25ZM10 18V8L17.5 13L10 18Z" fill="#5381F6"/></svg>
                            <div class="desc">Более 1000 видеоотзывов от реальных клиентов</div>
                        </div>
                    </div>
                </div>
                <div class="refferal_recomended__item">
                    <div class="item_title">Другая компания</div>
                    <div class="recomended__el">
                        <div class="el_title">Колличество дел</div>
                        <div class="el_icon">
                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6221_109583)"><path d="M7.42682 3.99483V3.99531V12.4797C7.42682 13.6085 7.80311 14.7101 8.50394 15.6189C8.50398 15.6189 8.50401 15.6189 8.50405 15.619L10.7533 18.5345L10.7534 18.5346C11.7212 19.7895 12.2469 21.3196 12.2469 22.8953V23.9375C12.2469 24.0775 12.3039 24.2177 12.4147 24.3255C12.5265 24.4342 12.6839 24.5 12.8536 24.5C13.4495 24.5 14.0156 24.2695 14.4287 23.8678C14.8408 23.467 15.0671 22.9294 15.0671 22.375V16.125V15.125H16.0671H21.7868C21.7869 15.125 21.7869 15.125 21.7869 15.125C22.1187 15.125 22.4454 15.0533 22.7433 14.9162C23.0411 14.7791 23.3015 14.5805 23.5071 14.3367C23.7125 14.093 23.8583 13.8099 23.9357 13.5084C24.0131 13.2071 24.0207 12.8932 23.9582 12.5889C23.9582 12.5889 23.9582 12.5889 23.9581 12.5888L22.0301 3.21394L22.0301 3.21382C21.9324 2.73838 21.6671 2.30478 21.2722 1.99003C20.8767 1.67484 20.377 1.4998 19.8577 1.5H19.8573H11.1557C11.1556 1.5 11.1555 1.5 11.1554 1.5C10.3093 1.50031 9.47598 1.692 8.72146 2.0587C8.72141 2.05872 8.72137 2.05874 8.72132 2.05877L8.64112 2.09776L8.64091 2.09786C8.27084 2.2777 7.96357 2.55232 7.7506 2.88752C7.5378 3.22243 7.42663 3.6058 7.42682 3.99483ZM1 12.2188C1 12.3913 1.03491 12.5628 1.10348 12.7238C1.17208 12.8849 1.2734 13.033 1.40307 13.1591C1.53279 13.2853 1.6883 13.3868 1.86141 13.4565C2.03456 13.5263 2.22107 13.5625 2.41006 13.5625C2.59904 13.5625 2.78555 13.5263 2.9587 13.4565C3.13181 13.3868 3.28733 13.2853 3.41705 13.1591C3.54672 13.033 3.64804 12.8849 3.71664 12.7238C3.78521 12.5628 3.82012 12.3913 3.82012 12.2188V2.84375C3.82012 2.49651 3.67853 2.15766 3.41705 1.90337C3.15462 1.64816 2.79289 1.5 2.41006 1.5C2.02723 1.5 1.6655 1.64816 1.40307 1.90337C1.14158 2.15766 1 2.49651 1 2.84375V12.2188Z" stroke="#FB5A80" stroke-width="2"/></g><defs><clipPath id="clip0_6221_109583"><rect width="25" height="25" fill="white" transform="matrix(1 0 0 -1 0 25.5)"/></clipPath></defs></svg>
                            <div class="desc">Менее 150 дел</div>
                        </div>
                    </div>
                    <div class="recomended__el">
                        <div class="el_title">Штат юристов и адвокатов</div>
                        <div class="el_icon">
                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6221_109650)"><path d="M25 13C25 19.9036 19.4036 25.5 12.5 25.5C5.59644 25.5 0 19.9036 0 13C0 6.09644 5.59644 0.5 12.5 0.5C19.4036 0.5 25 6.09644 25 13ZM2.28942 13C2.28942 18.6391 6.86085 23.2106 12.5 23.2106C18.1391 23.2106 22.7106 18.6391 22.7106 13C22.7106 7.36085 18.1391 2.78942 12.5 2.78942C6.86085 2.78942 2.28942 7.36085 2.28942 13Z" fill="#FB5A80"/><path d="M12.4995 13.175C13.3398 13.175 14.1458 12.8497 14.74 12.2707C15.3343 11.6917 15.6681 10.9064 15.6681 10.0875C15.6681 9.26864 15.3343 8.48332 14.74 7.90431C14.1458 7.32529 13.3398 7 12.4995 7C11.6591 7 10.8531 7.32529 10.2589 7.90431C9.66468 8.48332 9.33085 9.26864 9.33085 10.0875C9.33085 10.9064 9.66468 11.6917 10.2589 12.2707C10.8531 12.8497 11.6591 13.175 12.4995 13.175Z" stroke="#FB5A80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M5 22C5 22 6.69033 15.4831 12.4995 15.4831C18.3086 15.4831 20 22 20 22L12.4995 24L5 22Z" stroke="#FB5A80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_6221_109650"><rect width="25" height="25" fill="white" transform="translate(0 0.5)"/></clipPath></defs></svg>
                            <div class="desc">Не более 20 сотрудников в штате</div>
                        </div>
                    </div>
                    <div class="recomended__el">
                        <div class="el_title">Гарантия</div>
                        <div class="el_icon">
                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6437_3010)"><path d="M23.8527 23.6673L23.8534 23.668C23.9627 23.7773 24 23.8744 24 24.0107C24 24.1471 23.9627 24.2442 23.8534 24.3534C23.7442 24.4627 23.6471 24.5 23.5107 24.5C23.3744 24.5 23.2773 24.4627 23.168 24.3534L12.9132 14.0986C12.1322 13.3176 10.8659 13.3176 10.0848 14.0986L8.93555 15.2479C8.51901 15.6644 8.37974 16.1787 8.33694 16.5867C8.2948 16.9882 8.3363 17.3855 8.37016 17.6654C8.37326 17.6911 8.375 17.7188 8.375 17.7485C8.375 17.8989 8.33351 17.9984 8.22844 18.1034C8.12337 18.2085 8.02388 18.25 7.87353 18.25C7.72319 18.25 7.6237 18.2085 7.51863 18.1034L1.14656 11.7314C1.04149 11.6263 1 11.5268 1 11.3765C1 11.2261 1.04149 11.1266 1.14656 11.0216C1.25163 10.9165 1.35112 10.875 1.50146 10.875C1.52572 10.875 1.54887 10.8767 1.57104 10.8799C1.85283 10.9205 2.25057 10.9699 2.65456 10.9327C3.06682 10.8947 3.58318 10.7578 4.0021 10.3389L9.83887 4.5021C10.2578 4.08318 10.3947 3.56682 10.4327 3.15456C10.4699 2.75057 10.4205 2.35283 10.3799 2.07104C10.3767 2.04887 10.375 2.02572 10.375 2.00146C10.375 1.85112 10.4165 1.75163 10.5216 1.64656C10.6266 1.54149 10.7261 1.5 10.8765 1.5C11.0268 1.5 11.1263 1.54149 11.2314 1.64656L17.6034 8.01863C17.7085 8.1237 17.75 8.22319 17.75 8.37353C17.75 8.52388 17.7085 8.62337 17.6034 8.72844C17.4984 8.83351 17.3989 8.875 17.2485 8.875C17.2243 8.875 17.2011 8.87328 17.179 8.87008C16.8972 8.82949 16.4994 8.78009 16.0954 8.81729C15.6832 8.85526 15.1668 8.9922 14.7479 9.41113L13.5978 10.5612C12.8174 11.3416 12.8167 12.6067 13.5963 13.388L23.8527 23.6673Z" stroke="#FB5A80" stroke-width="2"/></g><defs><clipPath id="clip0_6437_3010"><rect width="25" height="25" fill="white" transform="translate(0 0.5)"/></clipPath></defs></svg>
                            <div class="desc">Неполная (гарантия только банкротства)</div>
                        </div>
                    </div>
                    <div class="recomended__el">
                        <div class="el_title">Видеотзывы довольных клиентов</div>
                        <div class="el_icon">
                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M24.9143 19.3571V9.49513L23.2391 11.1714L23.2038 11.1422L23.1934 11.1524L22.3499 10.4381L22.1306 10.2573L22.1332 10.2547L19.6613 8.16185L15.8985 11.1443L18.3071 12.75L10.3786 18.0357V14.9345L7.506 17.4602L6.55901 18.4938L3.11495 15.3383L0.335693 18.4503V19.3571C0.335693 20.8107 1.52498 22 2.97855 22H22.2714C23.725 22 24.9143 20.8107 24.9143 19.3571ZM0.335693 16.4325V6.14286C0.335693 4.68929 1.52498 3.5 2.97855 3.5H22.2714C23.725 3.5 24.9143 4.68929 24.9143 6.14286V7.47184L23.4391 8.94793L19.6331 5.7255L18.5295 6.803L14.3526 10.1137L10.3786 7.46429V12.6986L6.47153 16.1338L4.23473 14.0845L4.23698 14.082L4.03866 13.9048L3.27535 13.2055L3.26647 13.2152L3.23452 13.1867L0.335693 16.4325Z" fill="#FB5A80"/></svg>
                            <div class="desc">Менее 20</div>
                        </div>
                    </div>
                </div>
            </div>
-->
            <div class="recomended_intro__cnt">
                <div class="h3">Наши клиенты массово рекомендуют нас своим знакомым</div>
                <div class="recomended_grid__cnt">
                    <div class="grid_el">
                        <svg width="101" height="100" viewBox="0 0 101 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M48.3794 52.5308C67.4882 52.5308 79.4915 42.523 79.4112 26.5668C79.4915 11.3743 67.8897 0 48.3794 0H18.8441C17.419 0 16.2637 1.15165 16.2637 2.57228V36.0119C16.2637 37.4325 15.1085 38.5842 13.6834 38.5842H7.16201C5.73693 38.5842 4.58167 39.7358 4.58167 41.1565V49.9585C4.58167 51.3791 5.73692 52.5308 7.16201 52.5308H13.6834C15.1085 52.5308 16.2637 53.6824 16.2637 55.103V55.2638C16.2637 56.6844 15.1085 57.8361 13.6834 57.8361H7.16201C5.73693 57.8361 4.58167 58.9877 4.58167 60.4084V69.2104C4.58167 70.631 5.73692 71.7827 7.16201 71.7827H13.6834C15.1085 71.7827 16.2637 72.9343 16.2637 74.3549V79.7407C16.2637 81.1613 17.419 82.3129 18.8441 82.3129H30.9456C32.3707 82.3129 33.5259 81.1613 33.5259 79.7407V74.3549C33.5259 72.9343 34.6812 71.7827 36.1063 71.7827H48.8902C50.3153 71.7827 51.4705 70.631 51.4705 69.2104V60.4084C51.4705 58.9877 50.3153 57.8361 48.8902 57.8361H36.1063C34.6812 57.8361 33.5259 56.6844 33.5259 55.2638V55.103C33.5259 53.6824 34.6812 52.5308 36.1063 52.5308H48.3794ZM36.1063 38.5842C34.6812 38.5842 33.5259 37.4325 33.5259 36.0119V16.7198C33.5259 15.2992 34.6812 14.1475 36.1063 14.1475H48.3794C57.5725 14.1475 62.0687 19.694 62.0286 26.7678C62.0687 34.0023 57.6528 38.5842 47.8977 38.5842H36.1063Z" fill="#5381F6"/></svg>
                        <div class="el_title">17 270 000 руб.</div>
                        <div class="el_subtitle">мы выплатили нашим клиентам за рекомендации нас своим друзьям</div>
                    </div>
                    <div class="grid_el">
                        <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M43.6499 9.22045C44.2675 7.96446 45.2233 6.90689 46.409 6.16738C47.5948 5.42788 48.9633 5.03595 50.3597 5.03595C51.756 5.03595 53.1245 5.42788 54.3103 6.16738C55.496 6.90689 56.4518 7.96446 57.0694 9.22045L67.4683 30.3599L90.7162 33.7362C92.0982 33.9375 93.3965 34.5227 94.464 35.4256C95.5316 36.3285 96.3259 37.513 96.757 38.8452C97.1881 40.1773 97.2388 41.6039 96.9033 42.9635C96.5679 44.323 95.8597 45.5613 94.8589 46.5381L78.0355 62.9789L82.0099 86.2004C82.2442 87.579 82.0897 88.9959 81.5637 90.2912C81.0377 91.5864 80.1612 92.7084 79.0331 93.5306C77.9051 94.3527 76.5703 94.8423 75.1795 94.9441C73.7887 95.0459 72.3973 94.7558 71.1621 94.1066L50.355 83.143L29.5572 94.1066C28.322 94.7558 26.9306 95.0459 25.5398 94.9441C24.149 94.8423 22.8142 94.3527 21.6862 93.5306C20.5581 92.7084 19.6816 91.5864 19.1556 90.2912C18.6296 88.9959 18.4751 87.579 18.7094 86.2004L22.6744 62.9789L5.85102 46.5287C4.85281 45.5509 4.14716 44.3126 3.8138 42.9537C3.48045 41.5949 3.53267 40.1696 3.96457 38.8389C4.39647 37.5082 5.19083 36.3252 6.25791 35.4235C7.32498 34.5218 8.62224 33.9374 10.0031 33.7362L33.251 30.3505L43.6406 9.22045H43.6499Z" fill="url(#paint0_linear_6221_109799)"/><path d="M18.4859 43.6682C18.7709 43.0855 19.212 42.5947 19.7593 42.2516C20.3066 41.9085 20.9382 41.7266 21.5827 41.7266C22.2272 41.7266 22.8588 41.9085 23.406 42.2516C23.9533 42.5947 24.3944 43.0855 24.6795 43.6682L29.479 53.4769L40.2088 55.0436C40.8466 55.1369 41.4458 55.4085 41.9386 55.8274C42.4313 56.2464 42.7979 56.796 42.9968 57.4141C43.1958 58.0322 43.2192 58.6942 43.0644 59.325C42.9096 59.9558 42.5827 60.5304 42.1208 60.9836L34.3562 68.6121L36.1905 79.3869C36.2987 80.0266 36.2273 80.6841 35.9846 81.285C35.7418 81.886 35.3373 82.4066 34.8166 82.7881C34.296 83.1696 33.6799 83.3968 33.038 83.444C32.3961 83.4912 31.7539 83.3566 31.1838 83.0554L21.5805 77.9683L11.9815 83.0554C11.4115 83.3566 10.7693 83.4912 10.1274 83.444C9.48545 83.3968 8.86942 83.1696 8.34877 82.7881C7.82812 82.4066 7.42359 81.886 7.18083 81.285C6.93806 80.6841 6.86672 80.0266 6.97487 79.3869L8.80489 68.6121L1.04024 60.9793C0.579527 60.5256 0.253843 59.951 0.0999856 59.3205C-0.0538716 58.69 -0.0297695 58.0286 0.169569 57.4112C0.368908 56.7938 0.735537 56.2448 1.22803 55.8264C1.72053 55.4081 2.31926 55.1369 2.95659 55.0436L13.6864 53.4726L18.4816 43.6682H18.4859Z" fill="url(#paint1_linear_6221_109799)"/><defs><linearGradient id="paint0_linear_6221_109799" x1="48.2062" y1="94.964" x2="48.2062" y2="5.03595" gradientUnits="userSpaceOnUse"><stop stop-color="#3C70F4"/><stop offset="1" stop-color="#638DF6"/></linearGradient><linearGradient id="paint1_linear_6221_109799" x1="21.5827" y1="41.7266" x2="21.5827" y2="83.4532" gradientUnits="userSpaceOnUse"><stop stop-color="#FB5A80"/><stop offset="1" stop-color="#F23965"/></linearGradient></defs></svg>
                        <div class="el_title">3 454 чел.</div>
                        <div class="el_subtitle">клиентов пришли в компанию по рекомендации друзей</div>
                    </div>
                    <div class="grid_el">
                        <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M58.3333 45.8334C60.2484 45.8334 62.1448 45.4561 63.9141 44.7233C65.6835 43.9904 67.2911 42.9162 68.6453 41.562C69.9995 40.2078 71.0737 38.6002 71.8066 36.8308C72.5395 35.0615 72.9167 33.1651 72.9167 31.25C72.9167 29.3349 72.5395 27.4386 71.8066 25.6692C71.0737 23.8999 69.9995 22.2922 68.6453 20.938C67.2911 19.5839 65.6835 18.5097 63.9141 17.7768C62.1448 17.0439 60.2484 16.6667 58.3333 16.6667C54.4656 16.6667 50.7563 18.2031 48.0214 20.938C45.2865 23.673 43.75 27.3823 43.75 31.25C43.75 35.1178 45.2865 38.8271 48.0214 41.562C50.7563 44.2969 54.4656 45.8334 58.3333 45.8334Z" fill="#FB5A80"/><path d="M25 85V87.5H91.6667V85C91.6667 75.6667 91.6667 71 89.85 67.4334C88.2521 64.2975 85.7026 61.7479 82.5667 60.15C79 58.3334 74.3333 58.3334 65 58.3334H51.6667C42.3333 58.3334 37.6667 58.3334 34.1 60.15C30.9641 61.7479 28.4145 64.2975 26.8167 67.4334C25 71 25 75.6667 25 85Z" fill="#FB5A80"/><path d="M41.6667 45.8334C43.5818 45.8334 45.4782 45.4561 47.2475 44.7233C49.0168 43.9904 50.6245 42.9162 51.9787 41.562C53.3329 40.2078 54.4071 38.6002 55.1399 36.8308C55.8728 35.0615 56.25 33.1651 56.25 31.25C56.25 29.3349 55.8728 27.4386 55.1399 25.6692C54.4071 23.8999 53.3329 22.2922 51.9787 20.938C50.6245 19.5839 49.0168 18.5097 47.2475 17.7768C45.4782 17.0439 43.5818 16.6667 41.6667 16.6667C37.799 16.6667 34.0896 18.2031 31.3547 20.938C28.6198 23.673 27.0834 27.3823 27.0834 31.25C27.0834 35.1178 28.6198 38.8271 31.3547 41.562C34.0896 44.2969 37.799 45.8334 41.6667 45.8334Z" fill="#599CFF"/><path d="M8.33337 85V87.5H75V85C75 75.6667 75 71 73.1834 67.4334C71.5855 64.2975 69.0359 61.7479 65.9 60.15C62.3334 58.3334 57.6667 58.3334 48.3334 58.3334H35C25.6667 58.3334 21 58.3334 17.4334 60.15C14.2975 61.7479 11.7479 64.2975 10.15 67.4334C8.33337 71 8.33337 75.6667 8.33337 85Z" fill="#599CFF"/></svg>
                        <div class="el_title">37%</div>
                        <div class="el_subtitle">от всех наших клиентов пришли по рекомендации друзей</div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>