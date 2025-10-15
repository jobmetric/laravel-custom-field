<?php

namespace JobMetric\CustomField\FieldBuilder;

use JobMetric\CustomField\Fields\Radio;

trait BuilderRadio
{
    /**
     * Radio field
     *
     * @return Radio
     */
    public static function radio(): Radio
    {
        self::$fieldContract = new Radio;

        return self::$fieldContract;
    }
}

