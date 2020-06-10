<?php


namespace AlibabaOpen\provider;


use AlibabaOpen\core\Container;
use AlibabaOpen\functions\Photobank;
use AlibabaOpen\interfaces\Provider;

/**
 * Class ProductProvider
 * @package AlibabaOpen\provider
 * @property \AlibabaOpen\functions\Photobank photobank
 */
class PhotobankProvider implements Provider
{
    /**
     * @inheritDoc
     */
    public function serviceProvider(Container $container)
    {
        $container['photobank']   = function ($container) {
            return new Photobank($container);
        };
    }
}
