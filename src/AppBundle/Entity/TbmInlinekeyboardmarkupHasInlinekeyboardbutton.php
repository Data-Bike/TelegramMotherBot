<?php

namespace AppBundle\Entity;

/**
 * TbmInlinekeyboardmarkupHasInlinekeyboardbutton
 */
class TbmInlinekeyboardmarkupHasInlinekeyboardbutton
{
    /**
     * @var integer
     */
    private $row;

    /**
     * @var integer
     */
    private $inlinekeyboardmarkupId;

    /**
     * @var integer
     */
    private $inlinekeyboardbuttonId;


    /**
     * Set row
     *
     * @param integer $row
     *
     * @return TbmInlinekeyboardmarkupHasInlinekeyboardbutton
     */
    public function setRow($row)
    {
        $this->row = $row;

        return $this;
    }

    /**
     * Get row
     *
     * @return integer
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * Set inlinekeyboardmarkupId
     *
     * @param integer $inlinekeyboardmarkupId
     *
     * @return TbmInlinekeyboardmarkupHasInlinekeyboardbutton
     */
    public function setInlinekeyboardmarkupId($inlinekeyboardmarkupId)
    {
        $this->inlinekeyboardmarkupId = $inlinekeyboardmarkupId;

        return $this;
    }

    /**
     * Get inlinekeyboardmarkupId
     *
     * @return integer
     */
    public function getInlinekeyboardmarkupId()
    {
        return $this->inlinekeyboardmarkupId;
    }

    /**
     * Set inlinekeyboardbuttonId
     *
     * @param integer $inlinekeyboardbuttonId
     *
     * @return TbmInlinekeyboardmarkupHasInlinekeyboardbutton
     */
    public function setInlinekeyboardbuttonId($inlinekeyboardbuttonId)
    {
        $this->inlinekeyboardbuttonId = $inlinekeyboardbuttonId;

        return $this;
    }

    /**
     * Get inlinekeyboardbuttonId
     *
     * @return integer
     */
    public function getInlinekeyboardbuttonId()
    {
        return $this->inlinekeyboardbuttonId;
    }
}

