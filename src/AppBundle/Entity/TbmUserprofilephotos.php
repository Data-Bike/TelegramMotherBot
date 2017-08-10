<?php

namespace AppBundle\Entity;

/**
 * TbmUserprofilephotos
 */
class TbmUserprofilephotos extends TbmEntity {

    public function __construct(\ArrayAccess $params) {
        $this->photosizeFile = new \Doctrine\Common\Collections\ArrayCollection();
        parent::__construct($params);
    }

    /**
     * @var integer
     */
    private $totalCount;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $photosizeFile;

    /**
     * Set totalCount
     *
     * @param integer $totalCount
     *
     * @return TbmUserprofilephotos
     */
    public function setTotalCount($totalCount) {
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * Get totalCount
     *
     * @return integer
     */
    public function getTotalCount() {
        return $this->totalCount;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Add photosizeFile
     *
     * @param \AppBundle\Entity\TbmPhotosize $photosizeFile
     *
     * @return TbmUserprofilephotos
     */
    public function addPhotosizeFile(\AppBundle\Entity\TbmPhotosize $photosizeFile) {
        $this->photosizeFile[] = $photosizeFile;

        return $this;
    }

    /**
     * Remove photosizeFile
     *
     * @param \AppBundle\Entity\TbmPhotosize $photosizeFile
     */
    public function removePhotosizeFile(\AppBundle\Entity\TbmPhotosize $photosizeFile) {
        $this->photosizeFile->removeElement($photosizeFile);
    }

    /**
     * Get photosizeFile
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhotosizeFile() {
        return $this->photosizeFile;
    }

}
