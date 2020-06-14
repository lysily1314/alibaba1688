<?php
namespace AlibabaOpen\entity\product;
use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class ProductGetParams
 * @package AlibabaOpen\entity\product
 */
class ProductGetParams extends BaseEntityParams{

	private $productID;
	private $webSite;
	private $scene;

	/**
	 * ProductGetParams constructor.
	 * @param $productID
	 */
	public function __construct($productID){
		$this->productID = $productID;
	}

	/**
	 * @param $webSite
	 * @return $this
	 */
	public function setWebSite($webSite){
		$this->webSite = $webSite;
		return $this;
	}

	/**
	 * @param $scene
	 * @return $this
	 */
	public function setScene($scene){
		$this->scene = $scene;
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