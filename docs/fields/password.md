[Back To README.md](../../README.md)

# Password Field

Builder: `CustomFieldBuilder::password()`

Theme renders enhanced password UI.

```php
$password = CustomFieldBuilder::password()
    ->name('password')
    ->label('Password')
    ->build();

$res = $password->toHtml();
echo $res['body'];
```

## Rendering

```php
$arr = $password->toHtml();
$html = $arr['body'];
```

## Array Output

```php
$payload = $password->toArray();
```

---

Next To: [Range Field](range.md)
