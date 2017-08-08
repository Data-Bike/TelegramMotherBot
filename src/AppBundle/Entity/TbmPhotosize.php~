<?php

namespace AppBundle\Entity;

/**
 * TbmPhotosize
 */
class TbmPhotosize
{
    /**
     * @var integer
     */
    private $width;

    /**
     * @var integer
     */
    private $height;

    /**
     * @var integer
     */
    private $fileSize;

    /**
     * @var \AppBundle\Entity\TbmVideonote
     */
    private $file;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $messageMessage;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $userprofilephotos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->messageMessage = new \Doctrine\Common\Collections\ArrayCollection();
        $this->userprofilephotos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set width
     *
     * @param integer $width
     *
     * @return TbmPhotosize
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     *
     * @return TbmPhotosize
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set fileSize
     *
     * @param integer $fileSize
     *
     * @return TbmPhotosize
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;

        return $this;
    }

    /**
     * Get fileSize
     *
     * @return integer
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * Set file
     *
     * @param \AppBundle\Entity\TbmVideonote $file
     *
     * @return TbmPhotosize
     */
    public function setFile(\AppBundle\Entity\TbmVideonote $file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return \AppBundle\Entity\TbmVideonote
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Add messageMessage
     *
     * @param \AppBundle\Entity\TbmMessage $messageMessage
     *
     * @return TbmPhotosize
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

    /**
     * Add userprofilephoto
     *
     * @param \AppBundle\Entity\TbmUserprofilephotos $userprofilephoto
     *
     * @return TbmPhotosize
     */
    public function addUserprofilephoto(\AppBundle\Entity\TbmUserprofilephotos $userprofilephoto)
    {
        $this->userprofilephotos[] = $userprofilephoto;

        return $this;
    }

    /**
     * Remove userprofilephoto
     *
     * @param \AppBundle\Entity\TbmUserprofilephotos $userprofilephoto
     */
    public function removeUserprofilephoto(\AppBundle\Entity\TbmUserprofilephotos $userprofilephoto)
    {
        $this->userprofilephotos->removeElement($userprofilephoto);
    }

    /**
     * Get userprofilephotos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUserprofilephotos()
    {
        return $this->userprofilephotos;
    }
}

