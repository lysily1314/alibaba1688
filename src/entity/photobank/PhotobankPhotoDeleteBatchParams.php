<?php
namespace AlibabaOpen\entity\photobank;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class PhotobankPhotoDeleteBatchParams
 * @package AlibabaOpen\entity\photobank
 */
class PhotobankPhotoDeleteBatchParams extends BaseEntityParams{

	private $imageIds;
	private $webSite;

	/**
	 * PhotobankPhotoDeleteBatchParams constructor.
	 * @param $imageIds
	 * @param $webSite
	 */
	public function __construct($imageIds , $webSite){
		$this->webSite = $webSite;
		$this->imageIds = $imageIds;
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