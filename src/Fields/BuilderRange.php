<?php

namespace JobMetric\CustomField\Fields;

trait BuilderRange
{
    /**
     * Range field
     *
     * @return range
     */
    public static function range(): range
    {
        self::$fieldContract = new Range;

        return self::$fieldContract;
    }
    
}
