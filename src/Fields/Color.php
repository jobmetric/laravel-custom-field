<?php

namespace JobMetric\CustomField\Fields;

use JobMetric\CustomField\Attribute\HasHeight;
use JobMetric\CustomField\Attribute\HasWidth;
use JobMetric\CustomField\Contracts\FieldContract;

class Color implements FieldContract
{
    use BaseField,
        HasWidth,
        HasHeight;

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
