<?php
namespace AlibabaOpen\entity\category;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class CategorySearchSPUInfoParams
 * @package AlibabaOpen\entity\category
 */
class CategorySearchSPUInfoParams extends BaseEntityParams{

    private $categoryId;
    private $index;
    private $size;
    private $isNeedKeyAttr;
    private $isOnlyKeyAttr;

    /**
     * CategorySearchSPUInfoParams constructor.
     * @param $categoryId
     * @param $index
     * @param $size
     */
    public function __construct($categoryId , $index , $size){
        $this->categoryId = $categoryId;
        $this->index = $index;
        $this->size = $size;
    }

    /**
     * @param $isNeedKeyAttr
     * @return $this
     */
    public function setIsNeedKeyAttr($isNeedKeyAttr){
        $this->isNeedKeyAttr = $isNeedKeyAttr;
        return $this;
    }

    /**
     * @param $isOnlyKeyAttr
     * @return $this
     */
    public function setIsOnlyKeyAttr($isOnlyKeyAttr){
        $this->isOnlyKeyAttr = $isOnlyKeyAttr;
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