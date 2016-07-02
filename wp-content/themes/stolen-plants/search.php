<?php
/*
Template Name: Search Page
*/
?>

<? get_header(); ?>

<div class="container">
  <ul class="breadcrumb">
    <li>
      <a href="/">
        <i class="fa fa-home"></i>
      </a>
    </li>
    <li>
      <span>Поиск (<?= count($posts); ?> совпадений для "<?= get_search_query(); ?>")</span>
    </li> 
  </ul>

  <div class="box featured">
    <div class="box-heading">
      <h1>Результат Поиска</h1>
    </div>
    <div class="box-content">
      <div class="row">

        <? if(have_posts()): ?>
          <? while ( have_posts() ) : the_post(); ?>
            <div class="product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12">
              <div class="product-thumb transition options">
                <div class="image">
                  <a class="lazy lazy-loaded" style="padding-bottom: 100%" href="<? the_permalink(); ?>">
                  <img alt="<? the_title(); ?>" title="<? the_title(); ?>" class="img-responsive" data-src="<?= get_thumbnail($post) ?>" src="<?= get_thumbnail($post) ?>"> </a>
                </div>
                <div class="caption">
                  <div class="name"> <a href="#"><? the_title(); ?></a> </div>
                </div>
              </div>
            </div>
          <? endwhile; ?>
          <? wp_reset_query(); ?>
        <? else: ?>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p>
              <?= count($posts); ?> совпадений для "<?= get_search_query(); ?>"
            </p>
          </div>
        <? endif; ?>

      </div>
    </div>

  </div>

</div>

<? get_footer(); ?>