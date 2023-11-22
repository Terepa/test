<?php

namespace YOOtheme\Theme\Listener;

use YOOtheme\Config;
use YOOtheme\Metadata;
use YOOtheme\Path;
use YOOtheme\Translator;
use YOOtheme\Url;

class LoadCustomizerData
{
    public Config $config;
    public Metadata $metadata;
    public Translator $translator;

    public function __construct(Config $config, Metadata $metadata, Translator $translator)
    {
        $this->config = $config;
        $this->metadata = $metadata;
        $this->translator = $translator;
    }

    public function handle(): void
    {
        // add config
        $this->config->addFile('customizer', Path::get('../../config/customizer.json', __DIR__));

        $this->config->add('customizer', [
            'base' => Url::to($this->config->get('theme.rootDir')),
            'name' => $this->config->get('theme.name'),
            'version' => $this->config->get('theme.version'),
        ]);

        // add locale
        $locale = strtr($this->config->get('locale.code'), [
            'de_AT' => 'de_DE',
            'de_CH' => 'de_DE',
            'de_CH_informal' => 'de_DE',
            'de_DE_formal' => 'de_DE',
        ]);

        $this->translator->addResource(Path::get("../../languages/{$locale}.json", __DIR__));

        // add uikit
        $debug = $this->config->get('app.debug') ? '' : '.min';

        $this->metadata->set('script:uikit', ['src' => "~assets/uikit/dist/js/uikit{$debug}.js"]);
        $this->metadata->set('script:uikit-icons', [
            'src' => "~assets/uikit/dist/js/uikit-icons{$debug}.js",
        ]);
    }
}
