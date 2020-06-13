<?php
namespace AlibabaOpen\entity\product;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class ProductDeleteParams
 * @package AlibabaOpen\entity\product
 */
class ProductDeleteParams extends BaseEntityParams{

	private $productID;
	private $webSite;

	/**
	 * ProductDeleteParams constructor.
	 * @param $productID
	 * @param $webSite
	 */
	public function __construct($productID , $webSite){
		$this->productID = $productID;
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