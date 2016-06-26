<?
$content = array();

$content['hero_main_text'] = get_field("hero_main_text");
$hero_main_image_id = get_field("hero_main_image");
$content['hero_main_image_url'] = wp_get_attachment_url( $hero_main_image_id );

// feature pages
$interesting_pages = array();
while (have_rows('hero_interesting_pages')) { the_row();
  $page_data = array();

  $page_preview_id = get_sub_field('page_preview');
  $page_data['page_preview_img'] = wp_get_attachment_image($page_preview_id, 'medium');

  $page_data['link_text'] = get_sub_field('link_text');

  $link_swithcer = get_sub_field('link_switcher');

  switch($link_swithcer) {
    case "page":
      $page_data['link_url'] = get_sub_field('link');
      break;
    case "external":
      $page_data['link_url'] = get_sub_field('external_link');
      break;
  }

  $interesting_pages[] = $page_data;
}

$content['featured_pages'] = $interesting_pages;

$args = array(
  'post_type'       => 'post',
  'orderby'         => 'rand',
  'posts_per_page'  => '8'
);
// Custom query.
$content['random_posts'] = new WP_Query( $args );

?>