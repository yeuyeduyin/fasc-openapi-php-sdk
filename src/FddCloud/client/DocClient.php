<?php

namespace FddCloud\client;

use FddCloud\bean\req\doc\FileGetKeywordPositionsReq;
use FddCloud\bean\req\doc\FileGetUploadUrlReq;
use FddCloud\bean\req\doc\FileProcessReq;
use FddCloud\bean\req\doc\FileUploadByUrlReq;
use FddCloud\bean\req\doc\FileVerifySignReq;
use FddCloud\bean\req\doc\GetPageInfoByFileReq;
use FddCloud\bean\req\doc\GetSealPositionUrlReq;
use FddCloud\bean\req\doc\OfdFileMergeReq;
use FddCloud\bean\req\doc\PfdFileMergeReq;
use FddCloud\constants\OpenApiUrlConstants;


class DocClient
{

    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    # 通过网络文件地址上传
    function fileUploadByUrl($accessToken, FileUploadByUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::FILE_UPLOAD_BY_URL);
    }

    # 获取上传文件地址
    function fileGetUploadUrl($accessToken, FileGetUploadUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::FILE_GET_UPLOAD_URL);
    }

    # PUT请求上传本地文件
    function fileUploadByLocal($url, $filePath)
    {
        return $this->client->request_file($url, $filePath);
    }

    # 文件处理
    function fileProcess($accessToken, FileProcessReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::FILE_PROCESS);
    }

    # OFD文件追加
    function ofdFileMerge($accessToken, OfdFileMergeReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::FILE_OFD_FILE_MERGE);
    }

    function pdfFileMerge($accessToken, PfdFileMergeReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::FILE_PDF_FILE_MERGE);
    }

    # 查询文档关键字坐标
    function fileGetKeywordPositions($accessToken, FileGetKeywordPositionsReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::FILE_GET_KEYWORD_POSITIONS);
    }

    # 文档验签
    function fileVerifySign($accessToken, FileVerifySignReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::FILE_VERIFY_SIGN);
    }

    # 查询文档首页宽高
    function fileGetPageInfo($accessToken, GetPageInfoByFileReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::FILE_GET_PAGE_INFO);
    }

    # 获取签章定位页面链接
    function getSealPositionUrl($accessToken, GetSealPositionUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::FILE_GET_SEAL_POSITION_URL);
    }

}
