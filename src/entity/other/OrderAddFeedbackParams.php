<?php
namespace AlibabaOpen\entity\other;


use AlibabaOpen\entity\BaseEntityParams;

class OrderAddFeedbackParams extends BaseEntityParams{

	/**
	 * 请求参数
	 * @var array {"feedback":"test","orderId":"123123213"}
	 */
	private $tradeFeedbackParam;

	/**
	 * OrderAddFeedbackParams constructor.
	 * @param $tradeFeedbackParam
	 */
	public function __construct($tradeFeedbackParam){
		$this->tradeFeedbackParam = $tradeFeedbackParam;
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