<?php

namespace AppBundle\Entity;

/**
 * TbmRequest
 */
class TbmRequest
{
    /**
     * @var integer
     */
    private $message;

    /**
     * @var integer
     */
    private $editedMessage;

    /**
     * @var integer
     */
    private $updateId;


    /**
     * Set message
     *
     * @param integer $message
     *
     * @return TbmRequest
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return integer
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set editedMessage
     *
     * @param integer $editedMessage
     *
     * @return TbmRequest
     */
    public function setEditedMessage($editedMessage)
    {
        $this->editedMessage = $editedMessage;

        return $this;
    }

    /**
     * Get editedMessage
     *
     * @return integer
     */
    public function getEditedMessage()
    {
        return $this->editedMessage;
    }

    /**
     * Get updateId
     *
     * @return integer
     */
    public function getUpdateId()
    {
        return $this->updateId;
    }
}

