<?php
/**
 * Plugin Name: WooCommerce Disable Checkout Autocomplete
 * Plugin URI: https://www.bedrukt.nl
 * Description: Uitschakelen van de auto-complete op de velden van de checkout.
 * Version: 1.0.0
 * Author: J.P. van der Meer
 * Author URI: https://www.bedrukt.nl
 * License: GPL2
 * WC requires at least: 3.3
 * WC tested up to: 4.7.0
 */

// Disable Checkout Autocomplete

function wc_checkout_disable_autocomplete($args) {
    if (is_checkout()) {
        unset($args['autocomplete']);
    }

    return $args;
}
add_filter('woocommerce_form_field_args', 'wc_checkout_disable_autocomplete', 10);
