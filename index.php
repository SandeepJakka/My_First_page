<?php
    /**
     * The main template file.
     *
     * This is the most generic template file in a WordPress theme
     * and one of the two required files for a theme (the other being style.css).
     * It is used to display a page when nothing more specific matches a query.
     *
     * @package myfirstpageTheme
     */

    // get_header() is a WordPress function that includes the header.php file.
    // This keeps your code organized and reusable.
    get_header();
    ?>

    <main class="container" id="content">
        <?php
        // The WordPress Loop: This is how WordPress retrieves and displays posts or pages.
        // have_posts() checks if there are any posts or pages available to display.
        if ( have_posts() ) :
            // while ( have_posts() ) : the_post(); starts the loop.
            // the_post() sets up the current post data for use in template tags.
            while ( have_posts() ) : the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php
                        // the_title() displays the title of the current post/page.
                        // esc_url( get_permalink() ) gets the URL for the current post/page.
                        // rel="bookmark" is a microformat for permalinks.
                        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                        ?>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <?php
                        // the_content() displays the main content of the current post/page.
                        // The sprintf and wp_kses part is for accessibility, allowing screen readers to get more context.
                        the_content( sprintf(
                            wp_kses(
                                /* translators: %s: Name of current post. Only visible to screen readers */
                                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'rtcamp-custom-theme' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            get_the_title()
                        ) );

                        // wp_link_pages() displays page-links for paginated posts (if a post is very long and split into multiple pages).
                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rtcamp-custom-theme' ),
                            'after'  => '</div>',
                        ) );
                        ?>
                    </div><!-- .entry-content -->
                </article><!-- #post-<?php the_ID(); ?> -->
                <?php
            endwhile; // End of the Loop.

            // the_posts_navigation() displays navigation links to previous/next set of posts.
            the_posts_navigation();

        else :
            // If no content (posts/pages) is found, display a "Nothing Found" message.
            ?>
            <section class="no-results not-found">
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'rtcamp-custom-theme' ); ?></h1>
                </header><!-- .page-header -->

                <div class="page-content">
                    <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'rtcamp-custom-theme' ); ?></p>
                    <?php
                    // get_search_form() displays the default WordPress search form.
                    get_search_form();
                    ?>
                </div><!-- .page-content -->
            </section><!-- .no-results -->
            <?php
        endif;
        ?>
    </main><!-- .container -->

    <?php
    // get_footer() is a WordPress function that includes the footer.php file.
    get_footer();
