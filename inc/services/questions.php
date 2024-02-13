<?php 
  $questions = get_field('questions', 374); 
?>
<section id="services_questions" class="section--services-grey questions">
  <div class="container">
    <div class="section__image section__image--questions lazy"></div>
    <h2 class="title-page"><?php echo $questions['title']; ?></h2>
    <p class="subtitle-page"><?php echo $questions['text']; ?></p>
    <ol class="spoiler__wrap spoiler__wrap--questions" itemscope="" itemtype="https://schema.org/FAQPage">
      <li class="spoiler__block" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
        <div class="spoiler__head">
          <div class="spoiler__category" itemprop="name"><?php echo $questions['name_1']; ?></div>
          <div class="spoiler__btn">
            <span class="spoiler__btn-arrow"></span>
          </div>
        </div>
        <div class="spoiler__content spoiler__content--video hide" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <div class="spoiler__unit spoiler__unit--video">
            <div class="youtube" data-embed="iMlHEZZ3n1c">
              <div class="youtube__button">
                <svg>
                  <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#play"></use>
                </svg>
              </div>
            </div>
          </div>
          <div class="spoiler__unit spoiler__unit--text">
            <div class="spoiler__text--unit" itemprop="text" style="margin-bottom: 20px;">
              <?php echo $questions['text_1']; ?>
            </div>
            
            <div class="speaker">
              <div class="speaker__foto speaker__foto--bodnar"> </div>
              <div class="speaker__author">Спикер</div>
              <div class="speaker__name">Боднар Евгения Ивановна</div>
              <div class="speaker__post">Руководитель отдела сопровождения клиентов по кредитам и долгам</div>
            </div>
          </div>
        </div>
      </li>
      <li class="spoiler__block" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
        <div class="spoiler__head">
          <div class="spoiler__category" itemprop="name"><?php echo $questions['name_2']; ?></div>
          <div class="spoiler__btn">
            <span class="spoiler__btn-arrow"></span>
          </div>
        </div>
        <div class="spoiler__content spoiler__content--video hide" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <div class="spoiler__unit spoiler__unit--video">
            <div class="youtube" data-embed="-4t7qrGgcik">
              <div class="youtube__button">
                <svg>
                  <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#play"></use>
                </svg>
              </div>
            </div>
          </div>
          <div class="spoiler__unit spoiler__unit--text">
            <div class="spoiler__text--unit" itemprop="text" style="margin-bottom: 20px;">
              <?php echo $questions['text_2']; ?>
            </div>
            
            <div class="speaker">
              <div class="speaker__foto speaker__foto--bodnar"> </div>
              <div class="speaker__author">Спикер</div>
              <div class="speaker__name">Боднар Евгения Ивановна</div>
              <div class="speaker__post">Руководитель отдела сопровождения клиентов по кредитам и долгам</div>
            </div>
          </div>
        </div>
      </li>
      <li class="spoiler__block" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
        <div class="spoiler__head">
          <div class="spoiler__category" itemprop="name"><?php echo $questions['name_3']; ?></div>
          <div class="spoiler__btn">
            <span class="spoiler__btn-arrow"></span>
          </div>
        </div>
        <div class="spoiler__content spoiler__content--video hide" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <div class="spoiler__unit spoiler__unit--video">
            <div class="youtube" data-embed="MvH0JSuj2RI">
              <div class="youtube__button">
                <svg>
                  <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#play"></use>
                </svg>
              </div>
            </div>
          </div>
          <div class="spoiler__unit spoiler__unit--text">
            <div class="spoiler__text--unit" itemprop="text" style="margin-bottom: 20px;">
              <?php echo $questions['text_3']; ?>
            </div>
            
            <div class="speaker">
              <div class="speaker__foto speaker__foto--bodnar"> </div>
              <div class="speaker__author">Спикер</div>
              <div class="speaker__name">Боднар Евгения Ивановна</div>
              <div class="speaker__post">Руководитель отдела сопровождения клиентов по кредитам и долгам</div>
            </div>
          </div>
        </div>
      </li>
      <li class="spoiler__block" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
        <div class="spoiler__head">
          <div class="spoiler__category" itemprop="name"><?php echo $questions['name_4']; ?></div>
          <div class="spoiler__btn">
            <span class="spoiler__btn-arrow"></span>
          </div>
        </div>
        <div class="spoiler__content spoiler__content--video hide" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <div class="spoiler__unit spoiler__unit--video">
            <div class="youtube" data-embed="q_d74t2or_E">
              <div class="youtube__button">
                <svg>
                  <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#play"></use>
                </svg>
              </div>
            </div>
          </div>
          <div class="spoiler__unit spoiler__unit--text">
            <div class="spoiler__text--unit" itemprop="text" style="margin-bottom: 20px;">
              <?php echo $questions['text_4']; ?>
            </div>
            
            <div class="speaker">
              <div class="speaker__foto speaker__foto--bodnar"> </div>
              <div class="speaker__author">Спикер</div>
              <div class="speaker__name">Боднар Евгения Ивановна</div>
              <div class="speaker__post">Руководитель отдела сопровождения клиентов по кредитам и долгам</div>
            </div>
          </div>
        </div>
      </li>
      <li class="spoiler__block" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
        <div class="spoiler__head">
          <div class="spoiler__category" itemprop="name"><?php echo $questions['name_5']; ?></div>
          <div class="spoiler__btn">
            <span class="spoiler__btn-arrow"></span>
          </div>
        </div>
        <div class="spoiler__content spoiler__content--video hide" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <div class="spoiler__unit spoiler__unit--video">
            <div class="youtube" data-embed="nYNfSJ6t9fo">
              <div class="youtube__button">
                <svg>
                  <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#play"></use>
                </svg>
              </div>
            </div>
          </div>
          <div class="spoiler__unit spoiler__unit--text">
            <div class="spoiler__text--unit" itemprop="text" style="margin-bottom: 20px;">
              <?php echo $questions['text_5']; ?>
            </div>
            
            <div class="speaker">
              <div class="speaker__foto speaker__foto--bodnar"> </div>
              <div class="speaker__author">Спикер</div>
              <div class="speaker__name">Боднар Евгения Ивановна</div>
              <div class="speaker__post">Руководитель отдела сопровождения клиентов по кредитам и долгам</div>
            </div>
          </div>
        </div>
      </li>
      <li class="spoiler__block" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
        <div class="spoiler__head">
          <div class="spoiler__category" itemprop="name"><?php echo $questions['name_6']; ?></div>
          <div class="spoiler__btn">
            <span class="spoiler__btn-arrow"></span>
          </div>
        </div>
        <div class="spoiler__content spoiler__content--video hide" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <div class="spoiler__unit spoiler__unit--video">
            <div class="youtube" data-embed="BNE8pep0kc0">
              <div class="youtube__button">
                <svg>
                  <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#play"></use>
                </svg>
              </div>
            </div>
          </div>
          <div class="spoiler__unit spoiler__unit--text">
            <div class="spoiler__text--unit" itemprop="text" style="margin-bottom: 20px;">
              <?php echo $questions['text_6']; ?>
            </div>
            
            <div class="speaker">
              <div class="speaker__foto speaker__foto--bodnar"> </div>
              <div class="speaker__author">Спикер</div>
              <div class="speaker__name">Боднар Евгения Ивановна</div>
              <div class="speaker__post">Руководитель отдела сопровождения клиентов по кредитам и долгам</div>
            </div>
          </div>
        </div>
      </li>
      <li class="spoiler__block" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
        <div class="spoiler__head">
          <div class="spoiler__category" itemprop="name"><?php echo $questions['name_7']; ?></div>
          <div class="spoiler__btn">
            <span class="spoiler__btn-arrow"></span>
          </div>
        </div>
        <div class="spoiler__content spoiler__content--video hide" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <div class="spoiler__unit spoiler__unit--video">
            <div class="youtube" data-embed="aM1rEwH9ThQ">
              <div class="youtube__button">
                <svg>
                  <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#play"></use>
                </svg>
              </div>
            </div>
          </div>
          <div class="spoiler__unit spoiler__unit--text">
            <div class="spoiler__text--unit" itemprop="text" style="margin-bottom: 20px;">
              <?php echo $questions['text_7']; ?>
            </div>
            
            <div class="speaker">
              <div class="speaker__foto speaker__foto--bodnar"> </div>
              <div class="speaker__author">Спикер</div>
              <div class="speaker__name">Боднар Евгения Ивановна</div>
              <div class="speaker__post">Руководитель отдела сопровождения клиентов по кредитам и долгам</div>
            </div>
          </div>
        </div>
      </li>
      <li class="spoiler__block" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
        <div class="spoiler__head">
          <div class="spoiler__category" itemprop="name"><?php echo $questions['name_8']; ?></div>
          <div class="spoiler__btn">
            <span class="spoiler__btn-arrow"></span>
          </div>
        </div>
        <div class="spoiler__content spoiler__content--video hide" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <div class="spoiler__unit spoiler__unit--video">
            <div class="youtube" data-embed="I75tnA_cn7w">
              <div class="youtube__button">
                <svg>
                  <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#play"></use>
                </svg>
              </div>
            </div>
          </div>
          <div class="spoiler__unit spoiler__unit--text">
            <div class="spoiler__text--unit" itemprop="text" style="margin-bottom: 20px;">
              <?php echo $questions['text_8']; ?>
            </div>
            
            <div class="speaker">
              <div class="speaker__foto speaker__foto--bodnar"> </div>
              <div class="speaker__author">Спикер</div>
              <div class="speaker__name">Боднар Евгения Ивановна</div>
              <div class="speaker__post">Руководитель отдела сопровождения клиентов по кредитам и долгам</div>
            </div>
          </div>
        </div>
      </li>
      <li class="spoiler__block" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
        <div class="spoiler__head">
          <div class="spoiler__category" itemprop="name"><?php echo $questions['name_9']; ?></div>
          <div class="spoiler__btn">
            <span class="spoiler__btn-arrow"></span>
          </div>
        </div>
        <div class="spoiler__content spoiler__content--video hide" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <div class="spoiler__unit spoiler__unit--video">
            <div class="youtube" data-embed="ScordYb3Hbg">
              <div class="youtube__button">
                <svg>
                  <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#play"></use>
                </svg>
              </div>
            </div>
          </div>
          <div class="spoiler__unit spoiler__unit--text">
            <div class="spoiler__text--unit" itemprop="text" style="margin-bottom: 20px;">
              <?php echo $questions['text_9']; ?>
            </div>
            
            <div class="speaker">
              <div class="speaker__foto speaker__foto--bodnar"> </div>
              <div class="speaker__author">Спикер</div>
              <div class="speaker__name">Боднар Евгения Ивановна</div>
              <div class="speaker__post">Руководитель отдела сопровождения клиентов по кредитам и долгам</div>
            </div>
          </div>
        </div>
      </li>
<!--
      <li class="spoiler__block">
        <div class="spoiler__head">
          <div class="spoiler__category">Как мне оплатить ваши услуги, если я выплачиваю кредиты? Где взять деньги, если приставы списывают мои доходы?</div>
          <div class="spoiler__btn">
            <span class="spoiler__btn-arrow"></span>
          </div>
        </div>
        <div class="spoiler__content hide">
          <p>Инициирование процедуры банкротства позволит вам на законных основаниях полностью прекратить выплату кредитов. Также судебные приставы прекращают списывать вашу заработную плату, пенсию и другие источники доходов. В результате, у вас появляются средства на которые вы можете оплатить процедуру банкротства.</p>
          <p>Наша компания предоставляет всем клиентам возможность рассрочки с комфортным ежемесячным платежом на срок до 12 месяцев. Записывайтесь на консультацию и узнайте все подробности.</p>
        </div>
      </li>
-->
    </ol>
    <div class="master__wrap master__wrap--in2">
      <div class="master__block master__block--person">
        <div class="master__person master__person--inverse">
          <picture>
            <source srcset="<?= get_template_directory_uri() ?>/assets/img/services/humans/anzhelika-vladimirovna_medium.png" media="(max-width: 992px)">
            <img src="<?= get_template_directory_uri() ?>/assets/img/services/humans/anzhelika-vladimirovna.png" alt="Фото специалиста" title="Копырина Анжелика Владимировна" loading="lazy">
          </picture>
        </div>
        <div class="plashka-ver-second__cnt">
            <div class="name">Копырина Анжелика Владимировна</div>
            <div class="post">Руководитель подразделения судопроизводства по банкротным делам</div>
        </div>
      </div>
      <div class="master__block master__block--content" data-master="5">
        <span class="master__note">Задайте мне вопрос</span>
        <p class="master__title master__title--big">Не нашли ответа на свой вопрос?</p>
        <p class="master__text">Я занимаюсь банкротством больше 7 лет и уже давно не даю плохих ответов. Если вы хотите окончательно решить вопрос с долгами — вам нужно знать о всех важных нюансах</p>
        <!--
        <p class="master__name">Копырина Анжелика Владимировна</p>
        <p class="master__post">Руководитель подразделения судопроизводства по банкротным делам</p>
        -->
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