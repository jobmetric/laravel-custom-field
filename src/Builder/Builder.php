<?php

namespace JobMetric\CustomField\Builder;

use JobMetric\CustomField\Fields\FieldContract;

class Builder
{
    use BuilderInput,
        BuilderSelect;

    public static FieldContract $fieldContract;
}
