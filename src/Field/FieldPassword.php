<?php

namespace Adaptcms\FieldPassword\Field;

use Adaptcms\Fields\FieldType;

use Hash;

class FieldPassword extends FieldType
{
  /**
  * @var array
  */
  public $defaultSettings = [
    'options' => [
      'is_sortable'        => false,
      'is_searchable'      => false,
      'is_required_create' => true,
      'is_required_edit'   => false
    ],
    'action_rules' => [
      'index'  => false,
      'create' => true,
      'edit'   => true,
      'show'   => false,
      'search' => false
    ]
  ];

  /**
  * Rules applied when record is being stored with a post type.
  *
  * @var array
  */
  public $storeRules = [
    'string',
    'required',
    'min:6'
  ];

  /**
  * Rules applied when record is being updated with a post type.
  *
  * @var array
  */
  public $updateRules = [
    'string'
  ];

  /**
  * Set Value
  *
  * @param mixed $value
  *
  * @return void
  */
  public function setValue($value)
  {
    return Hash::make($value);
  }
}
