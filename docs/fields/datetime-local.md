# DateTimeLocal Field

Builder: `CustomFieldBuilder::dateTimeLocal()`

```php
$dt = CustomFieldBuilder::dateTimeLocal()
    ->name('appointment')
    ->label('Appointment')
    ->build();

echo $dt->toHtml();
```
