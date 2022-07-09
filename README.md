![](./.github/laravel-breadcrumbs.png)

# Quick and easy breadcrumbs for Laravel

**Note:** This is very much a work in progress and should not be used on any live site. 

[![Latest Version on Packagist](https://img.shields.io/packagist/v/aelora/laravel-breadcrumbs.svg?style=flat-square)](https://packagist.org/packages/aelora/laravel-breadcrumbs)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/aelora/laravel-breadcrumbs/run-tests?label=tests)](https://github.com/aelora/laravel-breadcrumbs/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/aelora/laravel-breadcrumbs/Check%20&%20fix%20styling?label=code%20style)](https://github.com/aelora/laravel-breadcrumbs/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/aelora/laravel-breadcrumbs.svg?style=flat-square)](https://packagist.org/packages/aelora/laravel-breadcrumbs)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-breadcrumbs.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-breadcrumbs)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require aelora/laravel-breadcrumbs
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-breadcrumbs-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-breadcrumbs-views"
```

## Usage

```php
$breadcrumbs = new Aelora\Breadcrumbs();
echo $breadcrumbs->echoPhrase('Hello, Aelora!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/RyanNutt/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ryan Nutt](https://github.com/RyanNutt)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
