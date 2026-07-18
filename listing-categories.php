<?php
defined('ABSPATH') || exit;
foreach((array)$listing->get_categories() as $category): ?>
<a class="tdph-category-badge" href="<?php echo esc_url($category->get_url()); ?>"><?php echo esc_html($category->get_name()); ?></a>
<?php endforeach; ?>
