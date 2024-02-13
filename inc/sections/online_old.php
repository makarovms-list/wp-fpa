<?php
    require('modules/vendor/autoload.php');
    // init configuration
    $clientID = '182442756685-c567hsaak9vh2rbeguhlb05q9fgn1qhu.apps.googleusercontent.com';
    $clientSecret = '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';
    $redirectUri = 'https://fpa.ru/lichnyj-kabinet';
    // create Client Request to access Google API
    $client = new Google_Client();
    $client->setClientId($clientID);
    $client->setClientSecret($clientSecret);
    $client->setRedirectUri($redirectUri);
    $client->addScope("email");
    $client->addScope("profile");

    // authenticate code from Google OAuth Flow
    if (isset($_GET['code'])) {
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        $client->setAccessToken($token['access_token']);
    
        // get profile info
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();
        $first_name = $google_account_info->givenName;
        $last_name = $google_account_info->familyName;
        $middle_name = '';
        $email =  $google_account_info->email;
        $picture = $google_account_info->picture;
        $birth_date = '';
        $contact_phone_number = 'о';
		$residing_place = '';
        $username_arr = explode("@", $email);
        $username = $username_arr[0];
        
        if (!email_exists($email)) {
            $random_password = wp_generate_password(12);
            $user_id = wp_create_user($username, $random_password, $email);
            
            $support_name = "Администратор сайта 'Финансово-Правовой альянс'";
            $support_email = "info@fpa.ru";
            $message = '
                <p>Здраствуйте, '.$first_name." ".$last_name.'</p>
                <p>Вы успешно зарегистрировались на сейте компании ООО "Финансово-Правовой альянс".</p>
                <p>Ваши данные для входа в личный кабинет:</p>
                <p><b>Ссылка на ЛК сайта:</b> https://fpa.ru/lichnyj-kabinet/</p>
                <p><b>Имя пользователя:</b> '.$username.'</p>
                <p><b>Пароль:</b> '.$random_password.'</p>
            ';
            $to = $email;
            $subject = "Вы зарегистрировалист на сайте - fpa.ru [Финансово-Правовой альянс]";
            $headers = 'From: '. $email . "\r\n" .
            'Reply-To: ' . $email . "\r\n";
            $sent = wp_mail($to, $subject, strip_tags($message), $headers);
            
            $credentials = array(
                'user_login'    => $username,
                'user_password' => $random_password,
            );
            $user_signon = wp_signon($credentials, true);
        } else {
            $user_id = email_exists($email);
            $user_id = wp_update_user([
                'ID' => $user_id,
                'display_name' => $first_name." ".$last_name,
                'first_name' => $first_name,
                'last_name' => $last_name
            ]);
        	update_user_meta($user_id, 'middle_name', $middle_name);
        	update_user_meta($user_id, 'contact_phone_number', $contact_phone_number);
        	update_user_meta($user_id, 'user_picture', $picture);
        	update_user_meta($user_id, 'birth_date', $birth_date);
        	update_user_meta($user_id, 'residing_place', $residing_place);
        }
    } else {
        if (is_wp_error($user_signon)) {
            get_header();
?>
                <main>
                    <?php get_template_part( 'inc/cabinet/user_detail' ); ?>
                </main>
<?php
            get_footer();
        } else {
            get_header();
            $slider = get_field('content_slider');
?>
                <style>
                .login-form__cnt {}
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
                .login-form__cnt .wrapperContainer input[type=password] {
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
                                    <div class="wrapperContainer">
                                        <div class="field-text">
                                            <div class="lp-form-field">
                                                <label class="lp-ellipsis" for="email">Логин</label>
                                                <input class="lp-form-fieldInput" id="email" name="email" type="email" placeholder="" required="required" />
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
                                <a class="recovery-password">Забыли пароль?</a>
                                <div class="separator">
                                    <span>Другой способ авторизации</span>
                                </div>
                                <div class="auth-methods">
                                    <button class="auth-vk btn"><span>Войти через VKontakte</span></button>
                                    <button class="auth-gosuslugi btn"><span>Войти через Госуслуги</span></button>
                                    <!--<button class="auth-gmail btn"><span>Войти через GMail</span></button>-->
                                    <a href="<?php echo $client->createAuthUrl(); ?>" class="auth-gmail btn"><span>Войти через GMail</span></a>
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
<?php
            get_footer();
        }
    }
?>


