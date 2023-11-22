<?php

namespace YOOtheme\Builder\Source\Listener;

use YOOtheme\Config;
use YOOtheme\Metadata;

class LogSourceError
{
    public Config $config;
    public Metadata $metadata;

    public function __construct(Config $config, Metadata $metadata)
    {
        $this->config = $config;
        $this->metadata = $metadata;
    }

    public function handle($errors): void
    {
        if ($this->config->get('app.debug') || $this->config->get('app.isCustomizer')) {
            $this->metadata->set(
                'script:graphql-errors',
                join(
                    "\n",
                    array_map(fn($error) => 'console.warn(' . json_encode($error) . ');', $errors),
                ),
            );
        }
    }
}
