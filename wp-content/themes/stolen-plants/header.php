<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]>
  <html dir="ltr" lang="en" class="ie8">
  <![endif]-->
<!--[if IE 9 ]>
  <html dir="ltr" lang="en" class="ie9">
  <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
<title><?= wp_title(); ?></title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<base />
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDC0ClnTffuZbjA1hPQyPv0K7kybw_ToIk&v=3.exp&amp;sensor=true" type="text/javascript"></script>

<?php
  wp_head();
  global $general;
?>

</head>
<body class="common-home">
<div id="page">
<header>
  <div id="stuck">
    <div class="header__top">
      <div class="container">
        <div>
          <nav id="top-links" class="nav toggle-wrap">
            <a class="toggle fa fa-bars" href='#'></a>
            <div class="toggle_cont">

              <? wp_nav_menu( array(
                'menu' => 'main_menu',
                'menu_class' => 'list-unstyled',
                'container' => ''
              )); ?>

            </div>
          </nav>

          <div id="logo" class="logo">
          <a href="/"><img src="<?= $general['header_logo'] ?>" title="<?= $general['site_name']; ?>" alt="<?= $general['site_name']; ?>" class="img-responsive"/></a>
          </div>
        </div>
        <div class="pull-right">
        <div class="top"><div class="box_html delivery">
        <?= $general['header_middle_text']; ?></div>
        </div>
        <span class="phone"><i class="fa fa-phone"></i><a href="tel:<?= $general['header_phone_number_filtered']; ?>"><?= $general['header_phone_number']; ?></a></span>
        </div>
      </div>
    </div>
  </div>

  <? if(is_home() || is_front_page()): global $content; ?>
    <div class="header_modules">
      <div id="parallax_43" class="parallax">
        <div data-source-url="<?= $content['hero_main_image_url'] ?>" class="parallax-1">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="circle">
                  <h1><?= $content['hero_main_text'] ?></h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
        jQuery(document).ready(function () {
            jQuery("#parallax_43>div").cherryFixedParallax({
                invert: false
            });
        });
      </script>
    </div>
  <? endif; ?>

  <div class="stuck-menu">
    <div class="container">
      <div class="navigation">
        <div class="megamenu">

          <? wp_nav_menu( array(
            'menu' => 'main_menu',
            'menu_class' => 'sf-menu',
            'container' => ''
          )); ?>

        </div>
      </div>
      <div id="search" class="search">
        <form method="get" class="search-block" action="/">
          <input type="text" name="s" placeholder="Search"/><button type="submit" class="button-search"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
  </div>
</header>