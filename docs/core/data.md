# Data Attributes (data-*)

Use `data()` to add custom `data-*` attributes via a small builder. Each call adds one data item.

```php
use JobMetric\CustomField\Attribute\Data\DataBuilder;

$field = CustomFieldBuilder::text()
    ->name('user[name]')
    ->data(function (DataBuilder $data) {
        $data->name('data-user-id')->value('{id}');
    })
    ->build();

// When rendering with toHtml/toArray, placeholders in values are replaced
$html = $field->toHtml(replaces: ['id' => '42']);
```

---

Next To: [Options](options.md)
