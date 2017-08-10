<?php

namespace AppBundle\Entity;

/**
 * TbmChat
 */
class TbmChat extends TbmEntity {

    public function __construct(\ArrayAccess $params) {
        parent::__construct($params);
    }

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $username;

    /**
     * @var boolean
     */
    private $allMembersAreAdministrators;

    /**
     * @var integer
     */
    private $photo;

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
    private $description;

    /**
     * @var string
     */
    private $inviteLink;

    /**
     * @var \AppBundle\Entity\TbmMessage
     */
    private $chat;

    /**
     * Set type
     *
     * @param string $type
     *
     * @return TbmChat
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return TbmChat
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return TbmChat
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set allMembersAreAdministrators
     *
     * @param boolean $allMembersAreAdministrators
     *
     * @return TbmChat
     */
    public function setAllMembersAreAdministrators($allMembersAreAdministrators) {
        $this->allMembersAreAdministrators = $allMembersAreAdministrators;

        return $this;
    }

    /**
     * Get allMembersAreAdministrators
     *
     * @return boolean
     */
    public function getAllMembersAreAdministrators() {
        return $this->allMembersAreAdministrators;
    }

    /**
     * Set photo
     *
     * @param integer $photo
     *
     * @return TbmChat
     */
    public function setPhoto($photo) {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return integer
     */
    public function getPhoto() {
        return $this->photo;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return TbmChat
     */
    public function setFirstName($firstName) {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return TbmChat
     */
    public function setLastName($lastName) {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName() {
        return $this->lastName;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return TbmChat
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set inviteLink
     *
     * @param string $inviteLink
     *
     * @return TbmChat
     */
    public function setInviteLink($inviteLink) {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    /**
     * Get inviteLink
     *
     * @return string
     */
    public function getInviteLink() {
        return $this->inviteLink;
    }

    /**
     * Set chat
     *
     * @param \AppBundle\Entity\TbmMessage $chat
     *
     * @return TbmChat
     */
    public function setChat(\AppBundle\Entity\TbmMessage $chat) {
        $this->chat = $chat;

        return $this;
    }

    /**
     * Get chat
     *
     * @return \AppBundle\Entity\TbmMessage
     */
    public function getChat() {
        return $this->chat;
    }

    /**
     * @var integer
     */
    private $chatId;

    /**
     * Get chatId
     *
     * @return integer
     */
    public function getChatId() {
        return $this->chatId;
    }

}
