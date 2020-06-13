<?php
namespace AlibabaOpen\oauth;

use AlibabaOpen\core\Exception;
use AlibabaOpen\core\BaseClient;

class AlibabaOauth extends Exception {


    const OAUTH_URL = 'https://auth.1688.com/oauth/authorize?client_id=%s&site=1688&redirect_uri=%s&state=%s';


    const TOKEN_URL = 'https://gw.open.1688.com/openapi/http/1/system.oauth2/getToken/%s';

    /**
     * @param $appKey
     * @param $appSecret
     * @param $redirect_uri
     * @param string $state
     * @return array
     */
    public static function oauth($appKey , $appSecret, $redirect_uri , $state = 'cross-1688'){
        $params = $_GET;
        if(!(array_key_exists('code' , $params) && $state == $params['state'])){
            header(sprintf('Location:%s' , self::createOauthUrl($appKey , $redirect_uri , $state)));
            exit;
        }
        $retJson = self::accessToken($appKey , $appSecret , $redirect_uri , $params['code']);
        $dataArray = json_decode($retJson, true);
        if(!array_key_exists('access_token' ,$dataArray)){
            throw new Exception($dataArray['error_description']);
        }
        return $dataArray;
    }

    /**
     * @param $appKey
     * @param $appSecret
     * @param $redirect_uri
     * @param $code
     * @return bool|string
     */
    public static function accessToken($appKey , $appSecret , $redirect_uri , $code){
        $params = [
            'grant_type'=>'authorization_code',
            'need_refresh_token'=>true,
            'client_id'=>$appKey,
            'client_secret'=>$appSecret,
            'redirect_uri'=>$redirect_uri,
            'code'=>$code
        ];
        return BaseClient::curlRequest(sprintf(self::TOKEN_URL , $appKey) , $params , 'post');
    }

    /**
     * @param $appKey
     * @param $redirect_uri
     * @param string $state
     * @return string
     */
    private static function createOauthUrl($appKey , $redirect_uri , $state = 'cross-1688'){
        return sprintf(self::OAUTH_URL , $appKey , urlencode($redirect_uri) , $state);
    }

}
