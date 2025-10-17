[Back To README.md](../../README.md)

# Hidden Field

Builder: `CustomFieldBuilder::hidden()`

```php
$hidden = CustomFieldBuilder::hidden()
    ->name('token')
    ->value('abc123')
    ->build();

echo $hidden->toHtml();
```

## Rendering

```php
$html = $hidden->toHtml();
```

## Array Output

```php
$payload = $hidden->toArray();
```

---

Next To: [Date Field](date.md)
