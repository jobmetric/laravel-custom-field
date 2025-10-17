[contributors-shield]: https://img.shields.io/github/contributors/jobmetric/laravel-custom-field.svg?style=for-the-badge
[contributors-url]: https://github.com/jobmetric/laravel-custom-field/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/jobmetric/laravel-custom-field.svg?style=for-the-badge&label=Fork
[forks-url]: https://github.com/jobmetric/laravel-custom-field/network/members
[stars-shield]: https://img.shields.io/github/stars/jobmetric/laravel-custom-field.svg?style=for-the-badge
[stars-url]: https://github.com/jobmetric/laravel-custom-field/stargazers
[license-shield]: https://img.shields.io/github/license/jobmetric/laravel-custom-field.svg?style=for-the-badge
[license-url]: https://github.com/jobmetric/laravel-custom-field/blob/master/LICENCE.md
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-blue.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/majidmohammadian

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]

# Laravel Custom Field

This package provides a fluent builder API to define, render, and serialize form fields (text, number, select, radio, image, etc.) with consistent HTML output and an extendable option/data system.

- Core Concepts
  - Builder: `src/CustomFieldBuilder.php`
  - Field Instances: `src/Fields/*`
  - Options (for select/radio): `src/Option/*`
  - Data attributes (data-*) : `src/Attribute/Data/*`

- Usage Highlights
  - Chain field attributes and properties (name, label, required, placeholder, ...)
  - Add options via closure (bulk) or array
  - Render as HTML (`toHtml`) or array (`toArray`) for APIs

## Installation

```bash
composer require jobmetric/laravel-custom-field
```

## Documentation

This package includes different parts that I will mention in order:

- Fields
  - [Text](docs/fields/text.md)
  - [Number](docs/fields/number.md)
  - [Select](docs/fields/select.md)
  - [Radio](docs/fields/radio.md)
  - [Hidden](docs/fields/hidden.md)
  - [Date](docs/fields/date.md)
  - [DateTimeLocal](docs/fields/datetime-local.md)
  - [Time](docs/fields/time.md)
  - [Week](docs/fields/week.md)
  - [Month](docs/fields/month.md)
  - [Color](docs/fields/color.md)
  - [Password](docs/fields/password.md)
  - [Range](docs/fields/range.md)
  - [Tel](docs/fields/tel.md)
  - [Image](docs/fields/image.md)

- Core
  - [Builder Basics](docs/core/builder.md)
  - [Attributes](docs/core/attributes.md)
  - [Properties](docs/core/properties.md)
  - [Data Attributes (data-*)](docs/core/data.md)
  - [Options](docs/core/options.md)
  - [Images](docs/core/images.md)

## Quick Start

```php
use JobMetric\\CustomField\\CustomFieldBuilder;

// Text field
$text = CustomFieldBuilder::text()
    ->name('user[name]')
    ->label('Name')
    ->info('Enter your full name')
    ->required()
    ->placeholder('Enter name')
    ->build();

// Select with bulk options via a single closure
$select = CustomFieldBuilder::select()
    ->name('country')
    ->label('Country')
    ->info('Choose your country')
    ->options(function ($opt) {
        $opt->label('Iran')->value('IR')->selected()->build();
        $opt->label('Germany')->value('DE')->build();
    })
    ->build();

// Radio (pro mode)
$radio = CustomFieldBuilder::radio()
    ->name('plan')
    ->options(function ($opt) {
        $opt->mode('pro')->type('radio')->name('plan')->label('Basic')->value('basic');
        $opt->mode('pro')->type('radio')->name('plan')->label('Enterprise')->value('enterprise')->selected();
    })
    ->build();

echo $text->toHtml();
echo $select->toHtml();
echo $radio->toHtml();
```

## License

The MIT License (MIT). Please see [License File](https://github.com/jobmetric/laravel-custom-field/blob/master/README.md) for more information.
