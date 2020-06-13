<?php

namespace AlibabaOpen\functions;

use AlibabaOpen\core\BaseClient;
use AlibabaOpen\entity\product\{
	ProductDeleteParams,
	ProductExpireParams,
	ProductRepostParams,
	ProductRepublishParams,
	ProductIncrementModifyParams,
	ProductGroupSetSwitchParams
};

/**
 * 产品模块
 * @package AlibabaOpen\functions
 */
class Product extends BaseClient
{
	/**
	 * 删除商品
	 * @param \AlibabaOpen\entity\product\ProductDeleteParams $productDeleteParams
	 * @return $this
	 */
	public function productDelete(ProductDeleteParams $productDeleteParams){
		$this->app->params = $productDeleteParams->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.delete-1';
		return $this;
	}

	/**
	 * 商品转为过期
	 * @param \AlibabaOpen\entity\product\ProductExpireParams $productExpireParams
	 * @return $this
	 */
	public function productExpire(ProductExpireParams $productExpireParams){
		$this->app->params = $productExpireParams->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.expire-1';
		return $this;
	}

	/**
	 * 重发商品
	 * @param \AlibabaOpen\entity\product\ProductRepostParams $productRepostParams
	 * @return $this
	 */
	public function productRepost(ProductRepostParams $productRepostParams){
		$this->app->params = $productRepostParams->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.repost-1';
		return $this;
	}

	/**
	 * 未上架商品重新上架
	 * @param \AlibabaOpen\entity\product\ProductRepublishParams $productRepublishParams
	 * @return $this
	 */
	public function productRepublish(ProductRepublishParams $productRepublishParams){
		$this->app->params = $productRepublishParams->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.republish-1';
		return $this;
	}

	/**
	 * 获取授权用户的商品自定义分类列表
	 * @return $this
	 */
	public function userCategoryListGet(){
		$this->url_info    = 'com.alibaba.product:alibaba.userCategory.list.get-1';
		return $this;
	}

	/**
	 * @param \AlibabaOpen\entity\product\ProductIncrementModifyParams $productIncrementModifyParams
	 * @return $this
	 */
	public function productIncrementModify(ProductIncrementModifyParams $productIncrementModifyParams){
		$this->app->params = $productIncrementModifyParams->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.incrementModify-1';
		return $this;
	}

	/**
	 * 设置是否启用自定义分类
	 * @param \AlibabaOpen\entity\product\ProductGroupSetSwitchParams $productGroupSetSwitchParams
	 * @return $this
	 */
	public function productGroupSetSwitch(ProductGroupSetSwitchParams $productGroupSetSwitchParams){
		$this->app->params = $productGroupSetSwitchParams->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.group.setSwitch-1';
		return $this;
	}



}