<?php

namespace AppBundle\Entity;

/**
 * TbmMessagePhoto
 */
class TbmMessagePhoto extends TbmEntity {

    public function __construct(\ArrayAccess $params) {
        parent::__construct($params);
    }

    /**
     * @var integer
     */
    private $messageMessageId;

    /**
     * @var integer
     */
    private $photosizeFileId;

    /**
     * Set messageMessageId
     *
     * @param integer $messageMessageId
     *
     * @return TbmMessagePhoto
     */
    public function setMessageMessageId($messageMessageId) {
        $this->messageMessageId = $messageMessageId;

        return $this;
    }

    /**
     * Get messageMessageId
     *
     * @return integer
     */
    public function getMessageMessageId() {
        return $this->messageMessageId;
    }

    /**
     * Set photosizeFileId
     *
     * @param integer $photosizeFileId
     *
     * @return TbmMessagePhoto
     */
    public function setPhotosizeFileId($photosizeFileId) {
        $this->photosizeFileId = $photosizeFileId;

        return $this;
    }

    /**
     * Get photosizeFileId
     *
     * @return integer
     */
    public function getPhotosizeFileId() {
        return $this->photosizeFileId;
    }

}
