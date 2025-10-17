[Back To README.md](../../README.md)

# Week Field

Builder: `CustomFieldBuilder::week()`

```php
$week = CustomFieldBuilder::week()
    ->name('week_of_year')
    ->label('Week')
    ->build();

echo $week->toHtml();
```

## Rendering

```php
$html = $week->toHtml();
```

## Array Output

```php
$payload = $week->toArray();
```

---

Next To: [Month Field](month.md)
