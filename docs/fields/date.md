# Date Field

Builder: `CustomFieldBuilder::date()`

Theme renders a date-picker wrapper.

```php
$date = CustomFieldBuilder::date()
    ->name('birthdate')
    ->label('Birthdate')
    ->info('Select your birth date')
    ->build();

echo $date->toHtml();
```
