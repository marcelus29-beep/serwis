<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<section class="tdph-hero">
  <div class="container">
    <h1>Marketplace wydruków 3D</h1>
    <p>Sprzedawaj modele i znajdź gotowe wydruki 3D.</p>

    <?php echo do_shortcode('[hivepress_listing_search_form]'); ?>

    <div class="tdph-hero__actions">
      <a class="button button--primary" href="<?php echo esc_url(home_url('/dodaj-ogloszenie/')); ?>">Dodaj ogłoszenie</a>
      <a class="button" href="<?php echo esc_url(home_url('/ogloszenia/')); ?>">Przeglądaj ogłoszenia</a>
    </div>
  </div>
</section>
