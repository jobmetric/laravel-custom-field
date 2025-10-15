<?php

namespace JobMetric\CustomField\Fields;

use JobMetric\CustomField\Attribute\HasClass;
use JobMetric\CustomField\Attribute\HasId;
use JobMetric\CustomField\Attribute\HasMax;
use JobMetric\CustomField\Attribute\HasMin;
use JobMetric\CustomField\Attribute\HasName;
use JobMetric\CustomField\Attribute\HasValue;


class Range implements FieldContract
{
    use BaseField,
        HasValue,
        HasClass,
        HasName,
        HasMin,
        HasMax,
        HasId;



    /**
     * get the type of the field
     *
     * @return string
     */
    private function type(): string
    {
        return 'range';
    }
    public function beForBuild(): void
    {
        $this->class("form-range");
    }
}
