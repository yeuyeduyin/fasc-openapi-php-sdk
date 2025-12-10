<?php

namespace FddCloud\client;

use FddCloud\bean\req\BaseReq;
use FddCloud\bean\req\signTask\AbolishSignTaskReq;
use FddCloud\bean\req\signTask\ActorGetUrlReq;
use FddCloud\bean\req\signTask\AddActorsReq;
use FddCloud\bean\req\signTask\AddAttachReq;
use FddCloud\bean\req\signTask\AddDocsReq;
use FddCloud\bean\req\signTask\AddFieldReq;
use FddCloud\bean\req\signTask\BlockReq;
use FddCloud\bean\req\signTask\BusinessTypeListReq;
use FddCloud\bean\req\signTask\CreateSignTaskReq;
use FddCloud\bean\req\signTask\CreateWithTemplateReq;
use FddCloud\bean\req\signTask\DeleteActorReq;
use FddCloud\bean\req\signTask\DeleteAttachReq;
use FddCloud\bean\req\signTask\DeleteDocsReq;
use FddCloud\bean\req\signTask\DeleteFieldReq;
use FddCloud\bean\req\signTask\DownloadFilesReq;
use FddCloud\bean\req\signTask\EvidenceReportDownloadUrlReq;
use FddCloud\bean\req\signTask\ExtensionSignTaskReq;
use FddCloud\bean\req\signTask\FillFieldValuesReq;
use FddCloud\bean\req\signTask\GetActorAudioVideoReq;
use FddCloud\bean\req\signTask\GetActorCerInfoReq;
use FddCloud\bean\req\signTask\GetBatchCreateDownloadUrlReq;
use FddCloud\bean\req\signTask\GetBatchSignUrlReq;
use FddCloud\bean\req\signTask\GetFacePictureReq;
use FddCloud\bean\req\signTask\GetPicDownloadUrlReq;
use FddCloud\bean\req\signTask\GetSignTaskDetailReq;
use FddCloud\bean\req\signTask\GetSignTaskEditUrlReq;
use FddCloud\bean\req\signTask\GetSignTaskSlicingDocReq;
use FddCloud\bean\req\signTask\GetV3ActorSignTaskUrlReq;
use FddCloud\bean\req\signTask\ModifyActorReq;
use FddCloud\bean\req\signTask\ReceiveAllSignTaskReq;
use FddCloud\bean\req\signTask\ScanCreateWithTemplateReq;
use FddCloud\bean\req\signTask\ScanFieldFillValuesReq;
use FddCloud\bean\req\signTask\ScanSignTaskDetailReq;
use FddCloud\bean\req\signTask\ScanSignTaskStartReq;
use FddCloud\bean\req\signTask\SignTaskActorRemoveReq;
use FddCloud\bean\req\signTask\SignTaskApplyReportReq;
use FddCloud\bean\req\signTask\SignTaskBaseReq;
use FddCloud\bean\req\signTask\SignTaskCancelReq;
use FddCloud\bean\req\signTask\SignTaskCatalogListReq;
use FddCloud\bean\req\signTask\SignTaskDownloadReportReq;
use FddCloud\bean\req\signTask\SignTaskGetFileReq;
use FddCloud\bean\req\signTask\SignTaskIgnoreReq;
use FddCloud\bean\req\signTask\SignTaskOwnerListReq;
use FddCloud\bean\req\signTask\UnblockReq;
use FddCloud\bean\req\signTask\VerifyMethodsManageUrlReq;
use FddCloud\constants\OpenApiUrlConstants;


/**
 * Class SignTaskClient
 * 签署任务管理
 */
class SignTaskClient
{
    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    # 创建签署任务(基于文档)
    function create($accessToken, CreateSignTaskReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_CREATE);
    }

    # 创建签署任务(基于签署模板)
    function createWithTemplate($accessToken, CreateWithTemplateReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_CREATE_WITH_TEMPLATE);
    }

    # 创建扫码签任务
    function scanCreateWithTemplate($accessToken, ScanCreateWithTemplateReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_SCAN_CREATE_WITH_TEMPLATE);
    }

    function scanFieldFillValues($accessToken, ScanFieldFillValuesReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_SCAN_FIELD_FILL_VALUES);
    }

    function scanStart($accessToken, ScanSignTaskStartReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_SCAN_START);
    }

    # 查询扫码签任务详情
    function scanSignTaskDetail($accessToken, ScanSignTaskDetailReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_SCAN_GET_DETAIL);
    }

    # 填写签署任务控件内容
    function fillFieldsValue($accessToken, FillFieldValuesReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_FILL_FIELDS_VALUE);
    }

    # 提交签署任务
    function start($accessToken, SignTaskBaseReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_START);
    }

    # 添加签署任务文档
    function addDocs($accessToken, AddDocsReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_ADD_DOCS);
    }

    # 移除签署任务文档
    function deleteDocs($accessToken, DeleteDocsReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_DELETE_DOCS);
    }

    # 添加签署任务控件
    function addFields($accessToken, AddFieldReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_ADD_FIELD);
    }

    # 移除签署任务控件
    function deleteFields($accessToken, DeleteFieldReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_DELETE_FIELD);
    }

    # 添加签署任务附件
    function addAttachs($accessToken, AddAttachReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_ADD_ATTACH);
    }

    # 移除签署任务附件
    function deleteAttachs($accessToken, DeleteAttachReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_DELETE_ATTACH);
    }

    # 添加签署任务参与方
    function addActors($accessToken, AddActorsReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_ADD_ACTOR);
    }

    function signTaskActorRemove($accessToken, SignTaskActorRemoveReq  $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_ACTOR_REMOVE);
    }

    # 移除签署任务参与方
    function deleteActors($accessToken, DeleteActorReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_DELETE_ACTOR);
    }

    # 修改签署任务参与方
    function modifyActors($accessToken, ModifyActorReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_ACTOR_MODIFY);
    }

    # 获取签署任务编辑链接
    function getEditUrl($accessToken, GetSignTaskEditUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_GET_EDIT_URL);
    }

    # 获取签署任务预览链接
    function getPreviewUrl($accessToken, SignTaskBaseReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_GET_PREVIEW_URL);
    }

    # 获取签署任务预填写链接
    function getPrefillUrl($accessToken, SignTaskBaseReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_GET_PREFILL_URL);
    }

    # 获取签署任务参与方专属链接
    function actorGetUrl($accessToken, ActorGetUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_ACTOR_GET_URL);
    }

    # 获取签署任务批量签署链接
    function getBatchSignUrl($accessToken, GetBatchSignUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_GET_BATCH_SIGN_URL);
    }

    # 获取参与方签署链接（API3.0任务专属）
    function signTaskActorV3GetUrl($accessToken, GetV3ActorSignTaskUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_ACTOR_V3_GET_URL);
    }

    # 查询签署任务列表
    function getOwnerList($accessToken, SignTaskOwnerListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_OWNER_GET_LIST);
    }

    # 查询签署任务详情(废弃) @deprecated 已过时，请使用 /sign-task/get-detail 代替。
    function getAppDetail($accessToken, SignTaskBaseReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SIGN_TASK_APP_GET_DETAIL);
    }

    # 查询签署任务详情
    function getDetail($accessToken, GetSignTaskDetailReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_GET_DETAIL);
    }

    # 查询参与方身份信息
    function getActorList($accessToken, SignTaskBaseReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SIGN_TASK_ACTOR_GET_LIST);
    }

    # 查询签署任务控件信息
    function getFieldList($accessToken, SignTaskBaseReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SIGN_TASK_FIELD_GET_LIST);
    }

    # 查询签署任务审批信息
    function getApprovalInfo($accessToken, SignTaskBaseReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SIGN_TASK_APPROVAL_GET_INFO);
    }

    # 查询企业签署任务文件夹
    function getCatalogList($accessToken, SignTaskCatalogListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SIGN_TASK_CATALOG_LIST);
    }

    # 查询签署业务类型列表
    function getBusinessTypeList($accessToken, BusinessTypeListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SIGN_TASK_BUSINESS_TYPE_GET_LIST);
    }

    # 查询签署完成的文件
    function signTaskGetFile($accessToken, SignTaskGetFileReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_OWNER_GET_FILE);
    }

    # 查询参与方证书文件
    function getActorCerInfo($accessToken, GetActorCerInfoReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_ACTOR_GET_CER_INFO);
    }

    # 获取签署文档下载地址
    function getOwnerDownloadUrl($accessToken, DownloadFilesReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_OWNER_GET_DOWNLOAD_URL);
    }

    # 签署文档切图
    function getSignTaskOwnerSlicingTicketId($accessToken, GetSignTaskSlicingDocReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::GET_SIGN_TASK_OWNER_SLICING_TICKET_ID);
    }

    # 获取图片版签署文档下载地址
    function getSignTaskOwnerPicDownloadUrl($accessToken, GetPicDownloadUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::GET_SIGN_TASK_OWNER_PIC_DOWNLOAD_URL);
    }

    # 获取签署任务参与方刷脸底图
    function getFacePicture($accessToken, GetFacePictureReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SIGN_TASK_ACTOR_GET_FACE_PICTURE);
    }

    # 获取参与方签署音视频
    function getActorAudioVideo($accessToken, GetActorAudioVideoReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_ACTOR_GET_AUDIO_VIDEO_DOWNLOAD_URL);
    }

    # 申请证据报告
    function applyReport($accessToken, SignTaskApplyReportReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_APPLY_REPORT);
    }

    # 下载证据报告
    function downloadReport($accessToken, SignTaskDownloadReportReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_DOWNLOAD_REPORT);
    }

    # 获取签署任务公证处保全报告（旧,已下架）
    function getEvidenceReportDownloadUrl($accessToken, EvidenceReportDownloadUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SIGN_TASK_EVIDENCE_REPORT_GET_DOWNLOAD_URL);
    }

    # 驳回填写签署任务
    function signTaskIgnore($accessToken, SignTaskIgnoreReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_IGNORE);
    }

    # 定稿签署任务文档
    function finalizeDoc($accessToken, SignTaskBaseReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_DOC_FINALIZE);
    }

    # 催办签署任务
    function urge($accessToken, SignTaskBaseReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_URGE);
    }

    # 撤销签署任务
    function cancel($accessToken, SignTaskCancelReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_CANCEL);
    }

    # 阻塞签署任务
    function block($accessToken, BlockReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_BLOCK);
    }

    # 解阻签署任务
    function unblock($accessToken, UnblockReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_UNBLOCK);
    }

    # 结束签署任务
    function finish($accessToken, SignTaskBaseReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_FINISH);
    }

    # 作废签署任务
    function abolishSignTask($accessToken, AbolishSignTaskReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_ABOLISH);
    }

    # 删除签署任务
    function delete($accessToken, SignTaskBaseReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_DELETE);
    }

    # 延期签署任务
    function extension($accessToken, ExtensionSignTaskReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_EXTENSION);
    }

    function verifyMethodsManage($accessToken, VerifyMethodsManageUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::VERIFY_METHODS_MANAGE_GET_URL);
    }

    # 查询应用接收全网签署回调的企业列表
    function getReceiveAllSignTaskList($accessToken)
    {
        return $this->client->request($accessToken, null, OpenApiUrlConstants::CALLBACK_RECEIVE_ALL_SIGN_TASK_GET_LIST);
    }
    # 接收企业全网签署回调
    function receiveAllSignTask($accessToken,ReceiveAllSignTaskReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::CALLBACK_RECEIVE_ALL_SIGN_TASK);
    }
    # 取消接收企业全网签署回调
    function cancelReceiveAllSignTask($accessToken,ReceiveAllSignTaskReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::CALLBACK_RECEIVE_ALL_SIGN_TASK_CANCEL);
    }

    function getBatchCreateDownloadUrl($accessToken, GetBatchCreateDownloadUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_OWNER_GET_BATCH_CREATE_DOWNLOAD_URL);
    }

}

