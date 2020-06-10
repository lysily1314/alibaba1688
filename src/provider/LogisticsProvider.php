<?php


namespace AlibabaOpen\provider;


use AlibabaOpen\core\Container;
use AlibabaOpen\functions\Logistics;
use AlibabaOpen\interfaces\Provider;

/**
 * Class ProductProvider
 * @package AlibabaOpen\provider
 * @property \AlibabaOpen\functions\Logistics pogistics
 */
class LogisticsProvider implements Provider
{
    /**
     * @inheritDoc
     */
    public function serviceProvider(Container $container)
    {
        $container['logistics']   = function ($container) {
            return new Logistics($container);
        };
    }
}
