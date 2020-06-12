<?php
namespace AlibabaOpen\entity\category;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class CategoryGetParams
 * @package AlibabaOpen\entity\category
 */
class CategoryGetParams extends BaseEntityParams{

	private $categoryID;

	/**
	 * CategoryGetParams constructor.
	 * @param $categoryID
	 */
	public function __construct($categoryID){
		$this->categoryID = $categoryID;
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