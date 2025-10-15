<?php

namespace JobMetric\CustomField\Fields;

use JobMetric\CustomField\Attribute\HasClass;
use JobMetric\CustomField\Attribute\HasId;
use JobMetric\CustomField\Attribute\HasName;
use JobMetric\CustomField\Attribute\HasValue;


class Date implements FieldContract
{
    use BaseField,
        HasName,
        HasValue,
        HasClass,
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
