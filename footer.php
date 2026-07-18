<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<footer class="tdph-footer">
  <div class="container">
    <div class="tdph-footer__top">
      <div>
        <h3><?php bloginfo('name'); ?></h3>
        <p>Marketplace wydruków 3D.</p>
      </div>
      <nav>
        <?php wp_nav_menu([
          'theme_location'=>'footer',
          'container'=>false,
          'fallback_cb'=>false,
        ]); ?>
      </nav>
    </div>
    <div class="tdph-footer__bottom">
      <small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small>
    </div>
  </div>
  <?php wp_footer(); ?>
</footer>
</body>
</html>
