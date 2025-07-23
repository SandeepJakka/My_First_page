    <?php
    /**
     * rtCamp Custom Theme functions and definitions.
     *
     * This file is automatically loaded by WordPress for your theme.
     * It's used to add custom functionality, register features, and enqueue scripts/styles.
     *
     * @link https://developer.wordpress.org/themes/basics/theme-functions/
     *
     * @package myfirstpageTheme
     */

    /**
     * Enqueue scripts and styles.
     * This function tells WordPress which CSS and JavaScript files to load for your theme.
     * Using wp_enqueue_style() and wp_enqueue_script() is the proper way to add assets,
     * as it handles dependencies and versioning.
     */
    function myfirstpage_scripts() {
        // Enqueue the main stylesheet (style.css).
        // get_stylesheet_uri() gets the URL of your theme's stylesheet (style.css).
        // array() is for dependencies (none here). '1.0' is the version number.
        wp_enqueue_style( 'my-first-page-style', get_stylesheet_uri(), array(), '1.0' );

        // If you had a custom JavaScript file (e.g., in a 'js' folder inside your theme),
        // you would enqueue it like this:
        // wp_enqueue_script( 'rtcamp-custom-theme-custom-script', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0', true );
        // The 'true' at the end means it will be loaded in the footer.
    }
    // add_action() is a WordPress hook. It attaches your function (rtcamp_custom_theme_scripts)
    // to a specific event in WordPress's execution (wp_enqueue_scripts),
    // ensuring your scripts and styles are loaded at the correct time.
    add_action( 'wp_enqueue_scripts', 'myfirstpage_scripts' );

    /**
     * Set up theme defaults and register support for various WordPress features.
     * This function runs after the theme is loaded.
     */
    function myfirstpage_setup() {
        /*
         * Make theme available for translation.
         * This is important for making your theme ready for different languages.
         * load_theme_textdomain() tells WordPress where to find translation files.
         */
        load_theme_textdomain( 'custom-theme', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support for 'title-tag', WordPress automatically generates the <title> tag
         * in the <head> section, which is good for SEO and avoids hardcoding it.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages (also known as Featured Images).
         * This allows you to set a main image for your posts/pages.
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // Register navigation menus.
        // This function creates "menu locations" in your WordPress Dashboard (Appearance > Menus).
        // You can then assign specific menus to these locations.
        register_nav_menus( array(
            'primary-menu' => esc_html__( 'Primary Menu', 'custom-theme' ),
            // You can register more menus here, e.g., 'footer-menu' => esc_html__( 'Footer Menu', 'rtcamp-custom-theme' ),
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5. This ensures modern, semantic HTML.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Add theme support for selective refresh for widgets in Customizer.
        // This allows for faster previews when customizing widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         * This enables the Custom Logo feature in Appearance > Customize.
         * @link https://developer.wordpress.org/themes/functionality/custom-logo/
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );
    }
    // Hook your setup function to 'after_setup_theme'. This ensures it runs after the theme is loaded.
    add_action( 'after_setup_theme', 'myfirstpage_setup' );

    /**
     * Set the content width in pixels, based on the theme's design and stylesheet.
     * This is an optional global variable used by WordPress for things like image sizes.
     *
     * @global int $content_width
     */
    function myfirstpage_width() {
        $GLOBALS['content_width'] = apply_filters( 'myfirstpage_width', 640 );
    }
    add_action( 'after_setup_theme', 'myfirstpage_width', 0 );

    // Optional: You can add your own custom functions here.
    // For example, a function to display a simple welcome message:
    function myfirstpage_message() {
        echo '<p>Welcome to your custom rtCamp project theme! This message is from a custom function in functions.php.</p>';
    }
    // You could then call this function in your index.php or other template files like:
    // <div class="welcome-message"><?php rtcamp_display_welcome_message(); ?></div>
    