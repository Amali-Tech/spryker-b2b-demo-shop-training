<?php

namespace Pyz\Client\Antelope;

use Generated\Shared\Transfer\AntelopeTransfer;
use Generated\Shared\Transfer\GlueRequestTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method AntelopeFactory getFactory()
 */
class AntelopeClient extends AbstractClient implements AntelopeClientInterface
{

    public function getAntelope(GlueRequestTransfer $glueRequestTransfer): AntelopeTransfer
    {
        return $this->getFactory()
            ->createAntelopeReader()
            ->getAntelope($glueRequestTransfer);
    }
}
