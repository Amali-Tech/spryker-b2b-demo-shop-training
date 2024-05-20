<?php

namespace Pyz\Client\Antelope\Reader;

use Generated\Shared\Transfer\AntelopeTransfer;
use Generated\Shared\Transfer\GlueRequestTransfer;

interface AntelopeReaderInterface
{
    /**
     * @return AntelopeTransfer
     */
    public function getAntelope(GlueRequestTransfer $glueRequestTransfer): AntelopeTransfer;
}
