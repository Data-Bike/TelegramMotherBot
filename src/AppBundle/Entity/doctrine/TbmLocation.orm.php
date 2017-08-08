<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'tbm_location',
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
   'fieldName' => 'longitude',
   'columnName' => 'longitude',
   'type' => 'float',
   'nullable' => true,
   'precision' => 10,
   'scale' => 0,
  ));
$metadata->mapField(array(
   'fieldName' => 'latitude',
   'columnName' => 'latitude',
   'type' => 'float',
   'nullable' => true,
   'precision' => 10,
   'scale' => 0,
  ));
$metadata->mapOneToOne(array(
   'fieldName' => 'id',
   'targetEntity' => 'TbmVenue',
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
    'name' => 'id',
    'referencedColumnName' => 'location',
   ),
   ),
   'orphanRemoval' => false,
  ));