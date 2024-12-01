<?php

namespace JobMetric\CustomField;

use Illuminate\Support\Traits\Macroable;
use JobMetric\CustomField\Fields\BuilderInput;
use JobMetric\CustomField\Fields\BuilderNumber;
use JobMetric\CustomField\Fields\BuilderSelect;
use JobMetric\CustomField\Fields\FieldContract;

class CustomFieldBuilder
{
    use Macroable,
        BuilderInput,
        BuilderNumber,
        BuilderSelect;

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
