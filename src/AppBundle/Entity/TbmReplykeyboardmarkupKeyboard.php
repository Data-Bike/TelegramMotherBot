<?php

namespace AppBundle\Entity;

/**
 * TbmReplykeyboardmarkupKeyboard
 */
class TbmReplykeyboardmarkupKeyboard
{
    /**
     * @var integer
     */
    private $row;

    /**
     * @var integer
     */
    private $replykeyboardmarkupId;

    /**
     * @var integer
     */
    private $keyboardbuttonId;


    /**
     * Set row
     *
     * @param integer $row
     *
     * @return TbmReplykeyboardmarkupKeyboard
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
     * Set replykeyboardmarkupId
     *
     * @param integer $replykeyboardmarkupId
     *
     * @return TbmReplykeyboardmarkupKeyboard
     */
    public function setReplykeyboardmarkupId($replykeyboardmarkupId)
    {
        $this->replykeyboardmarkupId = $replykeyboardmarkupId;

        return $this;
    }

    /**
     * Get replykeyboardmarkupId
     *
     * @return integer
     */
    public function getReplykeyboardmarkupId()
    {
        return $this->replykeyboardmarkupId;
    }

    /**
     * Set keyboardbuttonId
     *
     * @param integer $keyboardbuttonId
     *
     * @return TbmReplykeyboardmarkupKeyboard
     */
    public function setKeyboardbuttonId($keyboardbuttonId)
    {
        $this->keyboardbuttonId = $keyboardbuttonId;

        return $this;
    }

    /**
     * Get keyboardbuttonId
     *
     * @return integer
     */
    public function getKeyboardbuttonId()
    {
        return $this->keyboardbuttonId;
    }
}

