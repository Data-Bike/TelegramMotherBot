<?php

namespace AppBundle\Entity;

/**
 * TbmMessageNewChatMembers
 */
class TbmMessageNewChatMembers extends TbmEntity {

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
    private $userId;

    /**
     * Set messageMessageId
     *
     * @param integer $messageMessageId
     *
     * @return TbmMessageNewChatMembers
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
     * Set userId
     *
     * @param integer $userId
     *
     * @return TbmMessageNewChatMembers
     */
    public function setUserId($userId) {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId() {
        return $this->userId;
    }

}
