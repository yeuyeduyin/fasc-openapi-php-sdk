<?php

namespace FddCloud\client;

use FddCloud\bean\req\seal\CancelPersonalSealFreeSignReq;
use FddCloud\bean\req\seal\CancelSealFreeSignReq;
use FddCloud\bean\req\seal\CreateLegalRepresentativeSealByImageReq;
use FddCloud\bean\req\seal\CreateLegalRepresentativeSealByTemplateReq;
use FddCloud\bean\req\seal\CreatePersonalSealByImageReq;
use FddCloud\bean\req\seal\CreatePersonalSealByTemplateReq;
use FddCloud\bean\req\seal\CreateSealByImageReq;
use FddCloud\bean\req\seal\CreateSealByTemplateReq;
use FddCloud\bean\req\seal\GetAppointedSealUrlReq;
use FddCloud\bean\req\seal\GetAppointedUserSealListReq;
use FddCloud\bean\req\seal\GetCertInfoReq;
use FddCloud\bean\req\seal\GetFreeSignInfoListReq;
use FddCloud\bean\req\seal\GetFreeSignToTemplateListReq;
use FddCloud\bean\req\seal\GetFreeSignToTemplateUrlReq;
use FddCloud\bean\req\seal\GetPersonalSealCreateUrlReq;
use FddCloud\bean\req\seal\GetPersonalSealFreeSignUrlReq;
use FddCloud\bean\req\seal\GetPersonalSealListReq;
use FddCloud\bean\req\seal\GetPersonalSealManageUrlReq;
use FddCloud\bean\req\seal\GetSealCertFileReq;
use FddCloud\bean\req\seal\GetSealCertUrlReq;
use FddCloud\bean\req\seal\GetSealCreateUrlReq;
use FddCloud\bean\req\seal\GetSealDetailReq;
use FddCloud\bean\req\seal\GetSealFreeSignUrlReq;
use FddCloud\bean\req\seal\GetSealGrantUrlReq;
use FddCloud\bean\req\seal\GetSealListReq;
use FddCloud\bean\req\seal\GetSealManageUrlReq;
use FddCloud\bean\req\seal\GetSealTagListReq;
use FddCloud\bean\req\seal\GetSealUserListReq;
use FddCloud\bean\req\seal\GetVerifySealListReq;
use FddCloud\bean\req\seal\PersonalSealDeleteReq;
use FddCloud\bean\req\seal\SealDeleteReq;
use FddCloud\bean\req\seal\SealGrantCancelReq;
use FddCloud\bean\req\seal\SealModifyReq;
use FddCloud\bean\req\seal\SealSetStatusReq;
use FddCloud\constants\OpenApiUrlConstants;



class SealClient
{
    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    # 创建模板印章
    function createSealByTemplate($accessToken, CreateSealByTemplateReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_CREATE_BY_TEMPLATE);
    }

    # 创建图片印章
    function createSealByImage($accessToken, CreateSealByImageReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_CREATE_BY_IMAGE);
    }

    # 创建法定代表人模板印章
    function createLegalRepresentativeSealByTemplate($accessToken, CreateLegalRepresentativeSealByTemplateReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_CREATE_LEGAL_REPRESENTATIVE_BY_TEMPLATE);
    }

    # 创建法定代表人图片印章
    function createLegalRepresentativeSealByImage($accessToken, CreateLegalRepresentativeSealByImageReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_CREATE_LEGAL_REPRESENTATIVE_BY_IMAGE);
    }

    # 获取印章管理链接
    function getSealManageUrl($accessToken, GetSealManageUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_MANAGE_GET_URL);
    }

    # 获取设置企业印章免验证签链接
    function getSealFreeSignUrl($accessToken, GetSealFreeSignUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_FREE_SIGN_GET_URL);
    }

    # 获取印章创建链接
    function getSealCreateUrl($accessToken, GetSealCreateUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_CREATE_GET_URL);
    }
    # 查询印章列表
    function getSealInfoList($accessToken, GetSealListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_GET_INFO_LIST);
    }
    # 查询免验证签开通信息列表
    function getFreeSignInfoList($accessToken, GetFreeSignInfoListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_GET_FREE_SIGN_INFO_LIST);
    }
    # 查询印章列表（不推荐）
    function getSealList($accessToken, GetSealListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_GET_LIST);
    }

    # 查询印章详情
    function getSealDetail($accessToken, GetSealDetailReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_GET_DETAIL);
    }

    # 获取指定印章详情链接
    function getAppointedSealUrl($accessToken, GetAppointedSealUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_MANAGE_GET_APPOINTED_SEAL_URL);
    }

    # 查询企业用印员列表
    function getSealUserList($accessToken, GetSealUserListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_GET_USER_LIST);
    }

    # 查询指定成员的印章列表
    function getAppointedUserSealList($accessToken, GetAppointedUserSealListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_USER_GET_LIST);
    }

    # 查询审核中的印章列表
    function getVerifySealList($accessToken, GetVerifySealListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_VERIFY_GET_LIST);
    }

    # 修改印章基本信息
    function sealModify($accessToken, SealModifyReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_MODIFY);
    }

    # 获取设置用印员链接
    function getSealGrantUrl($accessToken, GetSealGrantUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_GRANT_GET_URL);
    }

    # 解除印章授权
    function sealGrantCancel($accessToken, SealGrantCancelReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_GRANT_CANCEL);
    }

    # 设置印章状态
    function sealSetStatus($accessToken, SealSetStatusReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_SET_STATUS);
    }

    # 删除印章
    function sealDelete($accessToken, SealDeleteReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_DELETE);
    }

    # 查询印章标签列表
    function getSealTagList($accessToken, GetSealTagListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_TAG_GET_LIST);
    }

    function getFreeSignToTemplateUrl($accessToken, GetFreeSignToTemplateUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_FREE_SIGN_TO_TEMPLATE_GET_URL);
    }

    function getFreeSignToTemplateList($accessToken, GetFreeSignToTemplateListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_FREE_SIGN_TO_TEMPLATE_GET_LIST);
    }

    # 创建模板签名
    function createPersonalSealByTemplate($accessToken, CreatePersonalSealByTemplateReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::PERSONAL_SEAL_CREATE_BY_TEMPLATE);
    }

    # 创建图片签名
    function createPersonalSealByImage($accessToken, CreatePersonalSealByImageReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::PERSONAL_SEAL_CREATE_BY_IMAGE);
    }

    # 查询个人签名列表
    function getPersonalSealList($accessToken, GetPersonalSealListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::PERSONAL_SEAL_GET_LIST);
    }

    # 获取设置个人签名免验证签链接
    function getPersonalSealFreeSignUrl($accessToken, GetPersonalSealFreeSignUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::PERSONAL_SEAL_FREE_SIGN_GET_URL);
    }

    # 解除印章免验证签
    function cancelSealFreeSign($accessToken, CancelSealFreeSignReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::CANCEL_SEAL_FREE_SIGN);
    }

    # 解除签名免验证签
    function cancelPersonalSealFreeSign($accessToken, CancelPersonalSealFreeSignReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::CANCEL_PERSONAL_SEAL_FREE_SIGN);
    }

    # 解除签名免验证签
    function getPersonalSealManageUrl($accessToken, GetPersonalSealManageUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::PERSONAL_SEAL_GET_MANAGE_URL);
    }

    # 解除签名免验证签
    function getPersonalSealCreateUrl($accessToken, GetPersonalSealCreateUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::PERSONAL_SEAL_GET_CREATE_URL);
    }

    # 解除签名免验证签
    function deletePersonalSeal($accessToken, PersonalSealDeleteReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::PERSONAL_SEAL_DELETE);
    }

    function getCertInfo($accessToken, GetCertInfoReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::GET_CERT_INFO);
    }

    function getSealCertFile($accessToken, GetSealCertFileReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::GET_SEAL_CERT_FILE);
    }

    function getSealCertUrl($accessToken, GetSealCertUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::GET_SEAL_CERT_URL);
    }

}
