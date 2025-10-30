<?php

namespace JobMetric\CustomField\CustomFields\Select;

use JobMetric\CustomField\Attribute\HasPlaceholder;
use JobMetric\CustomField\Contracts\FieldContract;
use JobMetric\CustomField\Core\BaseCustomField;
use JobMetric\CustomField\Option\HasOption;
use JobMetric\CustomField\Property\HasMultiple;

class Select extends BaseCustomField implements FieldContract
{
    use HasOption, HasPlaceholder, HasMultiple;

    /**
     * Get the type of the field.
     *
     * @return string
     */
    public static function type(): string
    {
        return 'select';
    }
}
