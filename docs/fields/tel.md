[Back To README.md](../../README.md)

# Tel Field

Builder: `CustomFieldBuilder::tel()`

```php
$tel = CustomFieldBuilder::tel()
    ->name('phone')
    ->label('Phone')
    ->build();

$res = $tel->toHtml();
echo $res['body'];
```

## Rendering

```php
$arr = $tel->toHtml();
$html = $arr['body'];
```

## Array Output

```php
$payload = $tel->toArray();
```

---

Next To: [Image Field](image.md)
