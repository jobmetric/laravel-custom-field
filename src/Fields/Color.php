<?php

namespace JobMetric\CustomField\Fields;

use JobMetric\CustomField\Attribute\HasHeight;
use JobMetric\CustomField\Attribute\HasId;
use JobMetric\CustomField\Attribute\HasName;
use JobMetric\CustomField\Attribute\HasValue;
use JobMetric\CustomField\Attribute\HasWidth;

class Color implements FieldContract
{
    use BaseField,
        HasWidth,
        HasHeight,
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
