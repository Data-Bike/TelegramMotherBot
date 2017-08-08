<?php

namespace AppBundle\Entity;

/**
 * TbmForcereply
 */
class TbmForcereply
{
    /**
     * @var boolean
     */
    private $forceReply;

    /**
     * @var boolean
     */
    private $selective;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set forceReply
     *
     * @param boolean $forceReply
     *
     * @return TbmForcereply
     */
    public function setForceReply($forceReply)
    {
        $this->forceReply = $forceReply;

        return $this;
    }

    /**
     * Get forceReply
     *
     * @return boolean
     */
    public function getForceReply()
    {
        return $this->forceReply;
    }

    /**
     * Set selective
     *
     * @param boolean $selective
     *
     * @return TbmForcereply
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
