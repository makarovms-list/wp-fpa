<div class="news__wrap--mmedia">
  <div class="news__row news__row--mmedia mmedia mmedia--news">
    <div class="container">
      <div class="mmedia__wrap">
        <div class="mmedia__block mmedia__block--image">
          <picture class="mmedia__image">
            <source srcset="<?= get_template_directory_uri() ?>/assets/img/webp/news/news.webp" type="image/webp" />
            <img src="<?= get_template_directory_uri() ?>/assets/img/news/news.png" alt="Картинка популярных СМИ" title="Популярные СМИ" />
          </picture>
        </div>
        <div class="mmedia__block mmedia__block--content">
          <h3 class="mmedia__title">Доверяют нашей компетенции</h3>
          <p class="mmedia__text">Текст в три-четыре строки о наших преимуществах и почему о нас пишут крупные СМИ. Текст в три-четыре строки о наших преимуществах и почему о нас пишут крупные СМИ. Текст в три-четыре строки о наших преимуществах и почему о нас пишут крупные СМИ. </p>
          <ul class="mmedia__list mmedia__list--news">
            <li class="mmedia__item mmedia__item--vedom">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#Vedomosti"></use>
              </svg>
            </li>
            <li class="mmedia__item mmedia__item--inter">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#Interfax"></use>
              </svg>
            </li>
            <li class="mmedia__item mmedia__item--poss">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#Rossiya-24"></use>
              </svg>
            </li>
            <li class="mmedia__item mmedia__item--kp">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#KP"></use>
              </svg>
            </li>
            <li class="mmedia__item mmedia__item--kom">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#Kommersant"></use>
              </svg>
            </li>
            <li class="mmedia__item mmedia__item--perv">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#Pervyj"></use>
              </svg>
            </li>
          </ul>
          <a class="btn btn--link mmedia__btn" href="<?= get_term_link( 'smi', 'categories' ); ?>">Читать все статьи о нас</a>
        </div>
      </div>
    </div>
  </div>
</div>