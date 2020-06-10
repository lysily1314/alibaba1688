<?php


namespace AlibabaOpen\entity\product;
use AlibabaOpen\entity\BaseEntityParams;


class ProductFollowParams extends BaseEntityParams
{

    private $productId;

    /**
     * ProductFollowParams constructor.
     * @param $productId
     */
    public function __construct($productId)
    {
        $this->productId = $productId;
    }

    /**
     * @inheritDoc
     */
    public function build()
    {
        //过滤NULL
        return array_filter(get_object_vars($this), function ($val) {
            return !is_null($val);
        });
    }

}