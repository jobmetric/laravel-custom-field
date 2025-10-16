# Tel Field

Builder: `CustomFieldBuilder::tel()`

```php
$tel = CustomFieldBuilder::tel()
    ->name('phone')
    ->label('Phone')
    ->build();

echo $tel->toHtml();
```
