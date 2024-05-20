<?php

namespace Pyz\Client\Antelope;

use Pyz\Client\Antelope\Reader\AntelopeReader;
use Pyz\Client\Antelope\Reader\AntelopeReaderInterface;
use Spryker\Client\Kernel\AbstractFactory;

class AntelopeFactory extends AbstractFactory
{
    public function createAntelopeReader(): AntelopeReaderInterface
    {
        return new AntelopeReader();
    }
}
