<?php
namespace AlibabaOpen\entity\product;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class ProductGetByIdListParams
 * @package AlibabaOpen\entity\product
 */
class ProductGetByIdListParams extends BaseEntityParams{

	private $productIdList;

	/**
	 * ProductGetByIdListParams constructor.
	 * @param $productIdList
	 */
	public function __construct($productIdList){
		$this->productIdList = $productIdList;
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