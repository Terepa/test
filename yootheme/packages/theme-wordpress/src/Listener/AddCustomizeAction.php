<?php

namespace YOOtheme\Theme\Wordpress\Listener;

use YOOtheme\Http\Request;
use YOOtheme\Url;

class AddCustomizeAction
{
    protected Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Prepares themes for JavaScript.
     *
     * @link https://developer.wordpress.org/reference/functions/wp_prepare_themes_for_js/
     */
    public static function action(array $themes = null): array
    {
        $name = get_template();

        if (isset($themes[$name])) {
            $themes[$name]['actions']['customize'] = Url::route('customizer');
        }

        return $themes;
    }

    /**
     * Loads all necessary admin bar items.
     *
     * @param \WP_Admin_Bar $admin_bar
     *
     * @link https://developer.wordpress.org/reference/hooks/admin_bar_menu/
     */
    public function menu($admin_bar): void
    {
        if (is_admin()) {
            return;
        }

        $node = $admin_bar->get_node('customize');

        if ($node) {
            $site = (string) $this->request->getUri();
            $node->href = Url::route('customizer', [
                'site' => $site,
                'return' => $site,
            ]);
            $admin_bar->remove_node('customizer');
            $admin_bar->add_node((array) $node);
        }
    }
}
