<? global $general; ?>

<section class="content_bottom">
  <div class="container">
    <div class="row">
      <div id="parallax_42" class="parallax">
        <div data-source-url="http://stolen-plants/wp-content/themes/stolen-plants/images/paralax2.jpg" class="parallax-2" style="width: 1280px; margin-left: -640px; left: 50%; background-image: url(&quot;http://stolen-plants/wp-content/themes/stolen-plants/images/paralax2.jpg&quot;); background-attachment: fixed; background-position: 50% 80%;">
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
          <h5>Information</h5>
          <ul class="list-unstyled">
            <li>
              <a href="index8816.html?route=information/information&amp;information_id=4">About Us</a>
            </li>
            <li>
              <a href="index1766.html?route=information/information&amp;information_id=6">Delivery Information</a>
            </li>
            <li>
              <a href="index1679.html?route=information/information&amp;information_id=3">Privacy Policy</a>
            </li>
            <li>
              <a href="index99e4.html?route=information/information&amp;information_id=5">Terms &amp; Conditions</a>
            </li>
            <li>
              <a href="index7cb2.html?route=information/sitemap">Site Map</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-xs-6 col-sm-3">
        <div class="footer_box category-block"> </div>
      </div>
      <div class="col-xs-6 col-sm-3">
        <div class="footer_box">
          <h5>My Account</h5>
          <ul class="list-unstyled">
            <li>
              <a href="index839c.html?route=account/account">My Account</a>
            </li>
            <li>
              <a href="indexee92.html?route=account/order">Order History</a>
            </li>
            <li>
              <a href="index4628.html?route=account/wishlist">Wish List</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-xs-6 col-sm-3">
        <div class="footer_box">
          <h5>Contact Us</h5>
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
        <div id="google-map" class="map_model" data-zoom="17"
          data-y="<?= $content['google']['y']; ?>"
          data-x="<?= $content['google']['x']; ?>"
          data-disable-ui="false"
          data-scrollwheel="false"
          data-draggable="true"
          style="height:400px; width: 100%">
        </div>
        <ul class="map_locations">
          <li data-x="<?= $content['google']['x']; ?>"
            data-y="<?= $content['google']['y']; ?>">
            <p> <?= $content['google']['description']; ?></p>
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
                styles: styles
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