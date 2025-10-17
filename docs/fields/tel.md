[Back To README.md](../../README.md)

# Tel Field

Builder: `CustomFieldBuilder::tel()`

```php
$tel = CustomFieldBuilder::tel()
    ->name('phone')
    ->label('Phone')
    ->build();

echo $tel->toHtml();
```

## Rendering

```php
$html = $tel->toHtml();
```

## Array Output

```php
$payload = $tel->toArray();
```

---

Next To: [Image Field](image.md)
