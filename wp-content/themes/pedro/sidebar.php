<?php

/**
 * The sidebar containing the main widget area.
 *
 * @package pedro
 */

if (! is_active_sidebar('main-sidebar')) {
    return;
}
?>

<aside id="sidebar">
    <?php if (is_active_sidebar('main-sidebar')) : ?>
        <?php dynamic_sidebar('main-sidebar'); ?>
    <?php else : ?>
        <p><?php echo esc_html__('Add widgets from Appearance → Widgets.', 'pedro') ?></p>
    <?php endif; ?>
</aside>