<?php
    get_header();
    $slider = get_field('content_slider');
?>
<style>
.recovery-form__cnt {
    width: 100%;
}
.recovery-form__cnt .form_notice {
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
.recovery-form__cnt .form_notice.error {
    background: #E23836;
    border: 2px solid #E23836;
}
.recovery-form__cnt .form_notice.info {
    background: #17CC5F;
    border: 2px solid #17CC5F;
}
.recovery-form__cnt .form_notice.hidden {
    display: none!important;
}
.recovery-form__cnt .form_notice svg {}
.recovery-form__cnt .form_notice p.message {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 145%;
    color: #FFFFFF;
    margin-bottom: 0;
}
.recovery-form__cnt .form_notice p.message a {
    display: none!important;
}
.recovery-form__cnt .wrapperContainer {}
.recovery-form__cnt .wrapperContainer+.wrapperContainer {
    margin-top: 20px;
}
.recovery-form__cnt .wrapperContainer .lp-ellipsis {
    display: block;
    font-weight: 500;
    font-size: 14px;
    line-height: 145%;
    color: #717B97;
    margin-bottom: 5px;
}
.recovery-form__cnt .wrapperContainer input[type=email],
.recovery-form__cnt .wrapperContainer input[type=password],
.recovery-form__cnt .wrapperContainer input[type=text] {
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
.recovery-form__cnt .wrapperContainer input[type=email]:hover,
.recovery-form__cnt .wrapperContainer input[type=password]:hover {
    border: 2px solid #5381F6;
}
.recovery-form__cnt .wrapperContainer input[type=email]:focus,
.recovery-form__cnt .wrapperContainer input[type=password]:focus {
    border: 2px solid #5381F6;
}
.recovery-form__cnt .btn-recovery-form {
    width: 100%;
}
.recovery-form__cnt .separator {
    text-align: center;
    margin-bottom: 25px;
    position: relative;
}
.recovery-form__cnt .separator span {
    font-weight: 500;
    font-size: 18px;
    line-height: 145%;
    color: #717B97;
    background: #fff;
    position: relative;
    padding: 0 10px;
}
.recovery-form__cnt .separator:before {
    content: "";
    position: absolute;
    top: calc(50% - 1px);
    left: 0;
    height: 1px;
    width: 100%;
    background: rgb(0 0 0 / 20%);
}
.recovery-form__cnt .btn-login-form {
    width: 100%;
}
.online__block--slider {
    width: 40%;
}
.online__block--form {
    width: 50%;
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
            <div class="recovery-form__cnt">
                <h2 class="form-online__title">Восстановление пароля</h2>
                <form>
                    <div class="form_notice error hidden">
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 0.5C8.02219 0.5 6.08879 1.08649 4.4443 2.1853C2.79981 3.28412 1.51809 4.8459 0.761209 6.67316C0.00433284 8.50042 -0.1937 10.5111 0.192152 12.4509C0.578004 14.3907 1.53041 16.1725 2.92894 17.5711C4.32746 18.9696 6.10929 19.922 8.0491 20.3078C9.98891 20.6937 11.9996 20.4957 13.8268 19.7388C15.6541 18.9819 17.2159 17.7002 18.3147 16.0557C19.4135 14.4112 20 12.4778 20 10.5C20 9.18678 19.7413 7.88642 19.2388 6.67316C18.7362 5.45991 17.9997 4.35752 17.0711 3.42893C16.1425 2.50035 15.0401 1.76375 13.8268 1.2612C12.6136 0.758658 11.3132 0.5 10 0.5ZM10 15.5C9.80222 15.5 9.60888 15.4413 9.44443 15.3315C9.27998 15.2216 9.15181 15.0654 9.07612 14.8827C9.00044 14.7 8.98063 14.4989 9.01922 14.3049C9.0578 14.1109 9.15304 13.9327 9.2929 13.7929C9.43275 13.653 9.61093 13.5578 9.80491 13.5192C9.99889 13.4806 10.2 13.5004 10.3827 13.5761C10.5654 13.6518 10.7216 13.78 10.8315 13.9444C10.9414 14.1089 11 14.3022 11 14.5C11 14.7652 10.8946 15.0196 10.7071 15.2071C10.5196 15.3946 10.2652 15.5 10 15.5ZM11 11.5C11 11.7652 10.8946 12.0196 10.7071 12.2071C10.5196 12.3946 10.2652 12.5 10 12.5C9.73479 12.5 9.48043 12.3946 9.2929 12.2071C9.10536 12.0196 9 11.7652 9 11.5V6.5C9 6.23478 9.10536 5.98043 9.2929 5.79289C9.48043 5.60536 9.73479 5.5 10 5.5C10.2652 5.5 10.5196 5.60536 10.7071 5.79289C10.8946 5.98043 11 6.23478 11 6.5V11.5Z" fill="white"></path></svg>
                        <p class="message"></p>
                    </div>
                    <div class="wrapperContainer">
                        <div class="field-text">
                            <div class="lp-form-field">
                                <label class="lp-ellipsis" for="email">Введите Ваш E-mail</label>
                                <input class="lp-form-fieldInput" id="email" name="email" type="text" placeholder="" required="required" />
                            </div>
                        </div>
                    </div>
                    <div class="wrapperContainer">
                        <div class="field-button">
                            <div class="lp-form-field">
                                <button class="btn btn-login-form">Восстановить</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>