<?php

namespace AlibabaOpen\functions;

use AlibabaOpen\core\BaseClient;
use AlibabaOpen\entity\photobank\{
	PhotobankAlbumGetListParams,
	PhotobankAlbumModifyParams,
	PhotobankPhotoModifyParams,
	PhotobankAlbumAddParams,
	PhotobankAlbumGetProfileParams,
	PhotobankAlbumDeleteParams,
	PhotobankPhotoDeleteParams,
	PhotobankPhotoAddParams,
	PhotobankPhotoDeleteBatchParams,
	PhotobankPhotoGetListParams
};

/**
 * 旺铺模块
 * @package AlibabaOpen\functions
 */
class Photobank extends BaseClient
{

	/**
	 * 获取相册列表
	 * @param \AlibabaOpen\entity\photobank\PhotobankAlbumGetListParams $params
	 * @return $this
	 */
	public function photobankAlbumGetList(PhotobankAlbumGetListParams $params){
		$this->app->params = $params->build();
		$this->url_info    = 'com.alibaba.product:alibaba.photobank.album.getList-1';
		return $this;
	}

	/**
	 * 修改相册
	 * @param \AlibabaOpen\entity\photobank\PhotobankAlbumModifyParams $params
	 * @return $this
	 */
	public function photobankAlbumModify(PhotobankAlbumModifyParams $params){
		$this->app->params = $params->build();
		$this->url_info    = 'com.alibaba.product:alibaba.photobank.album.modify-1';
		return $this;
	}

	/**
	 * 修改图片信息
	 * @param \AlibabaOpen\entity\photobank\PhotobankPhotoModifyParams $params
	 * @return $this
	 */
	public function photobankPhotoModify(PhotobankPhotoModifyParams $params){
		$this->app->params = $params->build();
		$this->url_info    = 'com.alibaba.product:alibaba.photobank.photo.modify-1';
		return $this;
	}

	/**
	 * 创建相册
	 * @param \AlibabaOpen\entity\photobank\PhotobankAlbumAddParams $params
	 * @return $this
	 */
	public function photobankAlbumAdd(PhotobankAlbumAddParams $params){
		$this->app->params = $params->build();
		$this->url_info    = 'com.alibaba.product:alibaba.photobank.album.add-1';
		return $this;
	}

	/**
	 * 查询相册空间详情
	 * @param \AlibabaOpen\entity\photobank\PhotobankAlbumGetProfileParams $params
	 * @return $this
	 */
	public function photobankAlbumGetProfile(PhotobankAlbumGetProfileParams $params){
		$this->app->params = $params->build();
		$this->url_info    = 'com.alibaba.product:alibaba.photobank.album.getProfile-1';
		return $this;
	}

	/**
	 * 删除相册
	 * @param \AlibabaOpen\entity\photobank\PhotobankAlbumDeleteParams $params
	 * @return $this
	 */
	public function photobankAlbumDelete(PhotobankAlbumDeleteParams $params){
		$this->app->params = $params->build();
		$this->url_info    = 'com.alibaba.product:alibaba.photobank.album.delete-1';
		return $this;
	}

	/**
	 * 删除图片
	 * @param \AlibabaOpen\entity\photobank\PhotobankPhotoDeleteParams $params
	 * @return $this
	 */
	public function photobankPhotoDelete(PhotobankPhotoDeleteParams $params){
		$this->app->params = $params->build();
		$this->url_info    = 'com.alibaba.product:alibaba.photobank.photo.delete-1';
		return $this;
	}

	/**
	 * 上传图片
	 * @param \AlibabaOpen\entity\photobank\PhotobankPhotoAddParams $params
	 * @return $this
	 */
	public function photobankPhotoAdd(PhotobankPhotoAddParams $params){
		$this->app->params = $params->build();
		$this->url_info    = 'com.alibaba.product:alibaba.photobank.photo.add-1';
		return $this;
	}

	/**
	 * 批量删除图片
	 * @param \AlibabaOpen\entity\photobank\PhotobankPhotoDeleteBatchParams $params
	 * @return $this
	 */
	public function photobankPhotoDeleteBatch(PhotobankPhotoDeleteBatchParams $params){
		$this->app->params = $params->build();
		$this->url_info    = 'com.alibaba.product:alibaba.photobank.photo.deleteBatch-1';
		return $this;
	}

	/**
	 * 获取图片列表
	 * @param \AlibabaOpen\entity\photobank\PhotobankPhotoGetListParams $params
	 * @return $this
	 */
	public function photobankPhotoGetList(PhotobankPhotoGetListParams $params){
		$this->app->params = $params->build();
		$this->url_info    = 'com.alibaba.product:alibaba.photobank.photo.getList-1';
		return $this;
	}

	
}