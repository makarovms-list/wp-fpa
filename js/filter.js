$(function () {
  
  // Фильтр для отзывов
  $( '#filters' ).on('change', 'input', function(){
    
      var filterMeta = $(this).val();
      var dataReset = $(this).attr('data-reset');
      var btnReset = $('.filters__item--reset');
      
 
      if (typeof dataReset !== typeof undefined && dataReset !== false) {
        var reset = true; 
        btnReset.removeClass('active');
      } else {
        btnReset.addClass('active');
      }
    
      var data = {
        'action': 'filterVideo',
        'filterMeta': filterMeta,
        'reset': reset,
      };
    
      $.ajax({
          url : ajaxurl, // обработчик
          data : data, // данные
          type : 'POST', // тип запроса
          beforeSend : function( xhr ){

          },
          success : function( data ){
            $('.reviews__main--video').html(data);
            
            loadYoutubeVideo() // Отложенная загрузка видео
            transferSecondWord(); // Перенос после имени клиента
            transitionLinkExternal(); // Клик по внешней ссылке
            
            $('.reviews__btn--video').remove(); // Удалить кнопку загрузки видео отзывов
          }
      });
  });
  
  

  
});