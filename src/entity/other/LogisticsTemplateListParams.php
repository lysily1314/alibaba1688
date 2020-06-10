<?php
namespace AlibabaOpen\entity\other;


use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class LogisticsTemplateListParams
 * @package AlibabaOpen\entity\other
 * @property \AlibabaOpen\entity\other\LogisticsTemplateListParams $templateId
 * @property \AlibabaOpen\entity\other\LogisticsTemplateListParams $querySubTemplate
 * @property \AlibabaOpen\entity\other\LogisticsTemplateListParams $queryRate
 */
class LogisticsTemplateListParams extends BaseEntityParams{

	/**
	 * 模版id，用于单条查询的场景
	 * @var integer
	 */
	private $templateId;
	/**
	 * 是否查询子模板
	 * @var boolean
	 */
	private $querySubTemplate;
	/**
	 * 是否查询子模板费率
	 * @var boolean
	 */
	private $queryRate;


	/**
	 * @param $templateId
	 * @return $this
	 */
	public function setTemplateId($templateId){
		$this->templateId = $templateId;
		return $this;
	}

	/**
	 * @param $querySubTemplate
	 * @return $this
	 */
	public function setQuerySubTemplate($querySubTemplate){
		$this->querySubTemplate = $querySubTemplate;
		return $this;
	}

	/**
	 * @param $queryRate
	 * @return $this
	 */
	public function setQueryRate($queryRate){
		$this->queryRate = $queryRate;
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