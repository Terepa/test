<?php

namespace YOOtheme\Theme\Wordpress\Listener;

use YOOtheme\Http\Request;
use YOOtheme\Url;

class LoadPostScript
{
    protected Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function handle($hook)
    {
        // is edit page, post?
        if (!in_array($hook, ['post.php', 'post-new.php'])) {
            return;
        }

        $link = Url::route('customizer', [
            'site' => get_permalink(),
            'return' => get_edit_post_link(null, ''),
            'section' => 'builder',
        ]);

        add_action('edit_form_after_title', function ($post) use ($link) {
            printf(
                '<div class="tm-editor" hidden><a href="%s" class="tm-button">%s</a><a href class="tm-link">%s</a></div>',
                $link,
                __('YOOtheme Builder', 'yootheme'),
                __('&#8592; Back to Classic Editor', 'yootheme'),
            );
        });

        add_action('media_buttons', function ($editor_id) use ($link) {
            if ($editor_id === 'content') {
                printf(
                    '<a href="%s" class="button button-primary">%s</a>',
                    $link,
                    __('YOOtheme Builder', 'yootheme'),
                );
            }
        });

        add_filter('wp_editor_settings', function ($settings) {
            if (preg_match('/<!--\s?{/', get_post_field('post_content'))) {
                $settings['default_editor'] = 'html';
            }

            return $settings;
        });

        wp_enqueue_script(
            'posts-builder',
            get_template_directory_uri() . '/packages/theme-wordpress-posts/app/posts.min.js',
            [],
            false,
            true,
        );

        wp_add_inline_script(
            'posts-builder',
            sprintf('var $customizer = %s;', json_encode(['link' => $link])),
            'before',
        );
    }
}
