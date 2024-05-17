<?php

namespace Pyz\Glue\AntelopeRestApi;

use Spryker\Glue\Kernel\Backend\AbstractBundleDependencyProvider;
use Spryker\Glue\Kernel\Backend\Container;

class AntelopeRestApiDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @inheritDoc
     */
    public function provideBackendDependencies(Container $container): Container
    {
        $container =  parent::provideBackendDependencies($container);
        $container = $this->addAntelopeClient($container);

        return $container;
    }

    /**
     * @param Container $container
     *
     * @return Container
     */
    protected function addAntelopeClient(Container $container): Container
    {
        $container->set('CLIENT_ANTELOPE', function (Container $container) {
            return $container->getLocator()->antelope()->client();
        });

        return $container;
    }
}
