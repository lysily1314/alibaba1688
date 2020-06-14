<?php
namespace AlibabaOpen\entity\product;

use AlibabaOpen\entity\BaseEntityParams;

class ProductListGetParams extends BaseEntityParams{

	private $signs;
	private $pageNo;
	private $pageSize;
	private $statusList;
	private $categoryId;
	private $startModifyTime;
	private $endModifyTime;
	private $subjectKey;
	private $cargoNumber;
	private $productIds;
	private $beginStar;
	private $endStar;
	private $groupIds;
	private $startPublishTime;
	private $endPublishTime;
	private $startExpiredTime;
	private $endExpiredTime;
	private $priceStart;
	private $priceEnd;
	private $orderByCondition;
	private $orderByType;
	private $supportOnlineTrade;
	private $privateOffer;
	private $needDetail;
	private $needFreight;
	private $needUserCategoryInfo;

	/**
	 * ProductListGetParams constructor.
	 * @param $pageNo
	 * @param $pageSize
	 */
	public function __construct($pageNo , $pageSize){
		$this->pageNo = $pageNo;
		$this->pageSize = $pageSize;
	}

	/**
	 * @param $name
	 * @param $arguments
	 * @return $this
	 */
	public function __call($name, $arguments){
		$string = ltrim($name , 'set');
		$field = lcfirst($string);
		$this->$field = $arguments[0];
		return $this;
	}

	/**P
	 * @inheritDoc
	 */
	public function build()
	{
		return array_filter(get_object_vars($this), function ($val) {
			return !is_null($val);
		});
	}
}