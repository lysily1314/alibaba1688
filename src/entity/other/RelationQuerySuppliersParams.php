<?php
namespace AlibabaOpen\entity\other;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class RelationQuerySuppliersParams
 * @package AlibabaOpen\entity\other
 * @property \AlibabaOpen\entity\other\RelationQuerySuppliersParams $supplierLoginId
 * @property \AlibabaOpen\entity\other\RelationQuerySuppliersParams $currentPage
 * @property \AlibabaOpen\entity\other\RelationQuerySuppliersParams $pageSize
 */
class RelationQuerySuppliersParams extends BaseEntityParams{

	/**
	 * 供应商登录ID，指定该参数可以查询授权用户与指定供应商的分销关系
	 * @var string
	 */
	private $supplierLoginId;
	/**
	 * 当前页码
	 * @var integer
	 */
	private $currentPage;
	/**
	 * 每页多少个
	 * @var integer
	 */
	private $pageSize;

	/**
	 * @param $supplierLoginId
	 * @return $this
	 */
	public function setSupplierLoginId($supplierLoginId){
		$this->supplierLoginId = $supplierLoginId;
		return $this;
	}

	/**
	 * @param $currentPage
	 * @return $this
	 */
	public function setCurrentPage($currentPage){
		$this->currentPage = $currentPage;
		return $this;
	}

	/**
	 * @param $pageSize
	 * @return $this
	 */
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
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