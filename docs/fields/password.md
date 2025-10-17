[Back To README.md](../../README.md)

# Password Field

Builder: `CustomFieldBuilder::password()`

Theme renders enhanced password UI.

```php
$password = CustomFieldBuilder::password()
    ->name('password')
    ->label('Password')
    ->build();

echo $password->toHtml();
```

## Rendering

```php
$html = $password->toHtml();
```

## Array Output

```php
$payload = $password->toArray();
```

---

Next To: [Range Field](range.md)
