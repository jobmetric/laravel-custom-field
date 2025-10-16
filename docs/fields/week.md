# Week Field

Builder: `CustomFieldBuilder::week()`

```php
$week = CustomFieldBuilder::week()
    ->name('week_of_year')
    ->label('Week')
    ->build();

echo $week->toHtml();
```
