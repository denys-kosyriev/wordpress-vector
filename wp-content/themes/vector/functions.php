<?php

  function add_file_types_to_uploads($file_types) {
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
  }

  add_filter('upload_mimes', 'add_file_types_to_uploads');

  add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
  add_action('after_setup_theme', 'add_menus');

  function add_scripts_and_styles() {
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/libs/swiper/swiper.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js');
    wp_enqueue_script('home', get_template_directory_uri() . '/assets/js/home.js');
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/libs/swiper/swiper.js');
  }

  function add_menus() {
    add_theme_support('menus');
    register_nav_menu('header-links', 'Header links');
  }
