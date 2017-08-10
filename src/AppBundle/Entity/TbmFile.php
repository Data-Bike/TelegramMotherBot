<?php

namespace AppBundle\Entity;

/**
 * TbmFile
 */
class TbmFile extends TbmEntity {

    public function __construct(\ArrayAccess $params) {
        parent::__construct($params);
    }

    /**
     * @var integer
     */
    private $fileSize;

    /**
     * @var string
     */
    private $filePath;

    /**
     * @var integer
     */
    private $fileId;

    /**
     * Set fileSize
     *
     * @param integer $fileSize
     *
     * @return TbmFile
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
     * Set filePath
     *
     * @param string $filePath
     *
     * @return TbmFile
     */
    public function setFilePath($filePath) {
        $this->filePath = $filePath;

        return $this;
    }

    /**
     * Get filePath
     *
     * @return string
     */
    public function getFilePath() {
        return $this->filePath;
    }

    /**
     * Get fileId
     *
     * @return integer
     */
    public function getFileId() {
        return $this->fileId;
    }

}
