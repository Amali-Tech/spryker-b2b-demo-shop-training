<?php

namespace Pyz\Client\Fish;

use Generated\Shared\Transfer\FishTransfer;

class FishClient implements FishClientInterface
{

    public function getFish(): FishTransfer
    {
        return (new FishTransfer())
            ->setIdFish(1)
            ->setName("Nemo");
    }
}
