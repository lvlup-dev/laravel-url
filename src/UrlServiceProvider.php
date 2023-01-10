<?php

namespace LvlupDev\Url;

use Illuminate\Support\ServiceProvider;

class UrlServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(UrlService::class, function () {
            return new UrlService();
        });
    }
}
