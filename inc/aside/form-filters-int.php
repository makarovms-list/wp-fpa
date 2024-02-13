<form class="form-filter">
  <div class="form-filter__block form-filter__block--mobile">
    <div class="form-filter__subtitle">Сумма долга</div>
    <div class="form-filter__row form-filter__row--range">
      <ul class="range-list range-list--summ range-list--current">
        <li class="range-list__item range-list__item--current show" data-value="1" data-min-summ="0" data-max-summ="100000000">Все суммы</li>
        <li class="range-list__item range-list__item--current" data-value="2" data-min-summ="1" data-max-summ="300000">до 300 т.р.</li>
        <li class="range-list__item range-list__item--current" data-value="3" data-min-summ="300000" data-max-summ="500000">300 - 500 т.р.</li>
        <li class="range-list__item range-list__item--current" data-value="4" data-min-summ="500000" data-max-summ="1000000">500 т.р. - 1 млн.р.</li>
        <li class="range-list__item range-list__item--current" data-value="5" data-min-summ="1000000" data-max-summ="3000000">1 - 3 млн.р.</li>
        <li class="range-list__item range-list__item--current" data-value="6" data-min-summ="3000000" data-max-summ="99999999">от 3 млн.р.</li>
      </ul>
      <input class="form-filter__range form-filter__range--summ" type="range" name="summ" min="1" max="6" value="1">
      <ul class="range-list range-list--line">
        <li class="range-list__line"></li>
        <li class="range-list__line"></li>
        <li class="range-list__line"></li>
        <li class="range-list__line"></li>
        <li class="range-list__line"></li>
      </ul>
      <ul class="range-list range-list--lable">
        <li class="range-list__item">Все суммы</li>
        <li class="range-list__item">от 300 т.р.</li>
        <li class="range-list__item range-list__item--mr10">300 - 500 т.р.</li>
        <li class="range-list__item">500 т.р. - 1 млн.р.</li>
        <li class="range-list__item">1 - 3 млн.р.</li>
        <li class="range-list__item">от 3 млн.р.</li>
      </ul>
    </div>
    <button class="no-btn btn-show">
      <span class="btn-show__text">Все фильтры</span>
      <span class="btn-show__arrow open"> </span>
    </button>
  </div>
  <div class="form-filter__wrap">
    <div class="form-filter__block hidden">
      <div class="form-filter__subtitle">Срок рассмотрения дела</div>
      <div class="form-filter__row form-filter__row--range">
        <ul class="range-list range-list--current">
          <li class="range-list__item range-list__item--current show">Все месяцы</li>
          <li class="range-list__item range-list__item--current">6 - 9 месяцев</li>
          <li class="range-list__item range-list__item--current">9 до 12 месяцев</li>
          <li class="range-list__item range-list__item--current">12 до 15 месяцев</li>
        </ul>
        <input class="form-filter__range form-filter__range--period" type="range" name="period" min="1" max="4" value="1">
        <ul class="range-list range-list--line">
          <li class="range-list__line"></li>
          <li class="range-list__line"></li>
          <li class="range-list__line"></li>
        </ul>
        <ul class="range-list range-list--lable">
          <li class="range-list__item">Все месяцы</li>
          <li class="range-list__item">6 - 9 месяцев</li>
          <li class="range-list__item range-list__item--mr30">9 до 12 месяцев</li>
          <li class="range-list__item">12 до 15 месяцев</li>
        </ul>
      </div>
    </div>
    <div class="form-filter__block form-filter__block--type-creditors">
      <div class="form-filter__subtitle">Типы кредиторов</div>
      <div class="form-filter__row form-filter__row--line">
        <div class="radio">
          <input class="radio__default" id="type-creditors_1" type="radio" name="type-creditors" value="all" checked>
          <span class="radio__new"></span>
          <label class="radio__label" for="type-creditors_1">Все типы</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="type-creditors_2" type="radio" name="type-creditors" value="1" data-banks>
          <span class="radio__new"></span>
          <label class="radio__label" for="type-creditors_2">Банки</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="type-creditors_3" type="radio" name="type-creditors" value="2">
          <span class="radio__new"></span>
          <label class="radio__label" for="type-creditors_3">МФО</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="type-creditors_4" type="radio" name="type-creditors" value="3">
          <span class="radio__new"></span>
          <label class="radio__label" for="type-creditors_4">Коллекторы</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="type-creditors_5" type="radio" name="type-creditors" value="4">
          <span class="radio__new"></span>
          <label class="radio__label" for="type-creditors_5">Страховые</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="type-creditors_6" type="radio" name="type-creditors" value="5">
          <span class="radio__new"></span>
          <label class="radio__label" for="type-creditors_6">ФССП</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="type-creditors_7" type="radio" name="type-creditors" value="6">
          <span class="radio__new"></span>
          <label class="radio__label" for="type-creditors_7">ФНС</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="type-creditors_8" type="radio" name="type-creditors" value="7">
          <span class="radio__new"></span>
          <label class="radio__label" for="type-creditors_8">ЖКХ</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="type-creditors_9" type="radio" name="type-creditors" value="8">
          <span class="radio__new"></span>
          <label class="radio__label" for="type-creditors_9">ГИБДД МВД</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="type-creditors_10" type="radio" name="type-creditors" value="9">
          <span class="radio__new"></span>
          <label class="radio__label" for="type-creditors_10">ПФР</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="type-creditors_11" type="radio" name="type-creditors" value="10">
          <span class="radio__new"></span>
          <label class="radio__label" for="type-creditors_11">Юридические лица</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="type-creditors_12" type="radio" name="type-creditors" value="11">
          <span class="radio__new"></span>
          <label class="radio__label" for="type-creditors_12">Физические лица</label>
        </div>
      </div>
    </div>
    <div class="form-filter__block form-filter__block--banks disabled">
      <div class="form-filter__subtitle">Банки</div>
      <div class="form-filter__row form-filter__row--line">
        <div class="radio">
          <input class="radio__default" id="creditors_1" type="radio" name="creditors" value="all" checked>
          <span class="radio__new"></span>
          <label class="radio__label" for="creditors_1">Все банки</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="creditors_2" type="radio" name="creditors" value="1">
          <span class="radio__new"></span>
          <label class="radio__label" for="creditors_2">Тинькофф Банк</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="creditors_3" type="radio" name="creditors" value="2">
          <span class="radio__new"></span>
          <label class="radio__label" for="creditors_3">СберБанк</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="creditors_4" type="radio" name="creditors" value="3">
          <span class="radio__new"></span>
          <label class="radio__label" for="creditors_4">Банк ВТБ</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="creditors_5" type="radio" name="creditors" value="4">
          <span class="radio__new"></span>
          <label class="radio__label" for="creditors_5">Альфа-Банк</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="creditors_6" type="radio" name="creditors" value="5">
          <span class="radio__new"></span>
          <label class="radio__label" for="creditors_6">Почта Банк</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="creditors_7" type="radio" name="creditors" value="6">
          <span class="radio__new"></span>
          <label class="radio__label" for="creditors_7">Совкомбанк</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="creditors_10" type="radio" name="creditors" value="7">
          <span class="radio__new"></span>
          <label class="radio__label" for="creditors_10">Восточный</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="creditors_8" type="radio" name="creditors" value="8">
          <span class="radio__new"></span>
          <label class="radio__label" for="creditors_8">Русский Стандарт</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="creditors_9" type="radio" name="creditors" value="9">
          <span class="radio__new"></span>
          <label class="radio__label" for="creditors_9">Русинтерфинанс</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="creditors_11" type="radio" name="creditors" value="10">
          <span class="radio__new"></span>
          <label class="radio__label" for="creditors_11">Ренессанс Кредит</label>
        </div>
      </div>
    </div>
    <div class="form-filter__block form-filter__block--double form-filter__block--desktop hidden">
      <div class="form-filter__subtitle">Сортировка</div>
      <div class="btn-select">
        <button class="no-btn btn-select__btn">
          <span class="btn-select__text">По дате</span>
          <span class="btn-select__arrow"> </span>
        </button>
        <ul class="btn-select__list">
          <li class="btn-select__item radio radio--btn">
            <input class="radio__default" id="sort_0" type="radio" name="sort" value="date" checked>
            <label class="radio__label" for="sort_0">По дате</label>
          </li>
          <li class="btn-select__item radio radio--btn">
            <input class="radio__default" id="sort_1" type="radio" name="sort" value="summRaising">
            <label class="radio__label" for="sort_1">По возрастанию долга</label>
          </li>
          <li class="btn-select__item radio radio--btn">
            <input class="radio__default" id="sort_2" type="radio" name="sort" value="summReducing">
            <label class="radio__label" for="sort_2">По убыванию долга</label>
          </li>
        </ul>
      </div>
    </div>
    <div class="form-filter__block form-filter__block--reviews">
      <div class="form-filter__subtitle">Дела с отзывами</div>
      <div class="form-filter__row form-filter__row--reviews">
        <div class="radio">
          <input class="radio__default" id="reviews_1" type="radio" name="reviews" value="all" checked>
          <span class="radio__new"></span>
          <label class="radio__label" for="reviews_1">Все дела</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="reviews_2" type="radio" name="reviews" value="video">
          <span class="radio__new"></span>
          <label class="radio__label" for="reviews_2">Видеоотзывы</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="reviews_3" type="radio" name="reviews" value="foto">
          <span class="radio__new"></span>
          <label class="radio__label" for="reviews_3">Фотоотзывы</label>
        </div>
      </div>
    </div>
    <div class="form-filter__block form-filter__block--interesting disabled">
      <div class="form-filter__subtitle">Интересные дела</div>
      <div class="form-filter__row form-filter__row--reviews">
        <div class="radio">
          <input class="radio__default" id="int-category_1" type="radio" name="int-category" value="all" />
          <span class="radio__new"></span>
          <label class="radio__label" for="int-category_1">Все дела</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="int-category_2" type="radio" name="int-category" value="1" />
          <span class="radio__new"></span>
          <label class="radio__label" for="int-category_2">Декретное пособие</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="int-category_3" type="radio" name="int-category" value="2" />
          <span class="radio__new"></span>
          <label class="radio__label" for="int-category_3">Имущество в браке</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="int-category_4" type="radio" name="int-category" value="3" />
          <span class="radio__new"></span>
          <label class="radio__label" for="int-category_4">Ипотечное жильё</label>
        </div>
        <div class="radio">
          <input class="radio__default" id="int-category_5" type="radio" name="int-category" value="4" />
          <span class="radio__new"></span>
          <label class="radio__label" for="int-category_5">Полный ПМ на ребенка</label>
        </div>
      </div>
    </div>
    <div class="form-filter__block form-filter__block--reset">
      <button class="btn form-filter__reset hide" data-reset>
        <svg>
          <use xlink:href="<?= get_template_directory_uri() ?>/assets/img//sprite.svg#close"></use>
        </svg>Очистить всё
      </button>
    </div>
  </div>
  <button id="archive-dela_form-filter__btn-sort" class="btn form-filter__btn-sort hidden">
    <span>Фильтровать</span>
  </button>
</form>