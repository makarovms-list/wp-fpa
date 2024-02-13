<div class="answer-form">
  <div class="answer-form__wrap">
    <div class="calc-modal__check hidden">
      <svg viewBox="0 0 51 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M2.584 25l17.188 16.667L48.418 8.334" stroke="#35D977" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </div>
    <div class="calc-modal__loader">
      <div class="loader"></div>
    </div>
    <div class="calc-modal__block">
      <div class="calc-modal__bg"> </div>
      <div class="calc-modal__inner">
        <span>Читаем ответы...</span>
        <span>Анализируем условия...</span>
        <span>Подбираем варианты...</span>
        <span>Рассчитываем стоимость...</span>
        <span>Ожидаем ответа...</span>
        <span>Составляем отчёт...</span>
        <span>Расчет готов, введите номер для отправки...</span>
      </div>
    </div>
    <h3 class="answer-form__title">Для вас идёт анализ…
      <br> Ответ придёт в СМС-сообщении
      <br> в течение 90 секунд
    </h3>

    <?php echo do_shortcode( '[contact-form-7 id="3287" title="Финальная форма для МФЦ (отдельная страница)" html_class="modal__form form-test"]' ); ?>

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
</div>