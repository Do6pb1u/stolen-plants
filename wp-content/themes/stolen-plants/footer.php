<? global $general; ?>

<section class="content_bottom">
  <div class="container">
    <div class="row">
      <div id="parallax_42" class="parallax">
        <div data-source-url="/wp-content/themes/stolen-plants/images/paralax2.jpg" class="parallax-2" style="width: 1280px; margin-left: -640px; left: 50%; background-image: url(&quot;/wp-content/themes/stolen-plants/images/paralax2.jpg&quot;); background-attachment: fixed; background-position: 50% 80%;">
        </div>
      </div>
    </div>
  </div>
  <script>
    jQuery(document).ready(function () {
        jQuery("#parallax_42>div").cherryFixedParallax({
            invert: false
        });
    });
  </script></div></div>
</section>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-xs-6 col-sm-3">
        <div class="footer_box">
          <h5>Информация</h5>

          <? wp_nav_menu( array(
            'menu' => 'footer_info',
            'menu_class' => 'list-unstyled',
            'container' => ''
          )); ?>

        </div>
      </div>
      <div class="col-xs-6 col-sm-3">
        <div class="footer_box">
          <h5>Категории</h5>

          <? wp_nav_menu( array(
            'menu' => 'main_menu',
            'menu_class' => 'list-unstyled',
            'container' => ''
          )); ?>

        </div>
      </div>
      <div class="col-xs-6 col-sm-4 col-sm-offset-2">
        <div class="footer_box">
          <h5>Свяжитесь с нами</h5>
          <ul class="list-unstyled contact-block">
            <li>
              <i class="fa fa-map-marker"></i>
              <p>
                <a href="http://maps.google.com/maps?ll=<?= $general['hero_google_y'] ?>,<?= $general['hero_google_x'] ?>&amp;z=14&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" target="_blank"><?= $general['hero_google_balloon_text'] ?></a> 
              </p>
            </li>
            <li><i class="fa fa-phone"></i><a href="tel:<?= $general['header_phone_number_filtered']; ?>">
              <?= $general['header_phone_number']; ?>
            </a></li>
            <li><i class="fa fa-envelope-o"></i><a href="mailto:<?= $general['email_address'] ?>" >
              <?= $general['email_address'] ?>
            </a></li>
          </ul>
          <div class="social-block"> </div>
        </div>
      </div>
    </div>
  </div>

  <? if(is_home() || is_front_page()): global $content; ?>
    <section class="bottom">
      <div class="map">
        <div id="google-map" class="map_model" data-zoom="14"
          data-y="<?= $general['hero_google_y']; ?>"
          data-x="<?= $general['hero_google_x']; ?>"
          data-disable-ui="false"
          data-scrollwheel="false"
          data-draggable="true"
          style="height:400px; width: 100%">
        </div>
        <ul class="map_locations">
          <li data-x="<?= $general['hero_google_x']; ?>"
            data-y="<?= $general['hero_google_y']; ?>">
            <p> <?= $general['hero_google_balloon_text']; ?></p>
          </li>
        </ul>
      </div>
      <script>
        var tmp =1;
        var marker_path = '<?php echo get_stylesheet_directory_uri() ?>/images/marker_map-42x63.png';
        var marker_active_path = '<?php echo get_stylesheet_directory_uri() ?>/images/marker_map_active-42x63.png';
        var styles = [];
        var type;
        switch (tmp) {
            case 1:
                type = google.maps.MapTypeId.ROADMAP;
                break;
            case 2:
                type = google.maps.MapTypeId.TERRAIN;
                break;
            case 3:
                type = google.maps.MapTypeId.HYBRID;
                break;
            case 4:
                type = google.maps.MapTypeId.SATELLITE;
                break;
            default:
                type = google.maps.MapTypeId.ROADMAP;
        }
        jQuery(document).ready(function ($) {
            var o = $('#google-map');
            o.googleMap({
                marker: {
                    basic: marker_path,
                    active: marker_active_path
                },
                type: type,
                styles: styles,
                zoom: 3
            });
        });
      </script>
    </section>
  <? endif; ?>

  <div class="copyright">
    <div class="container">
      <?= $general['copyright_text']; ?>
    </div>
  </div>
</footer>
</div>
<div class="ajax-overlay"></div>
<? wp_footer();
  ?>
</html>