<?php
/**
 * Styles configuration.
 *
 * @package HiveTheme\Configs
 */

defined( 'ABSPATH' ) || exit;

return [

    'parent_frontend' => [
        'handle'  => 'hivetheme-parent-frontend',
        'src'     => hivetheme()->get_url( 'parent' ) . '/style.css',
        'version' => hivetheme()->get_version( 'parent' ),
        'scope'   => [ 'frontend', 'editor' ],
    ],

    'tdph-variables' => [
        'handle'       => 'tdph-variables',
        'src'          => get_template_directory_uri() . '/assets/css/variables.css',
        'dependencies' => [ 'hivetheme-parent-frontend' ],
        'version'      => '1.0.0',
        'scope'        => [ 'frontend' ],
    ],

    'tdph-header' => [
        'handle'       => 'tdph-header',
        'src'          => get_template_directory_uri() . '/assets/css/header.css',
        'dependencies' => [ 'tdph-variables' ],
        'version'      => '1.0.0',
        'scope'        => [ 'frontend' ],
    ],

    'tdph-hero' => [
        'handle'       => 'tdph-hero',
        'src'          => get_template_directory_uri() . '/assets/css/hero.css',
        'dependencies' => [ 'tdph-header' ],
        'version'      => '1.0.0',
        'scope'        => [ 'frontend' ],
    ],

    'tdph-categories' => [
        'handle'       => 'tdph-categories',
        'src'          => get_template_directory_uri() . '/assets/css/categories.css',
        'dependencies' => [ 'tdph-hero' ],
        'version'      => '1.0.0',
        'scope'        => [ 'frontend' ],
    ],

    'tdph-listings' => [
        'handle'       => 'tdph-listings',
        'src'          => get_template_directory_uri() . '/assets/css/listings.css',
        'dependencies' => [ 'tdph-categories' ],
        'version'      => '1.0.0',
        'scope'        => [ 'frontend' ],
    ],

    'tdph-single' => [
        'handle'       => 'tdph-single',
        'src'          => get_template_directory_uri() . '/assets/css/listing-single.css',
        'dependencies' => [ 'tdph-listings' ],
        'version'      => '1.0.0',
        'scope'        => [ 'frontend' ],
    ],

    'tdph-forms' => [
        'handle'       => 'tdph-forms',
        'src'          => get_template_directory_uri() . '/assets/css/forms.css',
        'dependencies' => [ 'tdph-single' ],
        'version'      => '1.0.0',
        'scope'        => [ 'frontend' ],
    ],

    'tdph-account' => [
        'handle'       => 'tdph-account',
        'src'          => get_template_directory_uri() . '/assets/css/account.css',
        'dependencies' => [ 'tdph-forms' ],
        'version'      => '1.0.0',
        'scope'        => [ 'frontend' ],
    ],

    'tdph-footer' => [
        'handle'       => 'tdph-footer',
        'src'          => get_template_directory_uri() . '/assets/css/footer.css',
        'dependencies' => [ 'tdph-account' ],
        'version'      => '1.0.0',
        'scope'        => [ 'frontend' ],
    ],

    'tdph-responsive' => [
        'handle'       => 'tdph-responsive',
        'src'          => get_template_directory_uri() . '/assets/css/responsive.css',
        'dependencies' => [ 'tdph-footer' ],
        'version'      => '1.0.0',
        'scope'        => [ 'frontend' ],
    ],

];