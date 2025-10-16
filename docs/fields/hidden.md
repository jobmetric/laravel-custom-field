# Hidden Field

Builder: `CustomFieldBuilder::hidden()`

```php
$hidden = CustomFieldBuilder::hidden()
    ->name('token')
    ->value('abc123')
    ->build();

echo $hidden->toHtml();
```
