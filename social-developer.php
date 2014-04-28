<?php
/*
Plugin Name: Social Developer
Plugin URI: http://luke-watts.com
Description: Easily add Github and Codepen icons to your theme using shortcodes. More features to come like widgets and more icons.
Version: 0.0.1
Author: Luke Watts
Author URI: http://luke-watts.com/
License: GPLv2
*/

/**
 * Register Genericons CSS
 */
function lw_sd_load_styles() {
  // Set path to genericons.css
  $genericons_url = plugins_url( 'genericons/genericons.css', __FILE__ );

  // Add genericons stylesheet for use by the shortcodes
  wp_enqueue_style( 'genericons', $genericons_url );
}

add_action( 'wp_enqueue_scripts', 'lw_sd_load_styles' );

/**
 * Add Github shortcode
 *
 * @param  $atts (required) Parses users text in sortcodes attributes
 */
function lw_sd_github_shortcode( $atts ) {

  // Attributes
  extract( shortcode_atts(
    
    array(
      'link'  => 'https://github.com',
      'size'  => '12px',
      'new_tab' => 'yes'
    ), $atts, 'lw_sd_github_shortcode' )

  );

  if ( $new_tab == 'no' || $new_tab == 'false' ) {
    $target = '_self';
  }
  else {
    $target = '_blank';
  }

  // Set HTML
  $output = '<a href="' . $link . '" target="' . $target . '"><span style="font-size: ' . $size . ';height: ' . $size . ';width: ' . $size . ';" class="genericon genericon-github"></span></a>';

  return $output;
}

add_shortcode( 'sd_github', 'lw_sd_github_shortcode' );


/**
 * Add Codepen shortcode
 */
function lw_sd_codepen_shortcode( $atts ) {

  // Attributes
  extract( shortcode_atts(

    array(
      'link'  => 'http://codepen.io',
      'size'  => '12px',
      'new_tab' => 'yes'
    ), $atts, 'lw_sd_codepen_shortcode' )

  );

  if ( $new_tab == 'no' || $new_tab == 'false' ) {
    $target = '_self';
  }
  else {
    $target = '_blank';
  }

  // Set HTML
  $output = '<a href="' . $link . '"  target="' . $target . '"><span style="font-size: ' . $size . ';height: ' . $size . ';width: ' . $size . ';" class="genericon genericon-codepen"></span></a>';

  return $output;
}

add_shortcode( 'sd_codepen', 'lw_sd_codepen_shortcode' );


/**
 * Add all Quicktags
 */
function lw_sd_quicktags() {

  if ( wp_script_is( 'quicktags' ) ) {
  ?>

  <script type="text/javascript">
  // Github Shortcode
  QTags.addButton( 'lw_sd_github', 'Github', '[sd_github link="https://github.com/" size="12px" new_tab="yes"]', '', 'g', 'Github Icon Shortcode', 200 );

  // Codepen Shortcode
  QTags.addButton( 'lw_sd_codepen', 'Codepen', '[sd_codepen link="http://codepen.io/" size="12px" new_tab="yes"]', '', 'p', 'Codepen Icon Shortcode', 200 );
  </script>
  
  <?php
  }

}

add_action( 'admin_print_footer_scripts', 'lw_sd_quicktags' );