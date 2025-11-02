[Back To README.md](../../README.md)

# Factory

`FieldFactory` creates a field instance by its `type`. The type must already be registered in `CustomFieldRegistry`.

## Create an instance
```php
use JobMetric\CustomField\FieldFactory;

$text = FieldFactory::create('text'); // returns a clone of the registered prototype
```

- Throws `Exception("Unsupported field type: ...")` when the type is unknown.
- Returns a fresh clone each call to avoid shared state between usages.

---

Next To: [Templates & Assets](templates.md)
