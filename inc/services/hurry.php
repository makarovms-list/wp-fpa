<?php 
  $arr = [
    '01' => 'января',
    '02' => 'февраля',
    '03' => 'марта',
    '04' => 'апреля',
    '05' => 'мая',
    '06' => 'июня',
    '07' => 'июля',
    '08' => 'августа',
    '09' => 'сентября',
    '10' => 'октября',
    '11' => 'ноября',
    '12' => 'декабря'
  ];

  $date = get_field('timer', false, false);
  $date = new DateTime($date);
  
  $month = $date->format('m');
  $ruMonth = $arr[$month];

?>

<section id="services_hurry" class="section--services-grey hurry">
  <div class="container">
    <div class="section__image section__image--hurry lazy"></div>
    <h2 class="title-page">Нужно ли спешить с банкротством?</h2>
    <p class="subtitle-page">Возможные последствия:</p>
    <ul class="hurry__lst">
      <li class="hurry__item">
        <span class="hurry__image hurry__image--1 lazy"></span>
        <span class="hurry__name">Административный штраф</span>
        <span class="hurry__desc">Органы прокуратуры накладывают штраф в размере до 3000 рублей ежемесячно (ч.5 ст. 14.13 КоАП РФ)</span>
      </li>
      <li class="hurry__item">
        <span class="hurry__image hurry__image--2 lazy"></span>
        <span class="hurry__name">Может быть поздно</span>
        <span class="hurry__desc">Лишение права на списание долгов в будущем (п. 4 ст. 213.28 Закона о банкротстве)</span>
      </li>
      <li class="hurry__item">
        <span class="hurry__image hurry__image--3 lazy"></span>
        <span class="hurry__name">Штрафы и пени</span>
        <span class="hurry__desc">Чем дольше за вами сохраняется невыплаченный долг — тем быстрее рост штрафов, процентов и неустойки</span>
      </li>
    </ul>
    <div class="hurry__wrap">
      <div class="hurry__inner">
        <div class="hurry__tab">
          <div class="hurry__content">
            <div class="hurry__title">Ранее мы рекомендовали не спешить с банкротством
              <br> до формирования судебной практики</div>
            <p class="hurry__text">Теперь время играет против вас</p>
          </div>
        </div>
        <div class="hurry__tab">
          <div class="hurry__content">
            <div class="hurry__title">Ждать больше нечего</div>
            <p class="hurry__text">Формирование судебной практики уже привело к определению основных «правил игры». Пока что 10 из 10 оконченных процедур банкротства завершены успешно</p>
          </div>
        </div>
        <div class="hurry__tab">
          <div class="hurry__content">
            <div class="hurry__title">Кредиторы становятся агрессивнее</div>
            <p class="hurry__text">С возрастанием правовой определённости банки чувствуют себя увереннее и занимают всё более активную позицию в каждой процедуре банкротства. Это может существенно затруднить списание долгов в будущем</p>
          </div>
        </div>
        <div class="hurry__tab">
          <div class="hurry__content">
            <div class="hurry__title">Сроки процедур банкротства увеличиваются</div>
            <p class="hurry__text">Количество поданных заявлений по банкротству физических лиц значительно возросло после первых успешных результатов. Сейчас мы наблюдаем новую волну банкротств и постепенную парализацию работы Арбитражного Суда Санкт-Петербурга</p>
          </div>
        </div>
        <div class="hurry__tab">
          <div class="hurry__content">
            <div class="hurry__title">Появляются прецеденты с отказом в списании долгов</div>
            <p class="hurry__text">Судебная практика пошла по пути несписания долгов при некоторых «особых» обстоятельствах. Становится сложнее убедить суд в том, что финансовая неграмотность оправдывает освобождение от долгов. Сегодня ещё можно успеть воспользоваться ситуацией</p>
          </div>
        </div>
        <div class="hurry__tab">
          <div class="hurry__content">
            <div class="hurry__title">Некоторые граждане обязаны начать банкротство</div>
            <p class="hurry__text">Помимо права на подачу заявления о признании себя банкротом, Закон предусматривает и обязанность заёмщика обратиться в суд с таким заявлением, если размер долга составляет более 500 тыс. ₽ За неисполнение этой обязанности должника могут лишить права на списание долгов в будущем</p>
          </div>
        </div>
        <div class="hurry__tab">
          <div class="hurry__content">
            <div class="hurry__title">Стоимость процедур банкротства будет расти</div>
            <p class="hurry__text">Всё это неизбежно отразится на стоимости квалифицированной правовой помощи</p>
          </div>
        </div>
        <div class="hurry__tab">
          <div class="hurry__content">
            <div class="hurry__title">Точно такие же тенденции мы наблюдали после возникновения в России процедуры банкротства физических лиц — индивидуальных предпринимателей</div>
            <p class="hurry__text">В итоге банкротство стало сложнее и дороже, а в некоторых случаях — невозможным</p>
          </div>
        </div>
        <div class="hurry__tab">
          <div class="hurry__content">
            <div class="hurry__title">Начните работу над долгом прямо сейчас!</div>
            
          <?php echo do_shortcode( '[contact-form-7 id="1177" title="Секция с последствиями на странице Услуги - Нужно ли спешить с банкротством?" html_class="hurry__form"]' ); ?>
          
          </div>
        </div>
      </div>
      <div class="hurry__slides">
        <span class="hurry__slide--current"> </span> из <span class="hurry__slide--summ"></span>
      </div>
      <div class="hurry__nav">
        <button class="btn hurry__btn hurry__btn--prev disabled" id="hurry-btn-prev">
          <span>Назад</span>
        </button>
        <button class="btn hurry__btn hurry__btn--next" id="hurry-btn-next">
          <span>Дальше</span>
        </button>
      </div>
    </div>
  </div>
</section>