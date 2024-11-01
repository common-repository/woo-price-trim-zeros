<?php
/*
Plugin Name: Woocommerce Price Trim Zeros
Plugin URI:
Description: This plugin will help you to remove .00 from woocommerce product prices, which is showing on frontend.
Version: 1.0.0
Author: Therichpost
Author URI: https://therichpost.com
*/

define( 'Woocommerce_Remove_00trailing_Zero', '1.0.0' );
define( 'Woocommerce_Remove_00trailing_Zero' , plugin_dir_path( __FILE__ ));

add_filter( 'woocommerce_price_trim_zeros', 'wc_hide_trailing_zeros' );
function wc_hide_trailing_zeros( $trim ) {
// set to true to hide trailing zeros
return true;
}