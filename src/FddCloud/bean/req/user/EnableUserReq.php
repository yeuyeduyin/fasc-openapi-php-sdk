<?php


namespace FddCloud\bean\req\user;
class EnableUserReq
{
    public $openUserId;

    /**
     * @return mixed
     */
    public function getOpenUserId()
    {
        return $this->openUserId;
    }

    /**
     * @param mixed $openUserId
     */
    public function setOpenUserId($openUserId)
    {
        $this->openUserId = $openUserId;
    }

}
