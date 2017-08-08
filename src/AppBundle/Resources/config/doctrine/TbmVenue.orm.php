<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'tbm_venue',
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
   'location' => 
   array(
    'columns' => 
    array(
    0 => 'location',
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
   'fieldName' => 'location',
   'columnName' => 'location',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => true,
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
   'fieldName' => 'address',
   'columnName' => 'address',
   'type' => 'string',
   'nullable' => true,
   'length' => 45,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'foursquareId',
   'columnName' => 'foursquare_id',
   'type' => 'string',
   'nullable' => true,
   'length' => 45,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);