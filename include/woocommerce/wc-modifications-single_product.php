<?php 

//ADD CONTAINER & ROW CLASS
function open_container_row_div_classes() {
    echo "<div class='container cw-single-product-container'><div class='row cw-single-product-row'>";
}

add_action("woocommerce_before_single_product_summary", "open_container_row_div_classes");

function close_container_row_div_classes() {
    echo "</div></div>";
}

add_action("woocommerce_after_single_product_summary", "close_container_row_div_classes");

global $product;


//REORDER SINGLE PAGE HOOKS
remove_action( 'woocommerce_single_product_summary',  'woocommerce_template_single_meta', 40);
remove_action( 'woocommerce_after_single_product_summary',  'woocommerce_output_product_data_tabs', 10);





//REMOVE QUANTITY OPTION ON ALL PRODUCTS

function cw_remove_quantity_fields( $return, $product ) {
    return true;
}
add_filter( 'woocommerce_is_sold_individually', 'cw_remove_quantity_fields', 10, 2 );

//REMOVE RESET VARIATION BUTTON
add_filter('woocommerce_reset_variations_link', '__return_empty_string');
