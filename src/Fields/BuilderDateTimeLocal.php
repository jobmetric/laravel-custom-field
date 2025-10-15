<?php

namespace JobMetric\CustomField\Fields;

trait BuilderDateTimeLocal
{
    /**
     * DateTimeLocal field
     *
     * @return dateTimeLocal
     */
    public static function dateTimeLocal(): dateTimeLocal
    {
        self::$fieldContract = new DateTimeLocal;

        return self::$fieldContract;
    }
}