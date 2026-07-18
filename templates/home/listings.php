<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<section class="tdph-home-listings">
    <div class="container">
        <div class="section-header">
            <h2>Najnowsze ogłoszenia</h2>
            <a href="<?php echo esc_url( home_url('/ogloszenia/') ); ?>">Zobacz wszystkie</a>
        </div>

        <?php
        echo do_shortcode('[hivepress_listings number="8"]');
        ?>
    </div>
</section>
