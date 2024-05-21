<?php

namespace Pyz\Client\Fish;

use Generated\Shared\Transfer\FishTransfer;

interface FishClientInterface
{
    /**
     * @return FishTransfer
     */
    public function getFish(): FishTransfer;
}
