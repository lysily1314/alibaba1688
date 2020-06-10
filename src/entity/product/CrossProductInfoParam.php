<?php
namespace AlibabaOpen\entity\product;

/**
 * 跨境场景
 */
use AlibabaOpen\entity\BaseEntityParams;
class CrossProductInfoParam extends BaseEntityParams
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
        return array_filter(get_object_vars($this), function ($val) {
            return !is_null($val);
        });
    }
}
