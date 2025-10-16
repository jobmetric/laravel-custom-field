# Color Field

Builder: `CustomFieldBuilder::color()`

```php
$color = CustomFieldBuilder::color()
    ->name('favcolor')
    ->label('Favorite Color')
    ->info('Pick a color')
    ->required()
    ->build();

echo $color->toHtml();
```
