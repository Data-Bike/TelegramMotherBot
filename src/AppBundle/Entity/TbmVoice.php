<?php

namespace AppBundle\Entity;

/**
 * TbmVoice
 */
class TbmVoice
{
    /**
     * @var integer
     */
    private $duration;

    /**
     * @var string
     */
    private $mimeType;

    /**
     * @var integer
     */
    private $fileSize;

    /**
     * @var \AppBundle\Entity\TbmMessage
     */
    private $file;


    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return TbmVoice
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set mimeType
     *
     * @param string $mimeType
     *
     * @return TbmVoice
     */
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * Get mimeType
     *
     * @return string
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * Set fileSize
     *
     * @param integer $fileSize
     *
     * @return TbmVoice
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;

        return $this;
    }

    /**
     * Get fileSize
     *
     * @return integer
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * Set file
     *
     * @param \AppBundle\Entity\TbmMessage $file
     *
     * @return TbmVoice
     */
    public function setFile(\AppBundle\Entity\TbmMessage $file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return \AppBundle\Entity\TbmMessage
     */
    public function getFile()
    {
        return $this->file;
    }
    /**
     * @var integer
     */
    private $fileId;


    /**
     * Get fileId
     *
     * @return integer
     */
    public function getFileId()
    {
        return $this->fileId;
    }
}
