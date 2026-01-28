<?php

namespace FddCloud\bean\req\signTask;
class SignConfigInfo
{
    public $multiFactor;
    public $orderNo;
    public $ageRequirement;
    public $freeDragSealId;
    public $signAllDoc;

    public $blockHere;

    public $requestVerifyFree;

    public $authorizeFreeSign;

    public $verifyMethods;

    public $audioVideoInfo;

    public $requestMemberSign;

    public $signerSignMethod;

    public $joinByLink;

    public $readingToEnd;

    public $readingTime;

    public $freeLogin;

    public $identifiedView;

    public $resizeSeal;

    public $actorAttachInfos;

    public $scanSign;

    /**
     * @return mixed
     */
    public function getAgeRequirement()
    {
        return $this->ageRequirement;
    }

    /**
     * @param mixed $ageRequirement
     */
    public function setAgeRequirement($ageRequirement)
    {
        $this->ageRequirement = $ageRequirement;
    }

    /**
     * @return mixed
     */
    public function getMultiFactor()
    {
        return $this->multiFactor;
    }

    /**
     * @param mixed $multiFactor
     */
    public function setMultiFactor($multiFactor)
    {
        $this->multiFactor = $multiFactor;
    }

    /**
     * @return mixed
     */
    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * @param mixed $orderNo
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return mixed
     */
    public function getFreeDragSealId()
    {
        return $this->freeDragSealId;
    }

    /**
     * @param mixed $freeDragSealId
     */
    public function setFreeDragSealId($freeDragSealId)
    {
        $this->freeDragSealId = $freeDragSealId;
    }

    /**
     * @return mixed
     */
    public function getSignAllDoc()
    {
        return $this->signAllDoc;
    }

    /**
     * @param mixed $signAllDoc
     */
    public function setSignAllDoc($signAllDoc)
    {
        $this->signAllDoc = $signAllDoc;
    }

    /**
     * @return mixed
     */
    public function getAuthorizeFreeSign()
    {
        return $this->authorizeFreeSign;
    }

    /**
     * @param mixed $authorizeFreeSign
     */
    public function setAuthorizeFreeSign($authorizeFreeSign)
    {
        $this->authorizeFreeSign = $authorizeFreeSign;
    }

    /**
     * @return mixed
     */
    public function getBlockHere()
    {
        return $this->blockHere;
    }

    /**
     * @param mixed $blockHere
     */
    public function setBlockHere($blockHere)
    {
        $this->blockHere = $blockHere;
    }

    /**
     * @return mixed
     */
    public function getRequestVerifyFree()
    {
        return $this->requestVerifyFree;
    }

    /**
     * @param mixed $requestVerifyFree
     */
    public function setRequestVerifyFree($requestVerifyFree)
    {
        $this->requestVerifyFree = $requestVerifyFree;
    }

    /**
     * @return mixed
     */
    public function getVerifyMethods()
    {
        return $this->verifyMethods;
    }

    /**
     * @param mixed $verifyMethods
     */
    public function setVerifyMethods($verifyMethods)
    {
        $this->verifyMethods = $verifyMethods;
    }

    /**
     * @return mixed
     */
    public function getAudioVideoInfo()
    {
        return $this->audioVideoInfo;
    }

    /**
     * @param mixed $audioVideoInfo
     */
    public function setAudioVideoInfo($audioVideoInfo)
    {
        $this->audioVideoInfo = $audioVideoInfo;
    }

    /**
     * @return mixed
     */
    public function getRequestMemberSign()
    {
        return $this->requestMemberSign;
    }

    /**
     * @param mixed $requestMemberSign
     */
    public function setRequestMemberSign($requestMemberSign)
    {
        $this->requestMemberSign = $requestMemberSign;
    }

    /**
     * @return mixed
     */
    public function getSignerSignMethod()
    {
        return $this->signerSignMethod;
    }

    /**
     * @param mixed $signerSignMethod
     */
    public function setSignerSignMethod($signerSignMethod)
    {
        $this->signerSignMethod = $signerSignMethod;
    }

    /**
     * @return mixed
     */
    public function getJoinByLink()
    {
        return $this->joinByLink;
    }

    /**
     * @param mixed $joinByLink
     */
    public function setJoinByLink($joinByLink)
    {
        $this->joinByLink = $joinByLink;
    }

    /**
     * @return mixed
     */
    public function getReadingToEnd()
    {
        return $this->readingToEnd;
    }

    /**
     * @param mixed $readingToEnd
     */
    public function setReadingToEnd($readingToEnd)
    {
        $this->readingToEnd = $readingToEnd;
    }

    /**
     * @return mixed
     */
    public function getReadingTime()
    {
        return $this->readingTime;
    }

    /**
     * @param mixed $readingTime
     */
    public function setReadingTime($readingTime)
    {
        $this->readingTime = $readingTime;
    }

    /**
     * @return mixed
     */
    public function getFreeLogin()
    {
        return $this->freeLogin;
    }

    /**
     * @param mixed $freeLogin
     */
    public function setFreeLogin($freeLogin)
    {
        $this->freeLogin = $freeLogin;
    }

    /**
     * @return mixed
     */
    public function getIdentifiedView()
    {
        return $this->identifiedView;
    }

    /**
     * @param mixed $identifiedView
     */
    public function setIdentifiedView($identifiedView)
    {
        $this->identifiedView = $identifiedView;
    }

    /**
     * @return mixed
     */
    public function getResizeSeal()
    {
        return $this->resizeSeal;
    }

    /**
     * @param mixed $resizeSeal
     */
    public function setResizeSeal($resizeSeal)
    {
        $this->resizeSeal = $resizeSeal;
    }

    /**
     * @return mixed
     */
    public function getActorAttachInfos()
    {
        return $this->actorAttachInfos;
    }

    /**
     * @param mixed $actorAttachInfos
     */
    public function setActorAttachInfos($actorAttachInfos)
    {
        $this->actorAttachInfos = $actorAttachInfos;
    }

    /**
     * @return mixed
     */
    public function getScanSign()
    {
        return $this->scanSign;
    }

    /**
     * @param mixed $scanSign
     */
    public function setScanSign($scanSign)
    {
        $this->scanSign = $scanSign;
    }


}