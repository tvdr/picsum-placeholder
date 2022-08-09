# 🖼️ Use Picsum.photos in your laravel app

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tvdr/picsum-placeholder.svg?style=flat-square)](https://packagist.org/packages/tvdr/picsum-placeholder)
[![Total Downloads](https://img.shields.io/packagist/dt/tvdr/picsum-placeholder.svg?style=flat-square)](https://packagist.org/packages/tvdr/picsum-placeholder)

This package provides a simple way to use [Picsum.photos](https://picsum.photos/) in your Laravel app.

## Installation

You can install the package via composer:

```bash
composer require tvdr/picsum-placeholder
```

### Config Files

In order to edit the default configuration you may execute:

```
php artisan vendor:publish --provider="Tvdr\PicsumPlaceholder\PicsumPlaceholderServiceProvider" --tag="config"
```

After that, `config/picsum-placeholder.php` will be created.

The configuration options are:

name | description                                                                         | type                        | default value
:---|:------------------------------------------------------------------------------------|:----------------------------|:-------------------------
`api_url` | the base url for picsum.photos                                                      | string                      | `https://picsum.photos/`
`width` | width of image                                                                      | integer                     | `300`
`height` | height of image                                                                     | integer                     | `300`
`blur` | amount of blur on image                                                             | false &#124; integer[1..10] | `false`                  | false                          | 300
`grayscale` | always get a grayscale image                                                        | false &#124; true           | `false`                  | false                          | 300
`random` | append a random string to the url to bust browser cache                             | false &#124; true           | `true`                   | false                          | 300
`override_route` | route to override (e.g to always load a placeholder on non existent storage images) | false &#124; string         | `/storage/{path?}`                   | false                          | 300

## Usage

You can use the facade to write well-readable code as well as a predefined global helper method if you don't want it as
a singleton

```php
//return image url with default parameters
PicsumPlaceholder::getUrl()
picsum_placeholder()->getUrl()
```

```php
//return image as a blob string  with default parameters
PicsumPlaceholder::getBlob()
picsum_placeholder()->getBlob()
```

### Use the methods below to set options

#### Width

```php
PicsumPlaceholder::width(250);
picsum_placeholder()->width(410);
```

#### Height

```php
PicsumPlaceholder::height(120);
picsum_placeholder()->height(540);
```

#### Blur

```php
PicsumPlaceholder::blur(3);
picsum_placeholder()->blur(false);
```

#### Grayscale

```php
PicsumPlaceholder::grayscale(true);
picsum_placeholder()->grayscale(false);
```

#### Random

```php
PicsumPlaceholder::random(true);
picsum_placeholder()->grayscale(false);
```

All methods are chainable so nothing stops you from using
```php
PicsumPlaceholder::width(120)->height(500)->grayscale(false)->blur(2)->getUrl();
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email tiborbarta87@gmail.com instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

---
## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
