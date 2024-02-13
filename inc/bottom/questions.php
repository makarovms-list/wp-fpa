<section class="section--services-grey questions">
  <div class="container">
    <div class="master__wrap master__wrap--in2">
      <div class="master__block master__block--person">
        <div class="master__person master__person--inverse">
          <picture>
            <source srcset="<?= get_template_directory_uri() ?>/assets/img/services/humans/anzhelika-vladimirovna_medium.png" media="(max-width: 992px)">
            <img src="<?= get_template_directory_uri() ?>/assets/img/services/humans/anzhelika-vladimirovna.png" alt="Фото специалиста" title="Копырина Анжелика Владимировна" loading="lazy">
          </picture>
        </div>
      </div>
      <div class="master__block master__block--content" data-master="5">
        <span class="master__note">Задайте мне вопрос</span>
        <p class="master__title master__title--big">Не нашли ответа на свой вопрос?</p>
        <p class="master__text">Я занимаюсь банкротством больше 7 лет и уже давно не даю плохих ответов. Если вы хотите окончательно решить вопрос с долгами — вам нужно знать о всех важных нюансах</p>
        <p class="master__name">Копырина Анжелика Владимировна</p>
        <p class="master__post">Руководитель подразделения судопроизводства по банкротным делам</p>
        
         <?php echo do_shortcode( '[contact-form-7 id="1099" title="Секция Частые вопросы - Не нашли ответа на свой вопрос?" html_class="form--width-100"]' ); ?>

        
        <div class="politics">
          <span class="politics__icon">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#shild"></use>
            </svg>
          </span>
          <p class="politics__text">Мы гарантируем безопасность и сохранность Ваших данных. Нажимая на кнопку, вы даете согласие на обработку своих персональных данных в соответствии с <a href="<?= get_permalink(123) ?>">«Политикой конфиденциальности»</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>