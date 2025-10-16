# Radio Field

Builder: `CustomFieldBuilder::radio()`

Radio uses options. The package supports a "pro" rendering mode for richer UI.

Common methods:
- `name(string)`
- `label(string)` / `info(string)` (on option label)
- `options(Closure)` — define radio options

## Example (pro mode)

```php
$radio = CustomFieldBuilder::radio()
    ->name('plan')
    ->options(function ($opt) {
        $opt->mode('pro')->type('radio')->name('plan')->label('Basic')->value('basic');
        $opt->mode('pro')->type('radio')->name('plan')->label('Enterprise')->value('enterprise')->selected();
    })
    ->build();

echo $radio->toHtml();
```
