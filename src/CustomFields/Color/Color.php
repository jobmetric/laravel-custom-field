<?php

namespace JobMetric\CustomField\CustomFields\Color;

use JobMetric\CustomField\Attribute\HasHeight;
use JobMetric\CustomField\Attribute\HasWidth;
use JobMetric\CustomField\Contracts\FieldContract;
use JobMetric\CustomField\Core\BaseCustomField;

class Color extends BaseCustomField implements FieldContract
{
    use HasWidth, HasHeight;

    /**
     * Get the type of the field.
     *
     * @return string
     */
    public static function type(): string
    {
        return 'color';
    }
}
