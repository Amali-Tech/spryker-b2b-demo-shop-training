<?php

namespace Pyz\Client\Antelope;

use Generated\Shared\Transfer\AntelopeTransfer;

interface AntelopeClientInterface
{
    /**
     * @return AntelopeTransfer
     */
    public function getAntelope(): AntelopeTransfer;

}
