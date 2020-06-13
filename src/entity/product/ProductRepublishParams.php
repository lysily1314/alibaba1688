<?php
namespace AlibabaOpen\entity\product;
use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class ProductRepublishParams
 * @package AlibabaOpen\entity\product
 */
class ProductRepublishParams extends BaseEntityParams{

	private $productIds;

	/**
	 * ProductExpireParams constructor.
	 * @param $productIds
	 */
	public function __construct($productIds){
		$this->productIds = $productIds;
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