<?php

namespace JobMetric\CustomField\FieldBuilder;

use JobMetric\CustomField\Fields\Time;

trait BuilderTime
{
    /**
     * Time field
     *
     * @return Time
     */
    public static function time(): Time
    {
        self::$fieldContract = new Time;

        return self::$fieldContract;
    }
}

