# FASC OpenApi SDK v5.1 for PHP说明

# 简介

欢迎使用法大大开发者工具套件（SDK），PHP SDK 是法大大电子合同和电子签云服务开放平台（FASC OPEN API）的配套工具。



# 版本说明

FASC.openAPI 产品目前存在两个子版本号：v5.0（已停止迭代）、v5.1， 目前v5.1在持续迭代维护。

当前页面SDK基于FASC.openAPI v5.1子版本开发，如需使用FASC.openAPI v5.0版本SDK，请访问：

https://gitee.com/fadada-cloud/fasc-openapi-php-sdk/tree/v5.0




## 目录结构

- SDK项目层级
```php
fasc-openapi-php-sdk
    - src
        - FddCloud
            - bean //里面放的是所有API的对象参数
	            - message //里面放的是所有事件回调的对象参数
	            - req //里面放的是所有接口请求的对象参数
            - constants //里面放的是接口url地址和应用的配置信息
            - client //对应接口各个模块的client，接入方可以参考下面用例初始化client后调用
            - utils //里面是封装好工具类，接入方开发人员可以参考   
	
```
- SDK 目前支持以下模块，对应 client 可支持具体的业务方法：

| 模块                        | 模块中文名    | 模块说明                        |
|---------------------------|----------|-----------------------------|
| GetService                | 服务访问凭证   | 获取服务访问凭证                    |
| AppClient                 | 应用管理     | 管理本应用或者其委托代开发应用             |
| UserClient                | 个人认证授权管理 | 包含个人用户认证、授权操作               |
| CorpClient                | 企业认证授权管理 | 包含企业用户认证、授权操作               |
| OrgClient                 | 组织管理     | 包含部门、成员、相对方管理               |
| SealClient                | 印章管理     | 包含企业印章、个人签名管理               |
| TemplateClient            | 模板管理     | 包含模板、文档 增删改及自定义控件管理         |
| AppTemplateClient         | 应用模板管理   | 包含应用的模板、文档 增删改及自定义控件管理      |
| DocClient                 | 文档处理     | 包含文件上传、文件处理、OFD文件追加、文档验签等   |
| SignTaskClient            | 签署任务     | 包含签署任务创建、签署、任务查询、任务控制       |
| EUIClient                 | 计费管理     | 包含计费链接的获取                   |
| ApprovalClient            | 审批管理     | 包含审批流程、审批单据的查询和审批链接的获取      |
| DraftClient               | 合同起草     | 包含发起合同协商、协商邀请、协商管理、合同定稿相关功能 |
| ArchivesPerformanceClient | 合同归档     | 包含合同归档、合同履约相关功能             |
| OCRClient                 | 智能审查和智能比对 | 包含智能审查和智能比对                 |
| CollectClient             | 信息收集表    | 包含法大大信息收集表查询、获取、删除          | 
| ToolServiceClient         | 工具能力服务   | 包含信息比对校验、证照OCR、个人身份核验相关工具能力 |
| CallbackClient            | 回调管理     | 包含智能审查和智能比对                 |


## 安装

推荐使用 `composer` 进行安装。可以使用 composer.json 声明依赖，或者运行下面的命令。SDK 包已经放到这里 [`fadada/fasc-openapi-php-sdk`](https://packagist.org/packages/fadada/fasc-openapi-php-sdk) 。

```bash
$ composer require fadada/fasc-openapi-php-sdk
```

## 依赖环境

PHP 7.0.10 版本及以上

## 使用方法
```php
    /** 引入自动加载 */
    require_once __DIR__ . '/../vendor/fadada/fasc-openapi-php-sdk/autoload.php';

```

## 调用示例
- 读取应用APP_ID的全局配置文件
 ```php
    use FddCloud\constants\OpenApiConfig;
    
    /**读取配置文件**/
    $apiConfigFile = 'api_config.php';
    $openApiConfig = new OpenApiConfig($apiConfigFile);
    $app_id = $openApiConfig->getConfig()['app_id'];
    $app_secret = $openApiConfig->getConfig()['app_secret'];
    $service_url = $openApiConfig->getConfig()['service_url'];
    $time_out = $openApiConfig->getConfig()['time_out'];
    $debug = $openApiConfig->getConfig()['debug'];
 ```

- 接入方初始化一个client，比如调用账号相关，通过client来发起请求。
 ```php
    use FddCloud\client\Client;
    
	$client = new Client(
            $app_id,$app_secret,$service_url,$time_out,$debug
        );
  ```
- 接入方获取accessToken
 ```php
    /** 获取accessToken */
    $serviceClient = new ServiceClient($client);
    $response = $serviceClient->getAccessToken();
    print_r($response . "\n");
    $res = json_decode($response);
  ```

- 获取个人用户授权接口示例

```php
    use FddCloud\bean\req\user\GetUserAuthUrlReq;
	
	/**获取userClient**/
    $userClient = new UserClient($client);
    
    $getUserAuthUrlReq = new GetUserAuthUrlReq();
    # 个人用户在应用中的唯一标识，长度最大64个字符
    $getUserAuthUrlReq->setClientUserId("");
    # 个人用户的法大大帐号，仅限手机号或邮箱，长度最大30个字符。如该手机号或邮箱未注册法大大，则用户会以此作为注册账号
    $getUserAuthUrlReq->setAccountName("");
    $getUserAuthUrlReq->setNonEditableInfo($nonEditableInfo);
    $authScope = ["ident_info", "seal_info", "signtask_init", "signtask_info", "signtask_file","file_storage"];
    $getUserAuthUrlReq->setAuthScopes($authScope);
    # 重定向地址,即用户在返回的页面上完成操作后重定向跳转到该地址，并且附带上参数。该地址是应用系统的地址，以实现用户交互在应用系统和法大大平台之间的连贯性。长度最大500个字符
    $getUserAuthUrlReq->setRedirectUrl(urlencode("https://www.163.com/"));
    # 小程序的重定向地址（微信和支付宝），长度最大1000个字符。
    # 使用场景：小程序中集成该页面，操作完成后跳转地址为小程序原生页面路径，如"/pages/index/index"，系统判断在小程序环境会跳转至该地址。
    # 注：需要进行编码，若非原生页面路径请使用redirectUrl字段
    $getUserAuthUrlReq->setRedirectMiniAppUrl("");
    $response = $client->getUserAuthUrl($accessToken, $getUserAuthUrlReq);
    print_r($response . "\n");
```



## 版本更新日志

https://dev.fadada.com/updata-log/



## 参考

FASC OpenAPI (服务端) 接口文档 v5.1

https://dev.fadada.com/api-doc/ALGPB7Z1FD/TA0WHTSXQYL0NQRB/5-1

