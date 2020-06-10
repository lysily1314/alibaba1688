<?php
namespace AlibabaOpen\entity\product;
use AlibabaOpen\entity\BaseEntityParams;

class CrossSyncPushProductResultParams extends BaseEntityParams{


	/**
	 * 目标平台的定义
	 * @var array;
	 */
	private $platformDefinition;
	/**
	 * 在批量铺货时，源平台可能会为每次铺货产生一个批次传递给ISV，ISV可以在同步通知时返回该字段。该字段由平台传递给ISV，该字段不是必须。
	 * @var array
	 */
	private $pushRecordIdentity;

	/**
	 * 商品级别的铺货结果
	 * @var array
	 */
	private $pushProductResults;

	/**
	 * CrossSyncPushProductResult constructor.
	 * @param $platformDefinition
	 * @param $pushRecordIdentity
	 * @param $pushProductResults
	 */
	public function __construct($platformDefinition ,$pushRecordIdentity ,$pushProductResults)
	{
		$this->platformDefinition = $platformDefinition;
		$this->pushRecordIdentity = $pushRecordIdentity;
		$this->pushProductResults = $pushProductResults;
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