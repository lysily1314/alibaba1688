<?php


namespace AlibabaOpen\entity\order;
use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class OrderListParams
 * @package AlibabaOpen\entity\order
 * @property \AlibabaOpen\entity\order\OrderListParams $bizTypes
 * @property \AlibabaOpen\entity\order\OrderListParams $createEndTime
 * @property \AlibabaOpen\entity\order\OrderListParams $createStartTime
 * @property \AlibabaOpen\entity\order\OrderListParams $isHis
 * @property \AlibabaOpen\entity\order\OrderListParams $modifyEndTime
 * @property \AlibabaOpen\entity\order\OrderListParams $modifyStartTime
 * @property \AlibabaOpen\entity\order\OrderListParams $orderStatus
 * @property \AlibabaOpen\entity\order\OrderListParams $page
 * @property \AlibabaOpen\entity\order\OrderListParams $pageSize
 * @property \AlibabaOpen\entity\order\OrderListParams $refundStatus
 * @property \AlibabaOpen\entity\order\OrderListParams $sellerMemberId
 * @property \AlibabaOpen\entity\order\OrderListParams $sellerLoginId
 * @property \AlibabaOpen\entity\order\OrderListParams $sellerRateStatus
 * @property \AlibabaOpen\entity\order\OrderListParams $tradeType
 * @property \AlibabaOpen\entity\order\OrderListParams $productName
 * @property \AlibabaOpen\entity\order\OrderListParams $needBuyerAddressAndPhone
 * @property \AlibabaOpen\entity\order\OrderListParams $needMemoInfo
 */
class OrderListParams extends BaseEntityParams
{
    private $bizTypes;
    private $createEndTime;
    private $createStartTime;
    private $isHis;
    private $modifyEndTime;
    private $modifyStartTime;
    private $orderStatus;
    private $page;
    private $pageSize;
    private $refundStatus;
    private $sellerMemberId;
    private $sellerLoginId;
    private $sellerRateStatus;
    private $tradeType;
    private $productName;
    private $needBuyerAddressAndPhone;
    private $needMemoInfo;

    /**
     * OrderListParams constructor.
     */
    public function __construct()
    {
    }

	/**
	 * @param $sellerLoginId
	 * @return $this
	 */
    public function setSellerLoginId($sellerLoginId){
    	$this->sellerLoginId = $sellerLoginId;
    	return $this;
    }

    /**
     * @param mixed $bizTypes
     * @return OrderListParams
     */
    public function setBizTypes($bizTypes)
    {
        $this->bizTypes = $bizTypes;
        return $this;
    }

    /**
     * @param mixed $createEndTime
     * @return OrderListParams
     */
    public function setCreateEndTime($createEndTime)
    {
        $this->createEndTime = $createEndTime;
        return $this;
    }

    /**
     * @param mixed $createStartTime
     * @return OrderListParams
     */
    public function setCreateStartTime($createStartTime)
    {
        $this->createStartTime = $createStartTime;
        return $this;
    }

    /**
     * @param mixed $isHis
     * @return OrderListParams
     */
    public function setIsHis($isHis)
    {
        $this->isHis = $isHis;
        return $this;
    }

    /**
     * @param mixed $modifyEndTime
     * @return OrderListParams
     */
    public function setModifyEndTime($modifyEndTime)
    {
        $this->modifyEndTime = $modifyEndTime;
        return $this;
    }

    /**
     * @param mixed $modifyStartTime
     * @return OrderListParams
     */
    public function setModifyStartTime($modifyStartTime)
    {
        $this->modifyStartTime = $modifyStartTime;
        return $this;
    }

    /**
     * @param mixed $orderStatus
     * @return OrderListParams
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * @param mixed $page
     * @return OrderListParams
     */
    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @param mixed $pageSize
     * @return OrderListParams
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * @param mixed $refundStatus
     * @return OrderListParams
     */
    public function setRefundStatus($refundStatus)
    {
        $this->refundStatus = $refundStatus;
        return $this;
    }

    /**
     * @param mixed $sellerMemberId
     * @return OrderListParams
     */
    public function setSellerMemberId($sellerMemberId)
    {
        $this->sellerMemberId = $sellerMemberId;
        return $this;
    }

    /**
     * @param mixed $sellerRateStatus
     * @return OrderListParams
     */
    public function setSellerRateStatus($sellerRateStatus)
    {
        $this->sellerRateStatus = $sellerRateStatus;
        return $this;
    }

    /**
     * @param mixed $tradeType
     * @return OrderListParams
     */
    public function setTradeType($tradeType)
    {
        $this->tradeType = $tradeType;
        return $this;
    }

    /**
     * @param mixed $productName
     * @return OrderListParams
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @param mixed $needBuyerAddressAndPhone
     * @return OrderListParams
     */
    public function setNeedBuyerAddressAndPhone($needBuyerAddressAndPhone)
    {
        $this->needBuyerAddressAndPhone = $needBuyerAddressAndPhone;
        return $this;
    }

    /**
     * @param mixed $needMemoInfo
     * @return OrderListParams
     */
    public function setNeedMemoInfo($needMemoInfo)
    {
        $this->needMemoInfo = $needMemoInfo;
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