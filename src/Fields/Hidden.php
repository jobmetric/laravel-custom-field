<?php

namespace JobMetric\CustomField\Fields;

use JobMetric\CustomField\Contracts\FieldContract;

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
