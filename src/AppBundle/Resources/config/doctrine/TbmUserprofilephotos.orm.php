<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'tbm_userprofilephotos',
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
   'fieldName' => 'totalCount',
   'columnName' => 'total_count',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);
$metadata->mapManyToMany(array(
   'fieldName' => 'photosizeFile',
   'targetEntity' => 'TbmPhotosize',
   'cascade' => 
   array(
   ),
   'fetch' => 2,
   'joinTable' => 
   array(
   'name' => 'tbm_userprofilephotos_has_photosize',
   'joinColumns' => 
   array(
    0 => 
    array(
    'name' => 'UserProfilePhotos_id',
    'referencedColumnName' => 'id',
    ),
   ),
   'inverseJoinColumns' => 
   array(
    0 => 
    array(
    'name' => 'PhotoSize_file_id',
    'referencedColumnName' => 'file_id',
    ),
   ),
   ),
  ));