# Laravel Google Sheet

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ibnuhalimm/laravel-google-sheet.svg?style=flat-square)](https://packagist.org/packages/ibnuhalimm/laravel-google-sheet)
[![Total Downloads](https://img.shields.io/packagist/dt/ibnuhalimm/laravel-google-sheet.svg?style=flat-square)](https://packagist.org/packages/ibnuhalimm/laravel-google-sheet)
![GitHub Actions](https://github.com/ibnuhalimm/laravel-google-sheet/actions/workflows/main.yml/badge.svg)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Contents
- [Requirements](#requirements)
- [Installation](#installation)
- [Setting Up](#setting-up)
- [Usage](#usage)
- [Testing](#testing)
- [Changelog](#changelog)
- [Contributing](#contributing)
- [Security](#security)
- [Credits](#credits)
- [License](#license)

## Installation

You can install the package via composer:

```bash
composer require ibnuhalimm/laravel-google-sheet
```

Optionally, you can publish the config file of this package with this command:
```bash
php artisan vendor:publish --provider="Ibnuhalimm\LaravelGoogleSheet\GoogleSheetServiceProvider"
```

## Setting up

Put your configuration to `.env` file:
```bash
GOOGLE_SHEET_APP_NAME=""
```

## Usage

```php
// Usage description here
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email `ibnuhalim@pm.me` instead of using the issue tracker.

## Credits

-   [Ibnu Halim Mustofa](https://github.com/ibnuhalimm)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
