[Back To README.md](../../README.md)

# Hidden Field

Builder: `CustomFieldBuilder::hidden()`

```php
$hidden = CustomFieldBuilder::hidden()
    ->name('token')
    ->value('abc123')
    ->build();

$res = $hidden->toHtml();
echo $res['body'];
```

## Rendering

```php
$arr = $hidden->toHtml();
$html = $arr['body'];
```

## Array Output

```php
$payload = $hidden->toArray();
```

---

Next To: [Date Field](date.md)
