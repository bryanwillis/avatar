 <?php
/*
Plugin Name: Get Avatar Shortcode
Plugin Script: get_avatar_shortcode.php
Plugin URI: http://www.wordpress.org/get_avatar_shortcode
Description: Allows you to use avatars/gravatars or profile pictures as shortcodes the same way you would in templates
Version: 0.1
License: GPL
Author: Bryan Willis
Author URI: http://profiles.wordpress.org/codecandid

=== RELEASE NOTES ===
2014-06-13 - v0.1
*/

if ( function_exists( 'get_avatar' ) ) {
function candid_user_gravatar_shortcode ( $attributes ) {
	  global $current_user;
      get_currentuserinfo();
	  extract(shortcode_atts(array(
		  	   "id"=> $current_user->ID,
		       "size"=> 32,
		       "default"=> 'mystery',
		       "alt"=> '',
		       "class"=> '',
		       "style"=> '',
	  ), $attributes, 'get_avatar' ));
	  $get_avatar= get_avatar( $id, $size, $default, $alt );
	   ?>
<style type="text/css">
.get_avatar{display:inline-block}.get_avatar img.avatar.photo{display:block}.get_avatar.circle img.avatar.photo{border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%}.get_avatar.rounded img.avatar.photo{border-radius:5%;-moz-border-radius:5%;-webkit-border-radius:5%}
</style>
<?php
	  return '<span class="get_avatar '.$class.'" style="'.$style.'">'.$get_avatar.'</span>';
}
add_shortcode ('get_avatar', 'candid_user_gravatar_shortcode');
}

?>