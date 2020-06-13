<?php
namespace AlibabaOpen\entity\product;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class ProductRepostParams
 * @package AlibabaOpen\entity\product
 */
class ProductRepostParams extends BaseEntityParams{

	private $productIds;
	private $webSite;

	/**
	 * ProductExpireParams constructor.
	 * @param $productIds
	 * @param $webSite
	 */
	public function __construct($productIds , $webSite){
		$this->productIds = $productIds;
		$this->webSite = $webSite;
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