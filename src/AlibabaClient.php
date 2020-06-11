<?php

namespace AlibabaOpen;

use AlibabaOpen\core\ContainerBase;
use AlibabaOpen\provider\CategoryProvider;
use AlibabaOpen\provider\LogisticsProvider;
use AlibabaOpen\provider\MemberProvider;
use AlibabaOpen\provider\ProductProvider;
use AlibabaOpen\provider\PhotobankProvider;
use AlibabaOpen\provider\SearchProvider;
use AlibabaOpen\provider\ServiceProvider;
use AlibabaOpen\provider\TradeProvider;

/**
 * Class Application
 * @property \AlibabaOpen\functions\Category category
 * @property \AlibabaOpen\functions\Logistics logistics
 * @property \AlibabaOpen\functions\Member member
 * @property \AlibabaOpen\functions\Product product
 * @property \AlibabaOpen\functions\Photobank photobank
 * @property \AlibabaOpen\functions\Search search
 * @property \AlibabaOpen\functions\Service service
 * @property \AlibabaOpen\functions\Trade trade
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
	    CategoryProvider::class,
        LogisticsProvider::class,
        MemberProvider::class,
        ProductProvider::class,
        PhotobankProvider::class,
        SearchProvider::class,
        ServiceProvider::class,
        TradeProvider::class
    ];
}
