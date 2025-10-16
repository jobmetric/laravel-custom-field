<?php

namespace JobMetric\CustomField\Fields;

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
