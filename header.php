<?php
/**
 * Header
 * 3DPrintHub Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!doctype html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta
		name="viewport"
		content="width=device-width, initial-scale=1"
	>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="tdph-header">

	<div class="container">

		<div class="tdph-header__logo">

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">

				<?php
				if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
					the_custom_logo();
				} else {
					bloginfo( 'name' );
				}
				?>

			</a>

		</div>

		<nav class="tdph-header__nav">

			<?php

			wp_nav_menu(
				[
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => 'tdph-menu',
					'fallback_cb'    => false,
					'depth'          => 2,
				]
			);

			?>

		</nav>

		<div class="tdph-header__actions">

			<?php if ( is_user_logged_in() ) : ?>

				<a
					class="button"
					href="<?php echo esc_url( home_url( '/konto/' ) ); ?>"
				>
					Moje konto
				</a>

				<a
					class="button button--primary"
					href="<?php echo esc_url( home_url( '/dodaj-ogloszenie/' ) ); ?>"
				>
					Dodaj ogłoszenie
				</a>

			<?php else : ?>

				<a
					class="button"
					href="<?php echo esc_url( wp_login_url() ); ?>"
				>
					Zaloguj
				</a>

				<a
					class="button button--primary"
					href="<?php echo esc_url( home_url( '/rejestracja/' ) ); ?>"
				>
					Zarejestruj się
				</a>

			<?php endif; ?>

		</div>

	</div>

</header>