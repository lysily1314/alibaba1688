<?php
namespace AlibabaOpen\entity\product;
use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class ProductAddParams
 * @package AlibabaOpen\entity\product
 */
class ProductAddParams extends BaseEntityParams{

	private $productType;
	private $categoryID;
	private $attributes;
	private $groupID;
	private $subject;
	private $description;
	private $language;
	private $periodOfValidity;
	private $bizType;
	private $pictureAuth;
	private $image;
	private $skuInfos;
	private $saleInfo;
	private $shippingInfo;
	private $internationalTradeInfo;
	private $webSite;

	public function __construct(...$params){
		if($params){
			foreach($params as $field=>$param){
				$this->$field = $param;
			}
		}
	}

	/**
	 * @param $attributes
	 * @return $this
	 */
	public function setAttributes($attributes){
		$this->attributes = $attributes;
		return $this;
	}

	/**
	 * @param $groupID
	 * @return $this
	 */
	public function setGroupID($groupID){
		$this->groupID = $groupID;
		return $this;
	}

	/**
	 * @param $description
	 * @return $this
	 */
	public function setDescription($description){
		$this->description = $description;
		return $this;
	}

	/**
	 * @param $periodOfValidity
	 * @return $this
	 */
	public function setPeriodOfValidity($periodOfValidity){
		$this->periodOfValidity = $periodOfValidity;
		return $this;
	}

	/**
	 * @param $bizType
	 * @return $this
	 */
	public function setBizType($bizType){
		$this->bizType = $bizType;
		return $this;
	}

	/**
	 * @param $pictureAuth
	 * @return $this
	 */
	public function setPictureAuth($pictureAuth){
		$this->pictureAuth = $pictureAuth;
		return $this;
	}

	/**
	 * @param $skuInfos
	 * @return $this
	 */
	public function setSkuInfos($skuInfos){
		$this->skuInfos = $skuInfos;
		return $this;
	}

	/**
	 * @param $saleInfo
	 * @return $this
	 */
	public function setSaleInfo($saleInfo){
		$this->saleInfo = $saleInfo;
		return $this;
	}

	/**
	 * @param $shippingInfo
	 * @return $this
	 */
	public function setShippingInfo($shippingInfo){
		$this->shippingInfo = $shippingInfo;
		return $this;
	}

	/**
	 * @param $internationalTradeInfo
	 * @return $this
	 */
	public function setInternationalTradeInfo($internationalTradeInfo){
		$this->internationalTradeInfo = $internationalTradeInfo;
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