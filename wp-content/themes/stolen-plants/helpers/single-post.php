<?

$content = array();

$category = array_shift(wp_get_post_terms( $post->ID, 'category', array('limit' => 1)) );
if($category) {
  $content['category']['slug'] = $category->slug;
  $content['category']['name'] = $category->name;
  $content['category']['link'] = get_term_link($category->term_id);  
}

$args = array(
  'post_type'       => 'post',
  'category_name'   => isset($content['category']['slug']) ? $content['category']['slug'] : "none",
  'post__not_in'    => array($post->ID),
  'orderby'         => 'rand',
  'posts_per_page'  => '10'
);
// Custom query.
$simular_posts = new WP_Query( $args );

?>