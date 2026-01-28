<?php
/**
 * 测试文件
 */

require './autoload.php';

use FddCloud\bean\req\corp\AppGetOpenIdListReq;
use FddCloud\client\Client;
use FddCloud\client\CorpClient;
use FddCloud\client\ServiceClient;
use FddCloud\constants\OpenApiConfig;


/**读取配置文件**/
$apiConfigFile = 'api_config.php';
$openApiConfig = new OpenApiConfig($apiConfigFile);
$app_id = $openApiConfig->getConfig()['app_id'];
$app_secret = $openApiConfig->getConfig()['app_secret'];
$service_url = $openApiConfig->getConfig()['service_url'];
$time_out = $openApiConfig->getConfig()['time_out'];
$debug = $openApiConfig->getConfig()['debug'];

$client = new Client(
    $app_id,$app_secret,$service_url,$time_out,$debug
);

/** 获取accessToken */
$serviceClient = new ServiceClient($client);
$response = $serviceClient->getAccessToken();
print_r($response . "\n");
$res = json_decode($response);

/** 查询授权用户列表 */
$corpClient = new CorpClient($client);
appGetOpenIdList($res->data->accessToken,$corpClient);

/**
 * 查询授权用户列表
 * 请求地址：/app/get-openId-list
 * 接口说明：通过接口获取已授权应用的个人和企业用户列表
 */
function appGetOpenIdList($accessToken,CorpClient $client)
{
    $appGetOpenIdListReq = new AppGetOpenIdListReq();
    $appGetOpenIdListReq->setIdType("corp");
    $appGetOpenIdListReq->setOwner(false);
    $appGetOpenIdListReq->setListPageNo(1);
    $appGetOpenIdListReq->setListPageSize(100);
    $response = $client->appGetOpenIdList($accessToken,$appGetOpenIdListReq);
    print_r($response."\n");
}

