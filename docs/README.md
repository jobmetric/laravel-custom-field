# Laravel Custom Field — Documentation

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

## Table of Contents

- Fields
  - [Text](fields/text.md)
  - [Number](fields/number.md)
  - [Select](fields/select.md)
  - [Radio](fields/radio.md)
  - [Hidden](fields/hidden.md)
  - [Date](fields/date.md)
  - [DateTimeLocal](fields/datetime-local.md)
  - [Time](fields/time.md)
  - [Week](fields/week.md)
  - [Month](fields/month.md)
  - [Color](fields/color.md)
  - [Password](fields/password.md)
  - [Range](fields/range.md)
  - [Tel](fields/tel.md)
  - [Image](fields/image.md)

- Core
  - [Builder Basics](core/builder.md)
  - [Attributes](core/attributes.md)
  - [Properties](core/properties.md)
  - [Data Attributes (data-*)](core/data.md)
  - [Options](core/options.md)
  - [Images](core/images.md)

## Quick Example

```php
use JobMetric\CustomField\CustomFieldBuilder;

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
        $opt->label('France')->value('FR')->build();
    })
    ->build();

// Radio (pro mode option rendering)
$radio = CustomFieldBuilder::radio()
    ->name('plan')
    ->options(function ($opt) {
        $opt->mode('pro')->type('radio')->name('plan')->label('Basic')->value('basic');
        $opt->mode('pro')->type('radio')->name('plan')->label('Enterprise')->value('enterprise')->selected();
    })
    ->build();

// Render HTML (typically inside a Blade view)
echo $text->toHtml();
echo $select->toHtml();
echo $radio->toHtml();

// Or export as array for APIs/forms-as-config
return [
    'text' => $text->toArray(),
    'select' => $select->toArray(),
    'radio' => $radio->toArray(),
];
```

For details and more examples, open the linked docs above.
