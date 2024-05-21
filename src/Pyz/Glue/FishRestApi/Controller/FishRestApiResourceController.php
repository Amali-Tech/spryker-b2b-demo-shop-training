<?php

namespace Pyz\Glue\FishRestApi\Controller;

use Generated\Shared\Transfer\FishTransfer;
use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResourceTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Pyz\Glue\FishRestApi\FishRestApiFactory;
use Spryker\Glue\Kernel\Backend\AbstractBackendApiFactory;
use Spryker\Glue\Kernel\Backend\Controller\AbstractBackendApiController;

/**
 * @method FishRestApiFactory getFactory()
 */
class FishRestApiResourceController extends AbstractBackendApiController
{
    public function get(string $id, GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer
    {
        $fishTransfer = $this->getFactory()
            ->getFishClient()
            ->getFish();

                return (new GlueResponseTransfer())
            ->addResource(
                (new GlueResourceTransfer())
                ->setAttributes(
                    $fishTransfer
                )
            );
    }
}
