<?php

namespace FddCloud\bean\req;

class FieldCorpSealCross
{
    public $applyMode;
    public $applyPageNo;
    public $followSignSize;
    public $width;
    public $height;
    public $categoryType;

    /**
     * @return mixed
     */
    public function getApplyMode()
    {
        return $this->applyMode;
    }

    /**
     * @param mixed $applyMode
     */
    public function setApplyMode($applyMode)
    {
        $this->applyMode = $applyMode;
    }

    /**
     * @return mixed
     */
    public function getApplyPageNo()
    {
        return $this->applyPageNo;
    }

    /**
     * @param mixed $applyPageNo
     */
    public function setApplyPageNo($applyPageNo)
    {
        $this->applyPageNo = $applyPageNo;
    }

    /**
     * @return mixed
     */
    public function getFollowSignSize()
    {
        return $this->followSignSize;
    }

    /**
     * @param mixed $followSignSize
     */
    public function setFollowSignSize($followSignSize)
    {
        $this->followSignSize = $followSignSize;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getCategoryType()
    {
        return $this->categoryType;
    }

    /**
     * @param mixed $categoryType
     */
    public function setCategoryType($categoryType)
    {
        $this->categoryType = $categoryType;
    }
}