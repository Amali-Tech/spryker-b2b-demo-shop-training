<?php

namespace Pyz\Glue\FishRestApi;

use Spryker\Glue\Kernel\Backend\AbstractBundleDependencyProvider;
use Spryker\Glue\Kernel\Backend\Container;
use Spryker\Glue\Kernel\Container as GlueContainer;

class FishRestApiDependencyProvider extends AbstractBundleDependencyProvider
{
    public const CLIENT_FISH = 'CLIENT_FISH';

    public function provideBackendDependencies(Container $container): Container
    {
        $container = parent::provideBackendDependencies($container);

        $container = $this->addFishClient($container);

        return $container;
    }

    protected function addFishClient(Container $container)
    {
        $container->set(static::CLIENT_FISH, function (Container $container) {
            return $container->getLocator()->fish()->client();
        });

        return $container;
    }


}
