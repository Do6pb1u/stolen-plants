<? include THEME_HELPERS . 'home.php'; ?>
<? get_header(); ?>

<section id="container">
  <div class="container">
    <div class="row">
      <div id="content" class="col-sm-12">
        <div id="banner0" class="banners row">

          <? foreach($content['featured_pages'] as $index => $page): ?>
            <div class="col-sm-4 banner-<? echo ($index+1); ?>">
              <div class="banner-box">
                <a class="clearfix" href="<?= $page['link_url'] ?>">
                  <?= $page['page_preview_img'] ?>
                  <div class="s-desc">
                    <div class="circle color-<?= $index ?>">
                      <div>
                        <?= $page['link_text'] ?><br>
                        <i class="fa fa-eye"></i>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          <? endforeach; ?>

        </div>

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
                        <img alt="<? the_title(); ?>" title="<? the_title(); ?>" class="img-responsive" data-src="<?= get_thumbnail($post); ?>" src="<?= get_thumbnail($post) ?>"/> </a>
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