<?php
namespace AlibabaOpen\entity\photobank;

use AlibabaOpen\entity\BaseEntityParams;

class PhotobankPhotoDeleteParams extends BaseEntityParams{

	private $photoID;
	private $webSite;

	/**
	 * PhotobankPhotoDeleteParams constructor.
	 * @param $photoID
	 * @param $webSite
	 */
	public function __construct($photoID , $webSite){
		$this->photoID = $photoID;
		$this->webSite = $webSite;
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