<?php

namespace JobMetric\CustomField;

use Illuminate\Support\Traits\Macroable;
use JobMetric\CustomField\Contracts\FieldContract;

class CustomFieldBuilder
{
    use Macroable;

    public static FieldContract $fieldContract;

    /**
     * Build the custom field.
     *
     * @return CustomField
     */
    public function build(): CustomField
    {
        return self::$fieldContract->build();
    }
}
