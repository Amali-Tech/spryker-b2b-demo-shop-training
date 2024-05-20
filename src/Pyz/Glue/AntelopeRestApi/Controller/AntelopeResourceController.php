<?php

namespace Pyz\Glue\AntelopeRestApi\Controller;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResourceTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Pyz\Glue\AntelopeRestApi\AntelopeRestApiFactory;
use Spryker\Glue\Kernel\Backend\Controller\AbstractBackendApiController;

/**
 * @method AntelopeRestApiFactory getFactory()
 */
class AntelopeResourceController extends AbstractBackendApiController
{
    public function getAction(GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer
    {
        $antelopeTransfer = $this->getFactory()
            ->getAntelopeClient()
            ->getAntelope($glueRequestTransfer);

        return (new GlueResponseTransfer())
            ->addResource(
                (new GlueResourceTransfer())
                    ->setAttributes(
                        $antelopeTransfer
                    )
            );
    }
}
