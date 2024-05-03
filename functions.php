<?php

// =========================================================================
// LOAD BOOTSTRAP CSS & CUSTOM MAIN.CSS
// =========================================================================
function load_css() {
    wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style( 'fullWidthImageSection', get_template_directory_uri() . '/css/full_width_image_section.css');
    wp_enqueue_style( 'blockSection', get_template_directory_uri() . '/css/block_section.css');
    wp_enqueue_style( 'shopPage', get_template_directory_uri() . '/css/shop.css');
    wp_enqueue_style( 'singleProductPage', get_template_directory_uri() . '/css/single_product.css');
    wp_enqueue_style( 'cartPage', get_template_directory_uri() . '/css/cart.css');
    wp_enqueue_style( 'checkoutPage', get_template_directory_uri() . '/css/checkout.css');
    wp_enqueue_style( 'loginRegister', get_template_directory_uri() . '/css/login_register.css');
    wp_enqueue_style( 'myAccount', get_template_directory_uri() . '/css/my_account.css');
    wp_enqueue_style( 'customStoreType', get_template_directory_uri() . '/css/custom_store_type.css');
    wp_enqueue_style( 'customArchiveStoreType', get_template_directory_uri() . '/css/custom_archive_store_type.css');
    wp_enqueue_style( 'contact', get_template_directory_uri() . '/css/contact.css');
    wp_enqueue_style( 'news', get_template_directory_uri() . '/css/news-archive.css');
    wp_enqueue_style( 'singlePost', get_template_directory_uri() . '/css/single_post.css');
    wp_enqueue_style( 'mediaQueriesNavbar', get_template_directory_uri() . '/css/media_queries/navbar.css');
    wp_enqueue_style( 'mediaQueriesNewsPage', get_template_directory_uri() . '/css/media_queries/news-page.css');
}
add_action('wp_enqueue_scripts', 'load_css');

// =========================================================================
// LOAD BOOTSTRAP JAVASCRIPT
// =========================================================================
function load_js() {
    wp_enqueue_script( 'bootstrap_jquery', '//code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.3.1', true );
    wp_enqueue_script( 'bootstrap_popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js', array(), '1.14.7', true );
    wp_enqueue_script( 'bootstrap_javascript', '//stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js', array(), '4.3.1', true );

    wp_enqueue_script('loginRegister-js', get_stylesheet_directory_uri(). '/js/login_register.js', array(), false, true);
    wp_enqueue_script('navbarAnimation-js', get_stylesheet_directory_uri(). '/js/navbar_animation.js', array(), false, true);
}
add_action( 'wp_enqueue_scripts', 'load_js' );


function mytheme_add_woocommerce_support() {
	add_theme_support('woocommerce', array(
        //"thumbnail_image_width" => 150,
        "product_grid" => array(
            "default_columns" => 2,
            "min_columns" => 2,
            "max_columns" => 2
        )
    ));

    // produt thumbnail, 
// add_theme_support("wc-product-gallery-zoom");
add_theme_support("wc-product-gallery-lightbox");
add_theme_support("wc-product-gallery-slider");
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
// =========================================================================
// THEME OPTIONS
// =========================================================================
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support('custom-logo');

function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => false, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
// =========================================================================
// MENUS
// =========================================================================
register_nav_menus(
    array(
        'main-menu' => 'Main Menu Location',
        'store-menu' => 'Store Menu Location',
    )
);

// =========================================================================
// REGISTER WIDGETS
// =========================================================================

// REGISTER BLOG SIDEBAR

    function register_blog_sidebar() {

        register_sidebar(
            array(
                'id'            => 'blog-sidebar',
                'name'          => 'Blog Sidebar',
                'description'   => 'This widget area discription',  
                'before_widget' => '<section class="blog-sidebar-area">',
                'after_widget'  => '</section>',
                'before_title'  => '<h4>',
                'after_title'   => '</h4>',
            )

        );
      }

    add_action( 'widgets_init', 'register_blog_sidebar' );

// REGISTER LEFT AND RIGHT SIDEBAR

    function register_all_sidebars() {

        register_sidebar(    
            array(
                'id'            => 'left-sidebar',
                'name'          => 'Left Sidebar',
                'description'   => 'This widget area discription',  
                'before_widget' => '<section class="left-sidebar-widget-container">',
                'after_widget'  => '</section>',
                'before_title'  => '<h4>',
                'after_title'   => '</h4>',
            )
        );

      }

    add_action( 'widgets_init', 'register_all_sidebars' );

// REGISTER FOOTER AREAS

    function register_footer_widget_areas() {

        register_sidebar( 
            array(
                'id'            => 'footer_area_left',
                'name'          => 'Footer Area Left',
                'description'   => 'This widget area discription',
                'before_widget' => '<section class="footer-area footer-area-left">',
                'after_widget'  => '</section>',
                'before_title'  => '<h4>',
                'after_title'   => '</h4>',
            )
        );

        register_sidebar( 
            array(
                'id'            => 'footer_area_center',
                'name'          => 'Footer Area Center',
                'description'   => 'This widget area discription',
                'before_widget' => '<section class="footer-area footer-area-center">',
                'after_widget'  => '</section>',
                'before_title'  => '<h4>',
                'after_title'   => '</h4>',
            )
        );

        register_sidebar( 
            array(
                'id'            => 'footer_area_right',
                'name'          => 'Footer Area Right',
                'description'   => 'This widget area discription',
                'before_widget' => '<section class="footer-area footer-area-right">',
                'after_widget'  => '</section>',
                'before_title'  => '<h4>',
                'after_title'   => '</h4>',
            )
        );

        register_sidebar( 
            array(
                'id'            => 'footer_area_bottom',
                'name'          => 'Footer Area Bottom',
                'description'   => 'This widget area discription',
                'before_widget' => '<section class="footer-area-bottom">',
                'after_widget'  => '</section>',
                'before_title'  => '<h4>',
                'after_title'   => '</h4>',
            )
        );
      }

    add_action( 'widgets_init', 'register_footer_widget_areas' );

// =========================================================================
// CHANGE EXCERPT LENGTH
// =========================================================================
function my_excerpt_length($length) {
    return 15;
}
add_filter('excerpt_length', 'my_excerpt_length');

// =========================================================================
// CUSTOM IMAGE SIZES
// =========================================================================
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 400, 300, true);
add_image_size('template-size', 500, 500, true);
add_image_size('slider-size', 1200, 700, true);

// =========================================================================
// ARCHIVE-PRODUCT -- HOOKS
// =========================================================================
include_once 'include/woocommerce/wc-modifications-archive_product.php';

// =========================================================================
// SINGLE-PRODUCT -- MODIFICATIONS
// =========================================================================
include_once 'include/woocommerce/wc-modifications-single_product.php';

// =========================================================================
// MY-ACCOUNT -- MODIFICATIONS
// =========================================================================
include_once 'include/woocommerce/wc-modifications-my_account.php';

// =========================================================================
// CUSTOM POST TYPES -- STORES
// =========================================================================
function post_type_stores() {

    $args = array( 
        'labels' => array(
            'name' => 'Stores',
            'singular_name' => 'Store',
        ),
        'has_archive' => true,
        'hierachical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-store',
        'supports' => array(
        'title',
        'editor',
        'thumbnail'
        ),
    );

    register_post_type( 'stores', $args ); 
     
}
add_action('init', 'post_type_stores');

function post_type_taxonomy() {

    $args = array(
        'labels' => array(
            'name' => 'Locations', 
            'singular_name' => 'Location',
        ),
        'public' => true,
        'hierachical' => true,
    );

    register_taxonomy('location', array('stores'), $args);

}
add_action('init', 'post_type_taxonomy');

// =========================================================================
// SET SHIPPING SETTINGS
// =========================================================================
function get_free_shipping_min_amount () {
    $zone_ids = array_keys( array('') + WC_Shipping_Zones::get_zones() );
    foreach ( $zone_ids as $zone_id ) {
        $shipping_zone = new WC_Shipping_Zone($zone_id);
 
        $shipping_methods = $shipping_zone->get_shipping_methods( true, 'values' );
 
        foreach ( $shipping_methods as $instance_id => $shipping_method ) {
            if($shipping_method->id == "free_shipping") {
                return $shipping_method->min_amount;
 
            }
        }
    }   
}
function cart_page_notice() {
    $min_amount  = (int)get_free_shipping_min_amount();
    $current = WC()->cart->subtotal;
    if ( $current < $min_amount ) {
        $added_text = '<div class="woocommerce-message">Köp produkter för ' . wc_price( $min_amount - $current ) . ' till gratis frakt!<br/>';
        $return_to = wc_get_page_permalink( 'shop' );
        $notice = sprintf( '%s<a href="%s">%s</a>', $added_text, esc_url( $return_to ), 'Continue shopping</div>' );
        echo $notice;
    }
}

add_filter( 'woocommerce_package_rates', 'hide_shipping_when_free_is_available', 10, 2 );
 
add_action( 'woocommerce_before_cart_table', 'cart_page_notice' );