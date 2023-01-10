<?php

namespace LvlupDev\Url;

use Carbon\CarbonInterval;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

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
