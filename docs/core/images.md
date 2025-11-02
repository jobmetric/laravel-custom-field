# Images

Some fields can render images or use image tags (see the dedicated Image field).

- Image Field builder methods: `src`, `alt`, `width`, `height`
- Images also support `data()` if needed

```php
$image = CustomFieldBuilder::image()
    ->name('submitImage')
    ->src('/img/submit.png')
    ->alt('Submit')
    ->width(120)
    ->height(80)
    ->build();

$result = $image->toHtml();
echo $result['body'];
```

---

Next To: [Text Field](../fields/text.md)
