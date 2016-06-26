<?

$content = array();

$category = array_shift(wp_get_post_terms( $post->ID, 'category', array('limit' => 1)) );
if($category) {
  $content['category']['name'] = $category->name;
  $content['category']['link'] = get_term_link($category->term_id);  
}

$args = array(
  'post_type'       => 'post',
  'cat'             => 'category',
  'post__not_in'    => array($post->ID),
  'orderby'         => 'rand',
  'posts_per_page'  => '15'
);
// Custom query.
$simular_posts = new WP_Query( $args );

?>