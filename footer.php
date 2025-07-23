    <?php
    /**
     * The template for displaying the footer.
     *
     * Contains the closing of the #content div and all content after.
     * It's included in other template files using get_footer().
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package myfirstpageTheme
     */
    ?>
            </div><!-- #content -->

            <footer id="colophon" class="site-footer">
                <div class="container">
                    <div class="site-info">
                        &copy; <?php echo date_i18n( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
                        <!-- date_i18n('Y') displays the current year, localized for internationalization -->
                        <!-- bloginfo('name') outputs the site title -->
                    </div><!-- .site-info -->
                </div>
            </footer><!-- #colophon -->
        </div><!-- #page -->

    <?php wp_footer(); // REQUIRED: This function is crucial! It hooks into the 'wp_footer' action and allows WordPress plugins and themes to add scripts and other content before the closing </body> tag. Without it, many features won't work correctly. ?>
    </body>
    </html>
    