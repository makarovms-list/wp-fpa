<?php
    $current_user = wp_get_current_user();
?>
<div class="user_detail_form__cnt">
    <form>
        <div class="form_notice error hidden">
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 0.5C8.02219 0.5 6.08879 1.08649 4.4443 2.1853C2.79981 3.28412 1.51809 4.8459 0.761209 6.67316C0.00433284 8.50042 -0.1937 10.5111 0.192152 12.4509C0.578004 14.3907 1.53041 16.1725 2.92894 17.5711C4.32746 18.9696 6.10929 19.922 8.0491 20.3078C9.98891 20.6937 11.9996 20.4957 13.8268 19.7388C15.6541 18.9819 17.2159 17.7002 18.3147 16.0557C19.4135 14.4112 20 12.4778 20 10.5C20 9.18678 19.7413 7.88642 19.2388 6.67316C18.7362 5.45991 17.9997 4.35752 17.0711 3.42893C16.1425 2.50035 15.0401 1.76375 13.8268 1.2612C12.6136 0.758658 11.3132 0.5 10 0.5ZM10 15.5C9.80222 15.5 9.60888 15.4413 9.44443 15.3315C9.27998 15.2216 9.15181 15.0654 9.07612 14.8827C9.00044 14.7 8.98063 14.4989 9.01922 14.3049C9.0578 14.1109 9.15304 13.9327 9.2929 13.7929C9.43275 13.653 9.61093 13.5578 9.80491 13.5192C9.99889 13.4806 10.2 13.5004 10.3827 13.5761C10.5654 13.6518 10.7216 13.78 10.8315 13.9444C10.9414 14.1089 11 14.3022 11 14.5C11 14.7652 10.8946 15.0196 10.7071 15.2071C10.5196 15.3946 10.2652 15.5 10 15.5ZM11 11.5C11 11.7652 10.8946 12.0196 10.7071 12.2071C10.5196 12.3946 10.2652 12.5 10 12.5C9.73479 12.5 9.48043 12.3946 9.2929 12.2071C9.10536 12.0196 9 11.7652 9 11.5V6.5C9 6.23478 9.10536 5.98043 9.2929 5.79289C9.48043 5.60536 9.73479 5.5 10 5.5C10.2652 5.5 10.5196 5.60536 10.7071 5.79289C10.8946 5.98043 11 6.23478 11 6.5V11.5Z" fill="white"></path></svg>
            <p class="message"></p>
        </div>
        <div class="wrapperContainer">
            <div class="field-text">
                <div class="lp-form-field">
                    <label class="lp-ellipsis" for="first_name">Имя <sup class="red">*</sup></label>
                    <input class="lp-form-fieldInput" id="first_name" name="first_name" type="text" value="<?=get_user_meta(get_current_user_id(), 'first_name', true); ?>" placeholder="" required="required" />
                </div>
            </div>
        </div>
        <div class="wrapperContainer">
            <div class="field-text">
                <div class="lp-form-field">
                    <label class="lp-ellipsis" for="last_name">Фамилия <sup class="red">*</sup></label>
                    <input class="lp-form-fieldInput" id="last_name" name="last_name" type="text" value="<?=get_user_meta(get_current_user_id(), 'last_name', true); ?>" placeholder="" required="required" />
                </div>
            </div>
        </div>
        <div class="wrapperContainer">
            <div class="field-text">
                <div class="lp-form-field">
                    <label class="lp-ellipsis" for="middle_name">Отчетство (если есть)</label>
                    <input class="lp-form-fieldInput" id="middle_name" name="middle_name" type="text" value="<?=get_user_meta(get_current_user_id(), 'middle_name', true); ?>" placeholder="" />
                </div>
            </div>
        </div>
        <div class="wrapperContainer">
            <div class="field-text">
                <div class="lp-form-field">
                    <label class="lp-ellipsis" for="birth_date_day">Дата рождения <sup class="red">*</sup></label>
                </div>
            </div>
            <div class="wrapperContainer-row">
                <div class="wrapperContainer-col">
                    <div class="field-select">
                        <div class="lp-form-field">
                            <select id="birth_date_day" name="birth_date_day">
                                <?php
                                    // устанавливаем первый и последний год диапазона
                                    $birth_date_day = get_user_meta(get_current_user_id(), 'birth_date_day', true); 
                                    $dayArray = range(1, 31);
                                    foreach ($dayArray as $day) {
                                        $selected = ($day == $birth_date_day) ? 'selected' : '';
                                        echo '<option '.$selected.' value="'.$day.'">'.$day.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="wrapperContainer-col">
                    <div class="field-select">
                        <div class="lp-form-field">
                            <select id="birth_date_month" name="birth_date_month">
                                <?php
                                    $birth_date_month = get_user_meta(get_current_user_id(), 'birth_date_month', true);
                                    $month_arr = [ 1 => 'Январь' , 'Февраль' , 'март' , 'Апрель' , 'Май' , 'Июнь' , 'Июль' , 'Август' , 'Сентябрь' , 'Октябрь' , 'Ноябрь' , 'Декабрь' ];
                                    foreach ($month_arr as $month) {
                                        $selected = ($month == $birth_date_month) ? 'selected' : '';
                                        echo '<option '.$selected.' value="'.$month.'">'.$month.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="wrapperContainer-col">
                    <div class="field-select">
                        <div class="lp-form-field">
                            <select id="birth_date_year" name="birth_date_year">
                                <?php
                                    // устанавливаем первый и последний год диапазона
                                    $birth_date_year = get_user_meta(get_current_user_id(), 'birth_date_year', true);
                                    $yearArray = range(1960, date('Y'));
                                    foreach ($yearArray as $year) {
                                        $selected = ($year == $birth_date_year) ? 'selected' : '';
                                        echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapperContainer">
            <div class="field-text">
                <div class="lp-form-field">
                    <label class="lp-ellipsis" for="contact_phone_number">Контактный телефон <sup class="red">*</sup></label>
                    <input class="lp-form-fieldInput" id="contact_phone_number" name="contact_phone_number" type="tel" value="<?=get_user_meta(get_current_user_id(), 'contact_phone_number', true); ?>" placeholder="" required="required" />
                </div>
            </div>
        </div>
        <div class="wrapperContainer">
            <div class="field-text">
                <div class="lp-form-field">
                    <label class="lp-ellipsis" for="email">Контактный email <sup class="red">*</sup></label>
                    <input class="lp-form-fieldInput" id="email" name="email" type="text" value="<?=$current_user->user_email; ?>" placeholder="" required="required" disabled="disabled" />
                </div>
            </div>
        </div>
        <div class="wrapperContainer">
            <div class="field-text">
                <div class="lp-form-field">
                    <label class="lp-ellipsis" for="residing_place">Место жительства</label>
                    <input class="lp-form-fieldInput" id="residing_place" name="residing_place" type="text" value="<?=get_user_meta(get_current_user_id(), 'residing_place', true); ?>" placeholder="" />
                </div>
            </div>
        </div>
        <div class="wrapperContainer">
            <div class="field-text">
                <div class="lp-form-field">
                    <label class="lp-ellipsis" for="password">Пароль</label>
                    <input class="lp-form-fieldInput" id="password" name="password" type="password" placeholder="" />
                </div>
            </div>
        </div>
        <div class="wrapperContainer">
            <div class="field-text">
                <div class="lp-form-field">
                    <label class="lp-ellipsis" for="repeat_password">Повторите пароль</label>
                    <input class="lp-form-fieldInput" id="repeat_password" name="repeat_password" type="password" placeholder="" />
                </div>
            </div>
        </div>
        <div class="wrapperContainer">
            <div class="field-button">
                <div class="lp-form-field">
                    <button class="btn btn-save-form">Сохранить изменения</button>
                </div>
            </div>
        </div>
        <p class="required_fields">* - Обязательные поля для заполнения</p>
        <div class="form__politics politics">
            <span class="politics__icon">
                <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#shild"></use></svg>
            </span>
            <p class="politics__text">Мы гарантируем безопасность и сохранность Ваших данных. Нажимая на кнопку, вы даете согласие на обработку своих персональных данных в соответствии с <a href="/">«Политикой конфиденциальности»</a></p>
        </div>
    </form>
</div>