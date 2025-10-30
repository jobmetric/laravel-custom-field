<?php

namespace JobMetric\CustomField\CustomFields\Hidden;

use JobMetric\CustomField\Contracts\FieldContract;
use JobMetric\CustomField\Core\BaseCustomField;

class Hidden extends BaseCustomField implements FieldContract
{
    /**
     * Get the type of the field.
     *
     * @return string
     */
    public static function type(): string
    {
        return 'hidden';
    }
}

