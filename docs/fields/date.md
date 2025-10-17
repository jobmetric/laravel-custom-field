[Back To README.md](../../README.md)

# Date Field

Builder: `CustomFieldBuilder::date()`

Theme renders a date-picker wrapper.

```php
$date = CustomFieldBuilder::date()
    ->name('birthdate')
    ->label('Birthdate')
    ->info('Select your birth date')
    ->build();

echo $date->toHtml();
```

## Rendering

```php
$html = $date->toHtml();
```

## Array Output

```php
$payload = $date->toArray();
```

---

Next To: [DateTimeLocal Field](datetime-local.md)
