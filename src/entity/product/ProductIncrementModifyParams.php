<?php
namespace AlibabaOpen\entity\product;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class ProductIncrementModifyParams
 * @package AlibabaOpen\entity\product
 */
class ProductIncrementModifyParams extends BaseEntityParams{


	private $productID;
	private $webSite;
	private $subject;
	private $description;
	private $image;
	private $supportOnlineTrade;

	/**
	 * ProductIncrementModifyParams constructor.
	 * @param $productID
	 * @param $webSite
	 */
	public function __construct($productID , $webSite){
		$this->productID = $productID;
		$this->webSite = $webSite;
	}

	/**
	 * @param $subject
	 * @return $this
	 */
	public function setSubject($subject){
		$this->subject = $subject;
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
	 * @param $image
	 * @return $this
	 */
	public function setImage($image){
		$this->image = $image;
		return $this;
	}

	/**
	 * @param $supportOnlineTrade
	 * @return $this
	 */
	public function setSupportOnlineTrade($supportOnlineTrade){
		$this->supportOnlineTrade = $supportOnlineTrade;
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