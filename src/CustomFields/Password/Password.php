<?php

namespace JobMetric\CustomField\CustomFields\Password;

use JobMetric\CustomField\Attribute\HasPlaceholder;
use JobMetric\CustomField\Contracts\FieldContract;
use JobMetric\CustomField\Core\BaseCustomField;

class Password extends BaseCustomField implements FieldContract
{
    use HasPlaceholder;

    /**
     * Get the type of the field.
     *
     * @return string
     */
    public static function type(): string
    {
        return 'password';
    }
}

