<?php

namespace JobMetric\CustomField\FieldBuilder;

use JobMetric\CustomField\Fields\DateTimeLocal;

trait BuilderDateTimeLocal
{
    /**
     * DateTimeLocal field
     *
     * @return DateTimeLocal
     */
    public static function dateTimeLocal(): DateTimeLocal
    {
        self::$fieldContract = new DateTimeLocal;

        return self::$fieldContract;
    }
}
