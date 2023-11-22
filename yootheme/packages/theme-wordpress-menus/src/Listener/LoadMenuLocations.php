<?php

namespace YOOtheme\Theme\Wordpress\Listener;

use YOOtheme\Arr;
use YOOtheme\Config;

class LoadMenuLocations
{
    public Config $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function handle(?string $config): string
    {
        $config = json_decode($config ?? '{}', true) ?: [];
        $locations = get_theme_mod('nav_menu_locations', []);

        // set menu locations in theme config
        foreach (array_keys($this->config->get('theme.menus')) as $name) {
            Arr::set($config, "menu.positions.{$name}.menu", $locations[$name] ?? '');
        }

        return json_encode($config, JSON_UNESCAPED_SLASHES);
    }
}
