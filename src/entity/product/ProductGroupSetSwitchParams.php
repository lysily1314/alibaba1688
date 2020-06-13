<?php
namespace AlibabaOpen\entity\product;

use AlibabaOpen\entity\BaseEntityParams;

class ProductGroupSetSwitchParams extends BaseEntityParams{

	private $switchValue;
	private $webSite;

	/**
	 * ProductGroupSetSwitchParams constructor.
	 * @param $switchValue
	 * @param $webSite
	 */
	public function __construct($switchValue , $webSite){
		$this->switchValue = $switchValue;
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