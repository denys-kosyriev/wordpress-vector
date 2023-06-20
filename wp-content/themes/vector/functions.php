<?php

  // Off turn one teg "span" in form

  add_filter('wpcf7_form_elements', function ($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    return $content;
  });

  // Create Setting Page

  acf_add_options_page(array(
    'page_title' => 'Theme General Settings',
    'menu_title' => 'Theme Settings',
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
    wp_enqueue_script('modal-channels', get_template_directory_uri() . '/assets/js/modal-channels.js');
    wp_enqueue_script('connection-problem', get_template_directory_uri() . '/assets/js/connection-problem.js');
  }

  // Connecting Munus

  add_action('after_setup_theme', 'add_menus');
  function add_menus() {
    add_theme_support('menus');
    register_nav_menu('header-links', 'Header links');
    register_nav_menu('header-phones', 'Header phones');
    register_nav_menu('footer-navigation', 'footer navigation');
    register_nav_menu('footer-phones', 'footer phones');
    register_nav_menu('footer-phones-advertising', 'footer phones advertising');
  }

  // add custom type "News"
  add_action('init', 'register_post_types_news');
  function register_post_types_news() {
    register_post_type('news', [
      'label' => null,
      'labels' => [
        'name' => 'News', // основное название для типа записи
        'singular_name' => 'News', // название для одной записи этого типа
        'add_new' => 'Add news', // для добавления новой записи
        'add_new_item' => 'Add news', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item' => 'Edit news', // для редактирования типа записи
        'new_item' => 'New news', // текст новой записи
        'view_item' => 'Look news', // для просмотра записи этого типа.
        'search_items' => 'Search news', // для поиска по этим типам записи
        'not_found' => 'Not found', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Not found in basket', // если не было найдено в корзине
        'parent_item_colon' => '', // для родителей (у древовидных типов)
        'menu_name' => 'News', // название меню
      ],
      'description' => '',
      'public' => true,
      'show_in_menu' => null, // показывать ли в меню адмнки
      'show_in_rest' => null, // добавить в REST API. C WP 4.7
      'rest_base' => null, // $post_type. C WP 4.7
      'menu_position' => null,
      'menu_icon' => null,
      'hierarchical' => false,
      'supports' => ['title', 'editor'], // 'author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
      'taxonomies' => [],
      'has_archive' => false,
      'rewrite' => true,
      'query_var' => true,
    ]);
  }