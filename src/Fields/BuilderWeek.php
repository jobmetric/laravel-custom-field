<?php

namespace JobMetric\CustomField\Fields;

trait BuilderWeek
{
    /**
     * Week field
     *
     * @return week
     */
    public static function week(): week
    {
        self::$fieldContract = new Week;

        return self::$fieldContract;
    }
}

