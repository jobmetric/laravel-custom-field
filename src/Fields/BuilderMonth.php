<?php

namespace JobMetric\CustomField\Fields;

trait BuilderMonth
{
    /**
     * Date field
     *
     * @return month
     */
    public static function month(): month
    {
        self::$fieldContract = new Date;

        return self::$fieldContract;
    }
}

