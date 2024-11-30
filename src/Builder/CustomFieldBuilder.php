<?php

namespace JobMetric\CustomField\Builder;

use JobMetric\CustomField\Fields\FieldContract;

class CustomFieldBuilder
{
    use BuilderInput,
        BuilderSelect;

    public static FieldContract $fieldContract;
}
