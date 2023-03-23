# Lighthouse Category Handler

[![Latest Version on Packagist](https://img.shields.io/packagist/v/oneduo/lighthouse-category-handler.svg?style=flat-square)](https://packagist.org/packages/oneduo/lighthouse-category-handler)
[![Total Downloads](https://img.shields.io/packagist/dt/oneduo/lighthouse-category-handler.svg?style=flat-square)](https://packagist.org/packages/oneduo/lighthouse-category-handler)

This package provides an error handler to add missing/removed category extension from Lighthouse 6.0

## Installation

You can install the package via composer:

```bash
composer require oneduo/lighthouse-category-handler
```

## Usage

Add the handler at the **END** of config `lighthouse.error_handlers`

```php
'error_handlers' => [
    \Nuwave\Lighthouse\Execution\AuthenticationErrorHandler::class,
    \Nuwave\Lighthouse\Execution\AuthorizationErrorHandler::class,
    \Nuwave\Lighthouse\Execution\ValidationErrorHandler::class,
    \Nuwave\Lighthouse\Execution\ReportingErrorHandler::class,
    \Oneduo\LighthouseCategoryHandler\CategoryHandler::class,
],
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Mikaël Popowicz](https://github.com/mikaelpopowicz)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
