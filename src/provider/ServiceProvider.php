<?php


namespace AlibabaOpen\provider;


use AlibabaOpen\core\Container;
use AlibabaOpen\functions\Service;
use AlibabaOpen\interfaces\Provider;

/**
 * Class ProductProvider
 * @package AlibabaOpen\provider
 * @property \AlibabaOpen\functions\Service service
 */
class ServiceProvider implements Provider
{
    /**
     * @inheritDoc
     */
    public function serviceProvider(Container $container)
    {
        $container['service']   = function ($container) {
            return new Service($container);
        };
    }
}
