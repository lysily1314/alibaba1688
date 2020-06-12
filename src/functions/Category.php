<?php

namespace AlibabaOpen\functions;

use AlibabaOpen\core\BaseClient;
use AlibabaOpen\entity\category\{
	CategorySearchSPUInfoParams,
    CategoryLevelAttrGetParams,
    CategoryAttributeGetParams,
	CategoryGetSPUInfoParams,
	CategorySearchByKeywordParams,
	CategoryGetParams,
	UserDefineCategoryAddParams
};

/**
 * 类目模块
 * @package AlibabaOpen\functions
 */
class Category extends BaseClient
{
	/**
	 * 查询标准化产品单元信息列表
	 * @param \AlibabaOpen\entity\category\CategorySearchSPUInfoParams $categorySearchSPUInfoParams
	 * @return $this
	 */
    public function categorySearchSPUInfo(CategorySearchSPUInfoParams $categorySearchSPUInfoParams){
        $this->app->params = $categorySearchSPUInfoParams->build();
        $this->url_info    = 'com.alibaba.product:alibaba.category.searchSPUInfo-1';
        return $this;
    }

	/**
	 * 获取叶子类目属性层级级联信息
	 * @param \AlibabaOpen\entity\category\CategoryLevelAttrGetParams $categoryLevelAttrGetParams
	 * @return $this
	 */
    public function categoryLevelAttrGet(CategoryLevelAttrGetParams $categoryLevelAttrGetParams){
        $this->app->params = $categoryLevelAttrGetParams->build();
        $this->url_info    = 'cn.alibaba.open:category.level.attr.get-1';
        return $this;
    }

	/**
	 * 获取叶子类目属性
	 * @param \AlibabaOpen\entity\category\CategoryAttributeGetParams $categoryAttributeGetParams
	 * @return $this
	 */
    public function categoryAttributeGet(CategoryAttributeGetParams $categoryAttributeGetParams){
        $this->app->params = $categoryAttributeGetParams->build();
        $this->url_info    = 'com.alibaba.product:alibaba.category.attribute.get-1';
        return $this;
    }

	/**
	 * 获取标准化产品单元信息(1688)
	 * @param \AlibabaOpen\entity\category\CategoryGetSPUInfoParams $categoryGetSPUInfoParams
	 * @return $this
	 */
    public function categoryGetSPUInfo(CategoryGetSPUInfoParams $categoryGetSPUInfoParams){
	    $this->app->params = $categoryGetSPUInfoParams->build();
	    $this->url_info    = 'com.alibaba.product:alibaba.category.getSPUInfo-1';
	    return $this;
    }

	/**
	 * 根据关键字搜索类目
	 * @param \AlibabaOpen\entity\category\CategorySearchByKeywordParams $categorySearchByKeywordParams
	 * @return $this
	 */
    public function categorySearchByKeyword(CategorySearchByKeywordParams $categorySearchByKeywordParams){
	    $this->app->params = $categorySearchByKeywordParams->build();
	    $this->url_info    = 'com.alibaba.product:alibaba.category.searchByKeyword-1';
	    return $this;
    }

	/**
	 * 根据类目Id查询类目
	 * @param \AlibabaOpen\entity\category\CategoryGetParams $categoryGetParams
	 * @return $this
	 */
    public function categoryGet(CategoryGetParams $categoryGetParams){
	    $this->app->params = $categoryGetParams->build();
	    $this->url_info    = 'com.alibaba.product:alibaba.category.get-1';
	    return $this;
    }

	/**
	 * 用户自定义类目创建（1688）
	 * @param \AlibabaOpen\entity\category\UserDefineCategoryAddParams $userDefineCategoryAddParams
	 * @return $this
	 */
    public function userDefineCategoryAdd(UserDefineCategoryAddParams $userDefineCategoryAddParams){
	    $this->app->params = $userDefineCategoryAddParams->build();
	    $this->url_info    = 'com.alibaba.product:alibaba.userDefine.category.add-1';
	    return $this;
    }
	
}