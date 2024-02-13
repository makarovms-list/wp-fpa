<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri() ?>/assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() ?>/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri() ?>/assets/favicon/favicon-16x16.png">
  <link rel="mask-icon" href="<?= get_template_directory_uri() ?>/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="format-detection" content="telephone=no" />
  <meta name="apple-mobile-web-app-title" content="">
  <meta name="application-name" content="">
  <meta name="msapplication-TileColor" content="#2d89ef">
  <meta name="theme-color" content="#ffffff">
  <script defer async src="https://vk.com/js/api/openapi.js?169" type="text/javascript"></script>
  <script defer async src="https://www.googleoptimize.com/optimize.js?id=OPT-TFB5DLC"></script>
  <script src="/wp-content/themes/fpalaw/js/device.js"></script>

  <!-- записываем ip -->
  <?php
        /*
          98724 - youfree3bankruptcy4
          22790 - youfree3bankruptcy3
        */
        $experiment_text = '';
        $post_id = get_the_ID();
        if ($post_id == '3277') {
            $experiment_text = 'youfree3bankruptcy2';
        }
        if ($post_id == '22790') {
            $experiment_text = 'youfree3bankruptcy3';
        }
        if ($post_id == '98724') {
            $experiment_text = 'youfree3bankruptcy4';
        }
        if ($post_id == '100195') {
            $experiment_text = 'youfree3bankruptcy5';
        }
        if ($post_id == '2656') {
            $experiment_text = 'bankruptcy1cost';
        }
  ?>
  <script type="text/javascript">
  var yaParams = {ipaddress: "<? echo $_SERVER['REMOTE_ADDR']; ?>", experiment: "<?=$experiment_text; ?>", imustesstvo: sessionStorage.getItem('metrika_valuable'), kategoriya: sessionStorage.getItem('metrika_category'), kreditors: sessionStorage.getItem('metrika_creditors'), region: sessionStorage.getItem('metrika_place'), sokraschenie: sessionStorage.getItem('metrika_reduced-incom'), summ: sessionStorage.getItem('metrika_summ')};
  </script>
  
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-TM5C7GH');</script>
  <!-- End Google Tag Manager -->

  <meta name="yandex-verification" content="87d71f221d421ed7" />
  <meta name="google-site-verification" content="7TK4J3kSKdeMOKQNgPKfAPt4IVM5k2raA6ksLY_yPQo" />  
  <meta name="http_referer" content="<? echo $_SERVER['HTTP_REFERER']; ?>" />
  <meta name="query_string" content="<? echo $_SERVER['QUERY_STRING']; ?>" />

    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script>
        function parseJwt (token) {
            var base64Url = token.split('.')[1];
            var base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
            var jsonPayload = decodeURIComponent(window.atob(base64).split('').map(function(c) {
                return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
            }).join(''));
            return JSON.parse(jsonPayload);
        }
        function handleCredentialResponse(response) {
            console.log("Encoded JWT ID token: " + response.credential);
            const responsePayload = parseJwt(response.credential);
            var customer_email =responsePayload.email;
            var customer_email_arr = customer_email.split('@');
            jQuery.ajax({
                type: "POST",
                url: "https://fpa.ru/wp-admin/admin-ajax.php",
                data: {
                    action : 'add_new_user_google',
                    username: customer_email_arr[0],
                    account_id : responsePayload.sub,
                    account_fullname: responsePayload.name,
                    account_firstname: responsePayload.given_name,
                    account_lastname: responsePayload.family_name,
                    account_image_url: responsePayload.picture,
                    account_email: responsePayload.email,
                },
                success:function(data) {
                    location.reload();
                },
                error: function(errorThrown){
                    console.log(errorThrown);
                }
            });
        }
    </script>
    
    <!-- VK open API -->
    <!--
    <script type="text/javascript">
        window.vkAsyncInit = function() {
            VK.init({apiId: ВАШ_APP_ID});
        };
        setTimeout(function() {
            var el = document.createElement("script");
            el.type = "text/javascript";
            el.src = "https://vk.com/js/api/openapi.js?169";
            el.async = true;
            document.getElementById("vk_api_transport").appendChild(el);
        }, 0);
    </script>
    -->
    <!-- VK open API -->
    <!--
    <script src="//vk.com/js/api/openapi.js" type="text/javascript"></script>
    <script type="text/javascript">
        VK.init({
            apiId: 7852910
        });
    </script>
    -->
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <?php wp_head(); ?>
  <script src="/wp-content/themes/fpalaw/js/jquery.cookie.js"></script>
  <script>
    let ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
  </script>
  <script type="application/ld+json">
	{
	  "@context":"https://schema.org",
	  "@type":"ItemList",
	  "itemListElement":[
		{
		  "@type":"SiteNavigationElement",
		  "position":1,
		  "name": "Услуги по банкротству",
		  "url":"https://fpa.ru/"
		},
		{
		  "@type":"SiteNavigationElement",
		  "position":2,
		  "name": "О нас",
		  "url":"https://fpa.ru/o-nas/"
		},
		{
		  "@type":"SiteNavigationElement",
		  "position":3,
		  "name": "Завершенные дела",
		  "url":"https://fpa.ru/dela/"
		},
		{
		  "@type":"SiteNavigationElement",
		  "position":4,
		  "name": "Отзывы",
		  "url":"https://fpa.ru/otzyvy/"
		},
		{
		  "@type":"SiteNavigationElement",
		  "position":5,
		  "name": "Мы в СМИ",
		  "url":"https://fpa.ru/news/smi/"
		},
		{
		  "@type":"SiteNavigationElement",
		  "position":6,
		  "name": "Наши новости",
		  "url":"https://fpa.ru/news/"
		},
		{
		  "@type":"SiteNavigationElement",
		  "position":7,
		  "name": "Карьера",
		  "url":"https://fpa.ru/karera/"
		},
		{
		  "@type":"SiteNavigationElement",
		  "position":8,
		  "name": "Контакты",
		  "url":"https://fpa.ru/kontakty/"
		},
		{
		  "@type":"SiteNavigationElement",
		  "position":9,
		  "name": "Личный кабинет",
		  "url":"https://fpa.ru/lichnyj-kabinet/"
		}
	  ]
	}
  </script>
  <?php $date_arr = [ 1 => 'января' , 'февраля' , 'марта' , 'апреля' , 'мая' , 'июня' , 'июля' , 'августа' , 'сентября' , 'октября' , 'ноября' , 'декабря' ]; ?>
  <script>
  
/*
//User Behaviour Tracking
var UBT_Logic = function() {
    this.ActiveTimeout = 60; //1min
    this.IdleTimeout = 60; //1min
    this.IntervalId = 0;
    this.TimeFlag = "UBT_TimeFlag";
    this.TimeMsgFlag = "UBT_TimeMsgFlag";
    this.LastActiveTimeFlag = "UBT_LastActiveTimeFlag";
    this.LastUserActivityTimeFlag = "UBT_LastUserActivityTimeFlag";
};

UBT_Logic.prototype.StartFunc = function () {
    //here can be some additional logic
    ubtLogic.InitTimeFlag();
};

UBT_Logic.prototype.InitTimeFlag = function(){
    var now = Math.floor((new Date().getTime()) / 1000);
    if ((typeof localStorage[ubtLogic.LastActiveTimeFlag]) == "undefined") {
        localStorage[ubtLogic.LastActiveTimeFlag] = now;
        localStorage[ubtLogic.TimeFlag] = 0;
        localStorage[ubtLogic.TimeMsgFlag] = 0;
    } else {
        var t = parseInt(localStorage[ubtLogic.LastActiveTimeFlag]);
        if (t <= 0 || t + 1800 < now || t > now) {
            localStorage[ubtLogic.LastActiveTimeFlag] = now;
            localStorage[ubtLogic.TimeFlag] = 0;
            localStorage[ubtLogic.TimeMsgFlag] = 0;
        }
    }
    if ((typeof localStorage[ubtLogic.TimeFlag]) == "undefined") {
        localStorage[ubtLogic.TimeFlag] = 0;
        localStorage[ubtLogic.TimeMsgFlag] = 0;
    } else {
        var t = parseInt(localStorage[ubtLogic.TimeFlag]);
        if (t < 0 || t > now) {
            localStorage[ubtLogic.TimeFlag] = 0;
            localStorage[ubtLogic.TimeMsgFlag] = 0;
        }
    }
    if ((typeof localStorage[ubtLogic.TimeMsgFlag]) == "undefined")
        localStorage[ubtLogic.TimeMsgFlag] = 0;
    else {
        var t = parseInt(localStorage[ubtLogic.TimeMsgFlag]);
        if (t != 0 && t != 1) localStorage[ubtLogic.TimeMsgFlag] = 0;
    }
    localStorage[ubtLogic.LastUserActivityTimeFlag] = now;
    document.onmousemove = function (event) {
        localStorage[ubtLogic.LastUserActivityTimeFlag] = Math.floor((new Date().getTime()) / 1000);
    };
    document.onkeydown = function (event) {
        localStorage[ubtLogic.LastUserActivityTimeFlag] = Math.floor((new Date().getTime()) / 1000);
    };
    IntervalId = setInterval(ubtLogic.TimeFunc, 300);
};

UBT_Logic.prototype.TimeFunc = function () {
    var now = Math.floor((new Date().getTime()) / 1000);
    //console.log(now);
    var lastActiveTimeFlag = parseInt(localStorage[ubtLogic.LastActiveTimeFlag]);
    if (lastActiveTimeFlag < now) {
        localStorage[ubtLogic.LastActiveTimeFlag] = now;
        var timeFlag = parseInt(localStorage[ubtLogic.TimeFlag]);
        timeFlag++;
        localStorage[ubtLogic.TimeFlag] = timeFlag;
        var timeMsgFlag = parseInt(localStorage[ubtLogic.TimeMsgFlag]);
        var lastUserActivityTimeFlag = parseInt(localStorage[ubtLogic.LastUserActivityTimeFlag]);
        if (timeMsgFlag == 0) {
            if (timeFlag >= ubtLogic.ActiveTimeout) {
                localStorage[ubtLogic.TimeMsgFlag] = 1;
                ubtLogic.ActiveTimeoutFunc();
            }
            else if (lastUserActivityTimeFlag + ubtLogic.IdleTimeout <= now) {
                localStorage[ubtLogic.TimeMsgFlag] = 1;
                ubtLogic.IdleTimeoutFunc();
            }
        }
        if (localStorage[ubtLogic.TimeMsgFlag] != 0) {
            clearInterval(IntervalId);
        }
    }
};

UBT_Logic.prototype.ActiveTimeoutFunc = function () {
    //todo: do something
    //...
    console.log("ActiveTimeout");
};

UBT_Logic.prototype.IdleTimeoutFunc = function () {
    //todo: do something
    //...
    console.log("IdleTimeout");
};

var ubtLogic = new UBT_Logic();
ubtLogic.StartFunc();
  
  */
  
function number_format (number, decimals, dec_point, thousands_sep) {
    // Strip all characters but numerical ones.
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}
  
  
  
	// Проверяем, можно ли использовать Webp формат
	function canUseWebp() {
		// Создаем элемент canvas
		let elem = document.createElement('canvas');
		// Приводим элемент к булеву типу
		if (!!(elem.getContext && elem.getContext('2d'))) {
			// Создаем изображение в формате webp, возвращаем индекс искомого элемента и сразу же проверяем его
			return elem.toDataURL('image/webp').indexOf('data:image/webp') == 0;
		}
		// Иначе Webp не используем
		return false;
	}

	window.onload = function () {
	    /* View career popups */
	    jQuery('.career-jobs .add-job-cnt button.add-job').click(function() {
	        jQuery('.section--modal .modal__overlay').removeClass('hidden');
	        jQuery('.section--modal .modal__wrap.add-job-popup').removeClass('hidden');
	    });
	    jQuery('.career-job-item .head .buttons button.edit').click(function() {
	        /* variables */
	        var data_job_id = jQuery(this).closest('.career-job-item').attr('data-job-id');
	        var job_title = jQuery(this).closest('.head').find('.title').html();
	        var salary_from = jQuery(this).closest('.career-job-item').find('.content').find('span.salary_from').attr('data-salary-from');
	        var salary_up_to = jQuery(this).closest('.career-job-item').find('.content').find('span.salary_up_to').attr('data-salary-up-to');
	        var job_text = jQuery.trim(jQuery(this).closest('.career-job-item').find('.content').find('.text').text());
	        var job_link = jQuery(this).closest('.career-job-item').find('.content').find('.link').find('a').attr('href');
	        /* Update field values */
	        jQuery('.section--modal .modal__wrap.edit-job-popup input[id=edit_job_id]').val(data_job_id);
	        jQuery('.section--modal .modal__wrap.edit-job-popup input[name=edit_job_title]').val(job_title);
	        jQuery('.section--modal .modal__wrap.edit-job-popup input[name=edit_salary_from]').val(salary_from);
	        jQuery('.section--modal .modal__wrap.edit-job-popup input[name=edit_salary_up_to]').val(salary_up_to);
	        jQuery('.section--modal .modal__wrap.edit-job-popup textarea').html(job_text);
	        jQuery('.section--modal .modal__wrap.edit-job-popup input[name=edit_job_link]').val(job_link);
	        /* View popup */
	        jQuery('.section--modal .modal__overlay').removeClass('hidden');
	        jQuery('.section--modal .modal__wrap.edit-job-popup').removeClass('hidden');
	    });
	    jQuery('.career-job-item .head .buttons button.remove').click(function() {
	        /* variables */
	        var data_job_id = jQuery(this).closest('.career-job-item').attr('data-job-id');
	        /* Update field values */
	        jQuery('.section--modal .modal__wrap.remove-job-popup input[id=remove_job_id]').val(data_job_id);
	        /* View popup */
	        jQuery('.section--modal .modal__overlay').removeClass('hidden');
	        jQuery('.section--modal .modal__wrap.remove-job-popup').removeClass('hidden');
	    });
	    /* Career cancel actions */
	    jQuery('.modal__wrap.add-job-popup .form-row-cnt .buttons-cnt button#add_cancel-job').click(function() {
	        jQuery('.section--modal .modal__wrap.add-job-popup').addClass('hidden');
	        jQuery('.section--modal .modal__overlay').addClass('hidden');
	    });
	    jQuery('.modal__wrap.edit-job-popup .form-row-cnt .buttons-cnt button#edit_cancel-job').click(function() {
	        jQuery('.section--modal .modal__wrap.edit-job-popup').addClass('hidden');
	        jQuery('.section--modal .modal__overlay').addClass('hidden');
	    });
	    jQuery('.modal__wrap.remove-job-popup .form-row-cnt .buttons-cnt button#remove_cancel-job').click(function() {
	        jQuery('.section--modal .modal__wrap.remove-job-popup').addClass('hidden');
	        jQuery('.section--modal .modal__overlay').addClass('hidden');
	    });
	    /* Career add new job action */
	    jQuery('.modal__wrap.add-job-popup .form-row-cnt .buttons-cnt button#add_save-job').click(function() {
	        var user_id = jQuery('.modal__wrap.add-job-popup input[name=add_user_id]').val();
	        var job_title = jQuery('.modal__wrap.add-job-popup input[name=add_job_title]').val();
	        var job_salary_from = jQuery('.modal__wrap.add-job-popup input[name=add_salary_from]').val();
	        var job_salary_up_to = jQuery('.modal__wrap.add-job-popup input[name=add_salary_up_to]').val();
	        var job_text = jQuery('.modal__wrap.add-job-popup textarea').val();
	        var job_link = jQuery('.modal__wrap.add-job-popup input[name=add_job_link]').val();
	        var success_value = true;
	        if (job_title == '') {
	            jQuery('.modal__wrap.add-job-popup input[name=add_job_title]').closest('.form-row').addClass('error');
	            success_value = false;
	        } else {
	            jQuery('.modal__wrap.add-job-popup input[name=add_job_title]').closest('.form-row').removeClass('error');
	        }
	        if (job_text == '') {
	            jQuery('.modal__wrap.add-job-popup textarea').closest('.form-row').addClass('error');
	            success_value = false;
	        } else {
	            jQuery('.modal__wrap.add-job-popup textarea').closest('.form-row').removeClass('error');
	        }
	        if (job_link == '') {
	            jQuery('.modal__wrap.add-job-popup input[name=add_job_link]').closest('.form-row').addClass('error');
	            success_value = false;
	        } else {
	            jQuery('.modal__wrap.add-job-popup input[name=add_job_link]').closest('.form-row').removeClass('error');
	        }
	        if (success_value) {
	            jQuery.ajax({
        			url: '<?php echo admin_url( "admin-ajax.php" ) ?>',
        			type: 'POST',
        			data: 'action=add_job&user_id='+user_id+'&job_title='+job_title+'&job_salary_from='+job_salary_from+'&job_salary_up_to='+job_salary_up_to+'&job_text='+job_text+'&job_link='+job_link,
        			beforeSend: function( xhr ) {
        				
        			},
        			success: function( data ) {
        				//var answer = jQuery.parseJSON(data);
        				//console.log(data);
        				location.reload();
        			}
        		});
	        }
	    });
	    /* Career edit job action */
	    jQuery('.modal__wrap.edit-job-popup .form-row-cnt .buttons-cnt button#edit_save-job').click(function() {
	        var user_id = jQuery('.modal__wrap.edit-job-popup input[name=edit_user_id]').val();
	        var edit_job_id = jQuery('.modal__wrap.edit-job-popup input[name=edit_job_id]').val();
	        var job_title = jQuery('.modal__wrap.edit-job-popup input[name=edit_job_title]').val();
	        var job_salary_from = jQuery('.modal__wrap.edit-job-popup input[name=edit_salary_from]').val();
	        var job_salary_up_to = jQuery('.modal__wrap.edit-job-popup input[name=edit_salary_up_to]').val();
	        var job_text = jQuery('.modal__wrap.edit-job-popup textarea').val();
	        var job_link = jQuery('.modal__wrap.edit-job-popup input[name=edit_job_link]').val();
	        var success_value = true;
	        if (job_title == '') {
	            jQuery('.modal__wrap.edit-job-popup input[name=edit_job_title]').closest('.form-row').addClass('error');
	            success_value = false;
	        } else {
	            jQuery('.modal__wrap.edit-job-popup input[name=edit_job_title]').closest('.form-row').removeClass('error');
	        }
	        if (job_text == '') {
	            jQuery('.modal__wrap.edit-job-popup textarea').closest('.form-row').addClass('error');
	            success_value = false;
	        } else {
	            jQuery('.modal__wrap.edit-job-popup textarea').closest('.form-row').removeClass('error');
	        }
	        if (job_link == '') {
	            jQuery('.modal__wrap.edit-job-popup input[name=edit_job_link]').closest('.form-row').addClass('error');
	            success_value = false;
	        } else {
	            jQuery('.modal__wrap.aeditdd-job-popup input[name=edit_job_link]').closest('.form-row').removeClass('error');
	        }
	        if (success_value) {
	            console.log('URL: action=edit_job&job_id='+edit_job_id+'&user_id='+user_id+'&job_title='+job_title+'&job_salary_from='+job_salary_from+'&job_salary_up_to='+job_salary_up_to+'&job_text='+job_text+'&job_link='+job_link);
	            jQuery.ajax({
        			url: '<?php echo admin_url( "admin-ajax.php" ) ?>',
        			type: 'POST',
        			data: 'action=edit_job&job_id='+edit_job_id+'&user_id='+user_id+'&job_title='+job_title+'&job_salary_from='+job_salary_from+'&job_salary_up_to='+job_salary_up_to+'&job_text='+job_text+'&job_link='+job_link,
        			beforeSend: function( xhr ) {
        				
        			},
        			success: function( data ) {
        				//var answer = jQuery.parseJSON(data);
        				//console.log(data);
        				location.reload();
        			}
        		});
	        }
	    });
	    /* Career remove job action */
	    jQuery('.modal__wrap.remove-job-popup .form-row-cnt .buttons-cnt button#remove_remove-job').click(function() {
	        var edit_job_id = jQuery('.modal__wrap.remove-job-popup input[name=remove_job_id]').val();
            jQuery.ajax({
    			url: '<?php echo admin_url( "admin-ajax.php" ) ?>',
    			type: 'POST',
    			data: 'action=remove_job&job_id='+edit_job_id,
    			beforeSend: function( xhr ) {
    				
    			},
    			success: function( data ) {
    				//var answer = jQuery.parseJSON(data);
    				//console.log(data);
    				location.reload();
    			}
    		});
	    });
	    
	    /*
	    jQuery('body.single-otzyvy .review__original-link').click(function() {
	        //console.log('open review scan');
	        var post_id_review = <?=get_the_ID(); ?>;
	        console.log('action=open_review_scan&post_id='+<?=get_the_ID(); ?>+'&additionall=1');
            jQuery.ajax({
    			url: '<?php echo admin_url( "admin-ajax.php" ) ?>',
    			type: 'POST',
    			data: 'action=open_review_scan&post_id='+<?=get_the_ID(); ?>+'&additionall=1',
    			beforeSend: function( xhr ) {
    				
    			},
    			success: function( data ) {
    				//var answer = jQuery.parseJSON(data);
    				console.log(data);
    			}
    		});
	    });    
	    */
	    
	    if (jQuery.cookie("roistat_visit") != '') {
	        let roistat_visit_cookie = jQuery.cookie("roistat_visit");
	        jQuery("input[name=roistat_visit]").val(roistat_visit_cookie);
	    }
	    if (jQuery.cookie("_ym_uid") != '') {
    	    let ym_uid_cookie = jQuery.cookie("_ym_uid");
    	    jQuery("input[name=ym_uid]").val(ym_uid_cookie);
	    }
	    
	    //console.log('project_id: 84644, event_name: testRoistatevent, visit: ' + jQuery.cookie("roistat_visit"));
	    //roistat.event.send('testRoistatevent');
	    /*
	    jQuery.ajax({
			url: '<?php echo admin_url( "admin-ajax.php" ) ?>',
			type: 'POST',
			data: 'action=add_rostat_visit&project_id=84644&event_name=testRoistatevent&visit='+jQuery.cookie("roistat_visit"),
			beforeSend: function( xhr ) {
				
			},
			success: function( data ) {
				//var answer = jQuery.parseJSON(data);
				console.log(data);
				roistat.event.send('testRoistatevent');
			}
		});
    	*/	
	    
	    if (jQuery('body').hasClass('page-template-bankruptcy-landing')) {
	        var bankruptcy_reviews_count = jQuery('body.page-template-bankruptcy-landing .reviews-content-cnt .review-item-cnt').length;
	        if (bankruptcy_reviews_count > 5) {
	            jQuery('body.page-template-bankruptcy-landing .reviews-content-cnt .view-new-five-reviews').removeClass('hidden');
	        }
	        jQuery("body.page-template-bankruptcy-landing .reviews-content-cnt .review-item-cnt").each(function(indx) {
	            if (indx > 4) {
	                jQuery(this).addClass('hidden');
	            }
            });
	    }
	    
	    if (jQuery('body').hasClass('page-template-whatsapp-redirect')) {
            var ym_uid = localStorage._ym_uid;
            //console.log(encodeURI('https://wa.me/79967972741?text=Тестовое сообщение. ПРОМОКОД: '+ym_uid));
            //window.location.href = encodeURI('https://wa.me/79967972741?text=Тестовое сообщение. ПРОМОКОД: '+ym_uid);
	    }
	    
	    jQuery('body.page-template-helpyourfriends #services_master_first .section__facts-col').click(function() {
	        jQuery('.section--modal.old__cnt .modal__wrap--services .modal__title').html('Начните рекомендовать и вы')
	        jQuery('.section--modal.old__cnt .modal__wrap--services .modal__new-subtitle').removeClass('hidden')
	        jQuery('.section--modal.old__cnt .modal__wrap--services form input[name="form-name"]').val('SMS-65 Реферальная программа. Начните рекомендовать');
	        jQuery('.section--modal.old__cnt .modal__wrap--services form input[name="form-sms"]').val('68');
	        jQuery('.section--modal.old__cnt .modal__overlay').removeClass('hidden');
	        jQuery('.section--modal.old__cnt .modal__wrap--services').removeClass('hidden');
	    });
	    
	    jQuery('body.page-template-newbonus button.get-money').click(function() {
	        console.log('get-money');
	        jQuery('.popup__cnt').removeClass('hidden');
	        jQuery('.popup__cnt .mfc-bankruptcy-bonus-1').removeClass('hidden');
	    });
	    
	    jQuery('body.page-template-newbonus button.add-recomendation').click(function() {
	        console.log('add-recomendation');
	        jQuery('.popup__cnt').removeClass('hidden');
	        jQuery('.popup__cnt .mfc-bankruptcy-bonus-2').removeClass('hidden');
	    });
	    
	    jQuery('section#aim4free .phone-cnt button').click(function() {
	        jQuery('.modal__overlay').removeClass('hidden');
	        jQuery('.modal__wrap--callback').removeClass('hidden');
	    });

        jQuery('section#aim4free .button-cnt button').click(function() {
            jQuery('.modal__wrap--services form input[name="form-title"]').val('Cначала узнайте, можно ли вам списать долги бесплатно');
            jQuery('.modal__wrap--services form input[name="form-name"]').val('SMS-66 Узнайте сможете ли Вам списать долги бесплатно');
            jQuery('.modal__wrap--services form input[name="form-sms"]').val('69');
	        jQuery('.modal__overlay').removeClass('hidden');
	        jQuery('.modal__wrap--services').removeClass('hidden');
	    });
	    
	    jQuery('.iamfree-inner .modal__wrap--services .modal__close').click(function() {
	        jQuery('.iamfree-inner .modal__wrap--services').addClass('hidden');
	        jQuery('.iamfree-inner .modal__overlay').addClass('hidden');
	    });
	    
	    jQuery('.iamfree-inner .modal__wrap--callback .modal__close').click(function() {
	        jQuery('.iamfree-inner .modal__wrap--callback').addClass('hidden');
	        jQuery('.iamfree-inner .modal__overlay').addClass('hidden');
	    });

	    jQuery('body.page-template-newbonusprogram section#bonus-top button.red').click(function() {
	        jQuery('.modal__wrap--services h3.modal__title').html('Начните зарабатывать уже сейчас');
	        jQuery('.modal__wrap--services form input[name="form-sms"]').val('70');
	        jQuery('.modal__wrap--services form input[name="form-name"]').val('SMS-67 Бонусная программа. Начните зарабатывать уже сейчас');
	        jQuery('.modal__wrap--services form input[name="form-title"]').val('Обновленные условия бонусной программы');
	        jQuery('.modal__wrap--services').removeClass('hidden');
	        jQuery('.modal__overlay').removeClass('hidden');
	    });

        if (jQuery('body').hasClass('page-template-redirect-a')) {
            setTimeout(function() {
                window.location.href = 'https://yandex.ru/maps/-/CCUKIQVc1A'; 
            },500);
        }
        if (jQuery('body').hasClass('page-template-redirect-b')) {
            setTimeout(function() {
                window.location.href = 'https://go.2gis.com/ovx7r'; 
            },500);
        }
        if (jQuery('body').hasClass('page-template-redirect-c')) {
            setTimeout(function() {
                window.location.href = 'https://youtu.be/9Oz_S0B3Vqc'; 
            },500);
        }

        jQuery('section#bonus-questions .vertical-slider-item .item-title').click(function() {
            if (jQuery(this).closest('.vertical-slider-item').hasClass('expanded')) {
                jQuery(this).closest('.vertical-slider-item').removeClass('expanded');
                jQuery(this).closest('.vertical-slider-item').find('.item-subtitle').slideUp("slow");
            } else {
                jQuery(this).closest('.vertical-slider-item').addClass('expanded');
                jQuery(this).closest('.vertical-slider-item').find('.item-subtitle').slideDown("slow");
            }
        });
        
        jQuery('.pamytka-docs-item .faq-cnt .faq-item .faq-item-title').click(function() {
            if (jQuery(this).closest('.faq-item').hasClass('expanded')) {
                jQuery(this).closest('.faq-item').removeClass('expanded');
                jQuery(this).closest('.faq-item').find('.faq-item-content').slideUp("slow");
            } else {
                jQuery(this).closest('.faq-item').addClass('expanded');
                jQuery(this).closest('.faq-item').find('.faq-item-content').slideDown("slow");
            }
        });

        jQuery('body.page-template-whatsapp-redirect section.custom-kviz .submit-cnt button').click(function() {
            jQuery(this).closest('.kviz-cnt').find('.calculation__variants').each(function() {
                 if (jQuery(this).find('.calculation__radio').length > 0) {
                    var input_name = jQuery(this).find('input[type=radio]').attr('name');
                    var input_value = jQuery(this).find('input[name='+input_name+']:checked').val();
                    if (input_value == undefined) {
                        jQuery(this).closest('.question-item').addClass('not-valid');
                        jQuery(this).closest('.question-item').find('.notice').removeClass('hidden');
                        jQuery(this).find('.radio__new--accent').addClass('zoom');
                    } else {
                        jQuery(this).closest('.question-item').removeClass('not-valid');
                        jQuery(this).closest('.question-item').find('.notice').addClass('hidden');
                    }
                 }
                 if (jQuery(this).find('.calculation__checkbox').length > 0) {
                    var input_name = jQuery(this).find('input[type=checkbox]').attr('name');
                    var input_value = jQuery(this).find('input[name='+input_name+']:checked').val();
                    if (input_value == undefined) {
                        jQuery(this).closest('.question-item').addClass('not-valid');
                        jQuery(this).closest('.question-item').find('.notice').removeClass('hidden');
                        jQuery(this).find('.radio__new--accent').addClass('zoom');
                    } else {
                        jQuery(this).closest('.question-item').removeClass('not-valid');
                        jQuery(this).closest('.question-item').find('.notice').addClass('hidden');
                    }
                 }
            });
            var scroll_top_offset = '';
            var scroll_top_flag = true;
            jQuery(this).closest('.kviz-cnt').find('.question-item.not-valid').each(function() {
                if (scroll_top_flag) {
                    var obj_offsetTop = jQuery(this).position().top;
                    jQuery('html, body').animate({ scrollTop: obj_offsetTop }, 750);
                    scroll_top_flag = false;
                }
            });
            if (!jQuery(this).closest('.kviz-cnt').find('.question-item.not-valid').length) {
                window.location.href = encodeURI('https://wa.me/79967972741?text=Здравствуйте, хочу узнать подхожу ли под условия для бесплатного списания долгов.'); 
            }
        });
	    
        if (jQuery('body').hasClass('page-template-bankrotstvo')) {
            var scrollTop = jQuery(window).scrollTop();
            var elementOffset = jQuery('section.bankrotstvo-section-content').offset().top;
            var element_height = jQuery('section.bankrotstvo-section-content').height();
            var container_width = jQuery('section.bankrotstvo-section-content .container').width();
            var content_block_width = jQuery('section.bankrotstvo-section-content .content-block').width();
            var window_width = jQuery(window).width();
            var window_height = jQuery(window).height();
            var stopPoint = elementOffset + element_height - window_height + 0;
            var right = (window_width - container_width) / 2;
            var sidebar_width = (container_width - content_block_width) - 20;
            var distance = (scrollTop - elementOffset);
            if (scrollTop < stopPoint ) {
                if (distance > 0) {
                    distance += 60;
                    jQuery('.right-sidebar').css("display", "block");
                    jQuery('.right-sidebar').css("position", "absolute");
                    jQuery('.right-sidebar').css("top", distance);
                    jQuery('.right-sidebar').css("right", right);
                    jQuery('.right-sidebar').css("width", sidebar_width);
                } else {
                    jQuery('.right-sidebar').css("display", "block");
                    jQuery('.right-sidebar').css("position", "absolute");
                    jQuery('.right-sidebar').css("top", "0");
                    jQuery('.right-sidebar').css("right", right);
                    jQuery('.right-sidebar').css("width", sidebar_width);
                }
            }
        }

        //setTimeout(() => jQuery('body.page-template-online .login-form__cnt .g-signin2 .abcRioButtonContents span:first-child').html('Войти через GMail'), 1000);
        /*
        jQuery('body.page-template-online .login-form__cnt .g-signin2 .abcRioButtonContents span:first-child').html('Войти через GMail');
        jQuery('body.page-template-online .login-form__cnt .g-signin2').removeClass('hidden');
        */

        if (jQuery('body').hasClass('page-template-stoimost')) {
	        if (jQuery(window).width() < 992) {
                let swiper_stoimost_price = new Swiper('#services_price .swiper-stoimost-price', {
                    initialSlide: 1,
                    slidesPerView: 1.2,
                    speed: 600,
                    centeredSlides: false,
                    spaceBetween: 10,
                    touchRatio: 1,
                });
                jQuery('.swiper-stoimost-price').removeClass('hidden');
                jQuery('.price__lst').addClass('hidden');
                
                let swiper_payments_list = new Swiper('#payments__lst-mobile', {
                    initialSlide: 1,
                    slidesPerView: 1.2,
                    speed: 600,
                    centeredSlides: false,
                    spaceBetween: 10,
                    touchRatio: 1,
                });
                jQuery('#payments__lst-mobile').removeClass('hidden');
                jQuery('#payments__lst-desktop').addClass('hidden');
            } else {
                jQuery('.swiper-stoimost-price').addClass('hidden');
                jQuery('.price__lst').removeClass('hidden');
                jQuery('#payments__lst-mobile').addClass('hidden');
                jQuery('#payments__lst-desktop').removeClass('hidden');
            }
	    }

        if (jQuery('body').hasClass('page-template-services')) {
	        if (jQuery(window).width() < 768) {
                jQuery('#services_top-promo ul.spoiler--promo li.spoiler__block .spoiler__content--promo').addClass('hide');
            }
            jQuery('.calculator-navbar').addClass('hidden-block');
	    }

        jQuery('.calculator-navbar').addClass('hidden-block');

        setTimeout(() => jQuery('.calculator-navbar.calculator-navbar--show').removeClass('hidden'), 1000);

        let inputs = document.querySelectorAll('section.feedback .attach__cnt .upload-file');
        Array.prototype.forEach.call(inputs, function (input) {
            let label = input.nextElementSibling;
            //let labelVal = label.querySelector('.input__file-button-text').innerText;
            input.addEventListener('change', function (e) {
                let countFiles = '';
                if (this.files && this.files.length >= 1) {
                    countFiles = this.files.length;
                    console.log(this.files);
                   
                    var uploadFormData = new FormData();
                    uploadFormData.append('file', this.files[0]);
                    
                    jQuery.ajax({
                        type: "POST",
                        url: '/wp-content/themes/fpalaw/custom_upload.php',
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: uploadFormData,
                        dataType : 'json',
                        success: function(msg){
                            console.log(msg);
                            jQuery('.feedback-custom-form form input[name=attach_file]').val(msg.success_url);
                        }
                    });
                }
                if (countFiles) {
                    label.querySelector('.attach_doc').style.opacity = '1';
                    label.querySelector('.attach_doc .txt').innerText = countFiles;
                } else {
                    label.querySelector('.attach_doc').style.opacity = '0';
                }
            });
        });

		// Получаем все элементы с дата-атрибутом data-bg
		let images = document.querySelectorAll('[data-bg]');
		// Проходимся по каждому
		for (let i = 0; i < images.length; i++) {
			// Получаем значение каждого дата-атрибута
			let image = images[i].getAttribute('data-bg');
			// Каждому найденному элементу задаем свойство background-image с изображение формата jpg
			images[i].style.backgroundImage = 'url(' + image + ')';
		}

		// Проверяем, является ли браузер посетителя сайта Firefox и получаем его версию
		let isitFirefox = window.navigator.userAgent.match(/Firefox\/([0-9]+)\./);
		let firefoxVer = isitFirefox ? parseInt(isitFirefox[1]) : 0;

		// Если есть поддержка Webp или браузер Firefox версии больше или равно 65
		if (canUseWebp() || firefoxVer >= 65) {
			// Делаем все то же самое что и для jpg, но уже для изображений формата Webp
			let imagesWebp = document.querySelectorAll('[data-bg-webp]');
			for (let i = 0; i < imagesWebp.length; i++) {
				let imageWebp = imagesWebp[i].getAttribute('data-bg-webp');
				imagesWebp[i].style.backgroundImage = 'url(' + imageWebp + ')';
			}
		}
		/*
        $("section#services_master_second .recording__column").each(function() {
            var recording__date = $(this).find('.recording__date').html();
            if (recording__date == '01.01.2022' || recording__date == '02.01.2022' || recording__date == '03.01.2022') {
                $(this).find('.recording__btn-time').prop('disabled', true);
            }
        });
        */
        
        /*var local_storage_entry_point = window.location.href;*/
        if(device.desktop()) { localStorage.crm_type_device = 'Компьютер'; }
        if(device.tablet()) { localStorage.crm_type_device = 'Планшет'; }
        if(device.mobile()) { localStorage.crm_type_device = 'Мобильный телефон'; }
    
    
        if (typeof localStorage.crm_entry_point == 'undefined' && localStorage.crm_entry_point == null) {
            localStorage.crm_entry_point = window.location.href;
        }
        
        if (typeof localStorage.fpa_calculator_state != 'undefined' && localStorage.fpa_calculator_state == 'hidden') {
            jQuery('.calculator-navbar.calculator-navbar--show').addClass('toggle');
            jQuery('.calculator-navbar.calculator-navbar--show .calculator-navbar__wrap').addClass('calculator-navbar__wrap--hide');
        }
    
        if (jQuery(window).width() > 768) {
            jQuery('body').addClass('popup_tablet_state');
        }
    
        jQuery('input.crm_type_device').val(localStorage.crm_type_device);
        jQuery('input.crm_entry_point').val(localStorage.crm_entry_point);
    
    
        jQuery('.section--modal .modal__wrap .calculation__checkbox:not(.checkbox_donot_know) input[type=checkbox]').prop('checked', false);
        jQuery('.section--modal .modal__wrap input[type=radio]').prop('checked', false);
        
        jQuery('.single-info .calculation--inpost .calculation__checkbox:not(.checkbox_donot_know) input[type=checkbox]').prop('checked', false);
        jQuery('.single-info .calculation--inpost input[type=radio]').prop('checked', false);
        
        jQuery('#services_calculation .calculation__checkbox:not(.checkbox_donot_know) input[type=checkbox]').prop('checked', false);
        jQuery('#services_calculation input[type=radio]').prop('checked', false);
/*
        jQuery('.section--modal .modal__wrap .test__btn').click(function() {
            jQuery('.section--modal .modal__wrap .test__block').each(function(){
                if (jQuery(this).find('input[type=radio]:checked').val() != 'on') {
                    jQuery(this).find('span.radio__new').addClass('zoom');
                    jQuery(this).find('span.radio__new').removeClass('zoom');
                    abort();
                }
            });        
        });
 */
 
        jQuery('body.page-template-aim3free .iam3free_form_call').click(function() {
            //console.log('aim3free');
            /*
            jQuery('.section--modal .modal__wrap--answer form input[name="form-name"]').val('SMS-60 Мы бесплатно спишем долги, если Ваша ситуация соответствует 3 условиям');
            jQuery('.section--modal .modal__wrap--answer form input[name="form-sms"]').val('63');
            jQuery('.section--modal .modal__wrap--answer form input[name="form-title"]').val('Мы бесплатно спишем долги, если Ваша ситуация соответствует 3 условиям');
            */
            jQuery('.popup__cnt').removeClass('hidden');
            jQuery('.popup-item__cnt.aim3free-form').removeClass('hidden');
            jQuery('body').addClass('.body-fixed');
        });
        
        jQuery('body.page-template-spasibo-iamfree .custom-reviews button.btn').click(function() {
            jQuery('.custom-reviews-wrap .custom-reviews-item.hidden').each(function(indx) {
                if (indx < 12) {
                    jQuery(this).removeClass('hidden');
                }
            });
            if (!jQuery('.custom-reviews-wrap .custom-reviews-item.hidden').length) {
                jQuery('.custom-reviews button.btn').addClass('hidden');
            }
        });
        
        jQuery('body.page-template-aimfreec-spasibo .custom-reviews button.btn').click(function() {
            jQuery('.custom-reviews-wrap .custom-reviews-item.hidden').each(function(indx) {
                if (indx < 12) {
                    jQuery(this).removeClass('hidden');
                }
            });
            if (!jQuery('.custom-reviews-wrap .custom-reviews-item.hidden').length) {
                jQuery('.custom-reviews button.btn').addClass('hidden');
            }
        });
        
        if ((typeof localStorage['fpa_warning_state']) != "undefined" || localStorage.fpa_warning_state == 'hidden') {
            jQuery('.warning__cnt').addClass('hidden');
            jQuery('body').addClass('no-warning-block');
        } else {
            jQuery('.warning__cnt').removeClass('hidden');
            jQuery('body').removeClass('no-warning-block');
        }

        if (jQuery('body').hasClass('page-template-expert')) {
            var form_sms = jQuery('#expert-form_cnt').attr('data-form-sms');
            var form_name = jQuery('#expert-form_cnt').attr('data-form-name');
            jQuery('#expert-form_cnt form input[name=form-name]').val(form_name);
            jQuery('#expert-form_cnt form input[name=form-sms]').val(form_sms);
        }

        
        if (jQuery('.modal__wrap--answer').length > 0) {
            jQuery('.modal__wrap--answer form').attr('id', 'form-uznat-rezultat-mfc');
        }
        /*
        jQuery(".wpcf7-form input[name=summ]").val(jQuery.number( jQuery(".js-range-slider-value").val(), 0, '.', ' ' ) + ' рублей');
        */
        /*
        jQuery('.modal__wrap .checkbox_donot_know').click(function() {
            if (jQuery(this).find('input[type=checkbox]').is(':checked')) {
                jQuery(this).closest('.test__block').find('.range-slider').addClass('disabled');
                jQuery(this).closest('.test__block').find('.range-slider').find('.js-range-slider-value').prop('disabled', true);
                jQuery(".wpcf7-form input[name=summ]").val('Затрудняюсь ответить');
            } else {
                jQuery(this).closest('.test__block').find('.range-slider').removeClass('disabled');
                jQuery(this).closest('.test__block').find('.range-slider').find('.js-range-slider-value').prop('disabled', false);
                jQuery(".wpcf7-form input[name=summ]").val(jQuery.number( jQuery(".js-range-slider-value").val(), 0, '.', ' ' ));
                jQuery('.test__block .checkbox_donot_know.hidden label').html(jQuery.number( jQuery(".js-range-slider-value").val(), 0, '.', ' ' ) + ' рублей');
            }
        });        
        */
        jQuery('#services_calculation .calculation__wrap .calculation__tab .checkbox_donot_know').click(function() {
        //jQuery('.calculation__wrap .calculation__tab .checkbox_donot_know').click(function() {
            if (jQuery(this).find('input[type=checkbox]').is(':checked')) {
                jQuery(this).closest('.calculation__tab').find('.range-slider').addClass('disabled');
                jQuery(this).closest('.calculation__tab').find('.range-slider').find('.js-range-slider-value').prop('disabled', true);
                jQuery(".wpcf7-form input[name=summ]").val('Затрудняюсь ответить');
                jQuery(this).addClass('checked');
                jQuery(this).closest('.calculation__variants').find('.checkbox_donot_know.hidden').find('input.checkbox__default').prop('checked', false);
            } else {
                jQuery(this).closest('.calculation__tab').find('.range-slider').removeClass('disabled');
                jQuery(this).closest('.calculation__tab').find('.range-slider').find('.js-range-slider-value').prop('disabled', false);
                jQuery(".wpcf7-form input[name=summ]").val(jQuery.number( jQuery(".js-range-slider-value").val(), 0, '.', ' ' ) + ' рублей');
                jQuery(this).closest('.calculation__tab').find('.checkbox_donot_know.hidden').find('label').html(jQuery.number( jQuery(".js-range-slider-value").val(), 0, '.', ' ' ) + ' рублей');
                //jQuery('.calculation__tab .checkbox_donot_know.hidden label').html(jQuery.number( jQuery(".js-range-slider-value").val(), 0, '.', ' ' ) + ' рублей');
                jQuery(this).removeClass('checked');
                jQuery(this).closest('.calculation__variants').find('.checkbox_donot_know.hidden').find('input.checkbox__default').prop('checked', true);
            }
        });
        
        jQuery('body.single .calculation__wrap .calculation__tab .checkbox_donot_know').click(function() {
            if (jQuery(this).find('input[type=checkbox]').is(':checked')) {
                jQuery(this).closest('.calculation__tab').find('.range-slider').addClass('disabled');
                jQuery(this).closest('.calculation__tab').find('.range-slider').find('.js-range-slider-value').prop('disabled', true);
                jQuery(".wpcf7-form input[name=summ]").val('Затрудняюсь ответить');
                jQuery(this).addClass('checked');
                jQuery(this).closest('.calculation__variants').find('.checkbox_donot_know.hidden').find('input.checkbox__default').prop('checked', false);
            } else {
                jQuery(this).closest('.calculation__tab').find('.range-slider').removeClass('disabled');
                jQuery(this).closest('.calculation__tab').find('.range-slider').find('.js-range-slider-value').prop('disabled', false);
                jQuery(".wpcf7-form input[name=summ]").val(jQuery.number( jQuery(".js-range-slider-value").val(), 0, '.', ' ' ) + ' рублей');
                jQuery(this).closest('.calculation__tab').find('.checkbox_donot_know.hidden').find('label').html(jQuery.number( jQuery(".js-range-slider-value").val(), 0, '.', ' ' ) + ' рублей');
                //jQuery('.calculation__tab .checkbox_donot_know.hidden label').html(jQuery.number( jQuery(".js-range-slider-value").val(), 0, '.', ' ' ) + ' рублей');
                jQuery(this).removeClass('checked');
                jQuery(this).closest('.calculation__variants').find('.checkbox_donot_know.hidden').find('input.checkbox__default').prop('checked', true);
            }
        });
        
        jQuery('.popup-item__cnt .calculation__wrap .calculation__tab .checkbox_donot_know').click(function() {
            if (jQuery(this).find('input[type=checkbox]').is(':checked')) {
                jQuery(this).closest('.calculation__tab').find('.range-slider').removeClass('disabled');
                jQuery(this).closest('.calculation__tab').find('.range-slider').find('.js-range-slider-value').prop('disabled', false);
                jQuery(".wpcf7-form input[name=summ]").val(jQuery.number( jQuery(".js-range-slider-value").val(), 0, '.', ' ' ) + ' рублей');
                jQuery(this).closest('.calculation__tab').find('.checkbox_donot_know.hidden').find('label').html(jQuery.number( jQuery(".js-range-slider-value").val(), 0, '.', ' ' ) + ' рублей');
                //jQuery('.calculation__tab .checkbox_donot_know.hidden label').html(jQuery.number( jQuery(".js-range-slider-value").val(), 0, '.', ' ' ) + ' рублей');
                jQuery(this).removeClass('checked');
                jQuery(this).find('input[type=checkbox]').prop('checked', false);
                jQuery(this).closest('.calculation__variants').find('.checkbox_donot_know.hidden').find('input.checkbox__default').prop('checked', true);
            } else {
                jQuery(this).closest('.calculation__tab').find('.range-slider').addClass('disabled');
                jQuery(this).closest('.calculation__tab').find('.range-slider').find('.js-range-slider-value').prop('disabled', true);
                jQuery(".wpcf7-form input[name=summ]").val('Затрудняюсь ответить');
                jQuery(this).closest('.calculation__tab').find('.checkbox_donot_know.hidden').find('label').html('Затрудняюсь ответить');
                jQuery(this).addClass('checked');
                jQuery(this).find('input[type=checkbox]').prop('checked', true);
                jQuery(this).closest('.calculation__variants').find('.checkbox_donot_know.hidden').find('input.checkbox__default').prop('checked', false);
            }
        });
        
        /*
        jQuery("section.feedback .attach__cnt .upload-file").change(function(){
            if (window.FormData === undefined) {
                alert('В вашем браузере FormData не поддерживается')
            } else {
                var formData = new FormData();
                formData.append('file', jQuery("section.feedback .attach__cnt .upload-file")[0].files[0]);
                
                console.log(formData);
                console.log(jQuery("section.feedback .attach__cnt .upload-file")[0].files[0]);
                
                jQuery.ajax({
                    type: "POST",
                    url: '/wp-content/themes/fpalaw/upload.php',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    dataType : 'json',
                    success: function(msg){
                        if (msg.error == '') {
                            //jQuery("section.feedback .attach__cnt .upload-file").hide();
                            //jQuery('#result').html(msg.success);
                            console.log("Success:");
                            console.log(msg);
                        } else {
                            //jQuery('#result').html(msg.error);
                            console.log("Error:");
                            console.log(msg);
                        }
                    }
                });
            }
        });
        */
        
        
        jQuery('.popup-item__cnt .calculation__btn--next').click(function() {
            var windowsize = jQuery(window).width();
            if (windowsize < 769) {
                var current_tab = 1;
                jQuery(this).closest('.calculation__wrap').find('.calculation__tab').each(function(indx) {
                    var question_name = 'question' + (indx+1);
                    var answer_name = 'answer' + (indx+1);
                    if (!jQuery(this).hasClass('hidden')) {
                        sessionStorage.setItem(question_name, jQuery(this).find('h4.calculation__title').html());
                        if (jQuery(this).find('.calculation__radio').length > 0) {
                            var input_name = jQuery(this).find('input[type=radio]').attr('name');
                            var input_value = jQuery(this).find('input[name='+input_name+']:checked').val();
                            if (input_value == undefined) {
                                jQuery(this).closest('.calculation__tab').addClass('not-valid');
                                jQuery(this).find('.radio__new--accent').addClass('zoom');
                            } else {
                                jQuery(this).closest('.calculation__tab').removeClass('not-valid');
                                //jQuery('.section--modal .modal__wrap form.wpcf7-form').find('input[name='+input_name+']').val(input_value);
                                jQuery(this).closest('.calculator__cnt').find('.additional_form').find('form.wpcf7-form').find('input[name='+input_name+']').val(input_value);
                                sessionStorage.setItem(answer_name, input_value);
                            }
                        }
                        var checkbox_input_value = '';
                        if (jQuery(this).find('.calculation__checkbox').length > 0) {
                            var input_name = jQuery(this).find('input[type=checkbox]').attr('name');
                            var input_value = jQuery(this).find('input[name='+input_name+']:checked').val();
                            if (input_value == undefined) {
                                jQuery(this).closest('.calculation__tab').addClass('not-valid');
                                jQuery(this).find('.checkbox__new--accent').addClass('zoom');
                            } else {
                                jQuery(this).closest('.calculation__tab').removeClass('not-valid');
                            }
                            jQuery(this).find('input[name='+input_name+']:checked').each(function() {
                                if (checkbox_input_value != '') {
                                    checkbox_input_value += '; ' + jQuery(this).val();
                                } else {
                                    checkbox_input_value += jQuery(this).val();
                                }    
                            });
                            //jQuery('.section--modal .modal__wrap form.wpcf7-form').find('input[name='+input_name+']').val(checkbox_input_value);
                            jQuery(this).closest('.calculator__cnt').find('.additional_form').find('form.wpcf7-form').find('input[name='+input_name+']').val(checkbox_input_value);
                            if (input_name != 'summ') {
                                sessionStorage.setItem(answer_name, checkbox_input_value);
                            } else {
                                sessionStorage.setItem(answer_name, jQuery(this).find('.checkbox_donot_know.hidden label').html());
                            }
                        }
                        current_tab = (indx+1);
                    }
                });
                if (!jQuery('.calculator__cnt .calculation__wrap .calculation__tab__indx__'+current_tab).hasClass('not-valid')) {
                    if (current_tab > 0) {
                        jQuery('.calculator__cnt .calculation__wrap .calculation__tab__indx__'+current_tab).addClass('hidden');
                        if (jQuery('.calculator__cnt .calculation__wrap .calculation__tab__indx__'+(current_tab+1)).length) {
                            jQuery('.calculator__cnt .calculation__wrap .calculation__tab__indx__'+(current_tab+1)).removeClass('hidden');    
                        } else {
                            jQuery(this).closest('#calculation--inpost__v2').addClass('hidden');
                            jQuery(this).closest('.popup-item__cnt').find('.additional_form').removeClass('hidden');
                            jQuery(this).closest('.popup-item__cnt').find('.additional_form').find('.calculation__tab_new').removeClass('hidden');
                        }
                        jQuery('.popup-item__cnt .calculation__btn--prev').removeClass('disabled');
                    } else {
                        jQuery('.popup-item__cnt .calculation__btn--prev').addClass('disabled');
                    }    
                }
                setTimeout(() => jQuery('.popup-item__cnt').find('.calculation__variants').find('.radio__new--accent').removeClass('zoom'), 1000);
                setTimeout(() => jQuery('.popup-item__cnt').find('.calculation__variants').find('.checkbox__new--accent').removeClass('zoom'), 1000);
                jQuery(this).closest('.popup-item__cnt').find('.additional_form').find('.calculation__tab_new').find('form.wpcf7-form').find('input[name=summ]').val(jQuery('.popup-item__cnt.calculator__cnt .checkbox_donot_know.hidden label').html());
                jQuery('.section--modal .modal__overlay .modal__wrap--answer input[name=form-name]').val(jQuery(this).closest('.popup-item__cnt').attr('data-form-name'));
                jQuery('.section--modal .modal__overlay .modal__wrap--answer input[name=form-sms]').val(jQuery(this).closest('.popup-item__cnt').attr('data-form-sms'));
                jQuery('.section--modal .modal__overlay .modal__wrap--answer input[name=form-time]').val(jQuery(this).closest('.popup-item__cnt').attr('data-form-time'));
                jQuery('.section--modal .modal__overlay .modal__wrap--answer input[name=form-title]').val(jQuery(this).closest('.popup-item__cnt').attr('data-form-title'));
            }
        });
        
        jQuery('.popup-item__cnt .calculation__btn--prev').click(function() {
            var windowsize = jQuery(window).width();
            if (windowsize < 769) {
                var current_tab = 1;
                jQuery(this).closest('.calculation__wrap').find('.calculation__tab').each(function(indx) {
                    if (!jQuery(this).hasClass('hidden')) {
                        current_tab = (indx+1);
                    }
                });
                if (current_tab > 1) {
                    jQuery('.calculator__cnt .calculation__wrap .calculation__tab__indx__'+current_tab).addClass('hidden');
                    jQuery('.calculator__cnt .calculation__wrap .calculation__tab__indx__'+(current_tab-1)).removeClass('hidden');
                    if (current_tab > 2) {
                        jQuery('.popup-item__cnt .calculation__btn--prev').removeClass('disabled');
                    } else {
                        jQuery('.popup-item__cnt .calculation__btn--prev').addClass('disabled');
                    }
                } else {
                    jQuery('.popup-item__cnt .calculation__btn--prev').addClass('disabled');
                }
            }
        });
        /*
        jQuery('.popup-item__cnt .calculation__btn--form').click(function() {
            console.log("Ссылка: " + jQuery(this).attr('href'));
        });
        */
        
        jQuery('button.social-btn-new').click(function() {
            jQuery('.section--modal .modal__overlay').removeClass('hidden');
            jQuery('.section--modal .new-year-popup').removeClass('hidden');  
            jQuery('body').css('position', 'fixed');
        });        
        
        jQuery('button.btn-new-year').click(function() {
            jQuery('.section--modal .modal__overlay').removeClass('hidden');
            jQuery('.section--modal .new-year-popup').removeClass('hidden');  
            jQuery('body').css('position', 'fixed');
        });
        
        jQuery('#services_top-promo .bulets-cnt .bulets-item .content-cnt .subtitle button').click(function() {
            var window_width = jQuery(window).width();
            if (window_width < 768) {
                jQuery('.fixed-modalr-bk-info-popup').addClass('showed');
                jQuery('body').addClass('fixed-popup-bg');    
            } else {
                jQuery('.section--modal .modal__overlay').removeClass('hidden');
                jQuery('.section--modal .rbk-info-popup').removeClass('hidden');    
            }
        });
        
        jQuery('.fixed-modalr-bk-info-popup .close button').click(function() {
            jQuery('.fixed-modalr-bk-info-popup').removeClass('showed');
            jQuery('body').removeClass('fixed-popup-bg'); 
        });
        
        
        jQuery('.section--modal .rbk-info-popup .close button').click(function() {
            jQuery('.section--modal .rbk-info-popup').addClass('hidden');
            jQuery('.section--modal .modal__overlay').addClass('hidden');
        });
        
        
        jQuery('.popup-item__cnt .calculation__btn--form').click(function() {
            var windowsize = jQuery(window).width();
            //if (windowsize > 768) {
                jQuery(this).closest('.popup-item__cnt').find('.calculation__tab').each(function(indx) {
                    var question_id = 'question' + (indx+1) + '_id';
                    var question_name = 'question' + (indx+1);
                    var answer_id = 'answer' + (indx+1) + '_id';
                    var answer_name = 'answer' + (indx+1);
                    sessionStorage.setItem(question_name, jQuery(this).find('h4.calculation__title span.text').html());
                    //sessionStorage.setItem(question_id, jQuery(this).attr('data-question-id'));
                    jQuery(this).find('.calculation__variants').each(function() {
                        if (jQuery(this).find('.calculation__radio').length > 0) {
                            var input_name = jQuery(this).find('input[type=radio]').attr('name');
                            var input_value = jQuery(this).find('input[name='+input_name+']:checked').val();
                            var input_id = jQuery(this).find('label').attr('data-value');
                            var metrika_name = 'metrika_'+input_name;
                            if (input_value == undefined) {
                                jQuery(this).closest('.calculation__tab').addClass('not-valid');
                                jQuery(this).closest('.calculation__tab').find('.notice').removeClass('hidden');
                                jQuery(this).find('.radio__new--accent').addClass('zoom');
                            } else {
                                jQuery(this).closest('.calculation__tab').removeClass('not-valid');
                                jQuery(this).closest('.calculation__tab').find('.notice').addClass('hidden');
                                jQuery('.section--modal .modal__wrap form.wpcf7-form').find('input[name='+input_name+']').val(input_value);
                                sessionStorage.setItem(answer_name, input_value);
                                sessionStorage.setItem(metrika_name, input_id);
                                //sessionStorage.setItem(answer_id, input_id);
                            }
                        }
                        var checkbox_input_value = '';
                        var checkbox_input_id = '';
                        if (jQuery(this).find('.calculation__checkbox').length > 0) {
                            var input_name = jQuery(this).find('input[type=checkbox]').attr('name');
                            var input_value = jQuery(this).find('input[name='+input_name+']:checked').val();
                            var input_id = jQuery(this).find('label').attr('data-value');
                            var metrika_name = 'metrika_'+input_name;
                            if (input_value == undefined) {
                                jQuery(this).closest('.calculation__tab').addClass('not-valid');
                                jQuery(this).closest('.calculation__tab').find('.notice').removeClass('hidden');
                                jQuery(this).find('.radio__new--accent').addClass('zoom');
                            } else {
                                jQuery(this).closest('.calculation__tab').removeClass('not-valid');
                                jQuery(this).closest('.calculation__tab').find('.notice').addClass('hidden');
                            }
                            jQuery(this).find('input[name='+input_name+']:checked').each(function() {
                                if (!jQuery(this).closest('.calculation__checkbox').hasClass('hidden')) {
                                    if (checkbox_input_value != '') {
                                        checkbox_input_value += '; ' + jQuery(this).val();
                                        checkbox_input_id += ' ' + jQuery(this).closest('.calculation__checkbox').find('label').attr('data-value');
                                    } else {
                                        checkbox_input_value += jQuery(this).val();
                                        checkbox_input_id += jQuery(this).closest('.calculation__checkbox').find('label').attr('data-value');
                                    }    
                                }
                            });
                            jQuery('.section--modal .modal__wrap form.wpcf7-form').find('input[name='+input_name+']').val(checkbox_input_value);
                            sessionStorage.setItem(answer_name, checkbox_input_value);
                            sessionStorage.setItem(metrika_name, input_id);
                            /*
                            if (input_name != 'summ') {
                                sessionStorage.setItem(answer_name, checkbox_input_value);
                                //sessionStorage.setItem(answer_id, checkbox_input_id);
                            } else {
                                sessionStorage.setItem(answer_name, jQuery(this).find('.checkbox_donot_know.hidden label').html());
                            }
                            */
                        }
                    });
                });
                setTimeout(() => jQuery('.popup-item__cnt').find('.calculation__variants').find('.radio__new--accent').removeClass('zoom'), 1000);
                setTimeout(() => jQuery('.popup-item__cnt').find('.calculation__variants').find('.checkbox__new--accent').removeClass('zoom'), 1000);
                if (!jQuery(this).closest('.popup-item__cnt').find('.calculation__tab.not-valid').length) {
                    
                    jQuery('.section--modal .modal__overlay .modal__wrap--answer form.wpcf7-form input[name=form-sms]').val('2');
                    jQuery('.section--modal .modal__overlay .modal__wrap--answer input[name=form-name]').val(jQuery(this).closest('.popup-item__cnt').attr('data-form-name'));
                    jQuery('.section--modal .modal__overlay .modal__wrap--answer input[name=form-sms]').val(jQuery(this).closest('.popup-item__cnt').attr('data-form-sms'));
                    jQuery('.section--modal .modal__overlay .modal__wrap--answer input[name=form-time]').val(jQuery(this).closest('.popup-item__cnt').attr('data-form-time'));
                    jQuery('.section--modal .modal__overlay .modal__wrap--answer input[name=form-title]').val(jQuery(this).closest('.popup-item__cnt').attr('data-form-title'));
                    //jQuery('.section--modal .modal__overlay .modal__wrap--answer input[name=summ]').val(jQuery('.popup-item__cnt.calculator__cnt .checkbox_donot_know.hidden label').html());
                    jQuery('.section--modal .modal__overlay .modal__wrap--answer input[name=summ]').val(jQuery(this).closest('.calculation__wrap').find('.calculation__tab[data-question-id="summ"]').find('input:checked').val());
                    jQuery(this).closest('.popup-item__cnt').addClass('hidden');
                    jQuery(this).closest('.popup__cnt').addClass('hidden');
                    jQuery('.section--modal .modal__overlay').removeClass('hidden');
                    jQuery('.section--modal .modal__overlay .modal__wrap--answer').removeClass('hidden');
                    //jQuery('.popup-item__cnt.popup-form-answer').removeClass('hidden') ;
                    jQuery('.section--modal .modal__overlay .modal__wrap--answer .calc-modal__inner').addClass('start') ;
                    setTimeout(() => {jQuery('.section--modal .modal__overlay .modal__wrap--answer .calc-modal__loader').addClass('hidden'); jQuery('.section--modal .modal__overlay .modal__wrap--answer .calc-modal__check').removeClass('hidden') ;}, 17500);
                    jQuery('body').removeClass('body-fixed');
                    
                    jQuery('.modal__wrap--calculation.calc-modal').addClass('hidden');
                    
                    
                    /*
                    jQuery('.popup__cnt .modal__wrap--answer form.wpcf7-form input[name=form-sms]').val('2');
                    jQuery('.popup__cnt .modal__wrap--answer input[name=form-name]').val(jQuery(this).closest('.popup-item__cnt').attr('data-form-name'));
                    jQuery('.popup__cnt .modal__wrap--answer input[name=form-sms]').val(jQuery(this).closest('.popup-item__cnt').attr('data-form-sms'));
                    jQuery('.popup__cnt .modal__wrap--answer input[name=form-time]').val(jQuery(this).closest('.popup-item__cnt').attr('data-form-time'));
                    jQuery('.popup__cnt .modal__wrap--answer input[name=form-title]').val(jQuery(this).closest('.popup-item__cnt').attr('data-form-title'));
                    jQuery('.popup__cnt .modal__wrap--answer input[name=summ]').val(jQuery('.popup-item__cnt.calculator__cnt .checkbox_donot_know.hidden label').html());
                    jQuery(this).closest('.popup-item__cnt').addClass('hidden');
                    //jQuery(this).closest('.popup__cnt').addClass('hidden');
                    //jQuery('.section--modal .modal__overlay').removeClass('hidden');
                    jQuery('.popup__cnt .modal__wrap--answer').removeClass('hidden');
                    //jQuery('.popup-item__cnt.popup-form-answer').removeClass('hidden') ;
                    jQuery('.popup__cnt .modal__wrap--answer .calc-modal__inner').addClass('start') ;
                    setTimeout(() => {jQuery('.popup__cnt .modal__wrap--answer .calc-modal__loader').addClass('hidden'); jQuery('.popup__cnt .modal__wrap--answer .calc-modal__check').removeClass('hidden') ;}, 17500);
                    */
                } else {
                    var scroll_top_offset = '';
                    var scroll_top_flag = true;
                    jQuery(this).closest('.popup-item__cnt').find('.calculation__tab.not-valid').each(function() {
                        if (scroll_top_flag) {
                            var obj_offsetTop = jQuery(this).position().top;
                            jQuery('.popup__overlay').animate({ scrollTop: obj_offsetTop }, 750);
                            scroll_top_flag = false;
                        }
                    });
                }
            //}
        });
        
        /*jQuery('.popup__cnt .popup-item__cnt input[type=radio]').prop('checked', false);
        jQuery('.popup__cnt .popup-item__cnt input[type=checkbox]').prop('checked', false);*/
        
        /*jQuery('.popup__cnt form#mfc-ac__number-1').get(0).reset();*/
        //jQuery('.popup__cnt .popup-item__cnt').reset();

        
        
        jQuery('.calculation__wrap .calculation__tab .checkbox_donot_know__cnt').click(function() {
            if (jQuery(this).find('input[type=checkbox]').is(':checked')) {
                jQuery(this).addClass('checked');
            } else {
                jQuery(this).removeClass('checked');
            }
        });
        
        jQuery('.calculation__wrap .calculation__tab .radio_donot_know__cnt').click(function() {
            if (jQuery(this).find('input[type=radio]').is(':checked')) {
                jQuery(this).addClass('checked');
            } else {
                jQuery(this).removeClass('checked');
            }
        });
        
        jQuery('.calculation__wrap .calculation__tab .calculation__radio').click(function() {
            if (jQuery(this).find('input[type=radio]').is(':checked') && !jQuery(this).hasClass('radio_donot_know__cnt')) {
                jQuery(this).closest('.calculation__variants').find('.radio_donot_know__cnt').removeClass('checked');
            }
        });
        
        
        
        /*
        jQuery('.range-slider .irs-hidden-input').change(function() {
            jQuery(this).closest('.range-slider').find('.js-range-slider-value').val(jQuery.number( jQuery(this).val(), 0, '.', ' ' ));
        });
        */
        /*
        jQuery('.range-slider .js-range-slider-value').change(function() {
            var current_value = parseInt(jQuery(this).val());
            jQuery(this).val(jQuery.number( current_value, 0, '.', ' ' ));
            jQuery('.range-slider .irs-hidden-input').val(jQuery.number( current_value, 0, '.', ' ' ));
        });
        */
        
        
        jQuery('#info-calculator').click(function() {
            console.log('start');
            jQuery('.section--modal .modal__overlay').removeClass('hidden');
            jQuery('.modal__wrap--info_calculator').removeClass('hidden');
            jQuery('body').css({"position": "fixed", "top": "-2400px"});
        });
    
    
    if (jQuery('.gutenberg-slider-block').length > 0) {
        /*
        let swiper_article_slider = new Swiper('.gutenberg-slider-block .image-slider-cnt', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: ".swiper-pagination-slider",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next-slider",
                prevEl: ".swiper-button-prev-slider",
            },
        });
        */
        
        var slideNow = 1;
        var slideCount = jQuery('.gutenberg-slider-block').children().length;
        var slideInterval = 3000;
        var navBtnId = 0;
        var translateWidth = 0;
        var switchInterval = setInterval(nextSlide, slideInterval);

        jQuery('.slider-viewport').hover(function() {
            clearInterval(switchInterval);
        }, function() {
            switchInterval = setInterval(nextSlide, slideInterval);
        });
        jQuery('.button-next-slider').click(function() {
            nextSlide();
        });
        jQuery('.button-prev-slider').click(function() {
            prevSlide();
        });

        jQuery('.slider-nav-btn').click(function() {
            navBtnId = $(this).index();
            if (navBtnId + 1 != slideNow) {
                translateWidth = -$('.slider-viewport').width() * (navBtnId);
                $('.slider-slidewrapper').css({
                    'transform': 'translate(' + translateWidth + 'px, 0)',
                    '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                    '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
                });
                slideNow = navBtnId + 1;
            }
        });
    
        function nextSlide() {
            if (slideNow == slideCount || slideNow <= 0 || slideNow > slideCount) {
                $('.slider-slidewrapper').css('transform', 'translate(0, 0)');
                slideNow = 1;
            } else {
                translateWidth = -$('.slider-viewport').width() * (slideNow);
                $('.slider-slidewrapper').css({
                    'transform': 'translate(' + translateWidth + 'px, 0)',
                    '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                    '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
                });
                slideNow++;
            }
        }
        
        function prevSlide() {
            if (slideNow == 1 || slideNow <= 0 || slideNow > slideCount) {
                translateWidth = -$('.slider-viewport').width() * (slideCount - 1);
                $('.slider-slidewrapper').css({
                    'transform': 'translate(' + translateWidth + 'px, 0)',
                    '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                    '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
                });
                slideNow = slideCount;
            } else {
                translateWidth = -$('.slider-viewport').width() * (slideNow - 2);
                $('.slider-slidewrapper').css({
                    'transform': 'translate(' + translateWidth + 'px, 0)',
                    '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                    '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
                });
                slideNow--;
            }
        }
        
    }
    
    
    /* Swiper для страницы похожие новости, статьи */
    let swiper_related = new Swiper('.swiper-video-related', {
      speed: 600,
      centeredSlides: false,
      spaceBetween: 25,
      touchRatio: 1,
      loop: true,
    
      autoplay: {
        delay: 6000,
      },
    
      breakpoints: {
        1500: {
          slidesPerView: 4,
        },
        1200: {
          slidesPerView: 3.5,
        },
        992: {
          slidesPerView: 3,
          spaceBetween: 25,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 15,
        },
        576: {
          slidesPerView: 2,
        },
        400: {
          slidesPerView: 1.5,
        },
        320: {
          slidesPerView: 1.2,
          spaceBetween: 15,
        },
      },
    
      navigation: {
        nextEl: '.swiper-button-next-info',
        prevEl: '.swiper-button-prev-info',
      },
    });
    
    /* Swiper для булетов на баннере страницы "Сервисы" */
    /* false */
    let swiper_top_bulets = new Swiper('#services_top-promo .bulets-cnt', {
      speed: 600,
      centeredSlides: false,
      spaceBetween: 5,
      touchRatio: 1,
      loop: false,
      breakpoints: {
        1500: {
          slidesPerView: 4,
        },
        1200: {
          slidesPerView: 3.5,
        },
        992: {
          slidesPerView: 3,
          spaceBetween: 5,
        },
        768: {
          slidesPerView: 2.5,
          spaceBetween: 5,
        },
        576: {
          slidesPerView: 2,
        },
        400: {
          slidesPerView: 1.8,
        },
        320: {
          slidesPerView: 1.5,
          spaceBetween: 5,
        },
      },
    

    });
    
    var swiper = new Swiper(".mySwiper", {
        pagination: {
          el: ".swiper-pagination",
          dynamicBullets: true,
        },
      });
    /* Swiper для страницы Бестселлер 2022 */
    let book_pages = new Swiper('.book-pages', {
        speed: 600,
        centeredSlides: false,
        spaceBetween: 25,
        touchRatio: 1,
        loop: true,
 
        breakpoints: {
            1500: {
                slidesPerView: 2.4,
            },
            1200: {
                slidesPerView: 2.4,
            },
            992: {
                slidesPerView: 2,
                spaceBetween: 25,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            576: {
                slidesPerView: 2,
            },
            400: {
                slidesPerView: 1.5,
            },
            320: {
                slidesPerView: 1.2,
                spaceBetween: 15,
            },
        },
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
            clickable: true,
        },
    });
    
    /* Swiper для страницы Бестселлер 2022 */
    /*
    let book_addition = new Swiper('body.page-template-bankruptcy-landing .addition_cnt', {
        speed: 600,
        centeredSlides: false,
        spaceBetween: 25,
        touchRatio: 1,
        loop: true,
 
        breakpoints: {
            1500: {
                slidesPerView: 4,
            },
            1200: {
                slidesPerView: 3.5,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 25,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            576: {
                slidesPerView: 2,
            },
            400: {
                slidesPerView: 1.5,
            },
            320: {
                slidesPerView: 1.2,
                spaceBetween: 15,
            },
        },
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
            clickable: true,
        },
    });
    */
    
        jQuery('.modal__wrap--online .test__tab .test__variants .test__radio label').click(function() {
            /*
            if (jQuery(this).hasClass('checkbox__label')) {
                if (!jQuery(this).closest('.calculation__checkbox').hasClass('checked')) {
                    jQuery(this).closest('.calculation__checkbox').addClass('checked');
                } else {
                    jQuery(this).closest('.calculation__checkbox').removeClass('checked');
                }
                var input_name = jQuery(this).parent().children('.checkbox__default').attr('name');
                var input_value = '';
                jQuery(this).closest('.calculation__variants').find('.calculation__checkbox').each(function() {
                    if (jQuery(this).hasClass('checked')) {
                        if (input_value != '') {
                            input_value += ', ';
                        }
                        input_value += jQuery(this).find('label').html();
                    }
                });
                jQuery('.modal__wrap--online .wpcf7-form input[name='+input_name+']').val(input_value);
            }
            */
            if (jQuery(this).hasClass('radio__label')) {
                var input_name = jQuery(this).parent().children('.radio__default').attr('name');
                var input_value = jQuery(this).html();
                jQuery('.modal__wrap--online .wpcf7-form input[name='+input_name+']').val(input_value);
            }
        });
    
        /*
        jQuery('#services_calculation .calculation__tab.place_cnt .calculation__variants label').click(function() {
            var current_form = 'frontpage ';
            var current_val = jQuery(this).html();
            var find_str = "Санкт-Петербург"
            if (current_val) {
                if (!current_val.includes(find_str)) {
                    console.log('redirect');
                    window.location.href = 'https://fpa.ru/spasibo-region/?form='+current_form;
                }
            }
        });
        */
    
        jQuery('.btn--expert--show').click(function() {
            jQuery(this).addClass('load');
            var key_count = jQuery(this).closest('.article__cnt').attr('data-count-items');
            console.log(key_count);
            jQuery(this).closest('.article__cnt').find('article.hidden').each(function(indx) {
                if (indx < key_count) {
                    jQuery(this).removeClass('hidden');
                }
            });
            jQuery(this).removeClass('load');
            if (!jQuery(this).closest('.article__cnt').find('article.hidden').length) {
                jQuery(this).addClass('hidden');
            }
        });
    
        jQuery('#services_calculation .calculation__tab .calculation__variants label').click(function() {
            if (jQuery(this).hasClass('checkbox__label')) {
                if (!jQuery(this).closest('.calculation__checkbox').hasClass('checked')) {
                    jQuery(this).closest('.calculation__checkbox').addClass('checked');
                } else {
                    jQuery(this).closest('.calculation__checkbox').removeClass('checked');
                }
                var input_name = jQuery(this).parent().children('.checkbox__default').attr('name');
                var input_value = '';
                jQuery(this).closest('.calculation__variants').find('.calculation__checkbox').each(function() {
                    if (jQuery(this).hasClass('checked')) {
                        if (input_value != '') {
                            input_value += '; ';
                        }
                        input_value += jQuery(this).find('label').html();
                    }
                });
                jQuery('.modal__wrap--calculation input[name='+input_name+']').val(input_value);
            }
            if (jQuery(this).hasClass('radio__label')) {
                var input_name = jQuery(this).parent().children('.radio__default').attr('name');
                var input_value = jQuery(this).html();
                jQuery('.modal__wrap--calculation input[name='+input_name+']').val(input_value);
            }
        });    
    
    
        jQuery('#calculation--inpost__v2 .calculation__tab  .calculation__variants label').click(function() {
            if (jQuery(this).hasClass('checkbox__label')) {
                if (!jQuery(this).closest('.calculation__checkbox').hasClass('checked')) {
                    jQuery(this).closest('.calculation__checkbox').addClass('checked');
                } else {
                    jQuery(this).closest('.calculation__checkbox').removeClass('checked');
                }
                var input_name = jQuery(this).parent().children('.checkbox__default').attr('name');
                var input_value = '';
                jQuery(this).closest('.calculation__variants').find('.calculation__checkbox').each(function() {
                    if (jQuery(this).hasClass('checked')) {
                        if (input_value != '') {
                            input_value += '; ';
                        }
                        input_value += jQuery(this).find('label').html();
                    }
                });
                jQuery('.modal__wrap--calculation input[name='+input_name+']').val(input_value);
            }
            if (jQuery(this).hasClass('radio__label')) {
                var input_name = jQuery(this).parent().children('.radio__default').attr('name');
                var input_value = jQuery(this).html();
                jQuery('.modal__wrap--calculation input[name='+input_name+']').val(input_value);
            }
        });

        if (!sessionStorage.getItem('startTime')) {
          sessionStorage.setItem('startTime', Date.now());
        }

        const enterTime = sessionStorage.getItem('startTime')

        const showPopup = () => {
          let currentTime = Date.now()
          let spentTime = (currentTime - enterTime) / 1000
          if (spentTime >= 60) {
            /*clearInterval(timer)*/
            jQuery('input.crm_session_time').val(Math.floor(spentTime / 60) + ' минут ' + Math.floor(spentTime % 60) + ' секунд');
          }
        }

        const timer = setInterval(showPopup, 300)
    
        /*
        setInterval(crm_session_time_fnc(),100);
        function crm_session_time_fnc(){
            var current_session_time = localStorage.UBT_LastUserActivityTimeFlag - localStorage.UBT_LastActiveTimeFlag;
            if (current_session_time > 59) {
                var tmp_current_session_time = current_session_time / 60;
                var int_current_session_time = parseInt(tmp_current_session_time);
                var fract_current_session_time = tmp_current_session_time - int_current_session_time;
                jQuery('input.crm_session_time').val(int_current_session_time + ' минут ' + fract_current_session_time + ' секунд');
            } else {
                jQuery('input.crm_session_time').val(current_session_time + ' секунд');
            }
        }
        */
        
        
        jQuery('.calculation-v2 label.question_place').click(function() {
            if (!jQuery('body').hasClass('page-template-aim3free') && !jQuery('body').hasClass('page-template-mfc-new') && !jQuery('body').hasClass('single') && !jQuery('body').hasClass('page-template-mfc-new-v2') && !jQuery('body').hasClass('page-template-bankruptcy') && !jQuery('body').hasClass('page-template-bankruptcy-v2') && !jQuery('body').hasClass('page-template-mfc') && !jQuery('body').hasClass('page-template-mfc-finiko') && !jQuery('body').hasClass('page-template-bankruptcy2cost') && !jQuery('body').hasClass('page-template-bankruptcy3cost') && !jQuery('body').hasClass('page-template-bankruptcy4cost') && !jQuery('body').hasClass('page-template-bankruptcy5cost') && !jQuery('body').hasClass('page-template-bankruptcy6cost') && !jQuery('body').hasClass('page-template-bankruptcy7cost') && !jQuery(this).closest('.popup-item__cnt').hasClass('calculator__cnt')) {
                if (jQuery(this).attr('data-value') != 'spb') {
                    window.location.href = 'https://fpa.ru/spasibo-region/?form=article';
                } 
            }
        });
        
        
        jQuery('.modal__wrap .test__block.region__container .radio__default').change(function() {
            var current_form_class = jQuery(this).closest('.modal__wrap').attr('class');
            if (current_form_class.includes('sale')) {
                var current_form = 'sale';
            }
            if (current_form_class.includes('free')) {
                var current_form = 'free';
            }
            if (current_form_class.includes('benefits')) {
                var current_form = 'benefits ';
            }
            if (current_form_class.includes('modal__wrap--test')) {
                var current_form = 'calculator ';
            }
            
            
            
            var current_val = jQuery(this).val();
            var find_str = "Санкт-Петербург"
            /*
            if (current_val) {
                if (!current_val.includes(find_str)) {
                    //console.log('redirect');
                    window.location.href = 'https://fpa.ru/spasibo-region/?form='+current_form;
                }
            }
            */
        });
        
        jQuery('.modal__wrap .test__tab.region__container .test__radio.radio').click(function() {
            var current_form_class = jQuery(this).closest('.modal__wrap').attr('class');
            if (current_form_class.includes('modal__wrap--online')) {
                var current_form = 'calculator ';
            }
            
            var current_val = jQuery(this).find('input.radio__default').val();
            var find_str = "Санкт-Петербург"
            /*
            if (current_val) {
                if (!current_val.includes(find_str)) {
                    //console.log('redirect');
                    window.location.href = 'https://fpa.ru/spasibo-region/?form='+current_form;
                }
            }
            */
        });
        
        
        
        
        var checkElemPopupTrigger = false;
        /*
        const checkElemPopupAction = () => {
            jQuery('.modal__wrap--answer .calc-modal__check').addClass('hidden');
            jQuery('.modal__wrap--answer .calc-modal__loader').removeClass('hidden');
        }
        */
        const checkElemPopup = () => {
            if (!jQuery('.modal__wrap--answer').hasClass('hidden')) {
                if (!checkElemPopupTrigger) {
                    checkElemPopupTrigger = true;
                    setTimeout(() => {jQuery('.modal__wrap--answer .calc-modal__check').removeClass('hidden');jQuery('.modal__wrap--answer .calc-modal__loader').addClass('hidden');}, 8000);
                }
            }
        }
        setInterval(checkElemPopup, 10)
        
        
        
        
        
        
        
        jQuery('.btn--services-warning.help__btn-warning').click(function() {
            jQuery('.section--modal .modal__overlay').removeClass('hidden');
            jQuery('.section--modal .modal__wrap.modal__wrap--warning').removeClass('hidden');
            jQuery('.section--modal .modal__overlay').addClass('orange');
            jQuery('body').css({"position": "fixed", "top": "-2400px"});
            jQuery('.modal__wrap--warning form.modal__form input[name="form-name"]').val('SMS-33 Бесплатное банкротство в связи с напряжённой экономической ситуацией');
            jQuery('.modal__wrap--warning form.modal__form input[name="form-sms"]').val('36');
            jQuery('.modal__wrap--warning form.modal__form input[name="days-left"]').val(jQuery('.timer__time.days').html());
        });
        
        
        if (jQuery('body').hasClass('page-template-youfree3bankruptcy4')) {
            jQuery('.info-symbol').click(function() {
                jQuery('.fixed-modal--rbk-info-popup').removeClass('hidden');
                jQuery('body').addClass('fixed-popup-bg');    
            });
            jQuery('.fixed-modal--rbk-info-popup .close').click(function() {
                jQuery('body').removeClass('fixed-popup-bg');    
                jQuery('.fixed-modal--rbk-info-popup').addClass('hidden');
            });
        }
        
        
        
        
        
        jQuery('.btn--services-warning.help__btn-warning').click(function() {
            jQuery('.section--modal .modal__overlay').removeClass('hidden');
            jQuery('.section--modal .modal__wrap.modal__wrap--warning').removeClass('hidden');
            jQuery('.section--modal .modal__overlay').addClass('orange');
            jQuery('body').css({"position": "fixed", "top": "-2400px"});
            jQuery('.modal__wrap--warning form.modal__form input[name="form-name"]').val('SMS-33 Бесплатное банкротство в связи с напряжённой экономической ситуацией');
            jQuery('.modal__wrap--warning form.modal__form input[name="form-sms"]').val('36');
            jQuery('.modal__wrap--warning form.modal__form input[name="days-left"]').val(jQuery('.timer__time.days').html());
        });
        
        jQuery('body.page-template-bankruptcy-v2 .mfc-btn-free-v2').click(function() {
            jQuery('.section--modal .modal__overlay').removeClass('hidden');
            jQuery('.modal__wrap--free_v2').removeClass('hidden');
            jQuery('body').css({"position": "fixed", "top": "-2400px"});
            /*
            jQuery('.modal__wrap--warning form.modal__form input[name="form-name"]').val('SMS-33 Бесплатное банкротство в связи с напряжённой экономической ситуацией');
            jQuery('.modal__wrap--warning form.modal__form input[name="form-sms"]').val('36');
            jQuery('.modal__wrap--warning form.modal__form input[name="days-left"]').val(jQuery('.timer__time.days').html());
            */
        });
        
        jQuery('body.single-info .form-aside--single a').click(function() {
            jQuery('.section--modal .modal__overlay').removeClass('hidden');
            jQuery('.modal__wrap--info_calculator').removeClass('hidden');
            jQuery('body').css({"position": "fixed", "top": "-2400px"});
            /*
            jQuery('.modal__wrap--warning form.modal__form input[name="form-name"]').val('SMS-33 Бесплатное банкротство в связи с напряжённой экономической ситуацией');
            jQuery('.modal__wrap--warning form.modal__form input[name="form-sms"]').val('36');
            jQuery('.modal__wrap--warning form.modal__form input[name="days-left"]').val(jQuery('.timer__time.days').html());
            */
        });
        
        jQuery('body.single-info .form-aside--single-collector a').click(function() {
            jQuery('.modal__wrap--answer form input[name="form-name"]').val('SMS-77 Защита от коллекторов');
            jQuery('.modal__wrap--answer form input[name="form-sms"]').val('80');
            jQuery('.section--modal .modal__overlay').removeClass('hidden');
            jQuery('.modal__wrap--info_collector').removeClass('hidden');
            jQuery('body').css({"position": "fixed", "top": "-2400px"});
        });
        
        jQuery('body.single-info .collector-fixed-block .button a').click(function() {
            jQuery('.modal__wrap--answer form input[name="form-name"]').val('SMS-77 Защита от коллекторов');
            jQuery('.modal__wrap--answer form input[name="form-sms"]').val('80');
            jQuery('.section--modal .modal__overlay').removeClass('hidden');
            jQuery('.modal__wrap--info_collector').removeClass('hidden');
            jQuery('body').css({"position": "fixed", "top": "-2400px"});
        });
        
        
        jQuery('body.page-template-bankruptcy-v2 .mfc-btn-sale-v2').click(function() {
            jQuery('.section--modal .modal__overlay').removeClass('hidden');
            jQuery('.modal__wrap--sale-v2').removeClass('hidden');
            jQuery('body').css({"position": "fixed", "top": "-2400px"});
        });
        
        jQuery('body.page-template-bankruptcy-v2 .mfc-btn-benefits-v2').click(function() {
            jQuery('.section--modal .modal__overlay').removeClass('hidden');
            jQuery('.modal__wrap--benefits-v2').removeClass('hidden');
            jQuery('body').css({"position": "fixed", "top": "-2400px"});
        });
        
        jQuery('.modal__wrap .test__block.messenger__container .radio__default').change(function() {
            console.log(jQuery(this).val());
            var current_value = jQuery(this).val();
            if (current_value == 'SMS') {
            jQuery('.modal__wrap.modal__wrap--answer h3').html('Ответ придёт в СМС-сообщении в течение 90 секунд');
            } else {
                if (current_value == 'Facebook_Messenger') {
                    jQuery('.modal__wrap.modal__wrap--answer h3').html('Ответ будет направлен вам  в мессенджер: Facebook Messenger <span class="' + current_value + '"></span>');    
                } else {
                    jQuery('.modal__wrap.modal__wrap--answer h3').html('Ответ будет направлен вам  в мессенджер: ' + current_value + '<span class="' + current_value + '"></span>');        
                }    
            }
        });
        
        jQuery('.modal__wrap input[type=tel]').change(function() {
            var current_tel = jQuery(this).val();
            localStorage.customer_phone = current_tel;
        });
        
        jQuery('.modal__wrap--warning form.modal__form input[type=tel]').change(function() {
            var current_tel = jQuery(this).val();
            localStorage.customer_phone = current_tel;
        });
        
        if (localStorage.customer_phone != '') {
            jQuery('body.page-template-thanks-warning span.title-page span.top__title--accent').html(localStorage.customer_phone);
        }
        
        setInterval(function(){if (jQuery(".section--modal .modal__overlay").hasClass('hidden')) {jQuery('.section--modal .modal__overlay').removeClass('orange');}}, 1000);
        
        /*
        setInterval(
            function(){
                var scroll_y = jQuery('html').css('--scroll-y').replace('px', '');
                if (scroll_y < 150) {
                    var current_y = 210 - scroll_y;
                    jQuery('header.header .header__control').css({'top': current_y + 'px'});
                } else {
                    jQuery('header.header .header__control').css({'top': '33px'});
                }
            }, 10);
        */
        /*
        if (jQuery('body').hasClass('page-template-chat')) {
            var urist__cnt_0_top = jQuery('body.page-template-chat .chat__cnt .question_item__cnt .urist__cnt_0').position().top;
        }
        */
        
        


        
        jQuery('.popup-item__cnt.aimfree__thanks .close').click(function() {
            jQuery(this).closest('.popup-item__cnt').addClass('hidden');
            jQuery(this).closest('.popup__cnt').addClass('hidden');
        });
        
        jQuery('.table-of-contents-cnt ol li a').click(function() {
            jQuery('.table-of-contents-cnt ol li').removeClass('active');
            jQuery(this).closest('li').addClass('active');
        });
        
        jQuery('.table-of-contents-tablet-cnt ol li a').click(function() {
            jQuery('.table-of-contents-tablet-cnt ol li').removeClass('active');
            jQuery(this).closest('li').addClass('active');
        });
        
        jQuery('.table-of-contents-mobile ol li a').click(function() {
            jQuery('.table-of-contents-mobile ol li').removeClass('active');
            jQuery(this).closest('li').addClass('active');
            if (jQuery('.table-of-contents-mobile .list-docs').hasClass('hidden')) {
                jQuery('.table-of-contents-mobile .close').addClass('hidden');
                jQuery('.table-of-contents-mobile .list-docs').removeClass('hidden');
                jQuery('.table-of-contents-mobile .table-of-contents-mobile-cnt').removeClass('viewed');
                jQuery('body').removeClass('table-of-contents-mobile-viewed');
            } else {
                jQuery('.table-of-contents-mobile .list-docs').addClass('hidden');
                jQuery('.table-of-contents-mobile .close').removeClass('hidden');
                jQuery('.table-of-contents-mobile .table-of-contents-mobile-cnt').addClass('viewed');
                jQuery('body').addClass('table-of-contents-mobile-viewed');
            }
        });
        
        
        
        if (jQuery('body').hasClass('page-template-bankruptcy4cost')) {
            function chatButtonPaint() {
                var current_scrollTop = jQuery(window).scrollTop();
                var current_window_height = jQuery(window).height();
                var current_chat_scrollTop = jQuery('.chat_button .icon div').offset().top;
                var current_chat_height = jQuery('.chat_button .icon div').height();
                var current_scheme_red_scrollTop = jQuery('.bankruptcy2cost.color_scheme_red').offset().top;
                var current_scheme_red_height = jQuery('.bankruptcy2cost.color_scheme_red').height();
                var current_scheme_green_scrollTop = jQuery('.bankruptcy2cost.color_scheme_green').offset().top;
                var current_scheme_green_height = jQuery('.bankruptcy2cost.color_scheme_green').height();
                var current_scheme_purple_scrollTop = jQuery('.bankruptcy2cost.color_scheme_purple').offset().top;
                var current_scheme_purple_height = jQuery('.bankruptcy2cost.color_scheme_purple').height();
                var current_scroll_level = current_scrollTop + current_window_height - 20;
                if (current_scroll_level < current_scheme_red_scrollTop) {
                    jQuery('.chat_button .icon div').css({'background': 'linear-gradient(to top, #5381F6 100%, #5381F6 0px)'});
                }
                if (current_scroll_level > current_scheme_red_scrollTop && current_scroll_level < current_scheme_green_scrollTop) {
                    var current_color_persent = current_scroll_level - current_scheme_red_scrollTop;
                    jQuery('.chat_button .icon div').css({'background': 'linear-gradient(to top, #FB5A80 ' + current_color_persent + 'px, #5381F6 ' + current_chat_height + 'px'});
                }
                if (current_scroll_level > current_scheme_green_scrollTop && current_scroll_level < current_scheme_purple_scrollTop) {
                    var current_color_persent = current_scroll_level - current_scheme_green_scrollTop;
                    jQuery('.chat_button .icon div').css({'background': 'linear-gradient(to top, #17CC5F ' + current_color_persent + 'px, #FB5A80 ' + current_chat_height + 'px'});
                }
                if (current_scroll_level > current_scheme_purple_scrollTop) {
                    var current_color_persent = current_scroll_level - current_scheme_purple_scrollTop;
                    jQuery('.chat_button .icon div').css({'background': 'linear-gradient(to top, #7A55D9 ' + current_color_persent + 'px, #17CC5F ' + current_chat_height + 'px'});
                }
            }
            function chatButtonRightPos() {
                var content_width = jQuery('.bankruptcy2cost_container').width();
                var window_width = jQuery(window).width();
                if (window_width >= 768) {
                    var current_chat_right_pos = ( (window_width - content_width) / 4 ) - 50;
                } else {
                    var current_chat_right_pos = ( (window_width - content_width) / 4 ) - 40;
                }
                if (current_chat_right_pos > 20) {
                    jQuery('.chat_button').css({'right': current_chat_right_pos + 'px'});
                } else {
                    jQuery('.chat_button').css({'right': '20px'});
                }
            }
        }
        
        if (jQuery('body').hasClass('page-template-bankruptcy4cost')) {
            chatButtonPaint();
            chatButtonRightPos();
            jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .description__cnt p').addClass('hidden');
        }
        
        jQuery(window).on('resize', function(){
            if (jQuery('body').hasClass('page-template-instruction_pamytka_docs')) {
                var scroll_pos = jQuery(document).scrollTop();
                var elem_main_top_pos = jQuery('main').offset().top + 9;
                var elem_header_fixed_height = jQuery('header.header .header__bottom').height() + 1;
                // Планшет
                if (scroll_pos < (elem_main_top_pos - elem_header_fixed_height)) {
                    var current_top_pos = elem_main_top_pos - scroll_pos;
                    jQuery('.table-of-contents-tablet .table-of-contents-tablet-cnt').css('top', current_top_pos);
                } else {
                    jQuery('.table-of-contents-tablet .table-of-contents-tablet-cnt').css('top', elem_header_fixed_height);
                }
                
                // Десктоп
                var window_width = jQuery(window).width();
                if (window_width > 1600) {
                    jQuery('.table-of-contents').removeClass('hidden');
                    jQuery('.table-of-contents-tablet').addClass('hidden');
                    jQuery('.table-of-contents-mobile').addClass('hidden');
                } else {
                     if (window_width > 768 && window_width < 1600) {
                        jQuery('.table-of-contents').addClass('hidden');
                        jQuery('.table-of-contents-tablet').removeClass('hidden');
                        jQuery('.table-of-contents-mobile').addClass('hidden');
                    } else {
                        jQuery('.table-of-contents').addClass('hidden');
                        jQuery('.table-of-contents-tablet').addClass('hidden');
                        jQuery('.table-of-contents-mobile').removeClass('hidden');
                    }
                }
            }
            
            
            if (jQuery('body').hasClass('page-template-bankrotstvo')) {
                var scrollTop = jQuery(window).scrollTop();
                var elementOffset = jQuery('section.bankrotstvo-section-content').offset().top;
                var element_height = jQuery('section.bankrotstvo-section-content').height();
                var container_width = jQuery('section.bankrotstvo-section-content .container').width();
                var content_block_width = jQuery('section.bankrotstvo-section-content .content-block').width();
                var window_width = jQuery(window).width();
                var window_height = jQuery(window).height();
                var stopPoint = elementOffset + element_height - window_height + 0;
                var right = (window_width - container_width) / 2;
                var sidebar_width = (container_width - content_block_width) - 20;
                var distance = (scrollTop - elementOffset);
                if (scrollTop < stopPoint ) {
                    if (distance > 0) {
                        distance += 60;
                        jQuery('.right-sidebar').css("display", "block");
                        jQuery('.right-sidebar').css("position", "absolute");
                        jQuery('.right-sidebar').css("top", distance);
                        jQuery('.right-sidebar').css("right", right);
                        jQuery('.right-sidebar').css("width", sidebar_width);
                    } else {
                        jQuery('.right-sidebar').css("display", "block");
                        jQuery('.right-sidebar').css("position", "absolute");
                        jQuery('.right-sidebar').css("top", "0");
                        jQuery('.right-sidebar').css("right", right);
                        jQuery('.right-sidebar').css("width", sidebar_width);
                    }
                }
            }
            
            
            
            if (jQuery('body').hasClass('page-template-bankruptcy4cost')) {
                chatButtonRightPos();
            }
            if (jQuery('body').hasClass('page-template-stoimost')) {
    	        if (jQuery(window).width() < 992) {
    	            /*
    	            let swiper_stoimost_price = new Swiper('#services_price .swiper-stoimost-price', {        
                        speed: 600,
                        centeredSlides: false,
                        spaceBetween: 10,
                        touchRatio: 1,
                        slidesPerView: 1.2,
                        loop: true,
                        autoplay: {
                            delay: 5000,
                        },
                        breakpoints: {
                            768: {
                                slidesPerView: 1.2,
                            },
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                            renderBullet: function (index, className) {
                                return '<span class="' + className + '">' + (index + 1) + '</span>';
                            },
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                        effect: 'fade',
                        fadeEffect: {
                            crossFade: true,
                        },
    	            });
    	            */
                    let swiper_stoimost_price = new Swiper('#services_price .swiper-stoimost-price', {
                        initialSlide: 1,
                        slidesPerView: 1.2,
                        speed: 600,
                        centeredSlides: false,
                        spaceBetween: 10,
                        touchRatio: 1,
                    });
                    jQuery('.swiper-stoimost-price').removeClass('hidden');
                    jQuery('.price__lst').addClass('hidden');
                    
                    let swiper_payments_list = new Swiper('#payments__lst-mobile', {
                        initialSlide: 1,
                        slidesPerView: 1.2,
                        speed: 600,
                        centeredSlides: false,
                        spaceBetween: 10,
                        touchRatio: 1,
                    });
                    jQuery('#payments__lst-mobile').removeClass('hidden');
                    jQuery('#payments__lst-desktop').addClass('hidden');
                } else {
                    jQuery('.swiper-stoimost-price').addClass('hidden');
                    jQuery('.price__lst').removeClass('hidden');
                    jQuery('#payments__lst-mobile').addClass('hidden');
                    jQuery('#payments__lst-desktop').removeClass('hidden');
                }
    	    }
        });
        
        jQuery('.table-of-contents-tablet .icon').click(function() {
            jQuery('.table-of-contents-tablet .table-of-contents-tablet-cnt').addClass('viewed');
            jQuery('body').addClass('content-margin-300');
        });
        
        jQuery('.table-of-contents-tablet-cnt button.back').click(function() {
            jQuery('.table-of-contents-tablet .table-of-contents-tablet-cnt').removeClass('viewed');
            jQuery('body').removeClass('content-margin-300');
        });
        
        jQuery('.table-of-contents-mobile .text').click(function() {
            if (jQuery(this).find('.list-docs').hasClass('hidden')) {
                jQuery(this).find('.close').addClass('hidden');
                jQuery(this).find('.list-docs').removeClass('hidden');
                jQuery('.table-of-contents-mobile .table-of-contents-mobile-cnt').removeClass('viewed');
                jQuery('body').removeClass('table-of-contents-mobile-viewed');
            } else {
                jQuery(this).find('.list-docs').addClass('hidden');
                jQuery(this).find('.close').removeClass('hidden');
                jQuery('.table-of-contents-mobile .table-of-contents-mobile-cnt').addClass('viewed');
                jQuery('body').addClass('table-of-contents-mobile-viewed');
            }
        });
        
        
        
        if (jQuery('body').hasClass('page-template-instruction_pamytka_docs')) {
            
            var scroll_pos = jQuery(document).scrollTop();
            var elem_main_top_pos = jQuery('main').offset().top + 9;
            var elem_header_fixed_height = jQuery('header.header .header__bottom').height() + 1;
            // Планшет
            if (scroll_pos < (elem_main_top_pos - elem_header_fixed_height)) {
                var current_top_pos = elem_main_top_pos - scroll_pos;
                jQuery('.table-of-contents-tablet .table-of-contents-tablet-cnt').css('top', current_top_pos);
            } else {
                jQuery('.table-of-contents-tablet .table-of-contents-tablet-cnt').css('top', elem_header_fixed_height);
            }
            // Десктоп
            var elem_pamytka_item_2_top_pos = jQuery('#pamytka-item-1').offset().top + 40;
            /*
            jQuery('.table-of-contents').css('top', elem_pamytka_item_2_top_pos+'px');
            jQuery('.table-of-contents-tablet').css('top', elem_pamytka_item_2_top_pos+'px');
            */
            var elem_pamytka_item_17_top_pos = jQuery('#pamytka-item-17').offset().top - 40;
            if ((scroll_pos > elem_pamytka_item_2_top_pos) && (scroll_pos < elem_pamytka_item_17_top_pos)) {
                jQuery('.table-of-contents').removeClass('absolute').addClass('fixed');
                jQuery('.table-of-contents-tablet').removeClass('absolute').addClass('fixed');
            } else {
                jQuery('.table-of-contents').removeClass('fixed').addClass('absolute');
                jQuery('.table-of-contents-tablet').removeClass('fixed').addClass('absolute');
                if (scroll_pos < elem_pamytka_item_2_top_pos) {
                    jQuery('.table-of-contents').css('top', elem_pamytka_item_2_top_pos);
                    jQuery('.table-of-contents-cnt').css('top', elem_pamytka_item_2_top_pos);
                }
                if (scroll_pos > elem_pamytka_item_17_top_pos) {
                    jQuery('.table-of-contents').css('top', elem_pamytka_item_17_top_pos);
                    jQuery('.table-of-contents-cnt').css('top', elem_pamytka_item_17_top_pos);
                }
            }
            /* --- */
            
            var window_width = jQuery(window).width();
            if (window_width > 1600) {
                jQuery('.table-of-contents').removeClass('hidden');
                jQuery('.table-of-contents-tablet').addClass('hidden');
                jQuery('.table-of-contents-mobile').addClass('hidden');
            } else {
                if (window_width > 768 && window_width < 1600) {
                    jQuery('.table-of-contents').addClass('hidden');
                    jQuery('.table-of-contents-tablet').removeClass('hidden');
                    jQuery('.table-of-contents-mobile').addClass('hidden');
                } else {
                    jQuery('.table-of-contents').addClass('hidden');
                    jQuery('.table-of-contents-tablet').addClass('hidden');
                    jQuery('.table-of-contents-mobile').removeClass('hidden');
                }
            }

            // Функция проверки показан ли элемент в зоне видимости
            var Visible = function (target) {
                // 1/2 высоты экрана
                var clientHeight = document.documentElement.clientHeight / 2;
                // Все позиции элемента
                var targetPosition = {
                    top: window.pageYOffset + target.getBoundingClientRect().top,
                    left: window.pageXOffset + target.getBoundingClientRect().left,
                    right: window.pageXOffset + target.getBoundingClientRect().right,
                    bottom: window.pageYOffset + target.getBoundingClientRect().bottom
                },
                // Получаем позиции окна
                windowPosition = {
                    top: window.pageYOffset,
                    left: window.pageXOffset,
                    right: window.pageXOffset + document.documentElement.clientWidth,
                    bottom: window.pageYOffset + document.documentElement.clientHeight
                };
                if (targetPosition.bottom > windowPosition.top && // Если позиция нижней части элемента больше позиции верхней чайти окна, то элемент виден сверху
                targetPosition.top < windowPosition.bottom - clientHeight && // Если позиция верхней части элемента меньше позиции нижней чайти окна, то элемент виден снизу
                targetPosition.right > windowPosition.left && // Если позиция правой стороны элемента больше позиции левой части окна, то элемент виден слева
                targetPosition.left < windowPosition.right) { // Если позиция левой стороны элемента меньше позиции правой чайти окна, то элемент виден справа
                    // Если элемент полностью видно, то запускаем следующий код
                    var current_item_id = target.getAttribute('data-item-id');
                    jQuery('.table-of-contents-cnt ol li').removeClass('active');
                    jQuery('.table-of-contents-cnt ol li[data-item-id='+current_item_id+']').addClass('active');
                    jQuery('.table-of-contents-tablet-cnt ol li').removeClass('active');
                    jQuery('.table-of-contents-tablet-cnt ol li[data-item-id='+current_item_id+']').addClass('active');
                }
            };
        }
        
        jQuery(window).scroll(function(){
            var buttonScrollTop = jQuery(window).scrollTop();
            var buttonPageWidth = jQuery(window).width();
            if (buttonPageWidth < 768) {
                if (buttonScrollTop > 400) {
                    jQuery('body').addClass('scrolled');
                } else {
                    jQuery('body').removeClass('scrolled');
                }    
            }
            
            
            if (jQuery('body').hasClass('page-template-instruction_pamytka_docs')) {
                var scroll_pos = jQuery(document).scrollTop();
                var elem_main_top_pos = jQuery('main').offset().top + 9;
                var elem_header_fixed_height = jQuery('header.header .header__bottom').height() + 1;
                // Планшет
                if (scroll_pos < (elem_main_top_pos - elem_header_fixed_height)) {
                    var current_top_pos = elem_main_top_pos - scroll_pos;
                    jQuery('.table-of-contents-tablet .table-of-contents-tablet-cnt').css('top', current_top_pos);
                } else {
                    jQuery('.table-of-contents-tablet .table-of-contents-tablet-cnt').css('top', elem_header_fixed_height);
                }
                
                
                
                // Десктоп
                var elem_pamytka_item_2_top_pos = jQuery('#pamytka-item-1').offset().top + 40;
                var elem_pamytka_item_17_top_pos = jQuery('#pamytka-item-17').offset().top - 40;
                if ((scroll_pos > elem_pamytka_item_2_top_pos) && (scroll_pos < elem_pamytka_item_17_top_pos)) {
                    jQuery('.table-of-contents').removeClass('absolute').addClass('fixed');
                    jQuery('.table-of-contents-tablet').removeClass('absolute').addClass('fixed');
                } else {
                    jQuery('.table-of-contents').removeClass('fixed').addClass('absolute');
                    jQuery('.table-of-contents-tablet').removeClass('fixed').addClass('absolute');
                    if (scroll_pos < elem_pamytka_item_2_top_pos) {
                        jQuery('.table-of-contents').css('top', elem_pamytka_item_2_top_pos);
                        jQuery('.table-of-contents-tablet').css('top', elem_pamytka_item_2_top_pos);
                    }
                    if (scroll_pos > elem_pamytka_item_17_top_pos) {
                        jQuery('.table-of-contents').css('top', elem_pamytka_item_17_top_pos);
                        jQuery('.table-of-contents-tablet').css('top', elem_pamytka_item_17_top_pos);
                    }
                }
                
                
                
                var pamytka_item_2 = document.querySelector('#pamytka-item-1');
                var pamytka_item_3 = document.querySelector('#pamytka-item-3');
                var pamytka_item_4 = document.querySelector('#pamytka-item-4');
                var pamytka_item_5 = document.querySelector('#pamytka-item-5');
                var pamytka_item_6 = document.querySelector('#pamytka-item-6');
                var pamytka_item_7 = document.querySelector('#pamytka-item-7');
                var pamytka_item_8 = document.querySelector('#pamytka-item-8');
                var pamytka_item_9 = document.querySelector('#pamytka-item-9');
                var pamytka_item_10 = document.querySelector('#pamytka-item-10');
                var pamytka_item_11 = document.querySelector('#pamytka-item-11');
                var pamytka_item_12 = document.querySelector('#pamytka-item-12');
                var pamytka_item_13 = document.querySelector('#pamytka-item-13');
                var pamytka_item_14 = document.querySelector('#pamytka-item-14');
                var pamytka_item_15 = document.querySelector('#pamytka-item-15');
                var pamytka_item_16 = document.querySelector('#pamytka-item-16');
                var pamytka_item_17 = document.querySelector('#pamytka-item-17');
                Visible(pamytka_item_2);
                Visible(pamytka_item_3);
                Visible(pamytka_item_4);
                Visible(pamytka_item_5);
                Visible(pamytka_item_6);
                Visible(pamytka_item_7);
                Visible(pamytka_item_8);
                Visible(pamytka_item_9);
                Visible(pamytka_item_10);
                Visible(pamytka_item_11);
                Visible(pamytka_item_12);
                Visible(pamytka_item_13);
                Visible(pamytka_item_14);
                Visible(pamytka_item_15);
                Visible(pamytka_item_16);
                Visible(pamytka_item_17);
                
                
            }
            
            var scrollTop = jQuery(window).scrollTop();
            if (scrollTop > 400) {
                jQuery('.calculator-navbar').removeClass('hidden-block');
            } else {
                jQuery('.calculator-navbar').addClass('hidden-block');
            }
            
            
            if (jQuery('body').hasClass('page-template-services')) {
                var scrollTop = jQuery(window).scrollTop();
                if (scrollTop > 400) {
                    jQuery('body.page-template-services .calculator-navbar').removeClass('hidden-block');
                } else {
                    jQuery('body.page-template-services .calculator-navbar').addClass('hidden-block');
                }
            }
            if (jQuery('body').hasClass('page-template-bankruptcy-landing')) {
                var window_width = jQuery(window).width();
                var window_height = jQuery(window).height();
                var scrollTop = jQuery(window).scrollTop();
                var elementOffset = jQuery('body.page-template-bankruptcy-landing #all-buttons-cnt').offset().top;
                var elementHeight = jQuery('body.page-template-bankruptcy-landing #all-buttons-cnt').height();
                var scrollTopLimit = elementOffset - window_height + elementHeight + 60;
                if (window_width < 540) {
                    if (scrollTop > scrollTopLimit) {
                        jQuery('body.page-template-bankruptcy-landing button.all-buttons').removeClass('hidden');
                    } else {
                        jQuery('body.page-template-bankruptcy-landing button.all-buttons').addClass('hidden');
                    }    
                }
            }
            
            if (jQuery('body').hasClass('page-template-bankrotstvo')) {
                var scrollTop = jQuery(window).scrollTop();
                var elementOffset = jQuery('section.bankrotstvo-section-content').offset().top;
                var element_height = jQuery('section.bankrotstvo-section-content').height();
                var container_width = jQuery('section.bankrotstvo-section-content .container').width();
                var content_block_width = jQuery('section.bankrotstvo-section-content .content-block').width();
                var window_width = jQuery(window).width();
                var window_height = jQuery(window).height();
                var stopPoint = elementOffset + element_height - window_height + 0;
                var right = (window_width - container_width) / 2;
                var sidebar_width = (container_width - content_block_width) - 20;
                var distance = (scrollTop - elementOffset);
                
                console.log("container_width: " + container_width);
                console.log("content_block_width: " + content_block_width);
                console.log("sidebar_width: " + sidebar_width);
                
                
                
                if (scrollTop < stopPoint ) {
                    if (distance > 0) {
                        distance += 60;
                        jQuery('.right-sidebar').css("display", "block");
                        jQuery('.right-sidebar').css("position", "absolute");
                        jQuery('.right-sidebar').css("top", distance);
                        jQuery('.right-sidebar').css("right", right);
                        jQuery('.right-sidebar').css("width", sidebar_width);
                    } else {
                        jQuery('.right-sidebar').css("display", "block");
                        jQuery('.right-sidebar').css("position", "absolute");
                        jQuery('.right-sidebar').css("top", "0");
                        jQuery('.right-sidebar').css("right", right);
                        jQuery('.right-sidebar').css("width", sidebar_width);
                    }    
                }
            }
            
            if (jQuery('body').hasClass('page-template-bankruptcy4cost')) {
                chatButtonPaint();
            }
            /*
            var scroll_y = jQuery('html').css('--scroll-y').replace('px', '');
            if (scroll_y < 150) {
                var current_y = 210 - scroll_y;
                jQuery('header.header .header__control').css({'top': current_y + 'px'});
            } else {
                jQuery('header.header .header__control').css({'top': '33px'});
            }
            */
            //var aTop = $('.ad').height();
            /*
            var scroll_y = jQuery('html').css('--scroll-y').replace('px', '');
            if(scroll_y < 150){
                var current_y = 210 - scroll_y;
                jQuery('header.header .header__control').css({'top': current_y + 'px'});
            } else {
                jQuery('header.header .header__control').css({'top': '33px'});
            }
            */
            /*
            if (jQuery('body').hasClass('page-template-chat')) {
                //var urist__cnt_0_top = jQuery('body.page-template-chat .chat__cnt .question_item__cnt .urist__cnt_0').position().top;
                console.log (scroll_y);
                console.log (urist__cnt_0_top);
                if (scroll_y > (urist__cnt_0_top-40)) {
                    jQuery('body.page-template-chat .chat__cnt .question_item__cnt .urist__cnt_0').addClass('fixed');
                } else {     
                    jQuery('body.page-template-chat .chat__cnt .question_item__cnt .urist__cnt_0').removeClass('fixed');
                }
            }
            */
        });
        
        
        
        
        jQuery('body.page-template-bankruptcy4cost .popup-item__cnt .calculation__variants .calculation__radio').click(function() {
            var question_current_index = jQuery(this).closest('.calculation__tab').attr('data-question-indx');
            question_current_index++;
            var svg_default_color = jQuery(this).closest('.popup-item__cnt').find('.steps__wrap').attr('data-default-color');
            var svg_active_color = jQuery(this).closest('.popup-item__cnt').find('.steps__wrap').attr('data-active-color');
            //console.log('svg_active_color : ' + svg_active_color);
            jQuery(this).closest('.calculation__tab').find('.notice').addClass('hidden');
            jQuery(this).closest('.popup-item__cnt').find('.steps__wrap').find('svg').find('path:nth-child(' + question_current_index + ')').css({"fill": svg_active_color});
            jQuery(this).closest('.popup-item__cnt').find('.steps__wrap').find('svg').find('path:nth-child(' + question_current_index + ')').addClass('valid');
            
            //jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('.h3').html(jQuery(this).closest('.popup-item__cnt').find('.steps__wrap').find('svg').find('path:nth-child(' + question_current_index + ')').attr('data-title'));
            var current_answer_length = jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('.steps__wrap').find('svg').find('path.valid').length;
            jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('.h3').find('span').addClass('hidden');
            jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('.h3').find('span:nth-child(' + (current_answer_length - 1) + ')').removeClass('hidden');
            
            if (!jQuery(this).closest('.popup-item__cnt').find('.steps__wrap').find('svg').find('path:not(.valid)').length) {
                jQuery(this).closest('.popup-item__cnt').find('.situation_identical__cnt').find('span.hidden').removeClass('hidden');
                var chat_destination_height = jQuery(this).closest('.popup-item__cnt').height();
                console.log('chat_destination_height : ' + chat_destination_height);
                jQuery(this).closest('.popup__overlay').animate({ scrollTop: chat_destination_height }, 1100);
            }
        });
        
        jQuery('body.page-template-bankruptcy4cost .popup-item__cnt .calculation__variants .calculation__checkbox').click(function() {
            var question_current_index = jQuery(this).closest('.calculation__tab').attr('data-question-indx');
            question_current_index++;
            var svg_default_color = jQuery(this).closest('.popup-item__cnt').find('.steps__wrap').attr('data-default-color');
            var svg_active_color = jQuery(this).closest('.popup-item__cnt').find('.steps__wrap').attr('data-active-color');
            //console.log('svg_active_color : ' + svg_active_color);
            jQuery(this).closest('.calculation__tab').find('.notice').addClass('hidden');
            jQuery(this).closest('.popup-item__cnt').find('.steps__wrap').find('svg').find('path:nth-child(' + question_current_index + ')').css({"fill": svg_active_color});
            jQuery(this).closest('.popup-item__cnt').find('.steps__wrap').find('svg').find('path:nth-child(' + question_current_index + ')').addClass('valid');
            
            //jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('.h3').html(jQuery(this).closest('.popup-item__cnt').find('.steps__wrap').find('svg').find('path:nth-child(' + question_current_index + ')').attr('data-title'));
            var current_answer_length = jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('.steps__wrap').find('svg').find('path.valid').length;
            jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('.h3').find('span').addClass('hidden');
            jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('.h3').find('span:nth-child(' + (current_answer_length - 1) + ')').removeClass('hidden');
            
            if (!jQuery(this).closest('.popup-item__cnt').find('.steps__wrap').find('svg').find('path:not(.valid)').length) {
                jQuery(this).closest('.popup-item__cnt').find('.situation_identical__cnt').find('span.hidden').removeClass('hidden');
                var chat_destination_height = jQuery(this).closest('.popup-item__cnt').height();
                console.log('chat_destination_height : ' + chat_destination_height);
                jQuery(this).closest('.popup__overlay').animate({ scrollTop: chat_destination_height }, 1100);
            }
        });
        
        jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .audio_type').click(function() {
            if (jQuery(this).hasClass('off')) {
                jQuery(this).removeClass('off');
                jQuery(this).addClass('on');
                jQuery(this).find('.text').html('Выключить голосовую версию');
                jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered .description__cnt').addClass('hidden');
                jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered .audio_description__cnt').removeClass('hidden');
            } else {
                jQuery(this).removeClass('on');
                jQuery(this).addClass('off');
                jQuery(this).find('.text').html('Включить голосовую версию');
                jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered .audio_description__cnt').addClass('hidden');
                jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered .description__cnt').removeClass('hidden');
            }
        });
        
        
        /*jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt:not(.hidden) .audio_description__cnt .custom_player_item__cnt:not(.hidden) .audio__cnt audio');*/
        
        
        
        jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt .controls_audio_cnt .actions__btn .play').click(function() {
            if (typeof audioPlay !== 'undefined') {
                clearInterval(audioPlay);
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt .audio__cnt audio').trigger("pause");
                //jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt .controls_audio_cnt .audio-track svg path').css({"fill": "#D9D9D9"});
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt:not(.played) .controls_audio_cnt .actions__btn .pause').addClass('hidden');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt:not(.played) .controls_audio_cnt .actions__btn .play').removeClass('hidden');
                
                
            }
            
            console.log('play');
            jQuery(this).addClass('hidden');
            jQuery(this).closest('.actions__btn').find('.pause').removeClass('hidden');
            
            var current_play_cnt = jQuery(this);
            var current_stop_cnt = jQuery(this).next();
            var current_audio_cnt_id = jQuery(this).closest('.audio__cnt').find('audio').attr('id');
            var current_audio_obj = document.getElementById(current_audio_cnt_id);
            var current_audio_time_cnt = jQuery(this).closest('.audio__cnt').find('.audio-track').find('.time');
            var current_audio_svg_cnt = jQuery(this).closest('.audio__cnt').find('.audio-track').find('svg');
            var current_audio_svg_path_count = current_audio_svg_cnt.find('path').length;
            var current_audio_svg_path_percent = 100 / current_audio_svg_path_count;
            
            
            
            jQuery(this).closest('.audio__cnt').find('audio').trigger("play");
            
            audioPlay = setInterval(function() {
                
                
                // Получаем значение на какой секунде песня
                let audioTime = Math.round(current_audio_obj.currentTime);
                //console.log('audioTime: ' + audioTime);
                // Получаем всё время песни
                let audioLength = Math.round(current_audio_obj.duration)
                //console.log('audioLength: ' + audioLength);
                var current_percent = (audioTime * 100) / audioLength;
                //current_audio_time_cnt.css({"width": (audioTime * 100) / audioLength + '%'});
                var current_svg_path_index = current_percent / current_audio_svg_path_percent;
                //console.log('current_audio_svg_path_percent : ' + current_audio_svg_path_percent);
                //console.log('current_svg_path_index : ' + current_svg_path_index);
                var i = 0;
                while (i < (current_svg_path_index+1)) {
                    current_audio_svg_cnt.find('path:nth-child('+i+')').css({"fill": "#5381F6"});
                    //console.log(i);
                    i++;
                }
                if (current_percent > 99) {
                    current_stop_cnt.addClass('hidden');
                    current_play_cnt.removeClass('hidden');
                    current_audio_svg_cnt.find('path').css({"fill": "#D9D9D9"});
                    clearInterval(audioPlay);
                }
                
                /*
                // Сравниваем, на какой секунде сейчас трек и всего сколько времени длится
                // И проверяем что переменная treck меньше четырёх
                if (audioTime == audioLength && treck < 3) {
                    treck++; // То Увеличиваем переменную 
                    switchTreck(treck); // Меняем трек
                // Иначе проверяем тоже самое, но переменная treck больше или равна четырём
                } else if (audioTime == audioLength && treck >= 3) {
                    treck = 0; // То присваиваем treck ноль
                    switchTreck(treck); Меняем трек
                }
                */
            }, 10);
            
        });
        
        jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt .controls_audio_cnt .actions__btn .pause').click(function() {
            console.log('pause');
            jQuery(this).addClass('hidden');
            jQuery(this).closest('.actions__btn').find('.play').removeClass('hidden');
            
            jQuery(this).closest('.audio__cnt').find('audio').trigger("pause");
            /*
            clearInterval(audioPlay);
            */
        });
        
        jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt .content__cnt .content_btn__cnt').click(function() {
            if (!jQuery(this).closest('.content__cnt').hasClass('show')) {
                jQuery(this).closest('.content__cnt').addClass('show');
                jQuery(this).closest('.content__cnt').find('.text__cnt').slideDown(500);
            } else {
                jQuery(this).closest('.content__cnt').removeClass('show');
                jQuery(this).closest('.content__cnt').find('.text__cnt').slideUp(500);
            }
        });
        /*
        jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .audio_description__cnt .custom_player_item__cnt .controls_audio_cnt .audio-track svg path').click(function() {
            var current_number = jQuery(this).index();
            var all_length = jQuery(this).closest('svg').length;
            console.log(current_number + ' / ' + all_length);
            jQuery(this).closest('svg').find('path').each(function() {
                var current_item_number = jQuery(this).index();
                if (current_number >= current_item_number) {
                    jQuery(this).css({"fill": "#5381F6"});
                } else {
                    jQuery(this).css({"fill": "#D9D9D9"});
                }
            });
        });
        */
        
        
        
        
        
        
        
        jQuery('body.page-template-bankruptcy4cost .header__control button.phone').click(function() {
            var windowsize = jQuery(window).width();
            //console.log(windowsize);
            if (windowsize > 768) {
                //var data_popup_id = jQuery(this).attr('data-popup-id');
                //var obj_offsetTop = jQuery(window).scrollTop();
                //jQuery('body').css({"top": "-"+obj_offsetTop+"px"});
                jQuery('.section--modal.old__cnt .modal__overlay .modal__wrap--services h3.modal__title').html('Закажите звонок от специалиста или свяжитесь с нами по номеру: <span>8 (800) 511-81-39</span>');
                jQuery('body').css({"position": "fixed"});
                jQuery('.section--modal.old__cnt .modal__overlay').removeClass('hidden');
                jQuery('.section--modal.old__cnt .modal__overlay .modal__wrap--services').removeClass('hidden');    
                return false;
            }
        });
        
        jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .header__cnt .header__wrapper .phone__cnt').click(function() {
            var windowsize = jQuery(window).width();
            if (windowsize > 768) {
                jQuery('.section--modal.old__cnt .modal__overlay .modal__wrap--services h3.modal__title').html('Закажите звонок от специалиста или свяжитесь с нами по номеру: <span>8 (800) 511-81-39</span>');
                jQuery('.section--modal.old__cnt .modal__wrap--services form input[name="form-sms"]').val('53');
                jQuery('.section--modal.old__cnt .modal__wrap--services form input[name="form-name"]').val('SMS-50 Закажите звонок от специалиста Чат. Боднар Евгения Ивановна');
                jQuery('body').css({"position": "fixed"});
                jQuery('.section--modal.old__cnt .modal__overlay').removeClass('hidden');
                jQuery('.section--modal.old__cnt .modal__overlay .modal__wrap--services').removeClass('hidden');
                return false;
            }
        });
        
        
        if (jQuery('body').hasClass('page-template-bankruptcy4cost')) {
            var isPaused = false;
            setInterval(function(){
                //console.log('setInterval start');
                //console.log('p.hidden length : ' + jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt p.hidden').length);
                if (jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .variations__cnt').hasClass('hidden')) {
                    jQuery('.chat_popup__cnt .header__cnt .urist_content__cnt .urist_content .action .write_paused').addClass('hidden');
                    jQuery('.chat_popup__cnt .header__cnt .urist_content__cnt .urist_content .action .write').removeClass('hidden');
                }
                setTimeout(function(){
                    var current_not_viewed_messages = 0;
                    //console.log('start timeout');
                    
                    if (jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden)').hasClass('question_item_pre_last_child')) {
                        jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child.not_answered .description__cnt p').removeClass('hidden');
                        jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child.not_answered .description__cnt .video_wrap__cnt').removeClass('hidden');
                        jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child.not_answered .variations__cnt').removeClass('hidden');
                    } else {
                        if (jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden)').hasClass('question_item_last_child')) {
                            jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child.not_answered .description__cnt p').removeClass('hidden');
                            //jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child.not_answered .description__cnt .video_wrap__cnt').removeClass('hidden');
                        } else {
                            
                            /*
                            if (jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .audio_description__cnt .custom_player_item__cnt.hidden'))
                            */
                            
                			if (jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt p.hidden').length > 0) {
                			    if (jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt p:not(.hidden)').length == 0) {
                			        var dt = new Date();
                                    if (dt.getMinutes() < 10) {
                                        var time = dt.getHours() + ":0" + dt.getMinutes();
                                    } else {
                                        var time = dt.getHours() + ":" + dt.getMinutes();    
                                    }
                                    jQuery('<span>'+time+'</span>').appendTo('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt p.hidden:first-child');
                			        var current_message_index = jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt p.hidden:first-child').index();
                			        jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt p.hidden:first-child').removeClass('hidden'); 
                			        
                			        /* New */
                			        current_message_index++;
                			        jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .audio_description__cnt .custom_player_item__cnt:nth-child('+current_message_index+')').removeClass('hidden');
                			        jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .audio_description__cnt .custom_player_item__cnt:nth-child('+current_message_index+') .message_time').html(time);
                			        /* New */
                			        
                			        /* New */
                			        if (jQuery('.chat_popup__cnt').hasClass('hidden')) {
                			            current_not_viewed_messages = jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt p:not(".hidden")').length;
                			            if (!jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .variations__cnt').hasClass('hidden')) {
                			                current_not_viewed_messages += 1;
                			            }
                			        }
                                    /* New */
                                    var chat_destination_height = jQuery('.chat_popup__cnt .body__cnt').height();
                                    jQuery('.chat_popup__cnt').animate({ scrollTop: chat_destination_height }, 1100)
                                    //console.log(1);
                			    } else {
                                    var dt = new Date();
                                    if (dt.getMinutes() < 10) {
                                        var time = dt.getHours() + ":0" + dt.getMinutes();
                                    } else {
                                        var time = dt.getHours() + ":" + dt.getMinutes();    
                                    }
                                    
                                    var dt_day_number = dt.getDay()
                                    var dt_hour_number = dt.getHours();
                                    //console.log('dt_day_number : ' + dt_day_number + '; dt_hour_number : ' + dt_hour_number);
                                    if (dt_day_number < 6 && dt_hour_number > 8 && dt_hour_number < 20) {
                                        jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt p.work_hours').remove();
                                    }
                                    if (dt_day_number > 5 && dt_hour_number > 10 && dt_hour_number < 18) {
                                        jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt p.work_hours').remove();
                                    }
                                    
                                    
                                    if (jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt .video_wrap__cnt:not(.hidden)').length > 0) {
                                        if (jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt .video_wrap__cnt:not(.hidden)').next().hasClass('hidden')) {
                                            jQuery('<span>'+time+'</span>').appendTo(jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt .video_wrap__cnt:not(.hidden)').next());
                                            //jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt .video_wrap__cnt:not(.hidden)').next().find('span.time').html(time);
                                            jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt .video_wrap__cnt:not(.hidden)').next().removeClass('hidden');    
                                        } else {
                                            jQuery('<span>'+time+'</span>').appendTo(jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt p:not(.hidden)').next());
                                            //jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt p:not(.hidden)').next().find('span.time').html(time);
                                            var current_message_index = jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt p:not(.hidden)').next().index();
                        			        jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt p:not(.hidden)').next().removeClass('hidden');            
                                        }
                                    } else {
                                        jQuery('<span>'+time+'</span>').appendTo(jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt p:not(.hidden)').next());
                                        //jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt p:not(.hidden)').next().find('span.time').html(time);
                                        var current_message_index = jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt p:not(.hidden)').next().index();
                    			        jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt p:not(.hidden)').next().removeClass('hidden');        
                                    }
                			        
                			        /* New */
                			        current_message_index++;
                			        jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .audio_description__cnt .custom_player_item__cnt:nth-child('+current_message_index+')').removeClass('hidden');
                			        jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .audio_description__cnt .custom_player_item__cnt:nth-child('+current_message_index+') .message_time').html(time);
                			        /* New */
                			        
                			        /* New */
                			        if (jQuery('.chat_popup__cnt').hasClass('hidden')) {
                			            current_not_viewed_messages = jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt p:not(".hidden")').length;
                			            if (!jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .variations__cnt').hasClass('hidden')) {
                			                current_not_viewed_messages += 1;
                			            }
                			        }
                                    /* New */
                                    var chat_destination_height = jQuery('.chat_popup__cnt .body__cnt').height();
                                    jQuery('.chat_popup__cnt').animate({ scrollTop: chat_destination_height }, 1100)
                                    //console.log(2);
                			    }
                            } else {
                                
                                if (jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .variations__cnt.hidden').length > 0) {
                                    var dt = new Date();
                                    if (dt.getMinutes() < 10) {
                                        var time = dt.getHours() + ":0" + dt.getMinutes();
                                    } else {
                                        var time = dt.getHours() + ":" + dt.getMinutes();    
                                    }
                                    if (jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .variations__cnt .selected_answer_text__cnt span.date').html() == '') {
                                        jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .variations__cnt .selected_answer_text__cnt span.date').html(time);    
                                    }
                                    /*
                                    if (jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .answer__cnt .not_selected_answer .date__cnt span').html() == '') {
                                        jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .answer__cnt .not_selected_answer .date__cnt span').html(time);    
                                    }
                                    */
                                    jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .variations__cnt').removeClass('hidden');
                                    /* New */
                			        if (jQuery('.chat_popup__cnt').hasClass('hidden')) {
                			            current_not_viewed_messages = jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt p:not(".hidden")').length;
                			            if (!jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .variations__cnt').hasClass('hidden')) {
                			                current_not_viewed_messages += 1;
                			            }
                			        }
                                    /* New */
                                    //jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .answer__cnt').removeClass('hidden');
                                    jQuery('.chat_popup__cnt .header__cnt .urist_content__cnt .urist_content .action .write').addClass('hidden');
                                    jQuery('.chat_popup__cnt .header__cnt .urist_content__cnt .urist_content .action .write_paused').removeClass('hidden');    
                                    var chat_destination_height = jQuery('.chat_popup__cnt .body__cnt').height();
                                    jQuery('.chat_popup__cnt').animate({ scrollTop: chat_destination_height }, 1100)
                                    //console.log(3);
                                } else {
                                    if (jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .result_form__cnt').length > 0) {
                                        if (jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .result_form__cnt').hasClass('hidden')) {
                                            console.log('finish');
                                            jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .result_form__cnt').removeClass('hidden');    
                                            var chat_destination_height = jQuery('.chat_popup__cnt .body__cnt').height();
                                            jQuery('.chat_popup__cnt').animate({ scrollTop: chat_destination_height }, 1100);
                                        }
                                        /*
                                        if (jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .thank_block__cnt_v2 .row__cnt.hidden').length > 0) {
                                            var chat_destination_height = jQuery('.chat_popup__cnt .body__cnt').height();
                                            jQuery('.chat_popup__cnt').animate({ scrollTop: chat_destination_height }, 1100);
                                            console.log(3);    
                                        }
                                        */
                                    }
                                }
                            }
                            if (jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .variations__cnt').hasClass('hidden')) {
                                jQuery('.chat_popup__cnt .header__cnt .urist_content__cnt .urist_content .action .write').addClass('hidden');
                                jQuery('.chat_popup__cnt .header__cnt .urist_content__cnt .urist_content .action .write_paused').removeClass('hidden');
                            }
                            //console.log('current_not_viewed_messages: ' + current_not_viewed_messages);
                            if (current_not_viewed_messages > 0) {
                                jQuery('.chat_button .messages_icon span').addClass('hidden');
                                jQuery('.chat_button .messages_icon .number__cnt').removeClass('hidden');
                                jQuery('.chat_button .messages_icon .number__cnt.number').html(current_not_viewed_messages);
                            }
        
                            if (!jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .thank_block__cnt_v2 .row__cnt:last-child').hasClass('hidden')) {
                                jQuery('.chat_button .messages_icon').addClass('hidden');
                            }
                                                    
                            
                        }
                        
                    }
                    
                    
                    

        		}, 1500);
            }, 2000);    
            
            
            setTimeout(function(){
            	jQuery('.chat_button .messages_icon').removeClass('hidden');
            	jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered.hidden:first-child').removeClass('hidden');
        	}, 2000);
            
            
            
            //clearInterval(interval_id);
        }
        
        jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt .result_form__cnt form input[type=text]').change(function() {
            //console.log('name= ' + jQuery(this).val());
            var current_value = jQuery(this).val();
            jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden) .thank_block__cnt_v2 .row__cnt p.name span').html(current_value);
            jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .description__cnt p span.name').html(current_value);
            jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .answer_result_form__cnt .selected_answer .customer_name').html(current_value);
            jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .answer_result_form__cnt .selected_answer .customer_phone').html(current_value);
            jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt .block_pain').attr("data-current-number", current_value);
        });
        
        jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt .result_form__cnt form input[type=tel]').change(function() {
            //console.log('name= ' + jQuery(this).val());
            var current_value = jQuery(this).val();
            jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .answer_result_form__cnt .selected_answer .customer_phone').html(current_value);
        });
        
        jQuery('body.page-template-bankruptcy4cost .chat_button').click(function() {
            var current_scrollTop = jQuery(window).scrollTop();
            var current_window_height = jQuery(window).height();
            var current_scheme_red_scrollTop = jQuery('.bankruptcy2cost.color_scheme_red').offset().top;
            var current_scheme_green_scrollTop = jQuery('.bankruptcy2cost.color_scheme_green').offset().top;
            var current_scheme_purple_scrollTop = jQuery('.bankruptcy2cost.color_scheme_purple').offset().top;
            var current_scroll_level = current_scrollTop + current_window_height - 20;
            if (current_scroll_level < current_scheme_red_scrollTop) {
                jQuery('.chat_popup__cnt .header__cnt .urist_content__cnt .icon .bg').css({'background': 'linear-gradient(to top, #5381F6 100%, #5381F6 0px)'});
            }
            if (current_scroll_level > current_scheme_red_scrollTop && current_scroll_level < current_scheme_green_scrollTop) {
                jQuery('.chat_popup__cnt .header__cnt .urist_content__cnt .icon .bg').css({'background': 'linear-gradient(to top, #FB5A80 100%, #FB5A80 0px)'});
            }
            if (current_scroll_level > current_scheme_green_scrollTop && current_scroll_level < current_scheme_purple_scrollTop) {
                jQuery('.chat_popup__cnt .header__cnt .urist_content__cnt .icon .bg').css({'background': 'linear-gradient(to top, #17CC5F 100%, #17CC5F 0px)'});
            }
            if (current_scroll_level > current_scheme_purple_scrollTop) {
                jQuery('.chat_popup__cnt .header__cnt .urist_content__cnt .icon .bg').css({'background': 'linear-gradient(to top, #7A55D9 100%, #7A55D9 0px)'});
            }
            jQuery('body').css({"position": "fixed"});
            jQuery('body').addClass('overflow-y-none');
            jQuery('.chat_popup__cnt').removeClass('hidden');
            //jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered.hidden:first-child').removeClass('hidden');
            /* New */
            jQuery('.chat_button .messages_icon .number__cnt').addClass('hidden');
            jQuery('.chat_button .messages_icon .number__cnt.number').html('');
            jQuery('.chat_button .messages_icon span').removeClass('hidden');
            /* New */
        });
        
        jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .variations__cnt .calculation__variants_v2 .calculation__radio label').click(function() {
            /*console.log(jQuery(this).html());*/
            var current_data_value = jQuery(this).attr('data-value');
            var current_data_percent_value = jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child .description__cnt').attr('data-percent');
            
            var current_data_message = jQuery(this).closest('.calculation__radio').attr('data-message');
            if (current_data_message !== undefined) {
                jQuery(this).closest('.question_item__cnt.not_answered').next().find('.description__cnt').prepend('<p class="hidden">' + current_data_message + '</p>');
            }
            
            var form_field_name = jQuery(this).closest('.calculation__radio').find('input').attr('name');
            var form_field_value = jQuery(this).html();
            var video_list = jQuery(this).closest('.calculation__radio').attr('data-video-list');
            if (video_list != '') {
                var video_list_arr = video_list.split(',');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .thank_block__cnt_v2 .video__cnt').empty();
                jQuery.each( video_list_arr, function( key, value ) {
                    jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .thank_block__cnt_v2 .video__cnt').append("<div class=\"video_item__cnt\"><div class=\"reviews__video\"><div class=\"youtube\" data-embed=\""+value+"\" onclick=\"ym(82134583,'reachGoal','start')\"><div class=\"youtube__button\"><svg><use xlink:href=\"https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play\"></use></svg></div><img src=\"https://img.youtube.com/vi/"+value+"/hqdefault.jpg\" alt=\"Превью для видео\"></div></div></div>");
                });
                
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .question_item__cnt .video_wrap__cnt .video__cnt').empty();
                jQuery.each( video_list_arr, function( key, value ) {
                    jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .question_item__cnt .video_wrap__cnt .video__cnt').append("<div class=\"video_item__cnt\"><div class=\"reviews__video\"><div class=\"youtube\" data-embed=\""+value+"\" onclick=\"ym(82134583,'reachGoal','start')\"><div class=\"youtube__button\"><svg><use xlink:href=\"https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play\"></use></svg></div><img src=\"https://img.youtube.com/vi/"+value+"/hqdefault.jpg\" alt=\"Превью для видео\"></div></div></div>");
                });
                
            }
        
            if (current_data_value == "unemployed") {
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child .description__cnt p.block_why_us').html('<span class="block"><span class="name"></span>, так же, как и вы, ' + current_data_percent_value + '% наших клиентов безработные. Почему для консультации по списанию долгов клиенты в похожих ситуациях выбирают в первую очередь нас?</span><span class="block">1. Мы останавливаем все текущие исполнительные производства, и вы без проблем можете устроиться на работу</span><span class="block">2. Мы защищаем все выплаты и пособия по безработице от взыскания по исполнительным листам</span><span class="block">3. Мы не разглашаем факт прохождения вами процедуры банкротства потенциальным работодателям</span><span class="block">4. Мы защищаем вас от коллекторов и кредиторов, а также от их звонков и визитов, если во время банкротства вы решите устроиться на новую работу</span><span class="block">5. Мы берем на себя взаимодействие с судебными приставами и банками: если во время процедуры вы трудоустроитесь, можете не переживать, что исполнительный лист придет на новую работу — мы прекращаем и предотвращаем любые удержания с вашей заработной платы</span><span class="block">6. Наша позиция — помогать людям и для вас предусмотрена скидка на прохождение процедуры: в связи с напряженной экономической ситуацией в мире множество россиян оказались в тяжелой жизненной ситуации</span><span class="time"></span>');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child .description__cnt p.block_cases_example').html('Посмотрите отзывы наших клиентов, которые, будучи безработными, прошли процедуру банкротства и списали все долги:');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt p.block_consider').html('<span class="block">Пожалуйста, учтите особенности банкротства безработных:</span><span class="block">Потенциальные работодатели негативно относятся как к кандидатам-неплательщикам, так и к должникам, которые уже в штате. Главным образом это относится к вакансиям в госструктурах или компаниях с государственным участием (банки, страховые, нефтегазовый сектор и другие).</span><span class="block">Конечно, формально вам это вряд ли озвучат, однако треть наших клиентов рассказывают о такой проблеме при первом обращении к нам за помощью. Чем раньше вы избавитесь от долгов и исполнительных производств, тем быстрее сможете выйти из замкнутого круга и устроиться на работу</span><span class="time"></span><span class="time"></span>');
            }
            if (current_data_value == "ipoteka") {
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child .description__cnt p.block_why_us').html('<span class="block"><span class="name"></span>, так же, как и вы, ' + current_data_percent_value + '% наших клиентов имеют квартиру в ипотеке. Почему для консультации по списанию долгов клиенты в похожих ситуациях выбирают в первую очередь нас?</span><span class="block">1. Мы знаем, как законно сохранить ипотечную квартиру: у нашей компании у единственной в СПб есть судебная практика вплоть до Верховного Суда РФ по сохранению ипотечного жилья</span><span class="block">2. Мы начнем взаимодействие с банком и законно приостановим ипотечные платежи с началом процедуры</span><span class="block">3. Мы поможем получить от банка все платежи, которые вы внесли за все время, если вы не хотите сохранять квартиру: такая практика у нас тоже есть</span><span class="block">4. Мы обнуляем вашу кредитную историю и повышаем кредитный рейтинг: после банкротства вы сразу можете обращаться в любой банк за второй и третьей ипотекой, если они вам нужны, кредитами и иными займами</span><span class="time"></span>');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child .description__cnt p.block_cases_example').html('Посмотрите отзывы наших клиентов, которые, имея квартиру в ипотеке, прошли процедуру банкротства и списали все долги:');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt p.block_consider').html('<span class="block">Пожалуйста, учтите особенности банкротства с ипотекой:</span><span class="block">Банкротство — самый верный путь сохранения имущества. Начисление штрафов, пеней и процентов увеличивает размер долга. В конечном итоге, это приведет к тому, что кредитор подаст заявление в суд, в деле примут участие приставы и тогда ипотечную квартиру сохранить не получится.</span><span class="block">Если же вы самостоятельно инициируете банкротство, мы поможем вам защитить имущество законными способами. Чем ранее вы вступите в процедуру, тем выше шансы сохранить ваши активы.</span><span class="time"></span>');
            }
            if (current_data_value == "single_parent") {
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child .description__cnt p.block_why_us').html('<span class="block"><span class="name"></span>, так же, как и вы, ' + current_data_percent_value + '% наших клиентов воспитывают ребенка одни. Почему для консультации по списанию долгов клиенты в похожих ситуациях выбирают в первую очередь нас?</span><span class="block">1. Мы защищаем от взыскания социальные выплаты и ежемесячные пособия по уходу за ребенком (например, по потере кормильца, а также пособие родителям-одиночкам)</span><span class="block">2. Для родителей с детьми у нас предусмотрена скидка на прохождение процедуры</span><span class="block">3. Мы — одна из крупнейших компаний по банкротству в России и закрепляем гарантии списания долгов в договоре</span><span class="block">4. Мы начнём работу для вас без предоплаты и предоставим рассрочку на удобный вам срок</span><span class="block">5. Мы страхуем наши юридические услуги на 10 млн. руб. и дорожим безупречной репутацией перед вами, что подтверждают тысячи отзывов благодарных клиентов</span><span class="time"></span>');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child .description__cnt p.block_cases_example').html('Посмотрите отзывы наших клиентов, которые, будучи родителями-одиночками, прошли процедуру банкротства и списали все долги:');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt p.block_consider').html('<span class="block">Пожалуйста, учтите особенности банкротства родителей-одиночек:</span><span class="block">Быть ответственным за свою семью — непросто. Вдвойне непросто, если у вас накопились долги, с которыми трудно справиться.</span><span class="block">Не ждите, пока дело дойдет до судебных приставов — облегчите долговую нагрузку уже сейчас. Чем раньше вы самостоятельно инициируете банкротство, тем скорее сможете начать финансовую жизнь с чистого листа.</span><span class="time"></span>');
            }
            if (current_data_value == "pensioner") {
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child .description__cnt p.block_why_us').html('<span class="block"><span class="name"></span>, так же, как и вы, ' + current_data_percent_value + '% наших клиентов являются пенсионерами. Почему для консультации по списанию долгов клиенты в похожих ситуациях выбирают в первую очередь нас?</span><span class="block">1. Мы проводим работу по прекращению удержаний с ваших доходов: больше никаких списаний с пенсии</span><span class="block">2. Мы помогаем защитить выплаты, в том числе по инвалидности, а также на лекарства, медицинские пособия и пособия на иждивенцев</span><span class="block">3. Мы защищаем от взыскания со стороны кредиторов или приставов суммы на погашение долгов по кредитам и ЖКУ</span><span class="block">4. Мы защищаем во время процедуры не только вас, но и вашего супруга/супругу, а также ваших наследников от непосильных долгов (задолженности переходят по наследству)</span><span class="block">5. Для вас предусмотрена скидка на прохождение процедуры</span><span class="time"></span>');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child .description__cnt p.block_cases_example').html('Посмотрите отзывы наших клиентов, которые, будучи пенсионерами, прошли процедуру банкротства и списали все долги:');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt p.block_consider').html('<span class="block">Пожалуйста, учтите особенности банкротства пенсионеров:</span><span class="block">Когда заемщик долго не погашает долги, кредиторы подают на него в суд, а затем дело переходит судебным приставам. В результате должник оказывается в положении, когда с его официального дохода внезапно удерживают до 70%. Увы, это происходит на законных основаниях: приставы вправе списывать в счет долга до 50% пенсии, так как она считается официальным доходом.</span><span class="time"></span>');
            }
            if (current_data_value == "invalid") {
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child .description__cnt p.block_why_us').html('<span class="block"><span class="name"></span>, так же, как и вы, ' + current_data_percent_value + '% наших клиентов имеют инвалидность. Почему для консультации по списанию долгов клиенты в похожих ситуациях выбирают в первую очередь нас?</span><span class="block">1. Мы поможем сократить расходы на банкротство за счет освобождения вас от внесения государственной пошлины при подаче заявления в арбитражный суд</span><span class="block">2. Мы защищаем пенсионные и страховые выплаты по инвалидности, а также пособия на иждивенцев</span><span class="block">3. Мы защищаем средства, выделяемые на лекарства, лечение, реабилитацию, оплату ЖКУ</span><span class="block">4. Наша общественная позиция — помогать людям: для вас предусмотрена скидка на прохождение процедуры</span><span class="time"></span>');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child .description__cnt p.block_cases_example').html('Посмотрите отзывы наших клиентов, которые, имея инвалидность, прошли процедуру банкротства и списали все долги:');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt p.block_consider').html('<span class="block">Пожалуйста, учтите особенности банкротства должников с инвалидностью:</span><span class="block">В трудной ситуации может оказаться каждый. Представленная суду справка об инвалидности — серьезное основание для подачи заявления на банкротство и скорейшего списания задолженности. Этот документ — главное подтверждение того, что должник не справляется с погашением обязательств.</span><span class="block">С нами вы быстро и гарантированно спишете все задолженности, а наши специалисты помогут защитить от взыскания социальные выплаты.</span><span class="time"></span>');
            }
            if (current_data_value == "parent_under_three_year") {
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child .description__cnt p.block_why_us').html('<span class="block"><span class="name"></span>, так же, как и вы, ' + current_data_percent_value + '% наших клиентов воспитывают маленьких детей. Почему для консультации по списанию долгов клиенты в похожих ситуациях выбирают в первую очередь нас?</span><span class="block">1. Мы предлагаем возможность совместного банкротства для супругов: вы спишете все долги семьи, упростите процедуру, а также сократите необходимые для процесса расходы</span><span class="block">2. Мы защищаем от взыскания социальные выплаты и пособия: единовременное пособие при рождении ребенка,  ежемесячное пособие по уходу за ребенком, ежемесячные выплаты, а также выплаты в случае усыновления или взятия под опеку/попечительство</span><span class="block">3. Для семей с детьми у нас предусмотрена скидка на прохождение процедуры</span><span class="block">4. Мы — одна из крупнейших компаний по банкротству в России и закрепляем гарантии списания долгов в договоре</span><span class="block">5. Мы начнём работу для вас без предоплаты и предоставим рассрочку на удобный вам срок</span><span class="block">6. Мы страхуем наши юридические услуги на 10 млн. руб. и дорожим безупречной репутацией перед вами, что подтверждают тысячи отзывов благодарных клиентов</span><span class="time"></span>');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child .description__cnt p.block_cases_example').html('Посмотрите отзывы родителей маленьких детей, которые прошли с нами процедуру банкротства и списали все долги:');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt p.block_consider').html('<span class="block">Пожалуйста, учтите особенности банкротства родителей маленьких детей:</span><span class="block">Быть ответственным за свою семью и маленьких детей — непросто. Вдвойне непросто, если у вас накопились долги, с которыми трудно справиться.</span><span class="block">Не ждите, пока дело дойдет до судебных приставов — облегчите долговую нагрузку уже сейчас. Чем раньше вы самостоятельно инициируете банкротство, тем скорее сможете начать финансовую жизнь с чистого листа. В том числе, совместно с вашим супругом/супругой.</span><span class="time"></span>');
            }
            if (current_data_value == "parent_with_two_children") {
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child .description__cnt p.block_why_us').html('<span class="block"><span class="name"></span>, так же, как и вы, ' + current_data_percent_value + '% наших клиентов воспитывают более 1 ребенка. Почему для консультации по списанию долгов клиенты в похожих ситуациях выбирают в первую очередь нас?</span><span class="block">1. Мы предлагаем возможность совместного банкротства для многодетных супругов: вы спишете все долги семьи, упростите процедуру, а также сократите необходимые для процесса расходы</span><span class="block">2. Для многодетных семей у нас предусмотрена скидка на прохождение процедуры</span><span class="block">3. Мы защищаем от взыскания социальные выплаты и пособия: единовременное пособие при рождении ребенка,  ежемесячное пособие по уходу за ребенком, ежемесячные выплаты, а также выплаты в случае усыновления или взятия под опеку/попечительство</span><span class="block">4. Также гарантируем защиту льгот на оплату коммунальных услуг, бесплатные рецептурные лекарства для детей до шести лет, бесплатный проезд на общественном транспорте для школьников, бесплатное школьное питание, бесплатный проход в музеи, парки культуры, на выставки раз в месяц, льготные кредиты на покупку стройматериалов и строительство жилья, а также льготы на ипотеку</span><span class="time"></span>');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child .description__cnt p.block_cases_example').html('Посмотрите отзывы наших клиентов, имеющих более одного ребенка, которые прошли процедуру банкротства и списали все долги:');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt p.block_consider').html('<span class="block">Пожалуйста, учтите особенности банкротства многодетных родителей:</span><span class="block">Быть ответственным за большую семью — непросто. Вдвойне непросто, если у вас накопились долги, с которыми трудно справиться.</span><span class="block">Не ждите, пока дело дойдет до судебных приставов — облегчите долговую нагрузку уже сейчас. Чем раньше вы самостоятельно инициируете банкротство, тем скорее сможете начать финансовую жизнь с чистого листа. В том числе, совместно с вашим супругом/супругой.</span><span class="time"></span>');
            }
            if (current_data_value == "ip") {
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child .description__cnt p.block_why_us').html('<span class="block"><span class="name"></span>, так же, как и вы, ' + current_data_percent_value + '% наших клиентов наших клиентов — действующие либо бывшие ИП на момент процедуры. Почему для консультации по списанию долгов клиенты в похожих ситуациях выбирают в первую очередь нас?</span><span class="block">1. Мы обладаем самым большим в Петербурге опытом банкротства и знаем все о проведении процедуры для ИП без последствий</span><span class="block">2. Мы досконально знаем, как взаимодействовать с банками, государственными органами и фондами (ФСС, ПФР, ФНС) при прохождении процедуры: списанные с нашей помощью долги ИП составляют от 300 тыс.руб до 700 млн. руб.</span><span class="block">3. Мы списываем не только предпринимательские, но и личные задолженности физического лица</span><span class="block">4. Мы — одна из крупнейших компаний по банкротству в России и закрепляем гарантии списания долгов в договоре</span><span class="block">5. Мы начнём работу для вас без предоплаты и предоставим рассрочку на удобный вам срок</span><span class="block">6. Мы страхуем наши юридические услуги на 10 млн. руб. и дорожим безупречной репутацией перед вами, что подтверждают тысячи отзывов благодарных клиентов</span><span class="time"></span>');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child .description__cnt p.block_cases_example').html('Посмотрите отзывы наших клиентов, которые, будучи индивидуальными предпринимателями, прошли процедуру банкротства и списали все долги:');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt p.block_consider').html('<span class="block">Пожалуйста, учтите особенности банкротства индивидуальных предпринимателей</span><span class="block">Быть предпринимателем с долгами — значит, попасть в замкнутый круг. Налоговая служба очень часто отказывается закрывать ИП в силу наличия предпринимательских долгов. Пока они присутствуют у вас, вы не сможете ни закрыть действующее ИП, ни открыть новое.</span><span class="block">Самый лучший способ списать не только задолженности по ИП, но и личные долги — инициировать банкротство. Кстати, по завершении процедуры открыть новое ИП можно хоть на следующий день — никаких ограничений для этого нет.</span><span class="time"></span>');
            }
            if (current_data_value == "army") {
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child .description__cnt p.block_why_us').html('<span class="block"><span class="name"></span>, так же, как и вы, ' + current_data_percent_value + '% наших клиентов состоят на военной службе. Почему для консультации по списанию долгов клиенты в похожих ситуациях выбирают в первую очередь нас?</span><span class="block">1. Мы сохраняем законными способами жилье, приобретенное по программе военной ипотеки</span><span class="block">2. Мы защищаем денежное довольствие (в том числе, военную пенсию) от взыскания, а также другие выплаты: пособие на ребенка, пособие беременной жене, пособие при увольнении и по безработице, а также расходы по найму жилого помещения</span><span class="block">3. Если банкротство инициирует супруга военнослужащего, мы также спишем все долги с законным сохранением военной ипотеки</span><span class="block">4. В нашей компании разработана и действует программа строгой конфиденциальности: о вашем банкротстве не узнает никто</span><span class="time"></span>');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child .description__cnt p.block_cases_example').html('Посмотрите отзывы наших клиентов, которые, будучи военнослужащими, прошли процедуру банкротства и списали все долги:');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt p.block_consider').html('<span class="block">Пожалуйста, учтите особенности банкротства военнослужащих:</span><span class="block">Финансовые проблемы могут возникнуть у каждого, и военнослужащие — не исключение. Никаких ограничений для признания финансовой несостоятельности военных по закону нет.</span><span class="block">Если у вас есть долги по займам и кредитам, с которыми вам трудно справиться — не ждите, пока кредиторы подадут в суд на ваше банкротство. Государство и суд идут навстречу военнослужащим, которые инициируют банкротство.</span><span class="time"></span>');
            }
            if (current_data_value == "police") {
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child .description__cnt p.block_why_us').html('<span class="block"><span class="name"></span>, так же, как и вы, ' + current_data_percent_value + '% наших клиентов работают на государственных должностях. Почему для консультации по списанию долгов клиенты в похожих ситуациях выбирают в первую очередь нас?</span><span class="block">1. Мы знаем все о том, как сохранить при банкротстве все льготы и выплаты, в том числе, ковидные</span><span class="block">2. Мы защищаем сотрудников сфер образования и защиты правопорядка при банкротстве, а также их социальные выплаты от взыскания</span><span class="block">3. Важно! Мы не разглашаем работодателям информацию о прохождении вами процедуры банкротства</span><span class="block">4. Мы — одна из крупнейших компаний по банкротству в России и закрепляем гарантии списания долгов в договоре</span><span class="block">5. Мы начнём работу для вас без предоплаты и предоставим рассрочку на удобный вам срок</span><span class="block">6. Мы страхуем наши юридические услуги на 10 млн. руб. и дорожим безупречной репутацией перед вами, что подтверждают тысячи отзывов благодарных клиентов</span><span class="time"></span>');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child .description__cnt p.block_cases_example').html('Посмотрите отзывы наших клиентов, которые работали на государственных должностях, прошли процедуру банкротства и списали все долги:');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt p.block_consider').html('<span class="block">Пожалуйста, учтите особенности банкротства должников, которые работают на государственных должностях:</span><span class="block">Возможностью списать все задолженности могут воспользоваться все физические лица, вне зависимости от места их работы или службы: значительная часть наших клиентов — сотрудники государственных структур и ведомств.</span><span class="block">Если у вас накопились задолженности, кредиторы вправе подать на вас в суд, который в свою очередь, поставит в известность ваше руководство. В случае прохождения вами процедуры банкротства, работодатель не будет информирован об этом.</span><span class="time"></span>');
            }
            if (current_data_value == "other") {
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child .description__cnt p.block_why_us').html('<span class="block"><span class="name"></span>, так же, как и вы, 2 из 3 петербуржцев обращаются к нам в трудной финансовой ситуации. Почему для консультации по списанию долгов клиенты выбирают в первую очередь нас?</span><span class="block">1. Мы — одна из крупнейших компаний по банкротству в России и закрепляем гарантии списания долгов в договоре</span><span class="block">2. Мы начнём работу для вас без предоплаты и предоставим рассрочку на удобный вам срок</span><span class="block">3. Мы страхуем наши юридические услуги на 10 млн. руб. и дорожим безупречной репутацией перед вами, что подтверждают тысячи отзывов благодарных клиентов</span><span class="time"></span>');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_pre_last_child .description__cnt p.block_cases_example').html('Посмотрите отзывы сотен клиентов, которые прошли процедуру банкротства с нами и успешно списали все долги:');
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt p.block_consider').html('<span class="block">Пожалуйста, учтите особенности банкротства физических лиц:</span><span class="block">Начисление штрафов, пеней и процентов увеличивает размер долга. В конечном итоге, это приведет к тому, что кредитор подаст заявление в суд, в деле примут участие приставы и тогда вашу собственность сохранить не получится.</span><span class="block">Банкротство — самый верный путь сохранения имущества. Если же вы самостоятельно инициируете банкротство, мы поможем вам защитить имущество законными способами. Чем ранее вы вступите в процедуру, тем выше шансы сохранить ваши активы.</span><span class="time"></span>');
            }
            
        
            if (current_data_value == "pain_call") {
                var customer_current_number = jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt .block_pain').attr("data-current-number");
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt p.block_pain').html('<span class="block"><span class="name">' + customer_current_number + '</span>, если вас беспокоят звонки коллекторов, на консультации у юриста вы узнаете:</span><span class="block">1. Как забыть о коллекторах, а также звонках и уведомлениях от них</span><span class="block">2. Как прекратить их работу в отношении взыскания долга и угрозы в вашу сторону</span><span class="block">3. Как списать полностью и навсегда все задолженности</span><span class="time"></span>');
            }
            if (current_data_value == "pain_loss_property") {
                var customer_current_number = jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt .block_pain').attr("data-current-number");
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt p.block_pain').html('<span class="block"><span class="name">' + customer_current_number + '</span>, если вы беспокоитесь о том, что будет с вашим имуществом, на консультации у юриста вы узнаете:</span><span class="block">1. Как законно сохранить имущество, в том числе, автомобиль и недвижимость</span><span class="block">2. Как правильно действовать, если вы совершали какие-либо сделки с имуществом</span><span class="block">3. Как списать полностью и навсегда все задолженности</span><span class="time"></span>');
            }
            if (current_data_value == "pain_collectors_visits") {
                var customer_current_number = jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt .block_pain').attr("data-current-number");
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt p.block_pain').html('<span class="block"><span class="name">' + customer_current_number + '</span>, если вас беспокоят визиты коллекторов к вам домой, на консультации у юриста вы узнаете:</span><span class="block">1. Что делать, если коллекторы приходят к вам и требуют долг </span><span class="block">2. Как прекратить взаимодействие с ними и предотвратить угрозы в вашу сторону</span><span class="block">3. Как списать полностью и навсегда все задолженности</span><span class="time"></span>');
            }
            if (current_data_value == "pain_hard_pay") {
                var customer_current_number = jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt .block_pain').attr("data-current-number");
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt p.block_pain').html('<span class="block"><span class="name">' + customer_current_number + '</span>, если вам стало тяжело рассчитываться по обязательствам, а суммы ежемесячных платежей кажутся неподъемными, на консультации у юриста вы узнаете:</span><span class="block">1. Как не оказаться в долговой яме и не совершить неверные действия</span><span class="block">2. Как освободиться от необходимости платить кредиторам и снова стать платежеспособным</span><span class="block">3. Как списать полностью и навсегда все задолженности</span><span class="time"></span>');
            }
            if (current_data_value == "pain_travel_abroad") {
                var customer_current_number = jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt .block_pain').attr("data-current-number");
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt p.block_pain').html('<span class="block"><span class="name">' + customer_current_number + '</span>, если вас беспокоит вопрос о том, возможен ли выезд за границу во время и после процедуры, на консультации у юриста вы узнаете:</span><span class="block">1. Как гарантированно предотвратить подобные последствия и избежать переживаний</span><span class="block">2. В чем заключаются преимущества банкротства для выезда за границу</span><span class="block">3. Как списать все долги и путешествовать в какую угодно страну по вашему желанию</span><span class="time"></span>');
            }
            if (current_data_value == "pain_withdraw_salary") {
                var customer_current_number = jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt .block_pain').attr("data-current-number");
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt p.block_pain').html('<span class="block"><span class="name">' + customer_current_number + '</span>, если вас беспокоят бесконечные удержания с ваших доходов, на консультации у юриста вы узнаете:</span><span class="block">1. Какой существует выход из вашей ситуации и как прекратить взыскания</span><span class="block">2. Как восстановить сумму вашего ежемесячного дохода и приостановить исполнительные производства</span><span class="block">3. Как списать полностью и навсегда все задолженности</span><span class="time"></span>');
            }
            if (current_data_value == "pain_no_job") {
                var customer_current_number = jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt .block_pain').attr("data-current-number");
                jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.question_item_last_child .description__cnt p.block_pain').html('<span class="block"><span class="name">' + customer_current_number + '</span>, если для вас важна белая зарплата, но на работу долго не получается устроиться, на консультации у юриста вы узнаете:</span><span class="block">1. Как избавиться от исполнительных производств и решить проблему с официальным трудоустройством</span><span class="block">2. Как выйти из замкнутого круга и устроиться на желаемую работу</span><span class="block">3. Как списать полностью и навсегда все задолженности</span><span class="time"></span>');
            }

            //console.log('click bankruptcy2cost element');
            var answer_percent = jQuery(this).closest('.calculation__radio').attr('data-percent');
            var current_value = jQuery(this).html();
            /*console.log('value : ' + current_value);*/
            jQuery(this).closest('.variations__cnt').find('.selected_answer_text__cnt').find('span.text').html('Сегодня так же ответили '+answer_percent+'% человек');
            jQuery(this).closest('.variations__cnt').find('.selected_answer_text__cnt').find('.selected_percent').css({'width': answer_percent+'%'});
            jQuery(this).closest('.question_item__cnt').find('.answer__cnt').find('.points__cnt').addClass('hidden');
            jQuery(this).closest('.question_item__cnt').find('.answer__cnt').find('.selected_answer').find('span').html(current_value);
            jQuery(this).closest('.question_item__cnt').find('.answer__cnt').find('.selected_answer').removeClass('hidden');
            
            
            jQuery(this).closest('.question_item__cnt').find('.answer__cnt').removeClass('hidden');
            if (jQuery(this).closest('.question_item__cnt').find('.answer__cnt').find('.date__cnt').find('span').html() == '') {
                var dt = new Date();
                if (dt.getMinutes() < 10) {
                    var time = dt.getHours() + ":0" + dt.getMinutes();
                } else {
                    var time = dt.getHours() + ":" + dt.getMinutes();    
                }
                jQuery(this).closest('.question_item__cnt').find('.answer__cnt').find('.date__cnt').find('span').html(time);
            }
            
            
            
            
            
            
            
            
            /*
            console.log('index : ' + jQuery(this).closest('.question_item__cnt').index());
            console.log('length : ' + jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt').length);
            */
            if ( (jQuery(this).closest('.question_item__cnt').index() + 1) < jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt').length ) {
                jQuery(this).closest('.question_item__cnt').next().removeClass('hidden');
                /*jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden)').next().removeClass('hidden');*/
            } else {
                console.log('Вопросы закончились');
            }
            
            /*
            if (jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered.hidden').length > 0) {
                jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt.not_answered:not(.hidden)').next().removeClass('hidden');    
            } else {
                console.log('Вопросы закончились');
            }
            */
            
            
            
            jQuery(this).closest('.question_item__cnt').removeClass('not_answered');
            jQuery(this).closest('.question_item__cnt').addClass('answered');
            var chat_destination_height = jQuery('.chat_popup__cnt .body__cnt').height();
            jQuery('.chat_popup__cnt').animate({ scrollTop: chat_destination_height }, 1100)
            var question_name = jQuery(this).closest('.calculation__radio').find('input.radio__default').attr('name');
            var question_value = jQuery(this).html();
            jQuery('.chat_popup__cnt .body__cnt .questions_content__cnt .question_item__cnt form.wpcf7-form input[name='+question_name+']').val(question_value);
        });
        
        jQuery('body.page-template-bankruptcy4cost .chat_popup__cnt .header__cnt .header__wrapper .back_arrow__cnt').click(function() {
            jQuery('body').css({"position": "initial"});
            jQuery('body').removeClass('overflow-y-none');
            jQuery('.chat_popup__cnt').addClass('hidden');
        });
        
        jQuery('body.page-template-newbonusprogram .calculation__btn.calculation__btn--next').click(function() {
            var data_question_indx = jQuery(this).closest('.calculation-v2.calculation--inpost').find('.calculation__tab:not(.hidden)').attr('data-question-indx');
            if (data_question_indx == 3) {
                jQuery('body.page-template-newbonusprogram .kviz-cnt .calculation__nav .calculation__btn--form1').removeClass('hidden');
            }
        });
        
        jQuery('body.page-template-newbonusprogram .calculation__btn.calculation__btn--prev').click(function() {
            var data_question_indx = jQuery(this).closest('.calculation-v2.calculation--inpost').find('.calculation__tab:not(.hidden)').attr('data-question-indx');
            if (data_question_indx < 3) {
                jQuery('body.page-template-newbonusprogram .kviz-cnt .calculation__nav .calculation__btn--form1').addClass('hidden');
            }
        });
        
        
        jQuery('body.page-template-newbonusprogram .calculation__btn.calculation__btn--form1').click(function() {
            var inpit_checked_len = jQuery(this).closest('.calculation-v2.calculation--inpost').find('.calculation__tab:not(.hidden)').find('input:checked').length;
            if (!inpit_checked_len) {
                jQuery(this).closest('.calculation-v2.calculation--inpost').find('.calculation__tab:not(.hidden)').find('.calculation__variants').find('.radio__new--accent').addClass('zoom');
                setTimeout(() => jQuery(this).closest('.calculation-v2.calculation--inpost').find('.calculation__tab:not(.hidden)').find('.calculation__variants').find('.radio__new--accent').addClass('zoom'), 1000);
            } else {
                jQuery('body.page-template-newbonusprogram .kviz-cnt .calculation__header').addClass('hidden');
                jQuery('body.page-template-newbonusprogram .kviz-cnt .calculation__inner--inpost .calculation__tab').addClass('hidden');
                jQuery('body.page-template-newbonusprogram .kviz-cnt .calculation__nav').addClass('hidden');
                jQuery('body.page-template-newbonusprogram .kviz-cnt .calculation__inner--inpost .calculation__tab_success').removeClass('hidden');
                
                var property_1 = jQuery('.kviz-cnt .calculation__tab__indx__1 .calculation__variants input:checked').val();
                var property_2 = jQuery('.kviz-cnt .calculation__tab__indx__2 .calculation__variants input:checked').val();
                var property_3 = jQuery('.kviz-cnt .calculation__tab__indx__3 .calculation__variants input:checked').val();
                
                console.log('action=bonussurvey&property_1='+property_1+'&property_2='+property_2+'&property_3='+property_3);
                
                jQuery.ajax({
                    type: "POST",
                    url: "https://fpa.ru/wp-admin/admin-ajax.php",
                    data: {
                        action : 'bonus_survey',
                        property_1: property_1,
                        property_2: property_2,
                        property_3: property_3,
                    },
                    success:function(data) {
                        /*console.log(data)*/
                        /*
                        var data_json = jQuery.parseJSON(data);
                        if (data_json['loggedin']) {
                            jQuery('body.page-template-online .login-form__cnt form .form_notice').addClass('hidden');
                            jQuery('body.page-template-online .login-form__cnt form .form_notice .message').html('');
                            location.reload();
                        } else {
                            jQuery('body.page-template-online .login-form__cnt form .form_notice .message').html(data_json['message']);
                            jQuery('body.page-template-online .login-form__cnt form .form_notice').removeClass('hidden');
                        }
                        */
                    },
                    error: function(errorThrown){
                        console.log(errorThrown);
                    }
                });
                
                
                /*
                jQuery.ajax({
    			    url: '<?php echo admin_url( "admin-ajax.php" ) ?>',
    			    type: 'POST',
    			    data: 'action=bonussurvey&property_1='+property_1+'&property_2='+property_2+'&property_3='+property_3,
    			    beforeSend: function( xhr ) {
        				$('#misha_button').text('Загрузка, 5 сек...');	
    			    },
    			    success: function( data ) {
    				    var answer = jQuery.parseJSON(data);
    				    console.log(data);
    			    }
    		    });
    		    */
            }
        });
        
        jQuery('.calculation__btn.calculation__btn--next').click(function() {
            if (!jQuery('.calculation__inner--inpost .calculation__tab:nth-child(2)').hasClass('hidden')) {
                var current_val = jQuery('.calculation__inner--inpost .calculation__tab:first-child').find('.radio__default:checked').parent().find('.radio__label').html();
                var find_str = "Санкт-Петербург"
                if (current_val) {
                    if (!current_val.includes(find_str)) {
                        //console.log('redirect');
                        window.location.href = 'https://fpa.ru/spasibo-region/';
                    }
                }
            }
            if (jQuery('body').hasClass('page-template-services-uslugi') && !jQuery('.calculation__inner .calculation__tab:nth-child(2)').hasClass('hidden')) {
                var current_val = jQuery('.calculation__inner .calculation__tab:first-child').find('.radio__default:checked').parent().find('.radio__label').html();
                var find_str = "Санкт-Петербург"
                if (current_val) {
                    if (!current_val.includes(find_str)) {
                        //console.log('redirect');
                        window.location.href = 'https://fpa.ru/spasibo-region/';
                    }
                }
            }
        });
        
        var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = window.location.search.substring(1),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;
        
            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');
        
                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                }
            }
            return false;
        };
        
        var document_block_id = getUrlParameter('block');
        var kviz_group_1_value = getUrlParameter('gpoup_1');
        var form_id = getUrlParameter('form');

        if (form_id == 'free' || form_id == 'sale' || form_id == 'benefits' || form_id == 'calculator') {
            if (form_id == 'free') {
                if (jQuery('.mfc__btn.mfc-btn-free').length > 0) {
                    jQuery('.mfc__btn.mfc-btn-free').click();
                    jQuery('.modal__wrap--free .test__block.region__container .test__variants .test__radio:first-child .radio__default').prop('checked', true);
                    if (kviz_group_1_value == 'spb') {
                        jQuery('.modal__wrap--free .test__block.region__container .test__variants .test__radio:first-child .radio__default').val('Зарегистрирован в СПб и ЛО');
                        jQuery('.modal__wrap--free .test__block.region__container .test__variants .test__radio:first-child label').html('Зарегистрирован в СПб и ЛО');
                    }
                    if (kviz_group_1_value == 'in_to_spb') {
                        jQuery('.modal__wrap--free .test__block.region__container .test__variants .test__radio:first-child .radio__default').val('Планирую переезд в СПб и ЛО');
                        jQuery('.modal__wrap--free .test__block.region__container .test__variants .test__radio:first-child label').html('Планирую переезд в СПб и ЛО');
                    }
                } else {
                    jQuery('.mfc__btn.mfc-btn-free-new').click();
                    jQuery('.modal__wrap--free-new .test__block.region__container .test__variants .test__radio:first-child .radio__default').prop('checked', true);
                    if (kviz_group_1_value == 'spb') {
                        jQuery('.modal__wrap--free-new .test__block.region__container .test__variants .test__radio:first-child .radio__default').val('Зарегистрирован в СПб и ЛО');
                        jQuery('.modal__wrap--free-new .test__block.region__container .test__variants .test__radio:first-child label').html('Зарегистрирован в СПб и ЛО');
                    }
                    if (kviz_group_1_value == 'in_to_spb') {
                        jQuery('.modal__wrap--free-new .test__block.region__container .test__variants .test__radio:first-child .radio__default').val('Планирую переезд в СПб и ЛО');
                        jQuery('.modal__wrap--free-new .test__block.region__container .test__variants .test__radio:first-child label').html('Планирую переезд в СПб и ЛО');
                    }
                }
                
                
            }
            if (form_id == 'sale') {
                if (jQuery('.mfc__btn.mfc-btn-sale').length > 0) {
                    jQuery('.mfc__btn.mfc-btn-sale').click();
                    jQuery('.modal__wrap--sale .test__block.region__container .test__variants .test__radio:first-child .radio__default').prop('checked', true);
                    if (kviz_group_1_value == 'spb') {
                        jQuery('.modal__wrap--sale .test__block.region__container .test__variants .test__radio:first-child .radio__default').val('Зарегистрирован в СПб и ЛО');
                        jQuery('.modal__wrap--sale .test__block.region__container .test__variants .test__radio:first-child label').html('Зарегистрирован в СПб и ЛО');
                    }
                    if (kviz_group_1_value == 'in_to_spb') {
                        jQuery('.modal__wrap--sale .test__block.region__container .test__variants .test__radio:first-child .radio__default').val('Планирую переезд в СПб и ЛО');
                        jQuery('.modal__wrap--sale .test__block.region__container .test__variants .test__radio:first-child label').html('Планирую переезд в СПб и ЛО');
                    }    
                } else {
                    jQuery('.mfc__btn.mfc-btn-sale-new').click();
                    jQuery('.modal__wrap--sale-new .test__block.region__container .test__variants .test__radio:first-child .radio__default').prop('checked', true);
                    if (kviz_group_1_value == 'spb') {
                        jQuery('.modal__wrap--sale-new .test__block.region__container .test__variants .test__radio:first-child .radio__default').val('Зарегистрирован в СПб и ЛО');
                        jQuery('.modal__wrap--sale-new .test__block.region__container .test__variants .test__radio:first-child label').html('Зарегистрирован в СПб и ЛО');
                    }
                    if (kviz_group_1_value == 'in_to_spb') {
                        jQuery('.modal__wrap--sale-new .test__block.region__container .test__variants .test__radio:first-child .radio__default').val('Планирую переезд в СПб и ЛО');
                        jQuery('.modal__wrap--sale-new .test__block.region__container .test__variants .test__radio:first-child label').html('Планирую переезд в СПб и ЛО');
                    }
                }
                
            }
            if (form_id == 'benefits') {
                jQuery('.mfc__btn.mfc-btn-benefits').click();
                jQuery('.modal__wrap--benefits .test__block.region__container .test__variants .test__radio:first-child .radio__default').prop('checked', true);
                if (kviz_group_1_value == 'spb') {
                    jQuery('.modal__wrap--benefits .test__block.region__container .test__variants .test__radio:first-child .radio__default').val('Зарегистрирован в СПб и ЛО');
                    jQuery('.modal__wrap--benefits .test__block.region__container .test__variants .test__radio:first-child label').html('Зарегистрирован в СПб и ЛО');
                }
                if (kviz_group_1_value == 'in_to_spb') {
                    jQuery('.modal__wrap--benefits .test__block.region__container .test__variants .test__radio:first-child .radio__default').val('Планирую переезд в СПб и ЛО');
                    jQuery('.modal__wrap--benefits .test__block.region__container .test__variants .test__radio:first-child label').html('Планирую переезд в СПб и ЛО');
                }
            }
            
            if (form_id == 'calculator') {
                jQuery('.nav-calc__title').click();
                jQuery('.modal__wrap--test .test__block.region__container .test__variants .test__radio:first-child .radio__default').prop('checked', true);
                if (kviz_group_1_value == 'spb') {
                    jQuery('.modal__wrap--test .test__block.region__container .test__variants .test__radio:first-child .radio__default').val('Зарегистрирован в СПб и ЛО');
                    jQuery('.modal__wrap--test .test__block.region__container .test__variants .test__radio:first-child label').html('Зарегистрирован в СПб и ЛО');
                }
                if (kviz_group_1_value == 'in_to_spb') {
                    jQuery('.modal__wrap--test .test__block.region__container .test__variants .test__radio:first-child .radio__default').val('Планирую переезд в СПб и ЛО');
                    jQuery('.modal__wrap--test .test__block.region__container .test__variants .test__radio:first-child label').html('Планирую переезд в СПб и ЛО');
                }
            }

        } else {
            if (kviz_group_1_value == 'spb') {
                jQuery('.calculation__inner--inpost .calculation__tab:first-child .radio__label').each(function() {
                    var current_value = jQuery(this).html();
                    var find_str = "Санкт-Петербург"
                    if (current_value) {
                        if (current_value.includes(find_str)) {
                            jQuery(this).html('Зарегистрирован в СПб и ЛО');
                            jQuery(this).parent().find('.radio__default').prop('checked', true);
                            jQuery('.calculation__btn.calculation__btn--next').click();
                        }
                    }
                });
                
                if (jQuery('body').hasClass('page-template-services-uslugi')) {
                    jQuery('.calculation__inner .calculation__tab:first-child .radio__label').each(function() {
                        var current_value = jQuery(this).html();
                        var find_str = "Санкт-Петербург"
                        if (current_value) {
                            if (current_value.includes(find_str)) {
                                jQuery(this).html('Зарегистрирован в СПб и ЛО');
                                jQuery(this).parent().find('.radio__default').prop('checked', true);
                                jQuery('.calculation__btn.calculation__btn--next').click();
                            }
                        }
                    });
                }
                
            }
            
            if (kviz_group_1_value == 'in_to_spb') {
                jQuery('.calculation__inner--inpost .calculation__tab:first-child .radio__label').each(function() {
                    var current_value = jQuery(this).html();
                    var find_str = "Санкт-Петербург"
                    if (current_value) {
                        if (current_value.includes(find_str)) {
                            jQuery(this).html('Планирую переезд в СПб и ЛО');
                            jQuery(this).parent().find('.radio__default').prop('checked', true);
                            jQuery('.calculation__btn.calculation__btn--next').click();
                        }
                    }
                });
                
                if (jQuery('body').hasClass('page-template-services-uslugi')) {
                    jQuery('.calculation__inner .calculation__tab:first-child .radio__label').each(function() {
                        var current_value = jQuery(this).html();
                        var find_str = "Санкт-Петербург"
                        if (current_value) {
                            if (current_value.includes(find_str)) {
                                jQuery(this).html('Планирую переезд в СПб и ЛО');
                                jQuery(this).parent().find('.radio__default').prop('checked', true);
                                jQuery('.calculation__btn.calculation__btn--next').click();
                            }
                        }
                    });
                }
                
            }
    
    
    
    
            if (document_block_id) {
                //console.log('scroll to block');
                var destination = jQuery('#' + document_block_id).offset().top - 100;
                jQuery('body, html').animate({ scrollTop: destination }, 1100)
            }            
        }


        /* Popup Events */

        jQuery('.popup-item__cnt .popup__close').click(function() {
            let scroll_destination = jQuery(this).closest('.popup-item__cnt').attr('data-scroll-destination');
            jQuery(this).closest('.popup-item__cnt').addClass('hidden');
            jQuery(this).closest('.popup__cnt').addClass('hidden');
            //jQuery('body').css({"position": "initial"});
            jQuery('body').removeClass('body-fixed');
            jQuery('.section--modal .modal__overlay').addClass('hidden');
            jQuery('.section--modal .modal__overlay .modal__wrap--answer').addClass('hidden');
            if (jQuery(this).closest('.popup-item__cnt').hasClass('calculator__cnt')) {
                jQuery('.popup__cnt .popup__overlay').removeClass('white');
            }
            if (scroll_destination != undefined && scroll_destination != null) {
                jQuery('body, html').animate({ scrollTop: scroll_destination }, 0);
            }
        });

        jQuery('.calculator-navbar .calculator-content__cnt').click(function() {
            jQuery('.popup__cnt').removeClass('hidden');
            jQuery('.popup__cnt .calculator__cnt').removeClass('hidden');
            //jQuery('body').css({"position": "fixed"});
            jQuery('body').addClass('body-fixed');
            //jQuery('.popup__cnt .popup__overlay').addClass('white');
        });
        
        jQuery('.popup-item__cnt .calculation__tab .calculation__checkbox.checkbox_donot_know').click(function() {
            
        });
        
        

        /* Popup Events */

        /* Calculator Navbar Events */
        /*
        jQuery(".calculator-navbar .calculator-content__cnt").on({
            mouseenter: function () {
                localStorage.fpa_calculator_state = 'show';
                //stuff to do on mouse enter
            },
            mouseleave: function () {
                //stuff to do on mouse leave
            }
        });
        */
        
        jQuery(document).on('click', '.calculator-navbar__close', function () {
            jQuery(this).closest('.calculator-navbar').find('.calculator-navbar__wrap').addClass('calculator-navbar__wrap--hide');
            jQuery(this).closest('.calculator-navbar').addClass('toggle');
            console.log('localStorage.fpa_calculator_state');
            localStorage.fpa_calculator_state = 'hidden';
        });
        jQuery(document).on('mouseenter','.calculator-navbar.toggle', function (event) {
            jQuery('.calculator-navbar .calculator-content__cnt .calculator-navbar__wrap').removeClass('calculator-navbar__wrap--hide');
            jQuery('.calculator-navbar.toggle .calculator-content__cnt .calculator-navbar__toggle .calculator-navbar__note').addClass('no-visible');
        }).on('mouseleave','.calculator-navbar.toggle',  function(){
            jQuery('.calculator-navbar .calculator-content__cnt .calculator-navbar__wrap').addClass('calculator-navbar__wrap--hide');
            jQuery('.calculator-navbar.toggle .calculator-content__cnt .calculator-navbar__toggle .calculator-navbar__note').removeClass('no-visible');    
        });
        
        /* Calculator Navbar Events */
        
        
        
        /* Range Slider Field Events */
        
        var $range = jQuery(".js-range-slider");
        var $input = jQuery(".js-range-slider-value");
        var instance;
        var min = 0;
        var max = 3000000;
        var from = 1000000;
        var step = 10000;
        //var marks = [50000, 3000000]
        
        $range.ionRangeSlider({
            skin: "round",
            type: "single",
            min: min,
            max: max,
            from: from,
            step: step,
            grid: false,
            grid_num: 10,
            grid_snap: false,
            onStart: function(data) {
                //let str = data.from;
                //str = str.toString().replace(/[^\d]/g, '');
                //console.log(str);
                $input.prop("value", jQuery.number( data.from, 0, '.', ' ' ));
                //$input.prop("value", str);
                /*addMarks(data.slider);*/
            },
            onChange: function(data) {
                if (data.from == 0) {
                    //$input.prop("value", 'Менее 50 000 рублей');
                    jQuery(".js-range-slider-value").prop("value", 'Менее 50 000 рублей');
                    jQuery(".wpcf7-form input[name=summ]").val('Менее 50 000 рублей');
                    //jQuery('.calculation__tab .checkbox_donot_know.hidden label').html('Менее 50 000 рублей');
                    $input.closest('.calculation__tab').find('.checkbox_donot_know.hidden').find('label').html('Менее 50 000 рублей');
                    
                }
                if ((data.from > 0) && (data.from < 3000000)) {
                    //$input.prop("value", jQuery.number( data.from, 0, '.', ' ' ));
                    jQuery(".js-range-slider-value").prop("value", jQuery.number( data.from, 0, '.', ' ' ));
                    jQuery(".wpcf7-form input[name=summ]").val(jQuery.number( data.from, 0, '.', ' ' ) + ' рублей');
                    //jQuery('.calculation__tab .checkbox_donot_know.hidden label').html(jQuery.number( data.from, 0, '.', ' ' ) + ' рублей');
                    $input.closest('.calculation__tab').find('.checkbox_donot_know.hidden').find('label').html(jQuery.number( data.from, 0, '.', ' ' ) + ' рублей');
                }
                if (data.from == 3000000) {
                    //$input.prop("value", 'Более 3 000 000 рублей');
                    jQuery(".js-range-slider-value").prop("value", 'Более 3 000 000 рублей');
                    jQuery(".wpcf7-form input[name=summ]").val('Более 3 000 000 рублей');
                    //jQuery('.calculation__tab .checkbox_donot_know.hidden label').html('Более 3 000 000 рублей');
                    $input.closest('.calculation__tab').find('.checkbox_donot_know.hidden').find('label').html('Более 3 000 000 рублей');
                    
                }
                $input.closest('.calculation__tab').find('input#calc_1_8').prop('checked', true);
                //jQuery('#services_calculation .calculation__tab input#calc_1_8').prop('checked', true);
            },
            onFinish: function(data) {
                jQuery(".js-range-slider").each(function() {
                    var instance_tmp = jQuery(this).data("ionRangeSlider");
                    instance_tmp.update({
                        from: data.from
                    }); 
                });
            }
        });
        /*
        function convertToPercent(num) {
            return (num - min) / (max - min) * 100;
        }
        */
        /*
        function addMarks($slider) {
            var html = '';
            var left = 0;
            var left_p = "";
            var i;
        
            for (i = 0; i < marks.length; i++) {
                left = convertToPercent(marks[i]);
                left_p = left + "%";
                html += '<span class="showcase__mark showcase__mark_' + i + '" style="left: ' + left_p + '">';
                if (marks[i] == 50000) { html += 'Менее 50 000 руб.'; }
                if (marks[i] == 3000000) { html += 'Более 3 000 000 руб.'; }
                html += '</span>';
            }
        
            $slider.append(html);
        }
        */
        
        instance = $range.data("ionRangeSlider");
        $input.on("input", function() {
            var val = $(this).prop("value").replace(/[a-zа-яё ]/gi,'');
            console.log(val);
            /*replace(/[a-zа-яё]/gi, '');*/
            if (val < 0) {
                //$(this).val('Менее 50 000 рублей');
                //jQuery(".js-range-slider-value").val('Менее 50 000 рублей');
                $input.closest('.calculation__tab').find('.js-range-slider-value').val('Менее 50 000 рублей');
                jQuery(".wpcf7-form input[name=summ]").val('Менее 50 000 рублей');
                //jQuery('.calculation__tab .checkbox_donot_know.hidden label').html('Менее 50 000 рублей');
                $input.closest('.calculation__tab').find('.checkbox_donot_know.hidden').find('label').html('Менее 50 000 рублей');
            }
            if ((val > 0) && (val < 3000000)) {
                //$(this).val(jQuery.number( val, 0, '.', ' ' ));
                //jQuery(".js-range-slider-value").val(jQuery.number( val, 0, '.', ' ' ));
                $input.closest('.calculation__tab').find('.js-range-slider-value').val(jQuery.number( val, 0, '.', ' ' ));
                jQuery(".wpcf7-form input[name=summ]").val(jQuery.number( val, 0, '.', ' ' ));
                //jQuery('.calculation__tab .checkbox_donot_know.hidden label').html(jQuery.number( val, 0, '.', ' ' ) + ' рублей');
                $input.closest('.calculation__tab').find('.checkbox_donot_know.hidden').find('label').html(jQuery.number( val, 0, '.', ' ' ) + ' рублей');
            }
            if (val > 3000000) {
                //$(this).val(jQuery.number( val, 0, '.', ' ' ));
                //jQuery(".js-range-slider-value").val(jQuery.number( val, 0, '.', ' ' ));
                $input.closest('.calculation__tab').find('.js-range-slider-value').val(jQuery.number( val, 0, '.', ' ' ));
                jQuery(".wpcf7-form input[name=summ]").val(jQuery.number( val, 0, '.', ' ' ) + ' рублей');
                //jQuery('.calculation__tab .checkbox_donot_know.hidden label').html(jQuery.number( val, 0, '.', ' ' ) + ' рублей');
                $input.closest('.calculation__tab').find('.checkbox_donot_know.hidden').find('label').html(jQuery.number( val, 0, '.', ' ' ) + ' рублей');
            }
            
            //jQuery('#services_calculation .calculation__tab input#calc_1_8').prop('checked', true);
            $input.closest('.calculation__tab').find('input#calc_1_8').prop('checked', true);
            // validate
            if (val < min) {
                /*val = min;*/
                val = 0;
            } else if (val > max) {
                /*val = max;*/
                val = 3000000;
            }
            /*
            instance.update({
                from: val
            });
            */
            jQuery(".js-range-slider").each(function() {
                var instance_tmp = jQuery(this).data("ionRangeSlider");
                instance_tmp.update({
                    from: val
                }); 
            });
            
        });
        
        if (jQuery(".js-range-slider-value").length > 0) {
            jQuery(".wpcf7-form input[name=summ]").val(jQuery.number(jQuery(".js-range-slider-value").val(), 0, '.', ' ' ) + ' рублей');
        }
        
        
        jQuery('body.single main .sngl .calculation-v2 .calculation__tab h4.calculation__title span.number').each(function() {
            jQuery(this).remove();
        });
        
        jQuery('.calculation__tab label:contains("Затрудняюсь")').each(function() {
            jQuery(this).parent().addClass('difficult_answer');
        });
        
        if (jQuery('body').hasClass('page-template-bankruptcy2cost')) {
            jQuery('.calculation__tab label:contains("300 000")').each(function() {
                jQuery(this).parent().addClass('difficult_answer');
            });    
        }
        
        
        jQuery('section.feedback form.wpcf7-form .form__row div.select_item .select__head').click(function () {
            if (jQuery(this).hasClass('open')) {
                jQuery(this).closest('div.select_item').removeClass('border_modifed');
                jQuery(this).removeClass('open');
                jQuery(this).next().fadeOut();
            } else {
                jQuery(this).closest('div.select_item').addClass('border_modifed');
                jQuery('section.feedback form.wpcf7-form .form__row .select_item .select__head').removeClass('open');
                jQuery('section.feedback form.wpcf7-form .form__row .select_item .select__list').fadeOut();
                jQuery(this).addClass('open');
                jQuery(this).next().fadeIn();
            }
        });

        jQuery('section.feedback form.wpcf7-form .form__row li.select__item').click(function () {
            console.log('li.select_item');
            jQuery(this).closest('div.select_item').removeClass('border_modifed');
            jQuery(this).closest('div.select_item').find('.select__head').removeClass('open');
            jQuery(this).closest('div.select_item').find('.select__list').fadeOut();
            //jQuery(this).closest('div.select_item').find('.select__head').text(jQuery(this).text());
            jQuery(this).closest('div.select_item').find('.select__head').html(jQuery(this).html());
            jQuery(this).closest('div.select_item').find('.hidden_field__cnt').find('input[type=text]').val(jQuery(this).text());
            
            if (jQuery(this).closest('.form__row').hasClass('customer_request')) {
                jQuery(this).closest('form.wpcf7-form').find('input[name=customer_request]').val(jQuery(this).attr('data-value'));
            }
            if (jQuery(this).closest('.form__row').hasClass('lawyer_field')) {
                jQuery(this).closest('form.wpcf7-form').find('input[name=lawyer_field]').val(jQuery(this).attr('data-value'));
            }
            if (jQuery(this).closest('.form__row').hasClass('subject')) {
                jQuery(this).closest('form.wpcf7-form').find('input[name=subject]').val(jQuery(this).attr('data-value'));
            }

            //jQuery(this).parent().prev().text(jQuery(this).text());
            //jQuery(this).parent().prev().prev().val(jQuery(this).text());
        });
/*
    jQuery(document).click(function (e) {
        if (!$(e.target).closest('.select').length) {
            $('section.feedback form.wpcf7-form .form__row div.select_item .select__head').removeClass('open');
            $('section.feedback form.wpcf7-form .form__row div.select_item .select__list').fadeOut();
        }
    });
*/
        
        
        
        
        
        
        jQuery('.calculation__tab .calculation__variants .calculation__radio').click(function() {
            if (jQuery(this).hasClass('difficult_answer')) {
                jQuery(this).addClass('checked');
            } else {
                jQuery(this).closest('.calculation__variants').find('.difficult_answer').removeClass('checked');
            }
        });
        
        
        jQuery('body.page-template-bankruptcy5cost .bankruptcy2cost__lst li span.bankruptcy2cost__hint--bold').click(function() {
            jQuery(this).closest('.bankruptcy2cost__wrap').find('.bankruptcy2cost__btn').click();
        });
        
        
        
        jQuery('body.page-template-thanks-variations #spasibo_variants_intro .variations__cnt .calculation__radio').click(function() {
            let data_video_list = jQuery(this).attr('data-video-list');
            let current_value = jQuery(this).find('label').attr('data-value');
            jQuery('body.page-template-thanks-variations #spasibo_variants_why_us .content__cnt .row__cnt .item__cnt .svg__cnt').addClass('hidden');
            jQuery('body.page-template-thanks-variations #spasibo_variants_why_us .content__cnt .row__cnt .item__cnt .svg__cnt.'+current_value).removeClass('hidden');
            jQuery('body.page-template-thanks-variations #spasibo_variants_why_us .content__cnt .row__cnt .title__cnt').addClass('hidden');
            jQuery('body.page-template-thanks-variations #spasibo_variants_why_us .content__cnt .row__cnt .title__cnt.'+current_value).removeClass('hidden');
            jQuery('body.page-template-thanks-variations #spasibo_variants_why_us .content__cnt .row__cnt .text').addClass('hidden');
            jQuery('body.page-template-thanks-variations #spasibo_variants_why_us .content__cnt .row__cnt .text.'+current_value).removeClass('hidden');
            jQuery('body.page-template-thanks-variations #spasibo_variants_why_us').removeClass('hidden');
            jQuery('body.page-template-thanks-variations #spasibo_variants_examples_cases .content__cnt .title__cnt').addClass('hidden');
            jQuery('body.page-template-thanks-variations #spasibo_variants_examples_cases .content__cnt .title__cnt.'+current_value).removeClass('hidden');
            jQuery('body.page-template-thanks-variations #spasibo_variants_examples_cases .video_block__cnt .video__cnt').empty();
            jQuery.each(  data_video_list.split(','), function( key, value ) {
                jQuery('body.page-template-thanks-variations #spasibo_variants_examples_cases .video_block__cnt .video__cnt').append("<div class=\"video_item__cnt\"><div class=\"reviews__video\"><div class=\"youtube\" data-embed=\""+value+"\" onclick=\"ym(82134583,'reachGoal','start')\"><div class=\"youtube__button\"><svg><use xlink:href=\"https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play\"></use></svg></div><img src=\"https://img.youtube.com/vi/"+value+"/hqdefault.jpg\" alt=\"Превью для видео\"></div></div></div>");
            });
            jQuery('body.page-template-thanks-variations #spasibo_variants_examples_cases').removeClass('hidden');
            jQuery('body.page-template-thanks-variations #spasibo_variants_please_consider .content__cnt .row__cnt .title__cnt').addClass('hidden');
            jQuery('body.page-template-thanks-variations #spasibo_variants_please_consider .content__cnt .row__cnt .title__cnt.'+current_value).removeClass('hidden');
            jQuery('body.page-template-thanks-variations #spasibo_variants_please_consider .content__cnt .row__cnt .text').addClass('hidden');
            jQuery('body.page-template-thanks-variations #spasibo_variants_please_consider .content__cnt .row__cnt .text.'+current_value).removeClass('hidden');
            var obj_offsetTop = jQuery('body.page-template-thanks-variations #spasibo_variants_why_us').position().top;
            jQuery('body, html').animate({ scrollTop: obj_offsetTop }, 1100);
        });
        
        
        jQuery('body.page-template-thanks-variations #spasibo_variants_examples_cases .variations__cnt .calculation__radio').click(function() {
            let current_value = jQuery(this).find('label').attr('data-value');
            jQuery('body.page-template-thanks-variations #spasibo_variants_pain .content__cnt .row__cnt .title__cnt').addClass('hidden');
            jQuery('body.page-template-thanks-variations #spasibo_variants_pain .content__cnt .row__cnt .title__cnt.'+current_value).removeClass('hidden');
            jQuery('body.page-template-thanks-variations #spasibo_variants_pain .content__cnt .row__cnt .text').addClass('hidden');
            jQuery('body.page-template-thanks-variations #spasibo_variants_pain .content__cnt .row__cnt .text.'+current_value).removeClass('hidden');
            jQuery('body.page-template-thanks-variations #spasibo_variants_pain').removeClass('hidden');
            jQuery('body.page-template-thanks-variations #spasibo_variants_please_consider').removeClass('hidden');
            var obj_offsetTop = jQuery('body.page-template-thanks-variations #spasibo_variants_pain').position().top;
            jQuery('body, html').animate({ scrollTop: obj_offsetTop }, 1100);
        });
        

        
        jQuery('.mfc .mfc__btn.hidden-btn').click(function() {
            var popup_id = jQuery(this).attr('data-popup-id');
            var color_scheme = jQuery(this).attr('data-color-schema');
            console.log(color_scheme);
            jQuery('.popup__cnt').removeClass('hidden');
            jQuery('.popup__cnt .'+popup_id).removeClass('hidden');
            jQuery('.popup__cnt .'+popup_id).addClass(jQuery(this).attr('data-color-schema'));
            //jQuery('body').css({"position": "fixed"});
            jQuery('body').addClass('body-fixed');
        });
        
        jQuery('.bankruptcy2cost__btn.hidden-btn').click(function() {
            var popup_id = jQuery(this).attr('data-popup-id');
            var color_scheme = jQuery(this).attr('data-color-schema');
            console.log(color_scheme);
            jQuery('.popup__cnt').removeClass('hidden');
            jQuery('.popup__cnt .'+popup_id).removeClass('hidden');
            jQuery('.popup__cnt .'+popup_id).addClass(jQuery(this).attr('data-color-schema'));
            //jQuery('body').css({"position": "fixed"});
            jQuery('body').addClass('body-fixed');
        });
        
        
        jQuery('.range-slider .js-range-slider-value').focus(function() {
            let str = jQuery(this).val();
            str = str.toString().replace(/[^\s\d]/g, '');
            jQuery(this).val(str);
                //$input.prop("value", str);
        });
        /*
        jQuery('.range-slider .js-range-slider-value').focusout(function() {
            let str = parseInt(jQuery(this).val(), 10);
            if (str < 50000) {
                jQuery(this).val('Менее 50 000 рублей');
            }
            if (str < 50000 && str > 3000000) {
                jQuery(this).val(jQuery.number( str, 0, '.', ' ' ));
            }
            if (str > 3000000) {
                jQuery(this).val('Более 3 000 000 рублей');
            }
        })
        */
        /*
        jQuery('.range-slider .js-range-slider-value').focusout(function() {
            console.log('focusout');
            let str = jQuery(this).val();
            str = str.toString().replace(/[^\s\d]/g, '');
            
            //jQuery(this).val(jQuery.number( str, 0, '.', ' ' ));
            
            if (parseInt(str) < parseInt(50000)) {
                jQuery(this).val('Менее 50 000 рублей');
                console.log('Менее 50 000 рублей');
            }
            if ((parseInt(str) < parseInt(50000)) && (parseInt(str) > parseInt(3000000))) {
                jQuery(this).val(jQuery.number( str, 0, '.', ' ' ));
                console.log(jQuery.number( str, 0, '.', ' ' ));
            }
            if (parseInt(str) > parseInt(3000000)) {
                jQuery(this).val('Более 3 000 000 рублей');
                console.log('Более 3 000 000 рублей');
            }
            
        });
        */
        
        /*
        jQuery(window).on('popstate', function() {
            location.reload(true);
        });
        */
        /*
        if(performance.navigation.type == 2){
            location.reload(true);
        }
        */
        /*
        window.addEventListener( "pageshow", function ( event ) {
            var historyTraversal = event.persisted || ( typeof window.performance != "undefined" && window.performance.navigation.type === 2 );
            if ( historyTraversal ) {
                // Handle page restore.
                window.location.reload();
            }
        });
        */
        
        /* Dela filter events */
        /*
        var filter_option_type_creditors = sessionStorage.getItem('filter_option_type-creditors');
        if (filter_option_type_creditors != null) {
            jQuery('body.page-template-dela-int .form-filter__wrap .radio input[name=type-creditors]').each(function() {
                var current_value = jQuery(this).closest('.radio').find('label').html();
                if (current_value == filter_option_type_creditors) {
                    jQuery(this).prop('checked', true);
                } 
            });    
        }
        var filter_option_creditors = sessionStorage.getItem('filter_option_creditors');
        if (filter_option_creditors != null) {
            jQuery('body.page-template-dela-int .form-filter__wrap .radio input[name=creditors]').each(function() {
                var current_value = jQuery(this).closest('.radio').find('label').html();
                if (current_value == filter_option_creditors) {
                    jQuery(this).prop('checked', true);
                } 
            });    
        }
        var filter_option_reviews = sessionStorage.getItem('filter_option_reviews');
        if (filter_option_reviews != null) {
            jQuery('body.page-template-dela-int .form-filter__wrap .radio input[name=reviews]').each(function() {
                var current_value = jQuery(this).closest('.radio').find('label').html();
                if (current_value == filter_option_reviews) {
                    jQuery(this).prop('checked', true);
                } 
            });    
        }
        var filter_option_int_category = sessionStorage.getItem('filter_option_int-category');
        if (filter_option_int_category != null) {
            jQuery('body.page-template-dela-int .form-filter__wrap .radio input[name=int-category]').each(function() {
                var current_value = jQuery(this).closest('.radio').find('label').html();
                if (current_value == filter_option_int_category) {
                    jQuery(this).prop('checked', true);
                } 
            });    
        }
        */
        
        sessionStorage.setItem('filter_option_type-creditors', 'Все типы');
        sessionStorage.setItem('filter_option_creditors', 'Все банки');
        sessionStorage.setItem('filter_option_reviews', 'Все дела');
        //sessionStorage.setItem('filter_option_int-category', 'Все дела');
        sessionStorage.setItem('filter_option_int-category', '');
        sessionStorage.setItem('filter_option_min_summ', '0');
        sessionStorage.setItem('filter_option_max_summ', '100000000');
        
        jQuery('body.page-template-dela-int .form-filter__range--summ').change(function() {
            jQuery('.form-filter .range-list--summ li').removeClass('show');
            jQuery('.form-filter .range-list--summ li[data-value='+jQuery(this).val()+']').addClass('show');
            var min_summ = jQuery('.form-filter .range-list--summ li[data-value='+jQuery(this).val()+']').attr('data-min-summ');
            var max_summ = jQuery('.form-filter .range-list--summ li[data-value='+jQuery(this).val()+']').attr('data-max-summ');
            sessionStorage.setItem('filter_option_min_summ', min_summ);
            sessionStorage.setItem('filter_option_max_summ', max_summ);
            
            
            
                
            jQuery('.form-filter__block--interesting').addClass('disabled');
            jQuery('.form-filter__wrap .form-filter__block--type-creditors').removeClass('disabled');
            if (jQuery('.form-filter__block--type-creditors input[type="radio"][name="type-creditors"][value="1"]').prop('checked')) {
                jQuery('.form-filter__wrap .form-filter__block--banks').removeClass('disabled');    
            }
            jQuery('.form-filter__wrap .form-filter__block--reviews').removeClass('disabled');
            sessionStorage.setItem('filter_option_int-category', '');
            jQuery('.form-filter__block--interesting input[type="radio"]').prop('checked', false)
            
            /*
            sessionStorage.setItem('filter_option_type-creditors', 'Все типы');
            sessionStorage.setItem('filter_option_reviews', 'Все дела');
            sessionStorage.setItem('filter_option_creditors', 'Все банки');
            */
            
            
            
            
            
            
            
            
            
            
            
            /* Ajax request */
            var ajax_params = '';
            var filter_option_type_creditors = sessionStorage.getItem('filter_option_type-creditors');
            var filter_option_creditors = sessionStorage.getItem('filter_option_creditors');
            var filter_option_reviews = sessionStorage.getItem('filter_option_reviews');
            var filter_option_int_category = sessionStorage.getItem('filter_option_int-category');
            var filter_option_min_summ = sessionStorage.getItem('filter_option_min_summ');
            var filter_option_max_summ = sessionStorage.getItem('filter_option_max_summ');
            if (filter_option_type_creditors != 'Все типы' && filter_option_type_creditors != null) {
                if (ajax_params != '') {
                    ajax_params += '&';
                }
                ajax_params += 'filter_option_type_creditors='+filter_option_type_creditors;
            }
            if (filter_option_creditors != 'Все банки' && filter_option_creditors != null) {
                if (ajax_params != '') {
                    ajax_params += '&';
                }
                ajax_params += 'filter_option_creditors='+filter_option_creditors;
            }
            if (filter_option_reviews != 'Все дела' && filter_option_reviews != null) {
                if (ajax_params != '') {
                    ajax_params += '&';
                }
                ajax_params += 'filter_option_reviews='+filter_option_reviews;
            }
            if (filter_option_int_category != '' && filter_option_int_category != null) {
                if (ajax_params != '') {
                    ajax_params += '&';
                }
                ajax_params += 'filter_option_int_category='+filter_option_int_category;
            }
            if ((filter_option_min_summ != '0' && filter_option_min_summ != null) && (filter_option_max_summ != '100000000' && filter_option_max_summ != null)) {
                if (ajax_params != '') {
                    ajax_params += '&';
                }
                ajax_params += 'filter_option_min_summ='+filter_option_min_summ+'&filter_option_max_summ='+filter_option_max_summ;
            }
            console.log(ajax_params);
            if (ajax_params != '') {
                jQuery('.form-filter__block--reset button').removeClass('hide');
            } else {
                jQuery('.form-filter__block--reset button').addClass('hide');
            }
        	jQuery.ajax({
    			url: '<?php echo admin_url( "admin-ajax.php" ) ?>',
    			type: 'POST',
    			data: 'action=filter_int_action&'+ajax_params,
    			beforeSend: function( xhr ) {
    				/*$('#misha_button').text('Загрузка, 5 сек...');	*/
    				jQuery('main .cases .cases__wrap').addClass('hidden');
    				jQuery('main .cases .btn--cases.btn-load-all').addClass('hidden');
    				jQuery('main .cases .cases__loader').removeClass('hidden');
    				jQuery('main .cases .cases__wrap').html('');
    				jQuery("html, body").stop().animate({scrollTop:200}, 500, 'swing', function() {});
    				
    			},
    			success: function( data ) {
    				/*$('#misha_button').text('Отправить');	*/
    				var answer = jQuery.parseJSON(data);
    				console.log(answer);
    				//let  = jQuery('main .cases .cases__wrap article').length;
    				console.log(answer.length);
    				window.GlobalDelaArray = answer;
    				if (answer.length > 0) {
        				let i = 0;
        				while ((i < 10) && (i < answer.length)) {
        				    let additional_cnt = '';
        				    let answer_creditors_cnt = '';
        				    if (answer[i]['creditors'].length > 120) {
        				        answer_creditors_text_cnt = answer[i]['creditors'].substring(0, 120);
                                var lastIndex = answer_creditors_text_cnt.lastIndexOf(" ");
                                answer_creditors_text_cnt = answer_creditors_text_cnt.substring(0, lastIndex) + '...';
        				        answer_creditors_cnt = answer_creditors_text_cnt+'<div class="case__call case__call--data read--more">Читать полностью</div>';
        				    } else {
        				        answer_creditors_cnt = answer[i]['creditors'];
        				    }
        				    if (i == 1) {
        				        additional_cnt = '<div class="guarantees"><div class="guarantees__head"><h3 class="guarantees__title">Наши гарантии</h3></div><div class="guarantees__body"><div class="guarantees__item"><span class="guarantees__number">Пункт 3.1. Договора закрепляет:</span><span class="guarantees__text"> Исполнитель гарантирует полное освобождение Заказчика от долгов. В обратном случае оплата юридических услуг возвращается Заказчику в полном объеме по первому требованию в течение 7 рабочих дней.</span></div></div></div>';
        				    }
        				    if (i == 4) {
        				        var data_case_total = jQuery('body.page-template-dela-int .cases').attr('data-case-total');
        				        var data_total_txt = jQuery('body.page-template-dela-int .cases').attr('data-total-txt');
        				        var data_case_successful = jQuery('body.page-template-dela-int .cases').attr('data-case-successful');
        				        var data_case_successful_txt = jQuery('body.page-template-dela-int .cases').attr('data-case-successful-txt');
        				        additional_cnt = '<div class="results results--in-dela"><h3 class="results__title">На <span class="case-lastdate__"><?php echo date( 'd ' . $date_arr[date( 'n' )] . ' Y' ) ?>&nbsp;г.</span>&nbsp;мы помогли <span class="case-total">'+data_case_successful_txt+'</span>&nbsp;<span class="case-client">клиентам</span></h3><div class="results__block results__block--inner"><div class="results__data results__data--in-dela"><ul class="results__lst results__lst--in-dela"><li class="results__lst-item"><span class="results__number results__number--symbol results-number case-total results-number-1" data-start="0" data-number="'+data_case_total+'">'+data_total_txt+'</span><span class="results__label case-works">Дел в работе</span></li><li class="results__lst-item"><span class="results__number results-number case-successful results-number-2" data-start="0" data-number="'+data_case_successful+'">'+data_case_successful_txt+'</span><span class="results__label case-success">Выигранные дела</span></li><li class="results__lst-item"><span class="results__number">0</span><span class="results__label">Проигранных дел</span></li></ul><div class="results__note hidden">* данные актуальны на&nbsp;19 апреля 2022&nbsp;г.</div></div><ul class="results__chart"><li class="results__chart-item"><div class="results__chart-line results__chart-line--1"><span class="results__digit results__digit--small">128</span><span class="results__year">2016</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--2"><span class="results__digit results__digit--middle">895</span><span class="results__year">2017</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--3"><span class="results__digit results__digit--middle">2&nbsp;540</span><span class="results__year">2018</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--4"><span class="results__digit">4&nbsp;108</span><span class="results__year">2019</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--5"><span class="results__digit">6&nbsp;591</span><span class="results__year">2020</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--6"><span class="results__digit">9&nbsp;130</span><span class="results__year">2021</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--7"><span class="results__digit">11&nbsp;391</span><span class="results__year">2022</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--last"><span class="results__digit results__digit--last case-total">'+data_total_txt+'</span><span class="results__digit results__digit--current case-in-works">дел в работе</span><span class="results__year">2023</span></div></li></ul></div></div>';
        				    }
        				    
        				    var otzyv_value = answer[i]['otzyv'];
        				    var video_otzyv_html = '';
        				    var photo_otzyv_html = '';
        				    if (otzyv_value != null && otzyv_value != '') {
            				    if (otzyv_value.includes('fpa.ru')) {
            				        photo_otzyv_html = '<a class="original-link original-link--case" href="'+otzyv_value+'" target="_blank"><span class="original-link__thumb original-link__thumb--case original-link__thumb--case-foto"></span><span class="original-link__text">Фотоотзыв</span></a>';
            				    } else {
            				        video_otzyv_html = '<div class="case__video"><div class="youtube" data-embed="'+otzyv_value+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img src="https://img.youtube.com/vi/'+otzyv_value+'/hqdefault.jpg" alt="Превью для видео"></div></div>';
            				    }    
        				    }
        				    var additional_info_cnt = '';
        				    if (answer[i]['int_text'] != null) {
        				        additional_info_cnt = '<div class="case__row case__row--additional-info"><div class="case__call case__call--name">Дополнительная информация:</div><div class="case__call case__call--data">'+answer[i]['int_text']+'</div></div>                  ';
        				    }
                            jQuery('main .cases .cases__wrap').append('<article><div class="cases__item case"><h2 class="case__title">'+answer[i]['title']+'</h2><span class="case__number">№ <span>'+answer[i]['number']+'</span></span>'+video_otzyv_html+'<div class="case__original"><a class="original-link original-link--case" href="'+answer[i]['original_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><span class="original-link__thumb original-link__thumb--case original-link__thumb--case-ruling"></span><span class="original-link__text">Оригинал<br> определения суда</span></a><a class="original-link original-link--case" href="'+answer[i]['court_file_file']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><span class="original-link__thumb original-link__thumb--case original-link__thumb--case-cardfile"></span><span class="original-link__text">Картотека<br> арбитражного суда</span></a>'+photo_otzyv_html+'</div><div class="case__data"><div class="case__row case__row--debtor"><div class="case__call case__call--name">Должник: </div><div class="case__call case__call--data">'+answer[i]['debtor']+'</div></div><div class="case__row case__row--number"><div class="case__call case__call--name">Номер дела в суде: </div><div class="case__call case__call--data">'+answer[i]['case_number']+'</div></div><div class="case__row case__row--result"><div class="case__call case__call--name">Результат работы: </div><div class="case__call case__call--data">'+answer[i]['result']+'</div></div><div class="case__row case__row--period"><div class="case__call case__call--name">Срок рассмотрения дела: </div><div class="case__call case__call--data">'+answer[i]['period2']+'</div></div><div class="case__row case__row--creditors"><div class="case__call case__call--name">Список&nbsp;кредиторов:</div><div class="case__call case__call--data" data-full-text=\''+answer[i]['creditors']+'\'>'+answer_creditors_cnt+'</div></div><div class="case__row case__row--arbitration"><div class="case__call case__call--name">Арбитражный управляющий:</div><div class="case__call case__call--data"><span>'+answer[i]['arbitration_manager']+'</span></div></div><div class="case__row case__row--accompanying"><div class="case__call case__call--name">Сопровождающий юрист:</div><div class="case__call case__call--data"><span>'+answer[i]['lawyer']+'</span></div></div><div class="case__row case__row--additional-info">'+additional_info_cnt+'</div></div></div><div class="cases__block-hide">'+additional_cnt+'</div></article>');
                            i++;
                        }
        				jQuery('main .cases .cases__loader').addClass('hidden');
        				jQuery('main .cases .cases__wrap').removeClass('hidden');    
    				} else {
                        jQuery('main .cases .cases__wrap').append('<article><div class="cases__item case notify"><h2 class="case__title">Измените параметры поиска</h2><p>К сожалению по вашему запросу нет подходящих результатов</p></div></article>');    				    
                        jQuery('main .cases .cases__loader').addClass('hidden');
        				jQuery('main .cases .cases__wrap').removeClass('hidden');    
    				}
    				if (answer.length > 10) {
    				    jQuery('main .cases .btn--cases.btn-load-all').removeClass('hidden');
    				}
    			}
    		});
    		/* Ajax request */
        });
        
        jQuery('body.page-template-dela-int .form-filter__wrap .radio input[type=radio]').change(function() {
            var input_name = jQuery(this).attr('name');
            var input_value = jQuery(this).closest('.radio').find('label').html();
            sessionStorage.setItem('filter_option_'+input_name, input_value);
            if ((jQuery(this).attr('name') == 'type-creditors') && (jQuery(this).closest('.radio').find('label').html() == 'Банки')) {
                jQuery('.form-filter__wrap .form-filter__block--banks').removeClass('disabled');
            } else {
                jQuery('.form-filter__wrap .form-filter__block--banks').addClass('disabled');
            }
            
            if (jQuery(this).attr('name') == 'creditors') {
                jQuery('.form-filter__wrap .form-filter__block--banks').removeClass('disabled');
                jQuery('.form-filter__wrap .form-filter__block--type-creditors input[type="radio"][value="1"]').prop('checked', true);
                sessionStorage.setItem('filter_option_type-creditors', 'Банки');
            }
            
            if (jQuery(this).attr('name') == 'int-category') {
                jQuery(this).closest('.form-filter__block--interesting').removeClass('disabled');
                jQuery('.form-filter__wrap .form-filter__block--type-creditors').addClass('disabled');
                jQuery('.form-filter__wrap .form-filter__block--banks').addClass('disabled');
                jQuery('.form-filter__wrap .form-filter__block--reviews').addClass('disabled');
                jQuery('body.page-template-dela-int .form-filter__range--summ').val('1');
                jQuery('.form-filter .range-list--summ li').removeClass('show');
                jQuery('.form-filter .range-list--summ li[data-value=1]').addClass('show');
                jQuery('.form-filter__block input[type="radio"][name="type-creditors"][value="all"]').prop('checked', true);
                jQuery('.form-filter__block input[type="radio"][name="type-creditors"][value="all"]').prop('checked', true);
                jQuery('.form-filter__block input[type="radio"][name="creditors"][value="all"]').prop('checked', true);
                jQuery('.form-filter__block input[type="radio"][name="reviews"][value="all"]').prop('checked', true);
                sessionStorage.setItem('filter_option_min_summ', '0');
                sessionStorage.setItem('filter_option_max_summ', '100000000');
                sessionStorage.setItem('filter_option_type-creditors', 'Все типы');
                sessionStorage.setItem('filter_option_reviews', 'Все дела');
                sessionStorage.setItem('filter_option_creditors', 'Все банки');
            } else {
                jQuery('.form-filter__block--interesting').addClass('disabled');
                jQuery('.form-filter__wrap .form-filter__block--type-creditors').removeClass('disabled');
                if (jQuery('.form-filter__block--type-creditors input[type="radio"][name="type-creditors"][value="1"]').prop('checked')) {
                    jQuery('.form-filter__wrap .form-filter__block--banks').removeClass('disabled');    
                }
                jQuery('.form-filter__wrap .form-filter__block--reviews').removeClass('disabled');
                jQuery('.form-filter__block--interesting input[type=radio]').prop('checked', false);
                sessionStorage.setItem('filter_option_int-category', '');
            }
            
            var ajax_params = '';
            var filter_option_type_creditors = sessionStorage.getItem('filter_option_type-creditors');
            var filter_option_creditors = sessionStorage.getItem('filter_option_creditors');
            var filter_option_reviews = sessionStorage.getItem('filter_option_reviews');
            var filter_option_int_category = sessionStorage.getItem('filter_option_int-category');
            var filter_option_min_summ = sessionStorage.getItem('filter_option_min_summ');
            var filter_option_max_summ = sessionStorage.getItem('filter_option_max_summ');
            if (filter_option_type_creditors != 'Все типы' && filter_option_type_creditors != null) {
                if (ajax_params != '') {
                    ajax_params += '&';
                }
                ajax_params += 'filter_option_type_creditors='+filter_option_type_creditors;
            }
            if (filter_option_creditors != 'Все банки' && filter_option_creditors != null && !jQuery('.form-filter__wrap .form-filter__block--banks').hasClass('disabled')) {
                if (ajax_params != '') {
                    ajax_params += '&';
                }
                ajax_params += 'filter_option_creditors='+filter_option_creditors;
            }
            if (filter_option_reviews != 'Все дела' && filter_option_reviews != null) {
                if (ajax_params != '') {
                    ajax_params += '&';
                }
                ajax_params += 'filter_option_reviews='+filter_option_reviews;
            }
            if (filter_option_int_category != '' && filter_option_int_category != null) {
                if (ajax_params != '') {
                    ajax_params += '&';
                }
                ajax_params += 'filter_option_int_category='+filter_option_int_category;
            }
            if ((filter_option_min_summ != '0' && filter_option_min_summ != null) && (filter_option_max_summ != '100000000' && filter_option_max_summ != null)) {
                if (ajax_params != '') {
                    ajax_params += '&';
                }
                ajax_params += 'filter_option_min_summ='+filter_option_min_summ+'&filter_option_max_summ='+filter_option_max_summ;
            }
            console.log(ajax_params);
            if (ajax_params != '') {
                jQuery('.form-filter__block--reset button').removeClass('hide');
            } else {
                jQuery('.form-filter__block--reset button').addClass('hide');
            }
        	jQuery.ajax({
    			url: '<?php echo admin_url( "admin-ajax.php" ) ?>',
    			type: 'POST',
    			data: 'action=filter_int_action&'+ajax_params,
    			beforeSend: function( xhr ) {
    				/*$('#misha_button').text('Загрузка, 5 сек...');	*/
    				jQuery('main .cases .cases__wrap').addClass('hidden');
    				jQuery('main .cases .btn--cases.btn-load-all').addClass('hidden');
    				jQuery('main .cases .cases__loader').removeClass('hidden');
    				jQuery('main .cases .cases__wrap').html('');
    				jQuery("html, body").stop().animate({scrollTop:200}, 500, 'swing', function() {});
    				
    				
    				var windowsize = jQuery(window).width();
                    if (windowsize < 769) {
                        jQuery("html, body").stop().animate({scrollTop:1000}, 500, 'swing', function() {});
                    } else {
                        jQuery("html, body").stop().animate({scrollTop:200}, 500, 'swing', function() {});
                    }
    				
    				
    			},
    			success: function( data ) {
    				/*$('#misha_button').text('Отправить');	*/
    				var answer = jQuery.parseJSON(data);
    				console.log(answer);
    				//let  = jQuery('main .cases .cases__wrap article').length;
    				console.log(answer.length);
    				window.GlobalDelaArray = answer;
    				if (answer.length > 0) {
        				let i = 0;
        				while ((i < 10) && (i < answer.length)) {
        				    let additional_cnt = '';
        				    let answer_creditors_cnt = '';
        				    if (answer[i]['creditors'].length > 120) {
        				        answer_creditors_text_cnt = answer[i]['creditors'].substring(0, 120);
                                var lastIndex = answer_creditors_text_cnt.lastIndexOf(" ");
                                answer_creditors_text_cnt = answer_creditors_text_cnt.substring(0, lastIndex) + '...';
        				        answer_creditors_cnt = answer_creditors_text_cnt+'<div class="case__call case__call--data read--more">Читать полностью</div>';
        				    } else {
        				        answer_creditors_cnt = answer[i]['creditors'];
        				    }
        				    if (i == 1) {
        				        additional_cnt = '<div class="guarantees"><div class="guarantees__head"><h3 class="guarantees__title">Наши гарантии</h3></div><div class="guarantees__body"><div class="guarantees__item"><span class="guarantees__number">Пункт 3.1. Договора закрепляет:</span><span class="guarantees__text"> Исполнитель гарантирует полное освобождение Заказчика от долгов. В обратном случае оплата юридических услуг возвращается Заказчику в полном объеме по первому требованию в течение 7 рабочих дней.</span></div></div></div>';
        				    }
        				    if (i == 4) {
        				        var data_case_total = jQuery('body.page-template-dela-int .cases').attr('data-case-total');
        				        var data_total_txt = jQuery('body.page-template-dela-int .cases').attr('data-total-txt');
        				        var data_case_successful = jQuery('body.page-template-dela-int .cases').attr('data-case-successful');
        				        var data_case_successful_txt = jQuery('body.page-template-dela-int .cases').attr('data-case-successful-txt');
        				        additional_cnt = '<div class="results results--in-dela"><h3 class="results__title">На <span class="case-lastdate__"><?php echo date( 'd ' . $date_arr[date( 'n' )] . ' Y' ) ?>&nbsp;г.</span>&nbsp;мы помогли <span class="case-total">'+data_case_successful_txt+'</span>&nbsp;<span class="case-client">клиентам</span></h3><div class="results__block results__block--inner"><div class="results__data results__data--in-dela"><ul class="results__lst results__lst--in-dela"><li class="results__lst-item"><span class="results__number results__number--symbol results-number case-total results-number-1" data-start="0" data-number="'+data_case_total+'">'+data_total_txt+'</span><span class="results__label case-works">Дел в работе</span></li><li class="results__lst-item"><span class="results__number results-number case-successful results-number-2" data-start="0" data-number="'+data_case_successful+'">'+data_case_successful_txt+'</span><span class="results__label case-success">Выигранные дела</span></li><li class="results__lst-item"><span class="results__number">0</span><span class="results__label">Проигранных дел</span></li></ul><div class="results__note hidden">* данные актуальны на&nbsp;19 апреля 2022&nbsp;г.</div></div><ul class="results__chart"><li class="results__chart-item"><div class="results__chart-line results__chart-line--1"><span class="results__digit results__digit--small">128</span><span class="results__year">2016</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--2"><span class="results__digit results__digit--middle">895</span><span class="results__year">2017</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--3"><span class="results__digit results__digit--middle">2&nbsp;540</span><span class="results__year">2018</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--4"><span class="results__digit">4&nbsp;108</span><span class="results__year">2019</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--5"><span class="results__digit">6&nbsp;591</span><span class="results__year">2020</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--6"><span class="results__digit">9&nbsp;130</span><span class="results__year">2021</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--7"><span class="results__digit">11&nbsp;391</span><span class="results__year">2022</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--last"><span class="results__digit results__digit--last case-total">'+data_total_txt+'</span><span class="results__digit results__digit--current case-in-works">дел в работе</span><span class="results__year">2023</span></div></li></ul></div></div>';
        				        /*
            				    additional_cnt = '<div class="results results--in-dela"><h3 class="results__title">На <span class="case-lastdate__"><?php echo date( 'd ' . $date_arr[date( 'n' )] . ' Y' ) ?>&nbsp;г.</span>&nbsp;мы помогли <span class="case-total">10&nbsp;083</span>&nbsp;<span class="case-client">клиентам</span></h3><div class="results__block results__block--inner"><div class="results__data results__data--in-dela"><ul class="results__lst results__lst--in-dela"><li class="results__lst-item"><span class="results__number results__number--symbol results-number case-total results-number-1" data-start="0" data-number="10083">10&nbsp;083</span><span class="results__label case-works">Дел в работе</span></li><li class="results__lst-item"><span class="results__number results-number case-successful results-number-2" data-start="0" data-number="3880">3&nbsp;880</span><span class="results__label case-success">Выигранные дела</span></li><li class="results__lst-item"><span class="results__number">0</span><span class="results__label">Проигранных дел</span></li></ul><div class="results__note">* данные актуальны на&nbsp;19 апреля 2022&nbsp;г.</div></div><ul class="results__chart"><li class="results__chart-item"><div class="results__chart-line results__chart-line--1"><span class="results__digit results__digit--small">128</span><span class="results__year">2016</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--2"><span class="results__digit results__digit--middle">895</span><span class="results__year">2017</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--3"><span class="results__digit results__digit--middle">2&nbsp;540</span><span class="results__year">2018</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--4"><span class="results__digit">4&nbsp;108</span><span class="results__year">2019</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--5"><span class="results__digit">6&nbsp;591</span><span class="results__year">2020</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--6"><span class="results__digit">9&nbsp;130</span><span class="results__year">2021</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--last"><span class="results__digit results__digit--last case-total">10&nbsp;083</span><span class="results__digit results__digit--current case-in-works">дел в работе</span><span class="results__year">2022</span></div></li></ul></div></div>';       
            				    */
        				    }
        				    
        				    var otzyv_value = answer[i]['otzyv'];
        				    var video_otzyv_html = '';
        				    var photo_otzyv_html = '';
        				    if (otzyv_value != null && otzyv_value != '') {
            				    if (otzyv_value.includes('fpa.ru')) {
            				        photo_otzyv_html = '<a class="original-link original-link--case" href="'+otzyv_value+'" target="_blank"><span class="original-link__thumb original-link__thumb--case original-link__thumb--case-foto"></span><span class="original-link__text">Фотоотзыв</span></a>';
            				    } else {
            				        video_otzyv_html = '<div class="case__video"><div class="youtube" data-embed="'+otzyv_value+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img src="https://img.youtube.com/vi/'+otzyv_value+'/hqdefault.jpg" alt="Превью для видео"></div></div>';
            				    }    
        				    }
        				    var additional_info_cnt = '';
        				    if (answer[i]['int_text'] != null) {
        				        additional_info_cnt = '<div class="case__row case__row--additional-info"><div class="case__call case__call--name">Дополнительная информация:</div><div class="case__call case__call--data">'+answer[i]['int_text']+'</div></div>                  ';
        				    }
                            jQuery('main .cases .cases__wrap').append('<article><div class="cases__item case"><h2 class="case__title">'+answer[i]['title']+'</h2><span class="case__number">№ <span>'+answer[i]['number']+'</span></span>'+video_otzyv_html+'<div class="case__original"><a class="original-link original-link--case" href="'+answer[i]['original_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><span class="original-link__thumb original-link__thumb--case original-link__thumb--case-ruling"></span><span class="original-link__text">Оригинал<br> определения суда</span></a><a class="original-link original-link--case" href="'+answer[i]['court_file_file']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><span class="original-link__thumb original-link__thumb--case original-link__thumb--case-cardfile"></span><span class="original-link__text">Картотека<br> арбитражного суда</span></a>'+photo_otzyv_html+'</div><div class="case__data"><div class="case__row case__row--debtor"><div class="case__call case__call--name">Должник: </div><div class="case__call case__call--data">'+answer[i]['debtor']+'</div></div><div class="case__row case__row--number"><div class="case__call case__call--name">Номер дела в суде: </div><div class="case__call case__call--data">'+answer[i]['case_number']+'</div></div><div class="case__row case__row--result"><div class="case__call case__call--name">Результат работы: </div><div class="case__call case__call--data">'+answer[i]['result']+'</div></div><div class="case__row case__row--period"><div class="case__call case__call--name">Срок рассмотрения дела: </div><div class="case__call case__call--data">'+answer[i]['period2']+'</div></div><div class="case__row case__row--creditors"><div class="case__call case__call--name">Список&nbsp;кредиторов:</div><div class="case__call case__call--data" data-full-text=\''+answer[i]['creditors']+'\'>'+answer_creditors_cnt+'</div></div><div class="case__row case__row--arbitration"><div class="case__call case__call--name">Арбитражный управляющий:</div><div class="case__call case__call--data"><span>'+answer[i]['arbitration_manager']+'</span></div></div><div class="case__row case__row--accompanying"><div class="case__call case__call--name">Сопровождающий юрист:</div><div class="case__call case__call--data"><span>'+answer[i]['lawyer']+'</span></div></div><div class="case__row case__row--additional-info">'+additional_info_cnt+'</div></div></div><div class="cases__block-hide">'+additional_cnt+'</div></article>');
                            i++;
                        }
        				jQuery('main .cases .cases__loader').addClass('hidden');
        				jQuery('main .cases .cases__wrap').removeClass('hidden');    
    				} else {
                        jQuery('main .cases .cases__wrap').append('<article><div class="cases__item case notify"><h2 class="case__title">Измените параметры поиска</h2><p>К сожалению по вашему запросу нет подходящих результатов</p></div></article>');    				    
                        jQuery('main .cases .cases__loader').addClass('hidden');
        				jQuery('main .cases .cases__wrap').removeClass('hidden');    
    				}
    				if (answer.length > 10) {
    				    jQuery('main .cases .btn--cases.btn-load-all').removeClass('hidden');
    				}
    			}
    		});
        });

        jQuery('body.page-template-dela-int main .cases .btn--cases.btn-load-all').click(function() {
            if (typeof GlobalDelaArray !== 'undefined' && GlobalDelaArray.length > 0) {
                console.log('GlobalDelaArray exist');
                var dom_exist_items = jQuery('main .cases .cases__wrap article').length;
                console.log(dom_exist_items + ' / ' + GlobalDelaArray.length);
                if (dom_exist_items < GlobalDelaArray.length) {
                    var i = dom_exist_items;
                    while ((i < (dom_exist_items+10)) && (i < GlobalDelaArray.length)) {
        				//let additional_cnt = '';
        				let answer_creditors_cnt = '';
    				    if (GlobalDelaArray[i]['creditors'].length > 120) {
    				        answer_creditors_text_cnt = GlobalDelaArray[i]['creditors'].substring(0, 120);
                            var lastIndex = answer_creditors_text_cnt.lastIndexOf(" ");
                            answer_creditors_text_cnt = answer_creditors_text_cnt.substring(0, lastIndex) + '...';
    				        answer_creditors_cnt = answer_creditors_text_cnt+'<div class="case__call case__call--data read--more">Читать полностью</div>';
    				    } else {
    				        answer_creditors_cnt = GlobalDelaArray[i]['creditors'];
    				    }
    				    var otzyv_value = GlobalDelaArray[i]['otzyv'];
				        var video_otzyv_html = '';
    				    var photo_otzyv_html = '';
    				    if (otzyv_value != null && otzyv_value != '') {
    				        if (otzyv_value.includes('fpa.ru')) {
        				        photo_otzyv_html = '<a class="original-link original-link--case" href="'+otzyv_value+'" target="_blank"><span class="original-link__thumb original-link__thumb--case original-link__thumb--case-foto"></span><span class="original-link__text">Фотоотзыв</span></a>';
        				    } else {
        				        video_otzyv_html = '<div class="case__video"><div class="youtube" data-embed="'+otzyv_value+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img src="https://img.youtube.com/vi/'+otzyv_value+'/hqdefault.jpg" alt="Превью для видео"></div></div>';
        				    }
    				    }
				        var additional_info_cnt = '';
    				    if (GlobalDelaArray[i]['int_text'] != null) {
    				        additional_info_cnt = '<div class="case__row case__row--additional-info"><div class="case__call case__call--name">Дополнительная информация:</div><div class="case__call case__call--data">'+GlobalDelaArray[i]['int_text']+'</div></div>                  ';
    				    }
                        jQuery('main .cases .cases__wrap').append('<article><div class="cases__item case"><h2 class="case__title">'+GlobalDelaArray[i]['title']+'</h2><span class="case__number">№ <span>'+GlobalDelaArray[i]['number']+'</span></span>'+video_otzyv_html+'<div class="case__original"><a class="original-link original-link--case" href="'+GlobalDelaArray[i]['original_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><span class="original-link__thumb original-link__thumb--case original-link__thumb--case-ruling"></span><span class="original-link__text">Оригинал<br> определения суда</span></a><a class="original-link original-link--case" href="'+GlobalDelaArray[i]['court_file_file']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><span class="original-link__thumb original-link__thumb--case original-link__thumb--case-cardfile"></span><span class="original-link__text">Картотека<br> арбитражного суда</span></a>'+photo_otzyv_html+'</div><div class="case__data"><div class="case__row case__row--debtor"><div class="case__call case__call--name">Должник: </div><div class="case__call case__call--data">'+GlobalDelaArray[i]['debtor']+'</div></div><div class="case__row case__row--number"><div class="case__call case__call--name">Номер дела в суде: </div><div class="case__call case__call--data">'+GlobalDelaArray[i]['case_number']+'</div></div><div class="case__row case__row--result"><div class="case__call case__call--name">Результат работы: </div><div class="case__call case__call--data">'+GlobalDelaArray[i]['result']+'</div></div><div class="case__row case__row--period"><div class="case__call case__call--name">Срок рассмотрения дела: </div><div class="case__call case__call--data">'+GlobalDelaArray[i]['period2']+'</div></div><div class="case__row case__row--creditors"><div class="case__call case__call--name">Список&nbsp;кредиторов:</div><div class="case__call case__call--data" data-full-text="'+GlobalDelaArray[i]['creditors']+'">'+answer_creditors_cnt+'</div></div><div class="case__row case__row--arbitration"><div class="case__call case__call--name">Арбитражный управляющий:</div><div class="case__call case__call--data"><span>'+GlobalDelaArray[i]['arbitration_manager']+'</span></div></div><div class="case__row case__row--accompanying"><div class="case__call case__call--name">Сопровождающий юрист:</div><div class="case__call case__call--data"><span>'+GlobalDelaArray[i]['lawyer']+'</span></div></div><div class="case__row case__row--additional-info">'+additional_info_cnt+'</div></div></div><div class="cases__block-hide"></div></article>');
                        i++;
                    }
                }
                
                if (i == GlobalDelaArray.length) {
                    jQuery(this).addClass('hidden');
                }
                
            } else {
                //console.log('GlobalDelaArray not found');
                //jQuery(this).addClass('hidden');
                
                
                /* Ajax request */
                var ajax_params = '';
                var filter_option_type_creditors = sessionStorage.getItem('filter_option_type-creditors');
                var filter_option_creditors = sessionStorage.getItem('filter_option_creditors');
                var filter_option_reviews = sessionStorage.getItem('filter_option_reviews');
                var filter_option_int_category = sessionStorage.getItem('filter_option_int-category');
                var filter_option_min_summ = sessionStorage.getItem('filter_option_min_summ');
                var filter_option_max_summ = sessionStorage.getItem('filter_option_max_summ');
                if (filter_option_type_creditors != 'Все типы' && filter_option_type_creditors != null) {
                    if (ajax_params != '') {
                        ajax_params += '&';
                    }
                    ajax_params += 'filter_option_type_creditors='+filter_option_type_creditors;
                }
                if (filter_option_creditors != 'Все банки' && filter_option_creditors != null) {
                    if (ajax_params != '') {
                        ajax_params += '&';
                    }
                    ajax_params += 'filter_option_creditors='+filter_option_creditors;
                }
                if (filter_option_reviews != 'Все дела' && filter_option_reviews != null) {
                    if (ajax_params != '') {
                        ajax_params += '&';
                    }
                    ajax_params += 'filter_option_reviews='+filter_option_reviews;
                }
                if (filter_option_int_category != '' && filter_option_int_category != null) {
                    if (ajax_params != '') {
                        ajax_params += '&';
                    }
                    ajax_params += 'filter_option_int_category='+filter_option_int_category;
                }
                if ((filter_option_min_summ != '0' && filter_option_min_summ != null) && (filter_option_max_summ != '100000000' && filter_option_max_summ != null)) {
                if (ajax_params != '') {
                        ajax_params += '&';
                    }
                    ajax_params += 'filter_option_min_summ='+filter_option_min_summ+'&filter_option_max_summ='+filter_option_max_summ;
                }
                console.log(ajax_params);
                if (ajax_params != '') {
                    jQuery('.form-filter__block--reset button').removeClass('hide');
                } else {
                    jQuery('.form-filter__block--reset button').addClass('hide');
                }
            	jQuery.ajax({
        			url: '<?php echo admin_url( "admin-ajax.php" ) ?>',
        			type: 'POST',
        			data: 'action=filter_int_action&'+ajax_params,
        			beforeSend: function( xhr ) {
        				/*$('#misha_button').text('Загрузка, 5 сек...');	*/
        				//jQuery('main .cases .cases__wrap').addClass('hidden');
        				jQuery('main .cases .btn--cases.btn-load-all').addClass('hidden');
        				jQuery('main .cases .cases__loader').removeClass('hidden');
        				//jQuery('main .cases .cases__wrap').html('');
        				//jQuery("html, body").stop().animate({scrollTop:200}, 500, 'swing', function() {});
        				
        			},
        			success: function( data ) {
        				/*$('#misha_button').text('Отправить');	*/
        				var answer = jQuery.parseJSON(data);
        				console.log(answer);
        				//let  = jQuery('main .cases .cases__wrap article').length;
        				console.log(answer.length);
        				window.GlobalDelaArray = answer;
        				if (answer.length > 0) {
            				let i = jQuery('main .cases .cases__wrap article').length;
            				let max = jQuery('main .cases .cases__wrap article').length + 10;
            				while ((i < max) && (i < answer.length)) {
            				    let additional_cnt = '';
            				    let answer_creditors_cnt = '';
            				    if (answer[i]['creditors'].length > 120) {
            				        answer_creditors_text_cnt = answer[i]['creditors'].substring(0, 120);
                                    var lastIndex = answer_creditors_text_cnt.lastIndexOf(" ");
                                    answer_creditors_text_cnt = answer_creditors_text_cnt.substring(0, lastIndex) + '...';
            				        answer_creditors_cnt = answer_creditors_text_cnt+'<div class="case__call case__call--data read--more">Читать полностью</div>';
            				    } else {
            				        answer_creditors_cnt = answer[i]['creditors'];
            				    }
            				    if (i == 1) {
            				        additional_cnt = '<div class="guarantees"><div class="guarantees__head"><h3 class="guarantees__title">Наши гарантии</h3></div><div class="guarantees__body"><div class="guarantees__item"><span class="guarantees__number">Пункт 3.1. Договора закрепляет:</span><span class="guarantees__text"> Исполнитель гарантирует полное освобождение Заказчика от долгов. В обратном случае оплата юридических услуг возвращается Заказчику в полном объеме по первому требованию в течение 7 рабочих дней.</span></div></div></div>';
            				    }
            				    if (i == 4) {
                				    var data_case_total = jQuery('body.page-template-dela-int .cases').attr('data-case-total');
            				        var data_total_txt = jQuery('body.page-template-dela-int .cases').attr('data-total-txt');
            				        var data_case_successful = jQuery('body.page-template-dela-int .cases').attr('data-case-successful');
            				        var data_case_successful_txt = jQuery('body.page-template-dela-int .cases').attr('data-case-successful-txt');
            				        additional_cnt = '<div class="results results--in-dela"><h3 class="results__title">На <span class="case-lastdate__"><?php echo date( 'd ' . $date_arr[date( 'n' )] . ' Y' ) ?>&nbsp;г.</span>&nbsp;мы помогли <span class="case-total">'+data_case_successful_txt+'</span>&nbsp;<span class="case-client">клиентам</span></h3><div class="results__block results__block--inner"><div class="results__data results__data--in-dela"><ul class="results__lst results__lst--in-dela"><li class="results__lst-item"><span class="results__number results__number--symbol results-number case-total results-number-1" data-start="0" data-number="'+data_case_total+'">'+data_total_txt+'</span><span class="results__label case-works">Дел в работе</span></li><li class="results__lst-item"><span class="results__number results-number case-successful results-number-2" data-start="0" data-number="'+data_case_successful+'">'+data_case_successful_txt+'</span><span class="results__label case-success">Выигранные дела</span></li><li class="results__lst-item"><span class="results__number">0</span><span class="results__label">Проигранных дел</span></li></ul><div class="results__note hidden">* данные актуальны на&nbsp;19 апреля 2022&nbsp;г.</div></div><ul class="results__chart"><li class="results__chart-item"><div class="results__chart-line results__chart-line--1"><span class="results__digit results__digit--small">128</span><span class="results__year">2016</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--2"><span class="results__digit results__digit--middle">895</span><span class="results__year">2017</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--3"><span class="results__digit results__digit--middle">2&nbsp;540</span><span class="results__year">2018</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--4"><span class="results__digit">4&nbsp;108</span><span class="results__year">2019</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--5"><span class="results__digit">6&nbsp;591</span><span class="results__year">2020</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--6"><span class="results__digit">9&nbsp;130</span><span class="results__year">2021</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--7"><span class="results__digit">11&nbsp;391</span><span class="results__year">2022</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--last"><span class="results__digit results__digit--last case-total">'+data_total_txt+'</span><span class="results__digit results__digit--current case-in-works">дел в работе</span><span class="results__year">2023</span></div></li></ul></div></div>';
        				        /*
            				        additional_cnt = '<div class="results results--in-dela"><h3 class="results__title">На <span class="case-lastdate__"><?php echo date( 'd ' . $date_arr[date( 'n' )] . ' Y' ) ?>&nbsp;г.</span>&nbsp;мы помогли <span class="case-total">10&nbsp;083</span>&nbsp;<span class="case-client">клиентам</span></h3><div class="results__block results__block--inner"><div class="results__data results__data--in-dela"><ul class="results__lst results__lst--in-dela"><li class="results__lst-item"><span class="results__number results__number--symbol results-number case-total results-number-1" data-start="0" data-number="10083">10&nbsp;083</span><span class="results__label case-works">Дел в работе</span></li><li class="results__lst-item"><span class="results__number results-number case-successful results-number-2" data-start="0" data-number="3880">3&nbsp;880</span><span class="results__label case-success">Выигранные дела</span></li><li class="results__lst-item"><span class="results__number">0</span><span class="results__label">Проигранных дел</span></li></ul><div class="results__note">* данные актуальны на&nbsp;19 апреля 2022&nbsp;г.</div></div><ul class="results__chart"><li class="results__chart-item"><div class="results__chart-line results__chart-line--1"><span class="results__digit results__digit--small">128</span><span class="results__year">2016</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--2"><span class="results__digit results__digit--middle">895</span><span class="results__year">2017</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--3"><span class="results__digit results__digit--middle">2&nbsp;540</span><span class="results__year">2018</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--4"><span class="results__digit">4&nbsp;108</span><span class="results__year">2019</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--5"><span class="results__digit">6&nbsp;591</span><span class="results__year">2020</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--6"><span class="results__digit">9&nbsp;130</span><span class="results__year">2021</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--last"><span class="results__digit results__digit--last case-total">10&nbsp;083</span><span class="results__digit results__digit--current case-in-works">дел в работе</span><span class="results__year">2022</span></div></li></ul></div></div>';
            				        */
            				    }
            				    
            				    var otzyv_value = answer[i]['otzyv'];
            				    var video_otzyv_html = '';
            				    var photo_otzyv_html = '';
            				    if (otzyv_value != null && otzyv_value != '') {
                				    if (otzyv_value.includes('fpa.ru')) {
                				        photo_otzyv_html = '<a class="original-link original-link--case" href="'+otzyv_value+'" target="_blank"><span class="original-link__thumb original-link__thumb--case original-link__thumb--case-foto"></span><span class="original-link__text">Фотоотзыв</span></a>';
                				    } else {
                				        video_otzyv_html = '<div class="case__video"><div class="youtube" data-embed="'+otzyv_value+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img src="https://img.youtube.com/vi/'+otzyv_value+'/hqdefault.jpg" alt="Превью для видео"></div></div>';
                				    }    
            				    }
            				    var additional_info_cnt = '';
            				    if (answer[i]['int_text'] != null) {
            				        additional_info_cnt = '<div class="case__row case__row--additional-info"><div class="case__call case__call--name">Дополнительная информация:</div><div class="case__call case__call--data">'+answer[i]['int_text']+'</div></div>                  ';
            				    }
                                jQuery('main .cases .cases__wrap').append('<article><div class="cases__item case"><h2 class="case__title">'+answer[i]['title']+'</h2><span class="case__number">№ <span>'+answer[i]['number']+'</span></span>'+video_otzyv_html+'<div class="case__original"><a class="original-link original-link--case" href="'+answer[i]['original_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><span class="original-link__thumb original-link__thumb--case original-link__thumb--case-ruling"></span><span class="original-link__text">Оригинал<br> определения суда</span></a><a class="original-link original-link--case" href="'+answer[i]['court_file_file']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><span class="original-link__thumb original-link__thumb--case original-link__thumb--case-cardfile"></span><span class="original-link__text">Картотека<br> арбитражного суда</span></a>'+photo_otzyv_html+'</div><div class="case__data"><div class="case__row case__row--debtor"><div class="case__call case__call--name">Должник: </div><div class="case__call case__call--data">'+answer[i]['debtor']+'</div></div><div class="case__row case__row--number"><div class="case__call case__call--name">Номер дела в суде: </div><div class="case__call case__call--data">'+answer[i]['case_number']+'</div></div><div class="case__row case__row--result"><div class="case__call case__call--name">Результат работы: </div><div class="case__call case__call--data">'+answer[i]['result']+'</div></div><div class="case__row case__row--period"><div class="case__call case__call--name">Срок рассмотрения дела: </div><div class="case__call case__call--data">'+answer[i]['period2']+'</div></div><div class="case__row case__row--creditors"><div class="case__call case__call--name">Список&nbsp;кредиторов:</div><div class="case__call case__call--data" data-full-text=\''+answer[i]['creditors']+'\'>'+answer_creditors_cnt+'</div></div><div class="case__row case__row--arbitration"><div class="case__call case__call--name">Арбитражный управляющий:</div><div class="case__call case__call--data"><span>'+answer[i]['arbitration_manager']+'</span></div></div><div class="case__row case__row--accompanying"><div class="case__call case__call--name">Сопровождающий юрист:</div><div class="case__call case__call--data"><span>'+answer[i]['lawyer']+'</span></div></div><div class="case__row case__row--additional-info">'+additional_info_cnt+'</div></div></div><div class="cases__block-hide">'+additional_cnt+'</div></article>');
                                i++;
                            }
            				jQuery('main .cases .cases__loader').addClass('hidden');
            				jQuery('main .cases .cases__wrap').removeClass('hidden');    
        				} else {
                            jQuery('main .cases .cases__wrap').append('<article><div class="cases__item case notify"><h2 class="case__title">Измените параметры поиска</h2><p>К сожалению по вашему запросу нет подходящих результатов</p></div></article>');    				    
                            jQuery('main .cases .cases__loader').addClass('hidden');
            				jQuery('main .cases .cases__wrap').removeClass('hidden');    
        				}
        				if (answer.length > 10) {
        				    jQuery('main .cases .btn--cases.btn-load-all').removeClass('hidden');
        				}
        			}
        		});
        		/* Ajax request */
                
            }
        });

        jQuery(document).on('click', 'body.page-template-aim3free .section--modal .modal__wrap--answer .modal__close', function () {
            jQuery('.modal__wrap--answer').addClass('hidden');
            jQuery('.modal__overlay').addClass('hidden');
        });

        jQuery(document).on('click', '.section--modal.old__cnt .modal__close', function () {
            jQuery('.old__cnt .modal__overlay').addClass('hidden');
        });


        jQuery(document).on('click', 'section#refferal_recomended .refferal_recomended__cnt .refferal_recomended__item .recomended__el .el_icon.three_elem svg.cursor', function () {
            var data_popup_id = jQuery(this).attr('data-popup-id');
            var obj_offsetTop = jQuery(window).scrollTop();
            jQuery('body').css({"top": "-"+obj_offsetTop+"px"});
            jQuery('body').css({"position": "fixed"});
            jQuery('.section--modal.old__cnt .modal__overlay').removeClass('hidden');
            jQuery('.section--modal.old__cnt .modal__overlay').find('.modal__wrap--'+data_popup_id).removeClass('hidden');
        });

        jQuery(document).on('click', 'body.page-template-dela-int main .cases article .case__video', function () {
            var youtube_embed = jQuery(this).find('.youtube').attr('data-embed');
            var youtube_iframe = '<iframe frameborder="0" allowfullscreen="" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" src="https://www.youtube.com/embed/'+youtube_embed+'?autoplay=1"></iframe>';
            jQuery(this).find('.youtube').html('');
            jQuery(this).find('.youtube').append(youtube_iframe);
        });
        
        
        jQuery(document).on('click', 'body.page-template-spasibo-iamfree .custom-reviews-wrap .custom-reviews-item', function () {
            var youtube_embed = jQuery(this).find('.youtube').attr('data-embed');
            var youtube_iframe = '<iframe frameborder="0" allowfullscreen="" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" src="https://www.youtube.com/embed/'+youtube_embed+'?autoplay=1"></iframe>';
            jQuery(this).find('.youtube').html('');
            jQuery(this).find('.youtube').append(youtube_iframe);
        });
        
        jQuery(document).on('click', 'body.page-template-aimfreec-spasibo .custom-reviews-wrap .custom-reviews-item', function () {
            var youtube_embed = jQuery(this).find('.youtube').attr('data-embed');
            var youtube_iframe = '<iframe frameborder="0" allowfullscreen="" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" src="https://www.youtube.com/embed/'+youtube_embed+'?autoplay=1"></iframe>';
            jQuery(this).find('.youtube').html('');
            jQuery(this).find('.youtube').append(youtube_iframe);
        });
        
        jQuery(document).on('click', 'body.page-template-dela-int .form-filter .form-filter__block--mobile .no-btn.btn-show', function () {
            if (!jQuery(this).closest('.form-filter').find('.form-filter__wrap').hasClass('open')) {
                jQuery(this).closest('.form-filter').find('.form-filter__wrap').addClass('open');
                jQuery(this).find('.btn-show__arrow').removeClass('open');
            } else {
                jQuery(this).find('.btn-show__arrow').addClass('open');
                jQuery(this).closest('.form-filter').find('.form-filter__wrap').removeClass('open');
            }
            
            return false;
        });
        
        jQuery(document).on('click', 'body.page-template-dela-int .form-filter__block--reset button', function () {
            sessionStorage.setItem('filter_option_type-creditors', 'Все типы');
            sessionStorage.setItem('filter_option_creditors', 'Все банки');
            sessionStorage.setItem('filter_option_reviews', 'Все дела');
            //sessionStorage.setItem('filter_option_int-category', 'Все дела');
            sessionStorage.setItem('filter_option_int-category', '');
            sessionStorage.setItem('filter_option_min_summ', '0');
            sessionStorage.setItem('filter_option_max_summ', '100000000');
            jQuery('body.page-template-dela-int .form-filter__range--summ').val('1');
            jQuery('.form-filter .range-list--summ li').removeClass('show');
            jQuery('.form-filter .range-list--summ li[data-value=1]').addClass('show');
            jQuery('body.page-template-dela-int .form-filter__wrap .radio input[type=radio]').each(function() {
                if (jQuery(this).val() == 'all') {
                    jQuery(this).prop('checked', true);
                }
            });
            jQuery('.form-filter__block--interesting').addClass('disabled');
            jQuery('.form-filter__wrap .form-filter__block--type-creditors').removeClass('disabled');
            if (jQuery('.form-filter__block--type-creditors input[type="radio"][name="type-creditors"][value="1"]').prop('checked')) {
                jQuery('.form-filter__wrap .form-filter__block--banks').removeClass('disabled');    
            }
            jQuery('.form-filter__wrap .form-filter__block--reviews').removeClass('disabled');
            jQuery('.form-filter__block--interesting input[type="radio"]').prop('checked', false)
            /* Ajax request */
            var ajax_params = '';
            var filter_option_type_creditors = sessionStorage.getItem('filter_option_type-creditors');
            var filter_option_creditors = sessionStorage.getItem('filter_option_creditors');
            var filter_option_reviews = sessionStorage.getItem('filter_option_reviews');
            var filter_option_int_category = sessionStorage.getItem('filter_option_int-category');
            if (filter_option_type_creditors != 'Все типы' && filter_option_type_creditors != null) {
                if (ajax_params != '') {
                    ajax_params += '&';
                }
                ajax_params += 'filter_option_type_creditors='+filter_option_type_creditors;
            }
            if (filter_option_creditors != 'Все банки' && filter_option_creditors != null) {
                if (ajax_params != '') {
                    ajax_params += '&';
                }
                ajax_params += 'filter_option_creditors='+filter_option_creditors;
            }
            if (filter_option_reviews != 'Все дела' && filter_option_reviews != null) {
                if (ajax_params != '') {
                    ajax_params += '&';
                }
                ajax_params += 'filter_option_reviews='+filter_option_reviews;
            }
            if (filter_option_int_category != '' && filter_option_int_category != null) {
                if (ajax_params != '') {
                    ajax_params += '&';
                }
                ajax_params += 'filter_option_int_category='+filter_option_int_category;
            }
            console.log(ajax_params);
            if (ajax_params != '') {
                jQuery('.form-filter__block--reset button').removeClass('hide');
            } else {
                jQuery('.form-filter__block--reset button').addClass('hide');
            }
        	jQuery.ajax({
    			url: '<?php echo admin_url( "admin-ajax.php" ) ?>',
    			type: 'POST',
    			data: 'action=filter_int_action&'+ajax_params,
    			beforeSend: function( xhr ) {
    				/*$('#misha_button').text('Загрузка, 5 сек...');	*/
    				jQuery('main .cases .cases__wrap').addClass('hidden');
    				jQuery('main .cases .btn--cases.btn-load-all').addClass('hidden');
    				jQuery('main .cases .cases__loader').removeClass('hidden');
    				jQuery('main .cases .cases__wrap').html('');
    				var windowsize = jQuery(window).width();
                    if (windowsize < 769) {
                        jQuery("html, body").stop().animate({scrollTop:1000}, 500, 'swing', function() {});
                    } else {
                        jQuery("html, body").stop().animate({scrollTop:200}, 500, 'swing', function() {});
                    }
    			},
    			success: function( data ) {
    				/*$('#misha_button').text('Отправить');	*/
    				var answer = jQuery.parseJSON(data);
    				console.log(answer);
    				//let  = jQuery('main .cases .cases__wrap article').length;
    				console.log(answer.length);
    				window.GlobalDelaArray = answer;
    				if (answer.length > 0) {
        				let i = 0;
        				while ((i < 10) && (i < answer.length)) {
        				    let additional_cnt = '';
        				    let answer_creditors_cnt = '';
        				    if (answer[i]['creditors'].length > 120) {
        				        answer_creditors_text_cnt = answer[i]['creditors'].substring(0, 120);
                                var lastIndex = answer_creditors_text_cnt.lastIndexOf(" ");
                                answer_creditors_text_cnt = answer_creditors_text_cnt.substring(0, lastIndex) + '...';
        				        answer_creditors_cnt = answer_creditors_text_cnt+'<div class="case__call case__call--data read--more">Читать полностью</div>';
        				    } else {
        				        answer_creditors_cnt = answer[i]['creditors'];
        				    }
        				    if (i == 1) {
        				        additional_cnt = '<div class="guarantees"><div class="guarantees__head"><h3 class="guarantees__title">Наши гарантии</h3></div><div class="guarantees__body"><div class="guarantees__item"><span class="guarantees__number">Пункт 3.1. Договора закрепляет:</span><span class="guarantees__text"> Исполнитель гарантирует полное освобождение Заказчика от долгов. В обратном случае оплата юридических услуг возвращается Заказчику в полном объеме по первому требованию в течение 7 рабочих дней.</span></div></div></div>';
        				    }
        				    if (i == 4) {
        				        var data_case_total = jQuery('body.page-template-dela-int .cases').attr('data-case-total');
        				        var data_total_txt = jQuery('body.page-template-dela-int .cases').attr('data-total-txt');
        				        var data_case_successful = jQuery('body.page-template-dela-int .cases').attr('data-case-successful');
        				        var data_case_successful_txt = jQuery('body.page-template-dela-int .cases').attr('data-case-successful-txt');
        				        additional_cnt = '<div class="results results--in-dela"><h3 class="results__title">На <span class="case-lastdate__"><?php echo date( 'd ' . $date_arr[date( 'n' )] . ' Y' ) ?>&nbsp;г.</span>&nbsp;мы помогли <span class="case-total">'+data_case_successful_txt+'</span>&nbsp;<span class="case-client">клиентам</span></h3><div class="results__block results__block--inner"><div class="results__data results__data--in-dela"><ul class="results__lst results__lst--in-dela"><li class="results__lst-item"><span class="results__number results__number--symbol results-number case-total results-number-1" data-start="0" data-number="'+data_case_total+'">'+data_total_txt+'</span><span class="results__label case-works">Дел в работе</span></li><li class="results__lst-item"><span class="results__number results-number case-successful results-number-2" data-start="0" data-number="'+data_case_successful+'">'+data_case_successful_txt+'</span><span class="results__label case-success">Выигранные дела</span></li><li class="results__lst-item"><span class="results__number">0</span><span class="results__label">Проигранных дел</span></li></ul><div class="results__note hidden">* данные актуальны на&nbsp;19 апреля 2022&nbsp;г.</div></div><ul class="results__chart"><li class="results__chart-item"><div class="results__chart-line results__chart-line--1"><span class="results__digit results__digit--small">128</span><span class="results__year">2016</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--2"><span class="results__digit results__digit--middle">895</span><span class="results__year">2017</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--3"><span class="results__digit results__digit--middle">2&nbsp;540</span><span class="results__year">2018</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--4"><span class="results__digit">4&nbsp;108</span><span class="results__year">2019</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--5"><span class="results__digit">6&nbsp;591</span><span class="results__year">2020</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--6"><span class="results__digit">9&nbsp;130</span><span class="results__year">2021</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--7"><span class="results__digit">11&nbsp;391</span><span class="results__year">2022</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--last"><span class="results__digit results__digit--last case-total">'+data_total_txt+'</span><span class="results__digit results__digit--current case-in-works">дел в работе</span><span class="results__year">2023</span></div></li></ul></div></div>';
        				        /*
        				        additional_cnt = '<div class="results results--in-dela"><h3 class="results__title">На <span class="case-lastdate__"><?php echo date( 'd ' . $date_arr[date( 'n' )] . ' Y' ) ?>&nbsp;г.</span>&nbsp;мы помогли <span class="case-total">10&nbsp;083</span>&nbsp;<span class="case-client">клиентам</span></h3><div class="results__block results__block--inner"><div class="results__data results__data--in-dela"><ul class="results__lst results__lst--in-dela"><li class="results__lst-item"><span class="results__number results__number--symbol results-number case-total results-number-1" data-start="0" data-number="10083">10&nbsp;083</span><span class="results__label case-works">Дел в работе</span></li><li class="results__lst-item"><span class="results__number results-number case-successful results-number-2" data-start="0" data-number="3880">3&nbsp;880</span><span class="results__label case-success">Выигранные дела</span></li><li class="results__lst-item"><span class="results__number">0</span><span class="results__label">Проигранных дел</span></li></ul><div class="results__note">* данные актуальны на&nbsp;19 апреля 2022&nbsp;г.</div></div><ul class="results__chart"><li class="results__chart-item"><div class="results__chart-line results__chart-line--1"><span class="results__digit results__digit--small">128</span><span class="results__year">2016</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--2"><span class="results__digit results__digit--middle">895</span><span class="results__year">2017</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--3"><span class="results__digit results__digit--middle">2&nbsp;540</span><span class="results__year">2018</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--4"><span class="results__digit">4&nbsp;108</span><span class="results__year">2019</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--5"><span class="results__digit">6&nbsp;591</span><span class="results__year">2020</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--6"><span class="results__digit">9&nbsp;130</span><span class="results__year">2021</span></div></li><li class="results__chart-item"><div class="results__chart-line results__chart-line--last"><span class="results__digit results__digit--last case-total">10&nbsp;083</span><span class="results__digit results__digit--current case-in-works">дел в работе</span><span class="results__year">2022</span></div></li></ul></div></div>';
        				        */
        				    }
        				    
        				    var otzyv_value = answer[i]['otzyv'];
        				    var video_otzyv_html = '';
        				    var photo_otzyv_html = '';
        				    if (otzyv_value != null && otzyv_value != '') {
            				    if (otzyv_value.includes('fpa.ru')) {
            				        photo_otzyv_html = '<a class="original-link original-link--case" href="'+otzyv_value+'" target="_blank"><span class="original-link__thumb original-link__thumb--case original-link__thumb--case-foto"></span><span class="original-link__text">Фотоотзыв</span></a>';
            				    } else {
            				        video_otzyv_html = '<div class="case__video"><div class="youtube" data-embed="'+otzyv_value+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img src="https://img.youtube.com/vi/'+otzyv_value+'/hqdefault.jpg" alt="Превью для видео"></div></div>';
            				    }    
        				    }
        				    var additional_info_cnt = '';
        				    if (answer[i]['int_text'] != null) {
        				        additional_info_cnt = '<div class="case__row case__row--additional-info"><div class="case__call case__call--name">Дополнительная информация:</div><div class="case__call case__call--data">'+answer[i]['int_text']+'</div></div>                  ';
        				    }
                            jQuery('main .cases .cases__wrap').append('<article><div class="cases__item case"><h2 class="case__title">'+answer[i]['title']+'</h2><span class="case__number">№ <span>'+answer[i]['number']+'</span></span>'+video_otzyv_html+'<div class="case__original"><a class="original-link original-link--case" href="'+answer[i]['original_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><span class="original-link__thumb original-link__thumb--case original-link__thumb--case-ruling"></span><span class="original-link__text">Оригинал<br> определения суда</span></a><a class="original-link original-link--case" href="'+answer[i]['court_file_file']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><span class="original-link__thumb original-link__thumb--case original-link__thumb--case-cardfile"></span><span class="original-link__text">Картотека<br> арбитражного суда</span></a>'+photo_otzyv_html+'</div><div class="case__data"><div class="case__row case__row--debtor"><div class="case__call case__call--name">Должник: </div><div class="case__call case__call--data">'+answer[i]['debtor']+'</div></div><div class="case__row case__row--number"><div class="case__call case__call--name">Номер дела в суде: </div><div class="case__call case__call--data">'+answer[i]['case_number']+'</div></div><div class="case__row case__row--result"><div class="case__call case__call--name">Результат работы: </div><div class="case__call case__call--data">'+answer[i]['result']+'</div></div><div class="case__row case__row--period"><div class="case__call case__call--name">Срок рассмотрения дела: </div><div class="case__call case__call--data">'+answer[i]['period2']+'</div></div><div class="case__row case__row--creditors"><div class="case__call case__call--name">Список&nbsp;кредиторов:</div><div class="case__call case__call--data" data-full-text=\''+answer[i]['creditors']+'\'>'+answer_creditors_cnt+'</div></div><div class="case__row case__row--arbitration"><div class="case__call case__call--name">Арбитражный управляющий:</div><div class="case__call case__call--data"><span>'+answer[i]['arbitration_manager']+'</span></div></div><div class="case__row case__row--accompanying"><div class="case__call case__call--name">Сопровождающий юрист:</div><div class="case__call case__call--data"><span>'+answer[i]['lawyer']+'</span></div></div><div class="case__row case__row--additional-info">'+additional_info_cnt+'</div></div></div><div class="cases__block-hide">'+additional_cnt+'</div></article>');
                            i++;
                        }
        				jQuery('main .cases .cases__loader').addClass('hidden');
        				jQuery('main .cases .cases__wrap').removeClass('hidden');    
    				} else {
                        jQuery('main .cases .cases__wrap').append('<article><div class="cases__item case notify"><h2 class="case__title">Измените параметры поиска</h2><p>К сожалению по вашему запросу нет подходящих результатов</p></div></article>');    				    
                        jQuery('main .cases .cases__loader').addClass('hidden');
        				jQuery('main .cases .cases__wrap').removeClass('hidden');    
    				}
    				if (answer.length > 10) {
    				    jQuery('main .cases .btn--cases.btn-load-all').removeClass('hidden');
    				}
    			}
    		});
    		/* Ajax request */
            return false;
        });
        
        jQuery(document).on('click', 'body.page-template-dela-int main .cases .case__call--data.read--more', function () {
            var full_text = jQuery(this).parent().attr('data-full-text');
            //console.log(jQuery(this).parent.attr('class'));
            jQuery(this).parent().html(full_text);
            jQuery(this).addClass('hidden');
        });
        
        var http_referrer = jQuery('head meta[name="http_referer"]').attr('content');
        
        
        
        
        if (http_referrer.indexOf("utm_medium") > 0) {
            var end_position = http_referrer.length - http_referrer.indexOf("utm_source");
            var http_referrer_arr = http_referrer.split("&");
            let i = 0;
            while (i < http_referrer_arr.length) {
                if (http_referrer_arr[i].indexOf("_medium") > 0) {
                    var end_position = http_referrer_arr[i].length;
                    var start_position = http_referrer_arr[i].substring(http_referrer_arr[i].indexOf("=")+1);
                    //console.log(start_position);
                    jQuery('input[name="http_referrer"]').val(start_position);
                }
                i++;
            }
        } else {
            if (http_referrer.indexOf("search") > 0) {
                //console.log('SEO');
                jQuery('input[name="http_referrer"]').val('SEO');
            } else {
                if (http_referrer == '') {
                    //console.log('Прямые визиты');
                    jQuery('input[name="http_referrer"]').val('Прямые визиты');
                } else {
                    //console.log('Визиты с сайтов');
                    jQuery('input[name="http_referrer"]').val('Визиты с сайтов');
                }    
            }    
        }
        
        jQuery('.calculation__tab .calculation__variants .difficult_answer label').each(function() {
            var current_value = jQuery(this).html();
            jQuery(this).html('<span>'+current_value+'</span>');
        });
            
        

        if (sessionStorage.getItem('answer3_id')) {
            var current_value = sessionStorage.getItem('answer3_id');
            jQuery('body.page-template-thanks-all section.ip__cnt').addClass(current_value);
            jQuery('body.page-template-thanks-all section.successful_cases').addClass(current_value);
            jQuery('body.page-template-thanks-all section.reviews-art').addClass(current_value);
            //jQuery('body.page-template-thanks-all section.related').addClass(current_value);
            jQuery('body.page-template-thanks-all section.why_need_bankrotstvo').addClass(current_value);
            
            
            
            
        }
 
        /* Dela filter events */
        
        jQuery('body.page-template-chat .result_form__cnt form input[name="form-sms"]').val('SMS 45');
        jQuery('body.page-template-chat .result_form__cnt form input[name="form-name"]').val('SMS-42 Узнайте как списать долги бесплатно конкретно в вашем случае. Чат. Боднар Евгения Ивановна');
        
        function chat_view_variant() {
            if (jQuery('body').hasClass('page-template-chat')) {
                if (jQuery('section.chat .chat__cnt .question_item__cnt.answered').length > 0) {
                    jQuery('section.chat .chat__cnt .question_item__cnt.answered').next().removeClass('hidden');
                }
                var description_p = true;
                jQuery('section.chat .chat__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt p').each(function() {
                    if (description_p && !jQuery(this).hasClass('show')) {
                        description_p = false;
                        jQuery(this).addClass('show');
                        
                        var destination_height = jQuery(document).height();
                        jQuery('body, html').animate({ scrollTop: destination_height }, 1100)
                        
                        

                        
                        
                    }
                });
                if (description_p) {
                    console.log(description_p);
                    if (!jQuery('section.chat .chat__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt div.write').hasClass('hidden')) {
                        jQuery('section.chat .chat__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt div.write').addClass('hidden');
                        jQuery('section.chat .chat__cnt .question_item__cnt.not_answered:not(.hidden) .variations__cnt').removeClass('hidden');
                        jQuery('section.chat .chat__cnt .question_item__cnt.not_answered:not(.hidden) .result_form__cnt').removeClass('hidden');

                        //var chat_view_variant_result = clearInterval(chat_view_variant_id);
                        //console.log('stopped: ' + chat_view_variant_result);    
                        
                        var destination_height = jQuery(document).height();
                        jQuery('body, html').animate({ scrollTop: destination_height }, 1100)
                        
                    }
                }
                
            }
        }
        let chat_view_variant_id = setInterval(chat_view_variant, 2000);
        
        
        function chat2_view_variant() {
            if (jQuery('body').hasClass('page-template-chat2')) {
                if (jQuery('section.chat2 .chat__cnt .question_item__cnt.answered').length > 0) {
                    jQuery('section.chat2 .chat__cnt .question_item__cnt.answered').next().removeClass('hidden');
                }
                var description_p = true;
                jQuery('section.chat2 .chat__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt p').each(function() {
                    var p_data_selected_value = jQuery(this).attr('data-selected-value');
                    var prev_answer_data_value = jQuery(this).closest('.question_item__cnt').prev().find('.answer__cnt').attr('data-selected-value');
                    if (typeof p_data_selected_value !== 'undefined' && p_data_selected_value == prev_answer_data_value) {
                        if (description_p && !jQuery(this).hasClass('show')) {
                            description_p = false;
                            jQuery(this).addClass('show');
                            var destination_height = jQuery(document).height();
                            jQuery('body, html').animate({ scrollTop: destination_height }, 1100)
                        }    
                    }
                    if (typeof p_data_selected_value == 'undefined') {
                        if (description_p && !jQuery(this).hasClass('show')) {
                            description_p = false;
                            jQuery(this).addClass('show');
                            var destination_height = jQuery(document).height();
                            jQuery('body, html').animate({ scrollTop: destination_height }, 1100)
                        } 
                    }
                });
                if (description_p) {
                    console.log(description_p);
                    if (!jQuery('section.chat2 .chat__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt div.write').hasClass('hidden')) {
                        jQuery('section.chat2 .chat__cnt .question_item__cnt.not_answered:not(.hidden) .description__cnt div.write').addClass('hidden');
                        jQuery('section.chat2 .chat__cnt .question_item__cnt.not_answered:not(.hidden) .variations__cnt').removeClass('hidden');
                        jQuery('section.chat2 .chat__cnt .question_item__cnt.not_answered:not(.hidden) .result_form__cnt').removeClass('hidden');

                        //var chat_view_variant_result = clearInterval(chat_view_variant_id);
                        //console.log('stopped: ' + chat_view_variant_result);    
                        var destination_height = jQuery(document).height();
                        jQuery('body, html').animate({ scrollTop: destination_height }, 1100)
                        
                    }
                }
            }
        }
        
        let chat2_view_variant_id = setInterval(chat2_view_variant, 750);

        jQuery(document).on('click', 'section.chat2 .chat__cnt .question_item__cnt.not_answered .calculation__radio', function () {
            //clearInterval(chat_view_variant_id);
            //console.log(jQuery(this).find('label').html());
            var form_field_name = jQuery(this).find('input').attr('name');
            var form_field_value = jQuery(this).find('label').html();
            var form_field_data_value = jQuery(this).find('label').attr('data-value');
            var video_list = jQuery(this).attr('data-video-list');
            if (video_list != '') {
                var video_list_arr = video_list.split(',');
                jQuery('body.page-template-chat2 .thank_block__cnt .video__cnt').empty();
                jQuery.each( video_list_arr, function( key, value ) {
                    jQuery('body.page-template-chat2 .thank_block__cnt .video__cnt').append("<div class=\"video_item__cnt\"><div class=\"reviews__video\"><div class=\"youtube\" data-embed=\""+value+"\" onclick=\"ym(82134583,'reachGoal','start')\"><div class=\"youtube__button\"><svg><use xlink:href=\"https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play\"></use></svg></div><img src=\"https://img.youtube.com/vi/"+value+"/hqdefault.jpg\" alt=\"Превью для видео\"></div></div></div>");
                });
            }
            jQuery('body.page-template-chat2 .result_form__cnt form input[name='+form_field_name+']').val(form_field_value);
            jQuery('section.chat2 .chat__cnt .question_item__cnt.not_answered:not(.hidden) .calculation__radio').removeClass('checked');
            jQuery(this).addClass('checked');
            jQuery(this).closest('.question_item__cnt').find('.answer__cnt').find('.variation__cnt').find('p').html(jQuery(this).find('label').html());
            jQuery(this).closest('.question_item__cnt').find('.answer__cnt').attr('data-selected-value', form_field_data_value);
            jQuery(this).closest('.question_item__cnt').find('.answer__cnt').removeClass('hidden');
            jQuery(this).closest('.question_item__cnt').removeClass('not_answered');
            jQuery(this).closest('.question_item__cnt').addClass('answered');
            var destination_height = jQuery(document).height();
            jQuery('body, html').animate({ scrollTop: destination_height }, 1100);
        });
        
        jQuery(document).on('click', 'section.chat .chat__cnt .question_item__cnt.not_answered .calculation__radio', function () {
            //clearInterval(chat_view_variant_id);
            //console.log(jQuery(this).find('label').html());
            var form_field_name = jQuery(this).find('input').attr('name');
            var form_field_value = jQuery(this).find('label').html();
            var video_list = jQuery(this).attr('data-video-list');
            if (video_list != '') {
                var video_list_arr = video_list.split(',');
                jQuery('body.page-template-chat .thank_block__cnt .video__cnt').empty();
                jQuery.each( video_list_arr, function( key, value ) {
                    jQuery('body.page-template-chat .thank_block__cnt .video__cnt').append("<div class=\"video_item__cnt\"><div class=\"reviews__video\"><div class=\"youtube\" data-embed=\""+value+"\" onclick=\"ym(82134583,'reachGoal','start')\"><div class=\"youtube__button\"><svg><use xlink:href=\"https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play\"></use></svg></div><img src=\"https://img.youtube.com/vi/"+value+"/hqdefault.jpg\" alt=\"Превью для видео\"></div></div></div>");
                });
            }
            jQuery('body.page-template-chat .result_form__cnt form input[name='+form_field_name+']').val(form_field_value);
            jQuery('section.chat .chat__cnt .question_item__cnt.not_answered:not(.hidden) .calculation__radio').removeClass('checked');
            jQuery(this).addClass('checked');
            jQuery(this).closest('.question_item__cnt').find('.answer__cnt').find('.variation__cnt').find('p').html(jQuery(this).find('label').html());
            jQuery(this).closest('.question_item__cnt').find('.answer__cnt').removeClass('hidden');
            jQuery(this).closest('.question_item__cnt').removeClass('not_answered');
            jQuery(this).closest('.question_item__cnt').addClass('answered');
            var destination_height = jQuery(document).height();
            jQuery('body, html').animate({ scrollTop: destination_height }, 1100);
        });
        
        jQuery('body.page-template-chat .result_form__cnt form input[name=cname]').change(function() {
            var current_value = jQuery(this).val();
            jQuery('body.page-template-chat .thank_block__cnt p.name span').html(current_value);
        });
        
        jQuery('body.page-template-chat .result_form__cnt form input[name=cphone]').change(function() {
            var current_value = jQuery(this).val();
            jQuery('body.page-template-chat .result_form__cnt form input[name="form-mail"]').val(current_value+'@no-mail.ru');
        });
        
        
        jQuery(document).on('click', 'body.page-template-chat .thank_block__cnt .video_item__cnt', function () {
            var youtube_embed = jQuery(this).find('.youtube').attr('data-embed');
            var youtube_iframe = '<iframe frameborder="0" allowfullscreen="" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" src="https://www.youtube.com/embed/'+youtube_embed+'?autoplay=1"></iframe>';
            jQuery(this).find('.youtube').html('');
            jQuery(this).find('.youtube').append(youtube_iframe);
        });
        
        
        jQuery(document).on('click', 'body.page-template-thanks-variations .video__cnt .video_item__cnt', function () {
            var youtube_embed = jQuery(this).find('.youtube').attr('data-embed');
            var youtube_iframe = '<iframe frameborder="0" allowfullscreen="" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" src="https://www.youtube.com/embed/'+youtube_embed+'?autoplay=1"></iframe>';
            jQuery(this).find('.youtube').html('');
            jQuery(this).find('.youtube').append(youtube_iframe);
        });
        
        if (jQuery('body').hasClass('page-template-bankruptcy6cost')) {
            var popup_bankruptcy_number_1_test_form_message = jQuery('.popup-item__cnt.mfc-bankruptcy__number-1-test .result_inline_form__cnt').attr('data-message');
            var popup_bankruptcy_number_2_test_form_message = jQuery('.popup-item__cnt.mfc-bankruptcy__number-2-test .result_inline_form__cnt').attr('data-message');
            jQuery('.popup-item__cnt.mfc-bankruptcy__number-1-test .result_inline_form__cnt .color_bulet__cnt .message__cnt p').html(popup_bankruptcy_number_1_test_form_message);
            jQuery('.popup-item__cnt.mfc-bankruptcy__number-2-test .result_inline_form__cnt .color_bulet__cnt .message__cnt p').html(popup_bankruptcy_number_2_test_form_message);
        }
        
        
        jQuery(document).on('click', 'body.page-template-bankruptcy6cost .mfc-bankruptcy__number-1-test .calculation__variants .calculation__radio', function () {
            jQuery(this).closest('.calculation__tab').addClass('valid_item');
            var total_calculation_tab = jQuery(this).closest('.calculation__wrap').find('.calculation__tab').length;
            var valid_calculation_tab = jQuery(this).closest('.calculation__wrap').find('.calculation__tab.valid_item').length;
            if (total_calculation_tab == valid_calculation_tab) {
                jQuery('body.page-template-bankruptcy6cost .mfc-bankruptcy__number-1-test .result_inline_form__cnt').removeClass('hidden');
                var chat_destination_height = jQuery('body.page-template-bankruptcy6cost .mfc-bankruptcy__number-1-test').height();
                jQuery('body.page-template-bankruptcy6cost .mfc-bankruptcy__number-1-test').closest('.popup__overlay').animate({ scrollTop: chat_destination_height }, 1100);
            }
        });
        
        jQuery(document).on('click', 'body.page-template-bankruptcy6cost .mfc-bankruptcy__number-1-test .calculation__variants .calculation__checkbox', function () {
            jQuery(this).closest('.calculation__tab').addClass('valid_item');
            var total_calculation_tab = jQuery(this).closest('.calculation__wrap').find('.calculation__tab').length;
            var valid_calculation_tab = jQuery(this).closest('.calculation__wrap').find('.calculation__tab.valid_item').length;
            if (total_calculation_tab == valid_calculation_tab) {
                jQuery('body.page-template-bankruptcy6cost .mfc-bankruptcy__number-1-test .result_inline_form__cnt').removeClass('hidden');
                var chat_destination_height = jQuery('body.page-template-bankruptcy6cost .mfc-bankruptcy__number-1-test').height();
                jQuery('body.page-template-bankruptcy6cost .mfc-bankruptcy__number-1-test').closest('.popup__overlay').animate({ scrollTop: chat_destination_height }, 1100);
            }
        });
        
        jQuery(document).on('click', 'body.page-template-bankruptcy6cost .mfc-bankruptcy__number-2-test .calculation__variants .calculation__radio', function () {
            jQuery(this).closest('.calculation__tab').addClass('valid_item');
            var total_calculation_tab = jQuery(this).closest('.calculation__wrap').find('.calculation__tab').length;
            var valid_calculation_tab = jQuery(this).closest('.calculation__wrap').find('.calculation__tab.valid_item').length;
            if (total_calculation_tab == valid_calculation_tab) {
                jQuery('body.page-template-bankruptcy6cost .mfc-bankruptcy__number-2-test .result_inline_form__cnt').removeClass('hidden');
                var chat_destination_height = jQuery('body.page-template-bankruptcy6cost .mfc-bankruptcy__number-2-test').height();
                jQuery('body.page-template-bankruptcy6cost .mfc-bankruptcy__number-2-test').closest('.popup__overlay').animate({ scrollTop: chat_destination_height }, 1100);
            }
        });
        
        jQuery(document).on('click', 'body.page-template-bankruptcy6cost .mfc-bankruptcy__number-2-test .calculation__variants .calculation__checkbox', function () {
            jQuery(this).closest('.calculation__tab').addClass('valid_item');
            var total_calculation_tab = jQuery(this).closest('.calculation__wrap').find('.calculation__tab').length;
            var valid_calculation_tab = jQuery(this).closest('.calculation__wrap').find('.calculation__tab.valid_item').length;
            if (total_calculation_tab == valid_calculation_tab) {
                jQuery('body.page-template-bankruptcy6cost .mfc-bankruptcy__number-2-test .result_inline_form__cnt').removeClass('hidden');
                var chat_destination_height = jQuery('body.page-template-bankruptcy6cost .mfc-bankruptcy__number-2-test').height();
                jQuery('body.page-template-bankruptcy6cost .mfc-bankruptcy__number-2-test').closest('.popup__overlay').animate({ scrollTop: chat_destination_height }, 1100);
            }
        });
        
        jQuery(document).on('click', 'body.page-template-bankruptcy7cost .mfc-bankruptcy__number-1-test .calculation__variants .calculation__radio', function () {
            jQuery(this).closest('.calculation__tab').addClass('valid_item');
            var total_calculation_tab = jQuery(this).closest('.calculation__wrap').find('.calculation__tab').length;
            var valid_calculation_tab = jQuery(this).closest('.calculation__wrap').find('.calculation__tab.valid_item').length;
            if (total_calculation_tab == valid_calculation_tab) {
                jQuery(this).closest('.popup-item__cnt').find('.result_inline_form__cnt').find('.color_bulet__cnt').find('.message__cnt').find('p').html(jQuery(this).closest('.popup-item__cnt').find('.result_inline_form__cnt').attr('data-message'));
                jQuery('body.page-template-bankruptcy7cost .mfc-bankruptcy__number-1-test .result_inline_form__cnt').removeClass('hidden');
                var chat_destination_height = jQuery('body.page-template-bankruptcy7cost .mfc-bankruptcy__number-1-test').height();
                jQuery('body.page-template-bankruptcy7cost .mfc-bankruptcy__number-1-test').closest('.popup__overlay').animate({ scrollTop: chat_destination_height }, 1100);
            } else {
                jQuery(this).closest('.calculation__tab').next().removeClass('hidden');
            }
            jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('.h3').find('span').addClass('hidden');
            jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('.h3').find('span:nth-child('+(valid_calculation_tab+1)+')').removeClass('hidden');
            if (jQuery(this).closest('.popup-item__cnt').hasClass('color_scheme_blue')) {
                jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('svg').find('path:nth-child('+(valid_calculation_tab+1)+')').css({ "fill": "#5381F6"});    
            }
            if (jQuery(this).closest('.popup-item__cnt').hasClass('color_scheme_red')) {
                jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('svg').find('path:nth-child('+(valid_calculation_tab+1)+')').css({ "fill": "#fb5a80"});    
            }
        });
        
        jQuery(document).on('click', 'body.page-template-bankruptcy7cost .mfc-bankruptcy__number-1-test .calculation__variants .calculation__checkbox', function () {
            jQuery(this).closest('.calculation__tab').addClass('valid_item');
            var total_calculation_tab = jQuery(this).closest('.calculation__wrap').find('.calculation__tab').length;
            var valid_calculation_tab = jQuery(this).closest('.calculation__wrap').find('.calculation__tab.valid_item').length;
            if (total_calculation_tab == valid_calculation_tab) {
                jQuery(this).closest('.popup-item__cnt').find('.result_inline_form__cnt').find('.color_bulet__cnt').find('.message__cnt').find('p').html(jQuery(this).closest('.popup-item__cnt').find('.result_inline_form__cnt').attr('data-message'));
                jQuery('body.page-template-bankruptcy7cost .mfc-bankruptcy__number-1-test .result_inline_form__cnt').removeClass('hidden');
                var chat_destination_height = jQuery('body.page-template-bankruptcy7cost .mfc-bankruptcy__number-1-test').height();
                jQuery('body.page-template-bankruptcy7cost .mfc-bankruptcy__number-1-test').closest('.popup__overlay').animate({ scrollTop: chat_destination_height }, 1100);
            } else {
                jQuery(this).closest('.calculation__tab').next().removeClass('hidden');
            }
            jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('.h3').find('span').addClass('hidden');
            jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('.h3').find('span:nth-child('+(valid_calculation_tab+1)+')').removeClass('hidden');
            if (jQuery(this).closest('.popup-item__cnt').hasClass('color_scheme_blue')) {
                jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('svg').find('path:nth-child('+(valid_calculation_tab+1)+')').css({ "fill": "#5381F6"});    
            }
            if (jQuery(this).closest('.popup-item__cnt').hasClass('color_scheme_red')) {
                jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('svg').find('path:nth-child('+(valid_calculation_tab+1)+')').css({ "fill": "#fb5a80"});    
            }
        });
        
        jQuery(document).on('click', 'body.page-template-bankruptcy7cost .mfc-bankruptcy__number-2-test .calculation__variants .calculation__radio', function () {
            jQuery(this).closest('.calculation__tab').addClass('valid_item');
            var total_calculation_tab = jQuery(this).closest('.calculation__wrap').find('.calculation__tab').length;
            var valid_calculation_tab = jQuery(this).closest('.calculation__wrap').find('.calculation__tab.valid_item').length;
            if (total_calculation_tab == valid_calculation_tab) {
                jQuery(this).closest('.popup-item__cnt').find('.result_inline_form__cnt').find('.color_bulet__cnt').find('.message__cnt').find('p').html(jQuery(this).closest('.popup-item__cnt').find('.result_inline_form__cnt').attr('data-message'));
                jQuery('body.page-template-bankruptcy7cost .mfc-bankruptcy__number-2-test .result_inline_form__cnt').removeClass('hidden');
                var chat_destination_height = jQuery('body.page-template-bankruptcy7cost .mfc-bankruptcy__number-2-test').height();
                jQuery('body.page-template-bankruptcy7cost .mfc-bankruptcy__number-2-test').closest('.popup__overlay').animate({ scrollTop: chat_destination_height }, 1100);
            } else {
                jQuery(this).closest('.calculation__tab').next().removeClass('hidden');
            }
            jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('.h3').find('span').addClass('hidden');
            jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('.h3').find('span:nth-child('+(valid_calculation_tab+1)+')').removeClass('hidden');
            if (jQuery(this).closest('.popup-item__cnt').hasClass('color_scheme_blue')) {
                jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('svg').find('path:nth-child('+(valid_calculation_tab+1)+')').css({ "fill": "#5381F6"});    
            }
            if (jQuery(this).closest('.popup-item__cnt').hasClass('color_scheme_red')) {
                jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('svg').find('path:nth-child('+(valid_calculation_tab+1)+')').css({ "fill": "#fb5a80"});    
            }
        });
        
        jQuery(document).on('click', 'body.page-template-bankruptcy7cost .mfc-bankruptcy__number-2-test .calculation__variants .calculation__checkbox', function () {
            jQuery(this).closest('.calculation__tab').addClass('valid_item');
            var total_calculation_tab = jQuery(this).closest('.calculation__wrap').find('.calculation__tab').length;
            var valid_calculation_tab = jQuery(this).closest('.calculation__wrap').find('.calculation__tab.valid_item').length;
            if (total_calculation_tab == valid_calculation_tab) {
                jQuery(this).closest('.popup-item__cnt').find('.result_inline_form__cnt').find('.color_bulet__cnt').find('.message__cnt').find('p').html(jQuery(this).closest('.popup-item__cnt').find('.result_inline_form__cnt').attr('data-message'));
                jQuery('body.page-template-bankruptcy7cost .mfc-bankruptcy__number-2-test .result_inline_form__cnt').removeClass('hidden');
                var chat_destination_height = jQuery('body.page-template-bankruptcy7cost .mfc-bankruptcy__number-2-test').height();
                jQuery('body.page-template-bankruptcy7cost .mfc-bankruptcy__number-2-test').closest('.popup__overlay').animate({ scrollTop: chat_destination_height }, 1100);
            } else {
                jQuery(this).closest('.calculation__tab').next().removeClass('hidden');
            }
            jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('.h3').find('span').addClass('hidden');
            jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('.h3').find('span:nth-child('+(valid_calculation_tab+1)+')').removeClass('hidden');
            if (jQuery(this).closest('.popup-item__cnt').hasClass('color_scheme_blue')) {
                jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('svg').find('path:nth-child('+(valid_calculation_tab+1)+')').css({ "fill": "#5381F6"});    
            }
            if (jQuery(this).closest('.popup-item__cnt').hasClass('color_scheme_red')) {
                jQuery(this).closest('.popup-item__cnt').find('.steps__cnt').find('svg').find('path:nth-child('+(valid_calculation_tab+1)+')').css({ "fill": "#fb5a80"});    
            }
        });
        
        
        /*
        jQuery(document).on('click', 'body.page-template-bankruptcy6cost .mfc-bankruptcy__number-2-test .calculation__variants .calculation__radio', function () {
            var input_undefined_count = 0;
            jQuery(this).closest('.calculation__inner--inpost').find('.calculation__tab').each(function() {
                var input_name = jQuery(this).find('.calculation__variants').find('input').attr('name');
                //console.log('input[name='+input_name+']: ' + jQuery('body.page-template-bankruptcy6cost .mfc-bankruptcy__number-1-test input[name='+input_name+']:checked').val());
                if (jQuery('body.page-template-bankruptcy6cost .mfc-bankruptcy__number-2-test input[name='+input_name+']:checked').val() == undefined) {
                    input_undefined_count++;
                }
            });
            if (!input_undefined_count) {
                jQuery('body.page-template-bankruptcy6cost .mfc-bankruptcy__number-2-test .result_inline_form__cnt').removeClass('hidden');
                var chat_destination_height = jQuery('body.page-template-bankruptcy6cost .mfc-bankruptcy__number-2-test').height();
                jQuery('body.page-template-bankruptcy6cost .mfc-bankruptcy__number-2-test').closest('.popup__overlay').animate({ scrollTop: chat_destination_height }, 1100);
            }
        });
        */
        jQuery(document).on('click', '.warning__cnt .container .warning-modal__close', function () {
            jQuery(this).closest('.warning__cnt').addClass('hidden');
            jQuery('body').addClass('no-warning-block');
            localStorage.fpa_warning_state = 'hidden';
        });
        /*
        jQuery(document).on('click', '.questions__cnt .spoiler__wrap .spoiler__block .spoiler__head', function () {
            if (jQuery(this).closest('.spoiler__block').find('.spoiler__content').hasClass('hide')) {
                jQuery(this).closest('.spoiler__block').find('.spoiler__content').removeClass('hide');
            } else {
                jQuery(this).closest('.spoiler__block').find('.spoiler__content').addClass('hide');
            }
        });
        */
        
        
        if (jQuery('body').hasClass('page-template-stoimost')) {
            initializeClock("timer-price-1");
            initializeClock("timer-price-2");
            initializeClock("timer-price-3");
            initializeClock("timer-price-1-1");
            initializeClock("timer-price-2-1");
            initializeClock("timer-price-3-1");    
        }
        
        
        jQuery(document).on('click', '.swiper-stoimost-price .swiper-pagination-bullet', function () {
            var index_elem = jQuery(this).index() + 1;
            if (index_elem < 4) {
                jQuery('.swiper-stoimost-price .swiper-pagination-bullet').removeClass('swiper-pagination-bullet-active');
                jQuery(this).addClass('swiper-pagination-bullet-active');
                jQuery('.swiper-stoimost-price .swiper-wrapper').css({"transition-duration": "600ms", "transform": "translate3d(-154px, 0px, 0px)" })
                if (index_elem == 1) {
                    jQuery('.swiper-stoimost-price .swiper-wrapper').css({"transition-duration": "600ms", "transform": "translate3d(0px, 0px, 0px)" })
                }
                if (index_elem == 2) {
                    var elem_1 = jQuery('.swiper-stoimost-price .swiper-wrapper .price__item:nth-child(1)').outerWidth() + 60;
                    jQuery('.swiper-stoimost-price .swiper-wrapper').css({"transition-duration": "600ms", "transform": "translate3d(-"+elem_1+"px, 0px, 0px)" })
                }
                if (index_elem == 3) {
                    var elem_1 = jQuery('.swiper-stoimost-price .swiper-wrapper .price__item:nth-child(1)').outerWidth() + 60;
                    var elem_2 = jQuery('.swiper-stoimost-price .swiper-wrapper .price__item:nth-child(2)').outerWidth() + 40;
                    var all_width = elem_1 + elem_2;
                    jQuery('.swiper-stoimost-price .swiper-wrapper').css({"transition-duration": "600ms", "transform": "translate3d(-"+all_width+"px, 0px, 0px)" })
                }
            }
        });

        jQuery(document).on('click', '#payments__lst-mobile .swiper-pagination-bullet', function () {
            var index_elem = jQuery(this).index() + 1;
            if (index_elem < 4) {
                jQuery('#payments__lst-mobile .swiper-pagination-bullet').removeClass('swiper-pagination-bullet-active');
                jQuery(this).addClass('swiper-pagination-bullet-active');
                if (index_elem == 1) {
                    jQuery('#payments__lst-mobile .swiper-wrapper').css({"transition-duration": "600ms", "transform": "translate3d(0px, 0px, 0px)" })
                }
                if (index_elem == 2) {
                    var elem_1 = jQuery('#payments__lst-mobile .swiper-wrapper .payments__item:nth-child(1)').outerWidth() + 60;
                    jQuery('#payments__lst-mobile .swiper-wrapper').css({"transition-duration": "600ms", "transform": "translate3d(-"+elem_1+"px, 0px, 0px)" })
                }
                if (index_elem == 3) {
                    var elem_1 = jQuery('#payments__lst-mobile .swiper-wrapper .payments__item:nth-child(1)').outerWidth() + 60;
                    var elem_2 = jQuery('#payments__lst-mobile .swiper-wrapper .payments__item:nth-child(2)').outerWidth() + 40;
                    var all_width = elem_1 + elem_2;
                    jQuery('#payments__lst-mobile .swiper-wrapper').css({"transition-duration": "600ms", "transform": "translate3d(-"+all_width+"px, 0px, 0px)" })
                }
            }
        });
       
        jQuery(document).on('click', 'body.page-template-stoimost #question_category .calculation__radio', function () {
            
            console.log(jQuery(this).attr('data-result-head-title'));
            
            jQuery(this).closest('.question-category__cnt').addClass('hidden');
            jQuery(this).closest('#question_category').find('.content__cnt').addClass('hidden');
            jQuery(this).closest('#question_category').find('.question_category_result__cnt').removeClass('hidden');
            jQuery(this).closest('#question_category').find('.question_category_result__cnt').find('.title-page').find('.current_percent').html(jQuery(this).attr('data-result-head-percent'));
            jQuery(this).closest('#question_category').find('.question_category_result__cnt').find('.title-page').find('.current_category').html(jQuery(this).attr('data-result-head-title'));
            
            jQuery('#question_category .question_category_result__cnt .images__cnt .changed-picture source.mobile-source').attr("srcset", jQuery(this).attr('data-result-image-mobile'));
            jQuery('#question_category .question_category_result__cnt .images__cnt .changed-picture source.desktop-source').attr("srcset", jQuery(this).attr('data-result-image-desktop'));
            jQuery('#question_category .question_category_result__cnt .images__cnt .changed-picture img').attr("src", jQuery(this).attr('data-result-image-desktop'));
            jQuery('#question_category .question_category_result__cnt .images__cnt .changed-picture img').attr("data-src", jQuery(this).attr('data-result-image-desktop'));
            jQuery('#question_category .question_category_result__cnt .images__cnt .changed-picture img').attr("alt", jQuery(this).attr('data-result-title'));
            /*
            jQuery(this).closest('#question_category').find('.question_category_result__cnt').find('.images__cnt').find('.images__cnt-item:first-child').find('img').attr("src", jQuery(this).attr('data-result-image-desktop'));
            jQuery(this).closest('#question_category').find('.question_category_result__cnt').find('.images__cnt').find('.images__cnt-item:first-child').find('source.mobile-source').attr("src", jQuery(this).attr('data-result-image-mobile'));
            jQuery(this).closest('#question_category').find('.question_category_result__cnt').find('.images__cnt').find('.images__cnt-item:first-child').find('source.desktop-source').attr("src", jQuery(this).attr('data-result-image-desktop'));
            */
            jQuery(this).closest('#question_category').find('.question_category_result__cnt').find('.images__cnt').find('.images__cnt-item:first-child').find('.title').html(jQuery(this).attr('data-result-title'));
            jQuery(this).closest('#question_category').find('.question_category_result__cnt').find('.images__cnt').find('.images__cnt-item:first-child').find('.text').html(jQuery(this).attr('data-result-text'));
        });
        

        jQuery(document).on('click', 'body.page-template-stoimost #question_category .question_category_result__cnt .button__cnt button', function () {
            jQuery('body.page-template-stoimost #question_category .question_category_result__cnt').addClass('hidden');
            jQuery('body.page-template-stoimost #question_category .calculation__radio input').prop('checked',false);
            jQuery('body.page-template-stoimost #question_category .content__cnt').removeClass('hidden');
            jQuery('body.page-template-stoimost #question_category .question-category__cnt').removeClass('hidden');
            var question_category_destination_top =  jQuery('body.page-template-stoimost #question_category').offset().top;
            jQuery('body, html').animate({ scrollTop: question_category_destination_top }, 1100);
        });
        
        jQuery(document).on('click', 'body.page-template-stoimost #services_calculation .calculation__radio', function () {
            jQuery(this).find('input').prop('checked', true);
        });
        
        jQuery(document).on('click', 'body.page-template-stoimost #services_calculation .calculation__btn--next', function () {
            var input_name = jQuery(this).closest('.calculation__wrap').find('.calculation__tab:not(.hidden)').find('.calculation__variants').find('input').attr('name');
            var input_checked_val = jQuery(this).closest('.calculation__wrap').find('.calculation__tab:not(.hidden)').find('.calculation__variants').find('input[name='+input_name+']:checked').parent().find('label');
            if(input_checked_val.length > 0) {
                jQuery(this).closest('.calculation__wrap').find('.calculation__tab:not(.hidden)').addClass('hidden').next().removeClass('hidden');
                var tab_indx = jQuery(this).closest('.calculation__wrap').find('.calculation__inner').find('.calculation__tab:not(.hidden)').index() +1;
                var tab_len = jQuery(this).closest('.calculation__wrap').find('.calculation__inner').find('.calculation__tab').length;
                if (tab_indx > 1) {
                    jQuery('body.page-template-stoimost #services_calculation .calculation__btn--prev').removeClass('disabled');
                } else {
                    jQuery('body.page-template-stoimost #services_calculation .calculation__btn--prev').addClass('disabled');
                }
                if (tab_len == tab_indx) {
                    jQuery('body.page-template-stoimost #services_calculation .calculation__btn--next').addClass('hidden');
                    jQuery('body.page-template-stoimost #services_calculation .calculation__btn--modal').removeClass('hidden');
                } else {
                    jQuery('body.page-template-stoimost #services_calculation .calculation__btn--next').removeClass('hidden');
                    jQuery('body.page-template-stoimost #services_calculation .calculation__btn--modal').addClass('hidden');
                }
                jQuery(this).closest('.calculation__wrap').find('.calculation__slides').find('.calculation__slide--current').html(tab_indx);
            } else {
                jQuery(this).closest('.calculation__wrap').find('.calculation__tab:not(.hidden)').find('.calculation__variants').find('.radio__new--accent').addClass('zoom');
                jQuery(this).closest('.calculation__wrap').find('.calculation__tab:not(.hidden)').find('.calculation__variants').find('.checkbox__new--accent').addClass('zoom');
                setTimeout(() => jQuery(this).closest('.calculation__wrap').find('.calculation__tab:not(.hidden)').find('.calculation__variants').find('.radio__new--accent').removeClass('zoom'), 1000);
                setTimeout(() => jQuery(this).closest('.calculation__wrap').find('.calculation__tab:not(.hidden)').find('.calculation__variants').find('.checkbox__new--accent').removeClass('zoom'), 1000);
            }
        });
        
        jQuery(document).on('click', 'body.page-template-stoimost #services_calculation .calculation__btn--modal', function () {
            var input_name = jQuery(this).closest('.calculation__wrap').find('.calculation__tab:not(.hidden)').find('.calculation__variants').find('input').attr('name');
            var input_checked_val = jQuery(this).closest('.calculation__wrap').find('.calculation__tab:not(.hidden)').find('.calculation__variants').find('input[name='+input_name+']:checked').parent().find('label');
            if(input_checked_val.length > 0) {
                var tab_indx = jQuery(this).closest('.calculation__wrap').find('.calculation__inner').find('.calculation__tab:not(.hidden)').index() +1;
                var tab_len = jQuery(this).closest('.calculation__wrap').find('.calculation__inner').find('.calculation__tab').length;
                if (tab_indx > 1) {
                    jQuery('body.page-template-stoimost #services_calculation .calculation__btn--prev').removeClass('disabled');
                } else {
                    jQuery('body.page-template-stoimost #services_calculation .calculation__btn--prev').addClass('disabled');
                }
                if (tab_len == tab_indx) {
                    jQuery('body.page-template-stoimost #services_calculation .calculation__btn--next').addClass('hidden');
                    jQuery('body.page-template-stoimost #services_calculation .calculation__btn--modal').removeClass('hidden');
                } else {
                    jQuery('body.page-template-stoimost #services_calculation .calculation__btn--next').removeClass('hidden');
                    jQuery('body.page-template-stoimost #services_calculation .calculation__btn--modal').addClass('hidden');
                }
                jQuery('body.page-template-stoimost .section--modal.modal').removeClass('abs-hidden');
            } else {
                jQuery('body.page-template-stoimost .section--modal.modal').addClass('abs-hidden');
                jQuery(this).closest('.calculation__wrap').find('.calculation__tab:not(.hidden)').find('.calculation__variants').find('.radio__new--accent').addClass('zoom');
                jQuery(this).closest('.calculation__wrap').find('.calculation__tab:not(.hidden)').find('.calculation__variants').find('.checkbox__new--accent').addClass('zoom');
                setTimeout(() => jQuery(this).closest('.calculation__wrap').find('.calculation__tab:not(.hidden)').find('.calculation__variants').find('.radio__new--accent').removeClass('zoom'), 1000);
                setTimeout(() => jQuery(this).closest('.calculation__wrap').find('.calculation__tab:not(.hidden)').find('.calculation__variants').find('.checkbox__new--accent').removeClass('zoom'), 1000);
                return false;
            }
        });
        
        jQuery(document).on('click', 'body.page-template-stoimost #services_calculation .calculation__btn--prev', function () {
            jQuery(this).closest('.calculation__wrap').find('.calculation__tab:not(.hidden)').addClass('hidden').prev().removeClass('hidden');
            var tab_indx = jQuery(this).closest('.calculation__wrap').find('.calculation__inner').find('.calculation__tab:not(.hidden)').index() +1;
            var tab_len = jQuery(this).closest('.calculation__wrap').find('.calculation__inner').find('.calculation__tab').length;
            if (tab_indx > 1) {
                jQuery(this).removeClass('disabled');
            } else {
                jQuery(this).addClass('disabled');
            }
            if (tab_len == tab_indx) {
                jQuery('body.page-template-stoimost #services_calculation .calculation__btn--next').addClass('hidden');
                jQuery('body.page-template-stoimost #services_calculation .calculation__btn--modal').removeClass('hidden');
            } else {
                jQuery('body.page-template-stoimost #services_calculation .calculation__btn--next').removeClass('hidden');
                jQuery('body.page-template-stoimost #services_calculation .calculation__btn--modal').addClass('hidden');
            }
            jQuery(this).closest('.calculation__wrap').find('.calculation__slides').find('.calculation__slide--current').html(tab_indx);
        });
        
        jQuery(document).on('click', 'body.page-template-stoimost .section--main button.top-m__btn.color_scheme_red', function () {
            jQuery('.section--modal .modal__wrap--callback form input[name="form-sms"]').val('56');
            jQuery('.section--modal .modal__wrap--callback form input[name="form-name"]').val('SMS-53 Стоимость банкротства физических лиц. Окладников Илья Викторович');
        });
        /*
        jQuery(document).on('click', 'body.page-template-online .login-form__cnt .auth-methods .auth-gmail', function () {
            jQuery('body.page-template-online .login-form__cnt .g_id_signin').on('click');
        });
        */
        
        jQuery(document).on('submit', 'body.page-template-online .login-form__cnt form', function (e) {
            var formFieldData = jQuery(this).serializeArray();
            jQuery.ajax({
                type: "POST",
                url: "https://fpa.ru/wp-admin/admin-ajax.php",
                data: {
                    action : 'signin_user',
                    form_fields: formFieldData,
                },
                success:function(data) {
                    var data_json = jQuery.parseJSON(data);
                    if (data_json['loggedin']) {
                        jQuery('body.page-template-online .login-form__cnt form .form_notice').addClass('hidden');
                        jQuery('body.page-template-online .login-form__cnt form .form_notice .message').html('');
                        location.reload();
                    } else {
                        jQuery('body.page-template-online .login-form__cnt form .form_notice .message').html(data_json['message']);
                        jQuery('body.page-template-online .login-form__cnt form .form_notice').removeClass('hidden');
                    }
                },
                error: function(errorThrown){
                    console.log(errorThrown);
                }
            });
            e.preventDefault();
        });
        
        jQuery(document).on('submit', 'body.page-template-recovery_password .recovery-form__cnt form', function (e) {
            var formFieldData = jQuery(this).serializeArray();
            jQuery.ajax({
                type: "POST",
                url: "https://fpa.ru/wp-admin/admin-ajax.php",
                data: {
                    action : 'recovery_password',
                    form_fields: formFieldData,
                },
                success:function(data) {
                    var data_json = jQuery.parseJSON(data);
                    if (data_json['loggedin']) {
                        jQuery('body.page-template-recovery_password .recovery-form__cnt form .form_notice').removeClass('error').addClass('info');
                        jQuery('body.page-template-recovery_password .recovery-form__cnt form .form_notice .message').html(data_json['message']);
                        jQuery('body.page-template-recovery_password .recovery-form__cnt form .form_notice').removeClass('hidden');
                    } else {
                        jQuery('body.page-template-recovery_password .recovery-form__cnt form .form_notice').removeClass('info').addClass('error');
                        jQuery('body.page-template-recovery_password .recovery-form__cnt form .form_notice .message').html(data_json['message']);
                        jQuery('body.page-template-recovery_password .recovery-form__cnt form .form_notice').removeClass('hidden');
                    }
                },
                error: function(errorThrown){
                    console.log(errorThrown);
                }
            });
            e.preventDefault();
        });
        
        jQuery(document).on('submit', 'body.page-template-online .user_detail_form__cnt form', function (e) {
            var formFieldData = jQuery(this).serializeArray();
            console.log(formFieldData);
            jQuery.ajax({
                type: "POST",
                url: "https://fpa.ru/wp-admin/admin-ajax.php",
                data: {
                    action : 'update_profile_fields',
                    form_fields: formFieldData,
                },
                success:function(data) {
                    var data_json = jQuery.parseJSON(data);
                    if (data_json['loggedin']) {
                        jQuery('body.page-template-online .user_detail_form__cnt form .form_notice').removeClass('error').addClass('info');
                        jQuery('body.page-template-online .user_detail_form__cnt form .form_notice .message').html(data_json['message']);
                        jQuery('body.page-template-online .user_detail_form__cnt form .form_notice').removeClass('hidden');
                    } else {
                        jQuery('body.page-template-online .user_detail_form__cnt form .form_notice').removeClass('info').addClass('error');
                        jQuery('body.page-template-online .user_detail_form__cnt form .form_notice .message').html(data_json['message']);
                        jQuery('body.page-template-online .user_detail_form__cnt form .form_notice').removeClass('hidden');
                    }
                    var destination = jQuery('body.page-template-online section.user_detail').offset().top - 100;
                    jQuery('body, html').animate({ scrollTop: destination }, 1100)
                },
                error: function(errorThrown){
                    console.log(errorThrown);
                }
            });
            e.preventDefault();
        });
        
        
    
        jQuery(document).on('click', 'body.page-template-online .stylized-select__cnt .select .select__head', function () {
            if (jQuery(this).hasClass('open')) {
                jQuery(this).removeClass('open');
                jQuery(this).next().fadeOut();
            } else {
                jQuery(this).removeClass('open');
                jQuery(this).closest('.select').find('.select__list').fadeOut();
                jQuery(this).addClass('open');
                jQuery(this).next().fadeIn();
            }
        });
    
        jQuery(document).on('click', 'body.page-template-online .stylized-select__cnt .select__item', function () {
            jQuery('.select__head').removeClass('open');
            jQuery(this).parent().fadeOut();
            jQuery(this).parent().prev().text(jQuery(this).text());
            jQuery(this).closest('.select__list').find('.select__item').removeClass('active');
            jQuery('body.page-template-online .user_detail .menu__cnt li').removeClass('active');
            jQuery(this).addClass('active');
            if (jQuery(this).hasClass('disabled')) {
                jQuery(this).parent().prev().addClass('disabled');
            } else {
                jQuery(this).parent().prev().removeClass('disabled');
            }
            jQuery(this).parent().prev().prev().val(jQuery(this).text());
            var section_id = jQuery(this).attr('data-section');
            jQuery('body.page-template-online .user_detail .menu__cnt li[data-section='+section_id+']').addClass('active');
            jQuery("body.page-template-online .cabiten_section").each(function() {
                var current_section_id = jQuery(this).attr('data-section-id');
                if (current_section_id != section_id) {
                    //jQuery(this).fadeOut();
                    jQuery(this).addClass('hidden');
                } else {
                    //jQuery(this).fadeIn();
                    jQuery(this).removeClass('hidden');
                }
            });
        });

        jQuery(document).on('click', 'body.page-template-bankruptcy8cost .contacts-section .map-route__cnt button', function () {
            let current_url = jQuery(this).attr('data-href');
            if (current_url != '') {
                /*window.location.href = current_url;*/
                let mapRouteWindow = window.open();
                mapRouteWindow.opener = null;
                mapRouteWindow.location = current_url;
            }
        });

        jQuery(document).on('click', 'body.page-template-bankruptcy8cost .opros__btn', function () {
            jQuery('body').addClass('body-fixed');
            jQuery('.popup__cnt').removeClass('hidden');
            jQuery('.popup__cnt .bankruptcy8cost__number-1').removeClass('hidden');
            jQuery('.popup__cnt .bankruptcy8cost__number-1').attr("data-scroll-destination", parseInt(jQuery('html').css("--scroll-y")));
        });

        jQuery(document).on('click', 'body.page-template-bankruptcy8cost .consequences .actions__cnt .btn', function () {
            /*jQuery('body').addClass('body-fixed');*/
            jQuery('.section--modal .modal__wrap--services form input[name="form-name"]').val('SMS-21 Узнайте все о банкротстве в вашем случае');
            jQuery('.section--modal .modal__wrap--services form input[name="form-sms"]').val('3');
            jQuery('.modal__overlay').removeClass('hidden');
            jQuery('.section--modal .modal__wrap--services').removeClass('hidden');
        });
        
        jQuery(document).on('click', 'body.page-template-bankruptcy8cost .survey__block-btn .survey_btn', function () {
            jQuery('body').addClass('body-fixed');
            //jQuery('.section--modal .modal__wrap--services form input[name="form-name"]').val('SMS-21 Узнайте все о банкротстве в вашем случае');
            //jQuery('.section--modal .modal__wrap--services form input[name="form-sms"]').val('3');
            jQuery('.popup__cnt').removeClass('hidden');
            jQuery('.popup__cnt .bankruptcy8cost__number-2').removeClass('hidden');
            jQuery('.popup__cnt .bankruptcy8cost__number-2').attr("data-scroll-destination", parseInt(jQuery('html').css("--scroll-y")));
        });
        


        jQuery(document).on('click', '.bankrotkonsalt-callback-form', function () {
            jQuery('body').addClass('body-fixed');
            jQuery('.popup__cnt').removeClass('hidden');
            jQuery('.bankrotkonsalt_popup__cnt.popup_callback').removeClass('hidden');
            jQuery('.bankrotkonsalt_popup__cnt.popup_main_opros').addClass('hidden');
        });
        
        jQuery(document).on('click', '.bankrotkonsalt-opros-form', function () {
            console.log('bankrotkonsalt-opros-form');
            jQuery('body').addClass('body-fixed');
            jQuery('.popup__cnt').removeClass('hidden');
            jQuery('.bankrotkonsalt_popup__cnt.popup_main_opros').removeClass('hidden');
            jQuery('.bankrotkonsalt_popup__cnt.popup_main_opros .opros_steps__cnt').removeClass('hidden');
            jQuery('.bankrotkonsalt_popup__cnt.popup_callback').addClass('hidden');
        });

        jQuery(".bankrotkonsalt_popup__cnt.popup_main_opros .opros_steps__cnt input").change(function(){
            if (jQuery(this).attr('type') == 'checkbox') {
                if (jQuery(this).attr('name') == 'messenger_list[]') {
                    let messenger_value = '';
                   jQuery(this).closest('.variations').find('input[type=checkbox]').each(function(indx) {
                       if (jQuery(this).is(':checked')) {
                           if (messenger_value.length > 0) {
                               messenger_value += '; ';
                           }
                           messenger_value += jQuery(this).val();
                       }
                   });
                   if (messenger_value.length > 0) {
                       jQuery(this).closest('.row-wrapper').addClass('answered');
                   } else {
                       jQuery(this).closest('.row-wrapper').removeClass('answered');
                   }
                   jQuery(this).closest('form').find('input[name=messenger]').val(messenger_value); 
                } else {
                    let current_field_name = jQuery(this).attr('name');
                    let current_field_value = jQuery(this).closest('.variations').find('input[name='+current_field_name+']:checked').val();
                    if (current_field_value != undefined) {
                        jQuery(this).closest('.row-wrapper').addClass('answered');
                    } else {
                        jQuery(this).closest('.row-wrapper').removeClass('answered');
                    }
                }
            }
            if (jQuery(this).attr('type') == 'tel') {
                let current_field_name = jQuery(this).attr('name');
                let current_field_value = jQuery(this).val();
                if (current_field_value != '') {
                    jQuery(this).closest('.row-wrapper').addClass('answered');
                } else {
                    jQuery(this).closest('.row-wrapper').removeClass('answered');
                }
            }
            if (jQuery(this).attr('type') == 'email') {
                let current_field_name = jQuery(this).attr('name');
                let current_field_value = jQuery(this).val();
                if (current_field_value != '') {
                    jQuery(this).closest('.row-wrapper').addClass('answered');
                } else {
                    jQuery(this).closest('.row-wrapper').removeClass('answered');
                }
            }
        });

        jQuery(document).on('click', '.bankrotkonsalt_popup__cnt.popup_main_opros .button-wrapper div.action-back', function () {
            let current_row_index = 0;
            jQuery(this).closest('.popup-item__cnt').find('.main_opros__cnt').find('form').find('.row-wrapper').each(function(indx) {
                if (!jQuery(this).hasClass('hidden')) {
                    current_row_index = indx+1;
                    console.log(current_row_index);
                }
            });
            if (current_row_index > 1) {
                jQuery(this).closest('.popup-item__cnt').find('.main_opros__cnt').find('form').find('.row-wrapper:not(.hidden)').addClass('hidden').prev().removeClass('hidden');
                jQuery(this).closest('.popup-item__cnt').find('.progress__cnt').find('.progress-line-tooltip').find('.current-step').html(parseInt(current_row_index - 1));
                let form_rows_length = jQuery(this).closest('.popup-item__cnt').find('.main_opros__cnt').find('form').find('.row-wrapper').length;
                let half_item_percent = (1 / form_rows_length) * 50;
                let current_left_percent = ( parseInt(current_row_index - 1) / form_rows_length * 100 );
                console.log('current_left_percent: '+current_left_percent+'; half_item_percent: '+half_item_percent);
                jQuery(this).closest('.popup-item__cnt').find('.progress__cnt').find('.progress-line-tooltip').css({"left": "calc("+(current_left_percent - half_item_percent)+"% - 36px)"});
                jQuery(this).closest('.popup-item__cnt').find('.progress__cnt').find('.progress-line-item').css({"width": current_left_percent+"%"});
            }
            if (current_row_index == 2) {
                jQuery(this).addClass('disabled');
            }
        });

        jQuery(document).on('click', '.bankrotkonsalt_popup__cnt.popup_main_opros .button-wrapper div.action-next', function () {
            let current_row = 1;
            let allow_next_step = false;
            jQuery(this).closest('.popup-item__cnt').find('.main_opros__cnt').find('form').find('.row-wrapper').each(function(indx) {
                if (!jQuery(this).hasClass('answered') && !jQuery(this).hasClass('hidden')) {
                    jQuery(this).find('.wpcf7-list-item-label').addClass('zoom');
                    setTimeout(() => jQuery(this).find('.wpcf7-list-item-label').removeClass('zoom'), 1000);
                    jQuery(this).closest('.popup-item__cnt').find('.main_opros__cnt').find('form').find('.row-wrapper:not(.answered):not(.hidden)').find('input[type=tel]').addClass('error');
                    jQuery(this).closest('.popup-item__cnt').find('.main_opros__cnt').find('form').find('.row-wrapper:not(.answered):not(.hidden)').find('input[type=email]').addClass('error');
                }
                if (jQuery(this).hasClass('answered') && !jQuery(this).hasClass('hidden')) {
                    if(jQuery(this).next().hasClass('row-wrapper')) {
                        current_row = indx + 1;
                        allow_next_step = true;
                        jQuery(this).closest('.popup-item__cnt').find('.main_opros__cnt').find('form').find('.row-wrapper:not(.answered):not(.hidden)').find('input[type=tel]').removeClass('error');
                        jQuery(this).closest('.popup-item__cnt').find('.main_opros__cnt').find('form').find('.row-wrapper:not(.answered):not(.hidden)').find('input[type=email]').removeClass('error');
                    } else {
                        jQuery('.bankrotkonsalt_popup__cnt.popup_main_opros form input[type=submit]').click();
                    }
                }
            });
            if (allow_next_step) {
                jQuery(this).closest('.popup-item__cnt').find('.main_opros__cnt').find('form').find('.row-wrapper.answered:not(.hidden)').addClass('hidden').next().removeClass('hidden');
                jQuery(this).closest('.popup-item__cnt').find('.progress__cnt').find('.progress-line-tooltip').find('.current-step').html((current_row + 1));
                let form_rows_length = jQuery(this).closest('.popup-item__cnt').find('.main_opros__cnt').find('form').find('.row-wrapper').length;
                let half_item_percent = (1 / form_rows_length) * 50;
                let current_left_percent = ( (current_row + 1) / form_rows_length * 100 );
                jQuery(this).closest('.popup-item__cnt').find('.progress__cnt').find('.progress-line-tooltip').css({"left": "calc("+(current_left_percent - half_item_percent)+"% - 36px)"});
                jQuery(this).closest('.popup-item__cnt').find('.progress__cnt').find('.progress-line-item').css({"width": current_left_percent+"%"});
                jQuery(this).closest('.popup-item__cnt').find('div.action-back').removeClass('disabled');
            } else {
                
            }
        });

        jQuery(".bankrotstvo_mfc-form-wrapper form input#answer_range_summ").change(function(){
            jQuery('#answer_text_summ').val(jQuery(this).val());
            let min_value = jQuery(this).attr('min');
            let max_value = jQuery(this).attr('max');
            let current_value = jQuery(this).val();
            let current_percent = ( ( current_value / (max - min) ) * 100 );
            jQuery('style#summRangeSliderStyle').html('input#answer_range_summ::-webkit-slider-runnable-track{background: linear-gradient(90deg,#5082e0 '+current_percent+'%,#cccccc '+(current_percent + 1)+'%);} ');
            jQuery('style#summNumberFieldStyle').html('.bankrotstvo_mfc-form-wrapper form span.wpcf7-form-control-wrap.summ:before {content: "'+number_format(current_value, 0, ".", " ")+'";}')
        });

        jQuery(".bankrotstvo_mfc-form-wrapper form input#answer_text_summ").change(function(){
            let current_value = jQuery(this).val();
            jQuery('style#summNumberFieldStyle').html('.bankrotstvo_mfc-form-wrapper form span.wpcf7-form-control-wrap.summ:before {content: "'+number_format(current_value, 0, ".", " ")+'";}');
 
            let min_value = jQuery(".bankrotstvo_mfc-form-wrapper form input#answer_range_summ").attr('min');
            let max_value = jQuery(".bankrotstvo_mfc-form-wrapper form input#answer_range_summ").attr('max');
            let current_percent = ( ( current_value / (max - min) ) * 100 );
            jQuery('style#summRangeSliderStyle').html('input#answer_range_summ::-webkit-slider-runnable-track{background: linear-gradient(90deg,#5082e0 '+current_percent+'%,#cccccc '+(current_percent + 1)+'%);} ');
            jQuery(".bankrotstvo_mfc-form-wrapper form input#answer_range_summ").val(current_value);
        });

        jQuery('.bankrotstvo_mfc-form-wrapper form input#answer_text_summ').keyup(function(){ 		 		 		 		
            let current_value = jQuery(this).val();
            jQuery('style#summNumberFieldStyle').html('.bankrotstvo_mfc-form-wrapper form span.wpcf7-form-control-wrap.summ:before {content: "'+number_format(current_value, 0, ".", " ")+'";}');
            
            let min_value = jQuery(".bankrotstvo_mfc-form-wrapper form input#answer_range_summ").attr('min');
            let max_value = jQuery(".bankrotstvo_mfc-form-wrapper form input#answer_range_summ").attr('max');
            let current_percent = ( ( current_value / (max - min) ) * 100 );
            jQuery('style#summRangeSliderStyle').html('input#answer_range_summ::-webkit-slider-runnable-track{background: linear-gradient(90deg,#5082e0 '+current_percent+'%,#cccccc '+(current_percent + 1)+'%);} ');
            jQuery(".bankrotstvo_mfc-form-wrapper form input#answer_range_summ").val(current_value);
        });

        jQuery(document).on('click', 'body.page-template-online .user_detail .menu__cnt li', function () {
            jQuery(this).closest('ul').find('li').removeClass('active');
            jQuery(this).addClass('active');
            var section_id = jQuery(this).attr('data-section');
            jQuery('body.page-template-online .stylized-select__cnt .select__item').removeClass('active');
            jQuery('body.page-template-online .stylized-select__cnt .select__item[data-section='+section_id+']').addClass('active');
            jQuery('body.page-template-online .stylized-select__cnt .select__input').val(jQuery(this).find('span').html());
            jQuery('body.page-template-online .stylized-select__cnt .select__head').text(jQuery(this).find('span').html());
            jQuery("body.page-template-online .cabiten_section").each(function() {
                var current_section_id = jQuery(this).attr('data-section-id');
                if (current_section_id != section_id) {
                    //jQuery(this).fadeOut();
                    jQuery(this).addClass('hidden');
                } else {
                    //jQuery(this).fadeIn();
                    jQuery(this).removeClass('hidden');
                }
            });
        });
        
        
        jQuery(document).on('click', '.popup__cnt .popup-item__cnt a.btn', function () {
            let not_answered_tabs = jQuery(this).closest('.popup-item__cnt').find('.calculation__tab.not-valid').length;
            if (!not_answered_tabs) {
                jQuery(this).closest('.popup-item__cnt').attr('data-answered-form', true);
                jQuery('.modal__wrap--answer .selected-answers__cnt .selected-answers-animate__cnt').empty();
                jQuery(this).closest('.popup-item__cnt').find('.calculation__tab:not(not-valid)').each(function(indx) {
                    let input_name = jQuery(this).attr('data-question-id');
                    let input_selected_value = jQuery(this).find('input[name='+input_name+']:checked').val();
                    let input_selected_answer = '';
                    switch (input_name) {
                        case "summ": 
                            input_selected_answer = "Сумма долга";
                            break;
                        case "place": 
                            input_selected_answer = "Место проживания";
                            break;
                        case "valuable": 
                            input_selected_answer = "Ценное имущество";
                            break;
                        case "category": 
                            input_selected_answer = "Категория граждан";
                            break;
                        case "dohod48k": 
                            input_selected_answer = "Доход более 48 000 рублей";
                            break;
                        case "reduced-income": 
                            input_selected_answer = "Сокращение на работе";
                            break;
                        case "transactions": 
                            input_selected_answer = "Сделка с имуществом";
                            break;
                        case "creditors": 
                            input_selected_answer = "Ваши кредиторы";
                            break;
                        case "gosbanks": 
                            input_selected_answer = "Кредиторы с госучастием";
                            break;
                        case "fssp": 
                            input_selected_answer = "Долги уже просужены";
                            break;
                        case "officially-employed": 
                            input_selected_answer = "Официальное трудоустройство";
                            break;
                        case "messenger": 
                            input_selected_answer = "Мессенджер";
                            break;
                        case "number-creditors": 
                            input_selected_answer = "Количество кредиторов";
                            break;
                    }
                    if (input_selected_answer != '') {
                        jQuery('.modal__wrap--answer .selected-answers__cnt .selected-answers-animate__cnt').append('<div class="answer-block__cnt answer-block-item-'+indx+'"><span class="icon"></span><span class="question">'+input_selected_answer+':</span><span class="answer">'+input_selected_value+'</span></div>');
                    }
                });
                let calculation_tabs_length = jQuery(this).closest('.popup-item__cnt').find('.calculation__tab').length;
                jQuery('.modal__wrap--answer .selected-answers__cnt .selected-answers-animate__cnt').addClass('animated-scroll-'+calculation_tabs_length);
                jQuery('.modal__wrap--answer .selected-answers__cnt').removeClass('hidden');
                jQuery('.modal__wrap--answer .calc-modal__check').addClass('header-hidden');
                jQuery('.modal__wrap--answer .calc-modal__loader').addClass('header-hidden');
                jQuery('.modal__wrap--answer .calc-modal__block').addClass('header-hidden');
            }
        });
        
        jQuery(document).on('click', '.modal__wrap--close-popup button.btn', function () {
            jQuery(this).addClass('hidden');
            jQuery(this).closest('.modal-col').addClass('header-hidden');
            jQuery(this).closest('.modal__wrap--close-popup form input[name="page-url"]').val(window.location.href);
            jQuery(this).closest('.modal-col').find('.second-col').removeClass('hidden');
            
        });
        /*
        jQuery(document).on('click', '.filter-wrap .radio-block-mobile__cnt .radio label', function () {
            let current_li_value = jQuery(this).closest('.radio').find('input').val();
            console.log(current_li_value);
            jQuery('.filter-wrap .radio-block-mobile__cnt .radio').removeClass('active');
            jQuery('.filter-wrap .radio-block-mobile__cnt .radio input').attr('checked', '');
            jQuery(this).closest('.radio').addClass('active').find('input').attr('checked', 'checked');
            console.log(jQuery('filter-wrap .radio-block-mobile__cnt .radio input:checked').val());
            //jQuery('.filter-wrap .radio-block-mobile__cnt .radio input').prop('checked', false);
            //jQuery('.filter-wrap .radio-block-mobile__cnt .radio input[value='+current_li_value+']').prop('checked', true);
            //jQuery(this).closest('.radio').find('input').prop('checked', true);
        });
        */
        jQuery(document).on('click', '.field-range__cnt .tooltip-bottom li', function () {
            let field_range_value = jQuery(this).attr('data-value');
            let field_range_title = jQuery(this).html();
            jQuery('.field-range__cnt input[type="range"]').val(field_range_value);
            jQuery('.field-range__cnt .tooltip-top .tooltip-top__cnt').html(field_range_title);
            jQuery('.filter-wrap .radio-block-mobile__cnt .radio').removeClass('active');
            jQuery('.filter-wrap .radio-block-mobile__cnt .radio input').prop('checked', false);
            switch (field_range_value) {
                case "0":
                    jQuery('.field-range__cnt .tooltip-top .tooltip-top__cnt').css("left", "0%");
                    jQuery('.filter-wrap .radio-block-mobile__cnt .radio input[value=all]').prop('checked', true).closest('.radio').addClass('active');
                    break;
                case "1":
                    jQuery('.field-range__cnt .tooltip-top .tooltip-top__cnt').css("left", "18%");
                    jQuery('.filter-wrap .radio-block-mobile__cnt .radio input[value=from_300000]').prop('checked', true).closest('.radio').addClass('active');
                    break;
                case "2":
                    jQuery('.field-range__cnt .tooltip-top .tooltip-top__cnt').css("left", "37%");
                    jQuery('.filter-wrap .radio-block-mobile__cnt .radio input[value=from_500000]').prop('checked', true).closest('.radio').addClass('active');
                    break;
                case "3":
                    jQuery('.field-range__cnt .tooltip-top .tooltip-top__cnt').css("left", "66%");
                    jQuery('.filter-wrap .radio-block-mobile__cnt .radio input[value=from_1000000]').prop('checked', true).closest('.radio').addClass('active');
                    break;
                case "4":
                    jQuery('.field-range__cnt .tooltip-top .tooltip-top__cnt').css("left", "86%");
                    jQuery('.filter-wrap .radio-block-mobile__cnt .radio input[value=from_3000000]').prop('checked', true).closest('.radio').addClass('active');
                    break;
            }
            let request_params_li = [];
            jQuery(".reviews-v2__wrap .filter-wrap .filter-block__cnt").each(function() {
                let input_type = jQuery(this).find('input').attr('type');
                let current_input_name_li = '';
                let current_input_value_li = '';
                switch (input_type) {
                    case "radio":
                        current_input_name_li = jQuery(this).find('input:checked').attr('name');
                        current_input_value_li = jQuery(this).find('input:checked').val();
                        request_params_li.push([current_input_name_li, current_input_value_li]);
                        break;
                    case "range":
                        current_input_name_li = jQuery(this).find('input').attr('name');
                        current_input_value_li = jQuery(this).find('input').val();
                        let current_input_value_text = parseInt(current_input_value_li) + 1;
                        current_input_min_value_li = jQuery('.field-range__cnt .tooltip-bottom li.range-segment-'+current_input_value_text).attr('data-min');
                        current_input_max_value_li = jQuery('.field-range__cnt .tooltip-bottom li.range-segment-'+current_input_value_text).attr('data-max');
                        request_params_li.push([current_input_name_li, current_input_min_value_li, current_input_max_value_li]);
                        break;
                    case "checkbox":
                        jQuery(this).find('input:checked').each(function() {
                            request_params_li.push([jQuery(this).attr('name'), 'yes']);
                        });
                        break;
                }
            });
            
            let newUrl_params_li = '';
            request_params_li.forEach(function(item, i, arr) {
                if (newUrl_params_li != '') {
                    newUrl_params_li += '&';
                }
                if (item[0] == 'range_summ') {
                    newUrl_params_li += 'min_summ='+item[1]+'&max_summ='+item[2];
                } else {
                    newUrl_params_li += item[0]+'='+item[1];
                }
            });
            var newurl_li = window.location.protocol + "//" + window.location.host + window.location.pathname + '?' + newUrl_params_li;
            window.history.pushState({path:newurl_li},'',newurl_li);
            jQuery.ajax({
                type: "POST",
                url: "https://fpa.ru/wp-admin/admin-ajax.php",
                data: {
                    action : 'get_filter_reviews',
                    params: request_params_li,
                },
                success:function(data) {
                    //console.log(data);
                    //console.log(data);
                    let data_obj = JSON.parse(data);
                    //console.log(data_obj);
                    //console.log(data_obj.video_reviews);
                    //console.log(data_obj.photo_reviews);
                    if (data_obj.video_reviews.length == 0 && data_obj.photo_reviews.length == 0) {
                        jQuery('section.reviews-v2 .reviews-v2__col .not-found').removeClass('hidden');
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid').addClass('hidden');
                    } else {
                        jQuery('section.reviews-v2 .reviews-v2__col .not-found').addClass('hidden');
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid').removeClass('hidden');
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .reviews-row .review-first').removeClass('hidden');
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .reviews-row .review-video-additional__cnt').removeClass('hidden');
                        if (data_obj.video_reviews.length == 0) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-first').addClass('hidden');
                        }
                        if (data_obj.video_reviews.length < 1) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-video-additional__cnt').addClass('hidden');
                        }
                        if (data_obj.video_reviews.length <= 10) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-first').addClass('hidden');
                        }
                        if (data_obj.video_reviews.length <= 11) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-video-additional__cnt').addClass('hidden');
                        }
                        if (data_obj.video_reviews.length <= 17) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-first').addClass('hidden');
                        }
                        if (data_obj.video_reviews.length <= 18) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-video-additional__cnt').addClass('hidden');
                        }
                        
                        if (data_obj.photo_reviews.length == 0) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-first').addClass('hidden');
                        }
                        if (data_obj.photo_reviews.length < 1) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-video-additional__cnt').addClass('hidden');
                        }
                        if (data_obj.photo_reviews.length <= 10) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-first').addClass('hidden');
                        }
                        if (data_obj.photo_reviews.length <= 11) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-video-additional__cnt').addClass('hidden');
                        }
                        if (data_obj.photo_reviews.length <= 17) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-first').addClass('hidden');
                        }
                        if (data_obj.photo_reviews.length <= 18) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-video-additional__cnt').addClass('hidden');
                        }
                        for (var key in data_obj.video_reviews) {
                            if (key == 0) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.video_reviews[key]['title']+'</div><div class="number">№ '+data_obj.video_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.video_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.video_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.video_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.video_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 0 && key <= 9) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div></div>');
                            }
                            if (key == 10) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.video_reviews[key]['title']+'</div><div class="number">№ '+data_obj.video_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.video_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.video_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.video_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.video_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 10 && key <= 16) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div></div>');
                            }
                            if (key == 17) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.video_reviews[key]['title']+'</div><div class="number">№ '+data_obj.video_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.video_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.video_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.video_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.video_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 17 && key <= 20) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div></div>');
                            }
                        }
    
                        for (var key in data_obj.photo_reviews) {
                            if (key == 0) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.photo_reviews[key]['title']+'</div><div class="number">№ '+data_obj.photo_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><img src="'+data_obj.photo_reviews[key]['image']+'" /><div class="case-number__cnt"><span>Дело: <span>'+data_obj.photo_reviews[key]['case']+'</span></span><span>Списан долг: <span>'+data_obj.photo_reviews[key]['amount_of_debt']+' ₽</span></span></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.photo_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.photo_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.photo_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.photo_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 0 && key <= 9) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><a href="'+data_obj.photo_reviews[key]['url']+'"><img src="'+data_obj.photo_reviews[key]['image']+'" /></a><div class="case-number">Дело: '+data_obj.photo_reviews[key]['case']+'</div></div></div>');
                            }
                            if (key == 10) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.photo_reviews[key]['title']+'</div><div class="number">№ '+data_obj.photo_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><img src="'+data_obj.photo_reviews[key]['image']+'" /><div class="case-number__cnt"><span>Дело: <span>'+data_obj.photo_reviews[key]['case']+'</span></span><span>Списан долг: <span>'+data_obj.photo_reviews[key]['amount_of_debt']+' ₽</span></span></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.photo_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.photo_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.photo_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.photo_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 10 && key <= 16) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><a href="'+data_obj.photo_reviews[key]['url']+'"><img src="'+data_obj.photo_reviews[key]['image']+'" /></a><div class="case-number">Дело: '+data_obj.photo_reviews[key]['case']+'</div></div></div>');
                            }
                            if (key == 17) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.photo_reviews[key]['title']+'</div><div class="number">№ '+data_obj.photo_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><img src="'+data_obj.photo_reviews[key]['image']+'" /><div class="case-number__cnt"><span>Дело: <span>'+data_obj.photo_reviews[key]['case']+'</span></span><span>Списан долг: <span>'+data_obj.photo_reviews[key]['amount_of_debt']+' ₽</span></span></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.photo_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.photo_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.photo_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.photo_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 17 && key <= 20) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><a href="'+data_obj.photo_reviews[key]['url']+'"><img src="'+data_obj.photo_reviews[key]['image']+'" /></a><div class="case-number">Дело: '+data_obj.photo_reviews[key]['case']+'</div></div></div>');
                            }
                        }
                    }
                },
                error: function(errorThrown){
                    console.log(errorThrown);
                }
            });
        });
        
        jQuery(".field-range__cnt input[type='range']").change(function(){
            let field_range_value = jQuery(this).val();
            let field_range_value_text = parseInt(field_range_value) + 1;
            let field_range_title = jQuery('.field-range__cnt .tooltip-bottom li.range-segment-'+field_range_value_text).html();
            jQuery('.field-range__cnt .tooltip-top .tooltip-top__cnt').html(field_range_title);
            jQuery('.filter-wrap .radio-block-mobile__cnt .radio').removeClass('active');
            jQuery('.filter-wrap .radio-block-mobile__cnt .radio input').prop('checked', false);
            switch (parseInt(field_range_value)) {
                case 0:
                    jQuery('.field-range__cnt .tooltip-top .tooltip-top__cnt').css("left", "0%");
                    jQuery('.filter-wrap .radio-block-mobile__cnt .radio input[value=all]').prop('checked', true).closest('.radio').addClass('active');
                    break;
                case 1:
                    jQuery('.field-range__cnt .tooltip-top .tooltip-top__cnt').css("left", "18%");
                    jQuery('.filter-wrap .radio-block-mobile__cnt .radio input[value=from_300000]').prop('checked', true).closest('.radio').addClass('active');
                    break;
                case 2:
                    jQuery('.field-range__cnt .tooltip-top .tooltip-top__cnt').css("left", "37%");
                    jQuery('.filter-wrap .radio-block-mobile__cnt .radio input[value=from_500000]').prop('checked', true).closest('.radio').addClass('active');
                    break;
                case 3:
                    jQuery('.field-range__cnt .tooltip-top .tooltip-top__cnt').css("left", "66%");
                    jQuery('.filter-wrap .radio-block-mobile__cnt .radio input[value=from_1000000]').prop('checked', true).closest('.radio').addClass('active');
                    break;
                case 4:
                    jQuery('.field-range__cnt .tooltip-top .tooltip-top__cnt').css("left", "86%");
                    jQuery('.filter-wrap .radio-block-mobile__cnt .radio input[value=from_3000000]').prop('checked', true).closest('.radio').addClass('active');
                    break;
            }
            let request_params_range = [];
            jQuery(".reviews-v2__wrap .filter-wrap .filter-block__cnt").each(function() {
                let input_type = jQuery(this).find('input').attr('type');
                let current_input_name_range = '';
                let current_input_value_range = '';
                switch (input_type) {
                    case "radio":
                        current_input_name_range = jQuery(this).find('input:checked').attr('name');
                        current_input_value_range = jQuery(this).find('input:checked').val();
                        request_params_range.push([current_input_name_range, current_input_value_range]);
                        /*
                        console.log(current_input_value_range);
                        jQuery('.filter-wrap .radio-block-mobile__cnt .radio').removeClass('active');
                        jQuery('.filter-wrap .radio-block-mobile__cnt .radio input[value='+current_input_value_range+']').prop('checked', true).closest('.radio').addClass('active');
                        */
                        break;
                    case "range":
                        current_input_name_range = jQuery(this).find('input').attr('name');
                        current_input_value_range = jQuery(this).find('input').val();
                        let current_field_range_value_text = parseInt(current_input_value_range) + 1;
                        current_input_min_value_range = jQuery('.field-range__cnt .tooltip-bottom li.range-segment-'+current_field_range_value_text).attr('data-min');
                        current_input_max_value_range = jQuery('.field-range__cnt .tooltip-bottom li.range-segment-'+current_field_range_value_text).attr('data-max');
                        request_params_range.push([current_input_name_range, current_input_min_value_range, current_input_max_value_range]);
                        break;
                    case "checkbox":
                        jQuery(this).find('input:checked').each(function() {
                            request_params_range.push([jQuery(this).attr('name'), 'yes']);
                        });
                        break;
                }
            });
            let newUrl_params = '';
            request_params_range.forEach(function(item, i, arr) {
                if (newUrl_params != '') {
                    newUrl_params += '&';
                }
                if (item[0] == 'range_summ') {
                    newUrl_params += 'min_summ='+item[1]+'&max_summ='+item[2];
                } else {
                    newUrl_params += item[0]+'='+item[1];
                }
            });
            var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?' + newUrl_params;
            window.history.pushState({path:newurl},'',newurl);
            jQuery.ajax({
                type: "POST",
                url: "https://fpa.ru/wp-admin/admin-ajax.php",
                data: {
                    action : 'get_filter_reviews',
                    params: request_params_range,
                },
                success:function(data) {
                    //console.log(data);
                    let data_obj = JSON.parse(data);
                    console.log(data_obj);
                    //console.log(data_obj.video_reviews);
                    //console.log(data_obj.photo_reviews);
                    if (data_obj.video_reviews.length == 0 && data_obj.photo_reviews.length == 0) {
                        jQuery('section.reviews-v2 .reviews-v2__col .not-found').removeClass('hidden');
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid').addClass('hidden');
                    } else {
                        jQuery('section.reviews-v2 .reviews-v2__col .not-found').addClass('hidden');
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid').removeClass('hidden');
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .reviews-row .review-first').removeClass('hidden');
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .reviews-row .review-video-additional__cnt').removeClass('hidden');
                        if (data_obj.video_reviews.length == 0) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-first').addClass('hidden');
                        }
                        if (data_obj.video_reviews.length < 1) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-video-additional__cnt').addClass('hidden');
                        }
                        if (data_obj.video_reviews.length <= 10) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-first').addClass('hidden');
                        }
                        if (data_obj.video_reviews.length <= 11) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-video-additional__cnt').addClass('hidden');
                        }
                        if (data_obj.video_reviews.length <= 17) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-first').addClass('hidden');
                        }
                        if (data_obj.video_reviews.length <= 18) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-video-additional__cnt').addClass('hidden');
                        }
                        
                        if (data_obj.photo_reviews.length == 0) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-first').addClass('hidden');
                        }
                        if (data_obj.photo_reviews.length < 1) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-video-additional__cnt').addClass('hidden');
                        }
                        if (data_obj.photo_reviews.length <= 10) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-first').addClass('hidden');
                        }
                        if (data_obj.photo_reviews.length <= 11) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-video-additional__cnt').addClass('hidden');
                        }
                        if (data_obj.photo_reviews.length <= 17) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-first').addClass('hidden');
                        }
                        if (data_obj.photo_reviews.length <= 18) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-video-additional__cnt').addClass('hidden');
                        }
                        for (var key in data_obj.video_reviews) {
                            if (key == 0) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.video_reviews[key]['title']+'</div><div class="number">№ '+data_obj.video_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.video_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.video_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.video_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.video_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 0 && key <= 9) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div></div>');
                            }
                            if (key == 10) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.video_reviews[key]['title']+'</div><div class="number">№ '+data_obj.video_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.video_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.video_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.video_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.video_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 10 && key <= 16) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div></div>');
                            }
                            if (key == 17) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.video_reviews[key]['title']+'</div><div class="number">№ '+data_obj.video_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.video_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.video_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.video_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.video_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 17 && key <= 20) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div></div>');
                            }
                        }
    
                        for (var key in data_obj.photo_reviews) {
                            if (key == 0) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.photo_reviews[key]['title']+'</div><div class="number">№ '+data_obj.photo_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><img src="'+data_obj.photo_reviews[key]['image']+'" /><div class="case-number__cnt"><span>Дело: <span>'+data_obj.photo_reviews[key]['case']+'</span></span><span>Списан долг: <span>'+data_obj.photo_reviews[key]['amount_of_debt']+' ₽</span></span></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.photo_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.photo_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.photo_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.photo_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 0 && key <= 9) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><a href="'+data_obj.photo_reviews[key]['url']+'"><img src="'+data_obj.photo_reviews[key]['image']+'" /></a><div class="case-number">Дело: '+data_obj.photo_reviews[key]['case']+'</div></div></div>');
                            }
                            if (key == 10) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.photo_reviews[key]['title']+'</div><div class="number">№ '+data_obj.photo_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><img src="'+data_obj.photo_reviews[key]['image']+'" /><div class="case-number__cnt"><span>Дело: <span>'+data_obj.photo_reviews[key]['case']+'</span></span><span>Списан долг: <span>'+data_obj.photo_reviews[key]['amount_of_debt']+' ₽</span></span></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.photo_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.photo_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.photo_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.photo_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 10 && key <= 16) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><a href="'+data_obj.photo_reviews[key]['url']+'"><img src="'+data_obj.photo_reviews[key]['image']+'" /></a><div class="case-number">Дело: '+data_obj.photo_reviews[key]['case']+'</div></div></div>');
                            }
                            if (key == 17) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.photo_reviews[key]['title']+'</div><div class="number">№ '+data_obj.photo_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><img src="'+data_obj.photo_reviews[key]['image']+'" /><div class="case-number__cnt"><span>Дело: <span>'+data_obj.photo_reviews[key]['case']+'</span></span><span>Списан долг: <span>'+data_obj.photo_reviews[key]['amount_of_debt']+' ₽</span></span></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.photo_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.photo_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.photo_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.photo_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 17 && key <= 20) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><a href="'+data_obj.photo_reviews[key]['url']+'"><img src="'+data_obj.photo_reviews[key]['image']+'" /></a><div class="case-number">Дело: '+data_obj.photo_reviews[key]['case']+'</div></div></div>');
                            }
                        }
                    }
                },
                error: function(errorThrown){
                    console.log(errorThrown);
                }
            });
    		var href_search_param = window.location.search;
    		/*console.log('href_search_param: ' + href_search_param);*/
    		jQuery('body.archive.post-type-archive-otzyvy .pagination a.page-numbers').each(function() {
    		    if (!jQuery(this).hasClass('prev') && !jQuery(this).hasClass('next')) {
    		        var current_page_num = jQuery(this).html();
    		        /*var current_href = jQuery(this).attr('href');*/
    		        var current_href = "https://fpa.ru/otzyvy/page/" + current_page_num + href_search_param;
    		        jQuery(this).attr('href', current_href);
    		    }
            });
        });
        
        jQuery(".filter-block__cnt input[type='radio']").change(function(){
            if (jQuery(this).attr('name') == 'tag_summ') {
                let tag_summ_curent_value = jQuery(this).val();
                console.log(tag_summ_curent_value);
                switch (tag_summ_curent_value) {
                    case "all":
                        jQuery('.field-range__cnt .tooltip-top .tooltip-top__cnt').css("left", "0%");
                        jQuery('.field-range__cnt input[type="range"]').val(0);
                        jQuery('.field-range__cnt .tooltip-top .tooltip-top__cnt').html("Все суммы");
                        break;
                    case "from_300000":
                        jQuery('.field-range__cnt .tooltip-top .tooltip-top__cnt').css("left", "18%");
                        jQuery('.field-range__cnt input[type="range"]').val(1);
                        jQuery('.field-range__cnt .tooltip-top .tooltip-top__cnt').html("300 - 500 т.р.");
                        break;
                    case "from_500000":
                        jQuery('.field-range__cnt .tooltip-top .tooltip-top__cnt').css("left", "37%");
                        jQuery('.field-range__cnt input[type="range"]').val(2);
                        jQuery('.field-range__cnt .tooltip-top .tooltip-top__cnt').html("500 т.р. - 1 млн.р.");
                        break;
                    case "from_1000000":
                        jQuery('.field-range__cnt .tooltip-top .tooltip-top__cnt').css("left", "66%");
                        jQuery('.field-range__cnt input[type="range"]').val(3);
                        jQuery('.field-range__cnt .tooltip-top .tooltip-top__cnt').html("1 - 3 млн.р.");
                        break;
                    case "from_3000000":
                        jQuery('.field-range__cnt .tooltip-top .tooltip-top__cnt').css("left", "86%");
                        jQuery('.field-range__cnt input[type="range"]').val(4);
                        jQuery('.field-range__cnt .tooltip-top .tooltip-top__cnt').html("от 3 млн.р.");
                        break;
                }
            }
            if (jQuery(this).val() != 'all') {
                jQuery(this).closest('.filter-block__cnt').addClass('changed');
            } else {
                jQuery(this).closest('.filter-block__cnt').removeClass('changed');
            }
            if (jQuery('section.reviews-v2 .filter-block__cnt.changed').length > 0) {
                jQuery('.reviews-v2__wrap .filter-wrap .actions').removeClass('hidden');
            }
            let request_params_radio = [];
            jQuery(".reviews-v2__wrap .filter-wrap .filter-block__cnt").each(function() {
                let radio_input_type = jQuery(this).find('input').attr('type');
                let current_radio_input_name_range = '';
                let current_radio_input_value_range = '';
                switch (radio_input_type) {
                    case "radio":
                        current_radio_input_name_range = jQuery(this).find('input:checked').attr('name');
                        current_radio_input_value_range = jQuery(this).find('input:checked').val();
                        request_params_radio.push([current_radio_input_name_range, current_radio_input_value_range]);
                        break;
                    case "range":
                        current_radio_input_name_range = jQuery(this).find('input').attr('name');
                        current_radio_input_value_range = jQuery(this).find('input').val();
                        let current_radio_field_range_value_text = parseInt(current_radio_input_value_range) + 1;
                        current_radio_input_min_value_range = jQuery('.field-range__cnt .tooltip-bottom li.range-segment-'+current_radio_field_range_value_text).attr('data-min');
                        current_radio_input_max_value_range = jQuery('.field-range__cnt .tooltip-bottom li.range-segment-'+current_radio_field_range_value_text).attr('data-max');
                        request_params_radio.push([current_radio_input_name_range, current_radio_input_min_value_range, current_radio_input_max_value_range]);
                        break;
                    case "checkbox":
                        jQuery(this).find('input:checked').each(function() {
                            request_params_radio.push([jQuery(this).attr('name'), jQuery(this).val()]);
                        });
                        break;
                }
            });
            let newUrl_radio_params = '';
            request_params_radio.forEach(function(item, i, arr) {
                if (newUrl_radio_params != '') {
                    newUrl_radio_params += '&';
                }
                if (item[0] == 'range_summ') {
                    newUrl_radio_params += 'min_summ='+item[1]+'&max_summ='+item[2];
                } else {
                    newUrl_radio_params += item[0]+'='+item[1];
                }
            });
            var newurl_radio = window.location.protocol + "//" + window.location.host + window.location.pathname + '?' + newUrl_radio_params;
            window.history.pushState({path:newurl_radio},'',newurl_radio);
            jQuery.ajax({
                type: "POST",
                url: "https://fpa.ru/wp-admin/admin-ajax.php",
                data: {
                    action : 'get_filter_reviews',
                    params: request_params_radio,
                },
                success:function(data) {
                    //console.log(data);
                    let data_obj = JSON.parse(data);
                    console.log(data_obj);
                    //console.log(data_obj.video_reviews);
                    //console.log(data_obj.photo_reviews);
                    if (data_obj.video_reviews.length == 0 && data_obj.photo_reviews.length == 0) {
                        jQuery('section.reviews-v2 .reviews-v2__col .not-found').removeClass('hidden');
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid').addClass('hidden');
                    } else {
                        jQuery('section.reviews-v2 .reviews-v2__col .not-found').addClass('hidden');
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid').removeClass('hidden');
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .reviews-row .review-first').removeClass('hidden');
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .reviews-row .review-video-additional__cnt').removeClass('hidden');
                        if (data_obj.video_reviews.length == 0) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-first').addClass('hidden');
                        }
                        if (data_obj.video_reviews.length < 1) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-video-additional__cnt').addClass('hidden');
                        }
                        if (data_obj.video_reviews.length <= 10) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-first').addClass('hidden');
                        }
                        if (data_obj.video_reviews.length <= 11) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-video-additional__cnt').addClass('hidden');
                        }
                        if (data_obj.video_reviews.length <= 17) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-first').addClass('hidden');
                        }
                        if (data_obj.video_reviews.length <= 18) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-video-additional__cnt').addClass('hidden');
                        }
                        
                        if (data_obj.photo_reviews.length == 0) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-first').addClass('hidden');
                        }
                        if (data_obj.photo_reviews.length < 1) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-video-additional__cnt').addClass('hidden');
                        }
                        if (data_obj.photo_reviews.length <= 10) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-first').addClass('hidden');
                        }
                        if (data_obj.photo_reviews.length <= 11) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-video-additional__cnt').addClass('hidden');
                        }
                        if (data_obj.photo_reviews.length <= 17) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-first').addClass('hidden');
                        }
                        if (data_obj.photo_reviews.length <= 18) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-video-additional__cnt').addClass('hidden');
                        }
                        for (var key in data_obj.video_reviews) {
                            if (key == 0) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.video_reviews[key]['title']+'</div><div class="number">№ '+data_obj.video_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.video_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.video_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.video_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.video_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 0 && key <= 9) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div></div>');
                            }
                            if (key == 10) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.video_reviews[key]['title']+'</div><div class="number">№ '+data_obj.video_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.video_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.video_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.video_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.video_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 10 && key <= 16) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div></div>');
                            }
                            if (key == 17) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.video_reviews[key]['title']+'</div><div class="number">№ '+data_obj.video_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.video_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.video_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.video_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.video_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 17 && key <= 20) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div></div>');
                            }
                        }
    
                        for (var key in data_obj.photo_reviews) {
                            if (key == 0) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.photo_reviews[key]['title']+'</div><div class="number">№ '+data_obj.photo_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><img src="'+data_obj.photo_reviews[key]['image']+'" /><div class="case-number__cnt"><span>Дело: <span>'+data_obj.photo_reviews[key]['case']+'</span></span><span>Списан долг: <span>'+data_obj.photo_reviews[key]['amount_of_debt']+' ₽</span></span></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.photo_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.photo_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.photo_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.photo_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 0 && key <= 9) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><a href="'+data_obj.photo_reviews[key]['url']+'"><img src="'+data_obj.photo_reviews[key]['image']+'" /></a><div class="case-number">Дело: '+data_obj.photo_reviews[key]['case']+'</div></div></div>');
                            }
                            if (key == 10) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.photo_reviews[key]['title']+'</div><div class="number">№ '+data_obj.photo_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><img src="'+data_obj.photo_reviews[key]['image']+'" /><div class="case-number__cnt"><span>Дело: <span>'+data_obj.photo_reviews[key]['case']+'</span></span><span>Списан долг: <span>'+data_obj.photo_reviews[key]['amount_of_debt']+' ₽</span></span></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.photo_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.photo_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.photo_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.photo_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 10 && key <= 16) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><a href="'+data_obj.photo_reviews[key]['url']+'"><img src="'+data_obj.photo_reviews[key]['image']+'" /></a><div class="case-number">Дело: '+data_obj.photo_reviews[key]['case']+'</div></div></div>');
                            }
                            if (key == 17) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.photo_reviews[key]['title']+'</div><div class="number">№ '+data_obj.photo_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><img src="'+data_obj.photo_reviews[key]['image']+'" /><div class="case-number__cnt"><span>Дело: <span>'+data_obj.photo_reviews[key]['case']+'</span></span><span>Списан долг: <span>'+data_obj.photo_reviews[key]['amount_of_debt']+' ₽</span></span></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.photo_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.photo_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.photo_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.photo_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 17 && key <= 20) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><a href="'+data_obj.photo_reviews[key]['url']+'"><img src="'+data_obj.photo_reviews[key]['image']+'" /></a><div class="case-number">Дело: '+data_obj.photo_reviews[key]['case']+'</div></div></div>');
                            }
                        }
                    }
                },
                error: function(errorThrown){
                    console.log(errorThrown);
                }
            });
    		var href_search_param = window.location.search;
    		jQuery('body.archive.post-type-archive-otzyvy .pagination a.page-numbers').each(function() {
    		    if (!jQuery(this).hasClass('prev') && !jQuery(this).hasClass('next')) {
    		        var current_page_num = jQuery(this).html();
    		        /*var current_href = jQuery(this).attr('href');*/
    		        var current_href = "https://fpa.ru/otzyvy/page/" + current_page_num + href_search_param;
    		        jQuery(this).attr('href', current_href);
    		    }
            });
        });
        
        jQuery(".filter-block__cnt input[type='checkbox']").change(function(){
            if (jQuery(this).val() != 'all') {
                jQuery(this).closest('.filter-block__cnt').addClass('changed');
            } else {
                jQuery(this).closest('.filter-block__cnt').removeClass('changed');
            }
            if (jQuery('section.reviews-v2 .filter-block__cnt.changed').length > 0) {
                jQuery('.reviews-v2__wrap .filter-wrap .actions').removeClass('hidden');
            }
            let request_params_checkbox = [];
            jQuery(".reviews-v2__wrap .filter-wrap .filter-block__cnt").each(function() {
                let radio_input_type = jQuery(this).find('input').attr('type');
                let current_checkbox_input_name_range = '';
                let current_checkbox_input_value_range = '';
                switch (radio_input_type) {
                    case "radio":
                        current_checkbox_input_name_range = jQuery(this).find('input:checked').attr('name');
                        current_checkbox_input_value_range = jQuery(this).find('input:checked').val();
                        request_params_checkbox.push([current_checkbox_input_name_range, current_checkbox_input_value_range]);
                        break;
                    case "range":
                        current_checkbox_input_name_range = jQuery(this).find('input').attr('name');
                        current_checkbox_input_value_range = jQuery(this).find('input').val();
                        let current_checkbox_field_range_value_text = parseInt(current_checkbox_input_value_range) + 1;
                        current_checkbox_input_min_value_range = jQuery('.field-range__cnt .tooltip-bottom li.range-segment-'+current_checkbox_field_range_value_text).attr('data-min');
                        current_checkbox_input_max_value_range = jQuery('.field-range__cnt .tooltip-bottom li.range-segment-'+current_checkbox_field_range_value_text).attr('data-max');
                        request_params_checkbox.push([current_checkbox_input_name_range, current_checkbox_input_min_value_range, current_checkbox_input_max_value_range]);
                        break;
                    case "checkbox":
                        jQuery(this).find('input:checked').each(function() {
                            request_params_checkbox.push([jQuery(this).attr('name'), jQuery(this).val()]);
                        });
                        break;
                }
            });
            let newUrl_checkbox_params = '';
            request_params_checkbox.forEach(function(item, i, arr) {
                if (newUrl_checkbox_params != '') {
                    newUrl_checkbox_params += '&';
                }
                if (item[0] == 'range_summ') {
                    newUrl_checkbox_params += 'min_summ='+item[1]+'&max_summ='+item[2];
                } else {
                    newUrl_checkbox_params += item[0]+'='+item[1];
                }
            });
            var newurl_checkbox = window.location.protocol + "//" + window.location.host + window.location.pathname + '?' + newUrl_checkbox_params;
            window.history.pushState({path:newurl_checkbox},'',newurl_checkbox);
            jQuery.ajax({
                type: "POST",
                url: "https://fpa.ru/wp-admin/admin-ajax.php",
                data: {
                    action : 'get_filter_reviews',
                    params: request_params_checkbox,
                },
                success:function(data) {
                    let data_obj = JSON.parse(data);
                    console.log(data_obj);
                    //console.log(data_obj.video_reviews);
                    //console.log(data_obj.photo_reviews);
                    
                    if (data_obj.video_reviews.length == 0 && data_obj.photo_reviews.length == 0) {
                        jQuery('section.reviews-v2 .reviews-v2__col .not-found').removeClass('hidden');
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid').addClass('hidden');
                    } else {
                        jQuery('section.reviews-v2 .reviews-v2__col .not-found').addClass('hidden');
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid').removeClass('hidden');
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-first').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-video-additional__cnt').empty();
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .reviews-row .review-first').removeClass('hidden');
                        jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .reviews-row .review-video-additional__cnt').removeClass('hidden');
                        if (data_obj.video_reviews.length == 0) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-first').addClass('hidden');
                        }
                        if (data_obj.video_reviews.length < 1) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-video-additional__cnt').addClass('hidden');
                        }
                        if (data_obj.video_reviews.length <= 10) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-first').addClass('hidden');
                        }
                        if (data_obj.video_reviews.length <= 11) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-video-additional__cnt').addClass('hidden');
                        }
                        if (data_obj.video_reviews.length <= 17) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-first').addClass('hidden');
                        }
                        if (data_obj.video_reviews.length <= 18) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-video-additional__cnt').addClass('hidden');
                        }
                        
                        if (data_obj.photo_reviews.length == 0) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-first').addClass('hidden');
                        }
                        if (data_obj.photo_reviews.length < 1) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-video-additional__cnt').addClass('hidden');
                        }
                        if (data_obj.photo_reviews.length <= 10) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-first').addClass('hidden');
                        }
                        if (data_obj.photo_reviews.length <= 11) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-video-additional__cnt').addClass('hidden');
                        }
                        if (data_obj.photo_reviews.length <= 17) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-first').addClass('hidden');
                        }
                        if (data_obj.photo_reviews.length <= 18) {
                            jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-video-additional__cnt').addClass('hidden');
                        }
                        for (var key in data_obj.video_reviews) {
                            //console.log('key: '+key);
                            if (key == 0) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.video_reviews[key]['title']+'</div><div class="number">№ '+data_obj.video_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.video_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.video_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.video_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.video_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 0 && key <= 9) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-1 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div></div>');
                            }
                            if (key == 10) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.video_reviews[key]['title']+'</div><div class="number">№ '+data_obj.video_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.video_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.video_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.video_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.video_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 10 && key <= 16) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-3 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div></div>');
                            }
                            if (key == 17) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.video_reviews[key]['title']+'</div><div class="number">№ '+data_obj.video_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.video_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.video_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.video_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.video_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 17 && key <= 20) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-5 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><div class="youtube" data-embed="'+data_obj.video_reviews[key]['id_video']+'" onclick="ym(82134583,\'reachGoal\',\'start\')"><div class="youtube__button"><svg><use xlink:href="https://fpa.ru/wp-content/themes/fpalaw/assets/img/sprite.svg#play"></use></svg></div><img alt="Превью для видео" src="https://img.youtube.com/vi/'+data_obj.video_reviews[key]['id_video']+'/maxresdefault.jpg" /></div></div></div>');
                            }
                        }
    
                        for (var key in data_obj.photo_reviews) {
                            if (key == 0) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.photo_reviews[key]['title']+'</div><div class="number">№ '+data_obj.photo_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><img src="'+data_obj.photo_reviews[key]['image']+'" /><div class="case-number__cnt"><span>Дело: <span>'+data_obj.photo_reviews[key]['case']+'</span></span><span>Списан долг: <span>'+data_obj.photo_reviews[key]['amount_of_debt']+' ₽</span></span></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.photo_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.photo_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.photo_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.photo_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 0 && key <= 9) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-2 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><a href="'+data_obj.photo_reviews[key]['url']+'"><img src="'+data_obj.photo_reviews[key]['image']+'" /></a><div class="case-number">Дело: '+data_obj.photo_reviews[key]['case']+'</div></div></div>');
                            }
                            if (key == 10) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.photo_reviews[key]['title']+'</div><div class="number">№ '+data_obj.photo_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><img src="'+data_obj.photo_reviews[key]['image']+'" /><div class="case-number__cnt"><span>Дело: <span>'+data_obj.photo_reviews[key]['case']+'</span></span><span>Списан долг: <span>'+data_obj.photo_reviews[key]['amount_of_debt']+' ₽</span></span></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.photo_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.photo_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.photo_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.photo_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 10 && key <= 16) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-4 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><a href="'+data_obj.photo_reviews[key]['url']+'"><img src="'+data_obj.photo_reviews[key]['image']+'" /></a><div class="case-number">Дело: '+data_obj.photo_reviews[key]['case']+'</div></div></div>');
                            }
                            if (key == 17) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-first').append('<div class="review-first__cnt"><div class="head"><div class="title">'+data_obj.photo_reviews[key]['title']+'</div><div class="number">№ '+data_obj.photo_reviews[key]['id']+'</div></div><div class="body"><div class="reviews-item"><img src="'+data_obj.photo_reviews[key]['image']+'" /><div class="case-number__cnt"><span>Дело: <span>'+data_obj.photo_reviews[key]['case']+'</span></span><span>Списан долг: <span>'+data_obj.photo_reviews[key]['amount_of_debt']+' ₽</span></span></div></div><div class="additional-items"><div class="additional-resources-row"><a class="original-link" href="'+data_obj.photo_reviews[key]['link_court_ruling']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_opredelenie_suda.svg" /><span>Оригинал<br> определения суда</span></a><a class="original-link" href="'+data_obj.photo_reviews[key]['link_cards']+'" title="Вы переходите на сайт Арбитражного суда города Санкт‑Петербурга и Ленинградской области"><img src="/wp-content/themes/fpalaw/assets/img/reviews/document_kartoteka.svg" /><span>Картотека<br> арбитражного суда</span></a></div></div></div><div class="foot"><div class="item-features"><div class="item-features-row"><div class="title">Номер дела в суде:</div><div class="value">'+data_obj.photo_reviews[key]['case']+'</div></div></div><div class="link"><a href="'+data_obj.photo_reviews[key]['url']+'">Посмотреть всю информацию</a></div></div></div>');
                            }
                            if (key > 17 && key <= 20) {
                                jQuery('section.reviews-v2 .reviews-v2__col .reviews-selection-grid .selection-grid-6 .review-video-additional__cnt').append('<div class="review-video__cnt"><div class="reviews-item"><a href="'+data_obj.photo_reviews[key]['url']+'"><img src="'+data_obj.photo_reviews[key]['image']+'" /></a><div class="case-number">Дело: '+data_obj.photo_reviews[key]['case']+'</div></div></div>');
                            }
                        }
                    }
                    
                    
                    
                    
                },
                error: function(errorThrown){
                    console.log(errorThrown);
                }
            });
        });
        
        jQuery(document).on('click', 'section.reviews-v2 .filter-more-link', function () {
            if (jQuery('section.reviews-v2 .hidden-tablet').length > 0) {
                jQuery('section.reviews-v2 .filter-more-link span').html('Скрыть все фильтры');    
                jQuery('section.reviews-v2 .filter-block__cnt').removeClass('hidden-tablet');
                jQuery('section.reviews-v2 .actions').removeClass('hidden-tablet');
            } else {
                jQuery('section.reviews-v2 .filter-more-link span').html('Показать все фильтры');   
                jQuery('section.reviews-v2 .filter-block__cnt:not(.first-filter-block__cnt)').addClass('hidden-tablet');
                jQuery('section.reviews-v2 .actions').addClass('hidden-tablet');
            }
        });
        
        jQuery(document).on('click', '.reviews-v2__wrap .filter-wrap .actions button', function () {
            window.location.replace(window.location.protocol + "//" + window.location.host + window.location.pathname)
        });
        
        jQuery(document).on('click', 'section.reviews-v2 .reviews-v2__col .youtube', function () {
            jQuery(this).empty();
            jQuery(this).append('<iframe frameborder="0" allowfullscreen="" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" src="https://www.youtube.com/embed/'+jQuery(this).attr('data-embed')+'?autoplay=1"></iframe>');
        });
        
        jQuery(document).on('click', 'body.page-template-mobilepage-smi .smi-items__cnt button.btn', function () {
            let current_url = jQuery(this).attr('data-url');
            let new_page_obj = window.open();
            new_page_obj.opener = null;
            new_page_obj.location = current_url;
        });
        
        
        jQuery(document).on('click', 'body.page-template-mobilepage-smi .smi-items__cnt .btn', function () {
            let current_title = jQuery(this).closest('.item-body').find('h3').html();
            let current_logo = jQuery(this).closest('.smi-item__cnt').find('.item-head').find('img').attr('src');
            jQuery('.section--modal .modal__wrap--external-link .external-link__name .external-link__name-resource').html(current_title);
            /*
            jQuery('.section--modal .modal__wrap--external-link .external-link__name .external-link__favicon').empty();
            jQuery('.section--modal .modal__wrap--external-link .external-link__name .external-link__favicon').append('<img src="'+current_logo+'" />');
            */
            jQuery('.section--modal .modal__wrap--external-link .external-link__name .external-link__favicon').css('background', 'url(https://fpa.ru/wp-content/themes/fpalaw/assets/img/icons/spinner.gif) center center no-repeat!important');
        });
        
        jQuery(document).on('click', 'body .popup-item__cnt button.popup__close', function () {
            jQuery('body').css({"position": ""});
        });
        
        jQuery(document).on('click', 'body.page-template-bankrotstvo .right-sidebar-intro__cnt .btn', function () {
            jQuery('.popup__cnt').removeClass('hidden');
            jQuery('.popup-item__cnt.calculator__cnt').removeClass('hidden');
            jQuery('body').addClass('body-fixed');
        });
        
        jQuery(document).on('click', 'body.page-template-bankrotstvo .all-width-block.block-bg1 .grid-cnt .content button', function () {
            jQuery('.popup__cnt').removeClass('hidden');
            jQuery('.popup-item__cnt.calculator__cnt').removeClass('hidden');
            jQuery('body').addClass('body-fixed');
        });
        
        jQuery(document).on('click', 'body.page-template-bankrotstvo .all-width-block.block-bg2 .grid-cnt .content button', function () {
            jQuery('.popup__cnt').removeClass('hidden');
            jQuery('.popup-item__cnt.calculator__cnt').removeClass('hidden');
            jQuery('body').addClass('body-fixed');
        });

        jQuery(document).on('click', 'body.page-template-bankrotstvo .all-width-block.block-bg3 .grid-cnt .content button', function () {
            jQuery('.section--modal .modal__overlay').removeClass('hidden');
            jQuery('.section--modal .modal__overlay .modal__wrap--callback').removeClass('hidden');
        });        
        
        jQuery(document).on('click', 'body.page-template-bankrotstvo .right-sidebar .nav-item__cnt', function () {
            var curent_item_id = jQuery(this).attr('data-id');
            var curent_item_top = jQuery('section.bankrotstvo-section-content #' + curent_item_id).offset().top - 60;
            jQuery('body, html').animate({ scrollTop: curent_item_top }, 1100);
        });
        
        jQuery(document).on('click', 'body.page-template-bankrotstvo .table-content .table-content__cnt .title', function () {
            if (jQuery(this).next().hasClass('hidden')) {
                jQuery(this).next().removeClass('hidden');
            } else {
                jQuery(this).next().addClass('hidden');
            }
        });
        
        jQuery(document).on('click', 'body.page-template-bankrotstvo .table-content .table-content-item', function () {
            var curent_item_id = jQuery(this).attr('data-id');
            var curent_item_top = jQuery('section.bankrotstvo-section-content #' + curent_item_id).offset().top - 60;
            jQuery('body, html').animate({ scrollTop: curent_item_top }, 1100);
        });
        
        
        
        jQuery(document).on('click', 'body.page-template-bankruptcy-landing button.all-buttons', function () {
            var el_height = jQuery('body.page-template-bankruptcy-landing #all-buttons-cnt').height();
            var window_height = jQuery(window).height();
            
            
            var curent_item_top = jQuery('body.page-template-bankruptcy-landing #all-buttons-cnt').offset().top - window_height + el_height + 100;
            jQuery('body, html').animate({ scrollTop: curent_item_top }, 1100);
        });
        
        jQuery(document).on('click', 'body.page-template-bankruptcy-landing .row-cnt .col-cnt .buttons button', function () {
            var messenger = jQuery(this).attr('data-messenger');
            var message = jQuery(this).attr('data-message');
            jQuery('.consultation-popup__cnt .consultation-wrapper h3').html(message);
            jQuery('.consultation-popup__cnt .consultation-wrapper form input[name=messenger]').val(messenger);
            jQuery('body').addClass('body-fixed');
            jQuery('.popup__cnt').removeClass('hidden');
            jQuery('.popup__cnt').removeClass('hidden');
            jQuery('.consultation-telegram').removeClass('hidden');
        });
        
        jQuery(document).on('click', 'body.page-template-bankruptcy-landing .consultation-popup__cnt .close_popup_success', function () {
            jQuery('body').removeClass('body-fixed');
            jQuery('.popup__cnt').addClass('hidden');
            jQuery('.popup__cnt .consultation-telegram').addClass('hidden');
            
            jQuery('.consultation-popup__cnt .consultation-wrapper h3').html("Для того чтобы получить ссылку в Telegram введите пожалуйста ниже ваше имя и номер телефона");
            jQuery('.consultation-popup__cnt .consultation-wrapper form input[name=messenger]').val("Telegram");
            jQuery(".consultation-popup__cnt .form_cnt").removeClass("hidden");
            jQuery(".consultation-popup__cnt .success_message").addClass("hidden");
        });
        
        jQuery(document).on('click', 'body.page-template-bankruptcy-landing .view-new-five-reviews span', function () {
	        var bankruptcy_all_reviews_count = jQuery('body.page-template-bankruptcy-landing .reviews-content-cnt .review-item-cnt.hidden').length;
	        if (bankruptcy_all_reviews_count > 5) {
	            jQuery("body.page-template-bankruptcy-landing .reviews-content-cnt .review-item-cnt.hidden").each(function(indx) {
    	            if (indx < 5) {
    	                jQuery(this).removeClass('hidden');
    	            }
                });
	        } else {
	            jQuery("body.page-template-bankruptcy-landing .reviews-content-cnt .review-item-cnt.hidden").removeClass('hidden');
	            jQuery("body.page-template-bankruptcy-landing .reviews-content-cnt .view-new-five-reviews").addClass('hidden');
	        }
        });
        
        jQuery("body.page-template-bankruptcy-landing .reviews-form-cnt form").on("submit", function(){
            if (jQuery(this).find('input[name=cname]').val() == '') {
                jQuery(this).find('input[name=cname]').closest('.field-cnt').addClass('error');
                jQuery(this).find('input[name=cname]').closest('.field-cnt').find('span').removeClass('hidden');
            } else {
                jQuery(this).find('input[name=cname]').closest('.field-cnt').removeClass('error');
                jQuery(this).find('input[name=cname]').closest('.field-cnt').find('span').addClass('hidden');
            }
            if (jQuery(this).find('textarea').val() == '') {
                jQuery(this).find('textarea').closest('.field-cnt').addClass('error');
                jQuery(this).find('textarea').closest('.field-cnt').find('span').removeClass('hidden');
            } else {
                jQuery(this).find('textarea').closest('.field-cnt').removeClass('error');
                jQuery(this).find('textarea').closest('.field-cnt').find('span').addClass('hidden');
            }
            if (jQuery(this).find('.error').length == 0) {
                jQuery(this).closest('.reviews-form-cnt').addClass('hidden');
                jQuery('.reviews-form-succes-cnt').removeClass('hidden');    
            }
            
            
            
            /*
            jQuery.ajax({
            url: '/handler.php',
            method: 'post',
            dataType: 'html',
            data: $(this).serialize(),
            success: function(data){
            $('#message').html(data);
            }
            });
            */
            return false;
        });
        
        
        jQuery("body.page-template-feedback .feedback-custom-form form").on("submit", function(){
            /*
            var input_customer_request = jQuery(this).find('input[name=customer_request]').val();
            if (!input_customer_request) {
                jQuery(this).find('.form__row.customer_request').addClass('error');
            } else {
                jQuery(this).find('.form__row.customer_request').removeClass('error');
            }

            var input_lawyer_field = jQuery(this).find('input[name=lawyer_field]').val();
            if (!input_lawyer_field) {
                jQuery(this).find('.form__row.lawyer_field').addClass('error');
            } else {
                jQuery(this).find('.form__row.lawyer_field').removeClass('error');
            }
            
            var input_subject = jQuery(this).find('input[name=subject]').val();
            if (!input_subject) {
                jQuery(this).find('.form__row.subject').addClass('error');
            } else {
                jQuery(this).find('.form__row.subject').removeClass('error');
            }
            
            jQuery(this).find('.form__row_item.input-field__cnt').each(function(indx) {
                var current_input_val = jQuery(this).find('input').val();
                if (!current_input_val) {
                    jQuery(this).addClass('error');
                } else {
                    jQuery(this).removeClass('error');
                }
            });
            
            var message = jQuery(this).find('textarea').val();
            if (!message) {
                jQuery(this).find('.form__row.message').addClass('error');
            } else {
                jQuery(this).find('.form__row.message').removeClass('error');
            }
            */
            
            var input_cphone = jQuery(this).find('input[name=cphone]').val();
            var input_cphone_length = jQuery(this).find('input[name=cphone]').val().length;
            //console.log('input_cphone: ' + input_cphone + '; input_cphone_length: ' + input_cphone_length);
            if (input_cphone_length < 19) {
                jQuery(this).find('.form__row_item.input_cphone').addClass('error');
            } else {
                jQuery(this).find('.form__row_item.input_cphone').removeClass('error');
            }
            
            var input_cname = jQuery(this).find('input[name=cname]').val();
            if (!input_cname) {
                jQuery(this).find('.form__row_item.input_cname').addClass('error');
            } else {
                jQuery(this).find('.form__row_item.input_cname').removeClass('error');
            }
            
            if (jQuery(this).find('.error').length > 0) {
                //console.log('Незаполнено полей: ' + jQuery(this).find('.error').length);
            } else {
                //console.log(jQuery(this).serialize());
                jQuery.ajax({
                    url: '/wp-admin/admin-ajax.php',
                    method: 'post',
                    dataType: 'json',
                    data: $(this).serialize(),
                    success: function(data) {
                        console.log(data['status']);
                        if (data['status']) {
                            jQuery('.popup-item__cnt.feedback-thanks-popup p.big').html('Спасибо');
                            jQuery('.popup-item__cnt.feedback-thanks-popup p.small').html('Ваше обращение принято в работу и будет рассмотрено в течении двух рабочих дней. В случае необходимости уполномоченный сотрудник свяжется с Вами для уточнения информации.');
                            jQuery('body').addClass('body-fixed');
                            jQuery('.popup__cnt').removeClass('hidden');
                            jQuery('.popup-item__cnt.feedback-thanks-popup').removeClass('hidden');     
                            jQuery('.feedback-custom-form .select__head').html('Выберите');
                            jQuery('.feedback-custom-form').find('input[type=text]').val('');
                            jQuery('.feedback-custom-form').find('input[type=tel]').val('');
                            jQuery('.feedback-custom-form').find('input[type=email]').val('');
                            jQuery('.feedback-custom-form textarea').val('');
                            jQuery('section.feedback .attach__cnt .attach__wrap .attach_doc').css("opacity", "0");
                        } else {
                            jQuery('.popup-item__cnt.feedback-thanks-popup p.big').html('Ошибка');
                            jQuery('.popup-item__cnt.feedback-thanks-popup p.small').html('При отправке обращения произошла ошибка. Попробуйте отправиить обращение позже.');
                            jQuery('body').addClass('body-fixed');
                            jQuery('.popup__cnt').removeClass('hidden');
                            jQuery('.popup-item__cnt.feedback-thanks-popup').removeClass('hidden'); 
                        }
                        
                        /*
                        
                        */
                    }
                });
            }
            
            
            
            
            
            
            
            
            /*
            if (jQuery(this).find('input[name=cname]').val() == '') {
                jQuery(this).find('input[name=cname]').closest('.field-cnt').addClass('error');
                jQuery(this).find('input[name=cname]').closest('.field-cnt').find('span').removeClass('hidden');
            } else {
                jQuery(this).find('input[name=cname]').closest('.field-cnt').removeClass('error');
                jQuery(this).find('input[name=cname]').closest('.field-cnt').find('span').addClass('hidden');
            }
            if (jQuery(this).find('textarea').val() == '') {
                jQuery(this).find('textarea').closest('.field-cnt').addClass('error');
                jQuery(this).find('textarea').closest('.field-cnt').find('span').removeClass('hidden');
            } else {
                jQuery(this).find('textarea').closest('.field-cnt').removeClass('error');
                jQuery(this).find('textarea').closest('.field-cnt').find('span').addClass('hidden');
            }
            if (jQuery(this).find('.error').length == 0) {
                jQuery(this).closest('.reviews-form-cnt').addClass('hidden');
                jQuery('.reviews-form-succes-cnt').removeClass('hidden');    
            }
            */
            
            
            /*
            jQuery.ajax({
            url: '/handler.php',
            method: 'post',
            dataType: 'html',
            data: $(this).serialize(),
            success: function(data){
            $('#message').html(data);
            }
            });
            */
            return false;
        });
        
        /*
        document.addEventListener('mouseout', e => {
            if (!e.toElement && !e.relatedTarget) {
                jQuery('.modal__overlay').removeClass('hidden');
                jQuery('.modal__wrap--close-popup').removeClass('hidden');
            }
        });
        */
        /*
        document.addEventListener('touchcancel', e => {
            if (!e.toElement && !e.relatedTarget) {
                console.log('Close popup');
                jQuery('.modal__overlay').removeClass('hidden');
                jQuery('.modal__wrap--close-popup').removeClass('hidden');
            }
        });
        */
        
        
        /*
        function getCookie(name) {
            const value = `; ${document.cookie}`;
            const parts = value.split(`; ${name}=`);
            if (parts.length === 2) return parts.pop().split(';').shift();
        }

        jQuery('body.page-template-online .login-form__cnt .auth-methods .auth-vk')
        jQuery(document).on('click', 'body.page-template-online .login-form__cnt .auth-methods .auth-vk', function () {
            VK.Auth.login(function(response) {
                const {session:{expire,mid,secret,sid,sig}}=response;
                if (sig) {
                    fetch(`/auth/vk`, {
                        credentials: "include",
                        method: "POST",
                        headers: { "content-type": "application/json" },
                        body: JSON.stringify({ data:{expire,mid,secret,sid,sig }}),
                    }).then(result=>result.json())
                    .then(res=>{
                        if (res.success) {
                            //$("#vk_login").css({display:"none"});
                            //$("#vk_logout").css({display:"block"});
                            console.log(res.user);
                        }
                    });
                }
            }); 
        });
        */
        
        /*
        if (getCookie("vkAuth")=="vk") {
          $("#vk_login").css({display:"none"});
          $("#vk_logout").css({display:"block"});
        }
        */
        
        
	}
  </script>
  
 
  
  <style>
	#breadcrumbs ul {display: flex;padding-left: 0;list-style: none;flex-flow: wrap;}
	#breadcrumbs ul li {padding-left: 0;}
	#breadcrumbs ul li:before {display: none;}
	#breadcrumbs ul li:last-child span {font-weight: 400;color: #717b97;}
	
	.top__timer.timer {/*display: none;*/}
	
	body.page-template-thanks .navbar--mobile,
	body.page-template-thanks-others .navbar--mobile,
	body.page-template-thanks-region .navbar--mobile,
	body.page-template-thanks-advokat .navbar--mobile,
	body.page-template-thanks-au .navbar--mobile,
	body.page-template-thanks-warning .navbar--mobile,
	body.page-template-thanks-answers .navbar--mobile,
	body.page-template-thanks-all .navbar--mobile,
	body.page-template-thanks-variations .navbar--mobile {
	    display: none;
	}
	
	body.page-template-thanks .calculator-navbar,
	body.page-template-thanks-others .calculator-navbar,
	body.page-template-thanks-region .calculator-navbar,
	body.page-template-thanks-advokat .calculator-navbar,
	body.page-template-thanks-au .calculator-navbar,
	body.page-template-thanks-warning .calculator-navbar,
	body.page-template-thanks-answers .calculator-navbar,
	body.page-template-thanks-all .calculator-navbar,
	body.page-template-thanks-variations .calculator-navbar {
	    display: none;
	}
	
	.calculation__tab label {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
	}
	
	.page-template-thanks-variations .warning__cnt,
	.page-template-thanks-all .warning__cnt,
	.page-template-dogovor .warning__cnt {
	    display: none!important;
	}


    body.page-template-bankruptcy5cost .header__control,
    body.page-template-thanks-variations .header__control {
        top: 40px!important;
    }

    body.page-template-bankruptcy5cost .header__control {
        display: none!important;
    }







	
.modal__wrap .range-slider {
    margin-bottom: 16px;    
}
.modal__wrap  .range-slider .irs-bar {
    background-color: #5381F6;
    height: 4px;
    top: -3px;
}
.modal__wrap  .range-slider .irs-handle {
    top: -10px;
    width: 16px;
    height: 16px;
    border: 3px solid #5381F6;
    background-color: white;
    border-radius: 16px;
    box-shadow: none;
}
.modal__wrap  .range-slider .irs--round {
    width: calc(100% - 0px);
    margin-left: 16px;
}
.modal__wrap  .range-slider .irs--round.irs-with-grid {
    height: 30px;
}
.modal__wrap  .range-slider .irs--round .irs-line {
    top: -3px;
    height: 4px;
}

.modal__wrap .range-slider .irs-min,
.modal__wrap .range-slider .irs-max,
.modal__wrap .range-slider .irs-single {
    display: none!important;
}

.modal__wrap .range-slider .js-range-slider-value {
    border: 2px solid #D7DEEF;
    box-sizing: border-box;
    border-radius: 10px;
    width: 100%;
    padding: 12px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    line-height: 145%;
    color: #393939;
}
.modal__wrap .range-slider.disabled .js-range-slider-value {
    background: #F3F4F4;
    border-radius: 10px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    line-height: 145%;
    color: #D7DEEF;
}
.modal__wrap .range-slider.disabled .irs-bar {
    background-color: #dee4ec!important;
}
.modal__wrap .range-slider.disabled .irs-handle {
    border: 3px solid #dee4ec!important;
}
.modal__wrap .range-slider.disabled .irs,
.modal__wrap .range-slider.disabled .irs-bar,
.modal__wrap .range-slider.disabled .irs-from,
.modal__wrap .range-slider.disabled .irs-to,
.modal__wrap .range-slider.disabled .irs-single {
  pointer-events: none;
}
	
	
.modal__wrap .checkbox_donot_know {
    margin-left: 0;
    width: 100%;
}
.modal__wrap .checkbox_donot_know label {
    width: 100%;
}
	
	 .modal__wrap .range-slider .irs-grid {
     display: none;
 }
    
.modal__wrap .showcase__mark {
    display: block;
    position: absolute;
    top: 12px;
    padding: 1px 3px;
    border-radius: 3px;
    margin-left: -10px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    line-height: 145%;
    text-align: center;
    color: #717B97;
    }
.modal__wrap .range-slider .irs--round .showcase__mark_2 {
    left: 91%!important;
}
.modal__wrap .range-slider .irs--round .showcase__mark_1 {
    left: 46%!important;
}
	
	
/* Range Slider Styles */
.range-slider_cnt {
    width: 100%;
}
.range-slider_cnt .range-slider .js-range-slider-value {
    border: 2px solid #D7DEEF;
    box-sizing: border-box;
    border-radius: 10px;
    width: 100%;
    padding: 12px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    line-height: 145%;
    color: #393939;
}
.range-slider_cnt .range-slider .js-range-slider-value:active, 
.range-slider_cnt .range-slider .js-range-slider-value:focus { 
    outline: none;
}
.range-slider_cnt .range-slider .irs-min,
.range-slider_cnt .range-slider .irs-max,
.range-slider_cnt .range-slider .irs-single {
    display: none!important;
}
.range-slider_cnt .showcase__mark__cnt {
    position: relative;
}
.range-slider_cnt .showcase__mark {
    display: block;
    position: absolute;
    top: 12px;
    padding: 1px 3px;
    border-radius: 3px;
    margin-left: -10px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    line-height: 145%;
    text-align: center;
    color: #717B97;
}
.range-slider_cnt .range-slider .irs--round .showcase__mark_0 {
    left: 10px!important;
}
.range-slider_cnt .range-slider .irs--round .showcase__mark_1 {
    left: calc(100% - 124px)!important;
}
.range-slider_cnt .range-slider .irs-handle {
    top: -10px;
    width: 16px;
    height: 16px;
    border: 3px solid #5381F6;
    background-color: white;
    border-radius: 16px;
    box-shadow: none;
}
.range-slider_cnt .range-slider .irs-bar {
    background-color: #5381F6;
    height: 4px;
    top: -3px;
}
.range-slider_cnt .range-slider .irs--round .irs-line {
    top: -3px;
    height: 4px;
}
.range-slider_cnt .range-slider.disabled .irs-bar {
    background-color: #dee4ec!important;
}
.range-slider_cnt .range-slider.disabled .irs-handle {
    border: 3px solid #dee4ec!important;
}
.range-slider_cnt .range-slider.disabled .irs,
.range-slider_cnt .range-slider.disabled .irs-bar,
.range-slider_cnt .range-slider.disabled .irs-from,
.range-slider_cnt .range-slider.disabled .irs-to,
.range-slider_cnt .range-slider.disabled .irs-single {
  pointer-events: none;
}
.range-slider_cnt .showcase__mark__cnt {
    height: 50px;
}
.range-slider_cnt .showcase__mark__cnt .showcase__mark.mobile {
    display: none;
}
.range-slider_cnt .range-slider .irs--round {
    height: 0;
    width: calc(100% - 16px);
    margin: 0 8px;
}
.calculation-v2 .calculation__checkbox.checkbox_donot_know, 
.calculation-v2 .calculation__checkbox.checkbox_donot_know__cnt, 
.calculation-v2 .calculation__radio.radio_donot_know__cnt {
    box-shadow: none;
    background: #FFFFFF;
    opacity: 0.6;
    border: 2px solid #D7DEEF;
}
.calculation-v2 .calculation__checkbox.checkbox_donot_know.checked,
.calculation-v2 .calculation__checkbox.checkbox_donot_know__cnt.checked,
.calculation-v2 .calculation__radio.radio_donot_know__cnt.checked {
    opacity: 1;
}
.range-slider_cnt .range-slider.disabled .js-range-slider-value {
    background: #F3F4F4;
    border-radius: 10px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    line-height: 145%;
    color: #D7DEEF;
}
.calculation-v2 .answer_description p {
    margin-bottom: 25px;
    font-weight: 400;
    font-size: 18px;
    color: #717b97;
}
@media (max-width: 980px) {
    .calculation-v2 .calculation__variants .calculation__checkbox.checkbox_donot_know {
        max-height: 52px;
    }
}
@media (max-width: 768px) {
    .range-slider_cnt .showcase__mark__cnt .showcase__mark.mobile {
        display: block;
    }
    .range-slider_cnt .showcase__mark__cnt .showcase__mark:not(.mobile) {
        display: none;
    }
    .range-slider_cnt .calculation__checkbox.checkbox_donot_know, 
    .range-slider_cnt .calculation__radio.radio_donot_know {
        max-height: 52px;
    }
    .range-slider_cnt .calculation__checkbox.checkbox checkbox_donot_know label, 
    .range-slider_cnt .calculation__radio.radio_donot_know label {
        font-size: 12px!important;
    }
    .range-slider_cnt .calculation__checkbox, #services_calculation .calculation__radio {
        min-height: 52px!important;
        max-height: 52px!important;
    }
}
@media (max-width: 540px) {
    .calculation-v2 .calculation__wrap .calculation__nav a.btn {
        width: 50%;
    }
    .calculation-v2 .calculation__wrap .calculation__nav a.btn.calculation__btn--next {
        margin-right: 0px;
        margin-left: 5px;
    }
    .calculation-v2 .calculation__wrap .calculation__nav a.btn.calculation__btn--prev {
        margin-right: 5px;
    }
}
/* Range Slider Styles */

body.page-template-services .calculator-navbar.hidden-block {
    display: none!important;
}

.calculator-navbar.hidden-block {
    display: none!important;
}


/* Popups Styles (Version 2) */
.popup__cnt {
    
}
.popup__overlay {
    /*position: fixed;*/
    top: 0;
    left: 0;
    z-index: 100;
    width: 100%;
    height: 100%;
    overflow-y: scroll;
    background-color: rgba(229,229,229,1);
    z-index: 99999;
    /*
    -webkit-backdrop-filter: blur(30px);
    backdrop-filter: blur(30px);
    */
}
body.body-fixed .popup__overlay {
    position: fixed;
}
.popup-item__cnt {
    width: 100%;
    max-width: 640px;
    margin: 0 auto;
    position: relative;
}
.popup-item__cnt .calculation--inpost {
    margin: 50px 0;
    box-shadow: none;
    -webkit-box-shadow: none;
}
.popup-item__cnt .calculation__info {
    display: none;
}
.popup-item__cnt .calculation__header {
    background: transparent;
    padding: 0;
    border: none;
}
.popup-item__cnt .calculation__title-head {
    margin-bottom: 36px;
    font-size: 26px;
    margin-top: 0;
    font-weight: 700;
    line-height: 1.4;
}
.popup-item__cnt .calculation__wrap--inpost {
    box-shadow: none;
    background: transparent;
    padding: 0;
}
.popup-item__cnt .calculation__slides {
    display: none;
}
.popup-item__cnt .calculation__tab.hidden {
    display: block;
}
.popup-item__cnt .calculation__tab+.calculation__tab {
    margin-top: 30px;
}
.popup-item__cnt .calculation__title {
    color: #393939;
    font-size: 18px;
    padding: 0;
}
.popup-item__cnt .calculation__title span.number {
    display: inline-block!important;
    margin-right: 4px;
}
.popup-item__cnt .answer_description p {
    font-size: 16px;
}
.popup-item__cnt .calculation__variants .calculation__radio,
.popup-item__cnt .calculation__variants .calculation__checkbox {
    width: 100%;
    max-width: 640px;
    max-height: 52px;
    min-height: 52px;
}
.modal__wrap.modal__wrap--calculation form {
    margin-top: 6px!important;
}
.popup-item__cnt .calculation__variants .calculation__radio label,
.popup-item__cnt .calculation__variants .calculation__checkbox label {
    font-size: 16px;
}
.popup-item__cnt .calculation__btn--prev,
.popup-item__cnt .calculation__btn--next {
    display: none;
}
.popup-item__cnt .calculation__btn--form {
    display: block;
    width: 100%;
    font-size: 20px;
    border-radius: 15px;
    padding: 20px;
    margin-top: 30px;
}
.popup-item__cnt .popup__close {
    padding: 0;
    background: 0 0;
    border: none;
    position: absolute;
    top: -26px;
    right: 0;
    z-index: 10;
    width: 16px;
    height: 16px;
    cursor: pointer;    
    top: -33px;
    right: 10px;
}
.popup-item__cnt .popup__close svg {
    -webkit-transition: fill .2s ease;
    -o-transition: fill .2s ease;
    transition: fill .2s ease;    
    width: 16px;
    height: 16px;
}
.popup-item__cnt .popup__close:hover svg {
    fill: rgba(60,112,244,.8);
}
.popup-item__cnt .calculation--inpost {
    border-radius: 0;
}
.popup-item__cnt label.question_messenger_whatsapp {
    color: #25d366;
}
.popup-item__cnt label.question_messenger_telegram {
    color: #2ea4e1;
}
.popup-item__cnt label.question_messenger_viber {
    color: #693886;
}
.popup-item__cnt.popup-form-answer {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 1;
    width: 600px;
    padding: 40px;
    background-color: #fff;
    -webkit-box-shadow: 0 14px 34px rgb(0 29 104 / 12%);
    box-shadow: 0 14px 34px rgb(0 29 104 / 12%);
    border-radius: 10px;
    -webkit-transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);    
}
.header__bottom--mfc {
    display: none!important;
}
.thanks-main .block-info--attention,
.thanks .block-info--attention,
.our_guarantees .thanks__block-info.block-info.block-info--doc.block-info--doc-2 {
    display: none!important;
}

#services_top-promo .top__title {
    font-size: 39px;
}
@media (max-width: 576px) {
    #services_top-promo .top__title {
        font-size: 23px;
    }    
}

.aside .lawyer--1 .lawyer__info {
    box-shadow: 0px 4px 14px 0px #0025661A;
    background: #fff;
    z-index: 1;
    border-radius: 4px;
    padding: 10px;
    max-width: 325px;
    width: 100%;
    bottom: 0;
    right: 0;
    top: auto;
}
.aside .lawyer--1 .lawyer__name {
    font-family: Inter;
    font-size: 20px;
    font-weight: 600;
    line-height: 145%;
    letter-spacing: 0em;
    text-align: left;
    color: #393939;
    margin-bottom: 0;
}
.aside .lawyer--1 .lawyer__post {
    font-family: Inter;
    font-size: 16px;
    font-weight: 400;
    line-height: 145%;
    letter-spacing: 0em;
    text-align: left;
    color: #393939;
    margin: 0;
}
@media (max-width: 782px) {
    .aside .lawyer--1 .lawyer__name {
        font-size: 18px;
    }
    .aside .lawyer--1 .lawyer__post {
        font-size: 12px;
    }
}
@media (max-width: 440px) {
    .aside .lawyer--1 .lawyer__name {
        font-size: 16px;
    }
    .aside .lawyer--1 .lawyer__post {
        font-size: 10px;
    }
    #services_top-promo .new-timer-text {
        max-width: fit-content!important;
    }
    #services_top-promo .new-timer-text span {
        white-space: nowrap!important;
    }
}

#services_top-promo .new-timer-text {
    padding: 16px;
    background: #fff;
    border-radius: 24px;
    max-width: 220px;
    height: 48px;
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: 20px auto;
    grid-column-gap: 4px;
    grid-row-gap: 4px;
    align-items: flex-end;
    margin-bottom: 40px;
}
#services_top-promo .new-timer-text span {
    font-family: Inter;
    font-size: 15px;
    font-weight: 600;
    line-height: 15px;
    letter-spacing: 0em;
    text-align: left;
    color: #DE1747;
}
    

@media (max-width: 768px) {
    .popup__overlay.white {
        background-color: #fff;
    }
    .popup-item__cnt.calculator__cnt .calculation__tab.hidden {
        display: none;
    }
    .popup-item__cnt.calculator__cnt .calculation__btn--prev, .popup-item__cnt.calculator__cnt .calculation__btn--next {
        display: block;
    }
    .popup-item__cnt.calculator__cnt .calculation__btn--form.hidden {
        display: none;
    }
    .popup-item__cnt.calculator__cnt .calculation__nav {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-top: auto;
    }
    .popup-item__cnt.calculator__cnt .calculation__nav a.btn {
        width: 50%;
        font-size: 14px;
        border-radius: 8px!important;
    }
    .popup-item__cnt.calculator__cnt .calculation__nav a.btn.calculation__btn--prev {
        margin-right: 5px;
    }
    .popup-item__cnt.calculator__cnt .calculation__nav a.btn.calculation__btn--next {
        margin-right: 0px;
        margin-left: 5px;
    }
    .popup-item__cnt {
        width: calc(100% - 32px);
        max-width: 100%;
        margin: 0 16px;
        position: initial;
    }
    .popup__cnt .popup__overlay.white {
        display: flex;
        justify-content: center;
        align-items: flex-start;
    }
    .popup-item__cnt.calculator__cnt .popup__close {
        top: 10px;
    }
    .popup-item__cnt.calculator__cnt .calculation__variants .calculation__radio, 
    .popup-item__cnt.calculator__cnt .calculation__variants .calculation__checkbox {
        width: 100%;
        max-width: 100%;
    }
    .popup-item__cnt .calculation__variants .calculation__radio label, 
    .popup-item__cnt .calculation__variants .calculation__checkbox label {
        font-size: 14px;
    }
    
    
    .popup-item__cnt .calculation__title-head {
        font-size: 22px;
    }
    .popup-item__cnt .calculation__title {
        font-size: 16px;
    }
    .popup-item__cnt .answer_description p {
        font-size: 14px;
    }
    .popup-item__cnt:not(.calculator__cnt) .calculation__tab+.calculation__tab {
        margin-top: 30px;
    }
    .popup-item__cnt:not(.calculator__cnt) .calculation__btn--form {
        width: 100%!important;
        margin-right: 0;
    }
    .popup-item__cnt:not(.calculator__cnt) .popup__close {
        top: 10px!important;
    }
}
/* Popups Styles (Version 2) */	

/* Calculator Navbar */
.calculator-navbar {
    z-index: -1;
    height: 145px;
    overflow: hidden;
    opacity: 0;
    background-color: #eef3ff;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    -webkit-box-shadow: 0 14px 34px rgb(0 29 104 / 12%);
    box-shadow: 0 14px 34px rgb(0 29 104 / 12%);
    -webkit-transition: width .3s linear;
    -o-transition: width .3s linear;
    transition: width .3s linear;
    overflow: hidden;
    border-radius: 15px;
}
.calculator-navbar--show {
    position: fixed;
    bottom: 20px;
    z-index: 50;
    opacity: 1;
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0);
    -webkit-transition: opacity .4s ease,-webkit-transform .3s ease;
    transition: opacity .4s ease,-webkit-transform .3s ease;
    -o-transition: transform .3s ease,opacity .4s ease;
    transition: transform .3s ease,opacity .4s ease;
    transition: transform .3s ease,opacity .4s ease,-webkit-transform .3s ease;
}
.calculator-navbar .calculator-navbar__close {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 10;
    width: 36px;
    height: 36px;  
    background: transparent;
    border: none;
    cursor: pointer;
}
.calculator-navbar .calculator-navbar__close::after, 
.calculator-navbar .calculator-navbar__close::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 15px;
    height: 2px;
    background-color: #333;
    -webkit-transition: background-color .2s ease;
    -o-transition: background-color .2s ease;
    transition: background-color .2s ease;
}
.calculator-navbar .calculator-navbar__close::before {
    -webkit-transform: translate(-50%,-50%) rotate(-45deg);
    -ms-transform: translate(-50%,-50%) rotate(-45deg);
    transform: translate(-50%,-50%) rotate(-45deg);
}
.calculator-navbar .calculator-navbar__close::after {
    -webkit-transform: translate(-50%,-50%) rotate(45deg);
    -ms-transform: translate(-50%,-50%) rotate(45deg);
    transform: translate(-50%,-50%) rotate(45deg);
}
.calculator-navbar .calculator-navbar__close:hover::after, 
.calculator-navbar .calculator-navbar__close:hover::before {
    background-color: #3c70f4;
}
.calculator-navbar .calculator-content__cnt {
   
}
.calculator-navbar .calculator-content__cnt .calculator-navbar__icon {
    position: relative;
    width: 64px;
    height: 64px;
    margin-bottom: 5px;
    border-radius: 10px;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
}
.calculator-navbar .calculator-content__cnt .calculator-navbar__wrap {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 700px;
    margin: 0 auto;
    padding: 20px;
    padding-left: 120px;
    opacity: 1;
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0);
    -webkit-transition: width .2s ease-in,opacity .6s ease-in,-webkit-transform .3s linear;
    transition: width .2s ease-in,opacity .6s ease-in,-webkit-transform .3s linear;
    -o-transition: width .2s ease-in,transform .3s linear,opacity .6s ease-in;
    transition: width .2s ease-in,transform .3s linear,opacity .6s ease-in;
    transition: width .2s ease-in,transform .3s linear,opacity .6s ease-in,-webkit-transform .3s linear;     
}
.calculator-navbar .calculator-content__cnt .calculator-navbar__wrap--hide {
    width: 0;
    height: 0;
    padding-left: 110px;
    opacity: 0;
    -webkit-transform: translateX(-600px);
    -ms-transform: translateX(-600px);
    transform: translateX(-600px);
    -webkit-transition: width .3s ease-in,-webkit-transform .3s linear;
    transition: width .3s ease-in,-webkit-transform .3s linear;
    -o-transition: width .3s ease-in,transform .3s linear;
    transition: width .3s ease-in,transform .3s linear;
    transition: width .3s ease-in,transform .3s linear,-webkit-transform .3s linear;
}
.calculator-navbar .calculator-content__cnt .calculator-navbar__toggle {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 10;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 110px;
    height: 145px;
    padding-left: 20px;
    /*background-color: #eef3ff;*/
    cursor: pointer;
}
.calculator-navbar .calculator-content__cnt .calculator-navbar__wrap .calculator-title {
    margin-bottom: 5px;
    font-weight: 500;
    font-size: 18px;
    white-space: nowrap;
    -webkit-transition: .2s ease;
    -o-transition: .2s ease;
    transition: .2s ease;
    cursor: pointer;
}
.calculator-navbar .calculator-content__cnt .calculator-navbar__wrap:hover .calculator-title {
    color: rgba(60,112,244,.8);
}
.calculator-navbar .calculator-content__cnt .calculator-navbar__wrap .calculator-text {
    margin-bottom: 10px;
    font-weight: 400;
    font-size: 14px;
    color: #717b97;
}
.calculator-navbar .calculator-content__cnt .calculator-navbar__wrap .calculator-btn {
    font-weight: 400;
    font-size: 16px;
    color: #3c70f4;
    border-radius: 8px;   
    cursor: pointer;
}
.calculator-navbar .calculator-content__cnt .calculator-navbar__toggle .calculator-navbar__note {
    position: relative;
    height: 32px;
    font-size: 12px;
    text-align: center;
    color: #3c70f4;    
    visibility: hidden;
}
.calculator-navbar.toggle .calculator-content__cnt .calculator-navbar__toggle .calculator-navbar__note {
    visibility: visible;
}
.calculator-navbar.toggle .calculator-content__cnt .calculator-navbar__toggle .calculator-navbar__note.no-visible {
    visibility: hidden;
}
.calculator-navbar.toggle .calculator-navbar__close {
    visibility: hidden;
}
.body-fixed {
    position: fixed;
}
.calculator-navbar .calculator-content__cnt .calculator-navbar__wrap .mobile {
    display: none;
}
.master__block--person {
	position: relative;
}
.plashka-ver-second__cnt {
	position: absolute;
    bottom: 0;
    right: 0;
    z-index: 999;
    max-width: 382px;
    padding: 14px 10px;
    box-shadow: 0px 4px 14px 0px #0025661A;
    background: #fff;
    border-radius: 4px;
}
.plashka-ver-second__cnt .name {
    font-family: Inter;
    font-size: 20px;
    font-weight: 600;
    line-height: 145%;
    letter-spacing: 0em;
    text-align: left;
}
.plashka-ver-second__cnt .post {
    font-family: Inter;
    font-size: 16px;
    font-weight: 400;
    line-height: 145%;
    letter-spacing: 0em;
    text-align: left;
}

@media (max-width: 768px) {
    .master__block--person {
        width: 100%;
        margin-bottom: 20px!important;
    }
    .master__person--inverse {
        margin-left: auto;
        margin-right: auto;
    }
    .plashka-ver-second__cnt {
        width: 310px;
        left: calc(50% - 155px);   
    }
    .plashka-ver-second__cnt .name {
        font-size: 16px;
    }
    .plashka-ver-second__cnt .post {
        font-size: 10px;
        max-width: 230px;
    }   
}
#services_top-promo .bulets-cnt {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: repeat(5, 1fr);
    grid-column-gap: 20px;
    grid-row-gap: 20px;
    align-items: stretch;
}
#services_top-promo .bulets-cnt .bulets-item {
    background: #fff;
    border-radius: 8px;
    padding: 45px;
    border: 0.5px solid #606F7D4D;
}
#services_top-promo .bulets-cnt .bulets-item .image-cnt {
    text-align: center;
    border-bottom: 1px solid #EBEBEB;
}
#services_top-promo .bulets-cnt .bulets-item .image-cnt img {
    margin: 0 auto;
    padding-bottom: 28px;
}
#services_top-promo .bulets-cnt .bulets-item .content-cnt {
    margin-top: 20px;
}
#services_top-promo .bulets-cnt .bulets-item .content-cnt .title {
    font-family: Inter;
    font-size: 18px;
    font-weight: 700;
    line-height: 24px;
    letter-spacing: 0.02em;
    text-align: center;
    color: #393939;
    margin-bottom: 8px;
}
#services_top-promo .bulets-cnt .bulets-item .content-cnt .title p {
    margin: 0;
    display: flex;
    align-items: baseline;
    justify-content: center;
}
#services_top-promo .bulets-cnt .bulets-item .content-cnt .title p .stars {
    height: 16px;
}
#services_top-promo .bulets-cnt .bulets-item .content-cnt .title p .stars span {
    display: flex;
    align-items: center;
}
    
#services_top-promo .bulets-cnt .bulets-item .content-cnt .subtitle {
    font-family: Inter;
    font-size: 15px;
    font-weight: 500;
    line-height: 20px;
    letter-spacing: 0.02em;
    text-align: center;
}
#services_top-promo .bulets-cnt .bulets-item .content-cnt .subtitle p {
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}
#services_top-promo .bulets-cnt .bulets-item .content-cnt .subtitle button {
    border: none;
    background: transparent;
}    










@media (max-width: 1200px) {}
@media (max-width: 980px) {}
@media (max-width: 768px) {
    
 
    .btn-up {
        bottom: 88px!important;
    }
    
    .calculator-navbar--show {
        background-color: #f3f4f4;
        border: 1px solid #fff;
        left: 15px;
        right: 15px;
        border-radius: 15px;
    }
    .calculator-navbar .calculator-content__cnt .calculator-navbar__icon {
        left: 12px;
        width: 40px;
        height: 40px;
        -webkit-box-shadow: 0 5px 14px rgb(0 37 102 / 25%);
        box-shadow: 0 5px 14px rgb(0 37 102 / 25%);
        margin-bottom: 0;
    }
    .calculator-navbar .calculator-content__cnt .calculator-navbar__wrap {
        max-width: 100%;
        padding: 12px 12px 12px 60px;
        height: auto;
        opacity: 1;
        width: 100%;
    }
    .calculator-navbar .calculator-content__cnt .calculator-navbar__wrap span:not(.mobile) {
        display: none;
    }
    .calculator-navbar .calculator-content__cnt .calculator-navbar__wrap .mobile {
        display: block;
    }
    .calculator-navbar .calculator-content__cnt .calculator-navbar__wrap--hide {
        max-width: 100%!important;
        padding: 12px 12px 12px 80px!important;
        height: auto!important;
        opacity: 1!important;
        width: 100%!important;
        -webkit-transform: translateX(0px);
        -ms-transform: translateX(0px);
        transform: translateX(0px);
    }
    .calculator-navbar .calculator-content__cnt .calculator-navbar__wrap .calculator-title {
        margin-bottom: 0;
        font-weight: 500;
        line-height: 1.2;
        font-size: 14px;
        color: #717b97;
    }
    .calculator-navbar .calculator-content__cnt .calculator-navbar__wrap .calculator-btn {
        color: #fff;
        padding: 6px 20px;    
    }
    .calculator-navbar .calculator-navbar__close {
        display: none;
    }
    .calculator-navbar .calculator-content__cnt .calculator-navbar__toggle .calculator-navbar__note {
        display: none;
    }
    .calculator-navbar .calculator-content__cnt .calculator-navbar__toggle {
        height: 100%;
        width: 40px;
        padding-left: 0;
    }
    .calculator-navbar {
        height: auto;
    }
    .popup-item__cnt .calculation__header {
        padding: 0 16px;
    }
    .popup-item__cnt .calculation__tab {
        padding: 0 16px;
    }
    .popup-item__cnt .calculation__nav {
        padding: 0 16px;
    }
    .popup-item__cnt .calculation__tab+.calculation__tab {
        margin-top: 0px;
    }
}
@media (max-width: 540px) {}






/* Calculator Navbar */
.popup__cnt .popup-item__cnt .btn {
    -webkit-transition: all .4s ease;
    -o-transition: all .4s ease;
    transition: all .4s ease;
    cursor: pointer;    
}


.popup__cnt .popup-item__cnt.pink .radio__new  {
    border: 1px solid #fb5a80;
}
.popup__cnt .popup-item__cnt.pink .checkbox__new  {
    border: 1px solid #fb5a80;
}
.popup__cnt .popup-item__cnt.pink .radio__new::before {
    background: #fb5a80;
}
.popup__cnt .popup-item__cnt.pink .checkbox__new::before {
    background-color: #fb5a80;
}
.popup__cnt .popup-item__cnt.pink .range-slider_cnt .range-slider .irs-bar {
    background-color: #fb5a80;
}
.popup__cnt .popup-item__cnt.pink .range-slider_cnt .range-slider .irs-handle {
    border: 3px solid #fb5a80;
}
.popup__cnt .popup-item__cnt.pink .btn {
    background: linear-gradient(180deg,#fb5a80 0,#f23965 100%);
}
.popup__cnt .popup-item__cnt.pink .btn:hover {
    background: -webkit-gradient(linear,left top,left bottom,from(#f93463),to(#d21744));
    background: -o-linear-gradient(top,#f93463 0,#d21744 100%);
    background: linear-gradient(180deg,#f93463 0,#d21744 100%);
}

.popup__cnt .popup-item__cnt.green .radio__new  {
    border: 1px solid #35d977;
}
.popup__cnt .popup-item__cnt.green .checkbox__new  {
    border: 1px solid #35d977;
}
.popup__cnt .popup-item__cnt.green .radio__new::before {
    background: #35d977;
}
.popup__cnt .popup-item__cnt.green .checkbox__new::before {
    background-color: #35d977;
}
.popup__cnt .popup-item__cnt.green .range-slider_cnt .range-slider .irs-bar {
    background-color: #35d977;
}
.popup__cnt .popup-item__cnt.green .range-slider_cnt .range-slider .irs-handle {
    border: 3px solid #35d977;
}
.popup__cnt .popup-item__cnt.green .btn {
    background: linear-gradient(360deg,rgba(255,255,255,0) 0,rgba(255,255,255,.2) 100%),#35d977;    
}
.popup__cnt .popup-item__cnt.green .btn:hover {
    background: -webkit-gradient(linear,left bottom,left top,from(#08a949),to(#06cb61));
    background: -o-linear-gradient(bottom,#08a949 0,#06cb61 100%);
    background: linear-gradient(360deg,#08a949 0,#06cb61 100%);
}



.popup__cnt .popup-item__cnt.red .radio__new  {
    border: 1px solid #FF7C7C;
}
.popup__cnt .popup-item__cnt.red .checkbox__new  {
    border: 1px solid #FF7C7C;
}
.popup__cnt .popup-item__cnt.red .radio__new::before {
    background: #FF7C7C;
}
.popup__cnt .popup-item__cnt.red .checkbox__new::before {
    background-color: #FF7C7C;
}
.popup__cnt .popup-item__cnt.red .range-slider_cnt .range-slider .irs-bar {
    background-color: #FF7C7C;
}
.popup__cnt .popup-item__cnt.red .range-slider_cnt .range-slider .irs-handle {
    border: 3px solid #FF7C7C;
}
.popup__cnt .popup-item__cnt.red .btn {
    /*background: linear-gradient(360deg,rgba(255,255,255,0) 0,rgba(255,255,255,.2) 100%),#B22F2F;  */
    background: linear-gradient(360deg,#B22F2F 0,#FF7C7C 100%),#B22F2F;
}
.popup__cnt .popup-item__cnt.red .btn:hover {
    background: -webkit-gradient(linear,left bottom,left top,from(#E15E5E),to(#A82525));
    background: -o-linear-gradient(bottom,#E15E5E 0,#A82525 100%);
    background: linear-gradient(360deg,#E15E5E 0,#A82525 100%);
}

.popup__cnt .popup-item__cnt .notice {
    background: #E23836;
    border: 2px solid #E23836;
    box-sizing: border-box;
    border-radius: 6px;
    margin-bottom: 20px;
    grid-template-rows: auto;
    grid-template-columns: 20px auto;
    grid-column-gap: 8px;
    grid-row-gap: 8px;
    padding: 8px 16px;
}
.popup__cnt .popup-item__cnt .notice:not(.hidden) {
    display: grid;    
    align-items: center;
}
.popup__cnt .popup-item__cnt .notice span {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 145%;
    color: #FFFFFF;    
}

.popup__cnt .popup-item__cnt .calculation__checkbox.difficult_answer:not(.checked) span.checkbox__new {
    border: 1px solid #C4C4C4!important;
}

@media (max-width: 768px) {
    .popup__cnt .popup-item__cnt .notice span {
        font-size: 14px;
    }
    
    .popup__cnt .popup-item__cnt .notice {
        display: none!important;
    }
    
}



.navbar.navbar--mobile,
.navbar.navbar--desktop {
    display: none!important;
}

.calculation__tab .calculation__variants .difficult_answer {
    box-shadow: none;
    background: #FFFFFF;
    opacity: 0.6;
    border: 2px solid #D7DEEF;
    padding: 0px 0px 0 0px;   
}
.calculation__tab .calculation__variants .difficult_answer label {
    z-index: 999;
}
.calculation__tab .calculation__variants .difficult_answer label span {
    padding-left: 50px;
}
.calculation__tab .calculation__variants .difficult_answer.checked {
    opacity: 1;
}
body.post-type-archive-dela .case__row--arbitration {
    display: none!important;
}
.spoiler__content--promo {
    max-height: 220px;
}
.spoiler__category--promo {
    padding-right: 20px;
}



.mobile_warning__cnt {
        background: #FFBB16;
    padding: 18px 18px;
    display: none;
}

header .header__bottom.show .mobile_warning__cnt {
    display: block!important;
}
.mobile_warning__cnt p.text {
    font-size: 12px;
    font-weight: normal;
    line-height: 160%;
    color: #393939;
}
.mobile_warning__cnt button {
        font-size: 14px;
}

.modal__overlay {
    z-index: 99999;
}

body.page-template-mfc .header__control,
body.page-template-mfc-finiko .header__control,
body.page-template-bankruptcy .header__control,
body.page-template-bankruptcy-v2 .header__control,
body.page-template-bankruptcy2cost .header__control,
body.page-template-bankruptcy3cost .header__control,
body.page-template-bankruptcy4cost .header__control,
body.page-template-bankruptcy5cost .header__control,
body.page-template-bankruptcy6cost .header__control,
body.page-template-bankruptcy7cost .header__control,
body.page-template-bankruptcy8cost .header__control,
body.page-template-expert .header__control {
    top: 45px!important;
}

body.page-template-mfc .modal__overlay.orange,
body.page-template-mfc-finiko  .modal__overlay.orange,
body.page-template-bankruptcy .modal__overlay.orange,
body.page-template-bankruptcy-v2 .modal__overlay.orange,
body.page-template-bankruptcy2cost .modal__overlay.orange,
body.page-template-bankruptcy3cost .modal__overlay.orange,
body.page-template-bankruptcy4cost .modal__overlay.orange,
body.page-template-bankruptcy5cost .modal__overlay.orange,
body.page-template-bankruptcy6cost .modal__overlay.orange,
body.page-template-bankruptcy7cost .modal__overlay.orange,
body.page-template-bankruptcy8cost .modal__overlay.orange {
    background: rgb(255 187 22 / 85%);
}

body.page-template-expert .warning__cnt {
    display: none!important;
}

.master__wrap--dogovor .master__link a {
    color: #3c70f4;
}


@media (max-width: 768px) {
    .master__block--person {
        margin: 0 auto;
    }
}

footer.footer .footer-list .footer-list__item.footer-list__item--1,
footer.footer .footer-list .footer-list__item.footer-list__item--2,
footer.footer .footer-list .footer-list__item.footer-list__item--3 {
    width: 76px;
    height: 51px;
    margin-right: 0px;
}

footer.footer .footer-list .footer-list__item.footer-list__item--1--new,
footer.footer .footer-list .footer-list__item.footer-list__item--2--new,
footer.footer .footer-list .footer-list__item.footer-list__item--3--new {
    width: 88px;
    height: auto;
    margin-right: 0px;
    text-align: center;
}

footer.footer .footer-list .footer-list__item.footer-list__item--1--new img,
footer.footer .footer-list .footer-list__item.footer-list__item--2--new img,
footer.footer .footer-list .footer-list__item.footer-list__item--3--new img {
    width: auto;
    height: 58px;
    margin: 0px auto;
}


footer.footer .footer-list .footer-list__item.footer-list__item--1--new span.caption,
footer.footer .footer-list .footer-list__item.footer-list__item--2--new span.caption,
footer.footer .footer-list .footer-list__item.footer-list__item--3--new span.caption {
        font-style: normal;
    font-weight: 400;
    font-size: 10px;
    line-height: 145%;
    text-align: center;
    display: block;
    
}
@media (min-width: 768px) {
    body .popup-item__cnt button.popup__close {
        position: fixed;
        z-index: 999999999;
        top: 32px;
        right: auto;
        width: 100%;
        max-width: 672px;
        text-align: right;
    }
}
body.page-template-bankruptcy5cost .bankruptcy2cost__lst li span.bankruptcy2cost__hint--bold {
    cursor: pointer;
}

body.page-template-bankruptcy4cost .contact_form_1238__cnt {
    display: none!important;
}
body.page-template-bankruptcy4cost .contact_form_21482__cnt {
    display: block!important;
}

body:not(.page-template-bankruptcy4cost) .contact_form_21482__cnt {
    display: none!important;
}
body:not(.page-template-bankruptcy4cost) .contact_form_1238__cnt {
    display: block!important;
}

.calc-modal__inner {
    -webkit-animation-name: analysis;
    animation-name: analysis;
    -webkit-animation-duration: 10s;
    animation-duration: 10s;
    -webkit-animation-delay: 0.5s;
    animation-delay: 0.5s;
    -webkit-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
    -webkit-animation-iteration-count: 1;
    animation-iteration-count: 1;
    -webkit-animation-play-state: paused;
    animation-play-state: paused;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
}
.calc-modal__inner {
    top: 35px;
}
body.home .spoiler__btn--promo {
    top: calc(50% - 12px);
}




body.page-template-bankruptcy7cost .mfc-bankruptcy__number-1-test .steps__cnt,
body.page-template-bankruptcy7cost .mfc-bankruptcy__number-2-test .steps__cnt {
    margin: 50px auto 50px;
    display: block;
}
body.page-template-bankruptcy7cost .mfc-bankruptcy__number-1-test .steps__cnt .h3,
body.page-template-bankruptcy7cost .mfc-bankruptcy__number-2-test .steps__cnt .h3 {
    margin-bottom: 4px;
    text-align: center;
}
body.page-template-bankruptcy7cost .mfc-bankruptcy__number-1-test .steps__cnt .h3 span,
body.page-template-bankruptcy7cost .mfc-bankruptcy__number-2-test .steps__cnt .h3 span {
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 145%;
    text-align: center;
}
body.page-template-bankruptcy7cost .mfc-bankruptcy__number-1-test .steps__cnt .steps__wrap svg,
body.page-template-bankruptcy7cost .mfc-bankruptcy__number-2-test .steps__cnt .steps__wrap svg {
    width: 100%;
    height: auto;
}
body.page-template-bankruptcy7cost .popup-item__cnt.color_scheme_blue .steps__cnt .h3 span {
    color: #5381F6;
}
body.page-template-bankruptcy7cost .popup-item__cnt.color_scheme_red .steps__cnt .h3 span {
    color: #fb5a80;
}
body.page-template-bankruptcy7cost .popup-item__cnt .calculation-v2.calculation--inpost .calculation__title-head {
    display: none;
}

body.page-template-bankruptcy7cost .mfc-bankruptcy__number-1-test .calculation__tab.hidden,
body.page-template-bankruptcy7cost .mfc-bankruptcy__number-2-test .calculation__tab.hidden {
    display: none!important;
}
.test__wrap .test__variants .difficult_answer {
    box-shadow: none;
    background: #FFFFFF;
    opacity: 0.6;
    border: 2px solid #D7DEEF;
}

.modal__wrap--answer .selected-answers__cnt {
    max-height: 164px;
    overflow: hidden;
    -webkit-mask-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,1)), to(rgba(0,0,0,0)));
}
.modal__wrap--answer .selected-answers__cnt .answer-block__cnt {
    background: #F2FFF0;
    border-radius: 10px;
    padding: 15px;
    margin-bottom: 4px;
    display: flex;
    align-items: center;
}
.modal__wrap--answer .selected-answers__cnt .answer-block__cnt span.icon {
    background: url(/wp-content/themes/fpalaw/assets/img/popup/check.svg) center center no-repeat;
    display: block;
    width: 20px;
    height: 20px;
    background-size: contain;
    margin-right: 16px;
}
.modal__wrap--answer .selected-answers__cnt .answer-block__cnt span.question {
    font-weight: 600;
    font-size: 12px;
    line-height: 145%;
    color: #717B97;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}
.modal__wrap--answer .selected-answers__cnt .answer-block__cnt span.answer {
    font-weight: 500;
    font-size: 14px;
    line-height: 145%;
    text-align: right;
    color: #393939;
    margin-left: auto;
    white-space: nowrap;
    padding-left: 16px;
    max-width: 50%;
    text-overflow: ellipsis;
    overflow: hidden;
}
body.home #services_reasons {
    background: url(/wp-content/themes/fpalaw/assets/img/home/377.png) center center no-repeat;
    background-size: cover;
}




.new-block-smi {
    margin-bottom: 40px;
}
.new-block-smi .title-head {
    font-family: Inter;
    font-size: 34px;
    font-weight: 700;
    line-height: 145%;
    letter-spacing: 0em;
    text-align: center;
    margin-bottom: 40px;
}
.new-block-smi .text {
    font-family: Inter;
    font-size: 18px;
    font-weight: 400;
    line-height: 145%;
    letter-spacing: 0em;
    text-align: left;
    color: #717B97;
    margin-bottom: 40px;
}
.new-block-smi .smi-row.four-cols {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: repeat(4, 1fr);
    grid-column-gap: 20px;
    grid-row-gap: 20px;
    margin-bottom: 20px;
}
.new-block-smi .smi-row.five-cols {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: repeat(5, 1fr);
    grid-column-gap: 16px;
    grid-row-gap: 16px;
    margin-bottom: 20px;
}
.new-block-smi .smi-item {
    box-shadow: 0px 14px 34px 0px #001D681F;
    border-radius: 10px;
    padding: 25px;
    cursor: pointer;
}
.new-block-smi .smi-item img {
    height: 32px;
    width: auto;
    margin-bottom: 20px;
}
.new-block-smi .smi-item .smi-item-text {
    font-family: Inter;
    font-size: 14px;
    font-weight: 500;
    line-height: 145%;
    letter-spacing: 0em;
    text-align: left;
    color: #717B97;
}
.new-block-smi .smi-item-news {
    box-shadow: 0px 14px 34px 0px #7895E052;
    padding: 25px;
    background: #5381F6CC;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    cursor: pointer;
}
.new-block-smi .smi-item-news a {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    cursor: pointer;
    height: 100%;
}
.new-block-smi .smi-item-news .smi-item-text {
    font-family: Inter;
    font-size: 18px;
    font-weight: 500;
    line-height: 145%;
    letter-spacing: 0em;
    text-align: left;
    color: #fff;
}
.new-block-smi .smi-item-news svg {
    margin-left: auto;
}

@media (max-width: 1200px) {
    .new-block-smi .smi-row.five-cols {
        grid-template-columns: repeat(4, 1fr);
    }
    .new-block-smi .smi-item-news {
        min-height: 240px;
    }
}
@media (max-width: 992px) {
    .new-block-smi .smi-row.four-cols {
        grid-template-columns: repeat(2, 1fr);
    }
    .new-block-smi .smi-row.five-cols {
        grid-template-columns: repeat(3, 1fr);
    }
}
@media (max-width: 768px) {
    .new-block-smi .smi-row.five-cols {
        grid-template-columns: repeat(2, 1fr);
    }
    .new-block-smi .title-head {
        font-size: 28px;
    }
}
@media (max-width: 470px) {
    .new-block-smi .smi-row.four-cols {
        grid-template-columns: repeat(1, 1fr);
    }
    .new-block-smi .smi-row.five-cols {
        grid-template-columns: repeat(1, 1fr);
    }
    .new-block-smi .smi-item-news {
        min-height: auto;
        padding-top: 8px;
        padding-bottom: 8px;
    }
    .new-block-smi .smi-item-news .smi-item-text {
        text-align: center;
    }
    .new-block-smi .smi-item-news svg {
        display: none;
    }
    .new-block-smi .title-head {
        font-size: 22px;
        margin-bottom: 20px;
        text-align: left;
    }
    .new-block-smi .text {
        font-size: 16px;
    }
}

@media (max-width: 440px) {
    .hint__toggle {
        width: 310px;
        left: 475%!important;
    }
    .hint__toggle::before {
        left: 25%!important;
    }
}
@media (max-width: 768px) {
    .master__block--person .master__person {
        margin-left: auto;
        margin-right: auto;
    }    
}
.link--phone span {
    background-size: 24px;
}
.toggle-menu span.open {
    background-size: 24px;
}
.modal__wrap--answer .selected-answers__cnt .selected-answers-animate__cnt.animated-scroll-1 {
    transform: translate3d(0, - 100%, 0%);
    animation: spin 1.5s infinite linear;
}
.modal__wrap--answer .selected-answers__cnt .selected-answers-animate__cnt.animated-scroll-2 {
    transform: translate3d(0, - 100%, 0%);
    animation: spin 3s infinite linear;
}
.modal__wrap--answer .selected-answers__cnt .selected-answers-animate__cnt.animated-scroll-3 {
    transform: translate3d(0, - 100%, 0%);
    animation: spin 4.5s infinite linear;
}
.modal__wrap--answer .selected-answers__cnt .selected-answers-animate__cnt.animated-scroll-4 {
    transform: translate3d(0, - 100%, 0%);
    animation: spin 6s infinite linear;
}
.modal__wrap--answer .selected-answers__cnt .selected-answers-animate__cnt.animated-scroll-5 {
    transform: translate3d(0, - 100%, 0%);
    animation: spin 7.5s infinite linear;
}
.modal__wrap--answer .selected-answers__cnt .selected-answers-animate__cnt.animated-scroll-6 {
    transform: translate3d(0, - 100%, 0%);
    animation: spin 9s infinite linear;
}
.modal__wrap--answer .selected-answers__cnt .selected-answers-animate__cnt.animated-scroll-7 {
    transform: translate3d(0, - 100%, 0%);
    animation: spin 10.5s infinite linear;
}
.modal__wrap--answer .selected-answers__cnt .selected-answers-animate__cnt.animated-scroll-8 {
    transform: translate3d(0, - 100%, 0%);
    animation: spin 12s infinite linear;
}
.modal__wrap--answer .selected-answers__cnt .selected-answers-animate__cnt.animated-scroll-9 {
    transform: translate3d(0, - 100%, 0%);
    animation: spin 13.5s infinite linear;
}
.modal__wrap--answer .selected-answers__cnt .selected-answers-animate__cnt.animated-scroll-10 {
    transform: translate3d(0, - 100%, 0%);
    animation: spin 15s infinite linear;
}
.modal__wrap--answer .selected-answers__cnt .selected-answers-animate__cnt.animated-scroll-11 {
    transform: translate3d(0, - 100%, 0%);
    animation: spin 16.5s infinite linear;
}
.modal__wrap--answer .selected-answers__cnt .selected-answers-animate__cnt.animated-scroll-12 {
    transform: translate3d(0, - 100%, 0%);
    animation: spin 18s infinite linear;
}
.modal__wrap--answer .selected-answers__cnt .selected-answers-animate__cnt.animated-scroll-13 {
    transform: translate3d(0, - 100%, 0%);
    animation: spin 19.5s infinite linear;
}
.modal__wrap--answer .selected-answers__cnt .selected-answers-animate__cnt.animated-scroll-14 {
    transform: translate3d(0, - 100%, 0%);
    animation: spin 21s infinite linear;
}
.modal__wrap--answer .selected-answers__cnt .selected-answers-animate__cnt.animated-scroll-15 {
    transform: translate3d(0, - 100%, 0%);
    animation: spin 22.5s infinite linear;
}
.modal__wrap--answer .selected-answers__cnt .selected-answers-animate__cnt.animated-scroll-16 {
    transform: translate3d(0, - 100%, 0%);
    animation: spin 24s infinite linear;
}
.modal__wrap--answer .selected-answers__cnt .selected-answers-animate__cnt.animated-scroll-17 {
    transform: translate3d(0, - 100%, 0%);
    animation: spin 25.5s infinite linear;
}
.modal__wrap--answer .selected-answers__cnt .selected-answers-animate__cnt.animated-scroll-18 {
    transform: translate3d(0, - 100%, 0%);
    animation: spin 27s infinite linear;
}
.modal__wrap--answer .selected-answers__cnt .selected-answers-animate__cnt.animated-scroll-19 {
    transform: translate3d(0, - 100%, 0%);
    animation: spin 28.5s infinite linear;
}
.modal__wrap--answer .selected-answers__cnt .selected-answers-animate__cnt.animated-scroll-20 {
    transform: translate3d(0, - 100%, 0%);
    animation: spin 30s infinite linear;
}
@keyframes spin {
  0% {
    transform: translate(0, 0);
  }
  10% {
    transform: translate(0, -4%);
  }
  20% {
    transform: translate(0, -8%);
  }
  30% {
    transform: translate(0, -12%);
  }
  40% {
    transform: translate(0, -16%);
  }
  50% {
    transform: translate(0, -20%);
  }
  60% {
    transform: translate(0, -26%);
  }
  70% {
    transform: translate(0, -30%);
  }
  80% {
    transform: translate(0, -36%);
  }
  90% {
    transform: translate(0, -40%);
  }
  100% {
    transform: translate(0, -50%);
  }
}
.modal__wrap--answer .calc-modal__check.header-hidden, 
.modal__wrap--answer .calc-modal__loader.header-hidden, 
.modal__wrap--answer .calc-modal__block.header-hidden {
    display: none!important;
}

.modal__wrap--close-popup {
    background-image: url(/wp-content/themes/fpalaw/assets/img/popup/popup-close-bg.png);
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    padding: 0;
    width: 100%;
    max-width: 1232px;
    z-index: 9999999;
}
.modal__wrap--close-popup .modal-row {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: calc(40% - 8px) calc(60% - 8px);
    grid-column-gap: 16px;
    grid-row-gap: 16px;
}
.modal__wrap--close-popup .modal-col:first-child {
    position: relative;
}
.modal__wrap--close-popup .modal-col:last-child {
    display: flex;
    justify-content: center;
    align-items: center;
}
.modal__wrap--close-popup .modal-col figure {
    margin: 0;   
}
.modal__wrap--close-popup .modal-col figcaption {
    position: absolute;
    right: 0;
    bottom: 10px;
    background: rgba(255, 255, 255, 0.85);
    box-shadow: 0px 4px 14px rgb(0 37 102 / 10%);
    backdrop-filter: blur(12px);
    border-radius: 4px;
    padding: 10px;
    width: calc(100% - 10px);
    max-width: 380px;
} 
.modal__wrap--close-popup .modal-col figcaption .name {
    font-weight: 500;
    font-size: 24px;
    line-height: 145%;
    color: #393939;
    display: block;
}
.modal__wrap--close-popup .modal-col figcaption .post {
    font-weight: 400;
    font-size: 14px;
    line-height: 145%;
    color: #393939;
    display: block;
}
.modal__wrap--close-popup .modal-col .h1 {
    font-weight: 700;
    font-size: 50px;
    line-height: 135%;
    color: #393939;
    margin-bottom: 16px;
    position: relative;
}
.modal__wrap--close-popup .modal-col .h1:before {
    content: "";
    background: url(/wp-content/themes/fpalaw/assets/img/forms/blockquote.svg) center center no-repeat;
    position: absolute;
    top: 0px;
    left: -54px;
    width: 44px;
    height: 27px;
    background-size: contain;
}
.modal__wrap--close-popup .modal-col .h1 span {
    color: #5381F6;
}
.modal__wrap--close-popup .modal-col .second-col .form-cnt {
    max-width: calc(100% - 32px);
}
.modal__wrap--close-popup .modal-col .second-col .form-cnt input[type=text],
.modal__wrap--close-popup .modal-col .second-col .form-cnt input[type=tel] {
    padding: 13px 20px;
    font-size: 16px;
    text-align: center;
}
.modal__wrap--close-popup .modal-col .second-col .form-cnt input:focus {
    outline: none;
}
.modal__wrap--close-popup .tablet-view {
    display: none;
    position: relative;
    max-width: 460px;
    margin: 0 auto 40px;
}
.modal__wrap--close-popup .form-cnt input.wpcf7-not-valid {
    border: 2px solid #E04E39!important;
}
.modal__wrap--close-popup .form-cnt input.wpcf7-not-valid::-webkit-input-placeholder {
	color: #E04E39!important;
}
.modal__wrap--close-popup .form-cnt input.wpcf7-not-valid:-moz-placeholder {
	color: #E04E39!important;
   opacity:  1;
}
.modal__wrap--close-popup .form-cnt input.wpcf7-not-valid::-moz-placeholder {
	color: #E04E39!important;
   opacity:  1;
}
.modal__wrap--close-popup .form-cnt input.wpcf7-not-valid:-ms-input-placeholder {
	color: #E04E39!important;
}
.modal__wrap--close-popup .form-cnt input.wpcf7-not-valid::-ms-input-placeholder {
	color: #E04E39!important;
}
.modal__wrap--close-popup .form-cnt input.wpcf7-not-valid::placeholder {
	color: #E04E39!important;
}
.modal__wrap--close-popup .form-cnt span.wpcf7-not-valid-tip {
    display: none!important;
}
.modal__wrap--close-popup .form-cnt .wpcf7-response-output {
    display: none!important;
}

@media (min-width: 992px) {
    .header__bottom .header__menu .menu__item:first-child .menu__link.active span::before {
        bottom: 0px;
    }
    .header__bottom .header__menu .menu__item.menu__item--lk {
        display: flex;
        align-items: center;
    }
    .header__bottom .header__menu .menu__item.menu__item--lk .menu__link.menu__link--lk {
        min-height: auto;
    }
    .menu__link.active span::before {
        bottom: 1px;
    }
    .header__bottom--fixed .menu__link.active span::before {
        bottom: -10px!important;
    }
}
@media (min-width: 768px) and (max-width: 992px) {
    .header__bottom .header__menu .menu__item:first-child .menu__link.active span::before {
        bottom: 0px;
    }
    .header__bottom .header__menu .menu__item.menu__item--lk {
        display: flex;
        align-items: center;
    }
    .header__bottom .header__menu .menu__item.menu__item--lk .menu__link.menu__link--lk {
        min-height: auto;
    }
    .menu__link.active span::before {
        bottom: -3px;
    }
    .header__bottom--fixed .menu__link.active span::before {
        bottom: -10px!important;
    }
}
@media (min-width: 768px) {
    .header__bottom .header__menu .menu__item.menu__item--lk {
        display: flex;
        align-items: center;
    }
    .header__bottom .header__menu .menu__item.menu__item--lk .menu__link.menu__link--lk {
        min-height: auto;
    }
    .menu__link {
        padding: 0 0;
        min-height: 60px;
    }
    .menu__link.active {
        color: #5381F6;
    }
    .menu__link span {
        padding: 20px 0;
        display: block;
    }
    .menu__link.active span::before {
        height: 4px;
        background: #5381F5;
        border-radius: 4px 4px 0px 0px;
    }    
}







@media (max-width: 1296px) {
    .modal__wrap--close-popup {
        width: calc(100% - 64px);
    }
}
@media (max-width: 1080px) {
    .modal__wrap--close-popup .modal-col .h1 {
        font-size: 42px;
    }
    .modal__wrap--close-popup .modal-col figcaption .name {
        font-size: 22px;
    }
}
@media (max-width: 1024px) {
    .modal__wrap--close-popup .modal-col figcaption .name {
        font-size: 20px;
    }
    .modal__wrap--close-popup .modal-col .h1:before {
        left: -50px;
        width: 40px;
        height: 24px;
    }
}
@media (max-width: 980px) {
    .modal__wrap--close-popup .modal-col .h1 {
        font-size: 34px;
    }
    .modal__wrap--close-popup .modal-row {
        grid-template-columns: calc(50% - 8px) calc(50% - 8px);
    }
}
@media (max-width: 920px) {
    .modal__wrap--close-popup .modal-col .h1 {
        font-size: 26px;
    }
    .modal__wrap--close-popup .modal-col .h1:before {
        left: -46px;
        width: 36px;
        height: 22px;
    }
}
@media (min-width: 782px) {
    .modal__wrap--close-popup .modal-col.header-hidden .h1 {
        display: none;
    }
}
@media (max-width: 782px) {
    .modal__wrap--close-popup .modal-col .h1 {
        font-size: 28px;
    }
    .modal__wrap--close-popup .modal-row {
        grid-template-columns: auto;
        padding: 32px;
    }
    .modal__wrap--close-popup .modal-col:first-child {
        display: none;
    }
    .modal__wrap--close-popup .tablet-view {
        display: block;
    }
    .modal__wrap--close-popup .modal-col .h1 {
        padding-top: 40px;
    }
    .modal__wrap--close-popup .modal-col .h1:before {
        top: 0px;
        left: 0px;
        width: 32px;
        height: 20px;
    }
    .modal__wrap--close-popup .modal-col figcaption {
        bottom: 0;
        max-width: 440px;
    }
    .modal__wrap--close-popup button.btn {
        width: 100%;
    }
    .modal__wrap--close-popup .modal-col:last-child {
        flex-direction: column;
    }
    .modal__wrap--close-popup .modal-col .second-col .form-cnt {
        max-width: 100%;
    }
}
@media (max-width: 630px) {
    .modal__wrap--close-popup .modal-col .h1 {
        font-size: 24px;
    }
}
@media (max-width: 540px) {
    .modal__wrap--close-popup {
        width: calc(100% - 32px);
    }
    .modal__wrap--close-popup .modal-col .h1 {
        font-size: 20px;
    }
}
@media (max-width: 480px) {
    .modal__wrap--close-popup .modal-col figcaption .name {
        font-size: 18px;
    }
    .modal__wrap--close-popup .modal-col figcaption {
        width: 100%;
    }
    .results__data_new {
        top: -60px!important;
    }
    .results__data_new .results__note {
        max-width: 180px!important;
    }
}
@media (max-width: 440px) {
    .modal__wrap--close-popup .modal-col figcaption .name {
        font-size: 16px;
    }
}







.reviews__main--foto .reviews__foto img {
    -o-object-position: top!important;
    object-position: top!important;
}

.section--services-white {
    padding: 160px 0;
    background: url(/wp-content/themes/fpalaw/assets/img/stoimost/section--services-white.png) center center no-repeat;
    background-size: cover;
}
body.page-template-stoimost .title-page {
    margin-bottom: 45px;
}
@media screen and (max-width: 992px) {
    body.page-template-stoimost .container {
        max-width: calc(100% - 48px);
    }
}
@media (max-width: 768px) {
    .section--services-white {
        padding: 60px 0;
    }
    body.page-template-stoimost .section__image {
        margin-bottom: 0px;
    }
    body.page-template-stoimost .title-page {
        font-size: 24px;
        text-align: center;
        margin-bottom: 40px;
    }
    body.page-template-stoimost .price-item__uptitle {
        font-size: 16px;
    }
    body.page-template-stoimost .price-item__price {
        font-size: 24px;
    }
}
@media (max-width: 540px) {
    .section--services-white {
        padding: 40px 0;
    }
    body.page-template-stoimost .title-page {
        font-size: 22px;
        text-align: center;
        margin-bottom: 35px;
    }
}


body.page-template-stoimost .section--modal.modal.abs-hidden {
    display: none!important;
}

.youtube img {
    top: -1%!important;
    height: 102%!important;
    object-fit: cover;
}
header .menu__item.menu__item--lk img.user-avatar  {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    padding: 2px;
    border: 1px solid #5381F6;
}
header .menu__item.menu__item--lk img.no-avatar  {
    padding: 0px;
}
header .header__logo .flex-row {
    display: none!important;
}
.link--telephone--cnt {
    color: #3c70f4;
}
.link--telephone--cnt:hover {
    color: rgba(60,112,244,.8);
}
.link--mail--cnt {
    color: #3c70f4;
}
.link--mail--cnt:hover {
    color: rgba(60,112,244,.8);
}

body.page-template-chat section.chat h1.title-page {
    padding-top: 60px;
}


@media (max-width: 768px) {
    header .menu__item.menu__item--lk {
        display: none!important;
    }
    body.page-template-online header {
        background: #F3F4F4;
    }
    body.page-template-recovery_password header {
        background: #F3F4F4;
    }
    
    body.page-template-online header .header__logo {
        width: 100%;
    }
    body:not(.page-template-online) header .header__logo .flex-row {
        display: none!important;
    }
    body.page-template-online header .header__logo .flex-row {
        display: flex!important;
        height: 44px;
        margin-left: auto;
        margin-right: 0px;
    }
    body.page-template-online header .header__logo .flex-row .flex-col+.flex-col {
        margin-left: 16px;
    }
    body.page-template-online header .header__logo .flex-row .avatar-icon__cnt img.user-avatar {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        padding: 2px;
        border: 1px solid #5381F6;
    }
    body.page-template-online header .header__logo .flex-row .avatar-icon__cnt img.no-avatar {
        padding: 0px;
    }
    body.page-template-online header .header__logo .flex-row .logout-icon__cnt span {
        display: block;
        width: 44px;
        height: 44px;
        background: url(/wp-content/themes/fpalaw/assets/img/cabinet/logout.svg) center center no-repeat;
        background-size: contain;
    }
    
    body.page-template-online header .header__control {
        top: 45px!important;
        right: 24px!important;
    }
}
@media (max-width: 686px) {
    body.page-template-online header .header__logo .flex-row {
        margin-right: 16px;
    }
}
@media (max-width: 678px) {
    body.page-template-online header .header__logo .flex-row {
        margin-right: 24px;
    }
}
@media (max-width: 670px) {
    body.page-template-online header .header__logo .flex-row {
        margin-right: 32px;
    }
}
@media (max-width: 662px) {
    body.page-template-online header .header__logo .flex-row {
        margin-right: 40px;
    }
}
@media (max-width: 654px) {
    body.page-template-online header .header__logo .flex-row {
        margin-right: 40px;
    }
}
@media (max-width: 646px) {
    body.page-template-online header .header__logo .flex-row {
        margin-right: 48px;
    }
}
@media (max-width: 638px) {
    body.page-template-online header .header__logo .flex-row {
        margin-right: 56px;
    }
}
@media (max-width: 632px) {
    body.page-template-online header .header__logo .flex-row {
        margin-right: 60px;
    }
}
/*
.btn-up {
    display: none;
}
*/
.header .header__top .container .tablet,
.header .header__top .container .mobile {
    display: none;
}
@media (max-width: 768px) {
    .header {
        background: #F3F4F4;
    }
    body.no-warning-block .header {
        margin-bottom: 0px!important;
    }
    .header .header__top .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .header .header__top .container .tablet {
        display: block;
    }
    .header .header__top .container .phone-link__cnt a {
        font-style: normal;
        font-weight: 600;
        font-size: 18px;
        line-height: 145%;
        color: #5381F6;
        text-align: right;
        display: block;
    }
    .header .header__top .container .slogan__cnt span {
        font-style: normal;
        font-weight: 500;
        font-size: 14px;
        line-height: 145%;
        color: #717B97;
        text-align: right;
    }
    .header .header__top .container .slogan__cnt span.mobile {
        font-size: 12px;
    }
}
@media (max-width: 576px) {
    .header .header__top .container .slogan__cnt span.tablet {
        display: none;
    }
    .header .header__top .container .slogan__cnt span.mobile {
        display: block;
    }
    a.btn-up-whatsapp {
        display: block!important;
        position: fixed;
        bottom: 100px;
        right: 16px;
        z-index: 99;
        width: 50px;
        height: 50px;
        background: url(/wp-content/themes/fpalaw/assets/img/btn-up-whatsapp.svg) center center no-repeat;
        background-size: contain;
    }
    a.btn-up-whatsapp svg {
        width: 50px;
        height: 50px;
        display: none;
    }
    
    .btn-up-whatsapp-form {
        display: block!important;
        position: fixed;
        bottom: 100px;
        right: 16px;
        z-index: 99;
        width: 50px;
        height: 50px;
    }
    .btn-up-whatsapp-form button {
        padding: 0;
        margin: 0;
        border: none;
        background: transparent;
    }
    .btn-up-whatsapp-form button svg {
        width: 50px;
        height: 50px;
    }
    
    .btn-up-whatsapp-button {
        display: none!important;
        /*display: block!important;*/
        position: fixed;
        bottom: 100px;
        right: 16px;
        z-index: 99;
        width: 50px;
        height: 50px;
        padding: 0;
        margin: 0;
        border: none;
        background: transparent;
    }
    .btn-up-whatsapp-button svg {
        width: 50px;
        height: 50px;
    }
    
    
    
    
}

@media (max-width: 686px) {
    .header .header__top .container div.tablet {
        margin-right: 16px;
    }
}
@media (max-width: 678px) {
    .header .header__top .container div.tablet {
        margin-right: 24px;
    }
}
@media (max-width: 670px) {
    .header .header__top .container div.tablet {
        margin-right: 32px;
    }
}
@media (max-width: 662px) {
    .header .header__top .container div.tablet {
        margin-right: 40px;
    }
}
@media (max-width: 654px) {
    .header .header__top .container div.tablet {
        margin-right: 48px;
    }
}
@media (max-width: 646px) {
    .header .header__top .container div.tablet {
        margin-right: 56px;
    }
}
@media (max-width: 638px) {
    .header .header__top .container div.tablet {
        margin-right: 64px;
    }
}
@media (max-width: 632px) {
    .header .header__top .container div.tablet {
        margin-right: 72px;
    }
}
@media (max-width: 370px) {
    .header .header__top .container .phone-link__cnt a {
        font-size: 12px;
    }
    .header .header__top .container .slogan__cnt span.mobile {
        font-size: 10px;
    }
}

/* Новые стили для шапки (Новогодняя тема) */
/*
header.header .header__top {
    background: url(/wp-content/themes/fpalaw/assets/img/services/header/header_desktop-v2.svg) bottom center no-repeat #5381f6;
    background-size: cover;
}
header.header .header__bottom {
    background: #fff;
}
header.header .header__bottom::after {
    display: none;
}
header.header .header__top .social__title {
    color: #fff;
}
header.header .header__top .social__info {
    background: -webkit-gradient(linear, 100% 0, 0 0, from(#FB5A80), to(#F23965));
    background: -webkit-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
    background: -moz-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
    background: -o-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
    background: linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
}
header.header .header__top .address__city {
    color: #fff;
}
header.header .header__top .address__office {
    color: #fff;
}
header.header .header__top .link--telephone--cnt {
    color: #fff;
}
header.header .header__top .link__note {
    color: #fff;
}
body.scrolled button.btn-new-year {
    bottom: 90px;
}
button.btn-new-year {
    background: url(/wp-content/themes/fpalaw/assets/img/services/header/fixed-with-popup.png) center center no-repeat;
    background-size: contain;
    position: fixed;
    width: 60px;
    height: 60px;
    cursor: pointer;
    bottom: 20px;
    right: 5px;
    z-index: 99;
    -webkit-transition: all .4s ease;
    -o-transition: all .4s ease;
    transition: all .4s ease;
}
*/
/*
button.btn-up {
    display: none!important;
}
*/
/*
header.header .logo__name img {
    margin-top: -35px;
}
header.header .social__link {
    background-color: #ffffff;
}

header.header .toggle-menu span.open {
    background-image: url(<?= get_template_directory_uri() ?>/assets/img/services/header/hamburger-new-year.svg);
    background-size: 44px;
}
header.header .toggle-menu {
    background-color: transparent;
    border: none;
    box-shadow: none;
}
*/
/*body.page-template-politika*/
/*
header.header .toggle-menu span.open {
    background-size: 24px!important;
    background-image: url(<?= get_template_directory_uri() ?>/assets/img/icons/menu.svg)!important;
}
header.header .toggle-menu {
    background-color: #f3f4f4!important;
    border: 1px solid #fff!important;
    -webkit-box-shadow: 0 4px 14px rgba(0,37,102,.1)!important;
    box-shadow: 0 4px 14px rgba(0,37,102,.1)!important;
}

header.header .header__bottom.show .logo__name {
    background: url(<?= get_template_directory_uri() ?>/assets/img/services/header/logo-new-year_mobile.jpg) center center no-repeat;
    background-size: contain;
    width: 110px;
    height: 103px;
    margin-top: -20px;
}
header.header .header__bottom.show .logo__name img {
    opacity: 0!important;
}
header.header .header__bottom.show .social__info {
    background: -webkit-gradient(linear, 100% 0, 0 0, from(#FB5A80), to(#F23965));
    background: -webkit-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
    background: -moz-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
    background: -o-linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
    background: linear-gradient(180deg, #FB5A80 0%, #F23965 100%);
}

.section--modal .modal__wrap.new-year-popup {
    padding: 0;
    border-radius: 10px;
    \*overflow: hidden;*\
    width: calc(100% - 32px);
    max-width: 940px;
}
.section--modal .modal__wrap.new-year-popup .content {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: repeat(2, 50%);
    grid-column-gap: 0;
    grid-row-gap: 0;
}
.section--modal .modal__wrap.new-year-popup .left-col img {
    height: 100%;
    object-fit: cover;
    border-radius: 10px 0 0 10px;
}
.section--modal .modal__wrap.new-year-popup .right-col {
    padding: 40px;
}
.section--modal .modal__wrap.new-year-popup .right-col .politics {
    padding-left: 0px;
}
.section--modal .modal__wrap.new-year-popup .right-col .title {
    font-family: Inter;
    font-size: 26px;
    font-weight: 700;
    line-height: 145%;
    letter-spacing: 0em;
    color: #404040;
    margin-bottom: 10px;
}
.section--modal .modal__wrap.new-year-popup .right-col .subtitle {
    font-family: Inter;
    font-size: 18px;
    font-weight: 400;
    line-height: 145%;
    letter-spacing: 0em;
    color: #505050;
    margin-bottom: 20px;
}
.section--modal .modal__wrap.new-year-popup .right-col .form-cnt input[type=submit] {
    font-family: Inter;
    font-size: 16px;
    font-weight: 700;
    line-height: 143%;
    letter-spacing: 0em;
    text-align: center;
}
.section--modal .modal__wrap.new-year-popup .right-col .form-cnt .wpcf7-response-output {
    display: none;
}
header.header--mfc .header__top .address__city, 
header.header--mfc .header__top .link--telephone--cnt {
    color: #333!important;
}
header.header--mfc .header__top .link__note, 
header.header--mfc .header__top .address__office {
    color: #717b97!important;
}


header.header--mfc .header__top {
    background: transparent!important;
}
@media (max-width: 768px) {
    .header .header__top .container .phone-link__cnt a {
        color: #ffffff;
    }
    .header .header__top .container .slogan__cnt span {
        color: #ffffff;
    }
    header.header .logo__name img {
        margin-top: -20px;
    }
    header.header .header__top {
        background: url(/wp-content/themes/fpalaw/assets/img/services/header/header_mobile.png) bottom left no-repeat #5381f6;
        background-size: contain;
    }
    .section--modal .modal__wrap.new-year-popup .content {
        grid-template-columns: 100%;
    }
    .section--modal .modal__wrap.new-year-popup .right-col .title {
        font-size: 22px;
    }
    .section--modal .modal__wrap.new-year-popup .right-col .subtitle {
        font-size: 16px;
    }
    .section--modal .modal__wrap.new-year-popup .right-col .politics {
        font-size: 12px;
    }
    .section--modal .modal__wrap.new-year-popup .left-col {
        max-height: 310px;
    }
    .section--modal .modal__wrap.new-year-popup .left-col img {
        width: 100%;
        object-position: top;
        border-radius: 10px 10px 0 0;
    }
    .modal__wrap.new-year-popup {
        -webkit-transform: translate(-50%,0px)!important;
        -ms-transform: translate(-50%,0px)!important;
        transform: translate(-50%,0px)!important;
        top: 40px!important;
    }
    header .header__bottom .header__menu.menu {
        margin-bottom: 80px;
    }
}
@media (max-width: 440px) {
    .section--modal .modal__wrap.new-year-popup .right-col .title {
        font-size: 20px;
    }
    .section--modal .modal__wrap.new-year-popup .right-col .subtitle {
        font-size: 14px;
    }
    .section--modal .modal__wrap.new-year-popup .right-col .politics {
        font-size: 11px;
    }
}
*/
body.page-template-politika main a {
    color: #3c70f4;
}
body.page-template-politika .calculator-navbar {
    display: none!important;
}
body.page-template-politika button.btn-new-year {
    bottom: 40px!important;
}

body.page-template-thanks button.btn-new-year,
body.page-template-thanks-variations button.btn-new-year,
body.page-template-thanks-warning button.btn-new-year, 
body.page-template-thanks-region button.btn-new-year, 
body.page-template-thanks-others button.btn-new-year, 
body.page-template-thanks-au button.btn-new-year, 
body.page-template-thanks-answers button.btn-new-year, 
body.page-template-thanks-all button.btn-new-year, 
body.page-template-thanks-all-v3 button.btn-new-year, 
body.page-template-thanks-advokat button.btn-new-year, 
body.page-template-spasibo-iamfree button.btn-new-year {
    display: none!important;
}


.n2-section-smartslider {
    margin-bottom: 80px;
}
.n2-ss-slider-controls .nextend-arrow-previous {
    box-shadow: 0px 4px 14px 0px #0025661A;
    border-radius: 50%;
    background: url(/wp-content/themes/fpalaw/assets/img/services/slider/ic_baseline-navigate-prev.svg) center center no-repeat #fff;
}
.n2-ss-slider-controls .nextend-arrow-previous img,
.n2-ss-slider-controls .nextend-arrow-next img {
    opacity: 0;
}
.n2-ss-slider-controls .nextend-arrow-next {
    box-shadow: 0px 4px 14px 0px #0025661A;
    border-radius: 50%;
    background: url(/wp-content/themes/fpalaw/assets/img/services/slider/ic_baseline-navigate-next.svg) center center no-repeat #fff;
}
.n2-ss-slider-controls .nextend-bar.nextend-bar-horizontal>div {
    background: transparent!important;
    font-family: Inter;
    font-size: 16px;
    font-weight: 400;
    line-height: 145%;
}
.n2-ss-slider-controls .nextend-bar.nextend-bar-horizontal>div>span {
    color: #717B97!important;    
}
.menu .beta--scroll {
    top: 20px!important;
}
.results__chart .results__digit.case-in-works {
    display: none!important;
}

body.single figure.aligncenter img {
    margin: 45px auto!important;
}

body.single img.aligncenter {
    margin: 45px auto!important;
}




/* Новые стили для шапки (Новогодняя тема) */
  </style>
</head>