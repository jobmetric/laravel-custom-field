<?php

namespace JobMetric\CustomField\Fields;

trait BuilderColor
{
    /**
     * Color field
     *
     * @return color
     */
    public static function color(): color
    {
        self::$fieldContract = new Color;

        return self::$fieldContract;
    }
}
