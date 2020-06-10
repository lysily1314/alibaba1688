<?php
namespace AlibabaOpen\entity\order;
use AlibabaOpen\entity\BaseEntityParams;

class PreviewCreateOrderParams extends BaseEntityParams{

	/**
	 * 收货地址信息
	 * @var array
	 */
	private $addressParam;
	/**
	 * 商品信息
	 * @var array
	 */
	private $cargoParamList;
	/**
	 *发票信息
	 * @var array
	 */
	private $invoiceParam;
	/**
	 * general（创建大市场订单），saleproxy（创建分销订单）。saleproxy流程将校验分销关系
	 * @var string
	 */
	private $flow;

	/**
	 * PreviewCreateOrderParams constructor.
	 * @param $addressParam
	 * @param $cargoParamList
	 * @param $invoiceParam
	 * @param $flow
	 */
	public function __construct($addressParam , $cargoParamList , $invoiceParam , $flow){
		$this->addressParam = $addressParam;
		$this->cargoParamList = $cargoParamList;
		$this->invoiceParam = $invoiceParam;
		$this->flow = $flow;
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
