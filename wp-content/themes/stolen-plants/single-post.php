<? include THEME_HELPERS . 'single-post.php' ?>
<? get_header(); ?>
<? the_post(); ?>

<div class="container">
  <ul class="breadcrumb">
    <li>
      <a href="/"><i class="fa fa-home"></i></a>
    </li>
    <? if(isset($content['category']['name'])): ?>
      <li>
        <a href="<?= $content['category']['link'] ?>">
          <?= $content['category']['name'] ?>
        </a>
      </li>
    <? endif; ?>
    <li>
      <span><? the_title(); ?></span>
    </li>
  </ul>
  <div class="row">
    <div id="content" class="col-sm-12 product_page">
      <div class="row product-content-columns">

        <div class="col-sm-5 col-lg-7 product_page-left clearfix">
          <div id="default_gallery" class="product-gallery">
            <div id="product-image" class="product-image">
              <div class="magnificent-wrap">
                <div class="magnificent magnificent-mode-inner" data-magnificent="product-image">
                  <div class="polaroid">
                    <div class="inner" style="position: relative; text-align:center">
                      
                      <? if(has_post_thumbnail()): ?>
                        <? the_post_thumbnail('large') ?>
                      <? else: ?>
                        <img src="<?= get_stylesheet_directory_uri(). "/images/default.jpg"; ?>">
                      <? endif; ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-7 col-lg-5 product_page-right clearfix">
          <div class="general_info product-info">
            <h1><? the_title(); ?></h1>
          </div>
          <p><? the_content(); ?></p>
        </div>
      </div>

      <? if ( $simular_posts->have_posts() ): ?>
        <div class="related-products product-section">
          <h3 class="product-section_title">Похожие</h3>
          <div class="box-carousel owl-carousel">

            <? while ( $simular_posts->have_posts() ): $simular_posts->the_post(); ?>
              <? $img_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) )?>
              <? $img_url = !empty($img_url) ? $img_url : get_stylesheet_directory_uri(). "/images/default.jpg"; ?>
              <div class="product-thumb transition options">
                <div class="image">
                  <a class="lazy lazy-loaded" style="padding-bottom: 100%" href="<? the_permalink(); ?>">
                    <img alt="<? the_title(); ?>" title="<? the_title(); ?>" class="img-responsive" data-src="<?= get_thumbnail($post) ?>" src="<?= get_thumbnail($post) ?>">
                  </a>
                </div>
                <div class="caption">
                  <div class="name">
                    <a href="<? the_permalink(); ?>"><? the_title(); ?></a>
                  </div>
                </div>
                <div class="clear"></div>
              </div>
            <? endwhile; ?>
            <? wp_reset_query(); ?>

          </div>
        </div>
      <? endif; ?>

    </div>
  </div>
</div>

<? get_footer(); ?>