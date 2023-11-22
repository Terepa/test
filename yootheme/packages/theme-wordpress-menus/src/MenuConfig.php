<?php

namespace YOOtheme\Theme\Wordpress;

use YOOtheme\Arr;
use YOOtheme\Config;
use YOOtheme\ConfigObject;

/**
 * @property array $menus
 * @property array $items
 * @property array $positions
 * @property bool  $canEdit
 * @property bool  $canCreate
 * @property bool  $canDelete
 */
class MenuConfig extends ConfigObject
{
    /**
     * Constructor.
     */
    public function __construct(Config $config)
    {
        parent::__construct([
            'menus' => $this->getMenus(),
            'items' => $this->getItems(),
            'positions' => $config->get('theme.menus'),
            'canEdit' => current_user_can('edit_theme_options'),
        ]);
    }

    protected function getMenus()
    {
        return array_map(
            fn($menu) => [
                'id' => $menu->term_id,
                'name' => $menu->name,
            ],
            wp_get_nav_menus(),
        );
    }

    protected function getItems()
    {
        $results = [];

        foreach (wp_get_nav_menus() as $menu) {
            $items = wp_get_nav_menu_items($menu);
            $results = array_merge(
                $results,
                array_map(
                    fn($item) => [
                        'id' => strval($item->ID),
                        'level' => $this->getLevel($item, $items),
                        'menu' => $menu->term_id,
                        'parent' => $item->menu_item_parent,
                        'title' => $item->title,
                        'type' => $item->type,
                    ],
                    $items,
                ),
            );
        }

        return $results;
    }

    protected function getLevel($item, array $items)
    {
        $level = 0;

        while (
            $item->menu_item_parent &&
            ($item = Arr::find($items, fn($post) => $post->ID === (int) $item->menu_item_parent))
        ) {
            $level++;
        }

        return $level;
    }
}
