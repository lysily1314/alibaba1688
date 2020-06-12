<?php
namespace AlibabaOpen\entity\category;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class UserDefineCategoryAddParams
 * @package AlibabaOpen\entity\category
 */
class UserDefineCategoryAddParams extends BaseEntityParams{

	private $groupName;
	private $parentID;

	/**
	 * UserDefineCategoryAddParams constructor.
	 * @param $groupName
	 * @param $parentID
	 */
	public function __construct($groupName , $parentID){
		$this->groupName = $groupName;
		$this->parentID = $parentID;
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