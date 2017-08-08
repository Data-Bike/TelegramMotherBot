<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'tbm_chat',
   'uniqueConstraints' => 
   array(
   'id_UNIQUE' => 
   array(
    'columns' => 
    array(
    0 => 'chat_id',
    ),
   ),
   ),
   'indexes' => 
   array(
   'photo' => 
   array(
    'columns' => 
    array(
    0 => 'photo',
    ),
   ),
   ),
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'type',
   'columnName' => 'type',
   'type' => 'string',
   'nullable' => true,
   'length' => 45,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'title',
   'columnName' => 'title',
   'type' => 'string',
   'nullable' => true,
   'length' => 45,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'username',
   'columnName' => 'username',
   'type' => 'string',
   'nullable' => true,
   'length' => 45,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'allMembersAreAdministrators',
   'columnName' => 'all_members_are_administrators',
   'type' => 'boolean',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'photo',
   'columnName' => 'photo',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => true,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'firstName',
   'columnName' => 'first_name',
   'type' => 'string',
   'nullable' => true,
   'length' => 45,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'lastName',
   'columnName' => 'last_name',
   'type' => 'string',
   'nullable' => true,
   'length' => 45,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'description',
   'columnName' => 'description',
   'type' => 'string',
   'nullable' => true,
   'length' => 45,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'inviteLink',
   'columnName' => 'invite_link',
   'type' => 'string',
   'nullable' => true,
   'length' => 45,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapOneToOne(array(
   'fieldName' => 'chat',
   'targetEntity' => 'TbmMessage',
   'cascade' => 
   array(
   ),
   'fetch' => 2,
   'mappedBy' => NULL,
   'inversedBy' => NULL,
   'joinColumns' => 
   array(
   0 => 
   array(
    'name' => 'chat_id',
    'referencedColumnName' => 'forward_from_chat',
   ),
   ),
   'orphanRemoval' => false,
  ));