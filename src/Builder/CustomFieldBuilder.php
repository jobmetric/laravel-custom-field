<?php

namespace JobMetric\CustomField\Builder;

use Illuminate\Support\Traits\Macroable;
use JobMetric\CustomField\Fields\FieldContract;

class CustomFieldBuilder
{
    use Macroable,
        BuilderInput,
        BuilderSelect;

    public static FieldContract $fieldContract;
}
