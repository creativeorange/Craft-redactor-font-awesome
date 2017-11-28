<?php

namespace svenjungnickel\redactorfontawesome\assetbundles\RedactorFontAwesome;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;


class RedactorFontAwesomeAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    public function init()
    {
        // define the path that your publishable resources live
        $this->sourcePath = "@svenjungnickel/redactorfontawesome/assetbundles/redactorfontawesome/dist";

        // define the dependencies
        $this->depends = [
            CpAsset::class,
        ];

        // define the relative path to CSS/JS files that should be registered with the page
        // when this asset bundle is registered
        $this->js = [
            'js/RedactorFontAwesome.js',
        ];

        $this->css = [
            'css/RedactorFontAwesome.css',
        ];

        parent::init();
    }
}
