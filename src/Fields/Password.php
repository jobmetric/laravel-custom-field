<?php

namespace JobMetric\CustomField\Fields;

use JobMetric\CustomField\Attribute\HasPlaceholder;
use JobMetric\CustomField\Contracts\FieldContract;

class Password implements FieldContract
{
    use BaseField,
        HasPlaceholder;

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
