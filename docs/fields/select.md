[Back To README.md](../../README.md)

# Select Field

Builder: `CustomFieldBuilder::select()`

Common methods:
- `name(string)`
- `label(string)` / `info(string)`
- `placeholder(string)`
- `required()` / `disabled()` / `readonly()` / `autofocus()`
- `multiple()`
- `options(Closure|array)` — define choices

## Examples

Basic select with options (bulk via closure):
```php
$select = CustomFieldBuilder::select()
    ->name('country')
    ->label('Country')
    ->info('Choose your country')
    ->options(function ($opt) {
        $opt->label('Iran')->value('IR')->selected()->build();
        $opt->label('Germany')->value('DE')->build();
    })
    ->build();

$res = $select->toHtml();
echo $res['body'];
```

Array options:
```php
$select = CustomFieldBuilder::select()
    ->name('language')
    ->options([
        ['label' => 'English', 'value' => 'en', 'selected' => true],
        ['label' => 'German', 'value' => 'de'],
    ])
    ->build();
```

## Rendering

```php
$arr = $select->toHtml();
$html = $arr['body'];
```

## Array Output

```php
$payload = $select->toArray();
```

---

Multiple select:
```php
CustomFieldBuilder::select()
    ->name('tags')
    ->label('Tags')
    ->multiple()
    ->options(function ($opt) {
        $opt->label('PHP')->value('php')->build();
        $opt->label('Laravel')->value('laravel')->build();
    })
    ->build();
```

Next To: [Radio Field](radio.md)
