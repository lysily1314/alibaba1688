<?php

namespace AlibabaOpen;

use AlibabaOpen\core\ContainerBase;
use AlibabaOpen\provider\CategoryProvider;
use AlibabaOpen\provider\ProductProvider;
use AlibabaOpen\provider\OrderProvider;
use AlibabaOpen\provider\OtherProvider;
use AlibabaOpen\provider\OverseasProvider;
use AlibabaOpen\provider\AuthProvider;
//use AlibabaOpen\provider\DevelopProvider;

/**
 * Class Application
 * @property \AlibabaOpen\functions\product\Product product
 * @property \AlibabaOpen\functions\order\Order order
 * @property \AlibabaOpen\functions\order\Logistics logistics
 * @property \AlibabaOpen\functions\order\Refund refund
 * @property \AlibabaOpen\functions\order\Pay pay
 * @property \AlibabaOpen\functions\other\Other other
 * @property \AlibabaOpen\functions\auth\Auth auth
 * @property \AlibabaOpen\functions\develop\Develop develop
 * @property \AlibabaOpen\functions\overseas\Overseas overseas
 */
class AlibabaCross extends ContainerBase
{
    /**
     * AlibabaClient constructor.
     * @param array $params 应用级参数
     */
    public function __construct($params = array())
    {
        parent::__construct($params);
    }

    /**
     * 服务提供者
     * @var array
     */
    protected $provider = [
	    OrderProvider::class,
        ProductProvider::class,
	    OtherProvider::class,
	    OverseasProvider::class,
	    AuthProvider::class,
	    //DevelopProvider::class
    ];
}
