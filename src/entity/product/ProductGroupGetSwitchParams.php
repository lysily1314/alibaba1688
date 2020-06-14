<?php
namespace AlibabaOpen\entity\product;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class ProductGroupGetSwitchParams
 * @package AlibabaOpen\entity\product
 */
class ProductGroupGetSwitchParams extends BaseEntityParams{

	private $webSite;

	/**
	 * ProductGroupGetSwitchParams constructor.
	 * @param $webSite
	 */
	public function __construct($webSite){
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