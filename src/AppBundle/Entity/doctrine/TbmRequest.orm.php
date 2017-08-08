<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'tbm_request',
   'indexes' => 
   array(
   'message' => 
   array(
    'columns' => 
    array(
    0 => 'message',
    ),
   ),
   'edited_message' => 
   array(
    'columns' => 
    array(
    0 => 'edited_message',
    ),
   ),
   ),
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'updateId',
   'columnName' => 'update_id',
   'type' => 'integer',
   'nullable' => false,
   'options' => 
   array(
   'unsigned' => true,
   ),
   'id' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'message',
   'columnName' => 'message',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => true,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'editedMessage',
   'columnName' => 'edited_message',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => true,
   ),
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);