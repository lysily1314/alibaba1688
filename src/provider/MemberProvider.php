<?php


namespace AlibabaOpen\provider;


use AlibabaOpen\core\Container;
use AlibabaOpen\functions\Member;
use AlibabaOpen\interfaces\Provider;

/**
 * Class ProductProvider
 * @package AlibabaOpen\provider
 * @property \AlibabaOpen\functions\Member member
 */
class MemberProvider implements Provider
{
    /**
     * @inheritDoc
     */
    public function serviceProvider(Container $container)
    {
        $container['member']   = function ($container) {
            return new Member($container);
        };
    }
}
