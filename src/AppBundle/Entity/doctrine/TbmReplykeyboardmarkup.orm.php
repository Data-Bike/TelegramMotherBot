<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'tbm_replykeyboardmarkup',
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
   'fieldName' => 'resizeKeyboard',
   'columnName' => 'resize_keyboard',
   'type' => 'boolean',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'oneTimeKeyboard',
   'columnName' => 'one_time_keyboard',
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
$metadata->mapManyToMany(array(
   'fieldName' => 'keyboardbutton',
   'targetEntity' => 'TbmKeyboardbutton',
   'cascade' => 
   array(
   ),
   'fetch' => 2,
   'joinTable' => 
   array(
   'name' => 'tbm_replykeyboardmarkup_keyboard',
   'joinColumns' => 
   array(
    0 => 
    array(
    'name' => 'ReplyKeyboardMarkup_id',
    'referencedColumnName' => 'id',
    ),
   ),
   'inverseJoinColumns' => 
   array(
    0 => 
    array(
    'name' => 'KeyboardButton_id',
    'referencedColumnName' => 'id',
    ),
   ),
   ),
  ));