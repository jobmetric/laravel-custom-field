[Back To README.md](../../README.md)

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

## Rendering

```php
$html = $color->toHtml();
```

## Array Output

```php
$payload = $color->toArray();
```

---

Next To: [Password Field](password.md)
