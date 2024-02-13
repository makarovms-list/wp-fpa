<style>
.form-aside__title--big {
    font-size: 22px;
}
</style>
<?php 
    $form = get_field('form');
    if (!empty($form['title'])) {
        $form_sms = '';
        $form_name = '';
        switch ($form['expert_form']) {
            case 'okladnikov':
                $form_sms = '40';
                $form_name = 'SMS-37 Запись на консультацию к Окладникову Илье Викторовичу';
                break;
            case 'efremov':
                $form_sms = '41';
                $form_name = 'SMS-38 Запись на консультацию к Ефремову Александру Игоревичу';
                break;
            case 'bodnar':
                $form_sms = '42';
                $form_name = 'SMS-39 Запись на консультацию к Боднар Евгении Ивановне';
                break;
            case 'golovin':
                $form_sms = '43';
                $form_name = 'SMS-40 Запись на консультацию к Головину Алексею Юрьевичу';
                break;
            case 'kopyrina':
                $form_sms = '44';
                $form_name = 'SMS-41 Запись на консультацию к Копыриной Анжелике Владимировне';
                break;
            case 'sergeeva':
                $form_sms = '45';
                $form_name = 'SMS-42 Запись на консультацию к Сергеевой Ольге Николаевне';
                break;
        }
?>
        <div class="form-aside form-aside--single" id="expert-form_cnt" data-form-sms="<?=$form_sms; ?>" data-form-name="<?=$form_name; ?>">
            <h3 class="form-aside__title form-aside__title--big"><?=$form['title']; ?></h3>
            <?php echo do_shortcode( '[contact-form-7 id="1103" title="Форма для страницы Услуги - Записаться на бесплатную консультацию" html_class="modal__form"]' ); ?>
            <div class="politics">
                <span class="politics__icon">
                    <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#shild"></use></svg>
                </span>
                <p class="politics__text">Мы гарантируем безопасность и сохранность Ваших данных. Нажимая на кнопку, вы даете согласие на обработку своих персональных данных в соответствии с <a href="<?= get_permalink(123) ?>">«Политикой конфиденциальности»</a></p>
            </div>
        </div>
<?php } ?>