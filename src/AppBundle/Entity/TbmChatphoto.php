<?php

namespace AppBundle\Entity;

/**
 * TbmChatphoto
 */
class TbmChatphoto
{
    /**
     * @var integer
     */
    private $smallFileId;

    /**
     * @var integer
     */
    private $bigFileId;

    /**
     * @var \AppBundle\Entity\TbmChat
     */
    private $id;


    /**
     * Set smallFileId
     *
     * @param integer $smallFileId
     *
     * @return TbmChatphoto
     */
    public function setSmallFileId($smallFileId)
    {
        $this->smallFileId = $smallFileId;

        return $this;
    }

    /**
     * Get smallFileId
     *
     * @return integer
     */
    public function getSmallFileId()
    {
        return $this->smallFileId;
    }

    /**
     * Set bigFileId
     *
     * @param integer $bigFileId
     *
     * @return TbmChatphoto
     */
    public function setBigFileId($bigFileId)
    {
        $this->bigFileId = $bigFileId;

        return $this;
    }

    /**
     * Get bigFileId
     *
     * @return integer
     */
    public function getBigFileId()
    {
        return $this->bigFileId;
    }

    /**
     * Set id
     *
     * @param \AppBundle\Entity\TbmChat $id
     *
     * @return TbmChatphoto
     */
    public function setId(\AppBundle\Entity\TbmChat $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return \AppBundle\Entity\TbmChat
     */
    public function getId()
    {
        return $this->id;
    }
}

