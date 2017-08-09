<?php

namespace AppBundle\Entity;

/**
 * TbmInlinekeyboardbutton
 */
class TbmInlinekeyboardbutton
{
    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $callbackData;

    /**
     * @var string
     */
    private $switchInlineQuery;

    /**
     * @var string
     */
    private $switchInlineQueryCurrentChat;

    /**
     * @var integer
     */
    private $callbackGame;

    /**
     * @var boolean
     */
    private $pay;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $inlinekeyboardmarkup;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->inlinekeyboardmarkup = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return TbmInlinekeyboardbutton
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
     * Set url
     *
     * @param string $url
     *
     * @return TbmInlinekeyboardbutton
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set callbackData
     *
     * @param string $callbackData
     *
     * @return TbmInlinekeyboardbutton
     */
    public function setCallbackData($callbackData)
    {
        $this->callbackData = $callbackData;

        return $this;
    }

    /**
     * Get callbackData
     *
     * @return string
     */
    public function getCallbackData()
    {
        return $this->callbackData;
    }

    /**
     * Set switchInlineQuery
     *
     * @param string $switchInlineQuery
     *
     * @return TbmInlinekeyboardbutton
     */
    public function setSwitchInlineQuery($switchInlineQuery)
    {
        $this->switchInlineQuery = $switchInlineQuery;

        return $this;
    }

    /**
     * Get switchInlineQuery
     *
     * @return string
     */
    public function getSwitchInlineQuery()
    {
        return $this->switchInlineQuery;
    }

    /**
     * Set switchInlineQueryCurrentChat
     *
     * @param string $switchInlineQueryCurrentChat
     *
     * @return TbmInlinekeyboardbutton
     */
    public function setSwitchInlineQueryCurrentChat($switchInlineQueryCurrentChat)
    {
        $this->switchInlineQueryCurrentChat = $switchInlineQueryCurrentChat;

        return $this;
    }

    /**
     * Get switchInlineQueryCurrentChat
     *
     * @return string
     */
    public function getSwitchInlineQueryCurrentChat()
    {
        return $this->switchInlineQueryCurrentChat;
    }

    /**
     * Set callbackGame
     *
     * @param integer $callbackGame
     *
     * @return TbmInlinekeyboardbutton
     */
    public function setCallbackGame($callbackGame)
    {
        $this->callbackGame = $callbackGame;

        return $this;
    }

    /**
     * Get callbackGame
     *
     * @return integer
     */
    public function getCallbackGame()
    {
        return $this->callbackGame;
    }

    /**
     * Set pay
     *
     * @param boolean $pay
     *
     * @return TbmInlinekeyboardbutton
     */
    public function setPay($pay)
    {
        $this->pay = $pay;

        return $this;
    }

    /**
     * Get pay
     *
     * @return boolean
     */
    public function getPay()
    {
        return $this->pay;
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
     * Add inlinekeyboardmarkup
     *
     * @param \AppBundle\Entity\TbmInlinekeyboardmarkup $inlinekeyboardmarkup
     *
     * @return TbmInlinekeyboardbutton
     */
    public function addInlinekeyboardmarkup(\AppBundle\Entity\TbmInlinekeyboardmarkup $inlinekeyboardmarkup)
    {
        $this->inlinekeyboardmarkup[] = $inlinekeyboardmarkup;

        return $this;
    }

    /**
     * Remove inlinekeyboardmarkup
     *
     * @param \AppBundle\Entity\TbmInlinekeyboardmarkup $inlinekeyboardmarkup
     */
    public function removeInlinekeyboardmarkup(\AppBundle\Entity\TbmInlinekeyboardmarkup $inlinekeyboardmarkup)
    {
        $this->inlinekeyboardmarkup->removeElement($inlinekeyboardmarkup);
    }

    /**
     * Get inlinekeyboardmarkup
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInlinekeyboardmarkup()
    {
        return $this->inlinekeyboardmarkup;
    }
}

