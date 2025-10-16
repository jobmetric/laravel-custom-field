# Builder Basics

The builder entry-point is `JobMetric\CustomField\CustomFieldBuilder`.
Each static method creates a field builder; you chain configuration and then call `build()` to get a `CustomField` instance.

Common flow:

```php
use JobMetric\CustomField\CustomFieldBuilder;

$field = CustomFieldBuilder::text()
    ->name('user[name]')
    ->label('Name')
    ->info('Enter your full name')
    ->required()
    ->build();

$html = $field->toHtml();
$array = $field->toArray();
```

Notes:
- `toHtml()` renders Blade views from `resources/views` inside the package.
- `toArray()` normalizes field, options, data and images to a serializable array (useful for APIs).
