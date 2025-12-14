<?php 
/**
 * Footer template file
 * This file contains the footer structure of the theme including:
 * - Footer content
 * - Closing body and HTML tags
 * - WordPress footer scripts that run all the necessary scripts called with some hooks.
 */
?>
    <footer id="site-footer">
          <div class="footer-inner">
    <div class="footer-col footer-logo">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo_tortue.png' ); ?>" alt="<?php bloginfo('name'); ?> logo" class="footer-logo-img">
    </div>

    <div class="footer-col footer-menu">
      <h3>Menu</h3>
      <nav aria-label="Footer menu">
        <ul>
          <li><a href="<?php echo esc_url( home_url('/a-propos') ); ?>">À propos</a></li>
          <li><a href="<?php echo esc_url( home_url('/centres') ); ?>">Nos centres</a></li>
          <li><a href="<?php echo esc_url( home_url('/conseils') ); ?>">Nos conseils</a></li>
          <li><a href="<?php echo esc_url( home_url('/les-tortues') ); ?>">Les tortues</a></li>
          <li><a href="<?php echo esc_url( home_url('/contact') ); ?>">Contact</a></li>
        </ul>
      </nav>
    </div>

    <div class="footer-col footer-legal">
      <h3>Mentions légales</h3>
      <p>Association Tortuetopia<br><a href="<?php echo esc_url( home_url('/mentions-legales') ); ?>">Consulter</a></p>
    </div>
  </div>

  <div class="site-info">
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
    </footer>

    <?php /* Hook for scripts - Required for WordPress to load footer scripts add in functions.php */
    wp_footer(); 
    ?>
</body>
</html> 