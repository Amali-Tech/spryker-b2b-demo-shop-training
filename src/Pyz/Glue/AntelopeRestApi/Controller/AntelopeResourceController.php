<?php

namespace Pyz\Glue\AntelopeRestApi\Controller;

use Generated\Shared\Transfer\AntelopeTransfer;
use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResourceTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Spryker\Glue\Kernel\Backend\Controller\AbstractBackendApiController;

class AntelopeResourceController extends AbstractBackendApiController
{
    public function getAction(string $id, GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer
    {
        return (new GlueResponseTransfer())
            ->addResource(
                (new GlueResourceTransfer())
                    ->setAttributes(
                        (new AntelopeTransfer())
                            ->setIdAntelope($id)
                            ->setName('Togbe')
                    )
            );
    }
}
