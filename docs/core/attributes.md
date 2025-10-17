# Attributes

Field attributes adjust HTML attributes and metadata.

Common attributes:
- `name(string $name, ?string $uniq = null)` — sets `name` and calculates `nameDot`. If `uniq` is set, appends to generated `id`.
- `id(string $id)` — sets explicit id (respects `uniqName`).
- `class(string $class)` — appends CSS classes; base class defaults to `form-control`.
- `value(mixed $value)` — sets field value and the `value` attribute where applicable.
- `placeholder(string $placeholder)` — select/text placeholders (translatable keys supported).
- Image-specific: `src(string)`, `alt(string)`, `width(int)`, `height(int)`.
- Min/Max: available on `range` via `min(int)`, `max(int)`.

Example:
```php
$field = CustomFieldBuilder::text()
    ->name('user[email]')
    ->id('user_email')
    ->class('is-invalid')
    ->value('foo@example.com')
    ->build();
```

---

Next To: [Properties](properties.md)
