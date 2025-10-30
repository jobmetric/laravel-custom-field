<?php

namespace JobMetric\CustomField\CustomFields\Email;

use JobMetric\CustomField\Contracts\FieldContract;
use JobMetric\CustomField\Core\BaseCustomField;

class Email extends BaseCustomField implements FieldContract
{
    /**
     * Get the type of the field.
     *
     * @return string
     */
    public static function type(): string
    {
        return 'email';
    }
}

