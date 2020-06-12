<?php

namespace AlibabaOpen\functions;

use AlibabaOpen\core\BaseClient;
use AlibabaOpen\entity\category\{
	CategorySearchSPUInfoParams,
    CategoryLevelAttrGetParams,
    CategoryAttributeGetParams,
	CategoryGetSPUInfoParams
};

/**
 * 类目模块
 * @package AlibabaOpen\functions
 */
class Category extends BaseClient
{
    /**
     * 查询标准化产品单元信息列表
     * @param CategorySearchSPUInfoParams $categorySearchSPUInfoParams
     * @return $this
     */
    public function categorySearchSPUInfo(CategorySearchSPUInfoParams $categorySearchSPUInfoParams){
        $this->app->params = $categorySearchSPUInfoParams->build();
        $this->url_info    = 'com.alibaba.product:alibaba.category.searchSPUInfo-1';
        return $this;
    }

    /**
     * 获取叶子类目属性层级级联信息
     * @param CategoryLevelAttrGetParams $categoryLevelAttrGetParams
     * @return $this
     */
    public function categoryLevelAttrGet(CategoryLevelAttrGetParams $categoryLevelAttrGetParams){
        $this->app->params = $categoryLevelAttrGetParams->build();
        $this->url_info    = 'cn.alibaba.open:category.level.attr.get-1';
        return $this;
    }

    /**
     * 获取叶子类目属性
     * @param CategoryAttributeGetParams $categoryAttributeGetParams
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
	
}