<?php
namespace AlibabaOpen\entity\order;

use AlibabaOpen\entity\BaseEntityParams;
class QueryOrderByInsureParams extends BaseEntityParams{

	/**
	 * 请求参数
	 * @var array {"type":"lp","protectId":"91275389"}
	 */
	private $tradeProtectParam;

	/**
	 * QueryOrderByInsureParams constructor.
	 * @param $tradeProtectParam
	 */
	public function __construct($tradeProtectParam){
		$this->tradeProtectParam = $tradeProtectParam;
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