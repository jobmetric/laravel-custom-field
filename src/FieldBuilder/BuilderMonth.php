<?php

namespace JobMetric\CustomField\FieldBuilder;

use JobMetric\CustomField\Fields\Month;

trait BuilderMonth
{
    /**
     * Month field
     *
     * @return Month
     */
    public static function month(): Month
    {
        self::$fieldContract = new Month;

        return self::$fieldContract;
    }
}

