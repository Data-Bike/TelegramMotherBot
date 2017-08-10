<?php

namespace AppBundle\Entity;

/**
 * TbmVenue
 */
class TbmVenue extends TbmEntity {

    public function __construct(\ArrayAccess $params) {
        parent::__construct($params);
    }

    /**
     * @var integer
     */
    private $location;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $foursquareId;

    /**
     * @var integer
     */
    private $id;

    /**
     * Set location
     *
     * @param integer $location
     *
     * @return TbmVenue
     */
    public function setLocation($location) {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return integer
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return TbmVenue
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
     * Set address
     *
     * @param string $address
     *
     * @return TbmVenue
     */
    public function setAddress($address) {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * Set foursquareId
     *
     * @param string $foursquareId
     *
     * @return TbmVenue
     */
    public function setFoursquareId($foursquareId) {
        $this->foursquareId = $foursquareId;

        return $this;
    }

    /**
     * Get foursquareId
     *
     * @return string
     */
    public function getFoursquareId() {
        return $this->foursquareId;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

}
