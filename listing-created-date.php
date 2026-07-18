<?php
defined('ABSPATH') || exit;
?>
<time class="tdph-card-date hp-listing__created-date hp-listing__date hp-meta" datetime="<?php echo esc_attr($listing->get_created_date()); ?>">
<svg class="tdph-card-date__icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
<span><?php printf(hivepress()->translator->get_string('added_on_date'),$listing->display_created_date()); ?></span>
</time>
