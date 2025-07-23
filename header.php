    <?php
    /**
     * The header for our theme.
     *
     * This is the template that displays all of the <head> section and everything up until <main>.
     * It's included in other template files using get_header().
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package myfirstpageTheme
     */
    ?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>> <!-- language_attributes() outputs HTML language attributes based on WordPress settings -->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>"> <!-- bloginfo('charset') outputs the character set (e.g., UTF-8) -->
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Essential for responsive design -->
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <?php wp_head(); // REQUIRED: This function is crucial! It hooks into the 'wp_head' action and allows WordPress plugins and themes to add scripts, styles, and meta tags to the <head> section. Without it, many features won't work. ?>
        <!-- Google Fonts: Inter - Loaded directly for simplicity, but ideally enqueued in functions.php -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    </head>

    <body <?php body_class(); ?>> <!-- body_class() adds dynamic CSS classes to the body tag, useful for styling different page types -->
        <div id="page" class="site">
            <!-- A skip-link for accessibility, allows users to skip repetitive navigation -->
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rtcamp-custom-theme' ); ?></a>

            <header id="masthead" class="site-header">
                <div class="container">
                    <div class="site-branding">
                        <?php
                        // Displays the site title.
                        // is_front_page() and is_home() check if the current page is the static front page or the blog posts index page.
                        if ( is_front_page() && is_home() ) :
                            ?>
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <?php
                        else :
                            ?>
                            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                            <?php
                        endif;
                        // bloginfo('name') outputs the site title set in WordPress General Settings.
                        // home_url('/') gets the URL of your WordPress site's homepage.
                        // esc_url() sanitizes the URL for security.
                        ?>
                    </div><!-- .site-branding -->

                    <nav id="site-navigation" class="main-navigation">
                        <?php
                        // wp_nav_menu() displays a navigation menu.
                        // 'theme_location' specifies which registered menu location to use (defined in functions.php).
                        // 'menu_id' sets an ID for the <ul> element of the menu.
                        // 'container' set to false means no extra HTML wrapper div around the menu list.
                        wp_nav_menu( array(
                            'theme_location' => 'primary-menu', // This 'primary-menu' needs to be registered in functions.php
                            'menu_id'        => 'primary-menu',
                            'container'      => false,
                        ) );
                        ?>
                    </nav><!-- #site-navigation -->
                </div>
            </header><!-- #masthead -->

            <div id="content" class="site-content">
    