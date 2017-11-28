<?php

namespace svenjungnickel\redactorfontawesome;

use Craft;
use craft\base\Plugin;

use svenjungnickel\redactorfontawesome\assetbundles\RedactorFontAwesome\RedactorFontAwesomeAsset;

class RedactorFontAwesome extends Plugin
{
    // Static Properties
    // =========================================================================

    public static $plugin;

    // Public Methods
    // =========================================================================

    public function init()
    {
        parent::init();
        self::$plugin = $this;

        if (!Craft::$app->request->isConsoleRequest && Craft::$app->request->isCpRequest)
        {
            Craft::$app->view->registerAssetBundle(RedactorFontAwesomeAsset::class);
        }
    }
}
