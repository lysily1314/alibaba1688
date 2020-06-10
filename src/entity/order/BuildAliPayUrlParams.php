<?php
namespace AlibabaOpen\entity\order;

use AlibabaOpen\entity\BaseEntityParams;

class BuildAliPayUrlParams extends BaseEntityParams{


	private $orderIdList;

	/**
	 * BuildAliPayUrlParams constructor.
	 * @param $orderIdList
	 */
	public function __construct($orderIdList){
		$this->orderIdList = $orderIdList;
	}

	/**
	 * @inheritDoc
	 */
	public function build()
	{
		//过滤NULL
		return array_filter(get_object_vars($this), function ($val) {
			return !is_null($val);
		});
	}

}