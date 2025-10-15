<?php

namespace JobMetric\CustomField\FieldBuilder;

use JobMetric\CustomField\Fields\Date;

trait BuilderDate
{
    /**
     * Date field
     *
     * @return Date
     */
    public static function date(): Date
    {
        self::$fieldContract = new Date;

        return self::$fieldContract;
    }
}

