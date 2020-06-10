<?php
namespace AlibabaOpen\entity\overseas;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class SellerDetailViewParams
 * @package AlibabaOpen\entity\overseas
 * @property \AlibabaOpen\entity\overseas\SellerDetailViewParams includeFields
 */
class SellerDetailViewParams extends BaseEntityParams{


	private $orderId;

	private $includeFields;

	/**
	 * SellerDetailViewParams constructor.
	 * @param $orderId
	 */
	public function __construct($orderId){
		$this->orderId = $orderId;
	}

	/**
	 * @param $includeFields
	 * @return $this
	 */
	public function setIncludeFields($includeFields){
		$this->includeFields = $includeFields;
		return $this;
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