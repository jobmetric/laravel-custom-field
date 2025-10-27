<?php

namespace JobMetric\CustomField\Fields;

use JobMetric\CustomField\Contracts\FieldContract;
use JobMetric\CustomField\Option\HasOption;
use JobMetric\CustomField\Property\HasMultiple;

class Radio implements FieldContract
{
    use BaseField,
        HasOption,
        HasMultiple;

    /**
     * get the type of the field
     *
     * @return string
     */
    private function type(): string
    {
        return 'radioAndCheckbox';
    }
}
