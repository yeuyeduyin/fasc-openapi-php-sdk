<?php


namespace FddCloud\bean\req\appTemplate\docTemplate;
class AppDocTemplateDeleteReq
{
    public $appDocTemplateId;

    /**
     * @return mixed
     */
    public function getAppDocTemplateId()
    {
        return $this->appDocTemplateId;
    }

    /**
     * @param mixed $appDocTemplateId
     */
    public function setAppDocTemplateId($appDocTemplateId)
    {
        $this->appDocTemplateId = $appDocTemplateId;
    }


}
