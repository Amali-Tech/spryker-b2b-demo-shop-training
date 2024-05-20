<?php

namespace Pyz\Client\Antelope\Reader;

use Generated\Shared\Transfer\AntelopeTransfer;
use Generated\Shared\Transfer\GlueRequestTransfer;

class AntelopeReader implements AntelopeReaderInterface
{

    public function getAntelope(GlueRequestTransfer $glueRequestTransfer): AntelopeTransfer
    {
        return (new AntelopeTransfer())
            ->setIdAntelope($glueRequestTransfer->getResource()->getId())
            ->setName('Togbe');
    }
}
