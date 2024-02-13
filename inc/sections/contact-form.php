<div class="contact-form">
  <div class="container">
    <div class="contact-form__wrap">
      <div class="contact-form__block contact-form__block--form">
        <h3 class="contact-form__title">Перезвоним и бесплатно проконсультируем</h3>
        <p class="contact-form__text">Расскажем про процедуру списания кредитов и долгов, условия, цены, сроки и преимущества. Ответим на все имеющиеся у вас вопросы</p>
        
        <?php echo do_shortcode( '[contact-form-7 id="1161" title="Страница Контакты - Перезвоним и бесплатно проконсультируем" html_class="contact-form__form"]' ); ?>
        
        <div class="politics">
            <span class="politics__icon">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#shild"></use>
              </svg>
            </span>
            <p class="politics__text">Мы гарантируем безопасность и сохранность Ваших данных. Нажимая на кнопку, вы даете согласие на обработку своих персональных данных в соответствии с <a href="<?= get_permalink(123) ?>">«Политикой&nbsp;конфиденциальности»</a>
            </p>
          </div>
      </div>
      <div class="contact-form__block contact-form__block--image">
        <picture class="contact-form__image">
          <source srcset="<?= get_template_directory_uri() ?>/assets/img/webp/forms/pic_1.webp" type="image/webp" />
          <img src="<?= get_template_directory_uri() ?>/assets/img/forms/pic_1.png" alt="Фото руководителя отдела клиентского сервиса" title="Чернова Екатерина Юрьевна " />
        </picture>
        <div class="contact-form__lable">
          <span class="contact-form__name">Чернова Екатерина Юрьевна </span>
          <span class="contact-form__post">Руководитель отдела&nbsp;клиентского&nbsp;сервиса</span>
        </div>
      </div>
    </div>
  </div>
</div>