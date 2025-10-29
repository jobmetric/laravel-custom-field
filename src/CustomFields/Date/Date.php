<?php

namespace JobMetric\CustomField\CustomFields\Date;

use JobMetric\CustomField\Contracts\FieldContract;
use JobMetric\CustomField\Core\BaseCustomField;

class Date extends BaseCustomField implements FieldContract
{
    /**
     * Get the type of the field.
     *
     * @return string
     */
    public static function type(): string
    {
        return 'date';
    }
}

