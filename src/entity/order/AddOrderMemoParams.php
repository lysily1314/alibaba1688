<?php
namespace AlibabaOpen\entity\order;
use AlibabaOpen\entity\BaseEntityParams;

class AddOrderMemoParams extends BaseEntityParams{

	/**
	 * 订单ID
	 * @var integer
	 */
	private $orderId;
	/**
	 * 备忘信息
	 * @var string
	 */
	private $memo;
	/**
	 * 备忘图标，目前仅支持数字。1位红色图标，2为蓝色图标，3为绿色图标，4为黄色图标
	 * @var string
	 */
	private $remarkIcon;
	/**
	 * AddOrderMemoParams constructor.
	 * @param $orderId
	 * @param $memo
	 * @param $remarkIcon
	 */
	public function __construct($orderId , $memo , $remarkIcon){
		$this->orderId = $orderId;
		$this->memo = $memo;
		$this->remarkIcon = $remarkIcon;
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