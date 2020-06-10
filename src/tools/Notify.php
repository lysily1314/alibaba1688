<?php
namespace AlibabaOpen\tools;

use AlibabaOpen\tools\Sign;
final class Notify{

    /**
     * 读取信息并验证信息可靠性
     * @param string $appSecret
     * @return bool|mixed
     */
    public static function message(string $appSecret){
        $params = $_POST;
        if (empty($params['message']) || empty($params['_aop_signature'] || (!Sign::verifySign($params , $appSecret)))) {
            //缺少关键参数
            return false;
        }
        return json_decode($params['message'] , true);
    }

}
