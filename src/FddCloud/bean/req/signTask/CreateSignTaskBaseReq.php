<?php


namespace FddCloud\bean\req\signTask;
class CreateSignTaskBaseReq
{
    public $initiator;
    public $initiatorEntityId;
    public $initiatorMemberId;
    public $signTaskSubject;
    public $signDocType;
    public $expiresTime;
    public $dueDate;
    public $autoStart;
    public $autoFinish;
    public $businessTypeId;
    public $businessCode;
    public $startApprovalFlowId;
    public $finalizeApprovalFlowId;
    public $catalogId;
    public $autoFillFinalize;
    public $certCAOrg;
    public $encryptionType;
    public $businessId;
    public $transReferenceId;
    public $callbackUrl;
    public $offerCopies;
    public $actors;
    public $watermarks;

    /**
     * @return mixed
     */
    public function getSignTaskSubject()
    {
        return $this->signTaskSubject;
    }

    /**
     * @param mixed $signTaskSubject
     */
    public function setSignTaskSubject($signTaskSubject)
    {
        $this->signTaskSubject = $signTaskSubject;
    }

    /**
     * @return mixed
     */
    public function getInitiatorEntityId()
    {
        return $this->initiatorEntityId;
    }

    /**
     * @param mixed $initiatorEntityId
     */
    public function setInitiatorEntityId($initiatorEntityId)
    {
        $this->initiatorEntityId = $initiatorEntityId;
    }

    /**
     * @return mixed
     */
    public function getInitiatorMemberId()
    {
        return $this->initiatorMemberId;
    }

    /**
     * @param mixed $initiatorMemberId
     */
    public function setInitiatorMemberId($initiatorMemberId)
    {
        $this->initiatorMemberId = $initiatorMemberId;
    }


    /**
     * @return mixed
     */
    public function getInitiator()
    {
        return $this->initiator;
    }

    /**
     * @param mixed $initiator
     */
    public function setInitiator($initiator)
    {
        $this->initiator = $initiator;
    }

    /**
     * @return mixed
     */
    public function getSignDocType()
    {
        return $this->signDocType;
    }

    /**
     * @param mixed $signDocType
     */
    public function setSignDocType($signDocType)
    {
        $this->signDocType = $signDocType;
    }

    /**
     * @return mixed
     */
    public function getExpiresTime()
    {
        return $this->expiresTime;
    }

    /**
     * @param mixed $expiresTime
     */
    public function setExpiresTime($expiresTime)
    {
        $this->expiresTime = $expiresTime;
    }

    /**
     * @return mixed
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param mixed $dueDate
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;
    }

    /**
     * @return mixed
     */
    public function getAutoStart()
    {
        return $this->autoStart;
    }

    /**
     * @param mixed $autoStart
     */
    public function setAutoStart($autoStart)
    {
        $this->autoStart = $autoStart;
    }

    /**
     * @return mixed
     */
    public function getBusinessTypeId()
    {
        return $this->businessTypeId;
    }

    /**
     * @param mixed $businessTypeId
     */
    public function setBusinessTypeId($businessTypeId)
    {
        $this->businessTypeId = $businessTypeId;
    }

    /**
     * @return mixed
     */
    public function getAutoFinish()
    {
        return $this->autoFinish;
    }

    /**
     * @param mixed $autoFinish
     */
    public function setAutoFinish($autoFinish)
    {
        $this->autoFinish = $autoFinish;
    }

    /**
     * @return mixed
     */
    public function getCatalogId()
    {
        return $this->catalogId;
    }

    /**
     * @param mixed $catalogId
     */
    public function setCatalogId($catalogId)
    {
        $this->catalogId = $catalogId;
    }

    /**
     * @return mixed
     */
    public function getAutoFillFinalize()
    {
        return $this->autoFillFinalize;
    }

    /**
     * @return mixed
     */
    public function getCertCAOrg()
    {
        return $this->certCAOrg;
    }

    /**
     * @param mixed $certCAOrg
     */
    public function setCertCAOrg($certCAOrg)
    {
        $this->certCAOrg = $certCAOrg;
    }

    /**
     * @param mixed $autoFillFinalize
     */
    public function setAutoFillFinalize($autoFillFinalize)
    {
        $this->autoFillFinalize = $autoFillFinalize;
    }

    /**
     * @return mixed
     */
    public function getBusinessId()
    {
        return $this->businessId;
    }

    /**
     * @param mixed $businessId
     */
    public function setBusinessId($businessId)
    {
        $this->businessId = $businessId;
    }

    /**
     * @return mixed
     */
    public function getBusinessCode()
    {
        return $this->businessCode;
    }

    /**
     * @param mixed $businessCode
     */
    public function setBusinessCode($businessCode)
    {
        $this->businessCode = $businessCode;
    }

    /**
     * @return mixed
     */
    public function getStartApprovalFlowId()
    {
        return $this->startApprovalFlowId;
    }

    /**
     * @param mixed $startApprovalFlowId
     */
    public function setStartApprovalFlowId($startApprovalFlowId)
    {
        $this->startApprovalFlowId = $startApprovalFlowId;
    }

    /**
     * @return mixed
     */
    public function getFinalizeApprovalFlowId()
    {
        return $this->finalizeApprovalFlowId;
    }

    /**
     * @param mixed $finalizeApprovalFlowId
     */
    public function setFinalizeApprovalFlowId($finalizeApprovalFlowId)
    {
        $this->finalizeApprovalFlowId = $finalizeApprovalFlowId;
    }

    /**
     * @return mixed
     */
    public function getTransReferenceId()
    {
        return $this->transReferenceId;
    }

    /**
     * @param mixed $transReferenceId
     */
    public function setTransReferenceId($transReferenceId)
    {
        $this->transReferenceId = $transReferenceId;
    }

    /**
     * @return mixed
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    /**
     * @param mixed $callbackUrl
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;
    }

    /**
     * @return mixed
     */
    public function getOfferCopies()
    {
        return $this->offerCopies;
    }

    /**
     * @param mixed $offerCopies
     */
    public function setOfferCopies($offerCopies)
    {
        $this->offerCopies = $offerCopies;
    }

    /**
     * @return mixed
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @param mixed $actors
     */
    public function setActors($actors)
    {
        $this->actors = $actors;
    }

    /**
     * @return mixed
     */
    public function getWatermarks()
    {
        return $this->watermarks;
    }

    /**
     * @param mixed $watermarks
     */
    public function setWatermarks($watermarks)
    {
        $this->watermarks = $watermarks;
    }

    /**
     * @return mixed
     */
    public function getEncryptionType()
    {
        return $this->encryptionType;
    }

    /**
     * @param mixed $encryptionType
     */
    public function setEncryptionType($encryptionType)
    {
        $this->encryptionType = $encryptionType;
    }

}
