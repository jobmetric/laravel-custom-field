<?php

namespace JobMetric\CustomField\Fields;

use JobMetric\CustomField\Attribute\HasId;
use JobMetric\CustomField\Attribute\HasName;
use JobMetric\CustomField\Attribute\HasPlaceholder;
use JobMetric\CustomField\Attribute\HasValue;

class Password implements FieldContract
{
    use BaseField,
        HasPlaceholder,
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
        return 'password';
    }
}
