<?php

namespace JobMetric\CustomField\Fields;

use JobMetric\CustomField\Attribute\HasId;
use JobMetric\CustomField\Attribute\HasName;
use JobMetric\CustomField\Attribute\HasValue;


class Month implements FieldContract
{
    use BaseField,
        HasName,
        HasValue,
        HasId;



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
