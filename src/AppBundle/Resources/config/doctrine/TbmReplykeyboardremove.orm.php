<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'tbm_replykeyboardremove',
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
   'fieldName' => 'removeKeyboard',
   'columnName' => 'remove_keyboard',
   'type' => 'boolean',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'selective',
   'columnName' => 'selective',
   'type' => 'boolean',
   'nullable' => true,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);