# Laravel Google Sheet

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ibnuhalimm/laravel-google-sheet.svg?style=flat-square)](https://packagist.org/packages/ibnuhalimm/laravel-google-sheet)
[![Total Downloads](https://img.shields.io/packagist/dt/ibnuhalimm/laravel-google-sheet.svg?style=flat-square)](https://packagist.org/packages/ibnuhalimm/laravel-google-sheet)

Google Sheet API Wrapper for Laravel. Manage your sheet with ease.

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

## Requirements
1. [Create a Google Cloud project](https://developers.google.com/workspace/guides/create-project). If you want to use your existing project, you can jump to the next step.
2. [Create Service Acount Credentials](https://developers.google.com/workspace/guides/create-credentials#service-account) on Google Developer Console and share your Google Sheet file to these service account email.
3. Place your downloaded credentials json file to `storage/app/google-sheet/` folder, then rename these file to `credentials.json`. You can change the folder and filename in this package's config.
4. [Enable `Google Sheet API`](https://developers.google.com/workspace/guides/enable-apis) on Google Workspace APIs.

## Installation

You can install the package via composer:

```bash
composer require ibnuhalimm/laravel-google-sheet
```

Optionally, you can publish the config file of this package with this command:
```bash
php artisan vendor:publish --provider="Ibnuhalimm\LaravelGoogleSheet\GoogleSheetServiceProvider"
```
or by mention the config tag
```bash
php artisan vendor:publish --tag=google-sheet-config
```

## Setting up

(Optional) you can set the GoogleSheet configuration to `.env` file:
```bash
GOOGLE_SHEET_APP_NAME=""
GOOGLE_SHEET_SERVICE_ACCOUNT_JSON=""
GOOGLE_SHEET_ACCESS_TYPE=""
GOOGLE_SHEET_PROMPT=""
```

## Usage

### Fetch the data
You can use `GoogleSheet` facade (the alias or class itself).
```php
use GoogleSheet;

$spreadSheetId = '1cyUalLbuw_TpAIgkf76JcU-BbsYCSwtVqJuf_gCNzYA';
$sheetName = 'Class Data';
$cellRange = 'A2:E5';

GoogleSheet::useDocument($spreadSheetId)->fetchData($sheetName, $cellRange);
```

This method will returns the subset of array data
```php
=> [
     [
       "Student Name",
       "Gender",
       "Class Level",
       "Home State",
       "Major",
     ],
     [
       "Alexandra",
       "Female",
       "4. Senior",
       "CA",
       "English",
     ],
    ...
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email `ibnuhalim@pm.me` instead of using the issue tracker.

## Credits

-   [Ibnu Halim Mustofa](https://github.com/ibnuhalimm)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
