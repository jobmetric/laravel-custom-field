<?php

namespace JobMetric\CustomField\Fields;

class Month implements FieldContract
{
    use BaseField;

    /**
     * get the type of the field
     *
     * @return string
     */
    private function type(): string
    {
        return 'month';
    }
}
