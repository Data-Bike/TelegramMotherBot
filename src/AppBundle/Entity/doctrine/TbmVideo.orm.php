<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'tbm_video',
   'indexes' => 
   array(
   'thumb' => 
   array(
    'columns' => 
    array(
    0 => 'thumb',
    ),
   ),
   ),
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'width',
   'columnName' => 'width',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'height',
   'columnName' => 'height',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'duration',
   'columnName' => 'duration',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'thumb',
   'columnName' => 'thumb',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => true,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'mimeType',
   'columnName' => 'mime_type',
   'type' => 'string',
   'nullable' => true,
   'length' => 45,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'fileSize',
   'columnName' => 'file_size',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->mapOneToOne(array(
   'fieldName' => 'file',
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
    'name' => 'file_id',
    'referencedColumnName' => 'video',
   ),
   ),
   'orphanRemoval' => false,
  ));