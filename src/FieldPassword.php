<?php

namespace Adaptcms\FieldPassword;

use Adaptcms\Base\Models\Package;

class FieldPassword
{
  /**
  * On Install
  *
  * @return void
  */
  public function onInstall()
  {
    Package::syncPackageFolder(get_class());
  }
}
