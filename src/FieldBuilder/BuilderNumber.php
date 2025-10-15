<?php

namespace JobMetric\CustomField\FieldBuilder;

use JobMetric\CustomField\Fields\Number;

trait BuilderNumber
{
    /**
     * Number field
     *
     * @return Number
     */
    public static function number(): Number
    {
        self::$fieldContract = new Number;

        return self::$fieldContract;
    }
}
