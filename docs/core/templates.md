[Back To README.md](../../README.md)

# Templates & Assets

Each field ships with a `views` directory under `src/CustomFields/<Type>/views` and must contain at least `default.blade.php`. You can select the template via `config('custom-field.template')` or by calling `template()` on the field instance. If the selected template does not exist, it falls back to `default`.

## Choose a template
```php
$field = CustomFieldBuilder::text()->template('default');
```

> Note: When a blade view is missing, a descriptive exception is thrown including the expected path.

## toHtml() output
`toHtml()` returns an array with these keys:
- `body`: rendered HTML markup
- `scripts`: an array of script asset paths for the current template
- `styles`: an array of style asset paths for the current template

```php
$res = CustomFieldBuilder::text()->build()->toHtml();
$body = $res['body'];
$scripts = $res['scripts'];
$styles = $res['styles'];
```

## Publishing assets
If an `assets` directory exists under `src/CustomFields/<Type>/assets`, the package registers these publish tags:
- `custom-field-assets`
- `custom-field-assets:<type>` — e.g., for `text`

```bash
php artisan vendor:publish --tag=custom-field-assets
php artisan vendor:publish --tag=custom-field-assets:text
```

---

Next To: [Builder Basics](builder.md)
