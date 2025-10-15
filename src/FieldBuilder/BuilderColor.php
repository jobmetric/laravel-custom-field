<?php

namespace JobMetric\CustomField\FieldBuilder;

use JobMetric\CustomField\Fields\Color;

trait BuilderColor
{
    /**
     * Color field
     *
     * @return Color
     */
    public static function color(): Color
    {
        self::$fieldContract = new Color;

        return self::$fieldContract;
    }
}
