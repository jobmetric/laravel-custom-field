<?php

namespace JobMetric\CustomField\Fields;

class Hidden implements FieldContract
{
    use BaseField;

    /**
     * get the type of the field
     *
     * @return string
     */
    private function type(): string
    {
        return 'hidden';
    }
}
