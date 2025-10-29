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
        'default' => [
            'script.js',
        ]
    ];

    /**
     * The styles to be included for the custom field.
     *
     * @var array
     */
    public array $styles = [
        'default' => [
            'style.css',
        ]
    ];

    /**
     * Get the type of the field.
     *
     * @return string
     */
    public static function type(): string
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
