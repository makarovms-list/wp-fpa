<?php
/**
 * fpalaw functions and definitions
 * @package fpalaw
 */

add_filter('show_admin_bar', '__return_false');

remove_action('wp_head',             'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_print_styles',     'print_emoji_styles' );
remove_action('admin_print_styles',  'print_emoji_styles' );

remove_action('wp_head', 'wp_resource_hints', 2 ); //remove dns-prefetch
remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
remove_action('wp_head', 'rsd_link'); // remove EditURI
remove_action('wp_head', 'rest_output_link_wp_head');// remove 'https://api.w.org/
remove_action('wp_head', 'rel_canonical'); //remove canonical
remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
remove_action('wp_head', 'wp_oembed_add_discovery_links'); //remove alternate
remove_action( 'wp_head', 'feed_links', 2 ); // Удаляем вывод /feed/
remove_action( 'wp_head', 'feed_links_extra', 3 ); // Удаляем вывод /feed/ для записей, категорий, тегов и подобного


include_once dirname(__FILE__).'/inc/breadcrumb/Pretty_Breadcrumb.php';

if ( ! function_exists( 'fpalaw_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fpalaw_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on fpalaw, use a find and replace
		 * to change 'fpalaw' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fpalaw', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'fpalaw' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'fpalaw_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'fpalaw_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fpalaw_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fpalaw_content_width', 640 );
}
add_action( 'after_setup_theme', 'fpalaw_content_width', 0 );


// Удалить микроразметку от Yoast SEO
function wpcourses_remove_yoast_jsonld( $data ){
    $data = array();
    return $data;
}

add_filter( 'wpseo_json_ld_output', 'wpcourses_remove_yoast_jsonld', 10, 1 );


// Настройка canonical-ссылки для Yoast SEO
//add_filter('wpseo_canonical', 'removeCanonicalArchivePagination');
//
//function removeCanonicalArchivePagination($link) {
//    $link = preg_replace('#\\??/page[\\/=]\\d+#', '', $link);
//    return $link;
//}


// Регистрация виджетов
add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){

	register_sidebar( array(
		'name'          => sprintf(__('Sidebar %d'), $i ),
		'id'            => "sidebar-$i",
		'description'   => '',
		'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => "</li>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
	) );
}

// Удаляет "Рубрика: ", "Архив: " из заголовка архива
add_filter( 'get_the_archive_title', function( $title ){
	return preg_replace('~^[^:]+: ~', '', $title );
});

// Регистрация изображения превью с размерами
add_action( 'after_setup_theme', 'setup_theme_blocks' );

function setup_theme_blocks() {
	add_theme_support( 'post-thumbnails', array( 'news', 'otzyvy' ) );
	add_image_size( 'post_thumb', 700, 400, true );
	add_image_size( 'post_otzyvy_thumb', 800, 800, true );
    add_theme_support( 'title-tag' );
}


add_filter('single_template', create_function(
  '$the_template',
  'foreach( (array) get_the_category() as $cat ) {
    if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
    return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
  return $the_template;' )
);

// Регистрация произвольного типа записи
add_action( 'init', 'register_news_post_type' );

function register_news_post_type(){
  
    register_taxonomy( 'markname', [ 'info' ], [ 
		'label'                 => '', // определяется параметром $labels->name
        'description'           => 'Теги для статей',
		'labels'                => [
			'name'              => 'Теги статьи',
			'singular_name'     => 'Теги статьи',
			'search_items'      => 'Поиск тега',
			'all_items'         => 'Все теги',
			'view_item '        => 'Смотреть тег',
			'parent_item'       => 'Родительский тег',
			'parent_item_colon' => 'Родительский тег',
			'edit_item'         => 'Изменить тег',
			'update_item'       => 'Обновить тег',
			'add_new_item'      => 'Добавить новый тег',
			'new_item_name'     => 'Новое название тега',
			'menu_name'         => 'Теги',
		],
      
        'public'                => true,
        'show_in_rest'          => true,
        'rest_base'             => 'url_markname',
        'rest_controller_class' => 'WP_REST_Terms_Controller',
        'meta_box_cb'           => 'post_categories_meta_box',
        'show_admin_column'     => true,
        'show_in_quick_edit'    => true,
        'hierarchical'          => false,
		'rewrite'               => [ 'slug'=>'info/tags', 'hierarchical'=>true, 'with_front'=>true],
	] );
  
    register_taxonomy( 'vid', [ 'info' ], [ 
		'label'                 => '', // определяется параметром $labels->name
        'description'           => 'Категории для статей',
		'labels'                => [
			'name'              => 'Категория статей',
			'singular_name'     => 'Категория статьи',
			'search_items'      => 'Поиск категории',
			'all_items'         => 'Все категории',
			'view_item '        => 'Смотреть категорию',
			'parent_item'       => 'Родительская категория',
			'parent_item_colon' => 'Родительская категория:',
			'edit_item'         => 'Изменить категорию',
			'update_item'       => 'Обновить категорию',
			'add_new_item'      => 'Добавить новую категорию',
			'new_item_name'     => 'Новое название категории',
			'menu_name'         => 'Категории',
		],
        
		'public'                => true,
        'show_in_rest'          => true,
        'show_ui'               => true, 
		'show_tagcloud'         => false, 
        'query_var'             => true,
        'rest_base'             => 'url_categories',
        'meta_box_cb'           => 'post_categories_meta_box',
        'show_admin_column'     => true,
        'show_in_quick_edit'    => true,
        'hierarchical'          => true,
        'rewrite'               => true,
		'show_admin_column'     => true,
	] );
  
    register_taxonomy( 'categories', [ 'news' ], [ 
		'label'                 => '', // определяется параметром $labels->name
        'description'           => 'Категории для новостей',
		'labels'                => [
			'name'              => 'Категория новости',
			'singular_name'     => 'Категория новости',
			'search_items'      => 'Поиск категории',
			'all_items'         => 'Все категории',
			'view_item '        => 'Смотреть категорию',
			'parent_item'       => 'Родительская категория',
			'parent_item_colon' => 'Родительская категория:',
			'edit_item'         => 'Изменить категорию',
			'update_item'       => 'Обновить категорию',
			'add_new_item'      => 'Добавить новую категорию',
			'new_item_name'     => 'Новое название категории',
			'menu_name'         => 'Категории',
		],
        
		'public'                => true,
        'show_in_rest'          => true,
        'show_ui'               => true, 
		'show_tagcloud'         => false, 
        'query_var'             => true,
        'rest_base'             => 'url_categories',
        'meta_box_cb'           => 'post_categories_meta_box',
        'show_admin_column'     => true,
        'show_in_quick_edit'    => true,
        'hierarchical'          => true,
        'rewrite'               => [ 'slug'=>'news', 'hierarchical'=>false, 'with_front'=>false, 'feed'=>false ],
		'show_admin_column'     => true,
      
	] );
  
  	register_taxonomy( 'tags', [ 'news' ], [ 
		'label'                 => '', // определяется параметром $labels->name
        'description'           => 'Теги для новости',
		'labels'                => [
			'name'              => 'Теги записи',
			'singular_name'     => 'Теги записи',
			'search_items'      => 'Поиск тега',
			'all_items'         => 'Все теги',
			'view_item '        => 'Смотреть тег',
			'parent_item'       => 'Родительский тег',
			'parent_item_colon' => 'Родительский тег',
			'edit_item'         => 'Изменить тег',
			'update_item'       => 'Обновить тег',
			'add_new_item'      => 'Добавить новый тег',
			'new_item_name'     => 'Новое название тега',
			'menu_name'         => 'Теги',
		],
      
        'public'                => true,
        'show_in_rest'          => true,
        'rest_base'             => 'url_tags',
        'rest_controller_class' => 'WP_REST_Terms_Controller',
        'meta_box_cb'           => 'post_categories_meta_box',
        'show_admin_column'     => true,
        'show_in_quick_edit'    => true,
        'hierarchical'          => true,
		'rewrite'               => true,
	] );
  
	register_post_type( 'news', [
		'label'  => null,
		'labels' => [
			'name'               => 'Новости', // основное название для типа записи
			'singular_name'      => 'Новость', // название для одной записи этого типа
			'add_new'            => 'Добавить новость', // для добавления новой записи
			'add_new_item'       => 'Добавление новости', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование новости', // для редактирования типа записи
			'new_item'           => 'Новая запись', // текст новой записи
			'view_item'          => 'Смотреть запись', // для просмотра записи этого типа.
			'search_items'       => 'Искать запись', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'menu_name'          => 'Новости', // название меню
		],
		'description'         => 'Новости',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 21,
		'menu_icon'           => 'dashicons-text-page',
		'hierarchical'        => false, 
		'rewrite'             => ['slug'=>'news/%categories%', 'with_front'=>false, 'pages'=>false, 'feeds'=>false, 'feed'=>false],
		'query_var'           => true,
        'has_archive'         => 'news',
        'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'revisions'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => ['tags', 'categories'],
	] );
  
  
    register_taxonomy( 'types', [ 'otzyvy' ], [ 
		'label'                 => '', // определяется параметром $labels->name
        'description'           => 'Виды отзывов',
		'labels'                => [
			'name'              => 'Вид отзыва',
			'singular_name'     => 'Вид отзыва',
			'search_items'      => 'Поиск вида',
			'all_items'         => 'Все виды',
			'view_item '        => 'Смотреть вид',
			'parent_item'       => 'Родительский вид',
			'parent_item_colon' => 'Родительский вид',
			'edit_item'         => 'Изменить вид',
			'update_item'       => 'Обновить вид',
			'add_new_item'      => 'Добавить новый вид отзыва',
			'new_item_name'     => 'Новое название вида отзыва',
			'menu_name'         => 'Вид',
		],
        
		'public'                => true,
        'show_in_rest'          => true,
        'show_ui'               => true, 
		'show_tagcloud'         => false, 
        'query_var'             => true,
        'rest_base'             => 'url_types',
        'meta_box_cb'           => 'post_categories_meta_box',
        'show_admin_column'     => true,
        'show_in_quick_edit'    => true,
        'hierarchical'          => true,
        'rewrite'               => true,
	] );
  
    register_taxonomy( 'mark', [ 'otzyvy' ], [ 
		'label'                 => '', // определяется параметром $labels->name
        'description'           => 'Метки для отзыва',
		'labels'                => [
			'name'              => 'Метки отзыва',
			'singular_name'     => 'Метки отзыва',
			'search_items'      => 'Поиск метки',
			'all_items'         => 'Все метки',
			'view_item '        => 'Смотреть метку',
			'parent_item'       => 'Родительская метка',
			'parent_item_colon' => 'Родительская метка',
			'edit_item'         => 'Изменить метку',
			'update_item'       => 'Обновить метку',
			'add_new_item'      => 'Добавить новую метку',
			'new_item_name'     => 'Новое название метки',
			'menu_name'         => 'Метки',
		],
      
        'public'                => true,
        'show_in_rest'          => true,
        'rest_base'             => 'url_mark',
        'rest_controller_class' => 'WP_REST_Terms_Controller',
        'meta_box_cb'           => 'post_categories_meta_box',
        'show_admin_column'     => true,
        'show_in_quick_edit'    => true,
        'hierarchical'          => true,
		'rewrite'               => true,
	] );
  
    register_post_type( 'otzyvy', [
		'label'  => null,
		'labels' => [
			'name'               => 'Отзывы', // основное название для типа записи
			'singular_name'      => 'Отзыв', // название для одной записи этого типа
			'add_new'            => 'Добавить отзыв', // для добавления новой записи
			'add_new_item'       => 'Добавление отзыва', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование отзыва', // для редактирования типа записи
			'new_item'           => 'Новый отзыв', // текст новой записи
			'view_item'          => 'Смотреть отзыв', // для просмотра записи этого типа.
			'search_items'       => 'Искать отзыв', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'menu_name'          => 'Отзывы', // название меню
		],
		'description'         => 'Отзывы',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-megaphone',
		'hierarchical'        => false, 
		'rewrite'             => true,
		'query_var'           => true,
        'has_archive'         => 'otzyvy',
        'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => ['mark', 'types'],
	] );
  
    register_post_type( 'dela', [
		'label'  => null,
		'labels' => [
			'name'               => 'Дела', // основное название для типа записи
			'singular_name'      => 'Дело', // название для одной записи этого типа
			'add_new'            => 'Добавить дело', // для добавления новой записи
			'add_new_item'       => 'Добавление дела', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование дела', // для редактирования типа записи
			'new_item'           => 'Новое дело', // текст новой записи
			'view_item'          => 'Смотреть дело', // для просмотра записи этого типа.
			'search_items'       => 'Искать дело', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'menu_name'          => 'Дела', // название меню
		],
		'description'         => 'Завершенные дела',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 21,
		'menu_icon'           => 'dashicons-portfolio',
		'hierarchical'        => false, 
		'rewrite'             => true,
		'query_var'           => true,
        'has_archive'         => 'dela',
        'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	] );
	
	register_post_type( 'jobs', [
		'label'  => null,
		'labels' => [
			'name'               => 'Вакансии', // основное название для типа записи
			'singular_name'      => 'Вакансия', // название для одной записи этого типа
			'add_new'            => 'Добавить вакансию', // для добавления новой записи
			'add_new_item'       => 'Добавление вакансии', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование вакансии', // для редактирования типа записи
			'new_item'           => 'Новая вакансия', // текст новой записи
			'view_item'          => 'Смотреть вакансию', // для просмотра записи этого типа.
			'search_items'       => 'Искать вакансию', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'menu_name'          => 'Вакансии', // название меню
		],
		'description'         => 'Вакансии',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 21,
		'menu_icon'           => 'dashicons-portfolio',
		'hierarchical'        => false, 
		'rewrite'             => true,
		'query_var'           => true,
        'has_archive'         => 'jobs',
        'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	] );
  
    register_post_type( 'info', [
		'label'  => null,
		'labels' => [
			'name'               => 'Статьи', // основное название для типа записи
			'singular_name'      => 'Статья', // название для одной записи этого типа
			'add_new'            => 'Добавить статью', // для добавления новой записи
			'add_new_item'       => 'Добавление статьи', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование статьи', // для редактирования типа записи
			'new_item'           => 'Новая статья', // текст новой записи
			'view_item'          => 'Смотреть статью', // для просмотра записи этого типа.
			'search_items'       => 'Искать статью', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'menu_name'          => 'Статьи', // название меню
		],
		'description'         => 'Статьи для проекта',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 22,
		'menu_icon'           => 'dashicons-edit-large',
		'hierarchical'        => false, 
		'rewrite'             => true,
		'query_var'           => true,
        'has_archive'         => true,
        'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'comments'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => ['markname', 'vid'],
	] );
  
    register_post_type( 'rassylka', [
		'label'  => null,
		'labels' => [
			'name'               => 'Статьи для рассылки', // основное название для типа записи
			'singular_name'      => 'Статья', // название для одной записи этого типа
			'add_new'            => 'Добавить статью', // для добавления новой записи
			'add_new_item'       => 'Добавление статьи', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование статьи', // для редактирования типа записи
			'new_item'           => 'Новая статья', // текст новой записи
			'view_item'          => 'Смотреть статью', // для просмотра записи этого типа.
			'search_items'       => 'Искать статью', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'menu_name'          => 'Статьи @mail', // название меню
		],
		'description'         => 'Статьи для mail-рассылки',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 19,
		'menu_icon'           => 'dashicons-email-alt2',
		'hierarchical'        => false, 
		'rewrite'             => true,
		'query_var'           => true,
        'has_archive'         => 'rassylka',
        'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	] );
	
    register_post_type( 'kviz', [
		'label'  => null,
		'labels' => [
			'name'               => 'Опросы в статьях', // основное название для типа записи
			'singular_name'      => 'Опрос', // название для одной записи этого типа
			'add_new'            => 'Добавить опрос', // для добавления новой записи
			'add_new_item'       => 'Добавление опроса', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование опроса', // для редактирования типа записи
			'new_item'           => 'Новый опрос', // текст новой записи
			'view_item'          => 'Смотреть опрос', // для просмотра записи этого типа.
			'search_items'       => 'Искать опрос', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'menu_name'          => 'Опросы', // название меню
		],
		'description'         => 'Опросы для статей',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => false, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 19,
		'menu_icon'           => 'dashicons-email-alt2',
		'hierarchical'        => false, 
		'rewrite'             => true,
		'query_var'           => true,
        'has_archive'         => 'kviz',
        'supports'            => [ 'title', 'custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	] );
	
	register_post_type( 'feedback', [
		'label'  => null,
		'labels' => [
			'name'               => 'Обращения', // основное название для типа записи
			'singular_name'      => 'Обращение', // название для одной записи этого типа
			'add_new'            => 'Добавить обращение', // для добавления новой записи
			'add_new_item'       => 'Добавление обращения', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование обращения', // для редактирования типа записи
			'new_item'           => 'Новое обращение', // текст новой записи
			'view_item'          => 'Смотреть обращение', // для просмотра записи этого типа.
			'search_items'       => 'Искать обращение', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'menu_name'          => 'Обращения', // название меню
		],
		'description'         => 'Обращения клиектов',
		'public'              => true,
		'publicly_queryable'  => false, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => false, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 19,
		'menu_icon'           => 'dashicons-email-alt2',
		'hierarchical'        => false, 
		'rewrite'             => true,
		'query_var'           => true,
        'has_archive'         => 'feedback',
        'supports'            => [ 'title', 'custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	] );
	
	register_post_type( 'bunus-survey', [
		'label'  => null,
		'labels' => [
			'name'               => 'Бонус: опросы', // основное название для типа записи
			'singular_name'      => 'Бонус: опросы', // название для одной записи этого типа
			'add_new'            => 'Добавить опрос', // для добавления новой записи
			'add_new_item'       => 'Добавление опроса', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование опроса', // для редактирования типа записи
			'new_item'           => 'Новый опрос', // текст новой записи
			'view_item'          => 'Смотреть опрос', // для просмотра записи этого типа.
			'search_items'       => 'Искать опрос', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'menu_name'          => 'Бонус: опросы', // название меню
		],
		'description'         => 'Бонус: опросы',
		'public'              => true,
		'publicly_queryable'  => false, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => false, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 19,
		'menu_icon'           => 'dashicons-email-alt2',
		'hierarchical'        => false, 
		'rewrite'             => true,
		'query_var'           => true,
        'has_archive'         => 'bunus-survey',
        'supports'            => [ 'title', 'custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	] );
}

add_filter( 'post_type_link', 'news_permalink', 1, 2 );
function news_permalink( $permalink, $post ){

	// выходим если это не наш тип записи: без холдера %faqcat%
	if( strpos( $permalink, '%categories%' ) === false )
		return $permalink;

	// Получаем элементы таксы
	$terms = get_the_terms( $post, 'categories' );
	// если есть элемент заменим холдер
	if( ! is_wp_error( $terms ) && !empty( $terms ) && is_object( $terms[0] ) )
		$term_slug = array_pop( $terms )->slug;
	// элемента нет, а должен быть...
	else
		$term_slug = 'no-categories';

	return str_replace( '%categories%', $term_slug, $permalink );
}


/**
 * Enqueue scripts and styles.
 */

add_action( 'wp_enqueue_scripts', 'fpalaw_styles' );

function fpalaw_styles() {
	$version = '0.0.0.0';
	wp_dequeue_style( 'wp-block-library' );
	wp_deregister_script( 'wp-embed' );

	// отменяем зарегистрированный jQuery
	wp_deregister_script('jquery-core');
	wp_deregister_script('jquery');

	// регистрируем
	/*wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', false, null, true );*/
	wp_register_script( 'jquery-core', get_template_directory_uri() . '/js/jquery.min.js', false, null, true );
	wp_register_script( 'jquery', false, array('jquery-core'), null, true );

	// подключаем
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'commentjs', get_stylesheet_directory_uri() . '/js/comments.js', array('jquery'), null );
    wp_enqueue_script( 'rangeSlider', get_stylesheet_directory_uri() . '/assets/js/ion.rangeSlider.min.js', array('jquery'), null );
    wp_enqueue_script( 'jquery-number', get_stylesheet_directory_uri() . '/js/jquery.number.min.js ', array('jquery'), null );
    /*<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>*/
    
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css', []);
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', []);
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', []);
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', [], $version);
    wp_enqueue_style('rangeSlider', get_template_directory_uri() . '/assets/css/ion.rangeSlider.min.css', []);
}

add_action( 'get_footer', 'fpalaw_scripts' );

function fpalaw_scripts() {
	$version = '0.0.0.0';

	wp_enqueue_script('svgxuse', get_template_directory_uri() . '/assets/js/svgxuse.min.js', []);
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', []);
	wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', []);
	wp_enqueue_script('gsap', get_template_directory_uri() . '/assets/js/gsap.min.js', []);
	wp_enqueue_script('scroll-trigger', get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js', []);
	wp_enqueue_script('resizesensor', get_template_directory_uri() . '/assets/js/ResizeSensor.js', []);
	wp_enqueue_script('sticky-sidebar', get_template_directory_uri() . '/assets/js/sticky-sidebar.min.js', []);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', [], $version);

  
    wp_enqueue_script( 'filter', get_stylesheet_directory_uri() . '/js/filter.js', array( 'jquery' ), []);
    wp_enqueue_script( 'loadmore', get_stylesheet_directory_uri() . '/js/loadmore.js', array( 'jquery' ), []);
	

    wp_localize_script('main', 'WPJS', [
      'siteUrl' => get_template_directory_uri(),
      'timerDate' => '123123' ,
    ]);
}


// Ajax-фильтр для видео-отзывов
function filterVideo(){
 
    if ($_POST['reset']) {
      $args = array (
      'posts_per_page' => '-1',
      'post_type'   => 'otzyvy',
      'post_status' => 'publish',
      'tax_query'   => [
        [
          'taxonomy'  => 'types',
          'field'     => 'slug',
          'terms'     => 'video'
        ],
      ]);
    } else {
      $args = array (
      'posts_per_page' => '-1',
      'post_type'   => 'otzyvy',
      'post_status' => 'publish',
      'tax_query' => [
        'relation' => 'AND',
        [
          'taxonomy'  => 'types',
          'field'     => 'slug',
          'terms'     => 'video'
        ],
        [
          'taxonomy' => 'mark',
          'field' => 'slug',
          'terms' => $_POST['filterMeta'],
        ],
      ]);
    }
  
    $videos = new WP_Query($args);
	

    if( $videos->have_posts() ) :

      while( $videos->have_posts() ) : $videos->the_post();

          get_template_part('template-parts/content-video');

      endwhile;

    endif;
  
	die();
}
       
add_action('wp_ajax_filterVideo', 'filterVideo');
add_action('wp_ajax_nopriv_filterVideo', 'filterVideo');

// Ajax-событие для увеличения счетчика просмотра скана отзыва
function open_review_scan(){
    $review_post_id = $_POST['post_id'];
    $old_review_count = get_field('review_scan_count', $review_post_id);
    $new_review_count = $old_review_count + 1;
    $event = update_post_meta($review_post_id, 'review_scan_count', $new_review_count);
    echo json_encode(array('post_id'=>$review_post_id, 'old_value'=>$old_review_count, 'new_value'=>$new_review_count, 'event'=>$event ));
	die();
}
add_action('wp_ajax_open_review_scan', 'open_review_scan');
add_action('wp_ajax_nopriv_open_review_scan', 'open_review_scan');

// Ajax-событие добавления новой вакансии
function add_job(){
    $user_id = $_POST['user_id'];
    $job_title = $_POST['job_title'];
    $job_salary_from = $_POST['job_salary_from'];
    $job_salary_up_to = $_POST['job_salary_up_to'];
    $job_text = $_POST['job_text'];
    $job_link = $_POST['job_link'];
    
    $post_data = array(
    	'post_title'    => sanitize_text_field($job_title),
    	'post_content'  => $job_text,
    	'post_status'   => 'publish',
    	'post_type'     => 'jobs',
    	'post_author'   => $user_id
    );
    $post_id = wp_insert_post($post_data);
    if ($job_salary_from != '') {
        update_post_meta($post_id, 'salary_from', $job_salary_from);
    }
    if ($job_salary_up_to != '') {
        update_post_meta($post_id, 'salary_up_to', $job_salary_up_to);
    }
    if ($job_link != '') {
        update_post_meta($post_id, 'job_link', $job_link);
    }
    
    echo json_encode(array('post_id'=>$post_id));
	die();
}
add_action('wp_ajax_add_job', 'add_job');

// Ajax-событие изменения вакансии
function edit_job(){
    $user_id = $_POST['user_id'];
    $job_id = $_POST['job_id'];
    $job_title = $_POST['job_title'];
    $job_salary_from = $_POST['job_salary_from'];
    $job_salary_up_to = $_POST['job_salary_up_to'];
    $job_text = $_POST['job_text'];
    $job_link = $_POST['job_link'];
    
    $job_post = [
        'ID' => $job_id,
        'post_title' => $job_title,
        'post_content' => $job_text,
    ];
    wp_update_post(wp_slash($job_post));
    /*
    if ($job_salary_from != '') {
        update_post_meta($job_id, 'salary_from', $job_salary_from);
    }
    if ($job_salary_up_to != '') {
        update_post_meta($job_id, 'salary_up_to', $job_salary_up_to);
    }
    if ($job_link != '') {
        update_post_meta($job_id, 'job_link', $job_link);
    }
    */
    update_post_meta($job_id, 'salary_from', $job_salary_from);
    update_post_meta($job_id, 'salary_up_to', $job_salary_up_to);
    update_post_meta($job_id, 'job_link', $job_link);
    
    echo json_encode(array('post_id'=>$job_id));
	die();
}
add_action('wp_ajax_edit_job', 'edit_job');

// Ajax-событие изменения вакансии
function remove_job(){
    $job_id = $_POST['job_id'];
    wp_delete_post($job_id, false);
    
    echo json_encode(array('message'=>'Вакансия удалена навсегда'));
	die();
}
add_action('wp_ajax_remove_job', 'remove_job');






// Ajax-загрузка новых дел
//function true_loadmore_dela(){
// 
//	$args = unserialize( stripslashes( $_POST['query'] ) );
//	$args['paged'] = $_POST['page'] + 1; // следующая страница
//	$args['post_status'] = 'draft';
// 
//	query_posts( $args );
//  
//	if( have_posts() ) :
// 
//		while( have_posts() ): the_post();
// 
//			get_template_part('template-parts/content-dela');
// 
//		endwhile;
// 
//	endif;
//	die();
//}
// 
//add_action('wp_ajax_loadmore_dela', 'true_loadmore_dela');
//add_action('wp_ajax_nopriv_loadmore_dela', 'true_loadmore_dela');


// Ajax-загрузка новостей в СМИ
function true_load_smi(){
 
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';
 
	query_posts( $args );
  
	if( have_posts() ) :
 
		while( have_posts() ): the_post();
 
			get_template_part('template-parts/content-smi');
 
		endwhile;
 
	endif;
	die();
}
 
add_action('wp_ajax_loadmore_smi', 'true_load_smi');
add_action('wp_ajax_nopriv_loadmore_smi', 'true_load_smi');


// Ajax-загрузка новостей о компании и о банкротстве
function true_load_posts_news(){
 
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';
	
 
    query_posts( $args );
  
	if( have_posts() ) :
 
		while( have_posts() ): the_post();
 
			get_template_part('template-parts/content-news');
 
		endwhile;
 
	endif;
	die();
}
 
add_action('wp_ajax_loadmore_news', 'true_load_posts_news');
add_action('wp_ajax_nopriv_loadmore_news', 'true_load_posts_news');


// Ajax-загрузка новости компании
function true_load_com(){
 
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';
	
 
    query_posts( $args );
  
	if( have_posts() ) :
 
		while( have_posts() ): the_post();
 
			get_template_part('template-parts/content-news');
 
		endwhile;
 
	endif;
	die();
}
 
add_action('wp_ajax_loadmore_com', 'true_load_com');
add_action('wp_ajax_nopriv_loadmore_com', 'true_load_com');


// Ajax-загрузка новости банкротства
function true_load_bank(){
 
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';
	
 
    query_posts( $args );
  
	if( have_posts() ) :
 
		while( have_posts() ): the_post();
 
			get_template_part('template-parts/content-news');
 
		endwhile;
 
	endif;
	die();
}
 
add_action('wp_ajax_loadmore_bank', 'true_load_bank');
add_action('wp_ajax_nopriv_loadmore_bank', 'true_load_bank');



// Ajax-загрузка новости компании мобильная версия
function true_load_com_mob(){
 
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';
	
 
    query_posts( $args );
  
	if( have_posts() ) :
 
		while( have_posts() ): the_post();
 
			get_template_part('template-parts/content-news');
 
		endwhile;
 
	endif;
	die();
}
 
add_action('wp_ajax_loadmore_com_mob', 'true_load_com_mob');
add_action('wp_ajax_nopriv_loadmore_com_mob', 'true_load_com_mob');


// Ajax-загрузка новости банкротства мобильная версия
function true_load_bank_mob(){
 
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';
	
 
    query_posts( $args );
  
	if( have_posts() ) :
 
		while( have_posts() ): the_post();
 
			get_template_part('template-parts/content-news');
 
		endwhile;
 
	endif;
	die();
}
 
add_action('wp_ajax_loadmore_bank_mob', 'true_load_bank_mob');
add_action('wp_ajax_nopriv_loadmore_bank_mob', 'true_load_bank_mob');


// Ajax-загрузка фото-отзывов
function true_load_posts_foto(){
 
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';
	
 
    query_posts( $args );
  
	if( have_posts() ) :
 
		while( have_posts() ): the_post();
 
			get_template_part('template-parts/content-foto');
 
		endwhile;
 
	endif;
	die();
}
 
add_action('wp_ajax_loadmore_foto', 'true_load_posts_foto');
add_action('wp_ajax_nopriv_loadmore_foto', 'true_load_posts_foto');


// Ajax-загрузка видео-отзывов
function true_load_posts_video(){
 
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';
	
 
    query_posts( $args );
  
	if( have_posts() ) :
 
		while( have_posts() ): the_post();
 
			get_template_part('template-parts/content-video');
 
		endwhile;
 
	endif;
	die();
}
 
add_action('wp_ajax_loadmore_video', 'true_load_posts_video');
add_action('wp_ajax_nopriv_loadmore_video', 'true_load_posts_video');



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 Настройка отправки форм в amoCRM
 */

function wpcf7_modify_this( $WPCF7_ContactForm ) {
    // Отправка данных в amoCRM
    
    /*
    "Общая сумма долга" => isset($_POST['summ']) ? $_POST['summ'] : null,
    "Ценное имущество в собственности" => isset($_POST['valuable']) ? $_POST['valuable'] : null,
    "Место фактического проживания" => isset($_POST['place']) ? $_POST['place'] : null,
    "Категорий граждан" => isset($_POST['category']) ? $_POST['category'] : null,
    "Сокращение на работе или снижение официального дохода" => isset($_POST['reduced-income']) ? $_POST['reduced-income'] : null,
    "Кто является вашим кредиторами?" => isset($_POST['creditors']) ? $_POST['creditors'] : null,
    "Ваши долги уже просужены и исполнительные листы находятся в ФССП?" => isset($_POST['fssp']) ? $_POST['fssp'] : null,
    "Сделки с ценным имуществом" => isset($_POST['transactions']) ? $_POST['transactions'] : null,
    "Занимаетесь ли вы бизнесом?" => isset($_POST['business']) ? $_POST['business'] : null,
    "Какие услуги нашей компании вам нужны?" => isset($_POST['services']) ? $_POST['services'] : null,
    "Вы официально трудоустроены?" => isset($_POST['officially-employed']) ? $_POST['officially-employed'] : null,
    "Официальный доход более 48 000 рублей" => isset($_POST['dohod48k']) ? $_POST['dohod48k'] : null,
    "Есть ли среди ваших кредиторов банки с гос. участием?" => isset($_POST['gosbanks']) ? $_POST['gosbanks'] : null,
    "Общее количество ваших кредиторов" => isset($_POST['number-creditors']) ? $_POST['number-creditors'] : null,
    "Дата записи:" => isset($_POST['data-reception']) ? $_POST['data-reception'] : null,
    "Время записи:" => isset($_POST['time-reception']) ? $_POST['time-reception'] : null,
    "529456" => isset($_POST['gclid']) ? $_POST['gclid'] : null,
    "Заголовок страницы/блока" => isset($_POST['form-title']) ? $_POST['form-title'] : null,
    "Адрес страницы(URL)" => isset($_POST['page-url']) ? $_POST['page-url'] : null,
    "Есть ли у вас ипотека или автокредит?" => isset($_POST['ipoteka-avtocredit']) ? $_POST['ipoteka-avtocredit'] : null,
    "Канал" => "{utmMedium}",
    */

/*    
    $roistatData = array(
      'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : null,
      'key'     => 'ZWY4Mzc1MTQ0YzYzN2E0ZjgyYWY2ZTU2MzY3MDRiZDM6ODQ2NDQ=',
      'title'   => 'Заявка с сайта fpa.ru', // Постоянное значение
      'comment' => '', // Комментарий к сделке
      'name'    => isset($_POST['cname'])    ? $_POST['cname'] : null, // Для поля с именем 'your-name'
      'phone'   => isset($_POST['cphone'])   ? $_POST['cphone'] : null, // Для поля с именем 'your-phone'
      'email'   => isset($_POST['form-mail'])   ? $_POST['form-mail'] : null, // Для поля с именем 'your-email'
      'fields'  => array(
        "452309" => "{ip}",
        "468391" => "{city}",
        "452805" => "{googleClientId}",
        "visitor_uid" => "{metrikaClientId}",
        "468373" => "{utmSource}",
        "468375" => "{utmMedium}",
        "468377" => "{utmCampaign}",
        "468379" => "{utmContent}",
        "468381" => "{utmTerm}",
        "529544" => isset($_POST['form-name']) ? $_POST['form-name'] : "1 БАНКРОТСТВО ЗА 2000 РУБ./МЕС. В ОДНОЙ ИЗ КРУПНЕЙШИХ ЮРИДИЧЕСКИХ ФИРМ СПБ И ЛО",
        "532802" => isset($_POST['form-sms']) ? $_POST['form-sms'] : null,
        "532804" => isset($_POST['form-time']) ? $_POST['form-time'] : null,
        "533202" => isset($_POST['days-left']) ? $_POST['days-left'] : null,
        "533828" => isset($_POST['summ']) ? $_POST['summ'] : null,
        "533830" => isset($_POST['valuable']) ? $_POST['valuable'] : null,
        "533832" => isset($_POST['place']) ? $_POST['place'] : null,
        "533834" => isset($_POST['category']) ? $_POST['category'] : null,
        "533836" => isset($_POST['reduced-income']) ? $_POST['reduced-income'] : null,
        "533838" => isset($_POST['creditors']) ? $_POST['creditors'] : null,
        "533840" => isset($_POST['fssp']) ? $_POST['fssp'] : null,
        "533842" => isset($_POST['transactions']) ? $_POST['transactions'] : null,
        "533844" => isset($_POST['business']) ? $_POST['business'] : null,
        "533846" => isset($_POST['services']) ? $_POST['services'] : null,
        "533848" => isset($_POST['officially-employed']) ? $_POST['officially-employed'] : null,
        "533850" => isset($_POST['dohod48k']) ? $_POST['dohod48k'] : null,
        "533852" => isset($_POST['gosbanks']) ? $_POST['gosbanks'] : null,
        "533854" => isset($_POST['number-creditors']) ? $_POST['number-creditors'] : null,
        "533856" => isset($_POST['p4ch1st46fz229']) ? $_POST['p4ch1st46fz229'] : null,
        "533858" => isset($_POST['messenger']) ? $_POST['messenger'] : null,
        "533860" => isset($_POST['crm_entry_point']) ? $_POST['crm_entry_point'] : null,
        "533862" => isset($_POST['crm_type_device']) ? $_POST['crm_type_device'] : null,
        "533864" => isset($_POST['crm_session_time']) ? $_POST['crm_session_time'] : null,
        "533876" => isset($_POST['data-reception']) ? $_POST['data-reception'] : null,
        "533874" => isset($_POST['time-reception']) ? $_POST['time-reception'] : null,
        "533872" => isset($_POST['gclid']) ? $_POST['gclid'] : null,
        "533884" => isset($_POST['ipoteka-avtocredit']) ? $_POST['ipoteka-avtocredit'] : null,
        "533886" => isset($_POST['dohod']) ? $_POST['dohod'] : null,
        "533892" => isset($_POST['husband']) ? $_POST['husband'] : null,
        "533894" => isset($_POST['competitive_mass']) ? $_POST['competitive_mass'] : null,
        "533896" => isset($_POST['late_payments']) ? $_POST['late_payments'] : null,
        "533898" => isset($_POST['self_employed']) ? $_POST['self_employed'] : null,
        "534010" => isset($_POST['http_referrer']) ? $_POST['http_referrer'] : null,
        "nedvizhimost" => isset($_POST['nedvizhimost']) ? $_POST['nedvizhimost'] : null,
        "Имеется ли у вас в собственности недвижимое имущество?" => isset($_POST['realty']) ? $_POST['realty'] : null,
        "Как получить расчет?" => isset($_POST['callback']) ? $_POST['callback'] : null,
        "Были ли сделки по отчуждению имущества?" => isset($_POST['alienation-transactions']) ? $_POST['alienation-transactions'] : null,
        "Имеется ли в собственности движимое имущество?" => isset($_POST['movable']) ? $_POST['movable'] : null,
        "Официальный доход на вас или семью менее 38 000 рублей" => isset($_POST['dohod38k']) ? $_POST['dohod38k'] : null,
        "Ваш официальный доход более 30 000 рублей?" => isset($_POST['dohod30k']) ? $_POST['dohod30k'] : null,
        "Вопросы и ответы:" => isset($_POST['others']) ? $_POST['others'] : null,
        "Телефон друга:" => isset($_POST['cfphone']) ? $_POST['cfphone'] : null,
        "Имя друга:" => isset($_POST['cfname']) ? $_POST['cfname'] : null,
        "charset" => "UTF-8", // Сервер преобразует значения полей из указанной кодировки в UTF-8
      ),
   );
    $roistatRequest = file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));
*/

    $file_name = date('d-m-Y');
    $file = fopen(ABSPATH . '/wp-content/themes/fpalaw/leads-logs/' . $file_name . '.log', 'a');
    
    fwrite($file, "Новый лид от " . date('d-m-Y H:m:s') . ":
---        

");

/*
    fwrite($file, "1. Запрос на создание лида:
---
");
    fwrite($file, $roistatRequest);
*/

    /* по телефону получаем id клиента ([id]) */
        fwrite($file, "2. Получаем ID-клиента в Roistat по номеру телефона '" . str_replace(array('+',' ','(',')','-',), "", $_POST['cphone']) . "':
---
");
    if (isset($_POST['cphone'])) {
        $current_phone = str_replace(array('+',' ','(',')','-',), "", $_POST['cphone']);
        $data = array (
            'filters' => array(
                array("phone","=",$current_phone)
            )
        );
        $ch = curl_init('https://cloud.roistat.com/api/v1/project/clients?project=84644');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-type: application/json',
            'Api-key: a306a25a749f74a350232a12d90d7280'
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data, JSON_UNESCAPED_UNICODE));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $html = curl_exec($ch);
        curl_close($ch);	
        $answer = json_decode($html, true);
        $current_clientid = $answer['clients'][0]['id'];
        fwrite($file, 'ID-клиента: ' . $current_clientid);
    } else {
        fwrite($file, "Ошибка: ID-клиента не удолось получить, так как номер телефона был пуст.");
    }
    
    /* по значению [id] получаем список событий пользователя ([type] => visit/order) */
        fwrite($file, "

3. Получаем список действий клиента в Roistat по его ID:
---
");
        if (isset($current_clientid)) {
            $ch = curl_init('https://cloud.roistat.com/api/v1/project/clients/detail/feed?project=84644&client=' . $current_clientid);
            curl_setopt($ch, CURLOPT_HTTPGET, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-type: application/json',
                'Api-key: a306a25a749f74a350232a12d90d7280'
            ]);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $html = curl_exec($ch);
            curl_close($ch);	
            
            $answer = json_decode($html, true);
            $visit_count = 0;
            $visits_sources = array();
            $order_count = 0;
            $order_ids = array();
            foreach ($answer['feed'] as $key => $value) {
                if ($value['type'] == 'visit') {
                    $visit_count++;
                    $value_arr = explode("→", $value['sourceTitle']);
                    if (count($value_arr) > 1) {
                        if ($value_arr[0] != 'Яндекс.Директ (АУ)' && $value_arr[0] != 'Яндекс.Директ (ФПА)') {
                            $visits_sources[] = $value_arr[0];
                        } else {
                            $visits_sources[] = $value_arr[1];
                        }
                    } else {
                        $visits_sources[] = $value['sourceTitle'];
                    }
                    
                }
                if ($value['type'] == 'order') {
                    if ($value['statusType'] != 'canceled') {
                        $order_count++;    
                        $order_ids[] = $value['id'];
                    }
                }
            }
            
            fwrite($file, 'Визиты: ' . $visit_count .'
');
            $visit_sources_txt = '';
            foreach ($visits_sources as $key => $value) {
                $visit_sources_txt .= $value . '; ';
            }
            fwrite($file, 'Источники визитов: ' . $visit_sources_txt .'
');

            fwrite($file, 'Активные лиды: ' . $order_count .'
');
            $order_ids_txt = '';
            foreach ($order_ids as $key => $value) {
                $order_ids_txt .= $value . '; ';
            }
            fwrite($file, 'ID-лидов: ' . $order_ids_txt);
        } else {
            fwrite($file, "Ошибка: Список действий клиента пуст, так ID-клиента не известно.");
        }

    /* Собранный массив с данными отправляем в AmoCRM */
        fwrite($file, "

4. Отправляем лид сразу со значениями источников :
---
");

    /*
    'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : null,
    */

    $roistatData = array(
      'roistat' => isset($_POST['roistat_visit']) ? $_POST['roistat_visit'] : null,
      'key'     => 'ZWY4Mzc1MTQ0YzYzN2E0ZjgyYWY2ZTU2MzY3MDRiZDM6ODQ2NDQ=',
      'title'   => 'Заявка с сайта fpa.ru', // Постоянное значение
      'comment' => '', // Комментарий к сделке
      'name'    => isset($_POST['cname'])    ? $_POST['cname'] : null, // Для поля с именем 'your-name'
      'phone'   => isset($_POST['cphone'])   ? $_POST['cphone'] : null, // Для поля с именем 'your-phone'
      'email'   => isset($_POST['form-mail'])   ? $_POST['form-mail'] : null, // Для поля с именем 'your-email'
      'fields'  => array(
        "452309" => "{ip}",
        "468391" => "{city}",
        "452805" => "{googleClientId}",
        "visitor_uid" => "{metrikaClientId}",
        "468373" => "{utmSource}",
        "468375" => "{utmMedium}",
        "468377" => "{utmCampaign}",
        "468379" => "{utmContent}",
        "468381" => "{utmTerm}",
        "537670" => $visits_sources[0],
        "537672" => $visits_sources[1], 
        "537674" => $visits_sources[2],
        "537676" => $visits_sources[3],
        "537678" => $visits_sources[4],
        "537679" => $visits_sources[5],
        "537682" => $visits_sources[6],
        "537684" => $visits_sources[7],
        "537690" => $visits_sources[8],
        "537692" => $visits_sources[9],
        "529544" => isset($_POST['form-name']) ? $_POST['form-name'] : "1 БАНКРОТСТВО ЗА 2000 РУБ./МЕС. В ОДНОЙ ИЗ КРУПНЕЙШИХ ЮРИДИЧЕСКИХ ФИРМ СПБ И ЛО",
        "532802" => isset($_POST['form-sms']) ? $_POST['form-sms'] : null,
        "532804" => isset($_POST['form-time']) ? $_POST['form-time'] : null,
        "533202" => isset($_POST['days-left']) ? $_POST['days-left'] : null,
        "533828" => isset($_POST['summ']) ? $_POST['summ'] : null,
        "533830" => isset($_POST['valuable']) ? $_POST['valuable'] : null,
        "533832" => isset($_POST['place']) ? $_POST['place'] : null,
        "533834" => isset($_POST['category']) ? $_POST['category'] : null,
        "533836" => isset($_POST['reduced-income']) ? $_POST['reduced-income'] : null,
        "533838" => isset($_POST['creditors']) ? $_POST['creditors'] : null,
        "533840" => isset($_POST['fssp']) ? $_POST['fssp'] : null,
        "533842" => isset($_POST['transactions']) ? $_POST['transactions'] : null,
        "533844" => isset($_POST['business']) ? $_POST['business'] : null,
        "533846" => isset($_POST['services']) ? $_POST['services'] : null,
        "533848" => isset($_POST['officially-employed']) ? $_POST['officially-employed'] : null,
        "533850" => isset($_POST['dohod48k']) ? $_POST['dohod48k'] : null,
        "533852" => isset($_POST['gosbanks']) ? $_POST['gosbanks'] : null,
        "533854" => isset($_POST['number-creditors']) ? $_POST['number-creditors'] : null,
        "533856" => isset($_POST['p4ch1st46fz229']) ? $_POST['p4ch1st46fz229'] : null,
        "533858" => isset($_POST['messenger']) ? $_POST['messenger'] : null,
        "533860" => isset($_POST['crm_entry_point']) ? $_POST['crm_entry_point'] : null,
        "533862" => isset($_POST['crm_type_device']) ? $_POST['crm_type_device'] : null,
        "533864" => isset($_POST['crm_session_time']) ? $_POST['crm_session_time'] : null,
        "533876" => isset($_POST['data-reception']) ? $_POST['data-reception'] : null,
        "533874" => isset($_POST['time-reception']) ? $_POST['time-reception'] : null,
        "533872" => isset($_POST['gclid']) ? $_POST['gclid'] : null,
        "533884" => isset($_POST['ipoteka-avtocredit']) ? $_POST['ipoteka-avtocredit'] : null,
        "533886" => isset($_POST['dohod']) ? $_POST['dohod'] : null,
        "533892" => isset($_POST['husband']) ? $_POST['husband'] : null,
        "533894" => isset($_POST['competitive_mass']) ? $_POST['competitive_mass'] : null,
        "533896" => isset($_POST['late_payments']) ? $_POST['late_payments'] : null,
        "533898" => isset($_POST['self_employed']) ? $_POST['self_employed'] : null,
        "534010" => isset($_POST['http_referrer']) ? $_POST['http_referrer'] : null,
        "538676" => isset($_POST['how_often_call']) ? $_POST['how_often_call'] : null,
        "538678" => isset($_POST['who_calling']) ? $_POST['who_calling'] : null,
        "538680" => isset($_POST['violation_law']) ? $_POST['violation_law'] : null,
        "nedvizhimost" => isset($_POST['nedvizhimost']) ? $_POST['nedvizhimost'] : null,
        "Имеется ли у вас в собственности недвижимое имущество?" => isset($_POST['realty']) ? $_POST['realty'] : null,
        "Как получить расчет?" => isset($_POST['callback']) ? $_POST['callback'] : null,
        "Были ли сделки по отчуждению имущества?" => isset($_POST['alienation-transactions']) ? $_POST['alienation-transactions'] : null,
        "Имеется ли в собственности движимое имущество?" => isset($_POST['movable']) ? $_POST['movable'] : null,
        "Официальный доход на вас или семью менее 38 000 рублей" => isset($_POST['dohod38k']) ? $_POST['dohod38k'] : null,
        "Ваш официальный доход более 30 000 рублей?" => isset($_POST['dohod30k']) ? $_POST['dohod30k'] : null,
        "Вопросы и ответы:" => isset($_POST['others']) ? $_POST['others'] : null,
        "Телефон друга:" => isset($_POST['cfphone']) ? $_POST['cfphone'] : null,
        "Имя друга:" => isset($_POST['cfname']) ? $_POST['cfname'] : null,
        "charset" => "UTF-8", // Сервер преобразует значения полей из указанной кодировки в UTF-8
      ),
   );
    $roistatRequest = file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));


    /*
    $roistatUpdateData = array(
      'key'     => 'ZWY4Mzc1MTQ0YzYzN2E0ZjgyYWY2ZTU2MzY3MDRiZDM6ODQ2NDQ=',
      'fields'  => array(
        "537670" => $visits_sources[0],
        "537672" => $visits_sources[1], 
        "537674" => $visits_sources[2],
        "537676" => $visits_sources[3],
        "537678" => $visits_sources[4],
        "537679" => $visits_sources[5],
        "537682" => $visits_sources[6],
        "537684" => $visits_sources[7],
        "537690" => $visits_sources[8],
        "537692" => $visits_sources[9],
        "charset" => "UTF-8", // Сервер преобразует значения полей из указанной кодировки в UTF-8
      ),
   );
    $roistatUpdateRequest = file_get_contents("https://cloud.roistat.com/api/v4/leads/".$order_ids[0]."?" . http_build_query($roistatUpdateData));
    */
    fwrite($file, "Ответ обновления источников лида: " . $roistatRequest);
    
    fwrite($file, "
    
");
    
    
    
    
    
    
    
    
    fclose($file);
    
}
add_action("wpcf7_before_send_mail", "wpcf7_modify_this");

// Регистрируем хук и передаем название функции, 
// которая будет вносить изменения в выборку
add_action( 'pre_get_posts', 'sort_my_category_by_date' );
// Пишем саму функцию, которая внедрит нужную сортировку
function sort_my_category_by_date( $query ) {
    // Убеждаемся, что изменения не касаются админки
    // и что мы применяем сортировку именно к основной выборке постов 
    // (а не к виджетам, например)
    if ( ! is_admin() && $query->is_main_query() ) {
        // Изменяем сортировку только в пределах страницы определенной категории
        if ( is_category( $category_id ) ) {
            // Сортировать по полю "Дата"
            $query->set( 'orderby', 'date' );

            // Сортировать по возрастанию
            $query->set( 'order', 'ASC' );
        }		
    }
}


function single_info_kviz( $atts ) {
 
	$params = shortcode_atts( 
		array(
		    'id' => '',
			'title' => '',
		), 
		$atts 
	);
	
	$new_quiz = get_field('new_quiz', $params[ 'id' ]);
	
	$html = '';
    $html .= '
        <div class="calculation-v2 calculation--inpost" id="calculation--inpost__v2">
	        <div class="calculation__header">
  		        <div class="calculation__title-head">' . $params[ 'title' ] . '</div>
  		        <div class="calculation__info">
			        Исключительно для жителей 
			        <span class="desktop-element">Санкт-Петербурга и Ленобласти</span>
    		        <span class="mobile-element">СПб и ЛО</span>
  		        </div>
	        </div>
	        <div class="calculation__wrap calculation__wrap--inpost">
		        <div class="calculation__inner calculation__inner--inpost">
    ';
    
    foreach( $new_quiz as $key => $value ){
        $tab_class = '';
        if ($key > 0) {
            $tab_class = 'hidden';
        }
	    $html .= '<div class="calculation__tab calculation__tab__indx__'.($key+1).' '.$tab_class.'" data-question-indx="'.($key+1).'" data-question-id="'.$value['question']['value'].'">';
	        $html .= '<div class="calculation__content calculation__content--small">';
	            $html .= '<div class="calculation__title calculation__title--small"><span class="number hidden">'.($key+1).'. </span><span class=text>'.$value['question']['label'].'</span></div>';
	            $html .= '<div class="notice hidden"><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 0.5C8.02219 0.5 6.08879 1.08649 4.4443 2.1853C2.79981 3.28412 1.51809 4.8459 0.761209 6.67316C0.00433284 8.50042 -0.1937 10.5111 0.192152 12.4509C0.578004 14.3907 1.53041 16.1725 2.92894 17.5711C4.32746 18.9696 6.10929 19.922 8.0491 20.3078C9.98891 20.6937 11.9996 20.4957 13.8268 19.7388C15.6541 18.9819 17.2159 17.7002 18.3147 16.0557C19.4135 14.4112 20 12.4778 20 10.5C20 9.18678 19.7413 7.88642 19.2388 6.67316C18.7362 5.45991 17.9997 4.35752 17.0711 3.42893C16.1425 2.50035 15.0401 1.76375 13.8268 1.2612C12.6136 0.758658 11.3132 0.5 10 0.5ZM10 15.5C9.80222 15.5 9.60888 15.4413 9.44443 15.3315C9.27998 15.2216 9.15181 15.0654 9.07612 14.8827C9.00044 14.7 8.98063 14.4989 9.01922 14.3049C9.0578 14.1109 9.15304 13.9327 9.2929 13.7929C9.43275 13.653 9.61093 13.5578 9.80491 13.5192C9.99889 13.4806 10.2 13.5004 10.3827 13.5761C10.5654 13.6518 10.7216 13.78 10.8315 13.9444C10.9414 14.1089 11 14.3022 11 14.5C11 14.7652 10.8946 15.0196 10.7071 15.2071C10.5196 15.3946 10.2652 15.5 10 15.5ZM11 11.5C11 11.7652 10.8946 12.0196 10.7071 12.2071C10.5196 12.3946 10.2652 12.5 10 12.5C9.73479 12.5 9.48043 12.3946 9.2929 12.2071C9.10536 12.0196 9 11.7652 9 11.5V6.5C9 6.23478 9.10536 5.98043 9.2929 5.79289C9.48043 5.60536 9.73479 5.5 10 5.5C10.2652 5.5 10.5196 5.60536 10.7071 5.79289C10.8946 5.98043 11 6.23478 11 6.5V11.5Z" fill="white"/></svg><span>Пожалуйста, ответьте на данный вопрос</span></div>';
	        $html .= '</div>';
	        foreach( $value['answers'] as $answer_key => $answer_value ){
	            if ($value['type_answer'] == 'range_slider') {
    	                $html .= '
    	                    <div class="answer_description"><p>'.$answer_value['answer_option_summ_range_slider']['answer_description'].'</p></div>
	                        <div class="range-slider_cnt">
                                <div class="range-slider ">
                                    <input type="text" value="0" class="js-range-slider-value" />
                                    <input type="text" class="js-range-slider hidden" name="summ-value" value="'.$answer_value['answer_option_summ_range_slider']['range_slider_from'].'" data-min="'.$answer_value['answer_option_summ_range_slider']['range_slider_min'].'" data-max="'.$answer_value['answer_option_summ_range_slider']['range_slider_max'].'" data-from="'.$answer_value['answer_option_summ_range_slider']['range_slider_from'].'" data-step="'.$answer_value['answer_option_summ_range_slider']['range_slider_step'].'" />
                                </div>
                                <div class="showcase__mark__cnt">
                                    <span class="showcase__mark showcase__mark_0" style="left: 24px;">Менее 50&nbsp;000 руб.</span>
                                    <span class="showcase__mark showcase__mark_0 mobile" style="left: 24px;">50≤&nbsp;т.р.</span>
                                    <span class="showcase__mark showcase__mark_1" style="left: calc(100% - 130px);">Более 3&nbsp;000&nbsp;000 руб.</span>
                                    <span class="showcase__mark showcase__mark_1 mobile" style="left: calc(100% - 64px);"> ≥3&nbsp;млн.р.</span>
                                </div>
                            </div>
    	                ';
	                }
	        }
	        $randim_id_first = rand(1, 1000000);
	        $html .= '<div class="calculation__variants" id="question_'.$key.'_'.$randim_id_first.'">';
	            foreach( $value['answers'] as $answer_key => $answer_value ){
	                /*print_r($answer_value);*/
	                $answer_option_key = 'answer_option_'.$value['question']['value'];
	                if ($value['type_answer'] != 'range_slider') {
	                    $randim_id = rand(1, 1000000);
	                    if ($answer_value[$answer_option_key]['label'] == 'Менее 300 000 руб.') {
	                        $difficult_answer_class = 'difficult_answer';
	                    } else {
	                        $difficult_answer_class = '';
	                    }
	                    
	                    if ( ($value['question']['value'] == 'summ' && $answer_value[$answer_option_key]['value'] == '300K') || ($value['question']['value'] == 'summ' && $answer_value[$answer_option_key]['value'] == 'donot_know') ) {
	                        $current_label_id = '';
	                    } else {
	                        $current_label_id = 'id="label_question_'.$value['question']['value'].'_'.$key.'_'.$answer_key.'_'.$randim_id.'"';
	                    }
	                    
    	                $html .= '
        	                <div class="'.$value['type_answer'].' calculation__'.$value['type_answer'].' calculation__'.$value['type_answer'].'--small '.$difficult_answer_class.'">
                                <label '.$current_label_id.' for="answer_'.$key.'_'.$answer_key.'_'.$randim_id.'" class="'.$value['type_answer'].'__label '.$value['type_answer'].'__label--small question_'.$value['question']['value'].' question_'.$value['question']['value'].'_'.$answer_value[$answer_option_key]['value'].'" data-value="'.$answer_value[$answer_option_key]['value'].'">'.$answer_value[$answer_option_key]['label'].'</label>
                                <input id="answer_'.$key.'_'.$answer_key.'_'.$randim_id.'" class="'.$value['type_answer'].'__default" type="'.$value['type_answer'].'" name="'.$value['question']['value'].'" value="'.$answer_value[$answer_option_key]['label'].'">
                                <span class="'.$value['type_answer'].'__new '.$value['type_answer'].'__new--accent"></span>
                            </div>
    	                ';    
	                } else {
	                    $html .= '
                            <div class="calculation__checkbox checkbox checkbox_donot_know">
                                <label class="checkbox_label" for="calc_1_7">Затрудняюсь ответить</label>
                                <input class="checkbox__default" id="calc_1_7" type="checkbox" name="summ" value="summ_not_selected">
                                <span class="checkbox__new checkbox__new--accent"></span>
                            </div>
                            <div class="calculation__checkbox checkbox checkbox_donot_know checkbox_donot_know__cnt hidden">
                                <label class="checkbox_label" for="calc_1_8">'.$answer_value['answer_option_summ_range_slider']['range_slider_from'].' рублей</label>
                                <input class="checkbox__default" id="calc_1_8" type="checkbox" checked="checked" name="summ" value="summ_selected">
                                <span class="checkbox__new checkbox__new--accent"></span>
                            </div>
    	                ';
	                }
	            }
	        $html .= '</div>';
        $html .= '</div>';
    }
    
    $html .='
        		</div>
		        <div class="calculation__slides calculation__slides--inpost">
			        <span class="calculation__slide--current">1</span> из <span class="calculation__slide--summ">'.($key+1).'</span>
		        </div>
		        <div class="calculation__nav">
			        <a class="btn calculation__btn calculation__btn--prev disabled" formaction="" id="btn-prev-post">
				        <span>Назад</span>
			        </a>
			        <a class="btn calculation__btn calculation__btn--next"  formaction="" id="btn-next-post">
				        <span>Ответить</span>
			        </a>
			        <a class="btn calculation__btn calculation__btn--form hidden" formaction="" data-name="SMS-32 Информационные статьи" data-id="btn-uznat-rezultat-post" data-sms="36" id="btn-calc-modal-post">
				        <span>Ответить</span>
			        </a>
                </div>
	        </div>
        </div>
    ';
	return $html;
}
 
add_shortcode( 'quiz_for_articles', 'single_info_kviz' );




add_filter( 'manage_'.'bunus-survey'.'_posts_columns', 'add_views_column_bunus_survey', 4 );
function add_views_column_bunus_survey( $columns ){
	$num = 2; // после какой по счету колонки вставлять новые

	$new_columns = array(
		'property_1' => 'Была ли эта страница полезна для вас?',
		'property_2' => 'Вы уже пользовались нашей бонусной программой?',
		'property_3' => 'Почему воспользовались бонусной программой?',
	);

	return array_slice( $columns, 0, $num ) + $new_columns + array_slice( $columns, $num );
}

add_action('manage_'.'bunus-survey'.'_posts_custom_column', 'fill_views_column_bunus_survey', 5, 2 );
function fill_views_column_bunus_survey( $colname, $post_id ){
	if( $colname === 'property_1' ){
	    echo get_field('property_1', $post_id);
	}
	if( $colname === 'property_2' ){
	    echo get_field('property_2', $post_id);
	}
	if( $colname === 'property_3' ){
	    echo get_field('property_3', $post_id);
	}
}


// создаем новую колонку (Шорткод для квиза в статье)
add_filter( 'manage_'.'kviz'.'_posts_columns', 'add_views_column_kviz', 4 );
function add_views_column_kviz( $columns ){
	$num = 2; // после какой по счету колонки вставлять новые

	$new_columns = array(
		'shortcode' => 'Шорткод',
	);

	return array_slice( $columns, 0, $num ) + $new_columns + array_slice( $columns, $num );
}

// заполняем колонку данными (Шорткод для квиза в статье)
// wp-admin/includes/class-wp-posts-list-table.php
add_action('manage_'.'kviz'.'_posts_custom_column', 'fill_views_column_kviz', 5, 2 );
function fill_views_column_kviz( $colname, $post_id ){
	if( $colname === 'shortcode' ){
	    echo '[quiz_for_articles id="'.$post_id.'" title="___Заголовок__"]';
		/*echo get_post_meta( $post_id, 'views', 1 ); */
	}
}




// создаем новую колонку (Разрешено ли комментирование статьи)
add_filter( 'manage_'.'info'.'_posts_columns', 'add_views_column_info', 4 );
function add_views_column_info( $columns ){
	$num = 4; // после какой по счету колонки вставлять новые

	$new_columns = array(
		'allow_comment' => 'Комментарий',
		'sticky' => 'Опрос',
	);

	return array_slice( $columns, 0, $num ) + $new_columns + array_slice( $columns, $num );
}

// заполняем колонку данными (Разрешено ли комментирование статьи)
// wp-admin/includes/class-wp-posts-list-table.php
add_action('manage_'.'info'.'_posts_custom_column', 'fill_views_column_info', 5, 2 );
function fill_views_column_info( $colname, $post_id ){
	if( $colname === 'allow_comment' ){
	    $responce = '';
	    if (comments_open($post_id)) {
	        $responce = '<span style="color: green">Да</span>';
	    } else {
	        $responce = '<span style="color: red">Нет</span>';
	    }
	    echo $responce;
	}
	if( $colname === 'sticky' ){
	    $responce = '';
	    $sticky = get_field('sticky', $post_id);
	    if (!empty($sticky)) {
	        $responce = '<span>'.$sticky['label'].'</span>';
	    } else {
	        $responce = '<span>Онлайн калькулятор</span>';
	    }
	    echo $responce;
	}
}

add_action('wp_ajax_bonus_survey', 'true_add_ajax_bonus_survey');
add_action('wp_ajax_nopriv_bonus_survey', 'true_add_ajax_bonus_survey');
function true_add_ajax_bonus_survey(){
    $property_1 = $_POST['property_1'];
    $property_2 = $_POST['property_2'];
    $property_3 = $_POST['property_3'];
    $current_date = date("m.d.y-g:i"); 
    $id = wp_insert_post(array(
        'post_title' => 'ОПРОС от '.$current_date,
        'post_type' => 'bunus-survey',
        'post_content' => ''
    ));
    add_post_meta($id, 'property_1', $property_1);
    add_post_meta($id, 'property_2', $property_2);
    add_post_meta($id, 'property_3', $property_3);
    echo json_encode(array('post_id'=>$id, 'property_1'=>$property_1, 'property_2'=>$property_2, 'property_2'=>$property_3 ));
    die();
}

// Обработчик формы добавления комментария на странице одной статьи
function true_add_ajax_comment(){
    global $wpdb;
    $comment_post_ID = isset($_POST['comment_post_ID']) ? (int) $_POST['comment_post_ID'] : 0;
 
    $post = get_post($comment_post_ID);
 
    if ( empty($post->comment_status) ) {
        do_action('comment_id_not_found', $comment_post_ID);
        exit;
    }
 
    $status = get_post_status($post);
 
    $status_obj = get_post_status_object($status);
 
    /*
     * различные проверки комментария
     */
    if ( !comments_open($comment_post_ID) ) {
        do_action('comment_closed', $comment_post_ID);
        wp_die( __('Sorry, comments are closed for this item.') );
    } elseif ( 'trash' == $status ) {
        do_action('comment_on_trash', $comment_post_ID);
        exit;
    } elseif ( !$status_obj->public && !$status_obj->private ) {
        do_action('comment_on_draft', $comment_post_ID);
        exit;
    } elseif ( post_password_required($comment_post_ID) ) {
        do_action('comment_on_password_protected', $comment_post_ID);
        exit;
    } else {
        do_action('pre_comment_on_post', $comment_post_ID);
    }
 
    $comment_author       = ( isset($_POST['author']) )  ? trim(strip_tags($_POST['author'])) : null;
    $comment_author_email = ( isset($_POST['email']) )   ? trim($_POST['email']) : null;
    $comment_author_url   = ( isset($_POST['url']) )     ? trim($_POST['url']) : null;
    $comment_content      = ( isset($_POST['comment']) ) ? trim($_POST['comment']) : null;
 
    /* 
     * проверяем, залогинен ли пользователь
     */
    $user = wp_get_current_user();
    if ( $user->exists() ) {
        if ( empty( $user->display_name ) )
            $user->display_name=$user->user_login;
        $comment_author       = $wpdb->escape($user->display_name);
        $comment_author_email = $wpdb->escape($user->user_email);
        $comment_author_url   = $wpdb->escape($user->user_url);
        $user_ID = get_current_user_id();
        if ( current_user_can('unfiltered_html') ) {
            if ( wp_create_nonce('unfiltered-html-comment_' . $comment_post_ID) != $_POST['_wp_unfiltered_html_comment'] ) {
                kses_remove_filters(); // start with a clean slate
                kses_init_filters(); // set up the filters
            }
        }
    } else {
        if ( get_option('comment_registration') || 'private' == $status )
            wp_die( 'Вы должны зарегистрироваться или войти, чтобы оставлять комментарии.' );
    }
 
    $comment_type = '';
 
    /* 
     * проверяем, заполнил ли пользователь все необходимые поля
     */
    if ( get_option('require_name_email') && !$user->exists() ) {
        if ( 6 > strlen($comment_author_email) || '' == $comment_author )
            wp_die( 'Ошибка: заполните необходимые поля (Имя, Email).' );
        elseif ( !is_email($comment_author_email))
            wp_die( 'Ошибка: введенный вами email некорректный.' );
    }
 
    if ( '' == trim($comment_content) ||  '<p><br></p>' == $comment_content )
        wp_die( 'Вы забыли про комментарий.' );
 
    /* 
     * добавляем новый коммент и сразу же обращаемся к нему
     */
    $comment_parent = isset($_POST['comment_parent']) ? absint($_POST['comment_parent']) : 0;
    $commentdata = compact('comment_post_ID', 'comment_author', 'comment_author_email', 'comment_author_url', 'comment_content', 'comment_type', 'comment_parent', 'user_ID');
    $comment_id = wp_new_comment( $commentdata );
    $comment = get_comment($comment_id);
 
    /*
     * выставляем кукисы
     */
    do_action('set_comment_cookies', $comment, $user);
 
    /*
     * вложенность комментариев
     */
    $comment_depth = 1;
    while($comment_parent){
        $comment_depth++;
        $parent_comment = get_comment($comment_parent);
        $comment_parent = $parent_comment->comment_parent;
    }
 
    $GLOBALS['comment'] = $comment;
    $GLOBALS['comment_depth'] = $comment_depth;
    /*
     * ниже идет шаблон нового комментария, вы можете настроить его для себя,
     * а можете воспользоваться функцией(которая скорее всего уже есть в теме) для его вывода
     */
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
        <div id="comment-<?php comment_ID(); ?>">
            <div class="comment-author vcard">
                <?php echo get_avatar( $comment, 40 ); ?>
                <cite class="fn"><?php echo get_comment_author_link(); ?></cite>
            </div>
            <?php if ( $comment->comment_approved == '0' ) : ?>
                <em class="comment-awaiting-moderation">Комментарий отправлен на проверку</em>
                <br />
            <?php endif; ?>
            <div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
                <?php printf('%1$s в %2$s', get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link('ред.', ' ' );  ?>
            </div>
            <div class="comment-body"><?php comment_text(); ?></div>
        </div>
    </li>
    <?php
    die();
}
 
add_action('wp_ajax_ajaxcomments', 'true_add_ajax_comment'); // wp_ajax_{значение параметра action}
add_action('wp_ajax_nopriv_ajaxcomments', 'true_add_ajax_comment'); // wp_ajax_nopriv_{значение п



function do_excerpt($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if (count($words) > $word_limit)
	array_pop($words);
	echo implode(' ', $words).' ...';
}


add_action( 'wp_ajax_filter_int_action', 'filter_int_action_ajax' );
add_action( 'wp_ajax_nopriv_filter_int_action', 'filter_int_action_ajax' );
function filter_int_action_ajax(){
/*
    $dela_posts_params = array(
        'post_type' => 'dela',
        'post_status' => 'draft',
        'numberposts' => -1,
        'orderby' => 'number',
        'order' => 'DESC',
    );
*/
    if ( $_POST['filter_option_type_creditors'] != '' || $_POST['filter_option_creditors'] != '' || $_POST['filter_option_reviews'] != '' || $_POST['filter_option_int_category'] != '' || $_POST['filter_option_min_summ'] != '' || $_POST['filter_option_max_summ'] != '') {
        //$dela_posts_params['meta_query'] = array();
        $dela_posts_params = array(
            'post_type' => 'dela',
            'post_status' => 'draft',
            'numberposts' => 500,
            'orderby' => 'number',
            'order' => 'DESC',
            'meta_query' => array()
        );
    } else {
        $dela_posts_params = array(
            'post_type' => 'dela',
            'post_status' => 'any',
            'orderby' => 'number',
            'order' => 'DESC',
            'numberposts' => 500
        );
    }

    $param_srt = '';
    if ($_POST['filter_option_type_creditors'] != '') {
        if ($param_srt != '') {
            $param_srt .= '&';
        }
        $param_srt .= 'filter_option_type_creditors='.$_POST['filter_option_type_creditors'];
        $dela_posts_params['meta_query'][] = array(
            'key' => 'type_creditors', 
            'value'   => $_POST['filter_option_type_creditors'], 
            'compare' => 'LIKE'
        );
    }
    if ($_POST['filter_option_creditors'] != '') {
        if ($param_srt != '') {
            $param_srt .= '&';
        }
        $param_srt .= 'filter_option_creditors='.$_POST['filter_option_creditors'];
        $dela_posts_params['meta_query'][] = array(
            'key' => 'creditors', 
            'value'   => $_POST['filter_option_creditors'], 
            'compare' => 'LIKE'
        );
    }
    if ($_POST['filter_option_reviews'] != '') {
        if ($param_srt != '') {
            $param_srt .= '&';
        }
        $param_srt .= 'filter_option_reviews='.$_POST['filter_option_reviews'];
        if ($_POST['filter_option_reviews'] == 'Фотоотзывы') {
            $dela_posts_params['meta_query'][] = array(
                'key' => 'otzyv', 
                'value'   => 'fpa.ru', 
                'compare' => 'LIKE'
            );
        } else {
            $dela_posts_params['meta_query'][] = array(
                'key' => 'otzyv', 
                'value'   => 'fpa.ru', 
                'compare' => 'NOT LIKE'
            );
        }
        
    }
    if ($_POST['filter_option_int_category'] != '') {
        if ($param_srt != '') {
            $param_srt .= '&';
        }
        $param_srt .= 'filter_option_int_category='.$_POST['filter_option_int_category'];
        
        if ($_POST['filter_option_int_category'] != 'Все дела') {
            $dela_posts_params['meta_query'][] = array(
                'key' => 'int_category', 
                'value'   => $_POST['filter_option_int_category'], 
                'compare' => 'LIKE'
            );    
        } else {
            $dela_posts_params['meta_query'][] = array(
                'key' => 'int_category', 
                'value'   => '', 
                'compare' => '!='
            );
        }
        
        
    }
    if ($_POST['filter_option_min_summ'] != '' && $_POST['filter_option_max_summ'] != '') {
        /*
        if ($param_srt != '') {
            $param_srt .= '&';
        }
        $param_srt .= 'filter_option_int_category='.$_POST['filter_option_int_category'];
        */
        $dela_posts_params['meta_query'][] = array(
            'key' => 'summ', 
            'value' => array($_POST['filter_option_min_summ'], $_POST['filter_option_max_summ']), 
            'compare' => 'BETWEEN',
            'type' => 'NUMERIC'
        );
    }
    

    
    //$dela_posts = get_posts($dela_posts_params);
    
    //$dela_posts_array_json = json_encode($dela_posts);
    //echo $dela_posts_array_json;
    
    $dela_posts = get_posts($dela_posts_params);

    $dela_posts_array = array();
    if(!empty($dela_posts)) {
        foreach($dela_posts as $key => $value) {
            $dela_posts_array[] = array(
                "number" => get_field("number", $value->ID),
                "title" => get_field("title", $value->ID),
                "summ" => get_field("summ", $value->ID),
                "original_court_ruling" => get_field("original_court_ruling", $value->ID),
                "debtor" => get_field("debtor", $value->ID),
                "case_number" => get_field("case_number", $value->ID),
                "court_file_file" => get_field("court_file_file", $value->ID),
                "result" => get_field("result", $value->ID),
                "period" => get_field("period", $value->ID),
                "period2" => get_field("period2", $value->ID),
                "arbitration_manager" => get_field("arbitration_manager", $value->ID),
                "au_link" => get_field("au_link", $value->ID),
                "lawyer" => get_field("lawyer_name", $value->ID),
                "lawyer_link" => get_field("lawyer_link", $value->ID),
                "creditors" => get_field("creditors", $value->ID),
                "current_date" => get_field("current_date", $value->ID),
                "type_creditors" => get_field("type_creditors", $value->ID),
                "bank_type" => get_field("bank_type", $value->ID),
                "otzyv" => get_field("otzyv", $value->ID),
                "type_otzyv" => get_field("type_otzyv", $value->ID),
                "int_text" => get_field("int_text", $value->ID),
                "int_category" => get_field("int_category", $value->ID)
            );
        }    
    }

    //$dela_posts_params_json = json_encode($dela_posts_params);
    //$dela_posts_json = json_encode($dela_posts);
    $dela_posts_array_json = json_encode($dela_posts_array);
	echo $dela_posts_array_json;

	die; // даём понять, что обработчик закончил выполнение
}



function the_truncated_post($symbol_amount) {
	$filtered = strip_tags( preg_replace('@<style[^>]*?>.*?</style>@si', '', preg_replace('@<script[^>]*?>.*?</script>@si', '', apply_filters('the_content', get_the_content()))) );
	echo substr($filtered, 0, strrpos(substr($filtered, 0, $symbol_amount), ' ')) . '...' . ' <a href="'. get_permalink($post) . '">Подробнее</a>';
}


add_filter( 'user_contactmethods', 'add_extra_user_fields' );

function add_extra_user_fields( $method ) {
	$custom_contact = [
		'contact_phone_number' => __( 'Контактный телефон' ),
		'residing_place'  => __( 'Место жительства' ),
		'whatsapp' => __( 'WhatsApp' ),
        'birth_date_day' => __( 'Дата рождения (День)' ),
        'birth_date_month' => __( 'Дата рождения (Месяц)' ),
        'birth_date_year' => __( 'Дата рождения (Год)' ),
		'middle_name' => __( 'Отчество' ),
		'user_picture' => __( 'Аватарка' ),
		'google_account_id' => __( 'ID Google аккаунта ' ),
		'secret_pwd' => __( 'Secret Phrase' ),
	];
	$method = array_merge( $method, $custom_contact );
	
	unset($method['wikipedia']);
	unset($method['youtube']);
	unset($method['twitter']);
	unset($method['tumblr']);
	unset($method['soundcloud']);
	unset($method['pinterest']);
	unset($method['myspace']);
	unset($method['linkedin']);
	unset($method['instagram']);
	unset($method['facebook']);
	unset($method['whatsapp']);
    //unset($methods['jabber']);
	
	return $method;
}

function add_profile_secure_fields($user) {
 	echo '<h3>Разделы Личного кабинета </h3>';
 	echo '<table class="form-table">';
	$personal_data_section = ( $personal_data_section = get_the_author_meta( 'personal_data_section', $user->ID ) ) ? $personal_data_section : 'no';
 	echo '<tr><th><label for="personal_data_section">Раздел "Персональные данные</label></th>
 		<td><ul>
 			<li><label><input value="yes" name="personal_data_section"' . checked( $personal_data_section, 'yes', false ) . ' type="radio" /> Включено</label></li>
 			<li><label><input value="no" name="personal_data_section"' . checked( $personal_data_section, 'no', false ) . ' type="radio" /> Отключено</label></li>
 		</ul></td>
 	</tr>';
 	$feedback_section = ( $feedback_section = get_the_author_meta( 'feedback_section', $user->ID ) ) ? $feedback_section : 'no';
 	echo '<tr><th><label for="feedback_section">Раздел "Персональные данные</label></th>
 		<td><ul>
 			<li><label><input value="yes" name="feedback_section"' . checked( $feedback_section, 'yes', false ) . ' type="radio" /> Включено</label></li>
 			<li><label><input value="no" name="feedback_section"' . checked( $feedback_section, 'no', false ) . ' type="radio" /> Отключено</label></li>
 		</ul></td>
 	</tr>';
 	$tracking_procedure_section= ( $tracking_procedure_section = get_the_author_meta( 'tracking_procedure_section', $user->ID ) ) ? $tracking_procedure_section : 'no';
 	echo '<tr><th><label for="tracking_procedure_section">Раздел "Отслеживание процедуры"</label></th>
 		<td><ul>
 			<li><label><input value="yes" name="tracking_procedure_section"' . checked( $tracking_procedure_section, 'yes', false ) . ' type="radio" /> Включено</label></li>
 			<li><label><input value="no" name="tracking_procedure_section"' . checked( $tracking_procedure_section, 'no', false ) . ' type="radio" /> Отключено</label></li>
 		</ul></td>
 	</tr>';
 	$payments_section = ( $payments_section = get_the_author_meta( 'payments_section', $user->ID ) ) ? $payments_section : 'no';
 	echo '<tr><th><label for="payments_section">Раздел "Персональные данные</label></th>
 		<td><ul>
 			<li><label><input value="yes" name="payments_section"' . checked( $payments_section, 'yes', false ) . ' type="radio" /> Включено</label></li>
 			<li><label><input value="no" name="payments_section"' . checked( $payments_section, 'no', false ) . ' type="radio" /> Отключено</label></li>
 		</ul></td>
 	</tr>';
 	echo '</table>';
}
add_action( 'show_user_profile', 'add_profile_secure_fields' );
add_action( 'edit_user_profile', 'add_profile_secure_fields' );

function save_profile_secure_fields($user_id) {
	update_user_meta($user_id, 'personal_data_section', sanitize_text_field($_POST['personal_data_section']));
	update_user_meta($user_id, 'feedback_section', sanitize_text_field($_POST['feedback_section']));
	update_user_meta($user_id, 'tracking_procedure_section', sanitize_text_field($_POST['tracking_procedure_section']));
	update_user_meta($user_id, 'payments_section', sanitize_text_field($_POST['payments_section']));
}
add_action('personal_options_update', 'save_profile_secure_fields');
add_action('edit_user_profile_update', 'save_profile_secure_fields');




function js_variables(){
    $variables = array (
        'ajax_url' => admin_url('admin-ajax.php'),
		'is_mobile' => wp_is_mobile()
    );
    echo(
        '<script type="text/javascript">window.wp_data = '.json_encode($variables).';</script>'
    );
}
add_action('wp_head','js_variables');

// Ajax-хук для создания нового пользователя по данным полученным из Google API
function add_new_user_google(){
    $account_id = $_POST['account_id'];
    $username = $_POST['username'];
    $account_fullname = $_POST['account_fullname'];
    $account_firstname = $_POST['account_firstname'];
    $account_lastname = $_POST['account_lastname'];
    $account_image_url = $_POST['account_image_url'];
    $account_email = $_POST['account_email'];

    if (!email_exists($account_email)) {
        /* Создаем нового пользователя */
        $random_password = wp_generate_password(12);
        $user_id = wp_create_user($username, $random_password, $account_email);
        $user_id = wp_update_user([
            'ID' => $user_id,
            'display_name' => $account_fullname,
            'first_name' => $account_firstname,
            'last_name' => $account_lastname
        ]);
    	update_user_meta($user_id, 'user_picture', $account_image_url);
    	update_user_meta($user_id, 'google_account_id', $account_id);
    	update_user_meta($user_id, 'secret_pwd', $random_password);
    	update_user_meta($user_id, 'personal_data_section', sanitize_text_field("yes"));
    	update_user_meta($user_id, 'feedback_section', sanitize_text_field("no"));
    	update_user_meta($user_id, 'tracking_procedure_section', sanitize_text_field("no"));
    	update_user_meta($user_id, 'payments_section', sanitize_text_field("no"));
    	
    	/* Отправляем письмо с данными к ЛК*/
    	$support_name = "Администратор сайта 'Финансово-Правовой альянс'";
        $support_email = "info@fpa.ru";
        $message = '
            <p>Здраствуйте, '.$account_firstname." ".$account_lastname.'</p>
            <p>Вы успешно зарегистрировались на сейте компании ООО "Финансово-Правовой альянс".</p>
            <p>Ваши данные для входа в личный кабинет:</p>
            <p><b>Ссылка на ЛК сайта:</b> https://fpa.ru/lichnyj-kabinet/</p>
            <p><b>Имя пользователя:</b> '.$username.'</p>
            <p><b>Пароль:</b> '.$random_password.'</p>
        ';
        $to = $account_email;
        $subject = "Вы зарегистрировалист на сайте - fpa.ru [Финансово-Правовой альянс]";
        $headers = 'From: '. $support_email . "\r\n" .
        'Reply-To: ' . $support_email . "\r\n";
        $sent = wp_mail($to, $subject, strip_tags($message), $headers);
        /* Авторизуем пользователя */
        $credentials = array(
        	'user_login'    => $username,
        	'user_password' => $random_password,
        	'remember'      => true,
        );
        $current_user = wp_signon($credentials, true);
        if ( is_wp_error($current_user) ) {
            echo $current_user->get_error_message();
        }
    } else {
        /* Авторизуем пользователя */
        $current_userid = email_exists($account_email);
        $current_user = get_user_by('id', $current_userid);
        $current_password = get_user_meta($current_userid, 'secret_pwd', true);
        $credentials = array(
        	'user_login'    => $current_user->user_login,
        	'user_password' => $current_password,
        	'remember'      => true,
        );
        $current_user = wp_signon($credentials);
        if ( is_wp_error($current_user) ) {
            echo $current_user->get_error_message();
        }
    }
    
	die();
}
add_action('wp_ajax_add_new_user_google', 'add_new_user_google');
add_action('wp_ajax_nopriv_add_new_user_google', 'add_new_user_google');

// Ajax-хук для авторизации пользователя по логину и паролю
function signin_user(){
    $email = $_POST['form_fields'][0]['value'];
    $password = $_POST['form_fields'][1]['value'];
    $credentials = array(
    	'user_login'    => $email,
    	'user_password' => $password,
    	'remember'      => true,
    );
    $current_user = wp_signon($credentials, true);
    if (is_wp_error($current_user)){
        echo json_encode(array('loggedin' => false, 'message' => $current_user->get_error_message()));
    } else {
        echo json_encode(array('loggedin'=>true, 'message'=>__('Вы успешно авторизированы. ')));
    }

    die();
}
add_action('wp_ajax_signin_user', 'signin_user');
add_action('wp_ajax_nopriv_signin_user', 'signin_user');

// Ajax-хук для восстановления пароля пользователя
function recovery_password(){
    $email = $_POST['form_fields'][0]['value'];
    if (email_exists($email)) {
        $current_userid = email_exists($email);
        $current_user = get_user_by('id', $current_userid);
        $full_name = $current_user->display_name;
        $username = $current_user->user_login;
        $current_password = get_user_meta($current_userid, 'secret_pwd', true);
        /* Отправляем письмо с данными к ЛК*/
    	$support_name = "Администратор сайта 'Финансово-Правовой альянс'";
        $support_email = "info@fpa.ru";
        $message = '
            <p>Здраствуйте, '.$full_name.'</p>
            <p>Вы запросили восстановление доступа к Личному кабинету на сайте компании ООО "Финансово-Правовой альянс".</p>
            <p>Ваши данные для входа в личный кабинет:</p>
            <p><b>Ссылка на ЛК сайта:</b> https://fpa.ru/lichnyj-kabinet/</p>
            <p><b>Имя пользователя:</b> '.$username.'</p>
            <p><b>Пароль:</b> '.$current_password.'</p>
        ';
        $to = $email;
        $subject = "Восстановление пароля на сайте - fpa.ru [Финансово-Правовой альянс]";
        $headers = 'From: '. $support_email . "\r\n" .
        'Reply-To: ' . $support_email . "\r\n";
        $sent = wp_mail($to, $subject, strip_tags($message), $headers);
        
        if ($sent) {
            echo json_encode(array('loggedin'=>true, 'message'=>__('Данные для входа в Личный кабинет отправлены на Ваш E-mail.')));
        }
    } else {
       echo json_encode(array('loggedin'=>false, 'message'=>__('Пользователя с таким E-mail не существует, попробуйте повторить операцию позже.'))); 
    }
    
    die();
}
add_action('wp_ajax_recovery_password', 'recovery_password');
add_action('wp_ajax_nopriv_recovery_password', 'recovery_password');

// Ajax-хук для обновления данных профиля пользователя
function update_profile_fields(){
    $first_name = $_POST['form_fields'][0]['value'];
    $last_name = $_POST['form_fields'][1]['value'];
    $middle_name = $_POST['form_fields'][2]['value'];
    $birth_date_day = $_POST['form_fields'][3]['value'];
    $birth_date_month = $_POST['form_fields'][4]['value'];
    $birth_date_year = $_POST['form_fields'][5]['value'];
    $contact_phone_number = $_POST['form_fields'][6]['value'];
    $email = $_POST['form_fields'][7]['value'];
    $residing_place = $_POST['form_fields'][8]['value'];
    $password = $_POST['form_fields'][9]['value'];
    $repeat_password = $_POST['form_fields'][10]['value'];

    $message = '';

    $current_user = wp_get_current_user();

    if ($first_name != '') {
        $user_id = wp_update_user([
            'ID' => $current_user->ID,
            'first_name' => $first_name
        ]);
    }
    if ($last_name != '') {
        $user_id = wp_update_user([
            'ID' => $current_user->ID,
            'last_name' => $last_name
        ]);
    }
    if ($first_name != '' && $last_name != '') {
        $user_id = wp_update_user([
            'ID' => $current_user->ID,
            'display_name' => $first_name." ".$last_name
        ]);
    }
    if ($middle_name != '') {
        update_user_meta($current_user->ID, 'middle_name', $middle_name);
    }
    if ($birth_date_day != '') {
        update_user_meta($current_user->ID, 'birth_date_day', $birth_date_day);
    }
    if ($birth_date_month != '') {
        update_user_meta($current_user->ID, 'birth_date_month', $birth_date_month);
    }
    if ($birth_date_year != '') {
        update_user_meta($current_user->ID, 'birth_date_year', $birth_date_year);
    }
    if ($contact_phone_number != '') {
        update_user_meta($current_user->ID, 'contact_phone_number', $contact_phone_number);
    }
    if ($residing_place != '') {
        update_user_meta($current_user->ID, 'residing_place', $residing_place);
    }
    if ($password != '' && $repeat_password != '') {
        if ($password == $repeat_password) {
            wp_set_password($repeat_password, $current_user->ID);
            update_user_meta($current_user->ID, 'secret_pwd', $repeat_password);
            
            /* Отправляем письмо с данными к ЛК*/
        	$support_name = "Администратор сайта 'Финансово-Правовой альянс'";
            $support_email = "info@fpa.ru";
            $mail_message = '
                <p>Здраствуйте, '.$first_name." ".$last_name.'</p>
                <p>Вы изменили пароль для входа в Личный кабинет на сайте компании ООО "Финансово-Правовой альянс".</p>
                <p>Ваши данные для входа в Личный кабинет:</p>
                <p><b>Ссылка на ЛК сайта:</b> https://fpa.ru/lichnyj-kabinet/</p>
                <p><b>Имя пользователя:</b> '.$current_user->user_login.'</p>
                <p><b>Пароль:</b> '.$repeat_password.'</p>
            ';
            $to = $current_user->user_email;
            $subject = "Изменение пароля на сайте - fpa.ru [Финансово-Правовой альянс]";
            $headers = 'From: '. $support_email . "\r\n" .
            'Reply-To: ' . $support_email . "\r\n";
            $sent = wp_mail($to, $subject, strip_tags($mail_message), $headers);
            if ($sent) {
                $message = 'Письмо с новым паролем отправлено успешно!</br>';
            } else {
                $message = 'Письмо с новым паролем не отправлено!</br>';
            }
        } else {
            $message = 'Пароль не удалось изменить, введенные Вами пароли не совпадают!</br>';
        }
    }
    
    if ($message != '') {
        echo json_encode(array('loggedin'=>false, 'message'=> $message)); 
    } else {
        echo json_encode(array('loggedin'=>true, 'message'=>__('Все данные успешно сохранены!')));
    }

    die();
}
add_action('wp_ajax_update_profile_fields', 'update_profile_fields');
add_action('wp_ajax_nopriv_update_profile_fields', 'update_profile_fields');

// Ajax-хук для вывода отфилтрованых отзывов
function get_filter_reviews(){
    /*

        params":[["range_summ","0","700000000"],
        ["age","to_30_years"],["work_type","all"],["problem","all"],["debt","all"],["creditors","all"]],"photo_reviews":"","video_reviews":""}
    */
    $tag_arr = array();
    foreach ($_POST['params'] as $key => $value) {
        if ($value[0] == 'range_summ') {
            /*
            up_to_300000
            from_300000
            from_500000
            from_1000000
            from_3000000
            from_5000000
            */
            if ($value[1] == '300000' && $value[2] == '500000') {
                array_push($tag_arr, 'debt_300_500');
            }
            if ($value[1] == '500000' && $value[2] == '1000000') {
                array_push($tag_arr, 'debt_500_1K');
            }
            if ($value[1] == '1000000' && $value[2] == '3000000') {
                array_push($tag_arr, 'debt_1K_3K');
            }
            if ($value[1] == '3000000' && $value[2] == '700000000') {
                array_push($tag_arr, 'debt_3K');
            }
        } else {
            if ($value[1] != 'all') {
                array_push($tag_arr, $value[1]);    
            }
        }
    }
    if (!empty($tag_arr)) {
        $args_video_reviews = ([
            'posts_per_page' => '21',
            'posts_per_archive_page' => '21',
            'post_type'   => 'otzyvy',
            'post_status' => 'publish',
            'orderby'   => array(
                'date' =>'DESC',
            ),
            'tax_query'   => [
                [
                    'taxonomy'  => 'types',
                    'field'     => 'slug',
                    'terms'     => 'video'
                ], [
                    'taxonomy' => 'mark',
                    'field' => 'slug',
                    'terms' => $tag_arr,
                    'operator' => 'AND'
                ],
            ],
        ]);
        $args_photo_reviews = ([
            'posts_per_page' => '21',
            'posts_per_archive_page' => '21',
            'post_type'   => 'otzyvy',
            'post_status' => 'publish',
            'orderby'   => array(
                'date' =>'DESC',
            ),
            'tax_query'   => [
                [
                    'taxonomy'  => 'types',
                    'field'     => 'slug',
                    'terms'     => 'foto'
                ], [
                    'taxonomy' => 'mark',
                    'field' => 'slug',
                    'terms' => $tag_arr,
                    'operator' => 'AND'
                ],
            ],
        ]);
    } else {
        $args_video_reviews = ([
            'posts_per_page' => '21',
            'posts_per_archive_page' => '21',
            'post_type'   => 'otzyvy',
            'post_status' => 'publish',
            'orderby'   => array(
                'date' =>'DESC',
            ),
            'tax_query'   => [
                [
                    'taxonomy'  => 'types',
                    'field'     => 'slug',
                    'terms'     => 'video'
                ],
            ],
        ]);
        $args_photo_reviews = ([
            'posts_per_page' => '21',
            'posts_per_archive_page' => '21',
            'post_type'   => 'otzyvy',
            'post_status' => 'publish',
            'orderby'   => array(
                'date' =>'DESC',
            ),
            'tax_query'   => [
                [
                    'taxonomy'  => 'types',
                    'field'     => 'slug',
                    'terms'     => 'foto'
                ],
            ],
        ]);
    }
    
    $video_reviews = new WP_Query($args_video_reviews);
    $video_reviews_arr = array();
    foreach ($video_reviews->posts as $key => $value) {
        $review_number = get_field('review_number', $value->ID);
        $case = get_field('case', $value->ID);
        $case_length = get_field('case_length', $value->ID);
        $id_video = get_field('id_video', $value->ID);
        $amount_of_debt = get_field('amount_of_debt', $value->ID);
        $link_court_ruling = get_field('link_court_ruling', $value->ID);
        $link_cards = get_field('link_cards', $value->ID);
        $url = get_permalink($value->ID);
        array_push($video_reviews_arr, array("id" => $value->ID, "title" => $value->post_title, "review_number" => $review_number, "case" => $case, "case_length" => $case_length, "id_video" => $id_video, "amount_of_debt" => $amount_of_debt, "link_court_ruling" => $link_court_ruling, "link_cards" => $link_cards, "url" => $url));
    }
    
    $photo_reviews = new WP_Query($args_photo_reviews);
    $photo_reviews_arr = array();
    foreach ($photo_reviews->posts as $key => $value) {
        $review_number = get_field('review_number', $value->ID);
        $case = get_field('case', $value->ID);
        $case_length = get_field('case_length', $value->ID);
        $image = wp_get_attachment_image_src(get_post_thumbnail_id($value->ID), 'single-post-thumbnail');
        $amount_of_debt = get_field('amount_of_debt', $value->ID);
        $link_court_ruling = get_field('link_court_ruling', $value->ID);
        $link_cards = get_field('link_cards', $value->ID);
        $url = get_permalink($value->ID);
        array_push($photo_reviews_arr, array("id" => $value->ID, "title" => $value->post_title, "review_number" => $review_number, "case" => $case, "case_length" => $case_length, "image" => $image[0], "amount_of_debt" => $amount_of_debt, "link_court_ruling" => $link_court_ruling, "link_cards" => $link_cards, "url" => $url));
    }

    echo json_encode(array('answer_status' => true,  'POST_params' => $_POST['params'], 'params' => $tag_arr, 'video_reviews' => $video_reviews_arr, 'photo_reviews' => $photo_reviews_arr));
    die();
}
add_action('wp_ajax_get_filter_reviews', 'get_filter_reviews');
add_action('wp_ajax_nopriv_get_filter_reviews', 'get_filter_reviews');

/**
 * wpseo_title для страниц пагинации отзывов
 */
add_filter('wpseo_title', function($title){
	if(is_post_type_archive('otzyvy')) {
	    $pagination_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	    global $wp_query;
        $pagination_total_paged = $wp_query->max_num_pages;
        if ($pagination_paged > 1) {
            $title = 'Отзывы - страница '.$pagination_paged.' из '.$pagination_total_paged;
        } else {
            $title = 'Отзывы прошедших процедуру банкротства физических лиц «Финансово-правовой альянс»';
        }
	}
	return $title;
}, 10, 1);

/**
 * wpseo_metadesc для страниц пагинации отзывов
 */
add_filter('wpseo_metadesc', function($metadesc){
	if(is_post_type_archive('otzyvy')) {
	    $pagination_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	    global $wp_query;
	    $pagination_total_paged = $wp_query->max_num_pages;
        if ($pagination_paged > 1) {
            $metadesc = '
            Отзывы о компании "Финансово - Правовой Альянс" - страница '.$pagination_paged.' из '.$pagination_total_paged;
        } else {
            $metadesc = 'Ознакомьтесь с отзывами от наших клиентов на сайте. Для того чтобы получить консультацию по банкротству физ лиц, свяжитесь с менеджером по телефону +7 (812) 425-69-18 или по почте office@fpa.ru';
        }
	}
	return $metadesc;
}, 10, 1);



// создаем новые колонки для отображения обращений
add_filter( 'manage_'.'feedback'.'_posts_columns', 'add_views_column_feedback', 4 );
function add_views_column_feedback( $columns ){
	$num = 4; // после какой по счету колонки вставлять новые

	$new_columns = array(
		'client_status' => 'Клиент компании',
		'employee' => 'Сотрудник',
		'fio' => 'ФИО',
		'cdnumber' => 'Номер дела',
		'email' => 'E-mail',
		'cphone' => 'Телефон',
		'subject' => 'Тема',
		'message' => 'Текст',
		'file_url' => 'Вложение',
	);

	return array_slice( $columns, 0, $num ) + $new_columns + array_slice( $columns, $num );
}

// заполняем колонки данными для отображения обращений
add_action('manage_'.'feedback'.'_posts_custom_column', 'fill_views_column_feedback', 5, 2 );
function fill_views_column_feedback( $colname, $post_id ){
	if ($colname === 'client_status'){
	    $responce = '';
	    $client_status = get_field('client_status', $post_id);
	    
        switch ($client_status) {
            case 'first':
                $responce = '<span style="color: red">Нет</span>';
            break;
            case 'existing':
                $responce = '<span style="color: green">Да</span>';
            break;
        }
	    echo $responce;
	}
	if ($colname === 'employee'){
	    $responce = '';
	    $employee = get_field('employee', $post_id);
	    
        switch ($employee) {
            case 'okladnikov':
                $responce = 'Окладников Илья Викторович';
            break;
            case 'bodnar':
                $responce = 'Боднар Евгения Ивановна';
            break;
            case 'kopyrina':
                $responce = 'Копырина Анжелика Владимировна';
            break;
            case 'sergeeva':
                $responce = 'Сергеева Ольга Николаевна';
            break;
            case 'chernova':
                $responce = 'Чернова Екатерина Юрьевна';
            break;
        }
	    echo $responce;
	}
	if ($colname === 'fio'){
	    $responce = '';
	    $responce = get_field('fio', $post_id);
	    echo $responce;
	}
	if ($colname === 'cdnumber'){
	    $responce = '';
	    $responce = get_field('cdnumber', $post_id);
	    echo $responce;
	}
	if ($colname === 'email'){
	    $responce = '';
	    $responce = get_field('email', $post_id);
	    echo $responce;
	}
	if ($colname === 'cphone'){
	    $responce = '';
	    $responce = get_field('cphone', $post_id);
	    echo $responce;
	}
	if ($colname === 'subject'){
	    $responce = '';
	    $subject = get_field('subject', $post_id);
	    
	    switch ($subject) {
            case 'question_procedure':
                $responce = 'Вопрос по процедуре банкротства';
            break;
            case 'question_current_case':
                $responce = 'Вопрос по текущему делу';
            break;
            case 'complaint':
                $responce = 'Оставить жалобу';
            break;
            case 'employee':
                $responce = 'Обратиться к сотруднику';
            break;
            case 'other':
                $responce = 'Другое';
            break;
        }
	    echo $responce;
	}
	if ($colname === 'message'){
	    $responce = '';
	    $message = get_field('message', $post_id);
	    $responce = mb_strimwidth($message, 0, 60, '...');
	    echo $responce;
	}
	if ($colname === 'file_url'){
	    $responce = '';
	    $responce = get_field('file_url', $post_id);
	    echo $responce;
	}
}

// создаем новые колонки с датой публикации для СМИ
add_filter( 'manage_'.'news'.'_posts_columns', 'add_views_column_news', 4 );
function add_views_column_news( $columns ){
	$num = 5; // после какой по счету колонки вставлять новые

	$new_columns = array(
		'pub_date' => 'Дата публикации',
	);

	return array_slice( $columns, 0, $num ) + $new_columns + array_slice( $columns, $num );
}

// заполняем колонки данными с датой публикации для СМИ
add_action('manage_'.'news'.'_posts_custom_column', 'fill_views_column_news', 5, 2 );
function fill_views_column_news( $colname, $post_id ){
	if ($colname === 'pub_date'){
	    $responce = '';
	    $pub_date = get_field('date_publication', $post_id);
	    $responce = '<span>' . $pub_date . '</span>';
	    echo $responce;
	}
}

// создаем новую колонку с количеством просмотров скана фото отзыва
add_filter( 'manage_'.'otzyvy'.'_posts_columns', 'add_views_column_otzyvy', 4 );
function add_views_column_otzyvy( $columns ){
	$num = 5; // после какой по счету колонки вставлять новые

	$new_columns = array(
		'review_scan_count' => 'Просмотры скана',
	);

	return array_slice( $columns, 0, $num ) + $new_columns + array_slice( $columns, $num );
}

// заполняем колонку данными с количеством просмотров скана фото отзыва
add_action('manage_'.'otzyvy'.'_posts_custom_column', 'fill_views_column_otzyvy', 5, 2 );
function fill_views_column_otzyvy( $colname, $post_id ){
	if ($colname === 'review_scan_count'){
	    $responce = '';
	    $review_scan_count = get_field('review_scan_count', $post_id);
	    $responce = '<span>' . $review_scan_count . '</span>';
	    echo $responce;
	}
}

add_action('wp_ajax_add_feedback', 'add_new_feedback');
add_action('wp_ajax_nopriv_add_feedback', 'add_new_feedback');

// Ajax-хук для добавления нового обращения
function add_new_feedback(){
    $customer_request = $_POST['customer_request'];
    $lawyer_field = $_POST['lawyer_field'];
    $cname = $_POST['cname'];
    $cdnumber = $_POST['cdnumber'];
    $cphone = $_POST['cphone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $attach_file = $_POST['attach_file'];
    
    $feedback_arr = array(
        'post_title' => 'Обращение от '.date("d-m-Y H:i:s"),
        'post_type' => 'feedback',
        'post_status' => 'publish'
    );
    $feedback_id = wp_insert_post($feedback_arr);
    /*
    if ($customer_request == 'first') {
        $customer_request_arr = array(
            "label" => "Обращаюсь в вашу компанию впервые", 
            "value" => "first"
        );
    }
    if ($customer_request == 'first') {
        $customer_request_arr = array(
            "label" => "Являюсь клиентом", 
            "value" => "existing"
        );
    }
    */
    update_post_meta($feedback_id, 'client_status', $customer_request);
    /*
    if ($lawyer_field == 'okladnikov') {
        $lawyer_field_arr = array(
            "label" => "Окладников Илья Викторович", 
            "value" => "okladnikov"
        );
    }
    if ($lawyer_field == 'bodnar') {
        $lawyer_field_arr = array(
            "label" => "Боднар Евгения Ивановна", 
            "value" => "bodnar"
        );
    }
    if ($lawyer_field == 'kopyrina') {
        $lawyer_field_arr = array(
            "label" => "Копырина Анжелика Владимировна", 
            "value" => "kopyrina"
        );
    }
    if ($lawyer_field == 'sergeeva') {
        $lawyer_field_arr = array(
            "label" => "Сергеева Ольга Николаевна", 
            "value" => "sergeeva"
        );
    }
    if ($lawyer_field == 'chernova') {
        $lawyer_field_arr = array(
            "label" => "Чернова Екатерина Юрьевна", 
            "value" => "chernova"
        );
    }
    */
    update_post_meta($feedback_id, 'employee', $lawyer_field);
    update_post_meta($feedback_id, 'fio', $cname);
    update_post_meta($feedback_id, 'cdnumber', $cdnumber);
    update_post_meta($feedback_id, 'email', $email);
    update_post_meta($feedback_id, 'cphone', $cphone);
    /*
    if ($subject == 'question_procedure') {
        $subject_arr = array(
            "label" => "Вопрос по процедуре банкротства", 
            "value" => "question_procedure"
        );
    }
    if ($subject == 'question_current_case') {
        $subject_arr = array(
            "label" => "Вопрос по текущему делу", 
            "value" => "question_current_case"
        );
    }
    if ($subject == 'complaint') {
        $subject_arr = array(
            "label" => "Оставить жалобу", 
            "value" => "complaint"
        );
    }
    if ($subject == 'employee') {
        $subject_arr = array(
            "label" => "Обратиться к сотруднику", 
            "value" => "employee"
        );
    }
    if ($subject == 'other') {
        $subject_arr = array(
            "label" => "Другое", 
            "value" => "other"
        );
    }
    */
    update_post_meta($feedback_id, 'subject', $subject);
    update_post_meta($feedback_id, 'message', $message);
    update_post_meta($feedback_id, 'file_url', $attach_file);
    
    if ($feedback_id > 0) {
        echo json_encode(array('status'=>true, 'feedback_id'=>$feedback_id, 'message'=>__('Обращение добавлено!')));
    } else {
        echo json_encode(array('status'=>false, 'feedback_id'=>$feedback_id, 'message'=>__('Ошибка: Обращение не добавлено!')));
    }

    die();
}

add_action('wp_dashboard_setup', 'feedback_admin_listall_cpts');

function feedback_admin_listall_cpts() {
    if( current_user_can('manage_options') ) {
        wp_add_dashboard_widget(
            'feedback_list_cpts',
            'Последние обращения',
            'feedback_show_all_cpts'
        );  
    }
}

function feedback_show_all_cpts() {
    $feedback_params = array(
        'post_type' => 'feedback', // тип постов - записи
        'numberposts' => 5, // получить 5 постов, можно также использовать posts_per_page
        'orderby' => 'date', // сортировать по дате
        'order' => 'DESC', // по убыванию (сначала - свежие посты)
        'suppress_filters' => true // 'posts_*' и 'comment_feed_*' фильтры игнорируются
    );
    
    $feedback_posts_array = get_posts($feedback_params);
    echo '<ul>';
    foreach ($feedback_posts_array as $feedback_post_single) {
        echo '<li><a target="_blank" href="https://fpa.ru/wp-admin/post.php?post='.$feedback_post_single->ID.'&action=edit">'.$feedback_post_single->post_title.'</a></li>';
    }
    echo '</ul>';
    wp_reset_postdata(); // сбрасывает $post
}



function add_rostat_visit() {
    $project_id = $_POST['project_id'];
    $event_name = $_POST['event_name'];
    $visit = $_POST['visit'];
    
    // "{'name': '".$event_name."', 'visit': '".$visit."'}"
    $array = array(
    	'name'    => $event_name,
    	'visit' => $visit
    );		
    
    $ch = curl_init('https://cloud.roistat.com/api/v1/project/events/send?project='.$project_id);
    curl_setopt($ch, CURLOPT_POST, 1);
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-type: application/json',
        'Api-key: a306a25a749f74a350232a12d90d7280'
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($array, JSON_UNESCAPED_UNICODE)); //http_build_query($array, '', '&')
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    /*curl_setopt($ch, CURLOPT_HEADER, false);*/
    $html = curl_exec($ch);
    curl_close($ch);	
 
    echo json_encode(array('answer'=>$html));
    die;
}
add_action('wp_ajax_add_rostat_visit', 'add_rostat_visit');
add_action('wp_ajax_nopriv_add_rostat_visit', 'add_rostat_visit');

/* Дополнительный блок для редактора Gutenberg (Вариативная картинка для постов - разные картинки для Десктопа, Планшета, мобилки) */
function gutenberg_custom_image_register_blocks() {
    // Проверяем, что функция доступна.
    if( function_exists( 'acf_register_block' ) ) {
        // Регистрируем блок рекомендаций.
        //'render_callback'   => 'gutenberg_custom_image_render_callback',
        acf_register_block(array(
            'name'              => 'gutenberg_custom_image',
            'title'             => __('Gutenberg custom image'),
            'description'       => __('Разные картинки для Десктопа, Планшета и Мобилки'),
            'render_template'   => 'template-parts/blocks/gutenberg_custom_image/gutenberg_custom_image.php',
            'category'          => 'media',
            'icon'              => 'admin-comments',
            'mode'              => 'preview',
            'keywords'          => array('Gutenberg_block_custom_image', 'acf'),
        ));
    }
}
add_action('acf/init', 'gutenberg_custom_image_register_blocks');

/*
function gutenberg_image_slider_register_blocks() {
    // Проверяем, что функция доступна.
    if( function_exists( 'acf_register_block' ) ) {
        // Регистрируем блок рекомендаций.
        //'render_callback'   => 'gutenberg_custom_image_render_callback',
        acf_register_block(array(
            'name'              => 'gutenberg_block_slider',
            'title'             => __('Gutenberg block slider'),
            'description'       => __('Слайдер картинок для статей'),
            'render_template'   => 'template-parts/blocks/gutenberg_block_slider/gutenberg_block_slider.php',
            'category'          => 'media',
            'icon'              => 'admin-comments',
            'mode'              => 'preview',
            'keywords'          => array('Gutenberg_block_slider', 'acf'),
        ));
    }
}
add_action('acf/init', 'gutenberg_image_slider_register_blocks');
*/