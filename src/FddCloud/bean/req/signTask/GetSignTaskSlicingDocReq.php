<?php


namespace FddCloud\bean\req\signTask;

class GetSignTaskSlicingDocReq extends SignTaskBaseReq
{
    public $ownerId;

    /**
     * @return mixed
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * @param mixed $ownerId
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
    }

}
