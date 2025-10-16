# Time Field

Builder: `CustomFieldBuilder::time()`

Theme renders a time-picker wrapper.

```php
$time = CustomFieldBuilder::time()
    ->name('meeting_time')
    ->label('Meeting Time')
    ->build();

echo $time->toHtml();
```
