<?php

namespace JobMetric\CustomField\Fields;

use JobMetric\CustomField\Attribute\HasId;
use JobMetric\CustomField\Attribute\HasName;


class Date implements FieldContract
{
    use BaseField,
        HasName,
        HasId;



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
