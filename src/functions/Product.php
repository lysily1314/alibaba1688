<?php
declare(strict_types = 1);
namespace AlibabaOpen\functions;

use AlibabaOpen\core\BaseClient;
use AlibabaOpen\entity\product\{
	ProductDeleteParams,
	ProductExpireParams,
	ProductRepostParams,
	ProductRepublishParams,
	ProductIncrementModifyParams,
	ProductGroupSetSwitchParams,
	ProductGetParams,
	ProductAddParams,
	ProductGroupGetSwitchParams,
	ProductIsModifiableParams,
	ProductListGetParams,
	ProductGetByIdListParams,
	ProductModifyStockParams,
	ProductEditParams,
	ProductGetByStatusParams
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
	public function productDelete(ProductDeleteParams $productDeleteParams):Product{
		$this->app->params = $productDeleteParams->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.delete-1';
		return $this;
	}

	/**
	 * 商品转为过期
	 * @param \AlibabaOpen\entity\product\ProductExpireParams $productExpireParams
	 * @return $this
	 */
	public function productExpire(ProductExpireParams $productExpireParams):Product{
		$this->app->params = $productExpireParams->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.expire-1';
		return $this;
	}

	/**
	 * 重发商品
	 * @param \AlibabaOpen\entity\product\ProductRepostParams $productRepostParams
	 * @return $this
	 */
	public function productRepost(ProductRepostParams $productRepostParams):Product{
		$this->app->params = $productRepostParams->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.repost-1';
		return $this;
	}

	/**
	 * 未上架商品重新上架
	 * @param \AlibabaOpen\entity\product\ProductRepublishParams $productRepublishParams
	 * @return $this
	 */
	public function productRepublish(ProductRepublishParams $productRepublishParams):Product{
		$this->app->params = $productRepublishParams->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.republish-1';
		return $this;
	}

	/**
	 * 获取授权用户的商品自定义分类列表
	 * @return $this
	 */
	public function userCategoryListGet():Product{
		$this->url_info    = 'com.alibaba.product:alibaba.userCategory.list.get-1';
		return $this;
	}

	/**
	 * @param \AlibabaOpen\entity\product\ProductIncrementModifyParams $productIncrementModifyParams
	 * @return $this
	 */
	public function productIncrementModify(ProductIncrementModifyParams $productIncrementModifyParams):Product{
		$this->app->params = $productIncrementModifyParams->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.incrementModify-1';
		return $this;
	}

	/**
	 * 设置是否启用自定义分类
	 * @param \AlibabaOpen\entity\product\ProductGroupSetSwitchParams $productGroupSetSwitchParams
	 * @return $this
	 */
	public function productGroupSetSwitch(ProductGroupSetSwitchParams $productGroupSetSwitchParams):Product{
		$this->app->params = $productGroupSetSwitchParams->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.group.setSwitch-1';
		return $this;
	}

	/**
	 * 获取商品
	 * @param \AlibabaOpen\entity\product\ProductGetParams $productGetParams
	 * @return \AlibabaOpen\functions\Product
	 */
	public function productGet(ProductGetParams $productGetParams):Product{
		$this->app->params = $productGetParams->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.get-1';
		return $this;
	}

	/**
	 * 发布商品
	 * @param \AlibabaOpen\entity\product\ProductAddParams $productAddParams
	 * @return \AlibabaOpen\functions\Product
	 */
	public function productAdd(ProductAddParams $productAddParams):Product{
		$this->app->params = $productAddParams->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.add-1';
		return $this;
	}

	/**
	 * 获取是否启用自定义分类
	 * @param \AlibabaOpen\entity\product\ProductGroupGetSwitchParams $productGroupGetSwitchParams
	 * @return \AlibabaOpen\functions\Product
	 */
	public function productGroupGetSwitch(ProductGroupGetSwitchParams $productGroupGetSwitchParams):Product{
		$this->app->params = $productGroupGetSwitchParams->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.group.getSwitch-1';
		return $this;
	}

	/**
	 * 产品是否可以修改
	 * @param \AlibabaOpen\entity\product\ProductIsModifiableParams $isModifiableParams
	 * @return \AlibabaOpen\functions\Product
	 */
	public function productIsModifiable(ProductIsModifiableParams $isModifiableParams):Product{
		$this->app->params = $isModifiableParams->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.isModifiable-1';
		return $this;
	}

	/**
	 * 卖家查询商品列表
	 * @param \AlibabaOpen\entity\product\ProductListGetParams $productListGetParams
	 * @return \AlibabaOpen\functions\Product
	 */
	public function productListGet(ProductListGetParams $productListGetParams):Product{
		$this->app->params = $productListGetParams->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.list.get-1';
		return $this;
	}

	/**
	 * 根据商品ID列表获取商品(卖家)
	 * @param \AlibabaOpen\entity\product\ProductGetByIdListParams $params
	 * @return \AlibabaOpen\functions\Product
	 */
	public function productGetByIdList(ProductGetByIdListParams $params):Product{
		$this->app->params = $params->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.getByIdList-1';
		return $this;
	}

	/**
	 * 修改产品库存
	 * @param \AlibabaOpen\entity\product\ProductModifyStockParams $params
	 * @return \AlibabaOpen\functions\Product
	 */
	public function productModifyStock(ProductModifyStockParams $params):Product{
		$this->app->params = $params->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.modifyStock-1';
		return $this;
	}

	/**
	 * 修改商品
	 * @param \AlibabaOpen\entity\product\ProductEditParams $params
	 * @return \AlibabaOpen\functions\Product
	 */
	public function productEdit(ProductEditParams $params):Product{
		$this->app->params = $params->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.edit-1';
		return $this;
	}

	/**
	 * 根据状态查询商品
	 * @param \AlibabaOpen\entity\product\ProductGetByStatusParams $params
	 * @return \AlibabaOpen\functions\Product
	 */
	public function productGetByStatus(ProductGetByStatusParams $params):Product{
		$this->app->params = $params->build();
		$this->url_info    = 'com.alibaba.product:alibaba.product.getByStatus-1';
		return $this;
	}

}