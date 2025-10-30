<?php

namespace JobMetric\CustomField\CustomFields\Time;

use JobMetric\CustomField\Contracts\FieldContract;
use JobMetric\CustomField\Core\BaseCustomField;

class Time extends BaseCustomField implements FieldContract
{
    /**
     * Get the type of the field.
     *
     * @return string
     */
    public static function type(): string
    {
        return 'time';
    }
}

