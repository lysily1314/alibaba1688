<?php


namespace AlibabaOpen\provider;


use AlibabaOpen\core\Container;
use AlibabaOpen\functions\Search;
use AlibabaOpen\interfaces\Provider;

/**
 * Class ProductProvider
 * @package AlibabaOpen\provider
 * @property \AlibabaOpen\functions\Search search
 */
class SearchProvider implements Provider
{
    /**
     * @inheritDoc
     */
    public function serviceProvider(Container $container)
    {
        $container['search']   = function ($container) {
            return new Search($container);
        };
    }
}
