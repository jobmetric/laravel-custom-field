<?php

namespace JobMetric\CustomField\Builder;

use JobMetric\CustomField\Fields\Input;

trait BuilderInput
{
    /**
     * Input field
     *
     * @return Input
     */
    public static function input(): Input
    {
        self::$fieldContract = new Input;

        return self::$fieldContract;
    }
}
