<?php

namespace JobMetric\CustomField\Fields;

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
