$(function () {
  
  // Кнопка "Показать ещё" для Дел
//  $('.btn--cases').on('click', function(){
//
//    let loadCases = $(this);
//    
//    loadCases.addClass('load'); // Добавляем класс для кнопки - анимация загрузки
//
//    var data = {
//      'action': 'loadmore_dela',
//      'query': true_posts_dela,
//      'page' : current_page_dela,
//    };
//
//    $.ajax({
//      url: ajaxurl, // обработчик
//      data: data, // данные
//      type: 'POST', // тип запроса
//      success: function(data){
//        if( data ) { 
//          loadCases.removeClass('load').before(data); // Удаляем анимацию загрузки и вставляем новые посты
//          current_page_dela++; // увеличиваем номер страницы на единицу
//          
//          transitionLinkExternal();
//          
//          if (current_page_dela == max_pages_dela) { // Если последняя страница, показываем лоадер и скрываем текст 
//            loadCases.children('.btn__text').addClass('hidden'); 
//            loadCases.children('.btn__loader').removeClass('hidden'); 
//          } 
//          
//        } else {
//          loadCases.children('.btn__text').addClass('hidden'); 
//          loadCases.children('.btn__loader').removeClass('hidden'); 
//        }
//      }
//    });
//  });
  
  
  // Кнопка "Показать ещё" для новостей СМИ 
  $('#loadmore').on('click', function(){

    $(this).addClass('load'); // Добавляем класс для кнопки - анимация загрузки

    var data = {
      'action': 'loadmore_smi',
      'query': true_posts_smi,
      'page' : current_page_smi
    };

    $.ajax({
      url: ajaxurl, // обработчик
      data: data, // данные
      type: 'POST', // тип запроса
      success: function(data){
        
        if( data ) { 

          $('#loadmore').removeClass('load').before(data); // Удаляем анимацию загрузки и вставляем новые посты
          current_page_smi++; // увеличиваем номер страницы на единицу
          
          
          if (current_page_smi == max_pages_smi) $("#loadmore").remove(); // если последняя страница, удаляем кнопку
          
          addBlockMonth(); // Создание плашек с названием месяца
          
        } else {
          $('#loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
        }
      }
      
    });
  });
  
  
  // Кнопка ajax-подгрузки для новостей Компании   
  $('.news__com').on('click', function(){
    
    $('.news__btn--double').addClass('load');
    
    let loadmore = $(this);
    let data = {
      'action': 'loadmore_com',
      'query': true_posts_news_com,
      'page' : current_page_news_com
    };

    $.ajax({
      url: ajaxurl, // обработчик
      data: data, // данные
      type: 'POST', // тип запроса
      success: function(data){
        if( data ) {
          
          $('.news__btn--double').removeClass('load'); // Удаляем анимацию загрузки
          loadmore.before(data); // Вставляем новые посты
          current_page_news_com++; // Увеличиваем номер страницы на единицу
          
        } else {
          loadmore.remove(); // Если мы дошли до последней страницы постов, скроем кнопку
        }
      }
    });
    
  });
  
  // Кнопка ajax-подгрузки для новостей о Банкротстве   
  $('.news__bank').on('click', function(){
    
    $('.news__btn--double').addClass('load');
    
    let loadmore = $(this)
    let data = {
      'action': 'loadmore_bank',
      'query': true_posts_news_bank,
      'page' : current_page_news_bank
    };

    $.ajax({
      url: ajaxurl, // обработчик
      data: data, // данные
      type: 'POST', // тип запроса
      success: function(data){
        if( data ) {
          
          $('.news__btn--double').removeClass('load'); // Удаляем анимацию загрузки
          loadmore.before(data); // Вставляем новые посты
          current_page_news_bank++; // Увеличиваем номер страницы на единицу
          
        } else {
          loadmore.remove(); // Если мы дошли до последней страницы постов, скроем кнопку
        }
      }
    });
    
  });
  
  // Главная кнопка ajax-подгрузки для новостей 
  $('.news__btn--double').on('click', function(){
    
    if (current_page_news_bank == max_pages_news_bank_mob && current_page_news_com == max_pages_news_com) {
      $(this).remove();
    } // Если последняя страница у всех новостей, удаляем кнопку
    
    $('.news__com').click();
    $('.news__bank').click();
  });
  
  
  // Кнопка ajax-подгрузки для новостей Компании (мобильная версия)   
  $('.news__com--mobile').on('click', function(){
    
    $(this).addClass('load'); // Добавляем класс для кнопки - анимация загрузки
    
    let loadmore = $(this)
    let data = {
      'action': 'loadmore_com_mob',
      'query': true_posts_news_com_mob,
      'page' : current_page_news_com_mob
    };

    $.ajax({
      url: ajaxurl, // обработчик
      data: data, // данные
      type: 'POST', // тип запроса
      success: function(data){
        if( data ) {
          loadmore.removeClass('load').before(data); // Удаляем анимацию загрузки и вставляем новые посты
          current_page_news_com_mob++; // увеличиваем номер страницы на единицу
          if (current_page_news_com_mob == max_pages_news_com_mob) $('.news__com--mobile').remove(); // если последняя страница, удаляем кнопку
          
        } else {
          loadmore.remove(); // если мы дошли до последней страницы постов, скроем кнопку
        }
      }
    });
    
  });
  
  // Кнопка ajax-подгрузки для новостей о Банкротстве (мобильная версия)   
  $('.news__bank--mobile').on('click', function(){
    
    $(this).addClass('load'); // Добавляем класс для кнопки - анимация загрузки
    
    let loadmore = $(this)
    let data = {
      'action': 'loadmore_bank_mob',
      'query': true_posts_news_bank_mob,
      'page' : current_page_news_bank_mob
    };

    $.ajax({
      url: ajaxurl, // обработчик
      data: data, // данные
      type: 'POST', // тип запроса
      success: function(data){
        if( data ) {
          loadmore.removeClass('load').before(data); // Удаляем анимацию загрузки и вставляем новые посты
          current_page_news_bank_mob++; // увеличиваем номер страницы на единицу
          if (current_page_news_bank_mob == max_pages_news_bank_mob) $('.news__bank--mobile').remove(); // если последняя страница, удаляем кнопку
          
        } else {
          loadmore.remove(); // если мы дошли до последней страницы постов, скроем кнопку
        }
      }
    });
    
  });
  
  
  // Кнопка ajax-подгрузки фото-отзывов  
  $('.reviews__btn--foto').on('click', function(){
    
    $(this).addClass('load'); // Добавляем класс для кнопки - анимация загрузки
    
    let loadmore = $(this);
    
    let data = {
      'action': 'loadmore_foto',
      'query': true_posts_foto,
      'page' : current_page_foto
    };

    $.ajax({
      url: ajaxurl, // обработчик
      data: data, // данные
      type: 'POST', // тип запроса
      success: function(data){
        if( data ) {
          loadmore.removeClass('load').before(data); // Удаляем анимацию загрузки и вставляем новые посты
          current_page_foto++; // увеличиваем номер страницы на единицу
          if (current_page_foto == max_pages_foto) { // если последняя страница
            loadmore.attr('data-show', 'false'); // изменяем атрибут show
          }
            
          transferSecondWord(); // Перенос после имени клиента
          transitionLinkExternal(); // Клик по внешней ссылке
          
        } else {
          loadmore.attr('data-show', 'false'); // изменяем атрибут show
        }
      }
    });
    
  });
  
  
  // Кнопка ajax-подгрузки видео-отзывов 
  $('.reviews__btn--video, .btn-reviews-thanks').on('click', function(event){
    event.preventDefault();
    
    $(this).addClass('load'); // Добавляем класс для кнопки - анимация загрузки
    $('.reviews__btn--double').addClass('load'); // Добавляем класс для кнопки - анимация загрузки
    
    let loadmore = $(this);
    
    let data = {
      'action': 'loadmore_video',
      'query': true_posts_video,
      'page' : current_page_video
    };

    $.ajax({
      url: ajaxurl, // обработчик
      data: data, // данные
      type: 'POST', // тип запроса
      success: function(data){
        if( data ) {
          $('.reviews__btn--video, .btn-reviews-thanks').removeClass('load').before(data); // Удаляем анимацию загрузки и вставляем новые посты
          $('.reviews__btn--double').removeClass('load'); // Удаляем анимацию у главной кнопки
          current_page_video++; // увеличиваем номер страницы на единицу
          if (current_page_video == max_pages_video) {
            $('.btn-reviews-thanks').remove(); // если последняя страница, удаляем кнопку
            $('.reviews__btn--double').remove(); //  если последняя страница, удаляем главную кнопку
            loadmore.attr('data-show', 'false'); // изменяем атрибут show
          }
            
          transferSecondWord(); // Перенос после имени клиента
          transitionLinkExternal(); // Клик по внешней ссылке
          loadYoutubeVideo(); // Отложенная загрузка видео
          
        } else {
          loadmore.attr('data-show', 'false'); // изменяем атрибут show
        }
      }
    });
    
  });
  
  
  // Главная кнопка ajax-подгрузки для фото и видео отзывов 
  $('.reviews__btn--double').on('click', function(event){
    event.preventDefault();
    
    let btnFoto = $('.reviews__btn--foto');
    
//    $('.navigation').remove();
    
    if(!$('.reviews__btn--video').length > 0) {
      
      if ( current_page_foto == max_pages_foto ) {
        $(this).remove();
      }
    }
    
    $('.reviews__btn--foto').click();
    $('.reviews__btn--video').click();
    
  });
  
  
  
});