<?php

namespace JobMetric\CustomField\Fields;

trait BuilderDate
{
    /**
     * Date field
     *
     * @return date
     */
    public static function date(): date
    {
        self::$fieldContract = new Date;

        return self::$fieldContract;
    }
}

