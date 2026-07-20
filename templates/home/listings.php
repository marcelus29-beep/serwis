<?php
/**
 * Home page listings section.
 * Include from front-page.php:
 * get_template_part( 'templates/home/listings' );
 */

$args = [
    'post_type'      => 'hp_listing',
    'post_status'    => 'publish',
    'posts_per_page' => 8,
];

$query = new WP_Query( $args );

if ( $query->have_posts() ) : ?>
<section class="tdph-listings">
    <div class="container">

        <div class="tdph-listings__header">
            <h2 class="tdph-listings__title">Najnowsze ogłoszenia</h2>
            <a href="<?php echo esc_url( get_post_type_archive_link( 'hp_listing' ) ); ?>">
                Zobacz wszystkie
            </a>
        </div>

        <div class="tdph-listings__grid">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php get_template_part( 'templates/post-archive' ); ?>
            <?php endwhile; ?>
        </div>

    </div>
</section>
<?php
endif;

wp_reset_postdata();
