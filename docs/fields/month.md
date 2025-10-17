[Back To README.md](../../README.md)

# Month Field

Builder: `CustomFieldBuilder::month()`

```php
$month = CustomFieldBuilder::month()
    ->name('salary_month')
    ->label('Salary Month')
    ->build();

echo $month->toHtml();
```

## Rendering

```php
$html = $month->toHtml();
```

## Array Output

```php
$payload = $month->toArray();
```

---

Next To: [Color Field](color.md)
