<?php

namespace AppBundle\Entity;

/**
 * TbmVideo
 */
class TbmVideo extends TbmEntity {

    public function __construct(\ArrayAccess $params) {
        parent::__construct($params);
    }

    /**
     * @var integer
     */
    private $width;

    /**
     * @var integer
     */
    private $height;

    /**
     * @var integer
     */
    private $duration;

    /**
     * @var integer
     */
    private $thumb;

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
     * Set width
     *
     * @param integer $width
     *
     * @return TbmVideo
     */
    public function setWidth($width) {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer
     */
    public function getWidth() {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     *
     * @return TbmVideo
     */
    public function setHeight($height) {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer
     */
    public function getHeight() {
        return $this->height;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return TbmVideo
     */
    public function setDuration($duration) {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration() {
        return $this->duration;
    }

    /**
     * Set thumb
     *
     * @param integer $thumb
     *
     * @return TbmVideo
     */
    public function setThumb($thumb) {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * Get thumb
     *
     * @return integer
     */
    public function getThumb() {
        return $this->thumb;
    }

    /**
     * Set mimeType
     *
     * @param string $mimeType
     *
     * @return TbmVideo
     */
    public function setMimeType($mimeType) {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * Get mimeType
     *
     * @return string
     */
    public function getMimeType() {
        return $this->mimeType;
    }

    /**
     * Set fileSize
     *
     * @param integer $fileSize
     *
     * @return TbmVideo
     */
    public function setFileSize($fileSize) {
        $this->fileSize = $fileSize;

        return $this;
    }

    /**
     * Get fileSize
     *
     * @return integer
     */
    public function getFileSize() {
        return $this->fileSize;
    }

    /**
     * Set file
     *
     * @param \AppBundle\Entity\TbmMessage $file
     *
     * @return TbmVideo
     */
    public function setFile(\AppBundle\Entity\TbmMessage $file) {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return \AppBundle\Entity\TbmMessage
     */
    public function getFile() {
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
    public function getFileId() {
        return $this->fileId;
    }

}
