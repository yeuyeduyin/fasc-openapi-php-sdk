<?php
namespace FddCloud\bean\req\doc;
class GetSealPositionUrlReq
{
    public $serialNo;
    public $fileIds;
    public $actorList;
    public $showFieldTypes;
    public $redirectUrl;

    /**
     * @return mixed
     */
    public function getSerialNo()
    {
        return $this->serialNo;
    }

    /**
     * @param mixed $serialNo
     */
    public function setSerialNo($serialNo)
    {
        $this->serialNo = $serialNo;
    }

    /**
     * @return mixed
     */
    public function getFileIds()
    {
        return $this->fileIds;
    }

    /**
     * @param mixed $fileIds
     */
    public function setFileIds($fileIds)
    {
        $this->fileIds = $fileIds;
    }

    /**
     * @return mixed
     */
    public function getActorList()
    {
        return $this->actorList;
    }

    /**
     * @param mixed $actorList
     */
    public function setActorList($actorList)
    {
        $this->actorList = $actorList;
    }

    /**
     * @return mixed
     */
    public function getShowFieldTypes()
    {
        return $this->showFieldTypes;
    }

    /**
     * @param mixed $showFieldTypes
     */
    public function setShowFieldTypes($showFieldTypes)
    {
        $this->showFieldTypes = $showFieldTypes;
    }

    /**
     * @return mixed
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param mixed $redirectUrl
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
    }

}
