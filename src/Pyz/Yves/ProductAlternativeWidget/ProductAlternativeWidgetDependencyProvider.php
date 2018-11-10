<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\ProductAlternativeWidget;

use SprykerShop\Yves\ProductAlternativeWidget\ProductAlternativeWidgetDependencyProvider as SprykerProductAlternativeWidgetDependencyProvider;

class ProductAlternativeWidgetDependencyProvider extends SprykerProductAlternativeWidgetDependencyProvider
{
    /**
     * Returns a list of widget plugin class names that implement \Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface.
     *
     * @return string[]
     */
    protected function getProductDetailPageProductAlternativeWidgetPlugins(): array
    {
        return [];
    }
}
