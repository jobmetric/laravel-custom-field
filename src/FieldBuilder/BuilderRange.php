<?php

namespace JobMetric\CustomField\FieldBuilder;

use JobMetric\CustomField\Fields\Range;

trait BuilderRange
{
    /**
     * Range field
     *
     * @return Range
     */
    public static function range(): Range
    {
        self::$fieldContract = new Range;

        return self::$fieldContract;
    }

}
