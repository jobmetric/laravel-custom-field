<?php

namespace JobMetric\CustomField\Fields;

trait BuilderSelect
{
    /**
     * Select field
     *
     * @return Select
     */
    public static function select(): Select
    {
        self::$fieldContract = new Select;

        return self::$fieldContract;
    }
}
