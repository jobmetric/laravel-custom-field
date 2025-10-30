<?php

namespace JobMetric\CustomField\CustomFields\Number;

use JobMetric\CustomField\Attribute\HasPlaceholder;
use JobMetric\CustomField\Contracts\FieldContract;
use JobMetric\CustomField\Core\BaseCustomField;

class Number extends BaseCustomField implements FieldContract
{
    use HasPlaceholder;

    /**
     * Get the type of the field.
     *
     * @return string
     */
    public static function type(): string
    {
        return 'number';
    }
}

