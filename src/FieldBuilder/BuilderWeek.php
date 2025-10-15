<?php

namespace JobMetric\CustomField\FieldBuilder;

use JobMetric\CustomField\Fields\Week;

trait BuilderWeek
{
    /**
     * Week field
     *
     * @return Week
     */
    public static function week(): Week
    {
        self::$fieldContract = new Week;

        return self::$fieldContract;
    }
}

