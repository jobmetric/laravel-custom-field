<?php

namespace JobMetric\CustomField\Fields;

use JobMetric\CustomField\Attribute\HasPlaceholder;

class Number implements FieldContract
{
    use BaseField,
        HasPlaceholder;

    /**
     * get the type of the field
     *
     * @return string
     */
    private function type(): string
    {
        return 'number';
    }
}
