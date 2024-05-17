<?php

namespace Pyz\Client\Antelope;

use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Client\Kernel\AbstractClient;

class AntelopeClient extends AbstractClient implements AntelopeClientInterface
{

    public function getAntelope(): AntelopeTransfer
    {
        return (new AntelopeTransfer())
            ->setIdAntelope(1)
            ->setName('Oscar');
    }
}
