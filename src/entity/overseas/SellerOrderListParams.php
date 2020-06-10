<?php
namespace AlibabaOpen\entity\overseas;


use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class SellerOrderListParams
 * @package AlibabaOpen\entity\overseas
 * @property \AlibabaOpen\entity\overseas\SellerOrderListParams createStartTime
 * @property \AlibabaOpen\entity\overseas\SellerOrderListParams createEndTime
 * @property \AlibabaOpen\entity\overseas\SellerOrderListParams modifyStartTime
 * @property \AlibabaOpen\entity\overseas\SellerOrderListParams modifyEndTime
 * @property \AlibabaOpen\entity\overseas\SellerOrderListParams page
 * @property \AlibabaOpen\entity\overseas\SellerOrderListParams pageSize
 * @property \AlibabaOpen\entity\overseas\SellerOrderListParams orderStatus
 * @property \AlibabaOpen\entity\overseas\SellerOrderListParams refundStatus
 * @property \AlibabaOpen\entity\overseas\SellerOrderListParams buyerMemberId
 * @property \AlibabaOpen\entity\overseas\SellerOrderListParams buyerLoginId
 * @property \AlibabaOpen\entity\overseas\SellerOrderListParams tradeType
 * @property \AlibabaOpen\entity\overseas\SellerOrderListParams bizTypes
 * @property \AlibabaOpen\entity\overseas\SellerOrderListParams isHis
 * @property \AlibabaOpen\entity\overseas\SellerOrderListParams productName
 * @property \AlibabaOpen\entity\overseas\SellerOrderListParams needBuyerAddressAndPhone
 * @property \AlibabaOpen\entity\overseas\SellerOrderListParams needMemoInfo
 * @property \AlibabaOpen\entity\overseas\SellerOrderListParams tousuStatus
 * @property \AlibabaOpen\entity\overseas\SellerOrderListParams buyerRateStatus
 * @property \AlibabaOpen\entity\overseas\SellerOrderListParams sellerRateStatus
 * @property \AlibabaOpen\entity\overseas\SellerOrderListParams needCheckSend
 *
 */
class SellerOrderListParams extends BaseEntityParams{


	private $createStartTime;

	private $createEndTime;

	private $modifyStartTime;

	private $modifyEndTime;

	private $page;

	private $pageSize;

	private $orderStatus;

	private $refundStatus;

	private $buyerMemberId;

	private $buyerLoginId;

	private $tradeType;

	private $bizTypes;

	private $isHis;

	private $productName;

	private $needBuyerAddressAndPhone;

	private $needMemoInfo;

	private $tousuStatus;

	private $buyerRateStatus;

	private $sellerRateStatus;

	private $needCheckSend;

	/**
	 * SellerOrderListParams constructor.
	 * @param int $page
	 * @param int $pageSize
	 */
	public function __construct($page = 1 , $pageSize = 10){
		$this->page = $page;
		$this->pageSize = $pageSize;
	}

	/**
	 * @param $createStartTime
	 * @return $this
	 */
	public function setCreateStartTime($createStartTime){
		$this->createStartTime = $createStartTime;
		return $this;
	}

	/**
	 * @param $createEndTime
	 * @return $this
	 */
	public function setCreateEndTime($createEndTime){
		$this->createEndTime = $createEndTime;
		return $this;
	}

	/**
	 * @param $modifyStartTime
	 * @return $this
	 */
	public function setModifyStartTime($modifyStartTime){
		$this->modifyStartTime = $modifyStartTime;
		return $this;
	}

	/**
	 * @param $modifyEndTime
	 * @return $this
	 */
	public function setModifyEndTime($modifyEndTime){
		$this->modifyEndTime = $modifyEndTime;
		return $this;
	}

	/**
	 * @param $page
	 * @return $this
	 */
	public function setPage($page){
		$this->page = $page;
		return $this;
	}

	/**
	 * @param $pageSize
	 * @return $this
	 */
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
		return $this;
	}

	/**
	 * @param $orderStatus
	 * @return $this
	 */
	public function setOrderStatus($orderStatus){
		$this->orderStatus = $orderStatus;
		return $this;
	}

	/**
	 * @param $refundStatus
	 * @return $this
	 */
	public function setRefundStatus($refundStatus){
		$this->refundStatus = $refundStatus;
		return $this;
	}

	/**
	 * @param $buyerMemberId
	 * @return $this
	 */
	public function setBuyerMemberId($buyerMemberId){
		$this->buyerMemberId = $buyerMemberId;
		return $this;
	}

	/**
	 * @param $buyerLoginId
	 * @return $this
	 */
	public function setBuyerLoginId($buyerLoginId){
		$this->buyerLoginId = $buyerLoginId;
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
	 * @param $bizTypes
	 * @return $this
	 */
	public function setBizTypes($bizTypes){
		$this->bizTypes = $bizTypes;
		return $this;
	}

	/**
	 * @param $isHis
	 * @return $this
	 */
	public function setIsHis($isHis){
		$this->isHis = $isHis;
		return $this;
	}

	/**
	 * @param $productName
	 * @return $this
	 */
	public function setProductName($productName){
		$this->productName = $productName;
		return $this;
	}

	/**
	 * @param $needBuyerAddressAndPhone
	 * @return $this
	 */
	public function setNeedBuyerAddressAndPhone($needBuyerAddressAndPhone){
		$this->needBuyerAddressAndPhone = $needBuyerAddressAndPhone;
		return $this;
	}

	/**
	 * @param boolean $needMemoInfo
	 * @return $this
	 */
	public function setNeedMemoInfo($needMemoInfo){
		$this->needMemoInfo = $needMemoInfo;
		return $this;
	}

	/**
	 * @param $tousuStatus
	 * @return $this
	 */
	public function setTousuStatus($tousuStatus){
		$this->tousuStatus = $tousuStatus;
		return $this;
	}

	/**
	 * @param $buyerRateStatus
	 * @return $this
	 */
	public function setBuyerRateStatus($buyerRateStatus){
		$this->buyerRateStatus = $buyerRateStatus;
		return $this;
	}

	/**
	 * @param $sellerRateStatus
	 * @return $this
	 */
	public function setSellerRateStatus($sellerRateStatus){
		$this->sellerRateStatus = $sellerRateStatus;
		return $this;
	}

	/**
	 * @param $needCheckSend
	 * @return $this
	 */
	public function setNeedCheckSend($needCheckSend){
		$this->needCheckSend = $needCheckSend;
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

