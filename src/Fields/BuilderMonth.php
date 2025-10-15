<?php

namespace JobMetric\CustomField\Fields;

trait BuilderMonth
{
    /**
     * Month field
     *
     * @return month
     */
    public static function month(): month
    {
        self::$fieldContract = new Month;

        return self::$fieldContract;
    }
}

