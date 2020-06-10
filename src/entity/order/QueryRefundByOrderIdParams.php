<?php
namespace AlibabaOpen\entity\order;

use AlibabaOpen\entity\BaseEntityParams;

class QueryRefundByOrderIdParams extends BaseEntityParams{


	private $orderId;

	/**
	 * 1：活动；3:退款成功（只支持退款中和退款成功）
	 * @var string
	 */
	private $queryType;

	/**
	 * QueryRefundByOrderIdParams constructor.
	 * @param $orderId
	 * @param $queryType
	 */
	public function __construct($orderId , $queryType){
		$this->orderId = $orderId;
		$this->queryType = $queryType;
	}

	/**
	 * @inheritDoc
	 */
	public function build(){
		return array_filter(get_object_vars($this), function ($val) {
			return !is_null($val);
		});
	}

}