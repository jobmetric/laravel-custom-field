<?php

namespace JobMetric\CustomField\Fields;

use JobMetric\CustomField\Attribute\HasPattern;
use JobMetric\CustomField\Attribute\HasPlaceholder;
use JobMetric\CustomField\Contracts\FieldContract;

class Tel implements FieldContract
{
    use BaseField,
        HasPattern,
        HasPlaceholder;

    /**
     * get the type of the field
     *
     * @return string
     */
    private function type(): string
    {
        return 'tel';
    }
}
