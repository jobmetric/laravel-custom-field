<?php

namespace JobMetric\CustomField\CustomFields\Range;

use JobMetric\CustomField\Attribute\HasMax;
use JobMetric\CustomField\Attribute\HasMin;
use JobMetric\CustomField\Contracts\FieldContract;
use JobMetric\CustomField\Core\BaseCustomField;

class Range extends BaseCustomField implements FieldContract
{
    use HasMin, HasMax;

    /**
     * Get the type of the field.
     *
     * @return string
     */
    public static function type(): string
    {
        return 'range';
    }

    public function beforeBuild(): void
    {
        $this->class('form-range');
    }
}

