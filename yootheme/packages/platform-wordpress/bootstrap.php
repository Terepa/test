<?php

namespace YOOtheme;

use YOOtheme\Wordpress\FilterLoader;
use YOOtheme\Wordpress\Platform;
use YOOtheme\Wordpress\Router;

// use realpath to resolve symlink
$rootDir = dirname(realpath(WP_CONTENT_DIR));

// use content parent directory as root
Url::setBase(dirname(content_url()));
Path::setAlias('~', strtr($rootDir, '\\', '/'));

return [
    'config' => function () use ($rootDir) {
        global $wp_version;

        return [
            'app' => [
                'platform' => 'wordpress',
                'version' => $wp_version,
                'secret' => NONCE_KEY,
                'debug' => WP_DEBUG,
                'rootDir' => strtr($rootDir, '\\', '/'),
                'tempDir' => strtr(get_temp_dir(), '\\', '/'),
                'adminDir' => Path::resolve(ABSPATH, 'wp-admin'),
                'pluginDir' => strtr(WP_PLUGIN_DIR, '\\', '/'),
                'contentDir' => strtr(WP_CONTENT_DIR, '\\', '/'),
                'uploadDir' => strtr(wp_upload_dir()['basedir'], '\\', '/'),
                'isSite' => !is_admin(),
                'isAdmin' => is_admin(),
            ],

            // TODO
            'req' => [
                'baseUrl' => home_url('', 'relative'),
                'rootUrl' => home_url('', 'relative'),
                'siteUrl' => site_url(),
            ],

            'locale' => [
                'rtl' => is_rtl(),
                'code' => function_exists('determine_locale')
                    ? determine_locale() // available since 5.0
                    : get_user_locale(),
            ],

            'session' => [
                'token' => wp_create_nonce(),
            ],
        ];
    },

    'events' => [
        'url.route' => [Router::class => 'generate'],
        'app.error' => [Platform::class => 'handleError'],
    ],

    'actions' => [
        'wp_ajax_kernel' => [Platform::class => 'handleRoute'],
        'wp_ajax_nopriv_kernel' => [Platform::class => 'handleRoute'],
        'wp_footer' => [Platform::class => 'printFooterScripts'],
        'wp_head' => [Platform::class => [['printStyles', 8], ['printScripts', 20]]],
        'admin_print_scripts' => [Platform::class => [['printStyles', 8], ['printScripts', 21]]],
        'admin_print_footer_scripts' => [Platform::class => 'printFooterScripts'],
    ],

    'loaders' => [
        'filters' => FilterLoader::class,
        'actions' => FilterLoader::class,
    ],

    'services' => [
        CsrfMiddleware::class => function (Config $config) {
            return new CsrfMiddleware($config('session.token'), 'wp_verify_nonce');
        },

        Storage::class => Wordpress\Storage::class,

        HttpClientInterface::class => Wordpress\HttpClient::class,
    ],
];
