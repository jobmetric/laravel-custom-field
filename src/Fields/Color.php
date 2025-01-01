<?php

namespace JobMetric\CustomField\Fields;

use JobMetric\CustomField\Attribute\HasId;
use JobMetric\CustomField\Attribute\HasName;
use JobMetric\CustomField\Attribute\HasValue;


class Color implements FieldContract
{
    use BaseField,
        HasValue,
        HasName,
        HasId;



    /**
     * get the type of the field
     *
     * @return string
     */
    private function type(): string
    {
        return 'color';
    }
}
