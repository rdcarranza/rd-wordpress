<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package pedro
 * @author pedro
 */

if ( ! defined( 'ABSPATH' ) ) {
    header( 'Status: 403 Forbidden' );
    header( 'HTTP/1.1 403 Forbidden' );
    die();
}

get_header();
?>
    <div class="error-404 not-found">
        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e('Nothing here', 'pedro'); ?></h1>
        </header>
        <div class="page-content">
            <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'pedro'); ?></p>
            <?php get_search_form(); ?>
        </div><!-- .page-content -->
    </div><!-- .error-404 -->

<?php
get_footer();
?>
