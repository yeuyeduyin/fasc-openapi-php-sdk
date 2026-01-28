<?php

namespace FddCloud\constants;

class OpenApiUrlConstants
{


    /**
     * ServiceClient
     */
    # ServiceClient 获取服务访问凭证
    const SERVICE_GET_ACCESS_TOKEN = '/service/get-access-token';
    # ServiceClient 获取应用级资源访问凭证(暂不对外开放)。
    const SERVICE_GET_APP_ACCESS_TICKET = '/service/get-app-access-ticket';
    # ServiceClient 获取用户级资源访问凭证(暂不对外开放)。
    const SERVICE_GET_USER_ACCESS_TICKET = '/service/get-user-access-ticket';

    /**
     * UserClient
     */
    # 应用的个人用户帐号管理
    const USER_DISABLE = '/user/disable';
    const USER_ENABLE = '/user/enable';
    const USER_UNBIND = '/user/unbind';
    const USER_GET_DETAIL = '/user/get';
    const USER_GET_IDENTITY_INFO = '/user/get-identity-info';
    const USER_ACCOUNT_NAME_GET_CHANGE_URL = '/user/account-name/get-change-url';
    const USER_ACCOUNT_RECOVERY = '/user/account-recovery';

    /**
     * ToolServiceClient
     */
    # 信息对比校验
    const USER_IDENTITY_TWO_ELEMENT_VERIFY = '/user/identity/two-element-verify';
    const USER_IDENTITY_IDCARD_THREE_ELEMENT_VERIFY = '/user/identity/idcard-three-element-verify';
    const USER_IDENTITY_BANK_THREE_ELEMENT_VERIFY = '/user/identity/bank-three-element-verify';
    const USER_BANK_FOUR_ELEMENT_VERIFY = '/user/bank/four-element-verify';
    const USER_TELECOM_THREE_ELEMENT_VERIFY = '/user/telecom/three-element-verify';
    const CORP_IDENTITY_BUSINESS_THREE_ELEMENT_VERIFY = '/corp/identity/business-three-element-verify';
    const CORP_IDENTITY_BUSINESS_INFO_QUERY = '/corp/identity/business-info-query';
    const CORP_RISK_DETECTION = '/corp/risk-detection';
    const USER_FOUR_ELEMENT_VERIFY_GET_URL = '/user/four-element-verify/get-url';
    const USER_THREE_ELEMENT_VERIFY_GET_URL = '/user/three-element-verify/get-url';
    const USER_ELEMENT_VERIFY_GET_IDCARD_IMAGE_DOWNLOAD_URL = '/user/element-verify/get-idcard-image-download-url';

    # 证照OCR
    const USER_OCR_ID_CARD = '/user/ocr/id-card';
    const USER_OCR_BANKCARD = '/user/ocr/bankcard';
    const USER_OCR_DRIVINGLICENSE = '/user/ocr/drivinglicense';
    const USER_OCR_VEHICLELICENSE = '/user/ocr/vehiclelicense';
    const USER_OCR_MAINLAND_PERMIT = '/user/ocr/mainland-permit';
    const USER_OCR_LICENSE = '/user/ocr/license';

    # 个人身份核验
    const USER_VERIFY_FACE_RECOGNITION = '/user/verify/face-recognition';
    const USER_VERIFY_FACE_STATUS_QUERY = '/user/verify/face-status-query';
    const USER_TELECOM_THREE_ELEMENT_VERIFY_CREATE = '/user/verify/telecom-three-element/create';
    const USER_BANKCARD_FOUR_ELEMENT_VERIFY_CREATE = '/user/verify/bankcard-four-element/create';
    const USER_CHECK_AUTH_CODE = '/user/verify/auth-code/check';
    const USER_VERIFY_AUTH_CODE_GET = '/user/verify/auth-code/get';
    const USER_VERIFY_GET_DETAIL = '/user/verify/get-detail';

    /**
     * CorpClient
     */
    # 应用的企业用户帐号管理
    const CORP_DISABLE = '/corp/disable';
    const CORP_ENABLE = '/corp/enable';
    const CORP_UNBIND = '/corp/unbind';
    const CORP_GET_DETAIL = '/corp/get';
    const CORP_GET_IDENTITY_INFO = '/corp/get-identity-info';
    const CORP_GET_IDENTIFIED_STATUS = '/corp/get-identified-status';
    const CORP_GET_CONSOLE_URL = '/corp/get-console-url';

    /**
     * OrgClient
     */
    # 组织管理-部门
    const CORP_ORGANIZATION_MANAGE_GET_URL = '/corp/organization/manage/get-url';
    const CORP_ENTITY_GET_MANAGE_URL = '/corp/entity/get-manage-url';
    const CORP_ENTITY_GET_LIST = '/corp/entity/get-list';
    const CORP_CHANGE_IDENTITY_INFO = '/corp/change-identity-info';
    const CORP_DEPT_CREATE = '/corp/dept/create';
    const CORP_DEPT_GET_LIST = '/corp/dept/get-list';
    const CORP_DEPT_GET_DETAIL = '/corp/dept/get-detail';
    const CORP_DEPT_MODIFY = '/corp/dept/modify';
    const CORP_DEPT_DELETE = '/corp/dept/delete';
    # 组织管理-成员
    const CORP_MEMBER_CREATE = '/corp/member/create';
    const CORP_MEMBER_GET_ACTIVE_URL = '/corp/member/get-active-url';
    const CORP_MEMBER_GET_LIST = '/corp/member/get-list';
    const CORP_MEMBER_GET_DETAIL = '/corp/member/get-detail';
    const CORP_MEMBER_MODIFY = '/corp/member/modify';
    const CORP_MEMBER_SET_DEPT = '/corp/member/set-dept';
    const CORP_MEMBER_SET_STATUS = '/corp/member/set-status';
    const CORP_MEMBER_DELETE = '/corp/member/delete';
    const CORP_ROLE_GET_URL = '/corp/role/get-url';
    const CORP_ADMIN_GET_URL = '/corp/admin/get-url';
    const CORP_MEMBER_GET_ID_BY_OPENID = '/corp/member/get-by-openId';
    # 组织管理-相对方
    const COUNTERPART_GET_LIST = '/counterpart/get-list';
    const COUNTERPART_GET_MANAGE_URL = '/counterpart/get-manage-url';

    /**
     * SealClient
     */
    # 印章管理
    const SEAL_CREATE_BY_TEMPLATE = '/seal/create-by-template';
    const SEAL_CREATE_BY_IMAGE = '/seal/create-by-image';
    const SEAL_CREATE_LEGAL_REPRESENTATIVE_BY_TEMPLATE = '/seal/create-legal-representative-by-template';
    const SEAL_CREATE_LEGAL_REPRESENTATIVE_BY_IMAGE = '/seal/create-legal-representative-by-image';
    const SEAL_MANAGE_GET_URL = '/seal/manage/get-url';
    const SEAL_FREE_SIGN_GET_URL = '/seal/free-sign/get-url';
    const SEAL_CREATE_GET_URL = '/seal/create/get-url';
    const SEAL_GET_INFO_LIST = '/seal/get-seal-info-list';
    const SEAL_GET_FREE_SIGN_INFO_LIST = '/seal/get-free-sign-info-list';
    const SEAL_GET_LIST = '/seal/get-list';
    const SEAL_GET_DETAIL = '/seal/get-detail';
    const SEAL_MANAGE_GET_APPOINTED_SEAL_URL = '/seal/manage/get-appointed-seal-url';
    const SEAL_GET_USER_LIST = '/seal/get-user-list';
    const SEAL_USER_GET_LIST = '/seal/user/get-list';
    const SEAL_VERIFY_GET_LIST = '/seal/verify/get-list';
    const SEAL_MODIFY = '/seal/modify';
    const SEAL_GRANT_GET_URL = '/seal/grant/get-url';
    const SEAL_GRANT_CANCEL = '/seal/grant/cancel';
    const SEAL_SET_STATUS = '/seal/set-status';
    const SEAL_DELETE = '/seal/delete';
    const SEAL_TAG_GET_LIST = '/seal/tag/get-list';
    const SEAL_FREE_SIGN_TO_TEMPLATE_GET_URL = '/seal/free-sign-to-template/get-url';
    const SEAL_FREE_SIGN_TO_TEMPLATE_GET_LIST = '/seal/free-sign-to-template/get-list';
    const PERSONAL_SEAL_CREATE_BY_TEMPLATE = '/personal-seal/create-by-template';
    const PERSONAL_SEAL_CREATE_BY_IMAGE = '/personal-seal/create-by-image';
    const PERSONAL_SEAL_GET_LIST = '/personal-seal/get-list';
    const PERSONAL_SEAL_FREE_SIGN_GET_URL = '/personal-seal/free-sign/get-url';
    const CANCEL_SEAL_FREE_SIGN = '/seal/free-sign/cancel';
    const CANCEL_PERSONAL_SEAL_FREE_SIGN = '/personal-seal/free-sign/cancel';
    const PERSONAL_SEAL_GET_MANAGE_URL = '/personal-seal/manage/get-url';
    const PERSONAL_SEAL_GET_CREATE_URL = '/personal-seal/create/get-url';
    const PERSONAL_SEAL_DELETE = '/personal-seal/delete';
    const GET_CERT_INFO = '/seal/get-cert-info';
    const GET_SEAL_CERT_FILE = '/seal/get-cert-file';
    const GET_SEAL_CERT_URL = '/seal/get-cert-url';

    /**
     * DocClient
     */
    # 文件
    const FILE_UPLOAD_BY_URL = '/file/upload-by-url';
    const FILE_GET_UPLOAD_URL = '/file/get-upload-url';
    const FILE_PROCESS = '/file/process';
    const FILE_OFD_FILE_MERGE = '/file/ofd-file-merge';
    const FILE_PDF_FILE_MERGE = '/file/pdf-file-merge';
    const FILE_GET_KEYWORD_POSITIONS = '/file/get-keyword-positions';
    const FILE_VERIFY_SIGN = '/file/verify-sign';
    const FILE_GET_PAGE_INFO = '/file/get-page-info';
    const FILE_GET_SEAL_POSITION_URL='/file/get-seal-position-url';

    /**
     * ArchivesPerformanceClient
     */
    # 获取合同归档链接
    const ARCHIVES_GET_ARCHIVES_URL= '/archives/get-archives-url';
    # 合同归档
    const ARCHIVES_CONTACT_ARCHIVED= '/archives/contact-archived';
    # 查询已归档合同列表
    const ARCHIVES_GET_ARCHIVED_LIST= '/archives/get-archived-list';
    # 查询已归档合同详情
    const ARCHIVES_GET_ARCHIVED_DETAIL= '/archives/get-archived-detail';
    # 查询归档文件夹列表
    const ARCHIVES_CATALOG_LIST= '/archives/catalog-list';
    # 创建合同履约提醒
    const ARCHIVES_PERFORMANCE_MODIFY= '/archives/performance/modify';
    # 删除合同履约提醒
    const ARCHIVES_PERFORMANCE_DELETE= '/archives/performance/delete';
    # 查询合同履约提醒列表
    const ARCHIVES_PERFORMANCE_LIST= '/archives/performance/list';



    /**
     * DraftClient
     */
    # 发起合同协商
    const DRAFT_CREATE= '/draft/create';
    # 添加协商成员
    const DRAFT_MEMBERS_ADD = '/draft/members/add';
    # 获取合同协商邀请链接
    const DRAFT_GET_INVITE_URL = '/draft/get-invite-url';
    # 获取合同协商编辑链接
    const DRAFT_GET_EDIT_URL = '/draft/get-edit-url';
    # 获取合同起草管理链接
    const DRAFT_GET_MANAGE_URL = '/draft/get-manage-url';
    # 合同协商文件定稿
    const DRAFT_DOC_FINALIZE = '/draft/doc-finalize';
    # 查询已定稿的合同文件
    const DRAFT_GET_FINISHED_FILE = '/draft/get-finished-file';
    # 查询发起的合同协商列表
    const DRAFT_OWNER_GET_INITIATED_LIST = '/draft/owner/get-initiated-list';
    # 查询参与的合同协商列表
    const DRAFT_OWNER_GET_JOINED_LIST = '/draft/owner/get-joined-list';


    /**
     * OCRClient
     */
    # 智能审查
    const OCR_EDIT_GET_EXAMINE_URL = '/ocr/edit/get-examine-url';
    const OCR_EDIT_EXAMINE_RESULT_URL = '/ocr/edit/examine-result-url';
    const OCR_EDIT_EXAMINE_RESULT_DATA = '/ocr/edit/examine-result-data';
    # 智能比对
    const OCR_EDIT_GET_COMPARE_URL = '/ocr/edit/get-compare-url';
    const OCR_EDIT_COMPARE_RESULT_URL = '/ocr/edit/compare-result-url';
    const OCR_EDIT_COMPARE_RESULT_DATA = '/ocr/edit/compare-result-data';

    /**
     * TemplateClient
     */
    # 文档模板
    const DOC_TEMPLATE_GET_LIST = '/doc-template/get-list';
    const DOC_TEMPLATE_GET_DETAIL = '/doc-template/get-detail';
    const DOC_TEMPLATE_CREATE = '/doc-template/create';
    const DOC_TEMPLATE_COPY_CREATE = '/doc-template/copy-create';
    const DOC_TEMPLATE_FILL_VALUES = '/doc-template/fill-values';
    # 签署模板
    const SIGN_TEMPLATE_GET_LIST = '/sign-template/get-list';
    const SIGN_TEMPLATE_GET_DETAIL = '/sign-template/get-detail';
    const TEMPLATE_DOWNLOAD_URL = '/template/get-download-url';
    const TEMPLATE_MANAGE_GET_URL = '/template/manage/get-url';
    const TEMPLATE_CREATE_GET_URL = '/template/create/get-url';
    const TEMPLATE_PREVIEW_GET_URL = '/template/preview/get-url';
    const TEMPLATE_EDIT_GET_URL = '/template/edit/get-url';
    const SET_DOC_TEMPLATE_STATUS = '/doc-template/set-status';
    const DELETE_DOC_TEMPLATE = '/doc-template/delete';
    const SET_SIGN_TEMPLATE_STATUS = '/sign-template/set-status';
    const DELETE_SIGN_TEMPLATE = '/sign-template/delete';
    # 自定义控件
    const CORP_FIELD_GET_LIST = '/corp-field/get-list';
    const CORP_FIELD_CREATE = '/corp-field/create';
    const CORP_FIELD_DELETE = '/corp-field/delete';


    /**
     * AppClient
     */
    const APP_GET_INFO = '/app/get-info';
    const APP_MODIFY = '/app/modify';
    const APP_GET_OPEN_ID_LIST = '/app/get-openId-list';
    const APP_DEVELOP_GET_LIST = '/app-develop/get-list';
    const APP_GET_BUSINESS_ID_LIST = '/app/get-businessId-list';

    /**
     * ApprovalClient
     */
    const APPROVAL_FLOW_LIST = '/approval-flow/get-list';
    const APPROVAL_FLOW_DETAIL = '/approval-flow/get-detail';
    const APPROVAL_LIST = '/approval/get-list';
    const APPROVAL_DETAIL = '/approval/get-detail';
    const APPROVAL_URL = '/approval/get-url';

    /**
     * CallbackClient
     */
    const GET_CALL_BACK_LIST = '/callback/get-list';

    /**
     * AppTemplateClient
     */
    const APP_TEMPLATE_CREATE_GET_URL = '/app-template/create/get-url';
    const APP_TEMPLATE_EDIT_GET_URL = '/app-template/edit/get-url';
    const APP_TEMPLATE_PREVIEW_GET_URL = '/app-template/preview/get-url';
    const APP_DOC_TEMPLATE_GET_LIST = '/app-doc-template/get-list';
    const APP_DOC_TEMPLATE_GET_DETAIL = '/app-doc-template/get-detail';
    const APP_DOC_TEMPLATE_SET_STATUS = '/app-doc-template/set-status';
    const APP_DOC_TEMPLATE_DELETE = '/app-doc-template/delete';
    const APP_SIGN_TEMPLATE_GET_LIST = '/app-sign-template/get-list';
    const APP_SIGN_TEMPLATE_GET_DETAIL = '/app-sign-template/get-detail';
    const APP_SIGN_TEMPLATE_SET_STATUS = '/app-sign-template/set-status';
    const APP_SIGN_TEMPLATE_DELETE = '/app-sign-template/delete';

    const APP_FIELD_CREATE = '/app-field/create';
    const APP_FIELD_MODIFY = '/app-field/modify';
    const APP_FIELD_SET_STATUS = '/app-field/set-status';
    const APP_FIELD_GET_LIST = '/app-field/get-list';
    /**
     * SignTaskClient
     */
    #  签署任务
    # 1)签署任务创建
    const SIGN_TASK_CREATE = '/sign-task/create';
    const SIGN_TASK_CREATE_WITH_TEMPLATE = '/sign-task/create-with-template';
    const SIGN_TASK_FILL_FIELDS_VALUE = '/sign-task/field/fill-values';
    const SIGN_TASK_START = '/sign-task/start';
    const SIGN_TASK_ADD_DOCS = '/sign-task/doc/add';
    const SIGN_TASK_DELETE_DOCS = '/sign-task/doc/delete';
    const SIGN_TASK_ADD_FIELD = '/sign-task/field/add';
    const SIGN_TASK_DELETE_FIELD = '/sign-task/field/delete';
    const SIGN_TASK_ADD_ATTACH = '/sign-task/attach/add';
    const SIGN_TASK_DELETE_ATTACH = '/sign-task/attach/delete';
    const SIGN_TASK_ADD_ACTOR = '/sign-task/actor/add';
    const SIGN_TASK_ACTOR_REMOVE='/sign-task/actor/remove';
    const SIGN_TASK_DELETE_ACTOR = '/sign-task/actor/delete';
    const SIGN_TASK_ACTOR_MODIFY = '/sign-task/actor/modify';
    const SIGN_TASK_GET_EDIT_URL = '/sign-task/get-edit-url';
    const SIGN_TASK_GET_PREVIEW_URL = '/sign-task/get-preview-url';
    const SIGN_TASK_GET_PREFILL_URL = '/sign-task/get-prefill-url';

    # 2)参与方签署
    const SIGN_TASK_ACTOR_GET_URL = '/sign-task/actor/get-url';
    const SIGN_TASK_GET_BATCH_SIGN_URL = '/sign-task/get-batch-sign-url';
    const SIGN_TASK_ACTOR_V3_GET_URL = '/sign-task/actor/v3/get-url';

    # 3)签署任务查询
    const SIGN_TASK_OWNER_GET_LIST = '/sign-task/owner/get-list';
    # @deprecated 已过时，请使用 /sign-task/get-detail 代替
    const SIGN_TASK_APP_GET_DETAIL = '/sign-task/app/get-detail';
    const SIGN_TASK_GET_DETAIL = '/sign-task/get-detail';
    const SIGN_TASK_ACTOR_GET_LIST = '/sign-task/actor/list';
    const SIGN_TASK_FIELD_GET_LIST = '/sign-task/field/list';
    const SIGN_TASK_APPROVAL_GET_INFO = '/sign-task/get-approval-info';
    const SIGN_TASK_CATALOG_LIST = '/sign-task-catalog/list';
    const SIGN_TASK_BUSINESS_TYPE_GET_LIST = '/sign-task/business-type/get-list';
    const SIGN_TASK_OWNER_GET_FILE= '/sign-task/owner/get-file';
    const SIGN_TASK_ACTOR_GET_CER_INFO= '/sign-task/actor/get-cer-info';
    const SIGN_TASK_OWNER_GET_DOWNLOAD_URL = '/sign-task/owner/get-download-url';
    const GET_SIGN_TASK_OWNER_SLICING_TICKET_ID = '/sign-task/owner/get-slicing-ticket-id';
    const GET_SIGN_TASK_OWNER_PIC_DOWNLOAD_URL = '/sign-task/owner/get-pic-download-url';
    const SIGN_TASK_ACTOR_GET_FACE_PICTURE = '/sign-task/actor/get-face-picture';
    const SIGN_TASK_ACTOR_GET_AUDIO_VIDEO_DOWNLOAD_URL = '/sign-task/actor/get-audio-video-download-url';
    const SIGN_TASK_APPLY_REPORT = '/sign-task/apply-report';
    const SIGN_TASK_DOWNLOAD_REPORT = '/sign-task/download-report';
    const SIGN_TASK_QUERY_UNIFIED_EVIDENCE_NUMBER = '/sign-task/query-unified-evidence-number';
    const SIGN_TASK_EVIDENCE_REPORT_GET_DOWNLOAD_URL = '/sign-task/evidence-report/get-download-url';


    # 4)签署任务控制
    const SIGN_TASK_IGNORE = '/sign-task/ignore';
    const SIGN_TASK_DOC_FINALIZE = '/sign-task/doc-finalize';
    const SIGN_TASK_URGE = '/sign-task/urge';
    const SIGN_TASK_CANCEL = '/sign-task/cancel';
    const SIGN_TASK_BLOCK = '/sign-task/block';
    const SIGN_TASK_UNBLOCK = '/sign-task/unblock';
    const SIGN_TASK_FINISH = '/sign-task/finish';
    const SIGN_TASK_ABOLISH = '/sign-task/abolish';
    const SIGN_TASK_DELETE = '/sign-task/delete';
    const SIGN_TASK_EXTENSION = '/sign-task/extension';
    const VERIFY_METHODS_MANAGE_GET_URL ="/verify-methods/manage/get-url";

    # 5)跨应用发收签
    const CALLBACK_RECEIVE_ALL_SIGN_TASK_GET_LIST = '/callback/receive-all-signtask/get-list';
    const CALLBACK_RECEIVE_ALL_SIGN_TASK = '/callback/receive-all-signtask';
    const CALLBACK_RECEIVE_ALL_SIGN_TASK_CANCEL = '/callback/receive-all-signtask/cancel';

    # 6)扫码签
    const SIGN_TASK_SCAN_CREATE_WITH_TEMPLATE = '/sign-task/scan/create-with-template';
    const SIGN_TASK_SCAN_FIELD_FILL_VALUES= '/sign-task/scan/field/fill-values';
    const SIGN_TASK_SCAN_START= '/sign-task/scan/start';
    const SIGN_TASK_SCAN_GET_DETAIL = '/sign-task/scan/get-detail';

    # 7)批量发
    const SIGN_TASK_OWNER_GET_BATCH_CREATE_DOWNLOAD_URL = '/sign-template/batch-create/get-download-url';


    /**
     * EUIClient
     */
    # 4)获取个人授权链接
    const APP_GET_OPENID_LIST = '/app/get-openId-list';

    # 对EUI页面链接进行管理操作，如获取个人授权链接、构造新企业授权链接、获取计费链接、获取签署编辑链接等
    # 1)获取应用级资源链接
    const APP_PAGE_RESOURCE_GET_URL = '/app-page-resource/get-url';
    # 2)获取用户级资源链接
    const USER_PAGE_RESOURCE_GET_URL = '/user-page-resource/get-url';
    # 3)获取个人授权链接
    const USER_GET_AUTH_URL = '/user/get-auth-url';
    # 4)获取个人授权链接
    const CORP_GET_AUTH_URL = '/corp/get-auth-url';
    # 5)构造企业授权链接
    # https://{appId}.e.fadada.com/authorize/list?authScopes={authScopes}&corpName={corpName}&clientCorpId={clientCorpId}&redirectUrl={URLEncode(Url)}&signature={signature}&timestamp={timestamp}
    # 6)获取计费链接
    const BILLING_GET_BILL_URL = '/billing/get-bill-url';
    # 查询订单详情
    const BILL_ACCOUNT_GET_ORDER_DETAIL = '/bill-account/get-order-detail';
    # 6)获取计费链接
    const BILLING_ACCOUNT_GET_USAGE_AVAILABLENUM = '/bill-account/get-usage-availablenum';
    # 查询已购消耗类产品
    const BILL_ACCOUNT_GET_USAGE_LIST = '/bill-account/get-usage-list';
    # 查询使用汇总数据
    const BILL_ACCOUNT_GET_BILL_SUMMARY_LIST = '/bill-account/get-bill-summary-list';
    # 查询计费流水记录
    const BILL_ACCOUNT_GET_BILL_LIST = '/bill-account/get-bill-list';



    /**
     * CollectClient
     */
    # 查询收集表列表
    const SMARTFORM_GET_LIST = '/smartform/get-list';
    # 查询收集表详情
    const SMARTFORM_GET_DETAIL = '/smartform/get-detail';
    # 删除收集表
    const SMARTFORM_DELETE = '/smartform/delete';
    # 查询已收集的内容
    const SMARTFORM_SERIAL_GET_INFO = '/smartform/serial/get-info';
    # 删除已收集的内容
    const SMARTFORM_SERIAL_DELETE = '/smartform/serial/delete';
    # 获取收集表管理链接
    const SMARTFORM_MANAGE_GET_URL = '/smartform/manage/get-url';
    # 获取收集表邀请填写链接
    const SMARTFORM_COLLECT_GET_URL='/smartform/collect/get-url';

}
