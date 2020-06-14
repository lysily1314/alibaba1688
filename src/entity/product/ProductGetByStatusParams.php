<?php
namespace AlibabaOpen\entity\product;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class ProductGetByStatusParams
 * @package AlibabaOpen\entity\product
 */
class ProductGetByStatusParams extends BaseEntityParams{

	private $pageNo;
	private $pageSize;
	private $statusList;

	/**
	 * ProductGetByStatusParams constructor.
	 * @param $pageNo
	 * @param $pageSize
	 * @param $statusList
	 */
	public function __construct($pageNo , $pageSize , $statusList){
		$this->pageSize = $pageSize;
		$this->pageNo = $pageNo;
		$this->statusList = $statusList;
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