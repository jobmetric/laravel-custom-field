[Back To README.md](../../README.md)

# Image Field

Builder: `CustomFieldBuilder::image()`

```php
$image = CustomFieldBuilder::image()
    ->name('submitImage')
    ->src('/img/submit.png')
    ->alt('Submit')
    ->width(120)
    ->height(80)
    ->build();

echo $image->toHtml();
```

## Rendering

```php
$html = $image->toHtml();
```

## Array Output

```php
$payload = $image->toArray();
```

---

Back to: [Docs Index](../../README.md)
