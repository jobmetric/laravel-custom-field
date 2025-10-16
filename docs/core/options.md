# Options

Options are used by `select` and `radio` (and can support checkbox-style outputs). Use a closure to define options in bulk, or pass an array.

## Closure (bulk) — recommended

```php
// Select
$select = CustomFieldBuilder::select()
    ->name('country')
    ->label('Country')
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
```

Notes:
- When you call `build()` on the `$opt` builder, the option is added and the builder state resets for the next option.
- If you forget to call `build()` for the last option, the system finalizes it automatically when the closure ends.

## Array input

```php
$select = CustomFieldBuilder::select()
    ->name('lang')
    ->label('Language')
    ->options([
        ['label' => 'English', 'value' => 'en', 'selected' => true],
        ['label' => 'German', 'value' => 'de'],
    ])
    ->build();
```

## Reading options in arrays

`toArray()` presents normalized options for API use:

```php
$payload = $select->toArray();
$payload['options']; // => [ [label, value, selected, ...], ... ]
```
