<?php
/**
 * Чистый Шаблон для разработки
 * Функции шаблона
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */

function stolen_plants_enque_scripts() {

  wp_enqueue_script('bootstrap.min-js', get_stylesheet_directory_uri().'/js/bootstrap.min.js', array() , false, true);
  wp_enqueue_script('device.min-js', get_stylesheet_directory_uri().'/js/device.min.js', array() , false, true);
  wp_enqueue_script('owl.carousel.min-js', get_stylesheet_directory_uri().'/js/owl.carousel.min.js', array() , false, true);
  wp_enqueue_script('jquery.fancybox-js', get_stylesheet_directory_uri().'/js/jquery.fancybox.js', array() , false, true);
  wp_enqueue_script('jquery.selectbox-0.2.min-js', get_stylesheet_directory_uri().'/js/jquery.selectbox-0.2.min.js', array() , false, true);
  wp_enqueue_script('cherry-fixed-parallax-js', get_stylesheet_directory_uri().'/js/cherry-fixed-parallax.js', array() , false, true);
  wp_enqueue_script('jquery.rd-google-map-js', get_stylesheet_directory_uri().'/js/jquery.rd-google-map.js', array() , false, true);
  wp_enqueue_script('superfish.min-js', get_stylesheet_directory_uri().'/js/superfish.min.js', array() , false, true);
  wp_enqueue_script('jquery.rd-navbar.min-js', get_stylesheet_directory_uri().'/js/jquery.rd-navbar.min.js', array() , false, true);
  wp_enqueue_script('jquery.unveil.min.js', get_stylesheet_directory_uri().'/js/jquery.unveil.min.js', array() , false, true);
  wp_enqueue_script('scrollfix.min-js', get_stylesheet_directory_uri().'/js/scrollfix.min.js', array() , false, true);
  wp_enqueue_script('base-js', get_stylesheet_directory_uri().'/js/base.js', array() , false, true);

}
add_action('wp_enqueue_scripts',  'stolen_plants_enque_scripts', 15 );

function stolen_plants_enque_styles() {
  wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri() . '/css/bootstrap.min.css', array() );
  wp_enqueue_style( 'owl.carousel.css', get_template_directory_uri() . '/css/owl.carousel.css', array() );
  wp_enqueue_style( 'font-awesome.min.css', get_template_directory_uri() . '/css/font-awesome.min.css', array() );
  wp_enqueue_style( 'magnificent.css', get_template_directory_uri() . '/css/magnificent.css', array() );
  wp_enqueue_style( 'jquery.bxslider.css', get_template_directory_uri() . '/css/jquery.bxslider.css', array() );
  wp_enqueue_style( 'photoswipe.css', get_template_directory_uri() . '/css/photoswipe.css', array() );
  wp_enqueue_style( 'jquery.fancybox.css', get_template_directory_uri() . '/css/jquery.fancybox.css', array() );
  wp_enqueue_style( 'material-design.css', get_template_directory_uri() . '/css/material-design.css', array() );
  wp_enqueue_style( 'fl-line-icon-set.css', get_template_directory_uri() . '/css/fl-line-icon-set.css', array() );
  wp_enqueue_style( 'owl.carousel.css', get_template_directory_uri() . '/css/owl.carousel.css', array() );
  wp_enqueue_style( 'owl.transitions.css', get_template_directory_uri() . '/css/owl.transitions.css', array() );
  wp_enqueue_style( 'parallax.css', get_template_directory_uri() . '/css/parallax.css', array() );
  wp_enqueue_style( 'tm_newsletter.css', get_template_directory_uri() . '/css/tm_newsletter.css', array() );
  wp_enqueue_style( 'tmgooglemap.css', get_template_directory_uri() . '/css/tmgooglemap.css', array() );
  wp_enqueue_style( 'stylesheet.css', get_template_directory_uri() . '/css/stylesheet.css', array() );
  wp_enqueue_style( 'ga-font.latin.cyrillic', 'http://fonts.googleapis.com/css?family=PT+Serif:400,700&amp;subset=latin,cyrillic', array() );
  wp_enqueue_style( 'ga-font.Montserrat', 'http://fonts.googleapis.com/css?family=Montserrat:400,700', array() );
  wp_enqueue_style( 'ga-font.latin,ccyrillic', 'http://fonts.googleapis.com/css?family=Roboto:400,300&amp;subset=latin,cyrillic', array() );

}
add_action('wp_print_styles', 'stolen_plants_enque_styles' );


?>