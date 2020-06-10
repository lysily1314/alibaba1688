<?php
namespace AlibabaOpen\entity\order;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class QueryOrderRefundListParams
 * @package AlibabaOpen\entity\order
 * @property \AlibabaOpen\entity\order\QueryOrderRefundListParams applyStartTime
 * @property \AlibabaOpen\entity\order\QueryOrderRefundListParams applyEndTime
 * @property \AlibabaOpen\entity\order\QueryOrderRefundListParams refundStatusSet
 * @property \AlibabaOpen\entity\order\QueryOrderRefundListParams sellerMemberId
 * @property \AlibabaOpen\entity\order\QueryOrderRefundListParams currentPageNum
 * @property \AlibabaOpen\entity\order\QueryOrderRefundListParams pageSize
 * @property \AlibabaOpen\entity\order\QueryOrderRefundListParams logisticsNo
 * @property \AlibabaOpen\entity\order\QueryOrderRefundListParams modifyStartTime
 * @property \AlibabaOpen\entity\order\QueryOrderRefundListParams modifyEndTime
 * @property \AlibabaOpen\entity\order\QueryOrderRefundListParams dipsuteType
 * @property \AlibabaOpen\entity\order\QueryOrderRefundListParams orderId
 */
class QueryOrderRefundListParams extends BaseEntityParams{


	private $orderId;

	private $applyStartTime;

	private $applyEndTime;

	private $refundStatusSet;

	private $sellerMemberId;

	private $currentPageNum;

	private $pageSize;

	private $logisticsNo;

	private $modifyStartTime;

	private $modifyEndTime;

	private $dipsuteType;

	/**
	 * QueryOrderRefundListParams constructor.
	 * @param null $orderId
	 */
	public function __construct($orderId = null){
		$this->orderId = $orderId;
	}


	/**
	 * @param $orderId
	 * @return $this
	 */
	public function setOrderId($orderId){
		$this->orderId = $orderId;
		return $this;
	}

	/**
	 * @param $applyStartTime
	 * @return $this
	 */
	public function setApplyStartTime($applyStartTime){
		$this->applyStartTime = $applyStartTime;
		return $this;
	}

	/**
	 * @param $applyEndTime
	 * @return $this
	 */
	public function setApplyEndTime($applyEndTime){
		$this->applyEndTime = $applyEndTime;
		return $this;
	}

	/**
	 * @param $refundStatusSet
	 * @return $this
	 */
	public function setRefundStatusSet($refundStatusSet){
		$this->refundStatusSet = $refundStatusSet;
		return $this;
	}

	/**
	 * @param $sellerMemberId
	 * @return $this
	 */
	public function setSellerMemberId($sellerMemberId){
		$this->sellerMemberId = $sellerMemberId;
		return $this;
	}

	/**
	 * @param $currentPageNum
	 * @return $this
	 */
	public function setCurrentPageNum($currentPageNum){
		$this->currentPageNum = $currentPageNum;
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
	 * @param $logisticsNo
	 * @return $this
	 */
	public function setLogisticsNo($logisticsNo){
		$this->logisticsNo = $logisticsNo;
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
	 * @param $dipsuteType
	 * @return $this
	 */
	public function setDipsuteType($dipsuteType){
		$this->dipsuteType = $dipsuteType;
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