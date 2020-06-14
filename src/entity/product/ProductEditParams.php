<?php
namespace AlibabaOpen\entity\product;

use AlibabaOpen\entity\BaseEntityParams;

class ProductEditParams extends BaseEntityParams{


	private $productID;
	private $productInfo;
	private $webSite;

	/**
	 * ProductEditParams constructor.
	 * @param $productID
	 * @param $productInfo
	 * @param $webSite
	 */
	public function __construct($productID , $productInfo , $webSite){
		$this->productID = $productID;
		$this->productInfo = $productInfo;
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