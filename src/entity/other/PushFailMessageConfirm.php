<?php
namespace AlibabaOpen\entity\other;


use AlibabaOpen\entity\BaseEntityParams;

class PushFailMessageConfirm extends BaseEntityParams{

	/**
	 * 待确认的消息id列表
	 * @var array
	 */
	private $msgIdList;

	/**
	 * PushFailMessageConfirm constructor.
	 * @param $msgIdList
	 */
	public function __construct($msgIdList){
		$this->msgIdList = $msgIdList;
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