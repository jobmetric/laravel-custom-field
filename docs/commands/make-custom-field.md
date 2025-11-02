[Back To README.md](../../README.md)

# Make Custom Field

Artisan command to scaffold a custom field with the class, default blade view and optional assets folder.

```bash
php artisan custom-field:make {name} [--template=default|...[,..]] [--force]
```

- Output is created under `src/CustomFields/{Name}`:
  - `views/default.blade.php`
  - `{Name}.php` class implementing `FieldContract`
  - optional `assets/`

Options:
- `--template` or `-t`: blade template name (or comma‑separated list) to generate. `default` is always created.
- `--force` or `-f`: overwrite existing files.

## Example
```bash
php artisan custom-field:make Price
```

Then register it via `CustomFieldRegistry` (either in your own service provider or app bootstrapping).

---

Next To: [Generate IDE Helpers](generate-ide-helpers.md)
