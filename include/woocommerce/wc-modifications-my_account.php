<?php

function my_account_menu_order() {
    $menuOrder = array (
        'dashboard' =>  __( 'Dashboard', 'woocommerce' ),
        'orders' =>  __( 'Orders', 'woocommerce' ),
        'edit-adress' =>  __( 'Adresses', 'woocommerce' ),
        'edit-account' =>  __( 'Account Details ', 'woocommerce' ),
        'cusotmer-logout' =>  __( 'Logout', 'woocommerce' ),
    );
    return $menuOrder;
}
add_filter ( 'woocommerce_account_menu_items', 'my_account_menu_order' );