<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'tbm_inlinekeyboardmarkup',
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
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);
$metadata->mapManyToMany(array(
   'fieldName' => 'inlinekeyboardbutton',
   'targetEntity' => 'TbmInlinekeyboardbutton',
   'cascade' => 
   array(
   ),
   'fetch' => 2,
   'joinTable' => 
   array(
   'name' => 'tbm_inlinekeyboardmarkup_has_inlinekeyboardbutton',
   'joinColumns' => 
   array(
    0 => 
    array(
    'name' => 'InlineKeyboardMarkup_id',
    'referencedColumnName' => 'id',
    ),
   ),
   'inverseJoinColumns' => 
   array(
    0 => 
    array(
    'name' => 'InlineKeyboardButton_id',
    'referencedColumnName' => 'id',
    ),
   ),
   ),
  ));