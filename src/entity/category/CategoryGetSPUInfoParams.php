<?php
namespace AlibabaOpen\entity\category;

use AlibabaOpen\entity\BaseEntityParams;

class CategoryGetSPUInfoParams extends BaseEntityParams{

	private $categoryId;
	private $keyAttrs;

	/**
	 * CategoryGetSPUInfoParams constructor.
	 * @param $categoryId
	 * @param $keyAttrs
	 */
	public function __construct($categoryId , $keyAttrs){
		$this->categoryId = $categoryId;
		$this->keyAttrs = $keyAttrs;
	}

	/**
	 * @return array
	 */
	public function build(){
		return array_filter(get_object_vars($this), function ($val) {
			return !is_null($val);
		});
	}

};