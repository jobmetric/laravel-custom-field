[Back To README.md](../../README.md)

# DateTimeLocal Field

Builder: `CustomFieldBuilder::dateTimeLocal()`

```php
$dt = CustomFieldBuilder::dateTimeLocal()
    ->name('appointment')
    ->label('Appointment')
    ->build();

echo $dt->toHtml();
```

## Rendering

```php
$html = $dt->toHtml();
```

## Array Output

```php
$payload = $dt->toArray();
```

---

Next To: [Time Field](time.md)
