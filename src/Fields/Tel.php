<?php

namespace JobMetric\CustomField\Fields;

use JobMetric\CustomField\Attribute\HasClass;
use JobMetric\CustomField\Attribute\HasId;
use JobMetric\CustomField\Attribute\HasName;
use JobMetric\CustomField\Attribute\HasPattern;
use JobMetric\CustomField\Attribute\HasPlaceholder;
use JobMetric\CustomField\Attribute\HasValue;

class Tel implements FieldContract
{
    use BaseField,
        HasName,
        HasValue,
        HasPattern,
        HasPlaceholder,
        HasClass,
        HasId;

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
