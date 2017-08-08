<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'tbm_photosize',
   'uniqueConstraints' => 
   array(
   'file_id_UNIQUE' => 
   array(
    'columns' => 
    array(
    0 => 'file_id',
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
   'targetEntity' => 'TbmVideonote',
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
    'referencedColumnName' => 'thumb',
   ),
   ),
   'orphanRemoval' => false,
  ));
$metadata->mapManyToMany(array(
   'fieldName' => 'messageMessage',
   'targetEntity' => 'TbmMessage',
   'cascade' => 
   array(
   ),
   'fetch' => 2,
   'mappedBy' => 'photosizeFile',
  ));
$metadata->mapManyToMany(array(
   'fieldName' => 'userprofilephotos',
   'targetEntity' => 'TbmUserprofilephotos',
   'cascade' => 
   array(
   ),
   'fetch' => 2,
   'mappedBy' => 'photosizeFile',
  ));