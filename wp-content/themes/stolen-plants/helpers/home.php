<?
$content = array();

$content['hero_main_text'] = get_field("hero_main_text");
$content['hero_main_description'] = get_field("hero_description");
$hero_main_image_id = get_field("hero_main_image");
$content['hero_main_image_url'] = wp_get_attachment_url( $hero_main_image_id );

$args = array(
  'post_type'       => 'post',
  'orderby'         => 'rand',
  'posts_per_page'  => '8'
);
// Custom query.
$content['random_posts'] = new WP_Query( $args );

?>