<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'tbm_user',
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
   'fieldName' => 'languageCode',
   'columnName' => 'language_code',
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
$metadata->mapOneToOne(array(
   'fieldName' => 'id',
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
    'name' => 'id',
    'referencedColumnName' => 'from',
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
   'mappedBy' => 'user',
  ));