<?php

namespace AppBundle\Entity;

/**
 * TbmChat
 */
class TbmMessage extends TbmEntity {

    public function __construct(\ArrayAccess $params) {
        parent::__construct($params);
    }

    /**
     * @var int
     */
    private $id;

    /**
     * @var \AppBundle\Entity\TbmUser
     */
    private $from;

    /**
     * @var \datetime
     */
    private $date;

    /**
     * @var \AppBundle\Entity\TbmChat
     */
    private $chat;

    /**
     * @var \datetime
     */
    private $edit_date;

    /**
     * @var string
     */
    private $text;

    /**
     * @var \AppBundle\Entity\TbmUser
     */
    private $forward_from;

    /**
     * @var \AppBundle\Entity\TbmChat
     */
    private $forward_from_chat;

    /**
     * @var \AppBundle\Entity\TbmMessage
     */
    private $forward_from_message_id;

    /**
     * @var datetime
     */
    private $forward_date;

    /**
     * @var \AppBundle\Entity\TbmMessage
     */
    private $reply_to_message;

    /**
     * @var \AppBundle\Entity\TbmAudio
     */
    private $audio;

    /**
     * @var \AppBundle\Entity\TbmDocument
     */
    private $document;

    /**
     * @var int
     */
    private $game;

    /**
     * @var int
     */
    private $sticker;

    /**
     * @var \AppBundle\Entity\TbmVideo
     */
    private $video;

    /**
     * @var \AppBundle\Entity\TbmVoice
     */
    private $voice;

    /**
     * @var \AppBundle\Entity\TbmVideonote
     */
    private $video_note;

    /**
     * @var string
     */
    private $caption;

    /**
     * @var \AppBundle\Entity\TbmContact
     */
    private $contact;

    /**
     * @var \AppBundle\Entity\TbmLocation
     */
    private $location;

    /**
     * @var \AppBundle\Entity\TbmVenue
     */
    private $venue;

    /**
     * @var \AppBundle\Entity\TbmUser
     */
    private $new_chat_member;

    /**
     * @var \AppBundle\Entity\TbmUser
     */
    private $left_chat_member;

    /**
     * @var string
     */
    private $new_chat_title;

    /**
     * @var boolean
     */
    private $delete_chat_photo;

    /**
     * @var boolean
     */
    private $group_chat_created;

    /**
     * @var boolean
     */
    private $supergroup_chat_created;

    /**
     * @var boolean
     */
    private $channel_chat_created;

    /**
     * @var \AppBundle\Entity\TbmChat
     */
    private $migrate_to_chat_id;

    /**
     * @var \AppBundle\Entity\TbmChat
     */
    private $migrate_from_chat_id;

    /**
     * @var \AppBundle\Entity\TbmMessage
     */
    private $pinned_message;

    /**
     * @var int
     */
    private $invoice;

    /**
     * @var int
     */
    private $successful_payment;

    function getId() {
        return $this->id;
    }

    function getFrom(): \AppBundle\Entity\TbmUser {
        return $this->from;
    }

    function getDate(): \datetime {
        return $this->date;
    }

    function getChat(): \AppBundle\Entity\TbmChat {
        return $this->chat;
    }

    function getEdit_date(): \datetime {
        return $this->edit_date;
    }

    function getText() {
        return $this->text;
    }

    function getForward_from(): \AppBundle\Entity\TbmUser {
        return $this->forward_from;
    }

    function getForward_from_chat(): \AppBundle\Entity\TbmChat {
        return $this->forward_from_chat;
    }

    function getForward_from_message_id(): \AppBundle\Entity\TbmMessage {
        return $this->forward_from_message_id;
    }

    function getForward_date(): datetime {
        return $this->forward_date;
    }

    function getReply_to_message(): \AppBundle\Entity\TbmMessage {
        return $this->reply_to_message;
    }

    function getAudio(): \AppBundle\Entity\TbmAudio {
        return $this->audio;
    }

    function getDocument(): \AppBundle\Entity\TbmDocument {
        return $this->document;
    }

    function getGame() {
        return $this->game;
    }

    function getSticker() {
        return $this->sticker;
    }

    function getVideo(): \AppBundle\Entity\TbmVideo {
        return $this->video;
    }

    function getVoice(): \AppBundle\Entity\TbmVoice {
        return $this->voice;
    }

    function getVideo_note(): \AppBundle\Entity\TbmVideonote {
        return $this->video_note;
    }

    function getCaption() {
        return $this->caption;
    }

    function getContact(): \AppBundle\Entity\TbmContact {
        return $this->contact;
    }

    function getLocation(): \AppBundle\Entity\TbmLocation {
        return $this->location;
    }

    function getVenue(): \AppBundle\Entity\TbmVenue {
        return $this->venue;
    }

    function getNew_chat_member(): \AppBundle\Entity\TbmUser {
        return $this->new_chat_member;
    }

    function getLeft_chat_member(): \AppBundle\Entity\TbmUser {
        return $this->left_chat_member;
    }

    function getNew_chat_title() {
        return $this->new_chat_title;
    }

    function getDelete_chat_photo() {
        return $this->delete_chat_photo;
    }

    function getGroup_chat_created() {
        return $this->group_chat_created;
    }

    function getSupergroup_chat_created() {
        return $this->supergroup_chat_created;
    }

    function getChannel_chat_created() {
        return $this->channel_chat_created;
    }

    function getMigrate_to_chat_id(): \AppBundle\Entity\TbmChat {
        return $this->migrate_to_chat_id;
    }

    function getMigrate_from_chat_id(): \AppBundle\Entity\TbmChat {
        return $this->migrate_from_chat_id;
    }

    function getPinned_message(): \AppBundle\Entity\TbmMessage {
        return $this->pinned_message;
    }

    function getInvoice() {
        return $this->invoice;
    }

    function getSuccessful_payment() {
        return $this->successful_payment;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setFrom(\AppBundle\Entity\TbmUser $from) {
        $this->from = $from;
    }

    function setDate(\datetime $date) {
        $this->date = $date;
    }

    function setChat(\AppBundle\Entity\TbmChat $chat) {
        $this->chat = $chat;
    }

    function setEdit_date(\datetime $edit_date) {
        $this->edit_date = $edit_date;
    }

    function setText($text) {
        $this->text = $text;
    }

    function setForward_from(\AppBundle\Entity\TbmUser $forward_from) {
        $this->forward_from = $forward_from;
    }

    function setForward_from_chat(\AppBundle\Entity\TbmChat $forward_from_chat) {
        $this->forward_from_chat = $forward_from_chat;
    }

    function setForward_from_message_id(\AppBundle\Entity\TbmMessage $forward_from_message_id) {
        $this->forward_from_message_id = $forward_from_message_id;
    }

    function setForward_date(datetime $forward_date) {
        $this->forward_date = $forward_date;
    }

    function setReply_to_message(\AppBundle\Entity\TbmMessage $reply_to_message) {
        $this->reply_to_message = $reply_to_message;
    }

    function setAudio(\AppBundle\Entity\TbmAudio $audio) {
        $this->audio = $audio;
    }

    function setDocument(\AppBundle\Entity\TbmDocument $document) {
        $this->document = $document;
    }

    function setGame($game) {
        $this->game = $game;
    }

    function setSticker($sticker) {
        $this->sticker = $sticker;
    }

    function setVideo(\AppBundle\Entity\TbmVideo $video) {
        $this->video = $video;
    }

    function setVoice(\AppBundle\Entity\TbmVoice $voice) {
        $this->voice = $voice;
    }

    function setVideo_note(\AppBundle\Entity\TbmVideonote $video_note) {
        $this->video_note = $video_note;
    }

    function setCaption($caption) {
        $this->caption = $caption;
    }

    function setContact(\AppBundle\Entity\TbmContact $contact) {
        $this->contact = $contact;
    }

    function setLocation(\AppBundle\Entity\TbmLocation $location) {
        $this->location = $location;
    }

    function setVenue(\AppBundle\Entity\TbmVenue $venue) {
        $this->venue = $venue;
    }

    function setNew_chat_member(\AppBundle\Entity\TbmUser $new_chat_member) {
        $this->new_chat_member = $new_chat_member;
    }

    function setLeft_chat_member(\AppBundle\Entity\TbmUser $left_chat_member) {
        $this->left_chat_member = $left_chat_member;
    }

    function setNew_chat_title($new_chat_title) {
        $this->new_chat_title = $new_chat_title;
    }

    function setDelete_chat_photo($delete_chat_photo) {
        $this->delete_chat_photo = $delete_chat_photo;
    }

    function setGroup_chat_created($group_chat_created) {
        $this->group_chat_created = $group_chat_created;
    }

    function setSupergroup_chat_created($supergroup_chat_created) {
        $this->supergroup_chat_created = $supergroup_chat_created;
    }

    function setChannel_chat_created($channel_chat_created) {
        $this->channel_chat_created = $channel_chat_created;
    }

    function setMigrate_to_chat_id(\AppBundle\Entity\TbmChat $migrate_to_chat_id) {
        $this->migrate_to_chat_id = $migrate_to_chat_id;
    }

    function setMigrate_from_chat_id(\AppBundle\Entity\TbmChat $migrate_from_chat_id) {
        $this->migrate_from_chat_id = $migrate_from_chat_id;
    }

    function setPinned_message(\AppBundle\Entity\TbmMessage $pinned_message) {
        $this->pinned_message = $pinned_message;
    }

    function setInvoice($invoice) {
        $this->invoice = $invoice;
    }

    function setSuccessful_payment($successful_payment) {
        $this->successful_payment = $successful_payment;
    }

}
