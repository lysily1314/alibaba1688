<?php
namespace AlibabaOpen\entity\category;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class CategoryLevelAttrGetParams
 * @package AlibabaOpen\entity\category
 */
class CategoryLevelAttrGetParams extends BaseEntityParams{

    private $catId;
    private $pathValues;

    /**
     * CategoryLevelAttrGetParams constructor.
     * @param $catId
     * @param $pathValues
     */
    public function __construct($catId , $pathValues)
    {
        $this->catId = $catId;
        $this->pathValues = $pathValues;
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