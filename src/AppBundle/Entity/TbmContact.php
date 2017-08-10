<?php

namespace AppBundle\Entity;

/**
 * TbmContact
 */
class TbmContact extends TbmEntity {

    public function __construct(\ArrayAccess $params) {
        parent::__construct($params);
    }

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var \AppBundle\Entity\TbmMessage
     */
    private $id;

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return TbmContact
     */
    public function setPhoneNumber($phoneNumber) {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return TbmContact
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
     * @return TbmContact
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
     * Set userId
     *
     * @param integer $userId
     *
     * @return TbmContact
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

    /**
     * Set id
     *
     * @param \AppBundle\Entity\TbmMessage $id
     *
     * @return TbmContact
     */
    public function setId(\AppBundle\Entity\TbmMessage $id) {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return \AppBundle\Entity\TbmMessage
     */
    public function getId() {
        return $this->id;
    }

}
