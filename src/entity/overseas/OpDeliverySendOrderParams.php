<?php
namespace AlibabaOpen\entity\overseas;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class OpDeliverySendOrderParams
 * @package AlibabaOpen\entity\overseas
 * @property \AlibabaOpen\entity\overseas\OpDeliverySendOrderParams remarks
 * @property \AlibabaOpen\entity\overseas\OpDeliverySendOrderParams gmtSend
 * @property \AlibabaOpen\entity\overseas\OpDeliverySendOrderParams extParam
 * @property \AlibabaOpen\entity\overseas\OpDeliverySendOrderParams receiverInfo
 */

class OpDeliverySendOrderParams extends BaseEntityParams{

	private $sendGoods;

	private $extBody;

	private $remarks;

	private $gmtSend;

	private $extParam;

	private $receiverInfo;

	/**
	 * OpDeliverySendOrderParams constructor.
	 * @param $sendGoods
	 * @param $extBody
	 */
	public function __construct($sendGoods , $extBody){
		$this->sendGoods = $sendGoods;
		$this->extBody = $extBody;
	}

	/**
	 * @param $remarks
	 * @return $this
	 */
	public function setRemarks($remarks){
		$this->remarks = $remarks;
		return $this;
	}

	/**
	 * @param $gmtSend
	 * @return $this
	 */
	public function setGmtSend($gmtSend){
		$this->gmtSend = $gmtSend;
		return $this;
	}

	/**
	 * @param $extParam
	 * @return $this
	 */
	public function setExtParam($extParam){
		$this->extParam = $extParam;
		return $this;
	}

	/**
	 * @param $receiverInfo
	 * @return $this
	 */
	public function setReceiverInfo($receiverInfo){
		$this->receiverInfo = $receiverInfo;
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