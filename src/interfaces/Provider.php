<?php

namespace AlibabaOpen\interfaces;

use AlibabaOpen\core\Container;

/**
 * Interface Provider
 * @package AlibabaOpen\interfaces
 */
interface Provider
{
    /**
     * @param Container $container
     * @return mixed
     */
    public function serviceProvider(Container $container);
}
