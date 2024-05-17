<?php

namespace Pyz\Glue\AntelopeRestApi;

use Pyz\Client\Antelope\AntelopeClientInterface;
use Spryker\Glue\Kernel\Backend\AbstractFactory;

class AntelopeRestApiFactory extends AbstractFactory
{
    public function getAntelopeClient(): AntelopeClientInterface
    {
        return $this->getProvidedDependency('CLIENT_ANTELOPE');
    }

}
