<?php

namespace LvlupDev\Url;

use Illuminate\Support\Facades\Facade;

class UrlService extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'url';
    }

    public static function fetch(string $uri): Url
    {
        $url = new Url($uri);
        return $url->fetch();
    }
}
