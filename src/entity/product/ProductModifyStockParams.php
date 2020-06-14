<?php
namespace AlibabaOpen\entity\product;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class ProductModifyStockParams
 * @package AlibabaOpen\entity\product
 */
class ProductModifyStockParams extends BaseEntityParams{

	private $productStockChange;
	private $webSite;
	private $increaceModify;

	/**
	 * ProductModifyStockParams constructor.
	 * @param $productStockChange
	 * @param $webSite
	 */
	public function __construct($productStockChange , $webSite){
		$this->productStockChange = $productStockChange;
		$this->webSite = $webSite;
	}

	/**
	 * @param $increaceModify
	 * @return $this
	 */
	public function setIncreaceModify($increaceModify){
		$this->increaceModify = $increaceModify;
		return $this;
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