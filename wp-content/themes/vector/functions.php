<?php

  // Off turn one teg "span" in form

  add_filter('wpcf7_form_elements', function ($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    return $content;
  });

  // Create Setting Page

  acf_add_options_page(array(
    'page_title' => 'Глобальні налаштування секції',
    'menu_title' => 'Налаштування секцій',
    'menu_slug' => 'theme-general-settings',
    'capability' => 'edit_posts',
    'redirect' => false,
  ));

  function add_file_types_to_uploads($file_types) {
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
  }

  add_filter('upload_mimes', 'add_file_types_to_uploads');

  // Connecting styles and scripts

  add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
  function add_scripts_and_styles() {
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/libs/swiper/swiper.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js');
    wp_enqueue_script('home', get_template_directory_uri() . '/assets/js/home.js');
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/libs/swiper/swiper.js');
    wp_enqueue_script('connection', get_template_directory_uri() . '/assets/js/connection.js');
    wp_enqueue_script('settings', get_template_directory_uri() . '/assets/js/settings.js');
    wp_enqueue_script('support', get_template_directory_uri() . '/assets/js/support.js');
    wp_enqueue_script('connection-problem', get_template_directory_uri() . '/assets/js/connection-problem.js');
    wp_enqueue_script('tariffs', get_template_directory_uri() . '/assets/js/tariffs.js');
  }

  // Connecting Munus

  add_action('after_setup_theme', 'add_menus');
  function add_menus() {
    add_theme_support('menus');
    register_nav_menu('header-links', 'Header links');
    register_nav_menu('footer-navigation', 'footer navigation');
  }

  // add custom type "News"
  add_action('init', 'register_post_types_news');

  function register_post_types_news() {
    register_post_type('news', [
      'label' => null,
      'labels' => [
        'name' => 'Новини', // основное название для типа записи
        'singular_name' => 'Новини', // название для одной записи этого типа
        'add_new' => 'Добавити Новину', // для добавления новой записи
        'add_new_item' => 'Добавити Новину', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item' => 'Редагувати Новину', // для редактирования типа записи
        'new_item' => 'Нова Новина', // текст новой записи
        'view_item' => 'Переглянути Новину', // для просмотра записи этого типа.
        'search_items' => 'Шукати Новину', // для поиска по этим типам записи
        'not_found' => 'Not found', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Not found in basket', // если не было найдено в корзине
        'parent_item_colon' => '', // для родителей (у древовидных типов)
        'menu_name' => 'Новини', // название меню
      ],
      'description' => '',
      'public' => true,
      'show_in_menu' => null, // показывать ли в меню адмнки
      'show_in_rest' => null, // добавить в REST API. C WP 4.7
      'rest_base' => null, // $post_type. C WP 4.7
      'menu_position' => null,
      'menu_icon' => null,
      'hierarchical' => false,
      'supports' => ['title', 'editor', 'thumbnail', 'excerpt'], // 'author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
      'taxonomies' => [],
      'has_archive' => false,
      'rewrite' => true,
      'query_var' => true,
    ]);
  }

  add_theme_support('post-thumbnails', array('news'));

  // add custom type "Tariffs"
  add_action('init', 'register_post_types_tariffs');
  function register_post_types_tariffs() {
    register_post_type('tariffs', [
      'label' => null,
      'labels' => [
        'name' => 'Тарифи', // основное название для типа записи
        'singular_name' => 'Тарифи', // название для одной записи этого типа
        'add_new' => 'Добавити Тариф', // для добавления новой записи
        'add_new_item' => 'Добавити Тариф', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item' => 'Редагувати Тариф', // для редактирования типа записи
        'new_item' => 'Новий Тариф', // текст новой записи
        'view_item' => 'Переглянути Тариф', // для просмотра записи этого типа.
        'search_items' => 'Пошук Тарифа', // для поиска по этим типам записи
        'not_found' => 'Not found', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Not found in basket', // если не было найдено в корзине
        'parent_item_colon' => '', // для родителей (у древовидных типов)
        'menu_name' => 'Тарифи', // название меню
      ],
      'description' => '',
      'public' => true,
      'show_in_menu' => null, // показывать ли в меню адмнки
      'show_in_rest' => null, // добавить в REST API. C WP 4.7
      'rest_base' => null, // $post_type. C WP 4.7
      'menu_position' => null,
      'menu_icon' => null,
      'hierarchical' => false,
      'supports' => ['title', 'thumbnail'], // 'author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
      'taxonomies' => [],
      'has_archive' => false,
      'rewrite' => true,
      'query_var' => true,
    ]);
  }

  add_theme_support('post-thumbnails', array('tariffs'));

  // add custom type "Shares"
  add_action('init', 'register_post_types_shares');
  function register_post_types_shares() {
    register_post_type('shares', [
      'label' => null,
      'labels' => [
        'name' => 'Акції', // основное название для типа записи
        'singular_name' => 'Акції', // название для одной записи этого типа
        'add_new' => 'Добавити Акцію', // для добавления новой записи
        'add_new_item' => 'Добавити Акцію', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item' => 'Редагувати Акцію', // для редактирования типа записи
        'new_item' => 'Нова Акція', // текст новой записи
        'view_item' => 'Переглянути Акцію', // для просмотра записи этого типа.
        'search_items' => 'Шукати Акцію', // для поиска по этим типам записи
        'not_found' => 'Not found', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Not found in basket', // если не было найдено в корзине
        'parent_item_colon' => '', // для родителей (у древовидных типов)
        'menu_name' => 'Акції', // название меню
      ],
      'description' => '',
      'public' => true,
      'show_in_menu' => null, // показывать ли в меню адмнки
      'show_in_rest' => null, // добавить в REST API. C WP 4.7
      'rest_base' => null, // $post_type. C WP 4.7
      'menu_position' => null,
      'menu_icon' => null,
      'hierarchical' => false,
      'supports' => ['title', 'editor', 'thumbnail'], // 'author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
      'taxonomies' => [],
      'has_archive' => false,
      'rewrite' => true,
      'query_var' => true,
    ]);
  }

  add_theme_support('post-thumbnails', array('locations'));

  // add custom type "Shares"
  add_action('init', 'register_post_types_locations');
  function register_post_types_locations() {
    register_post_type('locations', [
      'label' => null,
      'labels' => [
        'name' => 'Локації', // основное название для типа записи
        'singular_name' => 'Локації', // название для одной записи этого типа
        'add_new' => 'Добавити Локацію', // для добавления новой записи
        'add_new_item' => 'Добавити Локацію', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item' => 'Редагувати Локацію', // для редактирования типа записи
        'new_item' => 'Нова Локація', // текст новой записи
        'view_item' => 'Переглянути Локацію', // для просмотра записи этого типа.
        'search_items' => 'Шукати Локацію', // для поиска по этим типам записи
        'not_found' => 'Not found', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Not found in basket', // если не было найдено в корзине
        'parent_item_colon' => '', // для родителей (у древовидных типов)
        'menu_name' => 'Локації', // название меню
      ],
      'description' => '',
      'public' => true,
      'show_in_menu' => null, // показывать ли в меню адмнки
      'show_in_rest' => null, // добавить в REST API. C WP 4.7
      'rest_base' => null, // $post_type. C WP 4.7
      'menu_position' => null,
      'menu_icon' => null,
      'hierarchical' => false,
      'supports' => ['title'], // 'author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
      'taxonomies' => [],
      'has_archive' => false,
      'rewrite' => true,
      'query_var' => true,
    ]);
  }

  add_theme_support('post-thumbnails', array('support'));

  // add custom type "Shares"
  add_action('init', 'register_post_types_support');
  function register_post_types_support() {
    register_post_type('support', [
      'label' => null,
      'labels' => [
        'name' => 'Підтримка', // основное название для типа записи
        'singular_name' => 'Підтримка', // название для одной записи этого типа
        'add_new' => 'Добавити Питання', // для добавления новой записи
        'add_new_item' => 'Добавити Питання', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item' => 'Редагувати Питання', // для редактирования типа записи
        'new_item' => 'Нова Питання', // текст новой записи
        'view_item' => 'Переглянути Питання', // для просмотра записи этого типа.
        'search_items' => 'Шукати Питання', // для поиска по этим типам записи
        'not_found' => 'Not found', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Not found in basket', // если не было найдено в корзине
        'parent_item_colon' => '', // для родителей (у древовидных типов)
        'menu_name' => 'Підтримка', // название меню
      ],
      'description' => '',
      'public' => true,
      'show_in_menu' => null, // показывать ли в меню адмнки
      'show_in_rest' => null, // добавить в REST API. C WP 4.7
      'rest_base' => null, // $post_type. C WP 4.7
      'menu_position' => null,
      'menu_icon' => null,
      'hierarchical' => false,
      'supports' => ['title', 'editor', 'thumbnail'], // 'author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
      'taxonomies' => [],
      'has_archive' => false,
      'rewrite' => true,
      'query_var' => true,
    ]);
  }

  add_theme_support('post-thumbnails', array('support'));