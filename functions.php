<?php
/**
 * Main file
 */

/**
 * Initialize all the things. 
 */
require get_template_directory() . '/inc/init.php';
function enqueue_our_required_stylesheets(){
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
   

}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');
/**
 * Note: Do not add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * http://codex.wordpress.org/Child_Themes
 */
add_filter( 'woocommerce_currencies', 'add_my_currency' );

function add_my_currency( $currencies ) {
     $currencies['IRT'] = __( 'تومان', 'woocommerce' );
     return $currencies;
}

add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);

function add_my_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'ّIRT': $currency_symbol = 'تومان'; break;
     }
     return $currency_symbol;
}