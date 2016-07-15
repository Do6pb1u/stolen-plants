<? get_header(); ?>

<div class="container">
  <ul class="breadcrumb">
    <li>
      <a href="/">
        <i class="fa fa-home"></i>
      </a>
    </li>
    <li>
      <span><?= single_cat_title(); ?></span>
    </li>
  </ul>

  <div class="box featured">
    <div class="box-heading">
      <h1><?= single_cat_title(); ?></h1>
    </div>

    <? if(have_posts()): ?>
      <div class="box-content">
        <div class="row">

          <? while ( have_posts() ) : the_post(); ?>
            <div class="product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12">
              <div class="product-thumb transition options">
                <div class="image">
                  <a class="lazy" style="padding-bottom: 100%" href="<? the_permalink(); ?>">
                  <img alt="<? the_title(); ?>" title="<? the_title(); ?>" class="img-responsive" data-src="<?= get_thumbnail($post) ?>"> </a>
                </div>
                <div class="caption">
                  <div class="name"> <a href="<?= the_permalink(); ?>"><? the_title(); ?></a> </div>
                </div>
              </div>
            </div>
          <? endwhile; ?>
          <? wp_reset_query(); ?>

        </div>
      </div>
    <? endif; ?>

  </div>

</div>

<? get_footer(); ?>