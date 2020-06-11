<?php
namespace AlibabaOpen\entity\category;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class CategoryAttributeGetParams
 * @package AlibabaOpen\entity\category
 */
class CategoryAttributeGetParams extends BaseEntityParams{

    private $categoryID;
    private $webSite;

    /**
     * CategoryAttributeGetParams constructor.
     * @param $categoryID
     * @param $webSite
     */
    public function __construct($categoryID , $webSite)
    {
        $this->categoryID = $categoryID;
        $this->webSite = $webSite;
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