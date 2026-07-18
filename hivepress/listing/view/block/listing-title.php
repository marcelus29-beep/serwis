<?php
defined('ABSPATH') || exit;
?>
<a class="tdph-card-title" href="<?php echo esc_url(hivepress()->router->get_url('listing_view_page',['listing_id'=>$listing->get_id()])); ?>" title="<?php echo esc_attr($listing->get_title()); ?>">
<?php echo esc_html($listing->get_title()); ?>
</a>
