<?php

namespace AppBundle\Entity;

/**
 * TbmKeyboardbutton
 */
class TbmKeyboardbutton
{
    /**
     * @var string
     */
    private $text;

    /**
     * @var boolean
     */
    private $requestContact;

    /**
     * @var boolean
     */
    private $requestLocation;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $replykeyboardmarkup;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->replykeyboardmarkup = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return TbmKeyboardbutton
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set requestContact
     *
     * @param boolean $requestContact
     *
     * @return TbmKeyboardbutton
     */
    public function setRequestContact($requestContact)
    {
        $this->requestContact = $requestContact;

        return $this;
    }

    /**
     * Get requestContact
     *
     * @return boolean
     */
    public function getRequestContact()
    {
        return $this->requestContact;
    }

    /**
     * Set requestLocation
     *
     * @param boolean $requestLocation
     *
     * @return TbmKeyboardbutton
     */
    public function setRequestLocation($requestLocation)
    {
        $this->requestLocation = $requestLocation;

        return $this;
    }

    /**
     * Get requestLocation
     *
     * @return boolean
     */
    public function getRequestLocation()
    {
        return $this->requestLocation;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add replykeyboardmarkup
     *
     * @param \AppBundle\Entity\TbmReplykeyboardmarkup $replykeyboardmarkup
     *
     * @return TbmKeyboardbutton
     */
    public function addReplykeyboardmarkup(\AppBundle\Entity\TbmReplykeyboardmarkup $replykeyboardmarkup)
    {
        $this->replykeyboardmarkup[] = $replykeyboardmarkup;

        return $this;
    }

    /**
     * Remove replykeyboardmarkup
     *
     * @param \AppBundle\Entity\TbmReplykeyboardmarkup $replykeyboardmarkup
     */
    public function removeReplykeyboardmarkup(\AppBundle\Entity\TbmReplykeyboardmarkup $replykeyboardmarkup)
    {
        $this->replykeyboardmarkup->removeElement($replykeyboardmarkup);
    }

    /**
     * Get replykeyboardmarkup
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReplykeyboardmarkup()
    {
        return $this->replykeyboardmarkup;
    }
}

