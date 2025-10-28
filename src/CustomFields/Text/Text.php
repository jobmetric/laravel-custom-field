<?php

namespace JobMetric\CustomField\CustomFields\Text;

use JobMetric\CustomField\Attribute\HasPlaceholder;
use JobMetric\CustomField\Contracts\FieldContract;
use JobMetric\CustomField\Core\BaseCustomField;

class Text extends BaseCustomField implements FieldContract
{
    use HasPlaceholder;

    /**
     * The scripts to be included for the custom field.
     *
     * @var array
     */
    public array $scripts = [
        'script.js',
    ];

    /**
     * The styles to be included for the custom field.
     *
     * @var array
     */
    public array $styles = [
        'style.css',
    ];

    /**
     * Get the alias of the field.
     *
     * @return string
     */
    public static function alias(): string
    {
        return 'text';
    }

    /**
     * Boot logic for the custom field.
     *
     * @param FieldContract $customField
     *
     * @return void
     */
    public function boot(FieldContract $customField)
    {
        // Implement any after boot logic if needed
    }
}
