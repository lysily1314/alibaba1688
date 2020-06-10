<?php
namespace AlibabaOpen\entity\order;
use AlibabaOpen\entity\BaseEntityParams;
/**
 * Class CrossCreateOrderParams
 * @package AlibabaOpen\entity\order
 * @property \AlibabaOpen\entity\order\CrossCreateOrderParams message
 * @property \AlibabaOpen\entity\order\CrossCreateOrderParams invoiceParam
 * @property \AlibabaOpen\entity\order\CrossCreateOrderParams tradeType
 * @property \AlibabaOpen\entity\order\CrossCreateOrderParams shopPromotionId
 * @property \AlibabaOpen\entity\order\CrossCreateOrderParams anonymousBuyer

 */
class CrossCreateOrderParams extends BaseEntityParams{

	/**
	 * 流程:general（创建大市场订单），saleproxy（创建分销订单）
	 * @var string
	 */
	private $flow;
	/**
	 * 买家留言
	 * @var string
	 */
	private $message;
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
	 * 发票信息
	 * @var array
	 */
	private $invoiceParam;
	/**
	 * 由于不同的商品支持的交易方式不同，没有一种交易方式是全局通用的，所以当前下单可使用的交易方式必须通过下单预览接口的tradeModeNameList获取。
	 * 交易方式类型说明：fxassure（交易4.0通用担保交易），alipay（大市场通用的支付宝担保交易（目前在做切流，后续会下掉）），
	 * period（普通账期交易）, assure（大买家企业采购询报价下单时需要使用的担保交易流程）, creditBuy（诚E赊），bank（银行转账），
	 * 631staged（631分阶段付款），37staged（37分阶段）；此字段不传则系统默认会选取一个可用的交易方式下单，如果开通了诚E赊默认是creditBuy（诚E赊），
	 * 未开通诚E赊默认使用的方式是支付宝担宝交易。
	 * @var string
	 */
	private $tradeType;
	/**
	 * 店铺优惠ID，通过“创建订单前预览数据接口”获得。为空默认使用默认优惠
	 * @var string
	 */
	private $shopPromotionId;
	/**
	 * 是否匿名下单
	 * @var Boolean
	 */
	private $anonymousBuyer;

	/**
	 * CrossCreateOrderParams constructor.
	 * @param $flow
	 * @param $addressParam
	 * @param $cargoParamList
	 */
	public function __construct($flow,$addressParam,$cargoParamList){
		$this->flow = $flow;
		$this->addressParam = $addressParam;
		$this->cargoParamList = $cargoParamList;
	}

	/**
	 * @param $message
	 * @return $this
	 */
	public function setMessage($message){
		$this->message = $message;
		return $this;
	}

	/**
	 * @param $invoiceParam
	 * @return $this
	 */
	public function setInvoiceParam($invoiceParam){
		$this->invoiceParam = $invoiceParam;
		return $this;
	}

	/**
	 * @param $tradeType
	 * @return $this
	 */
	public function setTradeType($tradeType){
		$this->tradeType = $tradeType;
		return $this;
	}

	/**
	 * @param $shopPromotionId
	 * @return $this
	 */
	public function setShopPromotionId($shopPromotionId){
		$this->shopPromotionId = $shopPromotionId;
		return $this;
	}

	/**
	 * @param $anonymousBuyer
	 * @return $this
	 */
	public function setAnonymousBuyer($anonymousBuyer){
		$this->anonymousBuyer = $anonymousBuyer;
		return $this;
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