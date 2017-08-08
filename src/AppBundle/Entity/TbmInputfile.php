<?php

namespace AppBundle\Entity;

/**
 * TbmInputfile
 */
class TbmInputfile
{
    /**
     * @var integer
     */
    private $fileId;

    /**
     * @var string
     */
    private $url;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set fileId
     *
     * @param integer $fileId
     *
     * @return TbmInputfile
     */
    public function setFileId($fileId)
    {
        $this->fileId = $fileId;

        return $this;
    }

    /**
     * Get fileId
     *
     * @return integer
     */
    public function getFileId()
    {
        return $this->fileId;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return TbmInputfile
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
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
