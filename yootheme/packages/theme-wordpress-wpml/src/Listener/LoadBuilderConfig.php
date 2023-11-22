<?php

namespace YOOtheme\Theme\Wordpress\WPML\Listener;

class LoadBuilderConfig
{
    public static function handle(): void
    {
        if (class_exists('SitePress', false)) {
            add_filter('get_terms_args', [static::class, 'getTermsArgs']);
            add_filter('wp_get_nav_menus', [static::class, 'getNavMenus'], 10, 2);
        }
    }

    /**
     * Skip WPML filters to retrieve terms of all languages.
     */
    public static function getTermsArgs(array $args): array
    {
        return $args + ['wpml_skip_filters' => true];
    }

    /**
     * Skip filtering of nav menus by WPML.
     */
    public static function getNavMenus(array $menus, array $args): array
    {
        return get_terms($args);
    }
}
