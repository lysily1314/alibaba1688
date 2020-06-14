<?php
namespace AlibabaOpen\entity\photobank;

use AlibabaOpen\entity\BaseEntityParams;

class PhotobankAlbumAddParams extends BaseEntityParams{

	private $name;
	private $description;
	private $authority;
	private $password;
	private $webSite;

	/**
	 * PhotobankAlbumAddParams constructor.
	 * @param $name
	 * @param $authority
	 * @param $webSite
	 */
	public function __construct($name , $authority , $webSite){
		$this->name = $name;
		$this->authority = $authority;
		$this->webSite = $webSite;
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