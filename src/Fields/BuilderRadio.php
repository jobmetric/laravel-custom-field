<?php

namespace JobMetric\CustomField\Fields;

trait BuilderRadio
{
    /**
     * Radio field
     *
     * @return radio
     */
    public static function radio(): radio
    {
        self::$fieldContract = new Radio;

        return self::$fieldContract;
    }
}

