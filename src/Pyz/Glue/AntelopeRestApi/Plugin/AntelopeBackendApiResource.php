<?php

namespace Pyz\Glue\AntelopeRestApi\Plugin;

use Generated\Shared\Transfer\GlueResourceMethodCollectionTransfer;
use Generated\Shared\Transfer\GlueResourceMethodConfigurationTransfer;
use Pyz\Glue\AntelopeRestApi\Controller\AntelopeResourceController;
use Spryker\Glue\GlueApplication\Plugin\GlueApplication\Backend\AbstractResourcePlugin;
use Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceInterface;

class AntelopeBackendApiResource extends AbstractResourcePlugin implements ResourceInterface
{

    public function getType(): string
    {
        return 'antelope';
    }

    public function getController(): string
    {
        return AntelopeResourceController::class;
    }

    public function getDeclaredMethods(): GlueResourceMethodCollectionTransfer
    {
        return (new GlueResourceMethodCollectionTransfer())
            ->setGet(
                new GlueResourceMethodConfigurationTransfer()
            );
    }
}
