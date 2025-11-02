[Back To README.md](../../README.md)

# Generate IDE Helpers

Generates IDE hints for dynamically registered `CustomFieldBuilder` macros based on the fields currently registered in the registry.

- You can run it manually at any time, or wire it into your composer scripts if desired.

```bash
php artisan custom-field:ide
```

> This package also includes `scripts/generate_ide_if_local.php` which can be triggered by composer post hooks in local environments.

---

Back To: [Commands Index](../../README.md)
