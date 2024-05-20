<?php

namespace Pyz\Glue\FishRestApi\Controller;

use Generated\Shared\Transfer\FishTransfer;
use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResourceTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Spryker\Glue\Kernel\Backend\Controller\AbstractBackendApiController;

class FishRestApiResourceController extends AbstractBackendApiController
{
    public function get(string $id, GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer
    {
        return (new GlueResponseTransfer())
            ->addResource(
                (new GlueResourceTransfer())
                ->setAttributes(
                    (new FishTransfer())
                    ->setIdFish($id)
                    ->setName('Nemo')
                )
            );
    }
}
