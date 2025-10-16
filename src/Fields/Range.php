<?php

namespace JobMetric\CustomField\Fields;

use JobMetric\CustomField\Attribute\HasMax;
use JobMetric\CustomField\Attribute\HasMin;

class Range implements FieldContract
{
    use BaseField,
        HasMin,
        HasMax;

    /**
     * get the type of the field
     *
     * @return string
     */
    private function type(): string
    {
        return 'range';
    }

    public function beforeBuild(): void
    {
        $this->class("form-range");
    }
}
