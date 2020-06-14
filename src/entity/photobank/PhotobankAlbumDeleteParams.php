<?php
namespace AlibabaOpen\entity\photobank;

use AlibabaOpen\entity\BaseEntityParams;

class PhotobankAlbumDeleteParams extends BaseEntityParams{

	private $albumID;
	private $webSite;

	/**
	 * PhotobankAlbumDeleteParams constructor.
	 * @param $albumID
	 * @param $webSite
	 */
	public function __construct($albumID , $webSite){
		$this->albumID = $albumID;
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