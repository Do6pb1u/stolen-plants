<? include THEME_HELPERS . 'category.php' ?>
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
      <h3><?= single_cat_title(); ?></h3>
    </div>

    <? if(have_posts()): ?>
      <div class="box-content">
        <div class="row">

          <? while ( have_posts() ) : the_post(); ?>
            <? $img_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) )?>
            <? $img_url = !empty($img_url) ? $img_url : get_stylesheet_directory_uri(). "/images/default.jpg"; ?>
            <div class="product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12">
              <div class="product-thumb transition options">
                <div class="image">
                  <a class="lazy lazy-loaded" style="padding-bottom: 100%" href="<? the_permalink(); ?>">
                  <img alt="<? the_title(); ?>" title="<? the_title(); ?>" class="img-responsive" data-src="<?= $img_url ?>" src="<?= $img_url ?>"> </a>
                </div>
                <div class="caption">
                  <div class="name"> <a href="#"><? the_title(); ?></a> </div>
                </div>
              </div>
            </div>
          <? endwhile; ?>

        </div>
      </div>
    <? endif; ?>

  </div>

</div>

<? get_footer(); ?>