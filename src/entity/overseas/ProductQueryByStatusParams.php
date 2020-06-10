<?php
namespace AlibabaOpen\entity\overseas;

use AlibabaOpen\entity\BaseEntityParams;

class ProductQueryByStatusParams extends BaseEntityParams{

	private $pageNo;

	private $pageSize;

	private $statusList;

	/**
	 * ProductQueryByStatusParams constructor.
	 * @param $pageNo
	 * @param $pageSize
	 * @param $statusList
	 */
	public function __construct($pageNo , $pageSize , $statusList){
		$this->pageNo = $pageNo;
		$this->pageSize = $pageSize;
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