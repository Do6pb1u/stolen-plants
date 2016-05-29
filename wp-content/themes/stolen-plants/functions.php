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
  wp_enqueue_script('cherry-fixed-parallax-js', get_stylesheet_directory_uri().'/js/cherry-fixed-parallax.js', array() , false, true);
  wp_enqueue_script('jquery.rd-google-map-js', get_stylesheet_directory_uri().'/js/jquery.rd-google-map.js', array() , false, true);
  wp_enqueue_script('superfish.min-js', get_stylesheet_directory_uri().'/js/superfish.min.js', array() , false, true);
  wp_enqueue_script('jquery.rd-navbar.min-js', get_stylesheet_directory_uri().'/js/jquery.rd-navbar.min.js', array() , false, true);
  wp_enqueue_script('jquery.unveil.min.js', get_stylesheet_directory_uri().'/js/jquery.unveil.min.js', array() , false, true);
  wp_enqueue_script('scrollfix.min-js', get_stylesheet_directory_uri().'/js/scrollfix.min.js', array() , false, true);
  wp_enqueue_script('base-js', get_stylesheet_directory_uri().'/js/base.js', array() , false, true);

}

add_action('wp_enqueue_scripts',  'stolen_plants_enque_scripts', 15 );

?>