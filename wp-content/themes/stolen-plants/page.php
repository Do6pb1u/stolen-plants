<? include THEME_HELPERS . 'single-post.php' ?>
<? get_header(); ?>
<? the_post(); ?>

<div class="container">
  <ul class="breadcrumb">
    <li>
      <a href="/"><i class="fa fa-home"></i></a>
    </li>
    <li>
      <span><? the_title(); ?></span>
    </li>
  </ul>
  <div class="row">
    <div id="content" class="col-sm-12 product_page">
      <div class="row product-content-columns">

        <div class="col-sm-12 col-lg-12 product_page-right clearfix">
          <div class="general_info product-info">
            <h1><? the_title(); ?></h1>
          </div>
          <p><? the_content(); ?></p>
        </div>
      </div>

    </div>
  </div>
</div>

<? get_footer(); ?>