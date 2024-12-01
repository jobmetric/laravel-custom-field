<?php

namespace JobMetric\CustomField\Fields;

trait BuilderNumber
{
    /**
     * Number field
     *
     * @return Number
     */
    public static function number(): Number
    {
        self::$fieldContract = new Number;

        return self::$fieldContract;
    }
}
