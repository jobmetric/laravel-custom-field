# Month Field

Builder: `CustomFieldBuilder::month()`

```php
$month = CustomFieldBuilder::month()
    ->name('salary_month')
    ->label('Salary Month')
    ->build();

echo $month->toHtml();
```
