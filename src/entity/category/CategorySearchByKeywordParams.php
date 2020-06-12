<?php
namespace AlibabaOpen\entity\category;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class CategorySearchByKeywordParams
 * @package AlibabaOpen\entity\category
 */
class CategorySearchByKeywordParams extends BaseEntityParams{

	private $keyword;

	/**
	 * CategorySearchByKeywordParams constructor.
	 * @param $keyword
	 */
	public function __construct($keyword){
		$this->keyword = $keyword;
	}

	/**
	 * @return array
	 */
	public function build(){
		return array_filter(get_object_vars($this), function ($val) {
			return !is_null($val);
		});
	}

}