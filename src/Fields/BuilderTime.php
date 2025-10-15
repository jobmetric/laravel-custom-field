<?php

namespace JobMetric\CustomField\Fields;

trait BuilderTime
{
    /**
     * Time field
     *
     * @return time
     */
    public static function time(): time
    {
        self::$fieldContract = new Time;

        return self::$fieldContract;
    }
}

