[Back To README.md](../../README.md)

# Registry

`CustomFieldRegistry` stores all available field types at runtime. Each field is registered under its `type()` and can later be resolved by the factory or builder.

- The package service provider registers all built‑in fields.
- You can register your own field types as well (package or app level).

## Get a type
```php
/** @var \JobMetric\CustomField\Support\CustomFieldRegistry $registry */
$registry = app('CustomFieldRegistry');

$text = $registry->get('text'); // instanceof CustomFields\Text\Text
```

## Register a new type
```php
use JobMetric\CustomField\Support\CustomFieldRegistry;
use App\CustomFields\MyField; // implements FieldContract

$registry = app('CustomFieldRegistry');
$registry->register(new MyField());
```

- If a type with the same `type()` has already been registered, an `InvalidArgumentException` is thrown.
- Your field class must implement `FieldContract`.

---

Next To: [Factory](factory.md)
