# Laravel-Url 

This package is design to help you work with external urls in your Laravel application.

## Installation
`composer require lvlup-dev/laravel-url`

## Usage

```php
 $url = \LvlupDev\Url\Url::fetch('https://mescadeaux.com/');
 $headers = $url->headers();
```

## Advanced features
Add a one-hour cache on all URLs.

## Roadmap
Extended body() method to handle Xpath queries.

## License
MIT. Please see the [license file](license.md) for more information.

