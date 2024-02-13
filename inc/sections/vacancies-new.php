<style>
*:focus {
    outline: none;
}
.career-jobs {
    margin-bottom: 100px;
}
.career-jobs-title {
    font-family: Inter;
    font-size: 34px;
    font-weight: 700;
    line-height: 145%;
    letter-spacing: 0em;
    text-align: center;
    margin-bottom: 40px;
    color: #333;
}
.career-jobs-cnt {
    margin-bottom: 40px;
}
.career-job-item {
    box-shadow: 0px 14px 34px 0px #001D681F;
    background: #FFFFFF;
    border-radius: 10px;
    padding: 25px;
}
.career-job-item+.career-job-item {
    margin-top: 10px;
}
.career-job-item .head {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: auto 156px;
    grid-column-gap: 20px;
    grid-row-gap: 20px;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 10px;
}
.career-job-item .head .title {
    font-family: Inter;
    font-size: 20px;
    font-weight: 600;
    line-height: 145%;
    letter-spacing: -0.0045em;
    text-align: left;
    color: #333;
}
.career-job-item .head .buttons {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: repeat(4, 24px);
    grid-column-gap: 20px;
    grid-row-gap: 20px;
    align-items: center;
    justify-content: space-between;
}
.career-job-item .head .buttons button {
    border: none;
    background: transparent;
    padding: 0;
    margin: 0;
    cursor: pointer;
}
.career-job-item .content .price {
    margin-bottom: 10px;
}
.career-job-item .content .price span {
    font-family: Inter;
    font-size: 18px;
    font-weight: 400;
    line-height: 145%;
    letter-spacing: 0em;
    text-align: left;
    color: #717B97;
}
.career-job-item .content .text {
    font-family: Inter;
    font-size: 16px;
    font-weight: 300;
    line-height: 145%;
    letter-spacing: -0.41172564029693604px;
    text-align: left;
    color: #000;
    margin-bottom: 10px;
}
.career-job-item .content .text p {
    margin: 0;
    padding: 0;
}
.career-job-item .content .text p+p {
    margin-top: 5px;
}
.career-job-item .content .link a {
    /*
    display: flex;
    align-items: center;
    */
    background: url(/wp-content/themes/fpalaw/assets/img/career/hh-icon.svg) right center no-repeat;
    display: inline-block;
    padding-right: 12px;
    background-size: 12px;
}
.career-job-item .content .link a span {
    font-family: Inter;
    font-size: 16px;
    font-weight: 400;
    line-height: 145%;
    letter-spacing: 0em;
    text-align: left;
    color: #E1011C;   
    margin-right: 4px;
}
.career-job-item .head .buttons button path {
    -webkit-transition: all .4s ease;
    -o-transition: all .4s ease;
    transition: all .4s ease;
}
.career-job-item .head .buttons button.arrow-up:hover path,
.career-job-item .head .buttons button.arrow-down:hover path,
.career-job-item .head .buttons button.edit:hover path {
    fill: #5381F6;
}
.career-job-item .head .buttons button.remove:hover path {
    fill: #CE2C2A;
}
.add-job-cnt button {
    margin: 0 auto;
}
.add-job-cnt button span {
    font-family: Inter;
    font-size: 14px;
    font-weight: 700;
    line-height: 145%;
    letter-spacing: 0em;
    text-align: center;
    margin-right: 8px;
}


.modal__wrap.add-job-popup .title,
.modal__wrap.edit-job-popup .title,
.modal__wrap.remove-job-popup .title {
    font-family: Inter;
    font-size: 26px;
    font-weight: 700;
    line-height: 145%;
    letter-spacing: 0em;
    text-align: center;
    margin-bottom: 20px;
    color: #393939;
}
.modal__wrap.remove-job-popup .subtitle {
    font-family: Inter;
    font-size: 16px;
    font-weight: 400;
    line-height: 145%;
    letter-spacing: 0em;
    text-align: center;
    margin-bottom: 20px;
    color: #FF5E5C;
}
.modal__wrap.add-job-popup label,
.modal__wrap.edit-job-popup label,
.modal__wrap.remove-job-popup label {
    font-family: Inter;
    font-size: 14px;
    font-weight: 400;
    line-height: 145%;
    letter-spacing: 0em;
    text-align: left;
    color: #393939;
}
.modal__wrap.add-job-popup .form-row.error label,
.modal__wrap.edit-job-popup .form-row.error label,
.modal__wrap.remove-job-popup .form-row.error label {
    color: #EC4A48;
}
.modal__wrap.add-job-popup .form-row.error input,
.modal__wrap.edit-job-popup .form-row.error input,
.modal__wrap.remove-job-popup .form-row.error input,
.modal__wrap.add-job-popup .form-row.error textarea, 
.modal__wrap.edit-job-popup .form-row.error textarea {
    border: 1px solid #EC4A48;
}

.modal__wrap.add-job-popup input[type=text],
.modal__wrap.add-job-popup input[type=number], 
.modal__wrap.edit-job-popup input[type=text],
.modal__wrap.edit-job-popup input[type=number] {
    font-family: Inter;
    font-size: 15px;
    font-weight: 500;
    line-height: 145%;
    letter-spacing: 0em;
    text-align: left;
    color: #393939;
    background: #F3F4F4;
    border: 1px solid #F3F4F4;
    border-radius: 10px;
    padding: 10px 16px;
    width: 100%;
}
.modal__wrap.add-job-popup .form-row.two-col,
.modal__wrap.edit-job-popup .form-row.two-col {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: repeat(2, 1fr);
    grid-column-gap: 10px;
    grid-row-gap: 10px;
    align-items: center;
    justify-content: space-between;
}
.modal__wrap.add-job-popup .form-row textarea,
.modal__wrap.edit-job-popup .form-row textarea {
    font-family: Inter;
    font-size: 15px;
    font-weight: 500;
    line-height: 145%;
    letter-spacing: 0em;
    text-align: left;
    color: #393939;
    background: #F3F4F4;
    border: 1px solid #F3F4F4;
    border-radius: 10px;
    padding: 10px 16px;
    width: 100%;
}
.modal__wrap.add-job-popup .form-row-cnt+.form-row-cnt,
.modal__wrap.edit-job-popup .form-row-cnt+.form-row-cnt {
    margin-top: 8px;
}
.modal__wrap.add-job-popup .form-row-cnt:last-child,
.modal__wrap.edit-job-popup .form-row-cnt:last-child {
    margin-top: 20px;
}
.modal__wrap.add-job-popup .form-row-cnt .buttons-cnt button,
.modal__wrap.edit-job-popup .form-row-cnt .buttons-cnt button,
.modal__wrap.remove-job-popup .form-row-cnt .buttons-cnt button {
    width: 100%;
    font-family: Inter;
    font-size: 16px;
    font-weight: 700;
    line-height: 145%;
    letter-spacing: 0em;
    text-align: center;
}
.modal__wrap.add-job-popup .form-row-cnt .buttons-cnt button+button,
.modal__wrap.edit-job-popup .form-row-cnt .buttons-cnt button+button,
.modal__wrap.remove-job-popup .form-row-cnt .buttons-cnt button+button {
    margin-top: 10px;
}   
.modal__wrap.add-job-popup .form-row-cnt .buttons-cnt button.grey,
.modal__wrap.edit-job-popup .form-row-cnt .buttons-cnt button.grey,
.modal__wrap.remove-job-popup .form-row-cnt .buttons-cnt button.grey {
    background: -webkit-gradient(linear, 0 0, 100% 0, from(#818BA5), to(#959FB9));
    background: -webkit-linear-gradient(360deg, #818BA5 0%, #959FB9 100%);
    background: -moz-linear-gradient(360deg, #818BA5 0%, #959FB9 100%);
    background: -o-linear-gradient(360deg, #818BA5 0%, #959FB9 100%);
    background: linear-gradient(360deg, #818BA5 0%, #959FB9 100%);
}
.modal__wrap.add-job-popup .form-row-cnt .buttons-cnt button.red,
.modal__wrap.edit-job-popup .form-row-cnt .buttons-cnt button.red,
.modal__wrap.remove-job-popup .form-row-cnt .buttons-cnt button.red {
    background: #FF5E5C;
}
.modal__wrap.add-job-popup .form-row-cnt .buttons-cnt button.grey:hover,
.modal__wrap.edit-job-popup .form-row-cnt .buttons-cnt button.grey:hover,
.modal__wrap.remove-job-popup .form-row-cnt .buttons-cnt button.grey:hover {
    background: -webkit-gradient(linear, 0 0, 100% 0, from(#818BA5), to(#959FB9));
    background: -webkit-linear-gradient(360deg, #818BA5 0%, #959FB9 100%);
    background: -moz-linear-gradient(360deg, #818BA5 0%, #959FB9 100%);
    background: -o-linear-gradient(360deg, #818BA5 0%, #959FB9 100%);
    background: linear-gradient(360deg, #818BA5 0%, #959FB9 100%);
}
.modal__wrap.add-job-popup .form-row-cnt .buttons-cnt button.red:hover,
.modal__wrap.edit-job-popup .form-row-cnt .buttons-cnt button.red:hover,
.modal__wrap.remove-job-popup .form-row-cnt .buttons-cnt button.red:hover {
    background: #FF5E5C;
}

@media (max-width: 782px) {
    .career-job-item .head {
        flex-direction: column-reverse;
        display: flex;
    }
    .career-job-item .head .buttons {
        margin-left: auto;
    }
    .career-job-item .head .title {
        font-size: 18px;
        letter-spacing: 0em;
    }
    .career-job-item {
        padding: 20px;
    }
    .career-job-item .content .price span {
        font-size: 16px;
    }
    .career-job-item .content .text {
        font-size: 14px;
        font-weight: 400;
    }
    .career-job-item .content .link a span {
        font-size: 14px;
    }
    .modal__wrap.add-job-popup .title, 
    .modal__wrap.edit-job-popup .title, 
    .modal__wrap.remove-job-popup .title {
        font-size: 18px;
        margin-bottom: 10px;
    }
    .modal__wrap.add-job-popup .subtitle, 
    .modal__wrap.edit-job-popup .subtitle, 
    .modal__wrap.remove-job-popup .subtitle {
        font-size: 14px;
        margin-bottom: 20px;
    }
    .modal__wrap.add-job-popup .form-row-cnt .buttons-cnt button, 
    .modal__wrap.edit-job-popup .form-row-cnt .buttons-cnt button, 
    .modal__wrap.remove-job-popup .form-row-cnt .buttons-cnt button {
        font-size: 14px;
    }
    .career-jobs-title {
        font-size: 22px;
        text-align: left;
        margin-bottom: 24px
    }
}



</style>
<div class="career-jobs">
    <h2 class="career-jobs-title">Наши вакансии</h2>
    <div class="career-jobs-cnt">
        <?php
            $jobs_posts = get_posts([
                'post_type' => 'jobs',
                'post_status' => 'publish',
                'numberposts' => 1000,
                'order'    => 'DESC'
            ]);
            foreach ($jobs_posts as $key => $value) {
                $salary_from = get_field('salary_from', $value->ID);
                $salary_up_to = get_field('salary_up_to', $value->ID);
                $job_link = get_field('job_link', $value->ID);
        ?>
                <div class="career-job-item" data-job-id="<?=$value->ID; ?>">
                    <div class="head">
                        <div class="title"><?=$value->post_title; ?></div>    
                        <div class="buttons">
                            <?php
                                if ( is_user_logged_in() ) {
                            ?>
                                <button class="arrow-up">
                                    <!--
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.9996 19H20.9996C21.1818 18.9994 21.3605 18.9492 21.5163 18.8546C21.6721 18.7601 21.7991 18.6248 21.8838 18.4635C21.9684 18.3021 22.0075 18.1207 21.9967 17.9387C21.9859 17.7568 21.9257 17.5813 21.8226 17.431L12.8226 4.43101C12.4496 3.89201 11.5516 3.89201 11.1776 4.43101L2.1776 17.431C2.07342 17.581 2.01233 17.7566 2.00096 17.9388C1.98959 18.121 2.02838 18.3029 2.11311 18.4646C2.19784 18.6263 2.32527 18.7618 2.48156 18.8562C2.63785 18.9505 2.81702 19.0003 2.9996 19Z" fill="#717B97"/></svg>
                                    -->
                                </button>
                                <button class="arrow-down">
                                    <!--
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.9996 4.99999H20.9996C21.1818 5.00056 21.3605 5.05082 21.5163 5.14536C21.6721 5.23991 21.7991 5.37515 21.8838 5.53654C21.9684 5.69793 22.0075 5.87935 21.9967 6.06127C21.9859 6.24319 21.9257 6.41873 21.8226 6.56899L12.8226 19.569C12.4496 20.108 11.5516 20.108 11.1776 19.569L2.1776 6.56899C2.07342 6.41904 2.01233 6.24342 2.00096 6.06119C1.98959 5.87897 2.02838 5.69711 2.11311 5.53538C2.19784 5.37365 2.32527 5.23823 2.48156 5.14384C2.63785 5.04945 2.81702 4.9997 2.9996 4.99999Z" fill="#717B97"/></svg>
                                    -->
                                </button>
                                <button class="edit">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_10814_47049)"><path d="M2.81301 15.4667L1.54635 20.9333C1.50265 21.1332 1.50415 21.3402 1.55073 21.5394C1.59731 21.7386 1.6878 21.9249 1.81559 22.0846C1.94337 22.2443 2.10523 22.3735 2.28933 22.4627C2.47343 22.5518 2.67513 22.5988 2.87968 22.6C2.97499 22.6096 3.07103 22.6096 3.16635 22.6L8.66635 21.3333L19.2263 10.8133L13.333 4.93332L2.81301 15.4667Z" fill="#717B97"/><path d="M22.5471 5.54667L18.6138 1.61333C18.3552 1.35604 18.0053 1.21161 17.6405 1.21161C17.2757 1.21161 16.9257 1.35604 16.6671 1.61333L14.4805 3.8L20.3671 9.68667L22.5538 7.5C22.6818 7.37139 22.7831 7.2188 22.852 7.05098C22.921 6.88315 22.9561 6.70338 22.9555 6.52195C22.9549 6.34052 22.9185 6.161 22.8484 5.99365C22.7784 5.82629 22.676 5.6744 22.5471 5.54667Z" fill="#717B97"/></g><defs><clipPath id="clip0_10814_47049"><rect width="24" height="24" fill="white"/></clipPath></defs></svg>
                                </button>
                                <button class="remove">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 21C6.45 21 5.979 20.804 5.587 20.412C5.195 20.02 4.99933 19.5493 5 19V6H4V4H9V3H15V4H20V6H19V19C19 19.55 18.804 20.021 18.412 20.413C18.02 20.805 17.5493 21.0007 17 21H7ZM9 17H11V8H9V17ZM13 17H15V8H13V17Z" fill="#EC4A48"/></svg>
                                </button>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="content">
                        <div class="price">
                            <?php if ($salary_from > 0|| $salary_up_to > 0) { ?>
                                <span class="salary_txt">Заработная плата: </span>
                                <?php if ($salary_from > 0) { ?>
                                    <span class="salary_from" data-salary-from="<?=$salary_from; ?>">от <?=number_format($salary_from, 0, '.', ' '); ?> ₽</span>        
                                <?php } ?>
                                <?php if ($salary_up_to > 0) { ?>
                                    <span class="salary_up_to" data-salary-up-to="<?=$salary_up_to; ?>">до <?=number_format($salary_up_to, 0, '.', ' '); ?> ₽</span>        
                                <?php } ?>
                            <?php } else { ?>
                                <span class="salary_txt">Заработная плата: Договорная</span>
                            <?php }?>
                        </div>
                        <div class="text"><?=$value->post_content; ?></div>
                        <div class="link">
                            <a href="<?=$job_link; ?>" target="_blank" rel="nofollow" title="Вы переходите на сайт Группы компаний HeadHunter по Санкт-Петербургу.">
                                <span>hh.ru</span>
                            </a>
                        </div>
                    </div>
                </div>
        <?php
            }
        ?>
    </div>
    <?php
        if ( is_user_logged_in() ) {
    ?>
        <div class="add-job-cnt">
            <button class=" btn add-job">
                <span>Добавить вакансию</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 13H13V18C13 18.55 12.55 19 12 19C11.45 19 11 18.55 11 18V13H6C5.45 13 5 12.55 5 12C5 11.45 5.45 11 6 11H11V6C11 5.45 11.45 5 12 5C12.55 5 13 5.45 13 6V11H18C18.55 11 19 11.45 19 12C19 12.55 18.55 13 18 13Z" fill="white"/></svg>
            </button>
        </div>
    <?php
        }
    ?>
</div>