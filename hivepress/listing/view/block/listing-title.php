<?php
/**
 * 3DPrintHub
 * Listing title
 */

defined( 'ABSPATH' ) || exit;

$url = hivepress()->router->get_url(
    'listing_view_page',
    [
        'listing_id' => $listing->get_id(),
    ]
);

$title = $listing->get_title();
?>

<h3 class="tdph-card-title-wrap">
    <a
        class="tdph-card-title"
        href="<?php echo esc_url( $url ); ?>"
        title="<?php echo esc_attr( $title ); ?>"
    >
        <?php echo esc_html( $title ); ?>
    </a>
</h3>
