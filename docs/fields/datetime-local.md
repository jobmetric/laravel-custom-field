[Back To README.md](../../README.md)

# DateTimeLocal Field

Builder: `CustomFieldBuilder::dateTimeLocal()`

```php
$dt = CustomFieldBuilder::dateTimeLocal()
    ->name('appointment')
    ->label('Appointment')
    ->build();

$res = $dt->toHtml();
echo $res['body'];
```

## Rendering

```php
$arr = $dt->toHtml();
$html = $arr['body'];
```

## Array Output

```php
$payload = $dt->toArray();
```

---

Next To: [Time Field](time.md)
