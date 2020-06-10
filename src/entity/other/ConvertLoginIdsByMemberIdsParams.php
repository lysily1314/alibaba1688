<?php
namespace AlibabaOpen\entity\other;



use AlibabaOpen\entity\BaseEntityParams;

class ConvertLoginIdsByMemberIdsParams extends BaseEntityParams{

	/**
	 * 需要转换的memberId列表
	 * @var array ["memberId1","memberId2"]
	 */
	private $memberIds;

	/**
	 * ConvertLoginIdsByMemberIdsParams constructor.
	 * @param $memberIds
	 */
	public function __construct($memberIds){
		$this->memberIds = $memberIds;
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