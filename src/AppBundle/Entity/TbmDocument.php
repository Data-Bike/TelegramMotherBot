<?php

namespace AppBundle\Entity;

/**
 * TbmDocument
 */
class TbmDocument extends TbmEntity {

    public function __construct(\ArrayAccess $params) {
        parent::__construct($params);
    }

    /**
     * @var integer
     */
    private $thumb;

    /**
     * @var string
     */
    private $fileName;

    /**
     * @var string
     */
    private $mimeType;

    /**
     * @var string
     */
    private $fileSize;

    /**
     * @var \AppBundle\Entity\TbmMessage
     */
    private $file;

    /**
     * Set thumb
     *
     * @param integer $thumb
     *
     * @return TbmDocument
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
     * Set fileName
     *
     * @param string $fileName
     *
     * @return TbmDocument
     */
    public function setFileName($fileName) {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get fileName
     *
     * @return string
     */
    public function getFileName() {
        return $this->fileName;
    }

    /**
     * Set mimeType
     *
     * @param string $mimeType
     *
     * @return TbmDocument
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
     * @param string $fileSize
     *
     * @return TbmDocument
     */
    public function setFileSize($fileSize) {
        $this->fileSize = $fileSize;

        return $this;
    }

    /**
     * Get fileSize
     *
     * @return string
     */
    public function getFileSize() {
        return $this->fileSize;
    }

    /**
     * Set file
     *
     * @param \AppBundle\Entity\TbmMessage $file
     *
     * @return TbmDocument
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
