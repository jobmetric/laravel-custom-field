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

$res = $field->toHtml();
$html = $res['body'];
$array = $field->toArray();
```

Notes:
- `toHtml()` returns an array with keys: `body` (rendered HTML), `scripts`, `styles` (asset paths you may include in your layout).
- `toArray()` normalizes field, options, data and images to a serializable array (useful for APIs).

---

Next To: [Attributes](attributes.md)
