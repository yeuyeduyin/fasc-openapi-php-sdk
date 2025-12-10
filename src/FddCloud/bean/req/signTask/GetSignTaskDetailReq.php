<?php

namespace FddCloud\bean\req\signTask;

class GetSignTaskDetailReq extends SignTaskBaseReq
{
    public $filter;

    /**
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @param mixed $filter
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;
    }

}