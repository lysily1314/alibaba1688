<?php
namespace AlibabaOpen\entity\other;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class QueryFailMessageListParams
 * @package AlibabaOpen\entity\other
 * @property \AlibabaOpen\entity\other\QueryFailMessageListParams $createStartTime
 * @property \AlibabaOpen\entity\other\QueryFailMessageListParams $createEndTime
 * @property \AlibabaOpen\entity\other\QueryFailMessageListParams $page
 * @property \AlibabaOpen\entity\other\QueryFailMessageListParams $pageSize
 * @property \AlibabaOpen\entity\other\QueryFailMessageListParams $type
 * @property \AlibabaOpen\entity\other\QueryFailMessageListParams $userInfo
 */
class QueryFailMessageListParams extends BaseEntityParams{

	/**
	 * 消息创建时间查找范围开始
	 * @var string
	 */
	private $createStartTime;
	/**
	 * 消息创建时间查找范围结束
	 * @var string
	 */
	private $createEndTime;
	/**
	 * 当前数据页，默认为1
	 * @var int
	 */
	private $page;
	/**
	 * 每次分页取的数据量，范围20-200，默认20
	 * @var int
	 */
	private $pageSize;

	/**
	 * 消息类型
	 * @var string
	 */
	private $type;
	/**
	 * 用户Id
	 * @var string
	 */
	private $userInfo;

	/**
	 * @param $createStartTime
	 * @return $this
	 */
	public function setCreateStartTime($createStartTime){
		$this->createStartTime = $createStartTime;
		return $this;
	}

	/**
	 * @param $createEndTime
	 * @return $this
	 */
	public function setCreateEndTime($createEndTime){
		$this->createEndTime = $createEndTime;
		return $this;
	}

	/**
	 * @param $page
	 * @return $this
	 */
	public function setPage($page){
		$this->page = $page;
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
	 * @param $type
	 * @return $this
	 */
	public function setType($type){
		$this->type = $type;
		return $this;
	}

	/**
	 * @param $userInfo
	 * @return $this
	 */
	public function setUserInfo($userInfo){
		$this->userInfo = $userInfo;
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