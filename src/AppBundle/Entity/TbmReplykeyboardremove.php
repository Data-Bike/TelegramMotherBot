<?php

namespace AppBundle\Entity;

/**
 * TbmReplykeyboardremove
 */
class TbmReplykeyboardremove
{
    /**
     * @var boolean
     */
    private $removeKeyboard;

    /**
     * @var boolean
     */
    private $selective;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set removeKeyboard
     *
     * @param boolean $removeKeyboard
     *
     * @return TbmReplykeyboardremove
     */
    public function setRemoveKeyboard($removeKeyboard)
    {
        $this->removeKeyboard = $removeKeyboard;

        return $this;
    }

    /**
     * Get removeKeyboard
     *
     * @return boolean
     */
    public function getRemoveKeyboard()
    {
        return $this->removeKeyboard;
    }

    /**
     * Set selective
     *
     * @param boolean $selective
     *
     * @return TbmReplykeyboardremove
     */
    public function setSelective($selective)
    {
        $this->selective = $selective;

        return $this;
    }

    /**
     * Get selective
     *
     * @return boolean
     */
    public function getSelective()
    {
        return $this->selective;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
