<?php

namespace JobMetric\CustomField\Fields;

use JobMetric\CustomField\Attribute\HasPlaceholder;
use JobMetric\CustomField\Option\HasOption;
use JobMetric\CustomField\Property\HasMultiple;

class Select implements FieldContract
{
    use BaseField,
        HasOption,
        HasPlaceholder,
        HasMultiple;

    /**
     * get the type of the field
     *
     * @return string
     */
    private function type(): string
    {
        return 'select';
    }
}
