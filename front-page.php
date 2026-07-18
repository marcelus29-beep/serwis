<?php
/**
 * Front page for 3DPrintHub.
 */

get_header();
?>

<section class="tdph-hero">
	<div class="container">
		<h1>Portal wydruków 3D</h1>
		<p>Kupuj, sprzedawaj i zlecaj wydruki 3D w jednym miejscu.</p>

		<form class="tdph-search" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
			<input type="search" name="s" placeholder="Szukaj modeli, usług lub materiałów...">
			<button type="submit">Szukaj</button>
		</form>
	</div>
</section>

<section class="tdph-categories">
    <div class="container">
        <h2 class="tdph-categories__title">Kategorie</h2>
        <div class="tdph-categories__grid">
            <?php
            $cats = get_terms([
                'taxonomy'   => 'hp_listing_category',
                'hide_empty' => false,
            ]);

            if ( ! is_wp_error( $cats ) ) :
                foreach ( $cats as $cat ) :
            ?>
                <a class="tdph-category" href="<?php echo esc_url( get_term_link( $cat ) ); ?>">
                    <span class="tdph-category__name"><?php echo esc_html( $cat->name ); ?></span>
                    <span class="tdph-category__count"><?php echo intval( $cat->count ); ?> ogłoszeń</span>
                </a>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</section>


<section class="tdph-home-content">
	<div class="container">

		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				the_content();
			endwhile;
		endif;
		?>

	</div>
</section>

<?php get_footer();
