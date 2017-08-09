<?php

namespace AppBundle\Entity;

/**
 * TbmUserprofilephotosHasPhotosize
 */
class TbmUserprofilephotosHasPhotosize
{
    /**
     * @var integer
     */
    private $row;

    /**
     * @var integer
     */
    private $userprofilephotosId;

    /**
     * @var integer
     */
    private $photosizeFileId;


    /**
     * Set row
     *
     * @param integer $row
     *
     * @return TbmUserprofilephotosHasPhotosize
     */
    public function setRow($row)
    {
        $this->row = $row;

        return $this;
    }

    /**
     * Get row
     *
     * @return integer
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * Set userprofilephotosId
     *
     * @param integer $userprofilephotosId
     *
     * @return TbmUserprofilephotosHasPhotosize
     */
    public function setUserprofilephotosId($userprofilephotosId)
    {
        $this->userprofilephotosId = $userprofilephotosId;

        return $this;
    }

    /**
     * Get userprofilephotosId
     *
     * @return integer
     */
    public function getUserprofilephotosId()
    {
        return $this->userprofilephotosId;
    }

    /**
     * Set photosizeFileId
     *
     * @param integer $photosizeFileId
     *
     * @return TbmUserprofilephotosHasPhotosize
     */
    public function setPhotosizeFileId($photosizeFileId)
    {
        $this->photosizeFileId = $photosizeFileId;

        return $this;
    }

    /**
     * Get photosizeFileId
     *
     * @return integer
     */
    public function getPhotosizeFileId()
    {
        return $this->photosizeFileId;
    }
}

