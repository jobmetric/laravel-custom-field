[Back To README.md](../../README.md)

# Month Field

Builder: `CustomFieldBuilder::month()`

```php
$month = CustomFieldBuilder::month()
    ->name('salary_month')
    ->label('Salary Month')
    ->build();

$res = $month->toHtml();
echo $res['body'];
```

## Rendering

```php
$arr = $month->toHtml();
$html = $arr['body'];
```

## Array Output

```php
$payload = $month->toArray();
```

---

Next To: [Color Field](color.md)
