<?php

namespace Pyz\Glue\FishRestApi;

use Pyz\Client\Fish\FishClientInterface;
use Spryker\Glue\Kernel\Backend\AbstractBackendApiFactory;

class FishRestApiFactory extends AbstractBackendApiFactory
{
    /**
     * @return FishClientInterface
     */
    public function getFishClient(): FishClientInterface
    {
        return $this->getProvidedDependency(FishRestApiDependencyProvider::CLIENT_FISH);
    }
}
