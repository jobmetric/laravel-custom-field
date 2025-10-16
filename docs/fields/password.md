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
