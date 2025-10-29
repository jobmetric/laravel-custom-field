<?php

namespace JobMetric\CustomField\CustomFields\DateTimeLocal;

use JobMetric\CustomField\Contracts\FieldContract;
use JobMetric\CustomField\Core\BaseCustomField;

class DateTimeLocal extends BaseCustomField implements FieldContract
{
    /**
     * Get the type of the field.
     *
     * @return string
     */
    public static function type(): string
    {
        return 'datetime-local';
    }
}

