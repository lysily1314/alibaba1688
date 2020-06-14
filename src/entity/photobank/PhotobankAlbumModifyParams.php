<?php
namespace AlibabaOpen\entity\photobank;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class PhotobankAlbumModifyParams
 * @package AlibabaOpen\entity\photobank
 */
class PhotobankAlbumModifyParams extends BaseEntityParams{

	private $albumInfo;
	private $password;
	private $webSite;

	/**
	 * PhotobankAlbumModifyParams constructor.
	 * @param $albumInfo
	 * @param $webSite
	 */
	public function __construct($albumInfo , $webSite){
		$this->albumInfo = $albumInfo;
		$this->webSite = $webSite;
	}

	/**
	 * @param $password
	 * @return $this
	 */
	public function setPassword($password){
		$this->password = $password;
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