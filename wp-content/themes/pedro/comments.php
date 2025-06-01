<?php

/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package pedro
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>

<?php if (have_comments()) : ?>
    <h3 class="comments-title">
        <?php printf(_n('One Comment', '%s Comments', get_comments_number(), 'pedro'), number_format_i18n(get_comments_number())); ?>
    </h3>

    <ol class="comment-list">
        <?php
        wp_list_comments(array(
            'style'      => 'ol',
            'short_ping' => true,
            'avatar_size' => 50,
            'page'       => get_query_var('cpage'), // Ensures pagination works
            'per_page'   => get_option('comments_per_page'), // Uses WordPress setting
        ));
        ?>
    </ol>

    <?php
    if (get_comment_pages_count() > 1 && get_option('page_comments')) :
    ?>
        <nav class="comment-navigation">
            <div class="nav-previous"><?php previous_comments_link('&larr; Older Comments'); ?></div>
            <div class="nav-next"><?php next_comments_link('Newer Comments &rarr;'); ?></div>
        </nav>
    <?php endif; ?>

<?php endif; ?>

<?php
// Display comment form
comment_form();
?>