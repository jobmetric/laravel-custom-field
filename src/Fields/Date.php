<?php

namespace JobMetric\CustomField\Fields;

use JobMetric\CustomField\Contracts\FieldContract;

class Date implements FieldContract
{
    use BaseField;

    /**
     * get the type of the field
     *
     * @return string
     */
    private function type(): string
    {
        return 'date';
    }
}
