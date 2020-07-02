<?php

namespace Adaptcms\FieldPassword\Facades;

use Illuminate\Support\Facades\Facade;

class FieldPassword extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'FieldPassword';
    }
}
