<?php


function gg_gfonts_prefetch() {
  echo '<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>';
  echo '<link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>';
 }
 add_action( 'wp_head', 'gg_gfonts_prefetch' );

function load_scripts() {
  
  // HEADER

  // loader
  wp_enqueue_style( 'loader-min', get_template_directory_uri() . '/css/loader.min.css' );
  wp_enqueue_script( 'pace-min', get_template_directory_uri() . '/js/pace.min.js', array(), 'null', false );


  // font awesome
  wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' );
  // google fonts
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap' );
  // swiper
  wp_enqueue_style( 'swiper-min', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
  // メインCSS
  wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.min.css' );


  // FOOTER

  wp_enqueue_script( 'swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), 'null', true );
  wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js', array(), 'null', true );
  wp_enqueue_script( 'gsap-scroll-trigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/ScrollTrigger.min.js', array(), 'null', true );
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/project.min.js', array(), 'null', true );
}
add_action('wp_enqueue_scripts', 'load_scripts');


  // メニュー
  
  register_nav_menus( array(
    'header-navigation' => 'Header Navigation',
    'footer-navigation' => 'Footer Navigation',
    'social-links'      => 'Social Links',
  ) );
// メニューのliにクラスを加える
function add_additional_class_on_li($classes, $item, $args) {
  if(isset($args->add_li_class)) {
      $classes[] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// メニューのaタグにクラスを加える
function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );


  // 投稿サムネイルを使えるようにする
add_theme_support( 'post-thumbnails' );
  // ロゴを使えるようにする
add_theme_support( 'custom-logo' );

  // ロゴのクラスを変更
add_filter( 'get_custom_logo', 'change_logo_class' );
function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo', 'header__logo', $html );
    // $html = str_replace( 'custom-logo-link', 'your-custom-class', $html );

    return $html;
}


// sidebar & Contact
add_action( 'widgets_init', 'sidebars' );
function sidebars() {
  // Main Contact Form
  register_sidebar(
    array(
      'name' => 'お問い合わせフォーム',
      'id' => 'contact',
      'description' => 'コンタクトウィジットを入力してください。',
      'before_widget' => '', //contact form 7 の::marker(点)を消す
      'after_widget'  => '',
    )
  );
  // Contact Form Primary
  register_sidebar(
    array(
      'name' => 'メール送信フォーム(Primary)',
      'id' => 'email-form-one',
      'description' => 'コンタクトウィジットを入力してください。',
      'before_widget' => '', //contact form 7 の::marker(点)を消す
      'after_widget'  => '',
    )
  );
  // Contact Form Secondary
  register_sidebar(
    array(
      'name' => 'メール送信フォーム(Secondary)',
      'id' => 'email-form-two',
      'description' => 'コンタクトウィジットを入力してください。',
      'before_widget' => '', //contact form 7 の::marker(点)を消す
      'after_widget'  => '',
    )
  );
}