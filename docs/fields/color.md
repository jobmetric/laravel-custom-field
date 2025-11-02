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

$res = $color->toHtml();
echo $res['body'];
```

## Rendering

```php
$arr = $color->toHtml();
$html = $arr['body'];
```

## Array Output

```php
$payload = $color->toArray();
```

---

Next To: [Password Field](password.md)
