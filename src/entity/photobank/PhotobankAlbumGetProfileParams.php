<?php
namespace AlibabaOpen\entity\photobank;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class PhotobankAlbumGetProfileParams
 * @package AlibabaOpen\entity\photobank
 */
class PhotobankAlbumGetProfileParams extends BaseEntityParams{

	private $webSite;

	/**
	 * PhotobankAlbumGetProfileParams constructor.
	 * @param $webSite
	 */
	public function __construct($webSite){
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