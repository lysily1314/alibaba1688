<?php
namespace AlibabaOpen\entity\photobank;

use AlibabaOpen\entity\BaseEntityParams;

class PhotobankPhotoModifyParams extends BaseEntityParams{

	private $imageInfo;
	private $webSite;

	/**
	 * PhotobankPhotoModifyParams constructor.
	 * @param $imageInfo
	 * @param $webSite
	 */
	public function __construct($imageInfo , $webSite){
		$this->imageInfo = $imageInfo;
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