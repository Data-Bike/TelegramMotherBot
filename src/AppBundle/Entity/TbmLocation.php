<?php

namespace AppBundle\Entity;

/**
 * TbmLocation
 */
class TbmLocation extends TbmEntity {

    public function __construct(\ArrayAccess $params) {
        parent::__construct($params);
    }

    /**
     * @var float
     */
    private $longitude;

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var \AppBundle\Entity\TbmVenue
     */
    private $id;

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return TbmLocation
     */
    public function setLongitude($longitude) {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude() {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return TbmLocation
     */
    public function setLatitude($latitude) {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude() {
        return $this->latitude;
    }

    /**
     * Set id
     *
     * @param \AppBundle\Entity\TbmVenue $id
     *
     * @return TbmLocation
     */
    public function setId(\AppBundle\Entity\TbmVenue $id) {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return \AppBundle\Entity\TbmVenue
     */
    public function getId() {
        return $this->id;
    }

}
