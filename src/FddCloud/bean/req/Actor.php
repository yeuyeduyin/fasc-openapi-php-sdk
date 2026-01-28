<?php

namespace FddCloud\bean\req;

class Actor
{

    public $actorId;

    public $actorType;

    public $actorName;

    public $permissions;

    public $actorOpenId;

    public $actorFDDId;

    public $actorEntityId;

    public $actorCorpMembers;

    public $identNameForMatch;

    public $certType;

    public $certNoForMatch;

    public $accountName;

    public $accountEditable;

    public $clientUserId;

    public $authScopes;

    public $sendNotification;

    public $notifyType;

    public $notifyAddress;
    public $sendInSiteMessage;

    /**
     * @deprecated 过时字段
     */
    public $notification;

    /**
     * @return mixed
     */
    public function getActorId()
    {
        return $this->actorId;
    }

    /**
     * @param mixed $actorId
     */
    public function setActorId($actorId)
    {
        $this->actorId = $actorId;
    }

    /**
     * @return mixed
     */
    public function getActorType()
    {
        return $this->actorType;
    }

    /**
     * @param mixed $actorType
     */
    public function setActorType($actorType)
    {
        $this->actorType = $actorType;
    }

    /**
     * @return mixed
     */
    public function getActorName()
    {
        return $this->actorName;
    }

    /**
     * @param mixed $actorName
     */
    public function setActorName($actorName)
    {
        $this->actorName = $actorName;
    }

    /**
     * @return mixed
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @param mixed $permissions
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
    }

    /**
     * @return mixed
     */
    public function getActorOpenId()
    {
        return $this->actorOpenId;
    }

    /**
     * @param mixed $actorOpenId
     */
    public function setActorOpenId($actorOpenId)
    {
        $this->actorOpenId = $actorOpenId;
    }

    /**
     * @return mixed
     */
    public function getActorFDDId()
    {
        return $this->actorFDDId;
    }

    /**
     * @param mixed $actorFDDId
     */
    public function setActorFDDId($actorFDDId)
    {
        $this->actorFDDId = $actorFDDId;
    }

    /**
     * @return mixed
     */
    public function getActorEntityId()
    {
        return $this->actorEntityId;
    }

    /**
     * @param mixed $actorEntityId
     */
    public function setActorEntityId($actorEntityId)
    {
        $this->actorEntityId = $actorEntityId;
    }

    /**
     * @return mixed
     */
    public function getActorCorpMembers()
    {
        return $this->actorCorpMembers;
    }

    /**
     * @param mixed $actorCorpMembers
     */
    public function setActorCorpMembers($actorCorpMembers)
    {
        $this->actorCorpMembers = $actorCorpMembers;
    }

    /**
     * @return mixed
     */
    public function getIdentNameForMatch()
    {
        return $this->identNameForMatch;
    }

    /**
     * @param mixed $identNameForMatch
     */
    public function setIdentNameForMatch($identNameForMatch)
    {
        $this->identNameForMatch = $identNameForMatch;
    }

    /**
     * @return mixed
     */
    public function getCertType()
    {
        return $this->certType;
    }

    /**
     * @param mixed $certType
     */
    public function setCertType($certType)
    {
        $this->certType = $certType;
    }

    /**
     * @return mixed
     */
    public function getCertNoForMatch()
    {
        return $this->certNoForMatch;
    }

    /**
     * @param mixed $certNoForMatch
     */
    public function setCertNoForMatch($certNoForMatch)
    {
        $this->certNoForMatch = $certNoForMatch;
    }

    /**
     * @return mixed
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @param mixed $accountName
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }

    /**
     * @return mixed
     */
    public function getClientUserId()
    {
        return $this->clientUserId;
    }

    /**
     * @param mixed $clientUserId
     */
    public function setClientUserId($clientUserId)
    {
        $this->clientUserId = $clientUserId;
    }

    /**
     * @return mixed
     */
    public function getAuthScopes()
    {
        return $this->authScopes;
    }

    /**
     * @param mixed $authScopes
     */
    public function setAuthScopes($authScopes)
    {
        $this->authScopes = $authScopes;
    }

    /**
     * @return mixed
     */
    public function getSendNotification()
    {
        return $this->sendNotification;
    }

    /**
     * @param mixed $sendNotification
     */
    public function setSendNotification($sendNotification)
    {
        $this->sendNotification = $sendNotification;
    }

    /**
     * @return mixed
     */
    public function getNotifyType()
    {
        return $this->notifyType;
    }

    /**
     * @param mixed $notifyType
     */
    public function setNotifyType($notifyType)
    {
        $this->notifyType = $notifyType;
    }

    /**
     * @return mixed
     */
    public function getNotifyAddress()
    {
        return $this->notifyAddress;
    }

    /**
     * @param mixed $notifyAddress
     */
    public function setNotifyAddress($notifyAddress)
    {
        $this->notifyAddress = $notifyAddress;
    }

    /**
     * @return mixed
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * @param mixed $notification
     */
    public function setNotification($notification)
    {
        $this->notification = $notification;
    }

    /**
     * @return mixed
     */
    public function getAccountEditable()
    {
        return $this->accountEditable;
    }

    /**
     * @param mixed $accountEditable
     */
    public function setAccountEditable($accountEditable)
    {
        $this->accountEditable = $accountEditable;
    }

    /**
     * @return mixed
     */
    public function getSendInSiteMessage()
    {
        return $this->sendInSiteMessage;
    }

    /**
     * @param mixed $sendInSiteMessage
     */
    public function setSendInSiteMessage($sendInSiteMessage)
    {
        $this->sendInSiteMessage = $sendInSiteMessage;
    }





}
