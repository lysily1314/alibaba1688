<?php
namespace AlibabaOpen\entity\other;


use AlibabaOpen\entity\BaseEntityParams;

class AccountAgentBasicParams extends BaseEntityParams{


	/**
	 * 用户的loginId，入参不可同时为空
	 * @var string
	 */
	private $loginId;
	/**
	 * 旺铺域名，入参不可同时为空
	 * @var string
	 */
	private $domain;

	/**
	 * loginId/domain不可同时为空
	 * AccountAgentBasicParams constructor.
	 * @param $loginId
	 * @param $domain
	 */
	public function __construct($loginId = null , $domain = null){
		$this->loginId = $loginId;
		$this->domain = $domain;
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