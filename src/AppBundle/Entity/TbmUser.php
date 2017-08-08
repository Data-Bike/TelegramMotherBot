<?php

namespace AppBundle\Entity;

/**
 * TbmUser
 */
class TbmUser
{
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $languageCode;

    /**
     * @var string
     */
    private $username;

    /**
     * @var \AppBundle\Entity\TbmMessage
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $messageMessage;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->messageMessage = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return TbmUser
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return TbmUser
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set languageCode
     *
     * @param string $languageCode
     *
     * @return TbmUser
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    /**
     * Get languageCode
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return TbmUser
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set id
     *
     * @param \AppBundle\Entity\TbmMessage $id
     *
     * @return TbmUser
     */
    public function setId(\AppBundle\Entity\TbmMessage $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return \AppBundle\Entity\TbmMessage
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add messageMessage
     *
     * @param \AppBundle\Entity\TbmMessage $messageMessage
     *
     * @return TbmUser
     */
    public function addMessageMessage(\AppBundle\Entity\TbmMessage $messageMessage)
    {
        $this->messageMessage[] = $messageMessage;

        return $this;
    }

    /**
     * Remove messageMessage
     *
     * @param \AppBundle\Entity\TbmMessage $messageMessage
     */
    public function removeMessageMessage(\AppBundle\Entity\TbmMessage $messageMessage)
    {
        $this->messageMessage->removeElement($messageMessage);
    }

    /**
     * Get messageMessage
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMessageMessage()
    {
        return $this->messageMessage;
    }
}

