<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'tbm_chatmember',
   'uniqueConstraints' => 
   array(
   'id_UNIQUE' => 
   array(
    'columns' => 
    array(
    0 => 'id',
    ),
   ),
   ),
   'indexes' => 
   array(
   'user' => 
   array(
    'columns' => 
    array(
    0 => 'user',
    ),
   ),
   ),
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'columnName' => 'id',
   'type' => 'integer',
   'nullable' => false,
   'options' => 
   array(
   'unsigned' => true,
   ),
   'id' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'user',
   'columnName' => 'user',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => true,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'status',
   'columnName' => 'status',
   'type' => 'string',
   'nullable' => true,
   'length' => 45,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'untilDate',
   'columnName' => 'until_date',
   'type' => 'datetime',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'canBeEdited',
   'columnName' => 'can_be_edited',
   'type' => 'boolean',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'canChangeInfo',
   'columnName' => 'can_change_info',
   'type' => 'boolean',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'canPostMessages',
   'columnName' => 'can_post_messages',
   'type' => 'boolean',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'canEditMessages',
   'columnName' => 'can_edit_messages',
   'type' => 'boolean',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'canDeleteMessages',
   'columnName' => 'can_delete_messages',
   'type' => 'boolean',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'canInviteUsers',
   'columnName' => 'can_invite_users',
   'type' => 'boolean',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'canRestrictMembers',
   'columnName' => 'can_restrict_members',
   'type' => 'boolean',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'canPinMessages',
   'columnName' => 'can_pin_messages',
   'type' => 'boolean',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'canPromoteMembers',
   'columnName' => 'can_promote_members',
   'type' => 'boolean',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'canSendMessages',
   'columnName' => 'can_send_messages',
   'type' => 'boolean',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'canSendMediaMessages',
   'columnName' => 'can_send_media_messages',
   'type' => 'boolean',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'canSendOtherMessages',
   'columnName' => 'can_send_other_messages',
   'type' => 'boolean',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'canAddWebPagePreviews',
   'columnName' => 'can_add_web_page_previews',
   'type' => 'boolean',
   'nullable' => true,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);