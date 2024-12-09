<?php

namespace JobMetric\CustomField;

use Exception;
use JobMetric\CustomField\Fields\FieldContract;
use JobMetric\CustomField\Fields\Number;
use JobMetric\CustomField\Fields\Select;
use JobMetric\CustomField\Fields\Text;

class FieldFactory
{
    /**
     * Create a field instance based on the type
     *
     * @param string $type
     * @return FieldContract
     * @throws Exception
     */
    public static function create(string $type): FieldContract
    {
        return match ($type) {
            'number' => new Number,
            'text' => new Text,
            'select' => new Select,
            default => throw new Exception("Unsupported field type: $type"),
        };
    }
}
