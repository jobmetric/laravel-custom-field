# Number Field

Builder: `CustomFieldBuilder::number()`

Common methods: `name`, `label`, `info`, `required`, `readonly`, `disabled`, `autofocus`, `value`.

```php
$number = CustomFieldBuilder::number()
    ->name('age')
    ->label('Age')
    ->info('Enter your age')
    ->build();

echo $number->toHtml();
```
