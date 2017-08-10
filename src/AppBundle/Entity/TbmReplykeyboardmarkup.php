<?php

namespace AppBundle\Entity;

/**
 * TbmReplykeyboardmarkup
 */
class TbmReplykeyboardmarkup extends TbmEntity {

    public function __construct(\ArrayAccess $params) {
        $this->keyboardbutton = new \Doctrine\Common\Collections\ArrayCollection();
        parent::__construct($params);
    }

    /**
     * @var boolean
     */
    private $resizeKeyboard;

    /**
     * @var boolean
     */
    private $oneTimeKeyboard;

    /**
     * @var boolean
     */
    private $selective;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $keyboardbutton;

    /**
     * Set resizeKeyboard
     *
     * @param boolean $resizeKeyboard
     *
     * @return TbmReplykeyboardmarkup
     */
    public function setResizeKeyboard($resizeKeyboard) {
        $this->resizeKeyboard = $resizeKeyboard;

        return $this;
    }

    /**
     * Get resizeKeyboard
     *
     * @return boolean
     */
    public function getResizeKeyboard() {
        return $this->resizeKeyboard;
    }

    /**
     * Set oneTimeKeyboard
     *
     * @param boolean $oneTimeKeyboard
     *
     * @return TbmReplykeyboardmarkup
     */
    public function setOneTimeKeyboard($oneTimeKeyboard) {
        $this->oneTimeKeyboard = $oneTimeKeyboard;

        return $this;
    }

    /**
     * Get oneTimeKeyboard
     *
     * @return boolean
     */
    public function getOneTimeKeyboard() {
        return $this->oneTimeKeyboard;
    }

    /**
     * Set selective
     *
     * @param boolean $selective
     *
     * @return TbmReplykeyboardmarkup
     */
    public function setSelective($selective) {
        $this->selective = $selective;

        return $this;
    }

    /**
     * Get selective
     *
     * @return boolean
     */
    public function getSelective() {
        return $this->selective;
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
     * Add keyboardbutton
     *
     * @param \AppBundle\Entity\TbmKeyboardbutton $keyboardbutton
     *
     * @return TbmReplykeyboardmarkup
     */
    public function addKeyboardbutton(\AppBundle\Entity\TbmKeyboardbutton $keyboardbutton) {
        $this->keyboardbutton[] = $keyboardbutton;

        return $this;
    }

    /**
     * Remove keyboardbutton
     *
     * @param \AppBundle\Entity\TbmKeyboardbutton $keyboardbutton
     */
    public function removeKeyboardbutton(\AppBundle\Entity\TbmKeyboardbutton $keyboardbutton) {
        $this->keyboardbutton->removeElement($keyboardbutton);
    }

    /**
     * Get keyboardbutton
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getKeyboardbutton() {
        return $this->keyboardbutton;
    }

}
