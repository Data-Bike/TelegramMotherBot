<?php

namespace AppBundle\Entity;

/**
 * TbmResponseparameters
 */
class TbmResponseparameters extends TbmEntity {

    public function __construct(\ArrayAccess $params) {
        parent::__construct($params);
    }

    /**
     * @var integer
     */
    private $migrateToChatId;

    /**
     * @var integer
     */
    private $retryAfter;

    /**
     * @var integer
     */
    private $id;

    /**
     * Set migrateToChatId
     *
     * @param integer $migrateToChatId
     *
     * @return TbmResponseparameters
     */
    public function setMigrateToChatId($migrateToChatId) {
        $this->migrateToChatId = $migrateToChatId;

        return $this;
    }

    /**
     * Get migrateToChatId
     *
     * @return integer
     */
    public function getMigrateToChatId() {
        return $this->migrateToChatId;
    }

    /**
     * Set retryAfter
     *
     * @param integer $retryAfter
     *
     * @return TbmResponseparameters
     */
    public function setRetryAfter($retryAfter) {
        $this->retryAfter = $retryAfter;

        return $this;
    }

    /**
     * Get retryAfter
     *
     * @return integer
     */
    public function getRetryAfter() {
        return $this->retryAfter;
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
