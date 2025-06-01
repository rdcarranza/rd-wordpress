<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open();?>

  <a class="screen-reader-text skip-link" href="#content"><?php esc_html_e('Skip to content', 'pedro'); ?></a>

  <?php
  $site_logo = get_theme_mod('site_logo_url');
  ?>

  <div id="home"></div>
  <header id="site-header" class="home-header">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand logo-home" href="<?php echo esc_url(home_url('/')); ?>">
          <?php
          if (! empty($site_logo)) {
            // Display logo if available
            echo '<img src="' . esc_url($site_logo) . '" alt="' . esc_attr__('Site Logo', 'pedro') . '">';
          } else {
            // Fallback: Display site name
            echo esc_html(get_bloginfo('name'));
          }
          ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'pedro'); ?>">
          <span class="navbar-toggler-icon">
            <i class="fa fa-bars" aria-hidden="true"></i>
          </span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <?php
          // Display the primary menu
          wp_nav_menu(array(
            'theme_location' => 'primary_menu',
            'menu_class'     => 'navbar-nav justify-content-end',
            'menu_id'        => 'navigation',
          ));
          ?>
        </div>
      </div>
    </nav>
  </header>