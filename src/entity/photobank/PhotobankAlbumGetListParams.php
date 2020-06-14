<?php
namespace AlibabaOpen\entity\photobank;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class PhotobankAlbumGetListParams
 * @package AlibabaOpen\entity\photobank
 */
class PhotobankAlbumGetListParams extends BaseEntityParams{

	private $webSite;
	private $albumType;

	/**
	 * PhotobankAlbumGetListParams constructor.
	 * @param $webSite
	 */
	public function __construct($webSite){
		$this->webSite = $webSite;
	}

	/**
	 * @param $albumType
	 * @return $this
	 */
	public function setAlbumType($albumType){
		$this->albumType = $albumType;
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