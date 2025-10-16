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
