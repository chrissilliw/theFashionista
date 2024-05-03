<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head(); ?>
</head>
<body>

    <header>
        <div class="container menu-container">
            <div class="logo">
                <span>Logo</span>
            </div>

            <div class="nav-items">
                <?php 
                    wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu',
                            'menu_class' => 'main-menu',
                        )
                    )
                ?>

                <?php 
                    wp_nav_menu(
                        array(
                            'theme_location' => 'store-menu',
                            'menu_class' => 'store-menu',
                        )
                    )
                ?>

                <div class="search-container">
                    <!-- <input type="text" />
                    <input class="search-btn" type="submit" value="Sök"/> -->
                    <?php get_search_form(); ?>
                </div>
            </div>
            <div class="nav-hamburger-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="nav-items-mobile-container">
            <div class="nav-items-mobile">
                <?php 
                    wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu',
                            'menu_class' => 'main-menu',
                        )
                    )
                ?>

                <?php 
                    wp_nav_menu(
                        array(
                            'theme_location' => 'store-menu',
                            'menu_class' => 'store-menu',
                        )
                    )
                ?>
            </div>
        </div>
    </header>