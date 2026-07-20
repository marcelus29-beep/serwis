<?php
/**
 * Home - Categories
 */

$categories = get_terms([
    'taxonomy'   => 'hp_listing_category',
    'hide_empty' => false,
]);

if ( is_wp_error( $categories ) || empty( $categories ) ) {
    return;
}
?>
<section class="tdph-categories">
    <div class="container">
        <h2 class="tdph-categories__title">Przeglądaj kategorie</h2>

        <div class="tdph-categories__grid">
            <?php foreach ( $categories as $category ) : ?>
                <a class="tdph-category" href="<?php echo esc_url( get_term_link( $category ) ); ?>">
                    <div class="tdph-category__name">
                        <?php echo esc_html( $category->name ); ?>
                    </div>

                    <div class="tdph-category__count">
                        <?php echo intval( $category->count ); ?> ogłoszeń
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
