[Back To README.md](../../README.md)

# Range Field

Builder: `CustomFieldBuilder::range()`

Methods: `min(int)`, `max(int)`. Theme appends `form-range` class.

```php
$range = CustomFieldBuilder::range()
    ->name('volume')
    ->label('Volume')
    ->min(0)
    ->max(10)
    ->build();

echo $range->toHtml();
```

## Rendering

```php
$html = $range->toHtml();
```

## Array Output

```php
$payload = $range->toArray();
```

---

Next To: [Tel Field](tel.md)
