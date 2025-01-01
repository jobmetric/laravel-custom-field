<?php

namespace JobMetric\CustomField;

use Exception;
use JobMetric\CustomField\Fields\Color;
use JobMetric\CustomField\Fields\Date;
use JobMetric\CustomField\Fields\DateTimeLocal;
use JobMetric\CustomField\Fields\Email;
use JobMetric\CustomField\Fields\FieldContract;
use JobMetric\CustomField\Fields\Hidden;
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
            'hidden' => new Hidden,
            'date'=> new Date,
            'datetime-local'=> new DateTimeLocal,
            'color'=> new Color,
            'email'=> new Email,
            default => throw new Exception("Unsupported field type: $type"),
        };
    }
}
