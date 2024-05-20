<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\FishRestApi\Plugin;

use Generated\Shared\Transfer\GlueResourceMethodCollectionTransfer;
use Generated\Shared\Transfer\GlueResourceMethodConfigurationTransfer;
use Pyz\Glue\FishRestApi\Controller\FishRestApiResourceController;
use Pyz\Glue\FishRestApi\FishRestApiConfig;
use Spryker\Glue\GlueApplication\Plugin\GlueApplication\Backend\AbstractResourcePlugin;
use Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceInterface;

class FishRestApiResource extends AbstractResourcePlugin implements ResourceInterface
{
 /**
  * @inheritDoc
  */
    public function getType(): string
    {
        return FishRestApiConfig::RESOURCE_FISH;
    }

    /**
     * @inheritDoc
     */
    public function getController(): string
    {
        return FishRestApiResourceController::class;
    }

    /**
     * @return \Generated\Shared\Transfer\GlueResourceMethodCollectionTransfer
     */
    public function getDeclaredMethods(): GlueResourceMethodCollectionTransfer
    {
        return (new GlueResourceMethodCollectionTransfer())
            ->setGet(
                (new GlueResourceMethodConfigurationTransfer())
                ->setAction('get')
            );
    }
}
