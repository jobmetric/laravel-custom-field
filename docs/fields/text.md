# Text Field

Builder: `CustomFieldBuilder::text()`

Common methods:
- `name(string, ?string $uniq = null)`
- `label(string)` / `info(string)`
- `placeholder(string)`
- `required()` / `disabled()` / `readonly()` / `autofocus()`
- `value(mixed)`

## Example

```php
$text = CustomFieldBuilder::text()
    ->name('user[name]')
    ->label('Name')
    ->info('Enter your full name')
    ->required()
    ->placeholder('Enter name')
    ->build();

echo $text->toHtml();
```
