<?php
namespace AlibabaOpen\tools;


final class Tools{

    /**
     * 同款开发
     * productUrl 的优先级高于 imgUrl。有productUrl则不会解析imgUrl
     * @param string $productUrl 下游产品详情页面的 URL
     * @param string $imgUrl 图搜所用的图片 URL
     * @return string
     */
    public static function likeProduct($productUrl='',$imgUrl=''){
        return sprintf('https://kj.1688.com/pdt_tongkuan.html?productUrl=%s&imgUrl=%s',
            urlencode($productUrl),
            urlencode($imgUrl)
        );
    }

    /**
     * 低价开发
     * @param string $detailUrl 1688产品详情页面的 URL
     * @return string
     */
    public static function lowPrice($detailUrl){
        return sprintf('https://kj.1688.com/pdt_dijiakaifa.html?detailUrl=%s' ,
            urlencode($detailUrl)
        );
    }

    /**
     * 买家申请退款链接生成
     * @param $orderId
     * @return string
     */
    public static function buyerRefundApply($orderId){
        return sprintf('https://trade.1688.com/order/refund/view_assure_apply_refund.htm?orderId=%s&fromType=fromOrderList&userType=buyer&alipayAction=apply_refund'
            , $orderId);
    }


}
