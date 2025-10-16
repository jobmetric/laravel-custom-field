# Custom Field for laravel

This is a custom field management package for Laravel that you can use in your projects.

## Install via composer

Run the following command to pull in the latest version:

```bash
composer require jobmetric/laravel-custom-field
```

## Documentation
See the package documentation under `docs`:

- Index: `docs/README.md`
- Fields: `docs/fields/text.md`, `docs/fields/number.md`, `docs/fields/select.md`, `docs/fields/radio.md`, `docs/fields/hidden.md`, `docs/fields/date.md`, `docs/fields/datetime-local.md`, `docs/fields/time.md`, `docs/fields/week.md`, `docs/fields/month.md`, `docs/fields/color.md`, `docs/fields/password.md`, `docs/fields/range.md`, `docs/fields/tel.md`, `docs/fields/image.md`
- Core: `docs/core/builder.md`, `docs/core/attributes.md`, `docs/core/properties.md`, `docs/core/data.md`, `docs/core/options.md`, `docs/core/images.md`

### Quick Example

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
