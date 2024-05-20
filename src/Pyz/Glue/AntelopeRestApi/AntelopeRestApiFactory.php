<?php

namespace Pyz\Glue\AntelopeRestApi;

use Pyz\Client\Antelope\AntelopeClientInterface;
use Spryker\Glue\Kernel\Backend\AbstractBackendApiFactory;

class AntelopeRestApiFactory extends AbstractBackendApiFactory
{
    public function getAntelopeClient(): AntelopeClientInterface
    {
        return $this->getProvidedDependency('CLIENT_ANTELOPE');
    }

}
