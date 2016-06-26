<?
$general = array();

$header_logo_id = get_field('header_logo', 'option');
$general['header_logo'] = wp_get_attachment_url( $header_logo_id );

$general['site_name'] = get_bloginfo('name');
$general['header_middle_text']  = get_field('header_middle_text', 'option');
$general['header_phone_number'] = get_field('header_phone_number', 'option');
$general['header_phone_number_filtered'] = preg_replace('/[^0-9\+]/', '', $general['header_phone_number']);
$general['email_address']   = get_field('email_address', 'option');
$general['copyright_text']  = get_field('copyright_text', 'option');
$general['hero_google_x']   = get_field('hero_google_x', 'option');
$general['hero_google_y']   = get_field('hero_google_y', 'option');
$general['hero_google_balloon_text'] = get_field('hero_google_balloon_text', 'option');

?>