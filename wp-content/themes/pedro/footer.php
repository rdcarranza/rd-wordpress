<?php
$footer_section_title = get_theme_mod('footer_section_title');
$copywrite_text = get_theme_mod('copywrite_text');
?>

<footer class="footer-section text-center">
    <div class="container">
        <a class="footer-logo wow fadeInDown" href="#">
            <h3>
              <?php echo esc_html( $footer_section_title ?? __( 'Pedro', 'pedro' ) ); ?>
            </h3>
        </a>
        <p>
          <?php echo esc_html( $copywrite_text ?: __( '© 2025 Ruben Dario Carranza Gerez. All Rights Reserved.', 'pedro' ) ); ?>
        </p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>