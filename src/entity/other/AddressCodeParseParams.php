<?php
namespace AlibabaOpen\entity\other;



use AlibabaOpen\entity\BaseEntityParams;

class AddressCodeParseParams extends BaseEntityParams{

	/**
	 * 地址信息
	 * @var string
	 */
	private $addressInfo;

	/**
	 * AddressCodeParseParams constructor.
	 * @param $addressInfo
	 */
	public function __construct($addressInfo){
		$this->addressInfo = $addressInfo;
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