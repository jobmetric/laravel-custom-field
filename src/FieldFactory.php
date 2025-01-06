<?php

namespace JobMetric\CustomField;

use Exception;
use JobMetric\CustomField\Fields\Color;
use JobMetric\CustomField\Fields\Date;
use JobMetric\CustomField\Fields\Image;
use JobMetric\CustomField\Fields\Password;
use JobMetric\CustomField\Fields\DateTimeLocal;
use JobMetric\CustomField\Fields\Email;
use JobMetric\CustomField\Fields\FieldContract;
use JobMetric\CustomField\Fields\Hidden;
use JobMetric\CustomField\Fields\Month;
use JobMetric\CustomField\Fields\Number;
use JobMetric\CustomField\Fields\Radio;
use JobMetric\CustomField\Fields\Range;
use JobMetric\CustomField\Fields\Select;
use JobMetric\CustomField\Fields\Tel;
use JobMetric\CustomField\Fields\Text;
use JobMetric\CustomField\Fields\Time;
use JobMetric\CustomField\Fields\Week;


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
            'month'=> new Month,
            'range'=> new Range,
            'week'=> new Week,
            'time'=> new Time,
            'password'=> new Password,
            'email'=> new Email,
            'tel'=> new Tel,
            'radioAndCheckbox'=> new Radio,
            'image'=> new Image,
            default => throw new Exception("Unsupported field type: $type"),
        };
    }
}
