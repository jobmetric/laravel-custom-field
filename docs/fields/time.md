[Back To README.md](../../README.md)

# Time Field

Builder: `CustomFieldBuilder::time()`

Theme renders a time-picker wrapper.

```php
$time = CustomFieldBuilder::time()
    ->name('meeting_time')
    ->label('Meeting Time')
    ->build();

$res = $time->toHtml();
echo $res['body'];
```

## Rendering

```php
$arr = $time->toHtml();
$html = $arr['body'];
```

## Array Output

```php
$payload = $time->toArray();
```

---

Next To: [Week Field](week.md)
