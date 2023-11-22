<?php

namespace YOOtheme\Theme\Wordpress\WPML;

return [
    'events' => [
        'customizer.init' => [Listener\LoadBuilderConfig::class => ['handle', 10]],
    ],
];
