<?php

namespace AppBundle\Entity;

/**
 * TbmInlinekeyboardmarkup
 */
class TbmInlinekeyboardmarkup
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $inlinekeyboardbutton;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->inlinekeyboardbutton = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add inlinekeyboardbutton
     *
     * @param \AppBundle\Entity\TbmInlinekeyboardbutton $inlinekeyboardbutton
     *
     * @return TbmInlinekeyboardmarkup
     */
    public function addInlinekeyboardbutton(\AppBundle\Entity\TbmInlinekeyboardbutton $inlinekeyboardbutton)
    {
        $this->inlinekeyboardbutton[] = $inlinekeyboardbutton;

        return $this;
    }

    /**
     * Remove inlinekeyboardbutton
     *
     * @param \AppBundle\Entity\TbmInlinekeyboardbutton $inlinekeyboardbutton
     */
    public function removeInlinekeyboardbutton(\AppBundle\Entity\TbmInlinekeyboardbutton $inlinekeyboardbutton)
    {
        $this->inlinekeyboardbutton->removeElement($inlinekeyboardbutton);
    }

    /**
     * Get inlinekeyboardbutton
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInlinekeyboardbutton()
    {
        return $this->inlinekeyboardbutton;
    }
}

