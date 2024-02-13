<?php
    get_header();
    $slider = get_field('content_slider');
    //echo $_SERVER['DOCUMENT_ROOT'].'/esia/autoload.php';
    
    include_once $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/fpalaw/modules/esia/vendor/autoload.php';
    function mylog($message){
        $file = $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/fpalaw/modules/esia/datalog.txt';
        file_put_contents($file, $message, FILE_APPEND | LOCK_EX);
    }
    $config = new \Esia\Config([
       'clientId' => 'AAAC01564',
       'redirectUrl' => 'https://fpa.ru/response-esia',
       'portalUrl' => 'https://esia-portal1.test.gosuslugi.ru/',
       'privateKeyPath' => $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/fpalaw/modules/esia/vendor/fr05t1k/esia/cert/fpa.ru.key',
       'privateKeyPassword' => 'zGn83uPsl!302',
       'certPath' => $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/fpalaw/modules/esia/vendor/fr05t1k/esia/cert/fpa.ru.crt',
       'tmpPath' => $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/fpalaw/modules/esia/tmp',
       'log' => 'mylog',
    ]);
    $esia = new \Esia\OpenId($config);
?>
<style>
.login-form__cnt {}
.login-form__cnt .form_notice {
    box-sizing: border-box;
    border-radius: 6px;
    margin-bottom: 20px;
    grid-template-rows: auto;
    grid-template-columns: 20px auto;
    grid-column-gap: 8px;
    grid-row-gap: 8px;
    padding: 8px 16px;
    display: grid;
    align-items: flex-start;
}
.login-form__cnt .form_notice.error {
    background: #E23836;
    border: 2px solid #E23836;
}
.login-form__cnt .form_notice.hidden {
    display: none!important;
}
.login-form__cnt .form_notice svg {}
.login-form__cnt .form_notice p.message {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 145%;
    color: #FFFFFF;
    margin-bottom: 0;
}
.login-form__cnt .form_notice p.message a {
    display: none!important;
}
.login-form__cnt .wrapperContainer {}
.login-form__cnt .wrapperContainer+.wrapperContainer {
    margin-top: 20px;
}
.login-form__cnt .wrapperContainer .lp-ellipsis {
    display: block;
    font-weight: 500;
    font-size: 14px;
    line-height: 145%;
    color: #717B97;
    margin-bottom: 5px;
}
.login-form__cnt .wrapperContainer input[type=email],
.login-form__cnt .wrapperContainer input[type=password],
.login-form__cnt .wrapperContainer input[type=text] {
    padding: 14px;
    height: 57px;
    background: #F3F4F4;
    border: 2px solid rgb(0 0 0 / 20%);
    border-radius: 10px;
    font-weight: 500;
    font-size: 20px;
    line-height: 145%;
    color: #393939;
    display: block;
    width: 100%;
}
.login-form__cnt .wrapperContainer input[type=email]:hover,
.login-form__cnt .wrapperContainer input[type=password]:hover {
    border: 2px solid #5381F6;
}
.login-form__cnt .wrapperContainer input[type=email]:focus,
.login-form__cnt .wrapperContainer input[type=password]:focus {
    border: 2px solid #5381F6;
}
.login-form__cnt .btn-login-form {
    width: 100%;
}
.login-form__cnt .recovery-password {
    font-size: 14px;
    line-height: 145%;
    text-decoration: none;
    color: #5381F6;
    margin: 10px auto 22px;
    display: block;
    text-align: center;
}
.login-form__cnt .recovery-password:hover {
    text-decoration: underline;
}
.login-form__cnt .separator {
    text-align: center;
    margin-bottom: 25px;
    position: relative;
}
.login-form__cnt .separator span {
    font-weight: 500;
    font-size: 18px;
    line-height: 145%;
    color: #717B97;
    background: #fff;
    position: relative;
    padding: 0 10px;
}
.login-form__cnt .separator:before {
    content: "";
    position: absolute;
    top: calc(50% - 1px);
    left: 0;
    height: 1px;
    width: 100%;
    background: rgb(0 0 0 / 20%);
}




.login-form__cnt .auth-methods {}
.login-form__cnt .auth-methods .btn {
    width: 100%;
}
.login-form__cnt .auth-methods .btn+.btn {
    margin-top: 20px;
}
.login-form__cnt .auth-methods .auth-vk span, 
.login-form__cnt .auth-methods .auth-gosuslugi span,
.login-form__cnt .auth-methods .auth-gmail span {
    font-weight: 700;
    font-size: 14px;
    line-height: 145%;
    color: #FFFFFF;
    padding-left: 32px;
    position: relative;
}
.login-form__cnt .auth-methods .auth-gosuslugi {
    background: -webkit-gradient(linear, 100% 0, 0 0, from(#FB5A80), to(#F23965));
    background: -webkit-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
    background: -moz-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
    background: -o-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
    background: linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
    box-shadow: 0px 4px 14px rgba(0, 37, 102, 0.18);
}
.login-form__cnt .auth-methods .auth-gosuslugi:hover {
    opacity: .9;
}
.login-form__cnt .auth-methods .auth-gmail {
    background: #2145FE;
    box-shadow: 0px 4px 14px rgba(0, 37, 102, 0.18);
}
.login-form__cnt .auth-methods .auth-gmail:hover {
    opacity: .9;
}
.login-form__cnt .auth-methods .auth-vk span:before, 
.login-form__cnt .auth-methods .auth-gosuslugi span:before,
.login-form__cnt .auth-methods .auth-gmail span:before {
    content: "";
    width: 24px;
    height: 24px;
    position: absolute;
    left: 0;
    top: 0;
}
.login-form__cnt .auth-methods .auth-vk span:before {
    background: url(/wp-content/themes/fpalaw/assets/img/lk/cib_vk.png) center center no-repeat;
    background-size: contain;
}
.login-form__cnt .auth-methods .auth-gosuslugi span:before {
    background: url(/wp-content/themes/fpalaw/assets/img/lk/cib_gosuslugi.png) center center no-repeat;
    background-size: contain;
}
.login-form__cnt .auth-methods .auth-gmail span:before {
    background: url(/wp-content/themes/fpalaw/assets/img/lk/cib_gmail.png) center center no-repeat;
    background-size: contain;
}

.online__block--slider {
    width: 40%;
}
.online__block--form {
    wifth: 50%;
}
.login-form__cnt .g-signin2 {
    margin-top: 20px;
}
.login-form__cnt .g-signin2 .abcRioButton {
    height: auto!important;
    width: 100%!important;
    background: #2145FE;
    box-shadow: 0px 4px 14px rgb(0 37 102 / 18%);
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    overflow: hidden;
    padding: 8px 30px;
    font-weight: 700;
    font-size: 18px;
    color: #fff;
    text-align: center;
    border: none;
    border-radius: 10px;
    -webkit-transition: all .4s ease;
    -o-transition: all .4s ease;
    transition: all .4s ease;
    cursor: pointer;
    height: 50px!important;
}
.login-form__cnt .g-signin2 .abcRioButtonContentWrapper {
    display: flex;
    justify-content: center;
    align-items: center;
}
.login-form__cnt .g-signin2 .abcRioButtonIcon {
    background: #fff!important;
    border-radius: 8px!important;
    padding: 3px!important;
}
.login-form__cnt .g-signin2 .abcRioButtonContents {
    font-family: Inter,Arial,Helvetica,sans-serif;
    font-style: normal;
    font-weight: 700;
    font-size: 14px;
    line-height: 145%;
    color: #FFFFFF;
    position: relative;
}
.login-form__cnt .g-signin2 .abcRioButtonContentWrapper:before {
    content: "";
    width: 24px;
    height: 24px;
    /*position: absolute;
    left: 0;
    top: 0;*/
    background: url(/wp-content/themes/fpalaw/assets/img/lk/cib_gmail.png) center center no-repeat;
    background-size: contain;
}
.login-form__cnt .g-signin2 .abcRioButtonContentWrapper:after {
    content: "Войти через GMail";
    font-weight: 700;
    font-size: 14px;
    line-height: 145%;
    color: #FFFFFF;
    padding-left: 8px;
    position: relative;
}
.login-form__cnt .g-signin2 .abcRioButtonIcon,
.login-form__cnt .g-signin2 .abcRioButtonContents {
    display: none!important;
}
.auth-gmail___cnt {
    position: relative;
    margin-top: 20px;
}
.auth-gmail___cnt .abs-iframe {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: calc(50% - 220px);
    opacity: 0;
    z-index: 9999999;
}
@media (max-width: 768px) {
    .online__wrap {
        flex-direction: column;
        padding: 25px 0 50px 0;
    }
    .online__block--slider,
    .online__block--form {
        width: 100%;
    }
    .online__block--slider {
        display: flex!important;
        margin-bottom: 50px;
    }
    .online__item {
        width: 100%;
        margin: 0 auto;
    }
    body.no-warning-block .header {
        margin-bottom: 0px!important;
    }
}
@media (max-width: 420px) {
    .online__wrap {
        flex-direction: column;
        padding: 0px 0 50px 0;
    }
    .online__sibtitle {
        font-size: 16px;
    }
    .online__text {
        font-size: 14px;
    }
}
</style>
<main>
  <section class="online">
    <div class="container">
      <div class="online__wrap">
        <div class="online__block online__block--slider">
          <div class="swiper-container swiper-online">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="online__item">
                  <div class="online__image">
                    <picture>
                      <source srcset="<?= get_template_directory_uri() ?>/assets/img/webp/online/1.webp" type="image/webp" />
                      <img src="<?= get_template_directory_uri() ?>/assets/img/online/1.png" alt="Изображение онлайн-сервиса" title="Отслеживайте ход своего дела" />
                    </picture>
                  </div>
                  <div class="online__content online__content--gsap">
                    <p class="online__sibtitle"><?php echo $slider['title_1']; ?></p>
                    <p class="online__text"><?php echo $slider['text_1']; ?></p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="online__item">
                  <div class="online__image">
                    <picture>
                      <source srcset="<?= get_template_directory_uri() ?>/assets/img/webp/online/2.webp" type="image/webp" />
                      <img src="<?= get_template_directory_uri() ?>/assets/img/online/2.png" alt="Изображение онлайн-сервиса" title="Отслеживайте ход своего дела" />
                    </picture>
                  </div>
                  <div class="online__content online__content--gsap">
                    <p class="online__sibtitle"><?php echo $slider['title_2']; ?></p>
                    <p class="online__text"><?php echo $slider['text_2']; ?></p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="online__item">
                  <div class="online__image">
                    <picture>
                      <source srcset="<?= get_template_directory_uri() ?>/assets/img/webp/online/3.webp" type="image/webp" />
                      <img src="<?= get_template_directory_uri() ?>/assets/img/online/3.png" alt="Изображение онлайн-сервиса" title="Отслеживайте ход своего дела" />
                    </picture>
                  </div>
                  <div class="online__content online__content--gsap">
                    <p class="online__sibtitle"><?php echo $slider['title_3']; ?></p>
                    <p class="online__text"><?php echo $slider['text_3']; ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-block-nav">
              <div class="swiper-block-nav-inner">
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next">
                  <svg>
                    <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#arrow-swiper"></use>
                  </svg>
                </div>
                <div class="swiper-button-prev">
                  <svg>
                    <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#arrow-swiper"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="online__block online__block--form">
            <div class="login-form__cnt">
                <form>
                    <div class="form_notice error hidden">
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 0.5C8.02219 0.5 6.08879 1.08649 4.4443 2.1853C2.79981 3.28412 1.51809 4.8459 0.761209 6.67316C0.00433284 8.50042 -0.1937 10.5111 0.192152 12.4509C0.578004 14.3907 1.53041 16.1725 2.92894 17.5711C4.32746 18.9696 6.10929 19.922 8.0491 20.3078C9.98891 20.6937 11.9996 20.4957 13.8268 19.7388C15.6541 18.9819 17.2159 17.7002 18.3147 16.0557C19.4135 14.4112 20 12.4778 20 10.5C20 9.18678 19.7413 7.88642 19.2388 6.67316C18.7362 5.45991 17.9997 4.35752 17.0711 3.42893C16.1425 2.50035 15.0401 1.76375 13.8268 1.2612C12.6136 0.758658 11.3132 0.5 10 0.5ZM10 15.5C9.80222 15.5 9.60888 15.4413 9.44443 15.3315C9.27998 15.2216 9.15181 15.0654 9.07612 14.8827C9.00044 14.7 8.98063 14.4989 9.01922 14.3049C9.0578 14.1109 9.15304 13.9327 9.2929 13.7929C9.43275 13.653 9.61093 13.5578 9.80491 13.5192C9.99889 13.4806 10.2 13.5004 10.3827 13.5761C10.5654 13.6518 10.7216 13.78 10.8315 13.9444C10.9414 14.1089 11 14.3022 11 14.5C11 14.7652 10.8946 15.0196 10.7071 15.2071C10.5196 15.3946 10.2652 15.5 10 15.5ZM11 11.5C11 11.7652 10.8946 12.0196 10.7071 12.2071C10.5196 12.3946 10.2652 12.5 10 12.5C9.73479 12.5 9.48043 12.3946 9.2929 12.2071C9.10536 12.0196 9 11.7652 9 11.5V6.5C9 6.23478 9.10536 5.98043 9.2929 5.79289C9.48043 5.60536 9.73479 5.5 10 5.5C10.2652 5.5 10.5196 5.60536 10.7071 5.79289C10.8946 5.98043 11 6.23478 11 6.5V11.5Z" fill="white"></path></svg>
                        <p class="message"></p>
                    </div>
                    <div class="wrapperContainer">
                        <div class="field-text">
                            <div class="lp-form-field">
                                <label class="lp-ellipsis" for="email">Логин</label>
                                <input class="lp-form-fieldInput" id="email" name="email" type="text" placeholder="" required="required" />
                            </div>
                        </div>
                    </div>
                    <div class="wrapperContainer">
                        <div class="field-text">
                            <div class="lp-form-field">
                                <label class="lp-ellipsis" for="password">Пароль</label>
                                <input class="lp-form-fieldInput" id="password" name="password" type="password" placeholder="" required="required" />
                            </div>
                        </div>
                    </div>
                    <div class="wrapperContainer">
                        <div class="field-button">
                            <div class="lp-form-field">
                                <button class="btn btn-login-form">Войти</button>
                            </div>
                        </div>
                    </div>
                </form>
                <a class="recovery-password" href="/recovery_password/">Забыли пароль?</a>
                <div class="separator">
                    <span>Другой способ авторизации</span>
                </div>
                <div class="auth-methods">
                    <button class="auth-vk btn"><span>Войти через VKontakte</span></button>
                    <button class="auth-gosuslugi btn" onclick="window.location.replace('<?php echo $esia->buildUrl(); ?>');"><span>Войти через Госуслуги</span></button>
                    <div class="auth-gmail___cnt">
                        <button class="auth-gmail btn"><span>Войти через GMail</span></button>
                        <div class="abs-iframe">
                            <div id="g_id_onload"
                                 data-client_id="182442756685-kdaihouikgibh277b0q0pnfvps7l899n.apps.googleusercontent.com"
                                 data-context="signin"
                                 data-ux_mode="popup"
                                 data-callback="handleCredentialResponse"
                                 data-auto_prompt="false">
                            </div>
                            <div class="g_id_signin"
                                 data-type="standard"
                                 data-shape="rectangular"
                                 data-theme="filled_blue"
                                 data-text="$ {button.text}"
                                 data-size="large"
                                 data-locale="ru"
                                 data-logo_alignment="center"
                                data-width=550>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form__politics politics">
                    <span class="politics__icon">
                        <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#shild"></use></svg>
                    </span>
                    <p class="politics__text">Мы гарантируем безопасность и сохранность Ваших данных. Нажимая на кнопку, вы даете согласие на обработку своих персональных данных в соответствии с <a href="/">«Политикой конфиденциальности»</a></p>
                </div>
            </div>
          <div class="form-online form-online--first hidden">
            <h2 class="form-online__title">Онлайн кабинет для&nbsp;текущих клиентов</h2>
            <form class="form form-online__form">
              <div class="form__row">
                <label class="form__label form__label--light" for="phone">Введите телефон, который указывали
                  <br> при заключении договора</label>
                <input class="form__field" name="phone" id="phone" type="tel" placeholder="+7 (000) 000 00 00" required>
              </div>
              <div class="form__row">
                <label class="form__label form__label--light" for="pass">Введите пароль, который был выдан
                  <br> вам при заключении договора</label>
                <input class="form__field" name="pass" id="pass" type="text" placeholder="Введите ваш пароль" required>
                <span class="form__note">
                  <button class="no-btn form__note-recover">Восстановить</button>
                </span>
              </div>
              <button class="btn form__btn" type="submit">
                <span>Войти</span>
              </button>
              <div class="form__politics politics">
                <span class="politics__icon">
                  <svg>
                    <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#shild"></use>
                  </svg>
                </span>
                <p class="politics__text">Мы гарантируем безопасность и сохранность Ваших данных. Нажимая на кнопку, вы даете согласие на обработку своих персональных данных в соответствии с <a href="/">«Политикой конфиденциальности»</a>
                </p>
              </div>
            </form>
          </div>
          <div class="form-online form-online--second hidden">
            <h2 class="form-online__title">Восстановление пароля</h2>
            <p class="form-online__text">Для восстановления пароля Вам необходимо обратиться к менеджеру, который ведет ваше банкротство. Обратитесь к нему и он выдаст Вам новый пароль.</p>
            <div class="form-online__links">
              <a class="link link--contact" href="tel:<? echo do_shortcode('[sc name="phone-link-1"]'); ?>"><? echo do_shortcode('[sc name="phone-1"]'); ?></a>
              <span class="form-online__hot-line">Бесплатная горячая линия</span>
            </div>
          </div>
          <ul class="online__list hidden">
            <li class="online__list-item">
              <div class="online__icon online__icon--1"></div>
              <div class="online__content">
                <p class="online__sibtitle"><?php echo $slider['title_1']; ?></p>
                <p class="online__text"><?php echo $slider['text_1']; ?></p>
              </div>
            </li>
            <li class="online__list-item">
              <div class="online__icon online__icon--2"></div>
              <div class="online__content">
                <p class="online__sibtitle"><?php echo $slider['title_2']; ?></p>
                <p class="online__text"><?php echo $slider['text_2']; ?></p>
              </div>
            </li>
            <li class="online__list-item">
              <div class="online__icon online__icon--3"></div>
              <div class="online__content">
                <p class="online__sibtitle"><?php echo $slider['title_3']; ?></p>
                <p class="online__text"><?php echo $slider['text_3']; ?></p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>