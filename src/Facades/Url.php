<?php

namespace LvlupDev\Url\Facades;

use Illuminate\Support\Facades\Facade;

class Url extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \LvlupDev\Url\Url::class;
    }
}
