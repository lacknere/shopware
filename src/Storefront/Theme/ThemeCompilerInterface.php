<?php declare(strict_types=1);

namespace Shopware\Storefront\Theme;

use Shopware\Storefront\Theme\StorefrontPluginConfiguration\StorefrontPluginConfiguration;
use Shopware\Storefront\Theme\StorefrontPluginConfiguration\StorefrontPluginConfigurationCollection;

/** @deprecated tag:v6.5.0 - will be removed. Use AbstractThemeCompiler instead and make the $context their mandatory */
interface ThemeCompilerInterface
{
    public function compileTheme(
        string $salesChannelId,
        string $themeId,
        StorefrontPluginConfiguration $themeConfig,
        StorefrontPluginConfigurationCollection $configurationCollection,
        bool $withAssets = true
    ): void;
}
