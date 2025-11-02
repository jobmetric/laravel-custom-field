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

$res = $date->toHtml();
echo $res['body'];
```

## Rendering

```php
$arr = $date->toHtml();
$html = $arr['body'];
```

## Array Output

```php
$payload = $date->toArray();
```

---

Next To: [DateTimeLocal Field](datetime-local.md)
