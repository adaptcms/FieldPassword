<?php

namespace Adaptcms\FieldPassword\Field;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Adaptcms\Fields\FieldType;
use Adaptcms\Modules\Models\ModuleField;

use Hash;

class FieldPassword extends FieldType
{
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
  * @var boolean
  */
  // public $shouldNotSetData = true;

  /**
  * Migration Command
  * When a module field, page field, or another variation is made
  * from this field, you must supply a valid migration string in string format.
  * Here is an example, please note the use of `:columnName` and having the command
  * in single quotes so the CMS can execute the command via migrations:
  *
  * '$table->string(":columnName")->nullable();'
  *
  * @return string
  */
  public function migrationCommand()
  {
    return '$table->string(":columnName")->nullable();';
  }

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

  /**
  * Get Store Rules
  *
  * @param mixed $moduleField
  * @param mixed $pageField
  *
  * @return array
  */
  // public function getStoreRules($moduleField = null, $pageField = null)
  // {
  //   $field = !empty($moduleField) ? $moduleField : $pageField;
  //
  //   $rules = [];
  //
  //   return $rules;
  // }

  /**
  * Get Update Rules
  *
  * @param mixed $moduleField
  * @param mixed $pageField
  *
  * @return array
  */
  // public function getUpdateRules($moduleField = null, $pageField = null)
  // {
  //   $field = !empty($moduleField) ? $moduleField : $pageField;
  //
  //   $rules = [];
  //
  //   return $rules;
  // }

  /**
  * Format Name
  *
  * @param ModuleField $moduleField
  *
  * @return string
  */
  // public function formatName(ModuleField $moduleField)
  // {
  //   return Str::plural($moduleField->name);
  // }

  /**
  * Format Column Name
  *
  * @param ModuleField $moduleField
  *
  * @return string
  */
  // public function formatColumnName(ModuleField $moduleField)
  // {
  //   return strtolower(Str::plural($moduleField->name));
  // }

  /**
  * After Store
  *
  * @param ModuleField $moduleField
  *
  * @return void
  */
  // public function afterStore(ModuleField $moduleField)
  // {
  //
  // }

  /**
  * With Form Meta
  *
  * @param Request     $request
  * @param ModuleField $moduleField
  *
  * @return array
  */
  // public function withFormMeta(Request $request, ModuleField $moduleField)
  // {
  //   $meta = [];
  //
  //   return $meta;
  // }

  /**
  * With Loaded Relationships
  *
  * @param Model $model
  * @param ModuleField $moduleField
  *
  * @return Model
  */
  // public function withLoadedRelationships($model, ModuleField $moduleField)
  // {
  //   return $model;
  // }

  /**
  * After Model Store
  *
  * @param Model       $model
  * @param Request     $request
  * @param ModuleField $moduleField
  *
  * @return void
  */
  // public function afterModelStore($model, Request $request, ModuleField $moduleField)
  // {
  //   $this->afterModelSave($model, $request, $moduleField);
  // }

  /**
  * After Model Update
  *
  * @param Model       $model
  * @param Request     $request
  * @param ModuleField $moduleField
  *
  * @return void
  */
  // public function afterModelUpdate($model, Request $request, ModuleField $moduleField)
  // {
  //   $this->afterModelSave($model, $request, $moduleField);
  // }

  /**
  * After Model Save
  *
  * @param Model       $model
  * @param Request     $request
  * @param ModuleField $moduleField
  *
  * @return void
  */
  // public function afterModelSave($model, Request $request, ModuleField $moduleField)
  // {
  //
  // }
}
