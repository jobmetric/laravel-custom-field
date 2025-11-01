<?php

namespace JobMetric\CustomField\CustomFields\Radio;

use JobMetric\CustomField\Contracts\FieldContract;
use JobMetric\CustomField\Core\BaseCustomField;
use JobMetric\CustomField\Option\HasOption;
use JobMetric\CustomField\Property\HasMultiple;

class Radio extends BaseCustomField implements FieldContract
{
    use HasOption, HasMultiple;

    /**
     * Get the type of the field.
     *
     * @return string
     */
    public static function type(): string
    {
        return 'radio';
    }
}

