[Back To README.md](../../README.md)

# Week Field

Builder: `CustomFieldBuilder::week()`

```php
$week = CustomFieldBuilder::week()
    ->name('week_of_year')
    ->label('Week')
    ->build();

$res = $week->toHtml();
echo $res['body'];
```

## Rendering

```php
$arr = $week->toHtml();
$html = $arr['body'];
```

## Array Output

```php
$payload = $week->toArray();
```

---

Next To: [Month Field](month.md)
