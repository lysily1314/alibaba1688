<?php
namespace AlibabaOpen\entity\other;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class QueryMarketingMixConfigParams
 * @package AlibabaOpen\entity\other
 * @property \AlibabaOpen\entity\other\QueryMarketingMixConfigParams $sellerMemberId
 * @property \AlibabaOpen\entity\other\QueryMarketingMixConfigParams $sellerLoginId
 */

class QueryMarketingMixConfigParams extends BaseEntityParams{

	/**
	 * 卖家memberId
	 * @var string
	 */
	private $sellerMemberId;
	/**
	 * 卖家LoginId，sellerMemberId为空时，以loginId为准
	 * @var string
	 */
	private $sellerLoginId;

	/**
	 * @param $sellerMemberId
	 * @return $this
	 */
	public function setSellerMemberId($sellerMemberId){
		$this->sellerMemberId = $sellerMemberId;
		return $this;
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
	 * @inheritDoc
	 */
	public function build()
	{
		return array_filter(get_object_vars($this), function ($val) {
			return !is_null($val);
		});
	}

}