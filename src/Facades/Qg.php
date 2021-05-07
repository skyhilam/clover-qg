<?php

namespace Clover\Qg\Facades;

use Illuminate\Support\Facades\Facade;

class Qg extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'qg';
    }
}
