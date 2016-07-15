<? include THEME_HELPERS . 'home.php'; ?>
<? get_header(); ?>

<section id="container">
  <div class="container">
    <div class="row">
      <div id="content" class="col-sm-12">

        <? if(!empty($content['hero_main_description'])): ?>
          <div class="banners row">
            <div class="col-sm-12">
              <div class="banner-box">
                <div class="s-desc">
                  <?= $content['hero_main_description'] ?>
                </div>
              </div>
            </div>
          </div>
        <? endif; ?>

        <? if($content['random_posts']->have_posts()): ?>
          <div class="box featured">
            <div class="box-heading">
              <h3>Рекомендуемые</h3>
            </div>
            <div class="box-content">
              <div class="row">

                <? while($content['random_posts']->have_posts()): $content['random_posts']->the_post(); ?>
                  <div class="product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="product-thumb transition options">
                      <div class="image">
                        <a class="lazy" style="padding-bottom: 100%" href="<? the_permalink(); ?>">
                        <img alt="<? the_title(); ?>" title="<? the_title(); ?>" class="img-responsive" data-src="<?= get_thumbnail($post); ?>"/> </a>
                      </div>
                      <div class="caption">
                        <div class="name"> <a href="#"><? the_title(); ?></a> </div>
                      </div>
                    </div>
                  </div>
                <? endwhile; ?>
                <? wp_reset_query(); ?>

              </div>
            </div>
          </div>
        <? endif; ?>

      </div>
    </div>
  </div>
</section>

<? get_footer(); ?>