<?php
/**
 * Home - Categories
 */
$categories=get_terms([
'taxonomy'=>'hp_listing_category',
'hide_empty'=>false,
'parent'=>0,
'number'=>12,
]);
if(is_wp_error($categories)||!$categories){return;}
?>
<section class="tdph-categories">
<div class="container">
<div class="section-header">
<h2>Przeglądaj kategorie</h2>
<a href="<?php echo esc_url(home_url('/ogloszenia/'));?>">Wszystkie kategorie</a>
</div>
<div class="tdph-categories__grid">
<?php foreach($categories as $category):
$icon=get_term_meta($category->term_id,'tdph_icon',true);?>
<a class="tdph-category-card" href="<?php echo esc_url(get_term_link($category));?>">
<?php if($icon):?><span class="tdph-category-card__icon"><i class="<?php echo esc_attr($icon);?>"></i></span><?php endif;?>
<h3><?php echo esc_html($category->name);?></h3>
<p><?php echo number_format_i18n($category->count);?> ogłoszeń</p>
</a>
<?php endforeach;?>
</div>
</div>
</section>
